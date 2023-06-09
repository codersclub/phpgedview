<?php
/**
 * User Account Edit Interface.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2022  PGV Development Team.  All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package PhpGedView
 * @subpackage Admin
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'edituser.php');
require './config.php';
require PGV_ROOT.'includes/functions/functions_print_lists.php';
require PGV_ROOT.'includes/functions/functions_edit.php';

// prevent users with editing account disabled from being able to edit their account
if (get_user_setting(PGV_USER_ID, 'editaccount')!='Y') {
	header('Location: index.php?ctype=user');
	exit;
}

// Load language variables
loadLangFile('pgv_confighelp, pgv_admin, pgv_editor');

// Valid values for form variables
$ALL_ACTIONS=array('update');
if ($PGV_STORE_MESSAGES) {
	$ALL_CONTACT_METHODS=array('messaging', 'messaging2', 'messaging3', 'none');
} else {
	$ALL_CONTACT_METHODS=array('messaging3', 'none');
}
$ALL_DEFAULT_TABS=array(0=>'personal_facts', 1=>'notes', 2=>'ssourcess', 3=>'media', 4=>'relatives', -1=>'all', -2=>'lasttab');
$ALL_THEMES_DIRS=array();
foreach (get_theme_names() as $themename=>$themedir) {
	$ALL_THEME_DIRS[]=$themedir;
}

// Extract form variables
$form_action		 =safe_POST('form_action'   );
$form_username  	 =safe_POST('form_username',       PGV_REGEX_USERNAME);
$form_firstname 	 =safe_POST('form_firstname');
$form_lastname  	 =safe_POST('form_lastname' );
$form_pass1 		 =safe_POST('form_pass1',          PGV_REGEX_PASSWORD);
$form_pass2 		 =safe_POST('form_pass2',          PGV_REGEX_PASSWORD);
$form_email 		 =safe_POST('form_email',          PGV_REGEX_EMAIL,               'email@example.com');
$form_rootid		 =safe_POST('form_rootid',         PGV_REGEX_XREF,                PGV_USER_ROOT_ID   );
$form_theme 		 =safe_POST('form_theme',          $ALL_THEME_DIRS,               $THEME_DIR         );
$form_language  	 =safe_POST('form_language',       array_keys($pgv_language),     $LANGUAGE          );
$form_contact_method=safe_POST('form_contact_method', $ALL_CONTACT_METHODS,          $CONTACT_METHOD    );
$form_default_tab   =safe_POST('form_default_tab',    array_keys($ALL_DEFAULT_TABS), $GEDCOM_DEFAULT_TAB);
$form_visible_online=safe_POST('form_visible_online', 'Y', 'N');

// Respond to form action
if ($form_action=='update') {
	$errorMessage = "";

	$faultyName = str_replace(array('&', '#', '<', '>'), array('&amp;', '&num;', '&lt;', '&gt;'), $form_username);	// Sanitize the possibly faulty name

	if (empty($form_username)) {
		// the safe_POST() function above could have emptied the input username
		$errorMessage .=  str_replace('#username#', $faultyName, $pgv_lang['invalid_username']).'<br />';
	} else {

##		// ASCII version
##		$alphabet = getAlphabet()."_-.· ";		// Full-stop and Catalan middle dot are OK. Should a space be allowed here?
##		$length = strlen($form_username);
##		for ($i=0; $i<$length; $i++) {
##			if (strpos($alphabet, $form_username[$i])===false) {
##				// This character isn't in the alphabet
##				$errorMessage .=  str_replace('#username#', $faultyName, $pgv_lang['invalid_username']).'<br />';
##				break;
##			}
##		}

		// UTF-8 version
		$alphabet = getAlphabet('_-.· ', true);		// Full-stop and Catalan middle dot are OK. Should a space be allowed here?
		$userName = UTF8_str_split($form_username);		// Make this an array of UTF-8 characters
		$length = UTF8_strlen($userName);
		for ($i=0; $i<$length; $i++) {
			if (UTF8_strpos($alphabet, $userName[$i])===false) {
				// This character isn't in the alphabet
				$errorMessage .=  str_replace('#username#', $faultyName, $pgv_lang['invalid_username']).'<br />';
				break;
			}
		}

		unset ($alphabet, $userName);		// Let's be nice, and release the large amount of memory used by these
	}

	if ($form_username!=PGV_USER_NAME) {
		// User name change
		$newID = get_user_id($form_username);
		if (!empty($newID)) {
			$errorMessage .= str_replace('#username#', $faultyName, $pgv_lang['duplicate_username']).'<br />';
		}
	}

	if ($form_pass1 != $form_pass2) {
		$errorMessage .= $pgv_lang['password_mismatch'].'<br />' ;
	}

	if (!empty($form_email)) {
		// e-mail address change
		$validEmail = validEmail($form_email);
		if ($validEmail !== true) {
			// Something is wrong with the e-mail address
			$emailAddr = $form_email;
			if (!$PGV_SIMPLE_MAIL) {
				$fullName = "{$form_firstname} {$form_lastname}";
				if ($NAME_REVERSE) $fullName = "{$form_lastname} {$form_firstname}";
				$emailAddr = "{$fullName} <{$form_email}>";
			}
			$emailAddr = str_replace(array('&', '<', '>'), array('&amp;', '&lt;', '&gt;'), $emailAddr);		// Sanitize that address
			if ($validEmail === false) $errorMessage = $pgv_lang["email_invalid"];
			else $errorMessage .= str_replace('#email#', $emailAddr, $validEmail).'<br />' ;		// We have a message from the e-mail validation routine
		}
	}

	if (!empty($errorMessage)) {
		// A basic validity check failed: Let the user know
		print_header($pgv_lang['user_admin']);
		echo "<span class='error'>{$errorMessage}</span>";
		exit;
	}
	// The basic checks passed: Let's update the various records

	// Change password
	if (!empty($form_pass1)) {
		AddToLog('User changed password');
		set_user_password(PGV_USER_ID, crypt($form_pass1, PGV_SALT));
	}
	$old_firstname=get_user_setting(PGV_USER_ID, 'firstname');
	$old_lastname =get_user_setting(PGV_USER_ID, 'lastname');
	$old_email	 =get_user_setting(PGV_USER_ID, 'email');
	// Change other settings
	set_user_setting(PGV_USER_ID, 'firstname',     $form_firstname);
	set_user_setting(PGV_USER_ID, 'lastname',      $form_lastname);
	set_user_setting(PGV_USER_ID, 'email',         $form_email);
	set_user_setting(PGV_USER_ID, 'theme',         $form_theme);
	set_user_setting(PGV_USER_ID, 'language',      $form_language);
	set_user_setting(PGV_USER_ID, 'contactmethod', $form_contact_method);
	set_user_setting(PGV_USER_ID, 'visibleonline', $form_visible_online);
	set_user_setting(PGV_USER_ID, 'defaulttab',    $form_default_tab);
	set_user_gedcom_setting(PGV_USER_ID, PGV_GED_ID, 'rootid', $form_rootid);

	// update gedcom record with new email address
	if (get_user_setting(PGV_USER_ID, 'sync_gedcom')=='Y') {
		if ($form_email!=$old_email) {
			foreach (get_all_gedcoms() as $ged_id=>$ged_name) {
				$myid=get_user_gedcom_setting(PGV_USER_ID, $ged_id, 'gedcomid');
				if ($myid) {
					$OLDGEDCOM=$GEDCOM;
					$GEDCOM=$ged_name;
					$person=Person::getInstance($myid);
					if ($person) {
						if (preg_match('/\d _?EMAIL/', $person->getGedcomRecord())) {
							replace_gedrec($myid, preg_replace("/(\n\d _?EMAIL).*/", '$1 '.$form_email, $person->getGedcomRecord()));
						} else {
							replace_gedrec($myid, $person->getGedcomRecord()."\n1 EMAIL ".$form_email);
						}
					}
					$GEDCOM=$OLDGEDCOM;
				}
			}
		}
		if ($form_firstname!=$old_firstname || $form_lastname!=$old_lastname) {
			// update gedcom record with new name
			// Is this functionality required?
		}
	}

	// Change username
	if ($form_username!=PGV_USER_NAME) {
		AddToLog('User renamed to ->'.$form_username.'<-');
		rename_user(PGV_USER_NAME, $form_username);
		$_SESSION['pgv_user']=get_user_id($form_username);
	}

	// Reload page to pick up changes such as theme and user_id
	header('Location: edituser.php');
	exit;
}

// ---------------------------- Display the form

print_header($pgv_lang['user_admin']);

if ($ENABLE_AUTOCOMPLETE) require PGV_ROOT.'js/autocomplete.js.htm';

// Form validation
?>
<script language="JavaScript" type="text/javascript">
<!--
function toggleVizPW(whichForm, whichField) {
	// This script should really be in the general script file, /js/phpgedview.js
	// but we don't want to load the whole works just for this one seldom-used script.
	var frm = document[whichForm];
	var field = frm[whichField];
	if (field.type === "password") field.type = "text";
	else field.type = "password";
}

function checkform(frm) {
	if (frm.form_username.value=="") {
		alert("<?php echo $pgv_lang['enter_username']; ?>");
		frm.form_username.focus();
		return false;
	}
	if ((frm.pass1.value!="") && (frm.pass1.value.length<6)) {
		alert("<?php echo $pgv_lang['passwordlength']; ?>");
		frm.pass1.value = "";
		frm.pass2.value = "";
		frm.form_pass1.focus();
		return false;
	}
	if (frm.form_pass1.value != frm.form_pass2.value) {
		alert("<?php echo $pgv_lang['password_mismatch']; ?>");
		frm.pass1.value = "";
		frm.pass2.value = "";
		frm.form_pass1.focus();
		return false;
	}
	if ((frm.firstname.value=="") || (frm.lastname.value=="")) {
		alert("<?php echo $pgv_lang['enter_fullname']; ?>");
		frm.form_firstname.focus();
		return false;
	}
	if (frm.form_email.value.indexOf("@")==-1) {
		alert("<?php echo $pgv_lang['enter_email']; ?>");
		frm.user_email.focus();
		return false;
	}
	return true;
}
var pastefield;
function paste_id(value) {
	pastefield.value=value;
}
-->
</script>
<?php

// show the form to edit a user account details
$tab = 1;
echo '<form name="editform" method="post" action="" onsubmit="return checkform(this);">';
echo '<input type="hidden" name="form_action" value="update" />';
echo '<table class="list_table center ', $TEXT_DIRECTION, '">';

echo '<tr><td class="topbottombar" colspan="2"><h2>', $pgv_lang['editowndata'], '</h2></td></tr>';

echo '<tr><td class="topbottombar" colspan="2"><input type="submit" tabindex="', $tab++, '" value="', $pgv_lang['save'], '" /></td></tr>';

echo '<tr><td class="descriptionbox width20 wrap">';
echo print_help_link('edituser_username_help', 'qm', '', false, true);
echo $pgv_lang['username'], '</td><td class="optionbox">';
echo '<input type="text" name="form_username" tabindex="', $tab++, '" value="', PGV_USER_NAME, '" />';
echo '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_password_help', 'qm', '', false, true);
echo $pgv_lang['password'], '</td><td class="optionbox">';
echo '<input type="password" name="form_pass1" tabindex="', $tab++, '" /> ';
echo '&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="toggleVizPW(\'editform\', \'form_pass1\'); toggleVizPW(\'editform\', \'form_pass2\')" />', $pgv_lang["show"];
echo '<br />', $pgv_lang['leave_blank'], '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_conf_password_help', 'qm', '', false, true);
echo $pgv_lang['confirm'], '</td><td class="optionbox">';
echo '<input type="password" name="form_pass2" tabindex="', $tab++, '" /></td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_firstname_help', 'qm', '', false, true);
echo $pgv_lang['firstname'], '</td><td class="optionbox">';
echo '<input type="text" name="form_firstname" tabindex="', $tab++, '" value="', get_user_setting(PGV_USER_ID, 'firstname'), '" />';
echo '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_lastname_help', 'qm', '', false, true);
echo $pgv_lang['lastname'], '</td><td class="optionbox">';
echo '<input type="text" name="form_lastname" tabindex="', $tab++, '" value="', get_user_setting(PGV_USER_ID, 'lastname'), '" />';
echo '</td></tr>';

$person=Person::getInstance(PGV_USER_GEDCOM_ID);
if ($person) {
	echo '<tr><td class="descriptionbox wrap">';
	echo print_help_link("edituser_gedcomid_help", "qm", '', false, true);
	echo $pgv_lang['gedcomid'], '</td><td class="optionbox">';
	echo $person->format_list('span');
	echo '</td></tr>';
}

$person=Person::getInstance(PGV_USER_ROOT_ID);
echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_rootid_help', 'qm', '', false, true);
echo $pgv_lang['rootid'], '</td><td class="optionbox">';
echo '<input type="text" name="form_rootid" id="rootid" tabindex="', $tab++, '" value="', PGV_USER_ROOT_ID, '" />';
echo print_findindi_link('rootid', '', true), '<br/>';
if ($person) {
	echo $person->format_list('span');
}
echo '</td></tr>';

if ($ENABLE_MULTI_LANGUAGE) {
	echo "<tr><td class='descriptionbox wrap'>";
	echo print_help_link('edituser_change_lang_help', 'qm', '', false, true);
	echo "{$pgv_lang['change_lang']}</td><td class='optionbox' valign='top'>";
	echo "<select name='form_language' tabindex='{$tab}'>";
	foreach ($pgv_language as $key=> $value) {
		if ($language_settings[$key]["pgv_lang_use"]) {
			echo "<option value='{$key}'";
			if ($key==get_user_setting(PGV_USER_ID, 'language')) {
				echo " selected='selected'";
			}
			echo ">{$language_settings[$key]['pgv_lang_self']}</option>";
		}
	}
	echo '</select></td></tr>';
	$tab++;		// the construct {$tab++} is not allowed -- see above
}

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_email_help', 'qm', '', false, true);
echo $pgv_lang['emailadress'], '</td><td class="optionbox" valign="top">';
echo '<input type="text" name="form_email" tabindex="', $tab++, '" value="', get_user_setting(PGV_USER_ID, 'email'), '" size="50" /></td></tr>';

if ($ALLOW_USER_THEMES) {
	echo '<tr><td class="descriptionbox wrap">';
	echo print_help_link('edituser_user_theme_help', 'qm', '', false, true);
	echo $pgv_lang['user_theme'], '</td><td class="optionbox" valign="top">';
	echo '<select name="form_theme" tabindex="', $tab++, '">';
		echo '<option value="">', $pgv_lang['site_default'], '</option>';
		foreach (get_theme_names() as $themename=>$themedir) {
			echo '<option value="', $themedir, '"';
			if ($themedir==get_user_setting(PGV_USER_ID, 'theme')) {
				echo ' selected="selected"';
			}
			echo '>', $themename, '</option>';
		}
		echo '</select></td></tr>';
}

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_user_contact_help', 'qm', '', false, true);
echo $pgv_lang['user_contact_method'], '</td><td class="optionbox">';
echo '<select name="form_contact_method" tabindex="', $tab++, '">';
$currentMethod = get_user_setting(PGV_USER_ID, 'contactmethod');
foreach ($ALL_CONTACT_METHODS as $key=>$value) {
	echo '<option value="', $value, '"';
	if ($value==$currentMethod) {
		echo ' selected="selected"';
	}
	echo '>', $pgv_lang[$value], '</option>';
}
echo '</select></td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('useradmin_visibleonline_help', 'qm', '', false, true);
echo $pgv_lang['visibleonline'], '</td><td class="optionbox">';
echo '<input type="checkbox" name="form_visible_online" tabindex="', $tab++, '" value="Y"';
if (get_user_setting(PGV_USER_ID, 'visibleonline')=='Y') {
	echo ' checked="checked"';
}
echo ' /></td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link("edituser_user_default_tab_help", "qm", '', false, true);
echo $pgv_lang['user_default_tab'], '</td><td class="optionbox">';
echo '<select name="form_default_tab" tabindex="', $tab++, '">';
foreach ($ALL_DEFAULT_TABS as $key=>$value) {
	echo '<option value="', $key,'"';
	if ($key==get_user_setting(PGV_USER_ID, 'defaulttab')) {
		echo ' selected="selected"';
	}
	echo '>', $pgv_lang[$value], '</option>';
}
echo '</select></td></tr>';

echo '<tr><td class="topbottombar" colspan="2"><input type="submit" tabindex="', $tab++, '" value="', $pgv_lang['save'], '" /></td></tr>';

echo '</table></form>';

print_footer();
?>

<?php
/**
 * Register as a new User or request new password if it is lost
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
 * This Page Is Valid XHTML 1.0 Transitional! > 29 August 2005
 *
 * @package PhpGedView
 * @subpackage Admin
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'login_register.php');
require './config.php';

loadLangFile('pgv_confighelp');

$action 		 =safe_POST('action');
if (empty($action)) $action = safe_GET('action');
$user_firstname =safe_POST('user_firstname');
$user_lastname  =safe_POST('user_lastname');
$url			 =safe_POST('url',             PGV_REGEX_URL, 'index.php');
$time   		 =safe_POST('time');
$user_name  	 =safe_POST('user_name',       PGV_REGEX_USERNAME);
if (empty($user_name)) $user_name = safe_GET('user_name', PGV_REGEX_USERNAME);
$user_email 	 =safe_POST('user_email',      PGV_REGEX_EMAIL);
$user_password01=safe_POST('user_password01', PGV_REGEX_PASSWORD);
$user_password02=safe_POST('user_password02', PGV_REGEX_PASSWORD);
$user_language  =safe_POST('user_language');
$user_gedcomid  =safe_POST('user_gedcomid');
$user_comments  =safe_POST('user_comments');
$user_password  =safe_POST('user_password');
$user_hashcode  =safe_POST('user_hashcode');
if (empty($user_hashcode)) $user_hashcode = safe_GET('user_hashcode');

$message="";

switch ($action) {
	case "pwlost" :
		print_header($pgv_lang['lost_pw_reset']);
		?>
		<script language="JavaScript" type="text/javascript">
		<!--
			function checkform(frm) {
				/*
				if (frm.user_email.value == "") {
					alert("<?php print $pgv_lang['enter_email']; ?>");
					frm.user_email.focus();
					return false;
				}
				*/
				return true;
			}
		//-->
		</script>
		<div class="center">
			<form name="requestpwform" action="login_register.php" method="post" onsubmit="t = new Date(); document.requestpwform.time.value=t.toUTCString(); return checkform(this);">
			<input type="hidden" name="time" value="" />
			<input type="hidden" name="action" value="requestpw" />
			<span class="warning"><?php print $message?></span>
			<table class="center facts_table width25">
				<tr><td class="topbottombar" colspan="2"><?php print_help_link("pls_note11", "qm", "lost_pw_reset"); print $pgv_lang["lost_pw_reset"];?></td></tr>
				<tr><td class="descriptionbox wrap <?php print $TEXT_DIRECTION; ?>"><?php print $pgv_lang["username"]?></td><td class="optionbox <?php print $TEXT_DIRECTION; ?>"><input type="text" name="user_name" value="" /></td></tr>
				<tr><td class="topbottombar" colspan="2"><input type="submit" value="<?php print $pgv_lang["lost_pw_reset"]; ?>" /></td></tr>
			</table>
			</form>
		</div>
		<script language="JavaScript" type="text/javascript">
			document.requestpwform.user_name.focus();
		</script>
		<?php
		break;

	case "requestpw" :
		$QUERY_STRING = "";
		print_header($pgv_lang['lost_pw_reset']);
		print "<div class=\"center\">";
		$user_id=get_user_id($user_name);
		if (!$user_id) {
			AddToLog("New password request for user {$user_name} that does not exist");
			print "<span class=\"warning\">";
			print_text("user_not_found");
			print "</span><br />";
		} else {
			if (get_user_setting($user_id, 'email')=='') {
				AddToLog("Unable to send password to user {$user_name} because they do not have an email address");
				print "<span class=\"warning\">";
				print_text("user_not_found");
				print "</span><br />";
			} else {
				$passchars = "abcdefghijklmnopqrstuvqxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				$user_new_pw = "";
				$max = strlen($passchars)-1;
				for($i=0; $i<8; $i++) {
					$index = rand(0,$max);
					$user_new_pw .= $passchars[$index];
				}

				set_user_password($user_id, crypt($user_new_pw, PGV_SALT));
				set_user_setting($user_id, 'pwrequested', 1);

				// switch language to user settings
				$oldLanguage = $LANGUAGE;
				if ($LANGUAGE != get_user_setting($user_id, 'language')) loadLanguage(get_user_setting($user_id, 'language'), true);
				$toFullName=getUserFullName($user_id, false);

				$mail_body = "";
				$mail_body .= str_replace("#user_fullname#", $toFullName, $pgv_lang["mail04_line01"]) . "\r\n\r\n";
				$mail_body .= $pgv_lang["mail04_line02"] . "\r\n\r\n";
				$mail_body .= $pgv_lang["username"] . ": " . $user_name . "\r\n";
				$mail_body .= $pgv_lang["password"] . ": " . $user_new_pw . "\r\n\r\n";
				$mail_body .= $pgv_lang["mail04_line03"] . "\r\n";
				$mail_body .= $pgv_lang["mail04_line04"] . "\r\n\r\n";
				$mail_body .= print_text("mail04_line05", 0, 1) . "\r\n\r\n";

				if ($TEXT_DIRECTION=="rtl") $mail_body .= "<a href=\"".PGV_SERVER_NAME.PGV_SCRIPT_PATH."\">".PGV_SERVER_NAME.PGV_SCRIPT_PATH."</a>";
				else $mail_body .= PGV_SERVER_NAME.PGV_SCRIPT_PATH;

				$to = get_user_setting($user_id, 'email');
				$subject = str_replace(array('#PGV_SERVER_NAME#','#PGV_SCRIPT_PATH#'), array(PGV_SERVER_NAME,PGV_SCRIPT_PATH), $pgv_lang["mail04_subject"]);

				pgvMail($to, $PHPGEDVIEW_EMAIL, $subject , $mail_body, false, $toFullName, $pgv_lang["siteadmin"]);

				?>
				<table class="center facts_table">
				<tr><td class="wrap <?php print $TEXT_DIRECTION; ?>"><?php print str_replace("#user[email]#", $user_name, $pgv_lang["pwreqinfo"]);?></td></tr>
				</table>
				<?php
				AddToLog("Password request was sent to user: ".$user_name);

				if ($LANGUAGE != $oldLanguage) loadLanguage($oldLanguage, true);   // Reset language
			}
		}
		print "</div>";
		break;

	case "register" :
		$_SESSION["good_to_send"] = true;
		if (!$USE_REGISTRATION_MODULE) {
			header("Location: index.php");
			exit;
		}

		$fail = false;

		if (empty($user_name)) $fail = true;
		if (empty($user_password01)) $fail = true;
		if (empty($user_password02)) $fail = true;
		if ($user_password01 != $user_password02) $fail = true;
		if (empty($user_firstname)) $fail = true;
		if (empty($user_lastname)) $fail = true;
		if (empty($user_email)) $fail = true;
		if (empty($user_language)) $fail = true;
		if (empty($user_comments)) $fail = true;

		if (!$fail) $action = "registernew";
		else {
			print_header($pgv_lang['requestaccount']);
			// Empty user array in case any details might be left
			// and faulty users are requested and created
			$user = array();

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
					if (frm.user_name.value == "") {
						alert("<?php print $pgv_lang['enter_username']; ?>");
						frm.user_name.focus();
						return false;
					}
					if (frm.user_password01.value == "") {
						alert("<?php print $pgv_lang['enter_password']; ?>");
						frm.user_password01.focus();
						return false;
					}
					if (frm.user_password01.value.length < 6) {
						alert("<?php print $pgv_lang['passwordlength']; ?>");
						frm.user_password01.value = "";
						frm.user_password02.value = "";
						frm.user_password01.focus();
						return false;
					}
					if (frm.user_password02.value == "") {
						alert("<?php print $pgv_lang['confirm_password']; ?>");
						frm.user_password02.focus();
						return false;
					}
					if (frm.user_password01.value != frm.user_password02.value) {
						alert("<?php print $pgv_lang['password_mismatch']; ?>");
						frm.user_password01.value = "";
						frm.user_password02.value = "";
						frm.user_password01.focus();
						return false;
					}
					if (frm.user_firstname.value == "") {
						alert("<?php print $pgv_lang['enter_fullname']; ?>");
						frm.user_firstname.focus();
						return false;
					}
					if (frm.user_lastname.value == "") {
						alert("<?php print $pgv_lang['enter_fullname']; ?>");
						frm.user_lastname.focus();
						return false;
					}
					if ((frm.user_email.value == "")||(frm.user_email.value.indexOf('@')==-1)) {
						alert("<?php print $pgv_lang['enter_email']; ?>");
						frm.user_email.focus();
						return false;
					}
					if (frm.user_comments.value == "") {
						alert("<?php print $pgv_lang['enter_comments']; ?>");
						frm.user_comments.focus();
						return false;
					}
					return true;
				}

			var pastefield;
			function paste_id(value) {
				pastefield.value=value;
			}
			//-->
			</script>
			<?php
				if ($SHOW_REGISTER_CAUTION) {
					echo "<center><table class=\"width50 ", $TEXT_DIRECTION, "\"><tr><td>";
					print_text("acceptable_use");
					echo "<br />";
					echo "</td></tr></table></center>";
				}
			?>
			<div class="center">
				<form name="registerform" method="post" action="login_register.php" onsubmit="t = new Date(); document.registerform.time.value=t.toUTCString(); return checkform(this);">
					<input type="hidden" name="action" value="register" />
					<input type="hidden" name="time" value="" />
					<table class="center facts_table width50">
					<?php $tab = 1; ?>
						<tr><td class="topbottombar" colspan="2"><?php print_help_link("register_info_0".$WELCOME_TEXT_AUTH_MODE."", "qm", "requestaccount"); echo $pgv_lang["requestaccount"];?><br /></td></tr>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("username_help", "qm", "username"); echo " * ", $pgv_lang["choose_username"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>"><input type="text" name="user_name" value="<?php echo $user_name;?>" tabindex="<?php echo $tab++; ?>" /></td></tr>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("edituser_password_help", "qm", "password"); echo " * ", $pgv_lang["choose_password"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>"><input type="password" name="user_password01" value="" tabindex="<?php echo $tab++; ?>" />&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="toggleVizPW('registerform', 'user_password01'); toggleVizPW('registerform', 'user_password02')" /><?php echo $pgv_lang["show"]; ?></td></tr>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("edituser_conf_password_help", "qm", "confirm");echo " * ", $pgv_lang["confirm"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>"><input type="password" name="user_password02" value="" tabindex="<?php echo $tab++; ?>" /></td></tr>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("new_user_firstname_help", "qm", "firstname");echo " * ", $pgv_lang["firstname"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>"><input type="text" name="user_firstname" value="<?php echo $user_firstname;?>" tabindex="<?php echo $tab++; ?>" /></td></tr>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("new_user_lastname_help", "qm", "lastname");echo " * ", $pgv_lang["lastname"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>"><input type="text" name="user_lastname" value="<?php echo $user_lastname;?>" tabindex="<?php echo $tab++; ?>" /></td></tr>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("edituser_email_help", "qm", "emailadress");echo " * ", $pgv_lang["emailadress"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>"><input type="text" size="30" name="user_email" value="<?php echo $user_email;?>" tabindex="<?php echo $tab++; ?>" /></td></tr>
						<?php
						if ($ENABLE_MULTI_LANGUAGE) {
							echo "<tr><td class='descriptionbox wrap {$TEXT_DIRECTION}'>";
							print_help_link("edituser_change_lang_help", "qm", "language");
							echo " * {$pgv_lang['language']}";
							echo "</td><td class='optionbox {$TEXT_DIRECTION}'><select name='user_language' tabindex='{$tab}'>";
							foreach ($pgv_language as $key => $value) {
								if ($language_settings[$key]["pgv_lang_use"]) {
									echo "\n\t\t\t<option value='{$key}'";
									if ($key == $LANGUAGE) {
										echo " selected='selected'";
									}
									echo ">{$language_settings[$key]['pgv_lang_self']}</option>";
								}
							}
							echo "</select>\n\t\t";
							echo "</td></tr>\n";
							$tab++;		// the construct {$tab++} is not allowed -- see above
						} else {
							echo "<input type='hidden' name='user_language' value='{$LANGUAGE}' />";
						}
						?>
						<?php if ($REQUIRE_AUTHENTICATION && $SHOW_LIVING_NAMES>=$PRIV_PUBLIC) { ?>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("register_gedcomid_help", "qm", "gedcomid");echo "&nbsp;&nbsp;&nbsp;", $pgv_lang["gedcomid"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>" valign="top" ><input type="text" size="10" name="user_gedcomid" id="user_gedcomid" value="" tabindex="<?php echo $tab++; ?>" /><?php print_findindi_link("user_gedcomid",""); ?></td></tr>
						<?php } ?>
						<tr><td class="descriptionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php print_help_link("register_comments_help", "qm", "comments");echo " * ", $pgv_lang["comments"];?></td><td class="optionbox <?php echo $TEXT_DIRECTION; ?>" valign="top" ><textarea cols="50" rows="5" name="user_comments" tabindex="<?php echo $tab;?>"><?php echo $user_comments;?></textarea></td></tr>
						<tr><td class="topbottombar" colspan="2"><input type="submit" value="<?php echo $pgv_lang["requestaccount"]; ?>" tabindex="<?php echo $tab++;?>" /></td></tr>
						<tr><td class="label" align="left" colspan="2" ><?php echo $pgv_lang["mandatory"];?></td></tr>
					</table>
				</form>
			</div>
			<script language="JavaScript" type="text/javascript">
				document.registerform.user_name.focus();
			</script>
			<?php
			break;
		}

	case "registernew" :
		if (!$USE_REGISTRATION_MODULE) {
			header("Location: index.php");
			exit;
		}
		if ((stripos($user_name, "SUNTZU")!==false) || (stripos($user_email, "SUNTZU")!==false)) {
			AddToLog("SUNTZU hacker");
			print "Go Away!";
			exit;
		}

		//-- check referer for possible spam attack
		if (!isset($_SERVER['HTTP_REFERER']) || stristr($_SERVER['HTTP_REFERER'],"login_register.php")===false) {
			AddToLog('Invalid page referer while trying to register a user.  Possible spam attack.');
			print "Go Away!";
			exit;
		}

		if ((!isset($_SESSION["good_to_send"]))||($_SESSION["good_to_send"]!==true)) {
			AddToLog('Invalid session reference while trying to register a user.  Possible spam attack.');
			exit;
		}
		$_SESSION["good_to_send"] = false;

		$QUERY_STRING = "";
		if (isset($user_name)) {
			print_header($pgv_lang['registernew']);
			print "<div class=\"center\">";

			// Switch to the new user's language so that error messages appear correctly
			$oldLanguage = $LANGUAGE;
			if ($LANGUAGE != $user_language) loadLanguage($user_language, true);

			$user_created_ok = false;
			while (true) {
				$errorMessage = '';

				$faultyName = str_replace(array('&', '<', '>'), array('&amp;', '&lt;', '&gt;'), $user_name);	// Sanitize the faulty name

				if (empty($user_name)) {
					// The safe_POST() function above could have emptied an illegal input username
					$errorMessage .=  str_replace('#username#', $faultyName, $pgv_lang['invalid_username']).'<br />';
				} else {

##					// ASCII version
##					$alphabet = getAlphabet() . "_-.· ";		// Full-stop and Catalan middle dot are OK. Should a space be allowed here?
##					$length = strlen($user_name);
##					for ($i=0; $i<$length; $i++) {
##						if (strpos($alphabet, $user_name[$i])===false) {
##							// This character isn't in the alphabet
##							$errorMessage .=  str_replace('#username#', $faultyName, $pgv_lang['invalid_username']).'<br />';
##							break;
##						}
##					}

					// UTF-8 version
					$alphabet = getAlphabet('_-.· ', true);	// Full-stop and Catalan middle dot are OK. Should a space be allowed here?
					$userName = UTF8_str_split($user_name);		// Make this an array of UTF-8 characters
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

				$user_id = get_user_id($user_name);
				if (!empty($user_id)) {		// Duplicate user name
					$errorMessage .= str_replace('#username#', $faultyName, $pgv_lang['duplicate_username']).'<br />';
				}

				if ($user_password01 != $user_password02) {		// Password mis-match
					$errorMessage .= $pgv_lang['password_mismatch'].'<br />';
				}

				$userFullName = $user_firstname." ".$user_lastname;
 				if ($NAME_REVERSE) $userFullName = $user_lastname." ".$user_firstname;
 				$emailAddr = "{$userFullName} <{$user_email}>";
 				if ($PGV_SIMPLE_MAIL) $emailAddr = $user_email;
 				$sanitizedAddr = str_replace(array('&', '<', '>'), array('&amp;', '&lt;', '&gt;'), $emailAddr);	// Sanitize that address

				$validEmail = validEmail($emailAddr);
				if ($validEmail !== true) {
					if ($validEmail !== false) {
						//	We have a message from the validation routine
						$errorMessage .= str_replace('#email#', $sanitizedAddr, $validEmail).'<br >';
					} else $errorMessage .= $pgv_lang['email_invalid'].'<br />';
				}

				if (empty($errorMessage)) {
					// Only try to create the new user if other basic checks passed
					$user_id = create_user($user_name, crypt($user_password01, PGV_SALT));
					if ($user_id === false) {
						$errorMessage .= $pgv_lang['user_create_error'].'<br />';
					}
				}

				if (!empty($errorMessage)) {
					// A basic error check failed or the user creation failed
					print "<span class='error'>{$errorMessage}</span><br />";
					print "<a href='javascript:history.back()'>{$pgv_lang['back']}</a><br />";
					break;		// Don't go any further
				}

				AddToLog("User registration requested for: ".$user_name);
				$user_created_ok = true;

				set_user_setting($user_id, 'firstname',           $user_firstname);
				set_user_setting($user_id, 'lastname',            $user_lastname);
				set_user_setting($user_id, 'email',               $user_email);
				set_user_setting($user_id, 'language',            $user_language);
				set_user_setting($user_id, 'verified',            'no');
				set_user_setting($user_id, 'verified_by_admin',    $REQUIRE_ADMIN_AUTH_REGISTRATION ? 'no' : 'yes');
				set_user_setting($user_id, 'reg_timestamp',        date('U'));
				set_user_setting($user_id, 'reg_hashcode',         md5(crypt($user_name, PGV_SALT)));
				set_user_setting($user_id, 'contactmethod',        "messaging2");
				set_user_setting($user_id, 'defaulttab',           $GEDCOM_DEFAULT_TAB);
				set_user_setting($user_id, 'visibleonline',        'Y');
				set_user_setting($user_id, 'editaccount',          'Y');
				set_user_setting($user_id, 'relationship_privacy', $USE_RELATIONSHIP_PRIVACY ? 'Y' : 'N');
				set_user_setting($user_id, 'max_relation_path',    $MAX_RELATION_PATH_LENGTH);
				set_user_setting($user_id, 'auto_accept',          'N');
				set_user_setting($user_id, 'canadmin',             'N');
				set_user_setting($user_id, 'sync_gedcom',          'N');
				set_user_setting($user_id, 'loggedin',             'N');
				set_user_setting($user_id, 'sessiontime',          '0');
				if (!empty($user_gedcomid)) {
					set_user_gedcom_setting($user_id, $GEDCOM, 'gedcomid', $user_gedcomid);
					set_user_gedcom_setting($user_id, $GEDCOM, 'rootid',   $user_gedcomid);
				}
				break;
			}

			if ($user_created_ok) {
				$mail_body = "";
				$mail_body .= str_replace("#user_fullname#", $userFullName, $pgv_lang["mail01_line01"]) . "\r\n\r\n";
				$mail_body .= str_replace(array('#PGV_SERVER_NAME#','#PGV_SCRIPT_PATH#','#user_email#'), array(PGV_SERVER_NAME,PGV_SCRIPT_PATH,$emailAddr), $pgv_lang["mail01_line02"]) . "  ";
				$mail_body .= $pgv_lang["mail01_line03"] . "\r\n\r\n";
				$mail_body .= $pgv_lang["mail01_line04"] . "\r\n\r\n";
				$mail_body .= PGV_SERVER_NAME.PGV_SCRIPT_PATH.'login_register.php?user_name='.urlencode($user_name).'&user_hashcode='.urlencode(get_user_setting($user_id, 'reg_hashcode'))."&action=userverify\r\n\r\n";
				$mail_body .= $pgv_lang["username"] . " " . $user_name . "\r\n";
				$mail_body .= $pgv_lang["hashcode"] . " " . get_user_setting($user_id, 'reg_hashcode') . "\r\n\r\n";
				$mail_body .= $pgv_lang["comments"].": " . $user_comments . "\r\n\r\n";
				$mail_body .= $pgv_lang["mail01_line05"] . "  ";
				$mail_body .= $pgv_lang["mail01_line06"] . "\r\n";

				$subject = str_replace(array('#PGV_SERVER_NAME#','#PGV_SCRIPT_PATH#'), array(PGV_SERVER_NAME,PGV_SCRIPT_PATH), $pgv_lang["mail01_subject"]);

				$adminID = getAdminID();
				$sender_email = get_user_setting($adminID, 'email');

				pgvMail($user_email, $sender_email, $subject, $mail_body, false, $userFullName, $pgv_lang["siteadmin"]);

				// switch language to webmaster settings
				$adminLang=get_user_setting($adminID, 'language');
				if ($adminLang && $LANGUAGE!=$adminLang) loadLanguage($adminLang, true);

				$mail_body = "";
				$mail_body .= $pgv_lang["mail02_line01"] . "\r\n\r\n";
				$mail_body .= str_replace(array('#PGV_SERVER_NAME#','#PGV_SCRIPT_PATH#'), array(PGV_SERVER_NAME,PGV_SCRIPT_PATH), $pgv_lang["mail02_line02"]) . "\r\n\r\n";
				$mail_body .= $pgv_lang["username"].": " . $user_name . "\r\n";
				if ($NAME_REVERSE) {
					$mail_body .= $pgv_lang["lastname"].": " . $user_lastname . "\r\n\r\n";
					$mail_body .= $pgv_lang["firstname"].": " . $user_firstname . "\r\n";
				} else {
					$mail_body .= $pgv_lang["firstname"].": " . $user_firstname . "\r\n";
					$mail_body .= $pgv_lang["lastname"].": " . $user_lastname . "\r\n\r\n";
				}
				$mail_body .= $pgv_lang["comments"].": " . $user_comments . "\r\n\r\n";
				$mail_body .= $pgv_lang["mail02_line03"] . "\r\n\r\n";
				if ($REQUIRE_ADMIN_AUTH_REGISTRATION) $mail_body .= $pgv_lang["mail02_line04"] . "\r\n";
				else $mail_body .= $pgv_lang["mail02_line04a"] . "\r\n";

				$userFullName = "{$user_firstname} {$user_lastname}";
 				if ($NAME_REVERSE) $userFullName = "{$user_lastname} {$user_firstname}";
 				$emailAddr = "{$userFullName} <{$user_email}>";
 				if ($PGV_SIMPLE_MAIL) $emailAddr = $user_email;
 				$sanitizedAddr = str_replace(array('&', '<', '>'), array('&amp;', '&lt;', '&gt;'), $emailAddr);

				$message = array();
				// This is an internal mail, so "to" and "from" are the same
				$message["to"] = get_user_setting($adminID, 'email');
				$message["toFullName"] = $pgv_lang["siteadmin"];
				$message["toUserID"] = $adminID;
				$message["from"] = $message["to"];
				$message["fromFullName"] = $pgv_lang['PGV_program'];
				$message["fromUserID"] = $message["toUserID"];
				$message["subject"] = str_replace(array('#PGV_SERVER_NAME#','#PGV_SCRIPT_PATH#','#user_email#'), array(PGV_SERVER_NAME,PGV_SCRIPT_PATH,$sanitizedAddr), $pgv_lang["mail02_subject"]);
				$message["body"] = $mail_body;
				$message["created"] = $time;
				$message["method"] = $SUPPORT_METHOD;
				$message['bulkMail'] = false;
				addMessage($message);

				// switch language to user's settings
				if ($LANGUAGE != $user_language) loadLanguage($user_language, true);

				$userFullName = "{$user_firstname} {$user_lastname}";
 				if ($NAME_REVERSE) $userFullName = "{$user_lastname} {$user_firstname}";
 				$emailAddr = "{$userFullName} <{$user_email}>";
 				if ($PGV_SIMPLE_MAIL) $emailAddr = $user_email;
 				$sanitizedAddr = str_replace(array('&', '<', '>'), array('&amp;', '&lt;', '&gt;'), $emailAddr);
				?>
				<table class="center facts_table">
					<tr><td class="wrap <?php print $TEXT_DIRECTION; ?>"><?php print str_replace("#user_fullname#", $userFullName, $pgv_lang["thankyou"]);?><br /><br />
					<?php
					$noteToUser = $pgv_lang["pls_note06"];
					if (!$REQUIRE_ADMIN_AUTH_REGISTRATION) $noteToUser = $pgv_lang["pls_note06a"];
					print str_replace("#user_email#", $sanitizedAddr, $noteToUser);
					?>
					</td></tr>
				</table>
				<?php
				if ($LANGUAGE != $oldLanguage) loadLanguage($oldLanguage, true);		// Reset language
			}
			print "</div>";
		} else {
			header("Location: login.php");
			exit;
		}
		break;

	case "userverify" :
		if (!$USE_REGISTRATION_MODULE) {
			header("Location: index.php");
			exit;
		}

		// Change to the new user's language
		$oldLanguage = $LANGUAGE;
		$user_id=get_user_id($user_name);
		$user_lang=get_user_setting($user_id, 'language');
		if ($user_lang && $LANGUAGE!=$user_lang) loadLanguage($user_lang, true);

		print_header($pgv_lang['user_verify']);
		print "<div class=\"center\">";
		?>
		<form name="verifyform" method="post" action="" onsubmit="t = new Date(); document.verifyform.time.value=t.toUTCString();">
			<input type="hidden" name="action" value="verify_hash" />
			<input type="hidden" name="time" value="" />
			<table class="center facts_table width25">
				<tr><td class="topbottombar" colspan="2"><?php print_help_link("pls_note07", "qm", "user_verify"); print $pgv_lang["user_verify"];?></td></tr>
				<tr><td class="descriptionbox wrap <?php print $TEXT_DIRECTION; ?>"><?php print $pgv_lang["username"]; ?></td><td class="optionbox <?php print $TEXT_DIRECTION; ?>"><input type="text" name="user_name" value="<?php print $user_name; ?>" /></td></tr>
				<tr><td class="descriptionbox wrap <?php print $TEXT_DIRECTION; ?>"><?php print $pgv_lang["password"]; ?></td><td class="optionbox <?php print $TEXT_DIRECTION; ?>"><input type="password" name="user_password" value="" /></td></tr>
				<tr><td class="descriptionbox wrap <?php print $TEXT_DIRECTION; ?>"><?php print $pgv_lang["hashcode"]; ?></td><td class="facts_value <?php print $TEXT_DIRECTION; ?>"><input type="text" name="user_hashcode" value="<?php print $user_hashcode; ?>" /></td></tr>
				<tr><td class="topbottombar" colspan="2"><input type="submit" value="<?php print $pgv_lang["send"]; ?>" /></td></tr>
			</table>
		</form>
		</div>
		<script language="JavaScript" type="text/javascript">
			document.verifyform.user_name.focus();
		</script>
		<?php
		break;

	case "verify_hash" :
		if (!$USE_REGISTRATION_MODULE) {
			header("Location: index.php");
			exit;
		}
		$QUERY_STRING = "";
		AddToLog("User attempted to verify hashcode: ".$user_name);

		// Change to the new user's language
		$user_id=get_user_id($user_name);
		$user_lang=get_user_setting($user_id, 'language');
		if ($user_lang && $LANGUAGE!=$user_lang) loadLanguage($user_lang, true);
		$oldLanguage = $LANGUAGE;

		print_header($pgv_lang['user_verify']); // <-- better verification of authentication code
		print "<div class=\"center\">";
		print "<table class=\"center facts_table wrap ".$TEXT_DIRECTION."\">";
		print "<tr><td class=\"topbottombar\">".$pgv_lang["user_verify"]."</td></tr>";
		print "<tr><td class=\"optionbox\">";
		print str_replace("#user_name#", $user_name, $pgv_lang["pls_note08"]);
		if ($user_id) {
			$pw_ok = (get_user_password($user_id) == crypt($user_password, get_user_password($user_id)));
			$hc_ok = (get_user_setting($user_id, 'reg_hashcode') == $user_hashcode);
			if (($pw_ok) && ($hc_ok)) {
				set_user_setting($user_id, 'verified', 'yes');
				set_user_setting($user_id, 'pwrequested', '');
				set_user_setting($user_id, 'reg_timestamp', date("U"));
				set_user_setting($user_id, 'reg_hashcode', '');
				if (!$REQUIRE_ADMIN_AUTH_REGISTRATION) {
					set_user_setting($user_id, 'verified_by_admin', 'yes');
				}
				AddToLog("User verified: ".$user_name);

				// switch language to webmaster settings
				$adm_id = get_user_id($WEBMASTER_EMAIL);
				$adminLang=get_user_setting($adm_id, 'language');
				if ($adminLang && $LANGUAGE!=$adminLang) loadLanguage($adminLang, true);

				$mail_body = "";
				$toFullName = getUserFullName($user_id, false);
				$mail_body .= $pgv_lang["mail03_line01"] . "\r\n\r\n";
				$mail_body .= str_replace(array("#newuser[username]#", "#newuser[fullname]#"), array($user_name, $toFullName), $pgv_lang["mail03_line02"]) . "\r\n\r\n";
				if ($REQUIRE_ADMIN_AUTH_REGISTRATION) {
					$mail_body .= $pgv_lang["mail03_line03"] . "\r\n";
					$mail_body .= PGV_SERVER_NAME.PGV_SCRIPT_PATH."useradmin.php?action=edituser&username=".urlencode($user_name)."\r\n";
				} else {
					$mail_body .= $pgv_lang["mail03_line03a"] . "\r\n";
				}

				$message = array();
				// This is an internal mail, so "to" and "from" are the same
				$message["to"] = get_user_setting($adm_id, 'email');
				$message["toFullName"] = $pgv_lang['siteadmin'];
				$message["toUserID"] = $adm_id;
				$message["from"] = $message["to"];
				$message["fromFullName"] = $pgv_lang['PGV_program'];
				$message["fromUserID"] = $message["toUserID"];
				$message["subject"] = str_replace(array('#PGV_SERVER_NAME#','#PGV_SCRIPT_PATH#'), array(PGV_SERVER_NAME,PGV_SCRIPT_PATH), $pgv_lang["mail03_subject"]);
				$message["body"] = $mail_body;
				$message["created"] = $time;
				$message["method"] = $SUPPORT_METHOD;
				$message['bulkMail'] = false;
				addMessage($message);

				if ($LANGUAGE != $oldLanguage) loadLanguage($oldLanguage, true);		// Reset language

				print "<br /><br />".$pgv_lang["pls_note09"]."<br /><br />";
				if ($REQUIRE_ADMIN_AUTH_REGISTRATION) print $pgv_lang["pls_note10"];
				else print $pgv_lang["pls_note10a"];
				print "<br /><br /></td></tr>";
			} else {
				print "<br /><br />";
				print "<span class=\"warning\">";
				print $pgv_lang["data_incorrect"];
				print "</span><br /><br /></td></tr>";
			}
		} else {
			print "<br /><br />";
			print "<span class=\"warning\">";
			print $pgv_lang["user_not_found"];
			print "</span><br /><br /></td></tr>";
		}
		print "</table>";
		print "</div>";
		break;

	default :
		header("Location: ".encode_url($url));
		break;
}

print_footer();
?>

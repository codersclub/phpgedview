<?php
/**
* PopUp Window to provide editing features.
*
* phpGedView: Genealogy Viewer
* Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
* @subpackage Edit
* @version $Id$
*/

define('PGV_SCRIPT_NAME', 'edit_interface.php');
require './config.php';
require PGV_ROOT.'includes/functions/functions_edit.php';

loadLangFile("pgv_country");
uasort($countries, "stringsort");

// TODO work out whether to use GET/POST for these
// TODO decide what (if any) validation is required on these parameters
$action =safe_REQUEST($_REQUEST, 'action',  PGV_REGEX_UNSAFE);
$linenum=safe_REQUEST($_REQUEST, 'linenum', PGV_REGEX_UNSAFE);
$pid    =safe_REQUEST($_REQUEST, 'pid',     PGV_REGEX_XREF);
$famid  =safe_REQUEST($_REQUEST, 'famid',   PGV_REGEX_XREF);
$text   =safe_REQUEST($_REQUEST, 'text',    PGV_REGEX_UNSAFE);
$tag    =safe_REQUEST($_REQUEST, 'tag',     PGV_REGEX_UNSAFE);
$famtag =safe_REQUEST($_REQUEST, 'famtag',  PGV_REGEX_UNSAFE);
$glevels=safe_REQUEST($_REQUEST, 'glevels', PGV_REGEX_UNSAFE);
$islink =safe_REQUEST($_REQUEST, 'islink',  PGV_REGEX_UNSAFE);
$type   =safe_REQUEST($_REQUEST, 'type',    PGV_REGEX_UNSAFE);
$fact   =safe_REQUEST($_REQUEST, 'fact',    PGV_REGEX_UNSAFE);
$option =safe_REQUEST($_REQUEST, 'option',  PGV_REGEX_UNSAFE);

$assist =safe_REQUEST($_REQUEST, 'assist',  PGV_REGEX_UNSAFE);
$noteid =safe_REQUEST($_REQUEST, 'noteid',  PGV_REGEX_UNSAFE);

$pid_array  =safe_REQUEST($_REQUEST, 'pid_array', PGV_REGEX_XREF);
$pids_array_add =safe_REQUEST($_REQUEST, 'pids_array_add', PGV_REGEX_XREF);
$pids_array_edit =safe_REQUEST($_REQUEST, 'pids_array_edit', PGV_REGEX_XREF);

$update_CHAN=!safe_POST_bool('preserve_last_changed');

$uploaded_files = array();

// items for ASSO RELA selector :
$assokeys = array(
	'attendant',
	'attending',
	'best_man',
	'bridesmaid',
	'buyer',
	'circumciser',
	'civil_registrar',
	'employee',
	'employer',
	'foster_child',
	'foster_father',
	'foster_mother',
	'friend',
	'godfather',
	'godmother',
	'godparent',
	'godson',
	'goddaughter',
	'godchild',
	'guardian',
	'informant',
	'lodger',
	'nanny',
	'nurse',
	'owner',
	'priest',
	'rabbi',
	'registry_officer',
	'seller',
	'servant',
	'slave',
	'twin',
	'twin_brother',
	'twin_sister',
	'ward',
	'witness',
	'' // DO NOT DELETE
);
$assorela = array();
foreach ($assokeys as $indexval => $key) {
	if (isset($pgv_lang["$key"])) {
		$assorela["$key"] = $pgv_lang["$key"];
	} else {
		$assorela["$key"] = "? $key";
	}
}
uasort($assorela, "stringsort");

print_simple_header('Edit Interface');

if ($ENABLE_AUTOCOMPLETE) {
	require PGV_ROOT.'js/autocomplete.js.htm';
}
echo PGV_JS_START;
?>
	var locale_date_format='<?php echo preg_replace('/[^DMY]/', '', str_replace(array('J', 'F'), array('D', 'M'), strtoupper($DATE_FORMAT))); ?>';

	function findIndi(field, indiname) {
		pastefield = field;
		findwin = window.open('find.php?type=indi', '_blank', 'left=50, top=50, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}
	function findPlace(field) {
		pastefield = field;
		findwin = window.open('find.php?type=place', '_blank', 'left=50, top=50, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}
	function findMedia(field, choose, ged) {
		pastefield = field;
		if (!choose) choose="0all";
		findwin = window.open('find.php?type=media&choose='+choose+'&ged='+ged, '_blank', 'left=50, top=50, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}
	function findSource(field) {
		pastefield = field;
		findwin = window.open('find.php?type=source', '_blank', 'left=50, top=50, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}
	// Shared Notes =========================
	function findnote(field) {
		pastefield = field;
		findwin = window.open('find.php?type=note', '_blank', 'left=50, top=50, width=600, height=520, resizable=1, scrollbars=1');
		return false;
	}
	// =====================================
	function findRepository(field) {
		pastefield = field;
		findwin = window.open('find.php?type=repo', '_blank', 'left=50, top=50, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}
	function findFamily(field) {
		pastefield = field;
		findwin = window.open('find.php?type=fam', '_blank', 'left=50, top=50, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}

	function addnewrepository(field) {
		pastefield = field;
		window.open('edit_interface.php?action=addnewrepository&pid=newrepo', '_blank', 'top=70, left=70, width=600, height=500, resizable=1, scrollbars=1');
		return false;
	}

	function openerpasteid(id) {
		window.opener.paste_id(id);
		window.close();
	}

	function paste_id(value) {
		pastefield.value = value;
	}

	function paste_char(value, lang, mag) {
		pastefield.value += value;
		language_filter = lang;
		magnify = mag;
		if (pastefield.id=='NPFX' || pastefield.id=='GIVN' || pastefield.id=='SPFX' || pastefield.id=='SURN' || pastefield.id=='NSFX') {
			updatewholename();
		}
	}

	function edit_close(newurl) {
		if (newurl)
			window.opener.location=newurl;
		else
			if (window.opener.showchanges)
				window.opener.showchanges();
		window.close();
	}
<?php
echo PGV_JS_END;
//-- check if user has access to the gedcom record
$disp = false;
$success = false;

/**
* Check if the given gedcom record has any RESN editing restrictions
* This is used to prevent raw editing and deletion of records that are locked
* @param string $gedrec
* @return boolean
*/
function checkFactEdit($gedrec) {
	if (PGV_USER_GEDCOM_ADMIN) {
		return true;
	}

	$ct = preg_match("/2 RESN ((privacy)|(locked))/i", $gedrec, $match);
	if ($ct > 0) {
		$match[1] = strtolower(trim($match[1]));

		$gt = preg_match("/0 @(.+)@ (.+)/", $gedrec, $gmatch);
		if ($gt > 0) {
			$gid = trim($gmatch[1]);
			$type = trim($gmatch[2]);
			if (PGV_USER_GEDCOM_ID == $gid) {
				return true;
			}
			if ($type=='FAM') {
				$parents = find_parents_in_record($gedrec);
				if (PGV_USER_GEDCOM_ID == $parents["HUSB"] || PGV_USER_GEDCOM_ID == $parents["WIFE"]) {
					return true;
				}
			}
		}
		return false;
	}

	return true;
}
//-- end checkFactEdit function

if (!empty($pid)) {
	if (($pid!="newsour") && ($pid!="newrepo") && ($noteid!="newnote")) {
		if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) {
			$gedrec = find_gedcom_record($pid, PGV_GED_ID);
		} else {
			$gedrec = find_updated_record($pid, PGV_GED_ID);
		}
		$ct = preg_match("/0 @$pid@ (.*)/", $gedrec, $match);
		if ($ct>0) {
			$type = trim($match[1]);
			$disp = displayDetailsById($pid, $type);
		}
		// Don't allow edits if the record has changed since the edit-link was created
		checkChangeTime($pid, $gedrec, safe_GET('accesstime', PGV_REGEX_INTEGER));
	}
	else {
		$disp = true;
	}
}
else if (!empty($famid)) {
	if ($famid != "new") {
		if (!isset($pgv_changes[$famid."_".PGV_GEDCOM])) {
			$gedrec = find_gedcom_record($famid, PGV_GED_ID);
		} else {
			$gedrec = find_updated_record($famid, PGV_GED_ID);
		}
		$ct = preg_match("/0 @$famid@ (.*)/", $gedrec, $match);
		if ($ct>0) {
			$type = trim($match[1]);
			$disp = displayDetailsById($famid, $type);
		}
		// Don't allow edits if the record has changed since the edit-link was created
		checkChangeTime($famid, $gedrec, safe_GET('accesstime', PGV_REGEX_INTEGER));
	}
}
else if (($action!="addchild")&&($action!="addchildaction")&&($action!="addnewsource")&&($action!="mod_edit_fact")&&($action!="addnewnote")&&($action!="addmedia_links")&&($action!="addnoteaction")&&($action!="addnoteaction_assisted")) {
	echo "<span class=\"error\">The \$pid variable was empty. Unable to perform $action xxx.</span>";
	print_simple_footer();
	$disp = true;
}
else {
	$disp = true;
}

if (!PGV_USER_CAN_EDIT || !$disp || !$ALLOW_EDIT_GEDCOM) {
	//echo "pid: $pid<br />";
	//echo "gedrec: $gedrec<br />";
	echo $pgv_lang["access_denied"];
	//-- display messages as to why the editing access was denied
	if (!PGV_USER_CAN_EDIT) {
		echo "<br />", $pgv_lang["user_cannot_edit"];
	}
	if (!$ALLOW_EDIT_GEDCOM) {
		echo "<br />", $pgv_lang["gedcom_editing_disabled"];
	}
	if (!$disp) {
		echo "<br />", $pgv_lang["privacy_prevented_editing"];
		if (!empty($pid)) {
			echo "<br />", $pgv_lang["privacy_not_granted"], " pid $pid.";
		}
		if (!empty($famid)) {
			echo "<br />", $pgv_lang["privacy_not_granted"], " famid $famid.";
		}
	}
	if (empty($gedrec)) {
		echo "<br /><span class=\"error\">", $pgv_lang["record_not_found"], "</span>";
	}
	echo "<br /><br /><div class=\"center\"><a href=\"javascript: ", $pgv_lang["close_window"], "\" onclick=\"window.close();\">", $pgv_lang["close_window"], "</a></div>\n";
	print_simple_footer();
	exit;
}

//-- privatize the record so that line numbers etc. match what was in the display
//-- data that is hidden because of privacy is stored in the $pgv_private_records array
//-- any private data will be restored when the record is replaced
if (isset($gedrec)) {
	$gedrec = privatize_gedcom($gedrec);
}

if (!isset($type)) {
	$type="";
}
$level0type = $type;
if ($type=="INDI") {
	$record=Person::getInstance($pid);
	echo "<b>", PrintReady($record->getFullName()), "</b><br />";
}
elseif ($type=="FAM") {
	if (!empty($pid)) {
		$record=Family::getInstance($pid);
	} else {
		$record=Family::getInstance($famid);
	}
	echo "<b>", PrintReady($record->getFullName()), "</b><br />";
} elseif ($type=="SOUR") {
	$record=Source::getInstance($pid);
	echo "<b>", PrintReady($record->getFullName()), "&nbsp;&nbsp;&nbsp;";
	if ($TEXT_DIRECTION=="rtl") {
		echo getRLM();
	}
	echo "(", $pid, ")";
	if ($TEXT_DIRECTION=="rtl") {
		echo getRLM();
	}
	echo "</b><br />";
}

if (strstr($action, "addchild")) {
	if (empty($famid)) {
		print_help_link("edit_add_unlinked_person_help", "qm", "add_unlinked_person");
		echo "<b>", $pgv_lang["add_unlinked_person"], "</b>\n";
	}
	else {
		print_help_link("edit_add_child_help", "qm", "add_child");
		echo "<b>", $pgv_lang["add_child"], "</b>\n";
	}
}
else if (strstr($action, "addspouse")) {
	print_help_link("edit_add_spouse_help", "qm", "add_".strtolower($famtag));
	echo "<b>", $pgv_lang["add_".strtolower($famtag)], "</b>\n";
}
else if (strstr($action, "addnewparent")) {
	print_help_link("edit_add_parent_help", "qm", "add");
	if ($famtag=="WIFE") {
		echo "<b>", $pgv_lang["add_mother"], "</b>\n";
	} else {
		echo "<b>", $pgv_lang["add_father"], "</b>\n";
	}
}
else if (strstr($action, "addopfchild")) {
	print_help_link("edit_add_child_help", "qm", "add_opf_child");
	echo "<b>", $pgv_lang["add_opf_child"], "</b>";
}
else {
	if (isset($factarray[$type])) {
		echo "<b>", $factarray[$type], "</b>";
	}
}
//------------------------------------------------------------------------------
switch ($action) {
case 'delete':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	if (!empty($linenum)) {
		if ($linenum===0) {
			if (delete_gedrec($pid)) {
				echo $pgv_lang["gedrec_deleted"];
			}
		}
		else {
			$mediaid='';
			if (isset($_REQUEST['mediaid'])) {
				$mediaid = $_REQUEST['mediaid'];
			}
			//-- when deleting a media link
			//-- $linenum comes is an OBJE and the $mediaid to delete should be set
			if (!is_numeric($linenum)) {
				$newged = remove_subrecord($gedrec, $linenum, $mediaid);
			} else {
				$newged = remove_subline($gedrec, $linenum);
			}
			$success = (replace_gedrec($pid, $newged, $update_CHAN));
			if ($success) {
				echo "<br /><br />", $pgv_lang["gedrec_deleted"];
			}
		}
	}
	break;
//------------------------------------------------------------------------------
//-- echo a form to edit the raw gedcom record in a large textarea
case 'editraw':
	if (!checkFactEdit($gedrec)) {
		echo "<br />", $pgv_lang["privacy_prevented_editing"];
		if (!empty($pid)) {
			echo "<br />", $pgv_lang["privacy_not_granted"], " pid $pid.";
		}
		if (!empty($famid)) {
			echo "<br />", $pgv_lang["privacy_not_granted"], " famid $famid.";
		}
		print_simple_footer();
		exit;
	}
	else {
		echo "<br /><b>", $pgv_lang["edit_raw"], "</b>";
		print_help_link("edit_edit_raw_help", "qm", "edit_raw");
		echo "<form method=\"post\" action=\"edit_interface.php\">\n";
		echo "<input type=\"hidden\" name=\"action\" value=\"updateraw\" />\n";
		echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" />\n";
		echo "<input id=\"savebutton2\" type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";
		print_specialchar_link("newgedrec", true);
		echo "<br />\n";
		echo "<textarea name=\"newgedrec\" id=\"newgedrec\" rows=\"20\" cols=\"80\" dir=\"ltr\">", $gedrec, "</textarea>\n<br />";
		if (PGV_USER_IS_ADMIN) {
			echo "<table class=\"facts_table\">\n";
			echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
			print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
			echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
			if ($NO_UPDATE_CHAN) {
				echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
			} else {
				echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
			}
			echo $pgv_lang["no_update_CHAN"], "<br />\n";
			$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
			echo format_fact_date($event, false, true);
			echo "</td></tr>\n";
			echo "</table>";
		}

		echo "<input id=\"savebutton\" type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />";
		echo "</form>";
		echo PGV_JS_START;
		echo "textbox = document.getElementById('newgedrec');";
		echo "savebutton = document.getElementById('savebutton');";
		echo "if (textbox && savebutton) {";
		echo " window.resizeTo(textbox.offsetLeft+textbox.offsetWidth+100, savebutton.offsetTop+savebutton.offsetHeight+150);";
		echo "}";
		echo PGV_JS_END;
	}
	break;
//------------------------------------------------------------------------------
//-- edit a fact record in a form
case 'edit':
	init_calendar_popup();
	echo "<form name=\"editform\" method=\"post\" action=\"edit_interface.php\" enctype=\"multipart/form-data\">\n";
	echo "<input type=\"hidden\" name=\"action\" value=\"update\" />\n";
	echo "<input type=\"hidden\" name=\"linenum\" value=\"$linenum\" />\n";
	echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" />\n";
	echo "<input type=\"hidden\" id=\"pids_array_edit\" name=\"pids_array_edit\" value=\"no_array\" />\n";
	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";

	echo "<table class=\"facts_table\">";
	$level1type = create_edit_form($gedrec, $linenum, $level0type);
	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		if ($NO_UPDATE_CHAN) {
			echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
		} else {
			echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
		}
		echo $pgv_lang["no_update_CHAN"], "<br />\n";
		$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
		echo format_fact_date($event, false, true);
		echo "</td></tr>\n";
	}
	echo "</table>";
	if ($level0type=="SOUR" || $level0type=="REPO" || $level0type=="OBJE") {
		if ($level1type!="NOTE") print_add_layer("NOTE");
	} else {
		if ($level1type!="SEX") {
			if ($level1type!="ASSO" && $level1type!="REPO" && $level1type!="NOTE") print_add_layer("ASSO");
			// allow to add godfather and godmother for CHR fact or best man and bridesmaid  for MARR fact in one window
			if ($level1type=="CHR" || $level1type=="MARR") print_add_layer("ASSO2");
			if ($level1type!="SOUR" && $level1type!="REPO" ) print_add_layer("SOUR");
			if ($level1type!="NOTE") print_add_layer("NOTE");
			// Shared Note addition ------------
			if ($level1type!="SHARED_NOTE" && $level1type!="NOTE") print_add_layer("SHARED_NOTE");
			if ($level1type!="OBJE" && $level1type!="REPO" && $MULTI_MEDIA) print_add_layer("OBJE");
			//-- RESN missing in new structure, RESN can be added to all level 1 tags
			if (!in_array("RESN", $tags)) print_add_layer("RESN");
		}
	}

	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";
	echo "</form>\n";
	break;
//------------------------------------------------------------------------------
case 'add':
	//
	// Start of add section...
	//
	init_calendar_popup();
	echo "<form name=\"addform\" method=\"post\" action=\"edit_interface.php\" enctype=\"multipart/form-data\">\n";
	echo "<input type=\"hidden\" name=\"action\" value=\"update\" />\n";
	echo "<input type=\"hidden\" name=\"linenum\" value=\"new\" />\n";
	echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" />\n";
	echo "<input type=\"hidden\" id=\"pids_array_add\" name=\"pids_array_add\" value=\"no_array\" />\n";

	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["add"], "\" /><br />\n";
	echo "<table class=\"facts_table\">";

	create_add_form($fact);

	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		if ($NO_UPDATE_CHAN) {
			echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
		} else {
			echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
		}
		echo $pgv_lang["no_update_CHAN"], "<br />\n";
		$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
		echo format_fact_date($event, false, true);
		echo "</td></tr>\n";
	}
	echo "</table>";

	if ($level0type=="SOUR" || $level0type=="REPO") {
		if ($fact!="NOTE") print_add_layer("NOTE");
	} else {
		if ($fact!="OBJE") {
			if ($fact!="ASSO" && $fact!="SOUR" && $fact!="REPO" && $fact!="SHARED_NOTE") print_add_layer("ASSO");
			// allow to add godfather and godmother for CHR fact or best man and bridesmaid  for MARR fact in one window
			if ($fact=="CHR" || $fact=="MARR") print_add_layer("ASSO2");
			if ($fact!="SOUR" && $fact!="REPO" ) print_add_layer("SOUR");
			if ($fact!="NOTE" && $fact!="SHARED_NOTE") print_add_layer("NOTE");
			// Shared Note addition ------------
			if ($fact!="SHARED_NOTE" && $fact!="NOTE") print_add_layer("SHARED_NOTE");
			if ($fact!="REPO") print_add_layer("OBJE");
		}
	}
	//-- RESN missing in new structure, RESN can be added to all level 1 tags
	if (!in_array("RESN", $tags)) print_add_layer("RESN");

	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["add"], "\" /><br />\n";
	echo "</form>\n";
// }
	break;
//------------------------------------------------------------------------------
case 'addchild':
	print_indi_form("addchildaction", $famid, "", "", "CHIL", @$_REQUEST["gender"]);
	break;
//------------------------------------------------------------------------------
case 'addspouse':
	print_indi_form("addspouseaction", $famid, "", "", $famtag);
	break;
//------------------------------------------------------------------------------
case 'addnewparent':
	print_indi_form("addnewparentaction", $famid, "", "", $famtag);
	break;
//------------------------------------------------------------------------------
case 'addopfchild':
	print_indi_form('addopfchildaction', $famid, '', '', 'CHIL');
	break;
//------------------------------------------------------------------------------
case 'addfamlink':
	echo "<form method=\"post\" name=\"addchildform\" action=\"edit_interface.php\">\n";
	echo "<input type=\"hidden\" name=\"action\" value=\"linkfamaction\" />\n";
	echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" />\n";
	echo "<input type=\"hidden\" name=\"famtag\" value=\"$famtag\" />\n";
	echo "<table class=\"facts_table\">";
	echo "<tr><td class=\"facts_label\">", $pgv_lang["family"], "</td>";
	echo "<td class=\"facts_value\"><input type=\"text\" id=\"famid\" name=\"famid\" size=\"8\" /> ";
	print_findfamily_link("famid");
	echo "\n</td></tr>";
	if ($famtag=="CHIL") {
		echo "<tr><td class=\"facts_label\">", $factarray["PEDI"], "</td>";
		echo "<td class=\"facts_value\"><select name=\"pedigree\">";
		echo "<option value=\"\"></option>";
		echo "<option value=\"birth\" >", $factarray["BIRT"], "</option>";
		echo "<option value=\"adopted\" >", $pgv_lang["adopted"], "</option>";
		echo "<option value=\"foster\" >", $pgv_lang["foster"], "</option>";
		echo "<option value=\"sealing\" >", $pgv_lang["sealing"], "</option>";
		echo "</select></td></tr>";
	}
	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		if ($NO_UPDATE_CHAN) {
			echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
		} else {
			echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
		}
		echo $pgv_lang["no_update_CHAN"], "<br />\n";
		$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
		echo format_fact_date($event, false, true);
		echo "</td></tr>\n";
	}
	echo "</table>\n";
	echo "<input type=\"submit\" value=\"", $pgv_lang["set_link"], "\" /><br />\n";
	echo "</form>\n";
	break;
//------------------------------------------------------------------------------
case 'linkspouse':
	init_calendar_popup();
	echo "<form method=\"post\" name=\"addchildform\" action=\"edit_interface.php\">\n";
	echo "<input type=\"hidden\" name=\"action\" value=\"linkspouseaction\" />\n";
	echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" />\n";
	echo "<input type=\"hidden\" name=\"famid\" value=\"new\" />\n";
	echo "<input type=\"hidden\" name=\"famtag\" value=\"$famtag\" />\n";
	echo "<table class=\"facts_table\">";
	echo "<tr><td class=\"facts_label\">";
	if ($famtag=="WIFE") {
		echo $pgv_lang["wife"];
	} else {
		echo $pgv_lang["husband"];
	}
	echo "</td>";
	echo "<td class=\"facts_value\"><input id=\"spouseid\" type=\"text\" name=\"spid\" size=\"8\" /> ";
	print_findindi_link("spouseid", "");
	echo "\n</td></tr>";
	add_simple_tag("0 MARR");
	add_simple_tag("0 DATE", "MARR");
	add_simple_tag("0 PLAC", "MARR");
	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		if ($NO_UPDATE_CHAN) {
			echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
		} else {
			echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
		}
		echo $pgv_lang["no_update_CHAN"], "<br />\n";
		$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
		echo format_fact_date($event, false, true);
		echo "</td></tr>\n";
	}
	echo "</table>";
	print_add_layer("ASSO");
	// allow to add godfather and godmother for CHR fact or best man and bridesmaid  for MARR fact in one window
	print_add_layer("ASSO2");
	print_add_layer("SOUR");
	print_add_layer("NOTE");
	print_add_layer("SHARED_NOTE");
	print_add_layer("OBJE");
	print_add_layer("RESN");
	echo "<input type=\"submit\" value=\"", $pgv_lang["set_link"], "\" /><br />\n";
	echo "</form>\n";
	break;
//------------------------------------------------------------------------------
case 'linkfamaction':
	// Make sure we have the right ID (f123 vs. F123)
	$famid=Family::getInstance($famid)->getXref();
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	if (!isset($pgv_changes[$famid."_".PGV_GEDCOM])) $famrec = find_gedcom_record($famid, PGV_GED_ID);
	else $famrec = find_updated_record($famid, PGV_GED_ID);
	$famrec = trim($famrec);
	if (!empty($famrec)) {
		$itag = "FAMC";
		if ($famtag=="HUSB" || $famtag=="WIFE") $itag="FAMS";

		//-- update the individual record for the person
		if (strpos($gedrec, "1 $itag @$famid@")===false) {
			$gedrec .= "\n";
			if ($itag=="FAMC") {
				$pedigree="";
				if (isset($_REQUEST['pedigree'])) $pedigree = $_REQUEST['pedigree'];
				switch ($pedigree) {
				case 'birth':
					$gedrec .= "1 FAMC @$famid@\n2 PEDI $pedigree";
					break;
				case 'adopted':
					$gedrec .= "1 FAMC @$famid@\n2 PEDI $pedigree\n1 ADOP\n2 FAMC @$famid@\n3 ADOP BOTH";
					break;
				case 'sealing':
					$gedrec .= "1 FAMC @$famid@\n2 PEDI $pedigree\n1 SLGC\n2 FAMC @$famid@";
					break;
				case 'foster':
					$gedrec .= "1 FAMC @$famid@\n2 PEDI $pedigree\n1 EVEN\n2 TYPE $pedigree";
					break;
				default:
					$gedrec .= "1 FAMC @$famid@";
					break;
				}
			} else {
				$gedrec .= "1 FAMS @$famid@";
			}
			replace_gedrec($pid, $gedrec, $update_CHAN);
		}

		//-- if it is adding a new child to a family
		if ($famtag=="CHIL") {
			if (strpos($famrec, "1 $famtag @$pid@")===false) {
				$famrec = trim($famrec) . "\n1 $famtag @$pid@\n";
				replace_gedrec($famid, $famrec, $update_CHAN);
			}
		}
		//-- if it is adding a husband or wife
		else {
			//-- check if the family already has a HUSB or WIFE
			$ct = preg_match("/1 $famtag @(.*)@/", $famrec, $match);
			if ($ct>0) {
				//-- get the old ID
				$spid = trim($match[1]);
				//-- only continue if the old husb/wife is not the same as the current one
				if ($spid!=$pid) {
					//-- change a of the old ids to the new id
					$famrec = str_replace("1 $famtag @$spid@", "1 $famtag @$pid@", $famrec);
					if (PGV_DEBUG) {
						echo "<pre>$famrec</pre>";
					}
					replace_gedrec($famid, $famrec, $update_CHAN);
					//-- remove the FAMS reference from the old husb/wife
					if (!empty($spid)) {
						if (!isset($pgv_changes[$spid."_".PGV_GEDCOM])) $srec = find_gedcom_record($spid, PGV_GED_ID);
						else $srec = find_updated_record($spid, PGV_GED_ID);
						if ($srec) {
							$srec = str_replace("1 $itag @$famid@", "", $srec);
							if (PGV_DEBUG) {
								echo "<pre>$srec</pre>";
							}
							replace_gedrec($spid, $srec, $update_CHAN);
						}
					}
				}
			} else {
				$famrec .= "\n1 $famtag @$pid@\n";
				if (PGV_DEBUG) {
					echo "<pre>$famrec</pre>";
				}
				replace_gedrec($famid, $famrec, $update_CHAN);
			}
		}
	}
	else echo "Family record not found";
	break;
//------------------------------------------------------------------------------
//-- add new source
case 'addnewsource':
	echo PGV_JS_START;
	?>
		function check_form(frm) {
			if (frm.TITL.value=="") {
				alert('<?php echo $pgv_lang["must_provide"].$factarray["TITL"]; ?>');
				frm.TITL.focus();
				return false;
			}
			return true;
		}
	<?php
	echo PGV_JS_END;
	?>
	<b><?php echo $pgv_lang['create_source']; $tabkey = 1; ?></b>
	<form method="post" action="edit_interface.php" onsubmit="return check_form(this);">
		<input type="hidden" name="action" value="addsourceaction" />
		<input type="hidden" name="pid" value="newsour" />
		<table class="facts_table">
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_ABBR_help", "qm", "ABBR"); echo $factarray["ABBR"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="ABBR" id="ABBR" value="" size="40" maxlength="255" /> <?php print_specialchar_link("ABBR", false); ?></td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_TITL_help", "qm", "TITL"); echo $factarray["TITL"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="TITL" id="TITL" value="" size="60" /> <?php print_specialchar_link("TITL", false); ?></td></tr>
			<?php $tabkey++; ?>
			<?php if (strstr($ADVANCED_NAME_FACTS, "_HEB")!==false) { ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit__HEB_help", "qm", "_HEB"); echo $factarray["_HEB"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="_HEB" id="_HEB" value="" size="60" /> <?php print_specialchar_link("_HEB", false); ?></td></tr>
			<?php $tabkey++; ?>
			<?php } ?>
			<?php if (strstr($ADVANCED_NAME_FACTS, "ROMN")!==false) { ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_ROMN_help", "qm", "ROMN"); echo $factarray["ROMN"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="ROMN" id="ROMN" value="" size="60" /> <?php print_specialchar_link("ROMN", false); ?></td></tr>
			<?php $tabkey++; ?>
			<?php } ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_AUTH_help", "qm", "AUTH"); echo $factarray["AUTH"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="AUTH" id="AUTH" value="" size="40" maxlength="255" /> <?php print_specialchar_link("AUTH", false); ?></td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_PUBL_help", "qm", "PUBL"); echo $factarray["PUBL"]; ?></td>
			<td class="optionbox wrap"><textarea tabindex="<?php echo $tabkey; ?>" name="PUBL" id="PUBL" rows="5" cols="60"></textarea><br /><?php print_specialchar_link("PUBL", true); ?></td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_REPO_help", "qm", "edit_repo"); echo $factarray["REPO"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="REPO" id="REPO" value="" size="10" /> <?php print_findrepository_link("REPO"); print_addnewrepository_link("REPO"); ?></td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_CALN_help", "qm", "CALN"); echo $factarray["CALN"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="CALN" id="CALN" value="" /></td></tr>
		<?php
			if (PGV_USER_IS_ADMIN) {
				echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
				print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
				echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
				if ($NO_UPDATE_CHAN) {
					echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
				} else {
					echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
				}
				echo $pgv_lang["no_update_CHAN"], "<br />\n";
				$event = new Event(get_sub_record(1, "1 CHAN", ""));
				echo format_fact_date($event, false, true);
				echo "</td></tr>\n";
			}
		?>
		</table>
			<?php print_help_link("edit_SOUR_EVEN_help", "qm", "source_events"); ?><a href="#"  onclick="return expand_layer('events');"><img id="events_img" src="<?php echo $PGV_IMAGE_DIR, "/", $PGV_IMAGES["plus"]["other"]; ?>" border="0" width="11" height="11" alt="" title="" />
			<?php echo $pgv_lang["source_events"]; ?></a>
			<div id="events" style="display: none;">
			<table class="facts_table">
			<tr>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_SOUR_EVEN_help", "qm", "source_events"); echo $pgv_lang['select_events']; ?></td>
				<td class="optionbox wrap"><select name="EVEN[]" multiple="multiple" size="5">
					<?php
					$parts = explode(',', $INDI_FACTS_ADD);
					foreach ($parts as $p=>$key) {
						?><option value="<?php echo $key; ?>"><?php echo $factarray[$key]. " ($key)"; ?></option>
					<?php
					}
					$parts = explode(',', $FAM_FACTS_ADD);
					foreach ($parts as $p=>$key) {
						?><option value="<?php echo $key; ?>"><?php echo $factarray[$key]. " ($key)"; ?></option>
					<?php
					}
					?>
				</select></td>
			</tr>
			<?php
			add_simple_tag("0 DATE", "EVEN");
			add_simple_tag("0 PLAC", "EVEN");
			add_simple_tag("0 AGNC");
			?>
			</table>
			</div>
		<br /><br />
		<input type="submit" value="<?php echo $pgv_lang["create_source"]; ?>" />
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
//-- create a source record from the incoming variables
case 'addsourceaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	$newgedrec = "0 @XREF@ SOUR\n";
	if (isset($_REQUEST['EVEN'])) $EVEN = $_REQUEST['EVEN'];
	if (!empty($EVEN) && count($EVEN)>0) {
		$newgedrec .= "1 DATA\n";
		$newgedrec .= "2 EVEN ".implode(",", $EVEN)."\n";
		if (!empty($EVEN_DATE)) $newgedrec .= "3 DATE ".check_input_date($EVEN_DATE)."\n";
		if (!empty($EVEN_PLAC)) $newgedrec .= "3 PLAC ".$EVEN_PLAC."\n";
		if (!empty($AGNC))      $newgedrec .= "2 AGNC ".$AGNC."\n";
	}
	if (isset($_REQUEST['ABBR'])) $ABBR = $_REQUEST['ABBR'];
	if (isset($_REQUEST['TITL'])) $TITL = $_REQUEST['TITL'];
	if (isset($_REQUEST['_HEB'])) $_HEB = $_REQUEST['_HEB'];
	if (isset($_REQUEST['ROMN'])) $ROMN = $_REQUEST['ROMN'];
	if (isset($_REQUEST['AUTH'])) $AUTH = $_REQUEST['AUTH'];
	if (isset($_REQUEST['PUBL'])) $PUBL = $_REQUEST['PUBL'];
	if (isset($_REQUEST['REPO'])) $REPO = $_REQUEST['REPO'];
	if (isset($_REQUEST['CALN'])) $CALN = $_REQUEST['CALN'];
	if (!empty($ABBR)) $newgedrec .= "1 ABBR $ABBR\n";
	if (!empty($TITL)) {
		$newgedrec .= "1 TITL $TITL\n";
		if (!empty($_HEB)) $newgedrec .= "2 _HEB $_HEB\n";
		if (!empty($ROMN)) $newgedrec .= "2 ROMN $ROMN\n";
	}
	if (!empty($AUTH)) $newgedrec .= "1 AUTH $AUTH\n";
	if (!empty($PUBL)) {
		$newlines = preg_split("/\r?\n/", $PUBL, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($newlines as $k=>$line){
			if ( $k==0 ) {
				$newgedrec .= "1 PUBL $line\n";
			} else {
				$newgedrec .= "2 CONT $line\n";
			}
		}
	}
	if (!empty($REPO)) {
		$newgedrec .= "1 REPO @$REPO@\n";
		if (!empty($CALN)) $newgedrec .= "2 CALN $CALN\n";
	}
	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	$xref = append_gedrec($newgedrec, $update_CHAN);
	$link = "source.php?sid=$xref&show_changes=yes";
	if ($xref) {
		echo "<br /><br />\n", $pgv_lang["new_source_created"], "<br /><br />";
		echo "<a href=\"javascript://SOUR $xref\" onclick=\"openerpasteid('$xref'); return false;\">", $pgv_lang["paste_id_into_field"], " <b>$xref</b></a>\n";
	}
	break;
//------------------------------------------------------------------------------
//-- add new Shared Note
case 'addnewnote':
	echo PGV_JS_START;
	?>
		function check_form(frm) {
			if (frm.TITL.value=="") {
				alert('<?php echo $pgv_lang["must_provide"].$factarray["TITL"]; ?>');
				frm.TITL.focus();
				return false;
			}
			return true;
		}
	<?php
	echo PGV_JS_END;
	?>
	<b><?php echo $pgv_lang['create_shared_note']; $tabkey = 1; ?></b>
	<form method="post" action="edit_interface.php" onsubmit="return check_form(this);">
		<input type="hidden" name="action" value="addnoteaction" />
		<input type="hidden" name="noteid" value="newnote" />
		<!-- <input type="hidden" name="pid" value="$pid" /> -->
		<?php
			echo "<table class=\"facts_table\">";
				echo "<tr>";
					echo "<td class=\"descriptionbox\" ", $TEXT_DIRECTION, " wrap=\"nowrap\">";
						print_help_link("edit_SHARED_NOTE_help", "qm", "shared_note");
					echo $pgv_lang["shared_note"];
					echo "</td>";
					echo "<td class=\"optionbox wrap\" ><textarea name=\"NOTE\" id=\"NOTE\" rows=\"15\" cols=\"87\"></textarea>";
						print_specialchar_link("NOTE", true);
					echo "</td>";
				echo "</tr>";
			if (PGV_USER_IS_ADMIN) {
				echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
				print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
				echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
				if ($NO_UPDATE_CHAN) {
					echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
				} else {
					echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
				}
				echo $pgv_lang["no_update_CHAN"], "<br />\n";
				$event = new Event(get_sub_record(1, "1 CHAN", ""));
				echo format_fact_date($event, false, true);
				echo "</td></tr>\n";
			}
			$tabkey++;
			echo "</table>";
			echo "<br /><br />";
			echo "<input type=\"submit\" value=\"", $pgv_lang["save"], "\" />";
		?>
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
//-- create a shared note record from the incoming variables
case 'addnoteaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	$newgedrec  = "0 @XREF@ NOTE\n";

	if (isset($_REQUEST['EVEN'])) $EVEN = $_REQUEST['EVEN'];
	if (!empty($EVEN) && count($EVEN)>0) {
		$newgedrec .= "1 DATA\n";
		$newgedrec .= "2 EVEN ".implode(",", $EVEN)."\n";
		if (!empty($EVEN_DATE)) $newgedrec .= "3 DATE ".check_input_date($EVEN_DATE)."\n";
		if (!empty($EVEN_PLAC)) $newgedrec .= "3 PLAC ".$EVEN_PLAC."\n";
		if (!empty($AGNC))      $newgedrec .= "2 AGNC ".$AGNC."\n";
	}
	if (isset($_REQUEST['ABBR'])) $ABBR = $_REQUEST['ABBR'];
	if (isset($_REQUEST['TITL'])) $TITL = $_REQUEST['TITL'];
	if (isset($_REQUEST['DATE'])) $DATE = $_REQUEST['DATE'];
	if (isset($_REQUEST['NOTE'])) $NOTE = $_REQUEST['NOTE'];
	if (isset($_REQUEST['_HEB'])) $_HEB = $_REQUEST['_HEB'];
	if (isset($_REQUEST['ROMN'])) $ROMN = $_REQUEST['ROMN'];
	if (isset($_REQUEST['AUTH'])) $AUTH = $_REQUEST['AUTH'];
	if (isset($_REQUEST['PUBL'])) $PUBL = $_REQUEST['PUBL'];
	if (isset($_REQUEST['REPO'])) $REPO = $_REQUEST['REPO'];
	if (isset($_REQUEST['CALN'])) $CALN = $_REQUEST['CALN'];

	if (!empty($NOTE)) {
		$newlines = preg_split("/\r?\n/", $NOTE, -1);
		for ($k=0; $k<count($newlines); $k++) {
			if ( $k==0 && count($newlines)>1) {
				$newgedrec = "0 @XREF@ NOTE $newlines[$k]\n";
			}else if ( $k==0 ) {
				$newgedrec = "0 @XREF@ NOTE $newlines[$k]\n1 CONT\n";
			} else {
				$newgedrec .= "1 CONT $newlines[$k]\n";
			}
		}
	}

	if (!empty($ABBR)) $newgedrec .= "1 ABBR $ABBR\n";
	if (!empty($TITL)) {
		// $newgedrec .= "1 TITL $TITL\n";
		// $newgedrec .= "2 DATE $DATE\n";
		if (!empty($_HEB)) $newgedrec .= "2 _HEB $_HEB\n";
		if (!empty($ROMN)) $newgedrec .= "2 ROMN $ROMN\n";
	}
	if (!empty($AUTH)) $newgedrec .= "1 AUTH $AUTH\n";
	if (!empty($PUBL)) {
		$newlines = preg_split("/\r?\n/", $PUBL, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($newlines as $k=>$line) {
			if ( $k==0 ) {
				$newgedrec .= "1 PUBL $line\n";
			} else {
				$newgedrec .= "2 CONT $line\n";
			}
		}
	}
	if (!empty($NOTE)) {
		//$newgedrec .= "1 NOTE @$NOTE@\n";
		if (!empty($CALN)) $newgedrec .= "2 CALN $CALN\n";
	}
	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	// $xref = "Test";
	$xref = append_gedrec($newgedrec, $update_CHAN);
	
	// Not sure if next line is needed ?? BH ?? --------
	// $link = "note.php?nid=$xref&show_changes=yes";
	// -------------------------------------------------
	
	if ($xref != "none") {
		echo "<br /><br />\n".$pgv_lang["new_shared_note_created"]." (".$xref.")<br /><br />";
		echo "<a href=\"javascript://NOTE $xref\" onclick=\"openerpasteid('$xref'); return false;\">".$pgv_lang["paste_id_into_field"]." <b>$xref</b></a>\n";
		echo "<br /><br /><br /><br />";
		echo "<br /><br /><br /><br />";
	}
	break;
//------------------------------------------------------------------------------
//-- add new Shared Note census event using GEDFact assistant
case 'addnewnote_assisted':
	if (isset($_REQUEST['pid'])) $pid = $_REQUEST['pid'];
	global $pid;
	
	echo PGV_JS_START;
	?>
		function check_form(frm) {
			/*
			if (frm.TITL.value=="") {
				alert('<?php echo $pgv_lang["must_provide"].$factarray["TITL"]; ?>');
				frm.TITL.focus();
				return false;
			}
			*/
			return true;
		}
	<?php
	echo PGV_JS_END;
	?>
	
	<div class="center font11" style="width:100%;">
		<b><?php echo $pgv_lang["create_shared_note_assisted"]; $tabkey = 1; ?></b>
		<form method="post" action="edit_interface.php" onsubmit="return check_form(this);">
			<input type="hidden" name="action" value="addnoteaction_assisted" />
			<input type="hidden" name="noteid" value="newnote" />
			<input id="pid_array" type="hidden" name="pid_array" value="none" />
			<input id="pid" type="hidden" name="pid" value=<?php echo $pid; ?> />
			<?php
				require PGV_ROOT.'modules/GEDFact_assistant/CENS_ctrl.php';
			?>
		</form>
	</div>
	<div style="clear:both;"></div>
	<?php
	break;
//------------------------------------------------------------------------------
//-- create a shared note assisted record from the incoming variables
case 'addnoteaction_assisted':
	require PGV_ROOT.'modules/GEDFact_assistant/_CENS/addnoteaction_assisted.php';
	break;
	
//-- add new Media Links
case 'addmedia_links':
	global $pid;
	echo PGV_JS_START;
	?>
		function check_form(frm) {
			if (frm.TITL.value=="") {
				alert('<?php echo $pgv_lang["must_provide"].$factarray["TITL"]; ?>');
				frm.TITL.focus();
				return false;
			}
			return true;
		}
	<?php
	echo PGV_JS_END;
	?>
	<!-- <form method="post" action="edit_interface.php" onsubmit="return check_form(this);"> -->
	<form method="post" action="edit_interface.php?pid=<?php echo $pid; ?>" onsubmit="findindi()">
		<input type="hidden" name="action" value="addmedia_links" /> 	
		<input type="hidden" name="noteid" value="newnote" />			
	<!--	<input type="hidden" name="pid" value="<?php // echo $pid; ?>" />		--> 
		<?php
		require PGV_ROOT.'modules/GEDFact_assistant/MEDIA_ctrl.php';
		?>
	</form>
	<?php
	break;

//-- edit source
case 'editsource':
	init_calendar_popup();
	echo "<form method=\"post\" action=\"edit_interface.php\" enctype=\"multipart/form-data\">\n";
	echo "<input type=\"hidden\" name=\"action\" value=\"update\" />\n";
	echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" />\n";
	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";

	echo "<table class=\"facts_table\">";
	$gedlines = explode("\n", $gedrec); // -- find the number of lines in the record
	$uniquefacts = preg_split("/[, ;:]+/", $SOUR_FACTS_UNIQUE, -1, PREG_SPLIT_NO_EMPTY);
	$usedfacts = array();
	$lines = count($gedlines);
	if ($lines==1) {
		foreach ($uniquefacts as $fact) {
			$gedrec.="\n1 ".$fact;
		}
		$gedlines = explode("\n", $gedrec);
	}
	for ($i=$linenum; $i<$lines; $i++) {
		$fields = explode(' ', $gedlines[$i]);
		if ((substr($gedlines[$i], 0, 1)<2) && $fields[1]!="CHAN") {
			$level1type = create_edit_form($gedrec, $i, $level0type);
			echo "<input type=\"hidden\" name=\"linenum[]\" value=\"$i\" />\n";
			$usedfacts[]=$fields[1];
			foreach ($uniquefacts as $key=>$fact) {
				if ($fact==$fields[1]) unset($uniquefacts[$key]);
			}
		}
	}
	foreach ($uniquefacts as $key=>$fact) {
		$gedrec.="\n1 ".$fact;
		$level1type = create_edit_form($gedrec, $lines++, $level0type);
		echo "<input type=\"hidden\" name=\"linenum[]\" value=\"$i\" />\n";
	}
	
	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		if ($NO_UPDATE_CHAN) {
			echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
		} else {
			echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
		}
		echo $pgv_lang["no_update_CHAN"], "<br />\n";
		$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
		echo format_fact_date($event, false, true);
		echo "</td></tr>\n";
	}
	echo "</table>";
	print_add_layer("NOTE");
	print_add_layer("SHARED_NOTE");
	print_add_layer("OBJE");
	//-- RESN missing in new structure, RESN can be added to all level 1 tags
	if ($tag && !in_array("RESN", $tags)) print_add_layer("RESN");
	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";
	echo "</form>\n";
	break;
//------------------------------------------------------------------------------
//-- edit a Shared Note
case 'editnote':
	echo PGV_JS_START;
	?>
		function check_form(frm) {
			if (frm.TITL.value=="") {
				alert('<?php echo $pgv_lang["must_provide"].$factarray["TITL"]; ?>');
				frm.TITL.focus();
				return false;
			}
			return true;
		}
	<?php
	echo PGV_JS_END;
	?>
	<b><?php echo $pgv_lang['edit_shared_note']; $tabkey = 1; echo "&nbsp;&nbsp;(" . $pid . ")";?></b><br /><br />
	<form method="post" action="edit_interface.php" onsubmit="return check_form(this);">
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="pid" value="<?php echo $pid; ?>" />

		<?php
		if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) {
			$gedrec = find_gedcom_record($pid, PGV_GED_ID);
		} else {
			$gedrec = find_updated_record($pid, PGV_GED_ID);
		}
		if (preg_match("/^0 @$pid@ NOTE ?(.*)/", $gedrec, $n1match)) {
			$note_content=$n1match[1].get_cont(1, $gedrec, false);
		} else {
			$note_content='';
		}
		?>
		<table class="facts_table">
			<tr>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_SHARED_NOTE_help", "qm", "shared_note"); echo $pgv_lang["shared_note"]; ?></td>
				<td class="optionbox wrap">
					<textarea tabindex="<?php echo $tabkey; ?>" name="NOTE" id="NOTE" rows="15" cols="90"><?php
						echo htmlspecialchars($note_content);
					?></textarea><br /><?php print_specialchar_link("NOTE", true); ?>
				</td>
			</tr>
			<?php $tabkey++; 
			if (PGV_USER_IS_ADMIN) {
			echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
			print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
			echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
			if ($NO_UPDATE_CHAN) {
				echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
			} else {
				echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
			}
			echo $pgv_lang["no_update_CHAN"], "<br />\n";
			$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
			echo format_fact_date($event, false, true);
			echo "</td></tr>\n";
			} ?>
		</table>
		<br /><br />
		<input type="submit" value="<?php echo $pgv_lang["save"]; ?>" />
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
//-- add new repository
case 'addnewrepository':
	echo PGV_JS_START;
	?>
		function check_form(frm) {
			if (frm.NAME.value=="") {
				alert('<?php echo $pgv_lang["must_provide"], " ", $factarray["NAME"]; ?>');
				frm.NAME.focus();
				return false;
			}
			return true;
		}
	<?php
	echo PGV_JS_END;
	?>
	<b><?php echo $pgv_lang["create_repository"];
	$tabkey = 1;
	?></b>
	<form method="post" action="edit_interface.php" onsubmit="return check_form(this);">
		<input type="hidden" name="action" value="addrepoaction" />
		<input type="hidden" name="pid" value="newrepo" />
		<table class="facts_table">
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_REPO_NAME_help", "qm", "REPO"); echo $factarray["NAME"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="NAME" id="NAME" value="" size="40" maxlength="255" /> <?php print_specialchar_link("NAME", false); ?></td></tr>
			<?php $tabkey++; ?>
			<?php if (strstr($ADVANCED_NAME_FACTS, "_HEB")!==false) { ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit__HEB_help", "qm", "_HEB"); echo $factarray["_HEB"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="_HEB" id="_HEB" value="" size="40" maxlength="255" /> <?php print_specialchar_link("_HEB", false); ?></td></tr>
			<?php $tabkey++; ?>
			<?php } ?>
			<?php if (strstr($ADVANCED_NAME_FACTS, "ROMN")!==false) { ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_ROMN_help", "qm", "ROMN"); echo $factarray["ROMN"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="ROMN" id="ROMN" value="" size="40" maxlength="255" /> <?php print_specialchar_link("ROMN", false); ?></td></tr>
			<?php $tabkey++; ?>
			<?php } ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_ADDR_help", "qm", "ADDR"); echo $factarray["ADDR"]; ?></td>
			<td class="optionbox wrap"><textarea tabindex="<?php echo $tabkey; ?>" name="ADDR" id="ADDR" rows="5" cols="60"></textarea><?php print_specialchar_link("ADDR", true); ?> </td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_PHON_help", "qm", "PHON"); echo $factarray["PHON"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="PHON" id="PHON" value="" size="40" maxlength="255" /> </td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_FAX_help", "qm", "FAX"); echo $factarray["FAX"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="FAX" id="FAX" value="" size="40" /></td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_EMAIL_help", "qm", "emailadress"); echo $factarray["EMAIL"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="EMAIL" id="EMAIL" value="" size="40" maxlength="255" /></td></tr>
			<?php $tabkey++; ?>
			<tr><td class="descriptionbox <?php echo $TEXT_DIRECTION; ?> wrap width25"><?php print_help_link("edit_WWW_help", "qm", "WWW"); echo $factarray["WWW"]; ?></td>
			<td class="optionbox wrap"><input tabindex="<?php echo $tabkey; ?>" type="text" name="WWW" id="WWW" value="" size="40" maxlength="255" /> </td></tr>
		<?php
			if (PGV_USER_IS_ADMIN) {
				echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
				print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
				echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
				if ($NO_UPDATE_CHAN) {
					echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
				} else {
					echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
				}
				echo $pgv_lang["no_update_CHAN"], "<br />\n";
				$event = new Event(get_sub_record(1, "1 CHAN", ""));
				echo format_fact_date($event, false, true);
				echo "</td></tr>\n";
			}
		?>
		</table>
		<input type="submit" value="<?php echo $pgv_lang["create_repository"]; ?>" />
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
//-- create a repository record from the incoming variables
case 'addrepoaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	$newgedrec = "0 @XREF@ REPO\n";
	if (isset($_REQUEST['NAME'])) $NAME = $_REQUEST['NAME'];
	if (isset($_REQUEST['_HEB'])) $_HEB = $_REQUEST['_HEB'];
	if (isset($_REQUEST['ROMN'])) $ROMN = $_REQUEST['ROMN'];
	if (isset($_REQUEST['ADDR'])) $ADDR = $_REQUEST['ADDR'];
	if (isset($_REQUEST['PHON'])) $PHON = $_REQUEST['PHON'];
	if (isset($_REQUEST['FAX'])) $FAX = $_REQUEST['FAX'];
	if (isset($_REQUEST['EMAIL'])) $EMAIL = $_REQUEST['EMAIL'];
	if (isset($_REQUEST['WWW'])) $WWW = $_REQUEST['WWW'];

	if (!empty($NAME)) {
		$newgedrec .= "1 NAME $NAME\n";
		if (!empty($_HEB)) $newgedrec .= "2 _HEB $_HEB\n";
		if (!empty($ROMN)) $newgedrec .= "2 ROMN $ROMN\n";
	}
	if (!empty($ADDR)) {
		$newlines = preg_split("/\r?\n/", $ADDR, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($newlines as $k=>$line) {
			if ( $k==0 ) {
				$newgedrec .= "1 ADDR $line\n";
			} else {
				$newgedrec .= "2 CONT $line\n";
			}
		}
	}
	if (!empty($PHON)) $newgedrec .= "1 PHON $PHON\n";
	if (!empty($FAX)) $newgedrec .= "1 FAX $FAX\n";
	if (!empty($EMAIL)) $newgedrec .= "1 EMAIL $EMAIL\n";
	if (!empty($WWW)) $newgedrec .= "1 WWW $WWW\n";

	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	$xref = append_gedrec($newgedrec, $update_CHAN);
	$link = "repo.php?rid=$xref&show_changes=yes";
	if ($xref) {
		echo "<br /><br />\n", $pgv_lang["new_repo_created"], "<br /><br />";
		echo "<a href=\"javascript://REPO $xref\" onclick=\"openerpasteid('$xref'); return false;\">", $pgv_lang["paste_rid_into_field"], " <b>$xref</b></a>\n";
	}
	break;
//------------------------------------------------------------------------------
//-- get the new incoming raw gedcom record and store it in the file
case 'updateraw':
	if (isset($_REQUEST['newgedrec'])) $newgedrec = $_REQUEST['newgedrec'];
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
		echo "<pre>$newgedrec</pre>";
	}
	$newgedrec = trim($newgedrec);
	$success = (!empty($newgedrec)&&(replace_gedrec($pid, $newgedrec, $update_CHAN)));
	if ($success) echo "<br /><br />", $pgv_lang["update_successful"];
	break;
	
//----------------------------------------------------------------------------------
//-- reconstruct the gedcom from the incoming fields and store it in the file
case 'update':
	/* -----------------------------------------------------------------------------
	 * $pids_array is a text file passed via js from the CENS GEDFact Assistant 
	 * to the hidden field id=\"pids_array\" in the case 'add'.
	 * The subsequent array ($cens_pids), after exploding this text file, 
	 * is an array of indi id's within the Census Transcription
	 * If $cens_pids is set, then this allows the array to "copy" the new CENS event
	 * using the foreach loop to these id's
	 * If $cens_pids is not set, then the array created is just the current $pid.
	 * -----------------------------------------------------------------------------
	 */
	if (isset($_REQUEST['pids_array_add'])) $pids_array = $_REQUEST['pids_array_add'];
	if (isset($_REQUEST['pids_array_edit'])) $pids_array = $_REQUEST['pids_array_edit'];

	if (isset($pids_array) && $pids_array!="no_array") {
		$cens_pids=explode(', ', $pids_array);
	}

	if (!isset($cens_pids)){
		$cens_pids = array($pid);
		$idnums="";
	}else{
		$cens_pids = $cens_pids;
		$idnums="multi";
	}

	// Cycle through each individual concerned defined by $cens_pids array.
	foreach ($cens_pids as $pid) {
		if (isset($pid)) {
			$gedrec = find_updated_record($pid, PGV_GED_ID);
			if (empty($gedrec)) $gedrec = find_gedcom_record($pid, PGV_GED_ID);			
		} else if (isset($famid)) {
			$gedrec = find_updated_record($famid, PGV_GED_ID);
			if (empty($gedrec)) $gedrec = find_gedcom_record($famid, PGV_GED_ID);			
		}
		
		if (PGV_DEBUG) {
			phpinfo(INFO_VARIABLES);
			echo "<pre>$gedrec</pre>";
			echo "<br /><br />";
		}

		// add or remove Y
		if ($text[0]=="Y" or $text[0]=="y") $text[0]="";
		if (in_array($tag[0], $emptyfacts) && array_unique($text)==array("") && !$islink[0]) $text[0]="Y";
		//-- check for photo update
		if (count($_FILES)>0) {
			if (isset($_REQUEST['folder'])) $folder = $_REQUEST['folder'];
			$uploaded_files = array();
			if (substr($folder, 0, 1) == "/") $folder = substr($folder, 1);
			if (substr($folder, -1, 1) != "/") $folder .= "/";
			foreach ($_FILES as $upload) {
				if (!empty($upload['tmp_name'])) {
					if (!move_uploaded_file($upload['tmp_name'], $MEDIA_DIRECTORY.$folder.basename($upload['name']))) {
						$error .= "<br />".$pgv_lang["upload_error"]."<br />".file_upload_error_text($upload['error']);
						$uploaded_files[] = "";
					}
					else {
						$filename = $MEDIA_DIRECTORY.$folder.basename($upload['name']);
						$uploaded_files[] = $MEDIA_DIRECTORY.$folder.basename($upload['name']);
						if (!is_dir($MEDIA_DIRECTORY."thumbs/".$folder)) mkdir($MEDIA_DIRECTORY."thumbs/".$folder);
						$thumbnail = $MEDIA_DIRECTORY."thumbs/".$folder.basename($upload['name']);
						generate_thumbnail($filename, $thumbnail);
						if (!empty($error)) {
							echo "<span class=\"error\">", $error, "</span>";
						}
					}
				}
				else $uploaded_files[] = "";
			}
		}

		$gedlines = explode("\n", trim($gedrec));
		//-- for new facts set linenum to number of lines
		if (!is_array($linenum)) {
			if ($linenum=="new" || $idnums=="multi") {
				$linenum = count($gedlines);
			}
			$newged = "";
			for ($i=0; $i<$linenum; $i++) {
				$newged .= $gedlines[$i]."\n";
			}
			//-- for edits get the level from the line
			if (isset($gedlines[$linenum])) {
				$fields = explode(' ', $gedlines[$linenum]);
				$glevel = $fields[0];
				$i++;
				while (($i<count($gedlines))&&($gedlines[$i]{0}>$glevel)) $i++;
			}

			if (!isset($glevels)) $glevels = array();
			if (isset($_REQUEST['NAME'])) $NAME = $_REQUEST['NAME'];
			if (isset($_REQUEST['TYPE'])) $TYPE = $_REQUEST['TYPE'];
			if (isset($_REQUEST['NPFX'])) $NPFX = $_REQUEST['NPFX'];
			if (isset($_REQUEST['GIVN'])) $GIVN = $_REQUEST['GIVN'];
			if (isset($_REQUEST['NICK'])) $NICK = $_REQUEST['NICK'];
			if (isset($_REQUEST['SPFX'])) $SPFX = $_REQUEST['SPFX'];
			if (isset($_REQUEST['SURN'])) $SURN = $_REQUEST['SURN'];
			if (isset($_REQUEST['NSFX'])) $NSFX = $_REQUEST['NSFX'];
			if (isset($_REQUEST['ROMN'])) $ROMN = $_REQUEST['ROMN'];
			if (isset($_REQUEST['FONE'])) $FONE = $_REQUEST['FONE'];
			if (isset($_REQUEST['_HEB'])) $_HEB = $_REQUEST['_HEB'];
			if (isset($_REQUEST['_AKA'])) $_AKA = $_REQUEST['_AKA'];
			if (isset($_REQUEST['_MARNM'])) $_MARNM = $_REQUEST['_MARNM'];

			if (!empty($NAME)) $newged .= "1 NAME $NAME\n";
			if (!empty($TYPE)) $newged .= "2 TYPE $TYPE\n";
			if (!empty($NPFX)) $newged .= "2 NPFX $NPFX\n";
			if (!empty($GIVN)) $newged .= "2 GIVN $GIVN\n";
			if (!empty($NICK)) $newged .= "2 NICK $NICK\n";
			if (!empty($SPFX)) $newged .= "2 SPFX $SPFX\n";
			if (!empty($SURN)) $newged .= "2 SURN $SURN\n";
			if (!empty($NSFX)) $newged .= "2 NSFX $NSFX\n";

			if (isset($_REQUEST['NOTE'])) $NOTE = $_REQUEST['NOTE'];
			if (!empty($NOTE)) {
				$newlines = preg_split("/\r?\n/", $NOTE, -1 );
				for ($k=0; $k<count($newlines); $k++) {
					if ($k==0 && count($newlines)>1) {
						$gedlines[$k] = "0 @$pid@ NOTE $newlines[$k]\n";
					} else {
						$gedlines[$k] = " 1 CONT $newlines[$k]\n";
					}
				}
			}

			//-- Refer to Bug [ 1329644 ] Add Married Name - Wrong Sequence
			//-- _HEB/ROMN/FONE have to be before _AKA, even if _AKA exists in input and the others are now added
			if (!empty($ROMN)) $newged .= "2 ROMN $ROMN\n";
			if (!empty($FONE)) $newged .= "2 FONE $FONE\n";
			if (!empty($_HEB)) $newged .= "2 _HEB $_HEB\n";

			$newged = handle_updates($newged);

			if (!empty($_AKA)) $newged .= "2 _AKA $_AKA\n";
			if (!empty($_MARNM)) $newged .= "2 _MARNM $_MARNM\n";

			while ($i<count($gedlines)) {
				$newged .= trim($gedlines[$i])."\n";
				$i++;
			}
		} else {
			$newged = "";
			$current = 0;
			foreach ($linenum as $editline) {
				for ($i=$current; $i<$editline; $i++) {
					$newged .= $gedlines[$i]."\n";
				}
				//-- for edits get the level from the line
				if (isset($gedlines[$editline])) {
					$fields = explode(' ', $gedlines[$editline]);
					$glevel = $fields[0];
					$i++;
					while (($i<count($gedlines))&&($gedlines[$i]{0}>$glevel)) $i++;
				}

				if (!isset($glevels)) $glevels = array();
				if (isset($_REQUEST['NAME'])) $NAME = $_REQUEST['NAME'];
				if (isset($_REQUEST['TYPE'])) $TYPE = $_REQUEST['TYPE'];
				if (isset($_REQUEST['NPFX'])) $NPFX = $_REQUEST['NPFX'];
				if (isset($_REQUEST['GIVN'])) $GIVN = $_REQUEST['GIVN'];
				if (isset($_REQUEST['NICK'])) $NICK = $_REQUEST['NICK'];
				if (isset($_REQUEST['SPFX'])) $SPFX = $_REQUEST['SPFX'];
				if (isset($_REQUEST['SURN'])) $SURN = $_REQUEST['SURN'];
				if (isset($_REQUEST['NSFX'])) $NSFX = $_REQUEST['NSFX'];
				if (isset($_REQUEST['ROMN'])) $ROMN = $_REQUEST['ROMN'];
				if (isset($_REQUEST['FONE'])) $FONE = $_REQUEST['FONE'];
				if (isset($_REQUEST['_HEB'])) $_HEB = $_REQUEST['_HEB'];
				if (isset($_REQUEST['_AKA'])) $_AKA = $_REQUEST['_AKA'];
				if (isset($_REQUEST['_MARNM'])) $_MARNM = $_REQUEST['_MARNM'];

				if (!empty($NAME)) $newged .= "1 NAME $NAME\n";
				if (!empty($TYPE)) $newged .= "2 TYPE $TYPE\n";
				if (!empty($NPFX)) $newged .= "2 NPFX $NPFX\n";
				if (!empty($GIVN)) $newged .= "2 GIVN $GIVN\n";
				if (!empty($NICK)) $newged .= "2 NICK $NICK\n";
				if (!empty($SPFX)) $newged .= "2 SPFX $SPFX\n";
				if (!empty($SURN)) $newged .= "2 SURN $SURN\n";
				if (!empty($NSFX)) $newged .= "2 NSFX $NSFX\n";

				if (isset($_REQUEST['NOTE'])) $NOTE = $_REQUEST['NOTE'];
				if (!empty($NOTE)) {
					$newlines = preg_split("/\r?\n/", $NOTE, -1 );
					for ($k=0; $k<count($newlines); $k++) {
						if ($k==0 && count($newlines)>1) {
							$gedlines[$k] = "0 @$pid@ NOTE $newlines[$k]\n";
						} else {
							$gedlines[$k] = " 1 CONT $newlines[$k]\n";
						}
					}
				}
				//-- Refer to Bug [ 1329644 ] Add Married Name - Wrong Sequence
				//-- _HEB/ROMN/FONE have to be before _AKA, even if _AKA exists in input and the others are now added
				if (!empty($ROMN)) $newged .= "2 ROMN $ROMN\n";
				if (!empty($FONE)) $newged .= "2 FONE $FONE\n";
				if (!empty($_HEB)) $newged .= "2 _HEB $_HEB\n";

				if (!empty($_AKA)) $newged .= "2 _AKA $_AKA\n";
				if (!empty($_MARNM)) $newged .= "2 _MARNM $_MARNM\n";
				
				$newged = handle_updates($newged);
				$current = $editline;
				break;
			}
			
		}
		if (PGV_DEBUG) {
			echo "<br /><br />";
			echo "<pre>$newged</pre>";
		}
		
		$success  = (replace_gedrec($pid, $newged, $update_CHAN));
		if ($success) {
			echo "<br /><br />", $pgv_lang["update_successful"], " - ", $pid;
		}
		
	} // end foreach $cens_pids  -------------
	break;

//------------------------------------------------------------------------------
case 'addchildaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}

	splitSOUR(); // separate SOUR record from the rest

	$gedrec ="0 @REF@ INDI\n";
	$gedrec.=addNewName();
	$gedrec.=addNewSex ();
	if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FACTS, $matches)) {
		foreach ($matches[1] as $match) {
			$gedrec.=addNewFact($match);
		}
	}

	if (!empty($famid)) {
		$gedrec .= "\n";
		$PEDI="";
		if (isset($_REQUEST['PEDI'])) $PEDI = $_REQUEST['PEDI'];
		switch ($PEDI) {
		case 'birth':
			$gedrec.="1 FAMC @$famid@\n2 PEDI $PEDI";
			break;
		case 'adopted':
			$gedrec.="1 FAMC @$famid@\n2 PEDI $PEDI\n1 ADOP\n2 FAMC @$famid@\n3 ADOP BOTH";
			break;
		case 'sealing':
			$gedrec.="1 FAMC @$famid@\n2 PEDI $PEDI\n1 SLGC\n2 FAMC @$famid@";
			break;
		case 'foster':
			$gedrec.="1 FAMC @$famid@\n2 PEDI $PEDI\n1 EVEN\n2 TYPE $PEDI";
			break;
		default:
			$gedrec.="1 FAMC @$famid@";
			break;
		}
		$gedrec .= "\n";
	}

	if (safe_POST_bool('SOUR_INDI')) {
		$gedrec = handle_updates($gedrec);
	} else {
		$gedrec = updateRest($gedrec);
	}

	if (PGV_DEBUG) {
		echo "<pre>$gedrec</pre>";
	}
	$xref = append_gedrec($gedrec, $update_CHAN);
	$link = "individual.php?pid=$xref&show_changes=yes";
	if ($xref) {
		echo "<br /><br />", $pgv_lang["update_successful"];
		$gedrec = "";
		if (!empty($famid)) {
			// Insert new child at the right place [ 1686246 ]
			$newchild = Person::getInstance($xref);
			$family = Family::getInstance($famid);
			if ($family->getUpdatedFamily()) $family = $family->getUpdatedFamily();
			$gedrec = $family->gedrec;
			$done = false;
			foreach ($family->getChildren() as $key=>$child) {
				if (GedcomDate::Compare($newchild->getEstimatedBirthDate(), $child->getEstimatedBirthDate())<0) {
					// new child is older : insert before
					$gedrec = str_replace("1 CHIL @".$child->getXref()."@",
																"1 CHIL @$xref@\n1 CHIL @".$child->getXref()."@",
																$gedrec);
					$done = true;
					break;
				}
			}
			// new child is the only one
			if (count($family->getChildren())<1) $gedrec .= "\n1 CHIL @$xref@";
			else if (!$done) {
				// new child is the youngest or undated : insert after
				$gedrec = str_replace("1 CHIL @".$child->getXref()."@",
															"1 CHIL @".$child->getXref()."@\n1 CHIL @$xref@",
															$gedrec);
			}
			if (PGV_DEBUG) {
				echo "<pre>$gedrec</pre>";
			}
			replace_gedrec($famid, $gedrec, $update_CHAN);
		}
		$success = true;
	}
	break;
//------------------------------------------------------------------------------
case 'addspouseaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}

	splitSOUR(); // separate SOUR record from the rest

	$gedrec ="0 @REF@ INDI\n";
	$gedrec.=addNewName();
	$gedrec.=addNewSex ();
	if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FACTS, $matches)) {
		foreach ($matches[1] as $match) {
			$gedrec.=addNewFact($match);
		}
	}

	if (safe_POST_bool('SOUR_INDI')) {
		$gedrec = handle_updates($gedrec);
	} else {
		$gedrec = updateRest($gedrec);
	}

	if (PGV_DEBUG) {
		echo "<pre>$gedrec</pre>";
	}
	$xref = append_gedrec($gedrec, $update_CHAN);
	$link = "individual.php?pid=$xref&show_changes=yes";
	if ($xref) echo "<br /><br />", $pgv_lang["update_successful"];
	else exit;
	$spouserec = $gedrec;
	$success = true;
	if ($famid=="new") {
		$famrec = "0 @new@ FAM\n";
		$SEX=safe_POST('SEX', '[MF]', 'U');
		if ($SEX=="M") $famtag = "HUSB";
		if ($SEX=="F") $famtag = "WIFE";
		if ($famtag=="HUSB") {
			$famrec .= "1 HUSB @$xref@\n";
			$famrec .= "1 WIFE @$pid@\n";
		}
		else {
			$famrec .= "1 WIFE @$xref@\n";
			$famrec .= "1 HUSB @$pid@\n";
		}

		if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FAMFACTS, $matches)) {
			foreach ($matches[1] as $match) {
				$famrec.=addNewFact($match);
			}
		}

		if (safe_POST_bool('SOUR_FAM')) {
			$famrec = handle_updates($famrec);
		} else {
			$famrec = updateRest($famrec);
		}

		if (PGV_DEBUG) {
			echo "<pre>$famrec</pre>";
		}
		$famid = append_gedrec($famrec, $update_CHAN);
	}
	else if (!empty($famid)) {
		$famrec = "";
		if (isset($pgv_changes[$famid."_".PGV_GEDCOM])) $famrec = find_updated_record($famid, PGV_GED_ID);
		else $famrec = find_family_record($famid, PGV_GED_ID);
		if (!empty($famrec)) {
			$famrec = trim($famrec) . "\n1 $famtag @$xref@\n";

			if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FAMFACTS, $matches)) {
				foreach ($matches[1] as $match) {
					$famrec.=addNewFact($match);
				}
			}

			if (safe_POST_bool('SOUR_FAM')) {
				$famrec = handle_updates($famrec);
			} else {
				$famrec = updateRest($famrec);
			}

			if (PGV_DEBUG) {
				echo "<pre>$famrec</pre>";
			}
			replace_gedrec($famid, $famrec, $update_CHAN);
		}
	}
	if ((!empty($famid))&&($famid!="new")) {
		$gedrec = $spouserec;
		$gedrec = trim($gedrec) . "\n1 FAMS @$famid@\n";
		if (PGV_DEBUG) {
			echo "<pre>$gedrec</pre>";
		}
		replace_gedrec($xref, $gedrec, $update_CHAN);
	}
	if (!empty($pid)) {
		$indirec="";
		if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) $indirec = find_gedcom_record($pid, PGV_GED_ID);
		else $indirec = find_updated_record($pid, PGV_GED_ID);
		if ($indirec) {
			$indirec = trim($indirec) . "\n1 FAMS @$famid@\n";
			if (PGV_DEBUG) {
				echo "<pre>$indirec</pre>";
			}
			replace_gedrec($pid, $indirec, $update_CHAN);
		}
	}
	break;
//------------------------------------------------------------------------------
case 'linkspouseaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}

	splitSOUR(); // separate SOUR record from the rest

	if (isset($_REQUEST['spid'])) $spid = $_REQUEST['spid'];
	if (!empty($spid)) {
		if (isset($pgv_changes[$spid.'_'.PGV_GEDCOM])) $gedrec = find_updated_record($spid, PGV_GED_ID);
		else $gedrec = find_person_record($spid, PGV_GED_ID);
		$gedrec = trim($gedrec);
		if (!empty($gedrec)) {
			if ($famid=="new") {
				$famrec = "0 @new@ FAM\n";
				$SEX = get_gedcom_value("SEX", 1, $gedrec, '', false);
				if ($SEX=="M") $famtag = "HUSB";
				if ($SEX=="F") $famtag = "WIFE";
				if ($famtag=="HUSB") {
					$famrec .= "1 HUSB @$spid@\n";
					$famrec .= "1 WIFE @$pid@\n";
				}
				else {
					$famrec .= "1 WIFE @$spid@\n";
					$famrec .= "1 HUSB @$pid@\n";
				}
				$famrec.=addNewFact('MARR');

				if (safe_POST_bool('SOUR_FAM') || count($tagSOUR)>0) {
					// before adding 2 SOUR it needs to add 1 MARR Y first
					if (addNewFact('MARR')=='') {
						$famrec .= "1 MARR Y\n";
					}
					$famrec = handle_updates($famrec);
				} else {
					// before adding level 2 facts it needs to add 1 MARR Y first
					if (addNewFact('MARR')=='') {
						$famrec .= "1 MARR Y\n";
					}
					$famrec = updateRest($famrec);
				}

				if (PGV_DEBUG) {
					echo "<pre>$famrec</pre>";
				}
				$famid = append_gedrec($famrec, $update_CHAN);
			}
			if ((!empty($famid))&&($famid!="new")) {
				$gedrec .= "\n1 FAMS @$famid@\n";
				if (PGV_DEBUG) {
					echo "<pre>$gedrec</pre>";
				}
				replace_gedrec($spid, $gedrec, $update_CHAN);
			}
			if (!empty($pid)) {
				$indirec="";
				if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) $indirec = find_gedcom_record($pid, PGV_GED_ID);
				else $indirec = find_updated_record($pid, PGV_GED_ID);
				if (!empty($indirec)) {
					$indirec = trim($indirec) . "\n1 FAMS @$famid@\n";
					if (PGV_DEBUG) {
						echo "<pre>$indirec</pre>";
					}
					replace_gedrec($pid, $indirec, $update_CHAN);
				}
			}
		}
	}
	break;
//------------------------------------------------------------------------------
case 'addnewparentaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}

	splitSOUR(); // separate SOUR record from the rest

	$gedrec ="0 @REF@ INDI\n";
	$gedrec.=addNewName();
	$gedrec.=addNewSex ();
	if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FACTS, $matches)) {
		foreach ($matches[1] as $match) {
			$gedrec.=addNewFact($match);
		}
	}

	if (safe_POST_bool('SOUR_INDI')) {
		$gedrec = handle_updates($gedrec);
	} else {
		$gedrec = updateRest($gedrec);
	}

	if (PGV_DEBUG) {
		echo "<pre>$gedrec</pre>";
	}
	$xref = append_gedrec($gedrec, $update_CHAN);
	$link = "individual.php?pid=$xref&show_changes=yes";
	if ($xref) echo "<br /><br />", $pgv_lang["update_successful"];
	else exit;
	$spouserec = $gedrec;
	$success = true;
	if ($famid=="new") {
		$famrec = "0 @new@ FAM\n";
		if ($famtag=="HUSB") {
			$famrec .= "1 HUSB @$xref@\n";
			$famrec .= "1 CHIL @$pid@\n";
		}
		else {
			$famrec .= "1 WIFE @$xref@\n";
			$famrec .= "1 CHIL @$pid@\n";
		}

		if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FAMFACTS, $matches)) {
			foreach ($matches[1] as $match) {
				$famrec.=addNewFact($match);
			}
		}

		if (safe_POST_bool('SOUR_FAM')) {
			$famrec = handle_updates($famrec);
		} else {
			$famrec = updateRest($famrec);
		}

		if (PGV_DEBUG) {
			echo "<pre>$famrec</pre>";
		}
		$famid = append_gedrec($famrec, $update_CHAN);
	}
	else if (!empty($famid)) {
		$famrec = "";
		if (isset($pgv_changes[$famid."_".PGV_GEDCOM])) $famrec = find_updated_record($famid, PGV_GED_ID);
		else $famrec = find_family_record($famid, PGV_GED_ID);
		if (!empty($famrec)) {
			$famrec = trim($famrec) . "\n1 $famtag @$xref@\n";

			if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FAMFACTS, $matches)) {
				foreach ($matches[1] as $match) {
					$famrec.=addNewFact($match);
				}
			}

			if (safe_POST_bool('SOUR_FAM')) {
				$famrec = handle_updates($famrec);
			} else {
				$famrec = updateRest($famrec);
			}

			if (PGV_DEBUG) {
				echo "<pre>$famrec</pre>";
			}
			replace_gedrec($famid, $famrec, $update_CHAN);
		}
	}
	if ((!empty($famid))&&($famid!="new")) {
			$gedrec = $spouserec;
			$gedrec = trim($gedrec) . "\n1 FAMS @$famid@\n";
			if (PGV_DEBUG) {
				echo "<pre>$gedrec</pre>";
			}
			replace_gedrec($xref, $gedrec, $update_CHAN);
	}
	if (!empty($pid)) {
		$indirec="";
		if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) $indirec = find_gedcom_record($pid, PGV_GED_ID);
		else $indirec = find_updated_record($pid, PGV_GED_ID);
		$indirec = trim($indirec);
		if ($indirec) {
			if (strpos($indirec, "1 FAMC @$famid@")===false) {
				$indirec = trim($indirec) . "\n1 FAMC @$famid@\n";
				if (PGV_DEBUG) {
					echo "<pre>$indirec</pre>";
				}
				replace_gedrec($pid, $indirec, $update_CHAN);
			}
		}
	}
	break;
//------------------------------------------------------------------------------
case 'addopfchildaction':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}

	splitSOUR(); // separate SOUR record from the rest

	$newindixref=get_new_xref('INDI');
	$newfamxref=get_new_xref('FAM');

	$gedrec ="0 @{$newindixref}@ INDI\n1 FAMC @{$newfamxref}@\n".addNewName().addNewSex ();
	if (preg_match_all('/([A-Z0-9_]+)/', $QUICK_REQUIRED_FACTS, $matches)) {
		foreach ($matches[1] as $match) {
			$gedrec.=addNewFact($match);
		}
	}

	if (safe_POST_bool('SOUR_INDI')) {
		$gedrec=handle_updates($gedrec);
	} else {
		$gedrec=updateRest($gedrec);
	}

	$famrec="0 @$newfamxref@ FAM\n1 CHIL @{$newindixref}@";
	$person=Person::getInstance($pid);
	if ($person->getSex()=='F') {
		$famrec.="\n1 WIFE @{$pid}@";
	} else {
		$famrec.="\n1 HUSB @{$pid}@";
	}

	if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) {
		$indirec=find_gedcom_record($pid, PGV_GED_ID);
	} else {
		$indirec=find_updated_record($pid, PGV_GED_ID);
	}
	if ($indirec) {
		$indirec.="\n1 FAMS @{$newfamxref}@";
		if (PGV_DEBUG) {
			echo "<pre>$gedrec</pre>";
			echo "<pre>$famrec</pre>";
			echo "<pre>$indirec</pre>";
		}
		if (replace_gedrec($pid, $indirec, $update_CHAN) && append_gedrec($gedrec, $update_CHAN) && append_gedrec($famrec, $update_CHAN)) {
			echo "<br /><br />", $pgv_lang["update_successful"];
			$success = true;
		}
	}
	break;
//------------------------------------------------------------------------------
case 'deleteperson':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
		echo "<pre>$gedrec</pre>";
	}
	if (!checkFactEdit($gedrec)) {
		echo "<br />", $pgv_lang["privacy_prevented_editing"];
		if (!empty($pid)) echo "<br />", $pgv_lang["privacy_not_granted"], " pid $pid.";
		if (!empty($famid)) echo "<br />", $pgv_lang["privacy_not_granted"], " famid $famid.";
	}
	else {
		if (delete_person($pid, $gedrec)) echo "<br /><br />", $pgv_lang["gedrec_deleted"];
	}
	break;
//------------------------------------------------------------------------------
case 'deletefamily':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
		echo "<pre>$gedrec</pre>";
	}
	if (!checkFactEdit($gedrec)) {
		echo "<br />", $pgv_lang["privacy_prevented_editing"];
		if (!empty($pid)) echo "<br />", $pgv_lang["privacy_not_granted"], " pid $pid.";
		if (!empty($famid)) echo "<br />", $pgv_lang["privacy_not_granted"], " famid $famid.";
	}
	else
	{
		if (delete_family($famid, $gedrec)) echo "<br /><br />", $pgv_lang["gedrec_deleted"];
	}
	break;


//----------------------------------------------------------------------------------
// This case will now delete Shared notes as well, as $pid is passed with call
// from source_ctrl.php or note_ctrl.php (line 208  submenu->addOnclick ..... etc)
// ---------------------------------------------------------------------------------
case 'deletenote':
case 'deletesource':
case 'deleterepo':

if (isset($_REQUEST['action'])) $action = $_REQUEST['action'];

	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
		echo "<pre>$gedrec</pre>";
	}
	if (!empty($gedrec)) {
		$success = true;
		// Delete links to this record
		foreach (fetch_all_links($pid, PGV_GED_ID) as $xref) {
			if (isset($pgv_changes[$xref.'_'.PGV_GEDCOM])) {
				$gedrec=find_updated_record($xref, PGV_GED_ID);
			} else {
				$gedrec=find_gedcom_record($xref, PGV_GED_ID);
			}
			$lines = explode("\n", $gedrec);
			$newrec = "";
			$skipline = false;
			$glevel = 0;
			foreach ($lines as $indexval => $line) {
				if ((preg_match("/^\d ".PGV_REGEX_TAG." @$pid@/", $line)==0)&&(!$skipline)) $newrec .= $line."\n";
				else {
					if (!$skipline) {
						$glevel = $line{0};
						$skipline = true;
					}
					else {
						if ($line{0}<=$glevel) {
							$skipline = false;
							$newrec .= $line."\n";
						}
					}
				}
			}
			if (PGV_DEBUG) {
				echo "<pre>$newrec</pre>";
			}
			$success = $success && replace_gedrec($xref, $newrec, $update_CHAN);
		}

		if ($success) {
			$success = $success && delete_gedrec($pid);
		}
		if ($success) {
			echo "<br /><br />".$pgv_lang["gedrec_deleted"];
		}
	}
	break;
//------------------------------------------------------------------------------
case 'editname':
	$gedlines = explode("\n", trim($gedrec));
	$fields = explode(' ', $gedlines[$linenum]);
	$glevel = $fields[0];
	$i = $linenum+1;
	$namerec = $gedlines[$linenum];
	while (($i<count($gedlines))&&($gedlines[$i]{0}>$glevel)) {
		$namerec.="\n".$gedlines[$i];
		$i++;
	}
	print_indi_form("update", "", $linenum, $namerec);
	break;
//------------------------------------------------------------------------------
case 'addname':
	print_indi_form("update", "", "new", "NEW");
	break;
//------------------------------------------------------------------------------
case 'copy':
	//-- handle media differently now :P
	if ($linenum=='media') {
		$factrec = "1 OBJE @".$pid."@";
		$type="all";
		echo "<br />";
	}
	else {
		$gedlines = explode("\n", trim($gedrec));
		$fields = explode(' ', $gedlines[$linenum]);
		$glevel = $fields[0];
		$i = $linenum+1;
		$factrec = $gedlines[$linenum];
		while (($i<count($gedlines))&&($gedlines[$i]{0}>$glevel)) {
			$factrec.="\n".$gedlines[$i];
			$i++;
		}
	}
	if (!isset($_SESSION["clipboard"])) $_SESSION["clipboard"] = array();
	$ft = preg_match("/1 (_?[A-Z]{3,5})(.*)/", $factrec, $match);
	if ($ft>0) {
		$fact = trim($match[1]);
		if ($fact=="EVEN" || $fact=="FACT") {
			$ct = preg_match("/2 TYPE (.*)/", $factrec, $match);
			if ($ct>0) $fact = trim($match[1]);
		}
		if (count($_SESSION["clipboard"])>9) array_pop($_SESSION["clipboard"]);
		$_SESSION["clipboard"][] = array("type"=>$type, "factrec"=>$factrec, "fact"=>$fact);
		echo "<b>", $pgv_lang["record_copied"], "</b>\n";
		$success = true;
	}
	break;
//------------------------------------------------------------------------------
case 'paste':
	$gedrec .= "\n".$_SESSION["clipboard"][$fact]["factrec"]."\n";
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
		echo "<pre>$gedrec</pre>";
	}
	$success = replace_gedrec($pid, $gedrec, $update_CHAN);
	if ($success) echo "<br /><br />", $pgv_lang["update_successful"];
	break;


//LBox  Reorder Media ========================================================

//------------------------------------------------------------------------------
case 'reorder_media': // Sort page using Popup
	require_once PGV_ROOT.'js/prototype.js.htm';
	require_once PGV_ROOT.'js/scriptaculous.js.htm';
	require_once PGV_ROOT.'includes/media_reorder.php';
	break;

//------------------------------------------------------------------------------
case 'reset_media_update': // Reset sort using popup
	$lines = explode("\n", $gedrec);
	$newgedrec = "";
	foreach ($lines as $line) {
		if (strpos($line, "1 _PGV_OBJS")===false) {
			$newgedrec .= $line."\n";
		}
	}
	$success = (replace_gedrec($pid, $newgedrec, $update_CHAN));
	if ($success) { 
		echo "<br />", $pgv_lang["update_successful"], "<br /><br />";
	}
	break;

//------------------------------------------------------------------------------
case 'reorder_media_update': // Update sort using popup
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	if (isset($_REQUEST['order1'])) $order1 = $_REQUEST['order1'];
	$lines = explode("\n", $gedrec);
	$newgedrec = "";
	foreach ($lines as $line) {
		if (strpos($line, "1 _PGV_OBJS")===false) {
			$newgedrec .= $line."\n";
		}
	}
	foreach ($order1 as $m_media=>$num) {
		$newgedrec .= "1 _PGV_OBJS @".$m_media."@\n";
	}
	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	$success = (replace_gedrec($pid, $newgedrec, $update_CHAN));
	if ($success) echo "<br />", $pgv_lang["update_successful"], "<br /><br />";
		// $mediaordsuccess='yes';
		if ($_COOKIE['lasttabs'][strlen($_COOKIE['lasttabs'])-1]==8) {
			$link = "individual.php?pid=$pid&tab=7&show_changes=yes";
		}elseif ($_COOKIE['lasttabs'][strlen($_COOKIE['lasttabs'])-1]==7) {
			$link = "individual.php?pid=$pid&tab=6&show_changes=yes";
		}else{
			$link = "individual.php?pid=$pid&tab=3&show_changes=yes";
		}
		echo PGV_JS_START;
		echo "edit_close('{$link}');";
		echo PGV_JS_END;
	break;

//------------------------------------------------------------------------------
case 'al_reset_media_update': // Reset sort using Album Page
	$lines = explode("\n", $gedrec);
	$newgedrec = "";
	foreach ($lines as $line) {
		if (strpos($line, "1 _PGV_OBJS")===false) {
			$newgedrec .= $line."\n";
		}
	}
	$success = (replace_gedrec($pid, $newgedrec, $update_CHAN));
	if ($success) echo "<br />", $pgv_lang["update_successful"], "<br /><br />";
		if (!file_exists(PGV_ROOT.'modules/googlemap/defaultconfig.php')) {
			$tabno = "7";
		}else{
			$tabno = "8";
		}
		echo PGV_JS_START;
		echo "location.href='individual.php?pid={$pid}&tab={$tabno}'";
		echo PGV_JS_END;
	break;

//------------------------------------------------------------------------------
case 'al_reorder_media_update': // Update sort using Album Page
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	if (isset($_REQUEST['order1'])) $order1 = $_REQUEST['order1'];

	function SwapArray($Array){
		$Values = array();
		while (list($Key, $Val) = each($Array))
			$Values[$Val] = $Key;
		return $Values;
	}
	if (isset($_REQUEST['order2'])) $order2 = $_REQUEST['order2'];
	$order2 = SwapArray(explode(",", substr($order2, 0, -1)));

	$lines = explode("\n", $gedrec);
	$newgedrec = "";
	foreach ($lines as $line) {
		if (strpos($line, "1 _PGV_OBJS")===false) {
			$newgedrec .= $line."\n";
		}
	}
	foreach ($order2 as $m_media=>$num) {
		$newgedrec .= "1 _PGV_OBJS @".$m_media."@\n";
	}
	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	$success = (replace_gedrec($pid, $newgedrec, $update_CHAN));
	if ($success) {
		if (!file_exists(PGV_ROOT.'modules/googlemap/defaultconfig.php')) {
			$tabno = "7";
		}else{
			$tabno = "8";
		}
		echo PGV_JS_START;
		echo "location.href='individual.php?pid={$pid}&tab={$tabno}'";
		echo PGV_JS_END;
	}
	break;

//LBox ===================================================


//------------------------------------------------------------------------------
case 'reorder_children':
	require_once PGV_ROOT.'js/prototype.js.htm';
	require_once PGV_ROOT.'js/scriptaculous.js.htm';
	echo "<br /><b>", $pgv_lang["reorder_children"], "</b>";
	print_help_link("reorder_children_help", "qm", "reorder_children");
	?>
	<form name="reorder_form" method="post" action="edit_interface.php">
		<input type="hidden" name="action" value="reorder_update" />
		<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
		<input type="hidden" name="option" value="bybirth" />
		<ul id="reorder_list">
		<?php
			// reorder children in modified families [ 1840895 ]
			$family = Family::getInstance($pid);
			$ids = $family->getChildrenIds();
			if ($family->getUpdatedFamily()) $family = $family->getUpdatedFamily();
			$children = array();
			foreach ($family->getChildren() as $k=>$child) {
				$bdate = $child->getEstimatedBirthDate();
				if ($bdate->isOK()) {
					$sortkey = $bdate->JD();
				} else {
					$sortkey = 1e8; // birth date missing => sort last
				}
				$children[$child->getXref()] = $sortkey;
			}
			if ((!empty($option))&&($option=="bybirth")) {
				asort($children);
			}
			$i=0;
			$show_full = 1; // Force details to show for each child
			foreach ($children as $id=>$child) {
				echo "<li style=\"cursor:move;margin-bottom:2px;\"";
				if (!in_array($id, $ids)) echo " class=\"facts_valueblue\"";
				echo " id=\"li_$id\" >";
				print_pedigree_person($id, 2, false);
				echo "<input type=\"hidden\" name=\"order[$id]\" value=\"$i\"/>";
				echo "</li>";
				$i++;
			}
		?>
		</ul>
		<?php echo PGV_JS_START; ?>
			new Effect.BlindDown('reorder_list', {duration: 1});
			Sortable.create('reorder_list',
				{
					scroll:window,
					onUpdate : function() {
						inputs = $('reorder_list').getElementsByTagName("input");
						for (var i = 0; i < inputs.length; i++) inputs[i].value = i;
					}
				}
			);
		<?php echo PGV_JS_END; ?>
		<button type="submit"><?php echo $pgv_lang["save"]; ?></button>
		<button type="submit" onclick="document.reorder_form.action.value='reorder_children'; document.reorder_form.submit();"><?php echo $pgv_lang["sort_by_birth"]; ?></button>
		<button type="submit" onclick="window.close();"><?php echo $pgv_lang["cancel"]; ?></button>
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
case 'changefamily':
	require_once PGV_ROOT.'includes/classes/class_family.php';
	$family = new Family($gedrec);
	$father = $family->getHusband();
	$mother = $family->getWife();
	$children = $family->getChildren();
	if (count($children)>0) {
		if (!is_null($father)) {
			if ($father->getSex()=="F") $father->setLabel($pgv_lang["mother"]);
			else $father->setLabel($pgv_lang["father"]);
		}
		if (!is_null($mother)) {
			if ($mother->getSex()=="M") $mother->setLabel($pgv_lang["father"]);
			else $mother->setLabel($pgv_lang["mother"]);
		}
		for ($i=0; $i<count($children); $i++) {
			if (!is_null($children[$i])) {
				if ($children[$i]->getSex()=="M") {
					$children[$i]->setLabel($pgv_lang["son"]);
				} elseif ($children[$i]->getSex()=="F") {
					$children[$i]->setLabel($pgv_lang["daughter"]);
				} else {
					$children[$i]->setLabel($pgv_lang["child"]);
				}
			}
		}
	}
	else {
		if (!is_null($father)) {
			if ($father->getSex()=="F") {
				$father->setLabel($pgv_lang["wife"]);
			} elseif ($father->getSex()=="M") {
				$father->setLabel($pgv_lang["husband"]);
			} else {
				$father->setLabel($pgv_lang["spouse"]);
			}
		}
		if (!is_null($mother)) {
			if ($mother->getSex()=="F") {
				$mother->setLabel($pgv_lang["wife"]);
			} elseif ($mother->getSex()=="M") {
				$mother->setLabel($pgv_lang["husband"]);
			} else {
				$father->setLabel($pgv_lang["spouse"]);
			}
		}
	}
	echo PGV_JS_START;
	?>
		var nameElement = null;
		var remElement = null;
		function pastename(name) {
			if (nameElement) {
				nameElement.innerHTML = name;
			}
			if (remElement) {
				remElement.style.display = 'block';
			}
		}
	<?php echo PGV_JS_END; ?>
	<br /><br />
	<?php echo $pgv_lang["change_family_instr"]; ?>
	<form name="changefamform" method="post" action="edit_interface.php">
		<input type="hidden" name="action" value="changefamily_update" />
		<input type="hidden" name="famid" value="<?php echo $famid; ?>" />
		<table class="width50 <?php echo $TEXT_DIRECTION; ?>">
			<tr><td colspan="3" class="topbottombar"><?php echo $pgv_lang["change_family_members"]; ?></td></tr>
			<tr>
			<?php
			if (!is_null($father)) {
			?>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?>"><b><?php echo $father->getLabel(); ?></b><input type="hidden" name="HUSB" value="<?php echo $father->getXref(); ?>" /></td>
				<td id="HUSBName" class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php echo PrintReady($father->getFullName()); ?></td>
			<?php
			}
			else {
			?>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?>"><b><?php echo $pgv_lang["spouse"]; ?></b><input type="hidden" name="HUSB" value="" /></td>
				<td id="HUSBName" class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>"></td>
			<?php
			}
			?>
				<td class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>">
					<a href="javascript:;" id="husbrem" style="display: <?php echo is_null($father) ? 'none':'block'; ?>;" onclick="document.changefamform.HUSB.value=''; document.getElementById('HUSBName').innerHTML=''; this.style.display='none'; return false;"><?php echo $pgv_lang["remove"]; ?></a>
					<a href="javascript:;" onclick="nameElement = document.getElementById('HUSBName'); remElement = document.getElementById('husbrem'); return findIndi(document.changefamform.HUSB);"><?php echo $pgv_lang["change"]; ?></a><br />
				</td>
			</tr>
			<tr>
			<?php
			if (!is_null($mother)) {
			?>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?>"><b><?php echo $mother->getLabel(); ?></b><input type="hidden" name="WIFE" value="<?php echo $mother->getXref(); ?>" /></td>
				<td id="WIFEName" class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>"><?php echo PrintReady($mother->getFullName()); ?></td>
			<?php
			}
			else {
			?>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?>"><b><?php echo $pgv_lang["spouse"]; ?></b><input type="hidden" name="WIFE" value="" /></td>
				<td id="WIFEName" class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>"></td>
			<?php
			}
			?>
				<td class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>">
					<a href="javascript:;" id="wiferem" style="display: <?php echo is_null($mother) ? 'none':'block'; ?>;" onclick="document.changefamform.WIFE.value=''; document.getElementById('WIFEName').innerHTML=''; this.style.display='none'; return false;"><?php echo $pgv_lang["remove"]; ?></a>
					<a href="javascript:;" onclick="nameElement = document.getElementById('WIFEName'); remElement = document.getElementById('wiferem'); return findIndi(document.changefamform.WIFE);"><?php echo $pgv_lang["change"]; ?></a><br />
				</td>
			</tr>
			<?php
			$i=0;
			foreach ($children as $key=>$child) {
				if (!is_null($child)) {
				?>
			<tr>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?>"><b><?php echo $child->getLabel(); ?></b><input type="hidden" name="CHIL<?php echo $i; ?>" value="<?php echo $child->getXref(); ?>" /></td>
				<td id="CHILName<?php echo $i; ?>" class="optionbox wrap"><?php echo PrintReady($child->getFullName()); ?></td>
				<td class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>">
					<a href="javascript:;" id="childrem<?php echo $i; ?>" style="display: block;" onclick="document.changefamform.CHIL<?php echo $i; ?>.value=''; document.getElementById('CHILName<?php echo $i; ?>').innerHTML=''; this.style.display='none'; return false;"><?php echo $pgv_lang["remove"]; ?></a>
					<a href="javascript:;" onclick="nameElement = document.getElementById('CHILName<?php echo $i; ?>'); remElement = document.getElementById('childrem<?php echo $i; ?>'); return findIndi(document.changefamform.CHIL<?php echo $i; ?>);"><?php echo $pgv_lang["change"]; ?></a><br />
				</td>
			</tr>
				<?php
					$i++;
				}
			}
				?>
			<tr>
				<td class="descriptionbox <?php echo $TEXT_DIRECTION; ?>"><b><?php echo $pgv_lang["add_child"]; ?></b><input type="hidden" name="CHIL<?php echo $i; ?>" value="" /></td>
				<td id="CHILName<?php echo $i; ?>" class="optionbox wrap"></td>
				<td class="optionbox wrap <?php echo $TEXT_DIRECTION; ?>">
					<a href="javascript:;" id="childrem<?php echo $i; ?>" style="display: none;" onclick="document.changefamform.CHIL<?php echo $i; ?>.value=''; document.getElementById('CHILName<?php echo $i; ?>').innerHTML=''; this.style.display='none'; return false;"><?php echo $pgv_lang["remove"]; ?></a>
					<a href="javascript:;" onclick="nameElement = document.getElementById('CHILName<?php echo $i; ?>'); remElement = document.getElementById('childrem<?php echo $i; ?>'); return findIndi(document.changefamform.CHIL<?php echo $i; ?>);"><?php echo $pgv_lang["change"]; ?></a><br />
				</td>
			</tr>
		</table>
		<!-- <a href="javascript: <?php echo $pgv_lang["add_unlinked_person"]; ?>" onclick="addnewchild(''); return false;"><?php echo $pgv_lang["add_unlinked_person"]; ?></a><br />-->
		<br />
		<input type="submit" value="<?php echo $pgv_lang["save"]; ?>" /><input type="button" value="<?php echo $pgv_lang["cancel"]; ?>" onclick="window.close();" />
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
case 'changefamily_update':
	require_once PGV_ROOT.'includes/classes/class_family.php';
	$family = new Family($gedrec);
	$father = $family->getHusband();
	$mother = $family->getWife();
	$children = $family->getChildren();
	$updated = false;
	//-- add the new father link
	if (isset($_REQUEST['HUSB'])) $HUSB = $_REQUEST['HUSB'];
	if (!empty($HUSB) && (is_null($father) || $father->getXref()!=$HUSB)) {
		if (strstr($gedrec, "1 HUSB")!==false)
			$gedrec = preg_replace("/1 HUSB @.*@/", "1 HUSB @$HUSB@", $gedrec);
		else $gedrec .= "\n1 HUSB @$HUSB@\n";
		if (isset($pgv_changes[$HUSB."_".PGV_GEDCOM])) $indirec = find_updated_record($HUSB, PGV_GED_ID);
		else $indirec = find_person_record($HUSB, PGV_GED_ID);
		if (!empty($indirec) && (strpos($indirec, "1 FAMS @$famid@")===false)) {
			$indirec .= "\n1 FAMS @$famid@\n";
			replace_gedrec($HUSB, $indirec, $update_CHAN);
		}
		$updated = true;
	}
	//-- remove the father link
	if (empty($HUSB)) {
		$pos1 = strpos($gedrec, "1 HUSB @");
		if ($pos1!==false) {
			$pos2 = strpos($gedrec, "\n1", $pos1+5);
			if ($pos2===false) $pos2 = strlen($gedrec);
			else $pos2++;
			$gedrec = substr($gedrec, 0, $pos1) . substr($gedrec, $pos2);
		}
		$updated = true;
	}
	//-- remove the FAMS link from the old father
	if (!is_null($father) && $father->getXref()!=$HUSB) {
		if (isset($pgv_changes[$father->getXref()."_".PGV_GEDCOM])) $indirec = find_updated_record($father->getXref(), PGV_GED_ID);
		else $indirec = find_person_record($father->getXref(), PGV_GED_ID);
		$pos1 = strpos($indirec, "1 FAMS @$famid@");
		if ($pos1!==false) {
			$pos2 = strpos($indirec, "\n1", $pos1+5);
			if ($pos2===false) $pos2 = strlen($indirec);
			else $pos2++;
			$indirec = substr($indirec, 0, $pos1) . substr($indirec, $pos2);
			replace_gedrec($father->getXref(), $indirec, $update_CHAN);
		}
	}
	//-- add the new mother link
	if (isset($_REQUEST['WIFE'])) $WIFE = $_REQUEST['WIFE'];
	if (!empty($WIFE) && (is_null($mother) || $mother->getXref()!=$WIFE)) {
		if (strstr($gedrec, "1 WIFE")!==false)
			$gedrec = preg_replace("/1 WIFE @.*@/", "1 WIFE @$WIFE@", $gedrec);
		else $gedrec .= "\n1 WIFE @$WIFE@\n";
		if (isset($pgv_changes[$WIFE."_".PGV_GEDCOM])) $indirec = find_updated_record($WIFE, PGV_GED_ID);
		else $indirec = find_person_record($WIFE, PGV_GED_ID);
		if (!empty($indirec) && (strpos($indirec, "1 FAMS @$famid@")===false)) {
			$indirec .= "\n1 FAMS @$famid@\n";
			replace_gedrec($WIFE, $indirec, $update_CHAN);
		}
		$updated = true;
	}
	//-- remove the father link
	if (empty($WIFE)) {
		$pos1 = strpos($gedrec, "1 WIFE @");
		if ($pos1!==false) {
			$pos2 = strpos($gedrec, "\n1", $pos1+5);
			if ($pos2===false) $pos2 = strlen($gedrec);
			else $pos2++;
			$gedrec = substr($gedrec, 0, $pos1) . substr($gedrec, $pos2);
		}
		$updated = true;
	}
	//-- remove the FAMS link from the old father
	if (!is_null($mother) && $mother->getXref()!=$WIFE) {
		if (isset($pgv_changes[$mother->getXref()."_".PGV_GEDCOM])) $indirec = find_updated_record($mother->getXref(), PGV_GED_ID);
		else $indirec = find_person_record($mother->getXref(), PGV_GED_ID);
		$pos1 = strpos($indirec, "1 FAMS @$famid@");
		if ($pos1!==false) {
			$pos2 = strpos($indirec, "\n1", $pos1+5);
			if ($pos2===false) $pos2 = strlen($indirec);
			else $pos2++;
			$indirec = substr($indirec, 0, $pos1) . substr($indirec, $pos2);
			replace_gedrec($mother->getXref(), $indirec, $update_CHAN);
		}
	}

	//-- update the children
	$i=0;
	$var = "CHIL".$i;
	$newchildren = array();
	while (isset($_REQUEST[$var])) {
		$CHIL = $_REQUEST[$var];
		if (!empty($CHIL)) {
			$newchildren[] = $CHIL;
			if (strpos($gedrec, "1 CHIL @$CHIL@")===false) {
				$gedrec .= "\n1 CHIL @$CHIL@\n";
				$updated = true;
				if (isset($pgv_changes[$CHIL."_".PGV_GEDCOM])) $indirec = find_updated_record($CHIL, PGV_GED_ID);
				else $indirec = find_person_record($CHIL, PGV_GED_ID);
				if (!empty($indirec) && (strpos($indirec, "1 FAMC @$famid@")===false)) {
					$indirec .= "\n1 FAMC @$famid@\n";
					replace_gedrec($CHIL, $indirec, $update_CHAN);
				}
			}
		}
		$i++;
		$var = "CHIL".$i;
	}

	//-- remove the old children
	foreach ($children as $key=>$child) {
		if (!is_null($child)) {
			if (!in_array($child->getXref(), $newchildren)) {
				//-- remove the CHIL link from the family record
				$pos1 = strpos($gedrec, "1 CHIL @".$child->getXref()."@");
				if ($pos1!==false) {
					$pos2 = strpos($gedrec, "\n1", $pos1+5);
					if ($pos2===false) $pos2 = strlen($gedrec);
					else $pos2++;
					$gedrec = substr($gedrec, 0, $pos1) . substr($gedrec, $pos2);
					$updated = true;
				}
				//-- remove the FAMC link from the child record
				if (isset($pgv_changes[$child->getXref()."_".PGV_GEDCOM])) $indirec = find_updated_record($child->getXref(), PGV_GED_ID);
				else $indirec = find_person_record($child->getXref(), PGV_GED_ID);
				$pos1 = strpos($indirec, "1 FAMC @$famid@");
				if ($pos1!==false) {
					$pos2 = strpos($indirec, "\n1", $pos1+5);
					if ($pos2===false) $pos2 = strlen($indirec);
					else $pos2++;
					$indirec = substr($indirec, 0, $pos1) . substr($indirec, $pos2);
					replace_gedrec($child->getXref(), $indirec, $update_CHAN);
				}
			}
		}
	}

	if ($updated) {
		$success = replace_gedrec($famid, $gedrec, $update_CHAN);
		if ($success) echo "<br /><br />", $pgv_lang["update_successful"];
	}
	break;
//------------------------------------------------------------------------------
//-- edit a fact record in a form
case 'edit_family':
	init_calendar_popup();
	echo "<form method=\"post\" action=\"edit_interface.php\" enctype=\"multipart/form-data\">\n";
	echo "<input type=\"hidden\" name=\"action\" value=\"update\" />\n";
	echo "<input type=\"hidden\" name=\"famid\" value=\"$famid\" />\n";
	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";
	echo "<table class=\"facts_table\">";

	$gedlines = explode("\n", $gedrec); // -- find the number of lines in the record
	$empty = true;
	for ($i=$linenum; $i<count($gedlines); $i++) {
		$fields = explode(' ', $gedlines[$i]);
		if ((substr($gedlines[$i], 0, 1)<2) && $fields[1]!="HUSB" && $fields[1]!="WIFE" && $fields[1]!="CHIL" && $fields[1]!="CHAN") {
			$level1type = create_edit_form($gedrec, $i, $level0type);
			echo "<input type=\"hidden\" name=\"linenum[]\" value=\"$i\" />\n";
			$empty = false;
		}
	}
	if ($empty) {
		$linenum=count($gedlines);
		create_add_form("MARR");
		echo "<input type=\"hidden\" name=\"linenum[]\" value=\"$i\" />\n";
	}
	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm", "no_update_CHAN");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		if ($NO_UPDATE_CHAN) {
			echo "<input type=\"checkbox\" checked=\"checked\" name=\"preserve_last_changed\" />\n";
		} else {
			echo "<input type=\"checkbox\" name=\"preserve_last_changed\" />\n";
		}
		echo $pgv_lang["no_update_CHAN"], "<br />\n";
		$event = new Event(get_sub_record(1, "1 CHAN", $gedrec));
		echo format_fact_date($event, false, true);
		echo "</td></tr>\n";
	}
	echo "</table>";
	print_add_layer("NOTE");
	print_add_layer("SHARED_NOTE");
	print_add_layer("OBJE");
	//-- RESN missing in new structure, RESN can be added to all level 1 tags
	if (!in_array("RESN", $tags)) print_add_layer("RESN");
	echo "<br /><input type=\"submit\" value=\"", $pgv_lang["save"], "\" /><br />\n";
	echo "</form>\n";
	break;
//------------------------------------------------------------------------------
case 'reorder_update':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	if (isset($_REQUEST['order'])) $order = $_REQUEST['order'];
	asort($order);
	reset($order);
	$newgedrec = $gedrec;
	foreach ($order as $child=>$num) {
		// move each child subrecord to the bottom, in the order specified
		$subrec = get_sub_record(1, "1 CHIL @".$child."@", $gedrec);
		$subrec = trim($subrec, "\n");
		if (PGV_DEBUG) {
			echo "<pre>[", $subrec, "]</pre>";
		}
		$newgedrec = str_replace($subrec, "", $newgedrec);
		$newgedrec .= "\n".$subrec."\n";
	}
	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	$success = (replace_gedrec($pid, $newgedrec, $update_CHAN));
	if ($success) echo "<br /><br />", $pgv_lang["update_successful"];
	break;
//------------------------------------------------------------------------------
case 'reorder_fams':
	require_once PGV_ROOT.'js/prototype.js.htm';
	require_once PGV_ROOT.'js/scriptaculous.js.htm';
	echo "<br /><b>", $pgv_lang["reorder_families"], "</b>";
	print_help_link("reorder_families_help", "qm", "reorder_families");
	?>
	<form name="reorder_form" method="post" action="edit_interface.php">
		<input type="hidden" name="action" value="reorder_fams_update" />
		<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
		<input type="hidden" name="option" value="bymarriage" />
		<ul id="reorder_list">
		<?php
			$person = Person::getInstance($pid);
			$fams = $person->getSpouseFamilies();
			if ((!empty($option))&&($option=="bymarriage")) {
				uasort($fams, array('Family', 'CompareMarrDate'));
			}
			$i=0;
			foreach ($fams as $famid=>$family) {
				echo "<li class=\"facts_value\" style=\"cursor:move;margin-bottom:2px;\" id=\"li_$famid\" >";
				echo "<span class=\"name2\">", PrintReady($family->getFullName()), "</span><br />";
				echo $family->format_first_major_fact(PGV_EVENTS_MARR, 2);
				echo "<input type=\"hidden\" name=\"order[$famid]\" value=\"$i\"/>";
				echo "</li>";
				$i++;
			}
		?>
		</ul>
		<?php echo PGV_JS_START; ?>
			new Effect.BlindDown('reorder_list', {duration: 1});
			Sortable.create('reorder_list',
				{
					scroll:window,
					onUpdate : function() {
						inputs = $('reorder_list').getElementsByTagName("input");
						for (var i = 0; i < inputs.length; i++) inputs[i].value = i;
					}
				}
			);
		<?php echo PGV_JS_END; ?>
		<button type="submit"><?php echo $pgv_lang["save"]; ?></button>
		<button type="submit" onclick="document.reorder_form.action.value='reorder_fams'; document.reorder_form.submit();"><?php echo $pgv_lang["sort_by_marriage"]; ?></button>
		<button type="submit" onclick="window.close();"><?php echo $pgv_lang["cancel"]; ?></button>
	</form>
	<?php
	break;
//------------------------------------------------------------------------------
case 'reorder_fams_update':
	if (PGV_DEBUG) {
		phpinfo(INFO_VARIABLES);
	}
	if (isset($_REQUEST['order'])) $order = $_REQUEST['order'];
	asort($order);
	reset($order);
	$lines = explode("\n", $gedrec);
	$newgedrec = "";
	foreach ($lines as $line) {
		if (strpos($line, "1 FAMS")===false) {
			$newgedrec .= $line."\n";
		}
	}
	foreach ($order as $famid=>$num) {
		$newgedrec .= "1 FAMS @".$famid."@\n";
	}
	if (PGV_DEBUG) {
		echo "<pre>$newgedrec</pre>";
	}
	$success = (replace_gedrec($pid, $newgedrec, $update_CHAN));
	if ($success) {
		echo "<br /><br />", $pgv_lang["update_successful"];
	}
	break;
//------------------------------------------------------------------------------
//-- the following section provides a hook for modules
//-- for reuse of editing functions from forms
case 'mod_edit_fact':
	if (isset($_REQUEST['mod'])) $mod = $_REQUEST['mod'];
	require_once PGV_ROOT.'modules/'.$mod.'/'.$mod.'.php';
	$module = new $mod();
	if (method_exists($module, "edit_fact")) {
		$module->edit_fact();
	}
	break;
}


// Redirect to new record, if requested
if (isset($_REQUEST['goto'])) { 
	$goto = $_REQUEST['goto'];
}
if (isset($_REQUEST['link'])) {
	$link = $_REQUEST['link'];
}
if (empty($goto) || empty($link)) {
	$link='';
}

// autoclose window when update successful  ==== 
if ($success && $EDIT_AUTOCLOSE && !PGV_DEBUG ) {
	echo PGV_JS_START;
	if ($action=="copy") {
		echo "window.close();";
	} else if (isset($closeparent) && $closeparent=="yes" ) {
		// echo "window.opener.close(); window.opener.edit_close('{$link}'); window.close(); ";
		echo "window.close(); ";
	} else {
		echo "edit_close('{$link}');";
	}
	echo PGV_JS_END;
}

// Decide whether to print footer or not ================================================
if ($action == 'addmedia_links' || $action == 'addnewnote_assisted' ) {
	// Do not print footer.
	echo "<br /><div class=\"center\"><a href=\"javascript:;\" onclick=\"edit_close('{$link}');\">", $pgv_lang["close_window"], "</a></div>\n";
}else if (isset($closeparent) && $closeparent=="yes" ) {
	// echo "<div class=\"center\"><a href=\"javascript:;\" onclick=\"edit_close('{$link}');window.opener.close();\">", $pgv_lang["close_window"], "</a></div><br />\n";
	echo "<div class=\"center\"><a href=\"javascript:;\" onclick=\"edit_close('{$link}');\">", $pgv_lang["close_window"], "</a></div><br />\n";
	print_simple_footer();
}else{
	echo "<div class=\"center\"><a href=\"javascript:;\" onclick=\"edit_close('{$link}');\">", $pgv_lang["close_window"], "</a></div><br />\n";
	print_simple_footer();
}

?>

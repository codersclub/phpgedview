<?php
/**
 * MyGedView page allows a logged in user the abilty
 * to keep bookmarks, see a list of upcoming events, etc.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2011  PGV Development Team.  All rights reserved.
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
 * This Page Is Valid XHTML 1.0 Transitional! > 13 August 2005
 *
 * @package PhpGedView
 * @subpackage Display
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'index_edit.php');
require './config.php';
require_once PGV_ROOT.'includes/index_cache.php';

/**
 * Block definition array
 *
 * The following block definition array defines the
 * blocks that can be used to customize the portals
 * their names and the function to call them
 * "name" is the name of the block in the lists
 * "descr" is the name of a pgv_lang var to describe this block.  Eg: if the block is
 * 			described by $pgv_lang["my_block_text"], put "my_block_text" here.
 * "type" the options are "user" or "gedcom" or undefined
 * - The type determines which lists the block is available in.
 * - Leaving the type undefined allows it to be on both the user and gedcom portal
 * @global $PGV_BLOCKS
 */

loadLangFile("pgv_confighelp");

global $pgv_lang, $PGV_USE_HELPIMG, $PGV_IMAGES, $PGV_IMAGE_DIR, $TEXT_DIRECTION;
global $GEDCOM_TITLE;

if (isset($_REQUEST['action'])) $action = $_REQUEST['action'];
if (isset($_REQUEST['ctype'])) $ctype = $_REQUEST['ctype'];
if (isset($_REQUEST['main'])) $main = $_REQUEST['main'];
if (isset($_REQUEST['right'])) $right = $_REQUEST['right'];
if (isset($_REQUEST['setdefault'])) $setdefault = $_REQUEST['setdefault'];
if (isset($_REQUEST['side'])) $side = $_REQUEST['side'];
if (isset($_REQUEST['index'])) $index = $_REQUEST['index'];
if (isset($_REQUEST['name'])) $name = $_REQUEST['name'];

//-- make sure that they have user status before they can use this page
//-- otherwise have them login again
if (!PGV_USER_ID) {
	print_simple_header("");
	print $pgv_lang["access_denied"];
	print "<div class=\"center\"><a href=\"javascript:;\" onclick=\"self.close();\">".$pgv_lang["close_window"]."</a></div>\n";
	print_simple_footer();
	exit;
}
if (!PGV_USER_IS_ADMIN) $setdefault=false;

if (!isset($action)) $action="";
if (!isset($ctype)) $ctype="user";
if (!isset($main)) $main=array();
if (!isset($right)) $right=array();
if (!isset($setdefault)) $setdefault=false;
if (!isset($side)) $side="main";
if (!isset($index)) $index=1;

// Define all the icons we're going to use
$IconHelp = $pgv_lang["qm"];
if ($PGV_USE_HELPIMG) {
	$IconHelp = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["help"]["small"]."\" class=\"icon\" width=\"15\" height=\"15\" alt=\"\" />";
}
$IconUarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["uarrow"]["other"]."\" width=\"20\" height=\"20\" alt=\"\" />";
$IconDarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["darrow"]["other"]."\" width=\"20\" height=\"20\" alt=\"\" />";
$IconRarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["rarrow"]["other"]."\" width=\"20\" height=\"20\" alt=\"\" />";
$IconLarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["larrow"]["other"]."\" width=\"20\" height=\"20\" alt=\"\" />";
$IconRDarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["rdarrow"]["other"]."\" width=\"20\" height=\"20\" alt=\"\" />";
$IconLDarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["ldarrow"]["other"]."\" width=\"20\" height=\"20\" alt=\"\" />";


/**
 * Load List of Blocks in blocks directory (unchanged)
 */
$PGV_BLOCKS = array();
$d = dir("blocks");
while (false !== ($entry = $d->read())) {
	if (($entry!=".") && ($entry!="..") && ($entry!="CVS") && (preg_match("/\.php$/", $entry)>0)) {
		require_once PGV_ROOT.'blocks/'.$entry;
	}
}
$d->close();
/**
 * End loading list of Blocks in blocks directory
 *
 * Load List of Blocks in modules/XX/blocks directories
 */
if (file_exists(PGV_ROOT.'modules')) {
	$dir=dir(PGV_ROOT.'modules');
	while (false !== ($entry = $dir->read())) {
		if (!strstr($entry,".") && ($entry!="..") && ($entry!="CVS")&& !strstr($entry, "svn")) {
			$path = PGV_ROOT.'modules/' . $entry.'/blocks';
			if (is_readable($path)) {
				$d=dir($path);
				while (false !== ($entry = $d->read())) {
				if (($entry!=".") && ($entry!="..") && ($entry!="CVS")&& !strstr($entry, "svn")&&(preg_match("/\.php$/", $entry)>0)) {
						$p=$path.'/'.$entry;
						require_once $p;
					}
				}
			}
		}
	}
}
/**
 * End loading list of Blocks in modules/XX/blocks directories
*/






//	Build sorted table of block names, BUT:
//		include in this table ONLY if the block is appropriate for this page
//		If $BLOCK["type"] is	"both", include in both page types
//					"user", include in Portal page only
//					"gedcom", include in Index page only
$SortedBlocks = array();
foreach($PGV_BLOCKS as $key => $BLOCK) {
	if (empty($BLOCK["type"])) $BLOCK["type"] = "both";
	if (($BLOCK["type"]=="both") or ($BLOCK["type"]==$ctype)) {
		$SortedBlocks[$key] = $BLOCK["name"];
	}
}
asort($SortedBlocks);
reset($SortedBlocks);

// Build sorted table of block summary descriptions
global $pgv_lang;
$pgv_lang["block_summary_table"] = "";
$SortedBlocks = array_flip($SortedBlocks);
foreach($SortedBlocks as $key => $b) {
	$temp = $PGV_BLOCKS[$b]["descr"];
	$pgv_lang["block_summary_table"] .= "<tr valign='top'>";
	$pgv_lang["block_summary_table"] .= "<td>".$PGV_BLOCKS[$b]["name"]."</td>";
	$pgv_lang["block_summary_table"] .= "<td>#pgv_lang[$temp]#</td>";
	$pgv_lang["block_summary_table"] .= "</tr>";
}
$SortedBlocks = array_flip($SortedBlocks);

//-- get the blocks list
if ($ctype=="user") {
	$ublocks = getBlocks(PGV_USER_NAME);
	if (($action=="reset") || ((count($ublocks["main"])==0) && (count($ublocks["right"])==0))) {
		$ublocks["main"] = array();
		$ublocks["main"][] = array("print_todays_events", "");
		$ublocks["main"][] = array("print_user_messages", "");
		$ublocks["main"][] = array("print_user_favorites", "");

		$ublocks["right"] = array();
		$ublocks["right"][] = array("print_welcome_block", "");
		$ublocks["right"][] = array("print_random_media", "");
		$ublocks["right"][] = array("print_upcoming_events", "");
		$ublocks["right"][] = array("print_logged_in_users", "");
	}
}
else {
	$ublocks = getBlocks($GEDCOM);
	if (($action=="reset") or ((count($ublocks["main"])==0) and (count($ublocks["right"])==0))) {
		$ublocks["main"] = array();
		$ublocks["main"][] = array("print_gedcom_stats", "");
		$ublocks["main"][] = array("print_gedcom_news", "");
		$ublocks["main"][] = array("print_gedcom_favorites", "");
		$ublocks["main"][] = array("review_changes_block", "");

		$ublocks["right"] = array();
		$ublocks["right"][] = array("print_gedcom_block", "");
		$ublocks["right"][] = array("print_random_media", "");
		$ublocks["right"][] = array("print_todays_events", "");
		$ublocks["right"][] = array("print_logged_in_users", "");
	}
}

if ($ctype=="user") {
	print_simple_header($pgv_lang["mygedview"]);
} else {
	print_simple_header(get_gedcom_setting(PGV_GED_ID, 'title'));
}

$GEDCOM_TITLE=PrintReady(get_gedcom_setting(PGV_GED_ID, 'title'));  // needed in $pgv_lang["rss_descr"]

?>
<script language="JavaScript" type="text/javascript">
<!--
function parentrefresh() {
	opener.window.location.reload();
	window.close();
}
//-->
</script>
<?php
if ($action=="updateconfig") {
	$block = $ublocks[$side][$index];
	if (isset($PGV_BLOCKS[$block[0]]["canconfig"]) && $PGV_BLOCKS[$block[0]]["canconfig"] && isset($PGV_BLOCKS[$block[0]]["config"]) && is_array($PGV_BLOCKS[$block[0]]["config"])) {
		$config = $block[1];
		foreach($PGV_BLOCKS[$block[0]]["config"] as $config_name=>$config_value) {
			if (isset($_POST[$config_name])) {
				$config[$config_name] = $_POST[$config_name];
			}
			else {
				$config[$config_name] = "";
			}
		}
		$ublocks[$side][$index][1] = $config;
		setBlocks($name, $ublocks, $setdefault);
	}
	print $pgv_lang["config_update_ok"]."<br />\n";
	if (isset($_POST["nextaction"])) $action = $_POST["nextaction"];
	if ($ctype!="user") $_SESSION['clearcache'] = true;
	?><script language="JavaScript" type="text/javascript">parentrefresh();</script><?php
}


if ($action=="update") {
	if (0==count($main)) {  // for page to load need at least one block in main
		?><script language="JavaScript" type="text/javascript">alert("At least one block needed on left side.  To have one column, move all blocks to the left.");window.close();</script><?php
		exit;
	}

	$existingids=array();

	$idrows=PGV_DB::prepare("SELECT b_id FROM {$TBLPREFIX}blocks WHERE b_username=? and b_location=?")->execute(array($name,'main'))->fetchAll();

	$existingids['main']=array();
	// todo: use idrows directly?
	foreach($idrows as $row) {
		$existingids['main'][] = $row->b_id;
	}

	$idrows=PGV_DB::prepare("SELECT b_id FROM {$TBLPREFIX}blocks WHERE b_username=? and b_location=?")->execute(array($name,'right'))->fetchAll();

	$existingids['right']=array();
	foreach($idrows as $row) {
		$existingids['right'][] = $row->b_id;
	}


	foreach(array('main','right') as $column) {
		$columnarr=$$column;  // either $main or $right
		$othercolumn=($column=='main')?'right':'main'; // other main or right
		$othercolumnarr=($column=='main')?$right:$main; // other $main or $right


		// Delete removed blocks and update moved blocks

		// this is to set order of all moved blocks in both columns
		foreach($existingids[$othercolumn] as $b_id) {
			if (!in_array($b_id, $othercolumnarr) && in_array($b_id, $columnarr)) {
				//$position = array_keys($othercolumnarr,$b_id);
				PGV_DB::prepare("UPDATE {$TBLPREFIX}blocks SET b_location=? WHERE b_id=?")->execute(array($column, $b_id));
			}
		}

		foreach($existingids[$column] as $b_id) {
			if (!in_array($b_id, $columnarr) && in_array($b_id, $othercolumnarr)) {
				//$position = array_keys($othercolumnarr,$b_id);
				PGV_DB::prepare("UPDATE {$TBLPREFIX}blocks SET b_location=? WHERE b_id=?")->execute(array($othercolumn, $b_id));
			}
			if (!in_array($b_id, $columnarr) && !in_array($b_id, $othercolumnarr)) {
				PGV_DB::prepare("DELETE FROM {$TBLPREFIX}blocks WHERE b_id=?")->execute(array($b_id));
			}
		}

		//add and update blocks
		foreach($columnarr as $indexval => $b) {
			if (is_numeric($b)) { //existing block
				PGV_DB::prepare("UPDATE {$TBLPREFIX}blocks SET b_order=? WHERE b_id=?")->execute(array($indexval, $b));
			} else { //new block
				PGV_DB::prepare("INSERT INTO {$TBLPREFIX}blocks (b_id, b_username, b_location, b_order, b_name, b_config) VALUES (?, ?, ?, ?, ?, ?)")->execute(array(get_next_id("blocks", "b_id"), $name, $column, $indexval, $b, serialize($ublocks[$column][$b][1])));
			}
		}
	}


	if ($setdefault) {  //copy this user's setting to defaultuser
		// todo:it would simplify the code considerably to let MySQL handle setting new b_id values

		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}blocks WHERE b_username=?")->execute(array("defaultuser"));

		unset($existingids);
		$idrows=PGV_DB::prepare("SELECT b_id FROM {$TBLPREFIX}blocks WHERE b_username=?")->execute(array($name))->fetchAll();

		foreach($idrows as $row) {
			$existingids[] = $row->b_id;
		}

		foreach($existingids as $b_id) {
			$idblock=PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}blocks WHERE b_id=?")->execute(array($b_id))->fetchAll();
			PGV_DB::prepare("INSERT INTO {$TBLPREFIX}blocks (b_id, b_username, b_location, b_order, b_name, b_config) VALUES (?, ?, ?, ?, ?, ?)")->execute(array(get_next_id("blocks", "b_id"), "defaultuser", $idblock[0]->b_location, $idblock[0]->b_order, $idblock[0]->b_name, $idblock[0]->b_config));
		}
	}

	if (isset($_POST["nextaction"])) $action = $_POST["nextaction"];
	?><script language="JavaScript" type="text/javascript">parentrefresh();</script><?php
}


if ($action=="clearcache") {
	clearCache();
	print "<span class=\"warning\">".$pgv_lang["clear_cache_succes"]."</span><br /><br />";
}

if ($action=="configure" && isset($ublocks[$side][$index])) {
	$block = $ublocks[$side][$index];
	print "<table class=\"facts_table ".$TEXT_DIRECTION."\" width=\"99%\">";
	print "<tr><td class=\"facts_label\">";
	print "<h2>".$pgv_lang["config_block"]."</h2>";
	print "</td></tr>";
	print "<tr><td class=\"facts_label03\">";
	print "<b>".$PGV_BLOCKS[$block[0]]["name"]."</b>";
	print "</td></tr>";
	print "</table>";
?>
<script language="JavaScript" type="text/javascript">
<!--
	var pastefield;
	function paste_id(value) {
		pastefield.value=value;
	}
//-->
</script>
<?php
	print "\n<form name=\"block\" method=\"post\" action=\"index_edit.php\">\n";
	print "<input type=\"hidden\" name=\"ctype\" value=\"$ctype\" />\n";
	print "<input type=\"hidden\" name=\"action\" value=\"updateconfig\" />\n";
	print "<input type=\"hidden\" name=\"name\" value=\"$name\" />\n";
	print "<input type=\"hidden\" name=\"nextaction\" value=\"configure\" />\n";
	print "<input type=\"hidden\" name=\"side\" value=\"$side\" />\n";
	print "<input type=\"hidden\" name=\"index\" value=\"$index\" />\n";
	print "<table border=\"0\" class=\"facts_table ".$TEXT_DIRECTION."\" width=\"99%\">";
	if ($PGV_BLOCKS[$block[0]]["canconfig"]) {
		eval($block[0]."_config(\$block[1]);");
		print "<tr><td colspan=\"2\" class=\"topbottombar\">";
		print_help_link("click_here_help", "qm");
		print "<input type=\"button\" value=\"".$pgv_lang["click_here"]."\" onclick=\"document.block.submit();\" />";
		print "&nbsp;&nbsp;<input type =\"button\" value=\"".$pgv_lang["cancel"]."\" onclick=\"window.close()\" />";
		print "</td></tr>";
	}
	else {
		print "<tr><td colspan=\"2\" class=\"optionbox\">";
		print $pgv_lang["block_not_configure"];
		print "</td></tr>";
		print "<tr><td colspan=\"2\" class=\"topbottombar\">";
		print_help_link("click_here_help", "qm");
		print "<input type=\"button\" value=\"".$pgv_lang["click_here"]."\" onclick=\"parentrefresh();\" />";
		print "</td></tr>";
	}
	print "</table>";
	print "</form>";
}
else {
	?>
	<script language="JavaScript" type="text/javascript">
	<!--
/**
 * Move Up Block JavaScript function
 *
 * This function moves the selected option up in the given select list
 * @param String section_name the name of the select to move the options
 */
	function move_up_block(section_name) {
		section_select = document.getElementById(section_name);
		if (section_select) {
			if (section_select.selectedIndex <= 0) return false;
			index = section_select.selectedIndex;
			temp = new Option(section_select.options[index-1].text, section_select.options[index-1].value);
			section_select.options[index-1] = new Option(section_select.options[index].text, section_select.options[index].value);
			section_select.options[index] = temp;
			section_select.selectedIndex = index-1;
		}
	}

/**
 * Move Down Block JavaScript function
 *
 * This function moves the selected option down in the given select list
 * @param String section_name the name of the select to move the options
 */
	function move_down_block(section_name) {
		section_select = document.getElementById(section_name);
		if (section_select) {
			if (section_select.selectedIndex < 0) return false;
			if (section_select.selectedIndex >= section_select.length-1) return false;
			index = section_select.selectedIndex;
			temp = new Option(section_select.options[index+1].text, section_select.options[index+1].value);
			section_select.options[index+1] = new Option(section_select.options[index].text, section_select.options[index].value);
			section_select.options[index] = temp;
			section_select.selectedIndex = index+1;
		}
	}

/**
 * Move Block from one column to the other JavaScript function
 *
 * This function moves the selected option down in the given select list
 * @author KosherJava
 * @param String add_to_column the name of the select to move the option to
 * @param String remove_from_column the name of the select to remove the option from
 */
	function move_left_right_block(add_to_column, remove_from_column) {
		section_select = document.getElementById(remove_from_column);
		add_select = document.getElementById(add_to_column);
		instruct = document.getElementById('instructions');
		if ((section_select) && (add_select)) {
			add_option = add_select.options[add_select.selectedIndex];
			if (remove_from_column != 'available_select') {
				section_select.options[section_select.length] = new Option(add_option.text, add_option.value);
			}
			if (add_to_column != 'available_select') {
				add_select.options[add_select.selectedIndex] = null; //remove from list
			}
		}
	}
/**
 * Select Options JavaScript function
 *
 * This function selects all the options in the multiple select lists
 */
	function select_options() {
		section_select = document.getElementById('main_select');
		if (section_select) {
			for(i=0; i<section_select.length; i++) {
				section_select.options[i].selected=true;
			}
		}
		section_select = document.getElementById('right_select');
		if (section_select) {
			for(i=0; i<section_select.length; i++) {
				section_select.options[i].selected=true;
			}
		}
		return true;
	}

/**
 * Load Block Description array for use by jscript
 */
	<?php
	print "var block_descr = new Array();\n";
	foreach($PGV_BLOCKS as $b=>$block) {
		print "block_descr['$b'] = '".str_replace("'", "\\'", print_text($block["descr"],0,1))."';\n";
	}
	print "block_descr['advice1'] = '".str_replace("'", "\\'", print_text('index_edit_advice',0,1))."';\n";
	?>


/**
 * Show Block Description JavaScript function
 *
 * This function shows a description for the selected option
 * @param String list_name the name of the select to get the option from
 */
	function show_description(list_name) {
		list_select = document.getElementById(list_name);
		instruct = document.getElementById('instructions');
		if (list_select && instruct && list_name=='available_select') {
			instruct.innerHTML = block_descr[list_select.options[list_select.selectedIndex].value];
		} else { //don't display description for configured blocks
			instruct.innerHTML = '';
		}
		list1 = document.getElementById('main_select');
		list2 = document.getElementById('available_select');
		list3 = document.getElementById('right_select');
		if (list_name=='main_select') {
			list2.selectedIndex = -1;
			list3.selectedIndex = -1;
		}
		if (list_name=='available_select') {
			list1.selectedIndex = -1;
			list3.selectedIndex = -1;
		}
		if (list_name=='right_select') {
			list1.selectedIndex = -1;
			list2.selectedIndex = -1;
		}
	}

	function save_form(){
		document.config_setup.submit();
	}
	//-->
	</script>
	<?php
	//--------------------------------Start 1st tab Configuration page
	?>
	<div id="configure" class="tab_page center" style="position: absolute; display: block; top: auto; left: auto; z-index: 1; ">
	<br />
	<form name="config_setup" method="post" action="index_edit.php">
	<input type="hidden" name="ctype" value="<?php print $ctype;?>" />
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="name" value="<?php print $name;?>" />
	<table dir="ltr" border="1" width="400px">
	<tr><td class="topbottombar" colspan="7">
	<?php
	print_help_link("portal_config_intructions", "qm");
	if ($ctype=="user") print "<b>".UTF8_strtoupper($pgv_lang["customize_page"])."</b>";
	else print "<b>".UTF8_strtoupper($pgv_lang["customize_gedcom_page"])."</b>";
	print "</td></tr>";
	// NOTE: Row 1: Column legends
	print "<tr>";
		print "<td class=\"descriptionbox center vmiddle\" colspan=\"2\">\n";
			print "<b>".$pgv_lang["main_section"]."</b>";
		print "</td>\n";
		print "<td class=\"descriptionbox center vmiddle\" colspan=\"3\">";
			print " <a href=\"javascript:;\" class=\"help\" tabindex=\"0\" onclick=\"expand_layer('help',true); expand_layer('configure', false);\">".$IconHelp."</a> \n";
			// Need to create a real popup for this some time ;)
			print "<b>".$pgv_lang["available_blocks"]."</b>";
		print "</td>\n";
		print "<td class=\"descriptionbox center vmiddle\" colspan=\"2\">";
			print "<b>".$pgv_lang["right_section"]."</b>";
		print "</td>";
	print "</tr>\n";
	print "<tr>";
	// NOTE: Row 2 column 1: Up/Down buttons for left (main) block list
	print "<td class=\"optionbox width20px center vmiddle\">";
		print "<a tabindex=\"-1\" onclick=\"move_up_block('main_select');\" title=\"".$pgv_lang["move_up"]."\">".$IconUarrow."</a>";
		print "<br />";
		print "<a tabindex=\"-1\" onclick=\"move_down_block('main_select');\" title=\"".$pgv_lang["move_down"]."\">".$IconDarrow."</a>";
		print "<br /><br />";
		print_help_link("block_move_up_help", "qm");

	print "</td>";
	// NOTE: Row 2 column 2: Left (Main) block list
	print "<td class=\"optionbox\" dir=\"".$TEXT_DIRECTION."\">\n";
		print "<select multiple=\"multiple\" id=\"main_select\" name=\"main[]\" size=\"10\" onchange=\"show_description('main_select');\">\n";
		foreach($ublocks["main"] as $indexval => $block) {
			$ident = array_key_exists("id",$block)?$block["id"]:$block[0];
			if (function_exists($block[0])) {
				print "<option value=\"".$ident."\">".$PGV_BLOCKS[$block[0]]["name"]."</option>\n";
			}
		}
		print "</select>\n";
	print "</td>";
	// NOTE: Row 2 column 3: Left/Right buttons for left (main) block list
	print "<td class=\"optionbox width20 vmiddle\">";
		print "<a tabindex=\"-1\" onclick=\"move_left_right_block('main_select', 'right_select');\" title=\"".$pgv_lang["move_right"]."\">".$IconRDarrow."</a>";
		print "<br />";
		print "<a tabindex=\"-1\" onclick=\"move_left_right_block('main_select', 'available_select');\" title=\"".$pgv_lang["remove"]."\">".$IconRarrow."</a>";
		print "<br />";
		print "<a tabindex=\"-1\" onclick=\"move_left_right_block('available_select', 'main_select');\" title=\"".$pgv_lang["add"]."\">".$IconLarrow."</a>";
		print "<br /><br />";
		print_help_link("block_move_right_help", "qm");

	print "</td>";
	// Row 2 column 4: Middle (Available) block list
	print "<td class=\"optionbox\" dir=\"".$TEXT_DIRECTION."\">";
		print "<select id=\"available_select\" name=\"available[]\" size=\"10\" onchange=\"show_description('available_select');\">\n";
		foreach($SortedBlocks as $key => $value) {
			if (!isset($PGV_BLOCKS[$key]["type"])) $PGV_BLOCKS[$key]["type"]=$ctype;
			print "<option value=\"$key\">".$SortedBlocks[$key]."</option>\n";
		}
		print "</select>\n";
	print "</td>";
	// NOTE: Row 2 column 5: Left/Right buttons for right block list
	print "<td class=\"optionbox width20 vmiddle\">";
		print "<a tabindex=\"-1\" onclick=\"move_left_right_block('right_select', 'main_select');\" title=\"".$pgv_lang["move_left"]."\">".$IconLDarrow."</a>";
		print "<br />";
		print "<a tabindex=\"-1\" onclick=\"move_left_right_block('right_select', 'available_select');\" title=\"".$pgv_lang["remove"]."\">".$IconLarrow."</a>";
		print "<br />";
		print "<a tabindex=\"-1\" onclick=\"move_left_right_block('available_select', 'right_select');\" title=\"".$pgv_lang["add"]."\">".$IconRarrow."</a>";
		print "<br /><br />";
		print_help_link("block_move_right_help", "qm");
	print "</td>";
	// NOTE: Row 2 column 6: Right block list
	print "<td class=\"optionbox\" dir=\"".$TEXT_DIRECTION."\">";
		print "<select multiple=\"multiple\" id=\"right_select\" name=\"right[]\" size=\"10\" onchange=\"show_description('right_select');\">\n";
		foreach($ublocks["right"] as $indexval => $block) {
			$ident = array_key_exists("id",$block)?$block["id"]:$block[0];
			if (function_exists($block[0])) {
				print "<option value=\"".$ident."\">".$PGV_BLOCKS[$block[0]]["name"]."</option>\n";
			}
		}
		print "</select>\n";
	print "</td>";
	// NOTE: Row 2 column 7: Up/Down buttons for right block list
	print "<td class=\"optionbox width20 vmiddle\">";
		print "<a tabindex=\"-1\" onclick=\"move_up_block('right_select');\" title=\"".$pgv_lang["move_up"]."\">".$IconUarrow."</a>";
		print "<br />";
		print "<a tabindex=\"-1\" onclick=\"move_down_block('right_select');\" title=\"".$pgv_lang["move_down"]."\">".$IconDarrow."</a>";
		print "<br /><br />";
		print_help_link("block_move_up_help", "qm");
	print "</td>";
	print "</tr>";

	print "<tr><td class=\"topbottombar\" colspan=\"7\">";

	if (PGV_USER_IS_ADMIN && $ctype=='user') {
		print $pgv_lang["use_blocks_for_default"]."<input type=\"checkbox\" name=\"setdefault\" value=\"1\" /><br /><br />\n";
	}

	if ($ctype=='user') {
		print_help_link("block_default_portal", "qm");
	}
	else {
		print_help_link("block_default_index", "qm");
	}
	print "<input type=\"button\" value=\"".$pgv_lang["reset_default_blocks"]."\" onclick=\"window.location='index_edit.php?ctype=$ctype&amp;action=reset&amp;name=".str_replace("'", "\'", $name)."';\" />\n";
	print "&nbsp;&nbsp;";
	print_help_link("click_here_help", "qm");
	print "<input type=\"button\" value=\"".$pgv_lang["click_here"]."\" onclick=\"select_options(); save_form();\" />\n";
	print "&nbsp;&nbsp;";
	print "<input type =\"button\" value=\"".$pgv_lang["cancel"]."\" onclick=\"window.close()\" />";
	if (PGV_USER_GEDCOM_ADMIN && $ctype!="user") {
		print "<br />";
		print_help_link("clear_cache_help", "qm");
		print "<input type =\"button\" value=\"".$pgv_lang["clear_cache"]."\" onclick=\"window.location='index_edit.php?ctype=$ctype&amp;action=clearcache&amp;name=".str_replace("'", "\'", $name)."';\" />";
	}
	print "</td></tr>";

	// NOTE: Row 3 columns 1-7: Summary description of currently selected block
	print "<tr><td class=\"descriptionbox wrap\" colspan=\"7\" dir=\"".$TEXT_DIRECTION."\"><div id=\"instructions\">";
	print $pgv_lang["index_edit_advice"];
	print "</div></td></tr>";

	print "</table></form>\n";

	// end of 1st tab
	print "</div>\n";

	//--------------------------------Start 2nd tab Help page
	print "\n\t<div id=\"help\" class=\"tab_page\" style=\"position: absolute; display: none; top: auto; left: auto; z-index: 2; \">\n\t";

	print "<br /><center><input type=\"button\" value=\"".$pgv_lang["click_here"]."\" onclick=\"expand_layer('configure', true); expand_layer('help', false);\" /></center><br /><br />\n";
	print_text("block_summaries");

	// end of 2nd tab
	print "</div>\n";
}

print "</body></html>";		// Yes! Absolutely NOTHING at page bottom, please.
?>

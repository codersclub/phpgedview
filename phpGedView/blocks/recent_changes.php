<?php
/**
 * Recent Changes Block
 *
 * This block will print a list of recent changes
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2021  PGV Development Team.  All rights reserved.
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
 * @subpackage Blocks
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_RECENT_CHANGES_PHP', '');

$PGV_BLOCKS["print_recent_changes"]["name"]			= $pgv_lang["recent_changes_block"];
$PGV_BLOCKS["print_recent_changes"]["descr"]		= "recent_changes_descr";
$PGV_BLOCKS["print_recent_changes"]["type"]    		= "both";	// Allow on both the Welcome and the MyGedView pages
$PGV_BLOCKS["print_recent_changes"]["canconfig"]	= true;
$PGV_BLOCKS["print_recent_changes"]["hidesearch"]	= true;		// should this block be hidden from search engines
$PGV_BLOCKS["print_recent_changes"]["config"]		= array(
	"cache"=>1,
	"days"=>30,
	"hide_empty"=>"no"
	);

//-- Recent Changes block
//-- this block prints a list of changes that have occurred recently in your gedcom
function print_recent_changes($limitHeight, $config, $side, $index) {
	global $pgv_lang, $ctype;
	global $PGV_IMAGE_DIR, $PGV_IMAGES, $PGV_BLOCKS;

	$limitHeight = true;  // Always restrict this block's height

	if ($config["days"]<1) $config["days"] = $PGV_BLOCKS["print_recent_changes"]["config"]["days"];
	$hideEmpty = $config["hide_empty"];

	$found_facts=get_recent_changes(client_jd()-$config['days']);

// Start output
	if (count($found_facts)==0 and $hideEmpty=="yes") return false;
// Print block header
	$id="recent_changes";
	$title = print_help_link("recent_changes_help", "qm","",false,true);
	if ($PGV_BLOCKS["print_recent_changes"]["canconfig"]) {
		if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
			if ($ctype=="gedcom") {
				$name = PGV_GEDCOM;
			} else {
				$name = PGV_USER_NAME;
			}
			$title .= "<a href=\"javascript: configure block\" onclick=\"window.open('".encode_url("index_edit.php?name={$name}&ctype={$ctype}&action=configure&side={$side}&index={$index}")."', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
			$title .= "<img class=\"adminicon\" src=\"$PGV_IMAGE_DIR/".$PGV_IMAGES["admin"]["small"]."\" width=\"15\" height=\"15\" border=\"0\" alt=\"".$pgv_lang["config_block"]."\" /></a>";
		}
	}
	$title .= $pgv_lang["recent_changes"];

	$content = "";
// Print block content
	$pgv_lang["global_num1"] = $config["days"];  // Make this visible
	if (count($found_facts)==0) {
		$content .= print_text("recent_changes_none",0,1);
	} else {
		$content .= print_text("recent_changes_some",0,1);
		// sortable table
		require_once PGV_ROOT.'includes/functions/functions_print_lists.php';
		ob_start();
		print_changes_table($found_facts);
		$content .= ob_get_clean();
	}

	global $THEME_DIR;
	if ($limitHeight) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_recent_changes_config($config) {
	global $pgv_lang, $ctype, $PGV_BLOCKS;

	if ($config["days"]<1) $config["days"] = $PGV_BLOCKS["print_recent_changes"]["config"]["days"];

	print "<tr><td class=\"descriptionbox wrap width33\">".$pgv_lang["days_to_show"]."</td>";?>
	<td class="optionbox">
		<input type="number" name="days" size="2" value="<?php print $config["days"]; ?>" min="1" max="30" />
	</td></tr>

	<?php
	print "<tr><td class=\"descriptionbox wrap width33\">".$pgv_lang["show_empty_block"]."</td>";?>
	<td class="optionbox">
		<select name="hide_empty">
			<option value="no"<?php if ($config["hide_empty"]=="no") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
			<option value="yes"<?php if ($config["hide_empty"]=="yes") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
		</select>
	</td></tr>
	<tr><td colspan="2" class="optionbox wrap">
		<span class="error"><?php print $pgv_lang["hide_block_warn"]; ?></span>
	</td></tr>
	<?php

	// Cache file life
	if ($ctype=="gedcom") {
		print "<tr><td class=\"descriptionbox wrap width33\">";
		print_help_link("cache_life_help", "qm");
		print $pgv_lang["cache_life"];
		print "</td><td class=\"optionbox\">";
		print "<input type='number' name='cache' size='2' value='{$config['cache']}' min='-1' max='30' />";
		print "</td></tr>";
	}
}
?>

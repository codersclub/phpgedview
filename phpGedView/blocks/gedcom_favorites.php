<?php
/**
 * Gedcom Favorites Block
 *
 * This block prints the active gedcom favorites
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
 * $Id$
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_GEDCOM_FAVORITES_PHP', '');

$PGV_BLOCKS["print_gedcom_favorites"]["name"]		= $pgv_lang["gedcom_favorites_block"];
$PGV_BLOCKS["print_gedcom_favorites"]["descr"]		= "gedcom_favorites_descr";
$PGV_BLOCKS["print_gedcom_favorites"]["type"]    	= "both";	// Allow on both the Welcome and the MyGedView pages
$PGV_BLOCKS["print_gedcom_favorites"]["canconfig"]	= false;
$PGV_BLOCKS["print_gedcom_favorites"]["hidesearch"]	= false;	// should this block be hidden from search engines
$PGV_BLOCKS["print_gedcom_favorites"]["config"]		= array('cache'=>7);

//-- print gedcom favorites
function print_gedcom_favorites($limitHeight, $config, $side, $index) {
	global $pgv_lang, $factarray, $PGV_IMAGE_DIR, $PGV_IMAGES, $ctype, $TEXT_DIRECTION;
	global $show_full, $PEDIGREE_FULL_DETAILS, $BROWSERTYPE, $ENABLE_AUTOCOMPLETE;

	// Override GEDCOM configuration temporarily
	if (isset($show_full)) $saveShowFull = $show_full;
	$savePedigreeFullDetails = $PEDIGREE_FULL_DETAILS;
	$show_full = 1;
	$PEDIGREE_FULL_DETAILS = 1;

	$userfavs = getUserFavorites(PGV_GEDCOM);
	if (!is_array($userfavs)) $userfavs = array();

	$id = "gedcom_favorites";
	$title = print_help_link("index_favorites_help", "qm", "", false, true);
	$title .= $pgv_lang["gedcom_favorites"]."&nbsp;&nbsp;";
	if ($TEXT_DIRECTION=="rtl") $title .= getRLM();
	$title .= "(".count($userfavs).")";
	if ($TEXT_DIRECTION=="rtl") $title .= getRLM();

	if (PGV_USER_IS_ADMIN && $ENABLE_AUTOCOMPLETE) {
		$content = '<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery/jquery.autocomplete.js"></script>
		<script type="text/javascript" src="js/jquery/jquery.ajaxQueue.js"></script>
		<script type="text/javascript">
		jQuery.noConflict(); // @see http://docs.jquery.com/Using_jQuery_with_Other_Libraries/
		jQuery(document).ready(function($){
			$("input[name^=gid]").autocomplete("autocomplete.php", {
				extraParams: {field:"IFSRO"},
				formatItem: function(row, i) {
					return row[0] + " (" + row[1] + ")";
				},
				formatResult: function(row) {
					return row[1];
				},
				width: 400,
				minChars: 2
			});
		});
		</script>';
	} else $content = '';

	if ($limitHeight) {
		$style = 2;		// 1 means "regular box", 2 means "wide box"
		$tableWidth = ($BROWSERTYPE=="msie") ? "95%" : "99%";	// IE needs to have room for vertical scroll bar inside the box
		$cellSpacing = "1px";
	} else {
		$style = 2;
		$tableWidth = "99%";
		$cellSpacing = "3px";
	}
	if (count($userfavs)==0) {
		if (PGV_USER_GEDCOM_ADMIN) $content .= print_text("no_favorites",0,1);
		else $content .= print_text("no_gedcom_favorites",0,1);
	} else {
		$content .= "<table width=\"{$tableWidth}\" style=\"border:none\" cellspacing=\"{$cellSpacing}\" class=\"center $TEXT_DIRECTION\">";
		foreach($userfavs as $key=>$favorite) {
			if (isset($favorite["id"])) $key=$favorite["id"];
			$removeFavourite = "<a class=\"font9\" href=\"".encode_url("index.php?ctype=$ctype&action=deletefav&fv_id={$key}")."\" onclick=\"return confirm('".$pgv_lang["confirm_fav_remove"]."');\">".$pgv_lang["remove"]."</a><br />\n";
			$content .= "<tr><td>";
			if ($favorite["type"]=="URL") {
				$content .= "<div id=\"boxurl".$key.".0\" class=\"person_box\">\n";
				if ($ctype=="user" || PGV_USER_GEDCOM_ADMIN) $content .= $removeFavourite;
				$content .= "<a href=\"".$favorite["url"]."\"><b>".PrintReady($favorite["title"])."</b></a>";
				$content .= "<br />".PrintReady($favorite["note"]);
				$content .= "</div>\n";
			} else {
				if (displayDetailsById($favorite["gid"], $favorite["type"])) {
					if ($favorite["type"]=="INDI") {
						$indirec = find_person_record($favorite["gid"], PGV_GED_ID);
						$content .= "<div id=\"box".$favorite["gid"].".0\" class=\"person_box";
						if (strpos($indirec, "\n1 SEX F")!==false) $content .= "F";
						elseif (strpos($indirec, "\n1 SEX M")!==false) $content .= "";
						else $content .= "NN";
						$content .= "\">\n";
						if ($ctype=="user" || PGV_USER_GEDCOM_ADMIN) $content .= $removeFavourite;
						ob_start();
						print_pedigree_person($favorite["gid"], $style, 1, $key);
						$content .= ob_get_clean();
						$content .= PrintReady($favorite["note"]);
						$content .= "</div>\n";
					} else {
						$record=GedcomRecord::getInstance($favorite['gid']);
						$content .= "<div id=\"box".$favorite["gid"].".0\" class=\"person_box\">";
						if ($ctype=="user" || PGV_USER_GEDCOM_ADMIN) $content .= $removeFavourite;
						if ($record) {
							$content.=$record->format_list('span');
						} else {
							$content.=$pgv_lang['invalid_id'];
						}
						$content .= "<br />".PrintReady($favorite["note"]);
						$content .= "</div>";
					}
				}
			}
			$content .= "</td></tr>\n";
		}
		$content .= "</table>\n";
	}
	if (PGV_USER_GEDCOM_ADMIN) {
	$content .= '
		<script language="JavaScript" type="text/javascript">
		<!--
		var pastefield;
		function paste_id(value) {
			pastefield.value=value;
		}
		-->
		</script>
		<br />
		';
		$uniqueID = floor(microtime(true) * 1000000);
		$content .= print_help_link("index_add_favorites_help", "qm", "", false, true);
		$content .= "<b><a href=\"javascript://".$pgv_lang["add_favorite"]." \" onclick=\"expand_layer('add_ged_fav'); return false;\"><img id=\"add_ged_fav_img\" src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["plus"]["other"]."\" border=\"0\" alt=\"\" />&nbsp;".$pgv_lang["add_favorite"]."</a></b>";
		$content .= "<br /><div id=\"add_ged_fav\" style=\"display: none;\">\n";
		$content .= "<form name=\"addgfavform\" method=\"post\" action=\"index.php\">\n";
		$content .= "<input type=\"hidden\" name=\"action\" value=\"addfav\" />\n";
		$content .= "<input type=\"hidden\" name=\"ctype\" value=\"$ctype\" />\n";
		$content .= "<input type=\"hidden\" name=\"favtype\" value=\"gedcom\" />\n";
		$content .= "<input type=\"hidden\" name=\"ged\" value=\"".PGV_GEDCOM."\" />\n";
		$content .= "<table width=\"{$tableWidth}\" style=\"border:none\" cellspacing=\"{$cellSpacing}\" class=\"center {$TEXT_DIRECTION}\">";
		$content .= "<tr><td>".$pgv_lang["add_fav_enter_id"]." <br />";
		$content .= "<input class=\"pedigree_form\" type=\"text\" name=\"gid\" id=\"gid{$uniqueID}\" size=\"5\" value=\"\" />";

		$content .= print_findindi_link("gid{$uniqueID}",'',true)."\n";
		$content .= print_findfamily_link("gid{$uniqueID}",'',true)."\n";
		$content .= print_findsource_link("gid{$uniqueID}",'',true)."\n";
		$content .= print_findrepository_link("gid{$uniqueID}",'',true)."\n";
		$content .= print_findnote_link("gid{$uniqueID}",'',true)."\n";
		$content .= print_findmedia_link("gid{$uniqueID}",'1','',true)."\n";

		$content .= "\n<br />".$pgv_lang["add_fav_or_enter_url"];
		$content .= "\n<table><tr><td>".$pgv_lang["url"]."</td><td><input type=\"text\" name=\"url\" size=\"40\" value=\"\" /></td></tr>";
		$content .= "\n<tr><td>".$pgv_lang["title"]."</td><td><input type=\"text\" name=\"favtitle\" size=\"40\" value=\"\" /></td></tr></table>";
		if ($limitHeight) $content .= "\n</td></tr><tr><td><br />";
		else $content .= "\n</td><td>";
		$content .= "\n".$pgv_lang["add_fav_enter_note"];
		$content .= "\n<br /><textarea name=\"favnote\" rows=\"6\" cols=\"50\"></textarea>";
		$content .= "</td></tr></table>\n";
		$content .= "\n<br /><input type=\"submit\" value=\"".$pgv_lang["add"]."\" style=\"font-size: 8pt; \" />";
		$content .= "\n</form></div>\n";
	}

	global $THEME_DIR;
	if ($limitHeight) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
	// Restore GEDCOM configuration
	unset($show_full);
	if (isset($saveShowFull)) $show_full = $saveShowFull;
	$PEDIGREE_FULL_DETAILS = $savePedigreeFullDetails;
}

function print_gedcom_favorites_config($config) {
	// Nothing to do here -- should never be called
}
?>

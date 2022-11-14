<?php
/**
 * Gedcom Welcome Block
 *
 * This block prints basic information about the active gedcom
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
 * @subpackage Blocks
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_GEDCOM_BLOCK_PHP', '');

$PGV_BLOCKS["print_gedcom_block"]["name"]		= $pgv_lang["gedcom_block"];
$PGV_BLOCKS["print_gedcom_block"]["descr"]		= "gedcom_descr";
$PGV_BLOCKS["print_gedcom_block"]["type"]		= "gedcom";		// Show only on the Welcome page
$PGV_BLOCKS["print_gedcom_block"]["canconfig"]	= false;
$PGV_BLOCKS["print_gedcom_block"]["hidesearch"]	= false;	// should this block be hidden from search engines
$PGV_BLOCKS["print_gedcom_block"]["config"]		= array('cache'=>0);

//-- function to print the gedcom block
function print_gedcom_block($limitHeight, $config, $side, $index) {
	global $hitCount, $pgv_lang, $SHOW_COUNTER;

	$id = "gedcom_welcome";
	$title = PrintReady(get_gedcom_setting(PGV_GED_ID, 'title'));

	$serverTime = client_time('server');
	$localTime = client_time('client');
	$serverTimeZoneAbbr = date('T');		// Get the server's time zone (English only, unfortunately)
	if ($serverTimeZoneAbbr == 'UTC') $serverTimeZoneAbbr = 'GMT';		// GMT is more meaningful to most people

	$content = "<div class=\"center\">";
	$content .= "<br />{$pgv_lang['serverTime']}: ".format_timestamp($serverTime);
	$content .= "&nbsp;&nbsp;<span class='date'>{$serverTimeZoneAbbr}</span>";
	if ($serverTime != $localTime) {
		$content .= "<br />{$pgv_lang['localTime']}: ".format_timestamp($localTime);
	}
	$content .= '<br />';
	if ($SHOW_COUNTER)
		$content .=  "<br />{$pgv_lang['hit_count']} {$hitCount}<br />\n";
	if (PGV_USER_GEDCOM_ADMIN) {
		$content .=  "<br /><a href=\"javascript:;\" onclick=\"window.open('".encode_url("index_edit.php?name=".PGV_GEDCOM."&ctype=gedcom")."', '_blank', 'top=50,left=10,width=600,height=500,scrollbars=1,resizable=1'); return false;\"><button type='button'>".$pgv_lang["customize_gedcom_page"]."</button></a><br />\n";
	}
	$content .=  "\n<br /></div>";

	global $THEME_DIR;
	require $THEME_DIR.'templates/block_main_temp.php';
}

function print_gedcom_block_config($config) {
	// Nothing to do here -- should never be called
}
?>

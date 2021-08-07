<?php
/**
 * Review Changes Block
 *
 * This block prints the changes that still need to be reviewed and accepted by an administrator
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
 * @ersion $Id$
 * @package PhpGedView
 * @subpackage Blocks
 * @todo add a time configuration option
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_REVIEW_CHANGES_PHP', '');

$PGV_BLOCKS["review_changes_block"]["name"]			= $pgv_lang["review_changes_block"];
$PGV_BLOCKS["review_changes_block"]["descr"]		= "review_changes_descr";
$PGV_BLOCKS["review_changes_block"]["type"]    		= "both";	// Allow on both the Welcome and the MyGedView pages
$PGV_BLOCKS["review_changes_block"]["canconfig"]	= false;
$PGV_BLOCKS["review_changes_block"]["hidesearch"]	= true;	// should this block be hidden from search engines
$PGV_BLOCKS["review_changes_block"]["config"]		= array(
	"cache"=>0
	);

/**
 * Print Review Changes Block
 *
 * Prints a block allowing the user review all changes pending approval
 */
function review_changes_block($limitHeight, $config, $side, $index) {
	global $pgv_lang, $ctype, $QUERY_STRING, $factarray, $PGV_IMAGE_DIR, $PGV_IMAGES;
	global $pgv_changes, $TEXT_DIRECTION, $SHOW_SOURCES, $PGV_BLOCKS;
	global $PHPGEDVIEW_EMAIL;

	if (count($pgv_changes) > 0) {
		if (PGV_USER_CAN_EDIT) {
			$id="review_changes_block";
			$title = print_help_link("review_changes_help", "qm","",false,true);
			$title .= $pgv_lang["review_changes"];

			$content = "";
			if (PGV_USER_CAN_ACCEPT) {
				$content .= "<a href=\"javascript:;\" onclick=\"window.open('edit_changes.php?popup=y','_blank','width=600,height=500,resizable=1,scrollbars=1'); return false;\">".$pgv_lang["review_changes"]."</a><br />";
			}
			foreach ($pgv_changes as $cid=>$changes) {
				$change = $changes[count($changes)-1];
				if ($change["gedcom"]==PGV_GEDCOM) {
					$record=GedcomRecord::getInstance($change['gid']);
					if ($record->getType()!='SOUR' || $SHOW_SOURCES>=PGV_USER_ACCESS_LEVEL) {
						$content.='<b>'.PrintReady($record->getFullName()).'</b> '.getLRM().'('.$record->getXref().')'.getLRM();
						switch ($record->getType()) {
						case 'INDI':
						case 'FAM':
						case 'SOUR':
						case 'OBJE':
							$content.=$limitHeight ? '<br />' : ' ';
							$content.='<a href="'.encode_url($record->getLinkUrl().'&show_changes=yes').'">'.$pgv_lang['view_change_diff'].'</a>';
							break;
						}
						$content.='<br />';
					}
				}
			}

			global $THEME_DIR;
			if ($limitHeight) {
				require $THEME_DIR.'templates/block_small_temp.php';
			} else {
				require $THEME_DIR.'templates/block_main_temp.php';
			}
		}
	}
}
?>

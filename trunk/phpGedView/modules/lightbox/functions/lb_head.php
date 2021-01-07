<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox 4.1
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2007 to 2021  PGV Development Team.  All rights reserved.
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
 * @subpackage Module
 * @version $Id$
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

global $GEDCOM;

loadLangFile("lightbox:lang, lightbox:help_text");

if (!file_exists("modules/googlemap/defaultconfig.php")) {
	$tabno = "7";
} else {
	$tabno = "8";
}

?>

<script language="javascript" type="text/javascript">
<!--
	function album_reorder() {
	var win02 = window.open(
	"edit_interface.php?action=reorder_media&pid=<?php print $pid; ?>", "win02", "resizable=1, menubar=0, scrollbars=1, top=20, HEIGHT=840, WIDTH=450 ");
	if (window.focus) {win02.focus();}
	}

	function album_add() {
		win03 = window.open(
		"addmedia.php?action=showmediaform&linktoid=<?php print $pid; ?>", "win03", "resizable=1, scrollbars=1, top=50, HEIGHT=780, WIDTH=600 ");
		if (window.focus) {win03.focus();}
	}

	function album_link() {
		win04 = window.open(
		"inverselink.php?linktoid=<?php print $pid; ?>&linkto=person", "win04", "resizable=1, scrollbars=1, top=50, HEIGHT=300, WIDTH=450 ");
		win04.focus()
	}
-->
</script>

<?php

require PGV_ROOT.'modules/lightbox/functions/lb_call_js.php';		// Load Lightbox javascript and css files

// Find if indi and family associated media exists and then count them ( $tot_med_ct)
require_once PGV_ROOT.'includes/media_reorder_count.php';

//Show Lightbox-Album header Links
echo '<table border="0" width="75%"><tr>';

if ($LB_AL_HEAD_LINKS == "icon" || (!PGV_USER_IS_ADMIN && !PGV_USER_CAN_EDIT)) {
	echo "<td>";
}

// Configuration
if (PGV_USER_IS_ADMIN) {
	if ($LB_AL_HEAD_LINKS == "both") {
        echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='", encode_url("module.php?mod=lightbox&pgvaction=lb_editconfig&pid={$pid}&gedcom={$GEDCOM}"), "'>";
		echo "<img src='modules/lightbox/images/image_edit.gif' class='icon' title='", $pgv_lang["configure_lightbox"], " alt='", $pgv_lang["configure_lightbox"], "' /><br />";
		echo $pgv_lang["configure_lightbox"], "&nbsp;";
		echo "</a>";
		echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "text") {
        echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='", encode_url("module.php?mod=lightbox&pgvaction=lb_editconfig&pid={$pid}&gedcom={$GEDCOM}"), "'>";
		echo $pgv_lang["configure_lightbox"], "&nbsp;";
		echo "</a>";
		echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "icon") {
		echo "&nbsp;&nbsp;&nbsp;";
        echo "<a href='", encode_url("module.php?mod=lightbox&pgvaction=lb_editconfig&pid={$pid}&gedcom={$GEDCOM}"), "'>";
		echo "<img src='modules/lightbox/images/image_edit.gif' class='icon' title='", $pgv_lang["configure_lightbox"], "' alt='", $pgv_lang["configure_lightbox"], "' />";
		echo "</a>\n";
	}
}

//Add a new multimedia object
if (PGV_USER_CAN_EDIT) {
	if ($LB_AL_HEAD_LINKS == "both") {
		echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='javascript: album_add()'> ";
		echo "<img src='modules/lightbox/images/image_add.gif' class='icon' title='", $pgv_lang["lb_add_media_full"], "' alt='", $pgv_lang["lb_add_media_full"], "' /><br />";
		echo $pgv_lang["lb_add_media"], "&nbsp;";
        echo " </a> ";
        echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "text") {
		echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='javascript: album_add()'> ";
		echo $pgv_lang["lb_add_media"], "&nbsp;";
        echo " </a> ";
        echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "icon") {
		echo "&nbsp;&nbsp;&nbsp;";
        echo "<a href='javascript: album_add()'> ";
		echo "<img src='modules/lightbox/images/image_add.gif' class='icon' title='", $pgv_lang["lb_add_media_full"], "' alt='", $pgv_lang["lb_add_media_full"], "' />";
        echo "</a>\n";
	}
}

//Link to an existing item
if (PGV_USER_CAN_EDIT) {
	if ($LB_AL_HEAD_LINKS == "both") {
		echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='javascript: album_link()'> ";
		echo "<img src='modules/lightbox/images/image_link.gif' class='icon' title='", $pgv_lang["lb_link_media_full"], "' alt='", $pgv_lang["lb_link_media_full"], "' /><br />";
		echo $pgv_lang["lb_link_media"], "&nbsp;";
        echo " </a> ";
        echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "text") {
		echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='javascript: album_link()'> ";
		echo $pgv_lang["lb_link_media"], "&nbsp;";
        echo " </a> ";
        echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "icon") {
		echo "&nbsp;&nbsp;&nbsp;";
        echo "<a href='javascript: album_link()'>";
		echo "<img src='modules/lightbox/images/image_link.gif' class='icon' title='", $pgv_lang["lb_link_media_full"], "' alt='", $pgv_lang["lb_link_media_full"], "' /><br />";
        echo "</a>\n";
	}
}

//Album Reorder Media  ( If media exists and is greater than 1 item ) -----
if (PGV_USER_CAN_EDIT && $tot_med_ct>1) {
	if ($LB_AL_HEAD_LINKS == "both") {
		echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='javascript: album_reorder()'>";
		echo "<img src='modules/lightbox/images/images.gif' class='icon' title='",$pgv_lang["reorder_media"], "' alt='", $pgv_lang["reorder_media"], "' /><br />";
		echo $pgv_lang["reorder_media"], "&nbsp;";
		echo "</a>";
		echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "text") {
		echo "<td class='width15 center wrap' valign='top'>";
        echo "<a href='javascript: album_reorder()'>";
		echo $pgv_lang["reorder_media"], "&nbsp;";
		echo "</a>";
		echo "</td>\n";
	} else if ($LB_AL_HEAD_LINKS == "icon") {
		echo "&nbsp;&nbsp;&nbsp;";
        echo "<a href='javascript: album_reorder()'>";
		echo "<img src='modules/lightbox/images/images.gif' class='icon' title='",$pgv_lang["reorder_media"], "' alt='", $pgv_lang["reorder_media"], "' />";
		echo "</a>";
	}
}

if ($LB_AL_HEAD_LINKS == "icon" || (!PGV_USER_IS_ADMIN && !PGV_USER_CAN_EDIT)) {
	echo "</td>";
}

echo "</tr></table>";
?>

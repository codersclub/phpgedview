<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
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

global $LANGUAGE, $mediatab, $mediacnt;
global $controller, $tabno, $_REQUEST, $thumb_edit, $n, $LB_URL_WIDTH, $LB_URL_HEIGHT, $LB_TT_BALLOON ;
global $rownum, $sort_i, $GEDCOM;

require_once PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';		// Get Javascript variables from lb_config.php
require_once PGV_ROOT.'modules/lightbox/functions/lightbox_print_media.php';
require_once PGV_ROOT.'modules/lightbox/functions/lightbox_print_media_row.php';

loadLangFile("lightbox:lang");

//------------------------------------------------------------------------------
// Start Main Table
//------------------------------------------------------------------------------
echo "<table width='100%' cellpadding='0' border='0'><tr>";

//------------------------------------------------------------------------------
// Build Thumbnail Rows
//------------------------------------------------------------------------------
echo "<td width='100%' valign='top' >";
lightbox_print_media($pid, 0, true, 1);		// map, painting, photo, tombstone)
lightbox_print_media($pid, 0, true, 2);		// card, certificate, document, magazine, manuscript, newspaper
lightbox_print_media($pid, 0, true, 3);		// electronic, fiche, film
lightbox_print_media($pid, 0, true, 4);		// audio, book, coat, video, other
lightbox_print_media($pid, 0, true, 5);		// footnotes
echo "</td>";
//------------------------------------------------------------------------------
// End Thumbnail Rows
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// End Main Table
//------------------------------------------------------------------------------
echo "</tr></table>";
?>

<?php
/**
 * Individual Page
 *
 * Display all of the information about an individual
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2021  PHPGedView Development Team
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
 * @subpackage Charts
 * @version $Id$
 */

// This script is loaded by individual.php when the Media tab is disabled in the Lightbox configuration

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Determine what should be shown in the list of tabs on the Individual Details page
$LB_tabs = 0;															// 0: Google map: no; Lightbox: no
if (file_exists("modules/googlemap/defaultconfig.php")) $LB_tabs += 1;	// 1 or 3: Google map: yes
if (file_exists("modules/lightbox/album.php")) $LB_tabs += 2;			// 2 or 3: Lightbox: yes

// Tell the Individual Details page which list of tabs to use
switch ($LB_tabs) {
	case 0:
		// Google map: no; Lightbox: no
		echo "var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','spare');";
		echo "var loadedTabs = new Array(false,false,false,false,false,false,false,false,false);";
		break;
	case 1:
		// Google map: yes; Lightbox: no
		echo "var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','googlemap','spare');";
		echo "var loadedTabs = new Array(false,false,false,false,false,false,false,false,false,false);";
		break;
	case 2:
		// Google map: no; Lightbox: yes
		echo "var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','lightbox2','spare');";
		echo "var loadedTabs = new Array(false,false,false,false,false,false,false,false,false,false);";
		break;
	case 3:
		// Google map: yes; Lightbox: yes
		echo "var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','googlemap','lightbox2','spare');";
		echo "var loadedTabs = new Array(false,false,false,false,false,false,false,false,false,false,false);";
		break;
}
?>

<?php
/**
 * Display an hourglass chart
 *
 * Set the root person using the $pid variable
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
 * This Page Is Valid XHTML 1.0 Transitional! > 23 August 2005
 *
 * @package PhpGedView
 * @subpackage Charts
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'hourglass_ajax.php');
require './config.php';
require_once PGV_ROOT.'includes/controllers/hourglass_ctrl.php';

/*
 * The purpose of this page is to build the left half of the Hourglass chart via Ajax.
 * This page only produces a husband and wife with the connecting lines to unite and
 * 	label the pair as a pair.
 */

$controller = new HourglassController();
$controller->init();

// -- print html header information
if (isset($_REQUEST['type']) && $_REQUEST['type']=='desc')
	$controller->print_descendancy($controller->pid, 1, false);
else
	$controller->print_person_pedigree($controller->pid, 0);
?>

<?php
/**
 * Base controller for all controller classes
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
 * @subpackage Controllers
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_BASECONTROL_PHP', '');

class BaseController {
	var $action      =null;
	var $show_changes=null;

	/**
	 * constructor for this class
	 */
	function __construct() {
		global $SEARCH_SPIDER, $PRINTER_FRIENDLY;		// These are set by session.php

		$this->action      =safe_GET('action');
		$this->show_changes=safe_GET('show_changes', 'no', 'yes')=='yes'; // if not specified, then default to "yes"

		// Don't let search engines request to show changes or Print Preview mode
		if ($SEARCH_SPIDER){
			$this->show_changes = 'no';
		}
	}

	/**
	 * check if this controller should be in print preview mode
	 */
	function isPrintPreview() {
		global $PRINTER_FRIENDLY;
		return $PRINTER_FRIENDLY;
	}
}
?>

<?php
/**
 * Displays information on the PHP installation
 *
 * Provides links for administrators to get to other administrative areas of the site
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
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'pgvinfo.php');
require './config.php';

if (isset($_REQUEST['action'])) $action = $_REQUEST['action'];
if (!isset($action)) $action = "";

if (!PGV_USER_GEDCOM_ADMIN) {
	header("Location: login.php?url=pgvinfo.php?action=".$action);
exit;
}

loadLangFile("pgv_confighelp");

if ($action == "phpinfo") {
	$helpindex = "phpinfo_help";
	print_header($pgv_lang["phpinfo"]);
	?>
	<div class="center">
	<?php

	ob_start();

	phpinfo();
	$php_info = ob_get_contents();

	ob_end_clean();

	$php_info    = str_replace(" width=\"600\"", " width=\"\"", $php_info);
	$php_info    = str_replace("</body></html>", "", $php_info);
	$php_info    = str_replace("<table", "<table class=\"center facts_table ltr\"", $php_info);
	$php_info    = str_replace("td class=\"e\"", "td class=\"facts_value\"", $php_info);
	$php_info    = str_replace("td class=\"v\"", "td class=\"facts_value\"", $php_info);
	$php_info    = str_replace("tr class=\"v\"", "tr", $php_info);
	$php_info    = str_replace("tr class=\"h\"", "tr", $php_info);

	$php_info    = str_replace(";", "; ", $php_info);
	$php_info    = str_replace(",", ", ", $php_info);

	// Put logo in table header

	$logo_offset = strpos($php_info, "<td>");
	$php_info = substr_replace($php_info, "<td colspan=\"3\" class=\"facts_label03\">", $logo_offset, 4);
	$logo_width_offset = strpos($php_info, "width=\"\"");
	$php_info = substr_replace($php_info, "width=\"800\"", $logo_width_offset, 8);
	$php_info    = str_replace(" width=\"\"", "", $php_info);


	$offset          = strpos($php_info, "<table");
	$php_info	= substr($php_info, $offset);

	echo $php_info;

	?>
	</div>
	<?php
//	exit;
}

if ($action=="confighelp") {

	require PGV_ROOT.'includes/functions/functions_editlang.php';
	$helpindex = "config_help_help";
	print_header($pgv_lang["config_help"]);
	echo "<h2 class='center'>", UTF8_strtoupper($pgv_lang["config_help"]), "</h2><br />";
	$configText = array();
	// Get each language variable in the current file
	//		$configText[nn][0]: input line number
	//		$configText[nn][1]: variable name, e.g., $pgv_lang["abc"]
	//		$configText[nn][2]: variable's value
	//		
	$configText = read_export_file_into_array($confighelpfile[$LANGUAGE], "pgv_lang[");

	echo "<ul>";		// Bulleted list looks better
	
	foreach ($configText as $item) {
		// Pick out only those variables whose names end in "_help"
		$varName = trim(str_replace("'", '"', $item[1]));		// Make sure we're not dealing with names such as $pgv_lang['foo']
		if ($varName == '$pgv_lang["config_help"]' || $varName == '$pgv_lang["welcome_help"]') continue;

		// Neither config_help nor welcome_help
		if (substr($varName, -7) != '_help"]') continue;

		// This is a true $pgv_lang["xxx_help"] : Print the text
		echo '<li>';
		echo print_text($item[2], 0, 2), "</li><br /><br />\r\n";
	}
	echo '</ul>';
}

print_footer();
?>

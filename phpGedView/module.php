<?php
/**
 * Module system for adding features to phpGedView.
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
 * @subpackage Display
 * @version $Id$
 * @author Patrick Kellum
 */

define('PGV_SCRIPT_NAME', 'module.php');
require './config.php';

// Simple mod system, based on the older phpnuke/postnuke
define('PGV_MOD_SIMPLE', 1);
// More advanced OO module system
define('PGV_MOD_OO', 2);
// Module system version 2, enhanced security and better output control
define('PGV_MOD_V2', 3);

// Sanitize all input
$mod		= safe_REQUEST($_REQUEST, 'mod',		PGV_REGEX_MODNAME, '');
$name		= safe_REQUEST($_REQUEST, 'name',		PGV_REGEX_MODNAME, '');
$pgvaction	= safe_REQUEST($_REQUEST, 'pgvaction',	PGV_REGEX_MODNAME, 'index');
$class		= safe_REQUEST($_REQUEST, 'class',		PGV_REGEX_MODNAME, $mod);
$method		= safe_REQUEST($_REQUEST, 'method',		PGV_REGEX_MODNAME, 'main');
if (empty($mod))		unset($mod);
if (empty($name))		unset($name);
if (empty($pgvaction))	unset($pgvaction);
if (empty($class))		unset($class);
if (empty($method))		unset($method);

if(!isset($mod)) {
	// PGV_MOD_NUKE
	if (isset($name)) $mod = $name;
}

function logHacker($quitReason) {
	global $TBLPREFIX;
	if (empty($quitReason)) return;		// Nothing to log
	// Log the hack attempt
	$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
	AddToLog("MSG>{$quitReason}; script terminated; IP address blocked for 1 hour.");
	AddToLog("UA>{$ua}<");
	AddToLog("URI>{$_SERVER["REQUEST_URI"]}<");
	//-- Block further access from this IP address for the next hour
	$address = $_SERVER['REMOTE_ADDR'];
	$comment = date('Y.m.d@H:i', time()+60*60);
	PGV_DB::prepare(
		"DELETE FROM {$TBLPREFIX}ip_address WHERE ip_address=? AND category='timedban'"
	)->execute(array($address));
	PGV_DB::prepare(
		"INSERT INTO {$TBLPREFIX}ip_address (ip_address, category, comment) VALUES (?, ?, ?)"
	)->execute(array($address, 'timedban', $comment));
	header('HTTP/1.1 403 Access Denied');
	print "Hackers are not welcome here.";
	exit;
}

$log_msg = '';
if (empty($mod) || !is_dir("modules/{$mod}")) {
	$log_msg = 'Attempt to run non-existent module';	// No matching sub-directory
} else if (file_exists("modules/{$mod}.php")) {
	$modinfo = parse_ini_file("modules/{$mod}.php", true);
} else if (file_exists("modules/{$mod}/pgv_version.php")) {
	$modinfo = parse_ini_file("modules/{$mod}/pgv_version.php", true);
} else {
	$log_msg = 'Attempt to run non-existent module';	// No matching description
}
logHacker($log_msg);		// Log the hack attempt, if any
switch($modinfo['Module']['type']) {
	case PGV_MOD_SIMPLE:
		if (isset($_REQUEST['pgvaction'])) $oldAction = $_REQUEST['pgvaction'];
		else $oldAction = '';
		if ($pgvaction != $oldAction && $oldAction != '') {
			$log_msg = "Illegal pgvaction: {$oldAction}";
			break;
		}
		if (file_exists(PGV_ROOT.'modules/'.$mod.'/'.$pgvaction.'.php')) require_once PGV_ROOT.'modules/'.$mod.'/'.$pgvaction.'.php';
		else {
			if ($oldAction == '') $log_msg = 'Missing pgvaction';
			else $log_msg = "Unknown pgvaction: {$pgvaction}";
		}
		break;
	case PGV_MOD_OO:
		if (isset($_REQUEST['method'])) $oldMethod = $_REQUEST['method'];
		else $oldMethod = '';
		if ($method != $oldMethod && $oldMethod != '') {
			$log_msg = "Illegal method: {$oldMethod}";
			break;
		}
		if (isset($_REQUEST['class'])) $oldClass = $_REQUEST['class'];
		else $oldClass = '';
		if ($class != $oldClass && $oldClass != '') {
			$log_msg = "Illegal class: {$oldClass}";
			break;
		}
		if (file_exists(PGV_ROOT.'modules/'.$mod.'/'.$class.'.php')) {
			require_once PGV_ROOT.'modules/'.$mod.'/'.$class.'.php';
		} else {
			if ($oldClass == '') $log_msg = "Missing class";
			else $log_msg = "Unknown class: {$oldClass}";
			break;
		}
		$mod = new $class();
		if (!method_exists($mod, $method)) {
			$method = 'main';
		}
		$out = $mod->$method();
		if (is_string($out)) {
			print $out;
		}
		break;
	case PGV_MOD_V2:
/*
 * Module Security
 *	1. Test if module is active.
 *	2. Only Admins can view an inactive module.
 */
		if ((!isset($modinfo['Config']['active']) || $modinfo['Config']['active'] === false) && !PGV_USER_IS_ADMIN) {
			header("Location: {$SERVER_URL}index.php");
			print ' ';
			exit;
		}
/*
 * Class Security
 * 	1. Remove any directories that might have been passed.
 *	2. Test if class file actually exists.
 *	3. Ignore any filename that starts with an underscore.
 */
		if (isset($_REQUEST['class'])) $oldClass = $_REQUEST['class'];
		else $oldClass = '';
		if ($class != $oldClass && $oldClass != '') {
			$log_msg = "Illegal class: {$oldClass}";
			break;
		}
		if (!file_exists("modules/{$mod}/{$class}.php") || $class[0] == '_') {
			if ($oldClass == '') $log_msg = "Empty class";
			else $log_msg = "Unknown class: {$oldClass}";
			break;
		}
/*
 * Load Language
 *	1. Load english language if exists.
 *	2. Load current language if exists.
 */
		if (file_exists(PGV_ROOT.'modules/'.$mod.'/languages/lang.en.php')) {
			require_once PGV_ROOT.'modules/'.$mod.'/languages/lang.en.php';
		}
		if (file_exists(PGV_ROOT.'modules/'.$mod.'/languages/extra.en.php')) {
			require_once PGV_ROOT.'modules/'.$mod.'/languages/extra.en.php';
		}
		if ($LANGUAGE != 'en') {
			if (file_exists(PGV_ROOT.'/modules/'.$mod.'/languages/lang.'.$LANGUAGE.'.php')) {
				require_once PGV_ROOT.'modules/'.$mod.'/languages/lang.'.$LANGUAGE.'.php';
			}
			if (file_exists(PGV_ROOT.'/modules/'.$mod.'/languages/extra.'.$LANGUAGE.'.php')) {
				require_once PGV_ROOT.'modules/'.$mod.'/languages/extra.'.$LANGUAGE.'.php';
			}
		}

/*
 * Load & Initialize
 * 	1. Load the class file.
 *	2. Create a module object.
 *	3. Initialize the module if needed.
 */
		require_once PGV_ROOT.'modules/'.$mod.'/'.$class.'.php';
		$mod = new $class();
		if (method_exists($mod, 'init')) {
			$mod->init();
		}
/*
 * Method Security
 *	1. Test if method actually exists in this object.
 *	2. Ignore any method that starts with an underscore.
 */
		if (!isset($method) || !method_exists($mod, $method) || $method[0] == '_') {
			$method = 'main';
		}
/*
 * Execute Method
 *	1. Execute the requested method.
 *	2. Act upon the result of the method call.
 */
		$results = $mod->$method();
		switch ($results[0])
		{
/*
 * Action: Display Raw Output
 *	'content':	Raw content to display on the page.
 */
			case 'display':
				print $results['content'];
				break;
/*
 * Action: Wrap Output In Header & Footer
 *	'title'		Title of the page. [optional]
 *	'head'		Additional header content. [optional]
 *	'content'	Content to display on the page.
 */
			case 'wrap':
				if (!isset($results['title'])) {
					if (isset($modinfo['Config']['title'])) {
						$results['title'] = $modinfo['Config']['title'];
					} else {
						$results['title'] = get_gedcom_setting(PGV_GED_ID, 'title');
					}
				}
				if (!isset($results['head'])) {
					$results['head'] = '';
				}
				print_header($results['title']);
				print $results['content'];
				print_footer();
				break;
/*
 * Action: Redirect Browser
 *	'url'		URL to redirect the browser to.
 */
			case 'redirect':
				// fully qualified url is recomended.
				if (!isFileExternal($results['url'])) {
					$results['url'] = "{$SERVER_URL}{$results['url']}";
				}
				header("Location: ".encode_url($results['url'], false));
				print ' '; // for some older browsers.
				exit;
/*
 * Action: Exit
 */
			case 'exit':
				exit;
/*
 * Action: Error
 */
			default:
				print_header($results['title']);
				print str_replace('[action]', $results['action'], $pgv_lang['module_error_unknown_action_v2']);
				print_footer();
				exit;
		}
		break;
	default:
		print_header(get_gedcom_setting(PGV_GED_ID));
		print $pgv_lang['module_error_unknown_type'];
		print_footer();
		break;
}
logHacker($log_msg);		// Log the hack attempt, if any

function mod_print_header($title, $COMPLETE_HEADER=true) {
	ob_start();
	print_header($title, $COMPLETE_HEADER);
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

function mod_print_footer() {
	ob_start();
	print_footer();
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

function mod_print_simple_footer() {
	ob_start();
	print_simple_footer();
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}
?>

<?php
/**
 * Startup and session logic for handling Bots and Spiders
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2021  PGV Development Team.  All rights reserved.
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
 * @subpackage admin
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SESSION_SPIDER_PHP', '');

/**
 * Changes the session name for known spiders
 * session names are limited to alphanum upper and lower only; length to 31.
 * $outname = '__Spider-name-:/alphanum_only__';
 * Example  =  sess_xGOOGLEBOTfsHTTPcffWWWdGOOGLEox
 * Matchable by "ls sess_x????????????????????????????x"
 *
 * @param string $bot_name
 * @return string
 */
function gen_spider_session_name($bot_name) {
	global $UNIQUE_ID;
	
	// Manipulate the Bot Name
	$lengthUnique = strlen($UNIQUE_ID);		// This is limited to 8 characters in session.php
	$lengthName = 29-$lengthUnique;			// Leave room for the $UNIQUE_ID string
	$name = trim($bot_name);
	$name = strtoupper($name);
	$name = str_pad($name, $lengthName);		// Extend the bot name if it's too short
	$name = substr($name, 0, $lengthName);		// Truncate the bot name if it's too long
	$name .= $UNIQUE_ID;		// We should have a name that's exactly 29 characters long
	
	// Transform illegal characters in that bot name
	for($i=0; $i<29; $i++) {
		$thisChar = $name[$i];
		if (ctype_alnum($thisChar)) continue;
		if ($thisChar == ' ') {
			$name[$i] = 's';
			continue;
		}
		if ($thisChar == '.') {
			$name[$i] = 'd';
			continue;
		}
		if ($thisChar == ':') {
			$name[$i] = 'c';
			continue;
		}
		if ($thisChar == '/') {
			$name[$i] = 'f';
			continue;
		}
		if ($thisChar == '-') {
			$name[$i] = 't';
			continue;
		}
		if ($thisChar == '_') {
			$name[$i] = 'u';
			continue;
		}
		$name[$i] = 'o';
	}
	return("x{$name}x");		// Always return a name that's 31 characters long
}

/**
 * Try to get the real IP address of the client.
 *
 * This is important when the client is hiding behind a series of proxies, and we need to
 * refer to the client's IP address for some reason such as a ban by IP address.
 *
 * If we just use the REMOTE_ADDR value without checking for proxies, we'll end up using the
 * last proxy's IP address instead of the real client address.  In the case of a timed ban by
 * IP, everybody using that proxy would be blocked.
 */

if (isset($_SERVER)) {
 	// Use $_SERVER variables by preference
 	$HTTP_VARS = $_SERVER;
} else if (isset($_ENV)) {
 	// Fallback to PHP environment variables
 	$HTTP_VARS = $_ENV;
} else $HTTP_VARS = array();

// Step through the captured $_SERVER or $_ENV array, ignoring the case of the keys.
// (Some "authorities" indicate that the keys can be lower or mixed case!)
$HTTP_VARS = array_change_key_case($HTTP_VARS, CASE_UPPER);		// Make sure all keys are upper-case
while (true) {
	if (array_key_exists('HTTP_X_REAL_IP', $HTTP_VARS)) {
		$ipAddrList = $HTTP_VARS['HTTP_X_REAL_IP'];
		break;
	}
	if (array_key_exists('HTTP_CLIENT_IP', $HTTP_VARS)) {
		$ipAddrList = $HTTP_VARS['HTTP_CLIENT_IP'];
		break;
	}
	if (array_key_exists('HTTP_FORWARDED', $HTTP_VARS)) {
		// We're dealing with the new HTTP Forwarded: by=identifier; for=identifier; host=host; proto=protocol
		// See: https://tools.ietf.org/html/rfc7239
		$value = str_replace(' ', '', strtolower($HTTP_VARS['HTTP_FORWARDED']));	// Make everything lower-case and get rid of embedded blanks
		$value = str_replace(',for=', ',', strtolower($value));						// Get rid of extraneous "for=" tags
		$params = explode(';', $value);				// Separate the Forwarded: parameters into an array
		foreach ($params as $key => $value) {
			if (substr($value,0,4) == 'for=') {
				$ipAddrList = substr($value,4);		// Everything after "for=" is now a comma-separated list of IPv4 or IPv6 addresses
				break 2;
			}
		}
	}
	if (array_key_exists('HTTP_X_FORWARDED_FOR', $HTTP_VARS)) {
		$ipAddrList = $HTTP_VARS['HTTP_X_FORWARDED_FOR'];
		break;
	}
	if (array_key_exists('HTTP_X_FORWARDED', $HTTP_VARS)) {
		$ipAddrList = $HTTP_VARS['HTTP_X_FORWARDED'];
		break;
	}
	if (array_key_exists('HTTP_FORWARDED_FOR', $HTTP_VARS)) {
		$ipAddrList = $HTTP_VARS['HTTP_FORWARDED_FOR'];
		break;
	}
	if (array_key_exists('REMOTE_ADDR', $HTTP_VARS)) {
		$ipAddrList = $HTTP_VARS['REMOTE_ADDR'];
		break;
	}
	$ipAddrList = 'unknown';	//	None of the above: we can't determine the IP address
	break;
}

$ipAddrList = str_replace(' ', '', $ipAddrList);	// Get rid of embedded blanks
$ip = preg_replace('~,.*~', '', $ipAddrList);		// Trim everything after the first comma, leaving just the first IPv4 or IPv6 address
$ip = str_replace(array('"', "'"), '', $ip);		// Get rid of quotation marks used in some addresses

if (substr_count($ip, ':') > 1) {
	// More than 1 colon indicates an IPv6 address
	if (substr($ip,0,1) == '[') {
		$ip = preg_replace('~\]:.*~', ']', $ip);		// Get rid of IPv6 port number that can follow closing square bracket
		$ip = str_replace(array('[', ']'), '', $ip);	// Get rid of optional square brackets enclosing IPv6 address
	}
	$ip = normalizeIPv6($ip);						// Make sure this IPv6 address has a consistent format
} else {
	$ip = preg_replace('~:.*~', '', $ip);			// Get rid of IPv4 port number that can follow last digit of address
}

unset($HTTP_VARS, $params, $ipAddrList);			// We don't need these any more

$ip = filter_var($ip, FILTER_VALIDATE_IP);			// Verify IP legitimacy
if ($ip === false) $ip = 'unknown';
$_SERVER['REMOTE_ADDR'] = $ip;


// Clean up list of blocked IP addresses with expired timers
try {
	$currentTime = date('Y.m.d@H:i');
	$sql="SELECT ip_address FROM {$TBLPREFIX}ip_address WHERE category='timedban' AND comment < '{$currentTime}'";
	$expiredBan=PGV_DB::prepare($sql)->fetchOneColumn();
	foreach ($expiredBan as $address) {
		PGV_DB::prepare(
			"DELETE FROM {$TBLPREFIX}ip_address WHERE category='timedban' AND ip_address=?"
		)->execute(array($address));
	}
} catch (PDOException $ex) {
	// Initial installation?  Site Down?  Fail silently.
}

// Block sites by IP address, either permanently or until a specified date & time.
// Convert user-friendly such as '123.45.*.*' into SQL '%' wildcards.
// Note: you may need to block IPv6 addresses as well as IPv4 ones.
try {
	$banned_ip=PGV_DB::prepareLimit(
		"SELECT ip_address, comment FROM {$TBLPREFIX}ip_address".
		" WHERE (category='banned' OR category='timedban') AND ? LIKE REPLACE(ip_address, '*', '%')",
		1
	)->execute(array($_SERVER['REMOTE_ADDR']))->fetchOneRow();
	if ($banned_ip) {
		$log_msg='session_spider.php blocked IP Address: '.$_SERVER['REMOTE_ADDR'].' by regex: '.$banned_ip->ip_address;
		if ($banned_ip->comment) {
			$log_msg.=' ('.$banned_ip->comment.')';
		}
		AddToLog($log_msg);
		header('HTTP/1.1 403 Access Denied');
		print "You are not welcome here.";
		exit;
	}
} catch (PDOException $ex) {
	// Initial installation?  Site Down?  Fail silently.
}

// Search Engines are treated special, and receive only core data, without the
// pretty bells and whistles.  Recursion is also going to be kept to a minimum.
// Max uncompressed page output has to be under 100k.  Spiders do not index the
// rest of the file.

global $SEARCH_SPIDER;
$SEARCH_SPIDER = false;		// set empty at start

$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";

$worms = array(
	'archive.org_bot',		// Doesn't respect robots.txt
	'PageBot',
	'PictureBot',
	'ContextAd',
	'ADmantX',
	'XoviBot',
	'Cliqzbot',
	'TinEye',
	'meanpath',
	'OffByOne',
	'Genieo',
	'MorMor',
	'ca-crawler',
	'LSSRocketCrawler',
	'DBot',
	'Add Catalog',
	'SearchmetricsBot',
	'spbot',
	'Synapse',
//	'Baidu',
	'rarely used',
	'curl',
	'Mail.RU',
	'Linguee',
	'Aboundex',
	'news bot',
	'sosospider',
	'Powermarks',
	'Blog Search',
	'SISTRIX',
	'DomainCrawler',
	'DLE_Spider',
	'Python',
	'MaMa',
	'CaSpEr',
	'oBot',
	'Indy Library',
	'XXX',
	'robotgenius',
	'Super_Ale',
	'Wget',
	'DataCha',
	'libwww-perl',
	'LWP::Simple',
	'lwp-trivial',
	'MJ.*bot',
//	'ru.*rv',
	'DotBot',
	'HTTrack',
	'AISearchBot',
	'panscient.com',
	'Plonebot',
//	'Mozilla([^\/])|(\/[\D])',	// legitimate Mozilla-based browsers have something like "Mozilla/5.0"
	'Mozilla[^\/]',		// legitimate Mozilla-based browsers have something like "Mozilla/5.0"
	'Mozilla\/[^456]',	// legitimate Mozilla-based browsers have something like "Mozilla/5.0"
	'^Mozilla\/[456]\.0$',	// legitimate Mozilla-based browsers have something following "Mozilla/5.0"
	'Speedy.*Spider',
	'KaloogaBot',		// Image search engines have no business searching a Genealogy site
	'DBLBot',
	'TurnitinBot',		// Plagiarism detectors have no business searching a Genealogy site
	'(Microsoft)|(Explorer)'		// Internet Explorer self-identifies with "MSIE"
	);

//-- Recursively call the html_entity_decode() function so that things like &amp;gt;,
//   are properly transformed to plain text
$requestURI = $_SERVER['REQUEST_URI'];
do {
	$previousRequestURI = $requestURI;
	$requestURI = html_entity_decode(urldecode($previousRequestURI));
} while ($requestURI != $previousRequestURI);

$quitReason = "";

while (true) {
	// check for SQL injection
	if (preg_match('~\b(sleep|unhex|join|select|insert|set|declare|drop|md5|benchmark)\b~is', $requestURI)) {
		$quitReason = 'SQL injection detected';
		break;
	}

	// check for script injection
//	if (preg_match('~[<>"\%{};]~', $requestURI) || preg_match('~sleep~i', $requestURI)) {
	if (preg_match('~[<>\%{};]~', $requestURI) || preg_match('~sleep~i', $requestURI)) {
		$quitReason = 'Script injection detected';
		break;
	}

	// check for attempt to redirect
	if (preg_match("~=.*://~", $requestURI)) {
		$quitReason = 'Embedded URL detected';
		break;
	}

	// check for improperly formed URI
//	if (preg_match("~(//|\?\?|\?&|&&|\?'|&'|'&|'$|\?$|&$)~s", $requestURI)) {
	if (preg_match("~(//|\?\?|&&|\?'|&'|'&|'$|\?$|&$)~s", $requestURI)) {
		$quitReason = 'Improperly formed URI';
		break;
	}

	// check for attempt to escape from the PGV directory
	if (preg_match("~\.\.(/|\\\)~", $requestURI)) {
		$quitReason = 'Attempt escape from PGV directory';
		break;
	}

	// check for improperly formed UA string
	if (strlen($ua) > 511) {
		$quitReason = 'UA too long';
		break;
	}
	if (strlen($ua) < 5) {
		$quitReason = 'UA too short';
		break;
	}

	// check for conflicting OS in UA string (e.g.: Linux, Windows, etc. in same UA string)
	// -- still to be implemented --

	// check for conflicting browsers in UA string (e.g.: MSIE, Firefox, Opera, Safari, Chrome, etc. in same UA string)
	// -- still to be implemented --

	// check for conflicting rendering engines in UA string (e.g.: Mozilla, AppleWebKit, Presto, etc. in same UA string)
	// -- still to be implemented --

	// check for worms and bad bots
	foreach ($worms as $worm) {
		if (preg_match('/'.$worm.'/i', $ua)) {
			$quitReason = 'Blocked crawler detected';
			break 2;
		}
	}

	break;
}

// Do we have a reason to quit now?
if ($quitReason != "") {
	if ((!ini_get('register_globals'))||(strtolower(ini_get('register_globals'))=="off")) {
		//-- load common functions
		require_once PGV_ROOT.'includes/functions/functions.php';
		//-- load db specific functions
		require_once PGV_ROOT.'includes/functions/functions_db.php';
		require_once PGV_ROOT.'includes/authentication.php';      // -- load the authentication system

		// Prevent CR and LF from messing up the log
		$requestURI = str_replace(
			array("\r", "\n"),
			array("%0B", "%0A"),
			$requestURI
		);

		AddToLog("MSG>{$quitReason}; script terminated; IP address blocked for 1 hour.");
		AddToLog("UA>{$ua}<");
		AddToLog("URI>{$requestURI}<");		// Use the human-readable URI instead of the incoming raw one
		//-- Block further access from this IP address for the next hour
		$address = $_SERVER['REMOTE_ADDR'];
		$comment = date('Y.m.d@H:i', time()+60*60);
		PGV_DB::prepare(
			"DELETE FROM {$TBLPREFIX}ip_address WHERE ip_address=? AND category='timedban'"
		)->execute(array($address));
		PGV_DB::prepare(
			"INSERT INTO {$TBLPREFIX}ip_address (ip_address, category, comment) VALUES (?, ?, ?)"
		)->execute(array($address, 'timedban', $comment));
	}
	header("HTTP/1.0 403 Forbidden");
	print "You are not welcome here.";
	exit;
}

// The search list has been reversed.  Whitelist all browsers, and
// mark everything else as a spider/bot.
// Java/ Axis/ and PEAR required for GDBI and our own cross site communication.
$real_browsers = array(
	'PHP-SOAP',
	'PGVAgent',
	'MSIE ',
	'Opera',
	'Firefox',
	'Konqueror',
	'Gecko',
	'Safari',
	'Chrome',
	'K-Meleon',
	'Nutch',
	'Trident',
	'http://www.avantbrowser.com',
	'BlackBerry',
	'Lynx',
	'Java/',
	'PEAR',
	'Axis/',
	'MSFrontPage',
	'RssReader',
	'Liferea/',
	'W3C_Validator'
	);

// Here we list the scripts that search engines are allowed to access.
// Anything else will result in an HTTP 403 error.
$searchEngineAllowed = array(
	'individual.php',
	'indilist.php',
	'family.php',
	'famlist.php',
	'index.php'
);

// Here we list the search engines whose accesses we don't need to log.
// This avoids cluttering the log files with useless entries
$known_spiders = array(
	'Applebot',
	'Ask Jeeves',
	'bingbot',
	'Clarabot',
	'Ezooms',
	'Feedfetcher-Google',
	'Googlebot',
	'Manual Search Engine entry',
	'Mediapartners-Google',
	'NetcraftSurveyAgent',
	'Seznam',
	'Twiceler',
	'UP.Browser',
	'Vagabondo'
);


// If you want to disable spider detection, set real to true here.
$real = false;

if($ua != "") {
	$bot_name = $ua;
	foreach($real_browsers as $browser_check) {
		if (strpos($ua, $browser_check)!==false) {
			$real = true;
			break;
		}
	}
	// check for old Netscapes.
	if (strpos($ua, "Mozilla")!==false) {
		if (strpos($ua, "compatible")===false) {
			if (preg_match("/\[..\]/i", $ua)!==false) {
				$real = true;
			}
			if (strpos($ua, "Macintosh")!==false) {
				$real = true;
			}
		}
	}
	// Check for search engines with browser names in their UAs.  For example:
	// "Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Safari/537.36"
	// instead of:
	// "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)"
	foreach($known_spiders as $spider_check) {
		if (strpos($ua, $spider_check)!==false) {
			$real = false;
			$bot_name = $spider_check;		// Use a friendly name for known search engines
			break;
		}
	}
}
else {
	// For the people who firewall identifying information
	// Switch real to false if you wish to restrict these connections.
	$ua = 'Browser User Agent Empty';
	$bot_name = 'Unknown';
	$real = true;
}

if (!$real) {
	// strip out several common strings that clutter the User Agent.
	$bot_name = preg_replace("~AppleWebKit.* ~iU", "", $bot_name);
	$bot_name = preg_replace("~Safari.*~i", "", $bot_name);
	$bot_name = preg_replace("~KHTML, like Gecko;~i", "", $bot_name);
	$bot_name = preg_replace("~compatible;~i", "", $bot_name);
	$bot_name = preg_replace("~Mozilla.* ~iU", "", $bot_name);
	$bot_name = preg_replace("~Windows NT~i", "", $bot_name);
	$bot_name = preg_replace("~Windows; U;~i", "", $bot_name);
	$bot_name = preg_replace("~Windows~i", "", $bot_name);

	// Copy in characters, stripping out unwanteds until we are full, stopping at 70.
	$SEARCH_SPIDER = '';
	$botNameLength = strlen($bot_name);
	$lastChar = '';
	for($i=0; $i<$botNameLength; $i++) {
		$thisChar = $bot_name[$i];
		if (ctype_alpha($thisChar)) {
			$SEARCH_SPIDER .= $thisChar;
			$lastChar = $thisChar;
			continue;
		}
		if (strpos('.:/-_', $thisChar) !== false) {
			$SEARCH_SPIDER .= $thisChar;
			$lastChar = $thisChar;
			continue;
		}
		$thisChar = ' ';
		if ($thisChar != $lastChar) {
			$SEARCH_SPIDER .= $thisChar;
			$lastChar = $thisChar;
		}
	}
	$SEARCH_SPIDER = str_pad($SEARCH_SPIDER, 70);		// Make that spider name 
	$SEARCH_SPIDER = substr($SEARCH_SPIDER, 0, 70);		//   exactly 70 characters long

	// The SEARCH_SPIDER is now set to 70 vetted chars, the session to 31 chars.
	$bot_session = gen_spider_session_name($SEARCH_SPIDER);
	session_id($bot_session);
}

// Manual Search Engine IP Address tagging
//   Allow an admin to mark IP addresses as known search engines even if
//   they are not automatically detected above.   Setting his own IP address
//   in the ip_address table allows him to see exactly what the search engine receives.
//   To return to normal, the admin MUST use a different IP to get to admin
//   mode or update the table pgv_ip_address directly.
try {
	$search_engine=PGV_DB::prepareLimit(
		"SELECT ip_address, comment FROM {$TBLPREFIX}ip_address".
		" WHERE category='search-engine' AND ? LIKE REPLACE(ip_address, '*', '%')",
		1
	)->execute(array($_SERVER['REMOTE_ADDR']))->fetchOneRow();
	if ($search_engine) {
		if (empty($SEARCH_SPIDER)) {
			if ($search_engine->comment) {
				$SEARCH_SPIDER = 'Manual Search Engine entry of '.$_SERVER['REMOTE_ADDR'].' ('.$search_engine->comment.')';
			} else {
				$SEARCH_SPIDER = 'Manual Search Engine entry of '.$_SERVER['REMOTE_ADDR'];
			}
		}
		$bot_name = 'MAN'.$_SERVER['REMOTE_ADDR'];
		$bot_session = gen_spider_session_name($bot_name);
		session_id($bot_session);
	}
} catch (PDOException $ex) {
	// Initial installation?  Site Down?  Fail silently.
}

// If this script is not in allowed list, spiders should get an HTTP 403 error
if ($SEARCH_SPIDER) {
	if (!in_array(PGV_SCRIPT_NAME, $searchEngineAllowed)) {
		header("HTTP/1.0 403 Forbidden");
		print "Sorry, this page is not available to search engines.";
		exit;
	}
}

if((empty($SEARCH_SPIDER)) && (!empty($_SESSION['last_spider_name']))) // user following a search engine listing in,
session_regenerate_id();

if(!empty($SEARCH_SPIDER)) {
	$spidertime = time();
	$spiderdate = date("d.m.Y", $spidertime);
	// Do we need to log this spider access?
	$outstr = preg_replace('/\s+/', ' ', $SEARCH_SPIDER);  // convert tabs etc. to blanks; trim extra blanks
	$outstr = str_replace(' - ', ' ', $outstr);            // Don't allow ' - ' because that is the log separator
	$logSpider = true;
	foreach ($known_spiders as $spider) {
		if (strpos($outstr, $spider) !== false) {
			$logSpider = false;
			break;
		}
	}
	if(isset($_SESSION['spider_count']))
	$spidercount = $_SESSION['spider_count'] + 1;
	else {
		$spidercount = 1;
		if ($logSpider) {
			//adds a message to the log that a new spider session is starting
			require_once PGV_ROOT.'includes/authentication.php';      // -- Loaded early so AddToLog works
			AddToLog("New search engine encountered: ->".$outstr."<-");
			AddToLog("UA>{$ua}<");
			AddToLog("URI>{$_SERVER["REQUEST_URI"]}<");
		}
	}
	if(isset($_SESSION['last_spider_date'])) {
		if($spiderdate != $_SESSION['last_spider_date']) {
			//adds a message to the log that a new spider session is starting
			if ($logSpider) {
				require_once PGV_ROOT.'includes/authentication.php';      // -- Loaded early so AddToLog works
				AddToLog("Returning search engine last seen ".$_SESSION['spider_count']." times on ".$_SESSION['last_spider_date']." from ".$_SESSION['last_spider_ip']." ->".$outstr."<-");
			}
			$_SESSION['last_spider_date'] = $spiderdate;
			$spidercount = 1;
		}
	}
	$_SESSION['last_spider_date'] = $spiderdate;
	$_SESSION['spider_count'] = $spidercount;
	if(isset($_SERVER['REMOTE_ADDR']))
	$_SESSION['last_spider_ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['last_spider_name'] = $SEARCH_SPIDER;
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
	$_SESSION['last_spider_lang'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

	$_SESSION['pgv_user'] = "";	// Don't allow search engine into user/admin mode.
	$_SESSION['CLANGUAGE'] = "";	// Force language to gedcom default language.
}

?>

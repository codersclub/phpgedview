<?php
/**
 * Outputs an ATOM or RSS feed of information, mostly based on the information available
 * in the index page.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2004  John Finlay and Others
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
 * $Id$
 * @package PhpGedView
 * @subpackage RSS
 * @TODO add Basic HTTP authentication to allow RSS agrigators to "log on"
 */

if (isset($_SESSION["CLANGUAGE"])) $oldlang = $_SESSION["CLANGUAGE"];
else $oldlang = "english";
if (!empty($lang)) {
	$changelanguage = "yes";
	$NEWLANGUAGE = $lang;
}
require("includes/feedcreator.class.php");
require("includes/functions_rss.php");
require("config.php");
if (!empty($auth)){
	if($auth=="basic"){
		basicHTTPAuthenticateUser();
	}
}
if (empty($rssStyle)){
	$rssStyle=$RSS_FORMAT;
}

if (!isset($_SERVER['QUERY_STRING'])) $_SERVER['QUERY_STRING'] = "lang=".$LANGUAGE;

$user=getUser($CONTACT_EMAIL);
$author =$user["firstname"]." ".$user["lastname"];

$feed = new UniversalFeedCreator();
$feed->title = $GEDCOMS[$GEDCOM]["title"];


//optional
$feed->descriptionTruncSize = 500;
$feed->descriptionHtmlSyndicated = true;
//end optional

$feed->link = $SERVER_URL;
$syndURL = $SERVER_URL."rss.php?".$_SERVER['QUERY_STRING'];
$syndURL = preg_replace("/&/", "&amp;", $syndURL);
$feed->syndicationURL = $syndURL;

$feedDesc = str_replace("#GEDCOM_TITLE#", $GEDCOMS[$GEDCOM]["title"], $pgv_lang["rss_descr"]);
$feed->description = $feedDesc;
$feed->copyright = $author . " (c) " . date("Y");
$feed->category="genealogy";

$image = new FeedImage();
$image->title = $pgv_lang["rss_logo_descr"];
$image->url = $SERVER_URL."images/gedview.gif";
$image->link = "http://www.phpgedview.net";
$image->description = $pgv_lang["rss_logo_descr"];

//optional
$image->descriptionTruncSize = 500;
$image->descriptionHtmlSyndicated = true;


$feed->image = $image;

if($ENABLE_RSS) {
	// basic auth is broken in all apps besides browsers, so I am disabling it for now.
	/*if (empty($auth) || $auth != "basic"){
		$username = getUserName();
		if(empty($username)){ //not logged in.
			$item = new FeedItem();
			$item->title = $pgv_lang["login"];
			$authURL= $syndURL . "&auth=basic";
			$item->link = $authURL;
			//$item->guid = $item->link;
			$authDesc = str_replace("#AUTH_URL#", $authURL, $pgv_lang["feed_login"]);
			$item->description = $authDesc;
			$item->descriptionHtmlSyndicated = true; //optional
			$item->date = time();
			$item->source = $SERVER_URL;
			$item->author = $author;
			$item->authorURL = $feed->link;
			$feed->addItem($item);
		}
	}*/

	// determine if to show parts of feed based on their exsistance in the blocks on index.php
	$printTodays = false;
	$printUpcoming = false;
	$printGedcomStats = false;
	$printGedcomNews = false;
	$printTop10Surnames = false;
	$printRecentChanges = false;


	$blocks=  getBlocks($GEDCOM);
	$main = $blocks["main"];

	if(!empty($module)){
		if($module == "today"){
			$printTodays = true;
		} else if($module == "upcoming"){
			$printUpcoming = true;
		} else if($module == "gedcomStats"){
			$printGedcomStats = true;
		} else if($module == "gedcomNews"){
			$printGedcomNews = true;
		} else if($module == "top10Surnames"){
			$printTop10Surnames = true;
		} else if($module == "recentChanges"){
			$printRecentChanges = true;
		}

	} else {
		if (count($main)==0) {
			$printGedcomStats = true;
			$printGedcomNews = true;
		} else {
			foreach($main as $mname => $value){
				$PGV_BLOCKS[$value[0]]['config'] = $value[1]; //set the config needed by functions_rss
				if($value[0] == "print_todays_events"){
					$printTodays = true;
				} else if($value[0] == "print_upcoming_events"){
					$printUpcoming = true;
				} else if($value[0] == "print_gedcom_stats"){
					$printGedcomStats = true;
				} else if($value[0] == "print_gedcom_news"){
					$printGedcomNews = true;
				} else if($value[0] == "print_block_name_top10"){
					$printTop10Surnames = true;
				} else if($value[0] == "print_recent_changes"){
					$printRecentChanges = true;
				}
			}
		}
		$right = $blocks["right"];
		if (count($right)==0) {
			$printTodays = true;
		} else {
			foreach($right as $mname => $value){
				$PGV_BLOCKS[$value[0]]['config'] = $value[1]; //set the config needed by functions_rss
				if($value[0] == "print_todays_events"){
					$printTodays = true;
				} else if($value[0] == "print_upcoming_events"){
					$printUpcoming = true;
				} else if($value[0] == "print_gedcom_stats"){
					$printGedcomStats = true;
				} else if($value[0] == "print_gedcom_news"){
					$printGedcomNews = true;
				} else if($value[0] == "print_block_name_top10"){
					$printTop10Surnames = true;
				} else if($value[0] == "print_recent_changes"){
					$printRecentChanges = true;
				}
			}
		}
	}

	if($printTodays){
		$todaysEvents = getTodaysEvents();
		if (! empty($todaysEvents[2])) {
			$item = new FeedItem();
			$item->title = $todaysEvents[0];
			$item->link = $SERVER_URL. "calendar.php?action=today";
			$item->description = $todaysEvents[2];

			//optional
			$item->descriptionTruncSize = 500;
			$item->descriptionHtmlSyndicated = true;

			$item->date = $todaysEvents[1];
			$item->source = $SERVER_URL;
			$item->author = $author;
			$item->authorURL = $feed->link;
			$feed->addItem($item);
		}
	}

	if($printUpcoming){
		$upcomingEvent = getUpcomingEvents();
		if (! empty($upcomingEvent[2])) {
			$item = new FeedItem();
			$item->title = $upcomingEvent[0];
			$item->link = $SERVER_URL. "calendar.php?action=calendar";
			$item->description = $upcomingEvent[2];

			//optional
			$item->descriptionTruncSize = 500;
			$item->descriptionHtmlSyndicated = true;

			$item->date = $upcomingEvent[1];
			$item->source = $SERVER_URL;
			$item->author = $author;
			$item->authorURL = $feed->link;
			$feed->addItem($item);
		}
	}

	if($printGedcomStats){
		$gedcomStats = getGedcomStats();
		if (! empty($gedcomStats[2])) {
			$item = new FeedItem();
			$item->title = $gedcomStats[0];
			$item->link = $SERVER_URL. "index.php?command=gedcom#gedcom_stats";
			$item->description = $gedcomStats[2];

			//optional
			$item->descriptionTruncSize = 500;
			$item->descriptionHtmlSyndicated = true;

			if (! empty($gedcomStats[1])) {
			$item->date = $gedcomStats[1];
			}
			$item->source = $SERVER_URL;
			$item->author = $author;
			$item->authorURL = $feed->link;

			$feed->addItem($item);
		}
	}

	if($printTop10Surnames){
		$top10 = getTop10Surnames();
		if (! empty($top10[2])) {
			$item = new FeedItem();
			$item->title = $top10[0];
			$item->link = $SERVER_URL. "indilist.php";
			$item->description = $top10[2];

			//optional
			$item->descriptionTruncSize = 500;
			$item->descriptionHtmlSyndicated = true;

			if (! empty($top10[1])) {
				$item->date = $top10[1];
			}
			$item->source = $SERVER_URL;
			$item->author = $author;
			$item->authorURL = $feed->link;

			$feed->addItem($item);
		}
	}

	if($printGedcomNews){
		$gedcomNews = getGedcomNews();

		$numElements = count($gedcomNews); //number of news items
		for($i=0; $i < $numElements; $i++) {
			$newsItem = $gedcomNews[$i];
			if (! empty($newsItem[1])) {
				$item = new FeedItem();
				$item->title = $newsItem[0];
				$item->link = $SERVER_URL . "index.php?command=gedcom#" . $newsItem[3];
				$item->description = $newsItem[2];

				//optional
				$item->descriptionTruncSize = 500;
				$item->descriptionHtmlSyndicated = true;

				$item->date = $newsItem[1];
				$item->source = $SERVER_URL ;
				$item->author = $author;
				$item->authorURL = $feed->link;
				$feed->addItem($item);
			}
		}
	}

	if($printRecentChanges){
		$recentChanges= getRecentChanges();
		if (! empty($recentChanges[2])) {
			$item = new FeedItem();
			$item->title = $recentChanges[0];
			$item->link = $SERVER_URL. "index.php?command=gedcom#recent_changes";
			$item->description = $recentChanges[2];

			//optional
			$item->descriptionTruncSize = 500;
			$item->descriptionHtmlSyndicated = true;

			if (! empty($recentChanges[1])) {
				$item->date = $recentChanges[1];
			}
			$item->source = $SERVER_URL;
			$item->author = $author;
			$item->authorURL = $feed->link;

			$feed->addItem($item);
		}
	}
} else {
	$item = new FeedItem();
	$item->title = $pgv_lang["no_feed_title"];
	$item->link = $SERVER_URL. "index.php";
	$item->description = $pgv_lang["no_feed"];
	$item->date = time();
	$item->source = $SERVER_URL;
	$item->author = $author;
	$item->authorURL = $feed->link;
	$feed->addItem($item);
}

// valid format strings are: RSS0.91, RSS1.0, RSS2.0, MBOX, OPML, ATOM, ATOM1.0, ATOM0.3, HTML, JS
if (empty($rssStyle)) $rssStyle = "ATOM"; //default to ATOM1.0

$feed->outputFeed($rssStyle);

 //-- preserve the old language by storing it back in the session
$_SESSION['CLANGUAGE'] = $oldlang;

?>
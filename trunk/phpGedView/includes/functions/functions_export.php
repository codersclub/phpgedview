<?php
/**
* Functions for exporting data
*
* phpGedView: Genealogy Viewer
* Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
* @subpackage Admin
* @version $Id$
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_FUNCTIONS_EXPORT_PHP', '');

require_once 'includes/classes/class_gedownloadgedcom.php';

/*
* Create a header for a (newly-created or already-imported) gedcom file.
*/
function gedcom_header($gedfile)
{
	global $CHARACTER_SET, $GEDCOMS, $pgv_lang, $TBLPREFIX;

	// Default values for a new header
	$HEAD="0 HEAD\n";
	$SOUR="1 SOUR ".PGV_PHPGEDVIEW."\n2 NAME ".PGV_PHPGEDVIEW."\n2 VERS ".PGV_VERSION_TEXT."\n";
	$DEST="1 DEST DISKETTE\n";
	$DATE="1 DATE ".strtoupper(date("d M Y"))."\n2 TIME ".date("H:i:s")."\n";
	$GEDC="1 GEDC\n2 VERS 5.5.1\n2 FORM Lineage-Linked\n";
	$CHAR="1 CHAR {$CHARACTER_SET}\n";
	$FILE="1 FILE {$gedfile}\n";
	$LANG="";
	$PLAC="1 PLAC\n2 FORM {$pgv_lang['default_form']}\n";
	$COPR="";
	$SUBN="";
	$SUBM="1 SUBM @SUBM@\n0 @SUBM@ SUBM\n1 NAME ".PGV_USER_NAME."\n"; // The SUBM record is mandatory

	// Preserve some values from the original header
	if (isset($GEDCOMS[$gedfile]['imported']) && $GEDCOMS[$gedfile]['imported']) {
		$head=find_gedcom_record("HEAD");
		if (preg_match("/(1 CHAR [^\r\n]+)/", $head, $match))
			$CHAR=$match[1]."\n";
		if (preg_match("/1 PLAC[\r\n]+2 FORM ([^\r\n]+)/", $head, $match))
			$PLAC="1 PLAC\n2 FORM {$match[1]}\n";
		if (preg_match("/(1 LANG [^\r\n]+)/", $head, $match))
			$LANG=$match[1]."\n";
		if (preg_match("/(1 SUBN [^\r\n]+)/", $head, $match))
			$SUBN=$match[1]."\n";
		if (preg_match("/(1 COPR [^\r\n]+)/", $head, $match))
			$COPR=$match[1]."\n";
		// Link to SUBM/SUBN records, if they exist
		$sql="SELECT o_id FROM ${TBLPREFIX}other WHERE o_type='SUBN' AND o_file=".$GEDCOMS[$gedfile]["id"];
		$res=dbquery($sql);
		if (!DB::isError($res)) {
			if ($res->numRows()>0) {
				$row=$res->fetchRow();
				$SUBN="1 SUBN @".$row[0]."@\n";
			}
			$res->free();
		}
		$sql="SELECT o_id FROM ${TBLPREFIX}other WHERE o_type='SUBM' AND o_file=".$GEDCOMS[$gedfile]["id"];
		$res=dbquery($sql);
		if (!DB::isError($res)) {
			if ($res->numRows()>0) {
				$row=$res->fetchRow();
				$SUBM="1 SUBM @".$row[0]."@\n";
			}
			$res->free();
		}
	}

	return $HEAD.$SOUR.$DEST.$DATE.$GEDC.$CHAR.$FILE.$COPR.$LANG.$PLAC.$SUBN.$SUBM;
}

function print_gedcom($privatize_export, $privatize_export_level, $convert, $remove, $gedout) {
	global $GEDCOMS, $GEDCOM, $pgv_lang, $CHARACTER_SET;
	global $TBLPREFIX;

	if ($privatize_export=="yes") {
		if ($export_user_id=get_user_id('export')) {
			delete_user($export_user_id);
		}
		$export_user_id=create_user('export', md5(rand()));
		set_user_setting($export_user_id, 'relationship_privacy', 'N');
		set_user_setting($export_user_id, 'max_relation_path', '0');
		set_user_setting($export_user_id, 'visibleonline', 'N');
		set_user_setting($export_user_id, 'contactmethod', 'none');
		switch ($privatize_export_level) {
		case 'admin':
			set_user_setting($export_user_id, 'canadmin', 'Y');
			set_user_gedcom_setting($export_user_id, $GEDCOM, 'canedit', 'admin');
		case 'gedadmin':
			set_user_setting($export_user_id, 'canadmin', 'N');
			set_user_gedcom_setting($export_user_id, $GEDCOM, 'canedit', 'admin');
			break;
		case 'user':
			set_user_setting($export_user_id, 'canadmin', 'N');
			set_user_gedcom_setting($export_user_id, $GEDCOM, 'canedit', 'access');
			break;
		case 'visitor':
		default:
			set_user_setting($export_user_id, 'canadmin', 'N');
			set_user_gedcom_setting($export_user_id, $GEDCOM, 'canedit', 'none');
			break;
		}
		AddToLog("created dummy user -> export <- with level ".$privatize_export_level);
		// Temporarily become this user
		if (isset ($_SESSION)) {
			$_SESSION["org_user"]=$_SESSION["pgv_user"];
			$_SESSION["pgv_user"]="export";
		}
	}

	$head=gedcom_header($GEDCOM);
	if ($convert=="yes") {
		$head=preg_replace("/UTF-8/", "ANSI", $head);
		$head=utf8_decode($head);
	}
	$head=remove_custom_tags($head, $remove);
	$head=preg_replace('/[\r\n]+/', PGV_EOL, $head);
	fwrite($gedout, $head);

	$sql="SELECT i_id, i_gedcom FROM {$TBLPREFIX}individuals WHERE i_file={$GEDCOMS[$GEDCOM]['id']}";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		//-- ignore any remote cached records
		if (preg_match("/S\d+:\w+/", $row[0])==0) {
			$rec=breakConts($rec);
			$rec=preg_replace('/[\r\n]+/', PGV_EOL, $row[1]).PGV_EOL;
			$rec=remove_custom_tags($rec, $remove);
			if ($privatize_export=="yes")
				$rec=privatize_gedcom($rec);
			if ($convert=="yes")
				$rec=utf8_decode($rec);
			fwrite($gedout, $rec);
		}
	}
	$res->free();

	$sql="SELECT f_id, f_gedcom FROM {$TBLPREFIX}families WHERE f_file={$GEDCOMS[$GEDCOM]['id']}";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		//-- ignore any remote cached records
		if (preg_match("/S\d+:\w+/", $row[0])==0) {
			$rec=breakConts($rec);
			$rec=preg_replace('/[\r\n]+/', PGV_EOL, $row[1]).PGV_EOL;
			$rec=remove_custom_tags($rec, $remove);
			if ($privatize_export=="yes")
				$rec=privatize_gedcom($rec);
			if ($convert=="yes")
				$rec=utf8_decode($rec);
			fwrite($gedout, $rec);
		}
	}
	$res->free();

	$sql="SELECT s_id, s_gedcom FROM {$TBLPREFIX}sources WHERE s_file={$GEDCOMS[$GEDCOM]['id']}";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		//-- ignore any remote cached records
		if (preg_match("/S\d+:\w+/", $row[0])==0) {
			$rec=breakConts($rec);
			$rec=preg_replace('/[\r\n]+/', PGV_EOL, $row[1]).PGV_EOL;
			$rec=remove_custom_tags($rec, $remove);
			if ($privatize_export=="yes")
				$rec=privatize_gedcom($rec);
			if ($convert=="yes")
				$rec=utf8_decode($rec);
			fwrite($gedout, $rec);
		}
	}
	$res->free();

	$sql="SELECT o_id, o_gedcom FROM {$TBLPREFIX}other WHERE o_file={$GEDCOMS[$GEDCOM]['id']} AND o_type!='HEAD' AND o_type!='TRLR'";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		//-- ignore any remote cached records
		if (preg_match("/S\d+:\w+/", $row[0])==0) {
			$rec=breakConts($rec);
			$rec=preg_replace('/[\r\n]+/', PGV_EOL, $row[1]).PGV_EOL;
			$rec=remove_custom_tags($rec, $remove);
			if ($privatize_export=="yes")
				$rec=privatize_gedcom($rec);
			if ($convert=="yes")
				$rec=utf8_decode($rec);
			fwrite($gedout, $rec);
		}
	}
	$res->free();

	$sql="SELECT m_media, m_gedrec FROM {$TBLPREFIX}media WHERE m_gedfile={$GEDCOMS[$GEDCOM]['id']}";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		//-- ignore any remote cached records
		if (preg_match("/S\d+:\w+/", $row[0])==0) {
			$rec=breakConts($rec);
			$rec=preg_replace('/[\r\n]+/', PGV_EOL, $row[1]).PGV_EOL;
			$rec=remove_custom_tags($rec, $remove);
			if ($privatize_export=="yes")
				$rec=privatize_gedcom($rec);
			if ($convert=="yes")
				$rec=utf8_decode($rec);
			fwrite($gedout, $rec);
		}
	}
	$res->free();

	fwrite($gedout, "0 TRLR".PGV_EOL);

	if ($privatize_export=="yes") {
		if (isset ($_SESSION)) {
			$_SESSION["pgv_user"]=$_SESSION["org_user"];
		}
		delete_user($export_user_id);
		AddToLog("deleted dummy user -> export <-");
	}
}

function print_gramps($privatize_export, $privatize_export_level, $convert, $remove, $gedout) {
	global $GEDCOMS, $GEDCOM, $pgv_lang;
	global $TBLPREFIX;

	$geDownloadGedcom=new GEDownloadGedcom();
	$geDownloadGedcom->begin_xml();

	$sql="SELECT i_gedcom, i_id FROM " . $TBLPREFIX . "individuals WHERE i_file=" . $GEDCOMS[$GEDCOM]['id'] . " ORDER BY i_id";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		$rec=$row[0];
		$rec=remove_custom_tags($rec, $remove);
		$geDownloadGedcom->create_person($rec, $row[1]);
	}
	$res->free();

	$sql="SELECT f_gedcom, f_id FROM " . $TBLPREFIX . "families WHERE f_file=" . $GEDCOMS[$GEDCOM]['id'] . " ORDER BY f_id";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		$rec=$row[0];
		$rec=remove_custom_tags($rec, $remove);
		$geDownloadGedcom->create_family($rec, $row[1]);
	}
	$res->free();

	$sql="SELECT s_gedcom, s_id FROM " . $TBLPREFIX . "sources WHERE s_file=" . $GEDCOMS[$GEDCOM]['id'] . " ORDER BY s_id";
	$res=dbquery($sql);
	while ($row=$res->fetchRow()) {
		$rec=$row[0];
		$rec=remove_custom_tags($rec, $remove);
		$geDownloadGedcom->create_source($row[1], $rec);
	}
	$res->free();

	$sql="SELECT m_gedrec, m_media FROM " . $TBLPREFIX . "media WHERE m_gedfile=" . $GEDCOMS[$GEDCOM]['id'] . " ORDER BY m_media";
	$res=dbquery($sql);

	while ($row=$res->fetchRow()) {
		$rec=$row[0];
		$rec=remove_custom_tags($rec, $remove);
		preg_match('/0 @(.*)@/',$rec, $varMatch);
		$geDownloadGedcom->create_media($varMatch[1],$rec, $row[1]);
	}
	$res->free();
	fwrite($gedout,$geDownloadGedcom->dom->saveXML());
}

function um_export($proceed) {
	global $INDEX_DIRECTORY, $TBLPREFIX, $pgv_lang;

	// Get user array and create authenticate.php
	if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_creating"]." \"authenticate.php\"<br /><br />";
	$authtext="<?php\n\n\$users=array();\n\n";
	foreach (get_all_users() as $user_id=>$username) {
		$authtext .="\$user=array();\n";
		foreach (array('username', 'firstname', 'lastname', 'gedcomid', 'rootid', 'password','canadmin', 'canedit', 'email', 'verified','verified_by_admin', 'language', 'pwrequested', 'reg_timestamp','reg_hashcode', 'theme', 'loggedin', 'sessiontime', 'contactmethod', 'visibleonline', 'editaccount', 'defaulttab','comment', 'comment_exp', 'sync_gedcom', 'relationship_privacy', 'max_relation_path', 'auto_accept') as $ukey) {
			$value=get_user_setting($user_id, $ukey);
			// Convert Y/N/yes/no to bools
			if (in_array($ukey, array('canadmin', 'loggedin', 'visibleonline', 'editaccount', 'sync_gedcom', 'relationship_privacy', 'auto_accept'))) {
				$value=($value=='Y');
			}
			if (in_array($ukey, array('verified', 'verified_by_admin'))) {
				$value=($value=='yes');
			}
			if (!is_array($value)) {
				$value=preg_replace('/"/', '\\"', $value);
				$authtext .="\$user[\"$ukey\"]='$value';\n";
			} else {
				$authtext .="\$user[\"$ukey\"]=array();\n";
				foreach ($value as $subkey=>$subvalue) {
					$subvalue=preg_replace('/"/', '\\"', $subvalue);
					$authtext .="\$user[\"$ukey\"][\"$subkey\"]='$subvalue';\n";
				}
			}
		}
		$authtext .="\$users[\"$username\"]=\$user;\n\n";
	}
	$authtext .="?".">\n";
	if (file_exists($INDEX_DIRECTORY."authenticate.php")) {
		print $pgv_lang["um_file_create_fail1"]." ".$INDEX_DIRECTORY."authenticate.php<br /><br />";
	} else {
		$fp=fopen($INDEX_DIRECTORY."authenticate.php", "w");
		if ($fp) {
			fwrite($fp, $authtext);
			fclose($fp);
			$logline=AddToLog("authenticate.php updated");
			check_in($logline, "authenticate.php", $INDEX_DIRECTORY);
			if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_file_create_succ1"]." authenticate.php<br /><br />";
		} else
			print $pgv_lang["um_file_create_fail2"]." ".$INDEX_DIRECTORY."authenticate.php. ".$pgv_lang["um_file_create_fail3"]."<br /><br />";
	}

	// Get messages and create messages.dat
	if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_creating"]." \"messages.dat\"<br /><br />";
	$messages=array();
	$mesid=1;
	$sql="SELECT * FROM ".$TBLPREFIX."messages ORDER BY m_id DESC";
	$res=dbquery($sql);
	while ($row=& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$row=db_cleanup($row);
		$message=array();
		$message["id"]=$mesid;
		$mesid=$mesid + 1;
		$message["to"]=$row["m_to"];
		$message["from"]=$row["m_from"];
		$message["subject"]=stripslashes($row["m_subject"]);
		$message["body"]=stripslashes($row["m_body"]);
		$message["created"]=$row["m_created"];
		$messages[]=$message;
	}
	if ($mesid > 1) {
		$mstring=serialize($messages);
			if (file_exists($INDEX_DIRECTORY."messages.dat")) {
			print $pgv_lang["um_file_create_fail1"]." ".$INDEX_DIRECTORY."messages.dat<br /><br />";
		} else {
			$fp=fopen($INDEX_DIRECTORY."messages.dat", "wb");
			if ($fp) {
				fwrite($fp, $mstring);
				fclose($fp);
				$logline=AddToLog("messages.dat updated");
				check_in($logline, "messages.dat", $INDEX_DIRECTORY);
				if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_file_create_succ1"]." messages.dat<br /><br />";
			} else
				print $pgv_lang["um_file_create_fail2"]." ".$INDEX_DIRECTORY."messages.dat. ".$pgv_lang["um_file_create_fail3"]."<br /><br />";
		}
	} else {
		if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_nomsg"]." ".$pgv_lang["um_file_not_created"]."<br /><br />";
	}

	// Get favorites and create favorites.dat
	if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_creating"]." \"favorites.dat\"<br /><br />";
	$favorites=array();
	$sql="SELECT * FROM ".$TBLPREFIX."favorites";
	$res=dbquery($sql);
	$favid=1;
	while ($row=& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$row=db_cleanup($row);
		$favorite=array();
		$favorite["id"]=$favid;
		$favid=$favid + 1;
		$favorite["username"]=$row["fv_username"];
		$favorite["gid"]=$row["fv_gid"];
		$favorite["type"]=$row["fv_type"];
		$favorite["file"]=$row["fv_file"];
		$favorite["title"]=$row["fv_title"];
		$favorite["note"]=$row["fv_note"];
		$favorite["url"]=$row["fv_url"];
		$favorites[]=$favorite;
	}
	if ($favid > 1) {
		$mstring=serialize($favorites);
		if (file_exists($INDEX_DIRECTORY."favorites.dat")) {
			print $pgv_lang["um_file_create_fail1"]." ".$INDEX_DIRECTORY."favorites.dat<br /><br />";
		} else {
			$fp=fopen($INDEX_DIRECTORY."favorites.dat", "wb");
			if ($fp) {
				fwrite($fp, $mstring);
				fclose($fp);
				$logline=AddToLog("favorites.dat updated");
				check_in($logline, "favorites.dat", $INDEX_DIRECTORY);
				if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_file_create_succ1"]." favorites.dat<br /><br />";
			} else
				print $pgv_lang["um_file_create_fail2"]." ".$INDEX_DIRECTORY."favorites.dat. ".$pgv_lang["um_file_create_fail3"]."<br /><br />";
		}
	} else {
		if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_nofav"]." ".$pgv_lang["um_file_not_created"]."<br /><br />";
	}

	// Get news and create news.dat
	if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_creating"]." \"news.dat\"<br /><br />";
	$allnews=array();
	$sql="SELECT * FROM ".$TBLPREFIX."news ORDER BY n_date DESC";
	$res=dbquery($sql);
	while ($row=& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$row=db_cleanup($row);
		$news=array();
		$news["id"]=$row["n_id"];
		$news["username"]=$row["n_username"];
		$news["date"]=$row["n_date"];
		$news["title"]=stripslashes($row["n_title"]);
		$news["text"]=stripslashes($row["n_text"]);
		$allnews[$row["n_id"]]=$news;
	}
	if (count($allnews) > 0) {
		$mstring=serialize($allnews);
		if (file_exists($INDEX_DIRECTORY."news.dat")) {
			print $pgv_lang["um_file_create_fail1"].$INDEX_DIRECTORY."news.dat<br /><br />";
		} else {
			$fp=fopen($INDEX_DIRECTORY."news.dat", "wb");
			if ($fp) {
				fwrite($fp, $mstring);
				fclose($fp);
				$logline=AddToLog("news.dat updated");
				check_in($logline, "news.dat", $INDEX_DIRECTORY);
				if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_file_create_succ1"]." news.dat<br /><br />";
			} else
				print $pgv_lang["um_file_create_fail2"]." ".$INDEX_DIRECTORY."news.dat. ".$pgv_lang["um_file_create_fail3"]."<br /><br />";
		}
	} else {
		if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_nonews"]." ".$pgv_lang["um_file_not_created"]."<br /><br />";
	}

	// Get blocks and create blocks.dat
	if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_creating"]." \"blocks.dat\"<br /><br />";
	$allblocks=array();
	$blocks["main"]=array();
	$blocks["right"]=array();
	$sql="SELECT * FROM ".$TBLPREFIX."blocks ORDER BY b_location, b_order";
	$res=dbquery($sql);
	while ($row=& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$blocks=array();
		$blocks["username"]=$row["b_username"];
		$blocks["location"]=$row["b_location"];
		$blocks["order"]=$row["b_order"];
		$blocks["name"]=$row["b_name"];
		$blocks["config"]=unserialize($row["b_config"]);
		$allblocks[]=$blocks;
	}
	if (count($allblocks) > 0) {
		$mstring=serialize($allblocks);
		if (file_exists($INDEX_DIRECTORY."blocks.dat")) {
			print $pgv_lang["um_file_create_fail1"]." ".$INDEX_DIRECTORY."blocks.dat<br /><br />";
		} else {
			$fp=fopen($INDEX_DIRECTORY."blocks.dat", "wb");
			if ($fp) {
				fwrite($fp, $mstring);
				fclose($fp);
				$logline=AddToLog("blocks.dat updated");
				check_in($logline, "blocks.dat", $INDEX_DIRECTORY);
				if (($proceed=="export") || ($proceed=="exportovr")) print $pgv_lang["um_file_create_succ1"]." blocks.dat<br /><br />";
			} else
				print $pgv_lang["um_file_create_fail2"]." ".$INDEX_DIRECTORY."blocks.dat. ".$pgv_lang["um_file_create_fail3"]."<br /><br />";
		}
	} else {
		if ($proceed=="export" || $proceed=="exportovr") print $pgv_lang["um_noblocks"]." ".$pgv_lang["um_file_not_created"]."<br /><br />";
	}
}
?>

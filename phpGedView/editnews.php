<?php
/**
 * Popup window for Editing news items
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2022  PGV Development Team
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
 * @package PhpGedView
 */

define('PGV_SCRIPT_NAME', 'editnews.php');
require './config.php';

$useFCK = file_exists(PGV_ROOT.'modules/FCKeditor/fckeditor.php');
if($useFCK){
	require PGV_ROOT.'modules/FCKeditor/fckeditor.php';
}

if (!PGV_USER_ID) {
	print_header($pgv_lang["edit_news"], false);
	print $pgv_lang["access_denied"];
	print_simple_footer();
	exit;
}

$action  =safe_GET('action', array('compose', 'save', 'delete'), 'compose');
$news_id =safe_GET('news_id');
$username=safe_REQUEST($_REQUEST, 'username');
$date    =safe_POST('date', PGV_REGEX_UNSAFE);
$title   =safe_POST('title', PGV_REGEX_UNSAFE);
$text    =safe_POST('text', PGV_REGEX_UNSAFE);

print_header($pgv_lang["edit_news"], false);

if (empty($username)) $username=$GEDCOM;

if ($action=="compose") {
	print '<span class="subheaders">'.$pgv_lang["edit_news"].'</span>';
	?>
	<script language="JavaScript" type="text/javascript">
		function checkForm(frm) {
			if (frm.title.value=="") {
				alert('<?php print $pgv_lang["enter_title"]; ?>');
				document.messageform.title.focus();
				return false;
			}
			<?php if (! $useFCK) { //will be empty for FCK. FIXME, use FCK API to check for content.
			?>
			if (frm.text.value=="") {
				alert('<?php print $pgv_lang["enter_text"]; ?>');
				document.messageform.text.focus();
				return false;
			}
			<?php } ?>
			return true;
		}
	</script>
	<?php
	print "<br /><form name=\"messageform\" method=\"post\" action=\"editnews.php?action=save&news_id=".$news_id."\" onsubmit=\"return checkForm(this);";
	print "\">\n";
	if ($news_id) {
		$news = getNewsItem($news_id);
	} else {
		$news = array();
		$news["username"] = $username;
		$news["date"] = client_time();
		$news["title"] = "";
		$news["text"] = "";
	}
	print "<input type=\"hidden\" name=\"username\" value=\"".$news["username"]."\" />\n";
	print "<input type=\"hidden\" name=\"date\" value=\"".$news["date"]."\" />\n";
	print "<table>\n";
	print "<tr><td align=\"right\">".$pgv_lang["title"]."</td><td><input type=\"text\" name=\"title\" size=\"50\" value=\"".$news["title"]."\" /><br /></td></tr>\n";
	print "<tr><td valign=\"top\" align=\"right\">".$pgv_lang["article_text"]."<br /></td>";
	print "<td>";
	if ($useFCK) { // use FCKeditor module
		$trans = get_html_translation_table(HTML_SPECIALCHARS);
		$trans = array_flip($trans);
		$news["text"] = strtr($news["text"], $trans);
		$news["text"] = nl2br($news["text"]);

		$oFCKeditor = new FCKeditor('text') ;
		$oFCKeditor->BasePath =  './modules/FCKeditor/';
		$oFCKeditor->Value = $news["text"];
		$oFCKeditor->Width = 700;
		$oFCKeditor->Height = 250;
		$oFCKeditor->Config['AutoDetectLanguage'] = false ;
		$oFCKeditor->Config['DefaultLanguage'] = $language_settings[$LANGUAGE]["lang_short_cut"];
		$oFCKeditor->Create() ;
	} else { //use standard textarea
		print "<textarea name=\"text\" cols=\"80\" rows=\"10\">".$news["text"]."</textarea>";
	}
	print "<br /></td></tr>\n";
	print "<tr><td></td><td><input type=\"submit\" value=\"".$pgv_lang["save"]."\" /></td></tr>\n";
	print "</table>\n";
	print "</form>\n";
} else if ($action=="save") {
	$date=time()-$_SESSION["timediff"];
	if (empty($title)) $title="No Title";
	if (empty($text)) $text="No Text";
	$message = array();
	if ($news_id) {
		$message["id"]=$news_id;
	}
	$message["username"] = $username;
	if ($username==$GEDCOM) $_SESSION['clearcache'] = true;
	$message["date"]=$date;
	$message["title"] = $title;
	$message["text"] = $text;
	if (addNews($message)) {
		print $pgv_lang["news_saved"];
	}
} else if ($action=="delete") {
	if (deleteNews($news_id)) print $pgv_lang["news_deleted"];
}
print "<center><br /><br /><a href=\"javascript:;\" onclick=\"if (window.opener.refreshpage) window.opener.refreshpage(); window.close();\">".$pgv_lang["close_window"]."</a><br /></center>";

print_simple_footer();
?>

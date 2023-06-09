<?php
/**
 * Display a diff between two language files to help in translating.
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
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'editlang.php');
require './config.php';

if (!PGV_USER_IS_ADMIN) {
	header('Location: login.php?url=editlang.php');
	exit;
}

loadLangFile('pgv_confighelp');

require PGV_ROOT.'includes/functions/functions_editlang.php';

// Define the list of language files that can be Exported to a printable file
$exportList = array(
	'exportHelp'		=> 'help_text',
	'exportLang'		=> 'lang',
	'exportFacts'		=> 'facts',
	'exportConfig'		=> 'configure_help',
	'exportAdmin'		=> 'admin',
	'exportEditor'		=> 'editor',
	'exportCountries'	=> 'countries',
	'exportExtra'		=> 'extra'
);

$action				= safe_GET('action');
$file_type			= safe_GET('file_type');
$language1			= safe_GET('language1', array_keys($language_settings), 'english');
$language2			= safe_GET('language2', array_keys($language_settings), $LANGUAGE);
$hide_translated	= safe_GET_bool('hide_translated');
$execute			= safe_GET_bool('execute');

// Determine which Exportable language files have been selected
foreach ($exportList as $key => $file) {
	$$key = safe_GET_bool($key);
}

$lang_shortcut = $language_settings[$language2]["lang_short_cut"];

switch ($action) {
case 'edit':
	print_header($pgv_lang['edit_lang_utility']);
	break;
case 'export':
	print_header($pgv_lang['export_lang_utility']);
	break;
case 'compare':
	print_header($pgv_lang['compare_lang_utility']);
	break;
default:
	print_header($pgv_lang['edit_langdiff']);
	break;
}
if ($execute && $action=='debug') {
	$_SESSION['DEBUG_LANG']=safe_GET_bool('DEBUG_LANG');
}
if (!isset($_SESSION['DEBUG_LANG'])) {
	$_SESSION['DEBUG_LANG']=false;
}

$QUERY_STRING = str_replace(array("&amp;", "&&"), "&", $QUERY_STRING);
if (strpos($QUERY_STRING, "&dv=")) {
	$QUERY_STRING = substr($QUERY_STRING, 0, strpos($QUERY_STRING, "&dv="));
}

echo PGV_JS_START;
echo "var helpWin;";
echo "function helpPopup00(which) {";
echo "if ((!helpWin)||(helpWin.closed)) {helpWin = window.open('editlang_edit.php?' + which, '_blank' , 'left=50, top=30, width=600, height=500, resizable=1, scrollbars=1'); helpWin.focus();}";
echo "else helpWin.location = 'editlang_edit.php?' + which;";
echo "return false;";
echo "}";
echo "function showchanges(which2) {";
echo "window.location = '", PGV_SCRIPT_NAME, "?$QUERY_STRING'+which2;";
echo "}";
echo PGV_JS_END;

echo "<div class=\"center\">";

// Sort the Language table into localized language name order
foreach ($pgv_language as $key=>$value) {
	$d_LangName = "lang_name_".$key;
	$Sorted_Langs[$key] = $pgv_lang[$d_LangName];
}
asort($Sorted_Langs);

/* Language File Edit Mask */

switch ($action) {
case "bom" :
	echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\" style=\"width:70%; \">";
	echo "<tr><td class=\"facts_label03\" colspan=\"2\">";
	echo $pgv_lang["bom_check"];
	echo "</td></tr>";
	echo "<tr><td class=\"facts_value center\">";
	check_bom();
	echo "</td></tr>";
	echo  "<tr><td class=\"facts_value center\"><a href=\"editlang.php\"><b>";
	echo $pgv_lang["lang_back"];
	echo "</b></a></td></tr></table>";
	break;
case "edit" :
	echo "<form name=\"choose_form\" method=\"get\" action=\"", PGV_SCRIPT_NAME, "\">";
	echo "<input type=\"hidden\" name=\"action\" value=\"edit\" />";
	echo "<input type=\"hidden\" name=\"execute\" value=\"true\" />";
	echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\" style=\"width:70%; \">";
	echo "<tr><td class=\"facts_label03\" colspan=\"4\">";
	echo $pgv_lang["edit_lang_utility"];
	echo "</td></tr>";
	echo "<tr>";
	echo "<td class=\"facts_value\">";
	echo $pgv_lang["language_to_edit"];
	echo ":";
	print_help_link("language_to_edit_help", "qm");
	echo "<br />";
	echo "<select name=\"language2\">";
	foreach ($Sorted_Langs as $key=>$value) {
		echo "<option value=\"", $key, "\"";
		if ($key == $language2) {
			echo " selected=\"selected\"";
		}
		echo ">", $pgv_lang["lang_name_".$key], "</option>";
	}
	echo "</select>";
	echo "</td>";
	echo "<td class=\"facts_value\">", $pgv_lang["file_to_edit"], ":";
	print_help_link("file_to_edit_help", "qm");
	echo "<br />";
	echo "<select name=\"file_type\">";

	echo "<option value=\"admin\"";
	if ($file_type == "admin") {
		echo " selected=\"selected\"";
	}
	echo ">admin.xx.php</option>";

	echo "<option value=\"configure_help\"";
	if ($file_type == "configure_help") {
		echo " selected=\"selected\"";
	}
	echo ">configure_help.xx.php</option>";

	echo "<option value=\"countries\"";
	if ($file_type == "countries") {
		echo " selected=\"selected\"";
	}
	echo ">countries.xx.php</option>";

	echo "<option value=\"editor\"";
	if ($file_type == "editor") {
		echo " selected=\"selected\"";
	}
	echo ">editor.xx.php</option>";

	echo "<option value=\"extra\"";
	if ($file_type == "extra") {
		echo " selected=\"selected\"";
	}
	echo ">extra.xx.php</option>";

	echo "<option value=\"facts\"";
	if ($file_type == "facts") {
		echo " selected=\"selected\"";
	}
	echo ">facts.xx.php</option>";

	echo "<option value=\"faqlist\"";
	if ($file_type == "faqlist") {
		echo " selected=\"selected\"";
	}
	echo ">faqlist.xx.php</option>";

	echo "<option value=\"help_text\"";
	if ($file_type == "help_text") {
		echo " selected=\"selected\"";
	}
	echo ">help_text.xx.php</option>";

	echo "<option value=\"lang\"";
	if ($file_type == "lang") {
		echo " selected=\"selected\"";
	}
	echo ">", "lang.xx.php</option>";

	echo "</select>";
	echo "</td>";

	echo "<td class=\"facts_value\">";
	echo $pgv_lang["hide_translated"];
	echo ":";
	print_help_link("hide_translated_help", "qm");
	echo "<br />";
	echo "<select name=\"hide_translated\">";
	echo "<option";
	if (!$hide_translated) {
		echo " selected=\"selected\"";
	}
	echo " value=\"";
	echo "0";
	echo "\">";
	echo $pgv_lang["no"];
	echo "</option>";
	echo "<option";
	if ($hide_translated) {
		echo " selected=\"selected\"";
	}
	echo " value=\"";
	echo "1";
	echo "\">";
	echo $pgv_lang["yes"];
	echo "</option>";
	echo "</select>";
	echo "</td>";
	echo "<td class=\"facts_value\" style=\"text-align: center; \">";
	echo "<input type=\"submit\" value=\"", $pgv_lang["edit"], "\" />";
	echo "</td>";
	echo "</tr>";
	echo  "<tr><td class=\"facts_value center\" colspan=\"4\"><a href=\"editlang.php\"><b>";
	echo $pgv_lang["lang_back"];
	echo "</b></a></td></tr>";
	echo "</table>";
	echo "</form>";
	if ($execute) {
		switch ($file_type) {
		case "facts":
			$whichFile = $factsfile;
			$whichVars = '$factarray[';
			break;
		case "configure_help":
			$whichFile = $confighelpfile;
			$whichVars = '$pgv_lang[';
			break;
		case "help_text":
			$whichFile = $helptextfile;
			$whichVars = '$pgv_lang[';
			break;
		case "admin":
			$whichFile = $adminfile;
			$whichVars = '$pgv_lang[';
			break;
		case "editor":
			$whichFile = $editorfile;
			$whichVars = '$pgv_lang[';
			break;
		case "countries":
			$whichFile = $countryfile;
			$whichVars = '$countries[';
			break;
		case "faqlist":
			$whichFile = $faqlistfile;
			$whichVars = '$faqlist[';
			break;
		case "extra":
			$whichFile = $extrafile;
			$whichVars = array('$pgv_lang[', '$factarray[', '$countries[', '$faqlist[');
			break;
		case "lang":
		default:
			$whichFile = $pgv_language;
			$whichVars = '$pgv_lang[';
			break;
		}
		// read the english language file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($whichFile["english"], $whichVars);
		// read the chosen language file into array
		$new_language_array = array();
		$new_language_array = read_complete_file_into_array($whichFile[$language2], $whichVars);

		echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\" style=\"width:70%; \">";
		echo "<tr><td class=\"facts_value center\" colspan=\"2\"><span class=\"subheaders\">", $pgv_lang["listing"], ":&nbsp;&nbsp;&nbsp;";
		echo $whichFile["english"], "&nbsp;&nbsp;&nbsp;", $pgv_lang["and"], "&nbsp;&nbsp;&nbsp;", $whichFile[$language2];
		echo "</span><br /><br />";
		echo "<span class=\"subheaders\">", $pgv_lang["contents"], ":</span></td></tr>";

		$lang1 = $language_settings[strtolower($language1)]['lang_short_cut'];
		$lang2 = $language_settings[strtolower($language2)]['lang_short_cut'];

		$lastfound = (-1);
		for ($ls01 = 0, $lsmax = sizeof($english_language_array); $ls01 < $lsmax; $ls01++) {
			if (isset($english_language_array[$ls01][1])) {
				$dummy_output = "";
				$dummy_output .= "<tr>";
				$dummy_output .= "<td class=\"facts_label\" rowspan=\"2\" dir=\"ltr\">";
				$dummy_output .= $english_language_array[$ls01][0];
				$dummy_output .= "</td>";
				$dummy_output .= "<td class=\"facts_value wrap\">";
				$dummy_output .= "<a name=\"a1_".$ls01."\"></a>";
				$untranslatedText = mask_all($english_language_array[$ls01][1]);

				if ($untranslatedText == "") {
					$dummy_output .= "<strong style=\"color: #FF0000\">".str_replace("#LANGUAGE_FILE#", $pgv_language[$language1], $pgv_lang["message_empty_warning"])."</strong>";
				} else {
					$dummy_output .= "<i><span id=\"untr_{$ls01}\">".$untranslatedText."</span></i>";
				}
				$dummy_output .= "</td>";
				$dummy_output .= "</tr>";
				$dummy_output_02 = "";
				$dummy_output_02 .= "<tr>";
				$dummy_output_02 .= "<td class=\"facts_value wrap\">";

				$found = false;
				$englishTarget1 = $english_language_array[$ls01][0];
				$englishTarget2 = str_replace('"', "'", $englishTarget1);		// Var name could be enclosed in apostrophes
				$englishTarget3 = str_replace("'", '"', $englishTarget1);		// Var name could be enclosed in apostrophes
				for ($y = 0, $ymax = sizeof($new_language_array); $y < $ymax; $y++) {
					if (isset($new_language_array[$y][1])) {
						if ($new_language_array[$y][0] == $englishTarget1 || $new_language_array[$y][0] == $englishTarget2 || $new_language_array[$y][0] == $englishTarget3) {
							$dDummy =  $new_language_array[$y][1];
							$dummy_output_02 .= "<a href=\"javascript:;\" onclick=\"return helpPopup00('".encode_url("ls01={$ls01}&ls02={$y}&language2={$language2}&file_type={$file_type}&".session_name()."=".session_id()."&anchor=a1_{$ls01}")."');\">";
							$translatedText = mask_all($dDummy);
							$dummy_output_02 .= $translatedText;
							if ($translatedText == "") {
								$dummy_output_02 .= "<strong style=\"color: #FF0000\">".str_replace("#LANGUAGE_FILE#", $pgv_language[$language2], $pgv_lang["message_empty_warning"])."</strong>";
							}
							$dummy_output_02 .= "</a>";
							$found = true;
							break;
						}
					}
				}

				// If we don't want to see translated rows and this row is not translated yet
				// or we want to see all translated and untranslated rows
				if ($hide_translated && !$found || !$hide_translated) {
					echo $dummy_output;
					echo $dummy_output_02;
					if (!$found) {
						$translatedDiv = "tr_{$ls01}";
						$untranslatedPanel = "{$translatedDiv}_pre";
						$translatedPanel = "{$translatedDiv}_post";
						$translatedText = mask_all($english_language_array[$ls01][1]);

						echo "<div style=\"display: inline;\" id=\"{$untranslatedPanel}\">";
//						print_help_link("google_translate_help", "qm");
//						echo "<a href=\"javascript:;\" onclick=\"translate('{$lang1}', '{$lang2}', {$ls01});\">{$pgv_lang["google_translate"]}</a> - ";
						echo "<a style=\"color: #FF0000\" href=\"javascript:;\" onclick=\"return helpPopup00('", encode_url("ls01={$ls01}&ls02=".(0 - intval($lastfound) - 1)."&language2={$language2}&file_type={$file_type}&".session_name()."=".session_id()."&anchor=a1_{$ls01}"), "');\">";
						echo "<i>";
						if ($translatedText == "") {
							echo "&nbsp;";
						} else {
							echo $translatedText;
						}
						echo "</i></a>";
						echo "</div>";

					}
					echo "</td>";
					echo "</tr>";
				}
			}
		}
		echo "</table>";
	}
	break;
case "debug" :
	echo "<form name=\"debug_form\" method=\"get\" action=\"editlang.php\">";
	echo "<input type=\"hidden\" name=\"action\" value=\"debug\" />";
	echo "<input type=\"hidden\" name=\"execute\" value=\"true\" />";
	echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\" style=\"width:70%; \">";
	echo "<tr><td class=\"facts_label03\" colspan=\"3\">";
	echo $pgv_lang["lang_debug"];
	echo "</td></tr>";
	echo "<tr>";
	echo "<td class=\"facts_value\" >";
	echo "<input type=\"checkbox\" name=\"DEBUG_LANG\" value=\"yes\" ";
	if ($_SESSION['DEBUG_LANG']) {
		echo 'checked="checked"';
	}
	echo " />";
	echo $pgv_lang["lang_debug_use"], "&nbsp;&nbsp;</td>";
	echo "<td class=\"facts_value\" align=\"center\" ><input type=\"submit\" value=\"", $pgv_lang["save"], "\" />";
	echo "</td>";
	echo "</tr>";
	echo  "<tr><td class=\"facts_value center\" colspan=\"4\"><a href=\"editlang.php\"><b>";
	echo $pgv_lang["lang_back"];
	echo "</b></a></td></tr>";
	echo "</table>";
	echo "</form>";
	break;
case "export" :
	echo "<form name=\"export_form\" method=\"get\" action=\"", PGV_SCRIPT_NAME, "\">";
	echo "<input type=\"hidden\" name=\"action\" value=\"export\" />";
	echo "<input type=\"hidden\" name=\"execute\" value=\"true\" />";
	echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\" style=\"width:70%; \">";
	echo "<tr><td class=\"facts_label03\" colspan=\"3\">";
	echo $pgv_lang["export_lang_utility"];
	echo "</td></tr>";
	echo "<tr>";
	echo "<td class=\"facts_value\">";
	echo $pgv_lang["language_to_export"];
	echo ":";
	print_help_link("language_to_export_help", "qm");
	echo "<br />";
	echo "<select name=\"language2\">";
	foreach ($Sorted_Langs as $key=>$value) {
		echo "<option value=\"", $key, "\"";
		if ($key == $language2) {
			echo " selected=\"selected\"";
		}
		echo ">", $pgv_lang["lang_name_".$key], "</option>";
	}
	echo "</select>";
	echo "</td>";

	echo "<td class=\"facts_value\">";

	// Build the list of check boxes
	foreach ($exportList as $key => $file) {
		echo "<input type='checkbox' name='{$key}' value='true'"; 
		if ($$key) echo " checked='checked'";
		echo " />&nbsp;&nbsp;<b>{$file}</b><br/>";
	}

	echo "</td>";

	echo "<td class='facts_value' style='text-align: center; '>";
	echo "<input type='submit' value='{$pgv_lang['export']}' />";
	echo "</td></tr>";
	echo "<tr><td class='facts_value center' colspan='4'><a href='editlang.php'><b>{$pgv_lang["lang_back"]}</b></a>";
	if (!$execute) {
		echo "</td></tr></table></form>";
	} else {
		// Don't finish the table just yet
		// If we have any files selected, export them individually.
		foreach ($exportList as $key => $file) {
			if (!$$key) continue;		// This one was not selected: skip to the next one in the list
			
			$outputFile = "./index/{$file}.{$lang_short_cut[$language2]}.html";
			$inputFile = "./languages/{$file}.{$lang_short_cut[$language2]}.php";

			set_time_limit(300);
			
			if (!file_exists($inputFile)) {
				echo "<br /><br /><b>{$inputFile}&nbsp;&nbsp;{$pgv_lang['does_not_exist']}</b><br />";
				continue;		// Don't bother if the input file is missing
			}

			$textArray = array();
			// Get each language variable in the current file
			//		$textArray[nn][0]: input line number
			//		$textArray[nn][1]: variable name, e.g., $pgv_lang["abc"]
			//		$textArray[nn][2]: variable's value
			//		
			$textArray = read_export_file_into_array($inputFile, array('pgv_lang[', 'factarray[', 'factAbbrev[', 'countries[', 'altCountryNames['));
			if (empty($textArray)) continue;		// Don't bother if the input file is missing or couldn't be read			
			
			$fp = @fopen($outputFile, "w");
			if (!$fp) continue;				// Don't bother if the output file couldn't be opened

			fwrite($fp, "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>");
			fwrite($fp, "<html xmlns='http://www.w3.org/1999/xhtml'>");
			fwrite($fp, "<head><title>PGV {$language2}</title>");
			fwrite($fp, "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />");
			fwrite($fp, "<style type='text/css'>");
			fwrite($fp, ".helpstart {font-family: Arial, sans-serif;color: Blue;font-size: 14px;font-weight : bold;text-decoration : none;}");
			fwrite($fp, ".helptext {font-family: Arial, sans-serif;color: black;font-size: 12px;}");
			fwrite($fp, ".helpstart0 {font-family: Arial, sans-serif;font-size: 16px;font-weight: bold;}");
			fwrite($fp, ".helpstart1 {font-family: Arial, sans-serif;font-size: 14px;font-weight: bold;}");
			fwrite($fp, ".helpstart2 {font-family: Arial, sans-serif;font-size: 12px;font-weight: bold;}");
			fwrite($fp, "</style>");
			fwrite($fp, "</head><body>");
			
			fwrite($fp, "<center><h2>{$inputFile}</h2></center><br /><br />");		// Can't use class='center' here -- no CSS
        	
			$new_language_array = array();
			$new_language_array_counter = 0;

			fwrite($fp, "<ul>");		// bulleted list looks better than numbered list, and is less confusing

			// Temporarily switch languages to match the language selected for Export
			//   so that function print_text will substitute text in the correct language
			require PGV_ROOT.'includes/help_text_vars.php';		// These apply to ALL languages, and may not be present
			$savedLanguage = $LANGUAGE;
			if ($savedLanguage != $language2) {		// Only necessary when languages differ
				$LANGUAGE = $language2;
				loadLangFile("pgv_lang, pgv_admin, pgv_editor, pgv_facts, pgv_help, pgv_confighelp");
			}
        	
			foreach ($textArray as $textItem) {
				$text = print_text($textItem[2], 0, 2);
				$text = str_replace(array('\$', '\"', "\\'"), array('$', '"', "'"), $text);	// Make sure these are what was intended in the text
				
				fwrite($fp, "<li>{$textItem[0]}:&nbsp;&nbsp;{$textItem[1]}<br />");
				fwrite($fp, "{$text}</li><br /><br />");
			}
        	
			// Restore language to original setting -- we're done
			if ($savedLanguage != $language2) {		// Only necessary when languages differ
				$LANGUAGE = $savedLanguage;
				loadLangFile("pgv_lang, pgv_admin, pgv_editor, pgv_facts, pgv_help, pgv_confighelp");
			}
        	
			fwrite($fp, "</ul>");
			fwrite($fp, "</body></html>");
			fclose($fp);
			echo "<br /><br /><b>{$pgv_lang['export_ok']}</b><br />";
			echo "{$pgv_lang['export_filename']}&nbsp;&nbsp;<a href='{$outputFile}' target='_blank'><b>{$outputFile}</b></a>";
		}
		echo "</td></tr></table></form>";
	}
	break;
case "compare" :
	echo "<form name=\"langdiff_form\" method=\"get\" action=\"", PGV_SCRIPT_NAME, "\">";
	echo "<input type=\"hidden\" name=\"action\" value=\"compare\" />";
	echo "<input type=\"hidden\" name=\"execute\" value=\"true\" />";
	echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\" style=\"width:70%; \">";
	echo "<tr><td class=\"facts_label03\" colspan=\"3\">";
	echo $pgv_lang["compare_lang_utility"];
	echo "</td></tr>";
	echo "<tr>";
	echo "<td class=\"facts_value\">";
	echo $pgv_lang["new_language"];
	echo ":";
	print_help_link("new_language_help", "qm");
	echo "<br />";
	echo "<select name=\"language1\">";
	foreach ($Sorted_Langs as $key=>$value) {
		echo "<option value=\"", $key, "\"";
		if ($key == $language1) {
			echo " selected=\"selected\"";
		}
		echo ">", $pgv_lang["lang_name_".$key], "</option>";
	}
	echo "</select>";
	echo "</td>";
	echo "<td class=\"facts_value\">";
	echo $pgv_lang["old_language"];
	echo ":";
	print_help_link("old_language_help", "qm");
	echo "<br />";
	echo "<select name=\"language2\">";
	foreach ($Sorted_Langs as $key=>$value) {
		echo "<option value=\"", $key, "\"";
		if ($key == $language2) {
			echo " selected=\"selected\"";
		}
		echo ">", $pgv_lang["lang_name_".$key], "</option>";
	}
	echo "</select>";
	echo "</td>";

	echo "<td class=\"facts_value\" style=\"text-align: center; \">";
	echo "<input type=\"submit\" value=\"", $pgv_lang["compare"], "\" />";
	echo "</td>";
	echo "</tr>";
	echo  "<tr><td class=\"facts_value center\" colspan=\"4\"><a href=\"editlang.php\"><b>";
	echo $pgv_lang["lang_back"];
	echo "</b></a></td></tr>";
	echo "</table>";
	echo "</form>";
	if ($execute) {
		foreach(array("admin", "configure_help", "countries", "editor", "extra", "facts", "faqlist", "help_text", "lang") as $file_type) {
			switch ($file_type) {
			case "facts":
				$whichFile = $factsfile;
				$whichVars = "factarray[";
				break;
			case "configure_help":
				$whichFile = $confighelpfile;
				$whichVars = "pgv_lang[";
				break;
			case "help_text":
				$whichFile = $helptextfile;
				$whichVars = "pgv_lang[";
				break;
			case "admin":
				$whichFile = $adminfile;
				$whichVars = "pgv_lang[";
				break;
			case "editor":
				$whichFile = $editorfile;
				$whichVars = "pgv_lang[";
				break;
			case "countries":
				$whichFile = $countryfile;
				$whichVars = "countries[";
				break;
			case "faqlist":
				$whichFile = $faqlistfile;
				$whichVars = "faqlist[";
				break;
			case "extra":
				$whichFile = $extrafile;
				$whichVars = array("pgv_lang[", "factarray[", "countries[", "faqlist[");
				break;
			case "lang":
			default:
				$whichFile = $pgv_language;
				$whichVars = "pgv_lang[";
				break;
			}

			// -------------- Compare the current file type -----------------------
			if (file_exists($whichFile[$language1]) || file_exists($whichFile[$language2])) {
				$list = array();
				if (file_exists($whichFile[$language1])) {
					// Get each language variable in the current file
					//		$list[nn][0]: input line number
					//		$list[nn][1]: variable name, e.g., $pgv_lang["abc"]
					//		$list[nn][2]: variable's value
					//		
					$list = read_export_file_into_array($whichFile[$language1], $whichVars);
				}
				$list1 = array();
				foreach ($list as $key=>$item) {
					$list1[$item[1]] = $item[2];
				}
				$list = array();
				if (file_exists($whichFile[$language2])) {
					// As above
					$list = read_export_file_into_array($whichFile[$language2], $whichVars);
				}
				$list2 = array();
				foreach ($list as $key=>$item) {
					$list2[$item[1]] = $item[2];
				}
				unset($list);

				echo "<br /><span class=\"subheaders\">", $pgv_lang["comparing"], "<br />", $whichFile[$language1], "&nbsp;&nbsp;&nbsp;&lt;---&gt;&nbsp;&nbsp;&nbsp;", $whichFile[$language2], "</span><br /><br />";
				// ---- Look for additions
				//      These are entries that exist in the first but don't exist in the second file
				echo "<span class=\"subheaders\">", $pgv_lang["additions"], ":</span>";
				echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\">";
				$count=0;
				foreach($list1 as $key=>$value) {
					$key2 = str_replace('"', "'", $key);		// Var name could be enclosed in apostrophes
					$key3 = str_replace("'", '"', $key);		// Var name could be enclosed in apostrophes
					if (!array_key_exists($key, $list2) && !array_key_exists($key2, $list2) & !array_key_exists($key3, $list2)) {
						echo "<tr><td class=\"facts_label\">", $key, "</td>";
						echo "<td class=\"facts_value\">", mask_all($value), "</td></tr>";
						$count++;
					}
				}
				if ($count==0) {
					echo "<tr><td colspan=\"2\" class=\"facts_value\">", $pgv_lang["no_additions"], "</td></tr>";
				}
				echo "</table><br /><br />";
				// ---- Look for subtractions
				//      These are entries that exist in the second but don't exist in the first file
				echo "<span class=\"subheaders\">", $pgv_lang["subtractions"], ":</span>";
				echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\">";
				$count=0;
				foreach($list2 as $key=>$value) {
					$key2 = str_replace('"', "'", $key);		// Var name could be enclosed in apostrophes
					$key3 = str_replace("'", '"', $key);		// Var name could be enclosed in apostrophes
					if (!array_key_exists($key, $list1) && !array_key_exists($key2, $list1) && !array_key_exists($key3, $list1)) {
						echo "<tr><td class=\"facts_label\">", $key, "</td>";
						echo "<td class=\"facts_value\">", mask_all($value), "</td></tr>";
						$count++;
					}
				}
				if ($count==0) {
					echo "<tr><td colspan=\"2\" class=\"facts_value\">", $pgv_lang["no_subtractions"], "</td></tr>";
				}
				echo "</table><br /><br />";

				echo "<img src=\"", $PGV_IMAGE_DIR, "/", $PGV_IMAGES["hline"]["other"], "\" width=\"100%\" height=\"6\" alt=\"\" /><br />";
			}
		}
	}
	break;
default:
	?>
	<br />
	<table class="facts_table <?php echo $TEXT_DIRECTION ?>" >
	<tr>
		<td class="facts_label03" colspan="2">
			<?php echo $pgv_lang["edit_langdiff"]; ?>
		</td>
	</tr>
	<tr>
		<td class="facts_value width50"><?php
			print_help_link("bom_check_help", "qm");
			echo "<a href=\"editlang.php?action=bom\">", $pgv_lang["bom_check"], "</a>";
			?></td>
				<td class="facts_value width50"><?php
			print_help_link("edit_lang_utility_help", "qm");
					echo "<a href=\"editlang.php?action=edit\">", $pgv_lang["edit_lang_utility"], "</a>";
			?></td>
		</tr>
		<tr>
			<td class="facts_value width50"><?php
				print_help_link("lang_debug_help", "qm");
					echo "<a href=\"editlang.php?action=debug\">", $pgv_lang["lang_debug"], "</a>";
			?></td>
			<td class="facts_value width50"><?php
			print_help_link("export_lang_utility_help", "qm");
				echo "<a href=\"editlang.php?action=export\">", $pgv_lang["export_lang_utility"], "</a>";
		?></td>
	</tr>
	<tr>
		<td class="facts_value width50">
		</td>
		<td class="facts_value width50">
			<?php
				print_help_link("compare_lang_utility_help", "qm");
				echo "<a href=\"editlang.php?action=compare\">", $pgv_lang["compare_lang_utility"], "</a>";
			?>
		</td>
	</tr>
	<tr>
		<td class="facts_value" colspan="2">
		<div class="center">
		<a href="admin.php"><b><?php echo $pgv_lang["lang_back_admin"]; ?></b></a>
	</div>
	</td>
	</tr>
	</table>
	<br />
	<?php
}
?>
</div>
<?php

//-- load file for language settings
$Languages_Default = true;
if (file_exists($INDEX_DIRECTORY.'lang_settings.php')) {
	$DefaultSettings = $language_settings;    // Save default settings, so we can merge properly
	require $INDEX_DIRECTORY.'lang_settings.php';
	$ConfiguredSettings = $language_settings;  // Save configured settings, same reason
	$language_settings = array_merge($DefaultSettings, $ConfiguredSettings);  // Copy new langs into config
	// Now copy new language settings into existing configuration
	foreach ($DefaultSettings as $lang=>$settings) {
		foreach ($settings as $key=>$value) {
			if (!isset($language_settings[$lang][$key])) {
				$language_settings[$lang][$key] = $value;
			}
		}
	}
	unset($DefaultSettings);
	unset($ConfiguredSettings);    // We don't need these any more
	$Languages_Default = false;
}

/* Re-build the various language-related arrays
 *    Note:
 *    This code existed in both lang_settings_std.php and in lang_settings.php.
 *    It has been removed from both files and inserted here, where it belongs.
 */
$languages            =array();
$pgv_lang_use         =array();
$pgv_lang             =array();
$lang_short_cut       =array();
$lang_langcode        =array();
$pgv_language         =array();
$confighelpfile       =array();
$helptextfile         =array();
$flagsfile            =array();
$factsfile            =array();
$factsarray           =array();
$adminfile            =array();
$editorfile           =array();
$faqlistfile          =array();
$extrafile            =array();
$pgv_lang_name        =array();
$langcode             =array();
$ALPHABET_upper       =array();
$ALPHABET_lower       =array();
$MULTI_LETTER_ALPHABET=array();
$MULTI_LETTER_EQUIV   =array();
$DICTIONARY_SORT      =array();
$COLLATION            =array();
$DATE_FORMAT_array    =array();
$TIME_FORMAT_array    =array();
$WEEK_START_array     =array();
$TEXT_DIRECTION_array =array();
$NAME_REVERSE_array   =array();

foreach ($language_settings as $key=>$value) {
	if (!isset($value['pgv_lang_self']) || !isset($value['pgv_language']) || !file_exists($value['pgv_language'])) {
		continue;
	}
	$languages[$key]            =$value["pgv_langname"];
	$pgv_lang_use[$key]         =$value["pgv_lang_use"];
	$pgv_lang[$key]             =$value["pgv_lang_self"];
	$lang_short_cut[$key]       =$value["lang_short_cut"];
	$lang_langcode[$key]        =$value["langcode"];
	$pgv_language[$key]         =$value["pgv_language"];
	$confighelpfile[$key]       =$value["confighelpfile"];
	$helptextfile[$key]         =$value["helptextfile"];
	$flagsfile[$key]            =$value["flagsfile"];
	$factsfile[$key]            =$value["factsfile"];
	$adminfile[$key]            =$value["adminfile"];
	$editorfile[$key]           =$value["editorfile"];
	$faqlistfile[$key]          =$value["faqlistfile"];
	$extrafile[$key]            =$value["extrafile"];
	$ALPHABET_upper[$key]       =$value["ALPHABET_upper"];
	$ALPHABET_lower[$key]       =$value["ALPHABET_lower"];
	$MULTI_LETTER_ALPHABET[$key]=$value["MULTI_LETTER_ALPHABET"];
	$MULTI_LETTER_EQUIV[$key]   =$value["MULTI_LETTER_EQUIV"];
	$DICTIONARY_SORT[$key]      =$value["DICTIONARY_SORT"];
	$COLLATION[$key]            =$value["COLLATION"];
	$DATE_FORMAT_array[$key]    =$value["DATE_FORMAT"];
	$TIME_FORMAT_array[$key]    =$value["TIME_FORMAT"];
	$WEEK_START_array[$key]     =$value["WEEK_START"];
	$TEXT_DIRECTION_array[$key] =$value["TEXT_DIRECTION"];
	$NAME_REVERSE_array[$key]   =$value["NAME_REVERSE"];

	$pgv_lang["lang_name_$key"]  = $value["pgv_lang_self"];

	$dDummy = $value["langcode"];
	$ct = strpos($dDummy, ";");
	while ($ct > 1) {
		$shrtcut = substr($dDummy, 0, $ct);
		$dDummy = substr($dDummy, $ct+1);
		$langcode[$shrtcut]    = $key;
		$ct = strpos($dDummy, ";");
	}
}

loadLangFile("pgv_lang, pgv_editor");

print_footer();
?>

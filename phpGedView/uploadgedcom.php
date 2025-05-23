<?php
/**
 * Allow admin users to upload a new gedcom using a web interface.
 *
 * When importing a gedcom file, some of the gedcom structure is changed
 * so a new file is written during the import and then copied over the old
 * file.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2012  PGV Development Team.  All rights reserved.
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
 * This Page Is Valid XHTML 1.0 Transitional! > 12 September 2005
 *
 * @author PGV Development Team
 * @package PhpGedView
 * @subpackage Admin
 * @version $Id$
 */

// TODO: Progress bars don't show until </table> or </div>
// TODO: Upload ZIP support alternative path and name

// NOTE: $GEDFILENAME = The filename of the uploaded GEDCOM
// NOTE: $action = Which form we should present
// NOTE: $check = Which check to be performed
// NOTE: $timelimit = The time limit for the import process
// NOTE: $cleanup = If set to yes, the GEDCOM contains invalid tags
// NOTE: $no_upload = When the user cancelled, we want to restore the original settings
// NOTE: $path = The path to the GEDCOM file
// NOTE: $continue = When the user decided to move on to the next step
// NOTE: $import_existing = See if we are just importing an existing GEDCOM
// NOTE: $replace_gedcom = When uploading a GEDCOM, user will be asked to replace an existing one. If yes, overwrite
// NOTE: $bakfile = Name and path of the backupfile, this file is created if a file with the same name exists

define('PGV_SCRIPT_NAME', 'uploadgedcom.php');
require './config.php';
require_once PGV_ROOT.'includes/functions/functions_import.php';
require_once PGV_ROOT.'includes/functions/functions_export.php';

loadLangFile("pgv_confighelp");

if (!PGV_USER_GEDCOM_ADMIN) {
	header("Location: login.php?url=uploadgedcom.php");
	exit;
}

// editconfig_gedcom.php and uploadgedcom.php make extensive use of
// import_request_variables and are heavily inter-dependent.
## @import_request_variables('cgp');
/*	PHP version 5.4.0 has *removed* the import_request_variables() function, so we now have to use a
 *	"roll-your-own" implementation!  Also, the input forms only use the "get" and "post" methods, so
 *	we shouldn't look at the $_COOKIE array. */
import_req_variables('gp');

@ini_set('zlib.output_compression','0');

if (empty ($action)) $action = "upload_form";
if (!isset ($path)) $path = "";
if (!isset ($check)) $check = "";
if (!isset ($error)) $error = "";
if (!isset ($verify)) $verify = "";
if (!isset ($import)) $import = false;
if (!isset ($bakfile)) $bakfile = "";
if (!isset ($cleanup_needed)) $cleanup_needed = false;
if (!isset ($ok)) $ok = false;
if (!isset ($startimport)) $startimport = false;
if (!isset ($timelimit)) $timelimit = $TIME_LIMIT;
if (!isset ($importtime)) $importtime = 0;
if (!isset ($no_upload)) $no_upload = false;
if (!isset ($override)) $override = false;
if ($no_upload == "cancel_upload" || $override == "no") $check = "cancel_upload";
if (!isset ($exists)) $exists = false;
if (!isset ($config_gedcom)) $config_gedcom = "";
if (!isset ($continue)) $continue = false;
if (!isset ($import_existing)) $import_existing = false;
if (!isset($utf8convert)) $utf8convert = "no";
if (isset($_REQUEST['keepmedia']) && $_REQUEST['keepmedia']=='yes') $keepmedia=true;
else $keepmedia = false;

$path = decrypt($path);				// path needed to be encrypted to get past hack detection
$bakfile = decrypt($bakfile);		// bakfile needed to be encrypted to get past hack detection

// NOTE: GEDCOM was uploaded
if ($check == "upload") {
	$verify = "verify_gedcom";
	$ok = true;
}
// NOTE: GEDCOM was added
else if ($check == "add") {
	$verify = "verify_gedcom";
	$ok = true;
} else if ($check == "add_new") {
	if (((!file_exists($INDEX_DIRECTORY.$GEDFILENAME)) && !file_exists($path.$GEDFILENAME)) || $override == "yes") {
		if ($path != "") $fp = fopen($path.$GEDFILENAME, "wb");
		else $fp = fopen($INDEX_DIRECTORY.$GEDFILENAME, "wb");
		if ($fp) {
			$newgedcom = gedcom_header($GEDFILENAME).
			"0 @I1@ INDI\n".
			"1 NAME Given Names /Surname/\n".
			"1 SEX M\n".
			"1 BIRT\n".
			"2 DATE 01 JAN 1850\n".
			"2 PLAC Click edit and change me\n".
			"0 TRLR\n";
			$newgedcom = preg_replace('/[\r\n]+/', PGV_EOL, $newgedcom);
			fwrite($fp, $newgedcom);
			fclose($fp);
			$logline = AddToLog($GEDFILENAME." updated");
			check_in($logline, $GEDFILENAME, $INDEX_DIRECTORY);
			$verify = "validate_form";
			$exists = true;
			// NOTE: Go straight to import, no other settings needed
			$xreftype = "NA";
			$utf8convert = "no";
			$ged = $GEDFILENAME;
			$startimport = "true";
			//-- set the current GEDCOM to be this new GEDCOM file
			//-- so that the import can proceed correctly
			$GEDCOM = $GEDFILENAME;
			$FILE = $GEDCOM;
		}
	} else {
		if ($path != "")
		$fp = fopen($path.$GEDFILENAME.".bak", "wb");
		else
		$fp = fopen($INDEX_DIRECTORY.$GEDFILENAME.".bak", "wb");
		if ($fp) {
			$newgedcom = gedcom_header($GEDFILENAME).
			"0 @I1@ INDI\n".
			"1 NAME Given Names /Surname/\n".
			"1 SEX M\n".
			"1 BIRT\n".
			"2 DATE 01 JAN 1850\n".
			"2 PLAC Click edit and change me\n".
			"0 TRLR\n";
			$newgedcom = preg_replace('/[\r\n]+/', PGV_EOL, $newgedcom);
			fwrite($fp, $newgedcom);
			fclose($fp);
			if ($path != "")
			$bakfile = $path.$GEDFILENAME.".bak";
			else
			$bakfile = $INDEX_DIRECTORY.$GEDFILENAME.".bak";
			$ok = false;
			$verify = "verify_gedcom";
			$exists = true;
		}
	}
} else
if ($check == "cancel_upload") {
	if ($exists) {
		delete_gedcom(get_id_from_gedcom($GEDFILENAME));
		if ($action == "add_new_form")
		@ unlink($INDEX_DIRECTORY.$GEDFILENAME);
	}
	// NOTE: Cleanup everything no longer needed
	if (isset($bakfile) && file_exists($bakfile)) unlink($bakfile);
	$verify = "";
	unset($GEDFILENAME);
	$startimport = "";
	$import = false;
	$cleanup_needed = false;
	$noupload = true;
	header("Location: editgedcoms.php");
}

if ($cleanup_needed == "cleanup_needed" && $continue == $pgv_lang["del_proceed"]) {
	require_once PGV_ROOT.'includes/functions/functions_tools.php';

	$filechanged = false;
	if (file_is_writeable(get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path')) && (file_exists(get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path')))) {
		$l_BOMcleanup = false;
		$l_headcleanup = false;
		$l_macfilecleanup = false;
		$l_lineendingscleanup = false;
		$l_placecleanup = false;
		$l_datecleanup = false;
		$l_isansi = false;
		$fp = fopen(get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path'), "rb");
		$fw = fopen($INDEX_DIRECTORY."/".$GEDFILENAME.".bak", "wb");
		//-- read the gedcom and test it in 8KB chunks
		while (!feof($fp)) {
			$fcontents = fread($fp, 1024 * 8);
			$lineend = "\n";
			if (need_macfile_cleanup()) {
				$l_macfilecleanup = true;
				$lineend = "\r";
			}

			//-- read ahead until the next line break
			$byte = "";
			while ((!feof($fp)) && ($byte != $lineend)) {
				$byte = fread($fp, 1);
				$fcontents .= $byte;
			}

			if (!$l_BOMcleanup && need_BOM_cleanup()) {
				BOM_cleanup();
				$l_BOMcleanup = true;
			}

			if (!$l_headcleanup && need_head_cleanup()) {
				head_cleanup();
				$l_headcleanup = true;
			}

			if ($l_macfilecleanup) {
				macfile_cleanup();
			}

			if (isset ($_POST["cleanup_places"]) && $_POST["cleanup_places"] == "YES") {
//				if (($sample = need_place_cleanup()) !== false) {
//					$l_placecleanup = true;
					place_cleanup();
//				}
			}

			if (line_endings_cleanup()) {
				$filechanged = true;
			}

			if (isset ($_POST["datetype"])) {
				$filechanged = true;
				//month first
				date_cleanup($_POST["datetype"]);
			}
			/**
			if($_POST["xreftype"]!="NA") {
				$filechanged=true;
				xref_change($_POST["xreftype"]);
				}
				**/
			if (isset ($_POST["utf8convert"]) == "YES") {
				$filechanged = true;
				convert_ansi_utf8();
			}
			fwrite($fw, $fcontents);
		}
		fclose($fp);
		fclose($fw);
		copy($INDEX_DIRECTORY."/".$GEDFILENAME.".bak", get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path'));
		$cleanup_needed = false;
		$import = "true";
	} else {
		$error = str_replace("#GEDCOM#", $GEDFILENAME, $pgv_lang["error_header_write"]);
	}
}

// NOTE: Change header depending on action
if ($action == "upload_form") {
	print_header($pgv_lang["upload_gedcom"]);
} elseif ($action == "add_form") {
	print_header($pgv_lang["add_gedcom"]);
} elseif ($action == "add_new_form") {
	print_header($pgv_lang["add_new_gedcom"]);
} else {
	print_header($pgv_lang["ged_import"]);
}

// NOTE: Print form header
echo "<form enctype=\"multipart/form-data\" method=\"post\" name=\"configform\" action=\"uploadgedcom.php\">";

// NOTE: Print table header
echo "\n<table class=\"facts_table center ", $TEXT_DIRECTION, "\">";

// NOTE: Add GEDCOM form
if ($action == "add_form") {
	echo "<tr><td class=\"topbottombar ", $TEXT_DIRECTION, "\" colspan=\"2\">";
	echo "<a href=\"javascript: ";
	if ($import_existing) {
		echo $pgv_lang["ged_import"];
	} else {
		echo $pgv_lang["add_gedcom"];
	}
	echo "\" onclick=\"expand_layer('add-form');return false\"><img id=\"add-form_img\" src=\"", $PGV_IMAGE_DIR, "/";
	if ($startimport != "true") {
		echo $PGV_IMAGES["minus"]["other"];
	} else {
		echo $PGV_IMAGES["plus"]["other"];
	}
	echo "\" border=\"0\" width=\"11\" height=\"11\" alt=\"\" /></a>";
	print_help_link("add_gedcom_help", "qm", "add_gedcom");
	echo "&nbsp;<a href=\"javascript: ";
	if ($import_existing) {
		echo $pgv_lang["ged_import"];
	} else {
		echo $pgv_lang["add_gedcom"];
	}
	print "\" onclick=\"expand_layer('add-form');return false\">";
	if ($import_existing) {
		echo $pgv_lang["ged_import"];
	} else {
		echo $pgv_lang["add_gedcom"];
	}
	echo "</a>";
	echo "</td></tr>";
	echo "<tr><td class=\"optionbox\">";
	echo "<div id=\"add-form\" style=\"display: ";
	if ($startimport != "true") {
		echo "block ";
	} else {
		echo "none ";
	}
	echo "\">";
	?>
	<input type="hidden" name="check" value="add" />
	<input type="hidden" name="action" value="<?php echo $action; ?>" />
	<input type="hidden" name="import_existing" value="<?php echo $import_existing; ?>" />
	<table class="facts_table">
	<?php

	$i = 0;
	if (!empty ($error)) {
		echo "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
		echo "<span class=\"error\">", $error, "</span>\n";
		echo "</td></tr>";
	}
	?>
	<tr>
	<td class="descriptionbox width20 wrap">
	<?php print_help_link("gedcom_path_help", "qm","gedcom_path");?>
	<?php echo $pgv_lang["gedcom_file"]; ?></td>
	<td class="optionbox"><input type="text" name="GEDFILENAME" value="<?php if (isset($GEDFILENAME) && strlen($GEDFILENAME) > 4) echo get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path'); ?>"
					size="60" dir ="ltr" tabindex="<?php $i++; echo $i?>"	<?php if ((!$no_upload && isset($GEDFILENAME)) && (empty($error))) echo "disabled "; ?> />
	</td>
	</tr>
	</table>
	</div>
	</td></tr>
<?php
}
// NOTE: Upload GEDCOM form
elseif ($action == "upload_form") {
	echo "<tr><td class=\"topbottombar ", $TEXT_DIRECTION, "\" colspan=\"2\">";
	echo "<a href=\"javascript: ", $pgv_lang["upload_gedcom"], "\" onclick=\"expand_layer('upload_gedcom'); return false;\"><img id=\"upload_gedcom_img\" src=\"", $PGV_IMAGE_DIR, "/";
	if ($startimport != "true") {
		echo $PGV_IMAGES["minus"]["other"];
	} else {
		echo $PGV_IMAGES["plus"]["other"];
	}
	echo "\" border=\"0\" width=\"11\" height=\"11\" alt=\"\" /></a>";
	print_help_link("upload_gedcom_help", "qm", "upload_gedcom");
	echo "&nbsp;<a href=\"javascript: ", $pgv_lang["upload_gedcom"], "\" onclick=\"expand_layer('upload_gedcom');return false\">", $pgv_lang["upload_gedcom"], "</a>";
	echo "</td></tr>";
	echo "<tr><td class=\"optionbox wrap\">";
	echo "<div id=\"upload_gedcom\" style=\"display: ";
	if ($startimport != "true") {
		echo "block ";
	} else {
		echo "none ";
	}
	echo "\">";
?>
<input type="hidden" name="action" value="<?php echo $action; ?>" />
<input type="hidden" name="check" value="upload" />
<table class="facts_table">
<?php

if (!empty ($error)) {
	echo "<span class=\"error\">", $error, "</span><br />\n";
	print_text("common_upload_errors");
	echo "<br />\n";
}
?>
<tr>
<td class="descriptionbox width20 wrap">
<?php echo $pgv_lang["gedcom_file"];?></td>
<td class="optionbox" dir="ltr">
<?php

if (isset($GEDFILENAME)) {
	echo PrintReady($path.$GEDFILENAME);
} elseif (isset($UPFILE)) {
	echo PrintReady($UPFILE["name"]);
} else {
	echo "<input name=\"UPFILE\" type=\"file\" size=\"60\" />";
	if (!$filesize = ini_get('upload_max_filesize')) {
		$filesize = "2M";
	}
	echo " ( ", $pgv_lang["max_upload_size"], " $filesize )";
}
?>
</td>
</tr>
</table>
<?php

echo "</div>";
echo "</td></tr>";
}
// NOTE: Add new GEDCOM form
elseif ($action == "add_new_form") {
	echo "<tr><td class=\"topbottombar ", $TEXT_DIRECTION, "\" colspan=\"2\">";
	echo "<a href=\"javascript: ", $pgv_lang["add_new_gedcom"], "\" onclick=\"expand_layer('add_new_gedcom');return false\"><img id=\"add_new_gedcom_img\" src=\"", $PGV_IMAGE_DIR, "/";
	if ($startimport != "true") {
		echo $PGV_IMAGES["minus"]["other"];
	} else {
		echo $PGV_IMAGES["plus"]["other"];
	}
	echo "\" border=\"0\" width=\"11\" height=\"11\" alt=\"\" /></a>";
	print_help_link("add_gedcom_instructions", "qm", "add_new_gedcom");
	echo "&nbsp;<a href=\"javascript: ", $pgv_lang["add_new_gedcom"], "\" onclick=\"expand_layer('add_new_gedcom');return false\">", $pgv_lang["add_new_gedcom"], "</a>";
	echo "</td></tr>";
	echo "<tr><td class=\"optionbox\">";
	echo "<div id=\"add-form\" style=\"display: ";
	if ($startimport != "true") {
		echo "block ";
	} else {
		echo "none ";
	}
	echo "\">";
?>
<input type="hidden" name="action" value="<?php echo $action; ?>" />
<input type="hidden" name="check" value="add_new" />
<table class="facts_table">
<?php

if (!empty ($error)) {
	echo "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
	echo "<span class=\"error\">", $error, "</span>\n";
	echo "</td></tr>";
}
?>
<tr>
<td class="descriptionbox width20 wrap">
<?php echo $pgv_lang["gedcom_file"];?>
</td>
<td class="optionbox"><input name="GEDFILENAME" type="text" value="<?php if (isset($GEDFILENAME)) echo $path, $GEDFILENAME; ?>" size="60" <?php if (isset($GEDFILENAME) && !$no_upload) echo "disabled"; ?> /></td>
</tr>
</table>
<?php

echo "</div>";
echo "</td></tr>";
}

if ($verify == "verify_gedcom") {
	// NOTE: Check if GEDCOM has been imported into DB
	$all_record_counts=count_all_records(get_id_from_gedcom($GEDFILENAME));
	$totalRecords = 0;
	foreach ($all_record_counts as $recordCount) {
		$totalRecords += $recordCount;
	}
	$imported = !empty($totalRecords);
	if ($imported || (!empty($bakfile) && file_exists($bakfile))) {
		// NOTE: If GEDCOM exists show warning
		print "<tr><td class=\"topbottombar $TEXT_DIRECTION\" colspan=\"2\">";
		print "<a href=\"javascript: ".$pgv_lang["verify_gedcom"]."\" onclick=\"expand_layer('verify_gedcom');return false\"><img id=\"verify_gedcom_img\" src=\"".$PGV_IMAGE_DIR."/";
		if ($startimport != "true")
		print $PGV_IMAGES["minus"]["other"];
		else
		print $PGV_IMAGES["plus"]["other"];
		print "\" border=\"0\" width=\"11\" height=\"11\" alt=\"\" /></a>";
		print_help_link("verify_gedcom_help", "qm", "verify_gedcom");
		print "&nbsp;<a href=\"javascript: ".$pgv_lang["verify_gedcom"]."\" onclick=\"expand_layer('verify_gedcom');return false\">".$pgv_lang["verify_gedcom"]."</a>";
		print "</td></tr>";
		print "<tr><td class=\"optionbox\" colspan=\"2\">";
		print "<div id=\"verify_gedcom\" style=\"display: ";
		if ($startimport != "true")
		print "block ";
		else
		print "none ";
		print "\">";
		print "\n<table class=\"facts_table\">";
		print "<tr><td class=\"descriptionbox width20 wrap\" colspan=\"2\">";
		?>
		<input type="hidden" name="no_upload" value="" />
		<input type="hidden" name="check" value="" />
		<input type="hidden" name="verify" value="validate_form" />
		<input type="hidden" name="GEDFILENAME" value="<?php if (isset($GEDFILENAME)) print $GEDFILENAME; ?>" />
		<input type="hidden" name="bakfile" value="<?php if (isset($bakfile)) print $bakfile; ?>" />
		<input type="hidden" name="path" value="<?php if (isset($path)) print $path; ?>" />

		<?php

		if ($imported) {
			print "<span class=error>".$pgv_lang["dataset_exists"]."</span><br /><br />";
			if (!$SYNC_GEDCOM_FILE)
				print "<span class=error>".$pgv_lang["unsync_warning"]."</span><br /><br />";
		}
		if ($bakfile != "") print $pgv_lang["verify_upload_instructions"]."</td></tr>";
		// NOTE: Check for existing changes
		foreach ($pgv_changes as $cid => $changes) {
			if ($changes[0]["gedcom"] == $GEDFILENAME) {
				print_text("changes_present");
				print "<br /><br />";
				break;
			}
		}
		print "<tr><td class=\"descriptionbox width20 wrap\">".$pgv_lang["empty_dataset"]."</td><td class=\"optionbox vmiddle\">\n";
		print "<select name=\"override\">";
		print "<option value=\"yes\" ";
		if ($override == "yes")
			print "selected=\"selected\"";
		print ">".$pgv_lang["yes"]."</option>";
		print "<option value=\"no\" ";
		if ($override != "yes")
			print "selected=\"selected\"";
		print ">".$pgv_lang["no"]."</option>";
		print "</select></td></tr>";
		//-- check if there are media in the DB already
		if (array_key_exists('OBJE', $all_record_counts)) {
			?>
			<tr>
			<td class="descriptionbox wrap width20">
			<?php print_help_link("keep_media_help", "qm", "keep_media"); print $pgv_lang["keep_media"];?></td>
			<td class="optionbox">
			<select name="keepmedia">
			<option value="yes" <?php if ($keepmedia) print "selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
			<option value="no" <?php if (!$keepmedia) print "selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
			</select>
			</td>
			</tr>
			<?php
		}
		print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
		print "</td></tr></table>";
	} else	$verify = "validate_form";
}

if ($verify == "validate_form") {
	print "<tr><td class=\"topbottombar $TEXT_DIRECTION\" colspan=\"2\">";
	print "<a href=\"javascript: ".$pgv_lang["validate_gedcom"]."\" onclick=\"expand_layer('validate_gedcom');return false\"><img id=\"validate_gedcom_img\" src=\"".$PGV_IMAGE_DIR."/";
	if ($startimport != "true")
	print $PGV_IMAGES["minus"]["other"];
	else
	print $PGV_IMAGES["plus"]["other"];
	print "\" border=\"0\" width=\"11\" height=\"11\" alt=\"\" /></a>";
	print_help_link("validate_gedcom_help", "qm", "validate_gedcom");
	print "&nbsp;<a href=\"javascript: ".$pgv_lang["validate_gedcom"]."\" onclick=\"expand_layer('validate_gedcom');return false\">".$pgv_lang["validate_gedcom"]."</a>";
	print "</td></tr>";
	print "<tr><td class=\"optionbox\">";
	print "<div id=\"validate_gedcom\" style=\"display: ";
	if ($startimport != "true")
	print "block ";
	else
	print "none ";
	print "\">";
	print "\n<table class=\"facts_table\">";
	print "<tr><td class=\"descriptionbox\" colspan=\"2\">".$pgv_lang["performing_validation"]."<br />";
	if (!empty ($error))
	print "<span class=\"error\">$error</span>\n";

	if ($import != true) {
		require_once PGV_ROOT.'includes/functions/functions_tools.php';

		$l_BOMcleanup = false;
		$l_headcleanup = false;
		$l_macfilecleanup = false;
		$l_lineendingscleanup = false;
		$l_isansi = false;
		$l_placecleanup = false;
		$l_datecleanup = false;
		$fp = fopen(get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path'), "r");

		$samplePlace = array();
		$sampleDate = array();
		$ambiguousDate = false;

		// TODO - there are two problems with this next block of code.  Firstly, by
		// checking the file in chunks (rather than complete records), we won't spot
		// any problem that spans chunk boundaries.  Secondly, the date checking
		// stops after the first error.  If the first error is not an ambiguous date
		// then we won't ask the user to choose between DMY and YMD.

		//-- read the gedcom and test it in 8KB chunks
		while ($fp && !feof($fp)) {
			$fcontents = fread($fp, 1024 * 8);
			if (!$l_BOMcleanup && need_BOM_cleanup()) $l_BOMcleanup = true;
			if (!$l_headcleanup && need_head_cleanup()) $l_headcleanup = true;
			if (!$l_macfilecleanup && need_macfile_cleanup()) $l_macfilecleanup = true;
			if (!$l_lineendingscleanup && need_line_endings_cleanup()) $l_lineendingscleanup = true;
//			if (!$l_placecleanup && ($placesample = need_place_cleanup()) !== false) $l_placecleanup = true;
//			if (!$l_datecleanup && ($datesample = need_date_cleanup()) !== false) $l_datecleanup = true;
			if (!$l_isansi && is_ansi()) $l_isansi = true;
			$sample = need_place_cleanup();
			if ($sample !== false) {
				$l_placecleanup = true;
				$samplePlace += $sample;
			}
			$sample = need_date_cleanup();
			if ($sample !== false) {
				$l_datecleanup = true;
				if (isset($sample['choose'])) {
					$ambiguousDate = true;
					unset($sample['choose']);
				}
				$sampleDate += $sample;
			}
		}
		fclose($fp);

		$cleanup_needed = false;
		if (!$l_datecleanup && !$l_isansi && !$l_BOMcleanup && !$l_headcleanup && !$l_macfilecleanup && !$l_placecleanup && !$l_lineendingscleanup) {
			print $pgv_lang["valid_gedcom"];
			print "</td></tr>";
			$import = true;
		} else {
			$cleanup_needed = true;
			print "<input type=\"hidden\" name=\"cleanup_needed\" value=\"cleanup_needed\">";
			if (!file_is_writeable(get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path')) && (file_exists(get_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'path')))) {
				print "<span class=\"error\">".str_replace("#GEDCOM#", $GEDCOM, $pgv_lang["error_header_write"])."</span>\n";
				print "</td></tr>";
			}
			// NOTE: Check for BOM cleanup
			if ($l_BOMcleanup) {
				print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
				print_help_link("BOM_detected_help", "qm", "BOM_detected");
				print "<span class=\"error\">".$pgv_lang["BOM_detected"]."</span>\n";
				print "</td></tr>";
			}
			// NOTE: Check for head cleanup
			if ($l_headcleanup) {
				print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
				print_help_link("invalid_header_help", "qm", "invalid_header");
				print "<span class=\"error\">".$pgv_lang["invalid_header"]."</span>\n";
				print "</td></tr>";
			}
			// NOTE: Check for mac file cleanup
			if ($l_macfilecleanup) {
				print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
				print_help_link("macfile_detected_help", "qm", "macfile_detected");
				print "<span class=\"error\">".$pgv_lang["macfile_detected"]."</span>\n";
				print "</td></tr>";
			}
			// NOTE: Check for line endings cleanup
			if ($l_lineendingscleanup) {
				print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
				print_help_link("empty_lines_detected_help", "qm", "empty_lines_detected");
				print "<span class=\"error\">".$pgv_lang["empty_lines_detected"]."</span>\n";
				print "</td></tr>";
			}
			// NOTE: Check for place cleanup
			if ($l_placecleanup) {
				print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
				print "\n<table class=\"facts_table\">";
				print "<tr><td class=\"optionbox wrap\" colspan=\"3\">";
				print "<span class=\"error\">".$pgv_lang["place_cleanup_detected"]."</span>\n";
				print "</td></tr>";
				print "<tr><td class=\"descriptionbox wrap width20\">";
				print_help_link("cleanup_places_help", "qm", "cleanup_places");
				print $pgv_lang["cleanup_places"];
				print "</td><td class=\"optionbox\" colspan=\"2\"><select name=\"cleanup_places\">\n";
				print "<option value=\"YES\" selected=\"selected\">".$pgv_lang["yes"]."</option>\n<option value=\"NO\">".$pgv_lang["no"]."</option>\n</select>";
				print "</td></tr>";
				print "</td></tr><tr><td class=\"optionbox\" colspan=\"3\">".$pgv_lang["example_place"];
				$max = min(count($samplePlace), 5);		// Show only the first 5 examples
				for ($i=0; $i<$max; $i++) {
					print "<br />".PrintReady(nl2br($samplePlace[$i]));
				}
				print "</td></tr>";
				print "</table>\n";
				print "</td></tr>";
			}
			// NOTE: Check for date cleanup
			if ($l_datecleanup) {
				print "<tr><td class=\"optionbox wrap\" colspan=\"2\">";
				print "<span class=\"error\">".$pgv_lang["invalid_dates"]."</span>\n";
				print "\n<table class=\"facts_table\">";
				print "<tr><td class=\"descriptionbox width20\">";
				print_help_link("detected_date_help", "qm");
				print $pgv_lang["date_format"];

				print "</td><td class=\"optionbox\" colspan=\"2\">";
				if ($ambiguousDate) {
					print "<select name=\"datetype\">\n";
					print "<option value=\"1\">".$pgv_lang["day_before_month"]."</option>\n<option value=\"2\">".$pgv_lang["month_before_day"]."</option>\n</select>";
				} else
				print "<input type=\"hidden\" name=\"datetype\" value=\"3\" />";
				print "</td></tr><tr><td class=\"optionbox\" colspan=\"2\">".$pgv_lang["example_date"];
				$max = min(count($sampleDate), 5);		// Show only the first 5 examples
				for ($i=0; $i<$max; $i++) {
					print "<br />".$sampleDate[$i];
				}
				print "</td></tr>";
				print "</table>\n";
				print "</td></tr>";
			}
			// NOTE: Check for ansi encoding
			if ($l_isansi) {
				print "<tr><td class=\"optionbox\" colspan=\"2\">";
				print "<span class=\"error\">".$pgv_lang["ansi_encoding_detected"]."</span>\n";
				print "\n<table class=\"facts_table\">";
				print "<tr><td class=\"descriptionbox wrap width20\">";
				print_help_link("detected_ansi2utf_help", "qm", "ansi_to_utf8");
				print $pgv_lang["ansi_to_utf8"];
				print "</td><td class=\"optionbox\"><select name=\"utf8convert\">\n";
				print "<option value=\"YES\" selected=\"selected\">".$pgv_lang["yes"]."</option>\n";
				print "<option value=\"NO\">".$pgv_lang["no"]."</option>\n</select>";
				print "</td></tr>";
				print "</table>\n";
			}
		}
	} else if (!$cleanup_needed) {
		print $pgv_lang["valid_gedcom"];
		$import = true;
	} else $import = true;
	?>
	<input type = "hidden" name="GEDFILENAME" value="<?php if (isset($GEDFILENAME)) print $GEDFILENAME; ?>" />
	<input type = "hidden" name="verify" value="validate_form" />
	<input type = "hidden" name="bakfile" value="<?php if (isset($bakfile)) print $bakfile; ?>" />
	<input type = "hidden" name="path" value="<?php if (isset($path)) print $path; ?>" />
	<input type = "hidden" name="no_upload" value="<?php if (isset($no_upload)) print $no_upload; ?>" />
	<input type = "hidden" name="override" value="<?php if (isset($override)) print $override; ?>" />
	<input type = "hidden" name="ok" value="<?php if (isset($ok)) print $ok; ?>" />
	<input type = "hidden" name="keepmedia" value="<?php print $keepmedia?'yes':'no'; ?>" />
	</table>
	</div>
	</td></tr>
<?php
}

if ($import == true) {
	// NOTE: Additional import options
	print "<tr><td class=\"topbottombar $TEXT_DIRECTION\" colspan=\"2\">";
	print "<a href=\"javascript: ".$pgv_lang["import_options"]."\" onclick=\"expand_layer('import_options');return false\"><img id=\"import_options_img\" src=\"".$PGV_IMAGE_DIR."/";
	if ($startimport != "true")
	print $PGV_IMAGES["minus"]["other"];
	else
	print $PGV_IMAGES["plus"]["other"];
	print "\" border=\"0\" width=\"11\" height=\"11\" alt=\"\" /></a>";
	print_help_link("import_options_help", "qm", "import_options");
	print "&nbsp;<a href=\"javascript: ".$pgv_lang["import_options"]."\" onclick=\"expand_layer('import_options');return false\">".$pgv_lang["import_options"]."</a>";
	print "</td></tr>";
	print "<tr><td class=\"optionbox\" colspan=\"2\">";
	print "<div id=\"import_options\" style=\"display: ";
	if ($startimport != "true")
	print "block ";
	else
	print "none ";
	print "\">";
	print "\n<table class=\"facts_table\">";

	// NOTE: Time limit for import
	// TODO: Write help text
	print "<tr><td class=\"descriptionbox width20 wrap\">";
	print_help_link("time_limit_help", "qm", "time_limit");
	print $pgv_lang["time_limit"];
	print "</td><td class=\"optionbox\"><input type=\"text\" name=\"timelimit\" value=\"".$timelimit."\" size=\"5\"";
	if ($startimport == "true")
	print " disabled ";
	print "/>\n";
	print "</td></tr>";

	// NOTE: Auto-click "Continue" button
	// TODO: Write help text
	print "<tr><td class=\"descriptionbox width20 wrap\">";
	print_help_link("autoContinue_help", "qm", "autoContinue");
	print $pgv_lang["autoContinue"];
	print "</td><td class=\"optionbox\"><select name=\"autoContinue\">\n";
	print "<option value=\"YES\" selected=\"selected\">".$pgv_lang["yes"]."</option>\n";
	print "<option value=\"NO\">".$pgv_lang["no"]."</option>\n</select>";
	print "</td></tr>";

	// NOTE: change XREF to RIN, REFN, or Don't change
	print "<tr><td class=\"descriptionbox wrap\">";
	print_help_link("change_indi2id_help", "qm", "change_id");
	print $pgv_lang["change_id"];
	print "</td><td class=\"optionbox\">";
	if ($startimport == "true") {
		if ($xreftype == "NA")
		print $pgv_lang["do_not_change"];
		else
		print $xreftype;
	} else {
		print "<select name=\"xreftype\">\n";
		print "<option value=\"NA\">".$pgv_lang["do_not_change"]."</option>\n<option value=\"RIN\">RIN</option>\n";
		print "<option value=\"REFN\">REFN</option>\n</select>";
	}
	print "</td></tr>\n";

	print "<input type=\"hidden\" name=\"startimport\" value=\"true\" />";
	print "<input type=\"hidden\" name=\"ged\" value=\"";
	if (isset ($GEDFILENAME))
	print $GEDFILENAME;
	print "\" />";
	print "<input type=\"hidden\" name=\"GEDFILENAME\" value=\"";
	if (isset ($GEDFILENAME))
	print $GEDFILENAME;
	print "\" />";
	print "<input type=\"hidden\" name=\"exists\" value=\"";
	if (isset ($exists))
	print $exists;
	print "\" />";
	print "<input type=\"hidden\" name=\"ok\" value=\"".$ok."\" />";
	print "<input type=\"hidden\" name=\"import\" value=\"".$import."\" />";
	print "<input type=\"hidden\" name=\"l_isansi\" value=\"";
	if (isset ($l_isansi))
	print $l_isansi;
	print "\" />";
	print "<input type=\"hidden\" name=\"check\" value=\"\" />";
	print "</table></div>";
	print "</td></tr>";
}

if ($startimport == "true") {
	set_gedcom_setting(get_id_from_gedcom($GEDFILENAME), 'imported', false);

	if (isset ($exectime)) {
		$oldtime = time() - $exectime;
		$skip_table = 0;
	} else
	$oldtime = time();

	/**
	 * function that sets up the html required to run the progress bar
	 * @param long $FILE_SIZE	the size of the file
	 */
	function setup_progress_bar($FILE_SIZE) {
		global $pgv_lang, $ged, $timelimit;
		?>
		<script type="text/javascript">
		<!--
		function complete_progress(time, exectext, go_pedi, go_welc) {
			progress = document.getElementById("progress_header");
			if (progress) progress.innerHTML = '<span class="error"><b><?php print $pgv_lang["import_complete"]; ?></b></span><br />'+exectext+' '+time+' <?php print $pgv_lang["sec"]; ?>';
			progress = document.getElementById("link1");
			if (progress) progress.innerHTML = '<a href="pedigree.php?ged=<?php print encode_url(str_replace("'", "\'", $ged)); ?>">'+go_pedi+'</a>';
			progress = document.getElementById("link2");
			if (progress) progress.innerHTML = '<a href="index.php?ctype=gedcom&ged=<?php print encode_url(str_replace("'", "\'", $ged)); ?>">'+go_welc+'</a>';
			progress = document.getElementById("link3");
			if (progress) progress.innerHTML = '<a href="editgedcoms.php"><?php print $pgv_lang["manage_gedcoms"]; ?></a>';
		}
		function wait_progress() {
			progress = document.getElementById("progress_header");
			if (progress) progress.innerHTML = '<?php print $pgv_lang["please_be_patient"]; ?>';
		}

		var FILE_SIZE = <?php print $FILE_SIZE; ?>;
		var TIME_LIMIT = <?php print $timelimit; ?>;

		function update_progress(bytes, time) {
			perc = Math.round(100*(bytes / FILE_SIZE));
			if (perc>100) perc = 100;
			progress = document.getElementById("progress_div");
			if (progress) {
				progress.style.width = perc+"%";
				progress.innerHTML = perc+"%";
			}
			perc = Math.round(100*(time / TIME_LIMIT));
			if (perc>100) perc = 100;
			progress = document.getElementById("time_div");
			if (progress) {
				progress.style.width = perc+"%"; progress.innerHTML = perc+"%";
			}
		}
		//-->
		</script>
		<?php
		print "\n<table style=\"width: 800px;\"><tr><td>";
		print "<div id=\"progress_header\" class=\"person_box\" style=\"width: 350px; margin: 10px; text-align: center;\">\n";
		print "<b>".$pgv_lang["import_progress"]."</b>";
		print "<div style=\"left: 10px; right: 10px; width: 300px; height: 20px; border: inset #CCCCCC 3px; background-color: #000000;\">\n";
		print "<div id=\"progress_div\" class=\"person_box\" style=\"width: 1%; height: 18px; text-align: center; overflow: hidden;\">1%</div>\n";
		print "</div>\n";
		print "</div>\n";
		print "</td><td style=\"text-align: center;\"><div id=\"link1\">&nbsp;</div>";
		print "<div id=\"link2\">&nbsp;</div><div id=\"link3\">&nbsp;</div>";
		print "</td></tr></table>";
		print "\n<table style=\"width: 800px;\"><tr><td>";
		print "<div id=\"progress_header\" class=\"person_box\" style=\"width: 350px; margin: 10px; text-align: center;\">\n";
		if ($timelimit == 0)
		print "<b>".$pgv_lang["time_limit"]." ".$pgv_lang["none"]."</b>";
		else
		print "<b>".$pgv_lang["time_limit"]." ".$timelimit." ".$pgv_lang["sec"]."</b>";
		print "<div style=\"left: 10px; right: 10px; width: 300px; height: 20px; border: inset #CCCCCC 3px; background-color: #000000;\">\n";
		print "<div id=\"time_div\" class=\"person_box\" style=\"width: 1%; height: 18px; text-align: center; overflow: hidden;\">1%</div>\n";
		print "</div>\n";
		print "</div>\n";
		print "</td><td style=\"text-align: center;\"><div id=\"link1\">&nbsp;</div>";
		print "<div id=\"link2\">&nbsp;</div><div id=\"link3\">&nbsp;</div>";
		print "</td></tr></table>";
		flush();
	}
//-- end of setup_progress_bar function

if (!isset ($stage))
$stage = 0;
if ((empty ($ged)) || (!get_id_from_gedcom($ged))) {
	$ged = $GEDCOM;
}
$ged_id=get_id_from_gedcom($ged);
$temp = $THEME_DIR;
$GEDCOM_FILE = get_gedcom_setting($ged_id, 'path');
$FILE = $ged;
$TITLE = get_gedcom_setting($ged_id, 'title');
require get_config_file($ged_id);
if ($LANGUAGE <> $_SESSION["CLANGUAGE"])
$LANGUAGE = $_SESSION["CLANGUAGE"];

$temp2 = $THEME_DIR;
$THEME_DIR = $temp;
$THEME_DIR = $temp2;

if (isset ($GEDCOM_FILE)) {
	if ((!isFileExternal($GEDCOM_FILE)) && (!file_exists($GEDCOM_FILE))) {
		print "<span class=\"error\"><b>Could not locate gedcom file at $GEDCOM_FILE<br /></b></span>\n";
		unset ($GEDCOM_FILE);
	}
}

if ($stage == 0) {
	$_SESSION["resumed"] = 0;
	if (file_exists($INDEX_DIRECTORY.basename($GEDCOM_FILE).".new"))
	unlink($INDEX_DIRECTORY.basename($GEDCOM_FILE).".new");
	empty_database($ged_id, $keepmedia);
	//-- erase any of the changes
	foreach ($pgv_changes as $cid => $changes) {
		if ($changes[0]["gedcom"] == $ged)
		unset ($pgv_changes[$cid]);
	}
	write_changes();
	$stage = 1;
}
flush();

if ($stage == 1) {
	@ set_time_limit($timelimit);
	//-- make sure that we are working with the true time limit
	//-- commented out for now because PHP does not seem to be reporting it correctly on Linux
	//$timelimit = ini_get("max_execution_time");

	$FILE_SIZE = filesize($GEDCOM_FILE);
	print "<tr><td class=\"topbottombar $TEXT_DIRECTION\" colspan=\"2\">";
	print $pgv_lang["reading_file"]." ".$GEDCOM_FILE;
	print "</td></tr>";
	print "</table>";

	print $pgv_lang['progress_bars_info'];
	//print "<tr><td class=\"optionbox\">";
	setup_progress_bar($FILE_SIZE);
	//print "</td></tr>";
	flush();

	// ------------------------------------------------------ Begin importing data
	$i = 0;

	//-- as we are importing the file, a new file is being written to store any
	//-- changes that might have occurred to the gedcom file (eg. conversion of
	//-- media objects).  After the import is complete the new file is
	//-- copied over the old file.
	//-- The records are written during the import_record() method and the
	//-- update_media() method
	//-- open handle to read file
	$fpged = fopen($GEDCOM_FILE, "rb");
	//-- open handle to write changed file
	$fpnewged = fopen($INDEX_DIRECTORY.basename($GEDCOM_FILE).".new", "ab");
	$BLOCK_SIZE = 1024 * 4; //-- 4k bytes per read (4kb is usually the page size of a virtual memory system)
	//-- resume a halted import from the session
	if (!empty ($_SESSION["resumed"])) {
		$import_stats=$_SESSION['import_stats'];
		$start_time  =$_SESSION['start_time'];
		$TOTAL_BYTES =$_SESSION["TOTAL_BYTES"];
		$fcontents = $_SESSION["fcontents"];
		$media_count = $_SESSION["media_count"];
		$found_ids = $_SESSION["found_ids"];
		$MAX_IDS = $_SESSION["MAX_IDS"];
		$autoContinue = $_SESSION["autoContinue"];
		fseek($fpged, $TOTAL_BYTES);
	} else {
		$fcontents = "";
		$TOTAL_BYTES = 0;
		$media_count = 0;
		$MAX_IDS = array();
		$_SESSION["resumed"] = 1;
		$import_stats=array();
		$start_time=microtime(true);
	}
	while (!feof($fpged)) {
		$temp = fread($fpged, $BLOCK_SIZE);
		$fcontents .= $temp;
		$TOTAL_BYTES += strlen($temp);
		$pos1 = 0;
		while ($pos1 !== false) {
			//-- find the start of the next record
			$pos2 = strpos($fcontents, "\n0", $pos1 +1);
			while ((!$pos2) && (!feof($fpged))) {
				$temp = fread($fpged, $BLOCK_SIZE);
				$fcontents .= $temp;
				$TOTAL_BYTES += strlen($temp);
				$pos2 = strpos($fcontents, "\n0", $pos1 +1);
			}

			//-- pull the next record out of the file
			if ($pos2) {
				$indirec = substr($fcontents, $pos1, $pos2 - $pos1);
			} else {
				$indirec = substr($fcontents, $pos1);
			}

			try {
				$record_type=import_record($indirec, $ged_id, false);
			} catch (PDOException $ex) {
				// Import errors are likely to be caused by duplicate records.
				// There is no safe way of handling these.  Just display them
				// and let the user decide.
				echo '<pre class="error">', $ex->getMessage(), '</pre>';
				echo '<pre>', PGV_GEDCOM, ': ', $ged_id, '</pre>';
				echo '<pre>', htmlspecialchars($indirec), '</pre>';
				// Don't let the error message disappear off the screen.
				$autoContinue=false;
				$record_type=$pgv_lang['invalid'];
			}

			// Generate import statistics
			if (!isset($import_stats[$record_type])) {
				$import_stats[$record_type]=array(
					'records'=>0,
					'bytes'  =>0,
					'seconds'=>0
				);
			}
			$end_time=microtime(true);
			$import_stats[$record_type]['records']++;
			$import_stats[$record_type]['bytes'  ]+=$pos2 ? $pos2-$pos1 : strlen($indirec);
			$import_stats[$record_type]['seconds']+=$end_time-$start_time;
			$start_time=$end_time;

			//-- move the cursor to the start of the next record
			$pos1 = $pos2;

			$i ++;

			//-- update the progress bars at every 50 records
			if ($i % 25 == 0) {
				$newtime = time();
				$exectime = $newtime - $oldtime;
				echo PGV_JS_START, "update_progress($pos2, $exectime);", PGV_JS_END;
				flush();
			} else {
				print ' ';
			}

			//-- check if we are getting close to timing out
			if ($i % 5 == 0) {
				//-- keep the browser informed by sending more data
				print "\n";
				$newtime = time();
				$exectime = $newtime - $oldtime;
				if (($timelimit != 0) && ($timelimit - $exectime) < 2) {
					$importtime = $importtime + $exectime;
					$fcontents = substr($fcontents, $pos2);
					//-- store the resume information in the session
					$_SESSION['import_stats']=$import_stats;
					$_SESSION['start_time']=$start_time;
					$_SESSION["media_count"] = $media_count;
					$_SESSION["TOTAL_BYTES"] = $TOTAL_BYTES;
					$_SESSION["fcontents"] = $fcontents;
					$_SESSION["importtime"] = $importtime;
					$_SESSION["MAX_IDS"] = $MAX_IDS;
					$_SESSION["found_ids"] = $found_ids;
					$_SESSION["autoContinue"] = $autoContinue;

					//-- close the file connection
					fclose($fpged);
					fclose($fpnewged);
					$_SESSION["resumed"]++;
					print "\n<table class=\"facts_table\">";
					?>
					<tr>
						<td class="descriptionbox"><?php print $pgv_lang["import_time_exceeded"]; ?></td>
					</tr>
					<tr>
						<td class="topbottombar"><input type="hidden" name="ged"
							value="<?php print $ged; ?>" /> <input type="hidden" name="stage"
							value="1" /> <input type="hidden" name="timelimit"
							value="<?php print $timelimit; ?>" /> <input type="hidden"
							name="importtime" value="<?php print $importtime; ?>" />
						<input type="hidden" name="xreftype" value="<?php print $xreftype; ?>" />
						<input type="hidden" name="utf8convert"
							value="<?php print $utf8convert; ?>" /> <input type="hidden"
							name="verify" value="<?php print $verify; ?>" /> <input type="hidden"
							name="startimport" value="<?php print $startimport; ?>" /> <input
							type="hidden" name="import" value="<?php print $import; ?>" /> <input
							type="hidden" name="FILE" value="<?php print $FILE; ?>" /> <input
							type="submit" name="continue"
							value="<?php print $pgv_lang["del_proceed"]; ?>" /></td>
					</tr>
					</table>
					<?php if ($autoContinue=="YES") { ?>
					<script type="text/javascript">
						<!--
						(function (fn) {
							if (window.addEventListener) window.addEventListener('load', fn, false);
							else window.attachEvent('onload', fn);
						})
						(function() {
							document.forms['configform'].elements['continue'].click();
						});
						//-->
					</script>
					<?php
					}
					print_footer();
					session_write_close();
					exit;
				}
			}
		}
		$fcontents = substr($fcontents, $pos2);
	}
	fclose($fpged);
	fclose($fpnewged);
	//-- as we are importing the file, a new file is being written to store any
	//-- changes that might have occurred to the gedcom file (eg. conversion of
	//-- media objects).  After the import is complete the new file is
	//-- copied over the old file.
	//-- The records are written during the import_record() method and the
	//-- update_media() method
	$res = @ copy($GEDCOM_FILE, $INDEX_DIRECTORY.basename($GEDCOM_FILE).".bak");
	if (!$res)
		print "<span class=\"error\">Unable to create backup of the GEDCOM file at ".$INDEX_DIRECTORY.basename($GEDCOM_FILE).".bak</span><br />";
	//unlink($GEDCOM_FILE);
	$res = @ copy($INDEX_DIRECTORY.basename($GEDCOM_FILE).".new", $GEDCOM_FILE);
	if (!$res) {
		print "<span class=\"error\">Unable to copy updated GEDCOM file ".$INDEX_DIRECTORY.basename($GEDCOM_FILE).".new to ".$GEDCOM_FILE."</span><br />";
	} else {
		@unlink($INDEX_DIRECTORY.basename($GEDCOM_FILE).".new");
		$logline = AddToLog($GEDCOM_FILE." updated");
		check_in($logline, $GEDCOM_FILE, $INDEX_DIRECTORY);
	}
	$newtime = time();
	$exectime = $newtime - $oldtime;
	$importtime = $importtime + $exectime;
	$exec_text = $pgv_lang["exec_time"];
	$go_pedi = $pgv_lang["click_here_to_go_to_pedigree_tree"];
	$go_welc = $pgv_lang["welcome_page"];
	if ($LANGUAGE == "french" || $LANGUAGE == "italian") {
		echo PGV_JS_START, "complete_progress($importtime, \"$exec_text\", \"$go_pedi\", \"$go_welc\");", PGV_JS_END;
	} else {
		echo PGV_JS_START, "complete_progress($importtime, '$exec_text', '$go_pedi', '$go_welc');", PGV_JS_END;
	}
	flush();

	// Import Statistics
	$show_table1  = "<table class=\"list_table\"><tr>";
	$show_table1 .= "<tr><td class=\"topbottombar\" colspan=\"4\">".$pgv_lang["ged_import"]."</td></tr>";
	$show_table1 .= "<td class=\"descriptionbox\">".$pgv_lang["exec_time"]."</td>";
	$show_table1 .= "<td class=\"descriptionbox\">".$pgv_lang["bytes_read"]."</td>";
	$show_table1 .= "<td class=\"descriptionbox\">".$pgv_lang["found_record"]."</td>";
	$show_table1 .= "<td class=\"descriptionbox\">".$pgv_lang["type"]."</td></tr>";
	$total_seconds=0;
	$total_bytes  =0;
	$total_records=0;
	foreach ($import_stats as $type=>$stats) {
		$total_seconds+=$stats['seconds'];
		$total_bytes  +=$stats['bytes'];
		$total_records+=$stats['records'];
		$show_table1 .= "<tr><td class=\"optionbox indent\">".sprintf("%.2f %s", $stats['seconds'], $pgv_lang['sec'])."</td>";
		$show_table1 .= "<td class=\"optionbox indent\">".$stats['bytes']."</td>";
		$show_table1 .= "<td class=\"optionbox indent\">".$stats['records']."</td>";
		$show_table1 .= "<td class=\"optionbox\">".$type."</td></tr>";
	}
	$show_table1 .= "<tr><td class=\"optionbox indent\">".sprintf("%.2f %s", $total_seconds, $pgv_lang['sec'])."</td>";
	$show_table1 .= "<td class=\"optionbox indent\">".$total_bytes.PGV_JS_START."update_progress($total_bytes, $exectime);".PGV_JS_END;
	$show_table1 .= "<td class=\"optionbox indent\">". $total_records."</td>";
	$show_table1 .= "<td class=\"optionbox\">&nbsp;</td></tr>";
	$show_table1 .= "</table>";
	echo "<tr><td class=\"topbottombar $TEXT_DIRECTION\">", $pgv_lang["import_statistics"], "</td></tr>";
	print "<tr><td class=\"optionbox\">";
	print "<table cellspacing=\"20px\"><tr><td class=\"optionbox\" style=\"vertical-align: top;\">";
	if (isset ($skip_table)) {
	 print "<br />...";
	} else {
		print $show_table1;
	}
	print "</td></tr></table>";
	// NOTE: Finished Links
	import_max_ids($ged_id, $MAX_IDS);
	set_gedcom_setting($ged_id, 'imported', true);
	set_gedcom_setting($ged_id, 'pgv_ver', PGV_VERSION);
	print "</td></tr>";

	$record_count = 0;
	$_SESSION["resumed"] = 0;
	unset ($_SESSION['import_stats']);
	unset ($_SESSION["TOTAL_BYTES"]);
	unset ($_SESSION["fcontents"]);
	@ set_time_limit($TIME_LIMIT);
}
}
?>
<tr>
	<td class="topbottombar" colspan="2"><?php

	if ($startimport != "true")
	print "<input type=\"submit\" name=\"continue\" value=\"".$pgv_lang["del_proceed"]."\" />&nbsp;";
	if ($verify && $startimport != "true")
	print "<input type=\"button\" name=\"cancel\" value=\"".$pgv_lang["cancel"]."\" onclick=\"document.configform.override.value='no'; document.configform.no_upload.value='cancel_upload'; document.configform.submit(); \" />";
	?></td>
</tr>
</table>
</form>
	<?php


	print_footer();
	?>

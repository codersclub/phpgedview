<?php
/**
 * Random Media Block
 *
 * This block will randomly choose media items and show them in a block
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
 * @version $Id$
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_RANDOM_MEDIA_PHP', '');

if (!$MULTI_MEDIA) return false;		// This feature is not enabled

$PGV_BLOCKS['print_random_media']['name']		= $pgv_lang['random_media_block'];
$PGV_BLOCKS['print_random_media']['descr']		= 'random_media_descr';
$PGV_BLOCKS['print_random_media']['type']    	= 'both';	// Allow on both the Welcome and the MyGedView pages
$PGV_BLOCKS['print_random_media']['canconfig']	= true;
$PGV_BLOCKS['print_random_media']['hidesearch']	= true;		// should this block be hidden from search engines
$PGV_BLOCKS['print_random_media']['config']		= array(
	'cache'   =>0,
	'filter'  =>'all',
	'controls'=>'yes',
	'start'   =>'no',

	'filter_avi'  =>'no',
	'filter_bmp'  =>'yes',
	'filter_gif'  =>'yes',
	'filter_jpeg' =>'yes',
	'filter_mp3'  =>'no',
	'filter_ole'  =>'yes',
	'filter_pcx'  =>'yes',
	'filter_pdf'  =>'no',
	'filter_png'  =>'yes',
	'filter_tiff' =>'yes',
	'filter_wav'  =>'no',

	'filter_audio'		=>'no',
	'filter_book'		=>'yes',
	'filter_card'		=>'yes',
	'filter_certificate'=>'yes',
	'filter_coat'		=>'yes',
	'filter_document'	=>'yes',
	'filter_electronic'	=>'yes',
	'filter_fiche'		=>'yes',
	'filter_film'		=>'yes',
	'filter_magazine'	=>'yes',
	'filter_manuscript'	=>'yes',
	'filter_map'		=>'yes',
	'filter_newspaper'	=>'yes',
	'filter_other'		=>'yes',
	'filter_painting'	=>'yes',
	'filter_photo'		=>'yes',
	'filter_tombstone'	=>'yes',
	'filter_video'		=>'no'
);

require_once PGV_ROOT.'includes/functions/functions_print_facts.php';

//-- function to display a random picture from the gedcom
function print_random_media($limitHeight, $config, $side, $index) {
	global $pgv_lang, $foundlist, $MULTI_MEDIA, $TEXT_DIRECTION, $PGV_IMAGE_DIR, $PGV_IMAGES;
	global $MEDIA_EXTERNAL, $MEDIA_DIRECTORY, $SHOW_SOURCES;
	global $MEDIATYPE, $THUMBNAIL_WIDTH, $USE_MEDIA_VIEWER;
	global $PGV_BLOCKS, $ctype, $action;
	global $PGV_IMAGE_DIR, $PGV_IMAGES;

	if (!$MULTI_MEDIA) return false;		// This feature is not enabled
	
	$filter = $config["filter"];  // indi, event, or all

	$medialist = array();
	$foundlist = array();

	$medialist = get_medialist(false, '', true, true);
	if (count($medialist) == 0) return false;		// Do nothing if there aren't any media

	$disp = false;
	
	for ($iterations=0; $iterations<40; $iterations++) {	// try up to 40 times to get a media item to display
		$error = false;
		$value = array_rand($medialist);
		if (PGV_DEBUG) {
			print "<br />";print_r($medialist[$value]);print "<br />";
			print "Trying ".$medialist[$value]["XREF"]."<br />";
		}
		$links = $medialist[$value]["LINKS"];
		$disp = ($medialist[$value]["EXISTS"]>0) && $medialist[$value]["LINKED"] && $medialist[$value]["CHANGE"]!="delete" ;
		if (PGV_DEBUG && !$disp && !$error) {
			$error = true; 
			print "<span class='error'>{$medialist[$value]['XREF']} File does not exist, or is not linked to anyone, or is marked for deletion.</span><br />";
		}

		$disp &= displayDetailsById($medialist[$value]["XREF"], "OBJE");
		$disp &= !FactViewRestricted($medialist[$value]["XREF"], $medialist[$value]["GEDCOM"]);

		if (PGV_DEBUG && !$disp && !$error) {
			$error = true; 
			print "<span class='error'>{$medialist[$value]['XREF']} Failed to pass privacy</span><br />";
		}

		$isExternal = isFileExternal($medialist[$value]["FILE"]);

		if ($limitHeight && !$isExternal) $disp &= ($medialist[$value]["THUMBEXISTS"]>0);
		if (PGV_DEBUG && !$disp && !$error) {
			$error = true; 
			print "<span class='error'>}$medialist[$value]['XREF']} thumbnail file could not be found</span><br />";
		}

		// Filter according to format and type  (Default: unless configured otherwise, don't filter)
		if (!empty($medialist[$value]["FORM"]) && isset($config["filter_".$medialist[$value]["FORM"]]) && $config["filter_".$medialist[$value]["FORM"]]!="yes") $disp = false;
		if (!empty($medialist[$value]["TYPE"]) && isset($config["filter_".$medialist[$value]["TYPE"]]) && $config["filter_".$medialist[$value]["TYPE"]]!="yes") $disp = false;
		if (PGV_DEBUG && !$disp && !$error) {
			$error = true; 
			print "<span class='error'>}$medialist[$value]['XREF']} failed Format or Type filters</span><br />";
		}

		if ($disp && count($links) != 0){
			if ($disp && $filter!="all") {
				// Apply filter criteria
				$ct = preg_match("/0\s(@.*@)\sOBJE/", $medialist[$value]["GEDCOM"], $match);
				$objectID = $match[1];
				//-- we could probably use the database for this filter
				foreach($links as $key=>$type) {
					$gedrec = find_gedcom_record($key, PGV_GED_ID);
					$ct2 = preg_match("/(\d)\sOBJE\s{$objectID}/", $gedrec, $match2);
					if ($ct2>0) {
						$objectRefLevel = $match2[1];
						if ($filter=="indi" && $objectRefLevel!="1") $disp = false;
						if ($filter=="event" && $objectRefLevel=="1") $disp = false;
						if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." failed to pass config filter</span><br />";}
					}
					else $disp = false;
				}
			}
		}

		if ($disp) break;		// Success
		
		if (PGV_DEBUG) print "<span class='error'>{$medialist[$value]['XREF']} Will not be shown</span><br />";
		unset($medialist[$value]);		// remove the private media item from the list

		if (count($medialist)==0) $medialist = get_medialist(false, '', true, true);	// Re-fill the media list to try that again
	}
	
	if (!$disp) return false;		// No success after 40 tries

	$id = "random_picture{$index}";
	$title = print_help_link("index_media_help", "qm", "random_picture", false, true);
	
	if ($PGV_BLOCKS["print_random_media"]["canconfig"]) {
		if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
			if ($ctype=="gedcom") $name = PGV_GEDCOM;
			else $name = PGV_USER_NAME;
			$title .= "<a href=\"javascript: configure block\" onclick=\"window.open('".encode_url("index_edit.php?name={$name}&ctype={$ctype}&action=configure&side={$side}&index={$index}")."', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
			$title .= "<img class='adminicon' src='{$PGV_IMAGE_DIR}/{$PGV_IMAGES['admin']['small']}' width='15' height='15' border='0' alt='{$pgv_lang['config_block']}' /></a>";
		}
	}
	$title .= $pgv_lang["random_picture"];
	
	$cookieName = "randomMedia{$side}{$index}Status";	// Use a cookie to tell us what the JavaScript has done
	$status = safe_COOKIE($cookieName, array('play', 'stop'), 'initial');
	
	$buttonPlay = "{$PGV_IMAGE_DIR}/{$PGV_IMAGES['rarrow']['other']}";
	$buttonStop = "{$PGV_IMAGE_DIR}/{$PGV_IMAGES['stop']['other']}";
	$buttonNext = "{$PGV_IMAGE_DIR}/{$PGV_IMAGES['rdarrow']['other']}";

	$content = "";
	$content .= "<div id='random_picture_container{$index}'>";
	
	// Determine which button should be displayed
	if ($status == 'initial') {
		$status = 'stop';
		if ($config['start']=='yes') $status = 'play';
	} 
	if ($status == 'play') $whichButton = $buttonStop;
	if ($status == 'stop') $whichButton = $buttonPlay;

	if ($config['controls']=='yes') {
		$linkNextImage = "<a href='javascript: {$pgv_lang['next_image']}' onclick=\"return ajaxBlock('random_picture{$index}', 'print_random_media', '{$side}', $index, '{$ctype}', false);\"><img src='{$buttonNext}' border='0' style='margin: 0px 5px' alt='{$pgv_lang['next_image']}' title='{$pgv_lang['next_image']}' /></a>";

		$content .= "<div class='center' id='random_picture_controls{$index}'><br />";
		if ($TEXT_DIRECTION=="rtl") $content .= $linkNextImage;
		$content .= "<a href='javascript: {$pgv_lang['play_stop']}' onclick='togglePlay(); return false;'>";
		$content .= "<img id='play_stop' src='{$whichButton}' border='0' style='margin: 0px 5px' alt='{$pgv_lang['play_stop']}' title='{$pgv_lang['play_stop']}' />";
		$content .= "</a>";
		if ($TEXT_DIRECTION=="ltr") $content .= $linkNextImage;
		$content .= '</div>';
	}

	$content .= "
		<script language='JavaScript' type='text/javascript'>
		<!--
			var status = 'stop';
			function togglePlay() {
				imgid = document.getElementById('play_stop');
				if (status == 'play') {
					status = 'stop';
					imgid.src = '{$buttonPlay}';
					document.cookie = '{$cookieName}'+'=stop'
			 	} else {
					status = 'play';
					imgid.src = '{$buttonStop}';
					document.cookie = '{$cookieName}'+'=play'
					playSlideShow();
				}
			}
		
			function playSlideShow() {
				if (status == 'play') {
					ajaxBlock('random_picture{$index}', 'print_random_media', '{$side}', {$index}, '{$ctype}', false);
					window.setTimeout('playSlideShow()', 6000);
				}
			}
		-->
		</script>
	";
	if ($config['start']=='yes') {
		$content .= "
			<script language='JavaScript' type='text/javascript'>
			<!--
				status = 'play';
				document.cookie = '{$cookieName}'+'=play'
				window.setTimeout('playSlideShow()', 6000);
			-->
			</script>
			";
	}
	$content .= "<div class='center' id='random_picture_content{$index}'>";
	$imgsize = findImageSize($medialist[$value]["FILE"]);
	$imgwidth = $imgsize[0]+40;
	$imgheight = $imgsize[1]+150;
	$content .= "<table id='random_picture_box' width='100%'><tr><td valign='top'";

	if ($limitHeight) $content .= " align='center' class='details1'";
	else $content .= " class='details2'";
	$mediaid = $medialist[$value]["XREF"];

	$whichURL = "'javascript:;' onclick='return openImage('{$medialist[$value]['FILE']}', {$imgwidth}, {$imgheight});'";
	if ($USE_MEDIA_VIEWER) $whichURL = "'mediaviewer.php?mid={$mediaid}'";
	if (PGV_USE_LIGHTBOX) $whichURL = "'mediaviewer.php?mid={$mediaid}'";
				
	$content .= " ><a href={$whichURL}>";

	$mediaTitle = "";
	if (!empty($medialist[$value]["TITL"])) {
		$mediaTitle = PrintReady($medialist[$value]["TITL"]);
	}
	else $mediaTitle = basename($medialist[$value]["FILE"]);
	if ($limitHeight) {
		$content .= "<img src='{$medialist[$value]['THUMB']}' border='0' class='thumbnail'";
		if ($isExternal) $content .= " width='{$THUMBNAIL_WIDTH}'";
	} else {
		$content .= "<img src='{$medialist[$value]['FILE']}' border='0' class='thumbnail' ";
		$imgsize = findImageSize($medialist[$value]["FILE"]);
		if ($imgsize[0] > 175) $content .= "width='175' ";
	}
	$content .= " alt='{$mediaTitle}' title='{$mediaTitle}' />";
	$content .= "</a>";
	if ($limitHeight) $content .= "<br />";
	else $content .= "</td><td class='details2'>";
	$content .= "<a href='mediaviewer.php?mid={$mediaid}'>";
	$content .= "<b>". $mediaTitle ."</b>";
	$content .= "</a><br />";

	ob_start();
	PrintMediaLinks($medialist[$value]["LINKS"], "normal");
	$content .= ob_get_clean();
	$content .= "<br /><div class='indent" . ($TEXT_DIRECTION=="rtl"?"_rtl":"") . "'>";
	$content .= print_fact_notes($medialist[$value]["GEDCOM"], "1", false, true);
	$content .= "</div>";
	$content .= "</td></tr></table>";
	$content .= "</div>"; // random_picture_content
	$content .= "</div>"; // random_picture_container
	global $THEME_DIR;
	require $THEME_DIR.'templates/block_main_temp.php';
}


function print_random_media_config($config) {
	global $pgv_lang, $factarray, $PGV_BLOCKS, $TEXT_DIRECTION;

	print "<tr><td class=\"descriptionbox wrap width33\">";
		print_help_link("random_media_persons_or_all_help", "qm");
		print $pgv_lang["random_media_persons_or_all"];
	print "</td>";?>
<td class="optionbox"><select name="filter">
<option value="indi"
<?php if ($config["filter"]=="indi") print " selected=\"selected\"";?>><?php print $pgv_lang["random_media_persons"]; ?></option>
<option value="event"
<?php if ($config["filter"]=="event") print " selected=\"selected\"";?>><?php print $pgv_lang["random_media_events"]; ?></option>
<option value="all"
<?php if ($config["filter"]=="all") print " selected=\"selected\"";?>><?php print $pgv_lang["all"]; ?></option>
</select></td>
</tr>

<tr>
<td class="descriptionbox wrap width33"><?php print_help_link("random_media_filter_help", "qm"); print $pgv_lang["filter"]; ?></td>
	<td class="optionbox">
		<center><b><?php print $factarray["FORM"]; ?></b></center>
		<table class="width100">
			<tr>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_avi"
			<?php if ($config['filter_avi']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;avi&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_bmp"
			<?php if ($config['filter_bmp']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;bmp&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_gif"
			<?php if ($config['filter_gif']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;gif&nbsp;&nbsp;</td>
			</tr>
	<tr>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_jpeg"
			<?php if ($config['filter_jpeg']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;jpeg&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_mp3"
			<?php if ($config['filter_mp3']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;mp3&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_ole"
			<?php if ($config['filter_ole']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;ole&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_pcx"
			<?php if ($config['filter_pcx']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;pcx&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_pdf"
			<?php if ($config['filter_pdf']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;pdf&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_png"
			<?php if ($config['filter_png']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;png&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_tiff"
			<?php if ($config['filter_tiff']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;tiff&nbsp;&nbsp;</td>
		<td class="width33"><input type="checkbox" value="yes"
			name="filter_wav"
			<?php if ($config['filter_wav']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;wav&nbsp;&nbsp;</td>
				<td class="width33">&nbsp;</td>
			</tr>
		</table>
		<br />
		<center><b><?php print $factarray["TYPE"]; ?></b></center>
		<table class="width100">
			<tr>
			<?php

			//-- Build array of currently defined values for the Media Type
			foreach ($pgv_lang as $varname => $typeValue) {
				if (substr($varname, 0, 6) == "TYPE__") {
					if ($varname != "TYPE__other") $type[strtolower(substr($varname, 6))] = $typeValue;
				}
			}
			//-- Sort the array into a meaningful order
			array_flip($type);
			asort($type);
			array_flip($type);
			//-- Add "Other" at the end
			$type["other"] = $pgv_lang["TYPE__other"];
			//-- Build the list of checkboxes
			$i = 0;
			foreach ($type as $typeName => $typeValue) {
				$i++;
				if ($i > 3) {
					$i = 1;
					print "</tr><tr>";
				}
				print "<td class=\"width33\"><input type=\"checkbox\" value=\"yes\" name=\"filter_".$typeName."\"";
				if ($config['filter_'.$typeName]=="yes") print " checked=\"checked\"";
				print " />&nbsp;&nbsp;".$typeValue."&nbsp;&nbsp;</td>";
			}
			?>
			</tr>
		</table>
</td>
</tr>

<tr>
<td class="descriptionbox wrap width33"><?php print_help_link("random_media_ajax_controls_help", "qm"); print $pgv_lang["random_media_ajax_controls"]; ?></td>
	<td class="optionbox"><select name="controls">
	<option value="yes"
	<?php if ($config["controls"]=="yes") print " selected=\"selected\""; ?>><?php print $pgv_lang["yes"]; ?></option>
	<option value="no"
	<?php if ($config["controls"]=="no") print " selected=\"selected\""; ?>><?php print $pgv_lang["no"]; ?></option>
</select></td>
</tr>
<tr>
<td class="descriptionbox wrap width33"><?php print_help_link("random_media_start_slide_help", "qm"); print $pgv_lang["random_media_start_slide"]; ?></td>
	<td class="optionbox"><select name="start">
	<option value="yes"
	<?php if ($config["start"]=="yes") print " selected=\"selected\""; ?>><?php print $pgv_lang["yes"]; ?></option>
	<option value="no"
	<?php if ($config["start"]=="no") print " selected=\"selected\""; ?>><?php print $pgv_lang["no"]; ?></option>
</select>
<input type="hidden" name="cache" value="<?php print $config['cache']; ?>" />
</td></tr>

	<?php
}
?>

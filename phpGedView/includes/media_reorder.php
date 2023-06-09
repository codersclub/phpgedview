<?php
/**
 * Reorder media Items using drag and drop
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
 * @subpackage Module
 * @version $Id$
 * @author Brian Holland
 */

//	This file is loaded by edit_interface.php

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_MEDIA_REORDER_PHP', '');

require_once PGV_ROOT.'includes/functions/functions_print_facts.php';

	print "<br /><b>".$pgv_lang["reorder_media"]."</b>";
//	print_help_link("reorder_children_help", "qm");
	print "&nbsp --- &nbsp;" . $pgv_lang["reorder_media_window_title"];

	global $MULTI_MEDIA, $TBLPREFIX, $SHOW_ID_NUMBERS, $MEDIA_EXTERNAL;
	global $pgv_lang, $pgv_changes, $factarray, $view;
	global $MEDIATYPE, $pgv_changes;
	global $WORD_WRAPPED_NOTES, $MEDIA_DIRECTORY, $PGV_IMAGE_DIR, $PGV_IMAGES, $TEXT_DIRECTION;
	global $is_media, $cntm1, $cntm2, $cntm3, $cntm4, $t, $mgedrec;
	global $edit, $tabno ;
	global $ids, $pid, $related, $level, $gedrec, $media_data, $order, $order1, $order2, $j ;

	print "\n";

	?>
	<form name="reorder_form" method="post" action="edit_interface.php">
		<input type="hidden" name="action" value="reorder_media_update" />
		<input type="hidden" name="pid" value="<?php print $pid; ?>" />
<!--		<input type="hidden" name="option" value="bybirth" /> -->

		<center><p>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_save"];?>"><?php print $pgv_lang["save"];?></button>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_reset"];?>" onclick="document.reorder_form.action.value='reset_media_update'; document.reorder_form.submit();"><?php print $pgv_lang["reset"];?></button>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_cancel"];?>" onclick="window.close();"><?php print $pgv_lang["cancel"];?></button>
		</center>

<ul id="reorder_media_list">

	<?php
	  print "\n";

      if (!showFact("OBJE", $pid)) return false;
      if (!isset($pgv_changes[$pid."_".PGV_GEDCOM])) $gedrec = find_gedcom_record($pid, PGV_GED_ID);
      else $gedrec = find_updated_record($pid, PGV_GED_ID);

	//related=true means show related items
	$related="true";

	//-- find all of the related ids
	$ids = array($pid);
	if ($related) {
		$count = preg_match_all("/1 FAMS @(.*)@/", $gedrec, $match, PREG_SET_ORDER);
		for($i=0; $i<$count; $i++) {
			$ids[] = trim($match[$i][1]);
		}
	}
	
	$result = getSequencedMediaList($gedrec, $level);		// Look for _PGV_OBJS @xxx@ or OBJE @xxx@ lines in the current record
	$count = $result['count'];
	$current_objes = $result['medialist'];
	$obje_links = $result['links'];
	$orderby = $result['orderby'];	

	// -----------------------------------------------------------------------------------------------

	$media_found = false;

	$sqlmm = "SELECT DISTINCT ";
	$sqlmm .= "m_media, m_ext, m_file, m_titl, m_gedfile, m_gedrec, mm_gid, mm_gedrec FROM {$TBLPREFIX}media, {$TBLPREFIX}media_mapping where ";
	$sqlmm .= "mm_gid IN (";
	$i=0;
	$vars=array();
	foreach ($ids as $key=>$media_id) {
		if ($i>0) $sqlmm .= ",";
		$sqlmm .= "?";
		$vars[]=$media_id;
		$i++;
	}
	$sqlmm .= ") AND mm_gedfile=? AND mm_media=m_media AND mm_gedfile=m_gedfile ";
	$vars[]=PGV_GED_ID;
	//-- for family and source page only show level 1 obje references
	if ($level>0) {
		$sqlmm .= "AND mm_gedrec ".PGV_DB::$LIKE." ?";
		$vars[]="{$level} OBJE%";
	}

	$sqlmm .= $orderby;

	$rows=PGV_DB::prepare($sqlmm)->execute($vars)->fetchAll(PDO::FETCH_ASSOC);

	$foundObjs = array();

	foreach ($rows as $rowm) {
	
		if (isset($foundObjs[$rowm['m_media']])) {
			if (isset($current_objes[$rowm['m_media']])) $current_objes[$rowm['m_media']]--;
			continue;
		}
	
		// NOTE: Determine the size of the mediafile
		$imgwidth = 300+40;
		$imgheight = 300+150;
		if (preg_match("'://'", $rowm["m_file"])) {
			if (in_array($rowm["m_ext"], $MEDIATYPE)) {
				$imgwidth = 400+40;
				$imgheight = 500+150;
			} else {
				$imgwidth = 800+40;
				$imgheight = 400+150;
			}
		}
		else if (file_exists(filename_decode(check_media_depth($rowm["m_file"], "NOTRUNC")))) {
			$imgsize = findImageSize(check_media_depth($rowm["m_file"], "NOTRUNC"));
			$imgwidth = $imgsize[0]+40;
			$imgheight = $imgsize[1]+150;
		}
		$rows = array();
	
		$rows['normal'] = $rowm;
		if (isset($current_objes[$rowm['m_media']])) $current_objes[$rowm['m_media']]--;
		foreach($rows as $rtype => $rowm) {
			// if  (FactViewRestricted($rowm['m_media'], $rowm['m_gedrec']) == "true")
			$res = media_reorder_row($rtype, $rowm, $pid);
			$media_found = $media_found || $res;
			$foundObjs[$rowm['m_media']] = true;
	
			print "\n\n";
		$j++;
		}
	}
	
	?>
	</ul>
<?php

print "\n";
?>
<script type="text/javascript" language="javascript">
// <![CDATA[
	new Effect.BlindDown('reorder_media_list', {duration: .5});
	Sortable.create('reorder_media_list',
		{
			scroll:window,
			onUpdate : function() {
				inputs = $('reorder_media_list').getElementsByTagName('input');
				for (var i = 0; i < inputs.length; i++) {
					inputs[i].value = i;
				}
			}
		}
	);
// ]]>
</script>

		<center>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_save"];?>"><?php print $pgv_lang["save"];?></button>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_reset"];?>" onclick="document.reorder_form.action.value='reset_media_update'; document.reorder_form.submit();"><?php print $pgv_lang["reset"];?></button>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_cancel"];?>" onclick="window.close();"><?php print $pgv_lang["cancel"];?></button>
		</center><p>

	</form>
	<?php


?>


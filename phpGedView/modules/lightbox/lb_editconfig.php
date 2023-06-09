<?php
/**
 * Online UI for editing config.php site configuration variables
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2021  PGV Development Team
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
 * This Page Is Valid XHTML 1.0 Transitional! > 17 September 2005
 *
 * @package PhpGedView
 * @subpackage GoogleMap
 * @see config.php
 * @version $Id: editconfig.php,v$
 * $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

global $pgv_lang, $pid, $GEDCOM ;

$pid = safe_get('pid');
$action = safe_POST("action");

loadLangFile("pgv_lang, pgv_confighelp, pgv_help, lightbox:lang, lightbox:help_text");
print_header($pgv_lang["configure_lightbox"]);

require PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';

echo "<span class='subheaders'>", $pgv_lang["configure_lightbox"], "</span>";
echo "<br /><br />";

if (!PGV_USER_IS_ADMIN) {
	echo "<table class='facts_table'>\n";
	echo "<tr><td colspan='2' class='facts_value'>", $pgv_lang["lb_admin_error"];
	echo "</td></tr></table>\n";
	echo "<br/><br/><br/>\n";
	print_footer();
	exit;
}

if ($action=='update' && !isset($security_user)) {
	set_site_setting('LB_ENABLED',        $_POST['NEW_mediatab']);
	set_site_setting('LB_AL_HEAD_LINKS',  $_POST['NEW_LB_AL_HEAD_LINKS']);
	set_site_setting('LB_AL_THUMB_LINKS', $_POST['NEW_LB_AL_THUMB_LINKS']);
	set_site_setting('LB_TT_BALLOON',     $_POST['NEW_LB_TT_BALLOON']);
	set_site_setting('LB_ML_THUMB_LINKS', $_POST['NEW_LB_ML_THUMB_LINKS']);
	set_site_setting('LB_MUSIC_FILE',     $_POST['NEW_LB_MUSIC_FILE']);
	set_site_setting('LB_SS_SPEED',       $_POST['NEW_LB_SS_SPEED']);
	set_site_setting('LB_TRANSITION',     $_POST['NEW_LB_TRANSITION']);
	set_site_setting('LB_URL_WIDTH',      $_POST['NEW_LB_URL_WIDTH']);
	set_site_setting('LB_URL_HEIGHT',     $_POST['NEW_LB_URL_HEIGHT']);

	AddToLog('Lightbox config updated');
	// read the config file again, to set the vars
	require PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';
}

$i = 0;

?>
<script language="JavaScript" type="text/javascript">
	<!--
	var helpWin;

	function helpPopup(which) {
		if ((!helpWin)||(helpWin.closed)) helpWin = window.open('module.php?mod=lightbox&pgvaction=lb_editconfig_help&help='+which,'_blank','left=50,top=50,width=500,height=320,resizable=1,scrollbars=1');
		else helpWin.location = 'modules/lightbox/lb_editconfig_help.php?help='+which;
		return false;
	}
	function getHelp(which) {
		if ((helpWin)&&(!helpWin.closed)) helpWin.location='module.php?mod=lightbox&pgvaction=lb_editconfig_help&help='+which;
	}

	function closeHelp() {
		if (helpWin) helpWin.close();
	}
	//-->
</script>

<form method="post" name="configform" action="<?php echo encode_url("module.php?mod=lightbox&pgvaction=lb_editconfig&pid={$pid}"); ?>">
<input type="hidden" name="action" value="update" />

	<table class="facts_table">

		<tr >
		<td class="descriptionbox" width="400"><?php print_help_link("mediatab_help", "qm", "mediatab"); ?><b><?php echo $pgv_lang["mediatab"];?></b><br />&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pgv_lang["lb_appearance"];?></td>
		<td class="optionbox">
			<select name="NEW_mediatab" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('mediatab_help');">
				<option value="1" <?php if ($mediatab==1) echo "selected='selected'"; ?>><?php echo $pgv_lang["show"];?></option>
				<option value="0" <?php if ($mediatab==0) echo "selected='selected'"; ?>><?php echo $pgv_lang["hide"];?></option>
			</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["show"];?>&nbsp;&nbsp;<?php echo $pgv_lang["hide"];?>
		</td>
		</tr>
	<tr><td><br>
	</td></tr>


		<tr>
		<td class="descriptionbox"><?php print_help_link("lb_al_head_links_help", "qm", "lb_al_head_links");?><b><?php echo $pgv_lang["lb_al_head_links"];?></b><br />&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pgv_lang["lb_linkAppearance"];?></td>
		<td class="optionbox">
			<select name="NEW_LB_AL_HEAD_LINKS" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_AL_HEAD_LINKS_help');">
				<option value="icon" <?php if ($LB_AL_HEAD_LINKS=="icon") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_icon"];?></option>
				<option value="text" <?php if ($LB_AL_HEAD_LINKS=="text") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_text"];?></option>
				<option value="both" <?php if ($LB_AL_HEAD_LINKS=="both") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_both"];?></option>
			</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["lb_icon"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_text"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_both"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>


		<tr>
		<td class="descriptionbox"><?php print_help_link("lb_tt_balloon_help", "qm", "lb_tt_balloon");?><b><?php echo $pgv_lang["lb_tt_balloon"];?></b><br />&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pgv_lang["lb_ttAppearance"];?></td>
		<td class="optionbox"><select name="NEW_LB_TT_BALLOON" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_AL_THUMB_LINKS_help');">
				<option value="true"  <?php if ($LB_TT_BALLOON=="true")  echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_balloon_true"];?></option>
				<option value="false" <?php if ($LB_TT_BALLOON=="false") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_balloon_false"];?></option>
			</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["lb_balloon_true"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_balloon_false"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>


		<tr>
		<td class="descriptionbox"><?php print_help_link("lb_al_thumb_links_help", "qm", "lb_al_thumb_links");?><b><?php echo $pgv_lang["lb_al_thumb_links"];?></b><br />&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pgv_lang["lb_linkAppearance"];?></td>
		<td class="optionbox"><select name="NEW_LB_AL_THUMB_LINKS" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_AL_THUMB_LINKS_help');">
				<option value="icon" <?php if ($LB_AL_THUMB_LINKS=="icon") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_icon"];?></option>
				<option value="text" <?php if ($LB_AL_THUMB_LINKS=="text") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_text"];?></option>
			</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["lb_icon"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_text"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>


	<tr>
		<td class="descriptionbox"><?php print_help_link("lb_ss_speed_help", "qm", "lb_ss_speed");?><b><?php echo $pgv_lang["lb_ss_speed"];?></b></td>
		<td class="optionbox"><select name="NEW_LB_SS_SPEED" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_SS_SPEED_help');" />
				<option value= "2" <?php if ($LB_SS_SPEED == 2)  echo "selected='selected'"; ?>><?php echo  "2";?></option>
				<option value= "3" <?php if ($LB_SS_SPEED == 3)  echo "selected='selected'"; ?>><?php echo  "3";?></option>
				<option value= "4" <?php if ($LB_SS_SPEED == 4)  echo "selected='selected'"; ?>><?php echo  "4";?></option>
				<option value= "5" <?php if ($LB_SS_SPEED == 5)  echo "selected='selected'"; ?>><?php echo  "5";?></option>
				<option value= "6" <?php if ($LB_SS_SPEED == 6)  echo "selected='selected'"; ?>><?php echo  "6";?></option>
				<option value= "7" <?php if ($LB_SS_SPEED == 7)  echo "selected='selected'"; ?>><?php echo  "7";?></option>
				<option value= "8" <?php if ($LB_SS_SPEED == 8)  echo "selected='selected'"; ?>><?php echo  "8";?></option>
				<option value= "9" <?php if ($LB_SS_SPEED == 9)  echo "selected='selected'"; ?>><?php echo  "9";?></option>
				<option value="10" <?php if ($LB_SS_SPEED ==10)  echo "selected='selected'"; ?>><?php echo "10";?></option>
				<option value="12" <?php if ($LB_SS_SPEED ==12)  echo "selected='selected'"; ?>><?php echo "12";?></option>
				<option value="15" <?php if ($LB_SS_SPEED ==15)  echo "selected='selected'"; ?>><?php echo "15";?></option>
				<option value="20" <?php if ($LB_SS_SPEED ==20)  echo "selected='selected'"; ?>><?php echo "20";?></option>
				<option value="25" <?php if ($LB_SS_SPEED ==25)  echo "selected='selected'"; ?>><?php echo "25";?></option>
			</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["lb_ss_SpeedAdvice"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>

	<tr>
		<td class="descriptionbox"><?php print_help_link("lb_music_file_help", "qm", "lb_music_file");?><b><?php echo $pgv_lang["lb_music_file"];?></b><br />&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pgv_lang["lb_MP3Only"];?></td>
		<td class="optionbox">
			<input type="text" name="NEW_LB_MUSIC_FILE" value="<?php echo $LB_MUSIC_FILE;?>" size="60" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_MUSIC_FILE_help');" /><br />
		<?php echo $pgv_lang["lb_musicFileAdvice"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>

		<tr>
		<td class="descriptionbox"><?php print_help_link("lb_transition_help", "qm", "lb_transition");?><b><?php echo $pgv_lang["lb_transition"];?></b></td>
		<td class="optionbox"><select name="NEW_LB_TRANSITION" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_TRANSITION_help');">
				<option value="none"   <?php if ($LB_TRANSITION=="none")   echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_none"];?></option>
				<option value="normal" <?php if ($LB_TRANSITION=="normal") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_normal"];?></option>
				<option value="double" <?php if ($LB_TRANSITION=="double") echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_double"];?></option>
				<option value="warp"   <?php if ($LB_TRANSITION=="warp")   echo "selected='selected'"; ?>><?php echo $pgv_lang["lb_warp"];?></option>
						</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["lb_none"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_normal"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_double"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_warp"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>

	<tr>
		<td class="descriptionbox"><?php print_help_link("lb_url_dimensions_help", "qm", "lb_url_dimensions");?><b><?php echo $pgv_lang["lb_url_dimensions"];?><b></td>
		<td class="optionbox">
			<input type="text" name="NEW_LB_URL_WIDTH"  value="<?php echo $LB_URL_WIDTH;?>"  size="4" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_TRANSITION_help');" />
			<?php echo $pgv_lang["lb_width"];?>
			&nbsp;&nbsp;&nbsp;
			<input type="text" name="NEW_LB_URL_HEIGHT" value="<?php echo $LB_URL_HEIGHT;?>" size="4" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_TRANSITION_help');" />
			<?php echo $pgv_lang["lb_height"];?><br />
		<?php echo $pgv_lang["lb_url_dimensionsAdvice"];?>
		</td>
		</tr>
	<tr><td><br>
	</td></tr>



	<tr>
		<td class="descriptionbox"><?php print_help_link("lb_ml_thumb_links_help", "qm", "lb_ml_thumb_links");?><b><?php echo $pgv_lang["lb_ml_thumb_links"];?></b><br />&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pgv_lang["lb_linkAppearance"];?></td>
		<td class="optionbox">
			<select name="NEW_LB_ML_THUMB_LINKS" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('LB_ML_THUMB_LINKS_help');" />
				<option value= "none" <?php if ($LB_ML_THUMB_LINKS == "none")  echo "selected='selected'"; ?>><?php echo  $pgv_lang["lb_none"];?></option>
				<option value= "text" <?php if ($LB_ML_THUMB_LINKS == "text")  echo "selected='selected'"; ?>><?php echo  $pgv_lang["lb_text"];?></option>
				<option value= "icon" <?php if ($LB_ML_THUMB_LINKS == "icon")  echo "selected='selected'"; ?>><?php echo  $pgv_lang["lb_icon"];?></option>
				<option value= "both" <?php if ($LB_ML_THUMB_LINKS == "both")  echo "selected='selected'"; ?>><?php echo  $pgv_lang["lb_both"];?></option>
			</select>
		&nbsp;&nbsp;&nbsp; <?php echo $pgv_lang["lb_none"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_text"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_icon"];?>&nbsp;&nbsp;<?php echo $pgv_lang["lb_both"];?>
		</td>
		</tr>
	<tr><td>
	</td></tr>


		</table>

	<br /><br />

		<table class="facts_table">

		 <tr>

				<td class="descriptionbox" colspan="2" align="center">
						<input type="submit" tabindex="<?php $i++; echo $i?>" value="<?php echo $pgv_lang["save_config"];?>" onclick="closeHelp();" />
						&nbsp;&nbsp;
						<input type="reset" tabindex="<?php $i++; echo $i?>" value="<?php echo $pgv_lang["reset"];?>" />
						&nbsp;&nbsp;
			<?php if ($pid){ ?>
				<INPUT TYPE="button" VALUE="<?php echo $pgv_lang["lb_toAlbumPage"];?>" 		onclick="javascript:window.location='individual.php?pid=<?php echo $pid;?>&tab=<?php echo $tabno;?>&gedcom=<?php echo $GEDCOM;?>'" />
			<?php }else{ ?>
				<INPUT TYPE="button" VALUE="<?php echo $pgv_lang["lb_toAdminConfigPage"];?>" 	onclick="javascript:window.location='admin.php'" />
			<?php } ?>
			
			</td>

		</tr>
		</table>
</form>

<?php

if(empty($SEARCH_SPIDER))
	print_footer();
else {
	echo $pgv_lang["label_search_engine_detected"], ": ", $SEARCH_SPIDER;
	echo "\n</div>\n\t</body>\n</html>";
}

?>

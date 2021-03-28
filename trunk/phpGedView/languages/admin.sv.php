<?php
/**
 * Swedish language file for PhpGedView
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["label_timedban_servers"]	= "Tidsbegränsad åtkomstavslag";
$pgv_lang["enter_banexpiry"]		= "Ange utgångsdatum och tidpunkt för tidsbegränsad åtkomstavslag så här:<br />2012.12.31@23:59";

$pgv_lang["analytics_config"]		= "Webbanalys";
$pgv_lang["google_analytics"]		= "Google Analytics";
$pgv_lang["USE_GOOGLE_ANALYTICS"]	= "Aktivera Google Analytics?";
$pgv_lang["PGV_GOOGLE_ANALYTICS"]	= "Google Analytics kontonummer";
$pgv_lang["piwik_analytics"]		= "Matomo Analytics";
$pgv_lang["USE_PIWIK_ANALYTICS"]	= "Aktivera Matomo Analytics?";
$pgv_lang["PGV_PIWIK_URL"]			= "URL för Matomo Analytics servern";
$pgv_lang["PGV_PIWIK_SITE"]			= "Site number in Matomo Analytics";
$pgv_lang["clustrmaps_analytics"]	= "ClustrMaps Analytics";
$pgv_lang["USE_CLUSTRMAPS_ANALYTICS"] = "Aktivera ClustrMaps Analytics?";
$pgv_lang["PGV_CLUSTRMAPS_SITE"] 	= "URL till PhpGedView";
$pgv_lang["PGV_CLUSTRMAPS_SERVER"] 	= "ClustrMaps servernummer";

$pgv_lang["module_admin"]			= "Moduladministration";
$pgv_lang["mod_admin_installed"]	= "Installerade moduler";
$pgv_lang["mod_admin_tabs"]			= "Hantera flikar";
$pgv_lang["mod_admin_menus"]		= "Hantera menyer";
$pgv_lang["mod_admin_intro"]		= "Nedan är listan över alla moduler installerade i denna instans av PhpGedView. Moduler installeras genom att placera dem i katalogen <i>modules</i>. Här kan du ställa in åtkomstnivån per GEDCOM för varje modul. Om en modul innehåller flikar för personsidan eller menyer för menyraden kan du också ställa in åtkomstnivå och sekvens för var och en av dem.";
$pgv_lang["mod_admin_active"]		= "Aktiv";
$pgv_lang["mod_admin_name"]			= "Modulnamn";
$pgv_lang["mod_admin_description"]	= "Beskrivning";
$pgv_lang["mod_admin_version"]		= "Version / PGV";
$pgv_lang["mod_admin_hastab"]		= "Flik?";
$pgv_lang["mod_admin_hasmenu"]		= "Meny?";
$pgv_lang["mod_admin_access_level"]	= "Åtkomstnivå";
$pgv_lang["mod_admin_order"]		= "Sekvens";
$pgv_lang["mod_admin_config"]		= "Modulinställningar";
$pgv_lang["mod_admin_settings"]		= "Modulkonfigurationsinställningar";
$pgv_lang["ret_module_admin"]		= "Gå tillbaka till moduladministrationssidan";
$pgv_lang["ret_admin"]				= "Gå tillbaka till administrationssidan";

$pgv_lang["enter_comment"]	= "Skriva in en kommentar här.";
$pgv_lang["upload_a_gedcom"] 		= "Ladda upp en GEDCOM-fil";
$pgv_lang["start_entering"] 		= "Börja mata in data";
$pgv_lang["add_gedcom_from_path"] 	= "Lägg till en GEDCOM från en filplats";
$pgv_lang["get_started_instructions"]	= "Välj ett av dessa alternativ för att komma igång med PhpGedView";

$pgv_lang["admin_users_exists"]		= "Följande administrativa användare finns redan:";
$pgv_lang["install_step_1"] = "Kontrollera miljön";
$pgv_lang["install_step_2"] = "Databasanslutning";
$pgv_lang["install_step_3"] = "Skapa tabeller";
$pgv_lang["install_step_4"] = "Webbplatskonfiguration";
$pgv_lang["install_step_5"] = "Språk";
$pgv_lang["install_step_6"] = "Spara konfiguration";
$pgv_lang["install_step_7"] = "Skapa administratörsanvändare";
$pgv_lang["install_wizard"] = "Installationsguiden";
$pgv_lang["basic_site_config"] = "Grund inställningar";
$pgv_lang["adv_site_config"] = "Avancerade inställningar";
$pgv_lang["config_not_saved"] = "* Dina inställningar sparas inte förrän i steg 6";
$pgv_lang["download_config"] = "Ladda ner <i>config.php</i>";
$pgv_lang["site_unavailable"] = "Webbplatsen är för närvarande inte tillgänglig";
$pgv_lang["to_manage_users"] = "Använd <a href=\"useradmin.php\">användaradministrationssidan</a> för att hantera användare.";
$pgv_lang["db_tables_created"] = "Databastabeller skapade";
$pgv_lang["config_saved"] = "Konfiguration sparad";
$pgv_lang["checking_errors"]		= "Kontrollerar för fel...";
$pgv_lang["checking_php_version"]		= "Kontrollerar nödvändig PHP-version:";
$pgv_lang["failed"]		= "Misslyckad";
$pgv_lang["pgv_requires_version"]		= "PhpGedView kräver PHP version #PGV_REQUIRED_PHP_VERSION# eller senare.";
$pgv_lang["using_php_version"]		= "Du använder PHP version #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]		= "Kontrollerar om det finns minimalt databassupport:";
$pgv_lang["no_db_extensions"]		= "You do not have any of the supported database extensions.";
$pgv_lang["db_ext_support"]		= "Du har #DBEXT# support";
$pgv_lang["checking_config.php"]		= "Kontrollerar <i>config.php</i>:";
$pgv_lang["config.php_missing"]		= "filen <i>config.php</i> hittades inte.";
$pgv_lang["config.php_missing_instr"]		= "Installationsguiden kommer inte att kunna skriva dina inställningar till <i>config.php</i> filen. Du kan göra en kopia av filen <i>config.dist</i> och byta namn på den till <i>config.php</i>. Alternativt, efter att ha slutfört guiden har du möjlighet att ladda ner dina inställningar och ladda upp den resulterande <i>config.php</i>-filen.";
$pgv_lang["config.php_not_writable"]		= "<i>config.php</i> är inte skrivbar.";
$pgv_lang["config.php_not_writable_instr"]		= "Installationsguiden kommer inte att kunna skriva dina inställningar till <i>config.php</i> filen. Du kan ställa in skrivbehörigheter för filen, eller efter att ha slutfört guiden har du möjlighet att ladda ner dina inställningar och ladda upp den resulterande <i>config.php</i> filen.";
$pgv_lang["passed"]		= "Passerad";
$pgv_lang["config.php_writable"]		= "<i>config.php</i> är närvarande och skrivbar.";
$pgv_lang["checking_warnings"]		= "Kontrollerar för varningar...";
$pgv_lang["checking_timelimit"]		= "Kontrollerar förmågan att ändra tidsgräns:";
$pgv_lang["cannot_change_timelimit"]		= "Det gick inte att ändra tidsgränsen.";
$pgv_lang["cannot_change_timelimit_instr"]		= "Du kanske inte kan köra alla funktioner i stora databaser med många personer.";
$pgv_lang["current_max_timelimit"]		= "Din maximala tidsgräns är";
$pgv_lang["check_memlimit"]		= "Kontrollerar förmågan att ändra minnesgräns:";
$pgv_lang["cannot_change_memlimit"]		= "Det går inte att ändra minnesgränsen.";
$pgv_lang["cannot_change_memlimit_instr"]		= "Du kanske inte kan köra alla funktioner i stora databaser med många personer.";
$pgv_lang["current_max_memlimit"]		= "Din nuvarande minnesgräns är";
$pgv_lang["check_upload"]		= "Kontrollerar om det finns möjlighet att ladda upp filer:";
$pgv_lang["current_max_upload"]		= "Din maximala uppladdningsstorlek är:";
$pgv_lang["check_gd"]		= "Söker efter GD-bildbibliotek:";
$pgv_lang["cannot_use_gd"]		= "Du har inte GD-bildbiblioteket. Du kommer inte att kunna skapa miniatyrbilder automatiskt.";
$pgv_lang["check_sax"]		= "Söker efter SAX XML-bibliotek:";
$pgv_lang["cannot_use_sax"]		= "Du har inte SAX XML-biblioteket. Du kommer inte att kunna köra några rapporter eller några andra hjälpfunktioner.";
$pgv_lang["check_dom"]		= "Söker efter DOM XML-bibliotek:";
$pgv_lang["cannot_use_dom"]		= "Du har inte DOM XML-biblioteket. Du kommer inte att kunna exportera XML.";
$pgv_lang["check_calendar"]		= "Söker efter avancerat kalenderbibliotek:";
$pgv_lang["cannot_use_calendar"]		= "Du har inte avancerat kalenderstöd. Du kommer inte att kunna köra några avancerade kalenderfunktioner.";
$pgv_lang["warnings_passed"]		= "Alla varningskontroller klarade.";
$pgv_lang["warning_instr"]		= "Om någon av varningarna inte passerar kan du fortfarande köra PhpGedView på den här servern, men vissa funktioner kan inaktiveras eller så kan du uppleva dålig prestanda.";

$pgv_lang["associated_files"]		= "Associerade filer: ";
$pgv_lang["remove_all_files"]		= "Ta bort alla onödiga filer";
$pgv_lang["warn_file_delete"]		= "Denna fil innehåller viktig information om språkinställningar eller information om väntande ändringar. Är du säker på att du vill ta bort filen?";
$pgv_lang["deleted_files"]          = "Borttagna filer:";
$pgv_lang["index_dir_cleanup_inst"]	= "För att radera filer eller katalog från indexmappen dra den till papperskorgen eller välj dess kryssruta. Klicka på radera-knappenför att permanent tabort de markerade filerna.<ul><li>Filer markerade med <img src=\"./images/RESN_confidential.gif\" /> krävs för att programmet ska fungera och kan inte tas bort.</li><li>filer markerade med <img src=\"./images/RESN_locked.gif\" /> innehåller viktiga inställningar eller ändrade data och bör endast raderas om du är säker på vad du gör.</li></ul>";
$pgv_lang["index_dir_cleanup"]		= "Rensa indexmappen";
$pgv_lang["clear_cache_succes"]		= "Cache-filerna har tagits bort.";
$pgv_lang["clear_cache"]			= "Töm cache-filerna";
$pgv_lang["sanity_err0"]			= "Fel:";
$pgv_lang["sanity_err1"]			= "Du behöver PHP version 4.3 eller nyare.";
$pgv_lang["sanity_err2"]			= "Filen eller katalogen <i>#GLOBALS[whichFile]#</i> finns inte. Kontrollera att filen eller katalogen finns, inte var felstavad och läsrättigheter är satta korrekt.";
$pgv_lang["sanity_err3"]			= "Filen <i>#GLOBALS[whichFile]#</i> laddades inte upp korrekt. Försök ladda upp den igen.";
$pgv_lang["sanity_err4"]			= "Filen <i>config.php</i> är skadad.";
$pgv_lang["sanity_err5"]			= "Filen <i>config.php</i> är inte skrivbar.";
$pgv_lang["sanity_err6"]			= "Katalogen <i>#GLOBALS[INDEX_DIRECTORY]#</i> är inte skrivbar.";
$pgv_lang["sanity_warn0"]			= "Varningar:";
$pgv_lang["sanity_warn1"]			= "Katalogen <i>#GLOBALS[MEDIA_DIRECTORY]#</i> är inte skrivbar. Du kommer inte kunna ladda upp mediafiler eller skapa miniatyrbilder.";
$pgv_lang["sanity_warn2"]			= "Katalogen <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> är inte skrivbar. Du kommer inte kunna ladda upp eller skapa miniatyrbilder i PhpGedView.";
$pgv_lang["sanity_warn3"]			= "GD bildbiblioteket finns inte. PhpGedView kommer att fungera men vissa funktioner som miniatyrbildsskapning och cirkeltavlan kommer inte fungera. Läs <a href='http://www.php.net/manual/en/ref.image.php' target='_blank'>http://www.php.net/manual/en/ref.image.php</a> för mer information.";
$pgv_lang["sanity_warn4"]			= "XML parsningsbiblioteket finns inte. PhpGedView kommer fortfarande att fungera men vissa funktioner som rapportgenerering och web service kommer inte fungera. Läs <a href='https://www.php.net/manual/en/ref.xml.php' target='_blank'>https://www.php.net/manual/en/ref.xml.php</a> för mer information.";
$pgv_lang["sanity_warn5"]			= "DOM XML biblioteket finns inte. PhpGedView kommer fortfarande att fungera men vissa funktioner som GRAMPS export urklippskorgen, nerladdning och web service kommer inte fungera. Läs <a href='https://www.php.net/manual/en/refs.xml.php' target='_blank'>https://www.php.net/manual/en/refs.xml.php</a> för mer information.";
$pgv_lang["sanity_warn6"]			= "Kalender biblioteket finns inte. PhpGedView kommer fortfarande att fungera men vissa funktioner som Konverteringar till andra kalendrar som hebreisk och fransk inte fungera. Läs <a href='https://www.php.net/manual/en/ref.calendar.php' target='_blank'>https://www.php.net/manual/en/ref.calendar.php</a> för mer information.";
$pgv_lang["ip_address"]				= "IPadress";
$pgv_lang["date_time"]				= "Datum och tid";
$pgv_lang["log_message"]			= "Logmeddelande";
$pgv_lang["searchtype"]				= "Söktyp";
$pgv_lang["query"]					= "Fråga";
$pgv_lang["user"]					= "Inloggade användare";
$pgv_lang["editors"]				= "Redaktörer";
$pgv_lang["gedcom_admins"]			= "GEDCOM-administratörer";
$pgv_lang["site_admins"]			= "Webbplatsadministratörer";
$pgv_lang["nobody"]					= "Ingen";
$pgv_lang["step2"]				= "Steg 2 av 4:";
$pgv_lang["refresh"]				= "Ladda om";
$pgv_lang["move_file_success"]		= "Media- och miniatyrfiler flyttades korrekt.";
$pgv_lang["media_folder_corrupt"]	= "Mediamappen är skadad.";
$pgv_lang["gedcom_deleted"]		= "Radering av GEDCOM <b>#GED#</b> lyckades.";
$pgv_lang["gedadmin"]				= "GEDCOM-administratör";
$pgv_lang["full_name"]			= "Fullständigt namn";
$pgv_lang["error_header"] 		= "GEDCOM-filen, <b>#GEDCOM#</b>, finns inte på den angivna platsen.";
$pgv_lang["confirm_delete_file"]	= "Är du säker på at du vill radera denna fil?";
$pgv_lang["confirm_folder_delete"] = "Är du säker på att du vill radera denna mapp?";
$pgv_lang["confirm_remove_links"]	= "Är du säker på att du vill ta bort alla länkar till detta objekt?";
$pgv_lang["PRIV_PUBLIC"]			= "Visa för alla";
$pgv_lang["PRIV_USER"]				= "Visa endast för inloggade användare";
$pgv_lang["PRIV_NONE"]				= "Visa endast för administratörer";
$pgv_lang["PRIV_HIDE"]				= "Dölj även för administratörer";
$pgv_lang["manage_gedcoms"]		= "Administrera GEDCOM-filer och integritetsinställningar";
$pgv_lang["keep_media"]				= "Behåll medialänkar";
$pgv_lang["current_links"]			= "Länkar";
$pgv_lang["add_more_links"]			= "Lägg till länkar";
$pgv_lang["enter_pid_or_name"]		= "Ange personbeteckning eller namn";
$pgv_lang["set_links"]				= "Ställ in länkar";
$pgv_lang["add_or_remove_links"]	= "Hantera länkar";

$pgv_lang["keep"]					= "Behålla";
$pgv_lang["unlink"]					= "Ta bort länk";
$pgv_lang["nav"]					= "Navigator";
$pgv_lang["fam_nav"]				= "Familjenavigator";
$pgv_lang["remove"]					= "Avlägsna";
$pgv_lang["keep_link"]				= "Håll länken i listan";
$pgv_lang["remove_link"]			= "Ta bort länken från listan";
$pgv_lang["open_nav"]				= "Starta familjenavigatorn";
$pgv_lang["link_exists"]			= "Den här länken finns redan";
$pgv_lang["id_not_valid"]			= "Inte en giltig identifierare för person, familj eller källa";
$pgv_lang["add_fam_other_links"]	= "Lägg till familj och sök länkar";
$pgv_lang["search_add_links"]		= "Sök efter personer att lägga till i listan «Lägg till länkar».";
$pgv_lang["enter_name"]				= "Ange ett namn";
$pgv_lang["add_indi_to_link_list"]	= "Klicka på namn för att lägga till person i listan «Lägg till länkar».";
$pgv_lang["click_choose_head"]		= "Klicka på #GLOBALS[tempStringHead]# för att välja person som familjechef.";
$pgv_lang["click_choose_head_text"]	= "Klicka för att välja person som familjechef.";
$pgv_lang["head"]					= "Familjechef";
$pgv_lang["id_empty"]				= "När du lägger till en länk kan identifieringsfältet inte vara tomt.";
$pgv_lang["link_deleted"]			= "Länk till borttagen";
$pgv_lang["link_added"]				= "Länk till #GLOBALS[addLinkId]# tillagd";
$pgv_lang["no_update_CHANs"]		= "Uppdatera inte CHAN (Senaste ändring) posterna";
$pgv_lang["no_CHANs_update"]		= "Inga CHAN (Senaste ändring) poster uppdaterades";

$pgv_lang["files_in_backup"]		= "Filer inkluderade i denna backup<br />";
$pgv_lang["no_thumb_dir"]		= "miniatyrbildsmappen existerar inte och det gick inte att skapa en.";
$pgv_lang["folder_created"]		= "Skapad mapp";
$pgv_lang["folder_no_create"]		= "Kan inte skapa mapp";
$pgv_lang["security_no_create"]	= "Säkerhetsvarning: Filen <b><i>index.php</i></b> finns inte i ";
$pgv_lang["security_not_exist"]	= "Säkerhetsvarning, kan inte skapa <b><i>index.php</i></b> i ";
$pgv_lang["label_delete"]           = "Radera";
$pgv_lang["progress_bars_info"]			= "Förloppsindikatorn nedan berättar hur långt importen kommit. Om tidsgränsen nås stoppas importen och du kommer att behöva trycka på en fortsätt-knapp. Om du inte ser en fortsätt-knapp. Gör om importen med en kortare tidsgräns.";
$pgv_lang["upload_replacement"]		="Ladda upp ersättningsfil";
$pgv_lang["about_user"]					= "Du måste först skapa din administratörsanvändare. Denna användare kommer att ha rättigheter att uppdatera konfigurationsfiler, att se privata data och skapa andra användare.";
$pgv_lang["access"]						= "Access";
$pgv_lang["add_gedcom"]			= "Lägg till GEDCOM-fil";
$pgv_lang["add_new_gedcom"]		= "Skapa ny GEDCOM-fil";
$pgv_lang["add_new_language"]			= "Lägg till filer och inställningar för ett nytt språk";
$pgv_lang["add_user"]					= "Lägg till en ny användare";
$pgv_lang["admin_gedcom"]		= "Administrera GEDCOM";
$pgv_lang["admin_gedcoms"]				= "Klicka här för att administrera GEDCOM-filer";
$pgv_lang["admin_geds"]				= "Data och GEDCOM-administration";
$pgv_lang["admin_info"]				= "Information";
$pgv_lang["admin_site"]				= "Sajtadministration";
$pgv_lang["admin_user_warnings"]		= "Ett eller flera användarkonton har varningar";
$pgv_lang["admin_verification_waiting"] = "Användarkonton som väntar på att verifieras av administratören";
$pgv_lang["administration"]		= "Administration";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]		= "Tillåt byte av GEDCOM";
$pgv_lang["ALLOW_USER_THEMES"]			= "Tillåt användare att välja sitt eget tema";
$pgv_lang["ansi_encoding_detected"]	= "ANSIkodning upptäckt i filen. PhpGedView fungerar bäst med teckenkodningen UTF-8.";
$pgv_lang["ansi_to_utf8"]		= "Konvertera denna ANSI(iso-8859-1) kodade GEDCOM till UTF-8?";
$pgv_lang["apply_privacy"]			= "Tillämpa integritetsinställningar?";
$pgv_lang["back_useradmin"]				= "Tillbaka till användaradministration";
$pgv_lang["bytes_read"]			= "Bytes lästa:";
$pgv_lang["can_admin"]					= "Användare kan administrera";
$pgv_lang["can_edit"]					= "Accessnivå";
$pgv_lang["change_id"]				= "Ändra person ID till:";
$pgv_lang["choose_priv"]			= "Välj integritetsnivå:";
$pgv_lang["cleanup_places"]		= "Städa orter";
$pgv_lang["cleanup_users"]				= "Rensa bland användare";
$pgv_lang["click_here_to_continue"]		= "Klicka här för att fortsätta.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Klicka här för att gå till antavlan.";
$pgv_lang["comment"]			= "Administratörens kommentarer om användaren";
$pgv_lang["comment_exp"]			= "Adminstratörvarning utfärdad den";
$pgv_lang["config_help"]						= "Konfigurationshjälp";
$pgv_lang["config_still_writable"]				= "Din <i>config.php</i> fil är fortfarande skrivbar. För att öka säkerheten bör du sätta rättigheterna för denna fil till endast läsbar när du har konfigurerat färdigt sajten.";
$pgv_lang["configuration"]		= "Konfiguration";
$pgv_lang["configure"]							= "Konfigurera PhpGedView";
$pgv_lang["configure_head"]						= "PhpGedView-konfiguration";
$pgv_lang["confirm_gedcom_delete"]				= "Är du säker på att du vill radera denna GEDCOM-fil";
$pgv_lang["confirm_user_delete"]= "Är det säkert att du vill ta bort denna användare";
$pgv_lang["create_user"]		= "Skapa ny användare";
$pgv_lang["current_users"]						= "Användarlista";
$pgv_lang["daily"]								= "Daglig";
$pgv_lang["dataset_exists"]		= "En GEDCOM-fil med detta namn är redan importerad i databasen.";
$pgv_lang["unsync_warning"] 					= "GEDCOM-filen är <i>inte</i> synkroniserad med databasen. Den innehåller kanske inte den senaste datan. För att åter-importera från databasen istället för från filen så ska du först ladda ner och sedan ladda upp igen.  ";
$pgv_lang["date_registered"]					= "Registreringsdatum";
$pgv_lang["day_before_month"]		= "Dag före månad (DD MM ÅÅÅÅ)";
$pgv_lang["DEFAULT_GEDCOM"]						= "Standard-GEDCOM";
$pgv_lang["default_user"]						= "Skapa normal-administratörsanvändaren.";
$pgv_lang["del_gedrights"]						= "GEDCOM är inte längre aktiv, tabort användarreferenser.";
$pgv_lang["del_proceed"]						= "Fortsätt";
$pgv_lang["del_unvera"]							= "Användare är inte verifierade av administratören.";
$pgv_lang["del_unveru"]							= "Användare har inte verifierat sig inom 7 dagar.";
$pgv_lang["do_not_change"]			= "Ändra inte";
$pgv_lang["download_gedcom"]	= "Ladda ner GEDCOM-fil";
$pgv_lang["download_here"]						= "Klicka här för att ladda ner filer.";
$pgv_lang["download_note"]		= "OBS! Stora databaser kan ta lång tid att bearbeta innan de laddas ner. Om PHP tar slut innan nedladdningen är klar kanske den nedladdade filen inte är komplett.<br /><br />För att säkerställa att filen laddades ner korrekt, kontrollera att den sista raden i en fil i GEDCOM-format är <b>0&nbsp;TRLR</b> eller att den sista raden i en fil i XML-format är <b>&lt;/database&gt;</b>. Dessa filer är text; du kan använda vilken lämplig textredigerare som helst, men se till att <u>inte</u> sparar den nedladdade filen efter att du har inspekterat den.<br /><br />I allmänhet kan det ta så mycket tid att ladda ner som det tog att importera din ursprungliga GEDCOM-fil.";
$pgv_lang["editaccount"]		= "Tillåt användaren att redigera sin kontoinformation";
$pgv_lang["empty_dataset"]		= "Vill du radera den gamla datan och ersätta den med den nya datan?";
$pgv_lang["empty_lines_detected"]	= "Tomma rader upptäcktes i din GEDCOM-fil. Vid städning kommer dessa tomma rader att tas bort.";
$pgv_lang["enable_disable_lang"]				= "Konfigurera stödda språk";
$pgv_lang["error_ban_server"]       = "Felaktig IPadress.";
$pgv_lang["error_delete_person"]    = "Du måste välja person vars länk ska raderas.";
$pgv_lang["error_header_write"]	= "GEDCOM-filen, <b>#GEDCOM#</b>, är inte skrivbar. Kontrollera fil- och access-rättigheter.";
$pgv_lang["error_remove_site"]					= "Fjärrservern kunde inte tas bort.";
$pgv_lang["error_remove_site_linked"]			= "Fjärrservern kunde inte tas bort eftersom listan över anslutningar inte är tom.";
$pgv_lang["error_remote_duplicate"]				= "Den här fjärradatabasen finns redan i listan som <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]	= "Kunde inte logga in på sajten";
$pgv_lang["error_url_blank"]		= "Lämna inte sajt titel eller URL tom";
$pgv_lang["error_view_info"]        = "Du måste välja personen som du vill visa information om.";
$pgv_lang["example_date"]			= "Exempel på ogiltigt datum från din GEDCOM-fil:";
$pgv_lang["example_place"]			= "Exempel på en felaktig ort från din GEDCOM:";
$pgv_lang["fbsql"]								= "FrontBase";
$pgv_lang["found_record"]		= "Hittade poster";
$pgv_lang["ged_download"]						= "Ladda ner";
$pgv_lang["ged_import"]			= "Importera";
$pgv_lang["ged_export"]							= "Exportera";
$pgv_lang["ged_check"] 							= "Kontrollera";
$pgv_lang["gedcom_adm_head"]					= "GEDCOM-administration";
$pgv_lang["gedcom_config_write_error"]			= "FEL!!!<br />Kunde inte skriva till filen <i>#GLOBALS[whichFile]#</i>.Kontrollera att filen har skrivrättighter.";
$pgv_lang["gedcom_downloadable"] 	= "Denna GEDCOM-fil är nerladdningsbar över internet!<br />Var vänlig läs Säkerhetssektionen i <a href=\"readme.txt\">readme.txt</a> för att rätta till problemet";
$pgv_lang["gedcom_file"]		= "GEDCOM-fil:";
$pgv_lang["gedcom_not_imported"]				= "Denna GEDOM-fil har inte blivit importerad ännu.";
$pgv_lang["ibase"]								= "Interbase";
$pgv_lang["ifx"]								= "Informix";
$pgv_lang["img_admin_settings"]	= "Ändra bildmanipuleringskonfigurationen";
$pgv_lang["autoContinue"]						= "Tryck på knappen «fortsätt» automatiskt";
$pgv_lang["import_complete"]	= "Importen är färdig";
$pgv_lang["import_options"]		= "Importeringsval";
$pgv_lang["import_progress"]	= "Import framsteg...";
$pgv_lang["import_statistics"]	= "Importeringsstatistik";
$pgv_lang["import_time_exceeded"]	= "Exekveringstidens gräns nåddes. Klicka på <b>fortsätt</b> nedan för att fortsätta importera GEDCOM-filen.";
$pgv_lang["inc_languages"]				= "Språk";
$pgv_lang["INDEX_DIRECTORY"]					= "Indexkatalog";
$pgv_lang["invalid_dates"]			= "Upptäckte ogiltigt datumformat, vid upprensning kommer formatet att ändras till DD MMM ÅÅÅÅ (t.ex. 1 JAN 2004).";
$pgv_lang["BOM_detected"] 						= "Ett Byte Order Mark(BOM) hittades i början av filen. Denna speciella kod kommer att tas bort vid rensning.";
$pgv_lang["invalid_header"]		= "Upptäckt rader före GEDCOM-headern <b>0&nbsp;HEAD</b>. Dessa rader kommer att raderas vid städning.";
$pgv_lang["label_added_servers"]	= "Lagt till server";
$pgv_lang["label_banned_servers"]   = "Förbjud sajter";
$pgv_lang["label_families"]         = "Familjer";
$pgv_lang["label_gedcom_id2"]       = "DatabasID:";
$pgv_lang["label_individuals"]      = "Personer";
$pgv_lang["label_manual_search_engines"]   = "Markera manuellt Sökmotor";
$pgv_lang["label_new_server"]       = "Lägg till ny sajt";
$pgv_lang["label_password_id"]		= "Lösenord";
$pgv_lang["label_server_info"]      = "Alla personer som är länkade från andra sajter:";
$pgv_lang["label_server_url"]       = "Sajt URL/IP";
$pgv_lang["label_username_id"]		= "Användarnamn";
$pgv_lang["label_view_local"]       = "Visa lokal information om person";
$pgv_lang["label_view_remote"]      = "Visa inforamtion från annan sajt om person";
$pgv_lang["LANG_SELECTION"] 					= "Stödda språk";
$pgv_lang["LANGUAGE_DEFAULT"]					= "Du har inte konfigurerat språken som din sajt ska stödja.<br />PhpGedView kommer att använda sina standardinställningar.";
$pgv_lang["last_login"]							= "Senast inloggad";
$pgv_lang["lasttab"]							= "Senast besökta flik för personer";
$pgv_lang["leave_blank"]						= "Lämna lösenordsfältet tomt om du vill behålla det nuvarande lösenordet.";
$pgv_lang["link_manage_servers"]    = "Hantera sajter";
$pgv_lang["logfile_content"]	= "Innehåll i loggfil";
$pgv_lang["macfile_detected"]	= "Macintosh fil upptäckt. Filen kommer att konverteras till en DOS-fil vid städning.";
$pgv_lang["mailto"]								= "Epost till länk";
$pgv_lang["merge_records"]      = "Slå ihop poster";
$pgv_lang["message_to_all"]						= "Skicka meddelande till alla användare";
$pgv_lang["messaging"]							= "PhpGedView intern meddelandehantering";
$pgv_lang["messaging2"]							= "Intern meddelandehantering med epost";
$pgv_lang["messaging3"]							= "Epost";
$pgv_lang["month_before_day"]		= "Månad före dag (MM DD ÅÅÅÅ)";
$pgv_lang["monthly"]							= "Månatlig";
$pgv_lang["msql"]								= "Mini SQL";
$pgv_lang["mssql"]								= "Microsoft SQL server";
$pgv_lang["mysql"]								= "MySQL";
$pgv_lang["never"]								= "Aldrig";
$pgv_lang["no_logs"]							= "Stäng av loggning";
$pgv_lang["no_messaging"]						= "Ingen kontaktmetod";
$pgv_lang["oci8"]								= "Oracle 7+";
$pgv_lang["page_views"]							= "&nbsp;&nbsp;Sidvisningar under&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "Genomför GEDCOM-validering...";
$pgv_lang["pgsql"]								= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] 			= "FEL!!! Kan inte skriva till PhpGedViews konfigurationfil. Kontrollera fil och katalogrättigheter och försök igen.";
$pgv_lang["PGV_MEMORY_LIMIT"]					= "Minnesgräns";
$pgv_lang["PGV_SESSION_SAVE_PATH"]				= "Sessions sökväg för att spara sessionsinformations";
$pgv_lang["PGV_SESSION_TIME"]					= "Sessionstidsgräns";
$pgv_lang["PGV_SIMPLE_MAIL"] 					= "Använd enkel eposthuvud i externa epost";
$pgv_lang["PGV_SMTP_ACTIVE"]					= "Använd SMTP för att skicka externa mejl";
$pgv_lang["PGV_SMTP_HOST"]						= "Utgående server (SMTP) namn";
$pgv_lang["PGV_SMTP_HELO"]						= "Skickar domännamn";
$pgv_lang["PGV_SMTP_PORT"]						= "SMTP-port";
$pgv_lang["PGV_SMTP_AUTH"]						= "Använd namn och lösenord";
$pgv_lang["PGV_SMTP_AUTH_USER"]					= "Användarnamn";
$pgv_lang["PGV_SMTP_AUTH_PASS"]					= "Lösenord";
$pgv_lang["PGV_SMTP_SSL"]						= "Säker anslutning";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Avsändarens namn";
$pgv_lang["PGV_STORE_MESSAGES"]					= "Tillåt meddelande att sparas online";
$pgv_lang["phpinfo"]				= "PHP Info";
$pgv_lang["place_cleanup_detected"]	= "Felaktig ortskodning upptäckt. Dessa fel bör rättas till. Följande prov visar den felaktiga orten som upptäcktes:";
$pgv_lang["please_be_patient"]	= "Var god vänta...";
$pgv_lang["privileges"]							= "Rättigheter";
$pgv_lang["reading_file"]		= "Läser GEDCOM-fil";
$pgv_lang["readme_documentation"]	= "README-dokumentation";
$pgv_lang["remove_ip"] 			= "Tabort IP-adress";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 	= "Administratören behöver godkänna nya användarregistreringar";
$pgv_lang["review_readme"]						= "Du bör läsa igenom <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> filen innan du fortsätter med konfigureringen av phpGedView.";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;sekunder";
$pgv_lang["select_an_option"]	= "Välj alternativ nedan:";
$pgv_lang["SERVER_URL"]							= "PhpGedView URL";
$pgv_lang["show_phpinfo"]						= "Visa PHP informationssida";
$pgv_lang["siteadmin"]				= "Sajt-administratör";
$pgv_lang["sqlite"]								= "SQLite";
$pgv_lang["sybase"]								= "Sybase";
$pgv_lang["sync_gedcom"]						= "Synkronisera användarinställningar med GEDCOM-data";
$pgv_lang["system_time"]						= "Nuvarande servertid:";
$pgv_lang["user_time"]							= "Nuvarande användartid:";
$pgv_lang["TBLPREFIX"]							= "Prefix för databastabellnamn";
$pgv_lang["themecustomization"]					= "Temaanpassning";
$pgv_lang["time_limit"]				= "Tidsgräns:";
$pgv_lang["title_manage_servers"]   = "Hantera sajter";
$pgv_lang["title_view_conns"]       = "Visa kopplingar";
$pgv_lang["translator_tools"]					= "Översätningsverktyg";
$pgv_lang["update_myaccount"]	= "Uppdatera mitt konto";
$pgv_lang["update_user"]		= "Uppdatera användarkonto";
$pgv_lang["upload_gedcom"]		= "Ladda upp GEDCOM-fil";
$pgv_lang["USE_REGISTRATION_MODULE"]			= "Tillåt besökare att registera ett användarkonto";
$pgv_lang["user_auto_accept"]		= "Acceptera automatiskt ändringar gjorda av denna användare";
$pgv_lang["user_contact_method"]= "Föredragen kontaktmetod";
$pgv_lang["user_create_error"]	= "Går inte att skapa användare.  Var snäll gå tillbaka och försök igen.";
$pgv_lang["user_created"]		= "Ny användare skapad.";
$pgv_lang["user_default_tab"]	= "Den flik som visas som standard på ansedelsidan";
$pgv_lang["user_path_length"]					= "Maximal relationssekretess sökvägslängd";
$pgv_lang["user_relationship_priv"]				= "Begränsa tillgång till besläktade personer";
$pgv_lang["users_admin"]						= "Sajtadministratörer";
$pgv_lang["users_gedadmin"]						= "GEDCOM-Administratörer";
$pgv_lang["users_total"]						= "Totalt antal användare";
$pgv_lang["users_unver"]						= "Ej verifierad av användare";
$pgv_lang["users_unver_admin"]					= "Ej verifierad av administratör";
$pgv_lang["usr_deleted"]						= "Radera användare:";
$pgv_lang["usr_idle"]							= "Antal månader sedan senaste inloggning innan ett användarkonto anses inaktivt: ";
$pgv_lang["usr_idle_toolong"]					= "Användarkonto har varit inaktivt för länge: ";
$pgv_lang["usr_no_cleanup"]						= "Ingenting hittades som kräver uppstädning";
$pgv_lang["usr_unset_gedcomid"]					= "Tabort GEDCOM ID för ";
$pgv_lang["usr_unset_rights"]					= "Tabort GEDCOM-rättigheter för ";
$pgv_lang["usr_unset_rootid"]					= "Tabort Root-ID för ";
$pgv_lang["valid_gedcom"]			= "Godkänd GEDCOM-fil upptäckt. Ingen rensning behövs.";
$pgv_lang["validate_gedcom"]	= "Validera GEDCOM-filen";
$pgv_lang["verified"]			= "Användaren verifierade sig själv";
$pgv_lang["verified_by_admin"]	= "Användare godkänd av admin";
$pgv_lang["verify_gedcom"]		= "Verifiera GEDCOM";
$pgv_lang["verify_upload_instructions"]	= "En GEDCOM-fil med samma namn har hittats. Om du väljer att fortsätta kommer den gamla GEDCOM-filen att ersättas med filen du laddade upp och importprocessen börjar igen. Om du väljer att avbryta förblir den gamla GEDCOM oförändrad.";
$pgv_lang["view_changelog"]		= "Visa changelog.txt-filen";
$pgv_lang["view_logs"]			= "Visa loggfiler";
$pgv_lang["view_readme"]			= "Visa readme.txt-fil";
$pgv_lang["visibleonline"]		= "Synlig för andra användare när du är online";
$pgv_lang["visitor"]			= "Besökare";
$pgv_lang["warn_users"]			= "Användare med varning";
$pgv_lang["weekly"]				= "Veckovis";
$pgv_lang["welcome_new"]		= "Välkommen till din nya PhpGedView sajt.";
$pgv_lang["yearly"]				= "Årlig";
$pgv_lang["admin_OK_subject"]					= "Godkännande av konto på #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";
$pgv_lang["admin_OK_message"]					= "Administratören på PhpGedViewsajten #PGV_SERVER_NAME##PGV_SCRIPT_PATH# har godkänt din ansökan om ett konto.\r\n\r\nDu kan nu logga in genom att följande link: #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";

$pgv_lang["batch_update"]="Utför batchuppdateringar / redigeringar på din GEDCOM";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     = "GEDCOM kontroll";
$pgv_lang["gedcheck_text"]= 	"Denna modul kontrollera formatet i GEDCOM-filen mot <a \"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM Specifikationen</a>. Den kollar också efter ett antal vanliga fel i din data.<br /><br />Observera att det finns flera versioner, utökningar och variationer på specifikationen så du bör inte oroa dig för andra fel en de som är flaggade kritiska. Förklaringen till rad-för-rad felen finns i specifikationen, så kolla den först innan du frågar efter hjälp.";
$pgv_lang["gedcheck_sync"] = "Ändringar som görs i databasen synkroniseras inte med filen #GLOBALS[ged]#. Filinnehållet kan vara föråldrat. Du kan synkronisera den med databasen nu genom att <b><a \"#GLOBALS[ged_link]#\">exportera</a></b>.";
$pgv_lang["gedcheck_nothing"] = "Inga fel hittades på denna nivå.";
$pgv_lang["level"]        = "Nivå";
$pgv_lang["critical"]     = "Kritiskt";
$pgv_lang["error"]        = "Fel";
$pgv_lang["warning"]      = "Varning";
$pgv_lang["info"]         = "Info";
$pgv_lang["open_link"]    = "Öppna länkar med";
$pgv_lang["same_win"]     = "Samma flik/fönster";
$pgv_lang["new_win"]      = "Ny flik/fönster";
$pgv_lang["context_lines"]= "Rader med GEDCOM-innehåll";
$pgv_lang["all_rec"]      = "Alla poster";
$pgv_lang["err_rec"]      = "Poster med fel";
$pgv_lang["missing"]      = "fattas";
$pgv_lang["multiple"]     = "multipla";
$pgv_lang["invalid"]      = "felaktig";
$pgv_lang["too_many"]     = "för många";
$pgv_lang["too_few"]      = "för få";
$pgv_lang["no_link"]      = "länkar inte tillbaka";
$pgv_lang["data"]         = "data";
$pgv_lang["see"]          = "se";
$pgv_lang["noref"]        = "Det finns inga refernser till detta objekt";
$pgv_lang["tag"]          = "tag";
$pgv_lang["spacing"]      = "mellanrum";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Avancerade namnfakta";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Avancerade ortsnamnfakta";
$pgv_lang["SURNAME_TRADITION"]		= "Efternamnstradition";
$pgv_lang["tradition_spanish"]		= "Spanska";
$pgv_lang["tradition_portuguese"]	= "Portugisiska";
$pgv_lang["tradition_icelandic"]	= "Isländska";
$pgv_lang["tradition_paternal"]		= "Faders";
$pgv_lang["tradition_polish"]		= "Polsk";
$pgv_lang["tradition_none"]			= "Inga";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"1 år";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# år";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# år";
$pgv_lang["elapsedMonth1"]	=	"1 månad";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# månader";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# månader";
$pgv_lang["elapsedDay1"]	=	"1 dag";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# dagar";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# dagar";
$pgv_lang["elapsedHour1"]	=	"1 timme";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# timmar";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# timmar";
$pgv_lang["elapsedMinute1"]	=	"1 minut";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minuter";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minuter";

$pgv_lang["elapsedAgo"]		=	"För #pgv_lang[global_string1]#";

?>

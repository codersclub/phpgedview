<?php
/**
 * Swedish Language file for PhpGedView.
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
 * @package PhpGedView
 * @author Patrik Hansson
 * @translator Google Translate
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["birth_M"]				= "#name#s födelsedag";		// For male persons
$pgv_lang["birth_F"]				= "#name#s födelsedag";		// For female persons
$pgv_lang["born_in_M"]				= "Född den #date# i #place#";		// For male persons
$pgv_lang["born_in_F"]				= "Född den #date# i #place#";		// For female persons
$pgv_lang["born_on_M"]				= "Född den #date#";		// For male persons
$pgv_lang["born_on_F"]				= "Född den #date#";		// For female persons
$pgv_lang["death_M"]				= "Årsdagen för #name#s död";		// For male persons
$pgv_lang["death_F"]				= "Årsdagen för #name#s död";		// For female persons
$pgv_lang["died_in_M"]				= "Död den #date# i #place#";		// For male persons
$pgv_lang["died_in_F"]				= "Död den #date# i #place#";		// For female persons
$pgv_lang["died_on_M"]				= "Död den #date#";		// For male persons
$pgv_lang["died_on_F"]				= "Död den #date#";		// For female persons
$pgv_lang["anniversary_of"]			= "Bröllopsdag för #husband# och #wife#";
$pgv_lang["married_in"]				= "Gift den #date# i #place#";
$pgv_lang["married_on"]				= "Gift den #date#";
$pgv_lang["clustrmaps_locations"]	= "Platser av besökare på den här sidan";
$pgv_lang["gedcomid"]				= "GEDCOM INDI-post ID";
$pgv_lang["sortby"]					= "Sekvens";
$pgv_lang["exact"]					= "Exakt";
$pgv_lang["begins_with"]			= "Börjar med";
$pgv_lang["contains"]				= "Innehåller";
$pgv_lang["sounds_like"]			= "Låter som";
$pgv_lang["advanced_search"] 		= "Avancerad sökning";
$pgv_lang["more_fields"]			= "Lägg till fler fält";
$pgv_lang["install_step_8"] 		= "Komma igång";
$pgv_lang["parent_family"]			= "Föräldrars familj";
$pgv_lang["step_parent_family"]		= "Familj med styvförälder";
$pgv_lang["immediate_family"]		= "Närmaste familj";

$pgv_lang["load_full_tree"]			= "Visa det här släktträdet i helsides interaktiva släktträd";
$pgv_lang["hide_show_spouses"]		= "Visa eller dölj flera makar";
$pgv_lang["interactive_tree"]		= "Interaktiva släktträd";
$pgv_lang["example"]				= "Exempel:";
$pgv_lang["tree"]					= "Släktträd";
$pgv_lang["ellipsis"]				= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]			= "Visa okänt kön";
$pgv_lang["count"]					= "Antal";
$pgv_lang["age_differences"]		= "Visa åldersskillnad";
$pgv_lang["multi_site_search"] 		= "Multisajtsökning";
$pgv_lang["switch_lifespan"]		= "Visa livslängdsdiagram";
$pgv_lang["switch_timeline"]		= "Visa tidslinjediagram";
$pgv_lang["differences"]			= "Skillnader";
$pgv_lang["charts_block"]			= "Diagram";
$pgv_lang["charts_block_descr"]		= "Blocket «Diagram» tillåter dig att placera ett diagram på välkomst eller min Gedview portal-sidan. Du kan konfigurera blockett för att visa anträd, stamträd eller timglasdiagrammet. Du kan också välja startperson.";
$pgv_lang["charts_click_box"]		= "Klicka på någon av rutorna för att få mer information om personen.";
$pgv_lang["chart_type"]				= "Diagramtyp";
$pgv_lang["changedate1"]			= "Slutet på datumblockett för andringsdatam";
$pgv_lang["changedate2"]			= "Start för datumblocket för ändringsdatum";
$pgv_lang["search_place_word"]		= "Endast hela ord";
$pgv_lang["invalid_search_input"] 	= "Var vänlig och skriv in ett förnamn, efternamn eller ort tillsammans med ett årtal";
$pgv_lang["duplicate_username"] 	= "En avändare «#username#» finns redan. Välj ett annat användarnamn.";
$pgv_lang["usercreate_fail"]		= "Användaren «#username#» kunde inte läggas till i systemet.";
$pgv_lang["cache_life"]				= "Cachefils livslängd";
$pgv_lang["genealogy"]				= "genealogi";
$pgv_lang["activate"]				= "Aktivera";
$pgv_lang["deactivate"]				= "Avaktivera";
$pgv_lang["play_stop"]				= "Start / Stop";
$pgv_lang["random_media_start_slide"]	= "Starta bildspel när sidan laddas?";
$pgv_lang["random_media_ajax_controls"]	= "Visa bildspelskontroller?";
$pgv_lang["description"]		= "Beskrivning";
$pgv_lang["current_dir"]			= "Nuvarande mapp: ";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Visa id nummer intill namnet";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Visa markerade bilder i personboxar";
$pgv_lang["view_img_details"]		= "Visa bilddetaljer";
$pgv_lang["server_folder"]				= "Mappnamn på servern";
$pgv_lang["medialist_recursive"]	= "Lista filer i undermapper";
$pgv_lang["medialist_unlinked"]		= "Visa endast icke-länkat media";
$pgv_lang["medialist_current_dir"]	= "Aktuell underkatalog";
$pgv_lang["media_options"]			= "Mediaval";
$pgv_lang["confirm_password"]	= "Du måste bekräfta lösenordet.";
$pgv_lang["enter_email"]		= "Du måste skriva in en e-postadress.";
$pgv_lang["enter_fullname"]		= "Du måste ange användarens fullständiga namn.";
$pgv_lang["name"]				= "Namn";
$pgv_lang["names"]					= "Namn";
$pgv_lang["children"]			= "Barn";
$pgv_lang["lchildren"]				= "barn";
$pgv_lang["child"]				= "Barn";
$pgv_lang["grandchildren"]			= "barnbarn";
$pgv_lang["family"]				= "Familj";
$pgv_lang["as_child"]			= "Familj med föräldrar";
$pgv_lang["shared_note_menu"]		= "Alternativ för delad anteckning";
$pgv_lang["source_menu"]			= "Val för källor";
$pgv_lang["repo_menu"]				= "Alternativ för arkiv";
$pgv_lang["other_records"]		= "Poster som länkar till denna källa";
$pgv_lang["other_repo_records"]		= "Poster som länkar till detta arkiv";
$pgv_lang["repo_info"]				= "Arkivinformation";
$pgv_lang["enter_terms"]		= "Ange sökkriterier";
$pgv_lang["search_asso_label"]		= "Associationer";
$pgv_lang["search_asso_text"]		= "Visa relaterade personer/familjer";
$pgv_lang["search_DM"]				= "Daitch-Mokotoff";
$pgv_lang["search_fams"]			= "Familjer";
$pgv_lang["search_gedcom"]		= "Sök GEDCOM-fil(er)";
$pgv_lang["search_geds"]			= "GEDCOM-filer att söka i";
$pgv_lang["search_indis"]			= "Personer";
$pgv_lang["search_notes"]			= "Delade anteckningar";
$pgv_lang["search_inrecs"]			= "Sök efter";
$pgv_lang["search_prtall"]			= "Alla namn";
$pgv_lang["search_prthit"]			= "Namn som hittats";
$pgv_lang["results_per_page"]		= "Resultat per sida";
$pgv_lang["firstname_search"]	= "Förnamn";
$pgv_lang["search_prtnames"]		= "Personers namn att skriva ut:";
$pgv_lang["other_searches"]			= "Andra sökningar";
$pgv_lang["add_to_cart"]		= "Lägg till i urklippskorg";
$pgv_lang["view_gedcom"]		= "Visa GEDCOM-post";
$pgv_lang["welcome"]				= "Välkommen";
$pgv_lang["son"]				= "Son";
$pgv_lang["daughter"]			= "Dotter";
$pgv_lang["welcome_page"]		= "Välkomstsidan";
$pgv_lang["editowndata"]		= "Mitt konto";
$pgv_lang["user_admin"]			= "Användaradministration";
$pgv_lang["manage_media"]		= "Hantera media";
$pgv_lang["search_general"]			= "Generell sökning";
$pgv_lang["clipping_privacy"]		= "Vissa delar kunde inte läggas till på grund av integritetsrestriktioner";
$pgv_lang["chart_new"]				= "Släkttavla";
$pgv_lang["loading"]				= "Laddar...";
$pgv_lang["clear_chart"]			= "Rensa tavla";
$pgv_lang["file_information"]		= "Filinformation";
$pgv_lang["choose_file_type"]		= "Ändra filtyp";
$pgv_lang["add_individual_by_id"]		= "Lägg till person via ID";
$pgv_lang["advanced_options"]		= "Avancerade inställningar";
$pgv_lang["zip_files"]				= "Komprimera (zip) filerna";
$pgv_lang["include_media"]			= "Inkludera Media (Zippa filerna automatiskt)";
$pgv_lang["roman_surn"]				= "Romaniserat efternamn";
$pgv_lang["roman_givn"]				= "Romaniserat förnamn";
$pgv_lang["include"]				= "Inkludera:";
$pgv_lang["page_x_of_y"]				= "Sida #GLOBALS[currentPage]# av #GLOBALS[lastPage]#";
$pgv_lang["options"]			= "Inställningar:";
$pgv_lang["config_update_ok"]			= "Lyckad uppdatering av konfigurationsfil.";
$pgv_lang["page_size"]					= "Sidstorlek";
$pgv_lang["font"]					= "Typsnitt";
$pgv_lang["use_colors"]				= "Använd färger";
$pgv_lang["record_not_found"]			= "Det efterfrågade GEDCOM-posten kunde inte hittas. Detta kan ha orsakats av en länk till en person som inte finns eller en skadad GEDCOM-fil.";
$pgv_lang["result_page"]				= "Resultatsida";
$pgv_lang["edit_media"]					= "Redigera mediaartikel";
$pgv_lang["wiki_main_page"]			= "WIKI Huvudsida";
$pgv_lang["wiki_users_guide"]		= "WIKI Användarguide";
$pgv_lang["wiki_admin_guide"]		= "WIKI Administrationsguide";
$pgv_lang["no_search_for"]			= "Du måste välja något att söka efter.";
$pgv_lang["no_search_site"]			= "Du måste välja minst en annan sajt.";
$pgv_lang["search_sites"] 			= "Sajter att söka";
$pgv_lang["site_list"]				= "Sajt: ";
$pgv_lang["site_had"]				= " innehöll följande";
$pgv_lang["label_search_engine_detected"]  = "Sökmotorspindel upptäckt";

$pgv_lang["ex-spouse"] 				= "Ex-make/maka";
$pgv_lang["ex-wife"] 				= "Ex-fru";
$pgv_lang["ex-husband"] 			= "Ex-man";
$pgv_lang["noemail"] 				= "Adresser utan epost";
$pgv_lang["onlyemail"] 				= "Endast adresser med epost";
$pgv_lang["maxviews_exceeded"]		= "Det maximala antalet visade sidor har överstigits, försök igen senare.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Skicka meddelande till användare som inte loggat in på 6 månader";
$pgv_lang["broadcast_never_logged_in"]	= "Skicka meddelande till användare som aldrig loggat in";
$pgv_lang["stats_to_show"]			= "Välj vilken statistik som ska visas i detta blocket";
$pgv_lang["stat_avg_age_at_death"]	= "Medelålder vid död";
$pgv_lang["stat_longest_life"]		= "Person som levt längst";
$pgv_lang["stat_most_children"]		= "Familj med flest barn";
$pgv_lang["stat_average_children"]	= "Genomsnittligt antal barn per familj";
$pgv_lang["stat_events"]			= "Totalt antal händelser";
$pgv_lang["stat_media"]				= "Mediaobjekt";
$pgv_lang["stat_surnames"]			= "Totalt antal efternamn";
$pgv_lang["stat_users"]				= "Totalt antal användare";
$pgv_lang["no_family_facts"]		= "Inga fakta om denna familj.";
$pgv_lang["stat_males"]				= "Totalt antal män";
$pgv_lang["stat_females"]			= "Total antal kvinnor";
$pgv_lang["stat_unknown"]			= "Okänd";
$pgv_lang["stat_link"]				= "Visa statistik som diagram";
$pgv_lang["print_stat_link"]		= "Visa länk till statistikdiagram?";

$pgv_lang["sunday_1st"]				= "S";
$pgv_lang["monday_1st"]				= "M";
$pgv_lang["tuesday_1st"]			= "Ti";
$pgv_lang["wednesday_1st"]			= "O";
$pgv_lang["thursday_1st"]			= "To";
$pgv_lang["friday_1st"]				= "F";
$pgv_lang["saturday_1st"]			= "L";

$pgv_lang["jan_1st"]					= "Jan";
$pgv_lang["feb_1st"]					= "Feb";
$pgv_lang["mar_1st"]					= "Mar";
$pgv_lang["apr_1st"]					= "Apr";
$pgv_lang["may_1st"]					= "Maj";
$pgv_lang["jun_1st"]					= "Jun";
$pgv_lang["jul_1st"]					= "Jul";
$pgv_lang["aug_1st"]					= "Aug";
$pgv_lang["sep_1st"]					= "Sep";
$pgv_lang["oct_1st"]					= "Okt";
$pgv_lang["nov_1st"]					= "Nov";
$pgv_lang["dec_1st"]					= "Dec";

$pgv_lang["edit_source"]			= "Redigera källa";
$pgv_lang["edit_shared_note"]		= "Redigera delad anteckning";
$pgv_lang["familybook_chart"]		= "Familjebok";
$pgv_lang["family_of"]				= "Familj för&nbsp;";
$pgv_lang["descent_steps"]			= "Härstamning antal steg";

$pgv_lang["cancel"]					= "Avbryt";
$pgv_lang["cookie_help"]			= "Denna sajt använder cookies för att komma ihåg din inloggningsstatus.<br /><br />Cookies ser inte ut att vara tillåtna av din webläsare. Du måste tillåta cookies för att kunna använda denna sajt. Du kan läsa i webläsarens hjälpdokumentation för att få reda på hur du tillåter cookies.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]			= "Informationen om denna person är länkad ifrån en annan sajt.";
$pgv_lang["link_remote"]			= "Länka en person från en annan sajt";
//Add Remote Link
$pgv_lang["title_search_link"]  	= "Lägg till lokal länk";
$pgv_lang["label_site_url2"]		= "Sajt URL";
//new stuff

$pgv_lang["delete_family_confirm"]	= "Radering av familjen kommer att koppla loss alla personerna ifrån familjen men kommer att lämna alla personerna orörda. Är du säker på att du ska radera familjen?";
$pgv_lang["delete_family"]			= "Radera familj";
$pgv_lang["add_favorite"]			= "Lägg till en ny favorit";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Skriv en frivillig notering om denna favorit";
$pgv_lang["add_fav_or_enter_url"]	= "ELLER<br />Skriv in en URL och en titel";
$pgv_lang["add_fav_enter_id"]		= "Skriv in ett person-, familj- eller käll- id";
$pgv_lang["remove_child"]			= "Tabort detta barn från familjen";
$pgv_lang["link_new_husb"]		= "Lägg till en make för en existerande person";
$pgv_lang["link_new_wife"]		= "Lägg till en maka för en existerande person";
$pgv_lang["address_labels"]		= "Adressetikett";
$pgv_lang["filter_address"]		= "Visa adresser som innehåler:";
$pgv_lang["address_list"]		= "Adresslista";
$pgv_lang["index_edit_advice"]	= "Markera ett blockets namn, klicka sedan på en av pilikonerna för att flytta det markerade blockett i pilens riktning.";
$pgv_lang["changelog"]			= "Ändringar i #VERSION#";
$pgv_lang["html_block_descr"]	= "Detta är ett enkelt HTML-blocket som du kan sätta på dina sida för att lägga till valfri information i.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Skriv din titel här</b></p><br /><p>Klicka på konfigureraknappen";
$pgv_lang["html_block_sample_part2"]	= "för att ändra vad som skrivs här.</p>";
$pgv_lang["html_block_name"]	= "HTML-blocket";
$pgv_lang["htmlplus_block_name"]	= "Avancerad HTML";
$pgv_lang["htmlplus_block_descr"]	= "Detta är ett HTML-blocket som du kan placera på din sida för att lägga till vilken sorts meddelande som du helst. Du kan lägga in refernser till information från din GEDCOM i HTML-texten.";
$pgv_lang["htmlplus_block_templates"] = "Mall";
$pgv_lang["htmlplus_block_content"] = "Innehåll";
$pgv_lang["htmlplus_block_narrative"] = "Berättande stil";
$pgv_lang["htmlplus_block_custom"]	= "Special";
$pgv_lang["htmlplus_block_keyword"]	= "Nyckelordsexempel (Endast på engelska) ";
$pgv_lang["htmlplus_block_taglist"]	= "Taglista";
$pgv_lang["htmlplus_block_compat"]	= "Kompatibilitetsmod";
$pgv_lang["htmlplus_block_ui"]		= "Utökat gränssnitt";
$pgv_lang["htmlplus_block_current"]	= "Nuvarande";
$pgv_lang["htmlplus_block_default"]	= "Standard";
$pgv_lang["htmlplus_block_gedcom"]	= "Släktträd";
$pgv_lang["htmlplus_block_birth"]	= "födelse";
$pgv_lang["htmlplus_block_death"]	= "död";
$pgv_lang["htmlplus_block_marrage"]	= "vigsel";
$pgv_lang["htmlplus_block_adoption"]= "adoption";
$pgv_lang["htmlplus_block_burial"]	= "begravning";
$pgv_lang["htmlplus_block_census"]	= "census tillagd";
$pgv_lang["num_to_show"]		= "Antal objekt att visa";
$pgv_lang["days_to_show"]		= "Antal dagar att visa";
$pgv_lang["before_or_after"]	= "Placera räknare före eller efter namn?";
$pgv_lang["before"]				= "före";
$pgv_lang["after"]				= "efter";
$pgv_lang["config_block"]		= "Konfigurationsblocket";
$pgv_lang["enter_comments"]		= "Var vänlig och beskriv ditt förhållande till släkten i kommentarfältet.";
$pgv_lang["comments"]			= "Kommentarer";
$pgv_lang["child-family"]		= "Föräldrar och syskon";
$pgv_lang["spouse-family"]		= "Make/maka och barn";
$pgv_lang["direct-ancestors"]	= "Rakt nedstigande förfäder";
$pgv_lang["ancestors"]			= "Rakt nedstigande förfäder och deras familjer";
$pgv_lang["descendants"]		= "Stamtavla (ättlingar)";
$pgv_lang["choose_relatives"]	= "Välj släkting";
$pgv_lang["relatives_report"]	= "Släktrapport";
$pgv_lang["total_unknown"]			= "Okänd";
$pgv_lang["total_living"]		= "Totalt antal levande";
$pgv_lang["total_dead"]			= "Totalt antal döda";
$pgv_lang["total_not_born"]			= "Dödfödd";
$pgv_lang["remove_custom_tags"]	= "Ta bort PGV specialtaggar? (t.ex. _PGVU, _THUM)";
$pgv_lang["fams_with_surname"]	= "Familjer med efternamn #surname#";
$pgv_lang["support_contact"]	= "Kontakt för teknisk hjälp";
$pgv_lang["genealogy_contact"]	= "Genealogisk kontakt";
$pgv_lang["common_upload_errors"]	= "Detta fel beror troligen på att filen du försöker ladda upp är större än gränsen som är satt av ditt webhotell. Standardgränsen i PHP är 2 MB. Du kan kontakta ditt webhotell och försöka få dem att öka gränsen i php.ini-filen, eller kan du ladda upp filen via FTP. Använd <a href=\"uploadgedcom.php?action=add_form\"><b>#pgv_lang[add_gedcom]#</b></a> sidan för att lägga till en GEDCOM som blivit uppladdad via FTP.";
$pgv_lang["total_memory_usage"]	= "Total minnesanvändning:";
$pgv_lang["mothers_family_with"]= "Moderns familj med ";
$pgv_lang["fathers_family_with"]= "Faderns familj med ";
$pgv_lang["family_with"]		= "Familj med";
$pgv_lang["halfsibling"]		= "Halvsyskon";
$pgv_lang["halfbrother"]		= "Halvbror";
$pgv_lang["halfsister"]			= "Halvsyster";
$pgv_lang["family_timeline"]	= "Visa familj på tidslinje";
$pgv_lang["children_timeline"]	= "Visa barn på tidslinje";
$pgv_lang["other"]				= "Annan";
$pgv_lang["others"]					= "Andra";
$pgv_lang["sort_by_marriage"]	= "Sortera efter vigseldatum";
$pgv_lang["reorder_families"]	= "Ändra ordning på familjer";
$pgv_lang["indis_with_surname"]	= "Personer med efternamn #surname#";
$pgv_lang["first_letter_name"]		= "Välj en bokstav för att visa familjer vars namn börjar med bokstaven.";
$pgv_lang["first_letter_sfname"]	= "Välj en bokstav för att visa familjer där en make har ett förnamn som börjar med bokstaven.";
$pgv_lang["first_letter_iname"]		= "Välj en bokstav för att visa personer vars efternamn börjar med bokstaven.";
$pgv_lang["first_letter_fname"]	= "Välj bokstav för att visa personer vars namn börjar med den bokstaven.";
$pgv_lang["total_names"]		= "Antal namn";
$pgv_lang["total_changes"]			= "Antal ändringar";
$pgv_lang["total_links"]			= "Antal länkar";
$pgv_lang["top10_pageviews_nohits"]	= "Det finns för närvarande inga träffar att visa.";
$pgv_lang["top10_pageviews_msg"]	= "Räknarna måste vara igång i GEDCOM-filen för detta blocket att fungera.";
$pgv_lang["review_changes_descr"]	= "Blocket «Ej accepterade ändringar» visar en lista av poster, för användare med redigeringsrättighter, som har ändrats online som behöver kontrolleras och accepteras. Dessa ändringar väntar på att bli accepterade eller avslagna.<br /><br />Om detta blocket är aktiverad, kommer användare med acceptera rättigheter kommer att få ett mail om dagen med en notis om att det finns ändringar att kontrollera.";
$pgv_lang["review_changes_block"]	= "Ej accepterade ändringar";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Visa ändringar";
$pgv_lang["review_changes_body"]= "Onlineändringar har gjorts för en genealogisk databas. Dessa ändringar måste kontrolleras och accepteras innan de kommer att visas för alla användare. Var vänliga använd URL nedan för att komma till den sajt och logga in för att kontrollera ändringarna.";
$pgv_lang["show_pending"]		= "Visa väntande ändringar";
$pgv_lang["show_spouses"]		= "Visa make/makar";
$pgv_lang["quick_update_title"] = "Snabbuppdatering";
$pgv_lang["quick_update_instructions"] = "Denna sida tillåter dig att snabbt uppdatera information för en individ. Du behöver bara fylla i den inforamtion som är ny eller som har ändrats ifrån det som redan på sajten. Efter att din ändringar skickats kommer de att kontrolleras av en administratör före du kommer att kunna se den online.";
$pgv_lang["update_name"] 		= "Uppdatera namn";
$pgv_lang["update_fact"] 		= "Uppdatera en fakta";
$pgv_lang["update_fact_restricted"] = "Uppdatering av denna fakta är begränsad:";
$pgv_lang["select_fact"] 		= "Välj ett fakta...";
$pgv_lang["update_address"] 	= "Uppdatera adress";
$pgv_lang["top10_pageviews_descr"]	= "Blocket «Mest besökta artikel» visar de poster som har blivit besökta oftast. Detta blocket kräver att träffräknaren är aktiverad i GEDCOM-konfigurationsinställningen. ";
$pgv_lang["top10_pageviews"]	= "Mest besökta artikel";
$pgv_lang["top10_pageviews_block"]	= "Mest besökta artikel";
$pgv_lang["stepparent"]				= "Styvförälder";
$pgv_lang["stepdad"]			= "Styvfar";
$pgv_lang["stepmom"]			= "Styvmor";
$pgv_lang["stepsister"]			= "Styvsyster";
$pgv_lang["stepbrother"]		= "Styvbror";
$pgv_lang["fams_charts"]		= "Valmöjligheter för familjer";
$pgv_lang["indis_charts"]		= "Val för personer";
$pgv_lang["none"]					= "Inga";
$pgv_lang["facts"]					= "Fakta";
$pgv_lang["locked"]				= "Ändra inte";
$pgv_lang["privacy"]			= "Integritet";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]					= "?";
$pgv_lang["qm_ah"]				= "?";
$pgv_lang["page_help"]			= "Hjälp";
$pgv_lang["help_for_this_page"]	= "Hjälp för denna sida";
$pgv_lang["help_contents"]		= "Hjälpinnehåll";
$pgv_lang["show_context_help"]	= "Visa kontextuell hjälp";
$pgv_lang["hide_context_help"]	= "Göm kontextuell hjälp";
$pgv_lang["sorry"]				= "<b>Ursäkta, men vi har ännu inte gjort klart hjälptexten för denna sida eller sak</b>";
$pgv_lang["help_not_exist"]		= "<b>Hjälptext för denna sida eller artikel är inte tillgänglig än</b>";
$pgv_lang["var_not_exist"]		= "<span style=\"font-weight: bold\">Språkvariabeln existera inte. Var vänlig att rapportera detta eftersom det är en bug.</span>";
$pgv_lang["resolution"] 		= "Skärmupplösning";
$pgv_lang["menu"]				= "Meny";
$pgv_lang["header"]				= "Rubrik";
$pgv_lang["imageview"]			= "Bildvisare";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]			= "PhpGedView användarinloggning";
$pgv_lang["for_support"]		= "För teknisk support och information kontakta";
$pgv_lang["for_contact"]		= "För hjälp med släktfrågor kontakta";
$pgv_lang["for_all_contact"]	= "För teknisk support eller släktfrågor kontakta";
$pgv_lang["choose_username"]		= "Önskat användarnamn";
$pgv_lang["username"]			= "Användarnamn";
$pgv_lang["invalid_username"]	= "Användarnamn «#username#» innehåller ogiltiga tecken";
$pgv_lang["firstname"]				= "Förnamn";
$pgv_lang["lastname"]				= "Efternamn";
$pgv_lang["choose_password"]		= "Önskat lösenord";
$pgv_lang["password"]			= "Lösenord";
$pgv_lang["confirm"]			= "Bekräfta lösenord";
$pgv_lang["login"]				= "Logga in";
$pgv_lang["logout"]				= "Logga ut";
$pgv_lang["admin"]				= "Administration";
$pgv_lang["logged_in_as"]		= "Inloggad som";
$pgv_lang["my_pedigree"]		= "Mina anor";
$pgv_lang["my_indi"]			= "Min personliga post";
$pgv_lang["yes"]				= "Ja";
$pgv_lang["no"]					= "Nej";
$pgv_lang["change_theme"]		= "Ändra tema";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Antavla";
$pgv_lang["gen_ped_chart"]		= "#PEDIGREE_GENERATIONS# generationers antavla";
$pgv_lang["generations"]		= "Generationer";
$pgv_lang["view"]				= "Visa";
$pgv_lang["fam_spouse"]			= "Familj med make/maka";
$pgv_lang["rootid"] 				= "Stamtavla startperson";
$pgv_lang["root_person"]		= "ID för startperson";
$pgv_lang["hide_details"]		= "Göm detaljer";
$pgv_lang["show_details"]		= "Visa detaljer";
$pgv_lang["zoom_box"]			= "Zomma in/ut denna ruta";
$pgv_lang["orientation"]		= "Orientering";
$pgv_lang["portrait"]			= "Stående";
$pgv_lang["landscape"]			= "Liggande";
$pgv_lang["landscape_top"]			= "Äldsta på toppen";
$pgv_lang["landscape_down"]			= "Äldsta längst ner";
$pgv_lang["start_at_parents"]	= "Starta vid föräldrarna";
$pgv_lang["charts"]				= "Tavlor";
$pgv_lang["lists"]				= "Listor";
$pgv_lang["box_width"] 			= "Boxvidd";
$pgv_lang["random_surn"]			= "Slumpmässigt efternamn";
$pgv_lang["generation_number"]		= "Generationer";
$pgv_lang["variable"]				= "Variabel";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Kan inte hitta familj med id";
$pgv_lang["unable_to_find_record"]	= "Kan inte hitta post med id";
$pgv_lang["title"]				= "Titel";
$pgv_lang["living"]				= "Lever";
$pgv_lang["private"]			= "Privat";
$pgv_lang["birth"]				= "Född";
$pgv_lang["death"]				= "Död";
$pgv_lang["descend_chart"]		= "Stamtavla (ättlingar)";
$pgv_lang["individual_list"]	= "Personer";
$pgv_lang["family_list"]		= "Familjer";
$pgv_lang["branch_list"]			= "Grenar";
$pgv_lang["source_list"]		= "Källor";
$pgv_lang["shared_note_list"]		= "Delade anteckningar";
$pgv_lang["place_list"]			= "Orter";
$pgv_lang["place_list_aft"] 	= "Efter ortshierarki ";
$pgv_lang["media_list"]			= "Multimedialista";
$pgv_lang["repo_list"]				= "Arkivlista";
$pgv_lang["search"]				= "Sök";
$pgv_lang["clippings_cart"]		= "Släktträdsurklippskorg";
$pgv_lang["print_preview"]		= "Utskriftsvänlig version";
$pgv_lang["cancel_preview"]		= "Tillbaka till normal vy";
$pgv_lang["change_lang"]		= "Ändra språk";
$pgv_lang["language"]			= "Språk";
$pgv_lang["print"]				= "Skriv ut";
$pgv_lang["total_queries"]		= "Totalt antal databasfrågor:";
$pgv_lang["total_privacy_checks"] = "Totalt antal integritetskontroller: ";
$pgv_lang["back"]				= "Tillbaka";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]				= "Också känd som";
$pgv_lang["male"]				= "Man";
$pgv_lang["males"]					= "Män";
$pgv_lang["female"]				= "Kvinna";
$pgv_lang["females"]				= "Kvinnor";
$pgv_lang["temple"]				= "SDH Tempel";
$pgv_lang["temple_code"]		= "SDH Tempelkod:";
$pgv_lang["status"]				= "Status";
$pgv_lang["source"]				= "Källa";
$pgv_lang["text"]				= "Källtext:";
$pgv_lang["note"]				= "Anteckning";
$pgv_lang["NN"]					= "(Efternamn okänt)";		// Family name
$pgv_lang["PN"]					= "(Förnamn okänt)";		// Given name
// $pgv_lang["NNhebrew"] 		use value from lang.en.php
// $pgv_lang["PNhebrew"] 		use value from lang.en.php
// $pgv_lang["NNarabic"] 		use value from lang.en.php
// $pgv_lang["PNarabic"] 		use value from lang.en.php
// $pgv_lang["NNgreek"] 		use value from lang.en.php
// $pgv_lang["PNgreek"] 		use value from lang.en.php
// $pgv_lang["NNrussian"] 		use value from lang.en.php
// $pgv_lang["PNrussian"] 		use value from lang.en.php
// $pgv_lang["NNchinese"] 		use value from lang.en.php
// $pgv_lang["PNchinese"] 		use value from lang.en.php
// $pgv_lang["NNvietnamese"] 	use value from lang.en.php
// $pgv_lang["PNvietnamese"] 	use value from lang.en.php
// $pgv_lang["NNthai"] 			use value from lang.en.php
// $pgv_lang["PNthai"] 			use value from lang.en.php
$pgv_lang["NNother"] 			= "(Efternamn okänt)";
$pgv_lang["PNother"] 			= "(Förnamn okänt)";
$pgv_lang["unrecognized_code"]	= "Okänd GEDCOM-kod";
$pgv_lang["unrecognized_code_msg"]	= "Detta är ett fel och vi skulle gärna vilja rätta till det. Var vänlig rapportera detta till";
$pgv_lang["indi_info"]			= "Personlig information";
$pgv_lang["pedigree_chart"]		= "Antavla";
$pgv_lang["individual"]			= "Person";
$pgv_lang["as_spouse"]			= "Familj med make/maka";
$pgv_lang["privacy_error"]		= "Detaljer om denna personen är skyddade.";
$pgv_lang["more_information"]	= "För mer information kontakta";
$pgv_lang["given_name"]			= "Förnamn";
$pgv_lang["surname"]			= "Efternamn";
$pgv_lang["suffix"]				= "Ändelse";
$pgv_lang["sex"]				= "Kön";
$pgv_lang["personal_details"]	= "Personliga detaljer";
$pgv_lang["personal_facts"]		= "Personliga fakta och detaljer";
$pgv_lang["type"]				= "Typ";
$pgv_lang["parents"] 			= "Föräldrar:";
$pgv_lang["gparents"]				= "Farföräldrar";
$pgv_lang["siblings"] 			= "Syskon";
$pgv_lang["father"] 			= "Far";
$pgv_lang["mother"] 			= "Mor";
$pgv_lang["parent"] 				= "Förälder";
$pgv_lang["parent_age"] 			= "Föräldrars ålder";
$pgv_lang["father_age"]				= "Fars ålder";
$pgv_lang["mother_age"]				= "Moderns ålder";
$pgv_lang["self"] 					= "Själv";
$pgv_lang["relatives"]			= "Släktingar";
$pgv_lang["relatives_events"]		= "Händelser för nära släktingar";
$pgv_lang["historical_facts"]		= "Historiska fakta";
$pgv_lang["partner"] 				= "Partner";
$pgv_lang["spouse"]				= "Maka/Make";
$pgv_lang["spouses"] 				= "Makar";
$pgv_lang["surnames"]			= "Efternamn";
$pgv_lang["adopted"]			= "Adopterad";
$pgv_lang["foster"]				= "Fosterbarn";
$pgv_lang["sealing"]			= "Försegling";
$pgv_lang["challenged"]			= "Ifrågasatt";
$pgv_lang["disproved"]			= "Motbevisat";
$pgv_lang["infant"]				= "Spädbarn";
$pgv_lang["stillborn"]			= "Dödfödd";
$pgv_lang["deceased"]			= "Avliden";
$pgv_lang["link_as_wife"]			= "Länka personen till existerande familj som maka";
$pgv_lang["no_tab1"]			= "Det finns ingen fakta om denna person.";
$pgv_lang["no_tab2"]			= "Det finns inga antecknngar om denna person.";
$pgv_lang["no_tab3"]			= "Det finns ingen källcitat om denna person.";
$pgv_lang["no_tab4"]			= "Det finns ingen mediaobjekt för denna person.";
$pgv_lang["no_tab5"]			= "Det finns inga nära släktingar till denna person.";
$pgv_lang["no_tab6"]			= "Det finns inte någon forskningsloggar kopplade till denna person. ";
$pgv_lang["show_fact_sources"]		= "Visa alla källor";
$pgv_lang["show_fact_notes"]		= "Visa alla anteckningar";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Familjeinformation";
$pgv_lang["family_group_info"]	= "Familjens gruppinformation";
$pgv_lang["husband"]			= "Make";
$pgv_lang["wife"]				= "Maka";
$pgv_lang["marriage"]			= "Äktenskap:";
$pgv_lang["lds_sealing"]		= "SDH försegling:";
$pgv_lang["marriage_license"]	= "Äktenskapsbevis:";
$pgv_lang["no_children"]		= "Inga registrerade barn";
$pgv_lang["known_child"]			= "1 barn";
$pgv_lang["known_children"]			= "barn";
$pgv_lang["childless_family"]		= "Denna familj förblev barnlös";
$pgv_lang["parents_timeline"]	= "Visa par på tidslinje";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Urklippskorg";
$pgv_lang["which_links"]		= "Vilka länkar från denna familj vill du också lägga till?";
$pgv_lang["just_family"]		= "Lägg enbart till denna familj.";
$pgv_lang["parents_and_family"]	= "Lägg till föräldrarna till denna familjs post.";
$pgv_lang["parents_and_child"]	= "Lägg till föräldrar och barn till denna familjs post.";
$pgv_lang["parents_desc"]		= "Lägg till föräldrarna samt alla deras ättlingar till denna familj post.";
$pgv_lang["continue"]			= "Fortsätt lägg till";
$pgv_lang["which_p_links"]		= "Vilka länkar från denna personen vill du också lägga till?";
$pgv_lang["just_person"]		= "Lägg enbart till denna person.";
$pgv_lang["person_parents_sibs"]	= "Lägg till denna person samt föräldrar och syskon.";
$pgv_lang["person_ancestors"]	= "Lägg till denna person samt alla rakt stigande anor.";
$pgv_lang["person_ancestor_fams"]	= "Lägg till denna person samt rakt stigande anor och deras familjer.";
$pgv_lang["person_spouse"]		= "lägg till denna person samt maka och barn.";
$pgv_lang["person_desc"]		= "Lägg till denna person samt maka och alla ättlingars poster.";
$pgv_lang["which_s_links"]			= "Vilka poster länkade till denna källa skall läggas till?";
$pgv_lang["just_source"]		= "Lägg enbart till denna källa.";
$pgv_lang["linked_source"]		= "Lägg till denna källa och familjer/personer länkade till denna källa.";
$pgv_lang["person_private"]		= "Detaljer om den här personen är privata.  Personliga detaljer kommer inte inkluderas.";
$pgv_lang["family_private"]		= "Detaljerna om familjen är privata. Familjedetaljer kommer inte att inkluderas.";
$pgv_lang["media_private"] 			= "Detaljer om detta media är privata. Mediedetaljer kommer inte att inkluderas.";
$pgv_lang["cart_is_empty"]		= "Urklippskorgen för ditt släktträd är tom.";
$pgv_lang["id"]					= "ID";
$pgv_lang["ID"]					= "ID";
$pgv_lang["name_description"]	= "Namn / Beskrivning";
$pgv_lang["remove"]				= "Radera";
$pgv_lang["empty_cart"]			= "Töm urklippskorgen";
$pgv_lang["download_now"]		= "Ladda ner nu";
$pgv_lang["download_file"]			= "Ladda ner fil #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Denna person nedladdades från:";
$pgv_lang["family_downloaded_from"]	= "Familjen nedladdades från:";
$pgv_lang["source_downloaded_from"]	= "Källan nedladdades från:";
$pgv_lang["enter_person_generations"] = "Antal generationer:";
$pgv_lang["convertPath"]			= "Konvertera mediesökväg";
$pgv_lang["convertSlashes"]			= "Konvertera mediemappavgränsare";
$pgv_lang["forwardSlashes"]			= "Framåt snedstreck : /";
$pgv_lang["backSlashes"]			= "Backslash : \\";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Ortskopplingar hittade";
$pgv_lang["top_level"]			= "Toppnivå";
$pgv_lang["form"]				= "Orter är angivna på formen:";
$pgv_lang["default_form"]		= "Gård, by, socken, län";
$pgv_lang["default_form_info"]	= "(Standard)";
$pgv_lang["unknown"]			= "okänd";
$pgv_lang["individuals"]		= "Personer";
$pgv_lang["view_records_in_place"]	= "Visa alla poster för denna ort";
$pgv_lang["place_list2"] 		= "Ortslista";
$pgv_lang["show_place_hierarchy"]	= "Visa orter i hierarkin";
$pgv_lang["show_place_list"]	= "Visa alla orter i en lista";
$pgv_lang["total_unic_places"]	= "Totalt antal unika platser";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Externa objekt";
$pgv_lang["multi_title"]		= "Lista över Multimediaobjekt";
$pgv_lang["media_found"]		= "Mediaobjekt funna";
$pgv_lang["view_person"]		= "Visa person";
$pgv_lang["view_family"]		= "Visa familj";
$pgv_lang["view_source"]		= "Visa källa";
$pgv_lang["view_object"]			= "Visa objekt";
$pgv_lang["first_page"]				= "Första sidan";
$pgv_lang["previous_page"]			= "Föregående sida";
$pgv_lang["next_page"]				= "Nästa sida";
$pgv_lang["last_page"]				= "Sista sidan";
$pgv_lang["next_image"]				= "Nästa bild";
$pgv_lang["file_not_found"]		= "Filen kunde inte hittas.";
$pgv_lang["medialist_show"] 	= "Visa";
$pgv_lang["per_page"]   		= "mediaobjekt per sida";
$pgv_lang["media_format"]		= "Mediaformat";
$pgv_lang["image_size"]			= "Bilddimensioner";
$pgv_lang["media_id"]			= "Media ID";
$pgv_lang["invalid_id"]			= "Idt finns inte i denna GEDCOM-fil. ";
$pgv_lang["record_updated"]			= "Post #pid# uppdaterades.";
$pgv_lang["record_not_updated"]		= "Post #pid# kunde inte uppdateras.";
$pgv_lang["record_removed"]			= "Post #xref# raderades från GEDCOM-filen.";
$pgv_lang["record_not_removed"]		= "Post #xref# kunde inte raderas från GEDCOM-filen.";
$pgv_lang["record_added"]			= "Post #xref# blev tillagd till GEDCOM-filen.";
$pgv_lang["record_not_added"]		= "Post #xref# kunde inte läggas till i GEDCOM-filen.";

//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"]		= "Sök efter namnet med den stavning du tror det har (Soundex)";
$pgv_lang["sources"]			= "Källor";
$pgv_lang["shared_notes"]			= "Delade anteckningar";
$pgv_lang["lastname_search"]	= "Efternamn";
$pgv_lang["search_place"]		= "Ort";
$pgv_lang["search_year"]		= "År";
$pgv_lang["no_results"]			= "Inga resultat funna.";
$pgv_lang["search_soundex"]			= "Soundex-sökning";
$pgv_lang["search_replace"]			= "Sök och ersätt";
$pgv_lang["search_sources"]			= "Källor";
$pgv_lang["search_shared_notes"]	= "Delade anteckningar";
$pgv_lang["search_more_chars"]  	= "Var vänlig och skriv in mer än ett tecken";
$pgv_lang["search_soundextype"]		= "Soundextyp:";
$pgv_lang["search_russell"]			= "Enkel";
$pgv_lang["search_tagfilter"]		= "Undantagsfilter";
$pgv_lang["search_tagfon"]			= "Undanta viss icke-genealogisk data";
$pgv_lang["search_tagfoff"]			= "Av";
$pgv_lang["associate"]				= "associera";
$pgv_lang["search_record"]			= "Hela posten";
$pgv_lang["search_to"]				= "till";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]			= "Titlar";
$pgv_lang["find_source"]			= "Hitta källa";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repository"] 			= "Arkiv";
$pgv_lang["repos_found"]			= "Hittade arkiv";
$pgv_lang["find_repository"]		= "Hitta arkiv";
$pgv_lang["total_repositories"]		= "Antal arkiv";
$pgv_lang["confirm_delete_repo"]	= "Är du säker på att du vill radera detta arkiv från databasen?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Källinformation";
$pgv_lang["people"]				= "Personer";
$pgv_lang["families"]			= "Familjer";
$pgv_lang["total_sources"]		= "Antal källor";

//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"]				= "Delad anteckning";
$pgv_lang["shared_notes_found"]			= "Delade anteckningar hittades";
$pgv_lang["find_shared_note"]			= "Hitta delad anteckning";
$pgv_lang["shared_note_info"]			= "Information om delad anteckning";
$pgv_lang["total_shared_notes"]			= "Antal delade anteckningar";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]	= "Felaktigt GEDCOM 5.5 format";
$pgv_lang["exec_time"]			= "Exekveringstid:";
$pgv_lang["changes_present"]	= "Den nuvarande GEDCOM-filen har ändringar som inte är accepterade. Om du fortsätter med importen kommer dessa ändringar att skrivas till databasen. Du bör kolla dessa ändringar innan du fortsätter med importen.";
$pgv_lang["sec"]				= "sek.";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]			= "Totalt antal familjer";
$pgv_lang["total_indis"]		= "Antal personer";
$pgv_lang["notes"]				= "Anteckningar";
$pgv_lang["ssourcess"]			= "Källor";
$pgv_lang["media"]				= "Media";
$pgv_lang["name_contains"]		= "Namnet innehåller:";
$pgv_lang["filter"]				= "Filter";
$pgv_lang["apply_filter"]			= "Tillämpa filter";
$pgv_lang["find_individual"]	= "Sök id för person";
$pgv_lang["find_familyid"]  	= "Sök id för familj";
$pgv_lang["find_sourceid"]		= "Sök id för källa";
$pgv_lang["find_specialchar"]	= "Hitta specialbokstäver";
$pgv_lang["magnify"]			= "Förstora";
$pgv_lang["skip_surnames"]			= "Hoppa över efternamnlistor";
$pgv_lang["show_surnames"]		= "Visa efternamnslistan";
$pgv_lang["skip_surnames"]		= "Hoppa över efternamnslistan";
$pgv_lang["show_marnms"]			= "Inkludera gifta namn";
$pgv_lang["all"]				= "ALLA";
$pgv_lang["hidden"]				= "Dold";
$pgv_lang["confidential"]		= "Konfidentiellt";
$pgv_lang["alpha_index"]				= "Alfabetiskt index";
$pgv_lang["name_list"] 				= "Namnlista";
$pgv_lang["firstname_alpha_index"] 	= "Alfabetiskt index för förnamn";
$pgv_lang["roots"]		 				= "Rötter";
$pgv_lang["leaves"] 					= "Löv";
$pgv_lang["widow"] 					= "Änka";
$pgv_lang["widower"] 				= "Änkling";
$pgv_lang["show_parents"] 			= "Visa föräldrar";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]				= "Ålder";
$pgv_lang["husb_age"]				= "Make ålder";
$pgv_lang["wife_age"]				= "Fruens ålder";
$pgv_lang["year1"]					= "år";
$pgv_lang["years2"]					= "år";	// For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["years"]					= "år";
$pgv_lang["month1"]					= "månad";
$pgv_lang["months"]					= "månader";
$pgv_lang["week1"]					= "vecka";
$pgv_lang["weeks"]					= "veckor";
$pgv_lang["day1"]					= "dag";
$pgv_lang["days"]					= "dagar";
$pgv_lang["after_death"]		="efter döden";
$pgv_lang["at_death_day"]  			= "på dödsdatumet";
$pgv_lang["timeline_title"]		= "PhpGedView tidslinje";
$pgv_lang["timeline_chart"]		= "Tidslinje";
$pgv_lang["remove_person"]		= "Ta bort person";
$pgv_lang["show_age"]			= "Visa åldersmarkering";
$pgv_lang["add_another"]		= "Lägg till en ny person till tavlan";
$pgv_lang["find_id"]			= "Sök ID";
$pgv_lang["show"]				= "Visa";
$pgv_lang["year"]				= "År:";
$pgv_lang["timeline_instructions"]	= "I de flesta nyare webläsare kan man klicka och dra runt boxarna i tavlan.";
$pgv_lang["zoom_in"]			= "Zooma in";
$pgv_lang["zoom_out"]			= "Zooma ut";
$pgv_lang["timeline_beginYear"] = "Börja år";
$pgv_lang["timeline_endYear"] = "Slutår";
$pgv_lang["timeline_scrollSpeed"] = "Hastighet";
$pgv_lang["timeline_controls"] = "Tidslinjekontroll";
$pgv_lang["include_family"] = "Inkludera nära familjemedlemmar";
$pgv_lang["lifespan_chart"] = "Livslinjetavla";

// calendar conversion options
$pgv_lang["cal_none"] 				= "Ingen kalenderkonvertering";
$pgv_lang["cal_gregorian"]			= "Gregoriansk";
$pgv_lang["cal_julian"]   			= "Juliansk";
$pgv_lang["cal_french"]   			= "Fransk";
$pgv_lang["cal_jewish"]   			= "Judisk";
$pgv_lang["cal_hebrew"]   			= "Hebreisk";
$pgv_lang["cal_jewish_and_gregorian"] = "Judisk och Gregoriansk";
$pgv_lang["cal_hebrew_and_gregorian"] = "Hebreisk och Gregoriansk";
$pgv_lang["cal_hijri"]				= "Hijri";
$pgv_lang["cal_arabic"]   			= "Arabisk";

// some religious dates
$pgv_lang["easter"] 	= "Påsk";
$pgv_lang["ascension"]  = "Kristi himmelsfärdsdag";
$pgv_lang["pentecost"]  = "Pingst";
$pgv_lang["assumption"] = "Marias himmelsfärdsdag";
$pgv_lang["all_saints"] = "Alla helgons dag";
$pgv_lang["christmas"]  = "Jul";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."] 		= "am";
$pgv_lang["p.m."] 		= "pm";
$pgv_lang["noon"] 		= "md";
$pgv_lang["midn"] 		= "mn";

//-- MONTH NAMES
$pgv_lang["jan"]				= "Januari";
$pgv_lang["feb"]				= "Februari";
$pgv_lang["mar"]				= "Mars";
$pgv_lang["apr"]				= "April";
$pgv_lang["may"]				= "Maj";
$pgv_lang["jun"]				= "Juni";
$pgv_lang["jul"]				= "Juli";
$pgv_lang["aug"]				= "Augusti";
$pgv_lang["sep"]				= "September";
$pgv_lang["oct"]				= "Oktober";
$pgv_lang["nov"]				= "November";
$pgv_lang["dec"]				= "December";

// $pgv_lang["vend"]			use value from lang.en.php
// $pgv_lang["brum"]			use value from lang.en.php
// $pgv_lang["frim"]			use value from lang.en.php
// $pgv_lang["nivo"]			use value from lang.en.php
// $pgv_lang["pluv"]			use value from lang.en.php
// $pgv_lang["vent"]			use value from lang.en.php
// $pgv_lang["germ"]			use value from lang.en.php
// $pgv_lang["flor"]			use value from lang.en.php
// $pgv_lang["prai"]			use value from lang.en.php
// $pgv_lang["mess"]			use value from lang.en.php
// $pgv_lang["ther"]			use value from lang.en.php
// $pgv_lang["fruc"]			use value from lang.en.php
// $pgv_lang["comp"]			use value from lang.en.php

// $pgv_lang["tsh"]				use value from lang.en.php
// $pgv_lang["csh"]				use value from lang.en.php
// $pgv_lang["ksl"]				use value from lang.en.php
// $pgv_lang["tvt"]				use value from lang.en.php
// $pgv_lang["shv"]				use value from lang.en.php
// $pgv_lang["adr"]				use value from lang.en.php
// $pgv_lang["adr_leap_year"]	use value from lang.en.php
// $pgv_lang["ads"]				use value from lang.en.php
// $pgv_lang["nsn"]				use value from lang.en.php
// $pgv_lang["iyr"]				use value from lang.en.php
// $pgv_lang["svn"]				use value from lang.en.php
// $pgv_lang["tmz"]				use value from lang.en.php
// $pgv_lang["aav"]				use value from lang.en.php
// $pgv_lang["ell"]				use value from lang.en.php

// $pgv_lang["muhar"]			use value from lang.en.php
// $pgv_lang["safar"]			use value from lang.en.php
// $pgv_lang["rabia"]			use value from lang.en.php
// $pgv_lang["rabit"]			use value from lang.en.php
// $pgv_lang["jumaa"]			use value from lang.en.php
// $pgv_lang["jumat"]			use value from lang.en.php
// $pgv_lang["rajab"]			use value from lang.en.php
// $pgv_lang["shaab"]			use value from lang.en.php
// $pgv_lang["ramad"]			use value from lang.en.php
// $pgv_lang["shaww"]			use value from lang.en.php
// $pgv_lang["dhuaq"]			use value from lang.en.php
// $pgv_lang["dhuah"]			use value from lang.en.php

$pgv_lang["b.c."] 		= "f.Kr.";

$pgv_lang["abt"]				= "omkring";
$pgv_lang["aft"]				= "efter";
$pgv_lang["and"]				= "och";
$pgv_lang["bef"]				= "före";
$pgv_lang["bet"]				= "mellan";
$pgv_lang["cal"]				= "beräknad";
$pgv_lang["est"]				= "uppskattat";
$pgv_lang["from"]				= "från";
$pgv_lang["int"]				= "tolkat";
$pgv_lang["to"]					= "till";
$pgv_lang["cir"]				= "cirka";
$pgv_lang["apx"]				= "ungefär";

//-- Admin File Messages
$pgv_lang["email_invalid"]		= "Ogiltig e-postadress.";
$pgv_lang["password_mismatch"]	= "Lösenorden stämmer inte överens.";
$pgv_lang["enter_username"]		= "Du måste mata in ett användarnamn.";
$pgv_lang["enter_password"]		= "Du måste ange ett lösenord.";
$pgv_lang["save"]				= "Spara";
$pgv_lang["saveandgo"]		= "Spara och gå till nästa post";
$pgv_lang["delete"]				= "Radera";
$pgv_lang["edit"]				= "Ändra";
$pgv_lang["no_login"]			= "Kan inte logga in användaren.";
$pgv_lang["basic_realm"]			= "PhpGedViews autenticeringssystem";
$pgv_lang["basic_auth_failure"]		= "Du måste skriva in ett korrekt Inloggningsid och lösenord för att få tillgång till denna resurs";
$pgv_lang["basic_auth"]				= "Normal autenticiering";
$pgv_lang["digest_auth"]				= "Sammandrag autenticiering";
$pgv_lang["no_auth_needed"]			= "Ingen autenticiering";
$pgv_lang["file_not_exists"]	= "Filnamnet du skrev finns inte.";
$pgv_lang["research_assistant"]		= "Forskningsassistent";
$pgv_lang["utf8_to_ansi"]		= "Konvertera från UTF-8 till ANSI(ISO 8859-1)";
$pgv_lang["media_linked"]			= "Detta mediaobjekt länkat till följande:";
$pgv_lang["media_not_linked"]		= "Detta mediaobjekt är inte länkat till någon GEDCOM-post.";
$pgv_lang["media_dir_1"]			= "Mediaobjektet finns på en extern server";
$pgv_lang["media_dir_2"]			= "Mediaobjektet finns i den vanliga mediamappen";
$pgv_lang["media_dir_3"]			= "Mediaobjektet finns i den skyddad mediamappen";
$pgv_lang["thumb_dir_1"]			= "Miniatyrmediaobjektet finns på en extern server";
$pgv_lang["thumb_dir_2"]			= "Miniatyrmediaobjektet finns i den vanliga mediamappen";
$pgv_lang["thumb_dir_3"]			= "Miniatyrmediaobjektet finns i den skyddade mediamappen";
$pgv_lang["moveto_2"]				= "Flytta till den skyddad mappen";
$pgv_lang["moveto_3"]				= "Flytta till den vanliga mappen";
$pgv_lang["move_standard"]			= "Flytta till vanliga";
$pgv_lang["move_protected"]			= "Flytta till skyddade";
$pgv_lang["move_mediadirs"]			= "Flytta mediamappar";
$pgv_lang["setperms"]				= "Sätt mediarättigheter";
$pgv_lang["setperms_fix"]			= "Korrigera läs / skriv / kör behörigheter";
$pgv_lang["setperms_success"]		= "Rättigheter satta";
$pgv_lang["setperms_failure"]		= "Rättigheter är inte satta";
$pgv_lang["setperms_time_exceeded"]	= "Körtidens gräns är nådd. Försök att köra kommandot igen på en mindre katalog.";
$pgv_lang["move_time_exceeded"]	= "Exekveringstidsgränsen nåddes. Utför kommandot igen för att flytta resten av filerna.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "Mediabrandväggens rootmapp finns inte. Du måste skapa den först.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "Den skyddade mediamappen kunde inte skapas i mediabrandväggens rootmapp. Skapa denna mapp och gör den skrivbar för alla.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "Den skyddade mediamappen i mediabrandväggens rootmapp är inte skrivbar för alla.";
$pgv_lang["media_firewall_invalid_dir"]	= "Fel: Mediabrandväggen används utanför mediamappen";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Visa detaljer om ...";
$pgv_lang["view_fam_nav_notes"]		= "Visa anteckningar för ...";
$pgv_lang["view_fam_nav_sources"]	= "Visa källor för ...";
$pgv_lang["view_fam_nav_media"]		= "Visa media för ...";
$pgv_lang["view_fam_nav_album"]		= "Visa album för ...";
$pgv_lang["view_fam_nav_relatives"]	= "Visa släktingar för ...";
$pgv_lang["view_fam_nav_tree"]		= "Visa släktträd för ...";
$pgv_lang["view_fam_nav_research"]	= "Visa forskning för ...";
$pgv_lang["view_fam_nav_map"]		= "Visa karta för ...";
$pgv_lang["view_fam_nav_spare"]		= "Visa reservinformation för ...";
$pgv_lang["navigator"]				= "Navigatör";
$pgv_lang["fam_navigator"]			= "Familjens navigatör";

$pgv_lang["relationship_great"]		= "Farfars";
$pgv_lang["relationship_chart"]	= "Relationer";
$pgv_lang["person1"]			= "Person 1";
$pgv_lang["person2"]			= "Person 2";
$pgv_lang["no_link_found"]		= "Ingen (annan) koppling mellan de två personerna kunde hittas.";
$pgv_lang["no_other_link_found"]	= "Ingen annan koppling mellan de två individerna kunde hittas.";
$pgv_lang["sibling"]			= "Syskon";
$pgv_lang["follow_spouse"]		= "Kontrollera förhållanden via giftermål";
$pgv_lang["timeout_error"]		= "Skriptet tog för lång tid innan någon relation kunde hittas.";
$pgv_lang["grandchild"]				= "barnbarn";
$pgv_lang["grandson"]				= "dotter-/sonson";
$pgv_lang["granddaughter"]			= "dotter-/sonsdotter";
$pgv_lang["greatgrandchild"]		= "Barnbarnsbarn";
$pgv_lang["greatgrandson"]			= "Barnbarnsson";
$pgv_lang["greatgranddaughter"]		= "Barnbarnsdotter";
$pgv_lang["brother"]			= "Bror";
$pgv_lang["sister"]				= "Syster";
$pgv_lang["aunt"]					= "Faster/moster";
$pgv_lang["uncle"]				= "Farbror/morbror";
$pgv_lang["nephew"]				= "Brorson";
$pgv_lang["niece"]				= "Brorsdotter";
$pgv_lang["firstcousin"]			= "Kusin";
$pgv_lang["femalecousin"]			= "Kvinnlig kusin";
$pgv_lang["malecousin"]				= "Manlig kusin";
$pgv_lang["relationship_to_me"]	= "Förhållande till mig";
$pgv_lang["rela_husb"]			= "Relation till make";
$pgv_lang["rela_wife"]			= "Relation till maka";
$pgv_lang["next_path"]			= "Hitta nästa sökväg";
$pgv_lang["show_path"]			= "Visa sökväg";
$pgv_lang["line_up_generations"]= "Rada upp samma generationer";
$pgv_lang["oldest_top"] 		= "Visa den äldsta överst";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s är %2\$s till %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s är %2\$s till %3\$s.";

$pgv_lang["mother_in_law"]			= "Svärmor";
$pgv_lang["father_in_law"]			= "Svärfar";
$pgv_lang["brother_in_law"]		= "Svåger";
$pgv_lang["sister_in_law"]			= "Svägerska";
$pgv_lang["brothers_wife"]		= "Svägerska"; // brother's wife
$pgv_lang["son_in_law"]				= "Svärson";
$pgv_lang["daughter_in_law"]		= "Svärdotter";
$pgv_lang["uncle_in_law"]			= "Svärfarbror/-morbror";
$pgv_lang["aunt_in_law"]			= "Svärfaster/-moster";
$pgv_lang["cousin_in_law"]			= "Kusin";
$pgv_lang["m_cousin_in_law"]		= "Manlig kusin";
$pgv_lang["f_cousin_in_law"]		= "Kvinnlig kusin";
$pgv_lang["step_son"]				= "styvson";
$pgv_lang["step_daughter"]			= "styvdotter";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 				= "Brorson";
$pgv_lang["bosa_brothers_offspring_3"] 				= "Brorsdotter";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"]				= "brors sons son";			// brother's son's son
$pgv_lang["bosa_brothers_offspring_5"]				= "brors sons dotter";		// brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"]				= "brorsdotters son";		// brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"]				= "brorsdotters dotter";	// brother's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = "%2\$d x bra brorson";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d x bra brorsdotter";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "Systerson";
$pgv_lang["bosa_sisters_offspring_3"] 				= "Systerdotter";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"]				= "systers sons son";			// sister's son's son
$pgv_lang["bosa_sisters_offspring_5"]				= "systers sons dotter";		// sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"]				= "systers dotters son";		// sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"]				= "systers dotters dotter";		// sister's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = "%2\$d x bra systerson";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d x bra systerdotter";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "Son";					// son
$pgv_lang["bosa_3"] 				= "dotter";					// daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "sonson";					// son's son
$pgv_lang["bosa_5"] 				= "sondotter";				// son's daughter
$pgv_lang["bosa_6"] 				= "dotterson";				// daughter's son
$pgv_lang["bosa_7"] 				= "dotterdotter";			// daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "sonsonson";				// son's son's son
$pgv_lang["bosa_9"] 				= "sonsondotter";			// son's son's daughter
$pgv_lang["bosa_10"]				= "sondotterson";			// son's daughter's son
$pgv_lang["bosa_11"]				= "sondotterdotter";		// son's daughter's daughter
$pgv_lang["bosa_12"]				= "dottersonson";			// daughter's son's son
$pgv_lang["bosa_13"]				= "dottersondotter";		// daughter's son's daughter
$pgv_lang["bosa_14"]				= "dotterdotterson";		// daughter's daughter's son
$pgv_lang["bosa_15"]				= "dotterdotterdotter";		// daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = "%3\$d x sonson";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d x sondotter";
$pgv_lang["n_x_grandson_from_daughter"]	  = "%3\$d x dotterson";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x dotterdotter";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= "farbror";		// father's brother
$pgv_lang["sosa_uncle_3"] 				= "morbror";		// mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "farfars bror";	// father's father's brother
$pgv_lang["sosa_uncle_5"] 				= "farmors bror";	// father's mother's brother
$pgv_lang["sosa_uncle_6"] 				= "morfars bror";	// mother's father's brother
$pgv_lang["sosa_uncle_7"] 				= "mormors bror";	// mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "%2\$d x farbror";
$pgv_lang["n_x_maternal_uncle"]		= "%2\$d x morbror";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= "faster";				// father's sister
$pgv_lang["sosa_aunt_3"] 				= "moster";				// mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "farfars syster";		// father's father's sister
$pgv_lang["sosa_aunt_5"] 				= "farmors syster";		// father's mother's sister
$pgv_lang["sosa_aunt_6"] 				= "morfars syster";		// mother's father's sister
$pgv_lang["sosa_aunt_7"] 				= "mormors syster";		// mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "%2\$d x faster";
$pgv_lang["n_x_maternal_aunt"]		= "%2\$d x moster";

// the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 				= "fars bror";			// father's brother
$pgv_lang["sosa_uncle_bm_3"] 				= "morbror";			// mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"] 				= "farfars bror";		// father's father's brother
$pgv_lang["sosa_uncle_bm_5"] 				= "farmors bror";		// father's mother's brother
$pgv_lang["sosa_uncle_bm_6"] 				= "morfars bror";		// mother's father's brother
$pgv_lang["sosa_uncle_bm_7"] 				= "mormors bror";		// mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]		= "%2\$d x fars bror";
$pgv_lang["n_x_maternal_uncle_bm"]		= "%2\$d x morbror";

// the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 				= "fars syster";		// father's sister
$pgv_lang["sosa_aunt_bm_3"] 				= "moster";				// mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"] 				= "farfars syster";		// father's father's sister
$pgv_lang["sosa_aunt_bm_5"] 				= "farmors syster";		// father's mother's sister
$pgv_lang["sosa_aunt_bm_6"] 				= "morfars syster";		// mother's father's sister
$pgv_lang["sosa_aunt_bm_7"] 				= "mormors syster";		// mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]		= "%2\$d x fars syster";
$pgv_lang["n_x_maternal_aunt_bm"]		= "%2\$d x moster";

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]  			= "kusin";
$pgv_lang["male_cousin_2"]  			= "Tremänning";
$pgv_lang["male_cousin_3"]  			= "Fyrmänning";
$pgv_lang["male_cousin_4"]  			= "Femmänning";
$pgv_lang["male_cousin_5"]  			= "Sexmänning";
$pgv_lang["male_cousin_6"]  			= "Sjumänning";
$pgv_lang["male_cousin_7"]  			= "Åttamänning";
$pgv_lang["male_cousin_8"]  			= "Niomänning";
$pgv_lang["male_cousin_9"]  			= "Tiomänning";
$pgv_lang["male_cousin_10"] 			= "Elvamänning";
$pgv_lang["male_cousin_11"] 			= "Tolvmänning";
$pgv_lang["male_cousin_12"] 			= "Trettonmänning";
$pgv_lang["male_cousin_13"] 			= "Fjortonmänning";
$pgv_lang["male_cousin_14"] 			= "Femtonmänning";
$pgv_lang["male_cousin_15"] 			= "Sextonmänning";
$pgv_lang["male_cousin_16"] 			= "Sjuttonmänning";
$pgv_lang["male_cousin_17"] 			= "Artonmänning";
$pgv_lang["male_cousin_18"] 			= "Nittonmänning";
$pgv_lang["male_cousin_19"] 			= "Tjugomänning";
$pgv_lang["male_cousin_20"] 			= "Tjugoenmänning";
$pgv_lang["male_cousin_n"]  			= "%d x männing";
$pgv_lang["female_cousin_1"]			= "kusin";
$pgv_lang["female_cousin_2"]			= "Tremänning";
$pgv_lang["female_cousin_3"]			= "Fyrmänning";
$pgv_lang["female_cousin_4"]			= "Femmänning";
$pgv_lang["female_cousin_5"]			= "Sexmänning";
$pgv_lang["female_cousin_6"]			= "Sjumänning";
$pgv_lang["female_cousin_7"]			= "Åttamänning";
$pgv_lang["female_cousin_8"]			= "Niomänning";
$pgv_lang["female_cousin_9"]			= "Tiomänning";
$pgv_lang["female_cousin_10"]   		= "Elvamänning";
$pgv_lang["female_cousin_11"]   		= "Tolvmänning";
$pgv_lang["female_cousin_12"]   		= "Trettonmänning";
$pgv_lang["female_cousin_13"]   		= "Fjortonmänning";
$pgv_lang["female_cousin_14"]   		= "Femtonmänning";
$pgv_lang["female_cousin_15"]   		= "Sextonmänning";
$pgv_lang["female_cousin_16"]   		= "Sjuttonmänning";
$pgv_lang["female_cousin_17"]   		= "Artonmänning";
$pgv_lang["female_cousin_18"]   		= "Nittonmänning";
$pgv_lang["female_cousin_19"]   		= "Tjugomänning";
$pgv_lang["female_cousin_20"]   		= "Tjugoenmänning";
$pgv_lang["female_cousin_n"]			= "%d x männing";

// Only referenced from english specific functions
$pgv_lang["removed_ascending_1"]   = "";
$pgv_lang["removed_ascending_2"]   = "";
$pgv_lang["removed_ascending_3"]   = "";
$pgv_lang["removed_ascending_4"]   = "";
$pgv_lang["removed_ascending_5"]   = "";
$pgv_lang["removed_ascending_6"]   = "";
$pgv_lang["removed_ascending_7"]   = "";
$pgv_lang["removed_ascending_8"]   = "";
$pgv_lang["removed_ascending_9"]   = "";
$pgv_lang["removed_ascending_10"]  = "";
$pgv_lang["removed_ascending_11"]  = "";
$pgv_lang["removed_ascending_12"]  = "";
$pgv_lang["removed_ascending_13"]  = "";
$pgv_lang["removed_ascending_14"]  = "";
$pgv_lang["removed_ascending_15"]  = "";
$pgv_lang["removed_ascending_16"]  = "";
$pgv_lang["removed_ascending_17"]  = "";
$pgv_lang["removed_ascending_18"]  = "";
$pgv_lang["removed_ascending_19"]  = "";
$pgv_lang["removed_ascending_20"]  = "";
$pgv_lang["removed_descending_1"]  = "";
$pgv_lang["removed_descending_2"]  = "";
$pgv_lang["removed_descending_3"]  = "";
$pgv_lang["removed_descending_4"]  = "";
$pgv_lang["removed_descending_5"]  = "";
$pgv_lang["removed_descending_6"]  = "";
$pgv_lang["removed_descending_7"]  = "";
$pgv_lang["removed_descending_8"]  = "";
$pgv_lang["removed_descending_9"]  = "";
$pgv_lang["removed_descending_10"] = "";
$pgv_lang["removed_descending_11"] = "";
$pgv_lang["removed_descending_12"] = "";
$pgv_lang["removed_descending_13"] = "";
$pgv_lang["removed_descending_14"] = "";
$pgv_lang["removed_descending_15"] = "";
$pgv_lang["removed_descending_16"] = "";
$pgv_lang["removed_descending_17"] = "";
$pgv_lang["removed_descending_18"] = "";
$pgv_lang["removed_descending_19"] = "";
$pgv_lang["removed_descending_20"] = "";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]		= "Är du säker på att du vill ta bort denna GEDCOM-fakta?";
$pgv_lang["access_denied"]		= "<b>Åtkomst nekad</b><br />Du saknar behörighet till denna resurs.";
$pgv_lang["changes_exist"]		= "Förändringar har gjorts på denna GEDCOM-fil.";
$pgv_lang["find_place"]			= "Sök ort";
$pgv_lang["close_window"]		= "Stäng fönster";
$pgv_lang["close_window_without_refresh"]	= "Stäng fönster utan att ladda om";
$pgv_lang["place_contains"]		= "Orten består av:";
$pgv_lang["add"]				= "Lägg till";
$pgv_lang["custom_event"]		= "Specialhändelse";
$pgv_lang["delete_person"]		= "Radera denna person";
$pgv_lang["confirm_delete_person"]	= "Är du säker på att du vill ta bort denna person från GEDCOM-filen?";
$pgv_lang["find_media"]			= "Hitta media";
$pgv_lang["set_link"]			= "Sätt länk";
$pgv_lang["delete_source"]	 	= "Radera källa";
$pgv_lang["delete_shared_note"]		= "Radera denna delade anteckning";
$pgv_lang["confirm_delete_source"]	= "Är du säker på att du vill radera denna källa från GEDCOM-filen?";
$pgv_lang["confirm_delete_shared_note"]		= "Är du säker på att du vill radera den här delade anteckningen?";
$pgv_lang["find_family"]		= "Hitta familj";
$pgv_lang["find_fam_list"]		= "Hitta familjelista";
$pgv_lang["edit_name"]			= "Ändra namn";
$pgv_lang["delete_name"]		= "Radera namn";
$pgv_lang["select_date"]		= "Välj ett datum";
$pgv_lang["user_cannot_edit"]	= "Detta användarnamn kan inte redigera denna GEDCOM-fil.";
$pgv_lang["gedcom_editing_disabled"]	= "Redigering av denna GEDCOM har stängta av av administratören.";
$pgv_lang["privacy_not_granted"]	= "Du har inte access till";
$pgv_lang["privacy_prevented_editing"]	= "Integritetsinställningarna hindrar dig från att redigera denna post.";
$pgv_lang["ged_noshow"]			= "Denna sida har spärrats av sajtadminstratören.";

//-- calendar.php messages
$pgv_lang["bdm"]				= "Födda, döda, vigda";
$pgv_lang["on_this_day"]		= "Historiska händelser denna dag...";
$pgv_lang["in_this_month"]		= "Historiska händelser denna månad...";
$pgv_lang["in_this_year"]		= "Historiska händelser detta år...";
$pgv_lang["year_anniversary"]	= "#year_var# årsdag";
$pgv_lang["year_yahrzeit"]		= "#yahrzeit_date#, #yahrzeit# yahrzeit på #event_date#";
$pgv_lang["today"]				= "Idag";
$pgv_lang["day"]				= "Dag:";
$pgv_lang["month"]				= "Månad:";
$pgv_lang["showcal"]			= "Visa händelser för:";
$pgv_lang["anniversary"]			= "Årsdag";
$pgv_lang["anniversary_calendar"]	= "Årsdagskalender";
$pgv_lang["sunday"]				= "Söndag";
$pgv_lang["monday"]				= "Måndag";
$pgv_lang["tuesday"]			= "Tisdag";
$pgv_lang["wednesday"]			= "Onsdag";
$pgv_lang["thursday"]			= "Torsdag";
$pgv_lang["friday"]				= "Fredag";
$pgv_lang["saturday"]			= "Lördag";
$pgv_lang["viewday"]			= "Visa dag";
$pgv_lang["viewmonth"]			= "Visa månad";
$pgv_lang["viewyear"]			= "Visa år";
$pgv_lang["all_people"]			= "Alla personer";
$pgv_lang["living_only"]		= "Levande Personer";
$pgv_lang["recent_events"]		= "Senare år (&lt; 100 år)";
$pgv_lang["day_not_set"]		= "Dag inte satt";

//-- user self registration module
$pgv_lang["siteadmin"]			= "PhpGedView-administratör";
$pgv_lang["PGV_program"]		= "PhpGedView-programmet";
$pgv_lang["lost_password"]		= "Förlorat ditt lösenord?";
$pgv_lang["requestpassword"]	= "Begär nytt lösenord";
$pgv_lang["no_account_yet"]		= "Inget konto än?";
$pgv_lang["requestaccount"]		= "Begär tillstånd att logga in";
$pgv_lang["emailadress"]		= "E-postadress";
$pgv_lang["mandatory"] 			= "Fält markerat med * är obligatoriska.";
$pgv_lang["mail01_line01"]		= "Hej #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "En begäran mottogs från #PGV_SERVER_NAME##PGV_SCRIPT_PATH# om att skapa ett konto med din e-postadress «#user_email#».";
$pgv_lang["mail01_line03"]		= "Informationen om förfrågan visas under länken nedan.";
$pgv_lang["mail01_line04"]		= "Klicka på länken nedan och fyll i den begärda datan för att verifiera ditt konto och e-postadress.";
$pgv_lang["mail01_line05"]		= "Om du inte begärde ett konto kan du radera meddelandet.";
$pgv_lang["mail01_line06"]		= "Du kommer inte få några fler mail från detta systemet efterom kontot kommer att raderas inom sju dagar om ingen verifiering görs.";
$pgv_lang["mail01_subject"]		= "Din registrering på #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";

$pgv_lang["mail02_line01"]		= "Hej administratör...";
$pgv_lang["mail02_line02"]		= "En ny användare gjorde en ny användarregistrering på #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";
$pgv_lang["mail02_line03"]		= "Användaren fick ett e-postmeddelande med den nödvändiga datan för att kunna verifiera sitt konto.";
$pgv_lang["mail02_line04"]		= "Så snart användaren har gjort sin verifiering kommer du att informeras via e-post. Du kan nu slutföra processen genom att aktivera användarnamnet. Den nya användaren kan inte logga in förrän du har aktiverat kontot.";
$pgv_lang["mail02_line04a"]		= "Du kommer att bli informerad via epost när den användaren som ansökt om kontot har verifierat sig själv. Efter verifikation kommer användaren att kunna logga in utan att du behöver göra något.";
$pgv_lang["mail02_subject"]		= "Ny registrering på #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";

$pgv_lang["hashcode"]			= "Verifieringskod:";
$pgv_lang["thankyou"]			= "Hej #user_fullname#...<br />Tack för din registrering";
$pgv_lang["pls_note06"]			= "Vi skickar nu ett bekräftelsemail till adressen <b>#user_email#</b>. Du måste verifiera din kontoförfrågan genom att följa instruktionerna i bekräftelsemeddelandet. Om du inte bekräftar din kontoförfrågan inom sju dagar avvisas din ansökan automatiskt. Du måste ansöka igen.<br /><br />När du har följt instruktionerna i bekräftelsemeddelandet måste administratören fortfarande godkänna din begäran innan ditt konto kan användas.<br /><br />Till logga in på den här webbplatsen måste du veta ditt användarnamn och lösenord.";
$pgv_lang["pls_note06a"] 		= "Vi skickar nu ett bekräftelsemail till adressen <b>#user_email#</b>. Du måste verifiera din kontoförfrågan genom att följa instruktionerna i bekräftelsemeddelandet. Om du inte bekräftar din kontoförfrågan inom sju dagar avvisas din ansökan automatiskt. Du måste ansöka igen.<br /><br />När du har följt instruktionerna i bekräftelsemeddelandet kan du logga in. För att logga in på den här webbplatsen måste du veta ditt användarnamn och lösenord.";

$pgv_lang["registernew"]		= "Bekräftelse av ett nytt konto";
$pgv_lang["user_verify"]		= "Användarverifiering";
$pgv_lang["send"]				= "Skicka";

$pgv_lang["pls_note07"]			= "~#pgv_lang[user_verify]#~<br /><br />Skriv in ditt användarnamn, lösenord och verifieringskoden som du fick via e-post från systemet för att aktivera ditt konto.";
$pgv_lang["pls_note08"]			= "Datan för användaren #user_name# är kontrollerad.";

$pgv_lang["mail03_line01"]		= "Hej administratör";
$pgv_lang["mail03_line02"]		= "#newuser[username]# (#newuser[fullname]#) har verifierat registreringsdatan.";
$pgv_lang["mail03_line03"]		= "Vänligen klicka på länken nedan för att logga in till din sajt för att redigera användaren och ge honom rättigheter att logga in på din sajt";
$pgv_lang["mail03_line03a"]		= "Du behöver inte göra något, användaren kan nu logga in.";
$pgv_lang["mail03_subject"]		= "Ny verifiering på #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";

$pgv_lang["pls_note09"]			= "Du har konfirmerat din förfrågan att bli en registrerad användare.";
$pgv_lang["pls_note10"]			= "Adminstratören har blivit informerad. Så snart han har gett dig rättigheter att logga in kan du logga in med ditt användarnamn och lösenord.";
$pgv_lang["pls_note10a"]		= "Du kan nu logga in med ditt användarnamn och lösenord.";
$pgv_lang["data_incorrect"]		= "Datan var inte korrekt, försök igen";
$pgv_lang["user_not_found"]		= "Kunde inte verifiera informationen du skrev in. Gå tillbaka och försök igen.";

$pgv_lang["lost_pw_reset"]		= "Begär återställning av bortglömt lösenord";
$pgv_lang["pls_note11"]			= "För att återställa ditt lösenord anger du ditt användarnamn.<br /><br />Vi svarar genom att skicka ett e-postmeddelande till adressen som är registrerad på ditt konto. E-postmeddelandet innehåller en URL och en bekräftelsekod för ditt konto. När du besöker denna URL kan du ändra ditt lösenord och logga in på den här webbplatsen. Av säkerhetsskäl bör du inte ge denna bekräftelsekod till någon.<br /><br />Om du behöver hjälp från webbplatsadministratören, använd kontaktlänken nedan.";

$pgv_lang["mail04_line01"]		= "Hej #user_fullname#...";
$pgv_lang["mail04_line02"]		= "Ett nytt lösenord efterfrågas för ditt användarnamn.";
$pgv_lang["mail04_line03"]		= "Rekommendation:";
$pgv_lang["mail04_line04"]		= "Klicka på länken nedan, logga in med ditt nya lösenord. Ändra sedan lösenordet så att säkerheten bibehålls för din data.";
$pgv_lang["mail04_line05"]			= "Efter att du logat in, välj «#pgv_lang[editowndata]#» länken under «#pgv_lang[mygedview]#» menyn, fyll i lösenordsfälten för att ändra dit lösenord.";
$pgv_lang["mail04_subject"]		= "Nytt lösenord på #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";

$pgv_lang["pwreqinfo"]			= "Hej...<br /><br />Ett e-post med det nya lösenordet sändes till e-postadressen(#user[email]#).<br /><br />Kontrollera din e-postlåda om en liten stund.<br /><br />Rekommendation:<br />Efter du fått ditt e-postmeddelande bör du logga in och ändra ditt lösenord för att öka säkerheten.";

$pgv_lang["myuserdata"]			= "Mitt konto";
$pgv_lang["user_theme"]			= "Mitt tema";
$pgv_lang["mgv"]				= "Min GedView";
$pgv_lang["mygedview"]			= "Min GedViewPortal";
$pgv_lang["passwordlength"]		= "Lösenordet måste innehålla minst 6 tecken.";
$pgv_lang["welcome_text_auth_mode_1"]	=	"<span class='center'><b>Välkommen till denna genealogiska websajt</b></span><br />Access är tillåten för alla besökare som har ett användarkonto på denna sajt.<br /><br />Om du redan har ett konto kan du logga in på denna sida. Om du inte har ett konto ännu, kan du ansöka om ett genom att klicka på länken på denna sida.<br /><br />Efter att vi verifierat din information, kommer administratören att aktivera ditt konto. Du kommer att få ett e-postmeddelande när kontot aktiveras.";
$pgv_lang["welcome_text_auth_mode_2"]	=	"<span class='center'><b>Välkommen till denna genealogiska websajt</b></span><br />Access är tillåten endast för <u>auktoriserade</u> användare.<br /><br />Om du redan har ett konto kan du logga in på denna sida. Om du inte har ett konto ännu, kan du ansöka om ett genom att klicka på länken på denna sida.<br /><br />Efter att vi verifierat din information, kommer administratören att gogkänna eller avslå din begäran. Du kommer att få ett e-postmeddelande om din begäran godkänns.";
$pgv_lang["welcome_text_auth_mode_3"]	=	"<span class='center'><b>Välkommen till denna genealogiska websajt</b></span><br />Access är tillåten <u>endast för familjemedlemmar</u>.<br /><br />Om du redan har ett konto kan du logga in på denna sida. Om du inte har ett konto ännu, kan du ansöka om ett genom att klicka på länken på denna sida.<br /><br />Efter att vi verifierat din information, kommer administratören antingen godkänna eller avslå din begäran. Du kommer att få ett e-postmeddelande när kontot godkänns.";
$pgv_lang["welcome_text_cust_head"]		=	"<span class='center'><b>Välkommen till denna genealogiska websajt</b></span><br />Access är tillåten för användare som har ett användarkonto och lösenord för denna websajt.";
$pgv_lang["acceptable_use"]			= "<div class=\"largeError\">Notera:</div><div class=\"error\">genom att fylla i och skicka in detta formulär, samtycker du till att:<ul><li>skydda integriteten för de nu levande personer som nämns på denna sajt </li><li>och i textrutan nedan förklara med vem du är släkt eller ge oss information om någon som borde vara med på på var sajt.</li></ul></div>";


//-- mygedview page
$pgv_lang["upcoming_events"]		= "Kommande händelser";
$pgv_lang["living_or_all"]			= "Visa händelser enbart för levande personer?";
$pgv_lang["basic_or_all"]			= "Visa endast födda, döda och vigda?";
$pgv_lang["style"]					= "Presentationsstil";
$pgv_lang["style1"]					= "Text";
$pgv_lang["style2"]					= "Tabell";
$pgv_lang["style3"]					= "Tagcloud";
$pgv_lang["sort_style"]				= "Sortera stil";
$pgv_lang["by_anniv"]				= "Vid årsdagen";
$pgv_lang["by_alpha"]				= "Alfabetiskt";
$pgv_lang["cal_download"]			= "Tillåt nerladdning av kalenderhändelser?";
$pgv_lang["no_events_living"]		= "Inga händelser för levande personer existerar för de närmaste #pgv_lang[global_num1]# dagarna.";
$pgv_lang["no_events_living1"]		= "Inga händelser för levande personer existerar för imorgon.";
$pgv_lang["no_events_all"]			= "Inga händelser existerar de närmaste #pgv_lang[global_num1]# dagarna.";
$pgv_lang["no_events_all1"]			= "Inga händelser existerar för imorgon.";
$pgv_lang["no_events_privacy"]		= "Händelser finns för de närmaste  #pgv_lang[global_num1]# dagarna, men integritetsrestriktioner hindrar dig från att se dem.";
$pgv_lang["no_events_privacy1"]		= "Händelser finns för imorgon, men integritetsrestriktioner hindrar dig från att se dem.";
$pgv_lang["more_events_privacy"]	= "Fler händelser existerar för de följande #pgv_lang[global_num1]# dagarna, men integritetsrestriktioner förhindrar dig att se dem.";
$pgv_lang["more_events_privacy1"]	= "Fler händelser existerar för imorgon, men integritetsrestriktioner förhindrar dig att se dem.";
$pgv_lang["none_today_living"]		= "Inga händelser för levande personer finns för imorgon.";
$pgv_lang["none_today_all"]			= "Inga händelser finns för imorgon.";
$pgv_lang["none_today_privacy"]		= "Händelser finns för idag, men integritetsrestriktioner hindrar dig från att se dem.";
$pgv_lang["more_today_privacy"]		= "Fler händelser existerar för idag, men integritetsrestriktioner förhindrar dig att se dem.";
$pgv_lang["chat"]					= "Chat";
$pgv_lang["users_logged_in"]		= "Inloggad användare";
$pgv_lang["anon_user"]				= "1 anonym användare inloggad";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# anonyma användare inloggade";
$pgv_lang["login_user"]				= "1 inloggad användare";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# inloggade användare";
$pgv_lang["no_login_users"]			= "Inga inloggade eller anonyma användare";
$pgv_lang["message"]			= "Skicka meddelande";
$pgv_lang["my_messages"]		= "Mina meddelande";
$pgv_lang["date_created"]		= "Datum skickat:";
$pgv_lang["message_from"]		= "E-post adress:";
$pgv_lang["message_from_name"]	= "Avsändare:";
$pgv_lang["message_to"]			= "Till:";
$pgv_lang["message_subject"]	= "Ärende:";
$pgv_lang["message_body"]		= "Meddelande:";
$pgv_lang["no_to_user"]			= "Ingen mottagare har angivits. Kan inte fortsätta.";
$pgv_lang["provide_email"]		= "Ange din e-postadress så att vi kan kontakta dig för att svara på ditt meddelande. Om du inte anger din e-postadress kommer vi inte att kunna besvara din förfrågan. Din e-postadress kommer inte att användas på något annat sätt än för att besvara din förfrågan.";
$pgv_lang["reply"]			= "Svara";
$pgv_lang["message_deleted"]		= "Medelande raderat";
$pgv_lang["message_sent"]		= "Meddelande skickat till #TO_USER#";
$pgv_lang["message_failed"]		= "Meddelandet kunde inte skickas";
$pgv_lang["message_error"]		= "PHPMailer fel: ";
$pgv_lang["message_invalid_from"]	= "Ogiltig avsändaradress: &laquo;#email#&raquo;";
$pgv_lang["message_invalid_to"]		= "Ogiltig mottagareadress: &laquo;#email#&raquo;";
$pgv_lang["message_illegal_chars"]	= "Ogiltig tecken i adressen &laquo;#email#&raquo;";
$pgv_lang["message_bad_format"]		= "Adressen &laquo;#email#&raquo; är inte korrekt formaterad";
$pgv_lang["message_no_MX"]			= "Domänen för adressen &laquo;#email#&raquo; existerar inte eller har ingen MX-post";
$pgv_lang["reset"]				= "Återställ";
$pgv_lang["site_default"]		= "Sajt-standard";
$pgv_lang["mygedview_desc"]		= "Din MyGedView sida tillåter dig att ha bokmärken över dina favorit-personer, spåra kommande händelser och samarbeta med andra användare av PhpGedView.";
$pgv_lang["no_messages"]		= "Du har inga väntande meddelanden.";
$pgv_lang["clicking_ok"]		= "Klickar du OK kommer det öppnas ett annat fönster där du kan kontakta #user[fullname]#";
$pgv_lang["favorites"]				= "Favoriter";
$pgv_lang["my_favorites"]		= "Mina favoriter";
$pgv_lang["no_favorites"]		= "Du har inte angett några favoriter.<br /><br />För att lägga till personer till dina favoriter, sök reda på personens detaljer och klicka på <b>#pgv_lang[add_favorite]#</b> eller använd ID fältet för att lägga till en person genom att ange dess ID nummer.";
$pgv_lang["add_to_my_favorites"]= "Lägg till i mina favoriter";
$pgv_lang["gedcom_favorites"]	= "Denna GEDCOM-fils favoriter";
$pgv_lang["no_gedcom_favorites"]= "För tillfället finns det inga valda favoriter. Administratören kan lägga till favoriter som visas vid starten.";
$pgv_lang["confirm_fav_remove"]	= "Är du säker på att du vill radera denna post från dina favoriter?";
$pgv_lang["invalid_email"]		= "Obs! Skriv in en giltig e-postadress.";
$pgv_lang["enter_subject"]		= "Obs! Skriv ett ärende för meddelandet.";
$pgv_lang["enter_body"]			= "Obs! Skriv någon text i meddelandet innan du skickar det.";
$pgv_lang["confirm_message_delete"]	= "Är du säker på att du vill radera detta meddelandet? Det kan inte återfås senare.";
$pgv_lang["message_email1"]		= "Foljande meddelande har skickats till ditt PhpGedView användarkonto från";
$pgv_lang["message_email2"]		= "Du skickade följande meddelande till ett PhpGedView användarkonto:";
$pgv_lang["message_email3"]		= "Du skickade följande meddelande till en PhpgedView administratör:";
$pgv_lang["viewing_url"]		= "Detta meddelande sändes medan följande url visades:";
$pgv_lang["random_picture"]		= "Slumpvist vald bild";
$pgv_lang["message_instructions"]	= "<b>Observera:</b> Privat information om levande personer kommer endast ges till släktingar och nära vänner. Du kommer att ombedas att verifiera ditt släktskap innan du kommer att erhålla någon information. Ibland är även information om döda personer privat. Om detta är fallet så beror det på att det inte finns tillräckligt med information för att avgöra om personen är död eller fortfarande lever och vi har antagligen inte mer information om denna person.<br /><br />Före du ställer några frågor så kontrollera att det är rätt person genom att kontrollera datum, orter och nära släktingar. Om du skickar ändringar av den genealogiska datan så inkludera källan var du fått uppgifterna ifrån.";
$pgv_lang["sending_to"]			= "Detta meddelande kommer att sändas till #TO_USER#";
$pgv_lang["preferred_lang"]	 	= "Användaren föredrar att motta meddelande på #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "Denna GEDCOM är skapad av <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>.";
$pgv_lang["gedcom_created_on"]	= "Denna GEDCOM skapades den <b>#CREATED_DATE#</b>.";
$pgv_lang["gedcom_created_on2"]	= "den <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]		= "GEDCOM-statistik";
$pgv_lang["stat_individuals"]	= "Personer";
$pgv_lang["stat_families"]		= "Familjer";
$pgv_lang["stat_sources"]		= "Källor";
$pgv_lang["stat_other"]			= "Andra poster";
$pgv_lang["stat_earliest_birth"] 	= "Tidigaste födelseår";
$pgv_lang["stat_latest_birth"] 	= "Senaste födelseåret";
$pgv_lang["stat_earliest_death"] 	= "Tidigaste dödsår";
$pgv_lang["stat_latest_death"] 	= "Senaste dödsår";
$pgv_lang["customize_page"]			= "Skräddarsy MyGedView-portalen";
$pgv_lang["customize_gedcom_page"]	= "Skräddarsy denna GEDCOMs välkomstsida";
$pgv_lang["upcoming_events_descr"] 	= "Blocket «Kommande händelser» visar en lista av händelser som kommer att inträffa de närmaste 30 dagarna i den aktiva GEDCOM-filen. För en användares MyGedView-sidan visar blockett en lista endast levande personer. För en GEDCOM välkomstsida visar den en lista på alla personer.";
$pgv_lang["upcoming_events_block"] 	= "Kommande händelser";
$pgv_lang["todays_events_block"]	= "På denna dagen";
$pgv_lang["todays_events_descr"]	= "Blocket «På denna dagen» visar en lista på händelser som hänt denna dag. Du kan konfigurera detaljnivån som ska visas.";
$pgv_lang["todo_block"] = "Uppgifter att utföra";
$pgv_lang["todo_descr"] = "Blocket «Uppgifter att utföra» visar alla utestående _TODO-fakta i databasen.";
$pgv_lang["todo_show_other"] 	= "Visa andra användares uppgifter";
$pgv_lang["todo_show_unassigned"]= "Visa uppgifter som inte har tilldelats";
$pgv_lang["todo_show_future"]	= "Visa framtida uppgifter";
$pgv_lang["todo_nothing"]		= "Det finns inga uppgifter att utföra uppgifter";
$pgv_lang["yahrzeit_block"]			= "Yahrzeiten";
$pgv_lang["yahrzeit_descr"]			= "Blocket «Yahrzeiten» visar årsdagar av dödsdatum, som infaller i en nära framtid. Du kan konfigurera perioden som visas och administratören kan konfigurera hur lång in i framtiden man ska kolla efter dödsdagar.";
$pgv_lang["logged_in_users_block"]	= "Inloggad anvädar";
$pgv_lang["logged_in_users_descr"]	= "Blocket «Inloggad anvädar» visar en lista på användare som är inloggade för tillfället.";
$pgv_lang["user_messages_block"]= "Mina meddelanden";
$pgv_lang["user_messages_descr"]	= "Blocket «Mina meddelanden» visar en lista på meddelande som har sänts till den aktiva användaren.";
$pgv_lang["user_favorites_block"]	= "Mina favoriter";
$pgv_lang["user_favorites_descr"]	= "Blocket «Mina favoriter» visar en lista över användarens favoritkompisar i systemet så att man enkelt kan länka till dem.";
$pgv_lang["welcome_block"]			= "Välkommen";
$pgv_lang["welcome_descr"]			= "Blocket «Användarvälkommen» visar den aktuella datumen och tiden. snabblänkar för att ändra inställningar eller att hoppa till sin egen antavla och en länk att modifiera portalen.";
$pgv_lang["random_media_block"]		= "Slumpmässigt media";
$pgv_lang["random_media_descr"]		= "Blocket «Slumpmässigt media» väljer ett foto eller annan mediaartikel i den aktiva databasen och visar den för användaren.<br /><br />Administratören bestämmer om det blocket kan visa mediaartiklar associerade med personer eller händelser.";
$pgv_lang["random_media_persons_or_all"]	= "Visa endast personer, händelser eller allting?";
$pgv_lang["random_media_persons"]	= "Personer";
$pgv_lang["random_media_events"]	= "Händelser";
$pgv_lang["gedcom_block"]			= "Välkommen för GEDCOM";
$pgv_lang["gedcom_descr"]			= "Blocket «Välkommen för GEDCOM» fungerar på samma sätt som välkomstblockett för användare genom att välkomna besökaren till sajten och visa titeln på den aktiva GEDCOM-filen och den nuvarande tiden och datumen.";
$pgv_lang["gedcom_favorites_block"]	= "Favoriter för GEDCOM";
$pgv_lang["gedcom_favorites_descr"]	= "Blocket «Favoriter för GEDCOM» tillåter adminstratören möjligheten att välja deras favoritpersoneri GEDCOM-filen så att besökarna kan hitta dem enkelt. Detta är ett sätt att markera personer som är betydelsefulla in din familjehistoria.";
$pgv_lang["gedcom_stats_block"]	= "Statistik för GEDCOM";
$pgv_lang["gedcom_stats_descr"]	= "Blocket «Statistik för GEDCOM» visar lite grundläggande information om databasen som när den skapades och hur många personer som är med i GEDCOM-filen.<br /><br />Den har också en lista för de vanligaste efternamnen. Du kan konfigurera detta blocket att inte visa vanligaste efternamnslistan och du kan också konfigurera GEDCOM-filen så att det läggs till eller tas bort namn från listan. Du kan ange tröskelvärdet för listan i konfiguration för GEDCOM-filen.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Visa vanliga efternamn?";
$pgv_lang["portal_config_instructions"]	= "~#pgv_lang[customize_page]#~<br />~#pgv_lang[customize_gedcom_page]#~<br /><br />På denna sida kan du skräddarsy sida genom att positionera blocketa på sidan som du vill ha dem.<br /><br />Portalen är delad i två blocket, <b>Huvuddelen</b> och <b>högerdelen</b>. <b>Huvuddelens</b> blocket visas  större och under MyGedViewPortalens titel. <b>Högerdelens</b> blocket börjar till höger om titeln och fortsätter ner längs höger sida.<br /><br />Varje sektion har sin egen lista av blocket som kommer att visas i portalen i den ordningen de är listade. Du kan lägga till, ta bort och ändra ordningen som du vill.<br /><br />Om ett blocket är tomt kommer de kvarvarande blocketa att ta upp hela bredden av sidan.";
$pgv_lang["login_block"]		= "Inloggning";
$pgv_lang["login_descr"]		= "Blocket «Inloggning» skriver ut användarnamn och lösenord så att användaren kan logga in.";
$pgv_lang["theme_select_block"] = "Tema väljaren";
$pgv_lang["theme_select_descr"] = "Blocket «Tema väljaren» visar tema-väljaren även om temaväljaren är avstängd.";
$pgv_lang["block_top10_title"]  = "Vanligaste efternamnen";
$pgv_lang["block_top10"]		= "Vanligaste efternamnen";
$pgv_lang["block_top10_descr"]  = "Blocket «Vanligaste efternamnen» visar en tabell över de vanligaste efternamnen i databasen";
$pgv_lang["block_cookiepolicy"]			= "Cookiepolicy";
$pgv_lang["block_cookiepolicy_title"]	= "Cookiepolicy";
$pgv_lang["block_cookiepolicy_descr"]	= "Blocket «Cookiepolicy» visar cookiepolicyn på denna webbplats, i enlighet med EUs cookielag.";
$pgv_lang["block_cookiepolicy_body"]	= "<span class='warning'>Detta meddelande krävs enligt EUs cookielag.</span><br />Denna webbplats gör sitt bästa för att inte använda cookies, och gör det endast när det behövs tekniskt. Ingen personlig information, inte ens ditt användar-ID eller lösenord, lagras någonsin i kakor som skapats av denna webbplats.<br /><br />Av tekniska skäl som ligger utanför webbplatsens kontroll raderas inte dessa cookies när du avslutar din session med den här webbplatsen. De raderas dock omedelbart när din webbläsare avslutas.";
$pgv_lang["block_cookiepolicy_body_extlink"]	= "<span class='warning'>Detta meddelande krävs enligt EUs cookielag.</span><br />Denna webbplats gör sitt bästa för att inte använda cookies, och gör det endast när det behövs tekniskt. Ingen personlig information, inte ens ditt användar-ID eller lösenord, lagras någonsin i kakor som skapats av denna webbplats. För ytterligare information om cookiepolicyn på denna webbplats, följ <a href='<link>' target='_blank' title='Platsspecifik cookiepolicy'>denna länk</a>.<br /><br />Av tekniska skäl som ligger utanför webbplatsens kontroll raderas inte dessa cookies när du avslutar din session med den här webbplatsen. De raderas dock omedelbart när din webbläsare avslutas.";
$pgv_lang["block_cookiepolicy_link"]			= "Länk till sidans cookiepolicy";
$pgv_lang["block_givn_top10_title"]		= "Vanligaste förnamnen";
$pgv_lang["block_givn_top10"]			= "Vanligaste förnamnen";
$pgv_lang["block_givn_top10_descr"]		= "Blocket «Vanligaste förnamnen» visar en tabell över de tio vanligaste förnamnen i databasen. Det faktiska antalet förnamn som visas i detta block kan konfigureras.";

$pgv_lang["gedcom_news_block"]	= "GEDCOM-nyheter";
$pgv_lang["gedcom_news_descr"]	= "Blocket «GEDCOM-nyheter» visar besökarnas nyheter eller artiklar publicerade av en administratörsanvändare.<br /><br />Detta är ett bra ställe att meddela en betydande databasuppdatering, ett familjeåterförening eller födelse av ett barn.";
$pgv_lang["gedcom_news_limit"]		= "Begränsa visning med:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Ingen begränsning";
$pgv_lang["gedcom_news_limit_date"]		= "Ålder för artikel";
$pgv_lang["gedcom_news_limit_count"]	= "Antal artiklar";
$pgv_lang["gedcom_news_flag"]		= "Gräns:";
$pgv_lang["gedcom_news_published"]	= "Publicerades : ";
$pgv_lang["gedcom_news_archive"] 	= "Visa arkiv";
$pgv_lang["user_news_block"]	= "Min dagbok";
$pgv_lang["user_news_descr"]	= "Blocket «Min dagbok» låter användaren att ha anteckningar eller en dagbok online.";
$pgv_lang["my_journal"]			= "Min dagbok";
$pgv_lang["no_journal"]			= "Du har inte skapat några dagboksartiklar.";
$pgv_lang["confirm_journal_delete"]	= "Är du säker på att du vill ta bort denna dagboksnotering?";
$pgv_lang["add_journal"]		= "Lägg till en ny dagboksnotering";
$pgv_lang["gedcom_news"]		= "Nyheter";
$pgv_lang["confirm_news_delete"]= "Är du säker på att du vill ta bort denna nyhetsnotering?";
$pgv_lang["add_news"]			= "Lägg till en nyhetsartikel";
$pgv_lang["no_news"]			= "Det finns inga nyhetsartiklar.";
$pgv_lang["edit_news"]			= "Lägg till/ändra dagboks/nyhets notering";
$pgv_lang["enter_title"]		= "Skriv en titel.";
$pgv_lang["enter_text"]			= "Var vänlig och skriv någon text till denna nyhets eller dagboksnotering.";
$pgv_lang["news_saved"]			= "Nyhet/dagboksnotering sparades korrekt.";
$pgv_lang["article_text"]		= "Noteringstext:";
$pgv_lang["main_section"]		= "Huvudsektionens blocket";
$pgv_lang["right_section"]		= "Högersektionens blocket";
$pgv_lang["available_blocks"]	= "Tillgängliga blocket";
$pgv_lang["move_up"]			= "Flytta upp";
$pgv_lang["move_down"]			= "Flytta ner";
$pgv_lang["move_right"]			= "Flytta åt höger";
$pgv_lang["move_left"]			= "Flytta åt vänster";
$pgv_lang["broadcast_all"]		= "Skicka till alla användare";
$pgv_lang["hit_count"]			= "Träffar:";
$pgv_lang["phpgedview_message"]	= "PhpGedView meddelande";
$pgv_lang["common_surnames"]	= "De vanligaste efternamnen";
$pgv_lang["default_news_title"]		= "Välkommen till din släkt";
$pgv_lang["default_news_text"]		= "Genealogiska informationen på denna sida drivs av <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a>. Denna sida tillhandahåller en introduktion och en översikt för denna genealogi. För att börja arbeta med datan, välj en av tavlorna från Tavelmenyn, gå till personlistan eller sök efter ett namn eller en ort.<br /><br />Om du har problem att använda sajten klicka på hjälpmenyn så får du hjälp om om hur du ska använda sidan som du tittar.<br /><br />Tack för att du besöker denna sida.";
$pgv_lang["reset_default_blocks"]	= "Återställ till standardblocket";
$pgv_lang["recent_changes"]			= "Senaste ändringar";
$pgv_lang["recent_changes_block"]	= "Senaste ändringar";
$pgv_lang["recent_changes_descr"]	= "Blocket «Senaste ändringar» kommer att lista alla ändringar som har gjorts i GEDCOM-filen den senaste månaden. Detta blocket kan hjälpa dig att förbli uppdaterad om vilka ändringar som gjorts. Ändringarna upptäcks genom att kontrollera CHAN-taggen.";
$pgv_lang["recent_changes_none"]	= "<b>Det har inte blivit några ändringar de senaste #pgv_lang[global_num1]# dagarna.</b>";
$pgv_lang["recent_changes_some"]	= "<b>Ändringar har gjorts de senaste #pgv_lang[global_num1]# dagarna</b>";
$pgv_lang["show_empty_block"]		= "Ska detta blocket döljas när det är tomt?";
$pgv_lang["hide_block_warn"]		= "Om du döljer ett tomt blocket, kan du inte längre ändra konfigurationen tills det blir synligt igen genom att inte längre vara tomt.";
$pgv_lang["delete_selected_messages"]	= "Radera markerade meddelande";
$pgv_lang["use_blocks_for_default"]		= "Använd dessa blocket som standard blockkonfiguration för alla användare?";
$pgv_lang["block_not_configure"]	=	"Detta blocket kan inte konfigureras.";

//-- validate GEDCOM
$pgv_lang["add_media_tool"]			= "Verktyg för att lägga till media";

//-- hourglass chart
$pgv_lang["hourglass_chart"]	= "Timglas";

//-- report engine
$pgv_lang["choose_report"]		= "Välj en rapport att köra";
$pgv_lang["enter_report_values"]= "Fyll i rapportvärden";
$pgv_lang["selected_report"]	= "Vald rapport";
$pgv_lang["select_report"]		= "Välj rapport";
$pgv_lang["download_report"]	= "Ladda ner rapport";
$pgv_lang["reports"]			= "Rapporter";
$pgv_lang["pdf_reports"]		= "PDF Rapporter";
$pgv_lang["html_reports"]   	= "HTML-Rapporter";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]	= "Antavlerapport";
$pgv_lang["ahnentafel_generation"]	= "Generationer ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Han ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Hon ";
$pgv_lang["ahnentafel_born_m"]		= "föddes";
$pgv_lang["ahnentafel_born_f"]		= "föddes";
$pgv_lang["ahnentafel_christened_m"] = "döptes";
$pgv_lang["ahnentafel_christened_f"] = "döptes";
$pgv_lang["ahnentafel_married_m"]	= "vigdes med";
$pgv_lang["ahnentafel_married_f"]	= "vigdes med";
$pgv_lang["ahnentafel_married_post"]= "&nbsp;";
$pgv_lang["ahnentafel_died_m"]		= "dog";
$pgv_lang["ahnentafel_died_f"]		= "dog";
$pgv_lang["ahnentafel_cremated_m"]	= "han kremeras";		// male
$pgv_lang["ahnentafel_cremated_f"]	= "hon kremeras";		// female
$pgv_lang["ahnentafel_buried_m"]	= "han begravdes";
$pgv_lang["ahnentafel_buried_f"]	= "hon begravdes";
$pgv_lang["ahnentafel_place"]		= " i ";
$pgv_lang["ahnentafel_no_details"]	= " men detaljerna är okända";
$pgv_lang["ahnentafel_on"]			= " ";

//-- Changes report
$pgv_lang["changes_report"]			= "Ändringsrapport";
$pgv_lang["changes_pending_tot"]	= "Totalt antal väntande ändringar: ";
$pgv_lang["changes_accepted_tot"]	= "Totalt antal accepterade ändringar: ";

//-- Descendancy report
$pgv_lang["descend_report"]				= "Ättlingsrapport";
$pgv_lang["son_of"]					= "son av";
$pgv_lang["daughter_of"]			= "dotter av";
$pgv_lang["child_of"]				= "Barn av ";
$pgv_lang["children_of"]			= "Barn av ";
$pgv_lang["descendancy_pronoun_m"]	= "Hon ";
$pgv_lang["descendancy_pronoun_f"]	= "Han ";

$pgv_lang["family_group_report"]  = "Familjegruppsrapporter";
$pgv_lang["page"]   			= "Sida";
$pgv_lang["of"] 				= "av";
$pgv_lang["enter_famid"]		= "Skriv in familje-ID";
$pgv_lang["show_sources"]   	= "Visa källor?";
$pgv_lang["show_notes"] 		= "Visa anteckningar?";
$pgv_lang["show_abbr_notes"] 		= "Visa förkortade anteckningar?";
$pgv_lang["show_photos"]		= "Visa foton?";
$pgv_lang["relatives_report_ext"]	= "Utökad släktrapport";
$pgv_lang["with"]					= "med";
$pgv_lang["on"]						= "på";
$pgv_lang["in"]						= "i";
$pgv_lang["individual_report"]	= "Personrapport";
$pgv_lang["individual_with_rela_report"]		= "Rapporter om nära släktingar";
$pgv_lang["enter_pid"]			= "Skriv in personens ID";
$pgv_lang["generated_by"]		= "Skapad av";
$pgv_lang["birth_report"]		= "Födelsedatum- och ortsrapport";
$pgv_lang["birthplace"]			= "Födelseort innehåller";
$pgv_lang["birthdate1"]			= "Startdatum för födelseblocket";
$pgv_lang["birthdate2"]			= "Slutdatum för födelseblockett";
$pgv_lang["death_report"]			= "Dödsdatum och ortsrapport";
$pgv_lang["deathplace"]				= "Dödsort innehåller";
$pgv_lang["deathdate1"]				= "Dödsdatum omfång, start";
$pgv_lang["deathdate2"]				= "Dödsdatum omfång, slut";
$pgv_lang["marr_report"]			= "Vigseldatum och ortsrapport";
$pgv_lang["marrplace"]				= "Vigselort innehåller";
$pgv_lang["marrdate1"]				= "Vigsel startdatum";
$pgv_lang["marrdate2"]				= "Vigsel slutdatum";
$pgv_lang["sort_by"]			= "Sortera beroende på";
$pgv_lang["cemetery_report"]		= "Begravningsplatsrapport";
$pgv_lang["burialplace"]			= "Begravningsplats innehåller";
$pgv_lang["fact_sources_report"]	= "Faktakällor";
$pgv_lang["missing_facts_report"]	= "Saknade fakta hos släktingar";
$pgv_lang["sources_to_events"]		= "Källor till evenemang";

$pgv_lang["cleanup"]			= "Städa up";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["statistics"]			= "Statistik";
$pgv_lang["show_stats_charts"]		= "Visa statistikdiagram";
$pgv_lang["decade_birth"]			= "Födelse decennium";
$pgv_lang["decade_death"]			= "Dödets decennium";
$pgv_lang["decade_marriage"]		= "Äktenskapets decennium";
$pgv_lang["avg_age"]				= "Genomsnittlig ålder";

//-- Merge Records
$pgv_lang["merge_same"] 		= "Posterna är inte av samma typ. Kan inte slå ihop poster som inte är samma typ.";
$pgv_lang["merge_step1"]		= "Slå ihop steg 1 av 3";
$pgv_lang["merge_step2"]		= "Slå ihop steg 2 av 3";
$pgv_lang["merge_step3"]		= "Slå ihop steg 3 av 3";
$pgv_lang["select_gedcom_records"]	= "Välj 2 GEDCOM-poster att slå ihop. Posterna måste vara av samma typ.";
$pgv_lang["merge_to"]   		= "Slå ihop med ID:";
$pgv_lang["merge_from"] 		= "Slå ihop från ID:";
$pgv_lang["merge_facts_same"]   = "Följande fakta är exakt samma i båda posterna och kommer att automatiskt slås ihop";
$pgv_lang["no_matches_found"]   = "Inga matchande fakta hittades";
$pgv_lang["unmatching_facts"]   = "Följande fakta matchade inte. Välj informationen du vill behålla.";
$pgv_lang["record"] 			= "Post";
$pgv_lang["adding"] 			= "Lägga till";
$pgv_lang["updating_linked"]	= "Uppdatera länkade poster";
$pgv_lang["merge_more"] 		= "Slå ihop flera poster.";
$pgv_lang["same_ids"]   		= "Du skrev in samma ID. Du kan inte slå ihop samma poster.";
$pgv_lang["updated_favorites"] 			= "favoriter uppdaterade.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "Släktöversikt";
$pgv_lang["gen_ancestry_chart"] 	= "#PEDIGREE_GENERATIONS# generationer släktöversikten";
$pgv_lang["chart_style"]			= "Tavelstil";
$pgv_lang["chart_list"]				= "Lista";
$pgv_lang["chart_booklet"]   		= "Häfte";
$pgv_lang["show_cousins"]			= "Visa kusiner";
// 1st generation
$pgv_lang["sosa_2"] 				= "Far";
$pgv_lang["sosa_3"] 			  	= "Mor";
// 2nd generation
$pgv_lang["sosa_4"] 				= "Farfar";
$pgv_lang["sosa_5"] 				= "Farmor";
$pgv_lang["sosa_6"] 				= "Morfar";
$pgv_lang["sosa_7"] 				= "Mormor";
// 3rd generation
$pgv_lang["sosa_8"] 				= "Farfars far";
$pgv_lang["sosa_9"] 				= "Farfars mor";
$pgv_lang["sosa_10"]				= "Farmors far";
$pgv_lang["sosa_11"]				= "Farmors mor";
$pgv_lang["sosa_12"]				= "Morfars far";
$pgv_lang["sosa_13"]				= "Morfars mor";
$pgv_lang["sosa_14"]				= "Mormors far";
$pgv_lang["sosa_15"]				= "Mormors mor";
// 4th generation
$pgv_lang["sosa_16"]				= "Farfars farfar";
$pgv_lang["sosa_17"]				= "Farfars farmor";
$pgv_lang["sosa_18"]				= "Farfars morfar";
$pgv_lang["sosa_19"]				= "Farfars mormor";
$pgv_lang["sosa_20"]				= "Farmors farfar";
$pgv_lang["sosa_21"]				= "Farmors farmor";
$pgv_lang["sosa_22"]				= "Farmors morfar";
$pgv_lang["sosa_23"]				= "Farmors mormor";
$pgv_lang["sosa_24"]				= "Morfars farfar";
$pgv_lang["sosa_25"]				= "Morfars farmor";
$pgv_lang["sosa_26"]				= "Morfars morfar";
$pgv_lang["sosa_27"]				= "Morfars mormor";
$pgv_lang["sosa_28"]				= "Mormors farmor";
$pgv_lang["sosa_29"]				= "Mormors farmor";
$pgv_lang["sosa_30"]				= "Mormors morfar";
$pgv_lang["sosa_31"]				= "Mormors mormor";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x farfars farfar";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x farfars farmor";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x farfars mor";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x mormors mormor";

//-- FAN CHART
$pgv_lang["compact_chart"]		= "Kompakt släktöversikt";
$pgv_lang["fan_chart"]			= "Solfjäder";
$pgv_lang["gen_fan_chart"]		= "#PEDIGREE_GENERATIONS# Generationer i Solfjädertavla";
$pgv_lang["fan_width"]			= "Solfjäderns bredd";
$pgv_lang["gd_library"]  		= "Felkonfigurering av PHP-servern: GD 2.x biblioteket behövs för att använda bildfunktioner.";
$pgv_lang["gd_freetype"]		= "Felkonfigurering av PHP-servern: Freetype biblioteket behövs för att använda TrueType-fonter.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]   	= "Teckensnittsfilen finns inte på PHP servern";
$pgv_lang["fanchart_IE"]		= "Solfjäderstavlan kan inte skrivas ut direkt av din webläsare. Använd högerklick, spara och skriv sedan ut bilden.";

//-- RSS Feed
$pgv_lang["rss_descr"]			= "Nyheter och länkar från #GLOBALS[GEDCOM_TITLE]#-sajten";
$pgv_lang["rss_logo_descr"]		= "RSS-flöde skapat med PhpGedView";
$pgv_lang["rss_feeds"]			= "RSS flöden";
$pgv_lang["no_feed_title"]		= "Matningen är inte tillgänglig";
$pgv_lang["no_feed"]			= "Det finns ingen RSS-matning tillgänglig för denna PhpGedViewsajt";
$pgv_lang["feed_login"]			= "Om du haer ett konto på denna PhpGedViewsajt då kan du <a href=\"#AUTH_URL#\">logga in</a> på servern med normal HTTP autenticiering för att se personlig inforamtion.";
$pgv_lang["authenticated_feed"]		= "Autenticeringsmatning";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] 			= "Deltagare";
$pgv_lang["attending"] 			= "Närvara";
$pgv_lang["best_man"] = "Best man";
$pgv_lang["bridesmaid"] = "Brudtärna";
$pgv_lang["buyer"] 				= "Köpare";
$pgv_lang["circumciser"] 		= "Omskärare";
$pgv_lang["civil_registrar"] 	= "Borglig vigselförättare";
$pgv_lang["employee"] = "Anställd";
$pgv_lang["employer"] = "Arbetsgivare";
$pgv_lang["foster_child"] = "Fosterbarn";
$pgv_lang["foster_father"] = "Fosterfar";
$pgv_lang["foster_mother"] = "Fostermor";
$pgv_lang["friend"] 			= "Vän";
$pgv_lang["godfather"] 			= "Gudfader";
$pgv_lang["godmother"] 			= "Gudmoder";
$pgv_lang["godparent"] 			= "Gudförälder";
$pgv_lang["godson"]		= "Gudson";
$pgv_lang["goddaughter"] = "Guddotter";
$pgv_lang["godchild"]	= "Gudbarn";
$pgv_lang["guardian"]	= "Målsman";
$pgv_lang["informant"] 			= "Sagesman";
$pgv_lang["lodger"] 			= "Inneboende";
$pgv_lang["nanny"] = "Barnsköterska";
$pgv_lang["nurse"] 				= "Sköterska";
$pgv_lang["owner"] = "Ägare";
$pgv_lang["priest"] 			= "Präst";
$pgv_lang["rabbi"] 				= "Rabbi";
$pgv_lang["registry_officer"] 	= "Registreringskontor";
$pgv_lang["seller"] 			= "Säljare";
$pgv_lang["servant"] 			= "Tjänare";
$pgv_lang["slave"] = "Slav";
$pgv_lang["twin"] 				= "Tvilling";
$pgv_lang["twin_brother"] 		= "Tvillingbror";
$pgv_lang["twin_sister"] 		= "Tvillingsyster";
$pgv_lang["ward"] = "Ward";
$pgv_lang["witness"] 			= "Vittne";

//-- statistics utility
$pgv_lang["stat_create"]		= "Skapa ditt eget diagram";
$pgv_lang["statutci"]			= "Kan inte skapa index";
$pgv_lang["statnnames"] 		= "antal namn";
$pgv_lang["statnfam"]   		= "antal familjer";
$pgv_lang["statnmale"]  		= "antal män";
$pgv_lang["statnfemale"]		= "antal kvinnor";
$pgv_lang["with_sources"]		= "Med källor";
$pgv_lang["without_sources"]	= "Utan källor";
$pgv_lang["stat_sindi"]			= "Personer med källor";
$pgv_lang["stat_sfam"]			= "Familjer med källor";
$pgv_lang["statvars"]			= "Fyll i följande variabler för tavlan";
$pgv_lang["statlxa"]			= "Välj diagramtyp:";
$pgv_lang["statlya"]			= "resultat:";
$pgv_lang["statlza"]			= "Kategorier:";
$pgv_lang["map_type"]			= "Karttyp";
$pgv_lang["stat_1_map"]			= "Fördelning av personer";
$pgv_lang["stat_2_map"]			= "Födelse per land";
$pgv_lang["stat_3_map"]			= "Dödsfall per land";
$pgv_lang["stat_4_map"]			= "Äktenskap per land";
$pgv_lang["stat_5_birth"]		= "Födslar per århundrade";
$pgv_lang["stat_6_death"]		= "Dödsfall per århundrade";
$pgv_lang["stat_7_marr"]		= "Äktenskap per århundrade";
$pgv_lang["stat_7_div"]			= "Skilsmässor per århundrade";
$pgv_lang["stat_8_fam"]			= "Familjer med källor";
$pgv_lang["stat_9_indi"]		= "Personer med källor";
$pgv_lang["stat_10_none"]		= "inga";
$pgv_lang["stat_11_mb"]			= "Födelsemånad";
$pgv_lang["stat_12_md"]			= "Dödsmånad";
$pgv_lang["stat_13_mm"]			= "Vigselmånad";
$pgv_lang["stat_14_mb1"]		= "Födelsemånad för det första barnet i relationen";
$pgv_lang["stat_15_mm1"]		= "Månad för första vigseln";
$pgv_lang["stat_16_mmb"]		= "Månader mellan vigsel och första barnet";
$pgv_lang["stat_17_arb"]		= "Ålder i förhållande till födelseår";
$pgv_lang["stat_18_ard"]		= "Ålder i förhållande till dödsår";
$pgv_lang["stat_18_aard"]		= "Genomsnittlig ålder relaterad till dödsårhundrade";
$pgv_lang["stat_19_arm"]		= "Ålder vid vigsel";
$pgv_lang["stat_19_aarm"]		= "Genomsnittsålder i äktenskapets århundrade";
$pgv_lang["stat_20_arm1"]		= "Ålder vid första vigseln";
$pgv_lang["stat_21_nok"]		= "Antal barn";
$pgv_lang["stat_22_fwok"]		= "Antal familjer utan barn";
$pgv_lang["stat_200_none"]		= "alla (eller tom)";
$pgv_lang["stat_201_num"]		= "antal";
$pgv_lang["stat_202_perc"]		= "procent";
$pgv_lang["stat_300_none"]		= "inga";
$pgv_lang["stat_301_mf"]		= "kön";
$pgv_lang["stat_302_cgp"]		= "datumperioder";
$pgv_lang["century"]			= "århundrade";
$pgv_lang["stat_age"]			= "Ålder";
$pgv_lang["no_date_fam"]		= "okänd";
$pgv_lang["statar_xgp"]			= "gränser för perioder:";
$pgv_lang["statar_xgl"]			= "gränser för ålder:";
$pgv_lang["statar_xgm"]			= "gränser för månad:";
$pgv_lang["statar_xga"]			= "gränser för antal:";
$pgv_lang["statar_zgp"]			= "gränser för datumperioder:";
$pgv_lang["less"]				= "mindre än";
$pgv_lang["over"]				= "mer än";
$pgv_lang["interval"]			= "intervall";
$pgv_lang["aft_marr"]			= "månader efter äktenskapet";
$pgv_lang["bef_marr"]			= "månader före och efter äktenskapet";
$pgv_lang["quarters"]			= "trimestrar efter äktenskapet";
$pgv_lang["half_year"]			= "halvår efter äktenskapet";
$pgv_lang["one_child"]			= "intervall ett barn";
$pgv_lang["two_children"]		= "intervall två barn";
$pgv_lang["statreset"]			= "Återställ";
$pgv_lang["statsubmit"]			= "Visa tavla";
$pgv_lang["stat_largest_families"] = "Största familjer";

$pgv_lang["stat_own_charts"]		= "Egna diagram";
$pgv_lang["statnliving"]			= "Antal boende";
$pgv_lang["statndead"]				= "Antal döda";
$pgv_lang["stat_births"]			= "Antal födslar";
$pgv_lang["stat_marriages"]			= "Antal äktenskap";
$pgv_lang["stat_divorces"]			= "Antal skilsmässor";
$pgv_lang["stat_deaths"]			= "Antal dödsfall";
$pgv_lang["stat_first_birth"]		= "Tidigaste födelse";
$pgv_lang["stat_first_marriage"]	= "Tidigaste äktenskap";
$pgv_lang["stat_first_divorce"]		= "Tidigaste skilsmässan";
$pgv_lang["stat_first_death"]		= "Tidigaste död";
$pgv_lang["stat_last_birth"]		= "Senaste födelse";
$pgv_lang["stat_last_marriage"]		= "Senaste äktenskap";
$pgv_lang["stat_last_divorce"]		= "Senaste skilsmässan";
$pgv_lang["stat_last_death"]		= "Senaste död";
$pgv_lang["stat_lifespan"]			= "Livslängd";
$pgv_lang["stat_lived_longest"]		= "Högsta ålder vid döden";
$pgv_lang["stat_live_longest"]		= "Äldsta levande människor";
$pgv_lang["stat_marr_age"]			= "Äktenskapets längd";
$pgv_lang["stat_long_marr_age"]		= "Längsta äktenskap";
$pgv_lang["stat_short_marr_age"]	= "Kortaste äktenskapet";
$pgv_lang["stat_youngest_male"]		= "Yngsta hane";
$pgv_lang["stat_youngest_female"]	= "Yngsta kvinnan";
$pgv_lang["stat_oldest_male"]		= "Äldsta hane";
$pgv_lang["stat_oldest_female"]		= "Äldsta kvinnan";
$pgv_lang["stat_childbirth_age"]	= "Ålder vid födseln av barnet";
$pgv_lang["stat_youngest_father"]	= "Yngsta far";
$pgv_lang["stat_youngest_mother"]	= "Yngsta mor";
$pgv_lang["stat_oldest_father"]		= "Äldste far";
$pgv_lang["stat_oldest_mother"]		= "Äldste mor";
$pgv_lang["stat_children_in_fam"]	= "Barn i familjen";
$pgv_lang["stat_largest_gfamilies"]	= "Största barnfamiljer";
$pgv_lang["stat_age_difference"]	= "Åldersskillnad";
$pgv_lang["stat_age_siblings"]		= "Ålder mellan syskon";
$pgv_lang["stat_top_age_siblings"]	= "Högsta ålder mellan syskon";
$pgv_lang["stat_age_mf_spouse"]		= "Ålder mellan man och fru";
$pgv_lang["stat_age_fm_spouse"]		= "Ålder mellan fru och man";
$pgv_lang["stat_names"]				= "Namn";
$pgv_lang["statnsurnames"]			= "Antal efternamn";
$pgv_lang["statngivennames"]		= "Antal förnamn";
$pgv_lang["top_surnames"]			= "Vanligaste efternamn";
$pgv_lang["top_givennames"]			= "Vanligaste förnamn";
$pgv_lang["events"]					= "Händelsen";
$pgv_lang["stat_records"]			= "Register";
$pgv_lang["stat_notes"]				= "Anteckningar";
$pgv_lang["stat_first_event"]		= "Första händelsen";
$pgv_lang["stat_last_event"]		= "Senaste händelsen";
$pgv_lang["stat_places"]			= "Platser";
$pgv_lang["stat_birth_places"]		= "Födelseplatser";
$pgv_lang["stat_marriage_places"]	= "Äktenskap platser";
$pgv_lang["stat_death_places"]		= "Dödsplatser";
$pgv_lang["stat_countries"]			= "Händelser i länder";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistikdiagram";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplinfo"]			= "variabler på tavlan:";
$pgv_lang["stpltype"]			= "typ:";
$pgv_lang["stplnoim"]			= " inte implementerad:";
$pgv_lang["stplmf"]			 	= " per kön";
$pgv_lang["stplipot"]			= " per tidsperiod";
$pgv_lang["stplmonth"]			= "månad";
$pgv_lang["stplnumbers"]		= "antal";
$pgv_lang["stplnuch"]			= "barn";
$pgv_lang["stplage"]			= "ålder";
$pgv_lang["stplperc"]			= "Procent";
$pgv_lang["stplnumof"]			 = "Antal";
$pgv_lang["stplmarrbirth"]		 = "Månader mellan vigsel och första barnets födelse";
$pgv_lang["indi_distribution_chart"]	= "Fördelningstabell för personer";
$pgv_lang["surname_distribution_chart"]	= "Fördelningstabell över efternamn";
$pgv_lang["g_chart_high"]		= "Högsta befolkningen";
$pgv_lang["g_chart_low"]		= "Lägsta befolkning";
$pgv_lang["g_chart_nobody"]		= "Ingen alls";
$pgv_lang["area_chart"]			= "Geografiskt blocket";
$pgv_lang["europe_chart"]		= "Europa";
$pgv_lang["s_america_chart"]	= "Sydamerika";
$pgv_lang["asia_chart"]			= "Asien";
$pgv_lang["middle_east_chart"]	= "Mellanöstern";
$pgv_lang["africa_chart"]		= "Afrika";
$pgv_lang["world_chart"]		= "Värld";

//-- alive in year
$pgv_lang["alive_in_year"]		= "Levde år";
$pgv_lang["is_alive_in"]		= "Är i livet år #YEAR#";
$pgv_lang["alive"]				= "Levde";
$pgv_lang["dead"]				= "Död ";
$pgv_lang["maybe"]				= "Kanske ";
$pgv_lang["both_alive"]					= "Båda levde ";
$pgv_lang["both_dead"]					= "Båda döda ";

//-- Help system
$pgv_lang["definitions"]		= "Definitioner";

//-- Index_edit
$pgv_lang["block_desc"]			= "Områdesbeskrivning";
$pgv_lang["click_here"]			= "Klicka här för att fortsätta";
$pgv_lang["click_here_help"]	= "~#pgv_lang[click_here]#~<br /><br />Klicka på denna knapp för att spara dina ändringarna.<br /><br />Du kommer att returneras till #pgv_lang[welcome]# eller #pgv_lang[mygedview]#-sidan, men ändringar kanske inte syns. Du kan behöva att ladda om sidan för att den ska visa sidan korrekt.";
$pgv_lang["block_summaries"]	= "~#pgv_lang[block_desc]#~<br /><br />Här är en kort beskrivning för varje blocket som du kan placera på #pgv_lang[welcome]# eller #pgv_lang[mygedview]# sidan.<br /><br /><table border='1' width='95%'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#GLOBALS[blockSummaries]#</table>";

//-- Find page
$pgv_lang["total_places"]		= "Orter hittade";
$pgv_lang["media_contains"]		= "Media innehåller:";
$pgv_lang["repo_contains"]		= "Arkivet innehåller:";
$pgv_lang["shared_note_contains"]	= "Delad anteckning innehåller:";
$pgv_lang["source_contains"]	= "Källa innehåller:";
$pgv_lang["display_all"]		= "Visa alla";

// FAQ Page
$pgv_lang["add_faq_header"] 	= "FAQ rubrik";
$pgv_lang["add_faq_body"] 		= "FAQ innehåll";
$pgv_lang["add_faq_order"] 		= "FAQ position";
$pgv_lang["add_faq_visibility"] = "FAQ synlighet";
$pgv_lang["no_faq_items"] 		= "FAQ listan är tom.";
$pgv_lang["position_item"] 		= "Position för artikel";
$pgv_lang["faq_list"] 			= "FAQ lista";
$pgv_lang["confirm_faq_delete"]	= "Är du säker på att du vill radera denna post?";
$pgv_lang["preview"]			=  "Förhandsgranska";
$pgv_lang["no_id"] 				= "Du har inte angett något FAQ ID!";

// Help search
$pgv_lang["hs_title"] 			= "Hjälptext för sökning";
$pgv_lang["hs_search"] 			= "Sök";
$pgv_lang["hs_close"] 			= "Stäng fönster";
$pgv_lang["hs_results"] 		= "Funna resultat:";
$pgv_lang["hs_keyword"] 		= "Sök efter";
$pgv_lang["hs_searchin"]		= "Sök i:";
$pgv_lang["hs_searchuser"]		= "Användarhjälp";
$pgv_lang["hs_searchmodules"]	= "Modulhjälp";
$pgv_lang["hs_searchconfig"]	= "Administratörshjälp";
$pgv_lang["hs_searchhow"]		= "Sökningstyp";
$pgv_lang["hs_searchall"]		= "Alla ord";
$pgv_lang["hs_searchany"]		= "Något ord";
$pgv_lang["hs_searchsentence"]	= "Exakt fras";
$pgv_lang["hs_intruehelp"]		= "Endast hjälptext";
$pgv_lang["hs_inallhelp"]		= "All text";

// Media import
$pgv_lang["choose"] = "Välj:";
$pgv_lang["account_information"] = "Kontoinformation";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] 			= "Ljud";
$pgv_lang["TYPE__book"] 			= "Bok";
$pgv_lang["TYPE__card"] 			= "Kort";
$pgv_lang["TYPE__certificate"]		= "Certifikat";
$pgv_lang["TYPE__coat"] = "Vapen";
$pgv_lang["TYPE__document"] 		= "Dokument";
$pgv_lang["TYPE__electronic"] 		= "Elektronisk";
$pgv_lang["TYPE__fiche"] 			= "Mikrokort";
$pgv_lang["TYPE__film"] 			= "Mikrofilm";
$pgv_lang["TYPE__magazine"] 		= "Magasin";
$pgv_lang["TYPE__manuscript"] 		= "Manuskript";
$pgv_lang["TYPE__map"] 				= "Karta";
$pgv_lang["TYPE__newspaper"] 		= "Tidning";
$pgv_lang["TYPE__photo"] 			= "Foto";
$pgv_lang["TYPE__tombstone"] 		= "Gravsten";
$pgv_lang["TYPE__video"] 			= "Video";
$pgv_lang["TYPE__painting"] = "Målning";
$pgv_lang["TYPE__other"] = "Annan";

//-- Other media suff
$pgv_lang["view_slideshow"] = "Visa som bildspel";
$pgv_lang["download_image"]			= "Ladda ner fil";
$pgv_lang["no_media"]				= "Ingen media hittades";
$pgv_lang["media_privacy"]			= "Integritetsrestriktioner hindrar dig från att se denna post";
$pgv_lang["relations_heading"]		= "Bilden relaterar till:";
$pgv_lang["file_size"]				= "Filstorlek";
$pgv_lang["img_size"]				= "Bildstorlek";
$pgv_lang["media_broken"]			= "Mediafilen är trasig och kan inte få ett vattenmärke";
$pgv_lang["unknown_mime"]			= "Mediabrandväggsfel: &gt;okänd Mimetyp&lt; för filen";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "Okänd funktion: [action].";
$pgv_lang["module_error_unknown_type"] = "Okänd modultyp.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Visa personer som lever det angivna året.";
$pgv_lang["button_BIRT_Y100"] = "Visa personer födda de senaste 100 åren.";
$pgv_lang["button_BIRT_YES"] = "Visa personer födda för mer än 100 år sedan.";
$pgv_lang["button_DEAT_H"] = "Visa par där den manliga partnern är avliden.";
$pgv_lang["button_DEAT_N"] = "Visa personer som lever eller par där båda är vid liv.";
$pgv_lang["button_DEAT_W"] = "Visa par där endast den kvinliga partnern är död.";
$pgv_lang["button_DEAT_Y"] = "Visa personer som är döda eller par där båda parter är avlidna.";
$pgv_lang["button_DEAT_Y100"] = "Visa personer som dött de senaste 100 åren.";
$pgv_lang["button_DEAT_YES"] = "Visa personer som dog för mer än 100 år sedan.";
$pgv_lang["button_MARR_DIV"] = "Visa skilda par.";
$pgv_lang["button_MARR_U"] = "Visa par med okänt vigseldatum.";
$pgv_lang["button_MARR_Y100"] = "Visa par som gift sig de senaste 100 åren.";
$pgv_lang["button_MARR_YES"] = "Visa par som gifte sig för mer än 100 år sedan.";
$pgv_lang["button_reset"] = "Återställ listan till standard.";
$pgv_lang["button_SEX_F"] = "Visa endast kvinnor.";
$pgv_lang["button_SEX_M"] = "Visa endast män.";
$pgv_lang["button_SEX_U"] = "Visa endast personer som inte har ett känt kön.";
$pgv_lang["button_TREE_L"] = "Visa «löv» för par eller personer. Dessa är personer som lever men har inga barn registereade i databasen.";
$pgv_lang["button_TREE_R"] = "Visa «rötter» för par eller personer. Dessa personer kan också kallas «patriarker». Dessa är personer som inte har föräldrar registrerade i databasen.";
$pgv_lang["sort_column"] = "Sortera på denna kolumn.";
?>

<?php
/**
 * Danish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  PGV Development Team
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
if (preg_match("/lang\...\.php$/", $_SERVER["PHP_SELF"])>0) {
	print "Du har ikke direkte adgang til en sprogfil.";
	exit;
}

$pgv_lang["genealogy"]					= "slægtsforskning";
$pgv_lang["activate"]					= "Aktiver";
$pgv_lang["deactivate"]					= "Deaktiver";
$pgv_lang["play"]					= "Afspil";
$pgv_lang["stop"]					= "Stop";
$pgv_lang["random_media_start_slide"]	= "Start fremvisning automatisk når siden er læst ind?";
$pgv_lang["random_media_ajax_controls"]	= "Vis kontrolknapper for fremvisningen?";
$pgv_lang["description"]			= "Beskrivelse";
$pgv_lang["current_dir"]			= "Nuværende folder: ";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Vis ID numre ved siden af navne";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Vis billede ud for personen";
$pgv_lang["view_img_details"]		= "Vis billeddetaljer";
$pgv_lang["server_folder"]			= "Mappenavn på server";
$pgv_lang["media_options"]			= "Medieindstillinger";
$pgv_lang["confirm_password"]		= "Du skal bekræfte adgangskoden ved at indtaste den i begge felter.";
$pgv_lang["enter_email"]		= "Du skal opgive en e-mail-adresse.";
$pgv_lang["enter_fullname"]			= "Du skal opgive for- og efternavn.";
$pgv_lang["name"]					= "Navn";
$pgv_lang["children"]			= "Børn";
$pgv_lang["child"]				= "Barn";
$pgv_lang["as_child"]			= "Forældre og familie";
$pgv_lang["source_menu"]			= "Menu til kilder";
$pgv_lang["other_records"]		= "Poster, der er knyttet til denne kilde:";
$pgv_lang["other_repo_records"]		= "Kilder, der er knyttet til dette opbevaringssted:";
$pgv_lang["repo_info"]				= "Information om opbevaringssted";
$pgv_lang["enter_terms"]		= "Skriv søgeord";
$pgv_lang["search_asso_label"]		= "Beslægtede";
$pgv_lang["search_asso_text"]		= "Vis beslægtede personer/familier";
$pgv_lang["search_DM"]				= "<A HREF=\"http://en.wikipedia.org/wiki/Daitch-Mokotoff_Soundex\">Daitch-Mokotoff</A> (1985 - bedre)";
$pgv_lang["search_fams"]			= "Familier";
$pgv_lang["search_gedcom"]		= "Søg i slægtsdatabasen";
$pgv_lang["search_geds"]			= "Søg i disse slægtsdatabaser";
$pgv_lang["search_indis"]			= "Personer";
$pgv_lang["search_inrecs"]			= "Søg efter";
$pgv_lang["search_prtall"]			= "Alle navne";
$pgv_lang["search_prthit"]			= "Navne med hit";
$pgv_lang["results_per_page"]		= "Resultater per side";
$pgv_lang["firstname_search"]	= "Fornavn";
$pgv_lang["search_prtnames"]		= "Personnavne, der udskrives";
$pgv_lang["other_searches"]			= "Andre søgninger";
$pgv_lang["add_to_cart"]		= "Tilføj til udklipsholderen";
$pgv_lang["view_gedcom"]		= "Vis GEDCOM-post";
$pgv_lang["welcome"]			= "Velkommen";
$pgv_lang["son"]				= "Søn";
$pgv_lang["daughter"]			= "Datter";
$pgv_lang["welcome_page"]		= "Forside";
$pgv_lang["editowndata"]		= "Min konto";
$pgv_lang["user_admin"]				= "Brugere og rettigheder";
$pgv_lang["manage_media"]			= "Håndtér mediefiler";
$pgv_lang["search_general"]			= "Generel søgning";
$pgv_lang["clipping_privacy"]		= "Nogle emner kunne ikke tilføjes på grund af privatlivs-begrænsninger";
$pgv_lang["chart_new"]				= "Anetræ kort";
$pgv_lang["loading"]				= "Indlæser...";
$pgv_lang["clear_chart"]			= "Nulstil kort";
$pgv_lang["file_information"]		= "Fil information";
$pgv_lang["choose_file_type"]		= "Vælg filtype";
$pgv_lang["add_individual_by_id"]		= "Tilføj individ via ID";
$pgv_lang["advanced_options"]		= "Avancerede indstillinger";
$pgv_lang["zip_files"]				= "Zipfile(r)";
$pgv_lang["include_media"]			= "Inkluder medie (zipper automatisk filer)";
$pgv_lang["roman_surn"]				= "Romanized Surname";
$pgv_lang["roman_givn"]				= "Romanized Given Names";
$pgv_lang["include"]			= "Inkluder:";
$pgv_lang["page_x_of_y"]				= "Side #GLOBALS[currentPage]# af #GLOBALS[lastPage]#";
$pgv_lang["options"]			= "Valg:";
$pgv_lang["config_update_ok"]	= "Opdatering af konfigurationsfilen er udført.";
$pgv_lang["page_size"]					= "Sidestørrelse";
$pgv_lang["record_not_found"]			= "Den søgte GEDCOM-post kunne ikke findes.  Dette kan skyldes et link til en ugyldig person eller en fejl i GEDCOM-filen.";
$pgv_lang["result_page"]				= "Resultatside";
$pgv_lang["edit_media"]					= "Rediger mediefil";
$pgv_lang["wiki_main_page"]				= "Wiki hovedside";
$pgv_lang["wiki_users_guide"]			= "Wiki brugervejledning";
$pgv_lang["wiki_admin_guide"]			= "Wiki administrators vejledning";
$pgv_lang["no_search_for"]			= "Vær sikker på at angive et valg, der skal søges efter.";
$pgv_lang["no_search_site"]			= "Vær sikker på at vælge mindst en ekstern site.";
$pgv_lang["search_sites"] 			= "Websteder der skal søges efter";
$pgv_lang["site_list"]				= "Websted: ";
$pgv_lang["site_had"]				= " indeholdt følgende";
$pgv_lang["indi_is_remote"]	      	= "Informationen om denne person blev linket til fra en ekstern site.";
$pgv_lang["link_remote"]            = "Opret link til ekstern person";
$pgv_lang["label_search_engine_detected"]  = "Søgemaskine edderkop opdaget";
$pgv_lang["ex-spouse"]              =	"Eks";
$pgv_lang["ex-wife"]                =	"Ekskone";
$pgv_lang["ex-husband"]             =	"Eksmand";
$pgv_lang["noemail"] 				= "Adresser uden e-mails";
$pgv_lang["onlyemail"] 				= "Kun adresser med e-mails";
$pgv_lang["maxviews_exceeded"]		= "Antal sidevisninger overskredet, forsøg igen senere.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Send meddelelse til brugere, der ikke har logget ind i 6 måneder";
$pgv_lang["broadcast_never_logged_in"]	= "Send meddelelse til brugere, der aldrig har logget ind";
$pgv_lang["stats_to_show"]			= "Vælg statistik, der skal vises i denne ramme";
$pgv_lang["stat_avg_age_at_death"]	= "Gennemsnitlig alder ved død";
$pgv_lang["stat_longest_life"]		= "Den længstlevende person";
$pgv_lang["stat_most_children"]		= "Familie med de fleste børn";
$pgv_lang["stat_average_children"]	= "Gennemsnitlig antal børn pr. familie";
$pgv_lang["stat_events"]			= "Total antal begivenheder";
$pgv_lang["stat_media"]				= "Medieobjekter";
$pgv_lang["stat_surnames"]			= "Total antal efternavne";
$pgv_lang["stat_users"]				= "Total antal brugere";
$pgv_lang["no_family_facts"]		= "Ingen fakta for denne familie.";
$pgv_lang["stat_males"]				= "Total antal mænd";
$pgv_lang["stat_females"]			= "Total antal kvinder";
$pgv_lang["sunday_1st"]					= "Sø";
$pgv_lang["monday_1st"]					= "Ma";
$pgv_lang["tuesday_1st"]				= "Ti";
$pgv_lang["wednesday_1st"]			= "On";
$pgv_lang["thursday_1st"]				= "To";
$pgv_lang["friday_1st"]					= "Fr";
$pgv_lang["saturday_1st"]				= "Lø";
$pgv_lang["january_1st"]			= "Jan";
$pgv_lang["february_1st"]			= "Feb";
$pgv_lang["march_1st"]				= "Marts";
$pgv_lang["april_1st"]				= "April";
$pgv_lang["may_1st"]				= "Maj";
$pgv_lang["june_1st"]				= "Juni";
$pgv_lang["july_1st"]				= "Juli";
$pgv_lang["august_1st"]				= "Aug";
$pgv_lang["september_1st"]			= "Sep";
$pgv_lang["october_1st"]			= "Okt";
$pgv_lang["november_1st"]			= "Nov";
$pgv_lang["december_1st"]			= "Dec";
$pgv_lang["edit_source"]			= "Rediger kilde";
$pgv_lang["familybook_chart"]		= "Familiebogstræ";
$pgv_lang["family_of"]				= "Familie til:&nbsp;";
$pgv_lang["descent_steps"]			= "Efterkommertrin";
$pgv_lang["cancel"]					= "Afbryd";
$pgv_lang["cookie_help"]			= "Denne site anvender cookies for at holde styr på din login status.<br /><br />Cookies er tilsyneladende ikke aktiveret i din browser. Du skal aktivere cookies for denne site førend du kan logge ind.  Se i din browsers hjælp for information vedr. aktivering af cookies.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]		= "Informationen for denne person blev linket via en ekstern site.";
$pgv_lang["link_remote"]            = "Link til ekstern person";
//Add Remote Link
$pgv_lang["title_search_link"]      = "Tilføj lokal link";
$pgv_lang["label_site_url2"]        = "Site URL";
//new stuff
$pgv_lang["cancel"]					= "Afbryd";
$pgv_lang["delete_family_confirm"]	= "Slettes familien vil alle links mellem personer fjernes, men personerne vil ikke blive slettet.  Er du sikker på at du ønsker at slette denne familie?";
$pgv_lang["delete_family"]			= "Slet familie";
$pgv_lang["add_favorite"]			= "Tilføj en ny favorit";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Skriv en note vedr. denne favorit (valgfri)";
$pgv_lang["add_fav_or_enter_url"]	= "ELLER<br />\Angiv en URL adresse og en titel";
$pgv_lang["add_fav_enter_id"]		= "Angiv en person, familie eller kilde ID";
$pgv_lang["next_email_sent"]		= "Den næste påmindelse via e-mail vil blive sendt efter ";
$pgv_lang["last_email_sent"]		= "Den sidste påmindelse via e-mail er sendt ";
$pgv_lang["remove_child"]			= "Fjern dette barn fra familien";
$pgv_lang["link_new_husb"]			= "Tilføj en eksisterende person som ægtemand";
$pgv_lang["link_new_wife"]			= "Tilføj en eksisterende person som hustru";
$pgv_lang["address_labels"]			= "Adressemærkat";
$pgv_lang["filter_address"]			= "Vis adresser, der indeholder:";
$pgv_lang["address_list"]			= "Adresseliste";
$pgv_lang["autocomplete"]			= "Autofærdigør";
$pgv_lang["index_edit_advice"]		= "Marker navnet på en ramme og klik på en af pilene for at flytte den markerede ramme i pilens retning.";
$pgv_lang["changelog"]				= "Ændringer i version #VERSION#";
$pgv_lang["html_block_descr"]		= "Dette er en simpel HTML blok, som du kan placere på din side for at vise en besked (i HTML-format).";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Anbring din titel her</b></p><br /><p>Klik på konfigurationsknappen";
$pgv_lang["html_block_sample_part2"]	= " for at ændre det, der printes.</p>";
$pgv_lang["html_block_name"]		= "HTML blok til enkle beskeder";
$pgv_lang["htmlplus_block_name"]	= "Avanceret HTML";
$pgv_lang["htmlplus_block_descr"]	= "Dette er en HTML blok, som du kan placere på din side for at tilføje den type af meddelelse du ønsker.  Du kan indsætte referencer til information fra din GEDCOM-fil ind i HTML teksten.";
$pgv_lang["htmlplus_block_templates"] = "Skabeloner";
$pgv_lang["htmlplus_block_content"] = "Indhold";
$pgv_lang["htmlplus_block_narrative"] = "Fortællende stil (kun på engelsk)";
$pgv_lang["htmlplus_block_custom"]	= "Tilpasset";
$pgv_lang["htmlplus_block_keyword"]	= "Nøgleord eksempler (kun engelsk)";
$pgv_lang["htmlplus_block_taglist"]	= "Mærkeliste";
$pgv_lang["htmlplus_block_compat"]	= "Kompatabilitets tilstand";
$pgv_lang["htmlplus_block_current"]	= "Nuværende";
$pgv_lang["htmlplus_block_default"]	= "Standard";
$pgv_lang["htmlplus_block_gedcom"]	= "Anetræ";
$pgv_lang["htmlplus_block_birth"]	= "født";
$pgv_lang["htmlplus_block_death"]	= "død";
$pgv_lang["htmlplus_block_marrage"]	= "ægteskab";
$pgv_lang["htmlplus_block_adoption"]= "adoption";
$pgv_lang["htmlplus_block_burial"]	= "begravelse";
$pgv_lang["htmlplus_block_census"]	= "census tilføjet";
$pgv_lang["num_to_show"]			= "Antal elementer der skal vises";
$pgv_lang["days_to_show"]			= "Antal dage der skal vises";
$pgv_lang["before_or_after"]		= "Sæt antal før eller efter navnet?";
$pgv_lang["before"]					= "før";
$pgv_lang["after"]					= "efter";
$pgv_lang["config_block"]			= "Konfigurer rammen";
$pgv_lang["enter_comments"]			= "Angiv venligst i feltet: Kommentarer, hvordan du er i slægtskab med personer i databasen.";
$pgv_lang["comments"]				= "Kommentarer";
$pgv_lang["child-family"]			= "Forældre og søskende";
$pgv_lang["spouse-family"]			= "Ægtefælle og børn";
$pgv_lang["direct-ancestors"]		= "Forfædre i direkte linie";
$pgv_lang["ancestors"]				= "Forfædre i direkte linie og deres familier";
$pgv_lang["descendants"]			= "Efterkommere";
$pgv_lang["choose_relatives"]		= "Vælg slægtninge";
$pgv_lang["relatives_report"]		= "Slægtningeudskrift";
$pgv_lang["total_living"]			= "Antal levende:";
$pgv_lang["total_dead"]				= "Antal døde:";
$pgv_lang["total_not_born"]			= "Antal ikke fødte endnu:";
$pgv_lang["remove_custom_tags"]		= "Fjern brugerdefinerede PGV tags? (f.eks. _PGVU, _THUM)";
$pgv_lang["cookie_login_help"]		= "Websiten kan se, at du har logget dig ind før.  Dette betyder, at du nu har adgang til private informationer og andre brugerrelaterede funktioner. <br/>- Men for at kunne ændre eller administrere websitet, er det nødvendigt af sikkerhedsmæssige hensyn at logge ind igen.";
$pgv_lang["remember_me"]			= "Husk mig?";
$pgv_lang["fams_with_surname"]		= "Familier med efternavnet #surname#";
$pgv_lang["support_contact"]		= "Teknisk hjælp";
$pgv_lang["genealogy_contact"]		= "Slægtsspørgsmål";
$pgv_lang["common_upload_errors"]	= "Denne fejl skyldes sandsynligvis, at filen som du prøvede at uploade, var for stor i forhold til en øvre grænse, sat af serverens vært (host).  Standard grænsen i PHP er 2MB.  Du kan prøve at kontakte ejerne af serveren for at få dem til at hæve denne grænse, som er angivet i filen php.ini, så du kan uploade filen ved hjælp af FTP.  Brug siden <a href=\"uploadgedcom.php?action=add_form\"><b>Tilføj GEDCOM</b></a> for at tilføje en GEDCOM-fil, du har uploadet ved hjælp af FTP.";
$pgv_lang["total_memory_usage"]		= "Total brug af memory:";
$pgv_lang["mothers_family_with"]	= "Mors familie med";
$pgv_lang["fathers_family_with"]	= "Fars familie med ";
$pgv_lang["family_with"]		= "Familie med";
$pgv_lang["halfsibling"]			= "Halvsøskende";
$pgv_lang["halfbrother"]			= "Halvbror";
$pgv_lang["halfsister"]				= "Halvsøster";
$pgv_lang["family_timeline"]		= "Vis familie på en tidslinie";
$pgv_lang["children_timeline"]		= "Vis børn på en tidslinie";
$pgv_lang["other"]					= "Andet";
$pgv_lang["sort_by_marriage"]		= "Sorteret efter vielsesdato";
$pgv_lang["reorder_families"]		= "Vis familier i anden rækkefølge";
$pgv_lang["indis_with_surname"]		= "Personer med efternavnet #surname#";
$pgv_lang["first_letter_fname"]		= "Vælg et bogstav for at vise personer med fornavn som begynder med dette bogstav.";
$pgv_lang["total_names"]			= "Antal navne";
$pgv_lang["top10_pageviews_nohits"]	= "Der er ingen hits fundet.";
$pgv_lang["top10_pageviews_msg"]	= "Tælleren skal aktiveres i GEDCOM-konfigurationen for at denne ramme skal kunne fungere.";
$pgv_lang["review_changes_descr"]	= "Rammen: Ændringer på vent, vil give brugere med ret til at ændre oplysninger online, en mulighed for at se en liste over ændringerne før disse er blevet godkendt.  Disse ændringer kan enten godkendes eller forkastes.<br /><br />Hvis denne ramme er aktiv, vil brugere med rettighed til at godkende, modtage en e-mail dagligt, med en påmindelse om at checke ændringer.";
$pgv_lang["review_changes_block"]	= "Ændringer på vent";
$pgv_lang["review_changes_email"]	= "Send påmindelse via e-mails?";
$pgv_lang["review_changes_email_freq"]	= "Frekvens for påmindelse via e-mail (dage)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Vis ændringer";
$pgv_lang["review_changes_body"]	= "Ændringer i slægtsdatabasen er gjort online tilgængelig.  Disse ændringer skal checkes og eventuelt godkendes førend de kan vises for alle brugere.  Brug venligst adressen (URL) nedenfor for at gå til PhpGedView på nettet for at se ændringerne (du skal anføre brugernavn og adgangskode).";
$pgv_lang["show_spouses"]			= "Vis ægtefæller";
$pgv_lang["quick_update_title"] 	= "Hurtig opdatering";
$pgv_lang["quick_update_instructions"] = "Denne side giver dig mulighed for at foretage en hurtig opdatering af informationerne for en person.  Du behøver blot at udfylde den nye information eller den information, der skal ændres  Efter at ændringerne er sendt, bør de checkes af en bruger med ret til at godkende førend de bliver vist til andre brugere.";
$pgv_lang["update_name"] 			= "Opdater navn";
$pgv_lang["update_fact"] 			= "Opdater en faktaoplysning";
$pgv_lang["update_fact_restricted"] = "Opdatering af dette er begrænset:";
$pgv_lang["update_photo"] 			= "Opdater billede";
$pgv_lang["select_fact"] 			= "Vælg en faktaoplysning...";
$pgv_lang["update_address"] 		= "Opdater adresse";
$pgv_lang["top10_pageviews_descr"]	= "Denne ramme vil vise de 10 mest viste personer/familier.  Denne ramme kræver at tælleren er aktiveret i indstillingerne for GEDCOM-konfigurationen.";
$pgv_lang["top10_pageviews"]		= "Vist flest gange";
$pgv_lang["top10_pageviews_block"]	= "Vist flest gange";
$pgv_lang["stepdad"]				= "Stedfar";
$pgv_lang["stepmom"]				= "Stedmor";
$pgv_lang["stepsister"]				= "Stedsøster";
$pgv_lang["stepbrother"]			= "Stedbror";
$pgv_lang["fams_charts"]			= "Valg for denne familie";
$pgv_lang["indis_charts"]			= "Valg for denne person";
$pgv_lang["locked"]					= "Ret ikke";
$pgv_lang["privacy"]				= "Privatliv";
$pgv_lang["number_sign"]			= "#";
//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]					= "?";
$pgv_lang["qm_ah"]				= "?";
$pgv_lang["page_help"]			= "Hjælp";
$pgv_lang["help_for_this_page"]	= "Hjælp til denne side";
$pgv_lang["help_contents"]		= "Emner i Hjælp";
$pgv_lang["show_context_help"]	= "Vis Hjælp <b><i>?</i></b> til tekst";
$pgv_lang["hide_context_help"]	= "Skjul Hjælp <b><i>?</i></b> til tekst";
$pgv_lang["sorry"]				= "<b>Beklager, men vi er ikke færdige med hjælpeteksten til denne side eller dele af den...</b>";
$pgv_lang["help_not_exist"]		= "<b>Hjælpeteksten til denne side eller dele af den er ikke lagt ind endnu</b>";
$pgv_lang["var_not_exist"]			= "<span style=font-weight: bold>Sprog variablen eksisterer ikke. Venligst rapporter dette, da det er en fejl.</span>";
$pgv_lang["resolution"]			= "Skærmopløsning";
$pgv_lang["menu"]				= "Menu";
$pgv_lang["header"]				= "Hoved";
$pgv_lang["imageview"]			= "Billedvisning";
//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]			= "Log ind for brugere";
$pgv_lang["for_support"]		= "For teknisk hjælp og information, kontakt&nbsp;";
$pgv_lang["for_contact"]		= "For hjælp med slægtsspørgsmål, kontakt&nbsp;";
$pgv_lang["for_all_contact"]	= "For teknisk hjælp og slægtsspørgsmål, kontakt&nbsp;";
$pgv_lang["build_error"]		= "GEDCOM-fil er blevet opdateret.";
$pgv_lang["username"]			= "Brugernavn";
$pgv_lang["invalid_username"]	= "Brugernavnet indeholder ugyldige tegn";
$pgv_lang["firstname"]			= "Fornavn";
$pgv_lang["lastname"]			= "Efternavn";
$pgv_lang["password"]			= "Adgangskode:";
$pgv_lang["confirm"]			= "Bekræft adgangskode";
$pgv_lang["login"]				= "Log ind";
$pgv_lang["logout"]				= "Log ud";
$pgv_lang["admin"]				= "Administration";
$pgv_lang["logged_in_as"]		= "Logget ind som";
$pgv_lang["my_pedigree"]		= "Mit anetræ";
$pgv_lang["my_indi"]			= "Mig selv";
$pgv_lang["yes"]				= "Ja";
$pgv_lang["no"]					= "Nej";
$pgv_lang["change_theme"]		= "Skift tema";
//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Anetræ";
$pgv_lang["gen_ped_chart"]		= "Anetræ - #PEDIGREE_GENERATIONS# generationer";
$pgv_lang["generations"]		= "Generationer&nbsp;";
$pgv_lang["view"]				= "Vis";
$pgv_lang["fam_spouse"]			= "Familie med ægtefælle";
$pgv_lang["root_person"]		= "Proband ID&nbsp;&nbsp;&nbsp;";
$pgv_lang["hide_details"]		= "Skjul detaljer";
$pgv_lang["show_details"]		= "Vis detaljer";
$pgv_lang["person_links"]		= "Links til slægtstræer, familie(r), og nære slægtninge til denne person. - Klik her for at vise denne person som startperson i slægtstræet.";
$pgv_lang["zoom_box"]			= "Zoom ind/ud på denne boks";
$pgv_lang["orientation"]		= "Orientering";
$pgv_lang["portrait"]			= "Stående";
$pgv_lang["landscape"]			= "Liggende";
$pgv_lang["start_at_parents"]	= "Start med forældrene";
$pgv_lang["charts"]				= "Slægtstræer";
$pgv_lang["lists"]				= "Slægtslister";
$pgv_lang["max_generation"]		= "Du kan vise maks #PEDIGREE_GENERATIONS# generationer!";
$pgv_lang["min_generation"]		= "Du skal vise mindst 3 generationer!";
$pgv_lang["box_width"]			= "Boksbredde";
//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Kan ikke finde familien med ID ";
$pgv_lang["unable_to_find_record"]	= "Kan ikke finde posten med ID ";
$pgv_lang["title"]				= "Titel";
$pgv_lang["living"]				= "Lever";
$pgv_lang["private"]			= "Privat";
$pgv_lang["birth"]				= "Født:";
$pgv_lang["death"]				= "Død:";
$pgv_lang["descend_chart"]		= "Efterkommeroversigt";
$pgv_lang["individual_list"]	= "Personliste";
$pgv_lang["family_list"]		= "Familieliste";
$pgv_lang["source_list"]		= "Kildeliste";
$pgv_lang["place_list"]			= "Stednavne";
$pgv_lang["place_list_aft"] 	= "Stednavn efter";
$pgv_lang["media_list"]			= "Multimedieliste";
$pgv_lang["search"]				= "Søg";
$pgv_lang["clippings_cart"]		= "Udklipsholder";
$pgv_lang["print_preview"]		= "Udskriftsvenlig version";
$pgv_lang["cancel_preview"]		= "Tilbage til almindelig visning";
$pgv_lang["change_lang"]		= "Vælg sprog";
$pgv_lang["print"]				= "Udskriv";
$pgv_lang["total_queries"]		= "Antal søgninger i databasen:";
$pgv_lang["total_privacy_checks"]	= " - Antal check af privatlivsbeskyttelse: ";
$pgv_lang["back"]				= "Tilbage";
//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]				= "Også kendt som";
$pgv_lang["male"]				= "Mand";
$pgv_lang["female"]				= "Kvinde";
$pgv_lang["temple"]				= "Mormon tempel";
$pgv_lang["temple_code"]		= "Mormon tempelkode:";
$pgv_lang["status"]				= "Status";
$pgv_lang["source"]				= "Kilde";
$pgv_lang["text"]				= "Kildetekst:";
$pgv_lang["note"]				= "Note";
$pgv_lang["NN"]					= "Ukendt";
$pgv_lang["PN"]					= "(ukendt)";
$pgv_lang["unrecognized_code"]	= "Ukendt GEDCOM-kode";
$pgv_lang["unrecognized_code_msg"]	= "Dette er en fejl, som vi ønsker at rette. Rapporter venligst denne fejl til";
$pgv_lang["indi_info"]			= "Personoplysninger";
$pgv_lang["pedigree_chart"]		= "Anetræ";
$pgv_lang["individual"]				= "Individ";
$pgv_lang["as_spouse"]			= "Familie med ægtefælle/partner";
$pgv_lang["privacy_error"]		= "Oplysninger om denne person er privat.<br />";
$pgv_lang["more_information"]	= "For yderligere information, kontakt";
$pgv_lang["given_name"]			= "Fornavn";
$pgv_lang["surname"]			= "Efternavn";
$pgv_lang["suffix"]				= "Suffiks";
$pgv_lang["sex"]				= "Køn";
$pgv_lang["personal_facts"]		= "Fakta og detaljer om personen";
$pgv_lang["type"]				= "Type";
$pgv_lang["parents"] 			= "Forældre:";
$pgv_lang["siblings"] 			= "Søskende";
$pgv_lang["father"] 			= "Far";
$pgv_lang["mother"] 			= "Mor";
$pgv_lang["parent"] 				= "Forælder";
$pgv_lang["relatives"]			= "Nære slægtninge";
$pgv_lang["relatives_events"]		= "Begivenheder for nære slægtninge";
$pgv_lang["spouse"]				= "Ægtefælle/partner";
$pgv_lang["surnames"]			= "Efternavne";
$pgv_lang["adopted"]			= "Adopteret";
$pgv_lang["foster"]				= "Adoptivbarn";
$pgv_lang["sealing"]			= "Besegling (bekræftelse)";
$pgv_lang["challenged"]			= "Indsigelser";
$pgv_lang["disproved"]			= "Modbevist";
$pgv_lang["infant"]				= "Baby";
$pgv_lang["stillborn"]				= "Dødfødt";
$pgv_lang["deceased"]				= "Afdød";
$pgv_lang["link_as_wife"]		= "Knyt denne person til en eksisterende familie som en hustru";
$pgv_lang["no_tab1"]			= "Der er ingen fakta / oplysninger om denne person.";
$pgv_lang["no_tab2"]			= "Der er ingen noter om denne person.";
$pgv_lang["no_tab3"]			= "Der er ingen kilder knyttet til denne person.";
$pgv_lang["no_tab4"]			= "Der er ingen billeder eller andre medier knyttet til denne person.";
$pgv_lang["no_tab5"]			= "Der er ingen nære slægtninge knyttet til denne person.";
$pgv_lang["no_tab6"]			= "Der er ingen forsknings-log knyttet til denne person.";
//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Familieoplysninger";
$pgv_lang["family_group_info"]	= "Familiegruppe oplysninger";
$pgv_lang["husband"]			= "Ægtemand";
$pgv_lang["wife"]				= "Hustru";
$pgv_lang["marriage"]			= "Bryllup:";
$pgv_lang["lds_sealing"]		= "Mormon besegling:";
$pgv_lang["marriage_license"]	= "Kongebrev:";
$pgv_lang["no_children"]		= "<i>Ingen registrerede børn</i>";
$pgv_lang["childless_family"]		= "Denne familie forblev barnløs";
$pgv_lang["parents_timeline"]	= "Vis par på en tidslinie";
//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Udklipsholder";
$pgv_lang["which_links"]		= "Hvilke links vil du tilføje til denne familie?";
$pgv_lang["just_family"]		= "Tilføj kun denne familie.";
$pgv_lang["parents_and_family"]	= "Tilføj familie og forældre.";
$pgv_lang["parents_and_child"]	= "Tilføj forældre og barn.";
$pgv_lang["parents_desc"]		= "Tilføj forældre og alle efterkommere.";
$pgv_lang["continue"]			= "Fortsæt med at tilføje";
$pgv_lang["which_p_links"]		= "Hvilke links vil du tilføje til denne person?";
$pgv_lang["just_person"]		= "Tilføj kun denne person.";
$pgv_lang["person_parents_sibs"]	= "Tilføj denne person, hans forældre og søskende.";
$pgv_lang["person_ancestors"]		= "Tilføj denne person og hans slægtninge i direkte linie.";
$pgv_lang["person_ancestor_fams"]	= "Tilføj denne person, hans slægtninge i direkte linie og deres familier.";
$pgv_lang["person_spouse"]		= "Tilføj denne person, hans ægtefælle og børn.";
$pgv_lang["person_desc"]		= "Tilføj denne person, hans ægtefælle/partner, og alle efterkommere.";
$pgv_lang["which_s_links"]			= "Hvilke poster der har link til denne kilde skal tilføjes?";
$pgv_lang["just_source"]		= "Tilføj kun denne kilde.";
$pgv_lang["linked_source"]		= "Tilføj denne kilde og familier/individer der er kædet til den.";
$pgv_lang["person_private"]		= "Data for denne person er private. Personlige data vises derfor ikke.";
$pgv_lang["family_private"]		= "Data for denne familie er private. Familiære data vises derfor ikke.";
$pgv_lang["download"]			= "Højreklik (control-click på Mac) på linket nedenunder og vælg \"Gem som\" for at downloade filerne.";
$pgv_lang["cart_is_empty"]		= "<b>Din udklipsholder er tom!</b>";
$pgv_lang["id"]					= "ID";
$pgv_lang["name_description"]	= "Navn / beskrivelse";
$pgv_lang["remove"]				= "Fjern";
$pgv_lang["empty_cart"]			= "Tøm mappen";
$pgv_lang["download_now"]		= "Download nu";
$pgv_lang["download_file"]			= "Download filen #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Denne person er hentet fra:";
$pgv_lang["family_downloaded_from"]	= "Denne familie er hentet fra:";
$pgv_lang["source_downloaded_from"]	= "Denne kilde er hentet fra:";
//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Forbindelse til stednavne fundet";
$pgv_lang["top_level"]			= "Top niveau";
$pgv_lang["form"]				= "Stednavn gemt som: ";
$pgv_lang["default_form"]		= "By/sted/sogn, herred/amt, stat/provins, land";
$pgv_lang["default_form_info"]	= "(Standard)";
$pgv_lang["unknown"]			= "Ukendt";
$pgv_lang["individuals"]		= "Personer";
$pgv_lang["view_records_in_place"]	= " Vis alle personer / familier knyttet til stedet ";
$pgv_lang["place_list2"] 		= "Alle stednavne";
$pgv_lang["show_place_hierarchy"]	= "Vis stednavn efter niveau";
$pgv_lang["show_place_list"]	= "Vis alle stednavne";
$pgv_lang["total_unic_places"]	= "Antal entydige steder";
//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Eksterne objekter";
$pgv_lang["multi_title"]		= "Billed- eller andre medier";
$pgv_lang["media_found"]		= "Billed- eller mediefiler fundet";
$pgv_lang["view_person"]		= "Vis person";
$pgv_lang["view_family"]		= "Vis familie";
$pgv_lang["view_source"]		= "Vis kilde";
$pgv_lang["view_object"]			= "Vis Objekt";
$pgv_lang["prev"]				= "&lt; Forrige";
$pgv_lang["next"]				= "Næste &gt;";
$pgv_lang["next_image"]				= "Næste";
$pgv_lang["file_not_found"]		= "Fandt ikke filen.";
$pgv_lang["medialist_show"]		= "Vis ";
$pgv_lang["per_page"]			= "Billeder- eller mediefiler pr. side";
$pgv_lang["media_format"]			= "Medieformat";
$pgv_lang["image_size"]				= "Billeddimensioner";
$pgv_lang["media_id"]				= "Medie ID";
$pgv_lang["invalid_id"]				= "Dette ID findes ikke i denne GEDCOM-fil.";
$pgv_lang["record_updated"]		= "Posten #pid# blev opdateret.";
$pgv_lang["record_not_updated"]		= "Posten #pid# kunne ikke opdateres.";
$pgv_lang["record_removed"]		= "Posten #xref# blev fjernet fra GEDCOM-filen.";
$pgv_lang["record_not_removed"]		= "Posten #xref# kunne ikke fjernes fra GEDCOM-filen.";
$pgv_lang["record_added"]			= "Posten #xref# blev korrekt tilføjet til GEDCOM-filen.";
$pgv_lang["record_not_added"]		= "Posten #xref# kunne ikke tilføjes til GEDCOM-filen.";
//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"]		= "- Eller søg som du <i>tror</i> navnet er skrevet:";
$pgv_lang["sources"]			= "Kilder";
$pgv_lang["lastname_search"]	= "Efternavn";
$pgv_lang["search_place"]		= "Stednavn";
$pgv_lang["search_year"]		= "År";
$pgv_lang["no_results"]			= "Fandt ingen...";
$pgv_lang["search_soundex"]			= "Fonetisk søgning";
$pgv_lang["search_replace"]			= "Søg og erstat";
$pgv_lang["search_sources"]			= "Kilder";
$pgv_lang["search_more_chars"]      = "Skriv venligst mere end en karakter";
$pgv_lang["search_soundextype"]		= "Type af fonetisk søgning:";
$pgv_lang["search_russell"]			= "<A HREF=\"http://en.wikipedia.org/wiki/Soundex\">Russell</A> (1922 - hurtigst)";
$pgv_lang["search_tagfilter"]		= "Udelad filter";
$pgv_lang["search_tagfon"]			= "Udelad nogle ikke-genealogiske data";
$pgv_lang["search_tagfoff"]			= "Fra";
$pgv_lang["associate"]				= "tilknyt";
$pgv_lang["search_record"]			= "Hele posten";
$pgv_lang["search_to"]				= "til";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]		= "Titler";
$pgv_lang["find_source"]		= "Find kilde";
//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]				= "Opbevaringssteder";
$pgv_lang["repos_found"]			= "Opbevaringssteder fundet";
$pgv_lang["find_repository"]		= "Find opbevaringssted";
$pgv_lang["total_repositories"]		= "Antal opbevaringssteder:";
$pgv_lang["confirm_delete_repo"]	= "Er du sikker på at du vil slette dette opbevaringssted fra slægtsdatabasen?";
//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Information om kilde";
$pgv_lang["people"]				= "Personer";
$pgv_lang["families"]			= "Familier";
$pgv_lang["total_sources"]		= "Antal kilder:";
//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]	= "Ugyldig GEDCOM 5.5 format";
$pgv_lang["exec_time"]			= "Eksekveringstid:";
$pgv_lang["unable_to_create_index"]	= "<b>Indeksfiler kan ikke oprettes.</b><br />Kontroller at index-folderen i PhpGedView har de nødvendige skriverettigheder.<br />Skrivebeskyttelsen kan evt. etableres igen når indeksfilerne er oprettet.";
$pgv_lang["changes_present"]	= "Denne slægtsdatabase har \"ændringer på vent\".  Hvis du fortsætter med at importere, vil ændringerne blive føjet til databasen uden at du får godkendt dem først.  Du BÃ˜R se ændringerne igennem, førend du fortsætter importen!";
$pgv_lang["sec"]				= "sek.";
//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]			= "Antal familier:";
$pgv_lang["total_indis"]		= "Antal personer:";
$pgv_lang["notes"]				= "Noter";
$pgv_lang["ssourcess"]			= "Kilder";
$pgv_lang["media"]				= "Billeder- og medier";
$pgv_lang["name_contains"]		= "Navn indeholder:";
$pgv_lang["filter"]				= "Søg";
$pgv_lang["find_individual"]	= "Find en persons ID";
$pgv_lang["find_familyid"]		= "Find en families ID";
$pgv_lang["find_sourceid"]		= "Find kilde";
$pgv_lang["find_specialchar"]	= "Find specielle karakterer";
$pgv_lang["magnify"]			= "Forstør";
$pgv_lang["skip_surnames"]		= "Vis udvidet liste";
$pgv_lang["show_surnames"]		= "Vis kun efternavn";
$pgv_lang["all"]				= "ALLE";
$pgv_lang["hidden"]				= "Skjult";
$pgv_lang["confidential"]		= "Fortrolig";
$pgv_lang["alpha_index"]				= "Alfabetisk indeks";
$pgv_lang["name_list"] 				= "Navneliste";
$pgv_lang["firstname_alpha_index"] 	= "Alfabetisk indeks over fornavne";
$pgv_lang["roots"]		 				= "Rødder";
$pgv_lang["leaves"] 					= "Blade";
$pgv_lang["widow"] 					= "Enke";
$pgv_lang["widower"] 				= "Enkemand";
//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]				= "Alder";
$pgv_lang["days"]					= "dage";
$pgv_lang["months"]					= "måneder";
$pgv_lang["years"]					= "år";
$pgv_lang["day1"]					= "dag";
$pgv_lang["month1"]					= "måned";
$pgv_lang["year1"]					= "år";
$pgv_lang["timeline_title"]		= "PhpGedView tidslinie";
$pgv_lang["timeline_chart"]		= "Tidslinie";
$pgv_lang["remove_person"]		= "Fjern person";
$pgv_lang["show_age"]			= "Vis aldersmarkør";
$pgv_lang["add_another"]		= "Tilføj en person på tidslinien:<br />Person ID:";
$pgv_lang["find_id"]			= "Find ID";
$pgv_lang["show"]				= "Vis";
$pgv_lang["year"]				= "År";
$pgv_lang["timeline_instructions"]	= "I de nyeste browsere kan du kan flytte på boksene nedenunder ved hjælp af musen!";
$pgv_lang["zoom_in"]			= "Zoom ind";
$pgv_lang["zoom_out"]			= "Zoom ud";
$pgv_lang["timeline_beginYear"] = "Start år";
$pgv_lang["timeline_endYear"] = "Slut år";
$pgv_lang["timeline_scrollSpeed"] = "Hastighed";
$pgv_lang["timeline_controls"] = "Tidslinje kontroller";
$pgv_lang["include_family"] = "Inkluder nærmeste familie";
$pgv_lang["lifespan_chart"] = "Livsforløb diagram";
//-- MONTH NAMES
$pgv_lang["jan"]				= "januar";
$pgv_lang["feb"]				= "februar";
$pgv_lang["mar"]				= "marts";
$pgv_lang["apr"]				= "april";
$pgv_lang["may"]				= "maj";
$pgv_lang["jun"]				= "juni";
$pgv_lang["jul"]				= "juli";
$pgv_lang["aug"]				= "august";
$pgv_lang["sep"]				= "september";
$pgv_lang["oct"]				= "oktober";
$pgv_lang["nov"]				= "november";
$pgv_lang["dec"]				= "december";
$pgv_lang["abt"]				= "omkring";
$pgv_lang["aft"]				= "efter";
$pgv_lang["and"]				= "og";
$pgv_lang["bef"]				= "før";
$pgv_lang["bet"]				= "mellem";
$pgv_lang["cal"]				= "beregnet";
$pgv_lang["est"]				= "anslået";
$pgv_lang["from"]				= "fra";
$pgv_lang["int"]				= "fortolket";
$pgv_lang["to"]					= "til";
$pgv_lang["cir"]				= "cirka";
$pgv_lang["apx"]				= "ca.";
//-- Admin File Messages
$pgv_lang["rebuild_indexes"]		= "Opbyg indeksene påny";
$pgv_lang["password_mismatch"]		= "De to adgangskoder er forskellige.";
$pgv_lang["enter_username"]			= "Du skal opgive et brugernavn.";
$pgv_lang["enter_password"]			= "Du skal opgive en adgangskode.";
$pgv_lang["save"]					= "Gem";
$pgv_lang["delete"]					= "Slet";
$pgv_lang["edit"]					= "Ret";
$pgv_lang["no_login"]				= "Bruger kan ikke godkendes.";
$pgv_lang["basic_realm"]			= "PhpGedView Godkendelsessystem";
$pgv_lang["basic_auth_failure"]		= "Du skal indtaste et korrekt login ID og adgangskode for at få adgang til denne side";
$pgv_lang["basic_auth"]				= "Grundlæggende godkendelse";
$pgv_lang["digest_auth"]				= "Digest Authentication";
$pgv_lang["no_auth_needed"]			= "Uden godkendelse";
$pgv_lang["file_not_exists"]		= "Filnavnet findes ikke!";
$pgv_lang["research_assistant"]		= "Forskningsassistent";
$pgv_lang["utf8_to_ansi"]			= "Ønsker du at konvertere fra UTF-8 til ANSI (ISO-8859-1)?";
$pgv_lang["media_linked"]			= "Dette medieobjekt refererer til følgende:";
$pgv_lang["media_not_linked"]		= "Dette medieobjekt refererer ikke til noget.";
//-- Relationship chart messages
$pgv_lang["relationship_great"]		= "Fint";
$pgv_lang["relationship_chart"]	= "Slægtskabsdiagram";
$pgv_lang["person1"]			= "1. person";
$pgv_lang["person2"]			= "2. person";
$pgv_lang["no_link_found"]		= "Kan ikke finde (flere) relationer mellem de to personer!";
$pgv_lang["sibling"]			= "Søskende";
$pgv_lang["follow_spouse"]		= "Find slægtskab efter giftemål";
$pgv_lang["timeout_error"]		= "FEJL: Fandt ingen slægtsbånd indenfor den maksimale søgetid.";
$pgv_lang["son-in-law"]				= "Svigersøn";
$pgv_lang["daughter-in-law"]		= "Svigerdatter";
$pgv_lang["grandchild"]				= "Barnebarn";
$pgv_lang["grandson"]				= "Barnebarn";
$pgv_lang["granddaughter"]			= "Barnebarn";
$pgv_lang["brother"]			= "Bror";
$pgv_lang["sister"]				= "Søster";
$pgv_lang["brother-in-law"]		= "Svoger";
$pgv_lang["sister-in-law"]			= "Svigerinde";
$pgv_lang["aunt"]					= "Tante";
$pgv_lang["uncle"]				= "Onkel";
$pgv_lang["firstcousin"]			= "Fætter/kusine";
$pgv_lang["femalecousin"]			= "Kusine";
$pgv_lang["malecousin"]				= "Fætter";
$pgv_lang["cousin-in-law"]			= "Fætter eller kusines ægtefælle";
$pgv_lang["relationship_to_me"]	= "Slægtskab til dig";
$pgv_lang["rela_husb"]			= "Slægtskab til ægtemand";
$pgv_lang["rela_wife"]			= "Slægtskab til hustru";
$pgv_lang["next_path"]			= "Find næste sti";
$pgv_lang["show_path"]			= "Vis sti";
$pgv_lang["line_up_generations"]	= "Vis generationer på linie";
$pgv_lang["oldest_top"]			= "Vis de ældste øverst";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s er %2\$s af %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s er %2\$s af %3\$s.";

$pgv_lang["mother_in_law"]		    = "svigermor";
$pgv_lang["father_in_law"]		    = "svigerfar";
$pgv_lang["brother_in_law"]		    = "svoger";
$pgv_lang["sister_in_law"]		    = "svigerinde";
$pgv_lang["son_in_law"]		        = "svigersøn";
$pgv_lang["daughter_in_law"]		= "svigerdatter";

$pgv_lang["step_son"]		        = "stedsøn";
$pgv_lang["step_daughter"]	    	= "steddatter";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 				= "nevø";
$pgv_lang["bosa_brothers_offspring_3"] 				= "niece";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 				= "grandnevø";
$pgv_lang["bosa_brothers_offspring_5"] 				= "grandniece";
$pgv_lang["bosa_brothers_offspring_6"] 				= "grandnevø";
$pgv_lang["bosa_brothers_offspring_7"] 				= "grandniece";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = "%2\$d x grandnevø";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d x grandniece";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "nevø";
$pgv_lang["bosa_sisters_offspring_3"] 				= "niece";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 				= "grandnevø";
$pgv_lang["bosa_sisters_offspring_5"] 				= "grandniece";
$pgv_lang["bosa_sisters_offspring_6"] 				= "grandnevø";
$pgv_lang["bosa_sisters_offspring_7"] 				= "grandniece";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = "%2\$d x grandnevø";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d x grandniece";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "søn";                   // son
$pgv_lang["bosa_3"] 				= "datter";              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "sønnesøn";
$pgv_lang["bosa_5"] 				= "barnebarn";         // son's daughter
$pgv_lang["bosa_6"] 				= "dattersøn";
$pgv_lang["bosa_7"] 				= "barnebarn";         // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "tipoldebarn";
$pgv_lang["bosa_9"] 				= "tipoldebarn";
$pgv_lang["bosa_10"] 				= "tipoldebarn";
$pgv_lang["bosa_11"] 				= "tipoldebarn";
$pgv_lang["bosa_12"] 				= "tipoldebarn";
$pgv_lang["bosa_13"] 				= "tipoldebarn";
$pgv_lang["bosa_14"] 				= "tipoldebarn";
$pgv_lang["bosa_15"] 				= "tipoldebarn";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = "%3\$d x tipoldebarn";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d x tipoldebarn";
$pgv_lang["n_x_grandson_from_daughter"]	  = "%3\$d x tipoldebarn";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x tipoldebarn";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow for language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= "farbror";
$pgv_lang["sosa_uncle_3"] 				= "morbror";
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "grandonkel";
$pgv_lang["sosa_uncle_5"] 				= "grandonkel";
$pgv_lang["sosa_uncle_6"] 				= "grandonkel";
$pgv_lang["sosa_uncle_7"] 				= "grandonkel";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "%2\$d x grandonkel";
$pgv_lang["n_x_maternal_uncle"]	    = "%2\$d x grandonkel";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= "faster";
$pgv_lang["sosa_aunt_3"] 				= "moster";
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "grandtante";
$pgv_lang["sosa_aunt_5"] 				= "grandtante";
$pgv_lang["sosa_aunt_6"] 				= "grandtante";
$pgv_lang["sosa_aunt_7"] 				= "grandtante";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "%2\$d x grandtante";
$pgv_lang["n_x_maternal_aunt"]	    = "%2\$d x grandtante";

// the sosa_uncle_bm name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 				= "onkel";
$pgv_lang["sosa_uncle_bm_3"] 				= "onkel";

// the sosa_aunt_bm name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 				= "tante";
$pgv_lang["sosa_aunt_bm_3"] 				= "tante";


// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              = "fætter";
$pgv_lang["male_cousin_2"]              = "";
$pgv_lang["male_cousin_3"]              = "";
$pgv_lang["male_cousin_4"]              = "";
$pgv_lang["male_cousin_5"]              = "";
$pgv_lang["male_cousin_6"]              = "";
$pgv_lang["male_cousin_7"]              = "";
$pgv_lang["male_cousin_8"]              = "";
$pgv_lang["male_cousin_9"]              = "";
$pgv_lang["male_cousin_10"]             = "";
$pgv_lang["male_cousin_11"]             = "";
$pgv_lang["male_cousin_12"]             = "";
$pgv_lang["male_cousin_13"]             = "";
$pgv_lang["male_cousin_14"]             = "";
$pgv_lang["male_cousin_15"]             = "";
$pgv_lang["male_cousin_16"]             = "";
$pgv_lang["male_cousin_17"]             = "";
$pgv_lang["male_cousin_18"]             = "";
$pgv_lang["male_cousin_19"]             = "";
$pgv_lang["male_cousin_20"]             = "";
$pgv_lang["male_cousin_n"]              = "";
$pgv_lang["female_cousin_1"]            = "kusine";
$pgv_lang["female_cousin_2"]            = "";
$pgv_lang["female_cousin_3"]            = "";
$pgv_lang["female_cousin_4"]            = "";
$pgv_lang["female_cousin_5"]            = "";
$pgv_lang["female_cousin_6"]            = "";
$pgv_lang["female_cousin_7"]            = "";
$pgv_lang["female_cousin_8"]            = "";
$pgv_lang["female_cousin_9"]            = "";
$pgv_lang["female_cousin_10"]           = "";
$pgv_lang["female_cousin_11"]           = "";
$pgv_lang["female_cousin_12"]           = "";
$pgv_lang["female_cousin_13"]           = "";
$pgv_lang["female_cousin_14"]           = "";
$pgv_lang["female_cousin_15"]           = "";
$pgv_lang["female_cousin_16"]           = "";
$pgv_lang["female_cousin_17"]           = "";
$pgv_lang["female_cousin_18"]           = "";
$pgv_lang["female_cousin_19"]           = "";
$pgv_lang["female_cousin_20"]           = "";
$pgv_lang["female_cousin_n"]            = "";

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
$pgv_lang["check_delete"]		= "Er du sikker på at du vil slette disse slægtsdata?";
$pgv_lang["access_denied"]		= "<h3><b>Ingen adgang!</b></h3><br />Du har ikke adgang til denne del.";
$pgv_lang["changes_exist"]		= "Der er foretaget ændringer i denne slægtsdatabase.";
$pgv_lang["find_place"]			= "<u>Find stednavn</u >";
$pgv_lang["close_window"]		= "Luk vinduet";
$pgv_lang["close_window_without_refresh"]	= "Luk vinduet uden at opdatere skærmen";
$pgv_lang["place_contains"]		= "Stednavn indeholder:";
$pgv_lang["add"]				= "Tilføj";
$pgv_lang["custom_event"]		= "Egen defineret begivenhed";
$pgv_lang["delete_person"]		= "Slet denne person";
$pgv_lang["confirm_delete_person"]	= "Er du sikker på at du vil slette denne person fra slægtsdatabasen?";
$pgv_lang["find_media"]			= "Find billeder- og medier";
$pgv_lang["set_link"]			= "Sæt link";
$pgv_lang["delete_source"]		= "Slet denne kilde";
$pgv_lang["confirm_delete_source"]	= "Er du sikker på, at du vil slette denne kilde fra slægtsdatabasen?";
$pgv_lang["find_family"]		= "Find familie";
$pgv_lang["find_fam_list"]		= "Find familieliste";
$pgv_lang["edit_name"]			= "Ret navn";
$pgv_lang["delete_name"]		= "Slet navn";
$pgv_lang["select_date"]		= "Vælg en dato";
$pgv_lang["user_cannot_edit"]		= "Dette brugernavn har ikke rettigheder til at ændre denne slægtsdatabase (GEDCOM).";
$pgv_lang["ged_noshow"]				= "Denne side er fjernet af administratoren af websiten.";
//-- calendar.php messages
$pgv_lang["bdm"]					= "Fødsler, Dødsfald, Vielser";
$pgv_lang["on_this_day"]			= "På denne dag i din slægtshistorie...";
$pgv_lang["in_this_month"]		= "I denne måned i din slægtshistorie...";
$pgv_lang["in_this_year"]		= "I dette år i din slægtshistorie...";
$pgv_lang["year_anniversary"]	= "#year_var#. årsdag";
$pgv_lang["today"]				= "I dag";
$pgv_lang["day"]				= "Dag";
$pgv_lang["month"]				= "Måned";
$pgv_lang["showcal"]			= "Vis begivenheder for";
$pgv_lang["anniversary"]			= "Mærkedag";
$pgv_lang["anniversary_calendar"] = "Mærkedage";
$pgv_lang["sunday"] 				= "søndag";
$pgv_lang["monday"]				= "mandag";
$pgv_lang["tuesday"]			= "tirsdag";
$pgv_lang["wednesday"]			= "onsdag";
$pgv_lang["thursday"]			= "torsdag";
$pgv_lang["friday"]				= "fredag";
$pgv_lang["saturday"]			= "lørdag";
$pgv_lang["viewday"]			= "Vis dag";
$pgv_lang["viewmonth"]			= "Vis måned";
$pgv_lang["viewyear"]			= "Vis år";
$pgv_lang["all_people"]			= "Alle personer";
$pgv_lang["living_only"]		= "Nulevende personer";
$pgv_lang["recent_events"]		= "De sidste 100 år";
$pgv_lang["day_not_set"]		= "Dag ikke angivet";
//-- user self registration module
$pgv_lang["lost_password"]		= "Har du glemt din adgangskode?";
$pgv_lang["requestpassword"]	= "Bestil en ny adgangskode";
$pgv_lang["no_account_yet"]		= "Har du ikke <b>egen</b> konto endnu?";
$pgv_lang["requestaccount"]		= "Bestil en brugerkonto";
$pgv_lang["emailadress"]		= "E-mail-adresse";
$pgv_lang["mandatory"] 			= "Felter markeret med * skal udfyldes.";
$pgv_lang["mail01_line01"]		= "Hej #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "Der er anmodet ( #SERVER_NAME# ) om at få en brugerkonto med din e-mail-adresse ( #user_email# ).";
$pgv_lang["mail01_line03"]		= "Oplysningerne om dig bliver givet ved forespørgsel om brugerkonto.";
$pgv_lang["mail01_line04"]		= "Klik venligst på linket nedenfor og udfyld de korrekte data for at bekræfte din konto og e-mail-adresse.";
$pgv_lang["mail01_line05"]		= "Hvis du ikke har bedt om at få en konto, kan du bare slette denne e-mail.";
$pgv_lang["mail01_line06"]		= "Du vil ikke få tilsendt flere e-mails herfra, fordi kontoen vil blive slettet efter 7 dage hvis den ikke bliver bekræftet.";
$pgv_lang["mail01_subject"]		= "Din registrering hos #SERVER_NAME#";
$pgv_lang["mail02_line01"]		= "Hej administrator ...";
$pgv_lang["mail02_line02"]		= "En ny bruger har registreret sig hos ( #SERVER_NAME# ).";
$pgv_lang["mail02_line03"]		= "Brugeren har fået tilsendt en e-mail med de nødvendige data for at bekræfte ønsket om en konto.";
$pgv_lang["mail02_line04"]		= "Du vil blive informeret via email, når denne mulige bruger har bekræftet sin forespørgel. Du kan færdigøre processen ved at aktivere brugernavnet. Den nye bruger vil ikke kunne logge på før du har aktiveret kontoen.";
$pgv_lang["mail02_line04a"]		= "Du vil blive informeret via emauk, når denne mulige bruger har bekræftet sin forespørgsel. Efter dette vil brugeren kunne logge ind uden din indblanding.";
$pgv_lang["mail02_subject"]		= "Ny registrering på #SERVER_NAME#";
$pgv_lang["hashcode"]			= "Kontrolkode:";
$pgv_lang["thankyou"]			= "Hej #user_fullname# og tak for din ansøgning om at få en brugerkonto.";
$pgv_lang["pls_note06"]			= "Vil vil nu sende en bekræftelse via email til emailadressen <b>#user_email#</b>. Du skal godkende din kontoforespørgsel ved at følge vejledningen i emailen. Hvis du ikke bekræfter din tilmelding inden for 7 dage, vil forespørgsel automatisk blive afvist. Du skal derefter ansøge igen.<br /><br />Efter du har fulgt vejledningen i emailen, skal en administrator godkende din ansøgning før din konto kan bruges.<br /><br />For at logge ind på dette websted skal du kende dit brugernavn og adgangskode<br /><br />";
$pgv_lang["pls_note06a"] 		= "Vi vil nu sende en bekræftelse pr. e-mail til adressen <b>#user_email#</b>. Du skal bekræfte dit ønske om at få en konto ved at følge instruktionerne i e-mailen. Hvis du ikke bekræfter ønsket om at få en konto inden 7 dage, vil ønsket om en konto blive afslået automatisk.  Hvis du senere ønsker at få en konto, skal du søge om det igen.<br /><br />Efter at du har fulgt instruktionerne i bekræftelses-e-mailen, kan du logge dig ind.  For at logge dig ind på dette website, kræves det at du opgiver dit brugernavn og adgangskode.<br /><br />";
$pgv_lang["registernew"]		= "Bekræftelse af ny konto";
$pgv_lang["user_verify"]		= "Brugergodkendelse";
$pgv_lang["send"]				= "Send";
$pgv_lang["pls_note07"]			= "Opgiv det brugernavn, adgangskode og kontrolkode du fik tilsendt pr. e-mail fra dette website som en bekræftelse på din ansøgning.";
$pgv_lang["pls_note08"]			= "Informationen om brugeren <b>#user_name#</b> er checket.";
$pgv_lang["mail03_line01"]		= "Hej administrator ...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# ( #newuser[fullname]# ) har bekræftet ønsket om at få en brugerkonto.";
$pgv_lang["mail03_line03"]		= "Klik på linket \"Admin\" på siden \"Login\" på PhpGedView for at godkende den nye bruger på dit website.";
$pgv_lang["mail03_line03a"]		= "Du behøver ikke at foretage dig noget; brugeren kan nu logge sig ind.";
$pgv_lang["mail03_subject"]		= "Ny bekræftelse fra #SERVER_NAME#";
$pgv_lang["pls_note09"]			= "Du er genkendt som en ansøger til dette website.";
$pgv_lang["pls_note10"]			= "Administratoren af websitet har fået besked om ansøgningen.<br />Såsnart vedkommende har godkendt din konto,<br />kan du logge dig ind med dit brugernavn og adgangskode.";
$pgv_lang["pls_note10a"]		= "Du kan nu logge dig ind med dit brugernavn og adgangskode.";
$pgv_lang["data_incorrect"]		= "Data var ugyldige!<br />- Prøv igen!";
$pgv_lang["user_not_found"]		= "Kunne ikke genkende oplysningerne du opgav! Gå tilbage og prøv igen.";
$pgv_lang["lost_pw_reset"]		= "Bestil en ny adgangskode";
$pgv_lang["pls_note11"]			= "For at få en ny adgangskode, skal du opgive dit brugernavn og e-mail-adresse til brugerkontoen. <br /><br />Vi vil derefter sende dig en e-mail med en speciel internetadresse, som indeholder en bekræftelseskode på din konto.<br />På denne internetside vil du kunne ændre adgangskoden for at få adgang til din brugerside igen.<br />Af sikkerhedsmæssige grunde, bør du ikke vise denne bekræftelseskode til nogen, inklusiv administratoren for denne site (vi vil heller ikke spørge efter den).<br /><br />Hvis du ønsker at få mere hjælp vedrørende dette, så kontakt administrator.";
$pgv_lang["mail04_line01"]		= "Hej #user_fullname# ...";
$pgv_lang["mail04_line02"]		= "Der bliver bestilt en ny adgangskode til dit brugernavn!";
$pgv_lang["mail04_line03"]		= "Anbefaling:";
$pgv_lang["mail04_line04"]		= "Klik venligst på linket nedenfor. Log dig ind med den nye adgangskode. Du bør så angive en ny adgangskode for at beskytte dine data.";
$pgv_lang["mail04_line05"]			= "Efter at du har logget ind, så vælg linket '#pgv_lang[myuserdata]#' under '#pgv_lang[mygedview]#' menuen og udfyld feltet til adgangskoden for at ændre din adgangskode.";
$pgv_lang["mail04_subject"]		= "Data anmodning fra #SERVER_NAME#";
$pgv_lang["pwreqinfo"]			= "Hej...<br /><br />En e-mail med den nye adgangskode blev sendt til e-mail-adressen (#user[email]#).<br /><br />Check venligst din e-mail om få minutter.<br /><br />Anbefaling:<br /><br />Efter at du har modtaget e-mailen, bør du logge dig ind på dette website med din ny adgangskode og ændre det. Dette bør gøres af hensyn til sikkerheden for dine data.";
$pgv_lang["myuserdata"]			= "Min konto";
$pgv_lang["user_theme"]			= "Mit tema";
$pgv_lang["mgv"]				= "Min GedView Portal";
$pgv_lang["mygedview"]			= "Min GedView Portal";
$pgv_lang["passwordlength"]		= "Adgangskoden skal indeholde mindst 6 tegn.";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><h3><b>Velkommen til disse slægtssider !</b></h3>PS! - <i>Siderne er tilgængelig for <b>alle</b> besøgende, der har en brugerkonto.</i><br />Har du en brugerkonto, kan du logge dig ind herunder.<br /><br />Hvis du ikke har en brugerkonto endnu, kan du søge om at få en<br />ved at klikke på linket \"[Bestil en ny brugerkonto]\".<br />Efter at have checket informationerne i din ansøgnning, vil administratoren af websitet aktivere din konto.<br />Du vil modtage en e-mail når den er godkendt.</center>";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><h3><b>Velkommen til disse slægtssider !</b></h3>PS! - <i>Siderne er <b>kun</b> tilgængelig for <b>registrerede</b> brugere!</i><br />Har du en brugerkonto, kan du logge dig ind herunder.<br /><br />Hvis du ikke har en konto endnu, kan søge om at få oprettet en konto<br />ved at klikke på linket \"[Bestil en ny brugerkonto]\".<br />Efter at have checket informationerne i din ansøgning,<br />kan administratoren af websitet enten godkende eller afslå den.<br />Du vil modtage en e-mail med besked, hvis din ansøgning bliver accepteret.</center>";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><h3><b>Velkommen til disse slægtssider !</b></h3>PS! - <i>Siderne er <b>kun</b> tilgængelig for <b>medlemmer af familien</b>.</i><br />Har du en brugerkonto, kan du logge dig ind herunder.<br /><br />Hvis du ikke har en konto endnu, kan søge om at få oprettet en konto<br />ved at klikke på linket \"[Bestil en ny brugerkonto]\".<br />Efter at have checket informationerne i din ansøgning,<br />kan administratoren af websitet enten godkende eller afslå den.<br />Du vil modtage en e-mail, hvis den bliver godkendt.</center>";
$pgv_lang["welcome_text_cust_head"]		= "<center><h3><b>Velkommen til disse slægtssider !</b></h3>PS! - <i>Siderne er <b>kun</b> tilgængelig for brugere som har <b>gyldigt</b> brugernavn og adgangskode.</i></center><br />";
//-- mygedview page
$pgv_lang["upcoming_events"]	= "Begivenheder";
$pgv_lang["living_or_all"]			= "Vis kun begivenheder for nulevende personer?";
$pgv_lang["basic_or_all"]			= "Vis kun fødsler, dødsfald og vielser?";
$pgv_lang["style"]					= "Præsentations stil";
$pgv_lang["style1"]					= "Tekst";
$pgv_lang["style2"]					= "Tabel";
$pgv_lang["cal_download"]			= "Tillad download af kalender begivenheder?";
$pgv_lang["no_events_living"]		= "Der findes ingen begivenheder for nulevende personer for de næste #pgv_lang[global_num1]# dage.";
$pgv_lang["no_events_living1"]		= "Der findes ingen begivenheder for nulevende personer for imorgen.";
$pgv_lang["no_events_all"]			= "Der findes ingen begivenheder for de næste #pgv_lang[global_num1]# dage.";
$pgv_lang["no_events_all1"]			= "Der findes ingen begivenheder for imorgen.";
$pgv_lang["no_events_privacy"]		= "Der findes begivenheder for de næste #pgv_lang[global_num1]# dage, men restriktioner aht. privatlivet forhindrer dig i at se dem.";
$pgv_lang["no_events_privacy1"]		= "Der findes begivenheder for imorgen, men restriktioner af hensyn til privatlivet forhindrer dig i at se dem.";
$pgv_lang["more_events_privacy"]	= "<br />Der findes flere begivenheder for de næste #pgv_lang[global_num1]# dage, men restriktioner af hensyn til privatlivet forhindre dig i at se dem.";
$pgv_lang["more_events_privacy1"]	= "<br />Der findes flere begivenheder for imorgen, men restriktioner af hensyn til privatlivet forhindrer dig i at se dem.";
$pgv_lang["none_today_living"]		= "Der findes ingen begivenheder for nulevende personer i dag.";
$pgv_lang["none_today_all"]			= "Der findes ingen begivenheder for i dag.";
$pgv_lang["none_today_privacy"]		= "Der findes begivenheder for i dag, men restriktioner af hensyn til privatlivet forhindrer dig i at se dem.";
$pgv_lang["more_today_privacy"]		= "<br />Der findes flere begivenheder for i dag, men restriktioner af hensyn til privatlivet forhindrer dig i at se dem.";
$pgv_lang["chat"]				= "Chat";
$pgv_lang["users_logged_in"]	= "Brugere der er logget ind";
$pgv_lang["anon_user"]				= "1 anonymt indlogget bruger";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# brugere der er anonymt logget ind";
$pgv_lang["login_user"]				= "1 bruger logget ind";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# brugere logget ind";
$pgv_lang["no_login_users"]			= "Ingen logget ind og ingen anonyme brugere";
$pgv_lang["message"]			= "Ny besked til:&nbsp;&nbsp; ";
$pgv_lang["my_messages"]		= "Mine beskeder";
$pgv_lang["date_created"]		= "Dato sendt:";
$pgv_lang["message_from"]		= "E-mail-adresse:";
$pgv_lang["message_from_name"]	= "Dit navn:";
$pgv_lang["message_to"]			= "Besked til:";
$pgv_lang["message_subject"]	= "Emne:";
$pgv_lang["message_body"]		= "Din besked:";
$pgv_lang["no_to_user"]			= "Der blev ikke opgivet en anden bruger som modtager. - Kan ikke fortsætte.";
$pgv_lang["provide_email"]		= "Opgiv venligst din e-mail-adresse, så vi kan besvare denne henvendelse.<br />Hvis du ikke opgiver din e-mail-adresse, har vi ikke mulighed for at besvare denne forespørgsel.<br />PS. Din e-mail-adresse vil ikke blive brugt til andet end at besvare denne forespørgsel.";
$pgv_lang["reply"]				= "Svar";
$pgv_lang["message_deleted"]	= "Besked slettet";
$pgv_lang["message_sent"]		= "Besked sendt";
$pgv_lang["reset"]				= "Nulstil";
$pgv_lang["site_default"]		= "Standard på siden";
$pgv_lang["mygedview_desc"]		= "Dette er <i>din side</i> hvor du kan vælge egne <i>favoritter</i>, få en påmindelse om <i>begivenheder</i> og <i>samarbejde med andre brugere</i>.";
$pgv_lang["no_messages"]		= "Der er ingen beskeder til dig.<br /><br />";
$pgv_lang["clicking_ok"]		= "Ved at klikke på OK, åbnes der et nyt vindue, hvor du kan kontakte #user[fullname]#";
$pgv_lang["favorites"]				= "Favorites";
$pgv_lang["my_favorites"]		= "Mine favoritter";
$pgv_lang["no_favorites"]		= "Du har ikke valgt nogle favoritter endnu!<br /><br />For at tilføje en person til dine favoritter, kan du enten finde siden med fakta om personen og så klikke på linket <br />\"Tilføj til Mine favoritter\" eller bruge ID-feltet herunder for at tilføje en person ved hjælp af personens ID-nummer.<br /><br />";
$pgv_lang["add_to_my_favorites"] = "Tilføj til Mine favoritter";
$pgv_lang["gedcom_favorites"]	 = "Favoritter i denne slægtsdatabase";
$pgv_lang["no_gedcom_favorites"] = "Der er ikke valgt nogle Favoritter endnu.  Det er administrator som tilføje personer her, således at disse vises ved opstart.";
$pgv_lang["confirm_fav_remove"]	= "Er du sikker på at du vil fjerne denne person fra dine favoritter?";
$pgv_lang["invalid_email"]		= "Indtast en gyldig e-mail-adresse.";
$pgv_lang["enter_subject"]		= "Indtast en tekst i feltet for emne.";
$pgv_lang["enter_body"]			= "Skriv en besked / tekst før den sendes.";
$pgv_lang["confirm_message_delete"]	= "Er du sikker på du vil slette denne besked? Når den er slettet, kan den ikke hentes tilbage.";
$pgv_lang["message_email1"]		= "Følgende besked blev sendt til din konto i PhpGedView fra ";
$pgv_lang["message_email2"]		= "Du sendte følgende besked til en bruger af PhpGedView:";
$pgv_lang["message_email3"]		= "Du sendte følgende besked til administratoren af PhpGedView:";
$pgv_lang["viewing_url"]		= "Denne besked blev sendt da du var på følgende url: ";
$pgv_lang["messaging2_help"]	= "Når du sender denne besked, vil du også modtage en kopi på den e-mail-adresse du har opgivet.";
$pgv_lang["random_picture"]		= "Tilfældig udvalgt billede";
$pgv_lang["message_instructions"]	= "<b>PS:</b> Privat information om levende personer vil kun blive givet til slægtninge og nære venner.  Du vil blive spurgt om at bekræfte din tilknytning / slægtskab førend du vil få adgang til at se private data.  Af og til kan information om døde personer også være private.  Hvis dette er tilfældet, skyldes det, at der ikke er fundet nok information om personen til at afgøre om vedkommende lever eller ej, eller andre oplysninger om personen.<br /><br />Førend du sender en forespørgsel, så check venligst, at det er den rigtige person ved at se på datoer, steder og nære slægtninge.  Hvis du ændrer slægtsdataene, så opgiv venligst kilderne til dataene.<br /><br />";
$pgv_lang["sending_to"]			= "- Beskeden vil blive sendt til #TO_USER#";
$pgv_lang["preferred_lang"]	 	= "- som ønsker at du skriver beskeden på #USERLANG# <br /><br />";
$pgv_lang["gedcom_created_using"]	= "Denne slægtsdatabase blev oprettet ved hjælp af <b>#SOFTWARE# #VERSION#</b>";
$pgv_lang["gedcom_created_on"]	= "GEDCOM-filen blev lavet <b>#DATE#</b>";
$pgv_lang["gedcom_created_on2"]	= " <b>#DATE#</b>";
$pgv_lang["gedcom_stats"]		= "Statistik for slægtsdatabasen";
$pgv_lang["stat_individuals"]	= "Individer";
$pgv_lang["stat_families"]		= "Familier, ";
$pgv_lang["stat_sources"]		= "Kilder,  ";
$pgv_lang["stat_other"]			= "Andre poster";
$pgv_lang["stat_earliest_birth"] 	= "Tidligste fødselsår";
$pgv_lang["stat_latest_birth"] 	= "Seneste fødselsår";
$pgv_lang["stat_earliest_death"] 	= "Tidligste dødsår";
$pgv_lang["stat_latest_death"] 	= "Seneste dødsår";
$pgv_lang["customize_page"]		= "Tilpas <i>Min GedView Portal</i>";
$pgv_lang["customize_gedcom_page"]	= "Tilpas denne velkomstside";
$pgv_lang["upcoming_events_block"]	= "Begivenheder";
$pgv_lang["upcoming_events_descr"]	= "Begivenheder viser en liste over begivenheder i den aktive slægtsdatabase, på datoer indenfor de næste 30 dage. For en bruger vil denne ramme kun vise levende personer.  På velkomstsiden vil alle personer/familier blive vist. (NB! Her vil opsætning af privatlivsbeskyttelse kunne reducere listen).";
$pgv_lang["todays_events_block"]	= "På denne dag i din slægtshistorie...";
$pgv_lang["todays_events_descr"]	= "På denne dag i din slægtshistorie... viser en liste over personer, der er knyttet til begivenheder i den aktive slægtsdatabase( slægtsfil) dagen i dag.  Hvis der ikke er nogen begivenheder, vises rammen ikke.  På \"din\" GedView side vil denne ramme kun vise levende personer.  På hovedsiden vil alle personer / familier blive vist (NB! Her vil opsætning mht. privatliv kunne reducere listen).";
$pgv_lang["logged_in_users_block"]	= "Brugere, der er logget ind";
$pgv_lang["logged_in_users_descr"]	= "Brugere, der er logget ind, viser en liste over brugere, der er logget ind på det pågældende tidspunkt..";
$pgv_lang["user_messages_block"]	= "Bruger beskeder";
$pgv_lang["user_messages_descr"]	= "Bruger beskeder viser en liste med beskeder, der er blevet sendt til de aktive brugere.";
$pgv_lang["user_favorites_block"]	= "Brugeres favoritpersoner";
$pgv_lang["user_favorites_descr"]	= "Brugeres favoritpersoner viser en liste med deres egne \"favoritpersoner\" i slægten, så de let kan findes igen.";
$pgv_lang["welcome_block"]		= "Bruger info";
$pgv_lang["welcome_descr"]		= "Rammen for brugeres egen side viser brugeren, gældende dato og tid, hurtiglinks for ændring af egen konto eller til at gå til deres eget slægtstræ, og en link for at tilpasse egen side.";
$pgv_lang["random_media_block"]	= "Tilfældig udvalgt billede";
$pgv_lang["random_media_descr"]	= "Tilfældig udvalgt billede viser et tilfældigt udvalgt billede fra den aktive slægtsdatabase.";
$pgv_lang["random_media_persons_or_all"]	= "Vis kun personer, begivenheder eller alt?";
$pgv_lang["random_media_persons"]	= "Personer";
$pgv_lang["random_media_events"]	= "Begivenheder";
$pgv_lang["gedcom_block"]		= "Slægtsdatabase info";
$pgv_lang["gedcom_descr"]		= "Velkomsthilsnen virker på samme måde som den enkelte brugers velkomsthilsen, ved at besøgende på siden ønskes velkommen, viser titlen på den standard aktive slægtsfil samt gældende dato og tid.";
$pgv_lang["gedcom_favorites_block"]	= "Favoritter i slægtsdatabasen";
$pgv_lang["gedcom_favorites_descr"]	= "Favoritter i slægtsdatabasen giver administrator af websitet mulighed for at udvælge nogle centrale personer i slægtsfilen, der vil være af interesse for de fleste besøgende. På den måde kan de let finde disse favoritpersoner, og er en måde at fremhæve disse personer på, som centrale i slægtshistorien.";
$pgv_lang["gedcom_stats_block"]	= "Statistik for slægtsdatabasen";
$pgv_lang["gedcom_stats_descr"]	= "Statistik for slægtsdatabasen viser en del basis-information om slægtsfilen. Hvornår den blev oprettet, og hvor mange personer, familier og kilder der findes i GEDCOM-filen.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Vis fælles efternavne?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Du kan tilpasse siden ved at anbringe rammerne på siden, som du har lyst.<br /><br />Siden er delt i <b>Hovedsektionen</b> og <b>Højresketionen</b>.	<b>Hovedsektionens</b> rammer er større og vises under sidens titel.  <b>Højresektionen</b> begynder til højre for titlen og går ned i højre side.<br /><br />Hver sektion har sin egen liste over rammer, der vil blive vist på siden i den rækkefølge de er listet.  Du kan tilføje, fjerne og arrangere rammerne, som du har lyst.<br /><br />Når en af listen over rammerne er tom, vil de resterende rammer optage hele bredden af siden.<br /><br />";
$pgv_lang["login_block"]		= "Log ind";
$pgv_lang["login_descr"]		= "Log ind skriver et brugernavn og adgangskode for brugere så de kan logge sig ind.";
$pgv_lang["theme_select_block"]	= "Vælg tema";
$pgv_lang["theme_select_descr"]	= "Valg af tema viser valgfeltet for det ønskede tema selv om valget for at skifte tema ikke er aktiveret.";
$pgv_lang["block_top10_title"]	= "De 10 mest viste efternavne";
$pgv_lang["block_top10"]		= "Top 10 efternavne";
$pgv_lang["block_top10_descr"]	= "Rammen viser en tabel med de 10 mest forekommende efternavne i slægtsdatabasen";
$pgv_lang["gedcom_news_block"]	= "Nyheder<br /><br />";
$pgv_lang["gedcom_news_descr"]	= "Nyhedsrammen viser besøgende sidste nyt eller artikler indlagt af en bruger med administratorrettigheger.<br />Rammen er et fint sted til at bekendtgøre opdateringer af slægtsdatabasen eller et slægtstævne.";
$pgv_lang["gedcom_news_limit"]		= "Begræns visning efter:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Ingen begrænsning";
$pgv_lang["gedcom_news_limit_date"]		= "Alder";
$pgv_lang["gedcom_news_limit_count"]	= "Antal objekter";
$pgv_lang["gedcom_news_flag"]		= "Grænse:";
$pgv_lang["gedcom_news_archive"] 	= "Vis arkiv";
$pgv_lang["user_news_block"]	= "Notatblok";
$pgv_lang["user_news_descr"]	= "Rammen: Notatblok giver den enkelte bruger mulighed for at tilføje notater eller anvende den som en online opslagstavle.";
$pgv_lang["my_journal"]			= "Min notesblok";
$pgv_lang["no_journal"]			= "Du har ikke skrevet nogle notater endnu.";
$pgv_lang["confirm_journal_delete"]	= "Er du sikker på at du vil slette dette notat?";
$pgv_lang["add_journal"]		= "Tilføj nyt notat";
$pgv_lang["gedcom_news"]		= "Nyheder";
$pgv_lang["confirm_news_delete"]	= "Er du sikker på at du vil slette denne nyhedsartikel?";
$pgv_lang["add_news"]			= "Tilføj et nyhedsindlæg";
$pgv_lang["no_news"]			= "Ingen nyhedsartikler er blevet tilføjet...!";
$pgv_lang["edit_news"]			= "Tilføj / ændre notat- / nyhedsindlæg";
$pgv_lang["enter_title"]		= "Anfør venligst en titel.";
$pgv_lang["enter_text"]			= "Tilføj venligst en tekst for dette nyheds- eller notatblok-indlæg.";
$pgv_lang["news_saved"]			= "Nyheds- / Notablokindlæg er gemt...!";
$pgv_lang["article_text"]		= "Indsæt tekst:";
$pgv_lang["main_section"]		= "Hovedsektionens rammer";
$pgv_lang["right_section"]		= "Højresektionens rammer";
$pgv_lang["available_blocks"]		= "Mulige rammer";
$pgv_lang["move_up"]			= "Flyt op";
$pgv_lang["move_down"]			= "Flyt ned";
$pgv_lang["move_right"]			= "Flyt til højre";
$pgv_lang["move_left"]			= "Flyt til venstre";
$pgv_lang["broadcast_all"]		= "Send til alle brugere";
$pgv_lang["hit_count"]			= "Antal hits:";
$pgv_lang["phpgedview_message"]	= "PhpGedView besked";
$pgv_lang["common_surnames"]	= "Oftest forekommende efternavne";
$pgv_lang["default_news_title"]		= "Velkommen til disse slægtssider";
$pgv_lang["default_news_text"]		= "Information om slægten på dette website bliver vist ved hjælp af <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView #VERSION#</a><br />Siderne giver dig et indblik og en oversigt over denne slægt.<br />Som en start, kan du fx vælge personliste på menuen, et af slægtstræerne eller søge efter et navn eller et sted.<br /><br />Hvis der er noget du ikke forstår på en side, så se Hjælp i menuen!<br />Der vil du til enhver tid få information om den side du er på.<br /><br /><b><i>Tak fordi du besøger denne website.</i></b>";
$pgv_lang["reset_default_blocks"]	= "Reset til standard rammer";
$pgv_lang["recent_changes"]			= "Seneste ændringer";
$pgv_lang["recent_changes_block"]	= "Seneste ændringer";
$pgv_lang["recent_changes_descr"]	= "Rammen <i>Seneste ændringer</i> vil vise en liste over alle de ændringer, der er udført i slægtsdatabasen indenfor den sidste måned.  Rammen kan hjælpe dig med  at holde dig opdateret mht. de ændringer, der er foretaget.  De ændringer, der vises, er knyttet til CHAN-tagget.";
$pgv_lang["recent_changes_none"]	= "<b>Der er ingen ændringer sket i de sidste #pgv_lang[global_num1]# dage.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Ændringer foretaget indenfor de sidste #pgv_lang[global_num1]# dage</b><br />";
$pgv_lang["show_empty_block"]		= "Skal denne ramme skjules når den er tom?";
$pgv_lang["hide_block_warn"]		= "Hvis du skjuler en tom ramme, vil du ikke kunne ændre opsætningen af den indtil den bliver synlig igen når den ikke er tom længere.";
$pgv_lang["delete_selected_messages"]	= "Slet valgte beskeder";
$pgv_lang["use_blocks_for_default"]	= "Brug denne rammeopsætning som standard for alle brugere?";
$pgv_lang["block_not_configure"]	=	"Denne ramme kan ikke ændres.";
//-- validate GEDCOM
$pgv_lang["add_media_tool"]			= "Tilføj link til billede / andre medier i slægtsfilen";
//-- hourglass chart
$pgv_lang["hourglass_chart"]	= "Timeglasvisning";
//-- report engine
$pgv_lang["choose_report"]		= "Vælg en udskriftstype";
$pgv_lang["enter_report_values"]	= "Opsætning af udskrift";
$pgv_lang["selected_report"]	= "Valgt udskrift:&nbsp;&nbsp;";
$pgv_lang["select_report"]		= "Næste >>";
$pgv_lang["download_report"]	= "Download udskrift";
$pgv_lang["reports"]			= "Udskrifter";
$pgv_lang["pdf_reports"]		= "PDF udskrifter";
$pgv_lang["html_reports"]		= "HTML udskrifter";
//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Anetræsudskrift";
$pgv_lang["ahnentafel_header"]		= "Anetræsudskrift for ";
$pgv_lang["ahnentafel_generation"]	= "Generation ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Han ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Hun ";
$pgv_lang["ahnentafel_born_m"]		= "blev født";
$pgv_lang["ahnentafel_born_f"]		= "blev født";
$pgv_lang["ahnentafel_christened_m"] = "blev døbt";
$pgv_lang["ahnentafel_christened_f"] = "blev døbt";
$pgv_lang["ahnentafel_married_m"]	= "viet";
$pgv_lang["ahnentafel_married_f"]	= "viet";
$pgv_lang["ahnentafel_died_m"]		= "døde";
$pgv_lang["ahnentafel_died_f"]		= "døde";
$pgv_lang["ahnentafel_buried_m"]	= "blev begravet";
$pgv_lang["ahnentafel_buried_f"]	= "blev begravet";
$pgv_lang["ahnentafel_place"]		= " i ";
$pgv_lang["ahnentafel_no_details"]	= " men detaljerne er ukendte";
$pgv_lang["family_group_report"]	= "Familiegruppeudskrift";
$pgv_lang["page"]				= "Side";
$pgv_lang["of"]					= "af";
$pgv_lang["enter_famid"]		= "Angiv Familie ID";
$pgv_lang["show_sources"]		= "Vis kilder?";
$pgv_lang["show_notes"]			= "Vis noter?";
$pgv_lang["show_basic"]			= "Vis de grundlæggende begivenheder<br />&nbsp;&nbsp;&nbsp;- selv om disse er tomme?";
$pgv_lang["show_photos"]		= "Vis billeder?";
$pgv_lang["relatives_report_ext"]	= "Udvidet udskrift over slægtninge";
$pgv_lang["with"]					= "med";
$pgv_lang["on"]						= "på";
$pgv_lang["in"]						= "i";			// for impreci";
$pgv_lang["individual_report"]	= "Personudskrift";
$pgv_lang["enter_pid"]			= "Angiv Person ID&nbsp;";
$pgv_lang["generated_by"]		= "Genereret af";
$pgv_lang["list_children"]		= "List børn sorteret efter alder";
$pgv_lang["birth_report"]		= "Fødselsdato- og stedudskrift";
$pgv_lang["birthplace"]			= "Fødested indeholder:&nbsp; ";
$pgv_lang["birthdate1"]			= "Vis fødte <b>fra</b> dato:&nbsp; ";
$pgv_lang["birthdate2"]			= "Vis fødte <b>til</b> dato:&nbsp; ";
$pgv_lang["death_report"]			= "Udskrift over dødsdato og sted";
$pgv_lang["deathplace"]				= "Dødsstedet indeholder";
$pgv_lang["deathdate1"]				= "Dødsdato interval start";
$pgv_lang["deathdate2"]				= "Dødsdato interval slut";
$pgv_lang["marr_report"]			= "Udskrift over ægteskabsdato og sted";
$pgv_lang["marrplace"]				= "Ægteskabssted indeholder";
$pgv_lang["marrdate1"]				= "Ægteskabsdato område start";
$pgv_lang["marrdate2"]				= "Ægteskabsdato område slut";
$pgv_lang["sort_by"]			= "Sorteret efter:&nbsp; ";
$pgv_lang["cleanup"]			= "Ryd op";
//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["dynasty_list"]		= "Liste over stamfædre";
$pgv_lang["patriarch_list"]		= "Stamfædreliste";
$pgv_lang["statistics"]			= "Statistik";
//-- Merge Records
$pgv_lang["merge_same"]			= "Posterne er ikke af samme type.  Kan ikke flette poster som er af forskellig type!";
$pgv_lang["merge_step1"]		= "Fletning trin 1 af 3";
$pgv_lang["merge_step2"]		= "Fletning trin 2 af 3";
$pgv_lang["merge_step3"]		= "Fletning trin 3 af 3";
$pgv_lang["select_gedcom_records"]	= "Vælg 2 GEDCOM-poster, som skal flettes.  Posterne skal være af samme type.";
$pgv_lang["merge_to"]			= "Flet til ID:";
$pgv_lang["merge_from"]			= "Flet fra ID:";
$pgv_lang["merge_facts_same"]	= "Følgende oplysninger er nøjagtig ens i begge poster og vil blive flettet automatisk";
$pgv_lang["no_matches_found"]	= "Fandt ingen ens oplysninger";
$pgv_lang["unmatching_facts"]	= "Følgende faktafelter har forskelligt indhold.  Vælg de oplysninger du ønsker at beholde.";
$pgv_lang["record"]				= "Post";
$pgv_lang["adding"]				= "Tilføjer";
$pgv_lang["updating_linked"]	= "Opdaterer poster som er knyttet til denne";
$pgv_lang["merge_more"]			= "Flette flere poster.";
$pgv_lang["same_ids"]			= "Du opgav to ens ID numre.  Du kan ikke flette en post med sig selv.";
//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]		= "Stamtræ";
$pgv_lang["gen_ancestry_chart"]	= "Forfædre - #PEDIGREE_GENERATIONS# slægtsled";
$pgv_lang["chart_style"]		= "Udformning";
$pgv_lang["ancestry_list"]		= "Stamtræsliste";
$pgv_lang["ancestry_booklet"]	= "Stamtræ i bogform";
$pgv_lang["show_cousins"]		= "Vis fætre og kusiner";
// 1st generation
$pgv_lang["sosa_2"] 				= "Far";
$pgv_lang["sosa_3"] 				= "Mor";
// 2nd generation
$pgv_lang["sosa_4"] 				= "Farfar";
$pgv_lang["sosa_5"] 				= "Farmor";
$pgv_lang["sosa_6"] 				= "Morfar";
$pgv_lang["sosa_7"] 				= "Mormor";
// 3rd generation
$pgv_lang["sosa_8"] 				= "Oldefar";
$pgv_lang["sosa_9"] 				= "Oldemor";
$pgv_lang["sosa_10"]				= "Oldefar";
$pgv_lang["sosa_11"]				= "Oldemor";
$pgv_lang["sosa_12"]				= "Oldefar";
$pgv_lang["sosa_13"]				= "Oldemor";
$pgv_lang["sosa_14"]				= "Oldefar";
$pgv_lang["sosa_15"]				= "Oldemor";
// 4th generation
$pgv_lang["sosa_16"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_17"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_18"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_19"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_20"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_21"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_22"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_23"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_24"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_25"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_26"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_27"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_28"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_29"]				= "Tip-tip-oldemor";
$pgv_lang["sosa_30"]				= "Tip-tip-oldefar";
$pgv_lang["sosa_31"]				= "Tip-tip-oldemor";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x tip oldefar";
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x tip oldemor";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x tip oldefar";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x tip oldemor";

//-- FAN CHART
$pgv_lang["compact_chart"]			= "Kompakt anetræ";
$pgv_lang["fan_chart"]			= "Anehjul";
$pgv_lang["gen_fan_chart"]		= "Anehjul - #PEDIGREE_GENERATIONS# slægtsled";
$pgv_lang["fan_width"]			= "Hjulbredde";
$pgv_lang["gd_library"]			= "Ugyldig konfiguration af PHP server: Biblioteket GD 2.x er nødvendig for billedfunktionen.";
$pgv_lang["gd_freetype"]		= "Ugyldig konfiguration af PHP server: Biblioteket Freetype er nødvendig for TrueType skrifttyper.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]		= "Fandt ikke nødvendige filer med skrifttyper på PHP serveren";
$pgv_lang["fanchart_IE"]		= "Dette anehjul kan ikke skrives direkte ud fra din browser. Brug højreklik og vælg så Gem billede. Så skal du åbne billedet i et andet program for så at printe det ud derfra.";
//-- RSS Feed
$pgv_lang["rss_descr"]			= "Nyheder og links fra websitet #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]		= "Beskrivelsen er lavet af PhpGedView #VERSION#";
$pgv_lang["rss_feeds"]			= "RSS links";
$pgv_lang["no_feed_title"]			= "Feed er ikke tilgængligt";
$pgv_lang["no_feed"]				= "Der er ikke nogen RSS feeds tilgængelig for dette PhpGedView sted";
$pgv_lang["feed_login"]				= "Hvis du har en konto hos dette PhpGedView sted, kan du <a href=\"#AUTH_URL#\">logge ind</a> på serveren ved hjælp af Grundlæggende HTTP godkendelse for at se private oplysninger.";
$pgv_lang["authenticated_feed"]		= "Godkendt feed";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] 			= "Deltagere";
$pgv_lang["attending"] 			= "Observatør";
$pgv_lang["best_man"] = "Forlover";
$pgv_lang["bridesmaid"] = "Brudepige";
$pgv_lang["buyer"] = "Køber";
$pgv_lang["circumciser"]		= "Omskærer";
$pgv_lang["civil_registrar"] 	= "Sorenskriver";
$pgv_lang["friend"] 			= "Ven";
$pgv_lang["godfather"] 			= "Gudfar";
$pgv_lang["godmother"] 			= "Gudmor";
$pgv_lang["godparent"] 			= "Gudforældre";
$pgv_lang["informant"] 			= "Informant";
$pgv_lang["lodger"] 			= "Lejer";
$pgv_lang["nurse"] 				= "Sygeplejerske";
$pgv_lang["priest"]				= "Præst";
$pgv_lang["rabbi"] 				= "Rabbi";
$pgv_lang["registry_officer"] 	= "Registerfører";
$pgv_lang["seller"] = "Sælger";
$pgv_lang["servant"] 			= "Tjener";
$pgv_lang["twin"] 				= "Tvilling";
$pgv_lang["twin_brother"] 		= "Tvillingebror";
$pgv_lang["twin_sister"] 		= "Tvillingesøster";
$pgv_lang["witness"] 			= "Vidne";
//-- statistics utility
$pgv_lang["statutci"]			= "Kunne ikke oprette indeks";
$pgv_lang["statnnames"]         = "antal navne     =";
$pgv_lang["statnfam"]           = "antal familier =";
$pgv_lang["statnmale"]          = "antal mænd     =";
$pgv_lang["statnfemale"]        = "antal kvinder  =";
$pgv_lang["statvars"]			= "Udfyld følgende variabler til diagrammet";
$pgv_lang["statlxa"]			= "langs x-aksen:";
$pgv_lang["statlya"]			= "langs y-aksen:";
$pgv_lang["statlza"]			= "langs z-aksen";
$pgv_lang["stat_10_none"]		= "ingen";
$pgv_lang["stat_11_mb"]			= "Fødselsmåned";
$pgv_lang["stat_12_md"]			= "Dødsmåned";
$pgv_lang["stat_13_mm"]			= "Ægteskabsmåned";
$pgv_lang["stat_14_mb1"]		= "Fødselsmåned for førstefødte i familie";
$pgv_lang["stat_15_mm1"]		= "Måned for første ægteskab";
$pgv_lang["stat_16_mmb"]		= "Måneder mellem ægteskab og første barn.";
$pgv_lang["stat_17_arb"]		= "alder i forhold til fødselsår.";
$pgv_lang["stat_18_ard"]		= "alder i forhold til dødsår.";
$pgv_lang["stat_19_arm"]		= "alder i forhold til vielsesår.";
$pgv_lang["stat_20_arm1"]		= "alder ved første ægteskab.";
$pgv_lang["stat_21_nok"]		= "antal børn.";
$pgv_lang["stat_gmx"]			= " check akse-værdier for måned";
$pgv_lang["stat_gax"]			= " check akse-værdier for alder";
$pgv_lang["stat_gnx"]			= " check akse-værdier for antal";
$pgv_lang["stat_200_none"]		= "alle (eller tom)";
$pgv_lang["stat_201_num"]		= "antal";
$pgv_lang["stat_202_perc"]		= "procent";
$pgv_lang["stat_300_none"]		= "ingen";
$pgv_lang["stat_301_mf"]		= "mand/kvinde";
$pgv_lang["stat_302_cgp"]		= "perioder. Check akse-værdier (z-akse)";
$pgv_lang["statmess1"]			= "<b>Udfyld kun næste række i forhold til tidligere værdier for x-akse eller z-akse</b>";
$pgv_lang["statar_xgp"]			= "akse-værdier for perioder (x-akse):";
$pgv_lang["statar_xgl"]			= "akse-værdier for alder    (x-akse):";
$pgv_lang["statar_xgm"]			= "akse-værdier for måned    (x-akse):";
$pgv_lang["statar_xga"]			= "akse-værdier for antal   (x-akse):";
$pgv_lang["statar_zgp"]			= "akse-værdier for perioder (z-akse):";
$pgv_lang["statreset"]			= "Nulstil";
$pgv_lang["statsubmit"]			= "Vis diagram";
//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistikliste";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplGDno"]			= "Grafisk visningsbibliotek (GD) er ikke tilgængelig i PHP 4. Kontakt venligst værten for din webserver";
$pgv_lang["stpljpgraphno"]		= "JPgraph moduler Findes ikke i folderen <i>phpgedview/jpgraph/</i>.  Hent dem venligst hos http://www.aditus.nu/jpgraph/jpdownload.php<br> <h3>Installer først JPgraph i folderen <i>phpgedview/jpgraph/</i></h3><br>";
$pgv_lang["stplinfo"]			= "diagraminformation:";
$pgv_lang["stpltype"]			= "type:";
$pgv_lang["stplnoim"]			= " ikke tilgængelig:";
$pgv_lang["stplmf"]			 	= " / mand-kvinde";
$pgv_lang["stplipot"]			= " / pr. tidsperiode";
$pgv_lang["stplgzas"]			= "grænser på z-akse:";
$pgv_lang["stplmonth"]			= "måned";
$pgv_lang["stplnumbers"]		= "antal for en familie";
$pgv_lang["stplage"]			= "alder";
$pgv_lang["stplperc"]			= "procent";
$pgv_lang["stplnumof"]			 = "Antal ";
$pgv_lang["stplmarrbirth"]		 = "Måneder mellem ægteskab og første barns fødsel";

//-- alive in year
$pgv_lang["alive_in_year"]		= "I live i år";
$pgv_lang["is_alive_in"]	   	= "Er i live i&nbsp;&nbsp;#YEAR#";
$pgv_lang["alive"]			     	= "Levende ";
$pgv_lang["dead"]			      	= "Død ";
$pgv_lang["maybe"]			     	= "Måske ";
$pgv_lang["both_alive"]					= "Begge i live ";
$pgv_lang["both_dead"]					= "Begge døde ";

//-- Help system
$pgv_lang["definitions"]			= "Definitioner";
//-- Index_edit
$pgv_lang["block_desc"]				= "Beskrivelse af rammer";
$pgv_lang["click_here"]				= "Klik her for at fortsætte";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Klik på denne knap for at gemme dine ændringer.<br /><br />Du vil blive sendt tilbage til en af siderne:<b>#pgv_lang[welcome]# eller #pgv_lang[mygedview]#</b>, men dine ændringer bliver muligvis ikke vist.  Du skal muligvis klikke på din browsers opdateringsknap (Reload/Refresh) for at se ændringerne.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Her gives en kort beskrivelse af hver af de rammer du kan placere på #pgv_lang[welcome]# eller #pgv_lang[mygedview]# siden.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";
//-- Find page
$pgv_lang["total_places"]			= "Steder fundet";
$pgv_lang["media_contains"]			= "Medie indeholder:";
$pgv_lang["repo_contains"]			= "Opbevaringssteder indeholder:";
$pgv_lang["source_contains"]		= "Kildeliste indholder:";
$pgv_lang["display_all"]			= "Vis alle";
//-- accesskey navigation
$pgv_lang["accesskeys"]				= "Tastatur genveje";
$pgv_lang["accesskey_skip_to_content"]	= "C";
$pgv_lang["accesskey_search"]	= "S";
$pgv_lang["accesskey_skip_to_content_desc"]	= "Skip til indhold";
$pgv_lang["accesskey_viewing_advice"]	= "0";
$pgv_lang["accesskey_viewing_advice_desc"]	= "Læsetips";
$pgv_lang["accesskey_home_page"]	= "1";
$pgv_lang["accesskey_help_content"]	= "2";
$pgv_lang["accesskey_help_current_page"]	= "3";
$pgv_lang["accesskey_contact"]	= "4";
$pgv_lang["accesskey_individual_details"]	= "I";
$pgv_lang["accesskey_individual_relatives"]	= "R";
$pgv_lang["accesskey_individual_notes"]	= "N";
$pgv_lang["accesskey_individual_sources"]	= "O";
//clash with IE addBookmark but not a likely problem
$pgv_lang["accesskey_individual_media"]	= "A";
$pgv_lang["accesskey_individual_research_log"]	= "L";
$pgv_lang["accesskey_individual_pedigree"]	= "P";
$pgv_lang["accesskey_individual_descendancy"]	= "D";
$pgv_lang["accesskey_individual_timeline"]	= "T";
$pgv_lang["accesskey_individual_relation_to_me"]	= "M";
//clash with rarely used English Netscape/Mozilla Go menu
$pgv_lang["accesskey_individual_gedcom"]	= "G";
$pgv_lang["accesskey_family_parents_timeline"]	= "P";
$pgv_lang["accesskey_family_children_timeline"]	= "D";
$pgv_lang["accesskey_family_timeline"]	= "T";
//clash with rarely used English Netscape/Mozilla English Go menu
$pgv_lang["accesskey_family_gedcom"]	= "G";
// FAQ Page
$pgv_lang["add_faq_header"] = "FAQ-hoved";
$pgv_lang["add_faq_body"] = "FAQ-indhold";
$pgv_lang["add_faq_order"] = "FAQ-placering";
$pgv_lang["no_faq_items"] = "FAQ-listen er tom.";
$pgv_lang["position_item"] = "Placer punkt";
$pgv_lang["faq_list"] = "FAQ-liste";
$pgv_lang["confirm_faq_delete"] = "Er du sikker på at du vil slette denne FAQ indførsel";
$pgv_lang["preview"] =  "Vis";
$pgv_lang["no_id"] = "Der er ikke angivet nogen FAQ ID !";
// Help search
$pgv_lang["hs_title"] 			= "Søg hjælpetekst";
$pgv_lang["hs_search"] 			= "Søg";
$pgv_lang["hs_close"] 			= "Luk vindue";
$pgv_lang["hs_results"] 		= "Fundne resultater:";
$pgv_lang["hs_keyword"] 		= "Søg efter";
$pgv_lang["hs_searchin"]		= "Søg i";
$pgv_lang["hs_searchuser"]		= "Brugerhjælp";
$pgv_lang["hs_searchconfig"]	= "Administratorhjælp";
$pgv_lang["hs_searchhow"]		= "Type af søgning";
$pgv_lang["hs_searchall"]		= "Alle ord";
$pgv_lang["hs_searchany"]		= "Vilkårligt ord";
$pgv_lang["hs_searchsentence"]	= "Nøjagtig udtryk";
$pgv_lang["hs_intruehelp"]		= "Kun hjælpetekst";
$pgv_lang["hs_inallhelp"]		= "Al tekst";
// Media import
$pgv_lang["choose"] = "Vælg: ";
$pgv_lang["account_information"] = "Kontooplysning";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] = "Lyd";
$pgv_lang["TYPE__book"] = "Bog";
$pgv_lang["TYPE__card"] = "Kort";
$pgv_lang["TYPE__certificate"] = "Certifikat";
$pgv_lang["TYPE__document"] = "Dokument";
$pgv_lang["TYPE__electronic"] = "Elektronisk";
$pgv_lang["TYPE__fiche"] = "Microfiche";
$pgv_lang["TYPE__film"] = "Microfilm";
$pgv_lang["TYPE__magazine"] = "Magasin";
$pgv_lang["TYPE__manuscript"] = "Manuskript";
$pgv_lang["TYPE__map"] = "Kort";
$pgv_lang["TYPE__newspaper"] = "Avis";
$pgv_lang["TYPE__photo"] = "Foto";
$pgv_lang["TYPE__tombstone"] = "Gravsten";
$pgv_lang["TYPE__video"] = "Video";

//-- Other media suff
$pgv_lang["download_image"]			= "Download filen";
$pgv_lang["no_media"]				= "Ingen medier fundet";
$pgv_lang["relations_heading"]		= "Billedet relatere til:";
$pgv_lang["file_size"]				= "Filstørrelse";
$pgv_lang["img_size"]				= "Billedstørrelse";

//-- Modules

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Vis personer i live, i det valgte år.";
$pgv_lang["button_BIRT_Y100"] = "Vis personer født i de sidste 100 år.";
$pgv_lang["button_SEX_F"] = "Vis kun kvinder.";
$pgv_lang["button_SEX_M"] = "Vis kun mænd.";
$pgv_lang["button_SEX_U"] = "Vis kun personer med ukendt køn.";
$pgv_lang["invalid_search_input"] 	= "Skriv også et fornavn, efternavn eller sted sammen med årstallet";
$pgv_lang["duplicate_username"] 	= "Brugernavnet eksisterer allerede. Vælg venligst et andet brugernavn.";
$pgv_lang["cache_life"]				= "Levetid for midlertidige (cache) filer";
$pgv_lang["sort_column"] = "Sorter efter denne kollonne.";
?>
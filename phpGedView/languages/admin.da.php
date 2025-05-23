<?php
/**
 * Danish texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2011  PGV Development Team.  All rights reserved.
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

$pgv_lang["clear_cache_succes"]		= "Midlertidige (cache-)filer er blevet fjernet.";
$pgv_lang["clear_cache"]			= "Fjern midelertidige (cache-)filer";
$pgv_lang["sanity_err0"]			= "Fejl:";
$pgv_lang["sanity_err1"]			= "Du skal have PHP version 4.3 eller nyere installeret.";
$pgv_lang["sanity_err2"]			= "Filen eller mappen <i>#GLOBALS[whichFile]#</i> eksisterer ikke, men kræves i installationen. Kontroller venligst at filen eller mappen eksisterer, ikke har ulovligt navn, og at læserettighederne er sat korrekt. Bemærk at der på nogle systemer er forskel på store og små bogstaver.";
$pgv_lang["sanity_err3"]			= "Filen <i>#GLOBALS[whichFile]#</i> blev ikke oploadet korrekt. Prøv venligst at oploade filen igen.";
$pgv_lang["sanity_err4"]			= "Filen <i>config.php</i> er i stykker.";
$pgv_lang["sanity_err5"]			= "Filen <i>config.php</i> er ikke skrivbar.";
$pgv_lang["sanity_err6"]			= "Mappen <i>#GLOBALS[INDEX_DIRECTORY]#</i> er ikke skrivbar.";
$pgv_lang["sanity_warn0"]			= "Advarsler:";
$pgv_lang["sanity_warn1"]			= "Mappen <i>#GLOBALS[MEDIA_DIRECTORY]#</i> er ikke skrivbar. Du kan derfor ikke lægge medie-filer på hjemmesiden eller generere miniaturer (thumbnails) i PhpGedView.";
$pgv_lang["sanity_warn2"]			= "Mappen <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> er ikke skrivbar. Du kan derfor ikke lægge miniaturer (thumbnails) på hjemmesiden eller generere miniaturer i PhpGedView.";
$pgv_lang["sanity_warn3"]			= "GD imaging library kan ikke findes. PhpGedView virker stadig, men nogle af funktionerne, såsom dannelse af miniaturer (thumbnails) og cirkeldiagrammet, kræver GD imaging library. Se venligst <a href='http://www.php.net/manual/da/ref.image.php'>http://www.php.net/manual/da/ref.image.php</a> for yderligere oplysninger.";
$pgv_lang["sanity_warn4"]			= "XML Parser library kan ikke findes. PhpGedView virker stadig, men nogle af funktionerne, såsom rapportgenerering og webservices, vil ikke virke uden XML Parser library. Se venligst <a href='http://www.php.net/manual/da/ref.xml.php'>http://www.php.net/manual/da/ref.xml.php</a> for yderligere oplysninger.";
$pgv_lang["sanity_warn5"]			= "DOM XML library kan ikke findes. PhpGedView virker stadig, men nogle af funktionerne, såsom Gramps Export funktionerne i udklipsholderen, download og web services vil ikke virke. Se venligst <a href='http://www.php.net/manual/da/ref.dom.php'>http://www.php.net/manual/da/ref.dom.php</a> for yderligere oplysninger.";
$pgv_lang["sanity_warn6"]			= "Calendar library kan ikke findes. PhpGedView virker stadig, men nogle af funktionerne, såsom konvertering til andre kalendere som f.eks hebræisk og fransk, vil ikke virke. Dette er ikke nødvendigt for at bruge PhpGedView. Se venligst <a href='http://www.php.net/manual/da/ref.calendar.php'>http://www.php.net/manual/da/ref.calendar.php</a> for yderligere oplysninger.";
$pgv_lang["ip_address"]				= "IP adresse";
$pgv_lang["date_time"]				= "Dato og tid";
$pgv_lang["log_message"]			= "Log besked";
$pgv_lang["searchtype"]				= "Søgetype";
$pgv_lang["query"]					= "Forespørgsel";
$pgv_lang["user"]					= "Godkendt bruger";
$pgv_lang["thumbnail_deleted"]		= "Miniaturebilledet blev slettet.";
$pgv_lang["thumbnail_not_deleted"]	= "Miniaturebilledet kunne ikke slettes.";
$pgv_lang["step2"]					= "Del 2 af 4:";
$pgv_lang["refresh"]				= "Opdater";
$pgv_lang["move_file_success"]		= "Mediefiler og miniaturebilleder blev flyttet.";
$pgv_lang["media_folder_corrupt"]	= "Folderen med mediefiler er ødelagt.";
$pgv_lang["media_file_not_deleted"]	= "Mediefil kunne ikke slettes.";
$pgv_lang["gedcom_deleted"]		= "GEDCOM-filen [#GED#] er nu slettet.";
$pgv_lang["gedadmin"]				= "GEDCOM administrator";
$pgv_lang["full_name"]				= "Fulde navn";
$pgv_lang["error_header"] 		= "GEDCOM-filen [#GEDCOM#] findes ikke på det angivne sted.";
$pgv_lang["confirm_delete_file"]	= "Er du sikker på, at du vil slette denne fil?";
$pgv_lang["confirm_folder_delete"] = "Er du sikker på, at du vil slette denne mappe?";
$pgv_lang["confirm_remove_links"]	= "Er du sikker på, at du ønsker at fjerne alle links til dette objekt?";
$pgv_lang["PRIV_PUBLIC"]			= "Vis til alle";
$pgv_lang["PRIV_USER"]				= "Vis kun til godkendte brugere";
$pgv_lang["PRIV_NONE"]				= "Vis kun til administrator-brugere";
$pgv_lang["PRIV_HIDE"]				= "Skjul selv for admininistrator-brugere";
$pgv_lang["manage_gedcoms"]			= "Håndtér slægtsfiler og privatliv";
$pgv_lang["keep_media"]				= "Behold referencer fra personer til medie-filer";
$pgv_lang["files_in_backup"]		= "Filer der er inkluderet i denne backup";
$pgv_lang["created_remotelinks"]	= "Oprettede tabel over <i>Eksterne links</i>.";
$pgv_lang["created_remotelinks_fail"] 	= "Kunne ikke oprette tabel over <i>Eksterne links</i>.";
$pgv_lang["created_indis"]		= "Oprettede tabellen <i>Personer</i>.";
$pgv_lang["created_indis_fail"]	= "Kunne ikke oprette tabellen <i>Personer</i>!";
$pgv_lang["created_fams"]		= "Oprettede tabellen <i>Familier</i>.";
$pgv_lang["created_fams_fail"]	= "Kunne ikke oprette tabellen <i>Familier</i>!";
$pgv_lang["created_sources"]	= "Oprettede tabellen <i>Kilder</i>.";
$pgv_lang["created_sources_fail"]	= "Kunne ikke oprette tabellen <i>Kilder</i>!";
$pgv_lang["created_other"]		= "Oprettede tabellen <i>Andet</i>.";
$pgv_lang["created_other_fail"]	= "Kunne ikke oprette tabellen <i>Andet</i>!";
$pgv_lang["created_places"]		= "Oprettede tabellen <i>Stednavne</i>.";
$pgv_lang["created_places_fail"]	= "Kunne ikke oprette tabel med <i>Stednavne</i>.";
$pgv_lang["created_placelinks"] 	= "Tabel over <i>stednavne links</i> blev korrekt oprettet.";
$pgv_lang["created_placelinks_fail"]	= "Kunne ikke oprette <i>stednavne links</i> tabel.";
$pgv_lang["created_media_fail"]	= "Kunne ikke oprette <i>Medie</i>-tabel.";
$pgv_lang["created_media_mapping_fail"]	= "Kunne ikke oprette <i>Medie mappings</i> tabel.";
$pgv_lang["no_thumb_dir"]			= "mappe til miniaturebilleder findes ikke og kunne ikke oprettes.";
$pgv_lang["folder_created"]		= "Mappe oprettet";
$pgv_lang["folder_no_create"]		= "Folderen kunne ikke oprettes";
$pgv_lang["security_no_create"]		= "Sikkerhedsadvarsel: Filen <b><i>index.php</i></b> findes ikke i ";
$pgv_lang["security_not_exist"]		= "Sikkerhedsadvarsel: Kunne ikke oprette filen <b><i>index.php</i></b> i ";
$pgv_lang["label_delete"]           = "Slet";
$pgv_lang["progress_bars_info"]			= "Statuslinjerne nedenfor viser hvordan importeringen forløber. Hvis tidsbegrænsningen udløber stopper importeringen, og du vil blive bedt om at trykke på en <b>fortsæt</b> knap. Hvis importeringen stopper med en fejlmeddelelse før tid, og <i>du ikke ser en fortsæt knap</i>, så gå venligst tilbage og indtast en <i>kortere</i> tidsbegrænsning.";
$pgv_lang["upload_replacement"]			= "Send ny fil til hjemmesiden (upload)";
$pgv_lang["about_user"]					= "Du skal først oprette din primære administrative bruger. Denne bruger har adgang til at opdatere konfigurationsfilerne, se private data og oprette andre brugere.";
$pgv_lang["access"]						= "Adgang";
$pgv_lang["add_gedcom"]			= "Tilføj en slægtsdatabase (GEDCOM)";
$pgv_lang["add_new_gedcom"]			= "Opret en ny slægtsdatabase (GEDCOM-fil)";
$pgv_lang["add_new_language"]			= "Tilføj filer og indstillinger for et nyt sprog";
$pgv_lang["add_user"]					= "Tilføj en ny bruger";
$pgv_lang["admin_gedcom"]			= "Administrér slægstdatabase";
$pgv_lang["admin_gedcoms"]				= "Klik her for at administrere slægtsdatabaser";
$pgv_lang["admin_geds"]				= "Administration af data og slægtsdatabase";
$pgv_lang["admin_info"]				= "Information";
$pgv_lang["admin_site"]				= "Administration af hjemmesiden";
$pgv_lang["admin_user_warnings"]		= "En eller flere brugerkonti har advarsler";
$pgv_lang["admin_verification_waiting"] = "Brugerkonti afventer godkendelse af administrator";
$pgv_lang["administration"]			= "Administration";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]		= "Tillad skift mellem slægtsdatabaser";
$pgv_lang["ALLOW_USER_THEMES"]			= "Tillad brugere selv at vælge hjemmesidens udseende";
$pgv_lang["ansi_encoding_detected"]	= "Opdaget ANSI tekstformat. PhpGedView fungerer bedst med filer som er i UTF-8 format.";
$pgv_lang["ansi_to_utf8"]			= "Konverter GEDCOM-fil i ANSI-format til UTF-8?";
$pgv_lang["apply_privacy"]			= "Anvend privatlivsindstillinger?";
$pgv_lang["back_useradmin"]				= "Tilbage til brugeradministration";
$pgv_lang["bytes_read"]			= "Bytes læst:";
$pgv_lang["can_admin"]					= "Bruger har administrator-rettigheder";
$pgv_lang["can_edit"]					= "Adgangsniveau";
$pgv_lang["change_id"]				= "Ret person ID til:";
$pgv_lang["choose_priv"]			= "Vælg beskyttelsesniveau for private data:";
$pgv_lang["cleanup_places"]			= "Ryd op i stednavne";
$pgv_lang["cleanup_users"]				= "Ryd op i brugere";
$pgv_lang["click_here_to_continue"]		= "Klik her for at fortsætte.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Klik her for at gå til anetræet.";
$pgv_lang["comment"]				= "Administratorens kommentarer om brugeren";
$pgv_lang["comment_exp"]			= "Påmind administratoren på denne dato";
$pgv_lang["config_help"]						= "Konfigurationshjælp";
$pgv_lang["config_still_writable"]				= "Din <i>config.php</i> fil er stadig skrivbar. Af sikkerhedsmæssige årsager, bør du ændre rettighederne for denne fil, til kun at tillade læsning, når du er færdig med at konfigurere hjemmesiden.";
$pgv_lang["configuration"]			= "Hjemmesideindstillinger";
$pgv_lang["configure"]							= "Konfigurér PhpGedView";
$pgv_lang["configure_head"]						= "PhpGedView indstillinger";
$pgv_lang["confirm_gedcom_delete"]				= "Er du sikker på at du ønsker at slette denne GEDCOM-fil";
$pgv_lang["confirm_user_delete"]	= "Er du sikker på at du vil slette brugeren";
$pgv_lang["create_user"]			= "Opret ny bruger";
$pgv_lang["current_users"]						= "Brugerliste";
$pgv_lang["daily"]								= "Daglig";
$pgv_lang["dataset_exists"]		= "Der er allerede importeret en GEDCOM-fil med dette navn til databasen.";
$pgv_lang["unsync_warning"] 					= "Denne HEDCOM fil er <em>ikke</em> synkroniseret med databasen. Den indeholder muligvis ikke den nyeste version af dine data. For at gen-importere fra databasen i stedet for filen, bør du downloade og uploade igen.";
$pgv_lang["date_registered"]					= "Oprettelsesdato";
$pgv_lang["day_before_month"]		= "Dag før måned (DD MM ÅÅÅÅ)";
$pgv_lang["DEFAULT_GEDCOM"]						= "Standard slægtsdatabase";
$pgv_lang["default_user"]						= "Opret standard administrationsbruger.";
$pgv_lang["del_gedrights"]						= "Slægtsdatabase er ikke længere aktiv, fjern bruger-tilknytning.";
$pgv_lang["del_proceed"]						= "Fortsæt";
$pgv_lang["del_unvera"]							= "Bruger ikke godkendt af administrator.";
$pgv_lang["del_unveru"]							= "Bruger verificerede ikke sin konto inden 7 dage.";
$pgv_lang["do_not_change"]			= "Udfør ingen ændringer";
$pgv_lang["download_gedcom"]		= "Download GEDCOM-fil";
$pgv_lang["download_here"]						= "Klik her for at download filen.";
$pgv_lang["download_note"]			= "NB! Store GEDCOM-filer kan tage lang tid at downloade. Hvis PHP giver besked om, at tiden er udløbet førend downloading er færdig, så kan det være, at du ikke har modtaget hele filen. For at checke om den downloadede GEDCOM-fil er korrekt, kan du se om filen indeholder linien <b>0&nbsp;TRLR</b> til slut. Du kan kontrollere dette ved at se i filen med en tekst-editor (såsom Microsoft Wordpad). HUSK ikke at gemme filen efter at have kigget i den!!! Som en tommelfingerregel kan det tage lige så lang tid at downloade GEDCOM-filen, som det tog at importere den afhængig af hastigheden på din internetforbindelse.";
$pgv_lang["editaccount"]			= "Giv denne bruger rettighed til at ændre sin egen brugerkonto";
$pgv_lang["empty_dataset"]		= "Vil du tømme den nuværende slægtsdatabase og lægge data ind forfra?";
$pgv_lang["empty_lines_detected"]	= "Opdaget tomme linier i din GEDCOM-fil. Under oprydningen vil disse tomme linier blive fjernet.";
$pgv_lang["enable_disable_lang"]				= "Vælg understøttede sprog";
$pgv_lang["error_ban_server"]       = "Ugyldig IP-adresse.";
$pgv_lang["error_delete_person"]    = "Du skal vælge den person, hvis eksterne link du ønsker at slette.";
$pgv_lang["error_header_write"]	= "GEDCOM-filen [#GEDCOM#] er ikke skrivbar. Kontroller eventuel skrivebeskyttelse og adgangsrettigheder.";
$pgv_lang["error_siteauth_failed"]	= "Kunne ikke logge ind på den eksterne hjemmeside";
$pgv_lang["error_url_blank"]	     	= "Lad venligst ikke URL (internetadresse) eller titlen på den eksterne hjemmeside være tom";
$pgv_lang["error_view_info"]        = "Du skal vælge den person, hvis information du ønsker at se.";
$pgv_lang["example_date"]			= "Eksempel på ugyldig dato fra din GEDCOM-fil:";
$pgv_lang["example_place"]			= "Eksempel på ugyldig sted fra din GEDCOM-fil:";
$pgv_lang["fbsql"]								= "FrontBase";
$pgv_lang["found_record"]		= "Poster fundet";
$pgv_lang["ged_download"]						= "Hent (download)";
$pgv_lang["ged_import"]			= "Importér";
$pgv_lang["ged_check"] 							= "Kontrollér for fejl";
$pgv_lang["gedcom_adm_head"]					= "GEDCOM administration";
$pgv_lang["gedcom_config_write_error"] = "F E J L ! Kan ikke skrive til slægtsdatabasens (GEDCOM) konfigurationsfil. Kontrollér venligst om der er de rigtige skriverettigheder til filen.";
$pgv_lang["gedcom_downloadable"]	= "<br />Besøgende på din hjemmeside kan downloade denne GEDCOM-fil!<br />Læs mere om det i readme.txt filen <a href=\"\".(file_exists('readme-dansk.txt')?\"readme-dansk.txt\":\"readme.txt\").\"\">readme\".(file_exists('readme-dansk.txt')?\"-dansk\":\"\").\".txt</a> i afsnittet 12. SIKKERHED / PRIVATLIV<br />for at finde en løsning på dette.";
$pgv_lang["gedcom_file"]			= "GEDCOM-fil:";
$pgv_lang["gedcom_not_imported"]				= "Denne GEDCOM-fil er endnu ikke importeret.";
$pgv_lang["ibase"]								= "InterBase";
$pgv_lang["ifx"]								= "Informix";
$pgv_lang["img_admin_settings"]		= "Ret indstillinger for billedbehandling";
$pgv_lang["autoContinue"]						= "Automatisk tryk <<Fortsæt>> knappen";
$pgv_lang["import_complete"]	= "Importeringen er færdig";
$pgv_lang["import_options"]		= "Indstillinger for importering";
$pgv_lang["import_progress"]	= "Importering igang...";
$pgv_lang["import_statistics"]	= "Statistik for importering";
$pgv_lang["import_time_exceeded"]	= "Grænsen for eksekvering af importeringen blev nået. Klik på knappen: Fortsæt herunder for at genoptage importen af GEDCOM-filen.";
$pgv_lang["inc_languages"]		= "Sprog";
$pgv_lang["INDEX_DIRECTORY"]					= "Mappe til indekseringsfil (GEDCOM med flere)";
$pgv_lang["invalid_dates"]			= "Opdaget ugyldig dato-format. Ved oprydning bliver disse ændret til formatet DD MMM ÅÅÅÅ (f.eks. 1 JAN 2004).";
$pgv_lang["BOM_detected"] 						= "Specialtegn (BOM - byte order mark), som angiver hvordan specialkarakterer skal opfattes af programmer generelt, er fundet i starten af filen. Ved den automatiske oprydning i filen fjernes disse tegn.";
$pgv_lang["invalid_header"]			= "Opdaget at der er linier før startlinien (0 HEAD) i GEDCOM-filen. Under oprydning vil disse linier blive fjernet.";
$pgv_lang["label_added_servers"]  	= "Tilføjede eksterne hjemmesider";
$pgv_lang["label_banned_servers"]   = "Udeluk hjemmesider ud fra IP-adresse";
$pgv_lang["label_families"]         = "Familier";
$pgv_lang["label_gedcom_id2"]       = "GEDCOM-ID:";
$pgv_lang["label_individuals"]      = "Personer";
$pgv_lang["label_manual_search_engines"]		= "Markér manuelt IP-adresse som søgemaskiner";
$pgv_lang["label_new_server"]       = "Tilføj ny ekstern hjemmeside";
$pgv_lang["label_password_id"]	   	= "Adgangskode";
$pgv_lang["label_server_info"]      = "Alle personer der er linket eksternt til via denne hjemmeside:";
$pgv_lang["label_server_url"]       = "Hjemmesidens URL/IP-adresse";
$pgv_lang["label_username_id"]	   	= "Brugernavn";
$pgv_lang["label_view_local"]       = "Vis lokal information om person";
$pgv_lang["label_view_remote"]      = "Vis ekstern information om person";
$pgv_lang["LANG_SELECTION"] 					= "Understøttede sprog";
$pgv_lang["LANGUAGE_DEFAULT"]					= "Du har ikke opsat de sprog dit sted skal understøtte.<br />PhpGedView vil bruge sine standardindstillinger.";
$pgv_lang["last_login"]							= "Sidst logget ind";
$pgv_lang["lasttab"]							= "Sidst besøgte personfaneblad";
$pgv_lang["leave_blank"]						= "Lad feltet til kodeordet være tomt, hvis du ønsker at beholde det nuværende password.";
$pgv_lang["link_manage_servers"]    = "Håndtér links til hjemmesider";
$pgv_lang["logfile_content"]		= "Indhold i log-filen";
$pgv_lang["macfile_detected"]		= "Opdaget Macintosh-fil. Under oprydning bliver filen konverteret til DOS-format.";
$pgv_lang["mailto"]								= "E-post genvej";
$pgv_lang["merge_records"]		= "Flette poster (dobbeltregistrerede)";
$pgv_lang["message_to_all"]						= "Send besked til alle brugere";
$pgv_lang["messaging"]							= "PhpGedView interne beskedsystem";
$pgv_lang["messaging2"]							= "Interne beskeder med e-post";
$pgv_lang["messaging3"]							= "PhpGedView sender emails uden at gemme";
$pgv_lang["month_before_day"]		= "Måned før dag (MM DD YYYY)";
$pgv_lang["monthly"]							= "Månedlig";
$pgv_lang["msql"]								= "Mini SQL";
$pgv_lang["mssql"]								= "Microsoft SQL server";
$pgv_lang["mysql"]								= "MySQL";
$pgv_lang["never"]								= "Aldrig";
$pgv_lang["no_logs"]							= "Deaktivér logning";
$pgv_lang["no_messaging"]						= "Ingen kontaktmetode";
$pgv_lang["oci8"]								= "Oracle 7+";
$pgv_lang["page_views"]							= "&nbsp;&nbsp;sidevisninger for hver&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "Valideringen er udført...! Foretag de nødvendige valg og klik derefter på 'Ryd'";
$pgv_lang["pgsql"]								= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] 			= "Fejl!!! Kan ikke skrive til PhpGedView konfigurationsfilen. Kontrollér venligst fil og mappe skriverettigheder og prøv så igen.";
$pgv_lang["PGV_MEMORY_LIMIT"]					= "Hukommelsesbegrænsning";
$pgv_lang["PGV_SESSION_SAVE_PATH"]				= "Sti til at gemme session";
$pgv_lang["PGV_SESSION_TIME"]					= "Session timeout";
$pgv_lang["PGV_SIMPLE_MAIL"] 					= "Brug simple email-headere i eksterne emails";
$pgv_lang["PGV_STORE_MESSAGES"]					= "Tillad at gemme beskeder online";
$pgv_lang["phpinfo"]				= "PHPInfo";
$pgv_lang["place_cleanup_detected"]	= "Opdaget ugyldige stedkoder. Disse bør ændres! Følgende steder er ugyldige: ";
$pgv_lang["please_be_patient"]	= "VENT venligst...";
$pgv_lang["privileges"]							= "Rettigheder";
$pgv_lang["reading_file"]		= "Læser GEDCOM-filen";
$pgv_lang["readme_documentation"]	= "ReadMe-dokumentation (Engelsk)";
$pgv_lang["remove_ip"] 							= "Fjern IP-adresse";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 	= "Kræv at en administrator skal godkende nye bruger-registreringer";
$pgv_lang["review_readme"]						= "Du bør kigge i <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> filen før du fortsætter med at opsætte PhpGedView.<br /><br />";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;sekunder";
$pgv_lang["select_an_option"]		= "Vælg en af følgende:";
$pgv_lang["SERVER_URL"]							= "PhpGedView URL";
$pgv_lang["show_phpinfo"]						= "Vis PHP informationssiden";
$pgv_lang["siteadmin"]				= "Administrator af hjemmesiden";
$pgv_lang["sqlite"]								= "SQLite";
$pgv_lang["sybase"]								= "Sybase";
$pgv_lang["sync_gedcom"]						= "Synkronisér brugerindstillinger med GEDCOM data";
$pgv_lang["system_time"]						= "Nuværende tid på serveren:";
$pgv_lang["user_time"]							= "Nuværende tid ved brugeren:";
$pgv_lang["TBLPREFIX"]							= "Databasetabel præfiks";
$pgv_lang["themecustomization"]					= "Tilpasning af udseende";
$pgv_lang["time_limit"]			= "Tidsgrænse";
$pgv_lang["title_manage_servers"]   = "Håndtér ekterne hjemmesider";
$pgv_lang["title_view_conns"]       = "Vis forbindelser";
$pgv_lang["translator_tools"]					= "Oversættelsesværktøj";
$pgv_lang["update_myaccount"]		= "Opdatér Min Konto";
$pgv_lang["update_user"]			= "Opdatér Brugerkonto";
$pgv_lang["upload_gedcom"]			= "Upload GEDCOM-fil(er)";
$pgv_lang["USE_REGISTRATION_MODULE"]			= "Tillad brugere at ansøge om en konto";
$pgv_lang["user_auto_accept"]		= "Acceptér automatisk ændringer udført af denne bruger";
$pgv_lang["user_contact_method"]	= "Ønsket kontaktmetode";
$pgv_lang["user_create_error"]		= "Bruger kan ikke oprettes. Gå tilbage og prøv igen.";
$pgv_lang["user_created"]			= "Bruger er oprettet.";
$pgv_lang["user_default_tab"]		= "Fanebladet der vises som standard på personers informationssider";
$pgv_lang["user_path_length"]					= "Største tilladte forskel i slægtskab for private data";
$pgv_lang["user_relationship_priv"]				= "Begræns adgang udelukkende til beslægtede personer";
$pgv_lang["users_admin"]						= "Hjemmeside-administratorer";
$pgv_lang["users_gedadmin"]						= "Slægtsdatabase-administratorer";
$pgv_lang["users_total"]						= "Total antal brugere";
$pgv_lang["users_unver"]						= "Ikke verficeret af bruger";
$pgv_lang["users_unver_admin"]					= "Ikke godkendt af administrator";
$pgv_lang["usr_deleted"]						= "Slettet bruger: ";
$pgv_lang["usr_idle"]							= "Antal måneder siden sidste login før brugerkontoen regnes som inaktiv: ";
$pgv_lang["usr_idle_toolong"]					= "Brugers konto har været inaktiv for længe: ";
$pgv_lang["usr_no_cleanup"]						= "Oprydning er ikke påkrævet";
$pgv_lang["usr_unset_gedcomid"]					= "Slet GEDCOM ID for ";
$pgv_lang["usr_unset_rights"]					= "Slet GEDCOM rettigheder for ";
$pgv_lang["usr_unset_rootid"]					= "Slet startperson ID for ";
$pgv_lang["valid_gedcom"]			= "Gyldig GEDCOM-fil fundet. Det er ikke nødvendigt at foretage ændringer.";
$pgv_lang["validate_gedcom"]		= "Kontrollér kvaliteten af GEDCOM-filen";
$pgv_lang["verified"]			= "Bruger har<br />bekræftet ansøgningen";
$pgv_lang["verified_by_admin"]	= "Bruger er godkendt<br />[af administrator]";
$pgv_lang["verify_gedcom"]		= "Verificér GEDCOM";
$pgv_lang["verify_upload_instructions"]	= "Hvis du vælger at fortsætte, vil den eksisterende GEDCOM-fil blive erstattet med den fil du har valgt at uploade. Den nye fil vil derefter blive importeret til PhpGedView.<br />Vælger du at afbryde, vil den eksisterende GEDCOM-fil forblive uændret.";
$pgv_lang["view_changelog"]			= "Læs filen changelog.txt";
$pgv_lang["view_logs"]				= "Vis log-fil ";
$pgv_lang["view_readme"]			= "Læs readme.txt filen";
$pgv_lang["visibleonline"]			= "Synlig for andre brugere der er logget ind";
$pgv_lang["visitor"]				= "Gæst";
$pgv_lang["warn_users"]							= "Brugere med advarsler";
$pgv_lang["weekly"]								= "Ugentlig";
$pgv_lang["welcome_new"]						= "Velkommen til din nye PhpGedView hjemmeside.";
$pgv_lang["yearly"]								= "Årlig";
$pgv_lang["admin_OK_subject"]					= "Godkendelse af konto på #SERVER_NAME#";
$pgv_lang["admin_OK_message"]					= "Administratoren af hjemmesiden #SERVER_NAME# har godkendt din ansøgning om en konto.\r\n\r\nDu kan nu logge på ved at bruge følgende genvej: #SERVER_NAME#";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     = "Gedcom kontrol";
$pgv_lang["gedcheck_text"]= "Dette modul kontrollerer formatet af en GEDCOM fil i forhold til specifikationen af <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM standarden</a>. Den kontrollerer også almindeligt forekommende fejl i dine data. Bemærk at der er masser af versioner, udvidelser og varianter på standarden så du skal ikke være bekymre dig om andre fejl end dem der er markeret med \"Kritisk\". Forklaringen på de enkelte fejl kan findes i standarden, så kig venligst i den før du spørger om hjælp.";
$pgv_lang["level"]        = "Niveau";
$pgv_lang["critical"]     = "Kritisk";
$pgv_lang["error"]        = "Fejl";
$pgv_lang["warning"]      = "Advarsel";
$pgv_lang["info"]         = "Information";
$pgv_lang["open_link"]    = "Åben genveje i";
$pgv_lang["same_win"]     = "samme vindue";
$pgv_lang["new_win"]      = "nyt vindue";
$pgv_lang["context_lines"]= "Linjer GEDCOM kontekst";
$pgv_lang["all_rec"]      = "Alle poster";
$pgv_lang["err_rec"]      = "Poster med fejl";
$pgv_lang["missing"]      = "manglende";
$pgv_lang["multiple"]     = "flere";
$pgv_lang["invalid"]      = "ugyldig";
$pgv_lang["too_many"]     = "for mange";
$pgv_lang["too_few"]      = "for få";
$pgv_lang["no_link"]      = "henviser ikke tilbage";
$pgv_lang["data"]         = "data";
$pgv_lang["see"]          = "se";
$pgv_lang["noref"]        = "Intet henviser til denne post";
$pgv_lang["tag"]          = "mærke";
$pgv_lang["spacing"]      = "mellemrum";
$pgv_lang["tradition_paternal"]		= "fædrende";
$pgv_lang["tradition_icelandic"]	= "islandsk";
$pgv_lang["tradition_portuguese"]	= "portugisisk";
$pgv_lang["tradition_spanish"]		= "spansk";
$pgv_lang["tradition_none"]			= "ingen";
$pgv_lang["SURNAME_TRADITION"] = "Tradition for efternavnet";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Avancerede fakta om stednavne";
$pgv_lang["associated_files"]		= "Tilknyttede filer:";
$pgv_lang["remove_all_files"]		= "Fjern alle unødvendige filer";
$pgv_lang["deleted_files"]          = "Slettede filer:";
$pgv_lang["index_dir_cleanup_inst"]	= "For at slette en fil eller undermappe fra Index mappen, skal du trække den til skraldespanden eller vælge dens afkrydsningsboks. Klik på Slet knappen for at fjerne de valgte filer permanent.<br /><br />Filer der er markeret med <img src=\"./images/RESN_confidential.gif\" /> er påkrævet for korrekt afvikling og kan ikke fjernes.<br />Filer markeret med <img src=\"./images/RESN_locked.gif\" /> har vigtige indstillinger eller ventende data og bør kun slettes hvis du er sikker på at du ved hvad du gør.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Ryd op i Index mappen";
$pgv_lang["warn_file_delete"]		= "Denne fil indeholder vigtige oplysninger såsom sprogindstillinger eller ventende ændringsdata. Er du sikker på at du ønsker at slette denne fil?";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Avancerede fakta om navne";
$pgv_lang["error_remove_site"]					= "Serveren kunne ikke fjernes";
$pgv_lang["error_remove_site"]					= "Serveren kunne ikke fjernes.";
$pgv_lang["error_remove_site_linked"]			= "Serveren kunne ikke fjernes, da forbindelseslisten ikke er tom.";
$pgv_lang["error_remote_duplicate"]				= "Den fjerne database er allerede i listen som <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["module_admin"]			= "Modul administration";
$pgv_lang["mod_admin_installed"]	= "Installerede moduler";
$pgv_lang["mod_admin_tabs"]			= "Håndter faneblade";
$pgv_lang["mod_admin_menus"]		= "Håndter menuer";
$pgv_lang["mod_admin_tabs"]			= "Håndtér faneblade";
$pgv_lang["mod_admin_menus"]		= "Håndtér menuer";
$pgv_lang["mod_admin_intro"]		= "Nedenfor er en liste over alle de moduler installeret i dette tilfælde af PhpGedView. Moduler er installeret ved at placere dem i &lt;i&gt; moduler &lt;/ i&gt; mappen. Her kan du indstille adgangsniveau pr GEDCOM for hvert modul. Hvis et modul indeholder faner for den enkelte side eller menuer til menulinjen, kan du også indstille adgang niveau og rækkefølgen for hver af dem.";
$pgv_lang["mod_admin_intro"]		= "Nedenfor er en liste over alle de moduler der er installeret i denne instans af PhpGedView. Moduler installeres ved at placere dem i <i>modules</ i> mappen. Her kan du indstille adgangsniveau pr GEDCOM for hvert modul. Hvis et modul indeholder faner til individ-siden eller menuer til menulinjen, kan du også indstille adgangsniveau og rækkefølgen for hver af dem.";
$pgv_lang["mod_admin_active"]		= "Aktiv";
$pgv_lang["mod_admin_active"]		= "Aktive";
$pgv_lang["mod_admin_name"]			= "Modulnavn";
$pgv_lang["mod_admin_description"]	= "Beskrivelse";
$pgv_lang["mod_admin_version"]		= "Version / PGV";
$pgv_lang["mod_admin_hastab"]		= "Faneblad?";
$pgv_lang["mod_admin_hasmenu"]		= "Menu?";
$pgv_lang["mod_admin_access_level"]	= "Adgangsniveau";
$pgv_lang["mod_admin_order"]		= "Rækkefølge";
$pgv_lang["mod_admin_config"]		= "Modul-indstillinger";
$pgv_lang["mod_admin_settings"]		= "Modul konfigurations-indstillinger";
$pgv_lang["ret_admin"]				= "Tilbage til Administrations siden";
$pgv_lang["ret_module_admin"]		= "Tilbage til modul-administrationssiden";
$pgv_lang["ret_admin"]				= "Tilbage til administrationssiden";
$pgv_lang["enter_comment"]	= "Du kan indtaste en kommentar her.";
$pgv_lang["upload_a_gedcom"] 		= "Upload en GEDCOM fil";
$pgv_lang["start_entering"] 		= "Begynd indtastning af data";
$pgv_lang["add_gedcom_from_path"] 	= "Tilføj en GEDCOM fra en filplacering";
$pgv_lang["get_started_instructions"]	= "Vælg en af disse indstillinger for at begynde brugen af PhpGedView";
$pgv_lang["admin_users_exists"]		= "Følgende administrative brugere findes allerede:";
$pgv_lang["install_step_1"] = "Kontrollér miljøet";
$pgv_lang["install_step_2"] = "Database-forbindelse";
$pgv_lang["install_step_3"] = "Opret tabeller";
$pgv_lang["install_step_4"] = "Websteds konfiguration";
$pgv_lang["install_step_5"] = "Sprog";
$pgv_lang["install_step_6"] = "Gem konfiguration";
$pgv_lang["install_step_7"] = "Opret admin bruger";
$pgv_lang["install_wizard"] = "Installationsguide";
$pgv_lang["basic_site_config"] = "Grundlæggende indstillinger";
$pgv_lang["adv_site_config"] = "Avancerede indstillinger";
$pgv_lang["config_not_saved"] = "*Dine indstillinger vil ikke<br />blive gemt før trin 6";
$pgv_lang["download_config"] = "Download config.php";
$pgv_lang["site_unavailable"] = "Webstedet er p.t ikke tilgængeligt";
$pgv_lang["to_manage_users"] = "For at håndtere brugere, brug da <a href=\"useradmin.php\">Bruger administration</a> siden.";
$pgv_lang["db_tables_created"] = "Database tabeller oprettet korrekt";
$pgv_lang["config_saved"] = "Konfiguration gemt korrekt.";
$pgv_lang["config_saved"] = "Konfiguration gemt korrekt";
$pgv_lang["checking_errors"]		= "Undersøger for fejl...";
$pgv_lang["checking_php_version"]		= "Undersøger krævet PHP version:";
$pgv_lang["failed"]		= "Mislykket";
$pgv_lang["pgv_requires_version"]		= "PhpGedView kræver PHP version #PGV_REQUIRED_PHP_VERSION# eller nyere.";
$pgv_lang["using_php_version"]		= "Du bruger PHP version #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]		= "Undersøger minimum database understøttelse:";
$pgv_lang["no_db_extensions"]		= "Du har ikke nogen af de understøttede database-udvidelser.";
$pgv_lang["db_ext_support"]		= "Du har #DBEXT understøttelse";
$pgv_lang["checking_config.php"]		= "Undersøger config.php:";
$pgv_lang["config.php_missing"]		= "filen config.php blev ikke fundet.";
$pgv_lang["config.php_not_writable"]		= "config.php er ikke skrivbar.";
$pgv_lang["passed"]		= "Bestået";
$pgv_lang["config.php_writable"]		= "config.php er tilgængelig og skrivbar.";
$pgv_lang["checking_warnings"]		= "Undersøger for advarsler...";
$pgv_lang["checking_timelimit"]		= "Undersøge for evnen til at ændre timelimit:";
$pgv_lang["cannot_change_timelimit"]		= "Kunne ikke ændre tidsbegrænsningen.";
$pgv_lang["cannot_change_timelimit_instr"]		= "Du vil muligvis ikke være i stand til at køre alle funktioner på store databaser med mange individer.";
$pgv_lang["current_max_timelimit"]		= "Din maksimum tidsbegrænsning er";
$pgv_lang["check_memlimit"]		= "Undersøger evnen til at ændre hukommelsesbegræsning:";
$pgv_lang["cannot_change_memlimit"]		= "Kunne ikke ændre hukommelses begrænsningen.";
$pgv_lang["cannot_change_memlimit_instr"]		= "Du vil muligvis ikke kunne køre alle funktioner på store databaser med mange individer.";
$pgv_lang["current_max_memlimit"]		= "Din nuværende hukommelses begrænsning er";
$pgv_lang["check_upload"]		= "Undersøger evnen til at uploade filer:";
$pgv_lang["current_max_upload"]		= "Din maksimum upload filstørrelse er:";
$pgv_lang["check_gd"]		= "Søger efter GD billedrutiner:";
$pgv_lang["cannot_use_gd"]		= "Du har ikke GD billedrutinerne. Du vil ikke være i stand til automatisk at lave billed-miniaturer.";
$pgv_lang["check_sax"]		= "Søger efter SAX XML rutiner:";
$pgv_lang["cannot_use_sax"]		= "Du har ikke SAM XML rutinerne. Du vil ikke være i stand til at køre nogle rapporter eller diverse andre eksterne funktioner";
$pgv_lang["check_dom"]		= "Søger efter DOM XML rutiner:";
$pgv_lang["cannot_use_dom"]		= "Du har ikke DOM XML rutinerne. Du vil ikke være i stand til at eksportere XML.";
$pgv_lang["check_calendar"]		= "Søger efter Advanced Calendar rutiner:";
$pgv_lang["cannot_use_calendar"]		= "Du har ikke advanced calendar understøttelse. Du vil ikke være i stand til at køre nogle avancerede kalender funktioner.";
$pgv_lang["warnings_passed"]		= "Alle advarsels kontroller ok.";
$pgv_lang["warning_instr"]		= "Hvis nogle af advarsler ikke er ok, kan du muligvis stadig bruge PhpGedView på denne server, men nogen funktionalitet kan være deaktiveret eller du vil opleve langsom hastighed.";
$pgv_lang["gedcom_admins"]			= "GEDCOM administratorer";
$pgv_lang["site_admins"]			= "Websted administratorer";
$pgv_lang["nobody"]					= "Ingen";
$pgv_lang["current_links"]			= "Links";
$pgv_lang["add_more_links"]			= "Tilføj links";
$pgv_lang["enter_pid_or_name"]		= "Indtast individ-ID eller navn";
$pgv_lang["add_or_remove_links"]	= "Håndtér links";
$pgv_lang["keep"]					= "Behold";
$pgv_lang["fam_nav"]				= "Familie-navigator";
$pgv_lang["nav"]					= "Navigator";
$pgv_lang["remove"]					= "Fjern";
$pgv_lang["keep_link"]				= "Behold link i listen";
$pgv_lang["remove_link"]			= "Fjern link fra listen";
$pgv_lang["open_nav"]				= "Åben familie-navigatoren";
$pgv_lang["link_exists"]			= "Linket eksisterer allerede";
$pgv_lang["elapsedAgo"]		=	"#pgv_lang[global_string1]# siden";
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minutter";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minutter";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinute1"]	=	"1 minut";
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# timer";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# timer";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHour1"]	=	"1 time";
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# dage";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# dage";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDay1"]	=	"1 dag";
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# måneder";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# måneder";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonth1"]	=	"1 måned";
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# år";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# år";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYear1"]	=	"1 år";
$pgv_lang["tradition_polish"]		= "Polsk";
$pgv_lang["ged_export"]							= "Eksportér";
$pgv_lang["head"]					= "Leder";
$pgv_lang["click_choose_head_text"]	= "Klik for at vælge personen som leder af familien.";
$pgv_lang["click_choose_head"]		= "Klik på #GLOBALS[tempStringHead]# for at vælge personen som leder af familien.";
$pgv_lang["gedcheck_nothing"] = "Ingen fejl fundet på dette niveau.";
$pgv_lang["PGV_SMTP_AUTH_PASS"]					= "Kodeord";
$pgv_lang["PGV_SMTP_AUTH_USER"]					= "Brugernavn";
$pgv_lang["PGV_SMTP_AUTH"]						= "Brug navn og kodeord";
$pgv_lang["PGV_SMTP_PORT"]						= "SMTP port";
$pgv_lang["PGV_SMTP_HELO"]						= "Afsendende domænenavn";
$pgv_lang["PGV_SMTP_HOST"]						= "Udgående servernavn (SMTP)";
$pgv_lang["unlink"]					= "Aflink";
$pgv_lang["id_not_valid"]			= "Ikke et gyldigt individ-, famillie- eller kilde-ID";
$pgv_lang["enter_name"]				= "Indtast et navn";
$pgv_lang["PGV_SMTP_ACTIVE"]					= "Brug SMTP for at sende ekstene emails.";
$pgv_lang["PGV_SMTP_ACTIVE"]					= "Brug SMTP til at sende eksterne emails";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Afsendernavn";
$pgv_lang["PGV_SMTP_SSL"]						= "Sikker forbindelse";
$pgv_lang["no_CHANs_update"]		= "Ingen CHAN (Sidst ændret) poster blev opdateret";
$pgv_lang["no_update_CHANs"]		= "Opdatér ikke CHAN (Sidst ændret) poster";
$pgv_lang["batch_update"]="Udfør gruppe opdateringer/redigeringer på din GEDCOM";
$pgv_lang["config.php_missing_instr"]		= "Installationsguiden vil ikke være i stand til at skrive din indstillinger i config.php filen. Du kan lave en kopi af config.dist filen og omdøbe den til config.php. Alternativt vil du, når denne guide er færdig, have mulighed for at downloade dine indstillinger og derefter selv uploade den færdige config.php fil.";
$pgv_lang["config.php_not_writable_instr"]		= "Installationsguiden vil ikke være i stand til at skrive dine indstillinger i config.php filen. Du kan ændre skriverettigheder på filen. Du vil også efter at guiden er færdig have mulighed for at downloade dine indstillinger der efter selv uploade config.php filen.";
$pgv_lang["add_fam_other_links"]	= "Tilføj familie og søge links";
$pgv_lang["set_links"]				= "Indstil links";
$pgv_lang["editors"]				= "Redaktører";
$pgv_lang["search_add_links"]		= "Søg efter personer der skal tilføjes til Tilføj links listen";
$pgv_lang["add_indi_to_link_list"]	= "Klik på navn for at tilføje person til Tilføj links listen.";
$pgv_lang["id_empty"]				= "Når du tilføjer et link, må ID feltet ikke være tomt.";
$pgv_lang["link_deleted"]			= "Link til #GLOBALS[remLinkId]# slettet";
$pgv_lang["link_added"]				= "Link til #GLOBALS[addLinkId]# tilføjet";
$pgv_lang["gedcheck_sync"] = "Ændringer i databasen er ikke synkroniseret med filen #GLOBALS[ged]#. Filens indhold er muligvis for gammelt. Du kan synkronisere den med databasen nu, ved at lave en <b><a \"#GLOBALS[ged_link]#\">eksport</a></b>.";
?>

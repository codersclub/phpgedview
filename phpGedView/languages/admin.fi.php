<?php
/**
 * Finnish texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @author Matti Valve, Marko Kohtala
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["user"]			= "Tunnistettu käyttäjä";
$pgv_lang["thumbnail_deleted"]	= "Pienoiskuvatiedosto poistettu.";
$pgv_lang["thumbnail_not_deleted"]	= "Pienoiskuvatiedostoa ei voitu poistaa.";
$pgv_lang["step2"]			= "Vaihe 2/4:";
$pgv_lang["refresh"]			= "Näytön päivitys";
$pgv_lang["move_file_success"]	= "Media- ja pienoiskuvatiedostot on poistettu.";
$pgv_lang["media_folder_corrupt"]	= "Mediakansio on viallinen.";
$pgv_lang["media_file_not_deleted"]	= "Mediatiedostoa ei voitu poistaa.";
$pgv_lang["gedcom_deleted"]	= "GEDCOM [#GED#] poisto onnistui.";
$pgv_lang["gedadmin"]		= "GEDCOM-ylläpitäjä";
$pgv_lang["full_name"]		= "Koko nimi";
$pgv_lang["error_header"] 		= "GEDCOM-tiedostoa [#GEDCOM#] ei löydy annetusta paikasta.";
$pgv_lang["confirm_delete_file"]	= "Haluatko varmasti poistaa tämän tiedoston?";
$pgv_lang["confirm_folder_delete"] 	= "Haluatko varmasti poistaa tämän kansion?";
$pgv_lang["confirm_remove_links"]	= "Haluatko varmasti poistaa kaikki tähän kohteeseen viittaavat yhteydet?";
$pgv_lang["PRIV_PUBLIC"]                = "Näytä kaikille";
$pgv_lang["PRIV_USER"]                   = "Näytä vain sallituille käyttäjille";
$pgv_lang["PRIV_NONE"]                   = "Näytä vain ylläpitäjille";
$pgv_lang["PRIV_HIDE"]                     = "Piilota myös ylläpitäjiltä";
$pgv_lang["manage_gedcoms"]	= "Hallitse GEDCOM-tiedostoja ja muokkaa yksityisyyttä";
$pgv_lang["keep_media"]		= "Säilytä medialinkit";
$pgv_lang["files_in_backup"]		= "Tämän varmuuskopion sisältämät tiedostot";

$pgv_lang["created_remotelinks"]	= "<i>Etälinkki</i>-taulun luonti onnistui.";
$pgv_lang["created_remotelinks_fail"] = "<i>Etälinkki</i>-taulun luonti epäonnistui.";
$pgv_lang["created_indis"]		= "<i>Henkilöt</i>-taulun luonti onnistui.";
$pgv_lang["created_indis_fail"] 	= "<i>Henkilöt</i>-taulun luonti ei onnistunut.";
$pgv_lang["created_fams"]		= "<i>Perheet</i>-taulun luonti onnistui.";
$pgv_lang["created_fams_fail"]	= "<i>Perheet</i>-taulun luonti ei onnistunut.";
$pgv_lang["created_sources"]		= "<i>Lähteet</i>-taulun luonti onnistui.";
$pgv_lang["created_sources_fail"]	= "<i>Lähteet</i>-taulun luonti ei onnistunut.";
$pgv_lang["created_other"]		= "<i>Muut</i>-taulun luonti onnistui.";
$pgv_lang["created_other_fail"] 	= "<i>Muut</i>-taulun luonti ei onnistunut.";
$pgv_lang["created_places"] 		= "<i>Paikat</i>-taulun luonti onnistui.";
$pgv_lang["created_places_fail"]	= "<i>Paikat<i>-taulun luonti ei onnistunut.";

$pgv_lang["created_placelinks"] 	= "<i>Paikkalinkit</i>-taulu luotiin.";
$pgv_lang["created_placelinks_fail"]	= "<i>Paikkalinkit</i>-taulua ei voitu luoda.";
$pgv_lang["created_media_fail"]	= "<i>Media</i>-taulua ei voitu luoda.";
$pgv_lang["created_media_mapping_fail"] = "<i>Mediamuodostustaulua</i> ei voi luoda.";
$pgv_lang["no_thumb_dir"]		= " pienoiskuvakansiota ei ole eikä sitä voi luoda";
$pgv_lang["folder_created"]		= "Kansio luotu";
$pgv_lang["folder_no_create"]	= "Kansiota ei voitu luoda";
$pgv_lang["security_no_create"]	= "Turvallisuusvaroitus: tiedostoa <b><i>index.php</i></b> ei ole kansiossa ";
$pgv_lang["security_not_exist"]	= "Turvallisuusvaroitus: ei voi luoda tiedostoa <b><i>index.php</i></b> kansioon ";
//$pgv_lang["label_add_search_server"] = "Lisää IP";
//$pgv_lang["label_add_server"]       	= "Lisää";
//$pgv_lang["label_ban_server"]       	= "Lähetä";
$pgv_lang["label_delete"]           	= "Poista";
$pgv_lang["progress_bars_info"]	= "Alla olevat tilarivit osoittavat kuinka tuonti etenee. Mikäli aikarajoitus ylittyy, tuonti loppuu ja sinua pyydetään painamaan <b>Jatka</b>-painiketta. Mikäli <b>Jatka</b>-painiketta ei näy, palaa takaisin ja anna pienempi aikaraja.";
$pgv_lang["upload_replacement"]	="Lähetä korvaava";
$pgv_lang["about_user"]		= "Sinun täytyy ensin tehdä ylin pääkäyttäjä. Tällä käyttäjällä on oikeus päivittää konfiguraatio tiedostot, nähdä yksityistä tietoa ja tehdä muita käyttäjiä.";
$pgv_lang["access"]			= "Pääsy";
$pgv_lang["add_gedcom"]		= "Lisää uusi GEDCOM-tiedosto";
$pgv_lang["add_user"]		= "Lisää uusi käyttäjä";
$pgv_lang["add_new_language"]	= "Lisää tiedostot ja asetukset uudelle kielelle";
$pgv_lang["add_new_gedcom"]	= "Luo uusi GEDCOM-tiedosto";
$pgv_lang["admin_gedcom"]		= "Ylläpito";
$pgv_lang["admin_gedcoms"]		= "Klikkaa tässä hallitaksesi GEDCOMeja";
$pgv_lang["admin_geds"]		= "Data- ja GEDCOM-ylläpito";
$pgv_lang["admin_info"]		= "Tiedoksi";
$pgv_lang["admin_user_warnings"]	= "Yhdellä tai useammalla tilillä on varoitus";
$pgv_lang["admin_verification_waiting"] = "Käyttäjätilit odottavat ylläpidon varmennusta";
$pgv_lang["admin_site"]		= "Sivuston ylläpito";
$pgv_lang["administration"]		= "Järjestelmänhallinta";
$pgv_lang["ALLOW_REMEMBER_ME"] = "Näytä <b>Muista minut</b> valinta kirjautumissivulla";
$pgv_lang["ALLOW_USER_THEMES"] = "Salli käyttäjien valita itselleen oma teema";
$pgv_lang["ALLOW_CHANGE_GEDCOM"] = "Salli GEDCOM:n vaihto";
$pgv_lang["ansi_encoding_detected"] = "Havaittiin ANSI tiedostokoodaus. PhpGedView toimii parhaiten, kun tiedostot on koodattu UTF-8-muotoon.";
$pgv_lang["ansi_to_utf8"]		= "Muunnetaanko tämä ANSI-koodattu GEDCOM UTF-8 muotoon?";
$pgv_lang["apply_privacy"]		= "Toteuta yksityisyysasetukset?";
$pgv_lang["back_useradmin"]		= "Takaisin käyttäjien hallintaan";
$pgv_lang["bytes_read"]		= "Tavua luettu:";
//$pgv_lang["calc_marr_names"]	= "Lasketaan avionimet";
$pgv_lang["can_edit"]			= "Käyttöoikeus";
$pgv_lang["can_admin"]		= "Käyttäjä voi ylläpitää";
$pgv_lang["change_id"]		= "Muuta henkilö-ID:";
$pgv_lang["choose_priv"]		= "Valitse yksityisyystaso:";
$pgv_lang["cleanup_places"] 		= "Siivoa paikkatiedot";
$pgv_lang["cleanup_users"]		= "Siivoa käyttäjät";
$pgv_lang["click_here_to_continue"]	= "Klikkaa tässä jatkaaksesi.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Klikkaa tästä mennäksesi sukupuuhun.";
$pgv_lang["comment"]			= "Ylläpitäjän kommentit käyttäjästä";
$pgv_lang["comment_exp"]		= "Ylläpitäjän varoitus päivämäärällä ";
$pgv_lang["config_still_writable"]	= "Sinun <i>config.php</i> tiedostoon voi kirjoittaa. Turvallisuussyistä sinun kannattaisi asettaa tämä tiedosto vain luku tilaan, kun olet saanut konfiguroitua sivustosi.";
$pgv_lang["config_help"]		= "Apua asetuksiin";
$pgv_lang["configuration"]		= "Konfigurointi";
$pgv_lang["configure"]			= "Konfiguroi PhpGedView";
$pgv_lang["configure_head"]		= "PhpGedView konfiguraatio";
$pgv_lang["confirm_gedcom_delete"] = "Oletko varma että haluat poistaa tämän GEDCOM:n";
$pgv_lang["confirm_user_delete"]	= "Haluatko varmasti poistaa käyttäjän?";
$pgv_lang["create_user"]		= "Luo uusi käyttäjä";
$pgv_lang["daily"]			= "Päivittäin";
$pgv_lang["current_users"]		= "Nykyinen käyttäjälista";
$pgv_lang["dataset_exists"] 		= "Tämän niminen GEDCOM-tiedosto on jo tuotu tietokantaan ";
$pgv_lang["unsync_warning"] 		= "Tätä GEDCOM-tiedostoa <em>ei</em> ole synkronoitu tietokannan kanssa. Siitä saattaa puuttua viimeisin tietosi. Jotta voisit tuoda tiedon mieluummin tietokannasta kuin tiedostosta, sinun tulisi ensin ladata se omalle koneellesi ja sitten ladata uudelleen palvelimelle.";
$pgv_lang["date_registered"]		= "Rekisteröintipäivä";
$pgv_lang["day_before_month"]	= "Päivä ennen kuukautta (DD MM YYYY)";
$pgv_lang["DEFAULT_GEDCOM"]	= "Vakio GEDCOM";
$pgv_lang["del_gedrights"]		= "GEDCOM ei ole enää aktiivinen, poista käyttäjän asetuksista.";
$pgv_lang["del_unvera"]		= "Ylläpito ei ole vahvistanut käyttäjää.";
$pgv_lang["del_unveru"]		= "Käyttäjä ei ole vahvistanut 7 päivässä.";
$pgv_lang["del_proceed"]		= "Jatka";
$pgv_lang["default_user"]		= "Tee oletus pääkäyttäjä";
$pgv_lang["do_not_change"]		= "Älä muuta";
$pgv_lang["download_gedcom"]	= "Lataa koneesta GEDCOM-tiedosto";
$pgv_lang["download_here"]		= "Klikkaa tähän ladataksesi tiedoston.";
$pgv_lang["download_note"]		= "HUOMAA: Suurten GEDCOM-tiedostojen käsittely saattaa viedä pitkän ajan ennen niiden latausta. Jos PHP ilmoittaa ajan loppuneen ennen kuin lataus on viety loppuun, saattaa olla, että lataus ei ole täydellinen.<br /><br />Voit tarkastaa ladatun GEDCOM-tiedoston etsimällä rivi <b>0&nbsp;TRLR</b> tiedoston lopusta varmistaaksesi latauksen onnistumisen.<br /><br />Yleensä latausaika saattaa olla yhtä pitkä kuin tuontiaika GEDCOM-tiedostollesi.";
$pgv_lang["editaccount"]		= "Salli tämän käyttäjän muokata käyttäjätiliään.";
$pgv_lang["empty_dataset"]		= "Haluatko poistaa vanhat tiedot ja korvata ne näillä uusilla?";
$pgv_lang["enable_disable_lang"]	= "Valitse tuetut kielet";
$pgv_lang["empty_lines_detected"]	= "GEDCOM-tiedostostasi löytyi tyhjiä rivejä. Nämä poistetaan siivouksen yhteydessä.";
$pgv_lang["error_ban_server"]       	= "Hylätäksesi palvelimen se on valittava.";
$pgv_lang["error_delete_person"]    	= "Sinun on valittava se henkilö, jonka yhteyden toiseen verkkopalveluun haluat poistaa.";
$pgv_lang["error_header_write"] 	= "GEDCOM-tiedosto <b>#GEDCOM#</b> ei ole kirjoituskelpoinen. Tarkista atribuutit ja oikeudet.";
$pgv_lang["error_siteauth_failed"]	= "Etäsivustolle kytkeytyminen epäonnistui";
$pgv_lang["error_url_blank"]		= "Lisää myös joko etäsivuston nimi tai URL";
$pgv_lang["error_view_info"]        	= "Katsoaksesi henkilön tietoja, henkilö on valittava.";
$pgv_lang["fbsql"]			= "FrontBase";
$pgv_lang["ged_download"]		= "Lataa";
$pgv_lang["example_date"]		= "Esimerkki virheellisestä päivämäärämuodosta GEDCOM:issasi:";
$pgv_lang["example_place"]		= "Esimerkki epäkelvosta paikasta GEDCOM-tiedostossasi:";
$pgv_lang["found_record"]		= "Löytyi tietue";
$pgv_lang["ged_import"] 		= "Tuo";
$pgv_lang["ged_check"]                      	= "Tarkasta";
$pgv_lang["gedcom_adm_head"]	= "GEDCOM hallinta";
$pgv_lang["gedcom_config_write_error"] = "V I R H E !!!<br />Ei pysty kirjoittamaan tiedostoon: <i>#GLOBALS[whichFile]#</i>. Tarkista, että siihen on sallittu kirjoitusoikeus.";
$pgv_lang["gedcom_downloadable"] 	= "Tämä GEDCOM-tiedosto on ladattavissa internetistä.<br />Katso TURVALLISUUS-osion <a href=\"readme.txt\">readme.txt</a> -tiedostosta korjataksesi tämän ongelman.";
$pgv_lang["gedcom_file"]		= "GEDCOM-tiedosto:";
$pgv_lang["gedcom_not_imported"]	= "Tätä GEDCOM:a ei ole vielä tuotu.";
$pgv_lang["ibase"]			= "InterBase";
$pgv_lang["ifx"]			= "Informix";
$pgv_lang["img_admin_settings"] 	= "Muokkaa kuvankäsittelyn asetuksia";
$pgv_lang["autoContinue"]		= "Paina automaattisesti «Continue»-painiketta.";
$pgv_lang["import_complete"]		= "Tuonti onnistui";
//$pgv_lang["import_marr_names"]	= "Tuo avionimet";
$pgv_lang["import_options"]		= "Tuo vaihtoehdot";
$pgv_lang["import_progress"]		= "Tuonti käynnissä...";
$pgv_lang["import_statistics"]		= "Tuo tilastotiedot";
$pgv_lang["import_time_exceeded"]	= "Suoritusaikaraja on saavutettu. Klikkaa Jatka-painiketta alla jatkaaksesi GEDCOM-tiedoston tuontia.";
$pgv_lang["inc_languages"]		= " Kielet";
$pgv_lang["INDEX_DIRECTORY"]	= "Indeksi-kansio";
$pgv_lang["invalid_dates"]		= "Väärä päivämäärämuoto havaittu, siivouksessa ne muutetaan muotoon DD MMM YYYY (esim. 1 JAN 2004 päivälle 1. tammikuuta 2004).";
$pgv_lang["BOM_detected"] 		= "Byte Order Mark (BOM) tunnistettu tiedoston alussa. Siivouksessa tämä erikoiskoodi tullaan poistamaan.";
$pgv_lang["invalid_header"] 		= "Havaittiin rivejä ennen GEDCOM otsikkoa <b>0&nbsp;HEAD</b>. Nämä rivit poistetaan siivouksessa.";
$pgv_lang["label_added_servers"]	= "Lisätty etäpalvelimet";
$pgv_lang["label_banned_servers"]   	= "Hylätyt palvelimet";
$pgv_lang["label_families"]         	= "Perheet";
$pgv_lang["label_gedcom_id2"]       	= "GEDCOM ID-tunnus:";
$pgv_lang["label_individuals"]      	= " Henkilöt";
$pgv_lang["label_manual_search_engines"]  = "Merkitse manuaalisesti hakukone IP-osoitteen mukaan";
$pgv_lang["label_new_server"]       	= "Lisää uusi palvelin";
$pgv_lang["label_password_id"]	= "Salasana";
//$pgv_lang["label_remove_ip"]	= "Kiellä IP-osoite (esim:198.128.*.*)";
//$pgv_lang["label_remove_search"]	= "Merkitse IP-osoitteet hakuroboteiksi:";
$pgv_lang["label_server_info"]      	= "Kaikki henkilöt, jotka on yhdistetty toisen verkkopalvelun kautta:";
$pgv_lang["label_server_url"]       	= " URL/IP";
$pgv_lang["label_username_id"]	= "Käyttäjätunnus";
$pgv_lang["label_view_local"]       	= "Näytä henkilön paikalliset tiedot";
$pgv_lang["label_view_remote"]      	= "Näytä henkilön tiedot etäpalvelimella";
$pgv_lang["last_login"]		= "Viimeksi kirjautunut";
$pgv_lang["LANGUAGE_DEFAULT"]	 = "Et ole määritellyt kieliä joita sivustosi tukee.<br />PhpGedView käyttää oletus asetusta.";
$pgv_lang["LANG_SELECTION"] 	= "Tuetut kielet";
$pgv_lang["lasttab"]			= "Henkilön viimeksi katsottu alasivu";
$pgv_lang["leave_blank"]		= "Jätä salasana tyhjäksi jos et halua muuttaa sitä.";
$pgv_lang["link_manage_servers"]    	= "Palvelimien ylläpito";
$pgv_lang["logfile_content"]		= "Lokitiedoston sisältö";
$pgv_lang["mailto"]			= "Mailto-linkki";
$pgv_lang["macfile_detected"]	= "Havaittiin MacIntosh-tiedosto. Siivouksen yhteydessä se muunnetaan DOS-tiedostoksi.";
$pgv_lang["merge_records"]          	= "Yhdistä tietueita";
$pgv_lang["message_to_all"]		= "Lähetä viesti kaikille käyttäjille";
$pgv_lang["messaging"]		= "PhpGedView:n sisäinen viestintä";
$pgv_lang["messaging3"]		= "PhpGedView lähettää sähköposteja ilman säilytystä";
$pgv_lang["messaging2"]		= "Sisäiset viestit ja sähköposti";
$pgv_lang["month_before_day"]	= "Kuukausi ennen päivää (MM DD YYYY)";
$pgv_lang["never"]			= "Ei koskaan";
$pgv_lang["no_logs"]			= "Estä lokien keräys";
$pgv_lang["no_messaging"]		= "Ei mitään yhteystapaa";
$pgv_lang["mysql"]			= "MySQL";
$pgv_lang["mssql"]			= "Microsoft SQL palvelin";
$pgv_lang["msql"]			= "Mini SQL";
$pgv_lang["monthly"]			= "Kuukausittain";
$pgv_lang["oci8"]			= "Oracle 7+";
$pgv_lang["page_views"]		= "&nbsp;&nbsp;sivun näyttö &nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "Suoritetaan GEDCOM validointi...";
$pgv_lang["pgsql"]			= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] 	= "Virhe!!! PhpGedView Ei pysty kirjoittamaan asetustiedostoon. Tarkista tiedoston sekä kansion oikeudet ja kokeile uudestaan. ";
$pgv_lang["PGV_MEMORY_LIMIT"]	= "Muistiraja";
$pgv_lang["pgv_registry"]		= "Näytä muita PhpGedView verkkopaikkoja";
$pgv_lang["PGV_SESSION_SAVE_PATH"]	= "Istunnon tallennuspolku";
$pgv_lang["PGV_SESSION_TIME"]	= "Istunnon ajanloppuminen";
$pgv_lang["PGV_STORE_MESSAGES"] = "Salli viestien tallentaminen suoraan";
$pgv_lang["PGV_SIMPLE_MAIL"] 	= "Käytä yksinkertaisia viestin tunnisteita ulkoisissa viesteissä";
$pgv_lang["phpinfo"]			= "PHP-info";
$pgv_lang["place_cleanup_detected"] = "Havaittiin virheellistä paikkatiedon koodausta. Tämä on korjattava.";
$pgv_lang["please_be_patient"]	= "PYYDÄN KÄRSIVÄLLISYYTTÄ";
$pgv_lang["privileges"]		= "Etuoikeudet";
$pgv_lang["reading_file"]		= "Lukee GEDCOM-tiedostoa";
$pgv_lang["readme_documentation"]	= "README-dokumentti";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 	= "Edellyttää pääkäyttäjän hyväksyntää uuden käyttäjän rekisteröinnille";
$pgv_lang["review_readme"]		= "Sinun pitäisi tarkistaa <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> tiedosto ennen kuin jatkat PhpGedView:n konfigurointia.<br /><br />";
$pgv_lang["remove_ip"] 		= "Poista IP";
$pgv_lang["seconds"]			= "&nbsp;&nbsp;sekuntia";
$pgv_lang["select_an_option"]	= "Valitse alla olevista vaihtoehdoista:";
$pgv_lang["SERVER_URL"]		= "PhpGedView URL";
$pgv_lang["show_phpinfo"]		= "Näytä PHP informaatio sivu";
$pgv_lang["siteadmin"]		= "Palvelun ylläpitäjä";
//$pgv_lang["skip_cleanup"]		= "Ohita siivous";
$pgv_lang["sqlite"]			= "SQLite";
$pgv_lang["sybase"]			= "Sybase";
$pgv_lang["sync_gedcom"]		= "Synkronoidaan käyttäjä asetukset GEDCOM datan kanssa";
$pgv_lang["user_time"]		= "Nykyinen käyttäjän aika:";
$pgv_lang["TBLPREFIX"]		= "Tietokantataulun etuliite";
$pgv_lang["themecustomization"]	= "Teeman muokkaus";
$pgv_lang["system_time"]		= "Nykyinen palvelimen aika:";
$pgv_lang["time_limit"]		= "Aikaraja";
$pgv_lang["title_manage_servers"]   	= "Palvelimien ylläpito";
$pgv_lang["title_view_conns"]       	= "Näytä yhteydet";
$pgv_lang["translator_tools"]		= "Kielenkääntötyökalut";
$pgv_lang["update_myaccount"]	= "Päivitä käyttäjätilini";
$pgv_lang["update_user"]		= "Päivitä käyttäjä";
$pgv_lang["upload_gedcom"]		= "Lähetä GEDCOM-tiedosto palvelimelle";
$pgv_lang["USE_REGISTRATION_MODULE"] = "Salli vieraiden tehdä käyttäjätilihakemuksen";
$pgv_lang["user_auto_accept"]	= "Hyväksy automaattisesti tämän käyttäjän tekemät muutokset";
$pgv_lang["user_contact_method"] 	= "Mieluisin yhteystapa";
$pgv_lang["user_create_error"]	= "Käyttäjää ei voida luoda.  Ole hyvä ja yritä uudelleen.";
$pgv_lang["user_created"]		= "Uusi käyttäjä luotu.";
$pgv_lang["user_default_tab"]		= "Oletusvälilehti, joka näytetään henkilösivulla";
$pgv_lang["user_path_length"]	= "Sukulaisuuden yksityisyysrajoitus, maksimi etäisyys";
$pgv_lang["user_relationship_priv"]	= "Rajoitettu pääsy liittyvään ihmiseen";
$pgv_lang["users_admin"]		= "Paikan Ylläpitäjiä";
$pgv_lang["users_total"]		= "Käyttäjiä kaiken kaikkiaan";
$pgv_lang["users_unver_admin"]	= "Ylläpidon vahvistamatta";
$pgv_lang["usr_deleted"]		= "Poistetut käyttäjät:";
$pgv_lang["usr_idle"]			= "Kuukausien määrä edellisestä kirjautumisesta kun tunnus on ollut joutilaana:";
$pgv_lang["usr_idle_toolong"]		= "Käyttäjän tili on ollut liian pitkään käyttämätön:";
$pgv_lang["usr_no_cleanup"]		= "Ei löytynyt mitään siivottavaa";
$pgv_lang["usr_unset_rootid"]		= "Käyttämätön juuritason ID käyttäjällä:";
$pgv_lang["usr_unset_rights"]		= "Käyttämättömät GEDCOM oikeudet käyttäjällä:";
$pgv_lang["usr_unset_gedcomid"]	= "Käyttämätön GEDCOM ID käyttäjällä:";
$pgv_lang["users_unver"]		= "Käyttäjän vahvistamatta";
$pgv_lang["users_gedadmin"]		= "GEDCOM ylläpitäjät";
$pgv_lang["valid_gedcom"]		= "Hyväksyttävä GEDCOM havaittu. Ei vaadi siivousta.";
$pgv_lang["validate_gedcom"]	= "Validoi GEDCOM";
$pgv_lang["verified"]			= "Käyttäjä on vahvistanut itsensä";
$pgv_lang["verified_by_admin"]	= "Ylläpitäjä on vahvistanut käyttäjän";
$pgv_lang["verify_gedcom"]		= "Verifioi GEDCOM-tiedosto";
$pgv_lang["verify_upload_instructions"] = "Jos päätät jatkaa, vanha GEDCOM-tiedosto korvataan lähettämälläsi tiedostolla ja tuontiprosessi alkaa uudestaan. Jos päätät perua, vanha GEDCOM jää entiselleen.";
$pgv_lang["view_changelog"]		= "Näytä textlog.txt-tiedosto";
$pgv_lang["view_logs"]		= "Näytä lokitiedot";
$pgv_lang["view_readme"]		= "Näytä readme.txt-tiedosto";
$pgv_lang["visibleonline"]		= "Näkyvissä muille käyttäjille online-tilassa.";
$pgv_lang["visitor"]			= "Vierailija";
$pgv_lang["warn_users"]		= "Käyttäjät, joilla varoitus";
$pgv_lang["weekly"]			= "Viikoittain";
$pgv_lang["welcome_new"]		= "Tervetuloa sinun uudelle PhpGedView internet sivustolle.";
$pgv_lang["admin_OK_message"]	= "PhpGedView sivuston #SERVER_NAME# ylläpitäjä on hyväksynyt anomuksesi tunnukselle. Voit kirjautua sivustolle käyttäen seuraavaa linkkiä:\r\n\r\n#SERVER_NAME#\r\n";
$pgv_lang["yearly"]			= "Vuosittain";
$pgv_lang["admin_OK_subject"]	= "Tunnus anomus #SERVER_NAME#";

$pgv_lang["batch_update"]		="Suorita eräpäivitykset/-muokkaukset GEDCOMille";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     		= "Gedcom-tarkastaja";
$pgv_lang["gedcheck_text"]		= "Tässä moduulissa tarkastetaan GEDCOM-tiedoston formaatti verrattuna <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM-määrittelyyn</a>. Siinä tarkastetaan myös tiedostossasi mahdollisesti esiintyviä yleisiä virheitä. Huomaa, että määrittelyllä on useita versioita ja laajennuksia, joten ota huomioon vain ne, jotka on merkitty \"Kriittinen\". Selitykset kaikkiin rivikohtaisiin virheisiin löytyvät määrittelystä, joten tarkista ensin sieltä ennen kuin pyydät apua.";
$pgv_lang["level"]        			= "Taso";
$pgv_lang["critical"]     			= "Kriittinen";
$pgv_lang["error"]        		= "Virhe";
$pgv_lang["warning"]      		= "Varoitus";
$pgv_lang["info"]         			= "Info";
$pgv_lang["open_link"]    		= "Avaa linkit osoitteessa:";
$pgv_lang["same_win"]     		= "Sama välilehti/ikkuna";
$pgv_lang["new_win"]      		= "Uusi välilehti/ikkuna";
$pgv_lang["context_lines"]		= "GEDCOM kontekstin rivejä ";
$pgv_lang["all_rec"]      		= "Kaikki tietueet";
$pgv_lang["err_rec"]      		= "Virheelliset tietueet";
$pgv_lang["missing"]      		= "puuttuu";
$pgv_lang["multiple"]     		= "useita samoja";
$pgv_lang["invalid"]      		= "epäkelpo";
$pgv_lang["too_many"]     		= "liian monta";
$pgv_lang["too_few"]      		= "liian vähän";
$pgv_lang["no_link"]      		= "ei viittaa takaisin";
$pgv_lang["data"]         		= "data";
$pgv_lang["see"]          		= "katso";
$pgv_lang["noref"]        		= "Ei yhtään lähdettä tässä tallenteessa";
$pgv_lang["tag"]          			= "merkitsin";
$pgv_lang["spacing"]      		= "välistys";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Erityiset nimitiedot";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Erityiset paikannimitiedot";
$pgv_lang["SURNAME_TRADITION"] = "Perinteinen sukunimi";
$pgv_lang["tradition_icelandic"]	= "Islantilainen";
$pgv_lang["tradition_paternal"]	= "Isän puolelta";
$pgv_lang["tradition_portuguese"]	= "Portugalilainen";
$pgv_lang["tradition_spanish"]		= "Espanjalainen";
$pgv_lang["tradition_none"]		= "Ei yhtään";
$pgv_lang["clear_cache_succes"]	= "Tiedostot välimuistista on poistettu.";
$pgv_lang["clear_cache"]		= "Poista tiedostot välimuistista.";
$pgv_lang["sanity_err0"]		= "Virheet:";
$pgv_lang["sanity_err1"]		= "Tarvitaan PHP versio #PGV_REQUIRED_PHP_VERSION# tai uudempi.";
$pgv_lang["sanity_err2"]		= "Tiedostoa tai kansiota <i>#GLOBALS[whichFile]#</i> ei ole olemassa. Tarkista, että tiedosto tai kansio on olemassa, sitä ei ole nimetty väärin ja että lukuoikeudet on asetettu oikein.";
$pgv_lang["sanity_err3"]		= "Tiedosto <i>#GLOBALS[whichFile]#</i> ei latautunut oikein. Yritä ladata se uudestaan.";
$pgv_lang["sanity_err4"]		= "Tiedosto <i>config.php</i> on viallinen.";
$pgv_lang["sanity_err5"]		= "Tiedostoa <i>config.php</i> ei voi muuttaa.";
$pgv_lang["sanity_err6"]		= "Kansioon <i>#GLOBALS[INDEX_DIRECTORY]#</i> ei voi tehdä muutoksia.";
$pgv_lang["sanity_warn0"]		= "Varoitukset:";
$pgv_lang["sanity_warn1"]		= "Kansiota <i>#GLOBALS[MEDIA_DIRECTORY]#</i> ei voi muuttaa. PhpGedView:ssä ei voi ladata mediatiedostoja tai pienoiskuvakkeita.";
$pgv_lang["sanity_warn2"]		= "Kansiota <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> ei voi muuttaa. PhpGedView:ssä ei voi ladata tai luoda pienoiskuvakkeita.";
$pgv_lang["sanity_warn3"]		= "GD kuvantamiskirjastoa ei ole. PhpGedView toimii, mutta jotkut toiminnot, kuten pienoiskuvakkeiden luonti ja ympyrädiagrammi eivät toimi ilman GD kirjastoa. Lisätietoa osoitteesta href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a>.";
$pgv_lang["sanity_warn4"]		= "XML jäsenninkirjastoa ei ole. PhpGedView toimii kylläkin, mutta jotkut toiminnot, kuten raporttien luonti ja verkkopalvelut eivät toimi ilman XML jäsenninkirjastoa. Lisätietoa osoitteesta <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a>.";
$pgv_lang["sanity_warn5"]		= "DOM XLM kirjastoa ei ole. PhpGedView toimii kylläkin, mutta jotkut toiminnot, kuten Gramps vientiominaisuus leikekorissa, lataus ja verkkopalvelut, eivät toimi. Lisätietoa osoitteessa <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a>.";
$pgv_lang["sanity_warn6"]		= "Kalenterikirjastoa ei ole. PhpGedView toimii tosin, mutta jotkut toiminnot, kuten muuntaminen toisiin kalenterimuotoihin (esimerkiksi heprealaiseen tai ranskalaiseen), ei toimi. Lisätietoa osoitteessa <a href='http://www.php.net/manual/en/ref.calendar.php'>http://www.php.net/manual/en/ref.calendar.php</a>";
$pgv_lang["ip_address"]		= "IP-osoite";
$pgv_lang["date_time"]		= "Päivämäärä ja aika";
$pgv_lang["log_message"]		= "Lokitiedote";
$pgv_lang["searchtype"]		= "Hakumenetelmä";
$pgv_lang["query"]			= "Kysely";
$pgv_lang["associated_files"]		= "Liitetyt tiedostot:";
$pgv_lang["remove_all_files"]		= "Poista kaikki turhat tiedostot.";
$pgv_lang["warn_file_delete"]		= "Tämä tiedosto sisältää tärkeätä tietoa kuten kieliasetuksia tai kesken olevia tietomuutoksia. Oletko varma, että haluat poistaa tämän tiedoston?";
$pgv_lang["deleted_files"]          	= "Poistetut tiedostot:";
$pgv_lang["index_dir_cleanup_inst"]	= "Poistaaksesi tiedoston tai alikansion indeksi-kansiosta raahaa se roskakoriin tai valitse sen valintaruutu. Klikkaa Poista-painiketta poistaaksesi merkityt tiedostot lopullisesti.<br /><br />. Tiedostot, jotka on merkitty <img src=\"./images/RESN_confidential.gif\" /> ovat välttämättömiä ohjelman toiminnan kannalta eikä niitä voi poistaa.<br />Tiedostot, jotka on merkitty <img src=\"./images/RESN_locked.gif\" />, sisältävät tärkeitä asetuksia tai kesken olevia tietomuutoksia. Niitä ei tulisi poistaa, ellet varmasti tiedä mitä olet tekemässä.<br /><br />";
$pgv_lang["index_dir_cleanup"]	= "Siivoa indeksi-kansio";
$pgv_lang["upload_a_gedcom"] 		= "Lataa GEDCOM-tiedosto";
$pgv_lang["start_entering"] 		= "Aloita tiedon syöttäminen";
$pgv_lang["get_started_instructions"]	= "Valitse joku näistä vaihtoehdoista aloittaaksesi PhpGedView:n käytön.";
$pgv_lang["admin_users_exists"]		= "Seuraavat ylläpitäjät ovat jo olemassa:";
$pgv_lang["install_step_1"] = "Tarkista käyttöympäristö";
$pgv_lang["install_step_2"] = "Tietokantayhteys";
$pgv_lang["install_step_3"] = "Luo taulut";
$pgv_lang["install_step_5"] = "Kielet";
$pgv_lang["install_step_6"] = "Tallenna asetukset";
$pgv_lang["install_step_7"] = "Luo ylläpitäjätili";
$pgv_lang["install_wizard"] = "Asennusvelho";
$pgv_lang["basic_site_config"] = "Perusasetukset";
$pgv_lang["adv_site_config"] = "Lisäasetukset";
$pgv_lang["config_not_saved"] = "*Asetuksesi eivät<br />tallennu ennen vaihetta 6 ";
$pgv_lang["download_config"] = "Lataa config.php koneeseesi";
$pgv_lang["site_unavailable"] = "Palvelu ei ole parhaillaan käytettävissä";
$pgv_lang["db_tables_created"] = "Tietokantataulut on luotu.";
$pgv_lang["config_saved"] = "Asetukset on tallennettu.";
$pgv_lang["checking_errors"]		= "Tarkistetaan virheitä...";
$pgv_lang["checking_php_version"]		= "Tarkistetaan tarvittava PHP-versio:";
$pgv_lang["failed"]		= "Epäonnistui";
$pgv_lang["pgv_requires_version"]		= "PhpGedView vaatii vähintään PHP-version ".PGV_REQUIRED_PHP_VERSION."";
$pgv_lang["to_manage_users"] = "Hallinnoi käyttäjiä <a href=\"useradmin.php\">Käyttäjähallinta</a>-sivulla";
$pgv_lang["no_db_extensions"]		= "Sinulla ei ole tuettuja tietokantalaajennuksia.";
$pgv_lang["db_ext_support"]		= "Sinulla on #DBEXT#-tuki";
$pgv_lang["checking_config.php"]		= "Tarkistetaan config.php:";
$pgv_lang["config.php_missing"]		= "Tiedostoa config.php ei löytynyt.";
$pgv_lang["config.php_missing_instr"]		= "Tämä asennusvelho ei pysty kirjoittamaan asetuksiasi tiedostoon config.php. Voit tehdä kopion tiedostosta config.dist ja nimetä se uudelleen muotoon config.php. Vaihtoehtoisesti voit, suoritettuasi tämän asennusvelhon loppuun, ladata asetuksesi koneellesi ja ladata syntynyt config.php palvelimelle.";
$pgv_lang["config.php_not_writable"]		= "config.php ei ole kirjoituskelpoinen.";
$pgv_lang["config.php_not_writable_instr"]		= "Tämä asennusvelho ei pysty kirjoittamaan asetuksiasi tiedostoon config.php. Voit asettaa kirjoitusoikeudet tiedostolle tai voit, suoritettuasi tämän asennusvelhon loppuun, ladata asetuksesi koneellesi ja ladata syntynyt config.php palvelimelle.";
$pgv_lang["passed"]		= "Hyväksytty";
$pgv_lang["config.php_writable"]		= "config.php on olemassa ja kirjoituskelpoinen.";
$pgv_lang["checking_warnings"]		= "Tarkistetaan varoituksia...";
$pgv_lang["checking_timelimit"]		= "Tarkistetaan mahdollisuutta muuttaa aikarajoitusta:";
$pgv_lang["cannot_change_timelimit"]		= "Aikarajoitusta ei voi muuttaa.";
$pgv_lang["cannot_change_timelimit_instr"]		= "Et mahdollisesti voi käyttää kaikkia toimintoja suuressa, monta henkilöä sisältävässä tietokannassa. ";
$pgv_lang["current_max_timelimit"]		= "Pisin aikarajasi on ";
$pgv_lang["check_memlimit"]		= "Tarkistetaan mahdollisuutta muuttaa muistirajoitusta:";
$pgv_lang["cannot_change_memlimit"]		= "Muistirajoitusta ei voi muuttaa.";
$pgv_lang["cannot_change_memlimit_instr"]		= "Et mahdollisesti voi käyttää kaikkia toimintoja suuressa, monta henkilöä sisältävässä tietokannassa. ";
$pgv_lang["current_max_memlimit"]		= "Nykyinen muistirajoituksesi on:";
$pgv_lang["check_upload"]		= "Tarkistetaan mahdollisuutta ladata tiedostoja palvelimelle:";
$pgv_lang["current_max_upload"]		= "Suurin ladattava tiedostokoko on:";
$pgv_lang["check_gd"]		= "Tarkistetaan GD kuvakirjastoa:";
$pgv_lang["cannot_use_gd"]		= "Sinulla ei ole GD kuvakirjastoa. Et voi automaattisesti luoda pienoiskuvia.";
$pgv_lang["check_sax"]		= "Tarkistetaan SAX XML-kirjasto:";
$pgv_lang["cannot_use_sax"]		= "Sinulla ei ole SAX XML-kirjastoa. Et voi ajaa raportteja tai joitakin muita liitännäistoimintoja.";
$pgv_lang["check_dom"]		= "Tarkistetaan DOM XML-kirjasto:";
$pgv_lang["cannot_use_dom"]		= "Sinulla ei ole DOM XML-kirjastoa. Et voi viedä XML:ää.";
$pgv_lang["check_calendar"]		= "Tarkistetaan laajennettu kalenterikirjasto:";
$pgv_lang["cannot_use_calendar"]		= "Sinulla ei ole tukea laajennetulle kalenterille. Et voi suorittaa joitakin laajennetun kalenterin toimintoa.";
$pgv_lang["warnings_passed"]		= "Kaikki varoitustarkistukset hyväksytty.";
$pgv_lang["warning_instr"]		= "Vaikka jotakin varoitusta ei ole hyväksytty, voit kuitenkin ajaa PhpGedView-ohjelmaa tällä palvelimella, mutta jotkut ominaisuudet saattavat olla kytketty pois tai toiminta voi olla hidasta.";
$pgv_lang["editors"]				= "Muokkaajat";
$pgv_lang["gedcom_admins"]			= "GEDCOM ylläpitäjät";
$pgv_lang["site_admins"]			= "Palvelun ylläpitäjät";
$pgv_lang["nobody"]					= "Ei kukaan";
$pgv_lang["error_remove_site"]					= "Etäpalvelinta ei voinut poistaa.";
$pgv_lang["elapsedMinute1"]	=	"1 minuutti";
$pgv_lang["elapsedHour1"]	=	"1 tunti";
$pgv_lang["elapsedDay1"]	=	"1 päivä";
$pgv_lang["elapsedYear1"]	=	"1 vuosi";
$pgv_lang["elapsedAgo"]		=	"#pgv_lang[global_string1]# sitten";
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minuuttia";
$pgv_lang["tradition_polish"]		= "Puolalainen";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# vuotta";
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# vuotta";
$pgv_lang["elapsedMonth1"]	=	"1 kuukausi";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# kuukautta";
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# kuukautta";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# päivää";
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# päivää";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# tuntia";
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# tuntia";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minuuttia";
$pgv_lang["ged_export"] 						= "Vie";
$pgv_lang["install_step_4"] = "Sivuston asetus";
$pgv_lang["add_gedcom_from_path"] 	= "Lisää GEDCOM tiedoston paikasta";
$pgv_lang["using_php_version"]		= "Käytät PHP-versiota ";
$pgv_lang["checking_db_support"]		= "Etsitään vähintään tietokannan tuki:";
$pgv_lang["checking_db_support"]		= "Tarkistetaan tietokannan vähimmäistuki:";
$pgv_lang["error_remove_site_linked"]			= "Etäpalvelinta ei voitu poistaa koska siihen on vielä yhteyksiä.";
$pgv_lang["PGV_SMTP_ACTIVE"] 					= "Käytä SMTP -protokollaan ulkoisten viestien lähettämiseen";
$pgv_lang["PGV_SMTP_HOST"] 						= "Lähtevän postin (SMTP) palvelimen nimi";
$pgv_lang["PGV_SMTP_HELO"] 						= "Lähettävä domain-nimi";
$pgv_lang["PGV_SMTP_PORT"] 						= "SMTP portti";
$pgv_lang["PGV_SMTP_AUTH"] 						= "Käyttäjänimi ja salasana";
$pgv_lang["PGV_SMTP_AUTH_USER"] 				= "Käyttäjänimi";
$pgv_lang["PGV_SMTP_AUTH_PASS"] 				= "Salasana";
$pgv_lang["PGV_SMTP_SSL"] 						= "SSL kirjautuminen";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Lähettäjän nimi";
$pgv_lang["enter_comment"]	= "Voit lisätä kommentin tähän.";
$pgv_lang["current_links"]			= "Linkit";
$pgv_lang["add_more_links"]			= "Lisää linkkejä";
$pgv_lang["enter_pid_or_name"]		= "Lisää henkilön tunnus tai nimi";
$pgv_lang["set_links"]				= "Aseta linkkejä";
$pgv_lang["add_or_remove_links"]	= "Ylläpidä linkkejä";
$pgv_lang["keep"]					= "Pidä";
$pgv_lang["nav"]					= "Navigaattori";
$pgv_lang["fam_nav"]				= "Perhenavigaattori";
$pgv_lang["nav"]					= "";
$pgv_lang["remove"]					= "Poista";
$pgv_lang["open_nav"]				= "Avaa perhenavigaattori";
$pgv_lang["keep_link"]				= "Pidä liitos listalla";
$pgv_lang["remove_link"]			= "Poista liitos listalta";
$pgv_lang["open_nav"]				= "Avaa perhenavigaattori";
$pgv_lang["link_exists"]			= "Tämä liitos on jo olemassa";
$pgv_lang["id_not_valid"]			= "Ei käytettävissä oleva henkilö-, perhe- tai lähdetunnus";
$pgv_lang["add_fam_other_links"]	= "Lisää perhe ja etsi";
$pgv_lang["enter_name"]				= "Kirjoita nimi";
$pgv_lang["add_indi_to_link_list"]	= "Klikkaa ";
$pgv_lang["click_choose_head"]		= "Klikkaa #GLOBALS[tempStringHead]# valitaksesi henkilön perheen pääksi.";
$pgv_lang["click_choose_head_text"]	= "Klikkaa valitaksesi henkilön perheen pääksi.";
$pgv_lang["head"]					= "Pää";
$pgv_lang["id_empty"]				= "Yhteyttä luotaessa ID-kenttä ei voi olla tyhjä.";
$pgv_lang["link_deleted"]			= "Yhteys kohteeseen #GLOBALS[remLinkId]# poistettu";
$pgv_lang["link_added"]				= "Yhteys kohteeseen #GLOBALS[addLinkId]# lisätty";
$pgv_lang["no_update_CHANs"]		= "Älä päivitä CHAN (viimeksi muutettu) tietueita";
$pgv_lang["no_CHANs_update"]		= "CHAN (viimeksi muutettu) tietueita ei muutettu";
$pgv_lang["error_remote_duplicate"]				= "Tämä etätietokanta on jo listalla tunnuksella <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["gedcheck_nothing"] = "Tällä tasolla ei löytynyt virheitä.";
$pgv_lang["gedcheck_sync"] = "Tietokantaan tehtyjä muutoksia ei ole tehty tiedostoon #GLOBALS[ged]#. Tiedoston sisältö voi olla vanhentunutta. Voit tehdä siitä ajantasaisen tietokannan kanssa suorittamalla <b><a \"#GLOBALS[ged_link]#\">viennin</a></b>.";
$pgv_lang["search_add_links"]		= "Hae henkilöitä yhteyksien luontilistaan.";
$pgv_lang["unlink"]					= "Poista liitos";
?>

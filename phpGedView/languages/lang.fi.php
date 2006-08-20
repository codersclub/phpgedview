<?php
/**
 * Finnish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  Jaakko Sarell and Matti
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
 * @author Matti Valve
 * @author Jaakko Sarell
 * @version $Id$
 */
if (preg_match("/lang\...\.php$/", $_SERVER["SCRIPT_NAME"])>0) {
	print "You cannot access a language file directly.";
	exit;
}
$pgv_lang["address_labels"]		= "Osoitetarrat";
$pgv_lang["filter_address"]		= "Näytä osoitteet, jotka sisältävät:";
$pgv_lang["address_list"]		= "Osoiteluettelo";
$pgv_lang["autocomplete"]		= "Automaattinen täydentäminen";
$pgv_lang["undo_all_confirm"]		= "Oletko varma, että haluat peruutta kaikki tähän GEDCOM-tiedostoon tekemäsi muutokset?";
$pgv_lang["undo_all"]		= "Peruuta kaikki muutokset";
$pgv_lang["index_edit_advice"]	= "Korosta aluenimeä ja näpäytä sitten nuolikuvaketta siirtääksesi aluetta haluttuun suuntaan.";
$pgv_lang["importing_dates"]		= "Tuodaan päivämäärätietueita";
$pgv_lang["changelog"]		= "Version #VERSION# muutoksia";
$pgv_lang["view_changelog"]		= "Näytä textlog.txt-tiedosto";
$pgv_lang["html_block_descr"]		= "Tämä on yksinkertainen HTML-alue jonka voit sijoittaa sivullesi lisätäksesi minkä tahansa viestin.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Kirjoita otsikkosi tähän </b></p><br /><p>Näpäytä Konfiguroi-painiketta.";
$pgv_lang["html_block_sample_part2"]	= "muuttaaksesi sen, mikä on tulostettu tähän.</p>";
$pgv_lang["html_block_name"]		= "HTML-alue";
$pgv_lang["htmlplus_block_name"]	= "Edistynyt HTML";
$pgv_lang["htmlplus_block_descr"]	= "Tämä on HTML-alue, jonka voit sijoittaa sivullesi lisätäksesi minkä tahansa haluamasi viestin. Voit lisätä viittauksia GEDCOM-tiedostosi tietoihin HTML-tekstiin.";
$pgv_lang["htmlplus_block_templates"] 	= "Mallipohjat";
$pgv_lang["htmlplus_block_content"] 	= "Sisällys";
$pgv_lang["htmlplus_block_narrative"] 	= "Kertova tyyli (vain englanniksi)";
$pgv_lang["htmlplus_block_custom"]	= "Omat asetukset";
$pgv_lang["htmlplus_block_keyword"]	= "Esimerkkejä avainsanoista (vain englanniksi)";
$pgv_lang["htmlplus_block_taglist"]	= "Merkitsinluettelo";
$pgv_lang["htmlplus_block_compat"]	= "Yhteensopivuustila";
$pgv_lang["htmlplus_block_current"]	= "Nykyinen";
$pgv_lang["htmlplus_block_default"]	= "Oletusarvo";
$pgv_lang["htmlplus_block_gedcom"]	= "Sukupuu";
$pgv_lang["htmlplus_block_birth"]	= "syntymä";
$pgv_lang["htmlplus_block_death"]	= "kuolema";
$pgv_lang["htmlplus_block_marrage"]	= "avioliitto";
$pgv_lang["htmlplus_block_adoption"]= "adoptio";
$pgv_lang["htmlplus_block_burial"]	= "hautaus";
$pgv_lang["num_to_show"]		= "Näytettävien kohteiden lukumäärä";
$pgv_lang["days_to_show"]		= "Näytettävien päivien lukumäärä";
$pgv_lang["before_or_after"]		= "Sijoita lukumäärät ennen nimeä tai sen jälkeen?";
$pgv_lang["before"]			= "ennen";
$pgv_lang["after"]			= "jälkeen";
$pgv_lang["config_block"]		= "Konfiguroi alue";
$pgv_lang["pls_note12"]		= "Kerro tässä miksi haluat käyttäjätilin ja kuinka olet sukua sivuston henkilöihin. ";
$pgv_lang["enter_comments"]		= "Lisää tiedot suhteestasi tietoon kommenttikentässä.";
$pgv_lang["comments"]		= "Kommentteja";
$pgv_lang["none"]			= "Ei mitään";
$pgv_lang["ahnentafel_report"]	= "Sukutauluraportti";
$pgv_lang["ahnentafel_header"]	= "Sukutauluraportti henkilölle ";
$pgv_lang["ahnentafel_generation"]	= "Sukupolvi ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Hän ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Hän ";
$pgv_lang["ahnentafel_born_m"]	= "syntyi";
$pgv_lang["ahnentafel_born_f"]	= "syntyi";
$pgv_lang["ahnentafel_christened_m"] 	= "kastettiin";
$pgv_lang["ahnentafel_christened_f"] 	= "kastettiin";
$pgv_lang["ahnentafel_married_m"]	= "avioitui";
$pgv_lang["ahnentafel_married_f"]	= "avioitui";
$pgv_lang["ahnentafel_died_m"]	= "kuoli";
$pgv_lang["ahnentafel_died_f"]	= "kuoli";
$pgv_lang["ahnentafel_buried_m"]	= "haudattiin";
$pgv_lang["ahnentafel_buried_f"]	= "haudattiin";
$pgv_lang["ahnentafel_place"]		= "&nbsp;";
$pgv_lang["ahnentafel_no_details"]	= "mutta yksityiskohdat puuttuvat";
$pgv_lang["child-family"]		= "Vanhemmat ja sisarukset";
$pgv_lang["spouse-family"]		= "Puoliso ja lapset";
$pgv_lang["direct-ancestors"]		= "Esipolvet suoraan ylenevässä polvessa";
$pgv_lang["ancestors"]		= "Esivahemmat ja heidän perheensä suoraan ylenevässä polvessa";
$pgv_lang["descendants"]		= "Jälkipolvet";
$pgv_lang["choose_relatives"]		= "Valitse sukulaiset";
$pgv_lang["relatives_report"]		= "Raportti sukulaisista";
$pgv_lang["total_living"]		= "Yhteensä elossa";
$pgv_lang["total_dead"]		= "Yhteensä kuolleet";
$pgv_lang["total_not_born"]		= "Yhteensä vielä syntymättömät";
$pgv_lang["remove_custom_tags"]	= "Poista räätälöidyt PGV-merkitsimet? (Esim. _PGVU, _THUM)";
$pgv_lang["download_zipped"]	= "Lataa GEDCOM-tiedosto koneellesi ZIP-tiedostona?";
$pgv_lang["cookie_login_help"]	= "Tämä sivusto muistaa sinut aiemmasta sisäänkirjautumisesta. Pääset käsiksi yksityistietoihin ja muihin käyttäjäöminaisuuksiin, mutta jos haluat editoida tai ylläpitää sivustoa, sinun on kirjauduttava tietoturvan takia.";
$pgv_lang["remember_me"]		= "Muista minut tällä tietokoneella?";
$pgv_lang["add_unlinked_person"]	= "Lisää linkittämätön henkilö";
$pgv_lang["add_unlinked_source"]	= "Lisää linkittämätön lähde";
$pgv_lang["fams_with_surname"]	= "Perheet, joilla on sukunimi #surname#";
$pgv_lang["support_contact"]		= "Tekninen apu";
$pgv_lang["genealogy_contact"]	= "Yhteys sukututkimukseen";
$pgv_lang["continue_import"]		= "Jatka paikkojen tuontia";
$pgv_lang["importing_places"]		= "Tuodaan paikkatietueita";
$pgv_lang["genealogy_contact"]	= "yhteys sukututkimukseen";
$pgv_lang["common_upload_errors"]	= "Tämä virhe tarkoittaa luultavasti, että yritit ladata suurempaa tiedotoa kuin mitä palvelin sallii. Oletusraja on 2 MB. Ota yhteyttä ylläpitäjään saadaksesi suuremman raja-arvon php.ini-tiedostossa tai yritä ladata tiedosto käyttämällä FTP-tiedostonsiirtoa. Käytä sivua <a href=\"uploadgedcom.php?action=add_form\">Lisää GEDCOM</a> ladataksesi palvelimelle GEDCOM-tiedoston käyttämällä FTP:tä.";
$pgv_lang["total_memory_usage"]	= "Muistia käytössä:";
$pgv_lang["mothers_family_with"]	= "Äidin perhe mukaanlukien ";
$pgv_lang["fathers_family_with"]	= "Isän perhe mukaanlukien ";
$pgv_lang["halfsibling"]		= "Sisar-/velipuoli";
$pgv_lang["halfbrother"]		= "Velipuoli";
$pgv_lang["halfsister"]		= "Sisarpuoli";
$pgv_lang["family_timeline"]		= "Näytä perhe aikajanalla";
$pgv_lang["children_timeline"]		= "Näytä lapset aikajanalla";
$pgv_lang["other"]			= "Muuta";
$pgv_lang["sort_by_marriage"]		= "Lajittele avioitumispäivän mukaan";
$pgv_lang["reorder_families"]		= "Järjestä perheet";
$pgv_lang["indis_with_surname"]	= "henkilöt, joilla on sukunimi  #surname#";
$pgv_lang["first_letter_fname"]		= "Valitse kirjain näyttääksesi henkilöt, joiden etunimi alkaa kyseisellä kirjaimella.";
$pgv_lang["import_marr_names"]	= "Tuo avioniomet";
$pgv_lang["marr_name_import_instr"]	= "Näpäytä alla olevaa painiketta vain, mikäli haluat laskea naispuoleisten henkilöiden avionimet tässä GEDCOM-tiedostossa. Tämän avulla voit hakea ja luetteloida naisia avionimen perusteella.";
$pgv_lang["calc_marr_names"]	= "Lasketaan avionimet";
$pgv_lang["total_names"]		= "Yhteensä nimiä";
$pgv_lang["upload_file"]		= "Lataa tiedosto koneeltasi";
$pgv_lang["thumb_genned"]		= "Pienoiskuvat on luotu automaattisesti.";
$pgv_lang["thumbgen_error"]		= "Pienoiskuvaa ei voi luoda ";
$pgv_lang["generate_thumbnail"]	= "Luo pienoiskuvat automaattisesti";
$pgv_lang["auto_thumbnail"]		= "Automattinen pienoiskuva";
$pgv_lang["no_upload"]		= "Mediatiedostojen lataaminen palvelimelle ei ole saallittu, koska multimediakohteet eivät ole sallittu tai koska mediahakemistoon ei voi kirjoittaa. ";
$pgv_lang["top10_pageviews_nohits"]	= "Ei osumia.";
$pgv_lang["top10_pageviews_msg"]	= "Laskurit on aktivoitava GEDCOM-asetuksissa jotta tämä alue toimisi.";
$pgv_lang["review_changes_descr"]	= "Alue \"hyväksymättömät muutokset\" näyttää editoivalle käyttäjälle luettelon niistä tietueista, jotka on muutettu on-line tilassa ja jotka vielä täytyy tarkistaa ja hyväksyä.<br /><br />Mikäli tämä alue on aktivoitu, ne käyttäjät joilla on hyväksymisoikeudet saavat kerran päivässä sähköpostiviestin, jossa pyydetään tarkistamaan muutokset.";
$pgv_lang["review_changes_block"]	= "Ei hyväksytyt muutokset";
$pgv_lang["review_changes_email"]	= "Lähetä muistutusviestit?";
$pgv_lang["review_changes_email_freq"]= "Muistutusviestien frekvenssi (päiviä)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Tarkista muutokset";
$pgv_lang["review_changes_body"]	= "PhpGedView sivustoon  on tehty on-line muutoksia. Nämä muutokset on tarkastettava ja hyväksyttävä ennen niiden näkymistä kaikille käyttäjille. Näpäytä alla olevaa linkkiä mennäksesi PhpGedView sivustolle ja kirjaudu järjestelmään tarkastaaksesi muutokset.";
$pgv_lang["show_spouses"]		= "Näytä puolisot";
$pgv_lang["quick_update_title"] 	= "Pikapäivitys";
$pgv_lang["quick_update_instructions"] 	= "Tällä sivulla voit nopeasti päivittää henkilön tiedot. Sinun tarvitsee vain lisätä uudet tai muuttaa tällä sivustolla jo olevat tiedot. Kun muutokset on lähetetty ylläpitäjä tarkistaa ne ennenkuin ne näkyvät verkkosivuilla.";
$pgv_lang["update_name"] 		= "Päivitä nimi";
$pgv_lang["update_fact"] 		= "Päivitä tieto";
$pgv_lang["update_fact_restricted"] 	= "Tämän tiedon päivittämistä on rajoitettu";
$pgv_lang["update_photo"] 		= "Päivitä valokuva";
$pgv_lang["photo_replace"] 		= "Haluatko korvata vanhemman valokuvan tällä?";
$pgv_lang["select_fact"] 		= "Valitse tieto";
$pgv_lang["update_address"] 		= "Päivitä osoite";
$pgv_lang["add_new_chil"] 		= "Lisää uusi lapsi";
$pgv_lang["top10_pageviews_descr"]	= "Tällä alueella näytetään 10 useimmin katsottua tietuetta. Tämä vaatii osumalaskurin aktivoimisen GEDCOM asetuksissa.";
$pgv_lang["top10_pageviews"]	= "Useimmin katsotut asiat";
$pgv_lang["top10_pageviews_block"]	= "Suosikkikohteiden alue";
$pgv_lang["user_default_tab"]		= "Oletusvälilehti, joka näytetään henkilösivulla";
$pgv_lang["stepfamily"]		= "Ottoperhe";
$pgv_lang["stepdad"]		= "Isäpuoli";
$pgv_lang["stepmom"]		= "Äitipuoli";
$pgv_lang["stepsister"]		= "Sisarpuoli";
$pgv_lang["stepbrother"]		= "Velipuoli";
$pgv_lang["max_upload_size"]		= "Suurin ladattava tiedostokoko:";
$pgv_lang["edit_fam"]		= "Editoi perhettä";
$pgv_lang["fams_charts"]		= "Perheen asetukset";
$pgv_lang["sort_by_birth"]		= "Lajittele syntymäpäivän mukaan";
$pgv_lang["reorder_children"]		= "Järjestä lapset uudelleen";
$pgv_lang["add_from_clipboard"]	= "Lisää leikepöydältä";
$pgv_lang["record_copied"]		= "Tietue kopioitu leikepöydälle";
$pgv_lang["copy"]			= "Kopioi";
$pgv_lang["cut"]			= "Leikkaa";
$pgv_lang["indis_charts"]		= "Henkilökaaviot";
$pgv_lang["edit_indi"] 		= "Editoi henkilöä";
$pgv_lang["locked"]			= "Älä muuta";
$pgv_lang["privacy"]			= "yksityisyys";
$pgv_lang["number_sign"]		= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]			= "?";
$pgv_lang["qm_ah"]			= "?";
$pgv_lang["page_help"]		= "Ohje";
$pgv_lang["help_for_this_page"]	= "Tämän sivun ohje";
$pgv_lang["help_contents"]		= "Ohjeen sisältö";
$pgv_lang["show_context_help"]	= "Näytä pika-avusteet ";
$pgv_lang["hide_context_help"]	= "Piilota pika-avusteet ";
$pgv_lang["sorry"]			= "<b>Valitettavasti emme ole viimeistelleet tämän sivun tai kohteen ohjetta</b>";
$pgv_lang["help_not_exist"] 		= "<b>Tämän sivun tai kohteen ohjetta ei vielä ole olemassa</b>";
$pgv_lang["var_not_exist"]		= "<span style=font-weight: bold>Kielimuuttuja puuttuu. Ilmoita tästä koska se on virhe.</span>";
$pgv_lang["resolution"]		= "Näytön tarkkuus";
$pgv_lang["menu"]			= "Valikko";
$pgv_lang["header"]			= "Otsikko";
$pgv_lang["imageview"]		= "Kuvakatselin";
$pgv_lang["login_head"] 		= "PhpGedView Käyttäjän sisäänkirjautuminen";

//-- CONFIG FILE MESSAGES
$pgv_lang["error_title"]		= "Virhe: GEDCOM-tiedostoa ei voi avata";
$pgv_lang["error_header"] 		= "GEDCOM-tiedostoa [#GEDCOM#] ei löydy annetusta paikasta.";
$pgv_lang["error_header_write"] 	= "GEDCOM-tiedosto [#GEDCOM#] ei ole kirjoituskelpoinen. Tarkista atribuutit ja oikeudet.";
$pgv_lang["for_support"]		= "Teknisissä asioissa ota yhteys:";
$pgv_lang["for_contact"]		= "Sukuasioissa ota yhteys:";
$pgv_lang["for_all_contact"]		= "Teknisissä tai sukuasioissa ota yhteys:";
$pgv_lang["build_title"]		= "Luo indeksitiedostoja";
$pgv_lang["build_error"]		= "GEDCOM-tiedosto on päivitetty.";
$pgv_lang["please_wait"]		= "Ole hyvä ja odota kun Indeksitiedostoja luodaan uudelleen.";
$pgv_lang["choose_gedcom"]		= "Valitse GEDCOM sukutiedosto";
$pgv_lang["username"]		= "Käyttäjätunnus";
$pgv_lang["invalid_username"]	= "Käyttäjätunnuksessa on virheellisiä merkkejä";
$pgv_lang["firstname"]		= "Etunimi";
$pgv_lang["lastname"]		= "Sukunimi";
$pgv_lang["password"]		= "Salasana";
$pgv_lang["confirm"]        		= "Vahvista salasana";
$pgv_lang["user_contact_method"] 	= "Mieluisin yhteystapa";
$pgv_lang["login"]			= "Kirjaudu sisään";
$pgv_lang["login_aut"]		= "Muuta käyttäjäasetuksia";
$pgv_lang["logout"]			= "Kirjaudu ulos";
$pgv_lang["admin"]			= "Ylläpito";
$pgv_lang["logged_in_as"]		= "Kirjautunut nimellä";
$pgv_lang["my_pedigree"]		= "Esivanhempani";
$pgv_lang["my_indi"]		= "Tietoni";
$pgv_lang["yes"]			=  "Kyllä";
$pgv_lang["no"]			= "Ei";
$pgv_lang["add_gedcom"]		= "Lisää uusi GEDCOM tiedostoon";
$pgv_lang["change_theme"]		= "Vaihda teema";
$pgv_lang["gedcom_downloadable"] 	= "Tämä GEDCOM-tiedosto on ladattavissa internetistä.<br />Katso TURVALLISUUS-osion <a href=\"readme.txt\">readme.txt</a> -tiedostosta korjataksesi tämän ongelman.";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Esipolvet";
$pgv_lang["gen_ped_chart"]		= "#PEDIGREE_GENERATIONS# sukupolven esipolvitaulu";
$pgv_lang["generations"]		= "Sukupolvia";
$pgv_lang["view"]			= "Näytä";
$pgv_lang["fam_spouse"]		= "Perhe puolisoineen";
$pgv_lang["root_person"]		= "Lähtöhenkilön numero";
$pgv_lang["hide_details"]		= "Piilota yksityiskohdat";
$pgv_lang["show_details"]		= "Näytä yksityiskohdat";
$pgv_lang["person_links"]		= "Linkit tämän henkilön kaavioihin, perheisiin sekä lähisukulaisiin. Klikkaa tätä ikonia jos haluat nähdä sivun jossa tämä henkilö on lähtöhenkilö.";
$pgv_lang["zoom_box"]		= "Suurenna/pienennä";
$pgv_lang["orientation"]		= "Sivun asento";
$pgv_lang["portrait"]			= "Pystysuoraan";
$pgv_lang["landscape"]		= "Vaakasuoraan";
$pgv_lang["start_at_parents"]		= "Aloita vanhemmista";
$pgv_lang["charts"]			= "Kaaviot";
$pgv_lang["lists"]			= "Luettelot";
$pgv_lang["welcome_page"]		= "Tervetulosivu";
$pgv_lang["max_generation"]		= "Esipolvien maksimimäärä taulussa on #PEDIGREE_GENERATIONS#.";
$pgv_lang["min_generation"]		= "Esipolvien minimimäärä taulussa on 3.";
$pgv_lang["box_width"] 		= "Leveys";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Ei löydy perhettä, jonka ID on";
$pgv_lang["unable_to_find_indi"]	= "Ei löydy henkilöä, jonka ID on";
$pgv_lang["unable_to_find_record"]	= "Ei löydy tietuetta, jonka ID on";
$pgv_lang["unable_to_find_source"]	= "Ei löydy lähdettä, jonka ID on";
$pgv_lang["unable_to_find_repo"]	= "Ei löydy tietokantaa, jonka ID on";
$pgv_lang["repo_name"]		= "Tietokannan nimi:";
$pgv_lang["address"]		= "Osoite:";
$pgv_lang["phone"]			= "Puhelin:";
$pgv_lang["source_name"]		= "Lähdenimi:";
$pgv_lang["title"]			= "Nimike:";
$pgv_lang["author"]			= "Kirjoittaja:";
$pgv_lang["publication"]		= "Julkaisu:";
$pgv_lang["call_number"]		= "Tallennuspaikkanumero";
$pgv_lang["living"]			= "Elossa";
$pgv_lang["private"]			= "Yksityinen";
$pgv_lang["birth"]			= "Syntynyt:";
$pgv_lang["death"]			= "Kuollut:";
$pgv_lang["descend_chart"]		= "Jälkipolvet";
$pgv_lang["individual_list"]		= "Henkilöluettelo";
$pgv_lang["family_list"]		= "Perheet";
$pgv_lang["source_list"]		= "Lähteet";
$pgv_lang["place_list"]		= "Paikat";
$pgv_lang["place_list_aft"] 		= "Hierarkia tämän jälkeen: ";
$pgv_lang["media_list"]		= "Multimedia";
$pgv_lang["search"]			= "Hae";
$pgv_lang["clippings_cart"]		= "Sukupuun leikekori";
$pgv_lang["print_preview"]		= "Tulostuksen esikatselu";
$pgv_lang["cancel_preview"]		= "Takaisin tavalliseen katseluun";
$pgv_lang["change_lang"]		= "Vaihda kieli";
$pgv_lang["print"]			= "Tulosta";
$pgv_lang["total_queries"]		= "Tiedostokysymykset: ";
$pgv_lang["total_privacy_checks"]	= "Tietosuojavarmistus:";
$pgv_lang["back"]			= "Takaisin";
$pgv_lang["privacy_list_indi_error"] 	= "Tietosuojan takia yhden tai useamman henkilön tietoja ei näytetä.";
$pgv_lang["privacy_list_fam_error"]	= "Tietosuojan takia yhden tai useamman perheen tietoja ei näytetä.";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]			= "Lisänimi";
$pgv_lang["male"]			= "Mies";
$pgv_lang["female"]			= "Nainen";
$pgv_lang["temple"]			= "Mormoonitemppeli";
$pgv_lang["temple_code"]		= "Mormoonitemppeli koodi:";
$pgv_lang["status"]			= "Tila";
$pgv_lang["source"]			= "Lähde";
$pgv_lang["citation"]			= "Lainaus:";
$pgv_lang["text"]			= "Teksti:";
$pgv_lang["note"]			= "Lisätieto";
$pgv_lang["NN"]			= "(Tuntematon)";
$pgv_lang["PN"]			= "(Tuntematon)";
$pgv_lang["unrecognized_code"]	= "Tuntematon GEDCOM-koodi";
$pgv_lang["unrecognized_code_msg"]	= "Tämä on virhe jonka haluaisimme korjata. Ilmoita virhe osoitteeseen";
$pgv_lang["indi_info"]		= "Henkilökohtainen tieto";
$pgv_lang["pedigree_chart"]		= "Esipolvitaulu";
$pgv_lang["individual"]		= "Henkilö";
$pgv_lang["family"]			= "Perhe";
$pgv_lang["family_with"]		= "Oma perhe /";
$pgv_lang["as_spouse"]		= "Oma perhe";
$pgv_lang["as_child"]		= "Perhe vanhempineen";
$pgv_lang["view_gedcom"]		= "Näytä GEDCOM-tietue";
$pgv_lang["add_to_cart"]		= "Lisää leikekoriin";
$pgv_lang["still_living_error"]		= "Tämä henkilö elää vielä tai hänen syntymä- tai kuolintiedot puuttuvat. Elävien henkilöiden tiedot ovat vierailijoilta piilossa.<br />Lisätietoja varten ota yhteys";
$pgv_lang["privacy_error"]		= "Tämän henkilön tiedot on suojattu.<br />";
$pgv_lang["more_information"]		= "Lisätietoja varten ota yhteys";
$pgv_lang["name"]			= "Nimi";
$pgv_lang["given_name"]		= "Etunimi:";
$pgv_lang["surname"]		= "Sukunimi:";
$pgv_lang["suffix"]			= "Etuliite:";
$pgv_lang["object_note"]		= "Kohteen lisätieto:";
$pgv_lang["sex"]			= "Sukupuoli";
$pgv_lang["personal_facts"]		= "Henkilön tietoja";
$pgv_lang["lasttab"]				= "Henkilön viimeksi katsottu alasivu";
$pgv_lang["type"]			= "Tyyppi";
$pgv_lang["date"]			= "Päiväys";
$pgv_lang["place_description"]		= "Paikka / Kuvaus";
$pgv_lang["parents"] 		= "Vanhemmat:";
$pgv_lang["siblings"] 		= "Sisarukset";
$pgv_lang["father"] 			= "Isä";
$pgv_lang["mother"] 		= "Äiti";
$pgv_lang["parent"] 			= "Vanhempi";
$pgv_lang["relatives"]		= "Lähisukulaisia";
$pgv_lang["relatives_events"]		= "Lähisukulaisten tapahtumia";
$pgv_lang["child"]			= "Lapsi";
$pgv_lang["spouse"]		= "Puolisona";
$pgv_lang["surnames"]		= "Sukunimi";
$pgv_lang["adopted"]		= "Adoptoitu";
$pgv_lang["foster"]			= "Kasvatti";
$pgv_lang["sealing"]			= "Sinetöinti";
$pgv_lang["challenged"]		= "Kyseenalainen ";
$pgv_lang["disproved"]		= "Ei hyväksytty";
$pgv_lang["infant"]			= "Sylilapsi";
$pgv_lang["stillborn"]		= "Kuolleena syntynyt";
$pgv_lang["deceased"]		= "Kuollut";
$pgv_lang["link_as_child"]		= "Linkitä tämä henkilö lapseksi olemassa olevaan perheeseen.";
$pgv_lang["link_as_wife"]		= "Linkitä tämä henkilö aviovaimoksi olemassa olevaan perheeseen.";
$pgv_lang["link_as_husband"]		= "Linkitä tämä henkilö aviomieheksi olemassa olevaan perheeseen.";
$pgv_lang["no_tab1"]		= "Tällä henkilöllä ei ole tietoja.";
$pgv_lang["no_tab2"]		= "Tällä henkilöllä ei ole lisätietoja.";
$pgv_lang["no_tab3"]		= "Tällä henkilöllä ei ole lähteitä.";
$pgv_lang["no_tab4"]		= "Tällä henkilöllä ei ole multimediakohteita.";
$pgv_lang["no_tab5"]		= "Tällä henkilöllä ei ole lähisukulaisia.";
$pgv_lang["no_tab6"]		= "Tälle henkilölle ei ole tutkimuslokia.";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Perhetieto";
$pgv_lang["family_group_info"]		= "Perheen ryhmätieto";
$pgv_lang["husband"]		= "Mies";
$pgv_lang["wife"]			= "Vaimo";
$pgv_lang["marriage"]		= "Avioliitto:";
$pgv_lang["lds_sealing"]		= "Mormooni sinetöinti:";
$pgv_lang["marriage_license"]		= "Vihkitodistus:";
$pgv_lang["media_object"]		= "Multimediakohde:";
$pgv_lang["children"]		= "Lapset";
$pgv_lang["no_children"]		= "Ei lapsia rekisterissä";
$pgv_lang["childless_family"]		= "Tämä perhe jäi lapsettomaksi";
$pgv_lang["number_children"]		= "Lasten lukumäärä";
$pgv_lang["parents_timeline"]		= "Näytä pariskunta aikajanalla";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]		= "Leikekori";
$pgv_lang["clip_explaination"]		= "Sukupuun leikekori mahdollistaa &quot;leikkeiden&quot; ottamisen tästä sukupuusta ja niiden ryhmittelyn yhteen GEDCOM-tiedostoon ladattavaksi omalle koneelle.<br /><br />";
$pgv_lang["item_with_id"]		= "Kohde id";
$pgv_lang["error_already"]		= "on jo leikekorissasi.";
$pgv_lang["which_links"]		= "Mitä muita linkkejä tästä perheestä haluat lisätä?";
$pgv_lang["just_family"]		= "Lisää vain tämän perheen tietue.";
$pgv_lang["parents_and_family"]	= "Lisää vanhemmat tämän perheen tietueeseen.";
$pgv_lang["parents_and_child"]	= "Lisää tähän tietueeseen vanhempien ja lasten tietueet.";
$pgv_lang["parents_desc"]		= "Lisää tähän tietueeseen vanhempien ja kaikkien jälkeläisten tietueet.";
$pgv_lang["continue"]		= "Jatka lisäämistä";
$pgv_lang["which_p_links"]		= "Mitä muita linkkejä tästä henkilöstä haluat lisätä?";
$pgv_lang["just_person"]		= "Lisää vain tämä henkilö.";
$pgv_lang["person_parents_sibs"]	= "Lisää tämä henkilö vanhempineen ja sisaruksineen.";
$pgv_lang["person_ancestors"]	= "Lisää tämä henkilö suorine esivanhempineen.";
$pgv_lang["person_ancestor_fams"]	= "Lisää tämä henkilö suorine esivanhempineen sekä näiden perheet.";
$pgv_lang["person_spouse"]		= "Lisää tämä henkilö puolisoineen ja lapsineen.";
$pgv_lang["person_desc"]		= "Lisää tämä henkilö puolisoineen sekä kaikkien heidän jälkeläistensä tietueet.";
$pgv_lang["unable_to_open"] 		= "Leikehakemistoa ei voi avata kirjoittamista varten";
$pgv_lang["person_living"]		= "Henkilö on elossa. Henkilön tietoja ei oteta mukaan.";
$pgv_lang["person_private"]		= "Tämän henkilön tiedot ovat yksityisiä.  Henkilön tietoja ei oteta mukaan.";
$pgv_lang["family_private"]		= "Tämän perheen tiedot ovat yksityisiä. Perheen tietoja ei oteta mukaan.";
$pgv_lang["download"]		= "Näpäytä hiiren oikealla napilla (tai control + näpäys Mac-koneessa) alla olevaa linkkiä ja valitse &quot;Tallenna kohde nimellä&quot; ladataksesi tiedostot koneellesi.";
$pgv_lang["media_files"]		= "Tässä GEDCOM-tiedostossa on viittauksia mediatiedostoihin";
$pgv_lang["cart_is_empty"]		= "Leikekorisi on tyhjä.";
$pgv_lang["id"]			= "ID";
$pgv_lang["name_description"]	= "Nimi / Kuvaus";
$pgv_lang["remove"]		= "Poista        ";
$pgv_lang["empty_cart"]		= "Tyhjennä leikekori";
$pgv_lang["download_now"]		= "Lataa nyt omalle koneelle";
$pgv_lang["indi_downloaded_from"]	= "Henkilö on ladattu omalle koneelle tiedostosta:";
$pgv_lang["family_downloaded_from"]	= "Perhe on ladattu omalle koneelle tiedostosta:";
$pgv_lang["source_downloaded_from"]	= "Lähde on ladattu omalle koneelle tiedostosta:";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Paikkalinkki löytynyt";
$pgv_lang["top_level"]		= "Ylin taso";
$pgv_lang["form"]			= "Paikat ovat muodossa:";
$pgv_lang["default_form"]		= "Talo, kylä, pitäjä, lääni";
$pgv_lang["default_form_info"]		= "(Oletusasetus)";
$pgv_lang["gedcom_form_info"]	= "(GEDCOM)";
$pgv_lang["unknown"]		= "Tuntematon";
$pgv_lang["individuals"]		= "Henkilöt";
$pgv_lang["view_records_in_place"]	= "Näytä kaikki paikan tiedot";
$pgv_lang["place_list2"] 		= "Paikkaluettelo";
$pgv_lang["show_place_hierarchy"]	= "Näytä paikat hierarkiana";
$pgv_lang["show_place_list"]		= "Näytä kaikki paikat listassa";
$pgv_lang["total_unic_places"]		= "Paikkoja yhteensä";
$pgv_lang["external_objects"]		= "Ulkoiset kohteet";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["multi_title"]		= "Multimedialuettelo";
$pgv_lang["media_found"]		= "Mediakohteita löytynyt";
$pgv_lang["view_person"]		= "Katso henkilöä";
$pgv_lang["view_family"]		= "Katso perhettä";
$pgv_lang["view_source"]		= "Katso lähdettä";
$pgv_lang["view_object"]		= "Katso kohdetta";
$pgv_lang["prev"]			= "&lt; Edellinen";
$pgv_lang["next"]			= "Seuraava &gt;";
$pgv_lang["file_not_found"]		= "Tiedostoa ei löydy.";
$pgv_lang["medialist_show"]     	= "Näytä";
$pgv_lang["per_page"]          		= "mediakohdetta sivulla";
$pgv_lang["delete_directory"]		= "Poista hakemisto";
$pgv_lang["remove_object"]		= "Poista kohde";
$pgv_lang["confirm_remove_object"]	= "Haluatko varmasti poistaa tämän kohteen tietokannasta?";
$pgv_lang["remove_links"]		= "Poista linkit";
$pgv_lang["confirm_remove_links"]	= "Haluatko varmasti poistaa kaikki tähän kohteeseen osoittavat linkit?";
$pgv_lang["delete_file"]		= "Poista tiedosto";
$pgv_lang["confirm_delete_file"]	= "Haluatko varmasti poistaa tämän tiedoston?";
$pgv_lang["multiple_gedcoms"]	= "Tämä tiedosto on linkitetty toiseen sukututkimustietokantaan tällä palvelimella. Sitä ei voi poistaa, siirtää tai nimetä uudelleen ennenkuin nämä linkitykset on poistettu.";
$pgv_lang["external_file"]		= "Tätä mediakohdetta ei ole tiedostona tällä palvelimella. Sitä ei voi poistaa, siirtää tai nimetä uudelleen. ";
$pgv_lang["directory_not_empty"]	= "Hakemisto ei ole tyhjä.";
$pgv_lang["directory_not_exist"]	= "Hakemistoa ei ole.";
$pgv_lang["media_not_deleted"]	= "Mediahakemistoa ei poistettu.";
$pgv_lang["media_deleted"]		= "Mediahakemisto poistettu.";
$pgv_lang["thumbs_not_deleted"]	= "Pienoiskuvahakemistoa ei poistettu.";
$pgv_lang["thumbs_deleted"]		= "Pienoiskuvahakemisto poistettu.";
$pgv_lang["delete_dir_success"]	= "Media- ja pienoiskuvahakemistot poistettu.";
$pgv_lang["current_dir"]		= "Nykyinen hakemisto";

//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]		= "Hae GEDCOM-tiedostosta";
$pgv_lang["enter_terms"]		= "Anna hakuehdot:";
$pgv_lang["soundex_search"]		= "- tai hae siten kuin kuvittelet nimen kirjoitettavan (Soundex):";
$pgv_lang["sources"]		= "Lähteet";
$pgv_lang["firstname_search"]		= "Etunimi:";
$pgv_lang["lastname_search"]		= "Sukunimi:";
$pgv_lang["search_place"]		= "Paikka:";
$pgv_lang["search_year"]		= "Vuosi:";
$pgv_lang["no_results"]		= "Hakua vastaavia tuloksia ei löytynyt.";
$pgv_lang["invalid_search_input"] 	= "Anna etunimi, sukunimi tai paikka \\n\\t vuosiluvun lisäksi";
$pgv_lang["search_options"]		= "Hakuvaihtoehdot";
$pgv_lang["search_geds"]		= "Haetaan seuraavista GEDCOM-tiedostoista";
$pgv_lang["search_type"]		= "Hakumenetelmä";
$pgv_lang["search_general"]		= "Yleishaku";
$pgv_lang["search_soundex"]		= "Soundex-haku";
$pgv_lang["search_replace"]			= "Etsi ja korvaa";
$pgv_lang["search_inrecs"]		= "Hae";
$pgv_lang["search_fams"]		= "Perheitä";
$pgv_lang["search_indis"]		= "Henkilöitä";
$pgv_lang["search_sources"]		= "Lähteitä";
$pgv_lang["search_more_chars"]      	= "Anna enemmän kuin yksi merkki";
$pgv_lang["search_soundextype"]	= "Soundex-tyyppi";
$pgv_lang["search_russell"]		= "Russell";
$pgv_lang["search_DM"]		= "Daitch-Mokotoff";
$pgv_lang["search_prtnames"]		= "Henkilöiden <br />tulostettavat nimet";
$pgv_lang["search_prthit"]		= "Löytyneet nimet";
$pgv_lang["search_prtall"]		= "Kaikki nimet";
$pgv_lang["search_tagfilter"]		= "Ohita suodatin";
$pgv_lang["search_tagfon"]		= "Ohita jokin ei-sukututkimuksellinen tieto";
$pgv_lang["search_tagfoff"]		= "Ei";
$pgv_lang["associate"]		= "läheinen";
$pgv_lang["search_asso_label"]	= "Läheiset";
$pgv_lang["search_asso_text"]	= "Näytä sukulaishenkilöt- ja perheet.";
$pgv_lang["results_per_page"]		= "Tuloksia sivulla";
$pgv_lang["search_record"]			= "Koko tietue";
$pgv_lang["search_to"]				= "-";
$pgv_lang["replace_with"]			= "Korvaa tällä:";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]		= "löydettyä lähdettä";
$pgv_lang["titles_found"]		= "Otsikot";
$pgv_lang["find_source"]		= "Hae lähde";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]		= "Tietovarastoluettelo";
$pgv_lang["repos_found"]		= "Löydetty tietovarastoja";
$pgv_lang["find_repository"]		= "Hae tietovarasto";
$pgv_lang["total_repositories"]		= "Tietovarastoja yhteensä";
$pgv_lang["repo_info"]		= "Tietovarastoinformaatiota";
$pgv_lang["delete_repo"]		= "Poista tietovarasto";
$pgv_lang["other_repo_records"]	= "Tietueet, jotka linkittyvät tähän tietovarastoon:";
$pgv_lang["create_repository"]		= "Luo tietovarasto";
$pgv_lang["new_repo_created"]	= "Luotu uusi tietovarasto";
$pgv_lang["paste_rid_into_field"]	= "Liitä seuraava tietovaraston ID editoitaviin kenttiisi viittaukseksi tähän tietovarastoon.";
$pgv_lang["confirm_delete_repo"]	= "Oletko varma, että haluat poistaa tämän tietovaraston GEDCOM-tiedostosta?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Lähdetieto";
$pgv_lang["other_records"]		= "Tähän lähteeseen linkittyvät tietueet:";
$pgv_lang["people"]			= "Henkilöt";
$pgv_lang["families"]		= "Perheet";
$pgv_lang["total_sources"]		= "Kokonaismäärä - Lähteitä";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["building_indi"]		= "Muodostetaan henkilökohtainen ja perhekohtainen indeksi";
$pgv_lang["building_index"] 		= "Muodostetaan indeksiluettelo";
$pgv_lang["invalid_gedformat"]	= "Epäkelpo GEDCOM 5.5 muoto";
$pgv_lang["importing_records"]	= "Tuodaan tietueita tietokantaan";
$pgv_lang["detected_change"]		= "PhpGedView havaitsi muutoksen GEDCOM tiedostossa #GEDCOM#. Indeksitiedostot täytyy nyt päivittää ennen jatkamista.";
$pgv_lang["please_be_patient"]	= "PYYDÄN KÄRSIVÄLLISYYTTÄ";
$pgv_lang["reading_file"]		= "Lukee GEDCOM tiedostoa";
$pgv_lang["flushing"]		= "Tyhjennetään sisältö";
$pgv_lang["found_record"]		= "Löytyi tietue";
$pgv_lang["exec_time"]		= "Esitysaika:";
$pgv_lang["time_limit"]		= "Aikaraja";
$pgv_lang["unable_to_create_index"] 	= "Indeksitiedostoa ei voi luoda. Varmista kirjoitusoikeutesi PhpGedViewDirectoryyn. Oikeudet voidaan palauttaa kunhan indeksitiedostot on kirjoitettu. ";
$pgv_lang["indi_complete"]		= "Henkilökohtainen indeksitiedosto päivitetty";
$pgv_lang["family_complete"]		= "Perhekohtainen indeksitiedosto päivitetty";
$pgv_lang["source_complete"]		= "Lähdeindeksitiedosto päivitetty";
$pgv_lang["tables_exist"]		= "PhpGedView taulut ovat jo olemassa tietokannassa";
$pgv_lang["you_may"]		= "Voit:";
$pgv_lang["drop_tables"]		= "Pudota nykyiset taulukot";
$pgv_lang["import_multiple"]		= "Tuo ja käsittele useampaa GEDCOMia";
$pgv_lang["explain_options"]		= "Jos aiot tuhota <b>kaikkien</b>taulujen rakenteen kaikki tiedot korvautuvat tämän GEDCOM-tiedoston aineistolla.<br /><br />Jos aiot tuoda useampia GEDCOM-tiedostoja ja työstää niitä, PhpGedView korvaa entisen samannimisen aineiston uudella. Tämä vaihtoehto sallii sukututkimusaineistojen vaihtamisen kätevällä tavalla ja helpottaa siirtymistä niiden välillä.<br /><br /><b>Huomaa, että tiedostojen nimissä on eroa pienillä ja isoilla kirjaimilla.</b>Tämä merkitsee, että <b>Test.GED</b> <u>ei</u> ole sama kuin <b>test.ged</b>";
$pgv_lang["path_to_gedcom"] 		= "Kirjoita tiedostopolku GEDCOM-tiedostoosi:";
$pgv_lang["dataset_exists"] 		= "Tämän niminen GEDCOM-tiedosto on jo tuotu tietokantaan ";
$pgv_lang["changes_present"]		= "Tässä GEDCOM-tiedostossa on vielä hyväksymättömiä muutoksia jotka menetetään tuotaessa uusi tiedosto.";
$pgv_lang["empty_dataset"]		= "Haluatko poistaa vanhat tiedot ja korvata ne näillä uusilla?";
$pgv_lang["index_complete"] 		= "Indeksi valmis.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Näpäytä tästä mennäksesi sukupuuhun.";
$pgv_lang["updating_is_dead"]	= "Päivittää \"Kuollut\"-statusta INDI:ssä";
$pgv_lang["import_complete"]		= "Tuonti onnistui";
$pgv_lang["updating_family_names"]	= "Sukunimet päivitetty";
$pgv_lang["processed_for"]		= "Käsitelty tiedostoa";
$pgv_lang["run_tools"]		= "Haluatko käyttää jotakin seuraavista työkaluista GEDCOMiisi ennen sen tuontia:";
$pgv_lang["addmedia"]		= "Lisää mediatyökalu";
$pgv_lang["dateconvert"]		= "Päivämäärän muunnostyökalu";
$pgv_lang["xreftorin"]		= "Muunna XREF ID:t RIN-numeroksi";
$pgv_lang["tools_readme"]		= "Katso työkaluosiota #README.TXT#-tiedostosta lisäohjeita varten.";
$pgv_lang["sec"]			= "s.";
$pgv_lang["bytes_read"]		= "Tavua luettu:";
$pgv_lang["created_remotelinks"]	= "<i>Etälinkki</i>taulukon luonti onnistui.";
$pgv_lang["created_remotelinks_fail"] 	= "<i>Etälinkki</i>taulukon luonti epäonnistui.";
$pgv_lang["created_indis"]		= "<i>Henkilöt</i> taulun luonti onnistui.";
$pgv_lang["created_indis_fail"] 	= "<i>Henkilöt</i> taulun luonti ei onnistunut.";
$pgv_lang["created_fams"]		= "<i>Perheet</i> taulun luonti onnistui.";
$pgv_lang["created_fams_fail"]		= "<i>Perheet</i> taulun luonti ei onnistunut.";
$pgv_lang["created_sources"]		= "<i>Lähteet</i> taulun luonti onnistui.";
$pgv_lang["created_sources_fail"]	= "<i>Lähteet</i> taulun luonti ei onnistunut.";
$pgv_lang["created_other"]		= "<i>Muut</i> taulun luonti onnistui.";
$pgv_lang["created_other_fail"] 	= "<i>Muut</i> taulun luonti ei onnistunut.";
$pgv_lang["created_places"] 		= "<i>Paikat</i> taulun luonti onnistui.";
$pgv_lang["created_places_fail"]	= "<i>Paikat<i> taulun luonti ei onnistunut.";
$pgv_lang["created_placelinks"] 	= "<i>Paikkalinkit</i>-taulu luotiin.";
$pgv_lang["created_placelinks_fail"]	= "<i>Paikkalinkit</i>-taulua ei voitu luoda.";
$pgv_lang["created_media_fail"]	= "<i>Media</i>-taulua ei voitu luoda.";
$pgv_lang["created_media_mapping_fail"] = "<i>Mediamuodostustaulua</i> ei voi luoda.";
$pgv_lang["created_places"] 		= "<i>Paikat</i> taulun luonti onnistui.";
$pgv_lang["import_progress"]		= "Tuonti käynnissä...";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]		= "Perheiden kokonaismäärä";
$pgv_lang["total_indis"]		= "Henkilöiden kokonaismäärä";
$pgv_lang["starts_with"]		= "Alkaa kirjaimella:";
$pgv_lang["person_list"]		= "Henkilöluettelo:";
$pgv_lang["paste_person"]		= "Liitä henkilö";
$pgv_lang["notes_sources_media"]	= "Lisätietoja, lähteitä ja media";
$pgv_lang["notes"]			= "Lisätietoja";
$pgv_lang["ssourcess"]		= "Lähteitä";
$pgv_lang["media"]			= "Media";
$pgv_lang["name_contains"]		= "Nimi sisältää:";
$pgv_lang["filter"]			= "Suodata";
$pgv_lang["find_individual"]		= "Hae henkilön ID";
$pgv_lang["find_familyid"]		= "Hae perheen ID";
$pgv_lang["find_sourceid"]		= "Hae lähde-ID";
$pgv_lang["find_specialchar"]		= "Hae erikoismerkkejä";
$pgv_lang["magnify"]		= "Suurenna";
$pgv_lang["skip_surnames"]		= "Ohita sukunimiluettelo";
$pgv_lang["show_surnames"]		= "Näytä sukunimiluettelo";
$pgv_lang["all"]			= "Kaikki";
$pgv_lang["hidden"]			= "Piiloitettu";
$pgv_lang["confidential"]		= "Luottamuksellinen";
$pgv_lang["alpha_index"]		= "Aakkosellinen hakemisto";
$pgv_lang["name_list"] 		= "Nimiluettelo";
$pgv_lang["firstname_alpha_index"] 	= "Aakkosellinen etunimihakemsito";
$pgv_lang["roots"]		 				= "Juuret";
$pgv_lang["leaves"] 					= "Lehdet";
$pgv_lang["widow"] 					= "Leski";
$pgv_lang["widower"] 				= "Leski";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "Ikä";
$pgv_lang["days"]			= "päivää";
$pgv_lang["months"]		= "kuukautta";
$pgv_lang["years"]			= "vuotta";
$pgv_lang["day1"]			= "päivä";
$pgv_lang["month1"]		= "kuukausi";
$pgv_lang["year1"]			= "vuosi";
$pgv_lang["timeline_title"]		= "PhpGedView aikajana";
$pgv_lang["timeline_chart"]		= "Aikajana";
$pgv_lang["remove_person"]		= "Poista henkilö kaaviosta";
$pgv_lang["show_age"]		= "Näytä ikämerkitsin";
$pgv_lang["add_another"]		= "Lisää uusi henkilö kaavioon:<br />Henkilön ID:";
$pgv_lang["find_id"]			= "Hae ID";
$pgv_lang["show"]			= "Näytä";
$pgv_lang["year"]			= "Vuosi:";
$pgv_lang["timeline_instructions"]	= "Useimmissa uusissa selaimissa laatikoita voi siirtää hiirellä kaaviossa paikasta toiseen.";
$pgv_lang["zoom_out"]		= "Loitonna";
$pgv_lang["timeline_beginYear"] = "Aloitusvuosi";
$pgv_lang["timeline_endYear"] = "Lopetusvuosi";
$pgv_lang["timeline_scrollSpeed"] = "Nopeus";
$pgv_lang["timeline_zoom"] = "Lähennä";
$pgv_lang["timeline_controls"] = "Aikajanaohjaimet";
$pgv_lang["zoom_default"] = "Oletusarvo";
$pgv_lang["zoom_2"]		= "Lähennä 2";
$pgv_lang["zoom_3"]		= "Lähennä 3";
$pgv_lang["include_family"] = "Sisällytä ydinperhe";
$pgv_lang["lifespan_chart"] = "Elinkaarikaavio";
$pgv_lang["zoom_in"]		= "Lähennä";

//-- MONTH NAMES
$pgv_lang["jan"]			= "tammikuu";
$pgv_lang["feb"]			= "helmikuu";
$pgv_lang["mar"]			= "maaliskuu";
$pgv_lang["apr"]			= "huhtikuu";
$pgv_lang["may"]			= "toukokuu";
$pgv_lang["jun"]			= "kesäkuu";
$pgv_lang["jul"]			= "heinäkuu";
$pgv_lang["aug"]			= "elokuu";
$pgv_lang["sep"]			= "syyskuu";
$pgv_lang["oct"]			= "lokakuu";
$pgv_lang["nov"]			= "marraskuu";
$pgv_lang["dec"]			= "joulukuu";
$pgv_lang["abt"]			= "noin";
$pgv_lang["aft"]			= "jälkeen";
$pgv_lang["and"]			= "-";
$pgv_lang["bef"]			= "ennen";
$pgv_lang["bet"]			= "välillä";
$pgv_lang["cal"]			= "laskettu";
$pgv_lang["est"]			= "arviolta";
$pgv_lang["from"]			= "lähtien";
$pgv_lang["int"]			= "tulkittu";
$pgv_lang["to"]			= "saakka";
$pgv_lang["cir"]			= "noin";
$pgv_lang["apx"]			= "noin";

//-- Admin File Messages
$pgv_lang["select_an_option"]		= "Valitse allaolevista vaihtoehdoista:";
$pgv_lang["readme_documentation"]	= "README-dokumentti";
$pgv_lang["view_readme"]		= "Näytä readme.txt-tiedosto";
$pgv_lang["configuration"]		= "Konfigurointi";
$pgv_lang["rebuild_indexes"]		= "Luo uudelleen indeksitiedostot";
$pgv_lang["user_admin"]		= "Käyttäjien hallinta";
$pgv_lang["user_created"]		= "Uusi käyttäjä luotu.";
$pgv_lang["user_create_error"]	= "Käyttäjää ei voida luoda.  Ole hyvä ja yritä uudelleen.";
$pgv_lang["password_mismatch"]	= "Salasana ei täsmää.";
$pgv_lang["enter_username"]		= "Käyttäjätunnus on annettava.";
$pgv_lang["enter_fullname"]		= "Täydellinen nimi on annettava.";
$pgv_lang["enter_password"]		= "Salasana on pakollinen.";
$pgv_lang["confirm_password"]	= "Salasana on toistettava.";
$pgv_lang["update_user"]		= "Päivitä käyttäjä";
$pgv_lang["update_myaccount"]	= "Päivitä käyttäjätilini";
$pgv_lang["save"]			= "Tallenna";
$pgv_lang["delete"]			= "Pyyhi";
$pgv_lang["edit"]			= "Editoi";
$pgv_lang["full_name"]		= "Koko nimi";
$pgv_lang["visibleonline"]		= "Näkyvissä muille käyttäjille online-tilassa.";
$pgv_lang["comment"]		= "Ylläpitäjän kommentit käyttäjästä";
$pgv_lang["comment_exp"]		= "Ylläpitäjän varoitus päivämäärällä ";
$pgv_lang["editaccount"]		= "Salli tämän käyttäjän editoida käyttäjätiliään.";
$pgv_lang["admin_gedcom"]		= "Ylläpito";
$pgv_lang["confirm_user_delete"]	= "Haluatko varmasti poistaa käyttäjän?";
$pgv_lang["create_user"]		= "Luo uusi käyttäjä";
$pgv_lang["no_login"]		= "Sisäänkirjautuminen epäonnistui.";
$pgv_lang["basic_realm"]		= "PhpGedView autentikointijärjestelmä";
$pgv_lang["basic_auth_failure"]	= "Sinun on lisättävä käypä tunnus ja salasana päästäksesi tähän palveluun";
$pgv_lang["basic_auth"]		= "Perustunnistus";
$pgv_lang["digest_auth"]		= "Yhteenveto tunnistuksesta";
$pgv_lang["no_auth_needed"]		= "Ei tunnistusta";
$pgv_lang["import_gedcom"]		= "Tuo tämä GEDCOM-tiedosto";
$pgv_lang["duplicate_username"] 	= "Tämä käyttäjätunnus on jo olemassa. Palaa ja valitse toinen käyttäjätunnus.";
$pgv_lang["gedcomid"]		= "GEDCOM INDI-tietueen ID";
$pgv_lang["enter_gedcomid"] 		= "Sinun on annettava GEDCOM ID.";
$pgv_lang["user_info"]		= "Käyttäjän tiedot";
$pgv_lang["rootid"]			= "Esipolvitaulun lähtöhenkilö";
$pgv_lang["download_gedcom"]	= "Lataa koneesta GEDCOM-tiedosto";
$pgv_lang["upload_gedcom"]		= "Lataa GEDCOM-tiedosto palvelimelle";
$pgv_lang["add_new_gedcom"]	= "Luo uusi GEDCOM-tiedosto";
$pgv_lang["gedcom_file"]		= "GEDCOM-tiedosto:";
$pgv_lang["enter_filename"] 		= "Sinun on annettava GEDCOM tiedostonimi.";
$pgv_lang["file_not_exists"]		= "Annettua tiedostonimeä ei ole.";
$pgv_lang["file_not_present"]		= "Tiedostoa ei löydy.";
$pgv_lang["file_exists"]		= "Tämän niminen GEDCOM-tiedosto on jo olemassa. Anna toinen nimi tai tuhoa vanha tiedosto.";
$pgv_lang["new_gedcom_title"]	= "Sukututkimus [#GEDCOMFILE#]sta";
$pgv_lang["upload_error"]		= "Tiedoston latauksessa tapahtui virhe.";
$pgv_lang["upload_media_help"]	= "Valitse ne tiedostot omalta tietokoneeltasi, jotka haluat ladata palvelimelle. Kaikki tiedostot ladataan hakemistoon <b>#MEDIA_DIRECTORY#</b> tai johonkin sen alihakemistoon.<br /><br />Määrittelemäsi hakemistonimet lisätään  #MEDIA_DIRECTORY#:n perään. Esimerkiksi  #MEDIA_DIRECTORY#myfamily- Mikäli pienoiskuvahakemistoa ei vielä ole olemassa, se luodaan automaattisesti.<br /><br />";
$pgv_lang["upload_gedcom_help"]	= "Valitse GEDCOM- tai ZIP-tieodsto omalta koneeltasi ladataksesi sen palvelimellesi. Tiedosto tallennetaan hakemistoon <b>#INDEX_DIRECTORY#</b>.<br /><br />. Mikäli latasit ZIP-tiedoston, se saa sisältää vain yhden GEDCOM-tiedoston, jota käytetään seuraavissa vaiheissa.<br /><br />";
$pgv_lang["add_gedcom_instructions"]	= "Anna nimi tälle uudelle GEDCOMille. Uusi GEDCOM luodaan indeksihakemistoon:";
$pgv_lang["file_success"]		= "Tiedoston lataus onnistui.";
$pgv_lang["file_too_big"]		= "Ladattava tiedosto on liian suuri.";
$pgv_lang["file_partial"]		= "Tiedosto latautui vain osittain, yritä uudelleen.";
$pgv_lang["file_missing"]		= "Yksikään tiedosto ei latautunut. Yritä uudelleen.";
$pgv_lang["manage_gedcoms"]	= "GEDCOM-tiedostojen hallinta";
$pgv_lang["research_assistant"]	= "Tutkimusavustaja";
$pgv_lang["administration"]		= "Järjestelmänhallinta";
$pgv_lang["ansi_to_utf8"]		= "Muunnetaanko tämä ANSI-koodattu GEDCOM UTF-8 muotoon?";
$pgv_lang["utf8_to_ansi"]		= "Muunnetaanko tämä UTF-8-koodattu GEDCOM ANSI (ISO-8859-1) muotoon?";
$pgv_lang["visitor"]			= "Vierailija";
$pgv_lang["user"]			= "Autentikoitu käyttäjä";
$pgv_lang["gedadmin"]		= "GEDCOM ylläpitäjä";
$pgv_lang["siteadmin"]		= "Palvelun ylläpitäjä";
$pgv_lang["apply_privacy"]		= "Toteuta yksityisyysasetukset?";
$pgv_lang["choose_priv"]		= "Valitse yksityisyystaso:";
$pgv_lang["user_manual"]		= "PhpGegView käyttöopas";
$pgv_lang["upgrade"]		= "Päivitä PhpGedView";
$pgv_lang["view_logs"]		= "Näytä lokitiedot";
$pgv_lang["logfile_content"]		= "Lokitiedoston sisältö";
$pgv_lang["step1"]			= "Vaihe 1/4:";
$pgv_lang["step2"]			= "Vaihe 2/4:";
$pgv_lang["step3"]			= "Vaihe 3/4:";
$pgv_lang["step4"]			= "Vaihe 4/4:";
$pgv_lang["validate_gedcom"]		= "Validoi GEDCOM";
$pgv_lang["img_admin_settings"] 	= "Editoi kuvankäsittelyn asetuksia";
$pgv_lang["download_note"]		= "HUOMAA: Suurten GEDCOM-tiedostojen käsittely saattaa viedä pikän ajan ennen niiden latausta. Jos PHP ilmoittaa ajan loppuneen ennenkuin lataus on viety loppuun saattaa olla, että lataus ei ole täydellinen.<br /><br />Voit tarkastaa ladatun GEDCOM-tiedoston etsimällä rivi <b>0&nbsp;TRLR</b> tiedoston lopusta varmistaaksesi latauksen onnistumisen.<br /><br />Yleensä latausaika saattaa olla yhtä pitkä kuin tuontiaika GEDCOM-tiedostollesi.";
$pgv_lang["pgv_registry"]		= "Näytä muita PhpGedView verkkopaikkoja";
$pgv_lang["verify_upload_instructions"]	= "Jos päätät jatkaa, vanha GEDCOM-tiedosto korvataan lataamallasi tiedostolla ja tuontiprosessi alkaa uudestaa. Jos päätät perua, vanha GEDCOM jää entiselleen.";
$pgv_lang["cancel_upload"]		= "Peru lataus";
$pgv_lang["add_media_records"]	= "Lisää mediatietueita";
$pgv_lang["manage_media_files"]	= "Ylläpidä mediatiedostoja";
$pgv_lang["link_media_records"]	= "Linkitä mediatiedosto henkilöihin";

//-- Relationship chart messages
$pgv_lang["relationship_chart"]	= "Sukulaisuus";
$pgv_lang["person1"]		= "Henkilö 1";
$pgv_lang["person2"]		= "Henkilö 2";
$pgv_lang["no_link_found"]		= "Sukuyhteyttä näiden kahden henkilön välillä ei löydy.";
$pgv_lang["sibling"]			= "Sisarus";
$pgv_lang["follow_spouse"]		= "Tarkista sukulaisuus myös avioliiton kautta.";
$pgv_lang["timeout_error"]		= "Aika loppui - sukulaisuutta ei vielä löytynyt";
$pgv_lang["son"]			= "Poika";
$pgv_lang["daughter"]		= "Tytär";
$pgv_lang["son-in-law"]		= "Käly";
$pgv_lang["daughter-in-law"]		= "Miniä";
$pgv_lang["grandchild"]		= "Lapsenlapsi";
$pgv_lang["grandson"]		= "Pojan-/tyttärenpoika";
$pgv_lang["granddaughter"]		= "Pojan-/tyttärentytär";
$pgv_lang["brother"]			= "Veli";
$pgv_lang["sister"]			= "Sisar";
$pgv_lang["brother-in-law"]		= "Lanko";
$pgv_lang["sister-in-law"]		= "Käly";
$pgv_lang["aunt"]			= "Täti";
$pgv_lang["uncle"]			= "Eno/Setä";
$pgv_lang["firstcousin"]		= "Serkku";
$pgv_lang["femalecousin"]		= "Naispuolinen serkku";
$pgv_lang["malecousin"]		= "Miespuolinen serkku";
$pgv_lang["cousin-in-law"]		= "Puolison serkku";
$pgv_lang["relationship_to_me"]	= "Sukulaisuus minuun";
$pgv_lang["rela_husb"]		= "Sukulaisuus aviomieheen";
$pgv_lang["rela_wife"]		= "Sukulaisuus aviovaimoon";
$pgv_lang["next_path"]		= "Hae toinen reitti";
$pgv_lang["show_path"]		= "Näytä polku";
$pgv_lang["line_up_generations"]	= "Aseta sama sukupolvi riviin";
$pgv_lang["oldest_top"]             	= "Näytä vanhin huipulla";
$pgv_lang["bosa_2"] 				= "poika";
$pgv_lang["bosa_3"] 				= "tytär";
$pgv_lang["check_delete"]		= "Haluatko varmasti poistaa tämän GEDCOM tiedon?";
$pgv_lang["access_denied"]		= "<b>Pääsy kielletty</b><br />Sinulla ei ole oikeutta tähän resurssiin.";
// %1$s replaced by first person, %2$s by the relationship and %3$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] 	= '%1$s - %3$s - %2$s.';
$pgv_lang["relationship_female_1_is_the_2_of_3"] 	= '%1$s - %3$s - %2$s.';

$pgv_lang["mother_in_law"]		= "anoppi";
$pgv_lang["father_in_law"]		= "appi";
$pgv_lang["brother_in_law"]		= "lanko";
$pgv_lang["sister_in_law"]		= "käly";
$pgv_lang["son_in_law"]		= "vävy";
$pgv_lang["daughter_in_law"]		= "miniä";

$pgv_lang["step_son"]		= "poikapuoli";
$pgv_lang["step_daughter"]	    	= "tytärpuoli";

$pgv_lang["n_x_great_grandfather"]	= "isoisä %d. polvessa"; //d+1?
$pgv_lang["n_x_great_grandmother"]	= "isoäiti %d. polvessa"; //d+1?

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 				= "veljenpoika";            // brother's son
$pgv_lang["bosa_brothers_offspring_3"] 				= "veljentytär";           // brother's daughter
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 				= "veljenpojanpoika";       // brother's son's son 
$pgv_lang["bosa_brothers_offspring_5"] 				= "veljenpojantytär";      // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"] 				= "veljentyttärenpoika";   // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"] 				= "veljentyttärentytär";  // brother's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = 'veljenpoika %1$d. polvessa';
$pgv_lang["n_x_brothers_daughter"] = 'veljentytär %1$d. polvessa';
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "sisarenpoika";             // sister's son
$pgv_lang["bosa_sisters_offspring_3"] 				= "sisarentytär";           // sister's daughter
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 				= "sisarenpojanpoika";       // sister's son's son 
$pgv_lang["bosa_sisters_offspring_5"] 				= "sisarenpojantytär";      // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"] 				= "sisarentyttärenpoika";   // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"] 				= "sisarentyttärentytär";  // sister's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = 'sisarenpoika %1$d. polvessa';
$pgv_lang["n_x_sisters_daughter"] = 'sisarentytär %1$d. polvessa';


// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= $pgv_lang["son"];                   // son
$pgv_lang["bosa_3"] 				= $pgv_lang["daughter"];              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "pojanpoika";               // son's son 
$pgv_lang["bosa_5"] 				= "pojantytär";              // son's daughter
$pgv_lang["bosa_6"] 				= "tyttärenpoika";           // daughter's son
$pgv_lang["bosa_7"] 				= "tyttärentytär";          // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "pojanpojanpoika";          // son's son's son   
$pgv_lang["bosa_9"] 				= "pojanpojantytär";         // son's son's daughter
$pgv_lang["bosa_10"] 				= "pojantyttärenpoika";	  // son's daughters son
$pgv_lang["bosa_11"] 				= "pojantyttärentytär";     // son's daughters daughter
$pgv_lang["bosa_12"] 				= "tyttärenpojanpoika";      // daughter's son's son 
$pgv_lang["bosa_13"] 				= "tyttärenpojantytär";     // daughter's son's daughter
$pgv_lang["bosa_14"] 				= "tyttärentyttärenpoika";  // daughter's daughters son
$pgv_lang["bosa_15"] 				= "tyttärentyttärentytär"; // daughter's daughters daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = 'pojanpoika %2$d. polvessa';
$pgv_lang["n_x_granddaughter_from_son"] = 'pojantytär %2$d. polvessa';
$pgv_lang["n_x_grandson_from_daughter"]	  = 'tyttärenpoika %2$d. polvessa';
$pgv_lang["n_x_granddaughter_from_daughter"] = 'tyttärentytär %2$d. polvessa';

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= "setä";            // fathers brother
$pgv_lang["sosa_uncle_3"] 				= "eno";            // mothers brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "isosetä";      // fathers's fathers brother 
$pgv_lang["sosa_uncle_5"] 				= "isosetä";      // fathers mothers brother
$pgv_lang["sosa_uncle_6"] 				= "isoeno";      // mothers fathers brother
$pgv_lang["sosa_uncle_7"] 				= "isoeno";      // mothers mothers brother
// for the general case of uncles of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= 'setä %1$d. polvessa';
$pgv_lang["n_x_maternal_uncle"]	    = 'eno %1$d. polvessa';

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= $pgv_lang["aunt"];            // fathers sister
$pgv_lang["bosa_aunt_3"] 				= $pgv_lang["aunt"];            // mothers sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "isotäti";      // fathers's fathers sister 
$pgv_lang["sosa_aunt_5"] 				= "isotäti";      // fathers mothers sister
$pgv_lang["sosa_aunt_6"] 				= "isotäti";      // mothers fathers sister
$pgv_lang["sosa_aunt_7"] 				= "isotäti";      // mothers mothers sister
// for the general case of aunts of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= 'täti %1$d. polvessa';
$pgv_lang["n_x_maternal_aunt"]	    = 'täti %1$d. polvessa';


$pgv_lang["male_cousin_1"]              	= "serkku";
$pgv_lang["male_cousin_2"]              	= "pikkuserkku";
$pgv_lang["male_cousin_3"]              	= "sokeriserkku";
$pgv_lang["male_cousin_4"]              	= "serkku 4. polvessa";
$pgv_lang["male_cousin_5"]              	= "serkku 5. polvessa";
$pgv_lang["male_cousin_6"]              	= "serkku 6. polvessa";
$pgv_lang["male_cousin_7"]              	= "serkku 7. polvessa";
$pgv_lang["male_cousin_8"]              	= "serkku 8. polvessa";
$pgv_lang["male_cousin_9"]              	= "serkku 9. polvessa";
$pgv_lang["male_cousin_10"]             	= "serkku 10. polvessa";
$pgv_lang["male_cousin_11"]             	= "serkku 11. polvessa";
$pgv_lang["male_cousin_12"]             	= "serkku 12. polvessa";
$pgv_lang["male_cousin_13"]             	= "serkku 13. polvessa";
$pgv_lang["male_cousin_14"]             	= "serkku 14. polvessa";
$pgv_lang["male_cousin_15"]             	= "serkku 15. polvessa";
$pgv_lang["male_cousin_16"]             	= "serkku 16. polvessa";
$pgv_lang["male_cousin_17"]             	= "serkku 17. polvessa";
$pgv_lang["male_cousin_18"]             	= "serkku 18. polvessa";
$pgv_lang["male_cousin_19"]             	= "serkku 19. polvessa";
$pgv_lang["male_cousin_20"]             	= "serkku 20. polvessa";
$pgv_lang["female_cousin_1"]            	= "serkku";
$pgv_lang["female_cousin_2"]            	= "pikkuserkku";
$pgv_lang["female_cousin_3"]            	= "sokeriserkku";
$pgv_lang["female_cousin_4"]              	= "serkku 4. polvessa";
$pgv_lang["female_cousin_5"]              	= "serkku 5. polvessa";
$pgv_lang["female_cousin_6"]              	= "serkku 6. polvessa";
$pgv_lang["female_cousin_7"]              	= "serkku 7. polvessa";
$pgv_lang["female_cousin_8"]              	= "serkku 8. polvessa";
$pgv_lang["female_cousin_9"]              	= "serkku 9. polvessa";
$pgv_lang["female_cousin_10"]             	= "serkku 10. polvessa";
$pgv_lang["female_cousin_11"]             	= "serkku 11. polvessa";
$pgv_lang["female_cousin_12"]             	= "serkku 12. polvessa";
$pgv_lang["female_cousin_13"]             	= "serkku 13. polvessa";
$pgv_lang["female_cousin_14"]             	= "serkku 14. polvessa";
$pgv_lang["female_cousin_15"]             	= "serkku 15. polvessa";
$pgv_lang["female_cousin_16"]             	= "serkku 16. polvessa";
$pgv_lang["female_cousin_17"]             	= "serkku 17. polvessa";
$pgv_lang["female_cousin_18"]             	= "serkku 18. polvessa";
$pgv_lang["female_cousin_19"]             	= "serkku 19. polvessa";
$pgv_lang["female_cousin_20"]             	= "serkku 20. polvessa";

//-- GEDCOM edit utility
$pgv_lang["gedrec_deleted"]		= "GEDCOM tietue poisettu.";
$pgv_lang["gedcom_deleted"]		= "GEDCOM [#GED#] poisto onnistui.";
$pgv_lang["changes_exist"]		= "Tämä GEDCOM on muutettu.";
$pgv_lang["accept_changes"]		= "Hyväksy/Hylkää muutokset";
$pgv_lang["show_changes"]		= "Tämä tietue on muuttunut. Klikkaa, jos haluat nähdä muutokset.";
$pgv_lang["hide_changes"]		= "Klikkaa jos haluat kätkeä muutokset.";
$pgv_lang["review_changes"]		= "Tutki GEDCOM muutokset";
$pgv_lang["undo_successful"]		= "Peruaminen onnistui";
$pgv_lang["undo"]			= "Peru";
$pgv_lang["view_change_diff"]		= "Näytä muutokset";
$pgv_lang["changes_occurred"]	= "Seuraavat muutokset on tehty henkilölle:";
$pgv_lang["find_place"]		= "hae paikka";
$pgv_lang["refresh"]			= "Näytön päivitys";
$pgv_lang["close_window"]		= "Sulje ikkuna";
$pgv_lang["close_window_without_refresh"] = "Sulje ikkuna lataamatta sitä uudelleen";
$pgv_lang["place_contains"]		= "Paikka sisältää:";
$pgv_lang["accept_gedcom"]		= "Päätä hyväksytkö vai hylkäätkö kunkin muutoksen.<br /><br />Hyväksyäksesi kaikki muutokset kerralla, napauta <b>\"Hyväksy kaikki muutokset\"</b> alla olevassa laatikossa.<br />Saadaksesi lisätietoa muutoksesta,<br />napauta <b>\"Katso muutoksen erot\"</b> nähdäksesi vanhan ja uuden  tilanteen eroavuudet,<br /> tai napauta <b>\"Katso GEDCOM tietuetta\"</b> nähdäksesi uuden tilanteen GEDCOM-muodossa.";
$pgv_lang["ged_import"] 		= "Tuonti";
$pgv_lang["now_import"] 		= "Nyt  sinun tulee tuoda GEDCOM tietueet PhpGedView-ohjelmaan napauttamalla 'Tuonti' -linkkiä alla.";
$pgv_lang["add_fact"]		= "Lisää tieto";
$pgv_lang["add"]			= "Lisää";
$pgv_lang["custom_event"]		= "Erikoistapahtuma";
$pgv_lang["update_successful"]	= "Päivitys onnistui.";
$pgv_lang["add_child"]		= "Lisää lapsi";
$pgv_lang["add_child_to_family"]	= "Lisää lapsi perheeseen";
$pgv_lang["add_sibling"]		= "Lisää sisarus";
$pgv_lang["must_provide"]		= "Sinun tulee antaa ";
$pgv_lang["add_son_daughter"]	= "Lisää poika tai tytär";
$pgv_lang["confirm_delete_person"]	= "Haluatko varmasti poistaa henkilön GEDCOM tiedostosta?";
$pgv_lang["delete_person"]		= "Poista tämä henkilö";
$pgv_lang["find_media"]		= "Etsi media";
$pgv_lang["set_link"]		= "Linkitä";
$pgv_lang["add_source_lbl"]		= "Lisää lähde";
$pgv_lang["add_source"]		= "Lisää uusi lähde";
$pgv_lang["add_note_lbl"]		= "Lisää lisätieto";
$pgv_lang["confirm_delete_source"]	= "Haluatko varmasti poistaa lähteen GEDCOM tiedostosta?";
$pgv_lang["add_note"]		= "Lisää uusi lisätieto";
$pgv_lang["add_media_lbl"]		= "Lisää media";
$pgv_lang["add_media"]		= "Lisää uusi media";
$pgv_lang["delete_source"]		= "Poista lähde";
$pgv_lang["add_husb"]		= "Lisää aviomies";
$pgv_lang["add_husb_to_family"]	= "Lisää aviomies perheeseen";
$pgv_lang["add_wife"]		= "Lisää vaimo";
$pgv_lang["add_wife_to_family"]	= "Lisää vaimo perheeseen";
$pgv_lang["find_family"]		= "Hae perhe";
$pgv_lang["find_fam_list"]		= "Hae perheluettelo";
$pgv_lang["add_new_wife"]		= "Lisää uusi puoliso";
$pgv_lang["add_new_husb"]		= "Lisää uusi puoliso";
$pgv_lang["edit_name"]		= "Muuta nimi";
$pgv_lang["delete_name"]		= "Pyyhi nimi";
$pgv_lang["no_temple"]		= "Ei temppeliä - elävä";
$pgv_lang["replace"]		= "Vaihda tietue";
$pgv_lang["append"]		= "Lisää tietue";
$pgv_lang["add_father"]		= "Lisää isä";
$pgv_lang["add_mother"]		= "Lisää äiti";
$pgv_lang["add_obje"]		= "Lisää multimediakohde";
$pgv_lang["no_changes"] 		= "Ei muutoksia tarkasteltavaksi";
$pgv_lang["accept"]			= "Hyväksy";
$pgv_lang["accept_all"]		= "Hyväksy kaikki muutokset";
$pgv_lang["accept_successful"]	= "Hyväksy tiedosto muutokset";
$pgv_lang["edit_raw"]		= "Editoi GEDCOM raakadataa";
$pgv_lang["select_date"]		= "Valitse päivämäärä";
$pgv_lang["create_source"]		= "Luo uusi lähde";
$pgv_lang["new_source_created"] 	= "Uuden lähteen luominen onnistui.";
$pgv_lang["paste_id_into_field"]	= "Liitä seuraava lähteen ID editointikenttiisi viitataksesi tähän lähteeseen.";
$pgv_lang["add_name"]		= "Lisää nimi";
$pgv_lang["privacy_not_granted"]	= "Sinulla ei ole pääsyoikeutta";
$pgv_lang["user_cannot_edit"]		= "Tämä käyttäjätunnus ei voi editoida tätä GEDCOM-tiedostoa.";
$pgv_lang["gedcom_editing_disabled"]	= "Järjestelmävalvoja on estänyt tämän GEDCOM-tiedoston editoinnin.";
$pgv_lang["privacy_prevented_editing"]	= "Yksityisyysasetukset estävät tämän GEDCOM-tiedoston editoinnin.";
$pgv_lang["add_asso"]		= "Lisää uusi läheinen";
$pgv_lang["edit_sex"]		= "Editoi sukupuoli";
$pgv_lang["ged_noshow"]		= "Ylläpito on poistanut tämän sivun käytöstä";
$pgv_lang["bdm"]			= "Syntymät, kuolemat, avioliitot";

//-- calendar.php messages
$pgv_lang["on_this_day"]		= "Tänä päivänä tapahtui...";
$pgv_lang["in_this_month"]		= "Tässä kuussa, historiassa...";
$pgv_lang["in_this_year"]		= "Historialliset tapahtumat vuonna...";
$pgv_lang["year_anniversary"]		= "#year_var#. vuosipäivä";
$pgv_lang["today"]			= "Tänään";
$pgv_lang["day"]			= "Päivä:";
$pgv_lang["month"]			= "Kuukausi:";
$pgv_lang["showcal"]		= "Näytä tapahtumat:";
$pgv_lang["anniversary_calendar"]	= "Vuosipäiväkalenteri";
$pgv_lang["sunday"]		= "Sunnuntai";
$pgv_lang["monday"]		= "Maanantai";
$pgv_lang["tuesday"]		= "Tiistai";
$pgv_lang["wednesday"]		= "Keskiviikko";
$pgv_lang["thursday"]		= "Torstai";
$pgv_lang["friday"]			= "Perjantai";
$pgv_lang["saturday"]		= "Lauantai";
$pgv_lang["viewday"]		= "Näytä päivä";
$pgv_lang["viewmonth"]		= "Näytä kuukausi";
$pgv_lang["viewyear"]		= "Näytä vuosi";
$pgv_lang["all_people"]		= "Kaikki henkilöt";
$pgv_lang["living_only"]		= "Elossa olevat";
$pgv_lang["recent_events"]		= "Viimeiset vuodet (< 100 vuotta)";
$pgv_lang["day_not_set"]		= "Päivää ei ole asetettu";
$pgv_lang["year_error"]             	= "Valitan, päivämääriä ennen 1970 ei tueta";
$pgv_lang["upload"]			= "Lataa palvelimelle";

//-- upload media messages
$pgv_lang["upload_media"]		= "Lataa mediatiedostot palvelimelle";
$pgv_lang["folder"]		 	= "Tiedostokansio";
$pgv_lang["media_file"]		= "Mediasuodatin";
$pgv_lang["thumbnail"]		= "Pienoiskuva";
$pgv_lang["upload_successful"]	= "Koneelle lataaminen onnistui";
$pgv_lang["media_file_deleted"]	= "Media poistettu.";
$pgv_lang["thumbnail_deleted"]	= "Pienoiskuvatiedosto poistettu.";
$pgv_lang["thumbnail_not_deleted"]	= "Pienoiskuvatiedostoa ei voitu poistaa.";
$pgv_lang["media_record_deleted"]	= "Mediatietua #ref# ja linkit poistettu tietokannasta.";
$pgv_lang["media_record_not_deleted"]	= "Mediatietuetta  #xref# ja linkkejä ei voitu poistaa tietokannasta.";
$pgv_lang["record_updated"]		= "Tietue #pid# päivitetty.";
$pgv_lang["record_not_updated"]	= "Tietuette #pid# ei voitu päivittää.";
$pgv_lang["record_removed"]		= "Tietue #xref# poistettu GEDCOM-tiedostosta.";
$pgv_lang["record_not_removed"]	= "Tietuetta #xref# ei voitu poistaa GEDCOM-tiedostotsta.";
$pgv_lang["record_added"]		= "Tietueen #xref# lisäys GEDCOM-tiedostoon onnistui.";
$pgv_lang["record_not_added"]	= "Tietuetta #xref# ei voitu lisätä GEDCOM-tiedostoon.";
$pgv_lang["media_file_not_deleted"]	= "Mediatiedostoa ei voitu poistaa.";
$pgv_lang["media_file_not_moved"]	= "Mediatiedostoa ei voitu siirtää.";
$pgv_lang["media_file_not_renamed"]	= "Mediatiedostoa ei voitu siirtää tai nimetä uudestaan.";

//-- user self registration module
$pgv_lang["lost_password"]		= "Salasana on hukassa?";
$pgv_lang["requestpassword"]		= "Pyydä uusi salasana";
$pgv_lang["no_account_yet"]		= "Ei ole vielä käyttäjätiliä?";
$pgv_lang["requestaccount"]		= "Pyydä uusi käyttäjätili";
$pgv_lang["emailadress"]		= "Sähköpostiosoite:";
$pgv_lang["mandatory"] 		= "*:llä merkitty ovat pakollisia.";

$pgv_lang["mail01_line01"]		= "Hei #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "Olemme saanneet pyynnön kirjautua koneeseen (#SERVER_NAME#) sähköpostiosoiteellasi (#user_email#).";
$pgv_lang["mail01_line03"]		= "Seuraavat tiedot olivat käytössä.";
$pgv_lang["mail01_line04"]		= "Klikkaa allaolevaa linkkiä, täytä tiedot ja varmista tilisi ja sähköpostiosoiteesi.";
$pgv_lang["mail01_line05"]		= "Jos sinä et pyytänyt tätä tietoa, voit pyyhkiä tämän ilmoituksen.";
$pgv_lang["mail01_line06"]		= "Et tule saamaan lisäviestejä tältä järjestelmältä ja tili pyyhitään seitsemän päivän kuluttua jos tätä ei vahvisteta.";
$pgv_lang["mail01_subject"]		= "Kirjoittautumisesi koneella #SERVER_NAME#";

$pgv_lang["mail02_line01"]		= "Hei ylläpitäjä...";
$pgv_lang["mail02_line02"]		= "Uusi käyttäjä rekisteröityi (#SERVER_NAME#)lle";
$pgv_lang["mail02_line03"]		= "Käyttäjä sai sähköpostin jossa on tarpeelliset tiedot joiden avulla hän voi vahvistaa tilinsä.";
$pgv_lang["mail02_line04"]		= "Heti kun käyttäjä on vahvistanut tilin, tulet saamaan sähköposti ilmoituksen jonka mukaan sinun tulee antaa käyttäjälle oikeudet kirjoittautua verkkopaikallesi.";
$pgv_lang["mail02_line04a"]		= "Sinulle ilmoitetaan sähköpostitse, kun tämä käyttäjäehdokas on varmentanut itsensä. Varmennuksen jälkeen käyttäjä voi kirjautua järjestelmään ilman sinun toimenpiteitäsi.";
$pgv_lang["mail02_subject"]		= "Uusi kirjoittautuminen koneella #SERVER_NAME#";

$pgv_lang["hashcode"]		= "Vahvistuskoodi:";
$pgv_lang["thankyou"]		= "Hei #user_fullname# ...<br />Kiitos rekisteröinnistäsi";
$pgv_lang["pls_note06"]		= "Tulet saamaan koodin sähköpostissa osoitteeseen (#user_email#). Käytä viesti tilisi vahvistukseen. Tilisi pyyhitään seitsemän päivän kuluttua jos et vahvista sitä (voit sen jälkeen rekisteröidä tilin uudelleen). Kirjautuminen sivuille vaatii käyttäjätunnuksen ja salasanan.<br /><br />";
$pgv_lang["pls_note06a"] 		= "Lähetämme nyt varmistusviestin osoitteeseen (user_email#). Sinun on varmistettava käyttäjätilipyyntösi noudattamalla viestin ohjeita. Mikäli et varmista tiliäsi seitsemän vuorokauden kuluessa, pyyntösi hylätään automaattisesti. Sen jälkeen sinun on tehtävä uusi anomus.<br /><br />Toimittuasi viestin edellyttämällä tavalla, voit kirjautua järjestelmään. Voidaksesi kirjautua tänne, sinun on tiedettävä käyttäjätunnuksesi ja salasanasi.<br /><br />";

$pgv_lang["registernew"]		= "Uuden käyttäjätilin vahvistus";
$pgv_lang["user_verify"]		= "Käyttäjävahvistus";
$pgv_lang["send"]			= "Lähetä";

$pgv_lang["pls_note07"]		= "Täytä käyttäjätunnus, salasana ja vahvistuskoodi, jonka sait sähköpostissa järjestelmästä, voidaksesi aktivoida tilisi.";
$pgv_lang["pls_note08"]		= "Käyttäjä #user_name# - tiedot on tarkastettu.";

$pgv_lang["mail03_line01"]		= "Hei hallinnoitsija...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# ( #newuser[fullname]# ) on vahvistanut rekisteröintitiedot.";
$pgv_lang["mail03_line03"]		= "Huom! Klikkaa allaolevaa linkkiä, kirjaudu verkkopaikkaan ja anna hänelle lupa kirjautua sivuillesi.";
$pgv_lang["mail03_line03a"]		= "Sinun ei tarvitse tehdä mitään; käyttäjä voi nyt kirjautua.";
$pgv_lang["mail03_subject"]		= "Uusi vahvistus koneella #SERVER_NAME#";

$pgv_lang["pls_note09"]		= "Sinut on tunnistettu rekisteröidyksi käyttäjäksi.";
$pgv_lang["pls_note10"]		= "Ylläpitäjä on saanut ilmoituksen.<br />Heti kun hän on antanut sinulle oikeuden kirjautua, voit kirjautua  käyttäjätunnuksella ja salasanalla.";
$pgv_lang["pls_note10a"]		= "Voit nyt kirjautua järjestelmään käyttäjätunnuksellasi ja salasanallasi.";
$pgv_lang["data_incorrect"]		= "Tiedot eivät ole oikeita!<br />Yritä uudelleen!";
$pgv_lang["user_not_found"]		= "Täyttämiäsi tietoja ei voinut vahvistaa. Yritä uudelleen.";

$pgv_lang["lost_pw_reset"]		= "Pyydä uusi salasana";

$pgv_lang["pls_note11"]		= "Tarvitsemme tilisi käyttäjätunnuksen ja sähköpostiosoiteen jos haluat että muutamme salasanasi.<br /><br />Tulemme lähettämään erikois-URLin sähköpostissa. Se tulee sisältämään tilisi vahvistuskoodin. Vieraile lähetetyssä URLissa ja voit muuttaa verkkopaikan salasanan ja käyttäjätunnuksen. Turvallisuussyistä sinun tulee olla antamatta vahvistuskoodia kenellekkään, ei edes tämän verkkopaikan ylläpitäjälle (emme tule pyytämään sitä).<br /><br />Jos tarvitset tämän verkkopaikan ylläpitäjän apuaan, ota häneen yhteyttä.";
$pgv_lang["enter_email"]		= "Sinun on täytettävä sähköpostiosoite.";

$pgv_lang["mail04_line01"]		= "Hei #user_fullname#...";
$pgv_lang["mail04_line02"]		= "Uusi salasana on pyydetty käyttäjätunnuksellesi!";
$pgv_lang["mail04_line03"]		= "Suosittelu:";
$pgv_lang["mail04_line04"]		= "Klikkaa aihe linkkiä, kirjoitaudu sissään uudella salasanalla ja vaihda salasana niin että tietosuoja säilyy.";
$pgv_lang["mail04_line05"]		= "Kirjauduttuasi, valitse linkki '#pgv_lang[myuserdata]#'  '#pgv_lang[mygedview]#'-valikosta ja täytä salasanakentät vaihtaaksesi salasanasi.";
$pgv_lang["mail04_subject"]		= "Tietopyyntö koneelta #SERVER_NAME#";

$pgv_lang["pwreqinfo"]		= "Hei...<br /><br />Sähköposti, jossa on uusi salasana, on lähetetty osoitteeseen (#user[email]#).<br /><br />Tutki sähköpostitiliäsi parin minuutin kuluttua. Sinun tulisi saada posti siihen mennessä.<br /><br />Suosittelu:<br />Saatuasi sähköpostisi sinun tulee kirjoitautua ja muuttaa salasanasi lisätäksesi tietosuoja kokonaisuutta.";

$pgv_lang["editowndata"]		= "Käyttäjätilini";
$pgv_lang["savedata"]		= "Talleta muutokset";
$pgv_lang["datachanged"]		= "Käyttätiedot muutettu!";
$pgv_lang["datachanged_name"]	= "Sinun on ehkä kirjouduttava uudelleen uudella käyttäjätunnuksellasi.";
$pgv_lang["myuserdata"]		= "Käyttäjätilini";
$pgv_lang["verified"]			= "Käyttäjä on vahvistanut itsensä";
$pgv_lang["verified_by_admin"]	= "Ylläpitäjä on vahvistanut käyttäjän";
$pgv_lang["user_theme"]		= "Teemani";
$pgv_lang["mgv"]			= "OmaGedView";
$pgv_lang["mygedview"]		= "OmaGedView";
$pgv_lang["passwordlength"]		= "Salasanassa pitää olla vähintään 6 merkkiä.";
$pgv_lang["admin_approved"]		= "Hallinnointija on vahvistanut tilisi palvelimella #SERVER_NAME#.";
$pgv_lang["you_may_login"]		= " Voit kirjautua PhpGedView verkkopaikkaan alla olevan linkin avulla.";
$pgv_lang["welcome_text_auth_mode_1"] = "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun</b></center><br />Jokaisella käyttäjällä, jolla on käyttäjätili, on pääsy tänne.<br /><br />Mikäli sinulla on käyttäjätili, voit kirjautua tältä sivulta. Mikäli sinulla ei ole käyttäjätiliä, voit pyytää sellaisen näpäyttämällä alla olevaa  linkkiä.<br /><br />Todennettuaan pyyntösi ylläpitäjä aktivoi käyttäjätilisi. Saat sähköpostiviestin kun pyyntösi on hyväksytty. ";
$pgv_lang["welcome_text_auth_mode_2"] = "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun.</b></center><br />Pääsy näille sivuille on sallittu vain niille käyttäjille, joille on annettu <b>käyttöoikeus</b>.<br /><br />Mikäli sinulla jo on käyttäjätili, voit kirjautua järjestelmään tällä sivulla. Mikäli sinulla ei ole käyttäjätiliä, voit pyytää sellaista näpäyttämällä asianomaista linkkiä tällä sivulla.<br /><br />Varmistuttuaan antamistasi tiedoista ylläpitäjä joko hyväksyy tai hylkää pyyntösi. Tulet saamaan sähköpostiviestin kun pyyntösi on hyväksytty.";
$pgv_lang["welcome_text_auth_mode_3"] = "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun</b></center><br />Pääsy tänne on sallittu ainoastaan <u>sukulaisille</u>.<br /><br />Mikäli sinulla on käyttäjätili voit kirjautua sivustolle. Mikäli sinulla ei vielä ole käyttäjätiliä, voit pyytää sellaista näpäyttämällä asianomaista linkkiä tällä sivulla.<br /><br />Tarkistettuaan tietosi sivun ylläpitäjä joko hyväksyy tai hylkää pyyntösi. Saat sähköpostiviestin kun pyyntösi on hyväksytty.";
$pgv_lang["welcome_text_cust_head"]	= "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun</b></center><br />Pääsy on sallittu käyttäjille, joilla on käyttäjätunnus ja salasana tähän verkkopalveluun.<br />";

//-- mygedview page
$pgv_lang["welcome"]		= "Tervetuloa";
$pgv_lang["upcoming_events"]	= "Tulevia tapahtumia";
$pgv_lang["living_or_all"]		= "Näytä vain elossa olevien henkilöiden tapahtumat?";
$pgv_lang["basic_or_all"]		= "Näytä vain syntymät, kuolemat ja avioliitot?";
$pgv_lang["no_events_living"]		= "Elossa olevien henkilöiden tapahtumia ei ole seuraavien #pgv_lang[global_num1]# päivän aikana.";
$pgv_lang["no_events_living1"]	= "Elossa olevien henkilöiden tapahtumia ei ole huomenna.";
$pgv_lang["no_events_all"]		= "Mitään tapahtumia ei ole seuraavien #pgv_lang[global_num1]# päivän aikana.";
$pgv_lang["no_events_all1"]		= "Mitään tapahtumia ei ole huomenna.";
$pgv_lang["no_events_privacy"]	= "Tapahtumia esiintyy seuraavien #pgv_lang[global_num1]# päivän aikana, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["no_events_privacy1"]	= "Tapahtumia esiintyy huomenna, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["more_events_privacy"]	= "<br />Lisää apahtumia esiintyy seuraavien #pgv_lang[global_num1]# päivän aikana, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["more_events_privacy1"]	= "<br />Lisää tapahtumia esiintyy huomenna, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["none_today_living"]	= "Tänään ei ole elävien henkilöiden tapahtumia.";
$pgv_lang["none_today_all"]		= "Tänään ei ole tapahtumia.";
$pgv_lang["none_today_privacy"]	= "Tapahtumia esiintyy tänään, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["more_today_privacy"]	= "<br />Lisää tapahtumia esiintyy tänään, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["chat"]			= "Rupattelu";
$pgv_lang["users_logged_in"]		= "Sisäänkirjautuneet käyttäjät";
$pgv_lang["anon_user"]		= "1 tuntematon käyttäjä kirjautunut";
$pgv_lang["anon_users"]		= "#pgv_lang[global_num1]# kirjautunutta tuntematonta käyttäjää";
$pgv_lang["login_user"]		= "1 kirjautunut käyttäjä";
$pgv_lang["login_users"]		= "#pgv_lang[global_num1]# kirjautunutta käyttäjää";
$pgv_lang["no_login_users"]		= "Ei kirjautuneita eikä tuntemattomia käyttäjiä";
$pgv_lang["message"]		= "Lähetä viesti";
$pgv_lang["my_messages"]		= "Viestini";
$pgv_lang["date_created"]		= "Luontipäivä:";
$pgv_lang["message_from"]		= "Sähköposti:";
$pgv_lang["message_from_name"]	= "Lähettäjän nimi:";
$pgv_lang["message_to"]		= "Vastaanottaja:";
$pgv_lang["message_subject"]	= "Aihe:";
$pgv_lang["message_body"]		= "Viesti:";
$pgv_lang["no_to_user"]		= "Vastaanottajaa ei annettu. Ei voi jatkaa.";
$pgv_lang["provide_email"]		= "Ilmoita sähköpostiosoitteesi, jotta voimme ottaa yhteyttä vastataksemme viestiisi. Ilman sitä emme voi vastata tiedusteluihisi. Sähköpostiosoitettasi ei tulla käyttämään mihinkään muuhun tarkoitukseen, kuin kysymyksiisi vastaamiseen.";
$pgv_lang["reply"]			= "Vastaa";
$pgv_lang["message_deleted"]	= "Viesti pyyhitty";
$pgv_lang["message_sent"]		= "Viesti lähetetty";
$pgv_lang["reset"]			= "Palauta";
$pgv_lang["site_default"]		= "Sivuston oletusarvo";
$pgv_lang["mygedview_desc"]		= "OmaGedView-sivusi antaa mahdollisuuden pitää luetteloa suosikkihenkilöistäsi, tarkastella tulevia merkkipäiviä ja olla yhteistyössä muiden PhpGedView-käyttäjien kanssa.";
$pgv_lang["no_messages"]		= "Ei viestejä odottamassa. ";
$pgv_lang["clicking_ok"]		= "Klikkaa OK ja uusi ikkuna avautuu, josta voit ottaa yhteyttä henkilöön #user[fullname]#";
$pgv_lang["favorites"]				= "Suosikit";
$pgv_lang["no_favorites"]		= "Et ole valinnus suosikkeja. Lisää henkilö suosikkeihisi etsimällä hänen tietonsa ja klikkaamalla \"Lisää suosikkeihini\" linkkiä tai käytä alla olevaa ID laatikkoa ja lisää henkilö hänen ID numeronsa avulla.";
$pgv_lang["my_favorites"]		= "Suosikkini";
$pgv_lang["add_to_my_favorites"]	= "Lisää suosikkeihini";
$pgv_lang["no_gedcom_favorites"]	= "Toistaiseksi ei ole valittuja suosikkeja. Ylläpitäjä voi lisätä suosikkeja jotka näytetään aloitettaessa.";
$pgv_lang["gedcom_favorites"]	= "Tämän GEDCOM tiedoston suosikit";
$pgv_lang["confirm_fav_remove"]	= "Haluatko varmasti poistaa tämän tietueen suosikeistasi?";
$pgv_lang["invalid_email"]		= "Huom! Anna hyväksyttävä sähköpostiosoite.";
$pgv_lang["enter_subject"]		= "Huom! Anna viestin aihe.";
$pgv_lang["enter_body"]		= "Huom! Muista kirjoittaa myös tekstisi.";
$pgv_lang["confirm_message_delete"]	= "Haluatko varmasti poistaa tämän ilmoituksen? Sitä ei voi palauttaa myöhemmin.";
$pgv_lang["message_email1"]		= "Seuraava viesti on lähetetty PhpGedView käyttäjätilillesi: ";
$pgv_lang["message_email2"]		= "Olet lähettänyt seuraavan ilmoituksen PhpGedView käyttäjätilille: ";
$pgv_lang["message_email3"]		= "Olet lähettänyt seuraavan ilmoituksen PhpGedView hallinnointijalle: ";
$pgv_lang["viewing_url"]		= "Tämä viesti lähetettiin seuraavasta urlistä: ";
$pgv_lang["messaging2_help"]	= "Kun lähetät tämän viestin, saat siitä kopion edellä antamaasi sähköpostiosoitteeseen.";
$pgv_lang["random_picture"]		= "Satunnainen kuva";
$pgv_lang["message_instructions"]	= "<b>Huomaa:</b> Yksityistä tietoa elävistä henkilöistä annetaan ainoastaan sukulaisille ja läheisille ystäville. Sinun on pyydettäessä osoitettava sukulaisuutesi. Toisinaan voivat kuolleidenkin henkilöiden tiedot olla yksityisiä. Näin voi olla siinä tapauksessa, että kyseisestä henkilöstä ei valitettavasti ole riittävästi tietoja käytettävissämme.<br /><br />Ennen kuin esität kysymyksiä, ole hyvä ja tarkista henkilön oikeellisuus päivämääristä, paikoista ja lähisukulaisista. Jos lähetät muutoksia tai lisäyksiä sukutietoihin, niin ilmoitathan myös lähteen, josta tieto on peräisin.<br /><br />";
$pgv_lang["sending_to"]		= "Tämän viestin vastaanottaja on: #TO_USER#";
$pgv_lang["preferred_lang"]	 	= "Suosituskieli tälle vastaanottajalle on: #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "Tämä GEDCOM on luotu ohjelmalla: <b>#SOFTWARE# #VERSION#</b>";
$pgv_lang["gedcom_created_on"]	= "Luontipäivä: <b>#DATE#</b>.";
$pgv_lang["gedcom_created_on2"]	= ", <b>#DATE#</b>";
$pgv_lang["gedcom_stats"]		= "GEDCOM tilastotietoa:";
$pgv_lang["stat_individuals"]		= "Henkilöitä";
$pgv_lang["stat_families"]		= "Perheitä";
$pgv_lang["stat_sources"]		= "Lähteitä";
$pgv_lang["stat_other"]		= "Muita tietueita";
$pgv_lang["stat_earliest_birth"] 	= "Aikaisin syntymävuosi";
$pgv_lang["stat_latest_birth"] 		= "Myöhäisin syntymävuosi";
$pgv_lang["stat_earliest_death"] 	= "Aikaisin kuolinvuosi";
$pgv_lang["stat_latest_death"] 	= "Myöhäisin kuolinvuosi";
$pgv_lang["customize_page"]		= "Muokkaa oma portaalisi";
$pgv_lang["customize_gedcom_page"]	= "Muokkaa GEDCOM portaalia";
$pgv_lang["upcoming_events_block"]	= "Tulevien tapahtumien alue";
$pgv_lang["upcoming_events_descr"]	= "Tulevat tapahtumat-alue aktiivisessa GEDCOM:issa näyttää luettelon 30 seuraavan vuorokauden aikana sattuvista tapahtumista. Käyttäjän OmaGedView sivun alueella luetteloidaan vain elävät henkilöt.GEDCOM tervetuloa-sivulla näytetään kaikki henkilöt.";
$pgv_lang["todays_events_block"]	= "Tänä päivänä alue";
$pgv_lang["todays_events_descr"]	= "Tänä päivänä  omassa historiassasi... alueella on luettelo tämän päivän tapahtumista. Mikäli tapahtumia ei löydy, ei aluetta näytetä. Käyttäjän OmaGedView sivun alueella luetteloidaan vain elävät, GEDCOM tervetuloa-sivulla näytetään kaikki henkilöt.";
$pgv_lang["logged_in_users_block"]	= "Sisäänkirjautuneet-alue";
$pgv_lang["logged_in_users_descr"]	= "Sisäänkirjautuneet-alue näyttää luettelon tällä hetkellä sisäänkirjautuneista käyttäjistä.";
$pgv_lang["user_messages_block"]	= "Käyttäjän viestialue";
$pgv_lang["user_messages_descr"]	= "Käyttäjän viestialue näyttää luettelon aktiiviselle käyttäjälle lähetetyistä viesteistä.";
$pgv_lang["user_favorites_block"]	= "Käyttäjän suosikit-alue";
$pgv_lang["user_favorites_descr"]	= "Käyttäjän suosikit-lalue näyttää luettelon suosituimmista henkilöistä jotta niihin on helppo muodostaa linkki.";
$pgv_lang["welcome_block"]		= "Käyttäjän tervetuloalue";
$pgv_lang["welcome_descr"]		= "Käyttäjän tervetuloalue näyttää sen hetkisen päivämäärän ja kellonajan, pikalinkit käyttäjätietojen muuttamiseksi sekä omaan sukupuuhun ja linkin  josta pääsee muokkaamaan MyGedView-sivua.";
$pgv_lang["random_media_block"]	= "Satunnaisen kuvan alue";
$pgv_lang["random_media_descr"] 	= "Satunnaisen kuvan alue valitsee satunnaisen kuvan tai muun median aktiivisesta GEDCOM-tiedostosta ja näyttää sen.";
$pgv_lang["random_media_persons_or_all"] = "Näytetäänkö ainoastaan henkilöt, tapahtumat vai kaikki?";
$pgv_lang["random_media_persons"]	= "Henkilöt";
$pgv_lang["random_media_events"]	= "Tapahtumat";
$pgv_lang["random_media_events"]	= "Tapahtumat:";
$pgv_lang["gedcom_block"]		= "GEDCOM tervetuloalue";
$pgv_lang["gedcom_descr"]		= "GEDCOM Tervetuloalue toimii samoin kuin Käyttäjän Tervetuloalue toivottamalla kävijä tervetulleeksi sivustolle ja näyttämällä aktiivisen GEDCOM-tiedoston otsikon sekä päivämäärän ja kellonajan.";
$pgv_lang["gedcom_favorites_block"]	= "GEDCOM suosikit-alue";
$pgv_lang["gedcom_favorites_descr"] 	= "GEDCOM Suosikit-alue mahdollistaa ylläpitäjää valitsemaan suosikkihenkilönsä niin, että kävijä helposti löytää heidät. Tällä tavoin voidaan osoittaa sukuhistoriasi tärkeät henkilöt.";
$pgv_lang["gedcom_stats_block"]	= "GEDCOM tilastotietoalue";
$pgv_lang["gedcom_stats_descr"] 	= "GEDCOM tilastotietoalue näyttää kävijälle joitakin GEDCOMia koskevia perustietoja kuten luontipäivämäärän ja montako henkilöä siinä on.";
$pgv_lang["gedcom_stats_show_surnames"] = "Näytä tavalliset sukunimet?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Voit muokata sivua asettelemalla alueita haluamallasi tavalla.<br /><br /> Sivu on jaettu kahteen osastoon: <b>pääosastoon</b> ja <b>oikeanpuoleiseen</p> osastoon. <b>Pääosaston</p> alueet näkyvät suurempina ja sijoittuvat sivun otsakkeen alle. <b>Oikeanpuoleinen</b> osasto alkaa otsakkeen oikealla puolella ja jatkuu alaspäin sivun oikeaa laitaa.<br /><br /> Jokaisella osastolla on oma luettelonsa niistä alueista jotka kirjoitetaan sivulle siinä järjestyksessä kun ne on lueteltu. Voit lisätä, poistaa ja järjestää uudelleen alueita haluamallasi tavalla.<br /><br />Jos jokin alue on tyhjä, täyttävät muut alueet vapaan tila koko sivun leveydeltä.<br /><br />";
$pgv_lang["login_block"]		= "Sisäänkirjautumisalue";
$pgv_lang["login_descr"]		= "Sisäänkirjautumisalue kirjoittaa käyttäjätunnuksen ja salasanan sisäänkirjautumista varten.";
$pgv_lang["theme_select_block"]     	= "Teemanvalinta-alue";
$pgv_lang["theme_select_descr"] 	= "Teemanvalinta-alue näyttää teemavalikon vaikka \"muuta teema\" valinta on poistettu käytöstä.";
$pgv_lang["block_top10_title"]      	= "Yleisimmät sukunimet";
$pgv_lang["block_top10"]            	= "\"10 suosituinta sukunimeä\"-alue";
$pgv_lang["block_top10_descr"]	= "Tämä alue näyttää taulukon tietokannan 10 suosituimmasta sukunimestä.";
$pgv_lang["gedcom_news_block"]	= "GEDCOM uutisalue";
$pgv_lang["gedcom_news_descr"]	= "GEDCOM uutisalue näyttää vierailijalle ylläpitäjän lähettämiä uusia päivityksiä tai artikkeleita. Uutiset on hyvä paikka ilmoittaa päivitetystä GEDCOM tiedostosta tai perhetapaamisista.";
$pgv_lang["gedcom_news_limit"]	= "Rajoita näyttö seuraavasti:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Ei rajoituksia";
$pgv_lang["gedcom_news_limit_date"]	= "Kohteen ikä";
$pgv_lang["gedcom_news_limit_count"]	= "Kohteiden lukumäärä";
$pgv_lang["gedcom_news_flag"]	= "Rajoitus:";
$pgv_lang["gedcom_news_archive"] 	= "Näytä arkisto";
$pgv_lang["user_news_block"]		= "Käyttäjän päiväkirja-alue";
$pgv_lang["user_news_descr"]	= "Käyttäjän päiväkirja-alueella käyttäjä voi ylläpitää päiväkirjaa tai tehdä sinne muistiinpanoja.";
$pgv_lang["my_journal"]		= "Päiväkirjani";
$pgv_lang["no_journal"]		= "Et ole luonnut päiväkirja merkinntöjä.";
$pgv_lang["confirm_journal_delete"]	= "Haluatko varmasti poistaa tämän päiväkirja merkinnän?";
$pgv_lang["add_journal"]		= "Lisää päiväkirja merkintä";
$pgv_lang["gedcom_news"]		= "Uutisia";
$pgv_lang["confirm_news_delete"]	= "Haluatko varmasti poistaa tämän uutisen?";
$pgv_lang["add_news"]		= "Lisää uutisartikkeli";
$pgv_lang["no_news"]		= "Uutisartikkeleita ei ole lähetetty.";
$pgv_lang["edit_news"]		= "Muuta päiväkirja/uutisartikkeli merkintä";
$pgv_lang["enter_title"]		= "Täytä otsikko.";
$pgv_lang["enter_text"]		= "Täytä teksti tähän uutis- tai päiväkirjaartikkeliin. ";
$pgv_lang["news_saved"]		= "Päiväkirja/uutisartikkeli merkintä on säilytetty.";
$pgv_lang["article_text"]		= "Teksti:";
$pgv_lang["main_section"]		= "Pääosaan alueet";
$pgv_lang["right_section"]		= "Oikean osaan alueet";
$pgv_lang["available_blocks"]		= "Käytettävissä olevat alueet";
$pgv_lang["move_up"]		= "Siirrä ylös       ";
$pgv_lang["move_down"]		= "Siirrä alas       ";
$pgv_lang["move_right"]		= "Siirrä oikealle";
$pgv_lang["move_left"]		= "Siirrä vasemmalle";
$pgv_lang["broadcast_all"]		= "Lähetä kaikille käyttäjille";
$pgv_lang["hit_count"]		= "Osumalaskuri:";
$pgv_lang["phpgedview_message"]	= "PhpGedView viesti";
$pgv_lang["reset_default_blocks"]	= "Palauta alkuperäiset alueet";
$pgv_lang["common_surnames"]	= "Yleisimmät sukunimet";
$pgv_lang["default_news_title"]	= "Tervetuloa sukututkimukseesi";
$pgv_lang["default_news_text"]	= "Tätä sukututkimussivustoa käyttää  <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView #VERSION#</a>. Tämä sivu johdattelee tähän sukututkimukseen. Aloittaaksesi tietojen käsittelyn, valitse yksi kaaviomalli kaaviovalikosta, mene henkilöluetteloon tai hae nimi tai paikka.<br /><br />Mikäli sinulla on vaikeuksia käyttää sivustoa, näpäyttämällä Ohje-valikkoa saat tietoa kuinka käyttää parhaillaan katselemaasi sivua. <br /><br />Kiitos kun käyt tällä sivustolla.";
$pgv_lang["recent_changes"]		= "Viimeiset muutokset";
$pgv_lang["recent_changes_block"]	= "Viimeisten muutosten alue";
$pgv_lang["recent_changes_descr"]	= "Viimeisten muutosten alueella luetteloidaan GEDCOM-tiedostoon tehdyt muutokset viimeisen kuukauden aikana. Tämä alue pitää sinut ajan tasalla tehtyjen muutosten suhteen. Muutokset havaitan CHAN-merkitsimen avulla.";
$pgv_lang["recent_changes_none"]	= "<b>Ei muutoksia viimeisen #pgv_lang[global_num1]# päivän aikana.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Muutoksia viimeisten #pgv_lang[global_num1]# päivän aikana</b><br />";
$pgv_lang["show_empty_block"]	= "Tulisiko tämän alueen olla piilossa kun se on tyhjä?";
$pgv_lang["hide_block_warn"]		= "Mikäli piiloitat tyhjän alueen, et voi muuttaa sen konfiguraatiota, ennenkuin se taas tulee näkyviin sisältäessään tietoa.";
$pgv_lang["delete_selected_messages"]	= "Poista merkityt viestit";
$pgv_lang["use_blocks_for_default"]	= "Käytä näitä alueita kaikkien käyttäjien oletusalueasetuksina?";
$pgv_lang["block_not_configure"]	= "Tätä aluetta ei voi konfiguroida.";

$pgv_lang["options"]		= "Asetukset:";
$pgv_lang["inc_languages"]		= " Kielet";
$pgv_lang["config_update_ok"]	= "Konfigurointitiedoston päivitys onnistui.";
$pgv_lang["date_of_entry"]		= "Alkuperäisen lähteen päiväys";

//-- validate GEDCOM
$pgv_lang["performing_validation"]	= "Suoritetaan GEDCOM validointi, valitse tarvittavat vaihtoehdot ja klikkaa \"Siivoa\".";
$pgv_lang["changed_mac"]		= "Havaittu Macintosh rivinpäätös. Muutettiin rivin päätös pelkällä palautuksella palautuksella ja rivinvaihdolla.";
$pgv_lang["changed_places"] 		= "Havaittiin virheellinen paikkakoodi. Korjattu paikkatietueet  vastaamaan GEDCOM 5.5 määrittelyä. Esimerkki GEDCOM-tiedostostasi: ";
$pgv_lang["invalid_dates"]		= "Väärä päivämäärämuoto havaittu, siivouksessa ne muutetaan muotoon DD MMM YYYY (esim. 1 JAN 2004 päivälle 1 tammikuuta 2004).";
$pgv_lang["valid_gedcom"]		= "Hyväksyttävä GEDCOM havaittu. Ei vaadi siivousta.";
$pgv_lang["optional_tools"] 		= "Voit myös ajaa seuraavat työkaluohjelmat ennen tuontia.";
$pgv_lang["optional"]		= "Valinnaiset työkalut";
$pgv_lang["day_before_month"]	= "Päivä ennen kuukautta (DD MM YYYY)";
$pgv_lang["month_before_day"]	= "Kuukausi ennen päivää (MM DD YYYY)";
$pgv_lang["do_not_change"]		= "Älä muuta";
$pgv_lang["change_id"]		= "Muuta henkilö-ID:";
$pgv_lang["example_place"]		= "Esimerkki epäkelvosta paikasta GEDCOM-tiedostossasi:";
$pgv_lang["example_date"]		= "Esimerkki virheellisestä päivämäärämuodosta GEDCOM:issasi:";
$pgv_lang["add_media_tool"] 		= "\"Lisää media\"-työkalu";
$pgv_lang["launch_media_tool"]	= "Näpäytä tästä käynnistääksesi \"Lisää Media\"-työkalu";
$pgv_lang["add_media_descr"]	= "Tämä työkalu lisää media OBJE-merkitsimen GEDCOM:iin. Sulje tämä ikkuna kun olet lopettanut median lisäämisen.";
$pgv_lang["highlighted"]		= "Korostettu kuva";
$pgv_lang["extension"]		= "Päätaosa";
$pgv_lang["order"]			= "Järjestys";
$pgv_lang["inject_media_tool"]		= "Lisää media GEDCOM-tiedostoon";

$pgv_lang["add_media_button"]	= "Lisää media";
$pgv_lang["media_linked"]		= "Tämä mediaobjekti on linkitetty seuraavaan:";
$pgv_lang["media_not_linked"]		= "Tätä mediaobjektia ei ole linkitetty mihinkään GEDCOM-tietueeseen.";
$pgv_lang["phpinfo"]		= "PHP-info";
$pgv_lang["admin_info"]		= "Tiedoksi";
$pgv_lang["admin_geds"]		= "Data- ja GEDCOM-ylläpito";
$pgv_lang["admin_site"]		= "Sivuston ylläpito";
$pgv_lang["relationship_great"]		= "iso";

$pgv_lang["media_table_created"]	= "<i>Media</i>-taulun päivitys onnistui.";
$pgv_lang["click_to_add_media"] 	= "Näpäytä tästä lisätäksesi yllä luetellut mediat GEDCOM-tiedostoon #GEDCOM#";
$pgv_lang["adds_completed"] 		= "Median lisäys GEDCOM-tiedostoon onnistui.";
$pgv_lang["ansi_encoding_detected"] 	= "Havaittiin ANSI tiedostokoodaus. PhpGedView toimii parhaiten, kun tiedostot on koodattu UTF-8-muotoon.";
$pgv_lang["invalid_header"] 		= "Havaittiin rivejä ennen GEDCOM otsikkoa (0 HEAD). Nämä rivit poistetaan siivouksessa.";
$pgv_lang["macfile_detected"]		= "Havaittiin MacIntosh-tiedosto. Siivouksen yhteydessä se muunnetan DOS-tiedostoksi.";
$pgv_lang["place_cleanup_detected"] 	= "Havaittiin virheellistä paikkatiedon koodausta. Tämä on korjattava. Seuraava näyte osoittaa virheellisen paikkatiedon:";
$pgv_lang["cleanup_places"] 		= "Siivoa paikkatiedot";
$pgv_lang["empty_lines_detected"]	= "GEDCOM-tiedostostasi löytyi tyhjiä rivejä. Nämä poistetaan siivouksen yhteydessä.";
$pgv_lang["import_options"]		= "Tuo vaihtoehdot";
$pgv_lang["import_options_help"] 	= "Voit valita lisävaihtoehtoja tuodessasi GEDCOM-tiedoston.";
$pgv_lang["verify_gedcom"]		= "Verifioi GEDCOM-tiedosto";
$pgv_lang["verify_gedcom_help"]	= "Tässä voit valita josko jatkat tämän GEDCOM-tiedoston tuonnin ja latauksen palvelimelle tai keskeytät toiminnon.";
$pgv_lang["import_statistics"]		= "Tuo tilastotiedot";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Tiimalasikaavio";

//-- report engine
$pgv_lang["choose_report"]          	= "Valitse ajettava raportti";
$pgv_lang["enter_report_values"]    	= "Syötä raporttiarvot";
$pgv_lang["selected_report"]        	= "Valittu raportti";
$pgv_lang["run_report"]         		= "Katsele raporttia";
$pgv_lang["select_report"]          	= "Valitse raportti";
$pgv_lang["download_report"]       	= "Talleta raportti";
$pgv_lang["reports"]               		= "Raportit";
$pgv_lang["pdf_reports"]            	= "PDF raportti";
$pgv_lang["html_reports"]           	= "HTML raportti";
$pgv_lang["family_group_report"]    	= "Perheryhmäraportti";
$pgv_lang["page"]                   		= "Sivu";
$pgv_lang["of"]                     		= "/";
$pgv_lang["enter_famid"]            	= "Syötä perhe-ID";
$pgv_lang["show_sources"]           	= "Näytä lähteet?";
$pgv_lang["show_notes"]             	= "Näytä lisätiedot?";
$pgv_lang["show_basic"]             	= "Näytä tyhjät perustapahtumat?";
$pgv_lang["show_photos"]		= "Näytä valokuvat?";
$pgv_lang["relatives_report_ext"]	= "Laajennettu sukulaisraportti";
$pgv_lang["with"]			= "/";
$pgv_lang["on"]			= "-";
$pgv_lang["in"]			= "-";
$pgv_lang["individual_report"]		= "Henkilöraportti";
$pgv_lang["enter_pid"]		= "Syötä henkilö ID";
$pgv_lang["individual_list_report"]	= "Henkilöluetteloraportti";
$pgv_lang["generated_by"]		= "Luontiohjelma: ";
$pgv_lang["list_children"]		= "Luettele kukin lapsi syntymäjärjestyksessä.";
$pgv_lang["birth_report"]		= "Syntymäaika- ja -paikkaraportti";
$pgv_lang["birthplace"]		= "Syntymäpaikka sisältää ";
$pgv_lang["birthdate1"]		= "Syntymäaika-alueen alku";
$pgv_lang["birthdate2"]		= "Syntymäaika-alueen loppu";
$pgv_lang["death_report"]		= "Kuolinpäivä- ja paikkaraportti";
$pgv_lang["deathplace"]		= "Kuolinpaikka sisältää";
$pgv_lang["deathdate1"]		= "Kuolinpäiväalueen alku";
$pgv_lang["deathdate2"]		= "Kuolinpäiväalueen loppu";
$pgv_lang["marr_report"]		= "Avioliittoonvihkimisaika ja -paikkaraportti";
$pgv_lang["marrplace"]		= "Avioliittoonvihkimispaikka sisältää";
$pgv_lang["marrdate1"]		= "Avioliittoonvihkimisajanjakso alkaa";
$pgv_lang["marrdate2"]		= "Avioliittoonvihkimisajanjakso päättyy";
$pgv_lang["deathplace"]		= "Kuolinpäivä sisältää";
$pgv_lang["sort_by"]		= "Lajittele seuraavan mukaan:";
$pgv_lang["cleanup"]		= "Siivoa";
$pgv_lang["skip_cleanup"]		= "Ohita siivous";

//-- CONFIGURE (extra) messgaes for programs patriarch, slklist and statistics
$pgv_lang["dynasty_list"]           	= "Perheiden yleiskuvaus";
$pgv_lang["patriarch_list"]         	= "Patriarkkalista";
$pgv_lang["statistics"]             		= "Tilastot";

//-- Merge Records
$pgv_lang["merge_records"]          	= "Yhdistä tietueita";
$pgv_lang["merge_same"] 		= "Tietueet eivät ole samaa typpiä. Erityyppisiä tietueita ei voi yhdistää.";
$pgv_lang["merge_step1"]		= "Yhdistä - vaihe 1/3 ";
$pgv_lang["merge_step2"]		= "Yhdistä - vaihe 2/3";
$pgv_lang["merge_step3"]		= "Yhdistä - vaihe 3/3";
$pgv_lang["select_gedcom_records"]	= "Valitse kaksi GEDCOM-tietuetta yhdistettäväksi. Tietueiden tulee olla samaa tyyppiä.";
$pgv_lang["merge_to"]		= "Yhdistä ID:een";
$pgv_lang["merge_from"] 		= "Yhdistä ID:stä:";
$pgv_lang["merge_facts_same"]	= "Seuraavat tiedot olivat täsmälleen samanlaiset kummassakin tietueessa ja yhdistetään automaattisesti.";
$pgv_lang["no_matches_found"]	= "Yhtäpitäviä tietoja ei löytynyt.";
$pgv_lang["unmatching_facts"]	= "Seuraavat tiedot eivät ole yhtäpitäviä. Valitse tieto, jonka haluat säilyttää.";
$pgv_lang["record"] 			= "Tietue";
$pgv_lang["adding"] 		= "Lisää";
$pgv_lang["updating_linked"]		= "Päivittää linkitettyä tietuetta";
$pgv_lang["merge_more"] 		= "Yhdistä lisää tietueita.";
$pgv_lang["same_ids"]		= "Kirjoitit saman ID:n. Et voi yhdistää samoja tietueita.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "Esipolvikaavio";
$pgv_lang["gen_ancestry_chart"]     	= "#PEDIGREE_GENERATIONS# Sukupolvet esipolvikaaviossa";
$pgv_lang["chart_style"]    		= "Kaavion tyyli";
$pgv_lang["chart_list"]		= "Luettelo";
$pgv_lang["chart_booklet"]   		= "Kirjanen";
$pgv_lang["show_cousins"]		= "Näytä serkut";

// 1st generation
$pgv_lang["sosa_2"] 		= "Isä";
$pgv_lang["sosa_3"] 		= "Äiti";
// 2nd generation
$pgv_lang["sosa_4"] 		= "Isoisä";
$pgv_lang["sosa_5"] 		= "Isoäiti";
$pgv_lang["sosa_6"] 		= "Isoisä";
$pgv_lang["sosa_7"] 		= "Isoäiti";
// 3rd generation
$pgv_lang["sosa_8"] 		= "Isoisänisä";
$pgv_lang["sosa_9"] 		= "Isoisänäiti";
$pgv_lang["sosa_10"]		= "Isoäidinisä";
$pgv_lang["sosa_11"]		= "Isoäidiniti";
$pgv_lang["sosa_12"]		= "Isoisänisä";
$pgv_lang["sosa_13"]		= "Isoisänäiti";
$pgv_lang["sosa_14"]		= "Isoäidinisä";
$pgv_lang["sosa_15"]		= "Isoäidiniti";
// 4th generation
$pgv_lang["sosa_16"]              		= "N/A";
$pgv_lang["sosa_17"]              		= "N/A";
$pgv_lang["sosa_18"]         		= "N/A";
$pgv_lang["sosa_19"]        	    	= "N/A";
$pgv_lang["sosa_20"]              		= "N/A";
$pgv_lang["sosa_21"]  	            	= "N/A";
$pgv_lang["sosa_22"] 	            	= "N/A";
$pgv_lang["sosa_23"]   	           	= "N/A";
$pgv_lang["sosa_24"]   	           	= "N/A";
$pgv_lang["sosa_25"]     	         	= "N/A";
$pgv_lang["sosa_26"]       	       	= "N/A";
$pgv_lang["sosa_27"]        	      	= "N/A";
$pgv_lang["sosa_28"]         	     	= "N/A";
$pgv_lang["sosa_29"]         	     	= "N/A";
$pgv_lang["sosa_30"]          	    	= "N/A";
$pgv_lang["sosa_31"]          	    	= "N/A";
// 5th generation
$pgv_lang["sosa_32"]          	    	= "N/A";
$pgv_lang["sosa_33"]          	    	= "N/A";
$pgv_lang["sosa_34"]         		= "N/A";
$pgv_lang["sosa_35"]        		= "N/A";
$pgv_lang["sosa_36"]             	 	= "N/A";
$pgv_lang["sosa_37"]        	      	= "N/A";
$pgv_lang["sosa_38"]       	       	= "N/A";
$pgv_lang["sosa_39"]        	      	= "N/A";
$pgv_lang["sosa_40"]         	     	= "N/A";
$pgv_lang["sosa_41"]            	  	= "N/A";
$pgv_lang["sosa_42"]          	    	= "N/A";
$pgv_lang["sosa_43"]         	     	= "N/A";
$pgv_lang["sosa_44"]         	     	= "N/A";
$pgv_lang["sosa_45"]         	     	= "N/A";
$pgv_lang["sosa_46"]         	     	= "N/A";
$pgv_lang["sosa_47"]         	     	= "N/A";
$pgv_lang["sosa_48"]         	     	= "N/A";
$pgv_lang["sosa_49"]        	      	= "N/A";
$pgv_lang["sosa_50"]         		= "N/A";
$pgv_lang["sosa_51"]        		= "N/A";
$pgv_lang["sosa_52"]         	    	= "N/A";
$pgv_lang["sosa_53"]         	     	= "N/A";
$pgv_lang["sosa_54"]        	      	= "N/A";
$pgv_lang["sosa_55"]        	      	= "N/A";
$pgv_lang["sosa_56"]        	      	= "N/A";
$pgv_lang["sosa_57"]        	      	= "N/A";
$pgv_lang["sosa_58"]         	     	= "N/A";
$pgv_lang["sosa_59"]         	    	= "N/A";
$pgv_lang["sosa_60"]          	    	= "N/A";
$pgv_lang["sosa_61"]          	    	= "N/A";
$pgv_lang["sosa_62"]          	    	= "N/A";
$pgv_lang["sosa_63"]       	   	= "N/A";
$pgv_lang["compact_chart"]		= "Kompakti kaavio";

//-- FAN CHART
$pgv_lang["fan_chart"]		= "Viuhkakaavio";
$pgv_lang["gen_fan_chart"]    		= "#PEDIGREE_GENERATIONS# Sukupolviviuhkakaavio";
$pgv_lang["fan_width"]		= "Viuhkakaavion leveys.";
$pgv_lang["gd_library"]       		= "PHP palvelimen virheellinen konfigurointi: vaaditaan GD-kirjastoa  jotta kuvafunktioita voi käyttää.";
$pgv_lang["gd_freetype"]		= "PHP palvelimen virheellinen konfigurointi: vaaditaan Freetype kirjastoa jotta True Type kirjasimia voi käyttää.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]   		= "Kirjasintiedostoa ei löytynyt PHP-palvelimelta.";
$pgv_lang["fanchart_IE"]		= "Selaimesi ei kykene tulostamaan tätä viuhkakaaviota suoraan. Näpäytä kakkospainikkeella, tallenna ja tulosta sitten.";

//-- RSS Feed
$pgv_lang["rss_descr"]		= "Uutiset ja linkit #GEDCOM_TITLE# sivustolta.";
$pgv_lang["rss_logo_descr"]		= "Syötteen toteutti PhpGedView";
$pgv_lang["rss_feeds"]		= "RSS-syötteet";
$pgv_lang["no_feed_title"]		= "Syöte ei ole käytettävissä";
$pgv_lang["no_feed"]		= "Tällä PhpGedView-sivustolla ei ole käytettävissä RSS-syötettä.";
$pgv_lang["feed_login"]		= "Mikäli sinulla on käyttäjätili tälle PhpGedView-sivustolle, voit <a href=\"#AUTH_URL#\">kirjautua</a> palvelimelle käyttäen HTTP-autentikointia nähdäksesi yksityisiä tietoja.";
$pgv_lang["authenticated_feed"]		= "Autentikoitu syöte";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] 		= "Avustaja";
$pgv_lang["attending"] 		= "Avustamassa";
$pgv_lang["best_man"] = "Best man";
$pgv_lang["bridesmaid"] = "Kaaso";
$pgv_lang["buyer"] 			= "Ostaja";
$pgv_lang["circumciser"] 		= "Ympärileikkaaja";
$pgv_lang["civil_registrar"] 		= "Siviilirekisteriviranomainen";
$pgv_lang["friend"] 			= "Ystävä";
$pgv_lang["godfather"] 		= "Kummisetä";
$pgv_lang["godmother"] 		= "Kummitäti";
$pgv_lang["godparent"] 		= "Kummi";
$pgv_lang["informant"] 		= "Tiedon antaja";
$pgv_lang["lodger"] 			= "Asukki";
$pgv_lang["nurse"] 			= "Hoitaja";
$pgv_lang["priest"] 			= "Pappi";
$pgv_lang["rabbi"] 			= "Rabbi";
$pgv_lang["registry_officer"] 		= "Rekisteriviranomainen";
$pgv_lang["seller"] 			= "Myyjä";
$pgv_lang["servant"] 		= "Palvelija";
$pgv_lang["twin"] 			= "Kaksonen";
$pgv_lang["twin_brother"] 		= "Kaksosveli";
$pgv_lang["twin_sister"] 		= "Kaksossisar";
$pgv_lang["witness"] 		= "Todistaja";

//-- statistics utility
$pgv_lang["statutci"]			= "Indeksiä ei voi luoda";
$pgv_lang["statnnames"]         		= "nimien lukumäärä =";
$pgv_lang["statnfam"]           		= "perheiden lukumäärä =";
$pgv_lang["statnfemale"]        		= "naisten lukumäärä =";
$pgv_lang["statnmale"]          		= "miesten lukumäärä =";
$pgv_lang["statvars"]		= "Täytä kuvaajaa varten seuraavat muuttujat";
$pgv_lang["statlxa"]			= "pitkin x-akselia";
$pgv_lang["statlya"]			= "pitkin y-akselia";
$pgv_lang["statlza"]			= "pitkin z-akselia";
$pgv_lang["stat_10_none"]		= "Ei mitään";
$pgv_lang["stat_11_mb"]		= "Syntymäkuukausi";
$pgv_lang["stat_12_md"]		= "Kuolinkuukausi";
$pgv_lang["stat_13_mm"]		= "Avioliittoonvihkimiskuukausi.";
$pgv_lang["stat_14_mb1"]		= "Suhteen ensimmäisen lapsen syntymäkuukausi";
$pgv_lang["stat_15_mm1"]		= "Kuukausi, jolloin solmittiin ensimmäinen avioliitto.";
$pgv_lang["stat_16_mmb"]		= "Kuukausia vihkimisen ja ensimmäisen lapsen välillä.";
$pgv_lang["stat_17_arb"]		= "Ikä suhteessa syntymävuoteen.";
$pgv_lang["stat_18_ard"]		= "Ikä suhteessa kuolinvuoteen.";
$pgv_lang["stat_19_arm"]		= "Ikä avioliittoonvihkimisvuonna.";
$pgv_lang["stat_20_arm1"]		= "Ikä ensimmäisen avioliittoonvihkimisvuoden aikana.";
$pgv_lang["stat_21_nok"]		= "Lasten lukumäärä.";
$pgv_lang["stat_gmx"]		= "Tarkista kuukausien väliarvot.";
$pgv_lang["stat_gax"]		= "Tarkista ikäarvojen väliarvot.";
$pgv_lang["stat_gnx"]		= "Tarkista lukumäärien väliarvot.";
$pgv_lang["stat_200_none"]		= "Kaikki (tai tyhjä)";
$pgv_lang["stat_201_num"]		= "Lukumäärät";
$pgv_lang["stat_202_perc"]		= "Prosenttiosuus";
$pgv_lang["stat_300_none"]		= "Ei mitään";
$pgv_lang["stat_301_mf"]		= "Sukupuoli";
$pgv_lang["stat_302_cgp"]		= " aikajaksoa. Tarkista väliarvot aikajaksoille z-akselilla.";
$pgv_lang["statmess1"]		= "<b>Täytä seuraavat rivit aiempien x- tai y-akselin asetusten mukaisesti</b>";
$pgv_lang["statar_xgp"]		= "Väliarvot aikajaksoille (x-akseli):";
$pgv_lang["statar_xgl"]		= "Väliarvot ikäarvoille (x-akseli):";
$pgv_lang["statar_xgm"]		= "Väliarvot kuukausille (x-akseli):";
$pgv_lang["statar_xga"]		= "Väliarvot lukumäärille (x-akseli):";
$pgv_lang["statar_zgp"]		= "Väliarvot aikajaksoille (z-akseli):";
$pgv_lang["statar_zgp"]		= "Väliarvot aikajaksoille (z-alseli):";
$pgv_lang["statreset"]		= "palauta alkuperäiset arvot";
$pgv_lang["statsubmit"]		= "näytä kuvaaja";
$pgv_lang["statistiek_list"]	= "Tilastokuvaaja";

//-- statisticsplot utility
$pgv_lang["stpl"]			 = "...";
$pgv_lang["stplGDno"]		= "Kuvaajakirjastoa ei ole käytettävissä PHP 4:ssä. Kysy ylläpitäjältä.";
$pgv_lang["stpljpgraphno"]		= "JP grafiikkamodulit eivät ole käytettävissä hakemistossa phpgedview/jpgraph. Hae ne osoitteesta http://www.aditus.nu/jpgraph/jpdownload.php<br /><h3>Asenna ensin JPgraph hakemistoon phpgedview/jpgraph/</h3><br />\";\$pgv_lang[\"stplinfo\"] = \"kuvaajainfo:";
$pgv_lang["stplinfo"]			= "Muuttujat kuvaajalle:";
$pgv_lang["stpltype"]		= "tyyppi:";
$pgv_lang["stplnoim"]		= "ei toteutettu:";
$pgv_lang["stplmf"]			= " / sukupuoli";
$pgv_lang["stplipot"]			= " / aikajaksoa kohti";
$pgv_lang["stplgzas"]		= "z-akselin raja-arvot";
$pgv_lang["stplmonth"]		= "kuukausi";
$pgv_lang["stplnumbers"]		= "lukumäärät";
$pgv_lang["stplage"]		= "ikä";
$pgv_lang["stplperc"]		= "prosenttiosuus";
$pgv_lang["stplnumof"]		= "yhteensä ";   //"Counts ";
$pgv_lang["stplmarrbirth"]		= "kuukausia vihkimisestä ensimmäisen lapsen syntymään";

//-- alive in year
$pgv_lang["alive_in_year"]		= "Elossa vuonna";
$pgv_lang["is_alive_in"]		= "Elossa vuonna ";
$pgv_lang["alive"]			= "Elossa";
$pgv_lang["dead"]			= "Kuollut";
$pgv_lang["maybe"]			= "Ehkä";
$pgv_lang["both_alive"]					= "Molemmat elossa";
$pgv_lang["both_dead"]					= "Molemmat kuolleet";

//-- find media
$pgv_lang["add_directory"]		= "Lisää hakemisto";
$pgv_lang["show_thumbnail"]		= "Näytä pienoiskuvat";
$pgv_lang["image_format"]		= "Kuvaformaatti";
$pgv_lang["media_format"]		= "Mediaformaatti";
$pgv_lang["image_size"]		= "Kuvan mitat";
$pgv_lang["media_file_size"]		= "Median koko";
$pgv_lang["no_thumb_dir"]		= " pienoiskuvahakemistoa ei ole enkä voinut sitä luoda";
$pgv_lang["manage_media"]		= "Ylläpidä mediaa";
$pgv_lang["gen_thumb"]		= "Luo pienoiskuva";
$pgv_lang["move_to"]		= "Siirrä hakemistoon -->";
$pgv_lang["folder_created"]		= "Hakemisto luotu";
$pgv_lang["folder_no_create"]		= "Hakemistoa ei voitu luoda";
$pgv_lang["security_no_create"]	= "Turvallisuusvaroitus tiedostoa index.php ei ole hakemistossa ";
$pgv_lang["security_not_exist"]	= "Turvallisuusvaroitus ei voi luoda tiedostoa index.php hakemistoon ";
$pgv_lang["illegal_chars"]		= "Vääriä merkkejä nimessä";

//-- link media
$pgv_lang["link_media"]		= "Linkitä media";
$pgv_lang["to_person"]		= "henkilöön";
$pgv_lang["to_family"]		= "perheeseen";
$pgv_lang["to_source"]		= "lähteeseen";
$pgv_lang["media_id"]		= "Media ID";
$pgv_lang["invalid_id"]		= "Tätä ID-tunnusta ei ole tässä GEDCOM-tiedostossa.";
$pgv_lang["media_exists"]		= "Mediatiedosto on jo olemassa.";
$pgv_lang["media_thumb_exists"]	= "Median pienoiskuva on jo olemassa.";
$pgv_lang["move_file_success"]	= "Media- ja pienoiskuvatiedostot on poistettu.";
$pgv_lang["media_folder_corrupt"]	= "Mediahakemisto on viallinen.";
$pgv_lang["max_media_depth"]	= "Voit mennä ainoastaan #MEDIA_DIRECTORY_LEVELS# hakemistotasoa alaspäin.";

//-- Help system
$pgv_lang["definitions"]		= "Määritelmiä";

//-- Index_edit
$pgv_lang["description"]		= "Kuvaus";
$pgv_lang["block_desc"]		= "Alueiden kuvaukset";
$pgv_lang["click_here"]		= "Näpäytä tästä jatkaaksesi";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Näpäytä tätä painiketta toteuttaaksesi aiemmin tallentamasi muutokset.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Tässä on lyhyt selostus jokaisesta alueesta, jonka voit sijoittaa #pgv_lang[welcome]#- tai #pgv_lang[mygedview]#-sivulle.<br /><center><table border='1'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table></center><br /><br />";
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]		= "Paikkoja löytyi";
$pgv_lang["media_contains"]		= "Media sisältää:";
$pgv_lang["repo_contains"]		= "Tietovarasto sisältää:";
$pgv_lang["source_contains"]		= "Lähde sisältää:";
$pgv_lang["display_all"]		= "Näytä kaikki";
$pgv_lang["accesskeys"]		= "Näppäinoikotiet";
$pgv_lang["accesskey_skip_to_content"]		= "S";
$pgv_lang["accesskey_search"]		= "S";
$pgv_lang["accesskey_skip_to_content_desc"] 	= "Oikaise sisältöön";
$pgv_lang["accesskey_viewing_advice"]		= "O";
$pgv_lang["accesskey_viewing_advice_desc"] 	= "Katsomisohje";
$pgv_lang["accesskey_home_page"]		= "1";
$pgv_lang["accesskey_help_content"]		= "2";
$pgv_lang["accesskey_help_current_page"] 	= "3";
$pgv_lang["accesskey_contact"]		= "4";
$pgv_lang["accesskey_individual_details"] 	= "I";
$pgv_lang["accesskey_individual_relatives"]	= "R";
$pgv_lang["accesskey_individual_notes"]	= "N";
$pgv_lang["accesskey_individual_sources"]	= "O";
$pgv_lang["accesskey_individual_media"]	= "A";
$pgv_lang["accesskey_individual_research_log"]	= "L";
$pgv_lang["accesskey_individual_pedigree"]	= "P";
$pgv_lang["accesskey_individual_descendancy"]	= "D";
$pgv_lang["accesskey_individual_timeline"]	= "T";
$pgv_lang["accesskey_individual_relation_to_me"]	= "M";
$pgv_lang["accesskey_individual_gedcom"]	= "G";
//clash with rarely used Netscape/Mozilla G
$pgv_lang["accesskey_family_parents_timeline"]	= "P";
$pgv_lang["accesskey_family_children_timeline"]	= "D";
$pgv_lang["accesskey_family_timeline"]		= "T";
$pgv_lang["accesskey_family_gedcom"]		= "G";
$pgv_lang["add_faq_header"] 		= "FAQ-otsikko";
$pgv_lang["add_faq_body"] 		= "FAQ tekstialue";
$pgv_lang["add_faq_order"] 		= "FAQ sijainti";
//clash with rarely used English Netscape/Mozilla English G
$pgv_lang["no_faq_items"] 		= "FAQ-luettelo on tyhjä.";
$pgv_lang["position_item"] 		= "Kohteen asettelu";
$pgv_lang["faq_list"] 		= "FAQ-luettelo";
$pgv_lang["confirm_faq_delete"] 	= "Haluatko varmasti poistaa FAQ-kysymyksen?";
$pgv_lang["preview"] 		=  "Esikatselu";
$pgv_lang["no_id"] 			= "FAQ ID-tunnusta ei ole määritelty!";
$pgv_lang["hs_title"] 		= "Hae ohjetekstistä";
$pgv_lang["hs_search"] 		= "Hae";
$pgv_lang["hs_close"] 		= "Sulje ikkuna";
$pgv_lang["hs_results"] 		= "Tuloksia löytyi:";
$pgv_lang["hs_keyword"] 		= "Hae";
$pgv_lang["hs_searchin"]		= "Hae seuraavasta: ";
$pgv_lang["hs_searchuser"]		= "Käyttäjän ohje";
$pgv_lang["hs_searchconfig"]		= "Ylläpitäjän ohje";
$pgv_lang["hs_searchhow"]		= "Hakutyyppi";
$pgv_lang["hs_searchall"]		= "Kaikki sanat";
$pgv_lang["hs_searchany"]		= "Mikä tahansa sanoista";
$pgv_lang["hs_searchsentence"]	= "Täsmällinen ilmaisu";
$pgv_lang["hs_intruehelp"]		= "Vain ohjetekstistä";
$pgv_lang["hs_inallhelp"]		= "Kaikki tekstit";
$pgv_lang["media_import"] 		= "Tuo ja muunna media";
$pgv_lang["confirm_folder_delete"] 	= "Haluatko varmasti poistaa tämän kansion?";
$pgv_lang["choose"] 		= "Valitse:";
$pgv_lang["account_information"] 	= "Tietoja käyttäjätilistä";
$pgv_lang["TYPE__audio"] 		= "Äänitiedosto";
$pgv_lang["TYPE__book"] 		= "Kirja";
$pgv_lang["TYPE__card"] 		= "Kortti";
$pgv_lang["TYPE__certificate"] 	= "Sertifikaatti";
$pgv_lang["TYPE__document"] 	= "Asiakirja";
$pgv_lang["TYPE__electronic"] 	= "Sähköinen";
$pgv_lang["TYPE__fiche"] 		= "Filmikortti";
$pgv_lang["TYPE__film"] 		= "Mikrofilmi";
$pgv_lang["TYPE__magazine"] 	= "Aikakauslehti";
$pgv_lang["TYPE__manuscript"] 	= "Käsikirjoitus";
$pgv_lang["TYPE__map"] 		= "Kartta";
$pgv_lang["TYPE__newspaper"] 	= "Sanomalehti";
$pgv_lang["TYPE__photo"] 		= "Valokuva";
$pgv_lang["TYPE__tombstone"] 	= "Hautakivi";
$pgv_lang["TYPE__video"] 		= "Video";
$pgv_lang["module_error_unknown_action_v2"] = "Tuntematon toiminto: [action].";
$pgv_lang["module_error_unknown_type"] = "Tuntematon modulimuoto.";
$pgv_lang["TYPE__newspaper"] 	= "Sanomalehti";

$pgv_lang["link_new_husb"]		= "Lisää aviomies käyttäen tiedostossa olevaa henkilöä.";
$pgv_lang["link_new_wife"]		= "Lisää aviovaimo käyttäen tiedostossa olevaa henkilöä.";
$pgv_lang["next_email_sent"]		= "Seuraava sähköpostimuistutus lähetetään ";
$pgv_lang["last_email_sent"]		= "Viimeisin sähköpostimuistutus lähetettiin";
$pgv_lang["confirm_remove"]		= "Haluatko todella poistaa tämän henkilön perheestä?";
$pgv_lang["remove_child"]		= "Poista tämä henkilö perheestä";
$pgv_lang["link_manage_servers"]    	= "Palvelimien ylläpito";
$pgv_lang["indi_is_remote"]		= "Tämän henkilön tiedot on linkitetty toisesta palvelusta.";
$pgv_lang["link_remote"]            	= "Linkitä henkilö toisesta palvelusta";
$pgv_lang["current_person"]         	= "Sama kuin nykyinen";
$pgv_lang["title_remote_link"]      	= "Lisää ulkoinen linkki";
$pgv_lang["title_search_link"]      	= "Lisää paikallinen linkki";
$pgv_lang["label_same_server"]      	= "Sama palvelin";
$pgv_lang["label_diff_server"]      	= "Eri palvelin";
$pgv_lang["label_accept_changes"]   	= "Hyväksy kaikki muutokset";
$pgv_lang["label_ask_first"]        	= "Kysy ensin";
$pgv_lang["label_rel_to_current"]   	= "Sukulaisuus nykyiseen henkilöön";
$pgv_lang["label_location"]         	= "Sijainti";
$pgv_lang["label_site"]             		= "Verkkopalvelu";
$pgv_lang["label_site_url"]         	= "Verkko-osoite (URL)";
$pgv_lang["label_site_url2"]        	= "Verkko-osoite (URL)";
$pgv_lang["label_remote_id"]        	= "Toisen verkkopalvelun henkilön ID-tunnus";
$pgv_lang["label_local_id"]         	= "Henkilön ID-tunnus";
$pgv_lang["label_merge_options"]    	= "Yhdistä vaihtoehdor";
$pgv_lang["label_gedcom_id"]        	= "GEDCOM ID-tunnus";
$pgv_lang["label_gedcom_id2"]       	= "GEDCOM ID-tunnus:";
$pgv_lang["label_add_remote_link"]  	= "Lisää linkki";
$pgv_lang["error_remote"]           	= "Olet valinnut etäpalvelimen";
$pgv_lang["error_same"]             	= "Olet valinnut saman palvelimen.";
$pgv_lang["error_server_exists"]    	= "Palvelin, jonka yrität lisätä, on jo olemassa. Valitse palvelin pudotusvalikosta, joka on merkitty \"Käytä olemassa olevaa palvelinta\"";
$pgv_lang["lbl_server_list"]        	= "Käytä olemassaolevaa verkkopalvelua.";
$pgv_lang["lbl_type_server"]        	= "Lisää uusi verkkopalvelu.";
$pgv_lang["error_url_blank"]		= "Lisää myös joko etäsivuston nimi tai URL.";
$pgv_lang["error_siteauth_failed"]	= "Etäsivustolle kytkeytyminen epäonnistui";
$pgv_lang["link_success"]		= "Linkki lisätty";
$pgv_lang["error_ban_server"]       	= "Hylätäksesi palvelimen se on valittava.";
$pgv_lang["error_view_connections"] 	= "Katsoaksesi palvelimen lin kit, se on valittava.";
$pgv_lang["error_delete_server"]    	= "Poistaaksesi palvelin yllä olevasta luettelosta, se on valitava.";
$pgv_lang["title_manage_servers"]   	= "Palvelimien ylläpito";
$pgv_lang["label_banned_servers"]   	= "Hylätyt palvelimet";
$pgv_lang["label_manual_search_engines"]  = "Merkitse manuaalisesti hakukone IP-osoitteen mukaan";
$pgv_lang["label_search_engine_detected"]  = "Havaittu hakurobotti";
$pgv_lang["label_search_engine_spider"] = "Hakurobotti";
$pgv_lang["label_ban_server"]       	= "Hylkää>>";
$pgv_lang["label_add_search_server"]	= "Lisää IP";
$pgv_lang["remove_ip"] 		= "Poista IP";
$pgv_lang["label_remove_ip"]		= "Kiellä IP-osoite (esim:198.128.*.*)";
$pgv_lang["label_remove_search"]	= "Merkitse IP-osoitteet hakuroboteiksi:";
$pgv_lang["label_username_id"]	= "Käyttäjätunnus";
$pgv_lang["label_username_id2"]	= "Käyttäjätunnus: ";
$pgv_lang["label_password_id"]	= "Salasana";
$pgv_lang["label_password_id2"]	= "Salasana: ";
$pgv_lang["label_ban_view_links"]   	= "Näytä linkit tähän hylättyyn palvelimeen";
$pgv_lang["label_delete"]           	= "Poista";
$pgv_lang["label_new_server"]       	= "Lisää uusi palvelin";
$pgv_lang["label_server_url"]       	= " URL/IP";
$pgv_lang["label_add_server"]       	= "Lisää";
$pgv_lang["label_added_servers"]	= "Lisätty etäpalvelimet";
$pgv_lang["error_url"]              		= "Palvelimella tulee olla URL/IP-osoite.";
$pgv_lang["error_exists_server"]    	= "Palvelin on jo olemassa.";
$pgv_lang["error_view_info"]        	= "Katsoaksesi henkilön tietoja, henkilö on valittava.";
$pgv_lang["error_delete_person"]    	= "Sinun on valittava se henkilö, jonka linkin toiseen verkkopalveluun haluat poistaa.";
$pgv_lang["title_view_conns"]       	= "Näytä yhteydet";
$pgv_lang["label_server_info"]      	= "Kaikki henkilöt, jotka on linkitetty toisen verkkopalvelun kautta:";
$pgv_lang["label_view_local"]       	= "Näytä henkilön tiedot paikallisella palvelimella.";
$pgv_lang["label_view_remote"]      	= "Näytä henkilön tiedot toisella palvelimella.";
$pgv_lang["label_individuals"]      	= " Henkilöt";
$pgv_lang["label_families"]         	= "Perheet";
$pgv_lang["change"]		= "Muuta";
$pgv_lang["change_family_instr"]	= "Tällä sivulla voi muuttaa tai poistaa perheenjäseniä. <br /><br />Jokaselle perheenjäsenelle voit käyttää \"Muuta\"-linkkiä valitsemaan eri  henkilön kyseiseen asemaan perheessä. Henkilön voi myös poistaa perheestä käyttämällä \"Poista\"-linkkiä.<br /><br />Muutosten jälkeen näpäytä \"Tallenna\"-painiketta muutosten tallentamiseksi.<br />";
$pgv_lang["cancel"]			= "Peruuta";
$pgv_lang["cookie_help"]		= "Tämä sivusto käyttää evästeitä seuraamaan sisääkirjautumistilaasi.<br /><br />Et näytä sallineen evästeitä selaimessasi. Sinun on sallittava evästeiden käyttö ennen kuin voit kirjautua. Katso selaimesi aputoiminnoista  (helpistä)miten evästeet sallitaan. ";
$pgv_lang["change_family_members"]	= "Muuta perheenjäseniä";
$pgv_lang["delete_family_confirm"]	= "Perheen poistaminen poistaa kaikki henkilöiden väliset linkit mutta jättää henkilöt paikalleen. Haluatko todella poistaa tämän perheen?";
$pgv_lang["delete_family"]		= "Poista perhe";
$pgv_lang["add_favorite"]		= "Lisää uusi suosikki";
$pgv_lang["url"]			= "URL";
$pgv_lang["add_fav_enter_note"]	= "Kirjoita lisätieto tästä suosikista";
$pgv_lang["add_fav_or_enter_url"]	= "TAI<br /> lisää URL-osoite ja otsikko";
$pgv_lang["add_fav_enter_id"]		= "Lisää henkilö, perhe tai lähde-ID";
$pgv_lang["import_time_exceeded"]	= "Suoritusaikaraja on saavutettu. Näpäytä Jatka-painiketta alla jatkaaksesi GEDCOM-tiedoston tuontia.";
$pgv_lang["user_auto_accept"]	= "Hyväksy automaattisesti tämän käyttäjän tekemät muutokset";
$pgv_lang["edit_source"]		= "Editoi lähdettä";
$pgv_lang["source_menu"]		= "Vaihtoehtoja lähteille";
$pgv_lang["familybook_chart"]		= "Sukukirjakaavio";
$pgv_lang["family_of"]		= "Perhe:  ";
$pgv_lang["descent_steps"]		= "Jälkipolvien lukumäärä";
$pgv_lang["ex-spouse"] 		= "Entinen puoliso";
$pgv_lang["ex-wife"] 		= "Entinen aviovaimo";
$pgv_lang["ex-husband"] 		= "Entinen aviomies";
$pgv_lang["noemail"] 		= "Osoitteet ilman sähköpostiosoitetta";
$pgv_lang["onlyemail"] 		= "Vain osoitteet, joilla sähköpostiosoite";
$pgv_lang["maxviews_exceeded"]	= "Sivun hakumäärä ylittynyt, yritä myöhemmin uudestaan.";
$pgv_lang["broadcast_not_logged_6mo"] = "Lähetä viesti käyttäjille, jotka eivät ole kirjautuneet 6 kuukauteen.";
$pgv_lang["broadcast_never_logged_in"]	 = "Lähetä viesti käyttäjille, jotka eivät koskaan ole kirjautuneet.";
$pgv_lang["stats_to_show"]		= "Valitse tässä lohkossa näytettävät tilastotiedot";
$pgv_lang["stat_avg_age_at_death"]	= "Keskimääräinen ikä kuollessa";
$pgv_lang["stat_longest_life"]		= "Vanhimman henkilön ikä";
$pgv_lang["stat_most_children"]	= "Suurin lapsiluku perheessä";
$pgv_lang["stat_average_children"]	= "Keskimääräinen lapsiluku perheessä";
$pgv_lang["stat_events"]		= "Tapahtumia yhteensä";
$pgv_lang["stat_media"]				= "Mediakohteet";
$pgv_lang["stat_surnames"]		= "Sukunimiä yhteensä";
$pgv_lang["stat_users"]		= "Käyttäjiä yhteensä";
$pgv_lang["no_family_facts"]		= "Ei tietoja tästä perheestä";
$pgv_lang["stat_males"]				= "Miespuolisten henkilöiden lukumäärä";
$pgv_lang["stat_females"]			= "Naispuolisten henkilöiden lukumäärä";
$pgv_lang["sunday_1st"]		= "su";
$pgv_lang["monday_1st"]		= "ma";
$pgv_lang["tuesday_1st"]		= "ti";
$pgv_lang["wednesday_1st"]		= "ke";
$pgv_lang["thursday_1st"]		= "to";
$pgv_lang["friday_1st"]		= "pe";
$pgv_lang["saturday_1st"]		= "la";
$pgv_lang["february_1st"]			= "helmi";
$pgv_lang["march_1st"]				= "maalis";
$pgv_lang["april_1st"]				= "huhti";
$pgv_lang["may_1st"]				= "touko";
$pgv_lang["june_1st"]				= "kesä";
$pgv_lang["july_1st"]				= "heinä";
$pgv_lang["august_1st"]				= "elo";
$pgv_lang["september_1st"]			= "syys";
$pgv_lang["october_1st"]			= "loka";
$pgv_lang["november_1st"]			= "marras";
$pgv_lang["december_1st"]			= "joulu";
$pgv_lang["january_1st"]			= "tammi";

$pgv_lang["record_not_found"]	= "Pyydettyä GEDCOM-tietuetta ei löytynyt. Se voi johtua joko linkistä virheellisen henkilöön tai vikaantuneesta GEDCOM-tiedostosta.";
$pgv_lang["record_marked_deleted"]	= "Tämä tietue on merkitty ylläpitäjän hyväksymisen jälkeen poistettavaksi.";
$pgv_lang["result_page"]		= "Tulossivu";
$pgv_lang["edit_media"]		= "Editoi mediakohdetta";
$pgv_lang["wiki_main_page"]		= "Wiki pääsivu";
$pgv_lang["wiki_users_guide"]		= "Wiki käyttäjän opas";
$pgv_lang["wiki_admin_guide"]	= "Wiki ylläpitäjän opas";
$pgv_lang["no_search_for"]		= "Valitse haettava vaihtoehto.";
$pgv_lang["no_search_site"]		= "Valitse vähintään yksi etäsivusto.";
$pgv_lang["other_searches"]		= "Muita hakuja";
$pgv_lang["multi_site_search"] 	= "Haku usealta sivustolta";
$pgv_lang["search_sites"] 		= "Sivustot, joilta haku suoritetaan";
$pgv_lang["search_sites_discription"] 	= "Hae tunnetuilta sivustoilta";
$pgv_lang["search_asso_text_unavailable"] = "Assosiaatiohaku <br /> ei vielä ole käytettävissä <br /> sivustohaussa.";
$pgv_lang["no_known_servers"]	= "Ei tunnettuja palvelimia<br />Tuloksia ei löydy";
$pgv_lang["basic_search_discription"] 	= "Perushaku sivustolta";
$pgv_lang["advanced_search_discription"] = "Tarkempi haku sivustolta";
$pgv_lang["basic_search"]		= "hae";
$pgv_lang["advanced_search"]	= "Tarkennettu haku sivustolta";
$pgv_lang["name_search"]		= "Nimi:";
$pgv_lang["birthdate_search"]		= "Syntymäaika";
$pgv_lang["birthplace_search"]	= "Syntymäpaikka: ";
$pgv_lang["deathdate_search"]	= "Kuolinaika: ";
$pgv_lang["deathplace_search"]	= "Kuolinpaikka: ";
$pgv_lang["gender_search"]		= "Sukupuoli: ";
$pgv_lang["site_list"]			= "Sivusto: ";
$pgv_lang["site_had"]		= "sisälsi seuraavan";
$pgv_lang["invalid_search_multisite_input"] = "Anna joku seuraavista: nimi, syntymäaika, syntymäpaikka, kuolinaika, kuolinpaikka ja sukupuoli";
$pgv_lang["invalid_search_multisite_input_gender"] = "Hae uudestaan, mutta anna enemmän tietoja pelkästään sukupuolen lisäksi.";
$pgv_lang["birthplace_search"]	= "Syntymäpaikka";

$pgv_lang["page_size"]		= "Sivun koko";
$pgv_lang["link_to_existing_media"]	= "Linkitä olemassaolevaan mediaan";
$pgv_lang["add_media_other_folder"]	= "Toinen hakemisto ... ole hyvä ja kirjoita";
$pgv_lang["add_media_file"]		= "Palvelimella oleva mediatiedosto";
$pgv_lang["descend_report"]		= "Jälkipolviraportti";
$pgv_lang["descendancy_header"]		= "Jälkipolviraportti henkilölle ";
$pgv_lang["main_media_ok1"]		= "Mediatiedoston <b>#GLOBALS[oldMediaName]#</b> nimi muutettu nimeksi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]		= "Mediatiedosto <b>#GLOBALS[oldMediaName]#</b> siirretty hakemistosta <b>#GLOBALS[oldMediaFolder]#</b> hakemistoon <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]		= "Mediatiedosto siirretty ja nimetty uudestaan seuraavasti:</ br>Vanha: <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b></ br>Uusi: <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]		= "Mediatiedostoa <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> ei ole olemassa.";
$pgv_lang["main_media_fail1"]		= "Mediatiedoston nimeä <b>#GLOBALS[oldMediaName]#</b> ei voitu muuttaa nimeksi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]		= "Mediatiedostoa <b>#GLOBALS[oldMediaName]#</b> ei voitu siirtää hakemistosta <b>#GLOBALS[oldMediaFolder]#</b> hakemistoon <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]		= "Mediatiedostoa <b>ei</b> voitu siirtää eikä nimetä uudestaan. Vanha: <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b></ br> Uusi: <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>";
$pgv_lang["thumb_media_ok1"]	= "Pienoiskuva <b>#GLOBALS[oldMediaName]#</b> nimetty uudestaan nimeksi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]	= "Pienoiskuvatiedosto <b>#GLOBALS[oldMediaName]#</b> siirretty hakemistosta <b>#GLOBALS[oldThumbFolder]#</b> hakemistoon <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]	= "Pienoiskuvatiedosto siirretty ja nimetty uudestaan seuraavasti:</ br>Vanha: <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b></ br>Uusi: <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]	= "Pienoiskuvaa <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> ei ole olemassa.";
$pgv_lang["thumb_media_fail1"]	= "Pienoiskuvatiedostoa <b>#GLOBALS[oldMediaName]#</b> ei voitu nimetä uudelleen nimeksi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]	= "Pienoiskuvatiedostoa <b>#GLOBALS[oldMediaName]#</b> ei voituu siirtää hakemistosta <b>#GLOBALS[oldThumbFolder]#</b> hakemistoon <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]	= "Pienoiskuvatiedostoa ei voitu siirtää tai nimetä uudestaan.</ br>Vanha: <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b></ br>Uusi: <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>";
$pgv_lang["server_file"]		= "Tiedoston nimi palvelimella";
$pgv_lang["server_file_advice"]	= "Älä muuta säilyttääksesi vanhan nimen.";
$pgv_lang["server_file_advice2"]	= "Voit lisätä URL-osoitteen laittaen alkuun &laquo;http://&raquo;.";
$pgv_lang["server_folder"]		= "Hakemiston nimi palvelimella";
$pgv_lang["server_folder_advice"]	= "Voit lisätä korkeintaan #GLOBALS[MEDIA_DIRECTORY_LEVELS]# hakemistonimeä &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;:n lisäksi.<br />Älä kirjoita &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;-osuutta kohdehakemiston nimestä.";
$pgv_lang["server_folder_advice2"]	= "Tämä jätetään huomiotta,mikäli olet lisännyt URL-osoitteen tiedostonimikenttään.";
$pgv_lang["add_linkid_advice"]	= "Lisää tai etsi sen henkilön, perheen tai lähteen ID-tunnus, johon tämä media linkitetään.";
$pgv_lang["use_browse_advice"]	= "Käytä &laquo;Selaa&raquo;-painiketta hakeaksesi tiedostoa omalta tietokoneeltasi.";
$pgv_lang["page_x_of_y"]		= "Sivu #GLOBALS[currentPage]# of #GLOBALS[lastPage]#";
$pgv_lang["roman_surn"]				= "Romanisoitu sukunimi";
$pgv_lang["roman_givn"]				= "Romanisoidut etunimet";
$pgv_lang["hebrew_surn"]			= "Heprealainen sukunimi";
$pgv_lang["hebrew_givn"]			= "Heprealaiset etunimet";
$pgv_lang["include"]				= "Sisällytä:";
$pgv_lang["upload_replacement"]		="Lataa korvaus";
$pgv_lang['progress_bars_info']		= "Alla oleva tilapalkki kertoo latauksen edistymisestä. Mikäli aikaraja ylittyy lataaminen keskeytyy ja sinua pyydetään painamaan jatka-painiketta. Mikäli jatka-painiketta ei ole näkyvissä, palaa aiempaan ja anna lyhyempi aikaraja.";
$pgv_lang["clear_chart"]			= "Tyhjennä kaavio";
$pgv_lang["file_information"]		= "Tiedostoinformaatio";
$pgv_lang["choose_file_type"]		= "Valitse tiedostomuoto";
$pgv_lang["add_individual_by_id"]		= "Lisää henkilö ID-tunnuksen avulla";
$pgv_lang["advanced_options"]		= "Lisäasetukset";
$pgv_lang["zip_files"]				= "Zip-tiedosto(t)";
$pgv_lang["include_media"]			= "Sisällytä media (automaattisesti zip-tiedosto)";
$pgv_lang["loading"]				="Ladataan...";

if (file_exists( "languages/lang.fi.extra.php")) require  "languages/lang.fi.extra.php";
?>
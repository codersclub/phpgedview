<?php
/**
 * Serbian Language file for PhpGedView.
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2009 to 2019  PGV Development Team.  All rights reserved.
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
 * @translator Vojin Damjanac
 * @translator Google Translate
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["birth_M"]				= "Rođendan #name#a";		// For male persons
$pgv_lang["birth_F"]				= "Rođendan #name#a";		// For female persons
$pgv_lang["born_in_M"]				= "Rođen je #date# u #place#";		// For male persons
$pgv_lang["born_in_F"]				= "Rođena je #date# u #place#";		// For female persons
$pgv_lang["born_on_M"]				= "Rođen je #date#";		// For male persons
$pgv_lang["born_on_F"]				= "Rođena je #date#";		// For female persons
$pgv_lang["death_M"]				= "Godišnjica smrti #name#a";		// For male persons
$pgv_lang["death_F"]				= "Godišnjica smrti #name#a";		// For female persons
$pgv_lang["died_in_M"]				= "Umrla je #date# u #place#";		// For male persons
$pgv_lang["died_in_F"]				= "Umrla je #date# u #place#";		// For female persons
$pgv_lang["died_on_M"]				= "Umrla je #date#";		// For male persons
$pgv_lang["died_on_F"]				= "Umrla je #date#";		// For female persons
$pgv_lang["anniversary_of"]			= "Vjenčanje godišnjice #husband# i #wife#";
$pgv_lang["married_in"]				= "Oženjen #date# u #place#";
$pgv_lang["married_on"]				= "Oženjen #date#";
$pgv_lang["clustrmaps_locations"]	= "Lokacije posetilaca ove stranice";
$pgv_lang["begins_with"]			= "Počinje sa";
$pgv_lang["contains"]				= "Sadrži";
$pgv_lang["sounds_like"]			= "Zvuči kao";
$pgv_lang["advanced_search"] 		= "Detaljna pretraga";
$pgv_lang["install_step_8"] 		= "Počni";
$pgv_lang["parent_family"]			= "Porodica roditelja";
$pgv_lang["step_parent_family"]		= "Porodica tasta i tašte";
$pgv_lang["immediate_family"]		= "Uža porodica";

$pgv_lang["hide_show_spouses"]		= "pokaži ili sakrij više supruga";
$pgv_lang["interactive_tree"]		= "Interaktivno stablo";
$pgv_lang["example"]				= "Primer:";
$pgv_lang["tree"]					= "Stablo";
$pgv_lang["ellipsis"]				= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]			= "Pokaži nepoznat pol";
$pgv_lang["age_differences"]		= "Pokaži razlike u datumima";
$pgv_lang["differences"]			= "Razlike";
$pgv_lang["genealogy"]					= "geneologija";
$pgv_lang["description"]			= "Opis";
$pgv_lang["name"]					= "Ime";
$pgv_lang["names"]					= "Imena";
$pgv_lang["children"]				= "Deca";
$pgv_lang["lchildren"]				= "deca";
$pgv_lang["child"]					= "Dete";
$pgv_lang["grandchildren"]			= "unučad";
$pgv_lang["family"] 				= "Porodica";
$pgv_lang["as_child"]				= "Porodica roditelja";
$pgv_lang["shared_note_menu"]		= "Opcije za Zajedničku belešku";
$pgv_lang["source_menu"]			= "Opcije za Izvor";
$pgv_lang["search_DM"]				= "Daitch-Mokotoff";
$pgv_lang["search_fams"]			= "Imena porodica";
$pgv_lang["search_indis"]			= "Imena pojedinaca";
$pgv_lang["search_notes"]			= "Zajedničke beleške";
$pgv_lang["search_inrecs"]			= "Traži";
$pgv_lang["search_prtall"]			= "Sva imena";
$pgv_lang["firstname_search"]		= "Lično ime";
$pgv_lang["welcome"]				= "Dobrodošli";
$pgv_lang["son"]					= "Sin";
$pgv_lang["daughter"]				= "Ćerka";
$pgv_lang["welcome_page"]			= "Početna stranica";
$pgv_lang["editowndata"]			= "Moj nalog";
$pgv_lang["loading"]				= "transfer u toku...";

$pgv_lang["ex-wife"] = "Bivša supruga";
$pgv_lang["ex-husband"] = "Bivši muž";
$pgv_lang["stat_avg_age_at_death"]	= "Prosečna starost umrlih";
$pgv_lang["stat_longest_life"]		= "Osoba koja je živela najduže";
$pgv_lang["stat_most_children"]		= "Porodica sa najviše dece";
$pgv_lang["stat_average_children"]	= "Prosečan broj dece po porodici";
$pgv_lang["stat_events"]			= "Ukupno događaja";
$pgv_lang["stat_media"]				= "Multimedijalni objekti";
$pgv_lang["stat_surnames"]			= "Ukupno prezimena";
$pgv_lang["stat_users"]				= "Broj reg. korisnika";
$pgv_lang["no_family_facts"]		= "Nema podataka za ovu porodicu.";
$pgv_lang["stat_males"]				= "Ukupno muškaraca";
$pgv_lang["stat_females"]			= "Ukupno žena";
$pgv_lang["stat_unknown"]			= "Ukupno nepoznatih";

$pgv_lang["sunday_1st"]				= "Ned";
$pgv_lang["monday_1st"]				= "Pon";
$pgv_lang["tuesday_1st"]			= "Uto";
$pgv_lang["wednesday_1st"]			= "Sre";
$pgv_lang["thursday_1st"]			= "Čet";
$pgv_lang["friday_1st"]				= "Pet";
$pgv_lang["saturday_1st"]			= "Sub";

$pgv_lang["jan_1st"]					= "Jan";
$pgv_lang["feb_1st"]					= "Feb";
$pgv_lang["mar_1st"]					= "Mart";
$pgv_lang["apr_1st"]					= "April";
$pgv_lang["may_1st"]					= "Maj";
$pgv_lang["jun_1st"]					= "Jun";
$pgv_lang["jul_1st"]					= "Jul";
$pgv_lang["aug_1st"]					= "Aug";
$pgv_lang["sep_1st"]					= "Sep";
$pgv_lang["oct_1st"]					= "Okt";
$pgv_lang["nov_1st"]					= "Nov";
$pgv_lang["dec_1st"]					= "Dec";
$pgv_lang["edit_source"]			= "Rediguj izvor";
$pgv_lang["edit_shared_note"]		= "Rediguj zajedničku belešku";
$pgv_lang["cancel"]					= "Poništi";
$pgv_lang["delete_family"]			= "Obriši porodicu";
$pgv_lang["add_favorite"]			= "Dodaj novu omiljenu/često posećivanu stranicu";
$pgv_lang["add_fav_enter_note"]		= "Eventualno napravi belešku o ovoj stranici";
$pgv_lang["link_new_husb"]			= "Dodaj supruga od već unesenih osoba";
$pgv_lang["link_new_wife"]			= "Dodaj suprugu od već unesenih osoba";
$pgv_lang["address_list"]			= "Lista adresa";
$pgv_lang["htmlplus_block_gedcom"]	= "Porodično stablo";
$pgv_lang["htmlplus_block_birth"]	= "rođenje";
$pgv_lang["htmlplus_block_death"]	= "smrt";
$pgv_lang["htmlplus_block_marrage"]	= "sklapanje braka";
$pgv_lang["htmlplus_block_adoption"]= "usvojenje";
$pgv_lang["htmlplus_block_burial"]	= "sahrana";
$pgv_lang["before"]					= "pre";
$pgv_lang["after"]					= "posle";
$pgv_lang["config_block"]			= "Konfiguriši";
$pgv_lang["comments"]				= "Primedbe - Komentari";
$pgv_lang["child-family"]			= "Roditelji i deca";
$pgv_lang["spouse-family"]			= "Roditelj i deca";
$pgv_lang["direct-ancestors"]		= "Preci u direktnoj liniji";
$pgv_lang["ancestors"]				= "Preci u direktnoj liniji i njihove porodice";
$pgv_lang["descendants"]			= "Potomci";
$pgv_lang["choose_relatives"]		= "Bliski srodnici";
$pgv_lang["relatives_report"]		= "Pregled srodnika";
$pgv_lang["total_unknown"]			= "Ukupan broj nepoznat";
$pgv_lang["total_living"]			= "Ukupno živih";
$pgv_lang["total_dead"]				= "Ukupno umrlih";
$pgv_lang["total_not_born"]			= "Ukupno nerođenih";
$pgv_lang["fams_with_surname"]		= "Porodice sa prezimenom #surname#";
$pgv_lang["support_contact"]		= "Kontakt za tehničku podršku:";
$pgv_lang["genealogy_contact"]		= "Kontakt za pitanja rodoslova:";
$pgv_lang["fathers_family_with"]	= "Očeva porodica sa";
$pgv_lang["family_with"]			= "Porodica sa:";
$pgv_lang["halfsibling"]			= "Polubraća/polusestre";
$pgv_lang["halfbrother"]			= "Polubrat";
$pgv_lang["halfsister"]				= "Polusestra";
$pgv_lang["family_timeline"]		= "Pokaži porodicu na grafikonu kroz vreme";
$pgv_lang["children_timeline"]		= "Pokaži decu na grafikonu kroz vreme";
$pgv_lang["other"]					= "Ostalo";
$pgv_lang["sort_by_marriage"]		= "Sortiraj po datumu sklapanja braka";
$pgv_lang["reorder_families"]		= "Presortiraj porodice";
$pgv_lang["indis_with_surname"]		= "Pojedinci koji se prezivaju #surname#";
$pgv_lang["first_letter_name"]		= "Izaberi slovo-ime da vidiš porodice čije prezime počinje sa tim slovom.";
$pgv_lang["first_letter_iname"]		= "Izaberi slovo da vidiš porodice čije prezime počinje sa tim slovom.";
$pgv_lang["first_letter_fname"]		= "Izaberi slovo da vidiš porodice ili pojedince čije prezime počinje sa tim slovom.";
$pgv_lang["total_names"]			= "Ukupno prezimena";
$pgv_lang["review_changes_block"]	= "Promene u toku";
$pgv_lang["review_changes_subject"]	= "Rodoslov - Razmotri promene";
$pgv_lang["review_changes_body"]	= "Izvršene su promene u bazi podataka ovog rodoslova ali iste moraju biti odobrene pre nego što ih vide svi korisnici rodoslova. Klikni na link ispod da pristupiš rodoslovu i razmotriš promene.";
$pgv_lang["show_pending"]		= "Pokaži promene u toku";
$pgv_lang["show_spouses"]		= "Pokaži supruge";
$pgv_lang["quick_update_title"] = "Brzo ažuriranje";
$pgv_lang["update_name"] = "Ažuriraj ime";
$pgv_lang["update_fact"] = "Ažuriraj podatak";
$pgv_lang["update_fact_restricted"] = "Ažuriranje ovog podatka nije dozvoljeno:";
$pgv_lang["select_fact"] = "Izaberi podatak...";
$pgv_lang["update_address"] = "Ažuriraj adresu";
$pgv_lang["stepparent"]				= "Očuh/maćeha";
$pgv_lang["stepdad"]				= "Očuh";
$pgv_lang["stepmom"]				= "Maćeha";
$pgv_lang["stepsister"]				= "Polusestra";
$pgv_lang["stepbrother"]			= "Polubrat";
$pgv_lang["fams_charts"]			= "Opcije za ovu porodicu";
$pgv_lang["indis_charts"]			= "Opcije za ovog pojedinca";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"] 					= "?";
$pgv_lang["qm_ah"]					= "?";
$pgv_lang["page_help"]				= "Pomoć";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"] 			= "Prijava korisnika na rodoslov";
$pgv_lang["for_all_contact"]		= "Za tehničku podršku i pitanja u vezi rodoslova kontakt je ";
$pgv_lang["choose_username"]		= "Korisničko ime po želji";
$pgv_lang["username"]				= "Korisničko ime";
$pgv_lang["invalid_username"]		= "Korisničko ime sadrži neprihvatljive simbole";
$pgv_lang["firstname"]				= "Ime";
$pgv_lang["lastname"]				= "Prezime";
$pgv_lang["choose_password"]		= "Lozinka po izboru";
$pgv_lang["password"]				= "Lozinka";
$pgv_lang["confirm"]				= "Ponovi lozinku";
$pgv_lang["login"]					= "Prijava";
$pgv_lang["logout"] 				= "Odjava";
$pgv_lang["admin"]					= "Admin";
$pgv_lang["logged_in_as"]			= "Prijavljen kao ";
$pgv_lang["my_indi"]				= "Moj lični upis";
$pgv_lang["yes"]					= "Da";
$pgv_lang["no"] 					= "Ne";
$pgv_lang["change_theme"]			= "Promeni izgled stranica";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["charts"] 				= "Grafikoni";
$pgv_lang["lists"]					= "Liste";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["birth"]					= "Rođen/a:";
$pgv_lang["death"]					= "Umro/la:";
$pgv_lang["individual_list"]		= "Lista pojedinaca";
$pgv_lang["family_list"]			= "Lista porodica";
$pgv_lang["source_list"]			= "Lista izvora";
$pgv_lang["shared_note_list"]		= "Zajedničke beleške";
$pgv_lang["search"] 				= "Pretraga";
$pgv_lang["clippings_cart"] 		= "Kresanje porodičnog stabla";
$pgv_lang["change_lang"]			= "Promeni jezik";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["male"]					= "Muško";
$pgv_lang["female"] 				= "Žensko";
$pgv_lang["source"] 				= "Izvor";
$pgv_lang["note"]					= "Beleška";
$pgv_lang["NN"] 			= "(nepoznato)";
$pgv_lang["PN"] 			= "(nepoznato)";
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
$pgv_lang["NNother"] 		= "(nepoznato)";
$pgv_lang["PNother"] 		= "(nepoznato)";
$pgv_lang["indi_info"]				= "Podaci za pojedinca ";
$pgv_lang["individual"]				= "Pojedinac";
$pgv_lang["as_spouse"]				= "Porodica sa suprugom";
$pgv_lang["given_name"] 			= "Lično ime:";
$pgv_lang["surname"]				= "Prezime:";
$pgv_lang["sex"]					= "Pol";
$pgv_lang["personal_facts"] 		= "Lični podaci";
$pgv_lang["parents"]				= "Roditelji:";
$pgv_lang["gparents"]				= "Dede i babe";
$pgv_lang["siblings"]				= "Braća i sestre";
$pgv_lang["father"] 				= "Otac";
$pgv_lang["mother"] 				= "Majka";
$pgv_lang["parent"] 				= "Roditelj";
$pgv_lang["relatives"]				= "Bliski srodnici";
$pgv_lang["relatives_events"]		= "Događaji bliže rodbine";
$pgv_lang["surnames"]				= "Prezimena";
$pgv_lang["adopted"]				= "Usvojen";
$pgv_lang["foster"] 				= "Hranioc";
$pgv_lang["stillborn"]				= "Mrtvorođenče";
$pgv_lang["deceased"]				= "Preminuo";
$pgv_lang["link_as_wife"]			= "Dadaj ovu osobu kao suprugu u već upisanu porodicu ";
$pgv_lang["no_tab5"]				= "Ova osoba nema bliskih srodnika";
$pgv_lang["show_fact_sources"]		= "Vidi sve izvore";
$pgv_lang["show_fact_notes"]		= "Vidi sve beleške";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]			= "Informacije o porodici";
$pgv_lang["family_group_info"]		= "Grupirani podaci za porodicu";
$pgv_lang["husband"]				= "Suprug";
$pgv_lang["wife"]					= "Supruga";
$pgv_lang["marriage"]				= "Sklapanje braka:";
$pgv_lang["no_children"]			= "Nema upisane dece";
$pgv_lang["known_children"]			= "deca";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]				= "Kresanje stabla ";
$pgv_lang["name_description"]		= "Ime / Opis";

//-- PLACELIST FILE MESSAGES
$pgv_lang["unknown"]				= "nepoznato";
$pgv_lang["individuals"]			= "Pojedinci";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["media_found"]			= "Pronađeni su medijski objekti";
$pgv_lang["view_person"]			= "Pogledaj upis osobe";
$pgv_lang["view_family"]			= "Pogledaj upis porodice";
$pgv_lang["view_source"]			= "Pogledaj izvor";
$pgv_lang["view_object"]			= "Viev Objekt";
$pgv_lang["first_page"]				= "Prva strana";
$pgv_lang["previous_page"]			= "Prethodna strana";
$pgv_lang["next_page"]				= "Sledeća strana";
$pgv_lang["last_page"]				= "Poslednja strana";
$pgv_lang["next_image"]				= "Sledeća slika";
$pgv_lang["record_updated"]			= "Upis #pid# uspešno ažuriran.";

//-- SEARCH FILE MESSAGES
$pgv_lang["sources"]				= "Izvori";
$pgv_lang["shared_notes"]			= "Zajedničke beleške";
$pgv_lang["lastname_search"]		= "Prezime";
$pgv_lang["search_place"]			= "Mesto";
$pgv_lang["search_year"]			= "Godina";
$pgv_lang["search_sources"]			= "Izvori";
$pgv_lang["search_shared_notes"]	= "Zajedničke beleške";

//-- SOURCELIST FILE MESSAGES

//-- REPOLIST FILE MESSAGES

//-- SOURCE FILE MESSAGES

//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"]				= "Zajednička beleška";
$pgv_lang["shared_notes_found"]			= "Pronađeno zajedničkih beležaka";
$pgv_lang["find_shared_note"]			= "Nađi zajedničku belešku";
$pgv_lang["total_shared_notes"]			= "Ukupan broj zajedničkih beleški";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]		= "Neupotrebljiv GEDCOM format";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"] 			= "Ukupno porodica";
$pgv_lang["total_indis"]			= "Ukupno pojedinaca";
$pgv_lang["notes"]					= "Beleške";
$pgv_lang["ssourcess"]				= "Izvori";
$pgv_lang["name_contains"]			= "Ime sadrži:";
$pgv_lang["filter"] 				= "Filter";
$pgv_lang["apply_filter"]			= "Primeni filter";
$pgv_lang["skip_surnames"]			= "Preskoči listu prezimena";
$pgv_lang["show_surnames"]			= "pokaži listu prezimena";
$pgv_lang["all"]					= "SVE";
$pgv_lang["name_list"] 				= "Lista imena";
$pgv_lang["widow"] 					= "Udovac";
$pgv_lang["widower"] 				= "Udovica";
$pgv_lang["show_parents"] 			= "Pokaži roditelje";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]					= "Starost";
$pgv_lang["husb_age"]				= "Starost supruga";
$pgv_lang["wife_age"]				= "Starost supruge";
$pgv_lang["year1"]					= "godina";
$pgv_lang["years2"]					= "god";	// 2 god";
$pgv_lang["years"]					= "god";	// >2 god";
$pgv_lang["month1"]					= "mesec";

// calendar conversion options

// some religious dates

// am/pm suffixes for 12 hour clocks

//-- MONTH NAMES
$pgv_lang["jan"]		= "januar";
$pgv_lang["feb"]		= "februar";
$pgv_lang["mar"]		= "mart";
$pgv_lang["apr"]		= "april";
$pgv_lang["may"]		= "maj";
$pgv_lang["jun"]		= "june";
$pgv_lang["jul"]		= "jul";
$pgv_lang["aug"]		= "august";
$pgv_lang["sep"]		= "septembar";
$pgv_lang["oct"]		= "oktobar";
$pgv_lang["nov"]		= "novembar";
$pgv_lang["dec"]		= "decembar";

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

$pgv_lang["b.c."]         = "B.C.";

$pgv_lang["abt"]		= "o";
$pgv_lang["aft"]		= "posle";
$pgv_lang["and"]		= "i";
$pgv_lang["bef"]		= "pre";
$pgv_lang["bet"]		= "između";
$pgv_lang["cal"]		= "izvedeno";
$pgv_lang["from"]		= "od";
$pgv_lang["to"]			= "do";
$pgv_lang["cir"]		= "oko";
$pgv_lang["apx"]		= "približno";

//-- Admin File Messages
$pgv_lang["password_mismatch"]		= "Lozinke nisu identične.";
$pgv_lang["edit"]					= "Rediguj";
$pgv_lang["basic_auth_failure"]		= "Morate ukucati tačno korisničko ime i lozinku da pristupite";
$pgv_lang["research_assistant"]		= "Pomoć u istraživanju";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Pogledaj detalje za ...";

$pgv_lang["brother"]				= "Brat";
$pgv_lang["sister"] 				= "Sestra";
$pgv_lang["daughter_in_law"]		= "Snajka";
$pgv_lang["add"]					= "Dodaj";
$pgv_lang["delete_person"]			= "Obriši ovu osobu";
$pgv_lang["delete_shared_note"]		= "Obriši ovu Zajedničku belešku";
$pgv_lang["confirm_delete_source"]	= "Da li stvarno želiš da obrišeš ovaj Izvor?";
$pgv_lang["confirm_delete_shared_note"]		= "Da li stvarno želiš da obrišeš ovu Zajedničku belešku?";
$pgv_lang["find_family"]			= "Pronađi porodicu";
$pgv_lang["find_fam_list"]			= "Pronađi listu porodica";
$pgv_lang["edit_name"]				= "Rediguj ime";
$pgv_lang["delete_name"]			= "Obriši ime ";
$pgv_lang["select_date"]			= "Izaberi datum";
$pgv_lang["user_cannot_edit"]		= "Korisnik nemože redigovati ovaj GEDCOM";
$pgv_lang["gedcom_editing_disabled"]	= "Administrator ne dozvoljava redigovanje ovog GEDCOM-a";
$pgv_lang["on_this_day"]			= "Na današnji dan ...";
$pgv_lang["today"]					= "Danas";
$pgv_lang["anniversary"]			= "Godišnjica";
$pgv_lang["anniversary_calendar"]	= "Kalendar godišnjica";
$pgv_lang["lost_password"]			= "Izgubili ste lozinku?";
$pgv_lang["requestpassword"]		= "Zahtevajte novu lozinku";
$pgv_lang["no_account_yet"] 		= "Nemate nalog?";
$pgv_lang["requestaccount"] 		= "Zahtevajte novi nalog";
$pgv_lang["emailadress"]			= "Email adresa";
$pgv_lang["send"]					= "Pošalji";
$pgv_lang["lost_pw_reset"]			= "Zahtev za novu lozinku";
$pgv_lang["myuserdata"] 			= "Moj nalog";
$pgv_lang["mgv"]					= "Moj portal";
$pgv_lang["mygedview"]				= "Moj portal";
$pgv_lang["passwordlength"] 		= "Lozinka mora imati najmanje šest znakova";
$pgv_lang["welcome_text_auth_mode_1"]	= "<span class='center'><b>Dobrodošli na Rodoslov bratstva Damjanci</b></span><br />Rodoslovu mogu pristupiti svi posetioci koji su registrovani.<br /><br />Ako ste već registrovani ovde se možete prijaviti. Ako još niste registrovani, podnesite zahtev tako što ćete kliknuti na odgovarajući link na ovoj stranici.<br /><br />Pošto razmotri Vaš zahtev administrator rodoslova će aktivirati Vaš nalog i bićete obavešteni emailom.";
$pgv_lang["welcome_text_auth_mode_2"]	= "<span class='center'><b>Dobrodošli na Rodoslov bratstva Damjanci</b></span><br />Rodoslovu mogu pristupiti samo <u>ovlašćeni</u> korisnici.<br /><br />Ako ste već registrovani ovde se možete prijaviti. Ako još niste registrovani, podnesite zahtev tako što ćete kliknuti na odgovarajući link na ovoj stranici.<br /><br />Pošto razmotri Vaš zahtev administrator će ga ili odobriti ili odbaciti i o tome ćete biti obavešteni emailom.";
$pgv_lang["welcome_text_auth_mode_3"]	= "<span class='center'><b>Dobrodošli na Rodoslov bratstva Damjanci</b></span><br />Pristup podacima živih osoba u rodoslovu imaju samo <u>registrovani članovi njihovih porodica</u>.<br /><br />Ako ste već registrovani ovde se možete prijaviti. Ako još niste registrovani, podnesite zahtev tako što ćete kliknuti na odgovarajući link na ovoj stranici.<br /><br />Pošto razmotri Vaš zahtev administrator će ga ili odobriti ili odbaciti i o tome ćete biti obavešteni emailom.";
$pgv_lang["welcome_text_cust_head"] 	= "<span class='center'><b>Dobrodošli na Rodoslov bratstva Damjanci</b></span><br />Pristup podacima živih osoba u rodoslovu imaju samo prijavljeni korisnici sa lozinkom.<br />";
$pgv_lang["acceptable_use"]			= "<div class=\"largeError\">Napomena:</div><div class=\"error\">Popunjen i poslat formular podrazumeva da se slažete sa sledećim:<ul><li>da ćete poštovati privatnost živih osoba iz rodoslova;</li><li>i da ćete podneti ili uneti podatke za osobe koje trebaju da budu u rodoslovu.</li></ul></div>";


//-- mygedview page
$pgv_lang["upcoming_events"]		= "Predstojeći događaji";
$pgv_lang["none_today_all"]			= "Nema događaja za današnji dan.";
$pgv_lang["none_today_privacy"]		= "Značajni događaji za danas postoje ali ih mogu videti samo prijavljeni korisnici.";
$pgv_lang["more_today_privacy"]		= "<br />Još ima značajnih događaja za danas ali ih mogu videti samo prijavljeni korisnici.";
$pgv_lang["users_logged_in"]		= "Prijavljeni korisnici";
$pgv_lang["login_user"]				= "1 prijavljen korisnik";
$pgv_lang["no_login_users"]			= "Nijedan korisnik nije prijavljen";
$pgv_lang["message"]				= "Pošalji poruku";
$pgv_lang["my_messages"]			= "Moje poruke";
$pgv_lang["message_sent"]			= "Poruka poslata na #TO_USER#";
$pgv_lang["message_failed"]			= "Poruka nije mogla biti poslata";
$pgv_lang["message_error"]			= "PHPMailer greška: ";
$pgv_lang["message_invalid_from"]		= "Pogrešna adresa pošiljaoca: &lt;#email#&gt;";
$pgv_lang["message_invalid_to"]			= "Pogrešna adresa primaoca: &lt;#email#&gt;";
$pgv_lang["reset"]				= "Početni položaj";
$pgv_lang["mygedview_desc"] 		= "Stranica Moj portal omogućava da sebi obeležite omiljene upise, da pratite prestojeće događaje i sarađujete sa drugim korisnicima ovog rodoslova";
$pgv_lang["favorites"]				= "Omiljene stranice";
$pgv_lang["my_favorites"]			= "Moje omiljene stranice";
$pgv_lang["no_favorites"]			= "Niste izabrali nijednu omiljenu stranicu ili upis.<br /><br />Da dodate pojedinačni upis, upis porodice, ili izvora podataka kliknite na <b>#pgv_lang[add_favorite]#</b> link da vam se otvore polja gde ih možete uneti ili ih pretraživati da nađete njihov identifikacioni broj. Umesto identifikacionog broja možete uneti URL ili naslov traženog parametra.";
$pgv_lang["add_to_my_favorites"]	= "Dodaj u moje omiljene stranice";
$pgv_lang["gedcom_favorites"]		= "Često posećivane stranice na rodoslovu";
$pgv_lang["no_gedcom_favorites"]	= "Trenutno često posećivane stranice nisu upisane. Administrator ih može dodati da se vide kada se rodoslov otvori.";
$pgv_lang["random_picture"] 		= "Nasumice izabrana slika";
$pgv_lang["gedcom_created_using"]	= "Ovaj rodoslov je napravljen sa <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]		= "Ovaj rodoslov je napravljen započet <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]			= "Statistički podaci";
$pgv_lang["stat_individuals"]		= "Pojedinaca";
$pgv_lang["stat_families"]			= "Porodica";
$pgv_lang["stat_sources"]			= "Dokumenata";
$pgv_lang["stat_other"] 			= "Ostalih zapisa";
$pgv_lang["stat_earliest_birth"] 	= "Godina prvog zabeleženog rođenja";
$pgv_lang["stat_latest_birth"] 	= "Godina poslednjeg zabeleženog rođenja";
$pgv_lang["stat_earliest_death"] 	= "Godina prve zabeležene smrti";
$pgv_lang["stat_latest_death"] 	= "Godina zadnje zabeležene smrti";
$pgv_lang["customize_page"] 		= "Modifikuj svoj portal";
$pgv_lang["customize_gedcom_page"]	= "Modifikuj ovu početnu stranicu";
$pgv_lang["upcoming_events_block"]	= "Nastupajući događaji";
$pgv_lang["todays_events_block"]	= "Na današnji dan";
$pgv_lang["random_media_events"]	= "Događaji";
$pgv_lang["login_block"]			= "Prijava";
$pgv_lang["gedcom_news_block"]		= "Novosti na Rodoslovu Damjanaca";
$pgv_lang["gedcom_news"]			= "Obaveštenja";
$pgv_lang["common_surnames"]		= "Najčešća prezimena";
$pgv_lang["default_news_title"] 	= "Dobrodošli na rodoslov Damjanaca";
$pgv_lang["default_news_text"]		= "Ovaj online rodoslov sa bazom podataka je standardan geneološki pristup u izradi porodičnih rodoslova koji je zamenio tradicionalni metod ispisivanja podataka na papiru. Podaci unešeni preko web stranice omogućuju da se prikažu i štampaju različiti grafički prikazi, tabele, izveštaji i statistike porodičnog stabla sa pretragom po svim parametrima, uz još mnogo drugih mogućnosti. Svaka upisana osoba ima svoju posebnu stranicu gde se po potrebi mogu dodavati fotofrafije, skenirana dokumenta, zvučni i video zapisi.<br /><br />Svako ko se registruje može i sam da unosi, dodaje i ispravlja podatke za sebe, svoje pretke i potomke ali i za sve ostale upisane u bazu podataka. Ovim se stvara mogućnost da svi zajedno pišemo istoriju Damjanaca onako kako se i dešava. Tehnički je omogućeno da zajednički pravimo knjigu o sebi sa tako reći dnevnim izdanjima.<br /><br />";
$pgv_lang["delete_selected_messages"]	= "Obriši izabrane poruke";
$pgv_lang["reports"]				= "Pregledi";
$pgv_lang["record"] 				= "Upis";
// 1st generation
$pgv_lang["sosa_2"] 				= "Otac";
$pgv_lang["sosa_3"] 				= "Majka";
// 2nd generation
$pgv_lang["sosa_4"] 				= "Deda";
$pgv_lang["sosa_5"] 				= "Baba";
$pgv_lang["sosa_6"] 				= "Deda";
$pgv_lang["sosa_7"] 				= "Baba";
$pgv_lang["twin"] = "Blizanac";
$pgv_lang["stplmarrbirth"]		 = "Broj meseci između sklapanja braka i rođenja prvog deteta";
$pgv_lang["alive"]					= "Živi ";
$pgv_lang["dead"]					= "Mrtvi ";
$pgv_lang["maybe"]					= "Možda ";
$pgv_lang["both_alive"]					= "Oboje živi ";
$pgv_lang["both_dead"]					= "Oboje mrtvi ";
$pgv_lang["click_here"]				= "Klikni ovde da nastaviš";
$pgv_lang["block_summary_table"]	= "&nbsp;";
$pgv_lang["shared_note_contains"]	= "Sadržaj Zajedničke beleške";
$pgv_lang["account_information"] = "Informacije o nalogu";
$pgv_lang["TYPE__map"] = "Karta";
$pgv_lang["button_reset"] = "Početni položaj liste.";
$pgv_lang["button_SEX_F"] = "Pokaži samo osobe ženskog pola.";
$pgv_lang["button_SEX_M"] = "Pokaži samo osobe muškog pola.";
$pgv_lang["button_SEX_U"] = "Pokaži samo osobe za koje se ne zna pol.";
?>

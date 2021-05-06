<?php
/**
 * Dutch Language file for PhpGedView.
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
 * @package PhpGedView
 * @subpackage Languages
 * @authors Erik Bent, Jans B. Luder, Boudewijn Sjouke, Eduard Wustenveld
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Dutch values
$factarray["ABBR"] 		= "Afkorting";
$factarray["ADDR"] 		= "Adres";
$factarray["ADR1"] 		= "Adres 1";
$factarray["ADR2"] 		= "Adres 2";
$factarray["ADOP"] 		= "Adoptie";
$factarray["AFN"] 		= "Bestandsnummer stamvaders (AFN)";
$factarray["AGE"] 		= "Leeftijd";
$factarray["AGNC"] 		= "Instantie";
$factarray["ALIA"] 		= "Verwijzing";
$factarray["ANCE"] 		= "Voorouders";
$factarray["ANCI"] 		= "Interesse in voorouders";
$factarray["ANUL"] 		= "Vernietiging";
$factarray["ASSO"] 		= "Gerelateerd persoon";
$factarray["AUTH"] 		= "Auteur";
$factarray["BAPL"] 		= "Doop HLD";
$factarray["BAPM"] 		= "Doop";
$factarray["BARM"] 		= "Bar Mitzvah";
$factarray["BASM"] 		= "Bas Mitzvah";
$factarray["BIRT"] 		= "Geboorte";
$factarray["BLES"] 		= "Zegening";
$factarray["BLOB"] 		= "Binaire data";
$factarray["BURI"] 		= "Begrafenis";
$factarray["CALN"] 		= "Catalogus nummer";
$factarray["CAST"] 		= "Kaste / sociale status";
$factarray["CAUS"] 		= "Doodsoorzaak";
$factarray["CEME"]  	= "Begraafplaats";
$factarray["CENS"] 		= "Volkstelling";
$factarray["CHAN"] 		= "Laatste wijziging";
$factarray["CHAR"] 		= "Karakterset";
$factarray["CHIL"] 		= "Kind";
$factarray["CHR"] 		= "Doop";
$factarray["CHRA"] 		= "Volwassen doop";
$factarray["CITY"] 		= "Stad";
$factarray["CONF"] 		= "Bevestiging";
$factarray["CONL"] 		= "Bevestiging HLD";
$factarray["COPR"] 		= "Copyright";
$factarray["CORP"] 		= "Bedrijf";
$factarray["CREM"] 		= "Crematie";
$factarray["CTRY"] 		= "Land";
$factarray["DATA"] 		= "Data";
$factarray["DATE"] 		= "Datum";
$factarray["DEAT"] 		= "Overleden";
$factarray["DESC"] 		= "Nakomelingen";
$factarray["DESI"] 		= "Interesse in nakomelingen";
$factarray["DEST"] 		= "Bestemming";
$factarray["DIV"] 		= "Scheiding";
$factarray["DIVF"] 		= "Scheiding ingediend";
$factarray["DSCR"] 		= "Fysieke beschrijving";
$factarray["EDUC"] 		= "Opleiding";
$factarray["EMIG"] 		= "Emigratie";
$factarray["ENDL"] 		= "Gave HLD";
$factarray["ENGA"] 		= "Verloving";
$factarray["EVEN"] 		= "Gebeurtenis";
$factarray["FAM"] 		= "Gezin";
$factarray["FAMC"] 		= "Gezinsleden van kind";
$factarray["FAMF"] 		= "Gezinsbestand";
$factarray["FAMS"] 		= "Gezinsleden van ega";
$factarray["FCOM"] 		= "Eerste communie";
$factarray["FILE"] 		= "Extern bestand";
$factarray["FORM"] 		= "Formaat";
$factarray["GIVN"] 		= "Voornamen";
$factarray["GRAD"] 		= "Geslaagd";
$factarray["HUSB"]  	= "Partner";
$factarray["IDNO"] 		= "Identificatienummer";
$factarray["IMMI"] 		= "Immigratie";
$factarray["LEGA"] 		= "Legataris";
$factarray["MARB"] 		= "Ondertrouw";
$factarray["MARC"] 		= "Huwelijkscontract";
$factarray["MARL"]		= "Huwelijkstoestemming";
$factarray["MARR"]		= "Huwelijk";
$factarray["MARS"] 		= "Huwelijksvoorwaarden";
$factarray["MEDI"]		= "Multimediatype";
$factarray["NAME"] 		= "Naam";
$factarray["NATI"] 		= "Nationaliteit";
$factarray["NATU"] 		= "Naturalisatie";
$factarray["NCHI"] 		= "Aantal kinderen";
$factarray["NICK"] 		= "Roepnaam";
$factarray["NMR"] 		= "Aantal huwelijken";
$factarray["NOTE"] 		= "Notitie";
$factarray["NPFX"] 		= "Achternaam Voorvoegsel";
$factarray["NSFX"] 		= "Achternaam Achtervoegsel";
$factarray["OBJE"] 		= "Multimedia-object";
$factarray["OCCU"] 		= "Beroep";
$factarray["ORDI"] 		= "Verordening";
$factarray["ORDN"] 		= "Wijding";
$factarray["PAGE"] 		= "Details citaat";
$factarray["PEDI"] 		= "Kwartierstaat";
$factarray["PLAC"] 		= "Plaats";
$factarray["PHON"] 		= "Telefoon";
$factarray["POST"] 		= "Postcode";
$factarray["PROB"] 		= "Wilserkenning";
$factarray["PROP"] 		= "Eigendom";
$factarray["PUBL"] 		= "Publicatie";
$factarray["QUAY"] 		= "Kwaliteit van de gegevens";
$factarray["REPO"] 		= "Bewaarplaats";
$factarray["REFN"] 		= "Referentienummer";
$factarray["RELA"]		= "Relatie";
$factarray["RELI"] 		= "Religie";
$factarray["RESI"] 		= "Woonplaats";
$factarray["RESN"] 		= "Beperking";
$factarray["RETI"] 		= "Pensioen";
$factarray["RFN"] 		= "Record bestandsnummer";
$factarray["RIN"] 		= "Record ID nummer";
$factarray["ROLE"] 		= "Rol";
$factarray["SEX"] 		= "Geslacht";
$factarray["SLGC"] 		= "Kind verzegeling HLD";
$factarray["SLGS"] 		= "Ega verzegeling HLD";
$factarray["SOUR"] 		= "Bron";
$factarray["SPFX"] 		= "Voorvoegsel achternaam";
$factarray["SSN"] 		= "SOFI nummer";
$factarray["STAE"] 		= "Staat";
$factarray["STAT"] 		= "Status";
$factarray["SUBM"] 		= "Aangeleverd door";
$factarray["SUBN"] 		= "Aanlevering";
$factarray["SURN"] 		= "Achternaam";
$factarray["TEMP"] 		= "Tempel";
$factarray["TEXT"] 		= "Tekst";
$factarray["TIME"] 		= "Tijd";
$factarray["TITL"] 		= "Titel";
$factarray["TYPE"] 		= "Type";
$factarray["WIFE"]  	= "Partner";
$factarray["WILL"] 		= "Testament";
$factarray["_EMAIL"]	= "E-mailadres";
$factarray["EMAIL"] 	= "E-mailadres";
$factarray["_TODO"] 	= "Te doen";
$factarray["_UID"] 		= "Universeel kenmerk (UID)";
$factarray["_PRIM"]		= "Geaccentueerde afbeelding";
$factarray["_DBID"] 	= "Gekoppelde database ID";

// These facts are used in specific contexts
$factarray["STAT:DATE"] 	= "Datum van Status Wijziging";
$factarray["DATA:DATE"] 	= "Invoerdatum in orginele bron";

$factarray["NAME:_HEB"]		= "Naam in Hebreeuws";
$factarray["PLAC:_HEB"]		= "Plaats in Hebreeuws";
$factarray["TITL:_HEB"]		= "Titel in Hebreeuws";
$factarray["NAME:ROMN"]		= "Geromaniseerde Naam";
$factarray["PLAC:ROMN"]		= "Geromaniseerde Plaats";
$factarray["TITL:ROMN"]		= "Geromaniseerde Titel";
$factarray["NAME:FONE"]		= "Phonetische Naam";
$factarray["PLAC:FONE"]		= "Phonetische Plaats";
$factarray["TITL:FONE"]		= "Phonetische Titel";

$factarray["SHARED_NOTE"]	= "Gedeelde Notitie";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] 			= "Vader's Achternaam";
$factarray["FAMC:WIFE:SURN"] 			= "Moeder's Achternaam";
$factarray["FAMC:HUSB:BIRT:PLAC"] 		= "Vader's Geboorteplaats";
$factarray["FAMC:WIFE:BIRT:PLAC"] 		= "Moeder's Geboorteplaats";
$factarray["FAMC:MARR:PLAC"] 			= "Ouders' Huwelijks plaats";
$factarray["FAMC:HUSB:OCCU"] 			= "Vader's Beroep";
$factarray[":BIRT:PLAC"] 				= "Geboorteplaats";
$factarray["FAMS:MARR:DATE"] 			= "Huwelijks datum";
$factarray["FAMS:MARR:PLAC"] 			= "Huwelijks plaats";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] 	= "overlijden partner's plaats";
$factarray["FAMC:HUSB:GIVN"] 			= "Vader's Voornaam";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] 	= "Partner's Geboorteplaats";
$factarray["FAMC:WIFE:GIVN"] 			= "Moeder's Voornaam";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] 	= "(Vaders zijde) Grootvader's Voornaam";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] 	= "(Moeders zijde) Grootmoeder's Voornaam";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] 	= "(Moeders zijde) Grootvader's Voornaam";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] 	= "(Vaders zijde) Grootmoeder's Voornaam";
$factarray["FAMS:CHIL:BIRT:PLAC"] 		= "Geboorteplaats Kind";
$factarray["FAMS:NOTE"] 				= "Partner's Notitie";
$factarray["FAMS:CENS:DATE"] 			= "Partner's Volkstelling Datum";
$factarray["FAMS:CENS:PLAC"] 			= "Partner's Volkstelling Plaats";
$factarray["FAMS:DIV:DATE"] 			= "Partner's Scheidings Datum";
$factarray["FAMS:DIV:PLAC"] 			= "Partner's Scheidings Plaats";
$factarray["FAMS:SLGS:DATE"] 			= "Partner's HLD Verzegeling Datum";
$factarray["FAMS:SLGS:PLAC"] 			= "Partner's HLD Verzegeling Plaats";
$factarray["FAMS:SLGS:TEMP"] 			= "Partner's HLD Verzegeling Tempel";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] 	= "Geboorte plaats";
$factarray["BIRT:DATE"] 	= "Geboorte datum";
$factarray["BIRT:SOUR"] 	= "Geboorte bron";
$factarray["DEAT:PLAC"] 	= "Overlijden plaats";
$factarray["DEAT:DATE"] 	= "Overlijden datum";
$factarray["DEAT:SOUR"] 	= "Overlijden bron";
$factarray["CHR:PLAC"] 		= "Doopsel plaats";
$factarray["CHR:DATE"] 		= "Doopsel datum";
$factarray["CHR:SOUR"]		= "Doopsel bron";
$factarray["CONF:PLAC"]		= "Bevestiging plaats";
$factarray["CONF:DATE"]		= "Bevestiging datum";
$factarray["CONF:SOUR"]		= "Bevestiging bron";
$factarray["BAPM:PLAC"] 	= "Doop plaats";
$factarray["BAPM:DATE"] 	= "Doop datum";
$factarray["BAPM:SOUR"]		= "Doop bron";
$factarray["_BRTM:PLAC"]	= "Brit mila plaats";
$factarray["_BRTM:DATE"]	= "Brit mila datum";
$factarray["_BRTM:SOUR"]	= "Brit mila bron";
$factarray["BARM:PLAC"]		= "Bar mitzvah plaats";
$factarray["BARM:DATE"]		= "Bar mitzvah datum";
$factarray["BARM:SOUR"]		= "Bar mitzvah bron";
$factarray["BASM:PLAC"]		= "Bas mitzvah plaats";
$factarray["BASM:DATE"]		= "Bas mitzvah datum";
$factarray["BASM:SOUR"]		= "Bas mitzvah bron";
$factarray["BURI:PLAC"] 	= "Begrafenis plaats";
$factarray["BURI:DATE"] 	= "Begrafenis datum";
$factarray["BURI:SOUR"]		= "Begrafenis bron";
$factarray["FCOM:PLAC"]		= "Eerste communie plaats";
$factarray["FCOM:DATE"]		= "Eerste communie datum";
$factarray["FCOM:SOUR"]		= "Eerste communie bron";
$factarray["MARB:PLAC"]		= "Ondertrouw plaats";
$factarray["MARB:DATE"]		= "Ondertrouw datum";
$factarray["MARB:SOUR"]		= "Ondertrouwn bron";
$factarray["MARR:PLAC"] 	= "Huwelijk plaats";
$factarray["MARR:DATE"] 	= "Huwelijk datum";
$factarray["MARR:SOUR"] 	= "Huwelijk bron";
$factarray["ENGA:PLAC"]		= "Verloving plaats";
$factarray["ENGA:DATE"]		= "Verloving datum";
$factarray["ENGA:SOUR"]		= "Verloving bron";

$factarray["REPO:NAME"] = "Naam van het archief";
$factarray["REPO:ADDR"] = "Adres van het archief";
$factarray["REPO:PHON"] = "Telefoonnummer van het archief";
$factarray["REPO:FAX"]  = "Faxnummer van het archief";
$factarray["REPO:EMAIL"] = "E-mailadres van het archief";
$factarray["REPO:WWW"]  = "Homepage van het archief";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] 	= "Medisch";
$factarray["_DEG"] 		= "Graad";
$factarray["_MILT"] 	= "Militaire dienst";
$factarray["_SEPR"] 	= "Gescheiden";
$factarray["_DETS"] 	= "Dood van partner";
$factarray["CITN"] 		= "Staatsburgerschap";
$factarray["_FA1"] 		= "Feit 1";
$factarray["_FA2"] 		= "Feit 2";
$factarray["_FA3"] 		= "Feit 3";
$factarray["_FA4"] 		= "Feit 4";
$factarray["_FA5"] 		= "Feit 5";
$factarray["_FA6"] 		= "Feit 6";
$factarray["_FA7"] 		= "Feit 7";
$factarray["_FA8"] 		= "Feit 8";
$factarray["_FA9"] 		= "Feit 9";
$factarray["_FA10"]		= "Feit 10";
$factarray["_FA11"] 	= "Feit 11";
$factarray["_FA12"] 	= "Feit 12";
$factarray["_FA13"] 	= "Feit 13";
$factarray["_MREL"]	 	= "Relatie met moeder";
$factarray["_FREL"] 	= "Relatie met vader";
$factarray["_MSTAT"]	= "Status aanvang huwelijk";
$factarray["_MEND"] 	= "Status einde huwelijk";
$factarray["_NAMS"]		= "Naamgenoot";

// GEDCOM 5.5.1 related facts
$factarray["FAX"]		= "Fax";
$factarray["FACT"]		= "Feit";
$factarray["WWW"]		= "Webpagina";
$factarray["MAP"]		= "Landkaart";
$factarray["LATI"]		= "Breedtegraad";
$factarray["LONG"]		= "Lengtegraad";
$factarray["FONE"]		= "Fonetisch";
$factarray["ROMN"]		= "Geromaniseerd";

// PAF related facts
$factarray["_NAME"] 	= "E-mail naam";
$factarray["URL"]		= "Web URL";
$factarray["_URL"] 		= "Web URL";
$factarray["_HEB"]		= "Hebreeuwse naam";
$factarray["_SCBK"] 	= "Aantekenboek";
$factarray["_TYPE"] 	= "Multimediatype";
$factarray["_SSHOW"]	= "Diavoorstelling";

// Rootsmagic
$factarray["_SUBQ"]		= "Verkorte versie";
$factarray["_BIBL"] 	= "Bibliografie";

// Reunion
$factarray["EMAL"]		= "E-mailadres";

// Other common customized facts
$factarray["_ADPF"] 		= "Geadopteerd door de vader";
$factarray["_ADPM"] 		= "Geadopteerd door de moeder";
$factarray["_AKAN"] 		= "Ook bekend als";
$factarray["_AKA"]			= "Ook bekend als";
$factarray["_BRTM"] 		= "Brit Mila";
$factarray["_COML"] 		= "Erkend partnerschap";
$factarray["_EYEC"] 		= "Kleur ogen";
$factarray["_FNRL"] 		= "Begrafenis";
$factarray["_HAIR"] 		= "Kleur haar";
$factarray["_HEIG"] 		= "Lengte";
$factarray["_HOL"]  		= "Holocaust";
$factarray["_INTE"] 		= "Bijgezet";
$factarray["_MARI"] 		= "Huwelijksvoornemen";
$factarray["_MBON"] 		= "Ondertrouw";
$factarray["_MEDC"] 		= "Medische toestand";
$factarray["_MILI"] 		= "Militaire dienst";
$factarray["_NMR"] 			= "Ongehuwd";
$factarray["_NLIV"] 		= "Overleden";
$factarray["_NMAR"] 		= "Nooit gehuwd";
$factarray["_PRMN"] 		= "Permanent nummer";
$factarray["_WEIG"] 		= "Gewicht";
$factarray["_YART"] 		= "Yahrzeit";
$factarray["_MARNM"]		= "Naam in huwelijk";
$factarray["_MARNM_SURN"] 	= "Achteraam in huwelijk";
$factarray["_STAT"]			= "Burgerlijke staat";
$factarray["COMM"]			= "Commentaar";

// Aldfaer related facts
$factarray["MARR_CIVIL"]	= "Burgerlijk huwelijk";
$factarray["MARR_RELIGIOUS"]= "Kerkelijk huwelijk";
$factarray["MARR_PARTNERS"] = "Geregistreerd partnerschap";
$factarray["MARR_UNKNOWN"] 	= "Soort huwelijk onbekend";

$factarray["_HNM"] 		= "Hebreeuwse naam";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] 	= "Overlijden van partner";
$factarray["_BURI_SPOU"]	= "Begrafenis van partner";
$factarray["_CREM_SPOU"]	= "Crematie van partner";

$factarray["_BIRT_CHIL"] 	= "Geboorte van kind";
$factarray["_CHR_CHIL"]		= "Doop van kind";
$factarray["_BAPM_CHIL"] 	= "Doop van kind";
$factarray["__BRTM_CHIL"]	= "Brit Mila van kind";
$factarray["_ADOP_CHIL"] 	= "Adoptie van kind";
$factarray["_MARR_CHIL"] 	= "Huwelijk van kind";
$factarray["_MARB_CHIL"]	= "Ondertrouw van kind";
$factarray["_DEAT_CHIL"] 	= "Overlijden van kind";
$factarray["_BURI_CHIL"]	= "Begrafenis van kind";
$factarray["_CREM_CHIL"]	= "Crematie van kind";

$factarray["_BIRT_GCHI"] 	= "Geboorte van kleinkind";
$factarray["_CHR_GCHI"]		= "Doop van kleinkind";
$factarray["_BAPM_GCHI"] 	= "Doop van kleinkind";
$factarray["__BRTM_GCHI"]	= "Brit Mila van kleinkind";
$factarray["_ADOP_GCHI"] 	= "Adoptie van kleinkind";
$factarray["_MARR_GCHI"] 	= "Huwelijk van kleinkind";
$factarray["_MARB_GCHI"]	= "Ondertrouw van kleinkind";
$factarray["_DEAT_GCHI"]	= "Overlijden van kleinkind";
$factarray["_BURI_GCHI"]	= "Begrafenis van kleinkind";
$factarray["_CREM_GCHI"]	= "Crematie van kleinkind";

$factarray["_BIRT_GGCH"] 	= "Geboorte van achterkleinkind";
$factarray["_CHR_GGCH"]		= "Doop van achterkleinkind";
$factarray["_BAPM_GGCH"] 	= "Doop van achterkleinkind";
$factarray["__BRTM_GGCH"]	= "Brit Mila van achterkleinkind";
$factarray["_ADOP_GGCH"] 	= "Adoptie van achterkleinkind";
$factarray["_MARR_GGCH"] 	= "Huwelijk van achterkleinkind";
$factarray["_MARB_GGCH"]	= "Ondertrouw van achterkleinkind";
$factarray["_DEAT_GGCH"] 	= "Overlijden van achterkleinkind";
$factarray["_BURI_GGCH"]	= "Begrafenis van achterkleinkind";
$factarray["_CREM_GGCH"]	= "Crematie van achterkleinkind";

$factarray["_MARR_FATH"] 	= "Huwelijk van vader";
$factarray["_MARB_FATH"]	= "Ondertrouw van vader";
$factarray["_DEAT_FATH"] 	= "Overlijden van vader";
$factarray["_BURI_FATH"]	= "Begrafenis van vader";
$factarray["_CREM_FATH"]	= "Crematie van vader";

$factarray["_MARR_FAMC"] 	= "Huwelijk van ouders";
$factarray["_MARB_FAMC"]	= "Ondertrouw van ouders";

$factarray["_MARR_MOTH"] 	= "Huwelijk van moeder";
$factarray["_MARB_MOTH"]	= "Ondertrouw van moeder";
$factarray["_DEAT_MOTH"] 	= "Overlijden van moeder";
$factarray["_BURI_MOTH"]	= "Begrafenis van moeder";
$factarray["_CREM_MOTH"]	= "Crematie van moeder";

$factarray["_BIRT_SIBL"] 	= "Geboorte van broer/zus";
$factarray["_CHR_SIBL"]		= "Doop van broer/zus";
$factarray["_BAPM_SIBL"] 	= "Doop van broer/zus";
$factarray["__BRTM_SIBL"]	= "Brit Mila van broer/zus";
$factarray["_ADOP_SIBL"] 	= "Adoptie van broer/zus";
$factarray["_MARR_SIBL"] 	= "Huwelijk van broer/zus";
$factarray["_MARB_SIBL"]	= "Ondertrouw van broer/zus";
$factarray["_DEAT_SIBL"] 	= "Overlijden van broer/zus";
$factarray["_BURI_SIBL"]	= "Begrafenis van broer/zus";
$factarray["_CREM_SIBL"]	= "Crematie van broer/zus";

$factarray["_BIRT_HSIB"] 	= "Geboorte van half-broer/zus";
$factarray["_CHR_HSIB"]		= "Doop van half-broer/zus";
$factarray["_BAPM_HSIB"] 	= "Doop van half-broer/zus";
$factarray["__BRTM_HSIB"]	= "Brit Mila van half-broer/zus";
$factarray["_ADOP_HSIB"] 	= "Adoptie van half-broer/zus";
$factarray["_MARR_HSIB"] 	= "Huwelijk van halfbroer/-zus";
$factarray["_MARB_HSIB"]	= "Ondertrouw van half-broer/zus";
$factarray["_DEAT_HSIB"] 	= "Overlijden van halfbroer/-zus";
$factarray["_BURI_HSIB"]	= "Begrafenis van half-broer/zus";
$factarray["_CREM_HSIB"]	= "Crematie van half-broer/zus";

$factarray["_BIRT_NEPH"] 	= "Geboorte van neef/nicht";
$factarray["_CHR_NEPH"]		= "Doop van neef/nicht";
$factarray["_BAPM_NEPH"] 	= "Doop van neef/nicht";
$factarray["__BRTM_NEPH"]	= "Brit Mila van neef";
$factarray["_ADOP_NEPH"] 	= "Adoptie van neef/nicht";
$factarray["_MARR_NEPH"] 	= "Huwelijk van neef of nicht";
$factarray["_MARB_NEPH"]	= "Ondertrouw van neef of nicht";
$factarray["_DEAT_NEPH"] 	= "Overlijden van neef of nicht";
$factarray["_BURI_NEPH"]	= "Begrafenis van neef of nicht";
$factarray["_CREM_NEPH"]	= "Crematie van neef of nicht";

$factarray["_DEAT_GPAR"] 	= "Overlijden van grootouder";
$factarray["_BURI_GPAR"]	= "Begrafenis van grootouder";
$factarray["_CREM_GPAR"]	= "Crematie van grootouder";

$factarray["_DEAT_GGPA"] 	= "Overlijden van overgrootouder";
$factarray["_BURI_GGPA"]	= "Begrafenis van overgrootouder";
$factarray["_CREM_GGPA"]	= "Crematie van overgrootouder";

$factarray["_BIRT_FSIB"] 	= "Geboorte van oom/tante";
$factarray["_CHR_FSIB"]		= "Doop van vader's broer/zus";
$factarray["_BAPM_FSIB"] 	= "Doop van vader's broer/zus";
$factarray["__BRTM_FSIB"]	= "Brit Mila van vader's broer/zus";
$factarray["_ADOP_FSIB"] 	= "Adoptie van vader's broer/zus";
$factarray["_MARR_FSIB"] 	= "Huwelijk van oom/tante";
$factarray["_MARB_FSIB"]	= "Ondertrouw van vader's broer/zus";
$factarray["_DEAT_FSIB"] 	= "Overlijden van oom/tante";
$factarray["_BURI_FSIB"]	= "Begrafenis van vader's broer/zus";
$factarray["_CREM_FSIB"]	= "Crematie van vader's broer/zus";

$factarray["_BIRT_MSIB"] 	= "Geboorte van oom/tante";
$factarray["_CHR_MSIB"]		= "Doop van moeder's broer/zus";
$factarray["_BAPM_MSIB"] 	= "Doop van moeder's broer/zus";
$factarray["__BRTM_MSIB"]	= "Brit Mila van moeder's broer/zus";
$factarray["_ADOP_MSIB"] 	= "Adoptie van moeder's broer/zus";
$factarray["_MARR_MSIB"] 	= "Huwelijk van oom/tante";
$factarray["_MARB_MSIB"]	= "Ondertrouw van moeder's broer/zus";
$factarray["_DEAT_MSIB"] 	= "Overlijden van oom/tante";
$factarray["_BURI_MSIB"]	= "Begrafenis van moeder's broer/zus";
$factarray["_CREM_MSIB"]	= "Crematie van moeder's broer/zus";

$factarray["_BIRT_COUS"] 	= "Geboorte van neef/nicht";
$factarray["_CHR_COUS"]		= "Doop van neef/nicht";
$factarray["_BAPM_COUS"] 	= "Doop van neef/nicht";
$factarray["__BRTM_COUS"]	= "Brit Mila van neef/nicht";
$factarray["_ADOP_COUS"] 	= "Adoptie van neef";
$factarray["_MARR_COUS"] 	= "Huwelijk van neef/nicht";
$factarray["_MARB_COUS"]	= "Ondertrouw van neef/nicht";
$factarray["_DEAT_COUS"] 	= "Overlijden van neef/nicht";
$factarray["_BURI_COUS"]	= "Begrafenis van neef/nicht";
$factarray["_CREM_COUS"]	= "Crematie van neef/nicht";

$factarray["_FAMC_EMIG"]	= "Emigratie van ouders";
$factarray["_FAMC_RESI"]	= "Domicilie van ouders";

//-- PGV Only facts
$factarray["_THUM"]		= "Gebruik deze afbeelding als de miniweergave?";
$factarray["_PGVU"]		= "Laatst gewijzigd door";
$factarray["SERV"] 		= "Server op afstand";
$factarray["_GEDF"] 	= "GEDCOM-bestand";

/*-- Fact abbreviations for use in Chart boxes.
 *		Use these abbreviations in cases where the standard method of using the first
 *		letter of the spelled-out name results in an undesirable abbreviation or where
 *		you want to produce a different result (eg: "x" instead of "M" for "Married").
 *
 *		You can abbreviate any Fact label this way.  The list of abbreviations is
 *		open-ended.
 *
 *		These abbreviations are user-customizable. Just put them into file "extra.xx.php".
 *		The length of these abbreviations is not restricted to 1 letter.
 */

unset($factAbbrev);		// Don't let other languages specify Fact abbreviations for this language

/*-- The following lines have been commented out.  They should serve as examples.

$factAbbrev["BIRT"]		= "B";
$factAbbrev["MARR"]		= "M";
$factAbbrev["DEAT"]		= "D";

 */

?>

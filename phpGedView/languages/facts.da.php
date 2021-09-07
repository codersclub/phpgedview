<?php
/**
 * Danish Language file for PhpGedView.
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
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Danish values
$factarray["ABBR"] = "Forkortelse";
$factarray["ADDR"] = "Adresse";
$factarray["ADR1"] = "Adresse 1";
$factarray["ADR2"] = "Adresse 2";
$factarray["ADOP"] = "Adoption";
$factarray["AFN"]  = "Slægtsfil nr.";
$factarray["AGE"]  = "Alder";
$factarray["AGNC"] = "Agentur";
$factarray["ALIA"] = "Alias";
$factarray["ANCE"] = "Forfædre";
$factarray["ANCI"] = "Interesse for forfædre";
$factarray["ANUL"] = "Annuleret ægteskab";
$factarray["ASSO"] = "Forbindelser";
$factarray["AUTH"] = "Forfatter";
$factarray["BAPL"] = "Dåb SDH";
$factarray["BAPM"] = "Dåb";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bat Mitzvah";
$factarray["BIRT"] = "Født";
$factarray["BLES"] = "Velsignet / Navnefest";
$factarray["BLOB"] = "Binært dataobjekt";
$factarray["BURI"] = "Begravelse";
$factarray["CALN"] = "Katalognummer";
$factarray["CAST"] = "Kaste / Social status";
$factarray["CAUS"] = "Dødsårsag";
$factarray["CEME"] = "Kirkegård";
$factarray["CENS"] = "Folketælling";
$factarray["CHAN"] = "Sidst ændret";
$factarray["CHAR"] = "Tegnsæt";
$factarray["CHIL"] = "Barn";
$factarray["CHR"]  = "Dåb";
$factarray["CHRA"] = "Voksendåb";
$factarray["CITY"] = "Sted/by";
$factarray["CONF"] = "Bekræftelse";
$factarray["CONL"] = "Bekræftelse SDH";
$factarray["COPR"] = "Ophavsret / Copyright";
$factarray["CORP"] = "Virksomhed / firmanavn";
$factarray["CREM"] = "Kremeret";
$factarray["CTRY"] = "Land";
$factarray["DATA"] = "Data";
$factarray["DATE"] = "Dato";
$factarray["DEAT"] = "Død";
$factarray["DESC"] = "Efterkommere";
$factarray["DESI"] = "Interesse for efterkommere";
$factarray["DEST"] = "Mål";
$factarray["DIV"]  = "Skilsmisse";
$factarray["DIVF"] = "Skilsmissebegæring";
$factarray["DSCR"] = "Beskrivelse";
$factarray["EDUC"] = "Uddannelse";
$factarray["EMIG"] = "Udvandret";
$factarray["ENDL"] = "Gave SDH";
$factarray["ENGA"] = "Forlovet";
$factarray["EVEN"] = "Begivenhed";
$factarray["FAM"]  = "Familie";
$factarray["FAMC"] = "Familie for barn";
$factarray["FAMF"] = "Familie fil";
$factarray["FAMS"] = "Familie for partner";
$factarray["FCOM"] = "Første altergang";
$factarray["FILE"] = "Ekstern fil";
$factarray["FORM"] = "Filformat";
$factarray["GIVN"] = "Fornavn";
$factarray["GRAD"] = "Eksamen";
$factarray["HUSB"] = "Ægtemand";
$factarray["IDNO"] = "Person ID";
$factarray["IMMI"] = "Indvandret";
$factarray["LEGA"] = "Arving";
$factarray["MARB"] = "Lysning af giftemål";
$factarray["MARC"] = "Ægteskabskontrakt";
$factarray["MARL"] = "Kongebrev";
$factarray["MARR"] = "Ægteskab";
$factarray["MARS"] = "Ægtepagt";
$factarray["MEDI"] = "Medietype";
$factarray["NAME"] = "Navn";
$factarray["NATI"] = "Nationalitet";
$factarray["NATU"] = "Statsborgerskab";
$factarray["NCHI"] = "Antal børn";
$factarray["NICK"] = "Kaldenavn";
$factarray["NMR"]  = "Antal ægteskaber";
$factarray["NOTE"] = "Note";
$factarray["NPFX"] = "Efternavn Præfiks";
$factarray["NSFX"] = "Efternavn Suffiks";
$factarray["OBJE"] = "Multimedie objekt";
$factarray["OCCU"] = "Erhverv";
$factarray["ORDI"] = "Ordination";
$factarray["ORDN"] = "Forordning SDH";
$factarray["PAGE"] = "Dokument reference";
$factarray["PEDI"] = "Stamtavle";
$factarray["PLAC"] = "Stednavn";
$factarray["PHON"] = "Telefon";
$factarray["POST"] = "Postnummer";
$factarray["PROB"] = "Skifte";
$factarray["PROP"] = "Ejendom";
$factarray["PUBL"] = "Publikation";
$factarray["QUAY"] = "Datakvalitet";
$factarray["REPO"] = "Opbevaringssted";
$factarray["REFN"] = "Referencenummer";
$factarray["RELA"] = "Forhold";
$factarray["RELI"] = "Religion";
$factarray["RESI"] = "Bopæl";
$factarray["RESN"] = "Restriktion";
$factarray["RETI"] = "Pension";
$factarray["RFN"]	= "Registrere filnummer";
$factarray["RIN"]	= "Registrer identifikationsnummer";
$factarray["ROLE"] = "Rolle";
$factarray["SEX"]  = "Køn";
$factarray["SLGC"] = "Besegling SDH af barn";
$factarray["SLGS"] = "Ægteskabsbesegling SDH";
$factarray["SOUR"] = "Kilde";
$factarray["SPFX"] = "Præfiks";
$factarray["SSN"]  = "Personnummer";
$factarray["STAE"] = "Stat";
$factarray["STAT"] = "Status";
$factarray["SUBM"] = "Bidragsgiver";
$factarray["SUBN"] = "Del af datasamling";
$factarray["SURN"] = "Efternavn";
$factarray["TEMP"] = "Tempel";
$factarray["TEXT"] = "Tekst";
$factarray["TIME"] = "Klokkeslæt";
$factarray["TITL"] = "Titel";
$factarray["TYPE"] = "Type";
$factarray["WIFE"]  = "Hustru";
$factarray["WILL"] = "Testamente";
$factarray["EMAIL"] = "E-mail adresse";
$factarray["_EMAIL"] = "E-mail adresse";
$factarray["_TODO"] = "Udestående gøremål";
$factarray["_UID"] = "Universal ID";
$factarray["_PRIM"]	= "Markeret som hovedbillede";
$factarray["_DBID"] = "Linket database ID";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Ændringsdato for status";
$factarray["DATA:DATE"] = "Dato for indtastning i original kilde";

$factarray["NAME:_HEB"]	= "Navn på hebraisk";
$factarray["PLAC:_HEB"]	= "Stednavn på hebraisk";
$factarray["TITL:_HEB"]	= "Titel på hebraisk";
$factarray["NAME:ROMN"]	= "Romaniseret navn";
$factarray["PLAC:ROMN"]	= "Romaniseret stednavn";
$factarray["TITL:ROMN"]	= "Romaniseret titel";
$factarray["NAME:FONE"]	= "Fonetiskt navn";
$factarray["PLAC:FONE"]	= "Fonetiskt stednavn";
$factarray["TITL:FONE"]	= "Fonetisk titel";

$factarray["SHARED_NOTE"]	= "Delt note";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] = "Fars efternavn";
$factarray["FAMC:WIFE:SURN"] = "Mors efternavn";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Fars fødselssted";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Mors fødselssted";
$factarray["FAMC:MARR:PLAC"] = "Forældres bryllupssted";
$factarray["FAMC:HUSB:OCCU"] = "Fars erhverv";
$factarray[":BIRT:PLAC"] = "Fødselssted";
$factarray["FAMS:MARR:PLAC"] = "Bryllupssted";
$factarray["FAMS:MARR:DATE"] = "Ægteskabsdato";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Ægtefælles dødssted";
$factarray["FAMC:HUSB:GIVN"] = "Fars efternavn";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Ægtefælles fødselssted";
$factarray["FAMC:WIFE:GIVN"] = "Mors pigenavn";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Bedstefars efternavn";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Bedstemors pigenavn";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Bedstefar på moders sides fornavn";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Bedstemor på faders sides fornavn";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Barn's Fødsels sted";
$factarray["FAMS:NOTE"] = "Ægtefælles note";
$factarray["FAMS:CENS:DATE"] = "Dato for ægtefælles folketælling";
$factarray["FAMS:CENS:PLAC"] = "Ægtefælles folketællingssted";
$factarray["FAMS:DIV:DATE"] = "Ægteskabs dato for skilsmisse";
$factarray["FAMS:DIV:PLAC"] = "Ægtefællesskilt";
$factarray["FAMS:SLGS:DATE"] = "SDH Ægteskabs forseglingsdato";
$factarray["FAMS:SLGS:PLAC"] = "SDH Ægtefælles forseglingssted";
$factarray["FAMS:SLGS:TEMP"] = "SDH Ægtefælleforseglingstempel";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Fødselssted";
$factarray["BIRT:DATE"] = "Fødselsdato";
$factarray["BIRT:SOUR"] = "Fødselskilde";
$factarray["DEAT:PLAC"] = "Dødssted";
$factarray["DEAT:DATE"] = "Dødsdato";
$factarray["DEAT:SOUR"] = "Dødskilde";
$factarray["CHR:PLAC"] = "Dåbssted";
$factarray["CHR:DATE"] = "Dåbsdato";
$factarray["CHR:SOUR"] = "Dåbskilde";
$factarray["CONF:PLAC"] = "Konfirmeretsted";
$factarray["CONF:DATE"] = "Konfirmeretdato";
$factarray["CONF:SOUR"] = "Konfirmeretkilde";
$factarray["BAPM:PLAC"] = "Dåbssted";
$factarray["BAPM:DATE"] = "Dåbsdato";
$factarray["BAPM:SOUR"] = "Dåbskilde";
$factarray["_BRTM:PLAC"] = "Brit Mila sted";
$factarray["_BRTM:DATE"] = "Brit Mila dato";
$factarray["_BRTM:SOUR"] = "Brit Mila kilde";
$factarray["BARM:PLAC"] = "Bar Mitzvah sted";
$factarray["BARM:DATE"] = "Bar Mitzvah dato";
$factarray["BARM:SOUR"] = "Bar Mitzvah kilde";
$factarray["BASM:PLAC"] = "Bas Mitzvah sted";
$factarray["BASM:DATE"] = "Bas Mitzvah dato";
$factarray["BASM:SOUR"] = "Bas Mitzvah kilde";
$factarray["BURI:PLAC"] = "Begravelsessted";
$factarray["BURI:DATE"] = "Begravelsesdato";
$factarray["BURI:SOUR"] = "Begravelseskilde";
$factarray["FCOM:PLAC"] = "Første kommunionssted";
$factarray["FCOM:DATE"] = "Første kommunionsdato";
$factarray["FCOM:SOUR"] = "Første kommunionskilde";
$factarray["MARB:PLAC"] = "Ægteskab bannested";
$factarray["MARB:DATE"] = "Ægteskab bannedato";
$factarray["MARB:SOUR"] = "Ægteskab bannekilde";
$factarray["MARR:PLAC"] = "Bryllupssted";
$factarray["MARR:DATE"] = "Bryllupsdato";
$factarray["MARR:SOUR"] = "Bryllupskilde";
$factarray["ENGA:PLAC"] = "Forlovelsessted";
$factarray["ENGA:DATE"] = "Forlovelsesdato";
$factarray["ENGA:SOUR"] = "Forlovelseskilde";

$factarray["REPO:NAME"] = "Arkivnavn";
$factarray["REPO:ADDR"] = "Arkivadresse";
$factarray["REPO:PHON"] = "Arkiver telefonnummer";
$factarray["REPO:FAX"]  = "Arkiver FAX-nummer";
$factarray["REPO:EMAIL"] = "Arkiver e-mail-adresse";
$factarray["REPO:WWW"]  = "Arkiver startside";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "Helbredsoplysninger";
$factarray["_DEG"] 	= "Akademisk grad";
$factarray["_MILT"] = "Militærtjeneste";
$factarray["_SEPR"] = "Separeret";
$factarray["_DETS"] = "Ægtefælles død";
$factarray["CITN"] 	= "Statsborgerskab";
$factarray["_FA1"]	= "Fakta 1";
$factarray["_FA2"]	= "Fakta 2";
$factarray["_FA3"]	= "Fakta 3";
$factarray["_FA4"]	= "Fakta 4";
$factarray["_FA5"]	= "Fakta 5";
$factarray["_FA6"]	= "Fakta 6";
$factarray["_FA7"]	= "Fakta 7";
$factarray["_FA8"]	= "Fakta 8";
$factarray["_FA9"]	= "Fakta 9";
$factarray["_FA10"]	= "Fakta 10";
$factarray["_FA11"]	= "Fakta 11";
$factarray["_FA12"]	= "Fakta 12";
$factarray["_FA13"]	= "Fakta 13";
$factarray["_MREL"]	= "Relation til mor";
$factarray["_FREL"]	= "Relation til far";
$factarray["_MSTAT"] = "Ægteskab start status";
$factarray["_MEND"]	= "Ægteskab slut status";
$factarray["_NAMS"]	= "Navnebror";

// GEDCOM 5.5.1 related facts
$factarray["FAX"]	= "Fax";
$factarray["FACT"]	= "Fakta";
$factarray["WWW"]	= "Hjemmeside";
$factarray["MAP"]	= "Kort";
$factarray["LATI"]	= "Breddegrad";
$factarray["LONG"]	= "Længdegrad";
$factarray["FONE"]	= "Fonetisk";
$factarray["ROMN"]	= "Romaniseret";

// PAF related facts
$factarray["_NAME"]	= "Navn på postmodtager";
$factarray["URL"]	= "Internet adresse";
$factarray["_URL"] = "Internet adresse";
$factarray["_HEB"]	= "Hebræisk";
$factarray["_SCBK"] = "Scrap bog";
$factarray["_TYPE"] = "Medietype";
$factarray["_SSHOW"] = "Slide show";

// Rootsmagic
$factarray["_SUBQ"]	= "Kort version";
$factarray["_BIBL"] = "Bibliografi";

// Reunion
$factarray["EMAL"]	= "E-mail adresse";

// Other common customized facts
$factarray["_ADPF"] = "Adopteret af faderen";
$factarray["_ADPM"] = "Adopteret af moderen";
$factarray["_AKAN"] = "Også kendt som";
$factarray["_AKA"] 	= "Også kendt som";
$factarray["_BRTM"] = "Brit mila";
$factarray["_COML"]	= "Samlevende";
$factarray["_EYEC"] = "Øjenfarve";
$factarray["_FNRL"] = "Begravelse";
$factarray["_HAIR"] = "Hårfarve";
$factarray["_HEIG"] = "Højde";
$factarray["_HOL"]  = "Holocaust";
$factarray["_INTE"] = "Urnenedsættelse";
$factarray["_MARI"] = "Ægteskabsintention";
$factarray["_MBON"] = "Ægteskabsløfte";
$factarray["_MEDC"] = "Helbredstilstand";
$factarray["_MILI"] = "Militærtjeneste";
$factarray["_NMR"] = "Ugift";
$factarray["_NLIV"] = "Lever ikke";
$factarray["_NMAR"] = "Aldrig gift";
$factarray["_PRMN"] = "Permanent nummer";
$factarray["_WEIG"] = "Vægt";
$factarray["_YART"] = "Yahrzeit";
$factarray["_MARNM"] = "Vielsesnavn";
$factarray["_MARNM_SURN"] = "Tilgiftet efternavn";
$factarray["_STAT"]	= "Civil status";
$factarray["COMM"]	= "Kommentar";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Borgerlig vielse";
$factarray["MARR_PARTNERS"] = "Registreret partnerskab";
$factarray["MARR_RELIGIOUS"] = "Religiøs vielse";
$factarray["MARR_UNKNOWN"] = "Ukendt form for ægteskab";

$factarray["_HNM"] = "Hebræisk navn";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Ægtefælles dødsfald";
$factarray["_CREM_SPOU"] = "Ægtefælles kremering";
$factarray["_BURI_SPOU"] = "Ægtefælles begravelse";

$factarray["_BIRT_CHIL"] = "Barns fødsel";
$factarray["_CHR_CHIL"] = "Barns dåb";
$factarray["_BAPM_CHIL"] = "Barns babtistdåb";
$factarray["__BRTM_CHIL"] = "Barns omskæring";
$factarray["_ADOP_CHIL"] = "Barns adoption";
$factarray["_MARR_CHIL"] = "Barns Ægteskab";
$factarray["_MARB_CHIL"] = "Lysning af barns bryllup";
$factarray["_DEAT_CHIL"] = "Barns død";
$factarray["_BURI_CHIL"] = "Barns begravelse";
$factarray["_CREM_CHIL"] = "Barns kremering";

$factarray["_BIRT_GCHI"] = "Barnebarns fødsel";
$factarray["_CHR_GCHI"] = "Barnebarns dåb";
$factarray["_BAPM_GCHI"] = "Barnebarns babtistdåb";
$factarray["__BRTM_GCHI"] = "Barnebarns omskæring";
$factarray["_ADOP_GCHI"] = "Barnebarns adoption";
$factarray["_MARR_GCHI"] = "Barnebarns Ægteskab";
$factarray["_MARB_GCHI"] = "Lysning af barnebarns bryllup";
$factarray["_DEAT_GCHI"] = "Barnebarns død";
$factarray["_BURI_GCHI"] = "Barnebarns begravelse";
$factarray["_CREM_GCHI"] = "Barnebarns kremering";

$factarray["_BIRT_GGCH"] = "Oldebarns fødsel";
$factarray["_CHR_GGCH"] = "Oldebarns dåb";
$factarray["_BAPM_GGCH"] = "Oldebarns babtistdåb";
$factarray["__BRTM_GGCH"] = "Oldebarns omskæring";
$factarray["_ADOP_GGCH"] = "Oldebarns adoption";
$factarray["_MARR_GGCH"] = "Oldebarns bryllup";
$factarray["_MARB_GGCH"] = "Lysning af oldebarns bryllup";
$factarray["_DEAT_GGCH"] = "Oldebarns død";
$factarray["_BURI_GGCH"] = "Oldebarns begravelse";
$factarray["_CREM_GGCH"] = "Oldebarns kremering";

$factarray["_MARR_FATH"] = "Faders ægteskab";
$factarray["_MARB_FATH"] = "Lysning af faders bryllup";
$factarray["_DEAT_FATH"] = "Faders død";
$factarray["_BURI_FATH"] = "Faders begravelse";
$factarray["_CREM_FATH"] = "Faders kremering";

$factarray["_MARR_FAMC"] = "Forældres ægteskab";
$factarray["_MARB_FAMC"] = "Lysning af forældres bryllup";

$factarray["_MARR_MOTH"] = "Moders ægteskab";
$factarray["_MARB_MOTH"] = "Lysning af moders bryllup";
$factarray["_DEAT_MOTH"] = "Moders død";
$factarray["_BURI_MOTH"] = "Moders begravelse";
$factarray["_CREM_MOTH"] = "Moders kremering";

$factarray["_BIRT_SIBL"] = "Søskendes fødsel";
$factarray["_CHR_SIBL"] = "Søskenes dåb";
$factarray["_BAPM_SIBL"] = "Søskenes babtistdåb";
$factarray["__BRTM_SIBL"] = "Søskenes omskæring";
$factarray["_ADOP_SIBL"] = "Søskenes adoption";
$factarray["_MARR_SIBL"] = "Søskendes ægteskab";
$factarray["_MARB_SIBL"] = "Lysning af søskendes bryllup";
$factarray["_DEAT_SIBL"] = "Søskendes dødsfald";
$factarray["_BURI_SIBL"] = "Søskenes begravelse";
$factarray["_CREM_SIBL"] = "Søskenes kremering";

$factarray["_BIRT_HSIB"] = "Halvsøskendes fødsel";
$factarray["_CHR_HSIB"] = "Halvsøskenes dåb";
$factarray["_BAPM_HSIB"] = "Halvsøkenes babtistdåb";
$factarray["__BRTM_HSIB"] = "Halvsøskenes omskæring";
$factarray["_ADOP_HSIB"] = "Halvsøskenes adoption";
$factarray["_MARR_HSIB"] = "Halvsøskendes ægteskab";
$factarray["_MARB_HSIB"] = "Lysning af halvsøskendes bryllup";
$factarray["_DEAT_HSIB"] = "Halvsøskendes dødsfald";
$factarray["_BURI_HSIB"] = "Halvsøskenes begravelse";
$factarray["_CREM_HSIB"] = "Halvsøskenes kremering";

$factarray["_BIRT_NEPH"] = "Nevø eller nieces Fødsel";
$factarray["_CHR_NEPH"] = "Nevø eller nieces dåb";
$factarray["_BAPM_NEPH"] = "Nevø eller nieces babtisdåb";
$factarray["__BRTM_NEPH"] = "Nevøs omskæring";
$factarray["_ADOP_NEPH"] = "Nevø eller nieces adoption";
$factarray["_MARR_NEPH"] = "Nevø eller nieces ægteskab";
$factarray["_MARB_NEPH"] = "Lysning af nevø eller nieces bryllup";
$factarray["_DEAT_NEPH"] = "Nevø eller nieces dødsfal";
$factarray["_BURI_NEPH"] = "Nevø eller nieces begravelse";
$factarray["_CREM_NEPH"] = "Nevø eller nieces kremering";

$factarray["_DEAT_GPAR"] = "Bedsteforælders dødsfald";
$factarray["_BURI_GPAR"] = "Bedsteforælders begravelse";
$factarray["_CREM_GPAR"] = "Bedsteforælders kremering";

$factarray["_DEAT_GGPA"] = "Oldeforælders dødsfal";
$factarray["_BURI_GGPA"] = "Oldeforælders begravelse";
$factarray["_CREM_GGPA"] = "Oldeforælders kremering";

$factarray["_BIRT_FSIB"] = "Faders søskendes fødsel";
$factarray["_CHR_FSIB"] = "Faders søskenes dåb";
$factarray["_BAPM_FSIB"] = "Faders søskenes babtisdåb";
$factarray["__BRTM_FSIB"] = "Faders søskenes omskæring";
$factarray["_ADOP_FSIB"] = "Faders søskenes adoption";
$factarray["_MARR_FSIB"] = "Faders søskendes ægteskab";
$factarray["_MARB_FSIB"] = "Lysning af faders søskendes bryllup";
$factarray["_DEAT_FSIB"] = "Faders søskendes dødsfald";
$factarray["_BURI_FSIB"] = "Faders søskenes begravelse";
$factarray["_CREM_FSIB"] = "Faders søskenes kremering";

$factarray["_BIRT_MSIB"] = "Moders søskendes fødsel";
$factarray["_CHR_MSIB"] = "Moders søskenes dåb";
$factarray["_BAPM_MSIB"] = "Moders søskenes babtistdåb";
$factarray["__BRTM_MSIB"] = "Moders søskenes omskæring";
$factarray["_ADOP_MSIB"] = "Moders søskenes adoption";
$factarray["_MARR_MSIB"] = "Moders søskendes ægteskab";
$factarray["_MARB_MSIB"] = "Lysning af moders søskendes bryllup";
$factarray["_DEAT_MSIB"] = "Moders søskendes dødsfald";
$factarray["_BURI_MSIB"] = "Moders søskenes begravelse";
$factarray["_CREM_MSIB"] = "Moders søskenes kremering";

$factarray["_BIRT_COUS"] = "Fætter eller kusines fødsel";
$factarray["_CHR_COUS"]  = "Fætter/kusines dåb";
$factarray["_BAPM_COUS"] = "Fætter/kusines babtistdåb";
$factarray["__BRTM_COUS"] = "Fætters omskæring";
$factarray["_ADOP_COUS"] = "Fætter/kusines adoption";
$factarray["_MARR_COUS"] = "Fætter eller kusines  ægteskab";
$factarray["_MARB_COUS"] = "Lysning af fætter eller kusines bryllup";
$factarray["_DEAT_COUS"] = "Fætter eller kusines  dødsfald";
$factarray["_BURI_COUS"] = "Fætter eller kusines begravelse";
$factarray["_CREM_COUS"] = "Fætter eller kusines kremering";

$factarray["_FAMC_EMIG"] = "Forældres emigrering";
$factarray["_FAMC_RESI"] = "Forældre bosted";

//-- PGV Only facts
$factarray["_THUM"]	= "Brug altid hovedbillede?";
$factarray["_PGVU"]	= "Sidst opdateret af";
$factarray["SERV"] = "Ekstern server";
$factarray["_GEDF"] = "GEDCOM-fil";

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

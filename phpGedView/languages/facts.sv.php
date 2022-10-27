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
 * @author Daniel Melander
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Swedish values
$factarray["ABBR"] = "Förkortning";
$factarray["ADDR"] = "Adress";
$factarray["ADR1"] = "Adress 1";
$factarray["ADR2"] = "Adress 2";
$factarray["ADOP"] = "Adoption";
$factarray["AFN"]  = "Släktfilnummer (AFN)";
$factarray["AGE"]  = "Ålder";
$factarray["AGNC"] = "Myndighet";
$factarray["ALIA"] = "Alias";
$factarray["ANCE"] = "Förfäder";
$factarray["ANCI"] = "Intresse för förfäder";
$factarray["ANUL"] = "Ogiltigförklaring";
$factarray["ASSO"] = "Kompanjoner";
$factarray["AUTH"] = "Författare";
$factarray["BAPL"] = "SDH dop";
$factarray["BAPM"] = "Döpt";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bas Mitzvah";
$factarray["BIRT"] = "Född";
$factarray["BLES"] = "Välsignelse";
$factarray["BLOB"] = "Binärt data objekt";
$factarray["BURI"] = "Begravd";
$factarray["CALN"] = "Katalognummer";
$factarray["CAST"] = "Kast / Social status";
$factarray["CAUS"] = "Dödsorsak";
$factarray["CEME"] = "Kyrkogård";
$factarray["CENS"] = "Folkräkning";
$factarray["CHAN"] = "Senast ändrad";
$factarray["CHAR"] = "Teckentabell";
$factarray["CHIL"] = "Barn";
$factarray["CHR"]  = "Döpt";
$factarray["CHRA"] = "Vuxendop";
$factarray["CITY"] = "Stad";
$factarray["CONF"] = "Konfirmation";
$factarray["CONL"] = "SDH konfirmation";
$factarray["COPR"] = "Upphovsrätt";
$factarray["CORP"] = "Företag";
$factarray["CREM"] = "Kremering";
$factarray["CTRY"] = "Land";
$factarray["DATA"] = "Data";
$factarray["DATE"] = "Datum";
$factarray["DEAT"] = "Död";
$factarray["DESC"] = "Ättlingar";
$factarray["DESI"] = "Intresse för ättlingar";
$factarray["DEST"] = "Destination";
$factarray["DIV"]  = "Skild";
$factarray["DIVF"] = "Ansökt om skilsmässa";
$factarray["DSCR"] = "Fysisk beskrivning";
$factarray["EDUC"] = "Utbildning";
$factarray["EMIG"] = "Utvandring";
$factarray["ENDL"] = "SDH Gåva";
$factarray["ENGA"] = "Förlovning";
$factarray["EVEN"] = "Händelse";
$factarray["FAM"]  = "Familj";
$factarray["FAMC"] = "Familj som barn";
$factarray["FAMF"] = "Familjefil";
$factarray["FAMS"] = "Familj som make/a";
$factarray["FCOM"] = "Första nattvarden";
$factarray["FILE"] = "Extern fil";
$factarray["FORM"] = "Format";
$factarray["GIVN"] = "Förnamn";
$factarray["GRAD"] = "Examen";
$factarray["HUSB"] = "Make";
$factarray["IDNO"] = "Personnummer";
$factarray["IMMI"] = "Invandring";
$factarray["LEGA"] = "Förmånstagare";
$factarray["MARB"] = "Lysning";
$factarray["MARC"] = "Äktenskapsförord";
$factarray["MARL"] = "Äktenskapsbevis";
$factarray["MARR"] = "Vigd";
$factarray["MARS"] = "Äktenskapsförord";
$factarray["MEDI"]	= "Mediatyp";
$factarray["NAME"] = "Namn";
$factarray["NATI"] = "Nationalitet";
$factarray["NATU"] = "Medborgarskap";
$factarray["NCHI"] = "Antal barn";
$factarray["NICK"] = "Smeknamn";
$factarray["NMR"]  = "Antal äktenskap";
$factarray["NOTE"] = "Anteckning";
$factarray["NPFX"] = "Namn Prefix";
$factarray["NSFX"] = "Namn Suffix";
$factarray["OBJE"] = "Multimediaobjekt";
$factarray["OCCU"] = "Yrke";
$factarray["ORDI"] = "Förordning";
$factarray["ORDN"] = "Prästvigning";
$factarray["PAGE"] = "Citatdetaljer";
$factarray["PEDI"] = "Antavla";
$factarray["PLAC"] = "Ort";
$factarray["PHON"] = "Telefon";
$factarray["POST"] = "Postnummer";
$factarray["PROB"] = "Testamentsbevakning";
$factarray["PROP"] = "Egendom";
$factarray["PUBL"] = "Publicering";
$factarray["QUAY"] = "Kvalitet på källa";
$factarray["REPO"] = "Lagringsplats";
$factarray["REFN"] = "Referensnummer";
$factarray["RELA"] = "Förhållandet";
$factarray["RELI"] = "Religion";
$factarray["RESI"] = "Bosatt";
$factarray["RESN"] = "Restriktion";
$factarray["RETI"] = "Pensionering";
$factarray["RFN"]  = "Postens fil-number";
$factarray["RIN"]  = "Postens ID-nummer";
$factarray["ROLE"] = "Roll";
$factarray["SEX"]  = "Kön";
$factarray["SLGC"] = "SDH Barns försegling";
$factarray["SLGS"] = "SDH Makens försegling";
$factarray["SOUR"] = "Källa";
$factarray["SPFX"] = "Efternamn Prefix";
$factarray["SSN"]  = "Personnummer";
$factarray["STAE"] = "Stat / Län";
$factarray["STAT"] = "Status";
$factarray["SUBM"] = "Bidragsgivare";
$factarray["SUBN"] = "Inlämna";
$factarray["SURN"] = "Efternamn";
$factarray["TEMP"] = "Tempel";
$factarray["TEXT"] = "Text";
$factarray["TIME"] = "Tid";
$factarray["TITL"] = "Titel";
$factarray["TYPE"] = "Typ";
$factarray["WIFE"] = "Maka";
$factarray["WILL"] = "Testamente";
$factarray["_EMAIL"] = "E-postadress";
$factarray["EMAIL"] = "E-postadress";
$factarray["_TODO"]  = "Att göra";
$factarray["_UID"]   = "Unik identifierare";
$factarray["_PRIM"]	= "Huvudbild";
$factarray["_DBID"] = "Länkad databasID";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Datum för statusändring";
$factarray["DATA:DATE"] = "Datum för inmatning i original källa";

$factarray["NAME:_HEB"]	= "Namn på hebreiska";
$factarray["PLAC:_HEB"]	= "Ort på hebreiska";
$factarray["TITL:_HEB"]	= "Titel på hebreiska";
$factarray["NAME:ROMN"]	= "Romaniserat namn";
$factarray["PLAC:ROMN"]	= "Romaniserad ort";
$factarray["TITL:ROMN"]	= "Romaniserad titel";
$factarray["NAME:FONE"]	= "Fonetiskt namn";
$factarray["PLAC:FONE"]	= "Fonetisk ort";
$factarray["TITL:FONE"]	= "Fonetisk titel";

$factarray["SHARED_NOTE"]	= "Delad anteckning";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] = "Faderns efternamn";
$factarray["FAMC:WIFE:SURN"] = "Moderns efternamn";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Faderns födelseort";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Moderns födelseort";
$factarray["FAMC:MARR:PLAC"] = "Föräldrarnas äktenskaport";
$factarray["FAMC:HUSB:OCCU"] = "Faderns yrke";
$factarray[":BIRT:PLAC"] = "Födelseort";
$factarray["FAMS:MARR:PLAC"] = "Äktenskaport";
$factarray["FAMS:MARR:DATE"] = "Äktenskap datum";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Make/makas dödsort";
$factarray["FAMC:HUSB:GIVN"] = "Faderns förnamn";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Make/makas födelseort";
$factarray["FAMC:WIFE:GIVN"] = "Moderns förnamn";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Farfars förnamn";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Mormors förnamn";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Morfars förnamn";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Farmors förnamn";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Barnets födelseort";
$factarray["FAMS:NOTE"] = "Make-anmärkning";
$factarray["FAMS:CENS:DATE"] = "Makets folkräkningsdatum";
$factarray["FAMS:CENS:PLAC"] = "Makens folkräkningsort";
$factarray["FAMS:DIV:DATE"] = "Makens skilsmässa datum";
$factarray["FAMS:DIV:PLAC"] = "Makens skilsmässa ort";
$factarray["FAMS:SLGS:DATE"] = "SDH makens förseglingsdatum";
$factarray["FAMS:SLGS:PLAC"] = "SDH makens förseglingsort";
$factarray["FAMS:SLGS:TEMP"] = "SDH makens förseglingstempel";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Födelseort";
$factarray["BIRT:DATE"] = "Födelsedatum";
$factarray["BIRT:SOUR"] = "Födelsekälla";
$factarray["DEAT:PLAC"] = "Dödsort";
$factarray["DEAT:DATE"] = "Dödsdatum";
$factarray["DEAT:SOUR"] = "Dödskälla";
$factarray["CHR:PLAC"] = "Doport";
$factarray["CHR:DATE"] = "Dopdatum";
$factarray["CHR:SOUR"] = "Dopkälla";
$factarray["CONF:PLAC"] = "Konfirmationsplats";
$factarray["CONF:DATE"] = "Konfirmationsdatum";
$factarray["CONF:SOUR"] = "Konfirmationskälla";
$factarray["BAPM:PLAC"] = "Doport";
$factarray["BAPM:DATE"] = "Dopdatum";
$factarray["BAPM:SOUR"] = "Dopkälla";
$factarray["_BRTM:PLAC"] = "Brit Mila ort";
$factarray["_BRTM:DATE"] = "Brit Mila datum";
$factarray["_BRTM:SOUR"] = "Brit Mila källa";
$factarray["BARM:PLAC"] = "Bar Mitzvah ort";
$factarray["BARM:DATE"] = "Bar Mitzvah datum";
$factarray["BARM:SOUR"] = "Bar Mitzvah källa";
$factarray["BASM:PLAC"] = "Bas Mitzvah ort";
$factarray["BASM:DATE"] = "Bas Mitzvah datum";
$factarray["BASM:SOUR"] = "Bas Mitzvah källa";
$factarray["BURI:PLAC"] = "Begravnigsort";
$factarray["BURI:DATE"] = "Begravnigsdatum";
$factarray["BURI:SOUR"] = "Begravnigskälla";
$factarray["FCOM:PLAC"] = "Första nattvardsplatsen";
$factarray["FCOM:DATE"] = "Första nattvardsdatum";
$factarray["FCOM:SOUR"] = "Första nattvardskälla";
$factarray["MARB:PLAC"] = "Lysningsort";
$factarray["MARB:DATE"] = "Lysningsdatum";
$factarray["MARB:SOUR"] = "Lysningskälla";
$factarray["MARR:PLAC"] = "Äktenskap ort";
$factarray["MARR:DATE"] = "Äktenskap datum";
$factarray["MARR:SOUR"] = "Äktenskap källa";
$factarray["ENGA:PLAC"] = "Förlovningsort";
$factarray["ENGA:DATE"] = "Förlovningsdatum";
$factarray["ENGA:SOUR"] = "Förlovningskälla";

$factarray["REPO:NAME"] = "Arkivets namn";
$factarray["REPO:ADDR"] = "Arkivets adress";
$factarray["REPO:PHON"] = "Arkivets telefonnummer";
$factarray["REPO:FAX"]  = "Arkivets faxnummer";
$factarray["REPO:EMAIL"] = "Arkivets e-postadress";
$factarray["REPO:WWW"]  = "Arkivets hemsidan";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "Medicinsk";
$factarray["_DEG"]  = "Betyg";
$factarray["_MILT"] = "Militärtjänst";
$factarray["_SEPR"] = "Separerade";
$factarray["_DETS"] = "En make(a) död";
$factarray["CITN"] = "Medborgarskap";
$factarray["_FA1"] = "Faktum 1";
$factarray["_FA2"] = "Faktum 2";
$factarray["_FA3"] = "Faktum 3";
$factarray["_FA4"] = "Faktum 4";
$factarray["_FA5"] = "Faktum 5";
$factarray["_FA6"] = "Faktum 6";
$factarray["_FA7"] = "Faktum 7";
$factarray["_FA8"] = "Faktum 8";
$factarray["_FA9"] = "Faktum 9";
$factarray["_FA10"] = "Faktum 10";
$factarray["_FA11"] = "Faktum 11";
$factarray["_FA12"] = "Faktum 12";
$factarray["_FA13"] = "Faktum 13";
$factarray["_MREL"] = "Förhållande till modern";
$factarray["_FREL"] = "Förhållande till fadern";
$factarray["_MSTAT"] = "Äktenskap startstatus";
$factarray["_MEND"] = "Äktenskap slutstatus";
$factarray["_NAMS"]	= "Namne";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "FAX";
$factarray["FACT"] = "Faktum";
$factarray["WWW"] = "Hemsida";
$factarray["MAP"] = "Karta";
$factarray["LATI"] = "Latitud";
$factarray["LONG"] = "Longitud";
$factarray["FONE"] = "Fonetisk";
$factarray["ROMN"] = "Romaniserad";

// PAF related facts
$factarray["_NAME"] = "Adressat";
$factarray["URL"] = "Webadress";
$factarray["_URL"] = "Webadress";
$factarray["_HEB"] = "Hebreiska";
$factarray["_SCBK"] = "Urklippsalbum";
$factarray["_TYPE"] = "Mediatyp";
$factarray["_SSHOW"] = "Bildspel";

// Rootsmagic
$factarray["_SUBQ"]= "Kortversion";
$factarray["_BIBL"] = "Bibliografi";

// Reunion
$factarray["EMAL"]	= "Epostadress";

// Other common customized facts
$factarray["_ADPF"] = "Adopterad av fadern";
$factarray["_ADPM"] = "Adpoterad av modern";
$factarray["_AKAN"] = "Också känd som";
$factarray["_AKA"] 	= "Också känd som";
$factarray["_BRTM"] = "Brit mila";
$factarray["_COML"] = "Sambo";
$factarray["_EYEC"] = "Ögonfärg";
$factarray["_FNRL"] = "Begravning";
$factarray["_HAIR"] = "Hårfärg";
$factarray["_HEIG"] = "Längd";
$factarray["_HOL"]  = "Judeförintelsen";
$factarray["_INTE"] = "Begravd";
$factarray["_MARI"] = "Avsikt att gifta sig";
$factarray["_MBON"] = "Hindersprövning";
$factarray["_MEDC"] = "Medicinska förhållande";
$factarray["_MILI"] = "Militär";
$factarray["_NMR"] = "Ogift";
$factarray["_NLIV"] = "Lever inte";
$factarray["_NMAR"] = "Aldrig gift";
$factarray["_PRMN"] = "Permanent nummer";
$factarray["_WEIG"] = "Vikt";
$factarray["_YART"] = "Yahrzeit";
$factarray["_MARNM"]	= "Äktenskapnamn";
$factarray["_MARNM_SURN"] = "Efternamn som vigd";
$factarray["_STAT"]	= "Äktenskapstatus";
$factarray["COMM"]	= "Kommentar";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Borglig äktenskap";
$factarray["MARR_RELIGIOUS"] = "Kyrklig äktenskap";
$factarray["MARR_PARTNERS"] = "Registrerat partnerskap";
$factarray["MARR_UNKNOWN"] = "Okänd typ av äktenskap";

$factarray["_HNM"] = "Hebreiskt namn";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Makes död";
$factarray["_BURI_SPOU"] = "Makes begravning";
$factarray["_CREM_SPOU"] = "Makes kremation";

$factarray["_BIRT_CHIL"] 	= "Barns födelse";
$factarray["_CHR_CHIL"] 	= "Barns dop";
$factarray["_BAPM_CHIL"] 	= "Barns dop";
$factarray["__BRTM_CHIL"] 	= "Barns Brit Mila";
$factarray["_ADOP_CHIL"] 	= "Barns adoption";
$factarray["_MARR_CHIL"] 	= "Barns äktenskap";
$factarray["_MARB_CHIL"] 	= "Barns lysning";
$factarray["_DEAT_CHIL"] 	= "Barns död";
$factarray["_BURI_CHIL"] 	= "Barns begravning";
$factarray["_CREM_CHIL"] 	= "Barns kremation";

$factarray["_BIRT_GCHI"] 	= "Barnbarns födelse";  
$factarray["_CHR_GCHI"] 	= "Barnbarns dop";       
$factarray["_BAPM_GCHI"] 	= "Barnbarns dop";       
$factarray["__BRTM_GCHI"] 	= "Barnbarns Brit Mila"; 
$factarray["_ADOP_GCHI"] 	= "Barnbarns adoption";  
$factarray["_MARR_GCHI"] 	= "Barnbarns äktenskap";
$factarray["_MARB_GCHI"] 	= "Barnbarns lysning";   
$factarray["_DEAT_GCHI"] 	= "Barnbarns död";      
$factarray["_BURI_GCHI"] 	= "Barnbarns begravning";
$factarray["_CREM_GCHI"] 	= "Barnbarns kremation"; 

$factarray["_BIRT_GGCH"] 	= "Barnbarnsbarns födelse";  
$factarray["_CHR_GGCH"] 	= "Barnbarnsbarns dop";       
$factarray["_BAPM_GGCH"] 	= "Barnbarnsbarns dop";       
$factarray["__BRTM_GGCH"] 	= "Barnbarnsbarns Brit Mila"; 
$factarray["_ADOP_GGCH"] 	= "Barnbarnsbarns adoption";  
$factarray["_MARR_GGCH"] 	= "Barnbarnsbarns äktenskap";
$factarray["_MARB_GGCH"] 	= "Barnbarnsbarns lysning";   
$factarray["_DEAT_GGCH"] 	= "Barnbarnsbarns död";      
$factarray["_BURI_GGCH"] 	= "Barnbarnsbarns begravning";
$factarray["_CREM_GGCH"] 	= "Barnbarnsbarns kremation"; 

$factarray["_MARR_FATH"] = "Faderns äktenskap";
$factarray["_MARB_FATH"] = "Faderns lysning";
$factarray["_DEAT_FATH"] = "Faderns död";
$factarray["_BURI_FATH"] = "Faderns begravning";
$factarray["_CREM_FATH"] = "Faderns kremation";

$factarray["_MARR_FAMC"] = "Föräldrars äktenskap";
$factarray["_MARB_FAMC"] = "Föräldrars Lysning";

$factarray["_MARR_MOTH"] = "Moderns äktenskap";
$factarray["_MARB_MOTH"] = "Moderns lysning";
$factarray["_DEAT_MOTH"] = "Moderns död";
$factarray["_BURI_MOTH"] = "Moderns begravning";
$factarray["_CREM_MOTH"] = "Moderns kremation";

$factarray["_BIRT_SIBL"] 	= "Syskons födelse";
$factarray["_CHR_SIBL"] 	= "Syskons dop";
$factarray["_BAPM_SIBL"] 	= "Syskons dop";
$factarray["__BRTM_SIBL"] 	= "Syskons Brit Mila";
$factarray["_ADOP_SIBL"] 	= "Syskons adoption";
$factarray["_MARR_SIBL"] 	= "Syskons äktenskap";
$factarray["_MARB_SIBL"] 	= "Syskons lysning";
$factarray["_DEAT_SIBL"] 	= "Syskons död";
$factarray["_BURI_SIBL"] 	= "Syskons begravning";
$factarray["_CREM_SIBL"] 	= "Syskons kremation";

$factarray["_BIRT_HSIB"] = "Halv-syskons födelse";
$factarray["_CHR_HSIB"] = "Halv-syskons dop";
$factarray["_BAPM_HSIB"] = "Halv-syskons dop";
$factarray["__BRTM_HSIB"] = "Halv-syskons Brit Mila";
$factarray["_ADOP_HSIB"] = "Halv-syskons adoption";
$factarray["_MARR_HSIB"] = "Halv-syskons äktenskap";
$factarray["_MARB_HSIB"] = "Halv-syskons lysning";
$factarray["_DEAT_HSIB"] = "Halv-syskons död";
$factarray["_BURI_HSIB"] = "Halv-syskons begravning";
$factarray["_CREM_HSIB"] = "Halv-syskons kremation";

$factarray["_BIRT_NEPH"] = "Brorsons eller systerdotters födelse";
$factarray["_CHR_NEPH"] = "Brorsons eller systerdotters dop";
$factarray["_BAPM_NEPH"] = "Brorsons eller systerdotters dop";
$factarray["__BRTM_NEPH"] = "Brorsons Brit Mila";
$factarray["_ADOP_NEPH"] = "Brorsons eller systerdotters adoption";
$factarray["_MARR_NEPH"] = "Brorsons eller systerdotters äktenskap";
$factarray["_MARB_NEPH"] = "Brorsons eller systerdotters lysning";
$factarray["_DEAT_NEPH"] = "Brorsons eller systerdotters död";
$factarray["_BURI_NEPH"] = "Brorsons eller systerdotters begravning";
$factarray["_CREM_NEPH"] = "Brorsons eller systerdotters kremation";

$factarray["_DEAT_GPAR"] = "Farförälders död";
$factarray["_BURI_GPAR"] = "Farförälders begravning";
$factarray["_CREM_GPAR"] = "Farförälders kremation";

$factarray["_DEAT_GGPA"] = "Farfarsförälders död";
$factarray["_BURI_GGPA"] = "Farfarsförälders begravning";
$factarray["_CREM_GGPA"] = "Farfarsförälders kremation";

$factarray["_BIRT_FSIB"] 	= "Faderns syskons födelse";  
$factarray["_CHR_FSIB"] 	= "Faderns syskons dop";       
$factarray["_BAPM_FSIB"] 	= "Faderns syskons dop";       
$factarray["__BRTM_FSIB"] 	= "Faderns syskons Brit Mila"; 
$factarray["_ADOP_FSIB"] 	= "Faderns syskons adoption";  
$factarray["_MARR_FSIB"] 	= "Faderns syskons äktenskap";
$factarray["_MARB_FSIB"] 	= "Faderns syskons lysning";   
$factarray["_DEAT_FSIB"] 	= "Faderns syskons död";      
$factarray["_BURI_FSIB"] 	= "Faderns syskons begravning";
$factarray["_CREM_FSIB"] 	= "Faderns syskons kremation"; 

$factarray["_BIRT_MSIB"] 	= "Moderns syskons födelse";  
$factarray["_CHR_MSIB"] 	= "Moderns syskons dop";       
$factarray["_BAPM_MSIB"] 	= "Moderns syskons dop";       
$factarray["__BRTM_MSIB"] 	= "Moderns syskons Brit Mila"; 
$factarray["_ADOP_MSIB"] 	= "Moderns syskons adoption";  
$factarray["_MARR_MSIB"] 	= "Moderns syskons äktenskap";
$factarray["_MARB_MSIB"] 	= "Moderns syskons lysning";   
$factarray["_DEAT_MSIB"] 	= "Moderns syskons död";      
$factarray["_BURI_MSIB"] 	= "Moderns syskons begravning";
$factarray["_CREM_MSIB"] 	= "Moderns syskons kremation"; 

$factarray["_BIRT_COUS"] 	= "Kusins syskons födelse";  
$factarray["_CHR_COUS"]  	= "Kusins syskons dop";       
$factarray["_BAPM_COUS"] 	= "Kusins syskons dop";       
$factarray["__BRTM_COUS"] 	= "Kusins syskons Brit Mila"; 
$factarray["_ADOP_COUS"] 	= "Kusins syskons adoption";  
$factarray["_MARR_COUS"] 	= "Kusins syskons äktenskap";
$factarray["_MARB_COUS"] 	= "Kusins syskons lysning";   
$factarray["_DEAT_COUS"] 	= "Kusins syskons död";      
$factarray["_BURI_COUS"] 	= "Kusins syskons begravning";
$factarray["_CREM_COUS"] 	= "Kusins syskons kremation"; 

$factarray["_FAMC_EMIG"] = "Föräldrarnas emigration";
$factarray["_FAMC_RESI"] = "Föräldrarnas boendeort";

//-- PGV Only facts
$factarray["_THUM"]	= "Använd denna bild som miniatyr?";
$factarray["_PGVU"]	= "av";
$factarray["SERV"] = "Annan server";
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

$factAbbrev = array();		// Don't let other languages specify Fact abbreviations for this language

/*-- The following lines have been commented out.  They should serve as examples.

$factAbbrev["BIRT"]		= "B";
$factAbbrev["MARR"]		= "M";
$factAbbrev["DEAT"]		= "D";

 */

?>

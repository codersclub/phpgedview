<?php
/**
 * Italian Language file
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

 * @package PhpGedView
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Italian values
$factarray["ABBR"] = "Abbreviazione";
$factarray["ADDR"] = "Indirizzo";
$factarray["ADR1"] = "Indirizzo 1";
$factarray["ADR2"] = "Indirizzo 2";
$factarray["ADOP"] = "Adozione";
$factarray["AFN"] = "Numero file ancestrale (AFN)";
$factarray["AGE"] = "Età";
$factarray["AGNC"] = "Istituzione";
$factarray["ALIA"] = "Alias";
$factarray["ANCE"] = "Antenati";
$factarray["ANCI"] = "Interesse per i antenati";
$factarray["ANUL"] = "Annullamento";
$factarray["ASSO"] = "Associati";
$factarray["AUTH"] = "Autore";
$factarray["BAPL"] = "Battesimo SUG";
$factarray["BAPM"] = "Battesimo";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bas Mitzvah";
$factarray["BIRT"] = "Nascita";
$factarray["BLES"] = "Benedizione";
$factarray["BLOB"] = "Oggetto binario contenente i dati";
$factarray["BURI"] = "Sepoltura";
$factarray["CALN"] = "Numero di catalogo";
$factarray["CAST"] = "Casta / Stato Sociale";
$factarray["CAUS"] = "Causa della morte";
$factarray["CEME"]  = "Cimitero";
$factarray["CENS"] = "Censimento";
$factarray["CHAN"] = "Ultima modifica";
$factarray["CHAR"] = "Set di caratteri";
$factarray["CHIL"] = "Bambino";
$factarray["CHR"] = "Cresima";
$factarray["CHRA"] = "Cresima da Adulto";
$factarray["CITY"] = "Città";
$factarray["CONF"] = "Confermazione";
$factarray["CONL"] = "Confermazione SUG";
$factarray["COPR"] = "Copyright";
$factarray["CORP"] = "Compagnia / Società";
$factarray["CREM"] = "Cremazione";
$factarray["CTRY"] = "Nazione";
$factarray["DATA"] = "Dati";
$factarray["DATE"]	= "Data";
$factarray["DEAT"] = "Morte";
$factarray["DESC"] = "Discendenti";
$factarray["DESI"] = "Interesse per i discendenti";
$factarray["DEST"] = "Destinazione";
$factarray["DIV"] = "Divorzio";
$factarray["DIVF"] = "Divorzio presentato";
$factarray["DSCR"] = "Descrizione";
$factarray["EDUC"] = "Educazione";
$factarray["EMIG"] = "Emigrazione";
$factarray["ENDL"] = "Dote SUG";
$factarray["ENGA"] = "Fidanzamento";
$factarray["EVEN"] = "Evento";
$factarray["FAM"] = "Famiglia";
$factarray["FAMC"] = "Famiglia da bambino";
$factarray["FAMF"] = "Dossier familiare";
$factarray["FAMS"] = "Famiglia da coniuge";
$factarray["FCOM"] = "Prima comunione";
$factarray["FILE"] = "File esterno";
$factarray["FORM"] = "Formato";
$factarray["GIVN"] = "Nome proprio";
$factarray["GRAD"] = "Laurea";
$factarray["HUSB"]  = "Marito";
$factarray["IDNO"] = "Identificativo";
$factarray["IMMI"] = "Immigrazione";
$factarray["LEGA"] = "Legatario";
$factarray["MARB"] = "Pubblicazioni matrimoniali";
$factarray["MARC"] = "Contratto di matrimonio";
$factarray["MARL"] = "Licenza di matrimonio";
$factarray["MARR"] = "Matrimonio";
$factarray["MARS"] = "Accordo pre-matrimoniale";
$factarray["MEDI"]	= "Tipo media";
$factarray["NAME"] = "Nome";
$factarray["NATI"] = "Nazionalità";
$factarray["NATU"] = "Naturalizzazione";
$factarray["NCHI"] = "Numero di bambini";
$factarray["NICK"] = "Soprannome";
$factarray["NMR"] = "Numero di matrimoni";
$factarray["NOTE"] = "Note";
$factarray["NPFX"] = "Prefisso del Nome";
$factarray["NSFX"] = "Suffisso del Nome";
$factarray["OBJE"] = "Oggetto multimediale";
$factarray["OCCU"] = "Occupazione";
$factarray["ORDI"]	= "Ordinanza";
$factarray["ORDN"] = "Ordinazione";
$factarray["PAGE"] = "Dettagli della citazione";
$factarray["PEDI"] = "Antenati";
$factarray["PLAC"] = "Località";
$factarray["PHON"] = "Telefono";
$factarray["POST"] = "Codice postale";
$factarray["PROB"] = "Probate";
$factarray["PROP"] = "Proprietà";
$factarray["PUBL"] = "Pubblicazione";
$factarray["QUAY"] = "Qualità dei dati";
$factarray["REPO"]	= "Deposito";
$factarray["REFN"] = "Numero di riferimento";
$factarray["RELA"]	= "Rapporto";
$factarray["RELI"] = "Religione";
$factarray["RESI"] = "Residenza";
$factarray["RESN"] = "Restrizione";
$factarray["RETI"] = "Pensionamento";
$factarray["RFN"] = "Numero di archivio del registor";
$factarray["RIN"] = "Numero ID";
$factarray["ROLE"] = "Ruolo";
$factarray["SEX"] = "Sesso";
$factarray["SLGC"] = "Suggellatura SUG del Bambino";
$factarray["SLGS"] = "Suggellatura SUG al Coniuge";
$factarray["SOUR"] = "Origine";
$factarray["SPFX"] = "Prefisso del Cognome";
$factarray["SSN"] = "Numero di Previdenza Sociale";
$factarray["STAE"] = "Provincia";
$factarray["STAT"] = "Status";
$factarray["SUBM"] = "Inviato da:";
$factarray["SUBN"] = "Dati da trattare";
$factarray["SURN"] = "Cognome";
$factarray["TEMP"] = "Tempio";
$factarray["TEXT"] = "Testo";
$factarray["TIME"] = "Ora";
$factarray["TITL"] = "Titolo";
$factarray["TYPE"]	= "Tipo";
$factarray["WIFE"]  = "Moglie";
$factarray["WILL"] = "Testamento";
$factarray["_EMAIL"] = "Indirizzo E-mail";
$factarray["EMAIL"] = "Indirizzo E-mail";
$factarray["_TODO"] = "Item Da Fare";
$factarray["_UID"] = "Identificatore Universale";
$factarray["_PRIM"]	= "Immagine evidenziata";
$factarray["_DBID"] = "Identificativo Database collegato";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Data di cambio status";
$factarray["DATA:DATE"] = "Data di inserimento nella fonte originale";

$factarray["NAME:_HEB"]	= "Nome ebraico";
$factarray["PLAC:_HEB"]	= "Luogo ebraico";
$factarray["TITL:_HEB"]	= "Titolo ebraico";
$factarray["NAME:ROMN"]	= "Nome romanizzato";
$factarray["PLAC:ROMN"]	= "Luogo romanizzato";
$factarray["TITL:ROMN"]	= "Titolo romanizzato";
$factarray["NAME:FONE"]	= "Nome fonetico";
$factarray["PLAC:FONE"]	= "Luogo fonetico";
$factarray["TITL:FONE"]	= "Titolo fonetico";

$factarray["SHARED_NOTE"]	= "Nota condivisa";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] = "Cognome del padre";
$factarray["FAMC:WIFE:SURN"] = "Cognome della madre";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Luogo di nascita del padre";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Luogo di nascita della madre";
$factarray["FAMC:MARR:PLAC"] = "Luogo di matrimonio dei genitori";
$factarray["FAMC:HUSB:OCCU"] = "Occupazione del padre";
$factarray[":BIRT:PLAC"] = "Luogo di nascita";
$factarray["FAMS:MARR:PLAC"] = "Luogo di matrimonio";
$factarray["FAMS:MARR:DATE"] = "Data di matrimonio";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Luogo di morte del coniuge";
$factarray["FAMC:HUSB:GIVN"] = "Nome del padre";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Luogo di nascita del coniuge";
$factarray["FAMC:WIFE:GIVN"] = "Nome della madre";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Nome del nonno paterno";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Nome della nonna materna";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Nome del nonno materno";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Nome della nonna paterna";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Luogo di nascita del bambino";
$factarray["FAMS:NOTE"] = "Annotazioni sugli sposi";
$factarray["FAMS:CENS:DATE"] = "Spouse Census Date";
$factarray["FAMS:CENS:PLAC"] = "Spouse Census Place";
$factarray["FAMS:DIV:DATE"] = "Spouse Divorce Date";
$factarray["FAMS:DIV:PLAC"] = "Spouse Divorce Place";
$factarray["FAMS:SLGS:DATE"] = "Data di sigillatura SUG degli sposi";
$factarray["FAMS:SLGS:PLAC"] = "Luogo di sigillatura SUG degli sposi";
$factarray["FAMS:SLGS:TEMP"] = "Tempio di sigillatura SUG degli sposi";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Luogo di nascita";
$factarray["BIRT:DATE"] = "Data di nascita";
$factarray["BIRT:SOUR"] = "Fonte di nascita";
$factarray["DEAT:PLAC"] = "Luogo di morte";
$factarray["DEAT:DATE"] = "Data di morte";
$factarray["DEAT:SOUR"] = "Fonte di morte";
$factarray["CHR:PLAC"] = "Luogo di battesimo";
$factarray["CHR:DATE"] = "Data di battesimo";
$factarray["CHR:SOUR"] = "Fonte di battesimo";
$factarray["CONF:PLAC"] = "Luogo di confermazione";
$factarray["CONF:DATE"] = "Data di confermazione";
$factarray["CONF:SOUR"] = "Fonte di confermazione";
$factarray["BAPM:PLAC"] = "Luogo di battesimo";
$factarray["BAPM:DATE"] = "Data di battesimo";
$factarray["BAPM:SOUR"] = "Fonte di battesimo";
$factarray["_BRTM:PLAC"] = "Luogo di Brit Mila";
$factarray["_BRTM:DATE"] = "Data di Brit Mila";
$factarray["_BRTM:SOUR"] = "Fonte di Brit Mila";
$factarray["BARM:PLAC"] = "Luogo di Bar Mitzvah";
$factarray["BARM:DATE"] = "Data di Bar Mitzvah";
$factarray["BARM:SOUR"] = "Fonte di Bar Mitzvah";
$factarray["BASM:PLAC"] = "Luogo di Bas Mitzvah";
$factarray["BASM:DATE"] = "Data di Bas Mitzvah";
$factarray["BASM:SOUR"] = "Fonte di Bas Mitzvah";
$factarray["BURI:PLAC"] = "Luogo di sepoltura";
$factarray["BURI:DATE"] = "Data di sepoltura";
$factarray["BURI:SOUR"] = "Fonte di sepoltura";
$factarray["FCOM:PLAC"] = "Luogo della prima comunione";
$factarray["FCOM:DATE"] = "Data della prima comunione";
$factarray["FCOM:SOUR"] = "Fonte della prima comunione";
$factarray["MARB:PLAC"] = "Luogo di pubblicazioni matrimoniali";
$factarray["MARB:DATE"] = "Data di pubblicazioni matrimoniali";
$factarray["MARB:SOUR"] = "Fonte di pubblicazioni matrimoniali";
$factarray["MARR:PLAC"] = "Luogo di matrimonio";
$factarray["MARR:DATE"] = "Data di matrimonio";
$factarray["MARR:SOUR"] = "Fonte di matrimonio";
$factarray["ENGA:PLAC"] = "Luogo di fidanzamento";
$factarray["ENGA:DATE"] = "Data di fidanzamento";
$factarray["ENGA:SOUR"] = "Fonte di fidanzamento";

$factarray["REPO:NAME"] = "Nome dell'archivio";
$factarray["REPO:ADDR"] = "Indirizzo dell'archivio";
$factarray["REPO:PHON"] = "Numero di telefono dell'archivio";
$factarray["REPO:FAX"]  = "Numero di FAX dell'archivio";
$factarray["REPO:EMAIL"] = "Indirizzo e-mail dell'archivio";
$factarray["REPO:WWW"]  = "Home Page dell'archivio";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]	= "Medical";
$factarray["_DEG"]	= "Grado";
$factarray["_SEPR"] = "Separato";
$factarray["_MILT"]	= "Servizio Militare";
$factarray["_DETS"] = "Morte di coniuge";
$factarray["CITN"] = "Cittadinanza";
$factarray["_FA1"]	= "Fatto 1";
$factarray["_FA2"]	= "Fatto 2";
$factarray["_FA3"]	= "Fatto 3";
$factarray["_FA4"]	= "Fatto 4";
$factarray["_FA5"]	= "Fatto 5";
$factarray["_FA6"]	= "Fatto 6";
$factarray["_FA7"]	= "Fatto 7";
$factarray["_FA8"]	= "Fatto 8";
$factarray["_FA9"]	= "Fatto 9";
$factarray["_FA10"]	= "Fatto 10";
$factarray["_FA11"]	= "Fatto 11";
$factarray["_FA12"]	= "Fatto 12";
$factarray["_FA13"]	= "Fatto 13";
$factarray["_MREL"]	= "Correlato alla madre";
$factarray["_FREL"]	= "Correlato al padre";
$factarray["_MSTAT"]	= "Inizio stato matrimoniale";
$factarray["_MEND"]	= "Fine stato matrimoniale";
$factarray["_NAMS"]	= "Omonimo";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "FAX";
$factarray["FACT"] = "Fatto";
$factarray["WWW"] = "Web Home Page";
$factarray["MAP"] = "Mappa";
$factarray["LATI"] = "Latitudine";
$factarray["LONG"] = "Longitudine";
$factarray["FONE"] = "Fonetico";
$factarray["ROMN"] = "Latinizzato";

// PAF related facts
$factarray["_NAME"] = "Nome di posta";
$factarray["URL"] = "URL Web";
$factarray["_URL"] = "URL Web";
$factarray["_HEB"] = "Ebreo";
$factarray["_SCBK"] = "Album-rassegna";
$factarray["_TYPE"] = "Tipo di media";
$factarray["_SSHOW"] = "Slide Show";

// Rootsmagic
$factarray["_SUBQ"]= "Versione breve";
$factarray["_BIBL"] = "Bibliografia";

// Reunion
$factarray["EMAL"]	= "Indirizzo e-mail";

// Other common customized facts
$factarray["_ADPF"] = "Adottato dal padre";
$factarray["_ADPM"] = "Adottato dalla madre";
$factarray["_AKAN"] = "Soprannominato";
$factarray["_AKA"] 	= "Soprannominato";
$factarray["_BRTM"]	= "Brit Mila";
$factarray["_COML"]	= "Matrimonio legale";
$factarray["_EYEC"] = "Colore degli occhi";
$factarray["_FNRL"] = "Funerale";
$factarray["_HAIR"] = "Colore dei capelli";
$factarray["_HEIG"] = "Altezza";
$factarray["_HOL"]  = "Olocausto";
$factarray["_INTE"]	= "Seppellito";
$factarray["_MARI"]	= "Promessa di matrimonio";
$factarray["_MBON"]	= "Legame matrimoniale";
$factarray["_MEDC"]	= "Condizione medica";
$factarray["_MILI"]	= "Servizio militare";
$factarray["_NMR"] = "Non sposato";
$factarray["_NLIV"] = "Non in vita";
$factarray["_NMAR"] = "Mai sposato";
$factarray["_PRMN"]	= "Numero permanente";
$factarray["_WEIG"] = "Peso";
$factarray["_YART"]	= "Yahrzeit";
$factarray["_MARNM"] = "Nome coniugale";
$factarray["_MARNM_SURN"] = "Cognome coniugale";
$factarray["_STAT"]	= "Stato matrimoniale";
$factarray["COMM"]	= "Commento";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Matrimonio civile";
$factarray["MARR_UNKNOWN"] = "Matrimonio di tipo sconosciuto";
$factarray["MARR_RELIGIOUS"] = "Matrimonio Religioso";
$factarray["MARR_PARTNERS"] = "Relazione riconosciuta";

$factarray["_HNM"] = "Nome ebraico";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Morte del coniuge";
$factarray["_BURI_SPOU"] = "Sepoltura del coniuge";
$factarray["_CREM_SPOU"] = "Cremazione del coniuge";

$factarray["_BIRT_CHIL"] = "Nascita di figlio";
$factarray["_CHR_CHIL"] = "Battesimo di figlio";
$factarray["_BAPM_CHIL"] = "Battesimo di figlio";
$factarray["__BRTM_CHIL"] = "Brit Mila di figlio";
$factarray["_ADOP_CHIL"] = "Adozione di figlio ";
$factarray["_MARR_CHIL"] = "Matrimonio di figlio";
$factarray["_MARB_CHIL"] = "Pubblicazione di matrimonio di figlio";
$factarray["_DEAT_CHIL"] = "Morte di figlio";
$factarray["_BURI_CHIL"] = "Sepoltura di figlio";
$factarray["_CREM_CHIL"] = "Cremazione di figlio";

$factarray["_BIRT_GCHI"] = "Nascita di nipote";
$factarray["_CHR_GCHI"] = "Battesimo di nipote";
$factarray["_BAPM_GCHI"] = "Battesimo di nipote";
$factarray["__BRTM_GCHI"] = "Brit Mila di nipote";
$factarray["_ADOP_GCHI"] = "Adozione di nipote";
$factarray["_MARR_GCHI"] = "Matrimonio di nipote";
$factarray["_MARB_GCHI"] = "Pubblicazione di matrimonio di nipote";
$factarray["_DEAT_GCHI"] = "Morte di nipote";
$factarray["_BURI_GCHI"] = "Sepoltura di nipote";
$factarray["_CREM_GCHI"] = "Cremazione di nipote";

$factarray["_BIRT_GGCH"] = "Nascita di pronipote";
$factarray["_CHR_GGCH"] = "Battesimo di pronipote";
$factarray["_BAPM_GGCH"] = "Battesimo di pronipote";
$factarray["__BRTM_GGCH"] = "Brit Mila di pronipote";
$factarray["_ADOP_GGCH"] = "Adozione di pronipote";
$factarray["_MARR_GGCH"] = "Matrimonio di pronipote";
$factarray["_MARB_GGCH"] = "Pubblicazione di matrimonio di pronipote";
$factarray["_DEAT_GGCH"] = "Morte di pronipote";
$factarray["_BURI_GGCH"] = "Sepoltura di pronipote";
$factarray["_CREM_GGCH"] = "Cremazione di pronipote";

$factarray["_MARR_FATH"] = "Matrimonio del padre";
$factarray["_MARB_FATH"] = "Pubblicazione di matrimonio del padre";
$factarray["_DEAT_FATH"] = "Morte del padre";
$factarray["_BURI_FATH"] = "Sepoltura del padre";
$factarray["_CREM_FATH"] = "Cremazione del padre";

$factarray["_MARR_FAMC"] = "Matrimonio dei genitori";
$factarray["_MARB_FAMC"] = "Pubblicazione di matrimonio dei genitori";

$factarray["_MARR_MOTH"] = "Matrimonio della madre";
$factarray["_MARB_MOTH"] = "Pubblicazione di matrimonio della madre";
$factarray["_DEAT_MOTH"] = "Morte della madre";
$factarray["_BURI_MOTH"] = "Sepoltura della madre";
$factarray["_CREM_MOTH"] = "Cremazione della madre";

$factarray["_BIRT_SIBL"] = "Nascita di fratelli/sorelle";
$factarray["_CHR_SIBL"] = "Battesimo di fratelli/sorelle";
$factarray["_BAPM_SIBL"] = "Battesimo di fratelli/sorelle";
$factarray["__BRTM_SIBL"] = "Brit Mila di fratelli/sorelle";
$factarray["_ADOP_SIBL"] = "Adozione di fratelli/sorelle";
$factarray["_MARR_SIBL"] = "Matrimonio di fratelli/sorelle";
$factarray["_MARB_SIBL"] = "Pubblicazione di matrimonio di fratelli/sorelle";
$factarray["_DEAT_SIBL"] = "Morte di fratelli/sorelle";
$factarray["_BURI_SIBL"] = "Sepoltura di fratelli/sorelle";
$factarray["_CREM_SIBL"] = "Cremazione di fratelli/sorelle";

$factarray["_BIRT_HSIB"] = "Nascita di fratellastri/sorellastre";
$factarray["_CHR_HSIB"] = "Battesimo di fratellastri/sorellastre";
$factarray["_BAPM_HSIB"] = "Battesimo di fratellastri/sorellastre";
$factarray["__BRTM_HSIB"] = "Brit Mila di fratellastri/sorellastre";
$factarray["_ADOP_HSIB"] = "Adozione di fratellastri/sorellastre";
$factarray["_MARR_HSIB"] = "Matrimonio di fratellastri/sorellastre";
$factarray["_MARB_HSIB"] = "Pubblicazione di matrimonio di fratellastri/sorellastre";
$factarray["_DEAT_HSIB"] = "Morte di fratellastri/sorellastre";
$factarray["_BURI_HSIB"] = "Sepoltura di fratellastri/sorellastre";
$factarray["_CREM_HSIB"] = "Cremazione di fratellastri/sorellastre";

$factarray["_BIRT_NEPH"] = "Nascita di nipote";
$factarray["_CHR_NEPH"] = "Battesimo di nipote";
$factarray["_BAPM_NEPH"] = "Battesimo di nipote";
$factarray["__BRTM_NEPH"] = "Brit Mila di nipote";
$factarray["_ADOP_NEPH"] = "Adozione di nipote";
$factarray["_MARR_NEPH"] = "Matrimonio di nipote";
$factarray["_MARB_NEPH"] = "Pubblicazione di matrimonio di nipote";
$factarray["_DEAT_NEPH"] = "Morte di nipote";
$factarray["_BURI_NEPH"] = "Sepoltura di nipote";
$factarray["_CREM_NEPH"] = "Cremazione di nipote";

$factarray["_DEAT_GPAR"] = "Morte di nonno/nonna";
$factarray["_BURI_GPAR"] = "Sepoltura di nonno/nonna";
$factarray["_CREM_GPAR"] = "Cremazione di nonno/nonna";

$factarray["_DEAT_GGPA"] = "Morte di bisnonno/bisnonna";
$factarray["_BURI_GGPA"] = "Sepoltura di bisnonno/bisnonna";
$factarray["_CREM_GGPA"] = "Cremazione di bisnonno/bisnonna";

$factarray["_BIRT_FSIB"] = "Nascita di fratello/sorella del padre";
$factarray["_CHR_FSIB"] = "Battesimo di fratello/sorella del padre";
$factarray["_BAPM_FSIB"] = "Battesimo di fratello/sorella del padre";
$factarray["__BRTM_FSIB"] = "Brit Mila di fratello/sorella del padre";
$factarray["_ADOP_FSIB"] = "Adozione di fratello/sorella del padre";
$factarray["_MARR_FSIB"] = "Matrimonio di fratello/sorella del padre";
$factarray["_MARB_FSIB"] = "Pubblicazione di matrimonio di fratello/sorella del padre";
$factarray["_DEAT_FSIB"] = "Morte di fratello/sorella del padre";
$factarray["_BURI_FSIB"] = "Sepoltura di fratello/sorella del padre";
$factarray["_CREM_FSIB"] = "Cremazione di fratello/sorella del padre";

$factarray["_BIRT_MSIB"] = "Nascita di fratello/sorella della madre";
$factarray["_CHR_MSIB"] = "Battesimo di fratello/sorella della madre";
$factarray["_BAPM_MSIB"] = "Battesimo di fratello/sorella della madre";
$factarray["__BRTM_MSIB"] = "Brit Mila di fratello/sorella della madre";
$factarray["_ADOP_MSIB"] = "Adozione di fratello/sorella della madre";
$factarray["_MARR_MSIB"] = "Matrimonio di fratello/sorella della madre";
$factarray["_MARB_MSIB"] = "Pubblicazione di matrimonio di fratello/sorella della madre";
$factarray["_DEAT_MSIB"] = "Morte di fratello/sorella della madre";
$factarray["_BURI_MSIB"] = "Sepoltura di fratello/sorella della madre";
$factarray["_CREM_MSIB"] = "Cremazione di fratello/sorella della madre";

$factarray["_BIRT_COUS"] = "Nascita di cugino di primo grado";
$factarray["_CHR_COUS"]  = "Battesimo di cugino di primo grado";
$factarray["_BAPM_COUS"] = "Battesimo di cugino di primo grado";
$factarray["__BRTM_COUS"] = "Brit Mila di cugino di primo grado";
$factarray["_ADOP_COUS"] = "Adozione di cugino di primo grado";
$factarray["_MARR_COUS"] = "Matrimonio di cugino di primo grado";
$factarray["_MARB_COUS"] = "Pubblicazione di matrimonio di cugino di primo grado";
$factarray["_DEAT_COUS"] = "Morte di cugino di primo grado";
$factarray["_BURI_COUS"] = "Sepoltura di cugino di primo grado";
$factarray["_CREM_COUS"] = "Cremazione di cugino di primo grado";

$factarray["_FAMC_EMIG"] = "Emigrazione dei genitori";
$factarray["_FAMC_RESI"] = "Residenza dei genitori";

//-- PGV Only facts
$factarray["_THUM"]	= "Usa sempre l'immagine principale?";
$factarray["_PGVU"]	= "Ultima modifica di";
$factarray["SERV"] = "Server remoto";
$factarray["_GEDF"] = "File GEDCOM";

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

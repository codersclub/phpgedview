<?php
/**
 * Greek Language file for PhpGedView.
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
 * @author Nicholas G. Antimisiaris
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their English values
$factarray["ABBR"]		= "Συντομογραφία";
$factarray["ADDR"]		= "Διεύθυνση";
$factarray["ADR1"]		= "Διεύθυνση 1";
$factarray["ADR2"]		= "Διεύθυνση 2";
$factarray["ADOP"]		= "Υιοθεσία";
$factarray["AFN"]		= "Ancestral File Number (AFN)";
$factarray["AGE"]		= "Ηλικία";
$factarray["AGNC"]		= "Υπηρεσία";
$factarray["ALIA"]		= "Ψευδόνυμο";
$factarray["ANCE"]		= "Πρόγονοι";
$factarray["ANCI"]		= "Ενδιαφέροντα προγόνων";
$factarray["ANUL"]		= "Ακύρωση";
$factarray["ASSO"]		= "Συνέταιροι";
$factarray["AUTH"]		= "Συγγραφέας";
$factarray["BAPL"]		= "LDS Βάπτιση";
$factarray["BAPM"]		= "Βάπτιση";
$factarray["BARM"]		= "Bar Mitzvah";
$factarray["BASM"]		= "Bas Mitzvah";
$factarray["BIRT"]		= "Γέννηση";
$factarray["BLES"]		= "Ευλογία";
$factarray["BLOB"]		= "Binary Data Object";
$factarray["BURI"]		= "Ταφή";
$factarray["CALN"]		= "Call Number";
$factarray["CAST"]		= "Κοινωνική τάξη";
$factarray["CAUS"]		= "Αίτια θανάτου";
$factarray["CENS"]		= "Απογραφή";
$factarray["CHAN"]		= "Τελευταία αλλαγή";
$factarray["CHAR"]		= "Character Set";
$factarray["CHIL"]		= "Παιδί";
$factarray["CHR"]		= "Βάπτιση";
$factarray["CHRA"]		= "Βάπτιση ενήλικα";
$factarray["CITY"]		= "Πόλη";
$factarray["CONF"]		= "Χρίσμα";
$factarray["CONL"]		= "LDS Χρίσμα";
$factarray["COPR"]		= "Πνευματική ιδιοκτησία";
$factarray["CORP"]		= "Εταιρία";
$factarray["CREM"]		= "Αποτέφρωση";
$factarray["CTRY"]		= "Χώρα";
$factarray["DATA"]		= "Δεδομένα";
$factarray["DATE"]		= "Ημερομηνία";
$factarray["DEAT"]		= "Θάνατος";
$factarray["DESC"]		= "Απόγονοι";
$factarray["DESI"]		= "Ενδιαφέροντα απογόνων";
$factarray["DEST"]		= "Προορισμός";
$factarray["DIV"]		= "Διαζύγιο";
$factarray["DIVF"]		= "Αίτηση διαζυγίου";
$factarray["DSCR"]		= "Περιγραφή";
$factarray["EDUC"]		= "Εκπαίδευση";
$factarray["EMIG"]		= "Μετανάστευση";
$factarray["ENDL"]		= "LDS Προίκα";
$factarray["ENGA"]		= "Αρραβώνας";
$factarray["EVEN"]		= "Γεγονός";
$factarray["FAM"]		= "Οικογένεια";
$factarray["FAMC"]		= "Οικογένεια ως παιδί";
$factarray["FAMF"]		= "Οικογενειακό αρχείο";
$factarray["FAMS"]		= "Οικογένεια ως σύζυγος";
$factarray["FCOM"]		= "Πρώτη Κοινωνία";
$factarray["FILE"]		= "Εξωτερικό Αρχείο";
$factarray["FORM"]		= "Μορφή";
$factarray["GIVN"]		= "Δοσμένα ονόματα";
$factarray["GRAD"]		= "Αποφοίτηση";
$factarray["IDNO"]		= "Αριθμός Ταυτότητας";
$factarray["IMMI"]		= "Μετανάστευση";
$factarray["LEGA"]		= "Κληρονόμος";
$factarray["MARB"]		= "Γάμος Bann";
$factarray["MARC"]		= "Συμβόλαιο γάμου";
$factarray["MARL"]		= "Άδεια γάμου";
$factarray["MARR"]		= "Γάμος";
$factarray["MARS"]		= "Διακανονισμός γάμου";
$factarray["MEDI"]		= "Τύπος πολυμέσων";
$factarray["NAME"]		= "Όνομα";
$factarray["NATI"]		= "Υπηκοότητα";
$factarray["NATU"]		= "Πολιτογράφιση";
$factarray["NCHI"]		= "Αριθμός παιδιών";
$factarray["NICK"]		= "Παρατσούκλι";
$factarray["NMR"]		= "Αριθμός γάμων";
$factarray["NOTE"]		= "Σημείωση";
$factarray["NPFX"]		= "Πρόθεμα";
$factarray["NSFX"]		= "Επίθεμα";
$factarray["OBJE"]		= "Αντικείμενο πολυμέσων";
$factarray["OCCU"]		= "Επάγγελμα";
$factarray["ORDI"]		= "Χειροτονία";
$factarray["ORDN"]		= "Χειροτονία (τελετή)";
$factarray["PAGE"]		= "Λεπτομέρειες παραπομπής";
$factarray["PEDI"]		= "Γενεαλόγιο";
$factarray["PLAC"]		= "Τόπος";
$factarray["PHON"]		= "Τηλέφωνο";
$factarray["POST"]		= "Ταχυδρομικός κώδικας";
$factarray["PROB"]		= "Επικύρωση (διαθήκης)";
$factarray["PROP"]		= "Ιδιοκτησία";
$factarray["PUBL"]		= "Δημοσίευση";
$factarray["QUAY"]		= "Ποιότητα δεδομένων";
$factarray["REPO"]		= "Χώρος φύλαξης";
$factarray["REFN"]		= "Αριθμός αναφοράς";
$factarray["RELA"]		= "Συγγένεια";
$factarray["RELI"]		= "Θρήσκευμα";
$factarray["RESI"]		= "Διαμονή";
$factarray["RESN"]		= "Περιορισμός";
$factarray["RETI"]		= "Συνταξιοδότηση";
$factarray["RFN"]		= "Αριθμός αρχείου εγγραφής";
$factarray["RIN"]		= "Αριθμός ID εγγραφής";
$factarray["ROLE"]		= "Ρόλος";
$factarray["SEX"]		= "Φύλο";
$factarray["SLGC"]		= "LDS Child Sealing";
$factarray["SLGS"]		= "LDS Spouse Sealing";
$factarray["SOUR"]		= "Πηγή";
$factarray["SPFX"]		= "Πρόθεμα επωνύμου";
$factarray["SSN"]		= "Αριθμός κοινωνικής ασφάλισης";
$factarray["STAE"]		= "Πολιτεία";
$factarray["STAT"]		= "Κατάσταση";
$factarray["SUBM"]		= "Υποβολέας";
$factarray["SUBN"]		= "Υποβολή";
$factarray["SURN"]		= "Επώνυμο";
$factarray["TEMP"]		= "Ναός";
$factarray["TEXT"]		= "Κείμενο";
$factarray["TIME"]		= "Ώρα";
$factarray["TITL"]		= "Τίτλος";
$factarray["TYPE"]		= "Τύπος";
$factarray["WILL"]		= "Διαθήκη";
$factarray["_EMAIL"]	= "Διεύθυνση email";
$factarray["EMAIL"]		= "Διεύθυνση email";
$factarray["_TODO"]		= "Αντικείμενο προς ενέργεια";
$factarray["_UID"]		= "Καθολικό μοναδικό αναγνωριστικό";
$factarray["_PGVU"]		= "από";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]		= "Ιατρικά";
$factarray["_DEG"]		= "Βαθμός/Πτυχίο";
$factarray["_MILT"]		= "Στρατιωτική υπηρεσία";
$factarray["_SEPR"]		= "Σε διάσταση";
$factarray["_DETS"]		= "Θάνατος ενός συζύγου";
$factarray["CITN"]		= "Υπηκοότητα";
$factarray["_FA1"]		= "Γεγονός 1";
$factarray["_FA2"]		= "Γεγονός 2";
$factarray["_FA3"]		= "Γεγονός 3";
$factarray["_FA4"]		= "Γεγονός 4";
$factarray["_FA5"]		= "Γεγονός 5";
$factarray["_FA6"]		= "Γεγονός 6";
$factarray["_FA7"]		= "Γεγονός 7";
$factarray["_FA8"]		= "Γεγονός 8";
$factarray["_FA9"]		= "Γεγονός 9";
$factarray["_FA10"]		= "Γεγονός 10";
$factarray["_FA11"]		= "Γεγονός 11";
$factarray["_FA12"]		= "Γεγονός 12";
$factarray["_FA13"]		= "Γεγονός 13";
$factarray["_MREL"]		= "Συγγένεια με μητέρα";
$factarray["_FREL"]		= "Συγγένεια με πατέρα";
$factarray["_MSTAT"]	= "Αρχική κατάσταση γάμου";
$factarray["_MEND"]		= "Τελική κατάσταση γάμου";

// GEDCOM 5.5.1 related facts
$factarray["FAX"]		= "FAX";
$factarray["FACT"]		= "Γεγονός";
$factarray["WWW"]		= "Αρχική ιστοσελίδα";
$factarray["MAP"]		= "Χάρτης";
$factarray["LATI"]		= "Γεωγραφικό πλάτος";
$factarray["LONG"]		= "Γεωγραφικό μήκος";
$factarray["FONE"]		= "Φωνητικά";
$factarray["ROMN"]		= "Εκλατινισμένο";

// PAF related facts
$factarray["_NAME"]		= "Ονοματεπώνυμο για ταχυδρομείο";
$factarray["URL"]		= "URL ιστού";
$factarray["_HEB"]		= "Εβραϊκά";

// Rootsmagic
$factarray["_SUBQ"]		= "Σύντομη έκδοση";
$factarray["_BIBL"]		= "Βιβλιογραφία";

// Other common customized facts
$factarray["_ADPF"]		= "Υιοθεσία από πατέρα";
$factarray["_ADPM"]		= "Υιοθεσία από μητέρα";
$factarray["_AKAN"]		= "Γνωστός και ως";
$factarray["_AKA"]		= "Γνωστός και ως";
$factarray["_BRTM"]		= "Brit mila";
$factarray["_COML"]		= "Γάμος κοινού δικαίου";
$factarray["_EYEC"]		= "Χρώμα ματιών";
$factarray["_FNRL"]		= "Κηδεία";
$factarray["_HAIR"]		= "Χρώμα μαλλιών";
$factarray["_HEIG"]		= "Ύψος";
$factarray["_INTE"]		= "Ταφή";
$factarray["_MARI"]		= "Πρόθεση γάμου";
$factarray["_MBON"]		= "Δεσμός γάμου";
$factarray["_MEDC"]		= "Ιατρική κατάσταση";
$factarray["_MILI"]		= "Στρατιωτικό";
$factarray["_NMR"]		= "Δεν είναι παντρεμένος/η";
$factarray["_NLIV"]		= "Δεν ζει";
$factarray["_NMAR"]		= "Δεν παντρεύτηκε ποτέ";
$factarray["_PRMN"]		= "Μόνιμος αριθμός";
$factarray["_WEIG"]		= "Βάρος";
$factarray["_YART"]		= "Yartzeit";
$factarray["_MARNM"]	= "Όνομα γάμου";
$factarray["_STAT"]		= "Κατάσταση γάμου";
$factarray["COMM"]		= "Σχόλιο";

$factarray["CEME"]  = "Νεκροταφείο";
$factarray["HUSB"]  = "Σύζυγος";
$factarray["WIFE"]  = "Σύζυγος";
$factarray["_PRIM"]	= "Επιλεγμένη εικόνα";
$factarray["_PRIM"]	= "Προβεβλημένη εικόνα";
$factarray["STAT:DATE"] = "Ημερομηνία αλλαγής κατάστασης";
$factarray["STAT:DATE"] = "Ημερομηνία αλλαγής κατάστασης";
$factarray["FAMC:WIFE:SURN"] = "Επώνυμο μητέρας";
$factarray["FAMC:HUSB:SURN"] = "Επώνυμο πατέρα";
$factarray["DATA:DATE"] = "Ημερομηνία εισαγωγής στην αρχική πηγή";
$factarray["FAMC:HUSB:SURN"] = "Επώνυμο πατέρα";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Τόπος γέννησης πατέρα";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Τόπος γέννησης πατέρα";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Τόπος γέννησης μητέρας";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Τόπος γέννησης μητέρας";
$factarray["FAMC:MARR:PLAC"] = "Τόπος γάμου γονέων";
$factarray["FAMC:HUSB:OCCU"] = "Επάγγελμα πατέρα";
$factarray["FAMC:HUSB:OCCU"] = "Επάγγελμα πατέρα";
$factarray[":BIRT:PLAC"] = "Γενέτειρα";
$factarray[":BIRT:PLAC"] = "Τόπος γέννησης";
$factarray["FAMS:MARR:PLAC"] = "Τόπος γάμου";
$factarray["FAMS:MARR:PLAC"] = "Τόπος γάμου";
$factarray["FAMS:MARR:DATE"] = "Ημερομηνία γάμου";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Τόπος θανάτου συζύγου";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Τόπος θανάτου συζύγου";
$factarray["FAMC:HUSB:GIVN"] = "Δοσμένο όνομα πατέρα";
$factarray["FAMC:HUSB:GIVN"] = "Δοσμένο όνομα πατέρα";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Τόπος γέννησης συζύγου ";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Τόπος γέννησης συζύγου";
$factarray["FAMC:WIFE:GIVN"] = "Δοσμένο όνομα μητέρας";
$factarray["FAMC:WIFE:GIVN"] = "Δοσμένο όνομα μητέρας";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Δοσμένο όνομα στον παππού (πατέρας του μπαμπά)";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Πατρικό δοσμένο όνομα παπού";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Δοσμένο όνομα στην γιαγιά (μητέρα της μαμάς)";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Δοσμένο όνομα στον παππού (πατέρας της μαμάς)";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Δοσμένο όνομα στην γιαγιά (μητέρα του μπαμπά)";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Τόπος γέννησης παιδιού";
$factarray["FAMS:NOTE"] = "Σημείωση συζύγου";
$factarray["FAMS:CENS:DATE"] = "Ημερομηνία απογραφής συζύγου";
$factarray["FAMS:CENS:PLAC"] = "Τόπος απογραφής συζύγου";
$factarray["FAMS:DIV:DATE"] = "Ημερομηνία διαζυγίου συζύγου";
$factarray["FAMS:DIV:PLAC"] = "Τόπος διαζυγίου συζύγου";
$factarray["BIRT:PLAC"] = "Τόπος γέννησης";
$factarray["BIRT:DATE"] = "Ημερομηνία γέννησης";
$factarray["DEAT:PLAC"] = "Τόπος θανάτου";
$factarray["DEAT:DATE"] = "Ημερομηνία θανάτου";
$factarray["CHR:PLAC"] = "Τόπος βάφτισης";
$factarray["CHR:DATE"] = "Ημερομηνία βάφτισης";
$factarray["BAPM:PLAC"] = "Τόπος βάπτισης";
$factarray["BAPM:DATE"] = "Ημερομηνία βάπτισης";
$factarray["BURI:PLAC"] = "Τόπος ταφής";
$factarray["BURI:DATE"] = "Ημερομηνία ταφής";
$factarray["MARR:PLAC"] = "Τόπος γάμου";
$factarray["MARR:DATE"] = "Ημερομηνία γάμου";
$factarray["_NAMS"]	= "Συνώνυμος/συνονόματος";
$factarray["_SCBK"] = "Λεύκωμα";
$factarray["_TYPE"] = "Τύπος μέσου";
$factarray["_SSHOW"] = "Ολισθαίνουσα παρουσίαση";
$factarray["EMAL"]	= "Διεύθυνση email";
$factarray["_HOL"]  = "Ολοκαύτωμα";
$factarray["_MARNM_SURN"] = "Επώνυμο γάμου";
$factarray["MARR_CIVIL"] = "Πολιτικός γάμος";
$factarray["MARR_RELIGIOUS"] = "Θρησκευτικός γάμος";
$factarray["MARR_PARTNERS"] = "Σύμφωνο συμβίωσης";
$factarray["MARR_UNKNOWN"] = "Άγνωστος τύπος γάμου";
$factarray["_HNM"] = "Εβραϊκό όνομα";
$factarray["_DEAT_SPOU"] = "Θάνατος συζύγου";
$factarray["_BURI_SPOU"] = "Ταφή συζύγου";
$factarray["_CREM_SPOU"] = "Αποτέφρωση συζύγου";
$factarray["_BIRT_CHIL"] = "Γέννηση παιδιού";
$factarray["_CHR_CHIL" ] = "Βάφτιση παιδιού";
$factarray["_BAPM_CHIL"] = "Βάπτιση παιδιού";
$factarray["_ADOP_CHIL"] = "Υιοθεσία παιδιού";
$factarray["_MARR_CHIL"] = "Γάμος παιδιού";
$factarray["_MARB_CHIL"] = "Γάμος Bann παιδιού";
$factarray["_DEAT_CHIL"] = "Θάνατος παιδιού";
$factarray["_BURI_CHIL"] = "Ταφή παιδιού";
$factarray["_CREM_CHIL"] = "Αποτέφρωση παιδιού";
$factarray["__BRTM_CHIL"] = "Brit Mila παιδιού";
$factarray["_BIRT_GCHI"] = "Γέννηση εγγονιού";
$factarray["__BRTM_GCHI"] = "Brit Mila εγγονιού";
$factarray["_CHR_GCHI" ] = "Βάφτιση εγγονιού";
$factarray["_BAPM_GCHI"] = "Βάπτιση εγγονιού";
$factarray["_ADOP_GCHI"] = "Υιοθεσία εγγονιού";
$factarray["_MARR_GCHI"] = "Γάμος εγγονιού";
$factarray["_MARB_GCHI"] = "Γάμος Bann εγγονιού";
$factarray["_DEAT_GCHI"] = "Θάνατος εγγονιού";
$factarray["_BURI_GCHI"] = "Ταφή εγγονιού";
$factarray["_CREM_GCHI"] = "Αποτέφρωση εγγονιού";
$factarray["_BIRT_GGCH"] = "Γέννηση δισέγγονου";
$factarray["_CHR_GGCH" ] = "Βάφτιση δισέγγονου";
$factarray["_BAPM_GGCH"] = "Βάπτιση δισέγγονου";
$factarray["__BRTM_GGCH"] = "Brit Mila δισέγγονου";
$factarray["_ADOP_GGCH"] = "Υιοθεσία δισέγγονου";
$factarray["_MARR_GGCH"] = "Γάμος δισέγγονου";
$factarray["_MARB_GGCH"] = "Γάμος Bann δισέγγονου";
$factarray["_DEAT_GGCH"] = "Θάνατος δισέγγονου";
$factarray["_BURI_GGCH"] = "Ταφή δισέγγονου";
$factarray["_CREM_GGCH"] = "Αποτέφρωση δισέγγονου";
$factarray["_MARR_FATH"] = "Γάμος πατέρα";
$factarray["_MARB_FATH"] = "Γάμος Bann πατέρα";
$factarray["_DEAT_FATH"] = "Θάνατος πατέρα";
$factarray["_BURI_FATH"] = "Ταφή πατέρα";
$factarray["_CREM_FATH"] = "Αποτέφρωση πατέρα";
$factarray["_MARR_FAMC"] = "Γάμος γονέων";
$factarray["_MARB_FAMC"] = "Γάμος Bann γονέων";
$factarray["_MARR_MOTH"] = "Γάμος μητέρας";
$factarray["_MARB_MOTH"] = "Γάμος Bann μητέρας";
$factarray["_DEAT_MOTH"] = "Θάνατος μητέρας";
$factarray["_BURI_MOTH"] = "Ταφή μητέρας";
$factarray["_CREM_MOTH"] = "Αποτέφρωση μητέρας";
$factarray["_BIRT_SIBL"] = "Γέννηση αδελφιού";
$factarray["_CHR_SIBL" ] = "Βάφτιση αδερφιού";
$factarray["_BAPM_SIBL"] = "Βάπτιση αδερφιού";
$factarray["__BRTM_SIBL"] = "Brit Mila αδερφιού";
$factarray["_ADOP_SIBL"] = "Υιοθεσία αδερφιού";
$factarray["_MARR_SIBL"] = "Γάμος αδερφιού";
$factarray["_MARB_SIBL"] = "Γάμος Bann αδερφιού";
$factarray["_DEAT_SIBL"] = "Θάνατος αδερφιού";
$factarray["_BURI_SIBL"] = "Ταφή αδερφιού";
$factarray["_CREM_SIBL"] = "Αποτέφρωση αδερφιού";
$factarray["_BIRT_HSIB"] = "Γέννηση ετεροθαλούς αδερφιού";
$factarray["_CHR_HSIB" ] = "Βάφτιση ετεροθαλούς αδερφιού";
$factarray["_BAPM_HSIB"] = "Βάπτιση ετεροθαλούς αδερφιού";
$factarray["__BRTM_HSIB"] = "Brit Mila ετεροθαλούς αδερφιού";
$factarray["_ADOP_HSIB"] = "Υιοθεσία ετεροθαλούς αδερφιού";
$factarray["_MARR_HSIB"] = "Γάμος ετεροθαλούς αδερφιού";
$factarray["_MARB_HSIB"] = "Γάμος Bann ετεροθαλούς αδερφιού";
$factarray["_DEAT_HSIB"] = "Θάνατος ετεροθαλούς αδερφιού";
$factarray["_BURI_HSIB"] = "Ταφή ετεροθαλούς αδερφιού";
$factarray["_CREM_HSIB"] = "Αποτέφρωση ετεροθαλούς αδερφιού";
$factarray["_BIRT_NEPH"] = "Γέννηση ανιψιού ή ανιψιάς";
$factarray["_CHR_NEPH" ] = "Βάφτιση ανιψιού ή ανιψιάς";
$factarray["_BAPM_NEPH"] = "Βάπτιση ανιψιού ή ανιψιάς";
$factarray["__BRTM_NEPH"] = "Brit Mila ανιψιού";
$factarray["_ADOP_NEPH"] = "Υιοθεσία ανιψιού ή ανιψιάς";
$factarray["_MARR_NEPH"] = "Γάμος ανιψιού ή ανιψιάς";
$factarray["_MARB_NEPH"] = "Γάμος Bann ανιψιού ή ανιψιάς";
$factarray["_DEAT_NEPH"] = "Θάνατος ανιψιού ή ανιψιάς";
$factarray["_BURI_NEPH"] = "Ταφή ανιψιού ή ανιψιάς";
$factarray["_CREM_NEPH"] = "Αποτέφρωση ανιψιού ή ανιψιάς";
$factarray["_DEAT_GPAR"] = "Θάνατος παππού ή γιαγιάς";
$factarray["_BURI_GPAR"] = "Ταφή παππού ή γιαγιάς";
$factarray["_CREM_GPAR"] = "Αποτέφρωση παππού ή γιαγιάς";
$factarray["_DEAT_GGPA"] = "Θάνατος προπαππού ή προγιαγιάς";
$factarray["_BURI_GGPA"] = "Ταφή προπαππού ή προγιαγιάς";
$factarray["_CREM_GGPA"] = "Αποτέφρωση προπαππού ή προγιαγιάς";
$factarray["_BIRT_FSIB"] = "Γέννηση αδερφιού του πατέρα";
$factarray["_CHR_FSIB" ] = "Βάφτιση αδερφιού του πατέρα";
$factarray["_BAPM_FSIB"] = "Βάπτιση αδερφιού του πατέρα";
$factarray["__BRTM_FSIB"] = "Brit Mila αδερφιού του πατέρα";
$factarray["_ADOP_FSIB"] = "Υιοθεσία αδερφιού του πατέρα";
$factarray["_MARR_FSIB"] = "Γάμος αδερφιού του πατέρα";
$factarray["_MARB_FSIB"] = "Γάμος Bann αδερφιού του πατέρα";
$factarray["_DEAT_FSIB"] = "Θάνατος αδερφιού του πατέρα";
$factarray["_BURI_FSIB"] = "Ταφή αδερφιού του πατέρα";
$factarray["_CREM_FSIB"] = "Αποτέφρωση αδερφιού του πατέρα";
$factarray["_BIRT_MSIB"] = "Γέννηση αδερφιού της μητέρας";
$factarray["_CHR_MSIB" ] = "Βάφτιση αδερφιού της μητέρας";
$factarray["_BAPM_MSIB"] = "Βάπτιση αδερφιού της μητέρας";
$factarray["__BRTM_MSIB"] = "Brit Mila αδερφιού της μητέρας";
$factarray["_ADOP_MSIB"] = "Υιοθεσία αδερφιού της μητέρας";
$factarray["_MARR_MSIB"] = "Γάμος αδερφιού της μητέρας";
$factarray["_MARB_MSIB"] = "Γάμος Bann αδερφιού της μητέρας";
$factarray["_DEAT_MSIB"] = "Θάνατος αδερφιού της μητέρας";
$factarray["_BURI_MSIB"] = "Ταφή αδερφιού της μητέρας";
$factarray["_CREM_MSIB"] = "Αποτέφρωση αδερφιού της μητέρας";
$factarray["_BIRT_COUS"] = "Γέννηση πρώτου ξαδερφιού";
$factarray["_CHR_COUS"]  = "Βάφτιση πρώτου ξαδερφιού";
$factarray["_BAPM_COUS"] = "Βάπτιση πρώτου ξαδερφιού";
$factarray["__BRTM_COUS"] = "Brit Mila πρώτου ξαδερφιού";
$factarray["_ADOP_COUS"] = "Υιοθεσία πρώτου ξαδερφιού";
$factarray["_MARR_COUS"] = "Γάμος πρώτου ξαδερφιού";
$factarray["_MARB_COUS"] = "Γάμος Bann πρώτου ξαδερφιού";
$factarray["_DEAT_COUS"] = "Θάνατος πρώτου ξαδερφιού";
$factarray["_BURI_COUS"] = "Ταφή πρώτου ξαδερφιού";
$factarray["_CREM_COUS"] = "Αποτέφρωση πρώτου ξαδερφιού";
$factarray["_FAMC_EMIG"] = "Μετανάστευση γονέων";
$factarray["_FAMC_RESI"] = "Διαμονή γονέων";
$factarray["_THUM"]	= "Να χρησιμοποιηθεί αυτή η εικόνα ως μικρογραφία;";
$factarray["SERV"] = "Απομακρυσμένος εξυπηρετητής";
$factarray["_GEDF"] = "Αρχείο GEDCOM";
$factarray["_DBID"] = "ID διασυνδεμένης βάσης δεδομένων";
$factarray["_URL"] = "URL ιστού";
$factarray["NAME:_HEB"]	= "Όνομα στα εβραϊκά";
$factarray["PLAC:_HEB"]	= "Τόπος στα εβραϊκά";
$factarray["TITL:_HEB"]	= "Τίτλος στα εβραϊκά";
$factarray["NAME:ROMN"]	= "Εκλατινισμένο όνομα";
$factarray["PLAC:ROMN"]	= "Εκλατινισμένος τόπος";
$factarray["TITL:ROMN"]	= "Εκλατινισμένος τίτλος";
$factarray["NAME:FONE"]	= "Φωνητικό όνομα";
$factarray["PLAC:FONE"]	= "Φωνητικός τόπος";
$factarray["TITL:FONE"]	= "Φωνητικός τίτλος";
$factarray["SHARED_NOTE"]	= "Κοινόχρηστη σημείωση";
$factarray["_CHR_CHIL"] = "Βάφτιση παιδιού";
$factarray["_CHR_GCHI"] = "Βάφτιση εγγονιού";
$factarray["_CHR_GGCH"] = "Βάφτιση δισεγγονιού";
$factarray["_CHR_SIBL"] = "Βάφτιση αδερφιού";
$factarray["_CHR_HSIB"] = "Βάφτιση ετεροθαλούς αδερφιού";
$factarray["_CHR_NEPH"] = "Βάφτιση ανιψιού ή ανιψιάς";
$factarray["_CHR_FSIB"] = "Βάφτιση αδερφιού του πατέρα";
$factarray["_CHR_MSIB"] = "Βάφτιση αδερφιού της μητέρας";

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

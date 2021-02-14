<?php
/**
 * Greek Language file for PhpGedView.
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
 * @author Nicholas G. Antimisiaris
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

//-- CONFIGURE FILE MESSAGES
$pgv_lang["configure"]					= "Διαμόρφωση PhpGedView";
$pgv_lang["standard_conf"]				= "Βασικές Επιλογές Διαμόρφωσης";
$pgv_lang["advanced_conf"]				= "Προχωρημένες Επιλογές Διαμόρφωσης";
$pgv_lang["meta_conf"]					= "META Tag Επιλογές Διαμόρφωσης";
$pgv_lang["configure_head"]				= "PhpGedView Διαμόρφωση";
$pgv_lang["gedconf_head"]				= "GEDCOM Διαμόρφωση";
$pgv_lang["default_user"]				= "Δημιουργία αρχικού χρήστη διαχείρισης.";
$pgv_lang["about_user"]					= "Πρέπει πρώτα να δημιουργήστε τον βασικό χρήστη διαχείρισης.  Ο χρήστης αυτός θα έχει αρμοδιότητες αλλαγών στα αρχεία διαμόρφωσης, απεικόνισης προσωπικών δεδομένων, και δημιουργία άλλων χρηστών.";
$pgv_lang["can_admin"]					= "Χρήστης με δικαιώματα Διαχείρισης";
$pgv_lang["can_edit"]					= "Επίπεδα Πρόσβασης";
$pgv_lang["access"]						= "Απλή Πρόσβαση";
$pgv_lang["add_user"]					= "Προσθήκη νέου χρήστη";
$pgv_lang["current_users"]				= "Επικαιροποιημένος Κατάλογος Χρηστών";
$pgv_lang["leave_blank"]				= "Αφήστε κενό τον κωδικό πρόσβασης για να κρατήστε το ήδη υπάρχοντα.";
$pgv_lang["other_theme"]				= "Άλλο, παρακαλώ πληκτρολογήστε";
$pgv_lang["performing_update"]			= "Σε διαδικασία ενημέρωσης.";
$pgv_lang["config_file_read"]			= "Ανάγνωση αρχείου προσαρμογής.";
$pgv_lang["does_not_exist"]				= "δεν υπάρχει";
$pgv_lang["media_drive_letter"]			= "Το path των εικόνων δεν πρέπει να έχει driver letter, εικόνα δεν μπορεί να απεικονιστεί.";
$pgv_lang["pgv_config_write_error"]		= "Σφάλμα!!! Αδυναμία εγγραφής στο αρχείο προσαρμογών του PhpGedView. Παρκαλώ ελέγξτε τα δικαιώματα πρόσβασης του αρχείου και του φακέλλου και δοκιμάστε ξανά.";
$pgv_lang["click_here_to_continue"]		= "Επιλέξτε εδώ για να συνεχίστε.";
$pgv_lang["config_help"]				= "Βοήθεια Προσαρμογών";
$pgv_lang["index"]						= "Αρχεία Ευρετηρίων";
$pgv_lang["db"]							= "Βάση Δεδομένων";
$pgv_lang["admin_gedcoms"]				= "Επιλέξτε εδώ για την διαχείριση GEDCOMS.";
$pgv_lang["current_gedcoms"]			= "Υπάρχοντα GEDCOMs";
$pgv_lang["gedcom_adm_head"]			= "GEDCOM Διαχείριση";
$pgv_lang["ged_gedcom"]					= "GEDCOM Αρχείο";
$pgv_lang["ged_title"]					= "GEDCOM Τίτλος";
$pgv_lang["ged_config"]					= "Αρχείο Προσαρμογών";
$pgv_lang["show_phpinfo"]				= "Εμφάνιση σελίδας PHPInfo";
$pgv_lang["messaging"]					= "PhpGedView Εσωτερική Επικοινωνία";
$pgv_lang["messaging2"]					= "Εσωτερική Επικοινωνία μέσω Ηλεκτρονικού Ταχυδρομείου";
$pgv_lang["daily"]						= "Ημερήσια";
$pgv_lang["weekly"]						= "Εβδομαδιαία";
$pgv_lang["monthly"]					= "Μηνιαία";
$pgv_lang["yearly"]						= "Ετήσια";
$pgv_lang["last_login"]					= "Τελευταία πρόσβαση";
$pgv_lang["DBTYPE"]						= "Τύπος Βάσης Δεδομένων";
$pgv_lang["DBUSER"]						= "Όνομα Χρήστη Βάσης Δεδομένων";
$pgv_lang["DBPASS"]						= "Κωδικός Βάσης Δεδομένων";
$pgv_lang["DBNAME"]						= "Όνομα Βάσης Δεδομένων";
$pgv_lang["TBLPREFIX"]					= "Πρόθεμα Πινάκων Βάσης Δεδομένων";
$pgv_lang["GEDCOM"]						= "Τοποθεσία και όνομα αρχείου GEDCOM";
$pgv_lang["CHARACTER_SET"]				= "Κωδικοποίηση Χαρακτήρων (encoding)";
$pgv_lang["LANGUAGE"]					= "Γλώσσα";
$pgv_lang["ENABLE_MULTI_LANGUAGE"]		= "Επιτρέπεται στο χρήστη να αλλάζει γλώσσα";
$pgv_lang["CALENDAR_FORMAT"]			= "Μορφή Ημερολογίου";
$pgv_lang["USE_RIN"]							= "Χρήση RIN# αντί GEDCOM ID";
$pgv_lang["GEDCOM_ID_PREFIX"]					= "Πρόθεμα GEDCOM ID";
$pgv_lang["SHOW_EMPTY_BOXES"]					= "Εμφάνιση άδειων κουτιών στα γενεαλογικά διαγράμματα";
$pgv_lang["HIDE_LIVE_PEOPLE"]					= "Ενεργοποίηση Προστασίας Προσωπικών Δεδομένων";

//-- edit privacy messages
$pgv_lang["privacy_source"]							= "Πηγή";
$pgv_lang["hide"]									= "Απόκρυψη";
$pgv_lang["show_question"]							= "Εμφάνιση?";
$pgv_lang["choice"]									= "Επιλογή";

//-- language edit utility
$pgv_lang["export"]									= "Εξαγωγή-Export";
$pgv_lang["lang_name_english"]						= "Αγγλικά";
$pgv_lang["lang_name_french"]						= "Γαλλικά";
$pgv_lang["lang_name_german"]						= "Γερμανικά";
$pgv_lang["lang_name_italian"]						= "Ιταλικά";
$pgv_lang["lang_name_russian"]						= "Ρώσικα";
$pgv_lang["lang_name_spanish"]						= "Ισπανικά";
$pgv_lang["lang_name_turkish"]						= "Τούρκικα";
$pgv_lang["lang_name_greek"]						= "Ελληνικά";
$pgv_lang["lang_new_language"]						= "Νέα Γλώσσα";
$pgv_lang["lang_filename"]							= "Αρχείου Γλώσσας";
$pgv_lang["help_filename"]							= "Αρχείο Βοήθειας";
$pgv_lang["flagsfile"]								= "Όνομα αρχείου σημαίας";
$pgv_lang["text_direction"]							= "Φορά γραφής";
$pgv_lang["time_format"]							= "Μορφή ώρας";
$pgv_lang["week_start"]								= "Αρχική ημέρα της εβδομάδας";
$pgv_lang["name_reverse"]							= "Επώνυμο πρώτα";
$pgv_lang["ltr"]									= "Αριστερά προς δεξιά";
$pgv_lang["rtl"]									= "Δεξιά προς αριστερά";
$pgv_lang["file_does_not_exist"]					= "ΣΦΑΛΜΑ! Το αρχείο δεν υπάρχει...";
$pgv_lang["alphabet_upper"]							= "Αλφάβητο κεφαλαία γράμματα";
$pgv_lang["alphabet_lower"]							= "Αλφάβητο μικρά γράμματα";
$pgv_lang["add_new_lang_button"]					= "Προσθήκη νέας γλώσσας";
$pgv_lang["never"]									= "Ποτέ";

//-- User Migration Tool messages


?>

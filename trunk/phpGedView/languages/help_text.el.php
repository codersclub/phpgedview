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

//-- GENERAL
$pgv_lang["help_header"]					= "Πληροφορίες για:";
$pgv_lang["privacy_error_help"]				= "<b>ΠΡΟΣΩΠΙΚΑ ΣΤΟΙΧΕΙΑ</b><br /><br />Υπάρχουν διάφορες πιθανές αιτίες για το μήνυμα αυτό:<br /><br /><b>1. Πληροφορίες για άτομα εν ζωή έχουν οριστεί ως \"Κρυφά\"</b><br />Μη εγγεγραμμένοι χρήστες που δεν έχουν συνδεθεί μπορούν να δούν πλήρη στοιχεία μόνο για άτομα που έχουν πεθάνει.  Εάν έχει επιτραπεί από τον Διαχειριστή, μπορείτε να υποβάλλετε αίτηση για λογαριασμό επιλέγοντας το κουμπί Διασύνδεσης, και μετά τον σύνδεσμο #pgv_lang[requestaccount]#.<br /><br /><b>2. Είστε χρήστης με όνομα και κωδικό πρόσβασης...</b><br />Αλλά έχετε ξεχάσει να συνδεθείτε ή έχετε αποσυνδεθεί λόγω αδράνειας.<br /><br /><b>3. Λόγω προστασίας προσωπικών δεδομένων</b><br />το άτομο έχει ζητήσει από τον διαχειριστή να τον καταχωρήσει ως \"Πριβέ\" ή δεν θέλει να εμφανίζεται καθόλου (Κρυφός/η).<br />Privacy can be set to:<br />a) #pgv_lang[PRIV_USER]#<br />b) #pgv_lang[PRIV_NONE]#<br />c) #pgv_lang[PRIV_HIDE]#<br /><br /><b>4. Out of \"Relation Path\"</b><br />Even if you are a regular user <b>and</b> logged in, it can still happen that you see this message if the person you are trying to view is not related to you within the number of relationship steps (Relation Path length) set by the site administrator for this GEDCOM.<br />Examples:<br />When the Relation Path length is set to <b>1</b>, you can only see the details of your own family, father, mother, brother, sister (but not the spouses and children of your brother or sister)<br /><br />When the Relation Path is set to <b>2</b>, you can also see the details of your brother's wife and their children (but not the spouses of their children).<br />The higher the Relation Path length setting, the more remote relatives you can see.<br /><br />If you think that you qualify to see certain details, please contact the site administrator by following the contact link on any screen.";

$pgv_lang["mail_option4_help"]				= "Με την επολογή αυτή, δεν θα λαμβάνετε καθόλου μηνύματα.";

$pgv_lang["help_contents_head_help"]		= "<b>ΠΕΡΙΕΧΟΜΕΝΑ ΒΟΗΘΕΙΑ</b>";

//-- Admin Help Contents Items
$pgv_lang["admin_help_contents_head_help"]	= "<b>ΠΕΡΙΕΧΟΜΕΝΑ ΒΟΗΘΕΙΑΣ<br /><br />ADMINISTRATOR HELP ITEMS</b> added to the beginning of the list.";
$pgv_lang["ah1_help"]						= "_Αναβάθμιση";
$pgv_lang["ah2_help"]						= "_Προσαρμογή Εφαρμογής PhpGedView";
$pgv_lang["ah17_help"]						= "_Διαχείριση Χρηστών";
$pgv_lang["ah18_help"]						= "_Διαχείριση";
$pgv_lang["ah21_help"]						= "_Αρχεία Γλωσσών";

?>

<?php
/**
 * German Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  Jürgen Bach, Kurt Norgaz, and Peter Pluntke
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
 * @author Jürgen Bach 
 * @author Gerd Kroll
 * @author Kurt Norgaz 
 * @author Peter Pluntke
 * @version $Id$
 */
if (preg_match("/lang\...\.php$/", $_SERVER["SCRIPT_NAME"])>0) {
        print "You cannot access a language file directly.";
        exit;
}

$pgv_lang["roman_surn"]				= "Romanisierter Nachname";
$pgv_lang["roman_givn"]				= "Romanisierte Vornamen";
$pgv_lang["hebrew_surn"]			= "Hebräischer Nachname";
$pgv_lang["hebrew_givn"]			= "Hebräische Vornamen";
$pgv_lang["include"]				= "einschließen";
$pgv_lang["page_x_of_y"]			= "Seite #GLOBALS[currentPage]# von #GLOBALS[lastPage]#";
$pgv_lang["options"]				= "Optionen:";
$pgv_lang["inc_languages"]			= " Sprachen";
$pgv_lang["config_update_ok"]		= "Die Konfigurations-Datei wurde aktualisiert.";
$pgv_lang["date_of_entry"]			= "Datum des Eintrages in der ursprünglichen Quelle";
$pgv_lang["main_media_ok1"]			= "Das Medien-Objekt <b>#GLOBALS[oldMediaName]#</b> wurde auf <b>#GLOBALS[newMediaName]#</b> umbenannt.";
$pgv_lang["main_media_ok2"]			= "Das Medien-Objekt <b>#GLOBALS[oldMediaName]#</b> wurde von <b>#GLOBALS[oldMediaFolder]#</b> nach <b>#GLOBALS[newMediaFolder]#</b> verlegt.";
$pgv_lang["main_media_ok3"]			= "Das Medien-Objekt wurde von <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> nach <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b> verlegt und umbenannt.";
$pgv_lang["main_media_fail0"]		= "Das Medien-Objekt <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> existiert nicht.";
$pgv_lang["main_media_fail1"]		= "Das Medien-Objekt <b>#GLOBALS[oldMediaName]#</b> konnte nicht auf <b>#GLOBALS[newMediaName]#</b> umbenannt werden.";
$pgv_lang["main_media_fail2"]		= "Das Medien-Objekt <b>#GLOBALS[oldMediaName]#</b> konnte nicht von <b>#GLOBALS[oldMediaFolder]#</b> nach <b>#GLOBALS[newMediaFolder]#</b> verlegt werden.";
$pgv_lang["main_media_fail3"]		= "Das Medien-Objekt konnte nicht von <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> nach <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b> verlegt und umbenannt werden.";
$pgv_lang["thumb_media_ok1"]		= "Die Miniaturansicht <b>#GLOBALS[oldMediaName]#</b> wurde auf <b>#GLOBALS[newMediaName]#</b> umbenannt.";
$pgv_lang["thumb_media_ok2"]		= "Die Miniaturansicht <b>#GLOBALS[oldMediaName]#</b> wurde von <b>#GLOBALS[oldThumbFolder]#</b> nach <b>#GLOBALS[newThumbFolder]#</b> verlegt.";
$pgv_lang["thumb_media_ok3"]		= "Die Miniaturansicht wurde von <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> nach <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b> verlegt und umbenannt.";
$pgv_lang["thumb_media_fail0"]		= "Die Miniaturansicht <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> existiert nicht.";
$pgv_lang["thumb_media_fail1"]		= "Die Miniaturansicht <b>#GLOBALS[oldMediaName]#</b> konnte nicht auf <b>#GLOBALS[newMediaName]#</b> umbenannt werden.";
$pgv_lang["thumb_media_fail2"]		= "Die Miniaturansicht <b>#GLOBALS[oldMediaName]#</b> konnte nicht von <b>#GLOBALS[oldThumbFolder]#</b> nach <b>#GLOBALS[newThumbFolder]#</b> verlegt werden.";
$pgv_lang["thumb_media_fail3"]		= "Die Miniaturansicht konnte nicht von <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> nach <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b> verlegt und umbenannt werden.";
$pgv_lang["server_file"]			= "Dateiname auf dem Server";
$pgv_lang["server_file_advice"]		= "Nicht ändern, um den ursprünglichen Namen zu behalten.";
$pgv_lang["server_file_advice2"]	= "Sie können hier einen URL eingeben, der mit &laquo;http://&raquo; beginnt.";
$pgv_lang["server_folder"]			= "Verzeichnisname auf dem Server";
$pgv_lang["server_folder_advice"]	= "Sie können bis zu #GLOBALS[MEDIA_DIRECTORY_LEVELS]# Verzeichnisnamen zusätzlich zum &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; Standardnamen eingeben.<br />Der &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; Teil des Verzeichnisnamens wird NICHT eingegeben.";
$pgv_lang["server_folder_advice2"]	= "Diese Eingabe wird nicht beachtet, wenn Sie oben einen URL eingegeben haben.";
$pgv_lang["add_linkid_advice"]		= "Die ID Nummer einer Person, Familie, oder Quelle eingeben oder suchen, um eine Verbindung zu diesem Medien Objekt herzustellen.";
$pgv_lang["use_browse_advice"]		= "Mit dem &laquo;Browse&raquo; Button können Sie Ihren lokalen Computer nach der gewünschten Datei durchsuchen.";
$pgv_lang["undo_all_confirm"]		= "Möchten Sie wirklich alle Änderungen an dieser GEDCOM Datei verwerfen?";
$pgv_lang["undo_all"]				= "Alle Änderungen verwerfen";
$pgv_lang["index_edit_advice"]           = "Markieren Sie den Namen eines Blockes und klicken Sie auf eines der Pfeil-Symbole, um den markierten Block in die gewünschte Richtung zu bewegen.";
$pgv_lang["index_edit_advice2"]          = "Sie müssen auf den Button <b>#pgv_lang[save]#</b> klicken, um die Änderungen zu übernehmen.";
$pgv_lang["continue_import2"]            = "Datumsimport fortsetzen";
$pgv_lang["importing_dates"]             = "Datumsangaben importieren";
$pgv_lang["changelog"]                           = "Änderungen in Version #VERSION#";
$pgv_lang["view_changelog"]                      = "Datei changelog.txt anzeigen";
$pgv_lang["html_block_descr"]            = "Mit diesem Block können Sie einen beliebigen Text auf Ihrer Seite einfügen.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Titel hier eingeben</b></p><br /><p>Klicken Sie auf Konfigurieren";
$pgv_lang["html_block_sample_part2"]     = "um diesen Text hier zu ändern.</p>";
$pgv_lang["html_block_name"]             = "HTML";
$pgv_lang["htmlplus_block_name"]	= "Verbesserter HTML";
$pgv_lang["htmlplus_block_descr"]	= "Mit diesem Block können Sie jeden beliebigen Text auf Ihrer Seite anzeigen.  Informationen aus und über Ihrer GEDCOM Datei können in den Text eingefügt werden.";
$pgv_lang["htmlplus_block_templates"] = "Vorlagen";
$pgv_lang["htmlplus_block_content"] = "Inhalt";
$pgv_lang["htmlplus_block_narrative"] = "Erzählender Stil (nur in Englisch)";
$pgv_lang["num_to_show"]                 = "Anzahl der anzuzeigenden Objekte";
$pgv_lang["days_to_show"]                        = "Anzahl der anzuzeigenden Tage";
$pgv_lang["before_or_after"]             = "Anzahl vor oder hinter den Namen anzeigen?";
$pgv_lang["before"]                                      = "vor";
$pgv_lang["after"]					= "hinter";
$pgv_lang["config_block"]			= "Konfigurieren";
$pgv_lang["pls_note12"]				= "Bitte tragen Sie in diesem Feld ein, warum Sie einen Zugang beantragen und wie Sie mit Personen aus der Datenbank verwandt sind.";
$pgv_lang["enter_comments"]			= "Bitte geben Sie ihre Verwandtschaft zu den Daten im Bemerkungsfeld ein.";
$pgv_lang["comments"]				= "Bemerkungen";
$pgv_lang["none"]					= "Keine";
$pgv_lang["ahnentafel_report"]		= "Ahnentafel Bericht";
$pgv_lang["ahnentafel_header"]		= "Ahnentafel Bericht für ";
$pgv_lang["ahnentafel_generation"]	= "Generation ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Sie ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Er ";
$pgv_lang["ahnentafel_born_m"]		= "wurde geboren";
$pgv_lang["ahnentafel_born_f"]		= "wurde geboren";
$pgv_lang["ahnentafel_christened_f"] = "wurde getauft";
$pgv_lang["ahnentafel_christened_m"] = "wurde getauft";
$pgv_lang["ahnentafel_married_f"]	= "heiratete";
$pgv_lang["ahnentafel_married_m"]	= "heiratete";
$pgv_lang["ahnentafel_buried_m"]	= "wurde beerdigt";
$pgv_lang["ahnentafel_buried_f"]	= "wurde beerdigt";
$pgv_lang["ahnentafel_died_f"]		= "starb";
$pgv_lang["ahnentafel_died_m"]		= "starb";
$pgv_lang["ahnentafel_spouse"]		= "mit ";
$pgv_lang["ahnentafel_place"]		= " in ";
$pgv_lang["ahnentafel_no_details"]	= " aber die Einzelheiten sind nicht bekannt";
$pgv_lang["child-family"]			= "Eltern und Geschwister";
$pgv_lang["spouse-family"]			= "Ehepartner und Kinder";
$pgv_lang["direct-ancestors"]		= "Vorfahren in direkter Linie";
$pgv_lang["ancestors"]				= "Vorfahren in direkter Linie und deren Familien";
$pgv_lang["descendants"]			= "Nachfahren";
$pgv_lang["choose_relatives"]		= "Verwandte wählen";
$pgv_lang["relatives_report"]		= "Verwandten Bericht";
$pgv_lang["total_living"]			= "Insgesamt lebend";
$pgv_lang["total_dead"]				= "Insgesamt verstorben";
$pgv_lang["total_not_born"]			= "Insgesamt noch nicht geboren";
$pgv_lang["remove_custom_tags"]		= "Benutzerdefinierte PGV Tags entfernen? (z.B. _PGVU, _THUM)";
$pgv_lang["download_zipped"]		= "GEDCOM Datei als ZIP Datei herunterladen?";
$pgv_lang["cookie_login_help"]		= "Sie waren auf dieser Seite schon einmal angemeldet. Sie haben daher Zugriff auf private Daten und andere benutzerdefinierte Eigenschaften. Aus Sicherheitsgründen müssen Sie sich aber erneut anmelden, wenn Sie Daten bearbeiten oder verwalten möchten.";
$pgv_lang["remember_me"]			= "Von diesem Computer automatisch anmelden?";
$pgv_lang["add_unlinked_person"]	= "Eine Person ohne Verbindung hinzufügen";
$pgv_lang["add_unlinked_source"]	= "Eine Quelle ohne Verbindung hinzufügen";
$pgv_lang["fams_with_surname"]		= "Familien mit dem Nachnamen #surname#";
$pgv_lang["support_contact"]		= "Kontakt für technische Fragen";
$pgv_lang["genealogy_contact"]		= "Kontakt für genealogische Fragen";
$pgv_lang["continue_import"]		= "Einfuhr fortsetzen";
$pgv_lang["importing_places"]		= "Ortsangaben Einfuhr";
$pgv_lang["common_upload_errors"]	= "Dieser Fehler bedeutet vermutlich, dass die Datei die Sie hochladen möchten, die Größengrenze ihres Hosts überschreitet. Die Standard-Grenze liegt in PHP bei 2MB. Sie können entweder den Support Ihres Hosts kontaktieren und ihn bitten, die Grenze in der Datei php.ini zu erhöhen, oder Sie können Ihre Datei mit FTP hochladen. Benutzen Sie die Seite <a href=\"uploadgedcom.php?action=add_form\"><b>GEDCOM hinzufügen</b></a>, um eine bereits hochgeladene Datei zu verwenden.";
$pgv_lang["total_memory_usage"]		= "Speicherbedarf insgesamt:";
$pgv_lang["mothers_family_with"]	= "Familie der Mutter mit ";
$pgv_lang["fathers_family_with"]	= "Familie des Vaters mit ";
$pgv_lang["halfsibling"]			= "Halb-Geschwister";
$pgv_lang["halfbrother"]			= "Halbbruder";
$pgv_lang["halfsister"]				= "Halbschwester";
$pgv_lang["family_timeline"]		= "Familie in der Lebensspannenanzeige darstellen";
$pgv_lang["children_timeline"]		= "Kinder in der Lebensspannenanzeige darstellen";
$pgv_lang["other"]					= "Sonstige";
$pgv_lang["sort_by_marriage"]		= "Nach Hochzeitsdatum sortieren";
$pgv_lang["reorder_families"]		= "Familien neu ordnen";
$pgv_lang["indis_with_surname"]		= "Personen mit dem Nachnamen #surname#";
$pgv_lang["first_letter_fname"]		= "Wählen Sie einen Buchstaben, um Personen anzuzeigen, deren Vornamen mit diesem Buchstaben beginnen.";
$pgv_lang["import_marr_names"]		= "Heiratsnamen einführen";
$pgv_lang["marr_name_import_instr"]	= "Klicken Sie auf diesen Button, wenn PhpGedView die Heiratsnamen von weiblichen Personen in dieser GEDCOM Datei ermitteln soll. Dann können Sie Ehefrauen auch nach ihren Heiratsnamen suchen oder auflisten lassen. <i>NB: Heiratsnamen werden nur angezeigt, wenn diese Option in der GEDCOM Konfiguration eingeschaltet ist.  <b>Die Ermittlung von Heiratsnamen ist nicht obligatorisch.</b></i>";
$pgv_lang["calc_marr_names"]		= "Heiratsnamen Ermittlung in Gang";
$pgv_lang["total_names"]			= "Nachnamen insgesamt";

$pgv_lang["upload_file"]			= "Datei von Ihrem Computer hochladen";
$pgv_lang["thumb_genned"]			= "Miniaturansicht #thumbnail# wurde automatisch erstellt.";
$pgv_lang["thumbgen_error"]			= "Miniaturansicht #thumbnail# konnte nicht automatisch erstellt werden.";
$pgv_lang["generate_thumbnail"]		= "Miniaturansicht automatisch erstellen aus ";
$pgv_lang["no_upload"]				= "Multimedia Dateien können nicht hochgeladen werden, weil Multimedia Objekte deaktiviert sind oder weil für das Medien Verzeichnis keine Schreibrechte bestehen.";
$pgv_lang["top10_pageviews_nohits"]	= "Es gibt keine Treffer.";
$pgv_lang["top10_pageviews_msg"]	= "Sie müssen in der GEDCOM Konfiguration die Zähler zunächst aktivieren.";
$pgv_lang["review_changes_descr"]	= "Der «Offene Änderungen» Block zeigt Benutzern mit Editierrechten eine Liste der Datensätze die online geändert wurden und die noch kontrolliert und übernommen bzw. verworfen werden müssen.<br /><br />Wenn dieser Block aktiviert ist, erhalten alle Benutzer mit Editierrechten täglich eine Mail, die auf offene Änderungen hinweist.";
$pgv_lang["review_changes_block"]	= "Offene Änderungen";
$pgv_lang["review_changes_email"]	= "Erinnerungs Mails versenden?";
$pgv_lang["review_changes_email_freq"]	= "Erinnerungs Mails Häufigkeit (Tage)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Änderungen kontrollieren";
$pgv_lang["review_changes_body"]	= "An einer genealogischen Datenbank wurden Änderungen vorgenommen. Diese Änderungen müssen kontrolliert und übernommen werden, bevor sie für alle Nutzer sichtbar werden. Bitte klicken Sie auf die angegebene URL, um auf die PhpGedView-Seite zu gelangen und melden Sie sich an, um die Änderung zu kontrollieren. ";
$pgv_lang["show_spouses"]		= "Ehepartner anzeigen";
$pgv_lang["quick_update_title"] = "Schnelle Bearbeitung";
$pgv_lang["quick_update_instructions"] = "Auf dieser Seite können Sie schnell die Daten einer Person bearbeiten. Sie müssen nur die Daten eintragen, die neu sind oder von den Informationen in der Datenbank abweichen. Nachdem die Daten übermittelt sind, müssen sie noch von einem Verwalter kontrolliert und übernommen werden, bevor sie für alle Nutzer sichtbar werden.";
$pgv_lang["update_name"] = "Namen bearbeiten";
$pgv_lang["update_fact"] = "Ereignis bearbeiten";
$pgv_lang["update_fact_restricted"] = "Die Bearbeitung dieses Ereignisses ist eingeschränkt:";
$pgv_lang["update_photo"] = "Foto aktualisieren";
$pgv_lang["photo_replace"] = "Möchten Sie ein älteres Foto durch dieses ersetzen?";
$pgv_lang["select_fact"] = "Ein Ereignis wählen...";
$pgv_lang["update_address"] = "Adresse bearbeiten";
$pgv_lang["add_new_chil"] = "Ein Kind hinzufügen";
$pgv_lang["top10_pageviews_descr"]	= "Dieser Block zeigt die 10 Datensätze an, die am häufigsten aufgerufen wurden. Sie müssen dazu in der GEDCOM Konfiguration die Zähler zunächst aktivieren.";
$pgv_lang["top10_pageviews"]		= "Meist aufgerufene Einträge";
$pgv_lang["top10_pageviews_block"]		= "Meist aufgerufene Einträge";
$pgv_lang["user_default_tab"]		= "Defaultreiter der Personen-Informationsseite";
$pgv_lang["stepfamily"]				= "Stief-Familie";
$pgv_lang["stepdad"]				= "Stiefvater";
$pgv_lang["stepmom"]				= "Stiefmutter";
$pgv_lang["stepsister"]				= "Stiefschwester";
$pgv_lang["stepbrother"]			= "Stiefbruder";
$pgv_lang["max_upload_size"]		= "Maximale Größe zum Hochladen: ";
$pgv_lang["edit_fam"]				= "Familie bearbeiten";
$pgv_lang["fams_charts"]			= "Optionen für Familie";
$pgv_lang["sort_by_birth"]			= "Nach Geburtsdaten sortieren";
$pgv_lang["reorder_children"]		= "Kinder neu ordnen";
$pgv_lang["add_from_clipboard"]		= "Aus der Zwischenablage hinzufügen: ";
$pgv_lang["record_copied"]			= "Datensatz in die Zwischenablage kopiert";
$pgv_lang["copy"]					= "Kopieren";
$pgv_lang["cut"]					= "Ausschneiden";
$pgv_lang["indis_charts"]			= "Optionen für Person";
$pgv_lang["edit_indi"] 				= "Person bearbeiten";
$pgv_lang["locked"]					= "Nicht ändern!";
$pgv_lang["privacy"]				= "Datenschutz";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]                                = "?";
$pgv_lang["qm_ah"]                        = "?";
$pgv_lang["page_help"]                        = "Hilfe";
$pgv_lang["help_for_this_page"]                = "Hilfe für diese Seite";
$pgv_lang["help_contents"]                = "Hilfe Inhalt";
$pgv_lang["show_context_help"]                = "Kontext-bezogene Hilfe anzeigen";
$pgv_lang["hide_context_help"]                = "Kontext-bezogene Hilfe verbergen";
$pgv_lang["sorry"]                        = "<b>Leider ist die Hilfe für dieses Thema noch nicht fertig gestellt.</b>";
$pgv_lang["help_not_exist"]                = "<b>Die Hilfe für diese Seite oder dieses Element ist noch nicht verfügbar.</b>";
$pgv_lang["var_not_exist"]			= "<span style=\"font-weight: bold\">Diese Sprach-Variable existiert nicht. Bitte melden Sie dies als Fehler.</span>";
$pgv_lang["resolution"]                        = "Bildschirmauflösung";
$pgv_lang["menu"]                        = "Menü";
$pgv_lang["header"]                        = "Kopfbereich";
$pgv_lang["imageview"]                = "Image Viewer";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]                        = "PhpGedView Benutzer Anmeldung";
$pgv_lang["error_title"]                = "FEHLER: GEDCOM Datei kann nicht geöffnet werden";
$pgv_lang["error_header"]                = "Die GEDCOM Datei <b>#GEDCOM#</b> befindet sich nicht am angegebenen Ort.";
$pgv_lang["error_header_write"]        = "Die GEDCOM Datei <b>#GEDCOM#</b> kann nicht gespeichert werden. Bitte prüfen Sie die Schreibrechte und Dateiattribute.";
$pgv_lang["for_support"]                = "Für Support wenden Sie sich an folgende Kontaktadresse:";
$pgv_lang["for_contact"]                = "Bei genealogischen Fragen wenden Sie sich an folgende Kontaktadresse:";
$pgv_lang["for_all_contact"]                = "Für Support sowie bei genealogischen Fragen wenden Sie sich an folgende Kontaktadresse:";
$pgv_lang["build_title"]                = "Index Dateien werden erstellt";
$pgv_lang["build_error"]                = "Die GEDCOM Datei wurde aktualisiert.";
$pgv_lang["please_wait"]                = "Einen Moment bitte: Index Dateien werden neu erstellt.";
$pgv_lang["choose_gedcom"]                = "Eine GEDCOM Datei wählen";
$pgv_lang["username"]                        = "Benutzername";
$pgv_lang["invalid_username"]                = "Der Benutzername enthält unzulässige Zeichen";
$pgv_lang["firstname"]				= "Vorname";
$pgv_lang["lastname"]				= "Nachname";
$pgv_lang["fullname"]                        = "Kompletter Name";
$pgv_lang["password"]                        = "Passwort";
$pgv_lang["confirm"]                        = "Passwort bestätigen";
$pgv_lang["user_contact_method"]        = "Bevorzugte Kontaktaufnahme";
$pgv_lang["login"]                        = "Login";
$pgv_lang["login_aut"]                        = "Benutzereinstellungen bearbeiten";
$pgv_lang["logout"]                        = "Logout";
$pgv_lang["admin"]                        = "Verwalten";
$pgv_lang["logged_in_as"]                = "Angemeldet als";
$pgv_lang["my_pedigree"]                = "Mein Stammbaum";
$pgv_lang["my_indi"]                        = "Mein Datenblatt";
$pgv_lang["yes"]                        = "Ja";
$pgv_lang["no"]                                = "Nein";
$pgv_lang["add_gedcom"]                        = "GEDCOM Datei hinzufügen";
$pgv_lang["no_support"]                        = "Ihr Browser unterstützt nicht alle Standards, die von dieser PhpGedView Website benutzt werden. Die meisten neueren Browser-Versionen unterstützen diese Funktionen. Bitte besorgen Sie sich eine neuere Version Ihres Browsers.";
$pgv_lang["change_theme"]                = "Theme ändern";
$pgv_lang["gedcom_downloadable"] 	= "Diese GEDCOM Datei könnte über das Internet heruntergeladen werden!<br />Bitte lesen Sie im Bereich «SECURITY» der Datei <a href=\"readme.txt\"><b>readme.txt</b></a> nach, wie Sie dieses Problem lösen können.";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]                = "Stammbaum";
$pgv_lang["gen_ped_chart"]                = "Stammbaum für #PEDIGREE_GENERATIONS# Generationen";
$pgv_lang["generations"]                = "Generationen";
$pgv_lang["view"]                        = "Zeige";
$pgv_lang["fam_spouse"]                        = "Familie mit Ehepartner";
$pgv_lang["root_person"]                = "ID der Startperson";
$pgv_lang["hide_details"]                = "Einzelheiten verbergen";
$pgv_lang["show_details"]                = "Einzelheiten zeigen";
$pgv_lang["person_links"]                = "Links zu Diagrammen, Familien und nahen Verwandten dieser Person. Klicken Sie auf dieses Symbol, um die Seite mit dieser Person als Ausgangspunkt aufzurufen.";
$pgv_lang["zoom_box"]                        = "Zoom hinein/heraus";
$pgv_lang["orientation"]			= "Richtung";
$pgv_lang["portrait"]                        = "Hochformat";
$pgv_lang["landscape"]                        = "Querformat";
$pgv_lang["start_at_parents"]                = "Bei den Eltern beginnen";
$pgv_lang["charts"]                        = "Diagramme";
$pgv_lang["lists"]                        = "Listen";
$pgv_lang["welcome_page"]                = "Begrüßungs-Seite";
$pgv_lang["max_generation"]                = "Die maximale Anzahl von Generationen beträgt #PEDIGREE_GENERATIONS#.";
$pgv_lang["min_generation"]                = "Die minimale Anzahl von Generationen beträgt 3.";
$pgv_lang["box_width"] 					     = "Box Breite";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]        = "Kann die Familie mit folgender ID nicht finden:";
$pgv_lang["unable_to_find_indi"]        = "Kann die Person mit folgender ID nicht finden:";
$pgv_lang["unable_to_find_record"]        = "Kann den Datensatz mit folgender ID nicht finden:";
$pgv_lang["unable_to_find_source"]        = "Kann die Quelle mit folgender ID nicht finden:";
$pgv_lang["unable_to_find_repo"]        = "Kann das Archiv mit folgender ID nicht finden:";
$pgv_lang["repo_name"]                        = "Archiv Name:";
$pgv_lang["address"]                        = "Adresse:";
$pgv_lang["phone"]                        = "Telefon:";
$pgv_lang["source_name"]                = "Quellen Name:";
$pgv_lang["title"]                        = "Titel";
$pgv_lang["author"]                        = "Autor:";
$pgv_lang["publication"]                = "Publikation:";
$pgv_lang["call_number"]                = "Rufnummer:";
$pgv_lang["living"]                        = "Lebt";
$pgv_lang["private"]                        = "Vertraulich";
$pgv_lang["birth"]                        = "Geburt:";
$pgv_lang["death"]                        = "Tod:";
$pgv_lang["descend_chart"]                = "Nachfahrenbaum";
$pgv_lang["individual_list"]                = "Personenliste";
$pgv_lang["family_list"]                = "Familienliste";
$pgv_lang["source_list"]                = "Quellenliste";
$pgv_lang["place_list"]                        = "Hierarchie der Orte";
$pgv_lang["place_list_aft"] 		= "Hierarchie der Orte unter";
$pgv_lang["media_list"]                        = "Multimedialiste";
$pgv_lang["search"]                        = "Suche";
$pgv_lang["clippings_cart"]                = "Sammelbehälter";
$pgv_lang["not_an_array"]                = "keine Reihe (Array)";
$pgv_lang["print_preview"]                = "Drucker-optimierte Version";
$pgv_lang["cancel_preview"]                = "Zurück zur normalen Ansicht";
$pgv_lang["change_lang"]                = "Sprache ändern";
$pgv_lang["print"]                        = "Drucken";
$pgv_lang["total_queries"]                = "Anzahl der Datenanfragen an die Datenbank:";
$pgv_lang["total_privacy_checks"]		= "Anzahl der Datenschutz-Überprüfungen:";
$pgv_lang["back"]                        = "zurück";
$pgv_lang["privacy_list_indi_error"]        = "Aus Datenschutzgründen sind einige Personen verborgen.";
$pgv_lang["privacy_list_fam_error"]        = "Aus Datenschutzgründen sind einige Familien verborgen.";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]                        = "auch bekannt als";
$pgv_lang["male"]                        = "männlich";
$pgv_lang["female"]                        = "weiblich";
$pgv_lang["temple"]                        = "HLT Tempel";
$pgv_lang["temple_code"]                = "HLT Tempel Code:";
$pgv_lang["status"]                        = "Status";
$pgv_lang["source"]                        = "Quelle";
$pgv_lang["citation"]                        = "Zitat:";
$pgv_lang["text"]                        = "Auszug:";
$pgv_lang["note"]                        = "Bemerkung";
$pgv_lang["NN"]                                = "(Unbekannt)";
$pgv_lang["PN"]                                = "(Unbekannt)";
$pgv_lang["unrecognized_code"]                = "Unbekannter GEDCOM Code";
$pgv_lang["unrecognized_code_msg"]        = "Ein Fehler ist aufgetreten, bitte melden Sie diesen an bei";
$pgv_lang["indi_info"]                        = "Persönliche Informationen";
$pgv_lang["pedigree_chart"]                = "Stammbaum";
$pgv_lang["individual"]				= "Person";
$pgv_lang["desc_chart2"]                = "Nachfahrenbaum";
$pgv_lang["family"]                        = "Familie";
$pgv_lang["family_with"]                = "Familie mit";
$pgv_lang["as_spouse"]                        = "Familiendaten als Ehepartner";
$pgv_lang["as_child"]                        = "Familiendaten als Kind";
$pgv_lang["view_gedcom"]                = "GEDCOM Datensatz anzeigen";
$pgv_lang["add_to_cart"]                = "Datensatz dem Sammelbehälter hinzufügen";
$pgv_lang["still_living_error"]                = "Diese Person lebt noch oder hat keine Geburts- oder Sterbedaten. Alle Details lebender Personen sind verborgen.<br />Für weitere Informationen wenden Sie sich an";
$pgv_lang["privacy_error"]                = "Details dieser Person sind vertraulich.<br />";
$pgv_lang["more_information"]                = "Für weitere Informationen wenden Sie sich an:";
$pgv_lang["name"]                        = "Name";
$pgv_lang["given_name"]                        = "Vorname:";
$pgv_lang["surname"]                        = "Nachname:";
$pgv_lang["suffix"]                        = "Namenszusatz:";
$pgv_lang["object_note"]                = "Objekt Bemerkung:";
$pgv_lang["sex"]                        = "Geschlecht";
$pgv_lang["personal_facts"]                = "Persönliche Fakten und Details";
$pgv_lang["type"]                        = "Typ";
$pgv_lang["date"]                        = "Datum";
$pgv_lang["place_description"]                = "Ort / Beschreibung";
$pgv_lang["parents"]                        = "Eltern:";
$pgv_lang["siblings"]                        = "Geschwister";
$pgv_lang["father"]                        = "Vater";
$pgv_lang["mother"]                        = "Mutter";
$pgv_lang["parent"] 				= "Eltern";
$pgv_lang["relatives"]                        = "Direkte Verwandschaft";
$pgv_lang["relatives_events"]		= "Verwandtschafts-Ereignisse";
$pgv_lang["child"]                        = "Kind";
$pgv_lang["spouse"]                        = "Ehepartner";
$pgv_lang["surnames"]                        = "Nachnamen";
$pgv_lang["adopted"]                        = "Adoptiert";
$pgv_lang["foster"]                        = "Pflege";
$pgv_lang["sealing"]                        = "Siegelung";
$pgv_lang["challenged"]				= "In Frage gestellt";

$pgv_lang["disproved"]				= "Widerlegt";
$pgv_lang["infant"]					= "Kleinkind";
$pgv_lang["stillborn"]				= "Totgeboren";
$pgv_lang["deceased"]				= "Verstorben";
$pgv_lang["link_as_child"]			= "Diese Person als Kind mit einer existierenden Familie verbinden";
$pgv_lang["link_as_wife"]			= "Diese Person als Ehefrau mit einer existierenden Familie verbinden";
$pgv_lang["link_as_husband"]		= "Diese Person als Ehemann mit einer existierenden Familie verbinden";
$pgv_lang["link_as"]                        = "Diese Person mit bestehender Familie verknüpfen als ";
$pgv_lang["no_tab1"]                        = "Zu dieser Person gibt es keine Fakten.";
$pgv_lang["no_tab2"]                        = "Zu dieser Person gibt es keine Bemerkungen.";
$pgv_lang["no_tab3"]                        = "Zu dieser Person gibt es keine Quellenangaben.";
$pgv_lang["no_tab4"]                        = "Zu dieser Person gibt es keine Multimedia Objekte.";
$pgv_lang["no_tab5"]                        = "Zu dieser Person gibt es keine direkte Verwandschaft.";
$pgv_lang["no_tab6"]				= "Zu dieser Person gibt es keine Forschung Protokolle.";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]                = "Familien Informationen";
$pgv_lang["family_group_info"]                = "Informationen zur Familiengruppe";
$pgv_lang["husband"]                        = "Ehemann";
$pgv_lang["wife"]                        = "Ehefrau";
$pgv_lang["marriage"]                        = "Heirat:";
$pgv_lang["lds_sealing"]                = "HLT Siegelung:";
$pgv_lang["marriage_license"]                = "Ehe Erlaubnis:";
$pgv_lang["media_object"]                = "Multimedia Objekt";
$pgv_lang["children"]                        = "Kinder";
$pgv_lang["no_children"]                = "Keine Kinder eingetragen";
$pgv_lang["childless_family"]		= "Diese Familie blieb kinderlos";
$pgv_lang["number_children"]		= "Anzahl von Kindern:";
$pgv_lang["parents_timeline"]                = "Ehepaar in Lebensspannen-Ansicht zeigen";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]                        = "Sammelbehälter";
$pgv_lang["clip_explaination"]                = "Der Sammelbehälter ermöglicht es, Ausschnitte aus diesem Stammbaum zu markieren.<br />Diese können dann später in einer separaten GEDCOM Datei zum sofortigen Download gebündelt werden.<br /><br />";
$pgv_lang["item_with_id"]                = "Ausschnitt von ID";
$pgv_lang["error_already"]                = "ist schon in Ihrem Sammelbehälter.";
$pgv_lang["which_links"]                = "Welche Verbindungen dieser Familie möchten Sie noch hinzufügen?";
$pgv_lang["just_family"]                = "Nur den Familiendatensatz dieser Familie hinzufügen.";
$pgv_lang["parents_and_family"]                = "Den Familiendatensatz und die Datensätze der Eltern dieser Familie hinzufügen.";
$pgv_lang["parents_and_child"]                = "Den Familiendatensatz, die der Eltern und die der Kinder dieser Familie hinzufügen.";
$pgv_lang["parents_desc"]                = "Den Familiendatensatz, die Datensätze aller Nachkommen, und die der Eltern hinzufügen.";
$pgv_lang["continue"]                        = "Fortsetzen";
$pgv_lang["which_p_links"]                = "Welche Verbindungen dieser Person möchten Sie hinzufügen?";
$pgv_lang["just_person"]                = "Nur den Datensatz dieser Person hinzufügen.";
$pgv_lang["person_parents_sibs"]        = "Den Datensatz dieser Person, die seiner Eltern und seiner Geschwister hinzufügen.";
$pgv_lang["person_ancestors"]                = "Den Datensatz dieser Person und die seiner direkten Vorfahren hinzufügen.";
$pgv_lang["person_ancestor_fams"]        = "Den Datensatz dieser Person, die seiner direkten Vorfahren und die Datensätze derer Familien hinzufügen.";
$pgv_lang["person_spouse"]                = "Den Datensatz dieser Person, den seines Ehepartners und die seiner Kinder hinzufügen.";
$pgv_lang["person_desc"]                = "Den Datensatz dieser Person, den seines Ehepartners und die aller seiner Nachfahren hinzufügen.";
$pgv_lang["unable_to_open"]                = "Es ist nicht möglich, das Verzeichnis für den Sammelbehälter zum Schreiben zu öffnen.";
$pgv_lang["person_living"]                = "Diese Person ist am Leben. Persönliche Details werden nicht eingefügt.";
$pgv_lang["person_private"]                = "Details dieser Person sind vertraulich. Persönliche Details werden nicht eingefügt.";
$pgv_lang["family_private"]                = "Details dieser Familie sind vertraulich. Persönliche Details werden nicht eingefügt.";
$pgv_lang["download"]                        = "Klicken Sie mit der rechten Maustaste (beim Mac Control-Klick) auf den untenstehenden Link und wählen &quot;Ziel speichern unter&quot;, um den Sammelbehälter als GEDCOM Datei auf Ihren eigenen Computer zu übertragen (Download).";
$pgv_lang["media_files"]                = "Multimedia Dateien, die zu den Datensätzen dieser GEDCOM Datei gehören:";
$pgv_lang["cart_is_empty"]                = "Ihr Sammelbehälter ist leer.";
$pgv_lang["id"]                                = "Identifikationsnummer (ID)";
$pgv_lang["name_description"]                = "Name / Beschreibung";
$pgv_lang["remove"]                        = "Entfernen";
$pgv_lang["empty_cart"]                        = "Sammelbehälter leeren";
$pgv_lang["download_now"]                = "Jetzt herunterladen";
$pgv_lang["indi_downloaded_from"]        = "Daten dieser Person wurden geladen von:";
$pgv_lang["family_downloaded_from"]        = "Daten dieser Familie wurden geladen von:";
$pgv_lang["source_downloaded_from"]        = "Daten dieser Quelle wurden geladen von:";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]                = "Orts-Verbindungen gefunden";
$pgv_lang["top_level"]                        = "Höchste Stufe";
$pgv_lang["form"]                        = "Ortsangaben werden im folgenden Format ausgewertet:";
$pgv_lang["default_form"]                = "Stadt, Kreis, (Bundes)Land, Staat";
$pgv_lang["default_form_info"]                = "(Standardeinstellung)";
$pgv_lang["gedcom_form_info"]                = "(GEDCOM)";
$pgv_lang["unknown"]                        = "Unbekannt";
$pgv_lang["individuals"]                = "Personen";
$pgv_lang["view_records_in_place"]        = "Alle Datensätze für diesen Ort anzeigen";
$pgv_lang["place_list2"] 					   = "Ortsliste";
$pgv_lang["show_place_hierarchy"]		= "Orts-Hierarchie anzeigen";
$pgv_lang["show_place_list"]			= "Alle Orte in einer Liste anzeigen";
$pgv_lang["total_unic_places"]		= "Anzahl Orte";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]			= "Externe Objekte";
$pgv_lang["multi_title"]                = "Liste der Multimedia Objekte";
$pgv_lang["media_found"]                = "Multimedia Objekte gefunden";
$pgv_lang["view_person"]                = "Person zeigen";
$pgv_lang["view_family"]                = "Familie zeigen";
$pgv_lang["view_source"]                = "Quelle zeigen";
$pgv_lang["view_object"]				= "Objekt zeigen";
$pgv_lang["prev"]                        = "&lt; Vorhergehende Seite";
$pgv_lang["next"]                        = "Nächste Seite &gt;";
$pgv_lang["file_not_found"]                = "Datei nicht gefunden.";
$pgv_lang["medialist_show"]             = "Zeige";
$pgv_lang["per_page"]                   = "Objekte pro Seite";
$pgv_lang["delete_directory"]		= "Verzeichnis löschen";
$pgv_lang["remove_object"]			= "Objekt entfernen";
$pgv_lang["confirm_remove_object"]	= "Möchten Sie wirklich dieses Objekt entfernen?";
$pgv_lang["remove_links"]			= "Verbindungen löschen";
$pgv_lang["confirm_remove_links"]	= "Möchten Sie wirklich alle Verbindungen zu diesem Objekt löschen?";
$pgv_lang["delete_file"]			= "Datei löschen";
$pgv_lang["confirm_delete_file"]	= "Möchten Sie wirklich diese Datei löschen?";
$pgv_lang["multiple_gedcoms"]		= "Diese Medien-Datei ist mit einer anderen genealogischen Datei auf diesem Server verbunden.  Sie kann nicht gelöscht, verlegt, oder umbenannt werden, bis diese Verbindungen gelöscht sind.";
$pgv_lang["external_file"]			= "Diese Medien-Datei existiert nicht auf diesem Server.  Sie kann nicht gelöscht, verlegt, oder umbenannt werden.";
$pgv_lang["directory_not_empty"]	= "Verzeichnis ist nicht leer.";
$pgv_lang["directory_not_exist"]	= "Verzeichnis existiert nicht.";
$pgv_lang["media_not_deleted"]		= "Medien Verzeichnis nicht entfernt.";
$pgv_lang["media_deleted"]			= "Medien Verzeichnis erfolgreich entfernt.";
$pgv_lang["thumbs_not_deleted"]		= "Miniaturansicht Verzeichnis nicht entfernt.";
$pgv_lang["thumbs_deleted"]			= "Miniaturansicht Verzeichnis erfolgreich entfernt.";
$pgv_lang["delete_dir_success"]		= "Medien und Miniaturansicht Verzeichnisse erfolgreich entfernt.";
$pgv_lang["current_dir"]			= "Aktuelles Verzeichnis";

//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]			= "Dateien durchsuchen";
$pgv_lang["enter_terms"]			= "Suchbegriffe eingeben";
$pgv_lang["soundex_search"]			= "Den Namen nach Aussprache suchen (Soundex-Methode)";
$pgv_lang["sources"]				= "Quellen";
$pgv_lang["firstname_search"]		= "Vorname";
$pgv_lang["lastname_search"]		= "Nachname";
$pgv_lang["search_place"]			= "Ort";
$pgv_lang["search_year"]			= "Jahr";
$pgv_lang["no_results"]				= "Keine Ergebnisse gefunden.";
$pgv_lang["invalid_search_input"] 	= "Bitte geben Sie einen Namen oder einen Ort zusätzlich zur Jahresangabe an";
$pgv_lang["search_options"]			= "Such Optionen";
$pgv_lang["search_geds"]			= "Dateien in denen gesucht wird";
$pgv_lang["search_type"]			= "Such Methode";
$pgv_lang["search_general"]			= "Normale Suche";
$pgv_lang["search_soundex"]			= "Soundex Suche";
$pgv_lang["search_inrecs"]			= "Suchen nach";
$pgv_lang["search_fams"]			= "Familien";
$pgv_lang["search_indis"]			= "Personen";
$pgv_lang["search_sources"]			= "Quellen";
$pgv_lang["search_more_chars"]      = "Bitte mehr als einen Buchstaben eingeben";
$pgv_lang["search_soundextype"]		= "Soundex Variante:";
$pgv_lang["search_russell"]			= "Russell";
$pgv_lang["search_DM"]				= "Daitch-Mokotoff";
$pgv_lang["search_prtnames"]		= "Personen<br />Namen zu drucken:";
$pgv_lang["search_prthit"]			= "Namen mit Treffern";
$pgv_lang["search_prtall"]			= "Alle Namen";
$pgv_lang["search_tagfilter"]		= "Ausschließ-Filter";
$pgv_lang["search_tagfon"]			= "Einige Nicht-Genealogie Daten ausschließen";
$pgv_lang["search_tagfoff"]			= "Ausgeschaltet";
$pgv_lang["associate"]				= "Beziehung";
$pgv_lang["search_asso_label"]		= "Beziehungen";
$pgv_lang["search_asso_text"]		= "Bezogene Personen/Familien zeigen";
$pgv_lang["results_per_page"]		= "Ergebnisse pro Seite";
$pgv_lang["search_to"]				= "bis";


//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]                = "Quellen gefunden";
$pgv_lang["titles_found"]			= "Titel";
$pgv_lang["find_source"]			= "Quelle suchen";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]				= "Archiv Liste";
$pgv_lang["repos_found"]			= "gefundene Archive";
$pgv_lang["find_repository"]		= "Archiv suchen";
$pgv_lang["total_repositories"]		= "Anzahl Archive";
$pgv_lang["repo_info"]				= "Archiv Informationen";
$pgv_lang["delete_repo"]			= "Archiv löschen";
$pgv_lang["other_repo_records"]		= "Datensätze, die auf dieses Archiv verweisen:";
$pgv_lang["create_repository"]		= "Archiv erstellen";
$pgv_lang["new_repo_created"]		= "neues Archiv erstellt";
$pgv_lang["paste_rid_into_field"]	= "Fügen Sie die folgende ID ein, um auf dieses Archiv zu verweisen ";
$pgv_lang["confirm_delete_repo"]	= "Möchten Sie dieses Archiv wirklich aus der Datenbank löschen?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]                = "Informationen zur Quelle";
$pgv_lang["other_records"]                = "Datensätze, die auf diese Quelle verweisen:";
$pgv_lang["people"]                        = "Personen";
$pgv_lang["families"]                        = "Familien";
$pgv_lang["total_sources"]			= "Anzahl Quellen:";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["building_indi"]                        = "Index Dateien der Personen und Familien werden erstellt";
$pgv_lang["building_index"]                        = "Listen der Index Dateien werden erstellt";
$pgv_lang["invalid_gedformat"]        = "Format entspricht nicht dem GEDCOM 5.5 Standard";
$pgv_lang["importing_records"]                        = "Datensätze werden in die Datenbank importiert";
$pgv_lang["detected_change"]                        = "PhpGedView hat eine Änderung an der Datei <b>#GEDCOM#</b> erkannt. Daher müssen jetzt die Index Dateien neu erstellt werden.";
$pgv_lang["please_be_patient"]                        = "Etwas Geduld, bitte";
$pgv_lang["reading_file"]                        = "GEDCOM Datei wird gelesen";
$pgv_lang["flushing"]                                = "Inhalt wird geleert";
$pgv_lang["found_record"]                        = "Datensatz gefunden";
$pgv_lang["exec_time"]                                = "Ausführungszeit:";
$pgv_lang["time_limit"]				= "Zeitbeschränkung:";
$pgv_lang["unable_to_create_index"]                = "Index Dateien können nicht erstellt werden. Stellen Sie sicher, dass die Rechte zum Schreiben im PhpGedView-Verzeichnis gesetzt sind. Die Rechte können zurückgesetzt werden, sobald die Index Dateien erstellt sind.";
$pgv_lang["indi_complete"]                        = "Aktualisierung der Personen-Index Datei ist beendet.";
$pgv_lang["family_complete"]                        = "Aktualisierung der Familien-Index Datei ist beendet.";
$pgv_lang["source_complete"]                        = "Aktualisierung der Quellen-Index Datei ist beendet.";
$pgv_lang["tables_exist"]                        = "PhpGedView Tabellen sind schon in der Datenbank vorhanden";
$pgv_lang["you_may"]                                = "Sie können:";
$pgv_lang["drop_tables"]                        = "die aktuellen SQL-Tabellen löschen";
$pgv_lang["import_multiple"]                        = "importieren und mit mehreren GEDCOM Dateien weiterarbeiten";
$pgv_lang["explain_options"]                        = "Wenn Sie beschliessen, die Tabellen zu löschen, werden <u>alle</u> Inhalte durch die dieser GEDCOM Datei ersetzt.<br /><br />Wenn Sie sich für einen Import und die Weiterarbeit mit mehreren GEDCOM Dateien entscheiden, wird PhpGedView alle Daten löschen, welche aus einer GEDCOM Datei mit gleichem Namen importiert wurden. Diese Option erlaubt es Ihnen, mehrere GEDCOM Dateien in den gleichen Tabellen zu speichern und sehr leicht zwischen diesen zu wechseln.<br /><br /><b>Bitte beachten Sie die Groß-/Kleinschreibung bei Dateinamen,</b> denn <b>Test.GED</b> ist <u>nicht</u> das selbe wie <b>test.ged</b>.";
$pgv_lang["path_to_gedcom"]                        = "Geben Sie den Pfad zu Ihrer GEDCOM Datei ein:";
$pgv_lang["gedcom_title"]                        = "Geben Sie einen Bezeichnung ein, welche die Daten in dieser GEDCOM Datei beschreibt";
$pgv_lang["dataset_exists"]                        = "Eine GEDCOM Datei mit diesem Namen wurde bereits in die Datenbank importiert.";
$pgv_lang["changes_present"]		= "Die aktuelle GEDCOM Datei enthält Änderungen die noch kontrolliert werden müssen. Wenn Sie mit dem Import fortfahren, werden diese Änderungen unmittelbar in die Datenbank eingefügt. Sie sollten die Änderungen kontrollieren, bevor Sie mit dem Importieren fortfahren.";
$pgv_lang["empty_dataset"]                        = "Möchten Sie den alten Datensatz löschen und durch diese neue Daten ersetzen?";
$pgv_lang["index_complete"]                        = "Index beendet.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]        = "Hier klicken, um zum Stammbaum zu gelangen.";
$pgv_lang["updating_is_dead"]                        = "Der «Verstorben» Status aller Personen wird aktualisiert";
$pgv_lang["import_complete"]                        = "Import beendet";
$pgv_lang["updating_family_names"]                = "Die Namen aller Familien werden aktualisiert.";
$pgv_lang["processed_for"]                        = "Datei bearbeitet";
$pgv_lang["run_tools"]                                = "Möchten Sie eines der folgenden Tools anwenden, bevor die GEDCOM Datei importiert wird:";
$pgv_lang["addmedia"]                                = "Add Media Tool (fügt OBJE Medien hinzu)";
$pgv_lang["dateconvert"]                        = "Date Conversion Tool (wandelt die Daten um)";
$pgv_lang["xreftorin"]                                = "Convert XREF IDs to RIN number (wandelt XREF Nummern in RIN Nummern um)";
$pgv_lang["tools_readme"]                        = "Bitte lesen Sie in der Datei README.TXT das Kapitel «Tools» für weitere Informationen.";
$pgv_lang["sec"]                                = "s";
$pgv_lang["bytes_read"]                                = "Gelesene Bytes:";
$pgv_lang["created_remotelinks_fail"] 	= "Die <i>Remotelinks</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_remotelinks"]	= "Die <i>Remotelinks</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_indis"]                = "Die <i>Individuals</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_indis_fail"]        = "Die <i>Individuals</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_fams"]                = "Die <i>Families</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_fams_fail"]        = "Die <i>Families</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_sources"]                = "Die <i>Sources</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_sources_fail"]        = "Die <i>Sources</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_other"]                = "Die <i>Other</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_other_fail"]        = "Die <i>Other</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_places"]                = "Die <i>Places</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_places_fail"]        = "Die <i>Places</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_placelinks"] 	= "Die <i>Place links</i> Tabelle wurde erfolgreich erstellt.";
$pgv_lang["created_placelinks_fail"]	= "Die <i>Place links</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_media_fail"]	= "Die <i>Media</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_media_mapping_fail"]	= "Die <i>Media mappings</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["import_progress"]        = "Import Fortschritt...";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]                        = "Familien insgesamt";
$pgv_lang["total_indis"]                = "Personen insgesamt";
$pgv_lang["starts_with"]                = "Starte mit:";
$pgv_lang["person_list"]                = "Personenliste:";
$pgv_lang["paste_person"]                = "Person einfügen";
$pgv_lang["notes_sources_media"]        = "Bemerkungen, Quellen und Multimedia Dateien";
$pgv_lang["notes"]                        = "Bemerkungen";
$pgv_lang["ssourcess"]                        = "Quellen";
$pgv_lang["media"]                        = "Multimedia";
$pgv_lang["name_contains"]                = "Name enthält:";
$pgv_lang["filter"]                        = "Filter";
$pgv_lang["find_individual"]                = "Person suchen";
$pgv_lang["find_familyid"]                = "Familie suchen";
$pgv_lang["find_sourceid"]                = "Quelle suchen";
$pgv_lang["find_specialchar"]		= "Ungewöhnliche Zeichen";
$pgv_lang["magnify"]				= "Vergrößern";
$pgv_lang["skip_surnames"]                = "Nachnamenlisten überspringen";
$pgv_lang["show_surnames"]                = "Nachnamenlisten anzeigen";
$pgv_lang["all"]                        = "ALLE";
$pgv_lang["hidden"]					= "Verborgen";
$pgv_lang["confidential"]			= "Vertraulich";
$pgv_lang["alpha_index"]				= "Alphabetisches Verzeichnis";
$pgv_lang["name_list"] 				= "Nachnamenliste";
$pgv_lang["firstname_alpha_index"] 	= "Alphabetisches Vornamen Verzeichnis";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]                        = "Alter";
$pgv_lang["days"]					= "Tage";
$pgv_lang["months"]					= "Monate";
$pgv_lang["years"]					= "Jahre";
$pgv_lang["day1"]					= "Tag";
$pgv_lang["month1"]					= "Monat";
$pgv_lang["year1"]					= "Jahr";
$pgv_lang["timeline_title"]                = "Lebensspanne";
$pgv_lang["timeline_chart"]                = "Lebenspannenanzeige";
$pgv_lang["remove_person"]                = "Person entfernen";
$pgv_lang["show_age"]                        = "Altersanker anzeigen";
$pgv_lang["add_another"]                = "Andere Person zur Ansicht hinzufügen:<br />Personen ID:";
$pgv_lang["find_id"]                        = "ID suchen";
$pgv_lang["show"]                        = "Zeigen";
$pgv_lang["year"]                        = "Jahr:";
$pgv_lang["timeline_instructions"]        = "In den meisten neueren Browsern, kann man die Rechtecke durch Klicken und gleichzeitiges Ziehen innerhalb der Ansicht bewegen.";
$pgv_lang["zoom_in"]                        = "Vergrößern";
$pgv_lang["zoom_out"]                        = "Verkleinern";

//-- MONTH NAMES
$pgv_lang["jan"]                        = "Januar";
$pgv_lang["feb"]                        = "Februar";
$pgv_lang["mar"]                        = "März";
$pgv_lang["apr"]                        = "April";
$pgv_lang["may"]                        = "Mai";
$pgv_lang["jun"]                        = "Juni";
$pgv_lang["jul"]                        = "Juli";
$pgv_lang["aug"]                        = "August";
$pgv_lang["sep"]                        = "September";
$pgv_lang["oct"]                        = "Oktober";
$pgv_lang["nov"]                        = "November";
$pgv_lang["dec"]                        = "Dezember";
$pgv_lang["abt"]                        = "um";
$pgv_lang["aft"]                        = "nach";
$pgv_lang["and"]                        = "und";
$pgv_lang["bef"]                        = "vor";
$pgv_lang["bet"]                        = "zwischen";
$pgv_lang["cal"]                        = "berechnet";
$pgv_lang["est"]                        = "geschätzt";
$pgv_lang["from"]                        = "vom";
$pgv_lang["int"]                        = "interpretiert";
$pgv_lang["to"]                                = "bis";
$pgv_lang["cir"]                        = "ca.";
$pgv_lang["apx"]                        = "ungef.";

//-- Admin File Messages
$pgv_lang["select_an_option"]                = "Wählen Sie bitte eine der unten aufgeführten Optionen:";
$pgv_lang["readme_documentation"]        = "README Datei / Dokumentation";
$pgv_lang["view_readme"]			= "Datei readme.txt ansehen";
$pgv_lang["configuration"]                = "Konfiguration";
$pgv_lang["rebuild_indexes"]                = "Index Dateien neu erstellen";
$pgv_lang["user_admin"]                        = "Benutzer Verwaltung";
$pgv_lang["user_created"]                = "Benutzer wurde erfolgreich angelegt.";
$pgv_lang["user_create_error"]                = "Der Benutzer konnte nicht angelegt werden. Bitte nochmal versuchen.";
$pgv_lang["password_mismatch"]                = "Passwörter stimmen nicht überein.";
$pgv_lang["enter_username"]                = "Sie müssen einen Benutzernamen eingeben.";
$pgv_lang["enter_fullname"]                = "Sie müssen einen vollständigen Namen eingeben.";
$pgv_lang["enter_password"]                = "Sie müssen ein Passwort eingeben.";
$pgv_lang["confirm_password"]                = "Sie müssen das Passwort bestätigen.";
$pgv_lang["update_user"]                = "Benutzerdaten bearbeiten";
$pgv_lang["update_myaccount"]                = "Meine Benutzerdaten bearbeiten";
$pgv_lang["save"]                        = "Speichern";
$pgv_lang["delete"]                        = "Löschen";
$pgv_lang["edit"]                        = "Bearbeiten";
$pgv_lang["full_name"]                        = "Vollständiger Name";
$pgv_lang["visibleonline"]				= "Für andere Benutzer sichtbar, wenn angemeldet";
$pgv_lang["comment"]				= "Bemerkungen des Verwalters über diesen Benutzer";
$pgv_lang["comment_exp"]			= "Verwalter erinnern am Datum";
$pgv_lang["editaccount"]				= "Benutzer darf seine Benutzerdaten ändern";
$pgv_lang["admin_gedcom"]				= "GEDCOM verwalten";
$pgv_lang["confirm_user_delete"]        = "Möchten Sie den Benutzer wirklich löschen";
$pgv_lang["create_user"]                = "Benutzer erstellen";
$pgv_lang["no_login"]				= "Kann Benutzer nicht verifizieren.";
$pgv_lang["basic_realm"]			= "PhpGedView Verifizierungs-System";
$pgv_lang["basic_auth_failure"]		= "Sie müssen einen gültigen Benutzernamen und dessen Passwort eingeben, um auf dieses System zuzugreifen.";
$pgv_lang["basic_auth"]				= "Einfache Verifizierung";
$pgv_lang["digest_auth"]				= "Auszug-Verifizierung";
$pgv_lang["no_auth_needed"]			= "Verifizierung nicht erfordert";
$pgv_lang["import_gedcom"]                = "Diese GEDCOM Datei importieren";
$pgv_lang["duplicate_username"]         = "Doppelter Benutzername. Ein Benutzer mit dem gewählten Namen existiert bereits. Bitte wählen Sie einen anderen Benutzernamen.";
$pgv_lang["gedcomid"]                   = "GEDCOM ID Nummer dieser Person";
$pgv_lang["enter_gedcomid"]             = "Sie müssen eine GEDCOM ID angeben.";
$pgv_lang["user_info"]                  = "Meine Benutzerdaten";
$pgv_lang["rootid"]                     = "Startperson für die Stammbaumdarstellung";
$pgv_lang["download_gedcom"]            = "GEDCOM Datei von Ihrem Server herunterladen (download)";
$pgv_lang["upload_gedcom"]              = "GEDCOM Datei auf Ihren Server laden (upload)";
$pgv_lang["add_new_gedcom"]                = "Neue GEDCOM Datei erstellen";
$pgv_lang["gedcom_file"]                = "GEDCOM Datei:";
$pgv_lang["enter_filename"]                = "Sie müssen einen GEDCOM Dateinamen eingeben.";
$pgv_lang["file_not_exists"]        = "Eine Datei mit dem eingegebenen Namen existiert nicht.";
$pgv_lang["file_not_present"]		= "Die Datei existiert nicht.";
$pgv_lang["file_exists"]                = "Es gibt schon eine GEDCOM Datei mit diesem Namen. Bitte wählen Sie einen anderen Dateinamen oder löschen Sie die alte Datei.";
$pgv_lang["new_gedcom_title"]                = "Genealogische Daten aus [#GEDCOMFILE#]";
$pgv_lang["upload_error"]               = "Beim übertragen (upload) Ihrer Datei auf Ihren Server trat ein Fehler auf.";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Wählen Sie die Dateien zum Hochladen auf Ihren Server. Alle Dateien werden in das <b>#MEDIA_DIRECTORY#</b> Verzeichnis aktualisiert  oder in eines seiner Unterverzeichnisse.<br /><br />Verzeichnisnamen die Sie eingeben, werden an #MEDIA_DIRECTORY# angehängt. Zum Beispiel, #MEDIA_DIRECTORY#Müller. Falls das Miniaturansicht Verzeichnis nicht existiert, wird es automatisch erstellt.";
$pgv_lang["upload_gedcom_help"]		= "Wählen Sie die GEDCOM oder die ZIP Datei zum Hochladen auf Ihren Server. Die Datei wird im <b>#INDEX_DIRECTORY#</b> Verzeichnis aktualisiert .<br /><br />Falls Sie eine ZIP Datei hochladen, sollte diese nur eine GEDCOM enthalten, und diese GEDCOM wird dann im nächsten Schritt automatisch benutzt.<br /><br />";
$pgv_lang["upload_help"]                = "Wählen Sie Dateien auf Ihrem lokalen Computer aus, um diese auf Ihren Server zu übertragen (upload). Alle Dateien werden in folgendes Verzeichnis geladen:";
$pgv_lang["add_gedcom_instructions"]        = "Geben Sie einen Dateinamen für diese neue GEDCOM Datei ein. Die neue GEDCOM Datei wird im #INDEX_DIRECTORY# Verzeichnis eingetragen. ";
$pgv_lang["file_success"]               = "Datei wurde erfolgreich auf Ihren Server hochgeladen";
$pgv_lang["file_too_big"]               = "Die zu hochladende Datei ist größer als erlaubt";
$pgv_lang["file_partial"]               = "Die Datei wurde nur teilweise hochgeladen. Bitte versuchen Sie es erneut.";
$pgv_lang["file_missing"]               = "Es kam keine Datei auf Ihrem Server an. Bitte erneut hochladen.";
$pgv_lang["manage_gedcoms"]             = "GEDCOM Dateien und Datenschutz-Einstellungen verwalten";
$pgv_lang["research_assistant"]		= "Forschungs-Assistent";
$pgv_lang["research_log"]			= "Forschungs-Protokoll";
$pgv_lang["administration"]             = "Verwaltung";
$pgv_lang["ansi_to_utf8"]                = "Soll diese ANSI-codierte GEDCOM Datei in den UTF-8 Zeichensatz konvertiert werden?";
$pgv_lang["utf8_to_ansi"]                = "Möchten Sie diese GEDCOM Datei vom UTF-8 in den ANSI (ISO-8859-1) Zeichensatz konvertieren?";
$pgv_lang["visitor"]				= "Besucher";
$pgv_lang["user"]					= "Benutzer bestätigt";
$pgv_lang["gedadmin"]				= "GEDCOM Verwalter";
$pgv_lang["siteadmin"]				= "Seiten Verwalter";
$pgv_lang["apply_privacy"]			= "Datenschutz Einstellungen verwenden?";
$pgv_lang["choose_priv"]			= "Datenschutzgrad wählen:";
$pgv_lang["user_manual"]                = "PhpGedView Handbuch für Benutzer";
$pgv_lang["upgrade"]                        = "PhpGedView verbessern";
$pgv_lang["view_logs"]                        = "Log Dateien anzeigen";
$pgv_lang["logfile_content"]        = "Inhalt der Logdatei";
$pgv_lang["step1"]                        = "Schritt 1 von 4:";
$pgv_lang["step2"]                        = "Schritt 2 von 4:";
$pgv_lang["step3"]                        = "Schritt 3 von 4:";
$pgv_lang["step4"]                        = "Schritt 4 von 4:";
$pgv_lang["validate_gedcom"]                = "GEDCOM Datei überprüfen";
$pgv_lang["img_admin_settings"]                = "Bild-Veränderungs-Konfiguration bearbeiten";
$pgv_lang["download_note"]                = "ANMERKUNG: Große GEDCOM Dateien benötigen vor dem Herunterladen u.U. eine längere Berechnungszeit. Wenn ein PHP-Timeout auftritt bevor das Herunterladen fertig ist, ist die Datei vermutlich nicht komplett.<br /><br />Prüfen Sie, ob die heruntergeladene Datei in der letzten Zeile <b>0&nbsp;TRLR</b> enthält, um das korrekte Herunterladen sicherzustellen. GEDCOM Dateien sind Textdateien, die mit einem einfachen Texteditor geöffnet werden können, aber achten Sie darauf, die Datei nach dem Ansehen <u>nicht</u> zu speichern.<br /><br />Üblicherweise benötigt das Herunterladen etwa so lang wie der Import-Vorgang.";
$pgv_lang["pgv_registry"]                = "Andere PhpGedView-Seiten besuchen";
$pgv_lang["verify_upload_instructions"]	= "Eine gleichnamige GEDCOM Datei existiert bereits. Wenn Sie fortfahren, wird die alte GEDCOM Datei durch die neu hochgeladene Datei ersetzt und der Import-Prozess beginnt erneut. Wenn Sie abbrechen, bleibt die alte GEDCOM Datei unverändert.";
$pgv_lang["cancel_upload"]				= "Upload abbrechen";
$pgv_lang["add_media_records"]		= "Multimedia Datensätze hinzufügen";
$pgv_lang["manage_media_files"]		= "Multimedia Dateien verwalten";
$pgv_lang["link_media_records"]		= "Multimedia Dateien mit Personen verbinden";
$pgv_lang["add_media_button"]            = "Multimedia Dateien hinzufügen";
$pgv_lang["media_linked"]			= "Dieses Medien Objekt ist wie folgt verbunden:";
$pgv_lang["media_not_linked"]		= "Dieses Medien Objekt ist mit keinem GEDCOM Datensatz verbunden.";
$pgv_lang["phpinfo"]				= "PHP Informationen";
$pgv_lang["admin_info"]				= "zur Information";
$pgv_lang["admin_geds"]				= "Daten und GEDCOM Verwaltung";
$pgv_lang["admin_site"]				= "Webseiten Verwaltung";

//-- Relationship chart messages
$pgv_lang["relationship_chart"]         = "Verwandtschaftsberechnung";
$pgv_lang["person1"]                    = "Person 1";
$pgv_lang["person2"]                    = "Person 2";
$pgv_lang["no_link_found"]              = "Keine (weitere) Verbindung zwischen den beiden Personen gefunden.";
$pgv_lang["sibling"]                    = "Geschwister";
$pgv_lang["follow_spouse"]              = "Verwandtschaft anhand der Ehen überprüfen";
$pgv_lang["timeout_error"]              = "Die maximal zulässige Ausführungszeit wurde überschritten, bevor ein Verwandtschaftsverhältnis gefunden werden konnte.";
$pgv_lang["son"]                        = "Sohn";
$pgv_lang["daughter"]                   = "Tochter";
$pgv_lang["son-in-law"]				= "Schwiegersohn";
$pgv_lang["daughter-in-law"]		= "Schwiegertochter";
$pgv_lang["grandchild"]				= "Enkelkind";
$pgv_lang["grandson"]				= "Enkelsohn";
$pgv_lang["granddaughter"]			= "Enkeltochter";
$pgv_lang["brother"]                    = "Bruder";
$pgv_lang["sister"]                     = "Schwester";
$pgv_lang["brother-in-law"]		= "Schwager";
$pgv_lang["sister-in-law"]			= "Schwägerin";
$pgv_lang["aunt"]					= "Tante";
$pgv_lang["uncle"]				= "Onkel";
$pgv_lang["firstcousin"]			= "Vetter ersten Grades";
$pgv_lang["femalecousin"]			= "Cousine";
$pgv_lang["malecousin"]				= "Cousin";
$pgv_lang["cousin-in-law"]			= "Schwiegercousin";
$pgv_lang["relationship_to_me"]                = "Verwandtschaft mit mir";
$pgv_lang["rela_husb"]				= "Verwandtschaft mit dem Ehemann";
$pgv_lang["rela_wife"]				= "Verwandschaft mit der Ehefrau";
$pgv_lang["next_path"]                        = "Nächsten Pfad suchen";
$pgv_lang["show_path"]                        = "Pfad anzeigen";
$pgv_lang["line_up_generations"]        = "Personen gleicher Generation auf einer Höhe darstellen";
$pgv_lang["oldest_top"]             = "Älteste zuoberst";
// %1$s replaced by first person, %2$s by the relationship and %3$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = '%1$s ist ein %2$s von %3$s.';
$pgv_lang["relationship_female_1_is_the_2_of_3"] = '%1$s ist eine %2$s von %3$s.';

$pgv_lang["mother_in_law"]		    = "Schwiegermutter";
$pgv_lang["father_in_law"]		    = "Schwiegervater";
$pgv_lang["brother_in_law"]		    = "Schwager";
$pgv_lang["sister_in_law"]		    = "Schwägerin";
$pgv_lang["son_in_law"]		        = "Schwiegersohn";
$pgv_lang["daughter_in_law"]			= "Schwiegertochter";

$pgv_lang["step_son"]		        	= "Stiefsohn";
$pgv_lang["step_daughter"]	    	= "Stieftochter";

// NOTE in the translations below %d is replaced with the number of greats
$pgv_lang["n_x_great_grandfather"]	= "%d x Urgroßvater";
$pgv_lang["n_x_great_grandmother"]	= "%d x Urgroßmutter";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 				= "Neffe";             // brother's son
$pgv_lang["bosa_brothers_offspring_3"] 				= "Nichte";              // brother's daughter
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 				= "Großneffe";       // brother's son's son
$pgv_lang["bosa_brothers_offspring_5"] 				= "Großnichte";        // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"] 				= "Großneffe";       // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"] 				= "Großnichte";        // brother's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = '%2$d x Großneffe';  //Urgroßneffe, Ururgroßneffe,....
$pgv_lang["n_x_brothers_daughter"] = '%2$d x Großnichte'; //Urgroßnichte, Ururgroßnichte,....
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "Neffe";             // sister's son
$pgv_lang["bosa_sisters_offspring_3"] 				= "Nichte";              // sister's daughter
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 				= "Großneffe";       // sister's son's son
$pgv_lang["bosa_sisters_offspring_5"] 				= "Großnichte";        // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"] 				= "Großneffe";       // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"] 				= "Großnichte";        // sister's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = '%2$d x Großneffe';
$pgv_lang["n_x_sisters_daughter"] = '%2$d x Großnichte';

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "Sohn"; // $pgv_lang["son"];                  // son
$pgv_lang["bosa_3"] 				= "Tochter"; //$pgv_lang["daughter"];              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "Enkel"; //$pgv_lang["Enkel"];              // son's son
$pgv_lang["bosa_5"] 				= "Enkelin"; //$pgv_lang["Enkelin"];         // son's daughter
$pgv_lang["bosa_6"] 				= "Enkel"; //$pgv_lang["Enkel"];              // daughter's son
$pgv_lang["bosa_7"] 				= "Enkelin";//$pgv_lang["Enkelin"];         // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "Urenkel";        // son's son's son
$pgv_lang["bosa_9"] 				= "Urenkelin";   // son's son's daughter
$pgv_lang["bosa_10"] 				= "Urenkel";		   // son's daughter's son
$pgv_lang["bosa_11"] 				= "Urenkelin";   // son's daughter's daughter
$pgv_lang["bosa_12"] 				= "Urenkel";        // daughter's son's son
$pgv_lang["bosa_13"] 				= "Urenkelin";   // daughter's son's daughter
$pgv_lang["bosa_14"] 				= "Urenkel";		   // daughter's daughter's son
$pgv_lang["bosa_15"] 				= "Urenkelin";   // daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = '%3$d x Urenkel';
$pgv_lang["n_x_granddaughter_from_son"] = '%3$d x Urenkelin';
$pgv_lang["n_x_grandson_from_daughter"]	  = '%3$d x Urenkel';
$pgv_lang["n_x_granddaughter_from_daughter"] = '%3$d x Urenkelin';

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= $pgv_lang["uncle"];            // father's brother
$pgv_lang["sosa_uncle_3"] 				= $pgv_lang["uncle"];            // mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "Großonkel";      // fathers's father's brother
$pgv_lang["sosa_uncle_5"] 				= "Großonkel";      // father's mother's brother
$pgv_lang["sosa_uncle_6"] 				= "Großonkel";      // mother's father's brother
$pgv_lang["sosa_uncle_7"] 				= "Großonkel";      // mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= '%2$d x Großonkel';  // "Großonkel n. Grades"
$pgv_lang["n_x_maternal_uncle"]	    = '%2$d x Großonkel';

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= $pgv_lang["aunt"];            // father's sister
$pgv_lang["sosa_aunt_3"] 				= $pgv_lang["aunt"];            // mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "Großtante";      // fathers's father's sister
$pgv_lang["sosa_aunt_5"] 				= "Großtante";      // father's mother's sister
$pgv_lang["sosa_aunt_6"] 				= "Großtante";      // mother's father's sister
$pgv_lang["sosa_aunt_7"] 				= "Großtante";      // mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= '%2$d x Großtante';  // "Großtante n. Grades"
$pgv_lang["n_x_maternal_aunt"]	    = '%2$d x Großtante';

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              = "Cousin";  // or "Vetter"
$pgv_lang["male_cousin_2"]              = "Cousin 2. Grades";
$pgv_lang["male_cousin_3"]              = "Cousin 3. Grades";
$pgv_lang["male_cousin_4"]              = "Cousin 4. Grades";
$pgv_lang["male_cousin_5"]              = "Cousin 5. Grades";
$pgv_lang["male_cousin_6"]              = "Cousin 6. Grades";
$pgv_lang["male_cousin_7"]              = "Cousin 7. Grades";
$pgv_lang["male_cousin_8"]              = "Cousin 8. Grades";
$pgv_lang["male_cousin_9"]              = "Cousin 9. Grades";
$pgv_lang["male_cousin_10"]             = "Cousin 10. Grades";
$pgv_lang["male_cousin_11"]             = "Cousin 11. Grades";
$pgv_lang["male_cousin_12"]             = "Cousin 12. Grades";
$pgv_lang["male_cousin_13"]             = "Cousin 13. Grades";
$pgv_lang["male_cousin_14"]             = "Cousin 14. Grades";
$pgv_lang["male_cousin_15"]             = "Cousin 15. Grades";
$pgv_lang["male_cousin_16"]             = "Cousin 16. Grades";
$pgv_lang["male_cousin_17"]             = "Cousin 17. Grades";
$pgv_lang["male_cousin_18"]             = "Cousin 18. Grades";
$pgv_lang["male_cousin_19"]             = "Cousin 19. Grades";
$pgv_lang["male_cousin_20"]             = "Cousin 20. Grades";
$pgv_lang["male_cousin_n"]              = "Cousin %d. Grades";
$pgv_lang["female_cousin_1"]            = "Cousine";  // or // "Base"
$pgv_lang["female_cousin_2"]            = "Cousine 2. Grades";
$pgv_lang["female_cousin_3"]            = "Cousine 3. Grades";
$pgv_lang["female_cousin_4"]            = "Cousine 4. Grades";
$pgv_lang["female_cousin_5"]            = "Cousine 5. Grades";
$pgv_lang["female_cousin_6"]            = "Cousine 6. Grades";
$pgv_lang["female_cousin_7"]            = "Cousine 7. Grades";
$pgv_lang["female_cousin_8"]            = "Cousine 8. Grades";
$pgv_lang["female_cousin_9"]            = "Cousine 9. Grades";
$pgv_lang["female_cousin_10"]           = "Cousine 10. Grades";
$pgv_lang["female_cousin_11"]           = "Cousine 11. Grades";
$pgv_lang["female_cousin_12"]           = "Cousine 12. Grades";
$pgv_lang["female_cousin_13"]           = "Cousine 13. Grades";
$pgv_lang["female_cousin_14"]           = "Cousine 14. Grades";
$pgv_lang["female_cousin_15"]           = "Cousine 15. Grades";
$pgv_lang["female_cousin_16"]           = "Cousine 16. Grades";
$pgv_lang["female_cousin_17"]           = "Cousine 17. Grades";
$pgv_lang["female_cousin_18"]           = "Cousine 18. Grades";
$pgv_lang["female_cousin_19"]           = "Cousine 19. Grades";
$pgv_lang["female_cousin_20"]           = "Cousine 20. Grades";
$pgv_lang["female_cousin_n"]            = "Cousine %d. Grades";


//-- GEDCOM edit utility
$pgv_lang["check_delete"]                = "Möchten Sie dieses Ereignis wirklich löschen?";
$pgv_lang["access_denied"]                = "<b>Zugriff verweigert</b><br />Sie besitzen hierfür keine Erlaubnis.";
$pgv_lang["gedrec_deleted"]                = "GEDCOM Datensatz erfolgreich gelöscht.";
$pgv_lang["gedcom_deleted"]                = "GEDCOM [#GED#] erfolgreich gelöscht.";
$pgv_lang["changes_exist"]                = "Die Änderungen an der GEDCOM Datei wurden durchgeführt.";
$pgv_lang["accept_changes"]                = "Änderungen übernehmen / verwerfen";
$pgv_lang["show_changes"]                = "Dieser Eintrag wurde geändert. Hier klicken, um die Änderungen zu sehen.";
$pgv_lang["hide_changes"]                = "Hier klicken, um die Änderungen zu verbergen.";
$pgv_lang["review_changes"]                = "GEDCOM Änderung überprüfen";
$pgv_lang["undo_successful"]                = "Verwerfen war erfolgreich";
$pgv_lang["undo"]                        = "Änderungen verwerfen";
$pgv_lang["view_change_diff"]                = "Änderungen ansehen";
$pgv_lang["changes_occurred"]                = "An diesem Datensatz wurden folgende Änderungen vorgenommen:";
$pgv_lang["find_place"]                        = "Ort suchen";
$pgv_lang["refresh"]				= "Erneuern";
$pgv_lang["close_window"]                = "Fenster schließen";
$pgv_lang["close_window_without_refresh"]        = "Fenster schließen ohne Neuladen";
$pgv_lang["place_contains"]             = "Ort enthält:";
$pgv_lang["accept_gedcom"]              = "Entscheiden Sie für jede Änderung, ob Sie sie übernehmen oder verwerfen möchten.<br /><br />Um alle Änderungen auf einmal zu übernehmen, klicken Sie <b>«Alle Änderungen übernehmen»</b> in der Box unten.<br />Weitere Informationen über eine Änderung erhalten Sie über den Link <b>«Änderungen ansehen»</b> oder klicken Sie <b>«GEDCOM Datensatz ansehen»</b>, um die veränderte GEDCOM Datei anzusehen.";
$pgv_lang["ged_import"]                 = "Import";
$pgv_lang["now_import"]                 = "Sie sollten jetzt den Import der GEDCOM Daten in PhpGedView starten, indem Sie auf den Import Button klicken.";
$pgv_lang["add_fact"]                   = "neues Ereignis hinzufügen";
$pgv_lang["add"]                        = "hinzufügen";
$pgv_lang["custom_event"]               = "Benutzerdefiniertes Ereignis";
$pgv_lang["update_successful"]                = "Aktualisierung erfolgreich";
$pgv_lang["add_child"]                  = "Kind hinzufügen";
$pgv_lang["add_child_to_family"]        = "Kind zu dieser Familie hinzufügen";
$pgv_lang["add_sibling"]                = "Einen Bruder oder eine Schwester hinzufügen";
$pgv_lang["add_son_daughter"]                = "Einen Sohn oder eine Tochter hinzufügen";
$pgv_lang["must_provide"]               = "Bitte eingeben:";
$pgv_lang["delete_person"]              = "Diese Person löschen";
$pgv_lang["confirm_delete_person"]      = "Möchten Sie diese Person wirklich aus der GEDCOM Datei löschen?";
$pgv_lang["find_media"]                 = "Multimedia Datei suchen";
$pgv_lang["set_link"]                   = "Verbindung setzen";
$pgv_lang["add_source_lbl"]                = "Quelle hinzufügen";
$pgv_lang["add_source"]                 = "Neue Quelle hinzufügen";
$pgv_lang["add_note_lbl"]                = "Bemerkung hinzufügen";
$pgv_lang["add_note"]                   = "Neue Bemerkung hinzufügen";
$pgv_lang["add_media_lbl"]                = "Multimedia Datei hinzufügen";
$pgv_lang["add_media"]                        = "Neue Multimedia Datei hinzufügen";
$pgv_lang["delete_source"]              = "Diese Quelle löschen";
$pgv_lang["confirm_delete_source"]      = "Möchten Sie diese Quelle wirklich aus der GEDCOM Datei löschen?";
$pgv_lang["add_husb"]                   = "Ehemann hinzufügen";
$pgv_lang["add_husb_to_family"]                = "Einen Ehemann zu dieser Familie hinzufügen";
$pgv_lang["add_wife"]                   = "Ehefrau hinzufügen";
$pgv_lang["add_wife_to_family"]                = "Eine Ehefrau zu dieser Familie hinzufügen";
$pgv_lang["find_family"]                = "Familie suchen";
$pgv_lang["find_fam_list"]                = "Familienliste suchen";
$pgv_lang["add_new_wife"]               = "Eine weitere Ehefrau hinzufügen";
$pgv_lang["add_new_husb"]               = "Einen weiteren Ehemann hinzufügen";
$pgv_lang["edit_name"]                        = "Namen bearbeiten";
$pgv_lang["delete_name"]                = "Namen löschen";
$pgv_lang["no_temple"]                        = "Kein Tempel - Ordinanz zu Lebzeiten";
$pgv_lang["replace"]                        = "Datensatz ersetzen";
$pgv_lang["append"]                                = "Datensatz hinzufügen";
$pgv_lang["add_father"]                        = "Einen Vater hinzufügen";
$pgv_lang["add_mother"]                        = "Eine Mutter hinzufügen";
$pgv_lang["add_obje"]                        = "Neues Multimedia Objekt hinzufügen";
$pgv_lang["no_changes"]                        = "Es liegen derzeit keine Änderungen zur Überprüfung vor.";
$pgv_lang["accept"]                                = "Übernehmen";
$pgv_lang["accept_all"]                        = "Alle Änderungen übernehmen";
$pgv_lang["accept_successful"]        = "Änderungen erfolgreich in die Datenbank übernommen";
$pgv_lang["edit_raw"]                        = "GEDCOM Rohdaten bearbeiten";
$pgv_lang["select_date"]                = "Datum auswählen";
$pgv_lang["create_source"]                = "Neue Quelle erstellen";
$pgv_lang["new_source_created"]        = "Neue Quelle erfolgreich erstellt.";
$pgv_lang["paste_id_into_field"]= "Fügen Sie diese ID Nummer in das jeweilige Eingabefeld ein, um auf diesen neu erstandenen Datensatz zu verweisen: ";
$pgv_lang["add_name"]			= "Neuen Namen hinzufügen";
$pgv_lang["privacy_not_granted"]	= "Sie haben keinen Zugriff auf";
$pgv_lang["user_cannot_edit"]		= "Dieser Benutzername kann diese GEDCOM Datei nicht ändern.";
$pgv_lang["gedcom_editing_disabled"]	= "Änderung dieser GEDCOM Datei wurde vom Verwalter gesperrt.";
$pgv_lang["privacy_prevented_editing"]	= "Die Datenschutz Einstellungen verhindern, dass Sie diesen Datensatz bearbeiten können.";
$pgv_lang["add_asso"]				= "Neue Beziehung hinzufügen";
$pgv_lang["edit_sex"]				= "Geschlecht ändern";
$pgv_lang["ged_noshow"]				= "Diese Seite wurde durch den Verwalter gesperrt.";
$pgv_lang["bdm"]					= "Geburten, Tode, Heiraten";

//-- calendar.php messages
$pgv_lang["on_this_day"]                = "An diesem Tag";
$pgv_lang["in_this_month"]                = "In diesem Monat";
$pgv_lang["in_this_year"]                = "In diesem Jahr";
$pgv_lang["year_anniversary"]                = "#year_var#. Jahrestag";
$pgv_lang["today"]                        = "Heute";
$pgv_lang["day"]                        = "Tag:";
$pgv_lang["month"]                        = "Monat:";
$pgv_lang["showcal"]                        = "Ereignisse anzeigen von:";
$pgv_lang["anniversary_calendar"]        = "Jahrestag Kalender";
$pgv_lang["sunday"]                        = "Sonntag";
$pgv_lang["monday"]                        = "Montag";
$pgv_lang["tuesday"]                        = "Dienstag";
$pgv_lang["wednesday"]                        = "Mittwoch";
$pgv_lang["thursday"]                        = "Donnerstag";
$pgv_lang["friday"]                        = "Freitag";
$pgv_lang["saturday"]                        = "Samstag";
$pgv_lang["viewday"]                        = "Tag anzeigen";
$pgv_lang["viewmonth"]                        = "Monat anzeigen";
$pgv_lang["viewyear"]                        = "Jahr anzeigen";
$pgv_lang["all_people"]                        = "Alle Personen";
$pgv_lang["living_only"]                = "Lebende Personen";
$pgv_lang["recent_events"]                = "Jüngere Ereignisse (&lt; 100 Jahre)";
$pgv_lang["day_not_set"]				= "Kein Tag angegeben";
$pgv_lang["year_error"]                        = "Daten vor 1970 werden leider nicht unterstützt.";

//-- upload media messages
$pgv_lang["upload"]					= "Hochladen";
$pgv_lang["upload_media"]                = "Multimedia Dateien auf Server hochladen";
$pgv_lang["folder"]		 			= "Server Verzeichnis";
$pgv_lang["media_file"]                 = "Multimedia Datei zum Hochladen";
$pgv_lang["thumbnail"]                  = "Miniaturansicht zum Hochladen";
$pgv_lang["upload_successful"]                = "Hochladen erfolgreich.";
$pgv_lang["media_file_deleted"]		= "Medien Datei erfolgreich gelöscht.";
$pgv_lang["media_file_not_deleted"]	= "Medien Datei konnte nicht gelöscht werden.";
$pgv_lang["media_file_not_moved"]	= "Medien Datei konnte nicht verlegt werden.";
$pgv_lang["media_file_not_renamed"]	= "Medien Datei konnte nicht verlegt oder umbenannt werden.";
$pgv_lang["thumbnail_deleted"]		= "Miniaturansicht Datei erfolgreich gelöscht.";
$pgv_lang["thumbnail_not_deleted"]	= "Miniaturansicht Datei konnte nicht gelöscht werden.";
$pgv_lang["media_record_deleted"]	= "Medien Datensatz #xref# und Verbindungen erfolgreich von der Datenbank gelöscht.";
$pgv_lang["media_record_not_deleted"]	= "Medien Datensatz #xref# und Verbindungen konnten aus der Datenbank nicht gelöscht werden.";
$pgv_lang["record_updated"]			= "Datensatz #pid# erfolgreich aktualisiert.";
$pgv_lang["record_not_updated"]		= "Datensatz #pid# konnte nicht aktualisiert werden.";
$pgv_lang["record_removed"]			= "Datensatz #xref# erfolgreich aus der Datei entfernt.";
$pgv_lang["record_not_removed"]		= "Datensatz #xref# konnte aus der Datei nicht entfernt werden.";
$pgv_lang["record_added"]			= "Datensatz #xref# erfolgreich der Datei hinzugefügt.";
$pgv_lang["record_not_added"]		= "Datensatz #xref# konnte der Datei nicht hinzugefügt werden.";

//-- user self registration module
//$pgv_lang["no_pw_or_account"]                = "Wenn Sie noch keinen Benutzerzugang haben, oder Ihr Passwort vergessen haben, klicken Sie einfach auf den <b>Login</b> Button";
$pgv_lang["lost_password"]                = "Haben Sie Ihr Passwort verloren?";
$pgv_lang["requestpassword"]            = "Neues Passwort beantragen";
$pgv_lang["no_account_yet"]                = "Haben Sie noch keine Benutzerdaten?";
$pgv_lang["requestaccount"]             = "Als neuer Benutzer anmelden";
$pgv_lang["register_info_01"]                = "Der Zugang zu privaten Daten auf dieser Webseite kann eingeschränkt sein wegen geltender Datenschutzbestimmungen. Viele Personen möchten nicht, dass ihre persönlichen Daten im Internet öffentlich zugänglich sind, da diese dann durch Identitäts-Diebstahl oder für Spam-Versandt missbraucht werden könnten.<br /><br />Um die privaten Daten zu sehen, müssen Sie einen Zugang zu dieser Webseite haben. Um einen Zugang zu bekommen, können Sie sich selbst registrieren, wobei Sie einige Fragen zu Ihrer Person beantworten müssen. Sobald der Verwalter Ihre Angaben geprüft und die Registrierung aktiviert hat, können Sie sich auf der Weibseite anmelden und private Daten ansehen.<br /><br />Falls die Verwandschaftsüberprüfung eingeschaltet wurde, können Sie auch danach nur auf die privaten Daten ihrer eigenen näheren Verwandtschaft zugreifen. Der Verwalter kann Ihnen auch Rechte zur Veränderung der vorhandenen Daten geben oder zum Eingeben neuer Daten.<br /><br />Bitte beachten Sie, dass Sie nur dann Zugriff auf die Daten erhalten, wenn Sie nachweisen können, dass Sie mit einer der Personen in der Datenbank verwandt sind. Falls dies nicht der Fall sein sollte, wäre es nutzlos, einen Antrag zu stellen, weil diesem wahrscheinlich nicht nachgegangen wird.<br /><br />Falls Sie weitere Unterstützung brauchen, klicken Sie bitte auf den unten stehenden Link und fragen Sie den Verwalter per Mail um Rat.<br /><br />";
$pgv_lang["register_info_02"]                = "";
$pgv_lang["pls_note01"]                 = "Bitte beachten: Es wird zwischen Groß- und Kleinbuchstaben unterschieden!";
$pgv_lang["min6chars"]                  = "Das Passwort muss mindestens 6 Zeichen enthalten";
$pgv_lang["pls_note02"]                 = "Bitte beachten: Passwörter können aus Buchstaben und Zahlen und weiteren Zeichen bestehen.";
$pgv_lang["pls_note03"]                 = "Diese Mail Adresse wird vor Aktivierung Ihres Zuganges überprüft. Sie wird nicht auf der Webseite veröffentlicht. Sie werden eine Nachricht mit Ihren Registrierungsdaten an diese Mail Adresse erhalten.";
$pgv_lang["emailadress"]                = "Mail Adresse";
$pgv_lang["mandatory"] 			= "Obligatorische Felder sind mit einem * markiert.";
$pgv_lang["pls_note04"]                 = "Mit * markierte Felder sind Pflichtfelder.";
$pgv_lang["pls_note05"]                 = "Sie müssen eine gültige Mail Adresse angeben, um die Bestätigungs-Mail zu erhalten.<br /><br />wenn Sie dieses Formular ausgefüllt haben und ihre Antwort überprüft wurde, werden Sie eine Bestätigungs-Mail an die hier angegebene Adresse erhalten. Mit der Bestätigungs-Mail können Sie Ihren Zugang aktivieren. Falls Sie den Zugang nicht binnen 7 Tagen aktivieren, wird er gelöscht (Sie müssen sich dann erst erneut registrieren).<br /><br />Um sich an dieser Seite anzumelden benötigen Sie Ihren Benutzernamen und das Passwort.<br /><br />Falls bei der Registrierung Probleme auftreten, fragen Sie bitte den Webmaster um Hilfe.";

$pgv_lang["mail01_line01"]              = "Hallo #user_fullname# ...";
$pgv_lang["mail01_line02"]              = "Auf der Webseite ( #SERVER_NAME# ) wurde ein Benutzerantrag mit Ihrer Mail Adresse ( #user_email# ) gestellt.";
$pgv_lang["mail01_line03"]              = "Informationen zu der Anfrage können Sie unter dem untenstehenden Link abrufen.";
$pgv_lang["mail01_line04"]              = "Bitte klicken Sie nun auf den folgenden Link und geben die dort geforderten Daten ein, um Ihre Anmeldung und Ihre Mail Adresse zu bestätigen.";
$pgv_lang["mail01_line05"]              = "Falls Sie keinen Zugang beantragt haben, können Sie diese Mail einfach löschen.";
$pgv_lang["mail01_line06"]              = "Sie werden keine weitere Mail mehr erhalten, da ohne Verifizierung die angegebenen Daten nach einer Woche automatisch gelöscht werden.";
$pgv_lang["mail01_subject"]             = "Ihre Anmeldung bei #SERVER_NAME#";

$pgv_lang["mail02_line01"]              = "Hallo Verwalter ...";
$pgv_lang["mail02_line02"]              = "Ein neuer Benutzer hat sich auf der Website ( #SERVER_NAME# ) angemeldet.";
$pgv_lang["mail02_line03"]              = "Der Benutzer hat eine Mail mit den zur Verifizierung notwendigen Informationen erhalten.";
$pgv_lang["mail02_line04"]              = "Sobald diese Verifikation erfolgt ist, werden Sie erneut benachrichtigt und aufgefordert, diese Person freizuschalten. Der neue Benutzer kann sich nicht anmelden, bis Sie seinen Zugang zulassen.";
$pgv_lang["mail02_line04a"]			= "Sobald diese Verifikation erfolgt ist, werden Sie erneut benachrichtigt. Der Benutzer kann sich nach seiner eigenen Verifikation anmelden, ohne dass Sie weitere Schritte unternehmen müssen.";
$pgv_lang["mail02_subject"]             = "Neue Anmeldung bei #SERVER_NAME#";

$pgv_lang["hashcode"]                   = "Verifizierungscode:";
$pgv_lang["thankyou"]                   = "Hallo #user_fullname# ...<br />Danke für Ihren Antrag";
$pgv_lang["pls_note06"]                 = "Ihnen wird nun eine Bestätigungsmail an die Adresse ( #user_email# ) geschickt. Sie müssen den in der Mail enthaltenen Anweisungen folgen, um Ihren Benutzernamen zu aktivieren. Falls Sie innerhalb von 7 Tagen nicht reagieren, wird Ihr Antrag automatisch abgewiesen. Sie müssen dann erneut antragen.<br /><br />Wenn Sie den Anweisungen in der Bestätigungs Mail gefolgt sind, muss der Verwalter Ihren Benutzernamen noch freischalten, bevor Sie ihn benutzen können.<br /><br />Um sich auf dieser Webseite anzumelden, benötigen Sie Ihren Benutzernamen und Ihr Passwort.<br /><br />";
$pgv_lang["pls_note06a"] 			= "Ihnen wird nun eine Bestätigungsmail an die Adresse ( #user_email# ) geschickt. Sie müssen den in der Mail enthaltenen Anweisungen folgen, um Ihren Benutzernamen zu aktivieren. Falls Sie innerhalb von 7 Tagen nicht reagieren, wird Ihr Antrag automatisch abgewiesen. Sie müssen dann erneut antragen.<br /><br />Wenn Sie den Anweisungen in der Bestätigungs Mail gefolgt sind, können Sie sich sofort auf dieser Webseite anmelden. Dazu benötigen Sie Ihren Benutzernamen und Ihr Passwort.<br /><br />";

$pgv_lang["registernew"]                = "Verifizierung der neuen Benutzerdaten";
$pgv_lang["user_verify"]                = "Benutzer Verifizierung";
$pgv_lang["send"]                       = "Absenden";

$pgv_lang["pls_note07"]                 = "~#pgv_lang[user_verify]#~<br /><br />Um Ihren Antrag zu bestätigen, geben Sie bitte nun Ihren Benutzernamen, Ihr Passwort und den Verifizierungscode ein, den Sie per Mail erhalten haben.";
$pgv_lang["pls_note08"]                 = "Die Angaben für den Benutzer #user_name# wurden überprüft.";

$pgv_lang["mail03_line01"]              = "Hallo Verwalter ...";
$pgv_lang["mail03_line02"]              = "Der Benutzer #newuser[username]# ( #newuser[fullname]# ) hat seine Registrierungsdaten bestätigt.";
$pgv_lang["mail03_line03"]              = "Bitte klicken Sie jetzt auf den unten stehenden Link und melden sich an. Sie müssen den Zugang dieses Benutzers frei geben, damit dieser sich mit seinem Benutzernamen und Passwort anmelden kann.";
$pgv_lang["mail03_line03a"]			= "Der Benutzer kann sich jetzt anmelden; Sie müssen nichts weiter unternehmen.";
$pgv_lang["mail03_subject"]             = "Neue Verifizierung bei #SERVER_NAME#";

$pgv_lang["pls_note09"]                 = "Sie haben Ihren Antrag als Benutzer bestätigt.";
$pgv_lang["pls_note10"]                 = "Der Verwalter wurde benachrichtigt. Sobald dieser Ihren Zugang freigegeben hat, können Sie sich mit Ihrem Benutzernamen und Passwort anmelden.";
$pgv_lang["pls_note10a"]			= "Sie können sich jetzt mit Ihrem Benutzernamen und Passwort anmelden.";
$pgv_lang["data_incorrect"]             = "Die Daten waren falsch, bitte versuchen Sie es erneut.";
$pgv_lang["user_not_found"]                = "Die eingegebenen Informationen waren falsch. Bitte versuchen Sie es erneut.";

$pgv_lang["lost_pw_reset"]              = "Passwort neu anfordern";

$pgv_lang["pls_note11"]                 = "Um ein neues Passwort zu beantragen, geben Sie bitte Ihren Benutzernamen und die Mail Adresse Ihres Zugangs ein.<br /><br />Wir werden Ihnen eine spezielle URL zumailen, die einen Bestätigungs Code für Ihren Zugang enthält. Auf der Web Seite dieser URL können Sie Ihr Passwort ändern und sich anmelden. Aus Sicherheitsgründen sollten Sie diesen Bestätigungs Code niemandem mitteilen.<br /><br />Falls Sie Hilfe benötigen, schreiben Sie bitte eine Anfrage an den Verwalter.";
$pgv_lang["enter_email"]                = "Sie müssen eine Mail Adresse angeben.";

$pgv_lang["mail04_line01"]              = "Hallo #user_fullname#...";
$pgv_lang["mail04_line02"]              = "Für Ihren Benutzernamen wurde ein neues Passwort angefordert.";
$pgv_lang["mail04_line03"]              = "Empfehlung:";
$pgv_lang["mail04_line04"]              = "Bitte klicken Sie jetzt auf den unten stehenden Link oder kopieren Sie ihn in die Adresszeile Ihres Browsers, melden sich mit dem neuen Passwort an und ändern Sie es sofort aus Datenschutzgründen.";
$pgv_lang["mail04_line05"]			= "Um Ihr Passwort, nachdem Sie sich angemeldet haben zu ändern, wählen Sie die «#pgv_lang[myuserdata]#» Verbindung innerhalb des «#pgv_lang[mygedview]#» Menüs und tragen Sie dann in beiden Passwort Feldern das neue Passwort ein.";
$pgv_lang["mail04_subject"]                = "Datenanforderung bei #SERVER_NAME#";

$pgv_lang["pwreqinfo"]                        = "Hallo...<br /><br />Das neue Passwort wurde an die von Ihnen angegebene Mail Adresse (#user[email]#) versandt.<br /><br />Sie sollten das Mail bald in Ihrem Postfach finden.<br /><br />Hinweis:<br />Sie sollten sich baldmöglichst mit dem neuen Passwort anmelden und Ihr Passwort aus Datenschutzgründen sofort ändern.";

$pgv_lang["editowndata"]                = "Eigene Benutzerdaten bearbeiten";
$pgv_lang["savedata"]                   = "Geänderte Daten speichern";
$pgv_lang["datachanged"]                = "Benutzerdaten wurden geändert";
$pgv_lang["datachanged_name"]           = "Möglicherweise müssen Sie sich mit Ihrem neuen Benutzernamen neu anmelden.";
$pgv_lang["myuserdata"]                 = "Meine Benutzerdaten";
$pgv_lang["verified"]                   = "Benutzer hat sich selber verifiziert";
$pgv_lang["verified_by_admin"]          = "Benutzer wurde vom Verwalter freigegeben";
$pgv_lang["user_theme"]                 = "Mein Theme";
$pgv_lang["mgv"]                        = "MeinGedView";
$pgv_lang["mygedview"]                  = "Mein GedView Portal";
$pgv_lang["passwordlength"]             = "Das Passwort muss mindestens 6 Zeichen lang sein.";
$pgv_lang["admin_approved"]                = "Ihr Zugang für #SERVER_NAME# wurde erlaubt";
$pgv_lang["you_may_login"]                = " vom Verwalter dieser Seite. Mit dem folgenden Link können Sie sich jetzt auf der PhpGedView Seite anmelden:";
$pgv_lang["welcome_text_auth_mode_1"]        =        "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Den Zugriff auf diese Seite erhält jeder Benutzer, der einen Zugang beantragt hat.<br /><br />Wenn Sie bereits einen Benutzernamen haben, können Sie sich auf dieser Seite anmelden. Wenn Sie noch keinen Zugang besitzen, können Sie diesen beantragen, indem Sie auf den entsprechenden Link klicken.<br /><br />Sobald Ihre Angaben überprüft sind, wird der Verwalter Ihren Zugang freigeben. Sie werden dann eine Bestätigungsungsmail erhalten.";
$pgv_lang["welcome_text_auth_mode_2"]        =        "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Der Zugriff auf diese Seite ist nur <u>autorisierten</u> Benutzern erlaubt.<br /><br />Wenn Sie bereits einen Benutzernamen haben, können Sie sich auf dieser Seite anmelden. Wenn Sie noch keinen Zugang besitzen, können Sie diesen beantragen, indem Sie auf den entsprechenden Link klicken.<br /><br />Sobald Ihre Angaben überprüft sind, wird der Verwalter Ihrem Antrag zustimmen (oder ihn ablehnen). Sie werden eine Mail mit dem Antragsergebnis erhalten.";
$pgv_lang["welcome_text_auth_mode_3"]        =        "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Den Zugriff auf diese Seite erhalten <u>nur Familienmitglieder</u>.<br /><br />Wenn Sie bereits einen Benutzernamen haben, können Sie sich auf dieser Seite anmelden. Wenn Sie noch keinen Zugang besitzen, können Sie diesen beantragen, indem Sie auf den entsprechenden Link klicken.<br /><br />Sobald Ihre Angaben überprüft sind, wird der Verwalter Ihrem Antrag zustimmen (oder ihn ablehnen).<br />Sie werden eine Mail mit dem Antragsergebnis erhalten.";
$pgv_lang["welcome_text_cust_head"]                =        "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Der Zugriff ist Benutzern vorbehalten, die einen Benutzernamen und ein Passwort für diese Webseite haben.<br />";

//-- mygedview page
$pgv_lang["welcome"]                    = "Willkommen";
$pgv_lang["upcoming_events"]                = "Bevorstehende Ereignisse";
$pgv_lang["living_or_all"]			= "Nur Ereignisse von lebenden Personen anzeigen?";
$pgv_lang["basic_or_all"]			= "Nur Geburten, Tode, und Heiraten zeigen?";
$pgv_lang["no_events_living"]		= "Für die nächsten #pgv_lang[global_num1]# Tage stehen keine Ereignisse für lebende Personen bevor.";
$pgv_lang["no_events_living1"]		= "Für morgen stehen keine Ereignisse für lebende Personen bevor.";
$pgv_lang["no_events_all"]			= "Für die nächsten #pgv_lang[global_num1]# Tage stehen keine Ereignisse bevor.";
$pgv_lang["no_events_all1"]			= "Für morgen stehen keine Ereignisse bevor.";
$pgv_lang["no_events_privacy"]		= "Für die nächsten #pgv_lang[global_num1]# Tage stehen zwar Ereignisse bevor, aber aus Datenschutz Gründen werden diese nicht angezeigt.";
$pgv_lang["no_events_privacy1"]		= "Für morgen stehen zwar Ereignisse bevor, aber aus Datenschutz Gründen werden diese nicht angezeigt.";
$pgv_lang["more_events_privacy"]	= "<br />Für die folgenden #pgv_lang[global_num1]# Tage stehen zwar mehr Ereignisse bevor, aber aus Datenschutz Gründen werden diese nicht angezeigt.";
$pgv_lang["more_events_privacy1"]	= "<br />Für morgen stehen zwar mehr Ereignisse bevor, aber aus Datenschutz Gründen werden diese nicht angezeigt.";
$pgv_lang["none_today_living"]		= "Heute gibt es keine Ereignisse für lebende Personen.";
$pgv_lang["none_today_all"]			= "Heute gibt es keine Ereignisse.";
$pgv_lang["none_today_privacy"]		= "Heute gibt es zwar Ereignisse, aber aus Datenschutz Gründen werden diese nicht angezeigt.";
$pgv_lang["more_today_privacy"]		= "<br />Heute gibt es zwar mehr Ereignisse, aber aus Datenschutz Gründen werden diese nicht angezeigt.";
$pgv_lang["chat"]                       = "Chat";
$pgv_lang["users_logged_in"]                = "Angemeldete Benutzer";
$pgv_lang["anon_user"]				= "1 anonymer angemeldeter Benutzer";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# anonyme angemeldete Benutzer";
$pgv_lang["login_user"]				= "1 angemeldeter Benutzer";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# angemeldete Benutzer";
$pgv_lang["no_login_users"]			= "Keine angemeldete oder anonyme Benutzer";
$pgv_lang["message"]                        = "Nachricht senden";
$pgv_lang["my_messages"]                = "Meine Nachrichten";
$pgv_lang["date_created"]                = "gesendet:";
$pgv_lang["message_from"]                = "Mail Adresse:";
$pgv_lang["message_from_name"]                = "Ihr Name:";
$pgv_lang["message_to"]                        = "An:";
$pgv_lang["message_subject"]                = "Betreff:";
$pgv_lang["message_body"]                = "Text:";
$pgv_lang["no_to_user"]                 = "Bitte Empfänger angeben.";
$pgv_lang["provide_email"]              = "Bitte geben Sie die Mail Adresse an, damit wir Ihre Nachricht beantworten können. Andernfalls ist eine Antwort nicht möglich. Ihre Mail Adresse wird ausschließlich zur Beantwortung Ihrer Anfrage genutzt.";
$pgv_lang["reply"]                      = "Antwort";
$pgv_lang["message_deleted"]                = "Nachricht gelöscht";
$pgv_lang["message_sent"]               = "Nachricht an #TO_USER# gesendet";
$pgv_lang["reset"]                      = "Reset";
$pgv_lang["site_default"]               = "Grundeinstellung";
$pgv_lang["mygedview_desc"]             = "Dieses Portal ermöglicht Ihnen das Anlegen von Lesezeichen zu bevorzugten Personen, Überwachen bevorstehender Ereignisse und die Zusammenarbeit mit anderen PhpGedView Benutzern.";
$pgv_lang["no_messages"]                = "Keine neuen Nachrichten.";
$pgv_lang["clicking_ok"]                = "Durch Klick auf OK, können Sie im sich dann öffnenden Fenster #user[fullname]# kontaktieren.";
$pgv_lang["favorites"]               	= "Lesezeichen";
$pgv_lang["my_favorites"]               = "Meine Lesezeichen";
$pgv_lang["no_favorites"]               = "Sie haben noch keine Lesezeichen gesetzt.<br /><br />Dies können Sie tun, indem Sie in der Detailansicht einer Person auf den <b>#pgv_lang[add_favorite]#</b> Button klicken.  Nachdem Sie diesen Button klicken, werden einige Felder angezeigt, wo Sie eine ID-Nummer eingeben oder suchen können.  Anstatt einer ID-Nummer können Sie auch ein URL mit Titel eingeben.";
$pgv_lang["add_to_my_favorites"]        = "Lesezeichen hinzufügen";
$pgv_lang["gedcom_favorites"]                = "Stammbaum Lesezeichen";
$pgv_lang["no_gedcom_favorites"]        = "Derzeit sind keine Lesezeichen angelegt. Der Verwalter kann Lesezeichen einrichten, die Ihnen hier automatisch angezeigt werden.";
$pgv_lang["confirm_fav_remove"]                = "Möchten Sie dieses Lesezeichen wirklich löschen?";
$pgv_lang["invalid_email"]              = "Bitte geben Sie eine gültige Mail Adresse ein.";
$pgv_lang["enter_subject"]              = "Bitte geben Sie einen Betreff ein.";
$pgv_lang["enter_body"]                 = "Bitte geben Sie vor dem Senden einen Text ein.";
$pgv_lang["confirm_message_delete"]        = "Möchten Sie diese Nachricht wirklich löschen? Sie kann anschließend nicht wiederhergestellt werden.";
$pgv_lang["message_email1"]                = "Die folgende Nachricht wurde an Ihr PhpGedView Benutzer Postfach gesendet von ";
$pgv_lang["message_email2"]                = "Sie haben die folgende Nachricht an einen PhpGedView Benutzer gesendet:";
$pgv_lang["message_email3"]                = "Sie haben die folgende Nachricht an einen PhpGedView Verwalter gesendet:";
$pgv_lang["viewing_url"]                = "Diese Nachricht wurde gesendet als die folgende Seite aufgerufen wurde: ";
$pgv_lang["messaging2_help"]                = "Wenn Sie diese Nachricht senden, erhalten Sie eine Kopie an die von Ihnen angegebene Adresse.";
$pgv_lang["random_picture"]                = "Zufällig ausgewähltes Bild";
$pgv_lang["message_instructions"]        = "<b>Bitte beachten:</b> Private Informationen von lebenden Personen werden nur Familienangehörigen und nahen Freunden zugänglich gemacht. Bevor Sie irgendwelche persönlichen Daten ansehen können, müssen Sie Ihren Verwandtschaftsgrad belegen. Es kann auch vorkommen, dass bestimmte Daten von bereits verstorbenen Personen vertraulich sind. Dies kann der Fall sein, wenn nicht genügend Informationen vorhanden sind, um sicher zu belegen, ob die Person noch lebt oder verstorben ist.<br /><br />Bevor Sie Fragen stellen, überprüfen Sie bitte, dass Sie über die richtige Person fragen, indem Sie Orte, Zeitangaben und Verwandte prüfen. Falls Sie Änderungen der genealogischen Daten übermitteln, geben Sie bitte auch die Quelle an, von der Sie Ihre Informationen bezogen haben.<br /><br />";
$pgv_lang["sending_to"]                        = "Diese Nachricht wird an #TO_USER# gesendet";
$pgv_lang["preferred_lang"]                 = "Dieser Nutzer bevorzugt Nachrichten in #USERLANG#";
$pgv_lang["gedcom_created_using"]        = "Diese GEDCOM Datei wurde mit <b>#SOFTWARE# #VERSION#</b> ";
$pgv_lang["gedcom_created_on"]                = "Diese GEDCOM Datei wurde am <b>#DATE#</b> erstellt.";
$pgv_lang["gedcom_created_on2"]        = " am <b>#DATE#</b> erstellt.";
$pgv_lang["gedcom_stats"]                = "GEDCOM Statistiken";
$pgv_lang["stat_individuals"]                = "Personen";
$pgv_lang["stat_families"]                = "Familien";
$pgv_lang["stat_sources"]                = "Quellen";
$pgv_lang["stat_media"]                = "Medien Objekte";
$pgv_lang["stat_other"]                        = "Andere Datensätze";
$pgv_lang["stat_earliest_birth"] 	= "Frühestes Geburts-Datum";
$pgv_lang["stat_latest_birth"] 	= "Letztes Geburts-Datum";
$pgv_lang["stat_earliest_death"] 	= "Frühestes Sterbe-Datum";
$pgv_lang["stat_latest_death"] 	= "Letztes Sterbe-Datum";
$pgv_lang["customize_page"]                = "Mein GedView Portal anpassen";
$pgv_lang["customize_gedcom_page"]        = "Stammbaum Begrüßungs Seite anpassen";
$pgv_lang["upcoming_events_block"]        = "Bevorstehende Ereignisse";
$pgv_lang["upcoming_events_descr"]        = "Der «Bevorstehende Ereignisse» Block zeigt eine Liste von Daten aus der Datenbank an, die sich in den kommenden Tagen jähren.<br /><br />Sie können für Ihre Portal Seite den Umfang dieses Blocks kontrollieren.  Der Verwalter tut das Gleiche für die Begrüßungs Seite.";
$pgv_lang["todays_events_block"]        = "An diesem Tag";
$pgv_lang["todays_events_descr"]        = "Der «An diesem Tag» Block zeigt eine Liste von Daten aus der Datenbank an, die sich heute jähren.<br /><br />Sie können für Ihre Portal Seite den Umfang dieses Blocks kontrollieren.  Der Verwalter tut das Gleiche für die Begrüßungs Seite.";
$pgv_lang["logged_in_users_block"]        = "Angemeldete Benutzer";
$pgv_lang["logged_in_users_descr"]        = "Der «Angemeldete Benutzer» Block zeigt eine Liste der Personen, die derzeit auf dieser Webseite angemeldet sind.";
$pgv_lang["user_messages_block"]        = "Benutzer Nachrichten";
$pgv_lang["user_messages_descr"]        = "Der «Benutzer Nachrichten» Block zeigt eine Liste von Nachrichten an, die der aktuelle Benutzer erhalten hat.";
$pgv_lang["user_favorites_block"]        = "Benutzer Lesezeichen";
$pgv_lang["user_favorites_descr"]        = "Der «Lesezeichen» Block zeigt dem Benutzer eine Liste der von ihm als wichtig angesehenen Personen in der Datenbank an, deren Daten er so schneller wieder auffinden kann.";
$pgv_lang["welcome_block"]                = "Willkommen";
$pgv_lang["welcome_descr"]                = "Der «Willkommen» Block zeigt dem Benutzer das aktuelle Datum und die Uhrzeit, Links zur Änderung der Benutzereinstellung und zu seiner eigenen Stammbaumansicht und auch einen Link zur Anpassung seiner Mein GedView Seite.";
$pgv_lang["random_media_block"]                = "Zufälliges Bild";
$pgv_lang["random_media_descr"]                = "Der «Zufälliges Bild» Block wählt bei jedem Aufruf zufällig ein Bild aus der Datenbank aus und zeigt es an.<br /><br />Der Verwalter kontrolliert die Art der Medien Objekte die hier angezeigt werden können.";
$pgv_lang["random_media_events"]	= "Ereignisse";
$pgv_lang["random_media_persons"]	= "Personen";
$pgv_lang["random_media_persons_or_all"]	= "Personen, Ereignisse, oder alle Medien anzeigen?";
$pgv_lang["gedcom_block"]                = "GEDCOM Willkommen";
$pgv_lang["gedcom_descr"]                = "Der «GEDCOM Willkommen» Block ist equivalent zum «Willkommen» Block indem er dem Benutzer den Titel der aktuellen Datei, sowie Datum und Uhrzeit anzeigt.";
$pgv_lang["gedcom_favorites_block"]        = "GEDCOM Lesezeichen";
$pgv_lang["gedcom_favorites_descr"]        = "Der «GEDCOM Lesezeichen» Block gibt dem Verwalter die Möglichkeit, wichtige Personen der Datenbank als Lesezeichen einzutragen, so dass die Besucher sie leichter finden können.";
$pgv_lang["gedcom_stats_block"]                = "GEDCOM Statistiken";
$pgv_lang["gedcom_stats_descr"]                = "Der «GEDCOM Statistiken» Block zeigt dem Besucher einige Informationen über die GEDCOM Datei, z.B. wann sie erstellt wurde und wie viele Personen sie umfasst.<br /><br />Es kann auch eine Liste der am häufigsten vorkommenden Namen angezeigt werden. Zu dieser Liste können Namen hinzugefügt oder daraus Namen unterdrückt werden. Der Häufigkeitswert, ab wann ein Name in dieser Liste auftaucht, kann in der GEDCOM Konfiguration eingestellt werden.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Häufig vorkommende Nachnamen anzeigen?";
$pgv_lang["portal_config_intructions"]        = "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Sie können die Seite Ihren Wünschen anpassen, indem Sie die Positionen der einzelnen Blöcke angeben.<br /><br />Die Seite ist in die Bereiche <b>Hauptbereich</b> und <b>Rechts</b> aufgeteilt. Die Blöcke im <b>Hauptbereich</b> erscheinen breiter und setzen sich links auf der Seite nach unten fort. Der Bereich <b>Rechts</b> setzt sich rechts auf der Seite nach unten fort.<br /><br />Jeder Bereich hat seine eigene Liste von Blöcken, die dort in der Reihenfolge ihrer Nennung angezeigt werden. Sie können Blöcke hinzufügen, entfernen oder umsortieren, wie es Ihnen beliebt.<br /><br />Wenn eine der beiden Listen leer ist werden die Blöcke des anderen Bereiches auf der vollen Seitenbreite dargestellt.<br /><br />";
$pgv_lang["login_block"]                = "Login";
$pgv_lang["login_descr"]                = "Der «Login» Block ermöglicht Benutzern das Anmelden auf dieser Seite.";
$pgv_lang["theme_select_block"]         = "Theme Auswahl";
$pgv_lang["theme_select_descr"]         = "Der «Theme Auswahl» Block zeigt die Themenauswahl Liste an - auch dann, wenn der Wechsel des Themes eigentlich deaktiviert ist.";
$pgv_lang["block_top10_title"]          = "Häufigste 10 Nachnamen";
$pgv_lang["block_top10"]                = "Häufigste 10 Nachnamen";
$pgv_lang["block_top10_descr"]          = "Dieser Block zeigt eine Liste mit den 10 häufigsten Nachnamen der Datenbank. Die tatsächliche Länge der Liste ist konfigurierbar. Sie können auch bestimmte Namen in der Liste unterdrücken.";

$pgv_lang["gedcom_news_block"]                = "GEDCOM Neuigkeiten";
$pgv_lang["gedcom_news_descr"]                = "Der «GEDCOM Neuigkeiten» Block zeigt dem Besucher neue Veröffentlichungen oder Artikel an, die der Verwalter meldet.<br /><br />Dieser Bereich ist ein guter Platz für die Mitteilung über eine neue GEDCOM Datei, zur Ankündigung eines Familientreffens oder die Bekanntgabe der Geburt eines neuen Familienmitgliedes.";
$pgv_lang["gedcom_news_limit"]		= "Anzeigenbeschränkung:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Keine";
$pgv_lang["gedcom_news_limit_date"]		= "Alter";
$pgv_lang["gedcom_news_limit_count"]	= "Anzahl";
$pgv_lang["gedcom_news_flag"]		= "Beschränkung:";
$pgv_lang["gedcom_news_archive"] 	= "Archiv anzeigen";
$pgv_lang["user_news_block"]                = "Benutzer Journal";
$pgv_lang["user_news_descr"]                = "Der «Benutzer Journal» Block ermöglicht dem Benutzer Notizen oder ein Journal online zu verwalten.";
$pgv_lang["my_journal"]                        = "Mein Journal";
$pgv_lang["no_journal"]                        = "Sie haben noch keine Einträge angelegt.";
$pgv_lang["confirm_journal_delete"]        = "Möchten Sie diesen Eintrag wirklich löschen?";
$pgv_lang["add_journal"]                = "Einen neuen Eintrag hinzufügen";
$pgv_lang["gedcom_news"]                = "Neuigkeiten";
$pgv_lang["confirm_news_delete"]        = "Möchten Sie diesen Eintrag wirklich löschen?";
$pgv_lang["add_news"]                        = "Einen Artikel unter Neuigkeiten eintragen";
$pgv_lang["no_news"]                        = "Es sind keine Neuigkeiten eingetragen.";
$pgv_lang["edit_news"]                        = "Einträge hinzufügen oder bearbeiten";
$pgv_lang["enter_title"]                = "Bitte geben Sie einen Titel ein.";
$pgv_lang["enter_text"]                        = "Bitte geben Sie Text für diesen Eintrag ein.";
$pgv_lang["news_saved"]                        = "Der Eintrag wurde erfolgreich gespeichert.";
$pgv_lang["article_text"]                = "Text:";
$pgv_lang["main_section"]                = "Blöcke im Hauptbereich";
$pgv_lang["right_section"]                = "Blöcke im rechten Bereich";
$pgv_lang["available_blocks"]		= "Verfügbare Blöcke";
$pgv_lang["move_up"]                        = "nach oben";
$pgv_lang["move_down"]                        = "nach unten";
$pgv_lang["move_right"]                        = "nach rechts";
$pgv_lang["move_left"]                        = "nach links";
$pgv_lang["add_main_block"]                = "Einen Block zum Hauptbereich hinzufügen...";
$pgv_lang["add_right_block"]                = "Einen Block zum rechten Bereich hinzufügen...";
$pgv_lang["broadcast_all"]                = "An alle Benutzer senden";
$pgv_lang["hit_count"]                        = "Besucher:";
$pgv_lang["phpgedview_message"]                = "PhpGedView Nachricht";
$pgv_lang["common_surnames"]                = "Häufigste Nachnamen";
$pgv_lang["default_news_title"]                = "Willkommen zur Ahnenforschung";
$pgv_lang["default_news_text"]                = "Die genealogischen Informationen dieser Webseite werden mit Hilfe von <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView #VERSION#</a> dargestellt.  Diese Seite gibt Ihnen einen Überblick und eine Einführung zu diesem Ahnenforschungs Projekt.<br /><br />Um mit den Daten zu arbeiten, wählen Sie z.B. ein Diagramm aus dem Diagramm Menü aus, öffnen Sie die Personen Liste oder suchen Sie nach einem Namen oder Ort.<br /><br />Wenn Sie bei der Nutzung dieser Seite auf Schwierigkeiten stoßen, können Sie auf das Hilfe Menü klicken, um nähere Informationen zur jeweiligen Seite zu bekommen.<br /><br />Viel Erfolg bei der Ahnenforschung!";
$pgv_lang["reset_default_blocks"]        = "Zurückstellen zur Block Standard-Auswahl";
$pgv_lang["recent_changes"]                = "Neueste Änderungen";
$pgv_lang["recent_changes_block"]        = "Neueste Änderungen";
$pgv_lang["recent_changes_descr"]        = "Der «Neueste Änderungen» Block listet alle Änderungen, die an der GEDCOM Datei in der letzten Zeit vorgenommen wurden. Dieser Block kann Ihnen helfen, diese jüngsten Veränderungen zu verfolgen. Die Änderungen werden automatisch anhand des «CHAN» tags erkannt.";
$pgv_lang["recent_changes_none"]	= "<b>Innerhalb der letzten #pgv_lang[global_num1]# Tage, gab es keine Änderungen.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>In den letzten #pgv_lang[global_num1]# Tagen durchgeführte Änderungen</b><br />";
$pgv_lang["show_empty_block"]		= "Soll der Block verborgen werden, wenn er leer ist?";
$pgv_lang["hide_block_warn"]		= "Wenn Sie einen leeren Block verbergen, können Sie seine Konfiguration erst dann wieder ändern, wenn er wieder sichtbar wird, weil er nicht mehr leer ist!";
$pgv_lang["delete_selected_messages"]        = "Gewählte Nachrichten löschen";
$pgv_lang["use_blocks_for_default"]		= "Diese Blöcke als Voreinstellung für alle Benutzer verwenden?";
$pgv_lang["block_not_configure"]	=	"Dieser Block kann nicht konfiguriert werden.";

//-- validate GEDCOM
$pgv_lang["performing_validation"]        = "GEDCOM Überprüfung wird durchgeführt, bitte wählen Sie die gewünschten Optionen und klicken Sie auf <b>Korrigieren</b>";
$pgv_lang["changed_mac"]                = "Macintosh Zeilenumbrüche entdeckt. Wagenrücklauf Zeichen CR (Ctrl M) wurden in Wagenrücklauf Zeichen CR (Ctrl M) mit zusätzlichem Zeilenvorschub LF (Ctrl J) geändert. Dadurch wurde das interne Dateiformat von Macintosh auf das für PhpGedView erforderliche DOS Format umgestellt.";
$pgv_lang["changed_places"]                = "Ungültige Orts Angaben entdeckt. Die Angaben wurden an die GEDCOM 5.5 Spezifikation angepasst. Ein Beispiel aus Ihrer GEDCOM Datei ist:";
$pgv_lang["invalid_dates"]                = "Ungültige Datums Formate entdeckt. Diese werden bei der Korrektur in das von GEDCOM 5.5 erforderliche Format DD MMM YYYY (z.B. 1 JAN 2004) geändert.";
$pgv_lang["valid_gedcom"]                = "Gültige GEDCOM Datei erkannt. Keine Korrektur notwendig.";
$pgv_lang["optional_tools"]                = "Sie können folgende optionale Tools vor dem Import anwenden.";
$pgv_lang["optional"]                        = "Optionale Tools";
$pgv_lang["day_before_month"]                = "Tag vor Monat (DD MM YYYY)";
$pgv_lang["month_before_day"]                = "Monat vor Tag (MM DD YYYY)";
$pgv_lang["do_not_change"]                = "Nicht ändern";
$pgv_lang["change_id"]                        = "Persönliche ID ändern in:";
$pgv_lang["example_place"]			= "Beispiel eines ungültigen Ortes Ihrer GEDCOM:";
$pgv_lang["example_date"]                = "Beispiel eines ungültigen Datums aus Ihrer GEDCOM Datei:";
$pgv_lang["add_media_tool"]                = "Multimedia-Hinzufügen Tool";
$pgv_lang["launch_media_tool"]                = "Klicken Sie hier, um das Multimedia-Hinzufügen Tool zu nutzen.";
$pgv_lang["add_media_descr"]                = "Dieses Tool fügt Multimedia OBJE tags zu Ihrer Datenbank hinzu. Schließen Sie dieses Fenster, wenn Sie keine weiteren Multimedia Objekte mehr hinzufügen möchten.";
$pgv_lang["highlighted"]                = "Hervorgehobenes Bild";
$pgv_lang["extension"]                        = "Dateinamen Anhang";
$pgv_lang["order"]                        = "Reihenfolge";
$pgv_lang["inject_media_tool"]		= "Multimedia Objekt zur GEDCOM Datei hinzufügen";
$pgv_lang["media_table_created"]        = "Die <i>media</i> Tabelle wurde erfolgreich aktualisiert.";
$pgv_lang["click_to_add_media"]                = "Klicken Sie hier, um die o.g. Multimedia Dateien zur GEDCOM Datei #GEDCOM# hinzuzufügen";
$pgv_lang["adds_completed"]                = "Multimedia Objekt wurde erfolgreich zur GEDCOM Datei hinzugefügt.";
$pgv_lang["ansi_encoding_detected"]        = "ANSI Codierung der Datei entdeckt. PhpGedView arbeitet nur optimal mit Dateien im UTF-8 Zeichensatz.";
$pgv_lang["invalid_header"]                = "In der Datei wurden Zeilen vor dem GEDCOM Header <b>0&nbsp;HEAD</b> entdeckt. Beim Korrigieren werden diese Zeilen gelöscht.";
$pgv_lang["macfile_detected"]        = "Macintosh Datei erkannt. Beim Korrigieren wird Ihre Datei ins DOS Format konvertiert.";
$pgv_lang["place_cleanup_detected"]        = "Ungültige Orts Angaben entdeckt. Diese Fehler sollten behoben werden. Beispiel einer ungültigen Ortsangabe:";
$pgv_lang["cleanup_places"]                = "Ortsangaben korrigieren";
$pgv_lang["empty_lines_detected"]        = "In der GEDCOM Datei wurden Leerzeilen entdeckt. Beim Korrigieren werden diese Zeilen entfernt.";
$pgv_lang["import_options"]		= "Import Optionen";
$pgv_lang["import_options_help"] 	= "Sie können zusätzliche Optionen zum Importieren der GEDCOM auswählen.";
$pgv_lang["verify_gedcom"]		= "GEDCOM prüfen";
$pgv_lang["verify_gedcom_help"]	= "Sie können hier entweder den Upload und Import der GEDCOM Datei fortführen oder diesen abbrechen.";
$pgv_lang["import_statistics"]	= "Import Statistiken";

//-- hourglass chart
$pgv_lang["hourglass_chart"]                = "Sanduhr-Diagramm";

//-- report engine
$pgv_lang["choose_report"]                = "Bericht wählen";
$pgv_lang["enter_report_values"]        = "Bericht Daten eingeben";
$pgv_lang["selected_report"]                = "Gewählter Bericht";
$pgv_lang["run_report"]                        = "Bericht erstellen";
$pgv_lang["select_report"]                = "Bericht wählen";
$pgv_lang["download_report"]                        = "Bericht herunterladen";
$pgv_lang["reports"]                        = "Berichte";
$pgv_lang["pdf_reports"]                = "Berichte im PDF Format";
$pgv_lang["html_reports"]                = "Berichte im HTML Format";
$pgv_lang["family_group_report"]        = "Familienbericht";
$pgv_lang["page"]                                = "Seite";
$pgv_lang["of"]                                        = "von";
$pgv_lang["enter_famid"]                = "Familien ID eingeben";
$pgv_lang["show_sources"]                = "Quellen anzeigen?";
$pgv_lang["show_notes"]                        = "Bemerkungen anzeigen?";
$pgv_lang["show_basic"]                        = "Grunddaten auch ausdrucken falls leer?";
$pgv_lang["show_photos"]				= "Fotos zeigen?";
$pgv_lang["relatives_report_ext"]	= "Ausführlicher Verwandtenbericht";
$pgv_lang["with"]					= "mit";
$pgv_lang["on"]						= "am";
$pgv_lang["in"]						= "im";
$pgv_lang["individual_report"]			= "Personenbericht";
$pgv_lang["enter_pid"]				= "Personen-ID eingeben";
$pgv_lang["individual_list_report"]		= "Personenliste Bericht";
$pgv_lang["generated_by"]				= "Erstellt mit";
$pgv_lang["list_children"]				= "Alle Kinder nach Geburtsdatum geordnet anzeigen.";
$pgv_lang["birth_report"]				= "Geburtsdaten u. -Orte Bericht";
$pgv_lang["birthplace"]					= "Geburtsort enthält";
$pgv_lang["birthdate1"]					= "Geburtsdatenbereich Anfang";
$pgv_lang["birthdate2"]					= "Geburtsdatenbereich Ende";
$pgv_lang["death_report"]			= "Sterbedaten u. -Orte Bericht";
$pgv_lang["deathplace"]				= "Sterbeort enthält";
$pgv_lang["deathdate1"]				= "Sterbedatenbereich Anfang";
$pgv_lang["deathdate2"]				= "Sterbedatenbereich Ende";
$pgv_lang["marr_report"]			= "Heiratsdaten u. -Orte Bericht";
$pgv_lang["marrplace"]				= "Heiratsort enthält";
$pgv_lang["marrdate2"]				= "Heiratsdatenbereich Ende";
$pgv_lang["marrdate1"]				= "Heiratsdatenbereich Anfang";
$pgv_lang["sort_by"]				= "Sortieren nach";

$pgv_lang["cleanup"]                        = "Korrigieren";
$pgv_lang["skip_cleanup"]			= "Korrigieren überspringen";

//-- CONFIGURE (extra) messgaes for programs patriarch, slklist and statistics
$pgv_lang["dynasty_list"]                = "Übersicht der Familien";
$pgv_lang["make_slklist"]                = "EXCEL (SLK) Liste erstellen";
$pgv_lang["excel_list"] 			= "Ausgabe im Excel (SLK) Format für die folgenden Dateien.  Sie müssen zuerst die Spitzenahnen Liste benutzen.";
$pgv_lang["excel_tab"]				= "Blatt:";


$pgv_lang["excel_create"]                = " wird erstellt in Datei:";
$pgv_lang["patriarch_list"]                = "Spitzenahnen Liste";
$pgv_lang["slk_list"]                        = "EXCEL SLK Liste";
$pgv_lang["statistics"]                        = "Statistiken";

//-- Merge Records
$pgv_lang["merge_records"]                = "Datensätze zusammenfügen";
$pgv_lang["merge_same"]                        = "Die Datensätze sind nicht vom gleichen Typ und können daher nicht zusammengefügt werden.";
$pgv_lang["merge_step1"]                = "Zusammenfügen: Schritt 1 von 3";
$pgv_lang["merge_step2"]                = "Zusammenfügen: Schritt 2 von 3";
$pgv_lang["merge_step3"]                = "Zusammenfügen: Schritt 3 von 3";
$pgv_lang["select_gedcom_records"]        = "Wählen Sie zwei GEDCOM Datensätze zum Zusammenfügen. Die Datensätze müssen vom gleichen Typ sein.";
$pgv_lang["merge_to"]                        = "Ausgang ID:";
$pgv_lang["merge_from"]                        = "Zusammenfügen mit ID:";
$pgv_lang["merge_facts_same"]        = "Die folgenden Fakten waren identisch in beiden Datensätzen und werden automatisch zusammengefügt.";
$pgv_lang["no_matches_found"]        = "Keine übereinstimmende Fakten gefunden";
$pgv_lang["unmatching_facts"]        = "Die folgenden Fakten stimmen nicht überein. Wählen Sie aus, welche Sie übernehmen möchten.";
$pgv_lang["record"]                                = "Datensatz";
$pgv_lang["adding"]                                = "Hinzufügen";
$pgv_lang["updating_linked"]        = "Aktualisiere verbundene Datensätze";
$pgv_lang["merge_more"]                        = "Weitere Datensätze zusammenfügen.";
$pgv_lang["same_ids"]                        = "Sie haben zweimal die selbe ID eingegeben. Das Zusammenfügen ist nicht möglich.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		        = "Ahnendiagramm";
$pgv_lang["gen_ancestry_chart"]         = "#PEDIGREE_GENERATIONS# Generationen Ahnendiagramm";
$pgv_lang["chart_style"]    	     	= "Diagramm Typ";
$pgv_lang["chart_list"]			= "Liste";
$pgv_lang["chart_booklet"]   	= "Broschüre";
$pgv_lang["ancestry_list"]     	    = "Vorfahren-Liste";
$pgv_lang["ancestry_booklet"]     	= "Vorfahren-Büchlein";
$pgv_lang["show_cousins"]			= "Cousins und Cousinen anzeigen";
// 1st generation
$pgv_lang["sosa_2"]               = "Vater";
$pgv_lang["sosa_3"]               = "Mutter";
// 2nd generation
$pgv_lang["sosa_4"]               = "Großvater";
$pgv_lang["sosa_5"]               = "Großmutter";
$pgv_lang["sosa_6"]               = "Großvater";
$pgv_lang["sosa_7"]               = "Großmutter";
// 3rd generation
$pgv_lang["sosa_8"]               = "Ur-Großvater";
$pgv_lang["sosa_9"]               = "Ur-Großmutter";
$pgv_lang["sosa_10"]               = "Ur-Großvater";
$pgv_lang["sosa_11"]               = "Ur-Großmutter";
$pgv_lang["sosa_12"]               = "Ur-Großvater";
$pgv_lang["sosa_13"]               = "Ur-Großmutter";
$pgv_lang["sosa_14"]               = "Ur-Großvater";
$pgv_lang["sosa_15"]               = "Ur-Großmutter";
// 4th generation
$pgv_lang["sosa_16"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_17"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_18"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_19"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_20"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_21"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_22"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_23"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_24"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_25"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_26"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_27"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_28"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_29"]               = "Ur-Ur-Großmutter";
$pgv_lang["sosa_30"]               = "Ur-Ur-Großvater";
$pgv_lang["sosa_31"]               = "Ur-Ur-Großmutter";
// 5th generation
$pgv_lang["sosa_32"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_33"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_34"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_35"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_36"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_37"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_38"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_39"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_40"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_41"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_42"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_43"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_44"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_45"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_46"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_47"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_48"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_49"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_50"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_51"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_52"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_53"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_54"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_55"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_56"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_57"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_58"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_59"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_60"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_61"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["sosa_62"]               = "Ur-Ur-Ur-Großvater";
$pgv_lang["sosa_63"]               = "Ur-Ur-Ur-Großmutter";
$pgv_lang["compact_chart"]			= "Kompaktes Diagramm";

//-- FAN CHART
$pgv_lang["fan_chart"]				= "Kreis Diagramm";
$pgv_lang["gen_fan_chart"]    = "#PEDIGREE_GENERATIONS# Generationen Kreis Diagramm";
$pgv_lang["fan_width"]				= "Breite";
$pgv_lang["gd_library"]       = "Falsche Konfiguration des PHP Servers: GD Bibliothek 2.x für Grafik Funktionen nicht vorhanden.";
$pgv_lang["gd_freetype"]			= "Falsche Konfiguration des PHP-Servers: FreeType Bibliothek für TrueType Schriftarten nicht vorhanden.";
$pgv_lang["gd_helplink"]			= "http://de3.php.net/gd";
$pgv_lang["fontfile_error"]   = "Schriftart Datei auf PHP Server nicht vorhanden";
$pgv_lang["fanchart_IE"]			= "Dieses Kreis Diagramm kann von Ihrem Browser nicht direkt angezeigt werden. Bitte speichern Sie das Bild mit dem Kontextmenü (rechter Mausklick) und drucken Sie die Datei anschließend.";

//-- RSS Feed
$pgv_lang["rss_descr"]		= "Neuigkeiten und Links von der Seite #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]	= "erstellt mit PhpGedView";
$pgv_lang["rss_feeds"]				= "RSS Versorgungen";
$pgv_lang["no_feed_title"]			= "RSS Versorgung nicht erstellbar";
$pgv_lang["no_feed"]				= "RSS Versorgungen sind von dieser PhpGedView Seite nicht unterstützt.";
$pgv_lang["feed_login"]				= "Wenn Sie einen Nutzernamen für diese PhpGedView Seite besitzen, können Sie mit einfacher HTTP Verifizierung <a href=\"#AUTH_URL#\">einloggen</a>, um private Informationen zu sehen.";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] = "Begleiter";
$pgv_lang["attending"] = "begleitend";
$pgv_lang["best_man"] = "Bester Freund";
$pgv_lang["bridesmaid"] = "Brautjungfer";
$pgv_lang["buyer"] = "Käufer";
$pgv_lang["circumciser"] = "Beschneider";
$pgv_lang["civil_registrar"] = "Standesbeamter";
$pgv_lang["friend"] = "Freund";
$pgv_lang["godfather"] = "Taufpate";
$pgv_lang["godmother"] = "Taufpatin";
$pgv_lang["godparent"] = "Taufpaten";
$pgv_lang["informant"] = "Informant";
$pgv_lang["lodger"] = "Mitbewohner";
$pgv_lang["nurse"] = "Kindermädchen";
$pgv_lang["priest"] = "Pfarrer";
$pgv_lang["rabbi"] = "Rabbiner";
$pgv_lang["registry_officer"] = "Standesbeamter";
$pgv_lang["seller"] = "Verkäufer";
$pgv_lang["servant"] = "Diener";
$pgv_lang["twin"] = "Zwilling";
$pgv_lang["twin_brother"] = "Zwillingsbruder";
$pgv_lang["twin_sister"] = "Zwillingsschwester";
$pgv_lang["witness"] = "Zeuge";

//-- statistics utility
$pgv_lang["statutci"]                    = "Index kann nicht erstellt werden";
$pgv_lang["statnnames"]                = "Anzahl der Namen =";
$pgv_lang["statnfam"]                  = "Anzahl der Familien =";
$pgv_lang["statnmale"]                 = "Anzahl männliche Personen =";
$pgv_lang["statnfemale"]               = "Anzahl weibliche Personen =";
$pgv_lang["statvars"]                     = "Geben Sie bitte die folgenden Variablen zum Zeichnen ein";
$pgv_lang["statlxa"]                      = "entlang der X-Achse:";
$pgv_lang["statlya"]                      = "entlang der Y-Achse:";
$pgv_lang["statlza"]                      = "entlang der Z-Achse:";
$pgv_lang["stat_10_none"]		 = "keiner";
$pgv_lang["stat_11_mb"]                       = "Geburtsmonat";
$pgv_lang["stat_12_md"]                       = "Sterbemonat";
$pgv_lang["stat_13_mm"]                       = "Hochzeitsmonat";
$pgv_lang["stat_14_mb1"]		= "Geburtsmonat des ersten Kindes";
$pgv_lang["stat_15_mm1"]		= "Monat der ersten Hochzeit";
$pgv_lang["stat_16_mmb"]		= "Monate zwischen Hochzeit und Geburt des ersten Kindes.";
$pgv_lang["stat_17_arb"]			 = "Alter bezogen auf das Geburtsjahr.";
$pgv_lang["stat_18_ard"]			 = "Alter bezogen auf das Sterbejahr.";
$pgv_lang["stat_19_arm"]			 = "Alter im Jahr der Hochzeit.";
$pgv_lang["stat_20_arm1"]			 = "Alter im Jahr der ersten Hochzeit.";
$pgv_lang["stat_21_nok"]			 = "Anzahl der Kinder.";
$pgv_lang["stat_gmx"]			= " Bitte Bereichsgrenzen für Monat angeben";
$pgv_lang["stat_gax"]			= " Bitte Bereichsgrenzen für das Alter angeben";
$pgv_lang["stat_gnx"]			= " Bitte Bereichsgrenzen für Anzahl angeben";
$pgv_lang["stat_200_none"]			 = "alle (bzw. keine)";
$pgv_lang["stat_201_num"]			 = "Anzahl";
$pgv_lang["stat_202_perc"]			 = "Prozentzahlen";
$pgv_lang["stat_300_none"]		= "keiner";
$pgv_lang["stat_301_mf"]			 = "männlich/weiblich";
$pgv_lang["stat_302_cgp"]			 = "Zeiträume (Bitte Bereichsgrenzen für Zeiträume angeben)";
$pgv_lang["statmess1"]			 = "<b>Hier nur die Werte angeben, die sich gegebenenfalls auf die X-Achse oder die Z-Achse beziehen</b>";
$pgv_lang["statar_xgp"]                     = "Bereichsgrenzen für Zeiträume (X-Achse):";
$pgv_lang["statar_xgl"]			 = "Bereichsgrenzen für Alter (X-Achse):";
$pgv_lang["statar_xgm"]			 = "Bereichsgrenzen für Monate (x-Achse).";
$pgv_lang["statar_xga"]			 = "Bereichsgrenzen für Anzahl (X-Achse):";
$pgv_lang["statar_zgp"]                     = "Bereichsgrenzen für Zeiträume (Z-Achse):";
$pgv_lang["statreset"]			 = "Zurücksetzen";
$pgv_lang["statsubmit"]			 = "Grafik anzeigen";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistik-Zeichnung";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplGDno"]			 = "Die «Graphics Display Library» ist in PHP4 nicht verfügbar. Bitte wenden Sie sich an Ihren System Verwalter.";
$pgv_lang["stpljpgraphno"]		= "Die «JPgraph» Module befinden sich nicht im Verzeichnis <i>phpgedview/jpgraph/</i>. Bitte laden Sie diese von http://www.aditus.nu/jpgraph/jpdownload.php herunter<br /> <h3>Danach müssen Sie die heruntergeladenen JPgraph Module ins Verzeichnis <i>phpgedview/jpgraph/</i> kopieren</h3>.<br />";
$pgv_lang["stplinfo"]			 = "Zeichnungs Informationen:";
$pgv_lang["stpltype"]			 = "Typ:";
$pgv_lang["stplnoim"]			 = "nicht verfügbar:";
$pgv_lang["stplnumof"]			= "Anzahl der Messwerte ";
$pgv_lang["stplborns"]                   = "Geburten";
$pgv_lang["stpldeath"]                   = "Todesfälle";
$pgv_lang["stplmarr"]                    = "Hochzeiten";
$pgv_lang["stplpmonth"]			= " je Monat.n";
$pgv_lang["stplagerel"]			= "Alter bezogen auf ";
$pgv_lang["stplyob"]                      = "Geburtsjahr";
$pgv_lang["stplyod"]			 = "Sterbejahr";
$pgv_lang["stplaomd"]			 = "Alter zum Zeitpunkt der Hochzeit:n";
$pgv_lang["stplcpm"]			 = "Kinder pro Hochzeit";
$pgv_lang["stplmf"]			 = " / männlich-weiblich";
$pgv_lang["stplipot"]                     = " / pro Zeitraum";
$pgv_lang["stplgzas"]			 = "Bereiche Z-Achse:";
$pgv_lang["stplmonth"]                    = "Monat";
$pgv_lang["stplnumbers"]		= "Anzahl für eine Familie";
$pgv_lang["stplage"]			 = "Alter";
$pgv_lang["stplperc"]			 = "Prozentzahl";
$pgv_lang["stplmarrbirth"]		 = "Monate zwischen Heirat und Geburt des ersten Kindes";

//-- alive in year
$pgv_lang["alive_in_year"]			= "Lebend im Jahr";
$pgv_lang["is_alive_in"]			= "Lebte noch in #YEAR#";
$pgv_lang["alive"]					= "Lebt";
$pgv_lang["dead"]					= "Verstorben";
$pgv_lang["maybe"]					= "Möglicherweise ";

//-- find media
$pgv_lang["add_directory"]			= "Verzeichnis hinzufügen";
$pgv_lang["show_thumbnail"]			= "Miniaturansichten anzeigen";
$pgv_lang["image_format"]			= "Bildformat";
$pgv_lang["media_format"]			= "Medienformat";
$pgv_lang["image_size"]				= "Bildgröße";
$pgv_lang["media_file_size"]		= "Mediengröße";
$pgv_lang["no_thumb_dir"]			= "Das Miniaturansicht Verzeichnis existiert nicht und konnte auch nicht erstellt werden.";
$pgv_lang["manage_media"]			= "Multimedia-Objekte verwalten";
$pgv_lang["gen_thumb"]				= "Miniaturansicht erzeugen";
$pgv_lang["move_to"]				= "Verschieben nach";
$pgv_lang["folder_created"]			= "Verzeichnis erstellt";
$pgv_lang["folder_no_create"]		= "Verzeichnis konnte nicht erstellt werden";
$pgv_lang["security_no_create"]		= "Sicherheits-Hinweis: Die Datei <b><i>index.php</i></b> konnte nicht erstellt werden im Verzeichnis ";
$pgv_lang["security_not_exist"]		= "Sicherheits-Hinweis: Die Datei <b><i>index.php</i></b> existiert nicht im Verzeichnis ";
$pgv_lang["illegal_chars"]			= "Leerer Name oder unzulässige Zeichen im Namen";

//-- link media
$pgv_lang["link_media"]			= "Multimedia-Objekt verbinden";
$pgv_lang["to_person"]			= "mit Person";
$pgv_lang["to_family"]			= "mit Familie";
$pgv_lang["to_source"]			= "mit Quelle";
$pgv_lang["media_id"]			= "Multimedia-ID";
$pgv_lang["invalid_id"]			= "Diese ID existiert nicht in der GEDCOM Datei.";
$pgv_lang["media_exists"]			= "Medien Datei existiert bereits.";
$pgv_lang["media_thumb_exists"]		= "Miniaturansichts-Datei existiert bereits.";
$pgv_lang["move_file_success"]		= "Medien- und Miniaturansichtsdateien erfolgreich entfernt.";
$pgv_lang["media_folder_corrupt"]	= "Das Medien Verzeichnis ist defekt.";
$pgv_lang["max_media_depth"]		= "Sie können nur zur Verzeichnistiefe #MEDIA_DIRECTORY_LEVELS# gehen";

//-- Help system
$pgv_lang["definitions"]			= "Definitionen";

//-- Index_edit
$pgv_lang["description"]			= "Beschreibung";
$pgv_lang["block_desc"]				= "Block Beschreibungen";
$pgv_lang["click_here"]				= "Weiter";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Klicken Sie diesen Button, um die zuvor gespeicherten Änderungen zu verwenden.<br /><br />Sie werden zu der #pgv_lang[welcome]# oder #pgv_lang[mygedview]# Seite zurückgenommen, aber es kann sein, dass Ihre Änderungen nicht angezeigt werden. Sie können dann die «Seite Erneuern» Funktion Ihres Browsers benutzen um Ihre Änderungen richtig zu sehen.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Hier finden Sie eine kurze Beschreibung aller Blöcke, die Sie auf die #pgv_lang[welcome]# oder #pgv_lang[mygedview]# Seite stellen können.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
$pgv_lang["block_summary_table"]	= "&nbsp;";
$pgv_lang["total_places"]			= "Gefundene Orte";
$pgv_lang["media_contains"]			= "Inhalt der Medien:";
$pgv_lang["repo_contains"]			= "Inhalt des Archivs:";
$pgv_lang["source_contains"]		= "Inhalt der Quelle:";
$pgv_lang["display_all"]			= "Alles anzeigen";
$pgv_lang["accesskeys"]				= "Schnelltaste";
$pgv_lang["accesskey_skip_to_content"]	= "C";
$pgv_lang["accesskey_search"]	= "S";
$pgv_lang["accesskey_skip_to_content_desc"]	= "Weiter zum nächsten Inhalt";
$pgv_lang["accesskey_viewing_advice"]	= "0";
$pgv_lang["accesskey_viewing_advice_desc"]	= "Ratschlag zun Ansehen";
$pgv_lang["accesskey_home_page"]	= "1";
$pgv_lang["accesskey_help_content"]	= "2";
$pgv_lang["accesskey_help_current_page"]	= "3";
$pgv_lang["accesskey_contact"]	= "4";
$pgv_lang["accesskey_individual_details"]	= "I";
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
$pgv_lang["accesskey_family_parents_timeline"]	= "P";
$pgv_lang["accesskey_family_children_timeline"]	= "D";
$pgv_lang["accesskey_family_timeline"]	= "T";
$pgv_lang["accesskey_family_gedcom"]	= "G";
$pgv_lang["add_faq_header"] = "FAQ Überschrift";
$pgv_lang["add_faq_body"] = "FAQ Hauptteil";
$pgv_lang["add_faq_order"] = "FAQ Anordnung";
$pgv_lang["no_faq_items"] = "Die FAQ Liste ist leer.";
$pgv_lang["position_item"] = "Eintrag ordnen";
$pgv_lang["faq_list"] = "FAQ Liste";
$pgv_lang["confirm_faq_delete"] = "Möchten Sie wirklich diesen Eintrag löschen?";
$pgv_lang["preview"] =  "Vorschau";
$pgv_lang["no_id"] = "Es wurde keine bestimmte FAQ ID erwähnt!";
$pgv_lang["hs_title"] 			= "Suche Hilfe Text";
$pgv_lang["hs_search"] 			= "Suche";
$pgv_lang["hs_close"] 			= "Schließe Fenster";
$pgv_lang["hs_results"] 		= "Ergebnis gefunden:";
$pgv_lang["hs_keyword"] 		= "Suche aus";
$pgv_lang["hs_searchin"]		= "Suche in";
$pgv_lang["hs_searchuser"]		= "Hilfe für Benutzer";
$pgv_lang["hs_searchconfig"]	= "Hilfe für Verwalter";
$pgv_lang["hs_searchhow"]		= "Suchen Typ";
$pgv_lang["hs_searchall"]		= "Alle Wörter";
$pgv_lang["hs_searchany"]		= "Irgendein Wort";
$pgv_lang["hs_searchsentence"]	= "Genauer Ausdruck";
$pgv_lang["hs_intruehelp"]		= "Nur Hilfstexte";
$pgv_lang["hs_inallhelp"]		= "Alle Texte";
$pgv_lang["media_import"] = "Medien importieren und konvertieren";
$pgv_lang["confirm_folder_delete"] = "Möchten Sie wirklich dieses Verzeichnis löschen?";
$pgv_lang["choose"] = "Wählen:";
$pgv_lang["account_information"] = "Benutzer Informationen";
$pgv_lang["TYPE__video"] = "Video";
$pgv_lang["TYPE__tombstone"] = "Grabstein";
$pgv_lang["TYPE__photo"] = "Foto";
$pgv_lang["TYPE__newspaper"] = "Zeitung";
$pgv_lang["TYPE__map"] = "Landkarte";
$pgv_lang["TYPE__manuscript"] = "Manuskript";
$pgv_lang["TYPE__magazine"] = "Zeitschrift";
$pgv_lang["TYPE__film"] = "Mikrofilm";
$pgv_lang["TYPE__fiche"] = "Mikrofiche";
$pgv_lang["TYPE__electronic"] = "Elektronisch";
$pgv_lang["TYPE__card"] = "Karte";
$pgv_lang["TYPE__book"] = "Buch";
$pgv_lang["TYPE__audio"] = "Ton";
$pgv_lang["TYPE__certificate"] = "Urkunde";
$pgv_lang["TYPE__document"] = "Dokument";

$pgv_lang["familybook_chart"]		= "Familienbuch Diagramm";
$pgv_lang["family_of"]				= "Familie von:&nbsp;";
$pgv_lang["descent_steps"]			= "Nachfahren Stufen";
$pgv_lang["user_auto_accept"]		= "Alle Änderungen dieses Benutzers automatisch annehmen";
$pgv_lang["cancel"]					= "Abbrechen";
$pgv_lang["change_family_members"]	= "Familienmitglieder ändern";
$pgv_lang["delete_family_confirm"]	= "Das Löschen der Familie wird jede Verbindung von allen anderen lösen. Alle ehemalige Familienmitglieder bleiben als freistehende Personen ohne Familienverbund. Möchten Sie wirklich diese Familie löschen?";
$pgv_lang["delete_family"]			= "Familie löschen";
$pgv_lang["add_favorite"]			= "Neues Lesezeichen hinzufügen";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Gebe eine zusätzliche Bemerkung zu dem Lesezeichen ein";
$pgv_lang["add_fav_or_enter_url"]	= "Oder<br />eine Adresse und eine Überschrift eingeben";
$pgv_lang["add_fav_enter_id"]		= "Personen, Familien oder Quellen Id eingeben";
$pgv_lang["import_time_exceeded"]	= "Die maximale Ausführungszeit wurde erreicht. Drücken Sie unten den <b>Fortsetzen</b> Button zur Wiederaufnahme der Einfuhr der GEDCOM Datei.";
$pgv_lang["next_email_sent"]		= "Danach wird eine Mail als Erinnerung gesendet";
$pgv_lang["last_email_sent"]		= "Das letzte Mail als Erinnerung wurde gesendet";
$pgv_lang["confirm_remove"]			= "Möchten Sie wirklich diese Person aus dieser Familie entfernen?";
$pgv_lang["remove_child"]			= "Dieses Kind aus der Familie entfernen";
$pgv_lang["link_new_husb"]			= "Eine existierende Person als Ehemann hinzufügen";
$pgv_lang["link_new_wife"]			= "Eine existierende Person als Ehefrau hinzufügen";
$pgv_lang["cookie_help"]			= "Diese Seite benutzt Cookies zum Verfolgen ihres login Status. <br /><br />Cookies scheinen in Ihrem Browser nicht erlaubt zu sein. Zum Anmelden bei dieser Seite müssen Sie diese Option einschalten. Zum Einschalten der Cookies können Sie die Dokumentation in Ihrem Browser benutzen.";
$pgv_lang["address_labels"]			= "Adress-Etiketten";
$pgv_lang["filter_address"]			= "Adressen mit folgendem Enthalt anzeigen:";
$pgv_lang["address_list"]			= "Adressen Liste";
$pgv_lang["autocomplete"]			= "Automatisch eingeben";
$pgv_lang["basic_search"]			= "Suche";
$pgv_lang["advanced_search"]		= "Verbesserte Internetseiten-Suche";
$pgv_lang["name_search"]			= "Name:";
$pgv_lang["birthdate_search"]		= "Geburtsdatum:";
$pgv_lang["birthplace_search"]		= "Geburtsort:";
$pgv_lang["deathdate_search"]		= "Sterbedatum:";
$pgv_lang["deathplace_search"]		= "Sterbeort:";
$pgv_lang["gender_search"]			= "Geschlecht:";
$pgv_lang["site_list"]				= "Internetseite:";
$pgv_lang["site_had"]				= "enthält das folgende";
$pgv_lang["invalid_search_multisite_input"] = "Bitte geben Sie eins der folgenden ein: Name, Geburtsdatum, Geburtsort, Sterbedatum, Sterbeort, oder Geschlecht";
$pgv_lang["invalid_search_multisite_input_gender"] = "Bitte nochmals suchen, aber mit mehr Informationen als nur das Geschlecht";
$pgv_lang["label_ban_server"] = "Einreichen";
$pgv_lang["label_add_search_server"]	= "IP hinzufügen";
$pgv_lang["remove_ip"] 			= "IP entfernen";
$pgv_lang["label_remove_ip"]		= "IP Adressen (z.B. 198.128.*.*) abzuweisen:";
$pgv_lang["label_remove_search"]	= "Markiere IP Adresse für Internet Suchmaschine";
$pgv_lang["label_username_id"]		= "Benutzername";
$pgv_lang["label_username_id2"]		= "Benutzername:";
$pgv_lang["label_password_id"]		= "Passwort";
$pgv_lang["label_password_id2"]		= "Passwort:";
$pgv_lang["error_ban_server"]       = "Ungültige IP Adresse.";
$pgv_lang["error_view_connections"] = "Sie müssen eine Internetseite, die Sie sehen möchten, wählen.";
$pgv_lang["error_delete_server"]    = "Sie müssen die Internetseite, die Sie löschen möchten, wählen.";
$pgv_lang["title_manage_servers"]   = "Internetseiten verwalten";
$pgv_lang["label_banned_servers"]   = "Internetseiten entsprechend deren Adressen abweisen";
$pgv_lang["label_manual_search_engines"]   = "Manuelles Markieren der IP für Suchmaschinen";
$pgv_lang["label_search_engine_detected"]  = "Suchmaschine erkennen";
$pgv_lang["label_search_engine_spider"]    = "Suchmaschine";
$pgv_lang["label_ban_view_links"]   = "Verbindungen zu dieser abgewiesenen Internetseite anzeigen";
$pgv_lang["label_delete"]           = "Löschen";
$pgv_lang["label_new_server"]       = "Neue Internetseite hinzufügen";
$pgv_lang["label_server_url"]       = "URL oder IP Adresse der Internetseite";
$pgv_lang["label_add_server"]       = "Hinzufügen";
$pgv_lang["label_added_servers"]	= "Ferne Server hinzugefügt";
$pgv_lang["error_url"]              = "Internetseiten müssen eine URL oder IP Adresse haben.";
$pgv_lang["error_exists_server"]    = "Diese Internetseite existiert bereits.";
$pgv_lang["error_view_info"]        = "Sie müssen die Person wählen, dessen Informationen Sie sehen möchten.";
$pgv_lang["error_delete_person"]    = "Sie müssen die Person wählen, dessen ferne Verbindung Sie löschen möchten.";
$pgv_lang["title_view_conns"]       = "Verbindungen anzeigen";
$pgv_lang["label_server_info"]      = "Alle Personen die durch diese Internetseite verbunden sind:";
$pgv_lang["label_view_local"]       = "Hiesige Informationen dieser Person anzeigen";
$pgv_lang["label_view_remote"]      = "Ferne Informationen dieser Person anzeigen";
$pgv_lang["label_individuals"]      = "Personen";
$pgv_lang["label_families"]         = "Familien";
$pgv_lang["ex-spouse"] = "Ex-Ehegatte";
$pgv_lang["ex-wife"] = "Ex-Ehefrau";
$pgv_lang["ex-husband"] = "Ex-Ehemann";
$pgv_lang["noemail"] 				= "Adressen ohne Mails";
$pgv_lang["onlyemail"] 				= "Nur Adressen mit Mails";
$pgv_lang["maxviews_exceeded"]		= "Seitenansichtstempo zu hoch, bitte versuchen Sie es später erneut.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Nachrichten an Benutzer senden, die sich innerhalb der letzten 6 Monate nicht angemeldet haben";
$pgv_lang["broadcast_never_logged_in"]	= "Nachrichten an Benutzer senden, die sich noch nie angemeldet haben.";
$pgv_lang["stats_to_show"]			= "Bitte wählen Sie Statistiken für diesen Block, die Sie sehen möchten";
$pgv_lang["stat_avg_age_at_death"]	= "Durchschnittsalter beim Tod";
$pgv_lang["stat_longest_life"]		= "Person, die am längsten lebte";
$pgv_lang["stat_most_children"]		= "Familie mit den meisten Kindern";
$pgv_lang["stat_average_children"]	= "Durchschnittsanzahl von Kindern pro Familie";
$pgv_lang["stat_events"]			= "Anzahl Ereignisse";
$pgv_lang["stat_surnames"]			= "Anzahl Nachnamen";
$pgv_lang["stat_users"]				= "Anzahl Benutzer";
$pgv_lang["no_family_facts"]		= "Keine Ereignisse für diese Familie.";

$pgv_lang["sunday_1st"]				= "So";
$pgv_lang["monday_1st"]				= "Mo";
$pgv_lang["tuesday_1st"]			= "Di";
$pgv_lang["wednesday_1st"]			= "Mi";
$pgv_lang["thursday_1st"]			= "Do";
$pgv_lang["friday_1st"]				= "Fr";
$pgv_lang["saturday_1st"]			= "Sa";

$pgv_lang["january_1st"]			= "Jan";
$pgv_lang["february_1st"]			= "Feb";
$pgv_lang["march_1st"]				= "März";
$pgv_lang["april_1st"]				= "April";
$pgv_lang["may_1st"]				= "Mai";
$pgv_lang["june_1st"]				= "Juni";
$pgv_lang["july_1st"]				= "Juli";
$pgv_lang["august_1st"]				= "Aug";
$pgv_lang["september_1st"]			= "Sep";
$pgv_lang["october_1st"]			= "Okt";
$pgv_lang["november_1st"]			= "Nov";
$pgv_lang["december_1st"]			= "Dez";

$pgv_lang["edit_source"]			= "Quelle bearbeiten";
$pgv_lang["source_menu"]			= "Quellenoptionen";
$pgv_lang["link_manage_servers"]    = "Internetseiten verwalten";
$pgv_lang["indi_is_remote"]			= "Die Informationen dieser Person stammen von einer fremden Seite.";
$pgv_lang["link_remote"]            = "Mit anderer Person verbinden";
$pgv_lang["current_person"]         = "genau wie aktuelle Person";
$pgv_lang["title_remote_link"]      = "Ferne Verbindung hinzufügen";
$pgv_lang["title_search_link"]      = "Lokale Verbindung hinzufügen";
$pgv_lang["label_same_server"]      = "Gleiche Internetseite";
$pgv_lang["label_diff_server"]      = "Andere Internetseite";
$pgv_lang["label_accept_changes"]   = "Alle Änderungen übernehmen";
$pgv_lang["label_ask_first"]        = "Mich zuerst fragen";
$pgv_lang["label_rel_to_current"]   = "Beziehung zur aktuellen Person";
$pgv_lang["label_location"]         = "Lage";
$pgv_lang["label_site"]             = "Internetseite";
$pgv_lang["label_site_url"]         = "Internetseiten-Adresse:";
$pgv_lang["label_site_url2"]        = "Internetseiten-Adresse";
$pgv_lang["label_remote_id"]        = "ID dieser Person auf der fernen Seite";
$pgv_lang["label_local_id"]         = "Personen ID";
$pgv_lang["label_merge_options"]    = "Zusammenfügungsoptionen";
$pgv_lang["label_gedcom_id"]        = "GEDCOM ID";
$pgv_lang["label_gedcom_id2"]       = "GEDCOM ID:";
$pgv_lang["label_add_remote_link"]  = "Ferne Verbindung hinzufügen";
$pgv_lang["error_remote"]           = "Sie haben eine ferne Seite gewählt.";
$pgv_lang["error_same"]             = "Sie haben die gleiche Seite gewählt.";
$pgv_lang["error_server_exists"]    = "Die Internetseite die Sie einfügen möchten, existiert bereits; bitte wählen Sie diese in der Rubrik «Existierende Seite benutzen».";
$pgv_lang["lbl_server_list"]        = "Existierende Seite benutzen.";
$pgv_lang["lbl_type_server"]        = "Geben Sie eine neue Seite ein.";
$pgv_lang["link_success"]			= "Link erfolgreich hinzugefügt";
$pgv_lang["change"]					= "Ändern";
$pgv_lang["change_family_instr"]	= "Benutze diese Seite zum Ändern oder Entfernen von Familienmitgliedern.<br /><br />Für jedes Familienmitglied können Sie den <b>Ändern</b> Button klicken, um eine andere Person für diese Rolle in der Familie zu wählen.<br /><br />Um Ihre Änderungen zu speichern, klicken Sie den <b>Speichern</b> Button.<br />";
$pgv_lang["error_url_blank"]		= "Bitte lassen Sie nicht den Titel oder die Adresse der Internetseite leer.";
$pgv_lang["error_siteauth_failed"]	= "Zugriff von der fernen Seite nicht angenommen";
$pgv_lang["other_searches"]			= "Andere Suchen";
$pgv_lang["multi_site_search"] 		= "Mehrere Internetseiten suchen";
$pgv_lang["search_sites"] 			= "Bei diesen Internetseiten suchen";
$pgv_lang["search_sites_discription"] = "Bei bekannten Internetseiten suchen";
$pgv_lang["search_asso_text_unavailable"] = "Beziehungen<br />können noch nicht über<br />das Internet gesucht werden";
$pgv_lang["no_known_servers"]		= "Keine bekannten Server<br />Nichts wird gefunden";
$pgv_lang["basic_search_discription"] = "Einfache Internetseiten-Suche";
$pgv_lang["advanced_search_discription"] = "Verbesserte Internetseiten-Suche";
$pgv_lang["no_search_for"]			= "Vergessen Sie nicht, eine Suchwahl zu machen.";
$pgv_lang["no_search_site"]			= "Vergessen Sie nicht, mindestens eine Internetseite zu wählen.";
$pgv_lang["edit_media"]					= "Multimedia bearbeiten";
$pgv_lang["wiki_main_page"]				= "Wiki Hauptseite";
$pgv_lang["wiki_users_guide"]			= "Wiki Handbuch für Benutzer";
$pgv_lang["wiki_admin_guide"]			= "Wiki Handbuch für Verwalter";
$pgv_lang["result_page"]				= "Seite";
$pgv_lang["record_marked_deleted"]		= "Dieser Datensatz wird gelöscht, nachdem der Verwalter es genehmigt hat.";
$pgv_lang["record_not_found"]			= "Der gewünschte GEDCOM Datensatz wurde nicht gefunden.  Der Grund dafür könnte eine ungültige Personen-Verbindung oder eine beschädigte GEDCOM-Datei sein.";
$pgv_lang["page_size"]					= "Format";
$pgv_lang["link_to_existing_media"]		= "Mit einem bereits bestehenden Medien-Objekt verbinden";
$pgv_lang["add_media_file"]				= "Bereits bestehende Medien-Datei";
$pgv_lang["descend_report"]				= "Nachfahren Bericht";
$pgv_lang["descendancy_header"]		= "Nachfahren Bericht von ";
$pgv_lang["add_media_other_folder"]		= "Anderes Verzeichnis ... bitte eingeben";
$pgv_lang["auto_thumbnail"]				= "Automatische Miniaturansicht";
$pgv_lang["upload_replacement"]		="Ersatzdatei hochladen";
?>
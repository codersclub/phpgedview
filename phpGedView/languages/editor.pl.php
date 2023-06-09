<?php
/**
 * Polish texts
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
 * @author Łukasz Wileński <wooc@users.sourceforge.net>
 * @author Tomasz Babczyński <tomasz.babczynski@gmail.com>
 * @translations by Google Translate (verified by natives)
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]							= "Dodaj szczegóły małżeństwa";
$pgv_lang["edit_concurrency_change"]				= "Ten wpis został ostatnio zmieniony przez <i>#CHANGEUSER#</i> #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]					= "Wpis z identyfikatorem #PID# został zmieniony przez innego użytkownika podczas Twojego dostępu.";
$pgv_lang["edit_concurrency_msg1"]					= "Wystąpił błąd podczas edytowania. Inny użytkownik w tym czasie mógł dokonać zmian w tym wpisie.";
$pgv_lang["edit_concurrency_reload"]				= "Odśwież poprzednią stronę, aby mieć pewność, że pracujesz z najbardziej aktualnym wpisem.";
$pgv_lang["no_update_CHAN"]							= "Nie aktualizuj wpisu CHAN (ostatnia zmiana)";
$pgv_lang["select_events"]							= "Wybierz wydarzenia";
$pgv_lang["source_events"]							= "Przypisz wydarzenia do tego źródła";
$pgv_lang["advanced_name_fields"]					= "Dodatkowe imiona (przezwisko, po ślubie, itp.)";
$pgv_lang["accept_changes"]				= "Zatwierdź / odrzuć zmiany";
$pgv_lang["replace"]					= "Zastąp wpis";
$pgv_lang["append"]						= "Dołącz wpis";
$pgv_lang["review_changes"]				= "Przejrzyj zmiany w pliku GEDCOM";
$pgv_lang["remove_object"]				= "Usuń obiekt";
$pgv_lang["remove_links"]				= "Usuń odnośniki";
$pgv_lang["show_thumbnail"]				= "Pokaż miniaturki";
$pgv_lang["link_media"]					= "Powiąż obiekt multimedialny";
$pgv_lang["to_person"]					= "z osobą";
$pgv_lang["to_family"]					= "z rodziną";
$pgv_lang["to_source"]					= "ze źródłem";
$pgv_lang["to_note"]					= "z notatką";
$pgv_lang["to_repository"]				= "z repozytorium";
$pgv_lang["edit_fam"]					= "Edytuj rodzinę";
$pgv_lang["edit_repo"]								= "Edytuj repozytorium";
$pgv_lang["copy"]						= "Kopiuj";
$pgv_lang["cut"]						= "Wytnij";
$pgv_lang["sort_by_birth"]				= "Sortuj według daty urodzenia";
$pgv_lang["reorder_children"]			= "Uporządkuj dzieci";
$pgv_lang["reorder_media"]				= "Uporządkuj multimedia";
$pgv_lang["reorder_media_title"]		= "Przeciągnij i upuść miniaturkę w odpowiednim miejscu aby uporządkować multimedia";
$pgv_lang["reorder_media_window"]		= "Uporządkuj multimedia (nowe okno)";
$pgv_lang["reorder_media_window_title"]	= "Kliknij ramkę, a następnie \"Przeciągnij i upuść\", aby uporządkować multimedia";
$pgv_lang["reorder_media_save"]			= "Zapisuje posortowane multimedia w bazie";
$pgv_lang["reorder_media_reset"]		= "Ustawia domyślną kolejność multimediów w bazie";
$pgv_lang["reorder_media_cancel"]		= "Zamknij i powróć do osoby";
$pgv_lang["add_from_clipboard"]			= "Dodaj ze schowka";
$pgv_lang["record_copied"]				= "Wpis skopiowany do schowka";
$pgv_lang["add_unlinked_person"]		= "Dodaj niepowiązaną osobę";
$pgv_lang["add_unlinked_source"]		= "Dodaj niepowiązane źródło";
$pgv_lang["add_unlinked_note"]			= "Dodaj niepowiązaną notatkę";
$pgv_lang["add_unlinked"]				= "Niepowiązane wpisy";
$pgv_lang["server_file"]				= "Nazwa pliku na serwerze";
$pgv_lang["server_file_advice"]			= "Nie zmieniaj, aby zachować oryginalną nazwę pliku.";
$pgv_lang["server_file_advice2"]		= "Możesz podać URL, zaczynając od &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Możesz podać do #GLOBALS[MEDIA_DIRECTORY_LEVELS]# katalogów po katalogu domyślnym &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Nie wprowadzaj tej części nazwy katalogu docelowego: &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.";
$pgv_lang["server_folder_advice2"]		= "To pole nie jest brane pod uwagę jeśli podano URL w polu nazwy pliku.";
$pgv_lang["add_linkid_advice"]			= "Podaj lub wyszukaj identyfikator osoby, rodziny lub źródła, z którym ten obiekt multimedialny ma być powiązany.";
$pgv_lang["use_browse_advice"]			= "Użyj przycisku &laquo;Przeglądaj&raquo; aby znaleźć plik na twoim komputerze.";
$pgv_lang["add_media_other_folder"]		= "Inny katalog. Wprowadź";
$pgv_lang["add_media_file"]				= "Istniejący plik mediów na serwerze";
$pgv_lang["main_media_ok1"]				= "Zmiana nazwy głównego pliku multimediów z <b>#GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newMediaName]#</b> została zakończona pomyślnie.";
$pgv_lang["main_media_ok2"]				= "Przenoszenie głównego pliku multimediów <b>#GLOBALS[oldMediaName]#</b> z <b>#GLOBALS[oldMediaFolder]#</b> do <b>#GLOBALS[newMediaFolder]#</b> zostało zakończone pomyślnie.";
$pgv_lang["main_media_ok3"]				= "Przenoszenie i zmiana nazwy głównego pliku multimediów z <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> do <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b> zostało zakończone pomyślnie.";
$pgv_lang["main_media_fail0"]			= "Główny plik multimediów <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> nie istnieje.";
$pgv_lang["main_media_fail1"]			= "Nie można zmienić nazwy głównego pliku multimediów <b>#GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Nie można przenieść głównego pliku multimediów <b>#GLOBALS[oldMediaName]#</b> z <b>#GLOBALS[oldMediaFolder]#</b> do <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Nie można przenieść i zmienić nazwy głównego pliku multimediów z <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> do <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Notatka: Musisz włączyć 'Użyj RESN' aby te ustwienie dało efekt.";
$pgv_lang["thumb_media_ok1"]			= "Zmiana nazwy pliku miniaturek <b>#GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newMediaName]#</b> została zakończona pomyślnie.";
$pgv_lang["thumb_media_ok2"]			= "Przenoszenie pliku miniaturek <b>#GLOBALS[oldMediaName]#</b> z <b>#GLOBALS[oldThumbFolder]#</b> do <b>#GLOBALS[newThumbFolder]#</b> zostało zakończone pomyślnie.";
$pgv_lang["thumb_media_ok3"]			= "Przenoszenie i zmiana nazwy pliku miniaturek z <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> do <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b> zostało zakończone pomyślnie.";
$pgv_lang["thumb_media_fail0"]			= "Plik miniaturek <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> nie istnieje.";
$pgv_lang["thumb_media_fail1"]			= "Nie można zmienić nazwy pliku miniaturek <b>#GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Nie można przenieść pliku miniaturek <b>#GLOBALS[oldMediaName]#</b> z <b>#GLOBALS[oldThumbFolder]#</b> do <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Nie można przenieść i zmienić nazwy pliku miniaturek z <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> do <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_create_ok0a"]						= "Miniatura <b>#GLOBALS[imageThumbnail]#</b> utworzona automatycznie.";
$pgv_lang["thumb_create_ok0b"]						= "Miniatura #GLOBALS[imageThumbnail]# utworzona automatycznie.";
$pgv_lang["thumb_create_fail0a"]					= "Miniatura <span style=\"font-size:larger\">#GLOBALS[imageThumbnail]#</span> nie mogła zostać utworzona automatycznie. Kod błędu : ";
$pgv_lang["thumb_create_fail0b"]					= "Miniatura #GLOBALS[imageThumbnail]# nie mogła zostać utworzona automatycznie. Kod błędu : ";
$pgv_lang["thumb_create_fail1"]						= "Ta funkcja jest wyłączona w konfiguracji GEDCOM.";
$pgv_lang["thumb_create_fail2"]						= "Katalog docelowy nie jest zapisywalny.";
$pgv_lang["thumb_create_fail3"]						= "Ta funkcja nie obsługuje typu obrazu <span style=\"font-size:larger\">#GLOBALS[imageType]#</span>.";
$pgv_lang["thumb_create_fail4"]						= "Nie można utworzyć katalogu docelowego.";
$pgv_lang["thumb_create_fail5"]						= "Obraz wejściowy <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> nie istnieje lub nie można go odczytać.";
$pgv_lang["thumb_create_fail6"]						= "Nie można określić rozmiaru obrazu wejściowego <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span>.";
$pgv_lang["thumb_create_fail7"]						= "Nie ma wystarczającej ilości wolnej pamięci.<br /><br />Zmniejsz rozmiar obrazu wejściowego lub dostosuj alokację pamięci w Konfiguracji Witryny, Krok 4, Ustawienia Zaawansowane.";
$pgv_lang["thumb_create_fail8"]						= "Obraz wejściowy <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> jest uszkodzony.";
$pgv_lang["add_asso"]					= "Dodaj nowe powiązanie";
$pgv_lang["edit_sex"]					= "Edytuj płeć";
$pgv_lang["add_obje"]					= "Dodaj nowy obiekt multimedialny";
$pgv_lang["add_name"]					= "Dodaj imię/nazwisko";
$pgv_lang["edit_raw"]					= "Edytuj plik GEDCOM";
$pgv_lang["label_add_remote_link"]		= "Dodaj odnośnik";
$pgv_lang["label_gedcom_id"]			= "ID bazy danych";
$pgv_lang["label_local_id"]				= "ID osoby";
$pgv_lang["accept"]						= "Zatwierdź";
$pgv_lang["accept_all"]					= "Zatwierdź wszystkie zmiany";
$pgv_lang["accept_gedcom"]				= "Każdą zmianę możesz zatwierdzić lub odrzucić.<br />Aby zatwierdzić wszystkie zmiany jednocześnie, kliknij \"Zatwierdź wszystkie zmiany\" poniżej.<br />Aby uzyskać więcej informacji o zmianie, <br />kliknij \"Zobacz porównianie zmian\" aby zobaczyć różnice, <br />lub kliknij \"Zobacz wpis GEDCOM\" aby przejrzeć nowe dane w formacie GEDCOM.";
$pgv_lang["accept_successful"]			= "Zatwierdzanie zmian w bazie danych zostało zakończone pomyślnie.";
$pgv_lang["add_child"]					= "Dodaj dziecko";
$pgv_lang["add_child_to_family"]		= "Dodaj dziecko do tej rodziny";
$pgv_lang["add_fact"]					= "Dodaj nowy fakt";
$pgv_lang["add_father"]					= "Dodaj nowego ojca";
$pgv_lang["add_husb"]					= "Dodaj męża";
$pgv_lang["add_opf_child"]				= "Dodaj dziecko do tej osoby";
$pgv_lang["add_husb_to_family"]			= "Dodaj męża do tej rodziny";
$pgv_lang["add_media"]					= "Dodaj nowy obiekt multimedialny";
$pgv_lang["add_media_lbl"]				= "Dodaj multimedia";
$pgv_lang["add_mother"]					= "Dodaj nową matkę";
$pgv_lang["add_new_chil"]				= "Dodaj nowe dziecko";
$pgv_lang["add_new_husb"]				= "Dodaj nowego męża";
$pgv_lang["add_new_wife"]				= "Dodaj nową żonę";
$pgv_lang["add_note"]					= "Dodaj nową notatkę";
$pgv_lang["add_note_lbl"]				= "Dodaj notatkę";
$pgv_lang["add_shared_note"]			= "Dodaj nową wspólną notatkę";
$pgv_lang["add_shared_note_lbl"]		= "Dodaj wspólną notatkę";
$pgv_lang["add_sibling"]				= "Dodaj brata lub siostrę";
$pgv_lang["add_son_daughter"]			= "Dodaj syna lub córkę";
$pgv_lang["add_source"]					= "Dodaj nowe źródło";
$pgv_lang["add_source_lbl"]				= "Dodaj źródło";
$pgv_lang["add_wife"]					= "Dodaj żonę";
$pgv_lang["add_wife_to_family"]			= "Dodaj żonę do tej rodziny";
$pgv_lang["advanced_search_discription"] = "Wyszukiwanie zaawansowane";
$pgv_lang["auto_thumbnail"]				= "Automatyczna miniaturka";
$pgv_lang["basic_search"]				= "szukaj";
$pgv_lang["basic_search_discription"]	= "Wyszukiwanie proste";
$pgv_lang["birthdate_search"]			= "Data urodzin: ";
$pgv_lang["birthplace_search"]			= "Miejsce urodzin: ";
$pgv_lang["change"]						= "Zmień";
$pgv_lang["change_family_instr"]		= "Na tej stronie możesz zmieniać lub usuwać członków rodziny. <br /><br />Możesz skorzystać z odnośnika Zmień dla każdego członka, aby wybrać inną osobę na to miejsce w rodzinie. Możesz także użyć odnośnika Usuń, aby usunąć tę osobę z rodziny.<br /><br />Po zakończeniu wprowadzania zmian kliknij przycisk Zapisz, aby je zapamiętać.<br />";
$pgv_lang["change_family_members"]		= "Zmień członków rodziny";
$pgv_lang["changes_occurred"]			= "W tym wpisie dokonano następujących zmian:";
$pgv_lang["confirm_remove"]				= "Czy na pewno chcesz usunąć tę osobę z rodziny?";
$pgv_lang["confirm_remove_object"]		= "Czy na pewno chcesz usunąć ten obiekt z bazy danych?";
$pgv_lang["create_repository"]			= "Utwórz repozytorium";
$pgv_lang["repo_not_exist"]							= "Repozytorium %s nie istnieje";
$pgv_lang["shared_note_assisted"]       = "Za pomocą Asystenta";
$pgv_lang["create_shared_note"]			= "Utwórz nową wspólną notatkę";
$pgv_lang["note_not_exist"]							= "Wspólna notatka %s nie istnieje";
$pgv_lang["create_shared_note_assisted"]= "Utwórz nową wspólną notatkę używając Asystenta";
$pgv_lang["add_new_event_assisted"]		= "Utwórz nowe wydarzenie używając Asystenta";
$pgv_lang["create_source"]				= "Utwórz nowe źródło";
$pgv_lang["sour_not_exist"]							= "Źródło %s nie istnieje";
$pgv_lang["media_not_exist"]						= "Medium %s nie istnieje";
$pgv_lang["current_person"]				= "Bieżąca osoba";
$pgv_lang["date"]						= "Data";
$pgv_lang["deathdate_search"]			= "Data śmierci: ";
$pgv_lang["deathplace_search"]			= "Miejsce śmierci: ";
$pgv_lang["delete_dir_success"]			= "Przenoszenie katalogów multimediów i miniaturek - <b>#GLOBALS[whichDir]#</b> - zostało zakończone pomyślnie.";
$pgv_lang["delete_file"]				= "Usuń plik";
$pgv_lang["delete_repo"]				= "Usuń repozytorium";
$pgv_lang["directory_not_empty"]		= "Katalog <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> nie jest pusty.";
$pgv_lang["directory_not_mt"]						= "Katalog #GLOBALS[whichDir]# nie jest pusty.";
$pgv_lang["directory_not_exist"]		= "Katalog nie istnieje.";
$pgv_lang["error_remote"]				= "Wybrano zewnętrzną stronę.";
$pgv_lang["error_same"]					= "Wybrano tą samą stronę.";
$pgv_lang["external_file"]				= "Ten obiekt multimedialny nie istnieje jako plik na tym serwerze. Nie można go usunąć, przenieść ani zmienić jego nazwy.";
$pgv_lang["file_missing"]				= "Nie odebrano żadnego pliku. Spróbuj ponownie wgrać plik.";
$pgv_lang["file_partial"]				= "Plik został wgrany tylko częściowo, spróbuj ponownie";
$pgv_lang["file_success"]				= "Wgrywanie pliku zostało zakończone pomyślnie";
$pgv_lang["file_too_big"]				= "Wielkość wgrywanego pliku przekracza dozwolony rozmiar";
$pgv_lang["file_no_temp_dir"]			= "Brak tymczasowego katalogu PHP";
$pgv_lang["file_cant_write"]			= "PHP nie może zapisać na dysku";
$pgv_lang["file_bad_extension"]			= "PHP zablokowało plik przez rozszerzenie";
$pgv_lang["file_unkown_err"]			= "Nieznany błąd podczas wgrywania pliku #pgv_lang[global_num1]#. Zgłoś raport o tym błędzie.";
$pgv_lang["folder"]						= "Katalog na serwerze";
$pgv_lang["gedrec_deleted"]				= "Wpis w pliku GEDCOM został usunięty.";
$pgv_lang["gen_thumb"]								= "Utwórz miniaturkę";
$pgv_lang["gen_missing_thumbs"]			= "Utwórz brakujące miniaturki";
$pgv_lang["gen_missing_thumbs_lbl"]		= "Brakujące miniaturki";
$pgv_lang["gender_search"]				= "Płeć:";
$pgv_lang["generate_thumbnail"]			= "Automatycznie twórz miniaturkę z&nbsp;";
$pgv_lang["hebrew_givn"]				= "Imiona hebrajskie";
$pgv_lang["hebrew_surn"]				= "Nazwisko hebrajskie";
$pgv_lang["hide_changes"]				= "Ukryj zmiany";
$pgv_lang["highlighted"]				= "Zaznaczony obraz";
$pgv_lang["illegal_chars"]				= "Puste nazwisko lub niedozwolone znaki w nazwisku";
$pgv_lang["invalid_search_multisite_input"] = "Podaj jedno z następujących: imię/nazwisko, data urodzenia, miejsce urodzenia, data śmierci, miejsce śmierci, płeć ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Szukaj ponownie podając więcej informacji, niż tylko płeć";
$pgv_lang["label_diff_server"]			= "Inna strona";
$pgv_lang["label_location"]				= "Lokalizacja strony";
$pgv_lang["label_password_id2"]			= "Hasło: ";
$pgv_lang["label_rel_to_current"]		= "Związek z bieżącą osobą";
$pgv_lang["label_same_server"]			= "Ta sama strona";
$pgv_lang["label_site"]					= "Strona";
$pgv_lang["label_site_url"]				= "URL strony:";
$pgv_lang["label_username_id2"]			= "Login: ";
$pgv_lang["lbl_server_list"]			= "Użyj istniejącej strony";
$pgv_lang["lbl_type_server"]			= "Wprowadź nową stronę";
$pgv_lang["link_as_child"]				= "Powiąż jako dziecko z istniejącą rodziną";
$pgv_lang["link_as_husband"]			= "Powiąż jako męża z istniejącą rodziną";
$pgv_lang["link_success"]				= "Powiązanie zostało dodane.";
$pgv_lang["link_to_existing_media"]		= "Powiąż z istniejącym obiektem multimedialnym";
$pgv_lang["max_media_depth"]			= "Możesz wprowadzić tylko #GLOBALS[MEDIA_DIRECTORY_LEVELS]# poziomów katalogów.";
$pgv_lang["max_upload_size"]			= "Maksymalny rozmiar wgrywania:";
$pgv_lang["media_deleted"]				= "Katalog multimediów (<b>#GLOBALS[whichDir]#</b>) usunięty.";
$pgv_lang["media_not_deleted"]						= "Katalog mediów - <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> - nie został usunięty.";
$pgv_lang["media_cant_delete"]						= "Nie można usunąć katalogu mediów: #GLOBALS[whichDir]#.";
$pgv_lang["media_exists"]				= "Plik multimedialny już istnieje.";
$pgv_lang["media_file"]					= "Plik multimedialny do wgrania";
$pgv_lang["media_file_deleted"]			= "Plik multimedialny został usunięty.";
$pgv_lang["media_file_not_deleted"]					= "Plik multimedialny <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> nie może być usunięty.";
$pgv_lang["media_file_cant_delete"]					= "Plik multimedialny #GLOBALS[whichFile]# nie może być usunięty.";
$pgv_lang["media_file_moved"]			= "Plik multimediów zostal przeniesiony.";
$pgv_lang["media_file_not_moved"]		= "Nie można przenieść pliku multimedialnego.";
$pgv_lang["media_file_not_renamed"]		= "Nie można przenieść ani zmienić nazwy pliku multimedialnego.";
$pgv_lang["media_thumb_exists"]			= "Miniaturka multimediów już istnieje.";
$pgv_lang["media_thumb_deleted"]					= "Miniaturka <b>#GLOBALS[whichFile]#</b> została usunięta.";
$pgv_lang["media_thumb_not_deleted"]				= "Miniaturka <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> nie może być usunięta.";
$pgv_lang["media_thumb_cant_delete"]				= "Miniaturka #GLOBALS[whichFile]# nie może być usunięta.";
$pgv_lang["multiple_gedcoms"]			= "Ten plik jest powiązany z inną genealogiczną bazą danych na tym serwerze. Nie można go usunąć, przenieść ani zmienić jego nazwy dopóki te powiązania nie zostaną usunięte.";
$pgv_lang["must_provide"]				= "Podaj ";
$pgv_lang["name_search"]				= "Imię/nazwisko:";
$pgv_lang["new_repo_created"]			= "Nowe repozytorium zostało utworzone.";
$pgv_lang["new_shared_note_created"]	= "Nowa wspólna notatka została utworzona.";
$pgv_lang["shared_note_updated"]		= "Wspólna notatka została uaktualniona.";
$pgv_lang["new_source_created"]			= "Nowe źródło zostało utworzone.";
$pgv_lang["no_changes"]					= "Brak zmian oczekujących na zatwierdzenie.";
$pgv_lang["no_known_servers"]			= "Brak znanych serwerów<br />Brak wyników";
$pgv_lang["no_temple"]					= "Brak świątyni - Living Ordinance";
$pgv_lang["no_upload"]					= "Nie można wgrać pliku multimedialnego ponieważ wgrywanie multimediów zostało zablokowane lub katalog multimediów jest chroniony przed zapisem.";
$pgv_lang["paste_id_into_field"]		= "Wklej poniższy identyfikator w pola edycji aby odwołać się do nowo utworzonego wpisu.";
$pgv_lang["paste_rid_into_field"]		= "Wklej poniższy identyfikator w pole edycji aby odwołać się do tego repozytorium.";
$pgv_lang["record_marked_deleted"]		= "Ten wpis został zaznaczony do usunięcia po zatwierdzeniu przez administratora.";
$pgv_lang["replace_with"]				= "Zamień na";
$pgv_lang["show_changes"]				= "Wpis został zaktualizowany. Kliknij tutaj aby zobaczyć zmiany.";
$pgv_lang["thumbnail"]					= "Miniaturka do wgrania";
$pgv_lang["title_remote_link"]			= "Dodaj zewnętrzne powiązanie";
$pgv_lang["undo"]						= "Cofnij";
$pgv_lang["undo_all"]					= "Cofnij wszystkie zmiany";
$pgv_lang["undo_all_confirm"]			= "Czy na pewno chcesz cofnąć wszystkie zmiany dla tego pliku GEDCOM?";
$pgv_lang["undo_successful"]			= "Cofnięcie zakończone pomyślnie";
$pgv_lang["update_successful"]			= "Aktualizacja zakończona pomyślnie";
$pgv_lang["update_failed"]							= "Aktualizacja nie udała się";
$pgv_lang["upload"]						= "Wgraj";
$pgv_lang["upload_error"]				= "Błąd podczas wgrywania pliku.";
$pgv_lang["copy_error"]					= "Plik #GLOBALS[whichFile2]# nie może być skopiowany z #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]				= "Wgraj pliki multimedialne";
$pgv_lang["upload_successful"]			= "Wgrywanie zakończone pomyślnie";
$pgv_lang["view_change_diff"]			= "Pokaż porównanie zmian";

?>

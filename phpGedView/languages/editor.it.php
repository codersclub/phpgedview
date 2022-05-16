<?php
/**
 * Italian texts
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
 *
 * @author Lorenzo Simionato, Fabio Parri, Marco Renini
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]			= "Aggiungi dettagli matrimonio";
$pgv_lang["edit_concurrency_change"] = "L\'ultima modifica a questo record è stata effettuata da <i>#CHANGEUSER#</i> in data #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Il record con ID #PID# è stato modificato da un altro utente da quando hai avuto l\'ultimo accesso.";
$pgv_lang["edit_concurrency_msg1"]	= "Si è verificato un errore mentre veniva creato il modulo di modifica. Un altro utente potrebbe aver modificato questo record mentre tu lo visionavi.";
$pgv_lang["edit_concurrency_reload"]	= "Per favore, ricarica la pagina precedente per essere certo di lavorare sul record più recente";
$pgv_lang["no_update_CHAN"]			= "Non aggiornare il record CHAN (Ultima modifica)";
$pgv_lang["select_events"]			= "Selezionare Eventi";
$pgv_lang["source_events"]			= "Associa eventi a questa fonte";
$pgv_lang["advanced_name_fields"]	= "Ulteriori nomi (nomignolo, nome da sposati ecc.)";
$pgv_lang["accept_changes"]		= "Accetta/Rifiuta le modifiche";
$pgv_lang["replace"]				= "Sostituire il record";
$pgv_lang["append"] 				= "Aggiungi record";
$pgv_lang["review_changes"]		= "Rivedi le modifiche al file GEDCOM";
$pgv_lang["remove_object"]			= "Rimuovi oggetto";
$pgv_lang["remove_links"]			= "Rimuovi link";
$pgv_lang["show_thumbnail"]			= "Visualizza miniature";
$pgv_lang["link_media"]				= "Collega multimedia";
$pgv_lang["to_person"]				= "a persona";
$pgv_lang["to_family"]				= "a famiglia";
$pgv_lang["to_source"]				= "a fonte";
$pgv_lang["to_note"]				= "a nota condivisa";
$pgv_lang["to_repository"]			= "a deposito";
$pgv_lang["edit_fam"]				= "Modifica famiglia";
$pgv_lang["edit_repo"]				= "Modifica deposito";
$pgv_lang["copy"]					= "Copia";
$pgv_lang["cut"]					= "Taglia";
$pgv_lang["sort_by_birth"]			= "Ordina per date di nascita";
$pgv_lang["reorder_children"]		= "Riordina figli";
$pgv_lang["reorder_media"]					= "Riordina oggetti multimediali";
$pgv_lang["reorder_media_title"]			= "Trascina le anteprime per riordinare i media";
$pgv_lang["reorder_media_window"]			= "Riordina oggetti multimediali (finestra)";
$pgv_lang["reorder_media_window_title"]		= "Clicca una riga e trascina per riordinare gli oggetti multimediali";
$pgv_lang["reorder_media_save"]				= "Salva gli oggetti multimediali ordinati nel database";
$pgv_lang["reorder_media_reset"]			= "Ripristina l\'ordine originale";
$pgv_lang["reorder_media_cancel"]			= "Chiudi e torna indietro";
$pgv_lang["add_from_clipboard"]		= "Aggiungi dagli appunti";
$pgv_lang["record_copied"]			= "Record copiato negli appunti";
$pgv_lang["add_unlinked_person"]	= "Aggiungi una persona non collegata";
$pgv_lang["add_unlinked_source"]	= "Aggiungere fonte non collegata";
$pgv_lang["add_unlinked_note"]		= "Aggiungi una nota non collegata";
$pgv_lang["add_unlinked"]			= "Record non collegati";
$pgv_lang["server_file"]				= "Nome del file sul server";
$pgv_lang["server_file_advice"]			= "Non cambiare per mantenere il nome del file originale.";
$pgv_lang["server_file_advice2"]		= "Puoi inserire una URL che inizi con «http://».";
$pgv_lang["server_folder_advice"]		= "Puoi inserire fino a #GLOBALS[MEDIA_DIRECTORY_LEVELS]# nomi di cartelle per raggiungere quella standard «#GLOBALS[MEDIA_DIRECTORY]#».<br />Non inserire la parte «#GLOBALS[MEDIA_DIRECTORY]#» nel percorso di destinazione.";
$pgv_lang["server_folder_advice2"]		= "Questo inserimento viene ignorato se hai immesso una URL nel campo nome.";
$pgv_lang["add_linkid_advice"]			= "Inserisci o cerca l\'ID della persona, famiglia o fonte a cui questo oggetto multimediale deve essere collegato.";
$pgv_lang["use_browse_advice"]			= "Utilizza il pulsante «Browse» per cercare il file nel tuo computer.";
$pgv_lang["add_media_other_folder"]		= "Altra cartella ... per favore, scrivi";
$pgv_lang["add_media_file"]				= "File multimediale esistente sul server";
$pgv_lang["main_media_ok1"]				= "File multimediale principale <b>#GLOBALS[oldMediaName]#</b> rinominato in <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]				= "File multimediale principale <b>#GLOBALS[oldMediaName]#</b> spostato da <b>#GLOBALS[oldMediaFolder]#</b> a <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]				= "File multimediale principale spostato e rinominato da <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Il file multimediale principale <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> non esiste.";
$pgv_lang["main_media_fail1"]			= "Il file multimediale principale <b>#GLOBALS[oldMediaName]#</b> non può essere rinominato in <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Il file multimediale principale <b>#GLOBALS[oldMediaName]#</b> non può essere spostato da <b>#GLOBALS[oldMediaFolder]#</b> a <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Il file multimediale principale non può essere spostato e rinominato da <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Nota: Devi abilitare la funzione «#pgv_lang[PRIVACY_BY_RESN]#» perché questa impostazione abbia effetto.";
$pgv_lang["thumb_media_ok1"]			= "File di miniatura <b>#GLOBALS[oldMediaName]#</b> rinominato in <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "File di miniatura <b>#GLOBALS[oldMediaName]#</b> spostato da <b>#GLOBALS[oldThumbFolder]#</b> a <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "File di miniatura spostato e rinominato da <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]			= "Il file di miniatura <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> non esiste.";
$pgv_lang["thumb_media_fail1"]			= "Il file di miniatura <b>#GLOBALS[oldMediaName]#</b> non può essere rinominato in <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Il file di miniatura <b>#GLOBALS[oldMediaName]#</b> non può essere spostato da <b>#GLOBALS[oldThumbFolder]#</b> a <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Il file di miniatura non può essere spostato e rinominato da <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_create_ok0a"]			= "Miniatura <b>#GLOBALS[imageThumbnail]#</b> creata automaticamente.";
$pgv_lang["thumb_create_ok0b"]			= "Miniatura #GLOBALS[imageThumbnail]# creata automaticamente.";
$pgv_lang["thumb_create_fail0a"]		= "La miniatura <span style=\"font-size:larger\">#GLOBALS[imageThumbnail]#</span> non può essere creata automaticamente : ";
$pgv_lang["thumb_create_fail0b"]		= "La miniatura #GLOBALS[imageThumbnail]# non può essere creata automaticamente. Codice di errore : ";
$pgv_lang["thumb_create_fail1"]			= "Questa funzione è disabilitata nella configurazione GEDCOM.";
$pgv_lang["thumb_create_fail2"]			= "La cartella di destinazione non è scrivibile.";
$pgv_lang["thumb_create_fail3"]			= "Questa funzione non supporta il tipo di immagine <span style=\"font-size:larger\">#GLOBALS[imageType]#</span>.";
$pgv_lang["thumb_create_fail4"]			= "La cartella di destinazione non può essere creata.";
$pgv_lang["thumb_create_fail5"]			= "L'immagine in ingresso <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> non esiste o non può essere letta.";
$pgv_lang["thumb_create_fail6"]			= "La dimensione dell'immagine in ingresso <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> non può essere determinata.";
$pgv_lang["thumb_create_fail7"]			= "Non c'è abbastanza memoria libera. Ridurre la dimensione dell'immagine in ingresso o regolare l'allocazione della memoria in Configurazione sito, Passaggio 4, Impostazioni avanzate.";
$pgv_lang["thumb_create_fail8"]			= "L'immagine in ingresso <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> è difettosa.";
$pgv_lang["add_asso"]				= "Aggiungi una persona collegata";
$pgv_lang["edit_sex"]				= "Modifica sesso";
$pgv_lang["add_obje"]				= "Aggiungi un oggetto multimediale";
$pgv_lang["add_name"]				= "Aggiungi un nuovo nome";
$pgv_lang["edit_raw"]				= "Modifica il record GEDCOM grezzo";
$pgv_lang["label_add_remote_link"]  = "Aggiungi Link";
$pgv_lang["label_gedcom_id"]        = "ID Database";
$pgv_lang["label_local_id"]         = "ID persona";
$pgv_lang["accept"] 				= "Accetta";
$pgv_lang["accept_all"] 			= "Accetta tutte le modifiche";
$pgv_lang["accept_gedcom"]		= "Decidi per ogni modifica se accettarla o rifiutarla.<br /><br />Per accettare tutte le modifiche in una volta, clicca <b>#pgv_lang[accept_all]#</b> in fondo. Per avere più informazioni riguardo una modifica. clicca <b>#pgv_lang[view_change_diff]#</b>, o clicca <b>#pgv_lang[view_gedcom]#</b> per vedere i nuovi dati nel formato GEDCOM.";
$pgv_lang["accept_successful"]		= "Cambiamenti effettuati con successo nel database";
$pgv_lang["add_child"]			= "Aggiungi bambino";
$pgv_lang["add_child_to_family"]	= "Aggiungi un bambino a questa famiglia";
$pgv_lang["add_fact"]			= "Aggiungi un nuovo fatto";
$pgv_lang["add_father"] 			= "Aggiungi un padre";
$pgv_lang["add_husb"]			= "Aggiungi marito";
$pgv_lang["add_opf_child"]				= "Aggiungi figlio/A per creare una famiglia monoparentale";
$pgv_lang["add_husb_to_family"]	= "Aggiungi marito a questa famiglia";
$pgv_lang["add_media"]				= "Aggiungi un oggetto multimediale";
$pgv_lang["add_media_lbl"]			= "Aggiungi Media";
$pgv_lang["add_mother"] 			= "Aggiungi una madre";
$pgv_lang["add_new_chil"] = "Aggiungi un figlio";
$pgv_lang["add_new_husb"]		= "Aggiungi un nuovo marito";
$pgv_lang["add_new_wife"]		= "Aggiungi una nuova moglie";
$pgv_lang["add_note"]			= "Aggiungi una nota al fatto";
$pgv_lang["add_note_lbl"]			= "Aggiungi nota";
$pgv_lang["add_shared_note"]		= "Aggiungi una nuova nota condivisa";
$pgv_lang["add_shared_note_lbl"]	= "Aggiungi una nota condivisa";
$pgv_lang["add_sibling"]			= "Aggiungi un fratello o una sorella";
$pgv_lang["add_son_daughter"]		= "Aggiungi un figlio o una figlia";
$pgv_lang["add_source"]			= "Aggiungi una fonte";
$pgv_lang["add_source_lbl"] 		= "Aggiungi fonte";
$pgv_lang["add_wife"]			= "Aggiungi moglie";
$pgv_lang["add_wife_to_family"]	= "Aggiungi una moglie a questa famiglia";
$pgv_lang["advanced_search_discription"] = "Ricerca avanzata sito";
$pgv_lang["auto_thumbnail"]			= "Miniatura automatica";
$pgv_lang["basic_search"]			= "ricerca";
$pgv_lang["basic_search_discription"] = "Ricerca base sito";
$pgv_lang["birthdate_search"]		= "Data di nascita:";
$pgv_lang["birthplace_search"]		= "Luogo di nascita:";
$pgv_lang["change"]					= "Cambiare";
$pgv_lang["change_family_instr"]	= "Utilizza questa pagina per modificare o rimuovere i membri della famiglia.<br /><br />Per ciascun membro della famiglia puoi utilizzare il link <b>Modifica</b> per scegliere una persona differente a svolgere quel ruolo nella famiglia. Puoi anche utilizzare il link <b>Rimuovi</b> per rimuovere quella persona dalla famiglia.<br /><br />Quando avrai finito con le modifiche de imembri della famiglia, clicca sul pulsante <b>Salva</b> per salvarle";
$pgv_lang["change_family_members"]	= "Modifica i membri della famiglia";
$pgv_lang["changes_occurred"]		= "La persona presenta le seguenti modifiche:";
$pgv_lang["confirm_remove"]			= "Sei sicuro di voler eliminare questa persona dalla famiglia?";
$pgv_lang["confirm_remove_object"]	= "Sei sicuro di voler rimuovere l'oggetto dal database?";
$pgv_lang["create_repository"]		= "Crea archivio";
$pgv_lang["repo_not_exist"]			= "L'archivio %s non esiste";
$pgv_lang["shared_note_assisted"]	= "Nota condivisa, utilizzando l'assistente";
$pgv_lang["create_shared_note"]		= "Crea una nuova nota condivisa";
$pgv_lang["note_not_exist"]			= "La nota condivisa %s non esiste";
$pgv_lang["create_shared_note_assisted"]	= "Crea una nuova nota condivisa, utilizzando l'assistente";
$pgv_lang["add_new_event_assisted"] = "Crea un nuovo Evento, utilizzando l'assistente";
$pgv_lang["create_source"]			= "Crea una nuova fonte";
$pgv_lang["sour_not_exist"]         = "La fonte %s non esiste";
$pgv_lang["media_not_exist"]		= "L'elemento multimediale %s non esiste";
$pgv_lang["current_person"]         = "Come attuale";
$pgv_lang["date"]					= "Data";
$pgv_lang["deathdate_search"]		= "Data di morte:";
$pgv_lang["deathplace_search"]		= "Luogo di morte:";
$pgv_lang["delete_dir_success"]		= "Cartelle dei file multimediali e delle anteprime <b>#GLOBALS[whichDir]#</b> spostate.";
$pgv_lang["delete_file"]			= "Elimina file";
$pgv_lang["delete_repo"]			= "Elimina deposito";
$pgv_lang["directory_not_empty"]	= "La cartella <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> non è vuota.";
$pgv_lang["directory_not_mt"]		= "La cartella #GLOBALS[whichDir]# non è vuota.";
$pgv_lang["directory_not_exist"]	= "La cartella non esiste.";
$pgv_lang["error_remote"]           = "È stato selezionato un sito remoto.";
$pgv_lang["error_same"]             = "Hai selezionato lo stesso sito.";
$pgv_lang["external_file"]			= "Questo oggetto multimediale non esiste su questo server e non può essere eliminato, spostato o rinominato.";
$pgv_lang["file_missing"]		= "Nessun file ricevuto, per favore riprova";
$pgv_lang["file_partial"]		= "Il file è stato caricato solo parzialmente, per favore prova ancora";
$pgv_lang["file_success"]		= "File caricato con successo";
$pgv_lang["file_too_big"]		= "I file caricati superano la dimensione massima consentita";
$pgv_lang["file_no_temp_dir"]		= "Cartella temporanea PHP non trovata.";
$pgv_lang["file_cant_write"]		= "PHP non è riuscito a scrivere sul disco";
$pgv_lang["file_bad_extension"]		= "File bloccato per estensione";
$pgv_lang["file_unkown_err"]		= "Codice di errore di caricamento file sconosciuto #pgv_lang[global_num1]#. Per favore, riferiscilo come errore di programmazione.";
$pgv_lang["folder"]		 			= "Cartella sul server";
$pgv_lang["gedrec_deleted"]		= "Campo GEDCOM cancellato con successo.";
$pgv_lang["gen_thumb"]				= "Crea miniatura";
$pgv_lang["gen_missing_thumbs"]		= "Crea miniature non trovate";
$pgv_lang["gen_missing_thumbs_lbl"]	= "Miniature non trovate";
$pgv_lang["gender_search"]			= "Sesso: ";
$pgv_lang["generate_thumbnail"]		= "Genera miniatura automatica da ";
$pgv_lang["hebrew_givn"]			= "Nomi dati Ebraici";
$pgv_lang["hebrew_surn"]			= "Cognome Ebraico";
$pgv_lang["hide_changes"]			= "Clicca qui per nascondere i cambiamenti.";
$pgv_lang["highlighted"]			= "Immagine evidenziata";
$pgv_lang["illegal_chars"]			= "Campo nome vuoto o caratteri non consentiti";
$pgv_lang["invalid_search_multisite_input"] = "Per favore, inserire uno dei seguenti: Nome, Data di nascita, Luogo di nascita, Data di morte, Luogo di morte o Sesso";
$pgv_lang["invalid_search_multisite_input_gender"] = "Per favore cerca nuovamente con più informazioni piuttosto che soltanto il sesso";
$pgv_lang["label_diff_server"]      = "Nuovo sito remoto";
$pgv_lang["label_location"]         = "Localizzazione del sito";
$pgv_lang["label_password_id2"]		= "Password:";
$pgv_lang["label_rel_to_current"]   = "Relazione con la persona corrente";
$pgv_lang["label_same_server"]      = "Sito locale";
$pgv_lang["label_site"]             = "Sito";
$pgv_lang["label_site_url"]         = "URL del sito:";
$pgv_lang["label_username_id2"]		= "Username:";
$pgv_lang["lbl_server_list"]        = "Sito remoto esistente";
$pgv_lang["lbl_type_server"]		= "Digitare un nuovo sito.";
$pgv_lang["link_as_child"]			= "Collega questa persona a una famiglia esistente come figlio/figlia";
$pgv_lang["link_as_husband"]		= "Collega questa persona a una famiglia esistente come marito";
$pgv_lang["link_success"]			= "Collegamento aggiunto con successo";
$pgv_lang["link_to_existing_media"]	= "Collega a un oggetto multimediale esistente";
$pgv_lang["max_media_depth"]		= "Puoi inserire più di #GLOBALS[MEDIA_DIRECTORY_LEVELS]# nomi di sottocartelle";
$pgv_lang["max_upload_size"]  = "Grandezza Massima Caricamento: ";
$pgv_lang["media_deleted"]			= "Cartella <b>#GLOBALS[whichDir]#</b> rimossa.";
$pgv_lang["media_not_deleted"]		= "Cartella <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> rimossa.";
$pgv_lang["media_cant_delete"]		= "Cartella #GLOBALS[whichDir]# non rimossa.";
$pgv_lang["media_exists"]			= "Il file multimediale <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> esiste già.";
$pgv_lang["media_file"]			= "File multimediale da caricare";
$pgv_lang["media_file_deleted"]		= "Il file multimediale <b>#GLOBALS[whichFile]#</b> eliminato.";
$pgv_lang["media_file_not_deleted"]	= "Impossibile eliminare il file multimediale <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span>.";
$pgv_lang["media_file_cant_delete"]	= "Impossibile eliminare il file multimediale #GLOBALS[whichFile]#";
$pgv_lang["media_file_moved"]		= "File multimediale spostato.";
$pgv_lang["media_file_not_moved"]	= "Il file multimediale non può essere spostato.";
$pgv_lang["media_file_not_renamed"]	= "Il file multimediale non può essere spostato o rinominato.";
$pgv_lang["media_thumb_exists"]		= "Miniatura <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> già esistente.";
$pgv_lang["media_thumb_deleted"]	= "Miniatura <b>#GLOBALS[whichFile]#</b> eliminata.";
$pgv_lang["media_thumb_not_deleted"]	= "Impossibile eliminare la miniatura <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span>.";
$pgv_lang["media_thumb_cant_delete"]	= "Impossibile eliminare la miniatura #GLOBALS[whichFile]#.";
$pgv_lang["multiple_gedcoms"]		= "Questo file è collegato a un altro database genealogico su questo server. Non può essere eliminato, spostato o rinominato prima che questi collegamenti non siano stati rimossi.";
$pgv_lang["must_provide"]		= "Devi fornire un ";
$pgv_lang["name_search"]			= "Nome:";
$pgv_lang["new_repo_created"]		= "Creato nuovo deposito";
$pgv_lang["new_shared_note_created"] 	= "Nuova nota condivisa creata con successo.";
$pgv_lang["shared_note_updated"] 	= "Nota condivisa aggiornata con successo.";
$pgv_lang["new_source_created"] 	= "Nuova fonte creata con successo.";
$pgv_lang["no_changes"] 			= "Non ci sono, al momento, modifiche da revisionare.";
$pgv_lang["no_known_servers"]		= "Nessun server conosciuto. Nessun risultato verrà trovato";
$pgv_lang["no_temple"]				= "Nessun Tempio - ";
$pgv_lang["no_upload"]				= "Il caricamento di file multimediali non è permesso perché gli oggetti multimediali sono stati disabilitati o perché la cartella dei media non è scrivibile.";
$pgv_lang["paste_id_into_field"]	= "Incolla il seguente ID nei campi di modifica per far riferimento a file appena creato ";
$pgv_lang["paste_rid_into_field"]	= "Incolla il seguente ID di deposito nei tuoi campi di modifica per far riferimento a questo deposito";
$pgv_lang["record_marked_deleted"]		= "Questo record è stato marcato per essere eliminato su approvazione dell'amministratore.";
$pgv_lang["replace_with"]			= "Sostituire con";
$pgv_lang["show_changes"]		= "Il campo è stato aggiornato. Clicca qui per mostrare le modifiche.";
$pgv_lang["thumbnail"]				= "Miniatura da caricare";
$pgv_lang["title_remote_link"]      = "Aggiungi collegamento remoto";
$pgv_lang["undo"]			= "Annulla";
$pgv_lang["undo_all"]				= "Annulla tutte le modifiche";
$pgv_lang["undo_all_confirm"]		= "Sei sicuro di voler annullare tutte le modifiche di questo GEDCOM?";
$pgv_lang["undo_successful"]		= "Annullao con successo";
$pgv_lang["update_successful"]		= "L'aggiornamento è andato a buon fine";
$pgv_lang["update_failed"]			= "L'aggiornamento non è riuscito";
$pgv_lang["upload"]					= "Carica";
$pgv_lang["upload_error"]			= "C'è stato un errore caricando il file GEDCOM";
$pgv_lang["copy_error"]				= "Il file #GLOBALS[whichFile2]# non può essere copiato da #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]		= "Carica file multimediale";
$pgv_lang["upload_successful"]		= "Caricato con successo";
$pgv_lang["view_change_diff"]		= "Guarda le differenze";

?>

<?php
/**
 * Catalan texts
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
 * @author Antoni Planas i Vilà
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]			= "Afegiu detalls del casament";
$pgv_lang["edit_concurrency_change"] = "El darrer a modificar aquest registre fou <i>#CHANGEUSER#</i> el #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "El registre amb l'id #PID# fou canviat per un altre usuari d'ençà el darrer cop que vareu accedir-lo.";
$pgv_lang["edit_concurrency_msg1"]	= "Ha ocorregut un error tot creant el formulari d'edició. Un altre usuari deu haver canviat aquest registre d'ençà que us l'havíeu mirat.";
$pgv_lang["edit_concurrency_reload"]	= "Feu servir el botó «enrere» del vostre navegador i actualitzeu la pàgina anterior per estar ben segur que esteu treballant amb el registre més recent";
$pgv_lang["no_update_CHAN"]			= "No canviïs el registre CHAN (darrer canvi)";
$pgv_lang["select_events"]			= "Selecciona esdeveniments";
$pgv_lang["source_events"]			= "Esdeveniments associats amb aquesta font";
$pgv_lang["advanced_name_fields"]	= "Noms addicionals (noms familiars, diminutius, àlies, motiu, malnom, nom de casada,...)";
$pgv_lang["accept_changes"] 		= "Reviseu les modificacions.";
$pgv_lang["replace"]				= "Modifica un registre";
$pgv_lang["append"] 				= "Afegeix un registre";
$pgv_lang["review_changes"] 		= "Revisió de les modificacions del GEDCOM";
$pgv_lang["remove_object"]			= "Elimina l'objecte";
$pgv_lang["remove_links"]			= "Elimina els enllaços";
$pgv_lang["show_thumbnail"]			= "Mostra les miniatures";
$pgv_lang["link_media"]				= "Enllaça multimèdia";
$pgv_lang["to_person"]				= "A una persona";
$pgv_lang["to_family"]				= "A una família";
$pgv_lang["to_source"]				= "A una font";
$pgv_lang["to_note"]				= "A una nota compartida";
$pgv_lang["to_repository"]			= "A un arxiu";
$pgv_lang["edit_fam"]				= "Edita família";
$pgv_lang["edit_repo"]				= "Edita Repositori";
$pgv_lang["copy"]					= "Copia";
$pgv_lang["cut"]					= "Talla";
$pgv_lang["sort_by_birth"]			= "Ordena per dates de naixement";
$pgv_lang["reorder_children"]		= "Reordeneu la mainada";
$pgv_lang["reorder_media"]					= "Reodeneu els ítems multimèdia";
$pgv_lang["reorder_media_title"]			= "Per a redordenar els ítems multimèdia, arrossegueu i allibereu les imatges al nou lloc.";
$pgv_lang["reorder_media_window"]			= "Reordenació multimèdia (finestra)";
$pgv_lang["reorder_media_window_title"]		= "Per a reordenar els ítems multimèdia, polseu sobre una fila i arrossegue-la fins al nou lloc.";
$pgv_lang["reorder_media_save"]				= "Desa els multimèdia ordenats a la base de dades";
$pgv_lang["reorder_media_reset"]			= "Restableix l'ordre original";
$pgv_lang["reorder_media_cancel"]			= "Surt i torna";
$pgv_lang["add_from_clipboard"]		= "Afegir del portapapers";
$pgv_lang["record_copied"]			= "Registre enganxat";
$pgv_lang["add_unlinked_person"]	= "Addició d'una persona desvinculada";
$pgv_lang["add_unlinked_source"]	= "Addició d'una font desvinculada";
$pgv_lang["add_unlinked_note"]		= "Addició d'una nota desvinculada";
$pgv_lang["add_unlinked"]			= "Registres desvinculats";
$pgv_lang["server_file"]			= "Nom del fitxer al servidor";
$pgv_lang["server_file_advice"]		= "No ho canvieu per conservar el nom de fitxer original.";
$pgv_lang["server_file_advice2"]	= "També podeu entrar-hi un URL, començant amb «http://».";
$pgv_lang["server_folder_advice"]	= "Es poden entrar fins a #GLOBALS[MEDIA_DIRECTORY_LEVELS]# noms de carpeta a continuació del «#GLOBALS[MEDIA_DIRECTORY]#» per defecte. No entreu la part «#GLOBALS[MEDIA_DIRECTORY]#» del destí del nom de la carpeta.";
$pgv_lang["server_folder_advice2"]	= "Aquesta entrada s'ignorarà si heu entrat un URL al camp nom de fitxer.";
$pgv_lang["add_linkid_advice"]		= "Entreu o cerqueu l'ID de la persona, família o font al que cal vincular aquest ítem multimèdia.";
$pgv_lang["use_browse_advice"]		= "Feu servir el botó «Cerca» per cercar al vostre ordinador el fitxer desitjat.";
$pgv_lang["add_media_other_folder"]	= "Altres carpetes... entreu-les";
$pgv_lang["add_media_file"]			= "Fitxer de multimèdia existent al servidor";
$pgv_lang["main_media_ok1"]			= "El fitxer principal de multimèdia <b>#GLOBALS[oldMediaName]#</b> s'ha reanomenat com <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]			= "El fitxer principal de multimèdia <b>#GLOBALS[oldMediaName]#</b> s'ha canviat de <b>#GLOBALS[oldMediaFolder]#</b> a <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]			= "El fitxer principal multimèdia s'ha canviat i reanomenat de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]		= "El fitxer principal de multimèdia <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> no hi és.";
$pgv_lang["main_media_fail1"]		= "El fitxer principal de multimèdia <b>#GLOBALS[oldMediaName]#</b> no pot reanomenar-se com <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]		= "El fitxer principal de multimèdia <b>#GLOBALS[oldMediaName]#</b> no por ésser canviat de <b>#GLOBALS[oldMediaFolder]#</b> a <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]		= "El fitxer principal de multimèdia no pot reanomenar-se i canviar-se de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]			= "Nota: Us cal activar la propietat «#pgv_lang[PRIVACY_BY_RESN]#» per a que aquest paràmetre tingui efecte";
$pgv_lang["thumb_media_ok1"]		= "Fitxer de miniatures <b>#GLOBALS[oldMediaName]#</b> reanomenat a <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]		= "Fitxer de miniatures <b>#GLOBALS[oldMediaName]#</b> canviat de <b>#GLOBALS[oldThumbFolder]#</b> a <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]		= "Fitxer de miniatures reanomenat i canviat de <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]		= "El fitxer de miniatures <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> no hi és.";
$pgv_lang["thumb_media_fail1"]		= "El fitxer de miniatures <b>#GLOBALS[oldMediaName]#</b> no pot reanomenar-se com <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]		= "El fitxer de miniatures <b>#GLOBALS[oldMediaName]#</b> no pot moure's de <b>#GLOBALS[oldThumbFolder]#</b> a <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]		= "El fitxer de miniatures no pot reanomenar-se i moure's de <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> a <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_create_ok0a"]			= "La miniatura <b>#GLOBALS[imageThumbnail]#</b> es crea automàticament.";
$pgv_lang["thumb_create_ok0b"]			= "La miniatura #GLOBALS[imageThumbnail]# es crea automàticament..";
$pgv_lang["thumb_create_fail0a"]		= "La miniatura <span style=\"font-size:larger\">#GLOBALS[imageThumbnail]#</span> no s'ha pogut crear automàticament : ";
$pgv_lang["thumb_create_fail0b"]		= "La miniatura #GLOBALS[imageThumbnail]# no s'ha pogut crear automàticament. Codi d'error : ";
$pgv_lang["thumb_create_fail1"]			= "Aquesta característica està desactivada a la configuració de GEDCOM.";
$pgv_lang["thumb_create_fail2"]			= "El directori de destinació no es pot escriure.";
$pgv_lang["thumb_create_fail3"]			= "Aquesta característica no admet el tipus d'imatge <span style=\"font-size:larger\">#GLOBALS[imageType]#</span>.";
$pgv_lang["thumb_create_fail4"]			= "No es pot crear el directori de destinació.";
$pgv_lang["thumb_create_fail5"]			= "La imatge d’entrada XYZ no existeix o no es pot llegir.";
$pgv_lang["thumb_create_fail6"]			= "No es pot determinar la mida de la imatge d’entrada <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span>.";
$pgv_lang["thumb_create_fail7"]			= "No hi ha prou memòria lliure.<br />Reduïu la mida de la imatge d’entrada o ajusteu l’assignació de memòria a la configuració del lloc, pas 4, Configuració avançada.";
$pgv_lang["thumb_create_fail8"]			= "La imatge d’entrada <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> és defectuosa.";
$pgv_lang["add_asso"]				= "Afegeix un nou associat";
$pgv_lang["edit_sex"]				= "Edita el sexe";
$pgv_lang["add_obje"]				= "Afegeix un objecte multimèdia";
$pgv_lang["add_name"]				= "Afegeix un altre nom";
$pgv_lang["edit_raw"]				= "Edita el registre primari GEDCOM";
$pgv_lang["label_add_remote_link"]  = "Afegeix l'enllaç";
$pgv_lang["label_gedcom_id"]        = "ID de la Base de Dades";
$pgv_lang["label_local_id"]         = "ID de la persona";
$pgv_lang["accept"] 				= "D'acord";
$pgv_lang["accept_all"] 			= "D'acord amb els canvis";
$pgv_lang["accept_gedcom"]			= "Decidiu per cada canvi si acceptar-lo o rebutjar-lo.<br /><br />Per acceptar-los tots de cop, polseu <b>#pgv_lang[accept_all]#</b> al caixetí següent. Per disposar de més informació d'un canvi, polseu <b>#pgv_lang[view_change_diff]#</b> per veure les diferències, o polseu <b>#pgv_lang[view_gedcom]#</b> per veure les noves dades en format GEDCOM.";
$pgv_lang["accept_successful"]		= "S'han acceptat correctament els canvis a la base de dades";
$pgv_lang["add_child"]				= "Afegeix mainada";
$pgv_lang["add_child_to_family"]	= "Afegeix mainada a aquesta família";
$pgv_lang["add_fact"]				= "Afegeix un esdeveniment";
$pgv_lang["add_father"] 			= "Afegeix un nou pare";
$pgv_lang["add_husb"]				= "Afegeix-li un marit";
$pgv_lang["add_opf_child"]				= "Afegiu un fill/a per crear una família monoparental";
$pgv_lang["add_husb_to_family"] 	= "Afegeix un marit a aquesta família";
$pgv_lang["add_media"]				= "Crea un ítem multimèdia nou";
$pgv_lang["add_media_lbl"]			= "Afegeix un fitxer multimèdia";
$pgv_lang["add_mother"] 			= "Afegeix una nova mare";
$pgv_lang["add_new_chil"] 			= "Afegeix més canalla";
$pgv_lang["add_new_husb"]			= "Crea una nova persona i vincula'l com a espòs";
$pgv_lang["add_new_wife"]			= "Crea una nova persona i vincula-la com a muller";
$pgv_lang["add_note"]				= "Afegeix una nova nota";
$pgv_lang["add_note_lbl"]			= "Afegeix una nota";
$pgv_lang["add_shared_note"]		= "Afegiu una nova nota compartida";
$pgv_lang["add_shared_note_lbl"]	= "Afegiu una nota compartida";
$pgv_lang["add_sibling"]			= "Afegeix un germà o germana";
$pgv_lang["add_son_daughter"]		= "Afegeix un fill o filla";
$pgv_lang["add_source"] 			= "Afegeix una nova ressenya de font";
$pgv_lang["add_source_lbl"] 		= "Afegeix una ressenya de font";
$pgv_lang["add_wife"]				= "Afegeix-li una esposa";
$pgv_lang["add_wife_to_family"] 	= "Afegeix una esposa a aquesta família";
$pgv_lang["advanced_search_discription"] = "Recerca avançada de llocs";
$pgv_lang["auto_thumbnail"]			= "Miniatura automàtica";
$pgv_lang["basic_search"]			= "busca";
$pgv_lang["basic_search_discription"] = "Recerca bàsica del lloc";
$pgv_lang["birthdate_search"]		= "Data de naixement: ";
$pgv_lang["birthplace_search"]		= "Lloc de naixement: ";
$pgv_lang["change"]					= "Canvia";
$pgv_lang["change_family_instr"]	= "Feu servir aquesta pàgina per canviar o eliminar membres de la família.<br /><br />Per cada membre de la família podeu fer servir l'enllaç <b>Canvia</b> per escollir una altre persona que ocupi el mateix rol a la família. També podeu fer servir l'enllaç <b>Elimina</b> per treure-la.<br /><br />Quan hagueu acabat amb els canvis, polseu el botó <b>Desa</b> per guardar-los.";
$pgv_lang["change_family_members"]	= "Canvia membres de la família";
$pgv_lang["changes_occurred"]		= "S'han fet els següents canvis en aquest registre:";
$pgv_lang["confirm_remove"]			= "Segur que voleu eliminar aquesta persona de la família?";
$pgv_lang["confirm_remove_object"]	= "Segur que voleu eliminar aquest objecte de la base de dades?";
$pgv_lang["create_repository"]		= "Crea arxiu";
$pgv_lang["repo_not_exist"]			= "L'arxiu %s no existeix";
$pgv_lang["shared_note_assisted"]	= "Nota compartida amb l'Assistent";
$pgv_lang["create_shared_note"]		= "Creeu una nova nota compartida";
$pgv_lang["note_not_exist"]			= "La Nota compartida %s no existeix";
$pgv_lang["create_shared_note_assisted"]	= "Creeu una nota compartida nova amb l'Assistent";
$pgv_lang["add_new_event_assisted"]			= "Creeu un esdeveniment nou amb l'Assistent";
$pgv_lang["create_source"]			= "Crea una nova font";
$pgv_lang["sour_not_exist"]         = "La font %s no existeix";
$pgv_lang["media_not_exist"]		= "L'element multimèdia %s no existeix";
$pgv_lang["current_person"]         = "Ell/a mateix/a";
$pgv_lang["date"]					= "Data";
$pgv_lang["deathdate_search"]		= "Data de defunció: ";
$pgv_lang["deathplace_search"]		= "Lloc de defunció: ";
$pgv_lang["delete_dir_success"]		= "S'han eliminat els Directoris multimèdia i de miniatures <b>#GLOBALS[whichDir]#</b>.";
$pgv_lang["delete_file"]			= "Elimina el fitxer";
$pgv_lang["delete_repo"]			= "Elimina l'arxiu";
$pgv_lang["directory_not_empty"]	= "El directori <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> no és buit.";
$pgv_lang["directory_not_mt"]		= "El directori #GLOBALS[whichDir]# no és buit.";
$pgv_lang["directory_not_exist"]	= "El directori no existeix.";
$pgv_lang["error_remote"]           = "Heu seleccionat un lloc remot.";
$pgv_lang["error_same"]             = "Heu seleccionat el mateix lloc.";
$pgv_lang["external_file"]			= "Aquest objecte multimèdia no existeix com a fitxer al servidor. No pot eliminar-se, moure's o reanomenar-se.";
$pgv_lang["file_missing"]			= "No s'ha rebut el fitxer. Torneu-lo a carregar.";
$pgv_lang["file_partial"]			= "Fitxer parcialment carregat. Torneu-hi";
$pgv_lang["file_success"]			= "S'ha carregat correctament el fitxer";
$pgv_lang["file_too_big"]			= "El fitxer carregat excedeix el volum permès";
$pgv_lang["file_no_temp_dir"]		= "Manca el directori PHP temporal";
$pgv_lang["file_cant_write"]		= "Error PHP en escriure al disc";
$pgv_lang["file_bad_extension"]		= "PHP bloquejat per extensió d'arxiu";
$pgv_lang["file_unkown_err"]		= "Error desconegut en la càrrega d'arxius. Codi d'error #pgv_lang[global_num1]#. Si us plau, informeu d'això com un error.";
$pgv_lang["folder"]		 			= "Carpeta al servidor";
$pgv_lang["gedrec_deleted"] 		= "Registre GEDCOM eliminat correctament.";
$pgv_lang["gen_thumb"]				= "Crea miniatura";
$pgv_lang["gen_missing_thumbs"]		= "Crea les miniatures faltants";
$pgv_lang["gen_missing_thumbs_lbl"]	= "Manquen miniatures";
$pgv_lang["gender_search"]			= "Sexe: ";
$pgv_lang["generate_thumbnail"]		= "Generar miniatura automàticament des de ";
$pgv_lang["hebrew_givn"]			= "Noms de Pila Hebreus";
$pgv_lang["hebrew_surn"]			= "Cognoms Hebreus";
$pgv_lang["hide_changes"]			= "Polseu aquí per amagar els canvis.";
$pgv_lang["highlighted"]			= "Imatge principal";
$pgv_lang["illegal_chars"]			= "Noms en blanc o caràcters prohibits al nom";
$pgv_lang["invalid_search_multisite_input"] = "Entreu quelcom del següent:  Nom, Data de naixement, lloc de naixement, data de defunció i sexe ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Cerqueu-ho amb més informació que només el sexe";
$pgv_lang["label_diff_server"]      = "Nou lloc remot";
$pgv_lang["label_location"]         = "Localització del lloc";
$pgv_lang["label_password_id2"]		= "Contrasenya: ";
$pgv_lang["label_rel_to_current"]   = "Parentiu amb aquesta persona";
$pgv_lang["label_same_server"]      = "Lloc local";
$pgv_lang["label_site"]             = "Lloc";
$pgv_lang["label_site_url"]         = "URL del lloc:";
$pgv_lang["label_username_id2"]		= "Nom d'usuari: ";
$pgv_lang["lbl_server_list"]        = "Un lloc remot existent";
$pgv_lang["lbl_type_server"]        = "Entreu un nou lloc.";
$pgv_lang["link_as_child"]			= "Vincula aquesta persona a una família existent com a fill/a";
$pgv_lang["link_as_husband"]		= "Vincula'l a una família existent com a espòs";
$pgv_lang["link_success"]			= "S'ha afegit correctament el vincle";
$pgv_lang["link_to_existing_media"]	= "Vincula-la a un ítem multimèdia existent";
$pgv_lang["max_media_depth"]		= "No podeu entrar més de #GLOBALS[MEDIA_DIRECTORY_LEVELS]# noms de sotsdirectori";
$pgv_lang["max_upload_size"]		= "Volum màxim a carregar: ";
$pgv_lang["media_deleted"]			= "Eliminat el directori <b>#GLOBALS[whichDir]#</b>";
$pgv_lang["media_not_deleted"]		= "El directori <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> no s'ha eliminat.";
$pgv_lang["media_cant_delete"]		= "El directori #GLOBALS[whichDir]# no s'ha eliminat.";
$pgv_lang["media_exists"]			= "El fitxer multimèdia <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> ja existeix.";
$pgv_lang["media_file"] 			= "Fitxer multimèdia a carregar";
$pgv_lang["media_file_deleted"]		= "Eliminat <b>#GLOBALS[whichFile]#</b> el fitxer multimèdia";
$pgv_lang["media_file_not_deleted"]	= "No s'ha pogut suprimir el fitxer multimèdia <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span>.";
$pgv_lang["media_file_cant_delete"]	= "No s'ha pogut suprimir el fitxer multimèdia #GLOBALS[whichFile]#.";
$pgv_lang["media_file_moved"]			= "S'ha canviat de lloc el fitxer multimèdia";
$pgv_lang["media_file_not_moved"]	= "El fitxer multimèdia no pot moure's.";
$pgv_lang["media_file_not_renamed"]	= "El fitxer multimèdia no pot moure's o reanomenar-se.";
$pgv_lang["media_thumb_exists"]		= "La miniatura <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> ja existeix.";
$pgv_lang["media_thumb_deleted"]	= "S'ha suprimit la miniatura <b>#GLOBALS[whichFile]#</b>.";
$pgv_lang["media_thumb_not_deleted"]	= "No s'ha pogut suprimir la miniatura <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span>.";
$pgv_lang["media_thumb_cant_delete"]	= "No s'ha pogut suprimir la miniatura #GLOBALS[whichFile]#.";
$pgv_lang["multiple_gedcoms"]		= "Aquest fitxer és vinculat a una altra base de dades genealògica d'aquest servidor. No pot eliminar-se, reanomenar-se o moure's mentre es mantingui aquest enllaç.";
$pgv_lang["must_provide"]			= "Heu de donar un ";
$pgv_lang["name_search"]			= "Nom: ";
$pgv_lang["new_repo_created"]		= "S'ha creat un nou Arxiu";
$pgv_lang["new_shared_note_created"] 	= "S'ha creat correctament la nova nota compartida.";
$pgv_lang["shared_note_updated"] 	= "S'ha modificat correctament la nota compartida.";
$pgv_lang["new_source_created"] 	= "S'ha creat correctament la nova font.";
$pgv_lang["no_changes"] 			= "Actualment no hi ha canvis per revisar.";
$pgv_lang["no_known_servers"]		= "Servidors desconeguts. No s'han trobat resultats";
$pgv_lang["no_temple"]				= "Sense Temple -' Living Ordinance'";
$pgv_lang["no_upload"]				= "La càrrega de fitxers multimèdia no és permesa degut a que les entrades multimèdia estan desactivades o el directori multimèdia és de només lectura.";
$pgv_lang["paste_id_into_field"]	= "Pels camps d'edició, vinculeu aquest ID acabat de crear ";
$pgv_lang["paste_rid_into_field"]	= "Pels camps d'edició, vinculeu aquest ID acabat de crear ";
$pgv_lang["record_marked_deleted"]	= "Aquest registre ha estat senyalat per a eliminar, pendent de l'autorització de l'administrador.";
$pgv_lang["replace_with"]			= "Canvia-ho per";
$pgv_lang["show_changes"]			= "Aquest registre ha estat modificat. Polseu aquí per veure els canvis.";
$pgv_lang["thumbnail"]				= "Miniatura a carregar";
$pgv_lang["title_remote_link"]      = "Afegeix un enllaç remot";
$pgv_lang["undo"]					= "Desfés";
$pgv_lang["undo_all"]				= "Desfés tots els canvis";
$pgv_lang["undo_all_confirm"]		= "Esteu segur que cal desfer tots els canvis d'aquest GEDCOM?";
$pgv_lang["undo_successful"]		= "S'han desfet correctament";
$pgv_lang["update_successful"]		= "L'actualització ha estat correcta";
$pgv_lang["update_failed"]			= "L'actualització ha fallat";
$pgv_lang["upload"]					= "Carrega";
$pgv_lang["upload_error"]			= "Ha ocorregut un error tot carregant el fitxer.";
$pgv_lang["copy_error"]				= "No es pot copiar l'arxiu #Globals [whichFile2]# des de #Globals [whichFile1]#";
$pgv_lang["upload_media"]			= "Carrega fitxers multimèdia";
$pgv_lang["upload_successful"]		= "Càrrega correcta";
$pgv_lang["view_change_diff"]		= "Mostra el que s'ha canviat";

?>

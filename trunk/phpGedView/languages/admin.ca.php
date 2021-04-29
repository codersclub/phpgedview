<?php
/**
 * Catalan language file for PhpGedView
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

$pgv_lang["label_timedban_servers"]	= "Denegació d'accés temporitzat";
$pgv_lang["enter_banexpiry"]		= "Introduïu la data i l'hora de caducitat de denegació d'accés com aquesta:<br />2012.12.31@23:59";

$pgv_lang["analytics_config"]		= "Analítica web";
$pgv_lang["google_analytics"]		= "Analítica Google";
$pgv_lang["USE_GOOGLE_ANALYTICS"]	= "Activar Analítica Google?";
$pgv_lang["PGV_GOOGLE_ANALYTICS"]	= "Número de compte de Analítica Google";
$pgv_lang["piwik_analytics"]		= "Analítica Matomo";
$pgv_lang["USE_PIWIK_ANALYTICS"]	= "Activar Analítica Matomo?";
$pgv_lang["PGV_PIWIK_URL"]			= "URL del servidor Analítica Matomo";
$pgv_lang["PGV_PIWIK_SITE"]			= "Número de lloc a Analítica Matomo";
$pgv_lang["clustrmaps_analytics"]	= "Analítica ClustrMaps";
$pgv_lang["USE_CLUSTRMAPS_ANALYTICS"] = "Activar Analítica ClustrMaps?";
$pgv_lang["PGV_CLUSTRMAPS_SITE"] 	= "URL de PhpGedView";
$pgv_lang["PGV_CLUSTRMAPS_SERVER"] 	= "número de servidor de ClustrMaps";

$pgv_lang["module_admin"]			= "Mòdul d'administració";
$pgv_lang["mod_admin_installed"]	= "Mòduls instal·lats";
$pgv_lang["mod_admin_tabs"]			= "Administrarr etiquetes";
$pgv_lang["mod_admin_menus"]		= "Administrar Menús";
$pgv_lang["mod_admin_intro"]		= "A continuació es mostra la llista de tots els mòduls instal.lats en aquesta instància de PhpGedView. La instal·lació dels mòduls es fa posant-los al directori <i>modules</i>. Aquí es podeu establir el nivell d'accés per GEDCOM per a cada mòdul. Si un mòdul inclou les etiquetes de pàgines personalsl o menús de la barra de menú, també pot establir-s'hi el nivell d'accés i l'ordre de cada un d'ells";
$pgv_lang["mod_admin_active"]		= "Actiu";
$pgv_lang["mod_admin_name"]			= "Nom del mòdul";
$pgv_lang["mod_admin_description"]	= "Descripció";
$pgv_lang["mod_admin_version"]		= "Versió / PGV";
$pgv_lang["mod_admin_hastab"]		= "Etiqueta?";
$pgv_lang["mod_admin_hasmenu"]		= "Menú?";
$pgv_lang["mod_admin_access_level"]	= "Nivell d'accés";
$pgv_lang["mod_admin_order"]		= "Ordre";
$pgv_lang["mod_admin_config"]		= "Modificació de paràmetres";
$pgv_lang["mod_admin_settings"]		= "Paràmetres del Mòdul de Configuració";
$pgv_lang["ret_module_admin"]		= "Torna a la pàgina del Mòdul d'Adminsitració";
$pgv_lang["ret_admin"]				= "Torna a la pàgina d'Administració";

$pgv_lang["enter_comment"]	= "Podeu introduir un comentari aquí.";
$pgv_lang["upload_a_gedcom"] 		= "Puja un arxiu GEDCOM";
$pgv_lang["start_entering"] 		= "Comenceu a introduir dades";
$pgv_lang["add_gedcom_from_path"] 	= "Afegiu un GEDCOM des d'una ubicació d'arxiu";
$pgv_lang["get_started_instructions"]	= "Per començar a utilitzar el PhpGedView escolliu una d'aquestes opcions ";

$pgv_lang["admin_users_exists"]		= "Els següents usuaris administradors ja existeixen:";
$pgv_lang["install_step_1"] = "Comproveu l'entorn";
$pgv_lang["install_step_2"] = "Connexió a la base de dades";
$pgv_lang["install_step_3"] = "Creeu les Taules";
$pgv_lang["install_step_4"] = "Configuració del lloc";
$pgv_lang["install_step_5"] = "Idiomes";
$pgv_lang["install_step_6"] = "Deseu la configuració";
$pgv_lang["install_step_7"] = "Creeu un usuari administrador";
$pgv_lang["install_wizard"] = "Assistent d'instal·lació";
$pgv_lang["basic_site_config"] = "Configuració bàsica";
$pgv_lang["adv_site_config"] = "Configuració avançada";
$pgv_lang["config_not_saved"] = "* La vostra configuració no es desarà fins al pas 6";
$pgv_lang["download_config"] = "Descarregueu-vos el config.php";
$pgv_lang["site_unavailable"] = "El lloc no està disponible";
$pgv_lang["to_manage_users"] = "Per gestionar usuaris, feu servir la pàgina <a href=\"useradmin.php\">administració d'usuaris</a>.";
$pgv_lang["db_tables_created"] = "S'han generat correctamen les Taules de la Base de dades";
$pgv_lang["config_saved"] = "S'ha desat correctament la configuració";
$pgv_lang["checking_errors"]		= "Cercant errors...";
$pgv_lang["checking_php_version"]		= "Comprovació requereix PHP versió:";
$pgv_lang["failed"]		= "Error";
$pgv_lang["pgv_requires_version"]		= "El PhpGedView requereix la versió de PHP #PGV_REQUIRED_PHP_VERSION# o superior.";
$pgv_lang["using_php_version"]		= "Esteu utilitzant la versió de PHP #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]		= "Comprovació del suport mínim per a la base de dades:";
$pgv_lang["no_db_extensions"]		= "No disposeu de cap de les extensions suportades per la base de dades.";
$pgv_lang["db_ext_support"]		= "Disposeu de suport  #DBEXT#";
$pgv_lang["checking_config.php"]		= "Comprovant <i>config.php</i>:";
$pgv_lang["config.php_missing"]		= "No s'ha trobat el fitxer <i>config.php</i>.";
$pgv_lang["config.php_missing_instr"]		= "Aquest assistent d'instal·lació no podrà desar la vostra configuració al fitxer <i>config.php</i>. Podeu fer una còpia del fitxer <i>config.dist</i> i canviar-li el nom pel de <i>config.php</i>. Com a alternativa, després de completar aquest assistent, tindreu l'opció de descarregar la configuració i pujar el fitxer <i>config.php</i> resultant.";
$pgv_lang["config.php_not_writable"]		= "El fitxer <i>config.php</i> no té permís d'escriptura.";
$pgv_lang["config.php_not_writable_instr"]		= "Aquest assistent d'instal·lació no podrà desar la vostra configuració al fitxer <i>config.php</i>. Podeu establir permisos d'escriptura sobre l'arxiu, o després de completar aquest assistent, tindreu l'opció de descarregar la configuració i pujar el fitxer <i>config.php</i> resultant.";
$pgv_lang["passed"]		= "Aprovat";
$pgv_lang["config.php_writable"]		= "el fitxer <i>config.php</i> és present i amb permís d'escriptura.";
$pgv_lang["checking_warnings"]		= "Comprovació de les advertències ...";
$pgv_lang["checking_timelimit"]		= "Comprovació de la capacitat de canviar el límit de temps:";
$pgv_lang["cannot_change_timelimit"]		= "No es pot canviar el límit de temps.";
$pgv_lang["cannot_change_timelimit_instr"]		= "És possible que no pugueu executar totes les funcions en les grans bases de dades amb moltes persones.";
$pgv_lang["current_max_timelimit"]		= "El vostre límit de temps és";
$pgv_lang["check_memlimit"]		= "Comprovació de la capacitat de canviar el límit de memòria:";
$pgv_lang["cannot_change_memlimit"]		= "No es pot canviar límit de memòria.";
$pgv_lang["cannot_change_memlimit_instr"]		= "És possible que no pugueu executar totes les funcions en les grans bases de dades amb moltes persones.";
$pgv_lang["current_max_memlimit"]		= "El vostre límit de memòria actual és";
$pgv_lang["check_upload"]		= "Comprovació de la capacitat per pujar arxius:";
$pgv_lang["current_max_upload"]		= "El volum màxim de càrrega per a un arxiu és de:";
$pgv_lang["check_gd"]		= "Comprovació de la biblioteca d'imatges GD:";
$pgv_lang["cannot_use_gd"]		= "No disposeu de la biblioteca d'imatges GD. No podreu generar automàticament les miniatures d'imatges.";
$pgv_lang["check_sax"]		= "Comprovació de la biblioeca SAX XML:";
$pgv_lang["cannot_use_sax"]		= "No disposeu de la biblioteca SAX XML. No podreu executar qualsevol informe o alguna altra de les funcions auxiliars.";
$pgv_lang["check_dom"]		= "Comprovació de la biblioteca XML DOM:";
$pgv_lang["cannot_use_dom"]		= "No disposeu de la biblioteca DOM XML. No podreu exportar a XML.";
$pgv_lang["check_calendar"]		= "Comprovació de la llibreria de Calendari Avançat:";
$pgv_lang["cannot_use_calendar"]		= "No disposeu de suport per al calendari avançat. No podreu executar algunes funcions avançades d'agenda.";
$pgv_lang["warnings_passed"]		= "S'han superat tots els controls d'advertiment.";
$pgv_lang["warning_instr"]		= "Si no heu superat algun dels advertiments, encara és possible executar el PhpGedView en aquest servidor. Tanmateix, alguna funcionalitat pot desactivar-se o pot experimentar un mal rendiment.";

$pgv_lang["associated_files"]		= "Fitxers associats";
$pgv_lang["remove_all_files"]		= "Elimina els fitxers no essencials";
$pgv_lang["warn_file_delete"]		= "Aquest fitxer conté important informació com paràmetres d'idioma o canvis de dades pendents. Esteu segur que cal eliminar-lo?";
$pgv_lang["deleted_files"]          = "Fitxers eliminats:";
$pgv_lang["index_dir_cleanup_inst"]	= "Per eliminar un fitxer o sotsdirectori des del directori Índex, arrossegueu-lo a la paperera o seleccioneu-lo a la seva casella. Per procedir a l'eliminació efectiva polseu el botó d'eliminar.<br /><ul><li>Els fitxers marcats amb <img src=\"./images/RESN_confidential.gif\" alt=\"\" /> son necessaris per una correcta operatòria  i no poden eliminar-se.</li><li>El marcats amb <img src=\"./images/RESN_locked.gif\" alt=\"\" /> contenen paràmetres importants o canvis pendents i solament podeu eliminar-los si esteu ben segur del que feu.</li></ul>";
$pgv_lang["index_dir_cleanup"]		= "Neteja del directori Índex";
$pgv_lang["clear_cache_succes"]		= "S'han eliminat els fitxers cau.";
$pgv_lang["clear_cache"]			= "Neteja els fitxers cau";
$pgv_lang["sanity_err0"]			= "Errors:";
$pgv_lang["sanity_err1"]			= "Us cal disposar de la versió de PHP #PGV_REQUIRED_PHP_VERSION#  o superior.";
$pgv_lang["sanity_err2"]			= "El fitxer o directori <i>#GLOBALS[whichFile]#</i> no hi és. Reviseu si existeix o té un altre nom i té habilitada la propietat de lectura.";
$pgv_lang["sanity_err3"]			= "No s'ha pogut carregar correctament el fitxer <i>#GLOBALS[whichFile]#</i>. Torneu-ho a provar.";
$pgv_lang["sanity_err4"]			= "El fitxer <i>config.php</i> és malmès.";
$pgv_lang["sanity_err5"]			= "El fitxer <i>config.php</i> és de només lectura, no s'hi pot escriure.";
$pgv_lang["sanity_err6"]			= "El directori <i>#GLOBALS[INDEX_DIRECTORY]#</i> és de només lectura, no pot escriure-s'hi.";
$pgv_lang["sanity_warn0"]			= "Atenció!";
$pgv_lang["sanity_warn1"]			= "El directori <i>#GLOBALS[MEDIA_DIRECTORY]#</i> és de només lectura i no pot escriure-s'hi. No podeu carregar fitxers multimèdia o generar miniatures al PhpGedView.";
$pgv_lang["sanity_warn2"]			= "El directori <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> és de només lectura, no pot escriure-s'hi. No podeu carregar fitxers multimèdia o generar miniatures al PhpGedView.";
$pgv_lang["sanity_warn3"]			= "Manca llibreria de gestió d'imatges GD. El PhpGedView pot continuar funcionant però algunes habilitats com generar miniatures i el diagrama de cercle no funcionaran. Llegiu <a href='https://www.php.net/manual/en/ref.image.php' target='_blank'>https://www.php.net/manual/en/ref.image.php</a> per més informació.";
$pgv_lang["sanity_warn4"]			= "Manca la llibreria d'anàlisi XML. El PhpGedView pot continuar funcionant però algunes habilitats com la generació de llistats i serveis web no funcionaran. Llegiu <a href='https://www.php.net/manual/en/ref.xml.php' target='_blank'>https://www.php.net/manual/en/ref.xml.php</a> per més informació.";
$pgv_lang["sanity_warn5"]			= "Manca la llibreria DOM XML. El PhpGedView pot continuar funcionant però algunes habilitats com Gramps Export del cistell genealògic i serveis web no funcionaran. Llegiu <a href='https://www.php.net/manual/en/refs.xml.php' target='_blank'>https://www.php.net/manual/en/refs.xml.php</a> per més informació.";
$pgv_lang["sanity_warn6"]			= "Manca la llibreria de calendari. El PhpGedView pot continuar funcionant però algunes habilitats com la conversió a altres calendaris com l'Hebreu o el Francès, no. Tanmateix no és essencial per al PhpGedView. Llegiu <a href='https://www.php.net/manual/en/ref.calendar.php' target='_blank'>https://www.php.net/manual/en/ref.calendar.php</a> per més informació.";
$pgv_lang["ip_address"]				= "Adreça IP";
$pgv_lang["date_time"]				= "Dia i hora";
$pgv_lang["log_message"]			= "Missatge de registre";
$pgv_lang["searchtype"]				= "Tipus de cerca";
$pgv_lang["query"]					= "Pregunta";
$pgv_lang["user"]					= "Usuari amb accés";
$pgv_lang["editors"]				= "Editors";
$pgv_lang["gedcom_admins"]			= "Administradors GEDCOM";
$pgv_lang["site_admins"]			= "Administradors del lloc";
$pgv_lang["nobody"]					= "Ningú";
$pgv_lang["step2"]					= "Pas 2 de 4:";
$pgv_lang["refresh"]				= "Refresca";
$pgv_lang["move_file_success"]		= "S'han canviat els fitxers multimèdia i les miniatures.";
$pgv_lang["media_folder_corrupt"]	= "S'ha malmès la carpeta de multimèdia.";
$pgv_lang["gedcom_deleted"] 		= "S'ha eliminat el fitxer GEDCOM <b>#GED#</b>.";
$pgv_lang["gedadmin"]				= "Administrador GEDCOM";
$pgv_lang["full_name"]				= "Nom complet";
$pgv_lang["error_header"]			= "No hi ha el fitxer GEDCOM, <b>#GEDCOM#</b> al lloc especificat.";
$pgv_lang["confirm_delete_file"]	= "Esteu segur que cal eliminar aquest fitxer?";
$pgv_lang["confirm_folder_delete"] 	= "Esteu segur d'eliminar aquesta carpeta?";
$pgv_lang["confirm_remove_links"]	= "Esteu segur d'eliminar tots els enllaços a aquest objecte?";
$pgv_lang["PRIV_PUBLIC"]			= "Mostra-ho públicament";
$pgv_lang["PRIV_USER"]				= "Mostra-ho solament a usuaris amb accés";
$pgv_lang["PRIV_NONE"]				= "Mostra-ho solament als administradors";
$pgv_lang["PRIV_HIDE"]				= "Oculta-ho fins i tot als administrador";
$pgv_lang["manage_gedcoms"] 		= "Gestió de GEDCOMs";
$pgv_lang["keep_media"]				= "Conserva els enllaços de multimèdia";
$pgv_lang["current_links"]			= "Enllaços:";
$pgv_lang["add_more_links"]			= "Afegiu enllaços";
$pgv_lang["enter_pid_or_name"]		= "Entreu l'ID personal o be el nom";
$pgv_lang["set_links"]				= "Estableix vincles";
$pgv_lang["add_or_remove_links"]	= "Administra enllaços";

$pgv_lang["keep"]					= "Conserva";
$pgv_lang["unlink"]					= "Desvincula";
$pgv_lang["nav"]					= "Navegador";
$pgv_lang["fam_nav"]				= "Navegador familiar";
$pgv_lang["remove"]					= "Suprimeix";
$pgv_lang["keep_link"]				= "Manté l'enllaç a la llista";
$pgv_lang["remove_link"]			= "Elimina l'enllaç de la llista";
$pgv_lang["open_nav"]				= "Obre el navegador familiar";
$pgv_lang["link_exists"]			= "Aquest enllaç ja existeix";
$pgv_lang["id_not_valid"]			= "No és un ID vàlid de Persona, Família o Font";
$pgv_lang["add_fam_other_links"]	= "Afegeix família i cerca enllaços";
$pgv_lang["search_add_links"]		= "Cerqueu persones per afegir a la llista «Afegeix enllaços».";
$pgv_lang["enter_name"]				= "Introduïu un nom";
$pgv_lang["add_indi_to_link_list"]	= "Polseu el nom de la persona per afegir la persona a la llista «Afegeix enllaços».";
$pgv_lang["click_choose_head"]		= "Polseu #GLOBALS[tempStringHead]# per escollir algú com a cap de família.";
$pgv_lang["click_choose_head_text"]	= "Polseu aquí per triar una persona com a cap de família.";
$pgv_lang["head"]					= "Cap";
$pgv_lang["id_empty"]				= "En afegir un enllaç, el camp ID no pot estar buit.";
$pgv_lang["link_deleted"]			= "Eliminat l'enllaç a #GLOBALS[remLinkId]#";
$pgv_lang["link_added"]				= "Afegit l'enllaç a #GLOBALS[addLinkId]#";
$pgv_lang["no_update_CHANs"]		= "No actualitzis el registre CHAN (darrer canvi)";
$pgv_lang["no_CHANs_update"]		= "No s'actualitzaran els registres CHAN (darrer canvi)";

$pgv_lang["files_in_backup"]		= "Fitxers inclosos en aquesta còpia de seguretat";
$pgv_lang["no_thumb_dir"]			= " no existeix el directori de miniatures i no es pot crear.";
$pgv_lang["folder_created"]			= "S'ha creat el Directori";
$pgv_lang["folder_no_create"]		= "No es pot crear el directori";
$pgv_lang["security_no_create"]		= "Avís de seguretat: No es pot crear el fitxer <b><i>index.php</i></b> a ";
$pgv_lang["security_not_exist"]		= "Avís de seguretat: El fitxer <b><i>index.php</i></b> no existeix a  ";
$pgv_lang["label_delete"]           = "Elimina";
$pgv_lang["progress_bars_info"]		= "Les barres d'estat de sota, informen del progrés de la importació. Si s'excedeix el temps, la importació pararà i us demanarà que polseu el botó <b>continuar</b>. Si no veieu el botó <b>continuar</b>, torneu a començar amb un límit de temps més petit.";
$pgv_lang["upload_replacement"]		= "Carrega i substitueix";
$pgv_lang["about_user"]				= "Us cal crear primerament l'usuari administrador principal. Aquest usuari tindrà privilegis per modificar els fitxers de configuració, veure dades privades i crear altres usuaris.";
$pgv_lang["access"]					= "Accés";
$pgv_lang["add_gedcom"] 			= "Afegeix un GEDCOM";
$pgv_lang["add_new_gedcom"] 		= "Crea un nou GEDCOM";
$pgv_lang["add_new_language"]		= "Addició de fitxers i paràmetres d'un nou idioma";
$pgv_lang["add_user"]				= "Afegeix un nou usuari";
$pgv_lang["admin_gedcom"]			= "Administra el GEDCOM";
$pgv_lang["admin_gedcoms"]			= "Polseu aquí per administrar els GEDCOM";
$pgv_lang["admin_geds"]				= "Dades i administració GEDCOM";
$pgv_lang["admin_info"]				= "Informació";
$pgv_lang["admin_site"]				= "Administració del lloc";
$pgv_lang["admin_user_warnings"]	= "Un o més comptes d'usuari tenen avisos";
$pgv_lang["admin_verification_waiting"] 	= "Comptes d'usuari esperant la verificació de l'administrador";
$pgv_lang["administration"] 		= "Administració";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]	= "Permet passar d'un GEDCOM a un altre";
$pgv_lang["ALLOW_USER_THEMES"]		= "Permet als usuaris escollir la presentació preferida";
$pgv_lang["ansi_encoding_detected"] = "S'ha detectat un fitxer codificat en ANSI. El PhpGedView treballa millor amb fitxers codificats en UTF-8.";
$pgv_lang["ansi_to_utf8"]			= "Convertir aquest GEDCOM codificat en ANSI a UTF-8?";
$pgv_lang["apply_privacy"]			= "Aplica paràmetres de privadesa?";
$pgv_lang["back_useradmin"]			= "Torna a l'Administració d'usuaris";
$pgv_lang["bytes_read"] 			= "Bytes llegits:";
$pgv_lang["can_admin"]				= "L'usuari pot administrar";
$pgv_lang["can_edit"]				= "Nivell d'accés";
$pgv_lang["change_id"]				= "Canvia l'ID de la persona per:";
$pgv_lang["choose_priv"]			= "Escolliu el nivells de privadesa:";
$pgv_lang["cleanup_places"] 		= "Neteja de llocs";
$pgv_lang["cleanup_users"]			= "Neteja d'usuaris";
$pgv_lang["click_here_to_continue"]	= "Polseu aquí per continuar.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Polseu aquí per anar a l'arbre genealògic.";
$pgv_lang["comment"]				= "Comentaris d'administració sobre l'usuari";
$pgv_lang["comment_exp"]			= "Avisos d'administració en data";
$pgv_lang["config_help"]			= "Ajuda de configuració";
$pgv_lang["config_still_writable"]	= "El vostre fitxer <i>config.php</i> és encara editable. Per seguretat cal que li canvieu la propietat a sols lectura quan hagueu acabat la configuració del lloc.";
$pgv_lang["configuration"]			= "Configuració";
$pgv_lang["configure"]				= "Configura el PhpGedView";
$pgv_lang["configure_head"]			= "Configuració del PhpGedView";
$pgv_lang["confirm_gedcom_delete"]	= "Esteu segur que cal eliminar aquest GEDCOM";
$pgv_lang["confirm_user_delete"]	= "Esteu segur que cal eliminar l'usuari";
$pgv_lang["create_user"]			= "Crea usuari";
$pgv_lang["current_users"]			= "Llista d'usuaris";
$pgv_lang["daily"]					= "Diàriament";
$pgv_lang["dataset_exists"] 		= "Un fitxer GEDCOM amb idèntic nom ja ha sigut importat a la base de dades.";
$pgv_lang["unsync_warning"] 					= "Aquest fitxer GEDCOM <i>no</i> s'ha sincronitzat amb la base de dades. Pot ser que no contingui la última versió de les vostres dades. Per a reimportar (millor de la base de dades que del fitxer) us cal descarregar-la i recarregar-la.";
$pgv_lang["date_registered"]		= "Registrat el dia";
$pgv_lang["day_before_month"]		= "Dia abans del mes (DD MM AAAA)";
$pgv_lang["DEFAULT_GEDCOM"]			= "GEDCOM per defecte";
$pgv_lang["default_user"]			= "Crea l'usuari administrador per defecte.";
$pgv_lang["del_gedrights"]			= "GEDCOM inactiu, treu les referències d'usuari.";
$pgv_lang["del_proceed"]			= "Segueix";
$pgv_lang["del_unvera"]				= "Usuari no verificat per l'administrador.";
$pgv_lang["del_unveru"]				= "Usuari no verificat passats 7 dies.";
$pgv_lang["do_not_change"]			= "No canviïs";
$pgv_lang["download_gedcom"]		= "Descarrega el GEDCOM";
$pgv_lang["download_here"]			= "Polseu aquí per descarregar el fitxer.";
$pgv_lang["download_note"]			= "NOTA: Els GEDCOMs voluminosos poden requerir força temps de procés abans de descarregar-los. Si s'esgota el temps previst a PHP abans de que la descàrrega sigui total, us pot quedar un fitxer incomplet.<br /><br />Per estar segur de que el fitxer GEDCOM s'ha descarregat correctament, comproveu que la darrera línea sigui <b>0&nbsp;TRLR</b> o que la darrera línea d'un fitxer en format XML sigui <b>&lt;/database&gt;</b>. Aquests fitxers son de text; podeu fer servir un editor apropiat, però assegureu-vos de <u>no</u> desar els fitxers descarregats, sense revisar-los abans.<br /><br />En general cal el mateix temps per descarregar que per importar un fitxer GEDCOM.";
$pgv_lang["editaccount"]			= "Permet a aquest usuari editar la informació del seu compte";
$pgv_lang["empty_dataset"]			= "Voleu eliminar les dades antigues substituint-les per aquestes noves?";
$pgv_lang["empty_lines_detected"]	= "S'han detectat línees buides al vostre fitxer GEDCOM. Netejant-les s'eliminaran.";
$pgv_lang["enable_disable_lang"]	= "Configuració d'idiomes suportats";
$pgv_lang["error_ban_server"]       = "Adreça IP incorrecta.";
$pgv_lang["error_delete_person"]   	= "Us cal seleccionar la persona de la que vulgueu eliminar l'enllaç remot.";
$pgv_lang["error_header_write"] 	= "El fitxer GEDCOM, <b>#GEDCOM#</b>, és de només lectura, no pot escriure-s'hi. Reviseu-ne les propietat i drets d'accés.";
$pgv_lang["error_remove_site"]					= "No pot eliminar-se el servidor remot.";
$pgv_lang["error_remove_site_linked"]			= "El servidor remot no pot ser eliminat perquè la seva llista de connexions no és buida.";
$pgv_lang["error_remote_duplicate"]				= "Aquesta base de dades remota ja és a la llista com a <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]	= "Falla la verificació del lloc remot";
$pgv_lang["error_url_blank"]		= "No deixeu el títol del lloc remot o l'URL en blanc";
$pgv_lang["error_view_info"]       	= "Us cal seleccionar la persona quina informació voleu veure.";
$pgv_lang["example_date"]			= "Exemple de dada incorrecta del vostre GEDCOM:";
$pgv_lang["example_place"]			= "Exemple de lloc incorrecte del vostre GEDCOM:";
$pgv_lang["fbsql"]					= "FrontBase";
$pgv_lang["found_record"]			= "Registre localitzat";
$pgv_lang["ged_download"]			= "Descarrega";
$pgv_lang["ged_import"] 			= "Importa";
$pgv_lang["ged_export"] 						= "Exporta";
$pgv_lang["ged_check"] 				= "Comprova";
$pgv_lang["gedcom_adm_head"]		= "Administració GEDCOM";
$pgv_lang["gedcom_config_write_error"]	= "E R R O R !!!<br />No pot escriure's al fitxer <i>#GLOBALS[whichFile]#</i>. Reviseu-ne les propietats.";
$pgv_lang["gedcom_downloadable"] 	= "Aquest fitxer GEDCOM pot descarregar-se des d'Internet!<br />Llegiu la secció de SEGURETAT del fitxer <a href=\"readme.txt\"><b>readme.txt</b></a> per solucionar-ho";
$pgv_lang["gedcom_file"]			= "Fitxer GEDCOM:";
$pgv_lang["gedcom_not_imported"]	= "Aquest GEDCOM encara no s'ha importat.";
$pgv_lang["ibase"]					= "InterBase";
$pgv_lang["ifx"]					= "Informix";
$pgv_lang["img_admin_settings"] 	= "Editeu la configuració de manipulació d'imatges";
$pgv_lang["autoContinue"]						= "Polsa automàticament el botó «Continuar»";
$pgv_lang["import_complete"]		= "Importació completada";
$pgv_lang["import_options"]			= "Opcions d'importació";
$pgv_lang["import_progress"]		= "Progrés de la importació...";
$pgv_lang["import_statistics"]		= "Estadístiques d'importació";
$pgv_lang["import_time_exceeded"]	= "El temps d'execució s'ha superat. Polseu a sota al botó <b>continuar</b> per continuar important el fitxer GEDCOM.";
$pgv_lang["inc_languages"]			= " Idiomes";
$pgv_lang["INDEX_DIRECTORY"]		= "Directori de fitxers índex";
$pgv_lang["invalid_dates"]			= "Detectats formats de data incorrectes, netejant-los seran canviats al format de DD MMM AAAA (p.ex. 1 GEN 2004).";
$pgv_lang["BOM_detected"] 						= "S'ha detectat una Marca d'Ordre de Bytes (en anglès BOM) al començament del fitxer. Netejant-lo aquest caràcter especial s'eliminarà";
$pgv_lang["invalid_header"] 		= "Detectades línees abans de la capçalera del GEDCOM <b>0&nbsp;HEAD</b>. Netejant-les s'eliminaran.";
$pgv_lang["label_added_servers"]	= "Servidors remots";
$pgv_lang["label_banned_servers"]  	= "Rebutgeu llocs";
$pgv_lang["label_families"]         = "Famílies";
$pgv_lang["label_gedcom_id2"]       = "ID de la Base de Dades:";
$pgv_lang["label_individuals"]      = "Persones";
$pgv_lang["label_manual_search_engines"]	= "Entreu manualment Motors de Recerca";
$pgv_lang["label_new_server"]     	= "Habiliteu un nou servidor";
$pgv_lang["label_password_id"]		= "Contrasenya";
$pgv_lang["label_server_info"]     	= "Totes les persones i famílies estan enllaçades remotament mitjançant el lloc:";
$pgv_lang["label_server_url"]       = "URL del lloc/IP";
$pgv_lang["label_username_id"]		= "Nom d'usuari";
$pgv_lang["label_view_local"]       = "Mostra la informació local de la persona";
$pgv_lang["label_view_remote"]     	= "Mostrar la informació remota de la persona";
$pgv_lang["LANG_SELECTION"] 		= "Idiomes suportats";
$pgv_lang["LANGUAGE_DEFAULT"]		= "No heu configurat els idiomes que el vostre lloc podrà suportar.<br />El PhpGedView farà servir els seus propis per defecte.";
$pgv_lang["last_login"]				= "Darrer accés";
$pgv_lang["lasttab"]				= "Mateix que el darrer cop";
$pgv_lang["leave_blank"]			= "Deixeu la contrasenya en blanc si voleu conservar l'actual.";
$pgv_lang["link_manage_servers"]   	= "Gestió de llocs remots";
$pgv_lang["logfile_content"]		= "Contingut del fitxer de registre";
$pgv_lang["macfile_detected"]		= "S'ha detectat un fitxer tipus Macintosh. Netejant-lo es convertirà a format DOS.";
$pgv_lang["mailto"]					= "Enllaç per correu electrònic";
$pgv_lang["merge_records"]			= "Refosa de registres";
$pgv_lang["message_to_all"]			= "Envia missatge a tot els usuaris";
$pgv_lang["messaging"]				= "Missatgeria interna PhpGedView";
$pgv_lang["messaging2"]				= "Missatgeria interna amb correu electrònic";
$pgv_lang["messaging3"]				= "Correu electrònic";
$pgv_lang["month_before_day"]		= "Mes abans del dia (MM DD AAAA)";
$pgv_lang["monthly"]				= "Mensualment";
$pgv_lang["msql"]					= "Mini SQL";
$pgv_lang["mssql"]					= "Servidor SQL Microsoft";
$pgv_lang["mysql"]					= "MySQL";
$pgv_lang["never"]					= "Mai";
$pgv_lang["no_logs"]				= "Desactiva el registre";
$pgv_lang["no_messaging"]			= "Sense forma de contacte";
$pgv_lang["oci8"]					= "Oracle 7+";
$pgv_lang["page_views"]				= "&nbsp;&nbsp;mostra pàgina a&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "Executant la validació del GEDCOM...";
$pgv_lang["pgsql"]					= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] = "Error!!! No pot escriure's al fitxer de configuració del PhpGedView. Reviseu les propietats dels fitxer i del directori i torneu-hi.";
$pgv_lang["PGV_MEMORY_LIMIT"]		= "Llindar de memòria";
$pgv_lang["PGV_SESSION_SAVE_PATH"]	= "Camí per desar les Sessions";
$pgv_lang["PGV_SESSION_TIME"]		= "Temps de sessió excedit";
$pgv_lang["PGV_SIMPLE_MAIL"] 		= "Fes servir capçaleres simples de correu pels correus electrònics externs";
$pgv_lang["PGV_SMTP_ACTIVE"] 					= "Utiltiza SMTP par a l'enviamentr del correu extern";
$pgv_lang["PGV_SMTP_DEBUG"]						= "Errors de PHPMailer";
$pgv_lang["PGV_SMTP_DEBUG_OPTION0"]				= "No hi ha missatges d'error";
$pgv_lang["PGV_SMTP_DEBUG_OPTION1"]				= "Missatges del programa client";
$pgv_lang["PGV_SMTP_DEBUG_OPTION2"]				= "Missatges del programa client i del servidor";
$pgv_lang["PGV_SMTP_DEBUG_OPTION3"]				= "Missatges del programa client i del servidor més l’estat de la connexió";
$pgv_lang["PGV_SMTP_DEBUG_OPTION4"]				= "Sortida de dades detallades, poques vegades necessària";
$pgv_lang["PGV_SMTP_HOST"] 						= "Nom del servidor de correu electrònic sortint (SMTP)";
$pgv_lang["PGV_SMTP_HELO"] 						= "Nom del domini per a l'enviament";
$pgv_lang["PGV_SMTP_PORT"] 						= "Port SMTP";
$pgv_lang["PGV_SMTP_AUTH"] 						= "Empreu identificador i contrasenya";
$pgv_lang["PGV_SMTP_AUTH_USER"] 				= "Nom d'usuari";
$pgv_lang["PGV_SMTP_AUTH_PASS"] 				= "Contrasenya";
$pgv_lang["PGV_SMTP_SSL"] 						= "Connexió de seguretat";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Nom del remitent";
$pgv_lang["PGV_STORE_MESSAGES"]		= "Permet desar els missatges en línea";
$pgv_lang["phpinfo"]				= "Informació PHP";
$pgv_lang["place_cleanup_detected"] = "Detectada codificació incorrecta de llocs. Cal arranjar-ho.";
$pgv_lang["please_be_patient"]		= "Espereu-vos si us plau";
$pgv_lang["privileges"]				= "Privilegis";
$pgv_lang["reading_file"]			= "Llegint el fitxer GEDCOM";
$pgv_lang["readme_documentation"]	= "Documentació 'Llegiu-me'(Readme)";
$pgv_lang["remove_ip"] 				= "Elimina l'IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 	= "Cal un administrador per autoritzar el registre d'un nou usuari";
$pgv_lang["review_readme"]			= "Cal que repasseu el fitxer <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> abans de continuar amb la configuració del PhpGedView.";
$pgv_lang["seconds"]				= "&nbsp;&nbsp;segons";
$pgv_lang["select_an_option"]		= "Seleccioneu una de les opcions següents:";
$pgv_lang["SERVER_URL"]				= "URL PhpGedView";
$pgv_lang["show_phpinfo"]			= "Mostra la pàgina d'informació PHP";
$pgv_lang["siteadmin"]				= "Administradors del lloc";
$pgv_lang["sqlite"]					= "SQLite";
$pgv_lang["sybase"]					= "Sybase";
$pgv_lang["sync_gedcom"]			= "Sincronitza les dades d'usuari amb les del GEDCOM";
$pgv_lang["system_time"]			= "Hora actual del servidor:";
$pgv_lang["user_time"]				= "Hora actual de l'usuari:";
$pgv_lang["TBLPREFIX"]				= "Prefix de noms de taules de base de dades";
$pgv_lang["themecustomization"]		= "Personalització de la presentació";
$pgv_lang["time_limit"]				= "Temps límit:";
$pgv_lang["title_manage_servers"]   = "Gestió de llocs remots";
$pgv_lang["title_view_conns"]       = "Mostra connexions";
$pgv_lang["translator_tools"]		= "Eines de traducció";
$pgv_lang["update_myaccount"]		= "Modifica el meu Compte";
$pgv_lang["update_user"]			= "Modifica el compte de l'usuari";
$pgv_lang["upload_gedcom"]			= "Carrega un GEDCOM";
$pgv_lang["USE_REGISTRATION_MODULE"]	= "Permet als visitants demanar enregistrar-se";
$pgv_lang["user_auto_accept"]		= "Accepta automàticament els canvis fets per aquest usuari";
$pgv_lang["user_contact_method"]	= "Mètode preferit de contacte";
$pgv_lang["user_create_error"]		= "Impossible afegir l'usuari. Torneu-ho a provar.";
$pgv_lang["user_created"]			= "S'ha creat correctament l'usuari.";
$pgv_lang["user_default_tab"]		= "Format per defecte de la pàgina «Dades personals»";
$pgv_lang["user_path_length"]		= "Màxima llargària de privadesa de parentiu";
$pgv_lang["user_relationship_priv"]	= "Accés limitat a parents";
$pgv_lang["users_admin"]			= "Administradors del lloc";
$pgv_lang["users_gedadmin"]			= "Administradors del GEDCOM";
$pgv_lang["users_total"]			= "Nombre total d'usuaris";
$pgv_lang["users_unver"]			= "No verificats per l'usuari";
$pgv_lang["users_unver_admin"]		= "No verificats per l'administrador";
$pgv_lang["usr_deleted"]			= "Usuaris eliminats: ";
$pgv_lang["usr_idle"]				= "Nombre de mesos d'ençà el darrer accés per a que un compte d'usuari es consideri inactiu: ";
$pgv_lang["usr_idle_toolong"]		= "El compte de l'usuari ha restat inactiu molt de temps: ";
$pgv_lang["usr_no_cleanup"]			= "No hi ha res a netejar";
$pgv_lang["usr_unset_gedcomid"]		= "Desactiva l'ID GEDCOM per ";
$pgv_lang["usr_unset_rights"]		= "Desactiva els drets sobre el GEDCOM per a ";
$pgv_lang["usr_unset_rootid"]		= "Desactiva l'ID arrel per a ";
$pgv_lang["valid_gedcom"]			= "S'ha detectat un GEDCOM vàlid. No cal netejar-lo.";
$pgv_lang["validate_gedcom"]		= "Validant el GEDCOM";
$pgv_lang["verified"]				= "Usuari autoconfirmat";
$pgv_lang["verified_by_admin"]		= "Usuari autoritzat per l'administrador";
$pgv_lang["verify_gedcom"]			= "Verifica el GEDCOM";
$pgv_lang["verify_upload_instructions"]	= "S'ha trobat un fitxer GEDCOM amb el mateix nom. Si trieu continuar, l'antic serà substituït pel que haureu carregat i el procés d'importació s'iniciarà. Si escolliu cancel·lar, es mantindrà inalterat l'antic GEDCOM.";
$pgv_lang["view_changelog"]			= "Veure el fitxer changelog.txt";
$pgv_lang["view_logs"]				= "Mostra el fitxer de registre";
$pgv_lang["view_readme"]			= "Veure el fitxer readme.txt";
$pgv_lang["visibleonline"]			= "Visible a altres usuaris quan accediu";
$pgv_lang["visitor"]				= "Visitant";
$pgv_lang["warn_users"]				= "Usuaris amb avisos";
$pgv_lang["weekly"]					= "Setmanalment";
$pgv_lang["welcome_new"]			= "Benvingut al vostre lloc web PhpGedView.";
$pgv_lang["yearly"]					= "Anualment";
$pgv_lang["admin_OK_subject"]					= "Autorització de registre a #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";
$pgv_lang["admin_OK_message"]					= "L'Administrador del lloc PhpGedView #PGV_SERVER_NAME##PGV_SCRIPT_PATH# ha autoritzat la vostra comanda de disposar-hi de compte.\r\n\r\nAra podeu accedir-hi pel següent enllaç: #PGV_SERVER_NAME##PGV_SCRIPT_PATH#";

$pgv_lang["batch_update"]="Actualitzacions/modificacions massives del GEDCOM";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     			= "Comprovador Gedcom";
$pgv_lang["gedcheck_text"]			= "Aquest mòdul contrasta el format del fitxer GEDCOM amb les <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">Especificacions GEDCOM 5.5.1</a>. També comprova errors corrents de les dades.<br /><br />Fixeu-vos que hi ha força versions, extensions i variacions de les especificacions, però el que us ha d'importar son les senyalades com a  \"Crític\". L'explicació de tots el errors línea a línea podeu trobar-la a les especificacions. Mireu-ho abans de demanar ajuda.";
$pgv_lang["gedcheck_sync"] = "Les edicions realitzades a la base de dades no estan sincronitzades amb el fitxer #GLOBALS[ged]#. Llur contingut pot esdevenir obsolet. Podeu sincronitzar-lo mitjançant una <b>exportació <a \"#GLOBALS[ged_link]#\"></a></b>.";
$pgv_lang["gedcheck_nothing"] = "En aquest nivell no s'han localitzat errors.";
$pgv_lang["level"]        			= "Nivell";
$pgv_lang["critical"]     			= "Crític";
$pgv_lang["error"]        			= "Error";
$pgv_lang["warning"]      			= "Avís";
$pgv_lang["info"]         			= "Informació";
$pgv_lang["open_link"]    			= "Obrir enllaços des de";
$pgv_lang["same_win"]     			= "Mateixa pestanya/finestra";
$pgv_lang["new_win"]      			= "Nova pestanya/finestra";
$pgv_lang["context_lines"]			= "Línees contextuals al GEDCOM";
$pgv_lang["all_rec"]      			= "Tots els registres";
$pgv_lang["err_rec"]      			= "Registres amb errors";
$pgv_lang["missing"]      			= "perdut";
$pgv_lang["multiple"]     			= "múltiple";
$pgv_lang["invalid"]      			= "dades";
$pgv_lang["too_many"]     			= "massa";
$pgv_lang["too_few"]      			= "pocs";
$pgv_lang["no_link"]      			= "no es pot retroenllaçar";
$pgv_lang["data"]         			= "no vàlides";
$pgv_lang["see"]          			= "reviseu";
$pgv_lang["noref"]        			= "res fa referència a aquest registre";
$pgv_lang["tag"]          			= "etiqueta";
$pgv_lang["spacing"]      			= "espaiament";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Noms d'esdeveniments avançats";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Esdeveniments de noms de lloc avançats";
$pgv_lang["SURNAME_TRADITION"] = "Tradició dels cognoms";
$pgv_lang["tradition_spanish"]		= "Espanyola";
$pgv_lang["tradition_portuguese"]	= "Portuguesa";
$pgv_lang["tradition_icelandic"]	= "Islandesa";
$pgv_lang["tradition_paternal"]		= "Paternal";
$pgv_lang["tradition_polish"]		= "Polonès";
$pgv_lang["tradition_none"]			= "Cap";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"1 any";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# anys";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# anys";
$pgv_lang["elapsedMonth1"]	=	"1 mes";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# mesos";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# mesos";
$pgv_lang["elapsedDay1"]	=	"1 dia";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# dies";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# dies";
$pgv_lang["elapsedHour1"]	=	"1 hora";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# hores";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# hores";
$pgv_lang["elapsedMinute1"]	=	"1 minut";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minuts";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minuts";

$pgv_lang["elapsedAgo"]		=	"fa #pgv_lang[global_string1]#";

?>

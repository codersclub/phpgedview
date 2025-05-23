<?php
/**
 * French Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2011  PGV Development Team.  All rights reserved.
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
 * @subpackage Languages
 * @version $Id$
 */
if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
$pgv_lang["upload_a_gedcom"]            = "Charger un fichier GEDCOM";
$pgv_lang["start_entering"]             = "Commencer la saisie des données";
$pgv_lang["add_gedcom_from_path"]       = "Ajouter un GEDCOM à partir d'un emplacement de fichier";
$pgv_lang["get_started_instructions"]   = "Choisir une option ci-dessous pour commencer à utiliser PhpGedView";
$pgv_lang["admin_users_exists"]         = "Liste des comptes administrateurs:";
$pgv_lang["install_step_1"]             = "Vérifier la configuration du système";
$pgv_lang["install_step_2"]             = "Connexion à la base de données";
$pgv_lang["install_step_3"]             = "Création des tables";
$pgv_lang["install_step_4"]             = "Configuration du site";
$pgv_lang["install_step_5"]             = "Langues";
$pgv_lang["install_step_6"]             = "Enregistrer la configuration";
$pgv_lang["install_step_7"]             = "Créer un compte administrateur";
$pgv_lang["install_wizard"]             = "Assistant d'installation";
$pgv_lang["basic_site_config"]          = "Options de configuration";
$pgv_lang["adv_site_config"]            = "Options avancées";
$pgv_lang["config_not_saved"]           = "*Vos préférences ne seront pas enregistrées<br />avant l'étape 6";
$pgv_lang["download_config"]            = "Télécharger le fichier de configuration config.php";
$pgv_lang["site_unavailable"]           = "Le site est temporairement indisponible";
$pgv_lang["to_manage_users"]            = "Pour gérer les comptes utilisateurs, voir la page <a href=\"useradmin.php\">Gestion des utilisateurs</a>.";
$pgv_lang["db_tables_created"]          = "La création des tables a réussi";
$pgv_lang["config_saved"]               = "Configuration enregistrée";
$pgv_lang["checking_errors"]            = "Recherche d'anomalies...";
$pgv_lang["checking_php_version"]       = "Vérification de la version de PHP:";
$pgv_lang["failed"]                     = "Echec";
$pgv_lang["pgv_requires_version"]       = "Configuration minimale : PHP version #PGV_REQUIRED_PHP_VERSION# ou +";
$pgv_lang["using_php_version"]          = "Vous utilisez : PHP version #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]        = "Vérification de la présence d'un système de base de données:";
$pgv_lang["no_db_extensions"]           = "Aucune extension de base de données n'a été trouvée.";
$pgv_lang["db_ext_support"]             = "Extension #DBEXT# trouvée";
$pgv_lang["checking_config.php"]        = "Test du fichier config.php:";
$pgv_lang["config.php_missing"]         = "Fichier config.php absent.";
$pgv_lang["config.php_missing_instr"]   = "Cet assistant d'installation ne sera pas en mesure d'enregistrer vos paramètres dans le fichier config.php. Il vous est conseillé de faire une copie du fichier config.dist et de le renommer en config.php. De plus, après avoir complété cet assistant, vous aurez la possibilité de télécharger vos paramètres et de transférer le fichier config.php correspondant.";
$pgv_lang["config.php_not_writable"]    = "Impossible d'écrire dans le fichier config.php.";
$pgv_lang["config.php_not_writable_instr"]= "Cet assistant d'installation ne sera pas en mesure d'enregistrer vos paramètres dans le fichier config.php. Vous pouvez ou bien modifier les permissions de ce fichier afin de lui donner les droits d'écriture, ou alors après avoir terminé cet assistant, vous aurez la possibilité de télécharger vos paramètres et de transférer le fichier config.php correspondant.";
$pgv_lang["passed"]                     = "Passée";
$pgv_lang["config.php_writable"]        = "Fichier config.php OK.";
$pgv_lang["checking_warnings"]          = "Vérification des avertissements ...";
$pgv_lang["checking_timelimit"]         = "Vérification de la capacité à changer le temps limite:";
$pgv_lang["cannot_change_timelimit"]    = "Impossible de modifier le temps limite.";
$pgv_lang["cannot_change_timelimit_instr"]= "Vous ne serez pas en mesure d'exécuter toutes les fonctions sur des base de données importantes contenant beaucoup d'individus.";
$pgv_lang["current_max_timelimit"]      = "Votre temps limite maximal est";
$pgv_lang["check_memlimit"]             = "Vérification de la capacité à modifier la limitation de mémoire:";
$pgv_lang["cannot_change_memlimit"]     = "Impossible de modifier la limitation de mémoire.";
$pgv_lang["cannot_change_memlimit_instr"]= "Vous ne serez pas en mesure d'exécuter toutes les fonctions sur des base de données importantes contenant beaucoup d'individus.";
$pgv_lang["current_max_memlimit"]       = "Votre limite de mémoire est";
$pgv_lang["check_upload"]               = "Vérification de la capacité de télécharger des fichiers:";
$pgv_lang["current_max_upload"]         = "La taille maximale du fichier que pouvez transférer est de:";
$pgv_lang["check_gd"]                   = "Vérification de l'existence de la bibliothèque GD image:";
$pgv_lang["cannot_use_gd"]              = "Vous n'avez pas la bibliothèque GD image. Vous ne pourrez pas créer automatiquement des vignettes d'images.";
$pgv_lang["check_sax"]                  = "Vérification de l'existance de la bibliothèque XML SAX:";
$pgv_lang["cannot_use_sax"]             = "Vous n'avez pas la bibliothèque SAX XML. Vous ne serez pas en mesure de faire des rapports ou d'utiliser d'autres fonctions auxiliaires.";
$pgv_lang["check_dom"]                  = "Vérification de l'existence de la bibliothèque DOM XML:";
$pgv_lang["cannot_use_dom"]             = "Vous n'avez pas la bibliothèque DOM XML . Vous ne serez pas en mesure d'exporter du XML.";
$pgv_lang["check_calendar"]             = "Vérification de l'existence de la bibliothèque de Calendrier avancé:";
$pgv_lang["cannot_use_calendar"]        = "Vous n'avez pas le calendrier avancé. Vous ne serez pas en mesure de faire appel à certaines fonctions du calendrier avancé.";
$pgv_lang["warnings_passed"]            = "Tous les avertissements possibles ont été vérifiés";
$pgv_lang["warning_instr"]              = "Si un avertissement apparaît, vous pourrez toujours faire fonctionner PhpGedView, mais quelques fonctionnalités pourront être inopérantes et vous pourrez obtenir des performances médiocres.";
$pgv_lang["associated_files"]           = "Fichiers associés :";
$pgv_lang["remove_all_files"]           = "Supprimer les fichiers non essentiels";
$pgv_lang["warn_file_delete"]           = "Ce fichier contient des informations importantes telles que les paramètres de la langue ou les informations en attente de modification. Êtes-vous certain de vouloir supprimer ce fichier ?";
$pgv_lang["deleted_files"]              = "Fichiers supprimés :";
$pgv_lang["index_dir_cleanup_inst"]     = "Pour supprimer un fichier ou un sous-répertoire du répertoire «index» il vous suffit de le déplacer dans la corbeille ou de cocher la case correspondante. Cliquez sur le bouton Supprimer pour supprimer définitivement les fichiers indiqués.<br /><br />Les fichiers qui sont identifiés par des <img src=\"./images/RESN_confidential.gif\" /> sont nécessaires pour le bon fonctionnement du logiciel et ne peuvent pas être supprimés.<br />Les fichiers qui sont identifiés par <img src=\"./images/RESN_locked.gif\" /> contiennent des paramètres importants ou des données en attente de modification et ne doivent être supprimés que si vous êtes certain de ce que vous faites.<br /><br />";
$pgv_lang["index_dir_cleanup"]          = "Nettoyer le répertoire «index»";
$pgv_lang["clear_cache_succes"]         = "Fichiers supprimés du cache.";
$pgv_lang["clear_cache"]                = "Vider le cache";
$pgv_lang["sanity_err0"]                = "Erreurs :";
$pgv_lang["sanity_err1"]                = "Ce programme nécessite PHP version 4.3 ou supérieure.";
$pgv_lang["sanity_err2"]                = "Fichier ou répertoire non trouvé : <i>#GLOBALS[whichFile]#</i>. Vérifier son existence et ses droits d'accès.";
$pgv_lang["sanity_err3"]                = "Fichier mal téléchargé : <i>#GLOBALS[whichFile]#</i>. Essayer à nouveau.";
$pgv_lang["sanity_err4"]                = "Fichier corrompu : <i>config.php</i>.";
$pgv_lang["sanity_err5"]                = "Impossible d'écrire dans le fichier : <i>config.php</i>.";
$pgv_lang["sanity_err6"]                = "Impossible d'écrire dans le répertoire : <i>#GLOBALS[INDEX_DIRECTORY]#</i>.";
$pgv_lang["sanity_warn0"]               = "Avertissements :";
$pgv_lang["sanity_warn1"]               = "Impossible d'écrire dans le répertoire : <i>#GLOBALS[MEDIA_DIRECTORY]#</i>. Vous ne pourrez pas charger d'objets MultiMédia.";
$pgv_lang["sanity_warn2"]               = "Impossible d'écrire dans le répertoire : <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i>. Vous ne pourrez pas créer les vignettes des objets MultiMédia.";
$pgv_lang["sanity_warn3"]               = "Librairie 'GD' absente. Il vous sera impossible d'utiliser certaines fonctionnalités : génération automatique des vignettes MultiMédia et le diagramme circulaire. Pour en savoir plus : <a href='http ://www.php.net/manual/fr/ref.image.php'>http ://www.php.net/manual/fr/ref.image.php</a>.";
$pgv_lang["sanity_warn4"]               = "Librairie 'XML Parser' absente. Il vous sera impossible d'utiliser certaines fonctionnalités : rapports, services web.... Pour en savoir plus : <a href='http ://www.php.net/manual/fr/ref.xml.php'>http ://www.php.net/manual/fr/ref.xml.php</a>.";
$pgv_lang["sanity_warn5"]               = "Librairie 'DOM XML' absente. Il vous sera impossible d'utiliser certaines fonctionnalités : export 'Gramps', téléchargements, services web... Pour en savoir plus : <a href='http ://www.php.net/manual/fr/ref.dom.php'>http ://www.php.net/manual/fr/ref.dom.php</a>.";
$pgv_lang["sanity_warn6"]               = "Librairie 'Calendar' absente. Il vous sera impossible d'utiliser certaines fonctionnalités : conversion de dates au format hébreu ou calendrier révolutionnaire. Pour en savoir plus : <a href='http ://www.php.net/manual/fr/ref.calendar.php'>http ://www.php.net/manual/fr/ref.calendar.php</a>.";
$pgv_lang["ip_address"]                 = "Adresse IP";
$pgv_lang["date_time"]                  = "Date et heure";
$pgv_lang["log_message"]                = "Message de log";
$pgv_lang["searchtype"]                 = "Type de recherche";
$pgv_lang["query"]                      = "Requête";
$pgv_lang["user"]                       = "Utilisateur authentifié";
$pgv_lang["thumbnail_deleted"]          = "Vignette supprimée.";
$pgv_lang["thumbnail_not_deleted"]      = "Ce fichier vignette est protégé et ne peut pas être supprimé sans autorisation.";
$pgv_lang["step2"]                      = "Étape 2/4 :";
$pgv_lang["refresh"]                    = "Rafraîchir";
$pgv_lang["move_file_success"]          = "Le fichier MultiMédia et la vignette ont été déplacés.";
$pgv_lang["media_folder_corrupt"]       = "Le dossier MultiMédia est corrompu.";
$pgv_lang["media_file_not_deleted"]     = "Ce fichier MultiMédia est protégé et ne peut pas être supprimé sans autorisation.";
$pgv_lang["gedcom_deleted"]             = "GEDCOM [#GED#] supprimé avec succès.";
$pgv_lang["gedadmin"]                   = "Administrateur GEDCOM";
$pgv_lang["full_name"]                  = "Prénom et nom";
$pgv_lang["error_header"]               = "Le fichier GEDCOM #GEDCOM# n'existe pas à l'emplacement indiqué.";
$pgv_lang["confirm_delete_file"]        = "Confirmez-vous la suppression de ce fichier ?";
$pgv_lang["confirm_folder_delete"]      = "Confirmez-vous la suppression de ce dossier ?";
$pgv_lang["confirm_remove_links"]       = "Confirmez-vous la suppression des liens vers cet objet ?";
$pgv_lang["PRIV_PUBLIC"]                = "Montrer à tout le monde";
$pgv_lang["PRIV_USER"]                  = "Montrer uniquement aux utilisateurs authentifiés";
$pgv_lang["PRIV_NONE"]                  = "Montrer uniquement à l'administrateur";
$pgv_lang["PRIV_HIDE"]                  = "Ne montrer à personne";
$pgv_lang["manage_gedcoms"]             = "Gérer les fichiers GEDCOM";
$pgv_lang["keep_media"]                 = "Conserver les liens MultiMédia";
$pgv_lang["files_in_backup"]            = "Liste des fichiers sauvegardés";
$pgv_lang["created_remotelinks"]        = "Table <i>Remotelinks</i> créée.";
$pgv_lang["created_remotelinks_fail"]   = "Impossible de créer la table <i>Remotelinks</i>";
$pgv_lang["created_indis"]              = "Table <i>Individus</i> créée.";
$pgv_lang["created_indis_fail"]         = "Impossible de créer la table <i>Individus</i>";
$pgv_lang["created_fams"]               = "Table <i>Familles</i> créée.";
$pgv_lang["created_fams_fail"]          = "Impossible de créer la table <i>Familles</i>";
$pgv_lang["created_sources"]            = "Table <i>Sources</i> créée.";
$pgv_lang["created_sources_fail"]       = "Impossible de créer la table <i>Sources</i>";
$pgv_lang["created_other"]              = "Table <i>Autres</i> créée.";
$pgv_lang["created_other_fail"]         = "Impossible de créer la table <i>Autres</i>";
$pgv_lang["created_places"]             = "Table <i>Lieux</i> créée.";
$pgv_lang["created_places_fail"]        = "Impossible de créer la table <i>Lieux</i>";
$pgv_lang["created_placelinks"]         = "Table <i>Place links</i> créée.";
$pgv_lang["created_placelinks_fail"]    = "Impossible de créer la table <i>Place links</i>";
$pgv_lang["created_media_fail"]         = "Impossible de créer la table <i>Media</i>";
$pgv_lang["created_media_mapping_fail"] = "Impossible de créer la table <i>Media mappings</i>";
$pgv_lang["no_thumb_dir"]               = " impossible de créer le dossier «thumbs»";
$pgv_lang["folder_created"]             = "Dossier créé";
$pgv_lang["folder_no_create"]           = "Impossible de créer le dossier";
$pgv_lang["security_no_create"]         = "Avertissement concernant la sécurité : fichier «index.php» absent du dossier ";
$pgv_lang["security_not_exist"]         = "Avertissement concernant la sécurité : impossible de créer le fichier «index.php» dans le dossier ";
$pgv_lang["label_delete"]               = "Supprimer";
$pgv_lang["progress_bars_info"]         = "La barre d'état vous indique la progression du chargement. En cas de dépassement du temps-limite, cliquer sur <b>Continuer</b>. Si le bouton <b>Continuer</b> n'apparaît pas, recommencer l'opération avec un temps-limite plus petit.";
$pgv_lang["upload_replacement"]         = "Écraser le fichier";
$pgv_lang["about_user"]                 = "Vous devez d'abord créer un <b>administrateur principal</b>. Cet utilisateur pourra mettre à jour les fichiers de configuration, consulter les données privées et accorder des droits à d'autres utilisateurs.";
$pgv_lang["access"]                     = "Droits pour Consulter";
$pgv_lang["add_gedcom"]                 = "Paramétrer un GEDCOM déjà envoyé sur le serveur";
$pgv_lang["add_new_gedcom"]             = "Créer un nouveau GEDCOM vide";
$pgv_lang["add_new_language"]           = "Ajouter fichiers et paramètres pour une nouvelle langue";
$pgv_lang["add_user"]                   = "Ajouter un nouvel utilisateur";
$pgv_lang["admin_gedcom"]               = "Administrateur GEDCOM";
$pgv_lang["admin_gedcoms"]              = "Gérer les fichiers GEDCOM.";
$pgv_lang["admin_geds"]                 = "Fichiers et données GEDCOM";
$pgv_lang["admin_info"]                 = "Informations";
$pgv_lang["admin_site"]                 = "Administration du site";
$pgv_lang["admin_user_warnings"]        = "Un ou plusieurs comptes ont un avertissement";
$pgv_lang["admin_verification_waiting"] = "Comptes en attente de vérification par l'administrateur";
$pgv_lang["administration"]             = "Administration";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]        = "Autoriser le choix du fichier GEDCOM";
$pgv_lang["ALLOW_REMEMBER_ME"]          = "Autoriser l'option «Rester connecté»";
$pgv_lang["ALLOW_USER_THEMES"]          = "Permettre aux utilisateurs de choisir leur propre thème";
$pgv_lang["ansi_encoding_detected"]     = "Ce fichier est au format ANSI. PhpGedView recommande le format UTF-8.";
$pgv_lang["ansi_to_utf8"]               = "Convertir ce fichier GEDCOM format ANSI en format UTF-8 ?";
$pgv_lang["apply_privacy"]              = "Appliquer les règles de restrictions d'accès ?";
$pgv_lang["back_useradmin"]             = "Retour au menu Administration";
$pgv_lang["bytes_read"]                 = "Octets lus";
$pgv_lang["can_admin"]                  = "Droits pour Administrer";
$pgv_lang["can_edit"]                   = "Droits pour Modifier";
$pgv_lang["change_id"]                  = "Changer le code individu en";
$pgv_lang["choose_priv"]                = "Niveau de restriction :";
$pgv_lang["cleanup_places"]             = "Chargement des lieux";
$pgv_lang["cleanup_users"]              = "Suppression des utilisateurs";
$pgv_lang["click_here_to_continue"]     = "Continuer";
$pgv_lang["click_here_to_go_to_pedigree_tree"]= "Afficher l'arbre";
$pgv_lang["comment"]                    = "Avis de l'administrateur";
$pgv_lang["comment_exp"]                = "Avertissement de l'administrateur le";
$pgv_lang["config_help"]                = "Aide à la configuration";
$pgv_lang["config_still_writable"]      = "Votre fichier <i>config.php</i> est accessible en écriture. Par sécurité il faut le remettre en <b>lecture-seule</b> après toute modification.";
$pgv_lang["configuration"]              = "Configurer PhpGedView";
$pgv_lang["configure"]                  = "Configurer PhpGedView";
$pgv_lang["configure_head"]             = "Configuration PhpGedView";
$pgv_lang["confirm_gedcom_delete"]      = "Confirmez-vous la suppression de ce fichier GEDCOM ?";
$pgv_lang["confirm_user_delete"]        = "Confirmez-vous la suppression de cet utilisateur ?";
$pgv_lang["create_user"]                = "Ajouter un utilisateur";
$pgv_lang["current_users"]              = "Liste des utilisateurs";
$pgv_lang["daily"]                      = "Quotidien";
$pgv_lang["dataset_exists"]             = "Un fichier GEDCOM de même nom a déjà été introduit dans la base de données.";
$pgv_lang["unsync_warning"]             = "Ce fichier GEDCOM <em>n'est pas</em> synchronisé avec la base de données.  Il pourrait ne pas contenir la dernière version de vos données. Pour réimporter ces données depuis votre base de données plutôt qu'à partir du fichier, vous devriez télécharger puis transférer à nouveau votre fichier.";
$pgv_lang["date_registered"]            = "Déclaration";
$pgv_lang["day_before_month"]           = "Jour Mois Année (JJ MM AAAA)";
$pgv_lang["DEFAULT_GEDCOM"]             = "Fichier GEDCOM par défaut";
$pgv_lang["default_user"]               = "Création de l'administrateur par défaut.";
$pgv_lang["del_gedrights"]              = "Ce GEDCOM n'est plus actif, supprimez les références utilisateurs.";
$pgv_lang["del_proceed"]                = "Continuer";
$pgv_lang["del_unvera"]                 = "Compte non vérifié par un administrateur.";
$pgv_lang["del_unveru"]                 = "Compte non vérifié sous 7 jours.";
$pgv_lang["do_not_change"]              = "Ne pas modifier";
$pgv_lang["download_gedcom"]            = "Télécharger le fichier GEDCOM sur votre poste (download)";
$pgv_lang["download_here"]              = "Charger le fichier sur votre poste (<i>Download</i>).";
$pgv_lang["download_note"]              = "Note : un gros fichier GEDCOM risque d'être long à charger. Si PHP arrête le téléchargement avant la fin du fichier, votre fichier sera incomplet. Vérifier la présence de la ligne '0 TRLR' au bout du fichier. Généralement, les temps d'envoi (upload)  ou de réception (download) du fichier GEDCOM sont équivalents.";
$pgv_lang["editaccount"]                = "Utilisateur autorisé à modifier le compte";
$pgv_lang["empty_dataset"]              = "Voulez-vous vider le fichier ?";
$pgv_lang["empty_lines_detected"]       = "Lignes vides trouvées dans le fichier GEDCOM. Au chargement, elles seront supprimées.";
$pgv_lang["enable_disable_lang"]        = "Configurer les langues";
$pgv_lang["error_ban_server"]           = "Adresse IP invalide.";
$pgv_lang["error_delete_person"]        = "Vous devez choisir l'individu dont vous souhaitez supprimer le lien à distance.";
$pgv_lang["error_header_write"]         = "Le fichier GEDCOM #GEDCOM# est en lecture-seule. Vérifier les attributs et droits d'accès.";
$pgv_lang["error_remove_site"]          = "Le serveur distant ne peut pas être supprimé.";
$pgv_lang["error_remove_site_linked"]   = "Le serveur distant ne peut pas être supprimé parce que sa liste de connexions n'est pas vide.";
$pgv_lang["error_remote_duplicate"]     = "Cette base de données distante est déjà dans la liste <i> # GLOBALS [whichFile] # </ i>";
$pgv_lang["error_siteauth_failed"]      = "Échec d'authentification au site distant";
$pgv_lang["error_url_blank"]            = "S'il vous plaît, ne laissez pas vide l'adresse URL ou le titre du site distant";
$pgv_lang["error_view_info"]            = "Vous devez sélectionner l'individu dont vous souhaitez visualiser les informations.";
$pgv_lang["example_date"]               = "Exemple de date incorrecte dans votre GEDCOM";
$pgv_lang["example_place"]              = "Exemple de lieu incorrect dans votre GEDCOM";
$pgv_lang["fbsql"]                      = "FrontBase";
$pgv_lang["found_record"]               = "enregistrements trouvés";
$pgv_lang["ged_download"]               = "Télécharger (<i>Download</i>)";
$pgv_lang["ged_import"]                 = "Importer";
$pgv_lang["ged_export"]                 = "Exporter";
$pgv_lang["ged_check"]                  = "Vérifier";
$pgv_lang["gedcom_adm_head"]            = "Administration GEDCOM";
$pgv_lang["gedcom_config_write_error"]  = "E R R E U R ! ! !<br />Impossible d'écrire dans le fichier <i>#GLOBALS[whichFile]#</i>. Vérifier les droits d'accès.";
$pgv_lang["gedcom_downloadable"]        = "Ce fichier GEDCOM est téléchargeable par n'importe qui sur Internet!<br />Consultez la section SECURITY du fichier <a href=\"readme.txt\">readme.txt</a> pour corriger ce problème";
$pgv_lang["gedcom_file"]                = "Fichier GEDCOM";
$pgv_lang["gedcom_not_imported"]        = "Ce fichier GEDCOM n'a pas encore été chargé.";
$pgv_lang["ibase"]                      = "InterBase";
$pgv_lang["ifx"]                        = "Informix";
$pgv_lang["img_admin_settings"]         = "Configuration de l'éditeur d'images";
$pgv_lang["autoContinue"]               = "Cliquer automatiquement sur le bouton «Continuer»";
$pgv_lang["import_complete"]            = "Import terminé";
$pgv_lang["import_options"]             = "Options d'importation";
$pgv_lang["import_progress"]            = "Chargement en cours...";
$pgv_lang["import_statistics"]          = "Statistiques d'importation";
$pgv_lang["import_time_exceeded"]       = "Dépassement de la limite de temps d'exécution.";
$pgv_lang["inc_languages"]              = " Langues";
$pgv_lang["INDEX_DIRECTORY"]            = "Répertoire des fichiers «index»";
$pgv_lang["invalid_dates"]              = "Les dates de mauvais format seront transformées en JJ MMM AAAA (ie. 1 JAN 2004).";
$pgv_lang["BOM_detected"]               = "Marqueur Byte Order Mark (BOM) trouvé en début de fichier. Il sera supprimé.";
$pgv_lang["invalid_header"]             = "Lignes trouvées avant le premier marqueur GEDCOM (0 HEAD). Au chargement, elles seront supprimées.";
$pgv_lang["label_added_servers"]        = "Serveurs distants ajoutés";
$pgv_lang["label_banned_servers"]       = "Liste noire";
$pgv_lang["label_families"]             = "Familles";
$pgv_lang["label_gedcom_id2"]           = "ID base de données";
$pgv_lang["label_individuals"]          = "Individus";
$pgv_lang["label_manual_search_engines"]= "Marquez manuellement les moteurs de recherche avec leur adresse IP";
$pgv_lang["label_new_server"]           = "Ajouter un site";
$pgv_lang["label_password_id"]          = "Mot de passe";
$pgv_lang["label_server_info"]          = "Toutes les personnes qui sont liées à distance à votre site :";
$pgv_lang["label_server_url"]           = "URL ou adresse IP du site";
$pgv_lang["label_username_id"]          = "Utilisateur";
$pgv_lang["label_view_local"]           = "Voir info locale sur cette personne";
$pgv_lang["label_view_remote"]          = "Voir info distante sur cette personne";
$pgv_lang["LANG_SELECTION"]             = "Langues supportées";
$pgv_lang["LANGUAGE_DEFAULT"]           = "Vous n'avez pas configuré les options de langues.<br />PhpGedView va utiliser les valeurs par défaut.";
$pgv_lang["last_login"]                 = "Dernière visite";
$pgv_lang["lasttab"]                    = "Dernier onglet sélectionné";
$pgv_lang["leave_blank"]                = "Laisser le champ vide pour conserver le mot de passe existant.";
$pgv_lang["link_manage_servers"]        = "Gestion des sites";
$pgv_lang["logfile_content"]            = "Contenu du fichier journal";
$pgv_lang["macfile_detected"]           = "Fichier au format Macintosh. Au chargement, il sera converti au format DOS.";
$pgv_lang["mailto"]                     = "Lien Courriel [mailto :]";
$pgv_lang["merge_records"]              = "Fusionner les enregistrements";
$pgv_lang["message_to_all"]             = "Envoi d'un message à tous les utilisateurs";
$pgv_lang["messaging"]                  = "Messagerie interne PhpGedView";
$pgv_lang["messaging2"]                 = "Messagerie interne par courriel";
$pgv_lang["messaging3"]                 = "PhpGedView ne conserve pas les courriels envoyés";
$pgv_lang["month_before_day"]           = "Mois Jour Année (MM JJ AAAA)";
$pgv_lang["monthly"]                    = "Mensuel";
$pgv_lang["msql"]                       = "Mini SQL";
$pgv_lang["mssql"]                      = "Microsoft SQL Server";
$pgv_lang["mysql"]                      = "MySQL";
$pgv_lang["never"]                      = "Jamais";
$pgv_lang["no_logs"]                    = "Journal désactivé";
$pgv_lang["no_messaging"]               = "Messagerie désactivée";
$pgv_lang["oci8"]                       = "Oracle 7+";
$pgv_lang["page_views"]                 = "&nbsp;&nbsp;visites en &nbsp;&nbsp;";
$pgv_lang["performing_validation"]      = "Validation du fichier GEDCOM";
$pgv_lang["pgsql"]                      = "PostgreSQL";
$pgv_lang["pgv_config_write_error"]     = "Impossible d'écrire dans le fichier de configuration PhpGedView. Vérifier les droits d'accès et réessayer.";
$pgv_lang["PGV_MEMORY_LIMIT"]           = "Limite de mémoire";
$pgv_lang["pgv_registry"]               = "Voir les autres sites web utilisant PhpGedView";
$pgv_lang["PGV_SESSION_SAVE_PATH"]      = "Répertoire des sauvegardes de sessions";
$pgv_lang["PGV_SESSION_TIME"]           = "Limite de durée d'une session";
$pgv_lang["PGV_SIMPLE_MAIL"]            = "Utiliser un en-tête simple pour les courriels";
$pgv_lang["PGV_SMTP_ACTIVE"]            = "Utiliser SMTP pour envoyer des mails externes";
$pgv_lang["PGV_SMTP_HOST"]              = "Nom du serveur sortant (SMTP) ";
$pgv_lang["PGV_SMTP_HELO"]              = "Envoi de nom de domaine";
$pgv_lang["PGV_SMTP_PORT"]              = "Port SMTP";
$pgv_lang["PGV_SMTP_AUTH"]              = "Utilisez le nom et le mot de passe";
$pgv_lang["PGV_SMTP_AUTH_USER"]         = "Nom d'utilisateur";
$pgv_lang["PGV_SMTP_AUTH_PASS"]         = "Mot de passe";
$pgv_lang["PGV_SMTP_SSL"]               = "SSL requis";
$pgv_lang["PGV_SMTP_FROM_NAME"]         = "Nom de l'émetteur";
$pgv_lang["PGV_STORE_MESSAGES"]         = "Autoriser le stockage des messages sur le serveur";
$pgv_lang["phpinfo"]                    = "PHPInfo";
$pgv_lang["place_cleanup_detected"]     = "Anomalie sur le format des lieux. Ces erreurs doivent être corrigées avant de continuer. En voici quelques exemples : ";
$pgv_lang["please_be_patient"]          = "Merci de patienter...";
$pgv_lang["privileges"]                 = "Droits";
$pgv_lang["reading_file"]               = "Lecture du fichier GEDCOM";
$pgv_lang["readme_documentation"]       = "Lire la documentation README";
$pgv_lang["remove_ip"]                  = "Supprimer IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"]= "Un administrateur devra valider toute nouvelle demande de compte.";
$pgv_lang["review_readme"]              = "Il est conseillé de consulter d'abord le fichier <a href=readme.txt target=_blank>readme.txt</a> avant de poursuivre la configuration de PhpGedView.<br /><br />";
$pgv_lang["seconds"]                    = "&nbsp;&nbsp;secondes";
$pgv_lang["select_an_option"]           = "Choisir l'une des options ci-dessous";
$pgv_lang["SERVER_URL"]                 = "URL du serveur";
$pgv_lang["show_phpinfo"]               = "Voir la page PHPInfo ";
$pgv_lang["siteadmin"]                  = "Administrateur du site";
$pgv_lang["sqlite"]                     = "SQLite";
$pgv_lang["sybase"]                     = "Sybase";
$pgv_lang["sync_gedcom"]                = "Synchroniser avec les données GEDCOM";
$pgv_lang["system_time"]                = "Heure du serveur";
$pgv_lang["user_time"]                  = "Heure du navigateur";
$pgv_lang["TBLPREFIX"]                  = "Préfixe des noms de tables";
$pgv_lang["themecustomization"]         = "Personnalisation des thèmes";
$pgv_lang["time_limit"]                 = "Durée max.";
$pgv_lang["title_manage_servers"]       = "Gestion des sites";
$pgv_lang["title_view_conns"]           = "Voir les connexions";
$pgv_lang["translator_tools"]           = "Outils de traduction";
$pgv_lang["update_myaccount"]           = "Mise à jour de mon compte utilisateur";
$pgv_lang["update_user"]                = "Mise à jour de l'utilisateur";
$pgv_lang["upload_gedcom"]              = "Envoyer un fichier GEDCOM sur le serveur (upload)";
$pgv_lang["USE_REGISTRATION_MODULE"]    = "Permettre aux utilisateurs de demander l'enregistrement de leur compte";
$pgv_lang["user_auto_accept"]           = "Accepter automatiquement les modifications faites par cet utilisateur";
$pgv_lang["user_contact_method"]        = "Préférence pour les contacts";
$pgv_lang["user_create_error"]          = "Impossible d'ajouter cet utilisateur. Revenir en arrière et ré-essayer.";
$pgv_lang["user_created"]               = "Nouvel utilisateur ajouté avec succès.";
$pgv_lang["user_default_tab"]           = "Onglet par défaut sur les fiches individuelles";
$pgv_lang["user_path_length"]           = "Degré de parenté max";
$pgv_lang["user_relationship_priv"]     = "Limiter l'accès aux proches";
$pgv_lang["users_admin"]                = "Administrateurs du site";
$pgv_lang["users_gedadmin"]             = "Administrateurs GEDCOM";
$pgv_lang["users_total"]                = "Nombre total d'utilisateurs";
$pgv_lang["users_unver"]                = "Non vérifié par l'utilisateur";
$pgv_lang["users_unver_admin"]          = "Non vérifié par l'administrateur";
$pgv_lang["usr_deleted"]                = "Utilisateur supprimé : ";
$pgv_lang["usr_idle"]                   = "Nombre de mois écoulés depuis la dernière connexion pour qu'un compte utilisateur soit considéré comme inactif :";
$pgv_lang["usr_idle_toolong"]           = "Le compte utilisateur a été inactif depuis trop longtemps : ";
$pgv_lang["usr_no_cleanup"]             = "Rien à supprimer";
$pgv_lang["usr_unset_gedcomid"]         = "Modifier l'ID du GEDCOM pour ";
$pgv_lang["usr_unset_rights"]           = "Modifier les droits du GEDCOM rights pour ";
$pgv_lang["usr_unset_rootid"]           = "Modifier l'ID de l'individu racine pour ";
$pgv_lang["valid_gedcom"]               = "Fichier GEDCOM correct.  Le nettoyage de la base n'est pas nécessaire.";
$pgv_lang["validate_gedcom"]            = "Validation GEDCOM";
$pgv_lang["verified"]                   = "Vérifié par l'utilisateur";
$pgv_lang["verified_by_admin"]          = "Approuvé par l'administrateur";
$pgv_lang["verify_gedcom"]              = "Validation du fichier GEDCOM";
$pgv_lang["verify_upload_instructions"] = "En choisissant <b>Continuer</b> l'ancien GEDCOM sera remplacé par le nouveau fichier chargé. En choisissant <b>Annuler</b> l'ancien fichier GEDCOM restera inchangé.";
$pgv_lang["view_changelog"]             = "Voir le journal des modifications «changelog.txt»";
$pgv_lang["view_logs"]                  = "Voir le fichier journal";
$pgv_lang["view_readme"]                = "Voir le fichier readme.txt";
$pgv_lang["visibleonline"]              = "Visible par les autres utilisateurs";
$pgv_lang["visitor"]                    = "Visiteur";
$pgv_lang["warn_users"]                 = "Utilisateurs en anomalie";
$pgv_lang["weekly"]                     = "Hebdo";
$pgv_lang["welcome_new"]                = "Bienvenue sur votre site PhpGedView. L'affichage de cette page signifie que PhpGedView a été correctement installé sur votre serveur. Vous pouvez lancer la configuration.<br />";
$pgv_lang["yearly"]                     = "Annuel";
$pgv_lang["admin_OK_subject"]           = "Approbation (validation) du compte sur #SERVER_NAME#";
$pgv_lang["admin_OK_message"]           = "L'administrateur du site PhpGedView #SERVER_NAME# a approuvé la création de votre compte utilisateur.\r\n\r\nVous pouvez maintenant vous connecter en utilisant le lien suivant : #SERVER_NAME#";
$pgv_lang["batch_update"]               = "Effectuer des mises à jour/modifications de votre GEDCOM par batch";
// Text for the Gedcom Checker
$pgv_lang["gedcheck"]                   = "Vérificateur GEDCOM";
$pgv_lang["gedcheck_text"]              = "Ce module vérifie le format du fichier GEDCOM selon la norme <a href=\"http ://phpgedview.sourceforge.net/ged551-5.pdf\">GEDCOM 5.5.1</a>. L'outil détecte aussi certaines erreurs fréquentes dans les données. Comme il existe de nombreuses variantes de cette norme, seules les erreurs graves sont indispensables à corriger. Merci de bien lire l'explication de chaque erreur dans la norme avant de demander de l'aide.";
$pgv_lang["level"]                      = "Niveau";				// Niveau";
$pgv_lang["critical"]                   = "Erreur grave";
$pgv_lang["error"]                      = "Erreur";
$pgv_lang["warning"]                    = "Avertissement";
$pgv_lang["info"]                       = "Information";
$pgv_lang["open_link"]                  = "Ouvrir les liens dans";
$pgv_lang["same_win"]                   = "le même onglet ou la même fenêtre";
$pgv_lang["new_win"]                    = "un nouvel onglet ou une nouvelle fenêtre";
$pgv_lang["context_lines"]              = "Nombre de lignes GEDCOM<br />avant et après la ligne en erreur";
$pgv_lang["all_rec"]                    = "Tous les enregistrements";
$pgv_lang["err_rec"]                    = "Les enregistrements comportant une erreur";
$pgv_lang["missing"]                    = "balise manquante";
$pgv_lang["multiple"]                   = "multiple";
$pgv_lang["invalid"]                    = "mauvaise";
$pgv_lang["too_many"]                   = "trop";
$pgv_lang["too_few"]                    = "pas assez";
$pgv_lang["no_link"]                    = "le lien de retour est manquant";
$pgv_lang["data"]                       = "donnée";
$pgv_lang["see"]                        = "voir";
$pgv_lang["noref"]                      = "aucun lien vers cet enregistrement";
$pgv_lang["tag"]                        = "balise";
$pgv_lang["spacing"]                    = "espacement";
$pgv_lang["ADVANCED_NAME_FACTS"]        = "Options avancées pour le nom de famille";
$pgv_lang["ADVANCED_PLAC_FACTS"]        = "Options avancées pour le lieu";
$pgv_lang["SURNAME_TRADITION"]          = "Mode de transmission du nom";
$pgv_lang["tradition_spanish"]          = "Façon Espagnole";
$pgv_lang["tradition_portuguese"]       = "Façon Portugaise";
$pgv_lang["tradition_icelandic"]        = "Façon Islandaise";
$pgv_lang["tradition_paternal"]         = "Nom du père (défaut)";
$pgv_lang["tradition_polish"]           = "Polonais";
$pgv_lang["tradition_none"]             = "Libre";
// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]               =	"1 an";
$pgv_lang["elapsedYear2"]               =	"#pgv_lang[global_num1]# ans";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]               =	"#pgv_lang[global_num1]# ans";
$pgv_lang["elapsedMonth1"]              =	"1 mois";
$pgv_lang["elapsedMonth2"]              =	"#pgv_lang[global_num1]# mois";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]              =	"#pgv_lang[global_num1]# mois";
$pgv_lang["elapsedDay1"]                =	"1 jour";
$pgv_lang["elapsedDay2"]                =	"#pgv_lang[global_num1]# jours";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]                =	"#pgv_lang[global_num1]# jours";
$pgv_lang["elapsedHour1"]               =	"1 heure";
$pgv_lang["elapsedHour2"]               =	"#pgv_lang[global_num1]# heures";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]               =	"#pgv_lang[global_num1]# heures";
$pgv_lang["elapsedMinute1"]             =	"1 minute";
$pgv_lang["elapsedMinute2"]             =	"#pgv_lang[global_num1]# minutes";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]             =	"#pgv_lang[global_num1]# minutes";
$pgv_lang["elapsedAgo"]                 =	"il y a #pgv_lang[global_string1]#";
?>

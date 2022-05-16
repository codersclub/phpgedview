<?php
/**
 * French Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2022  PGV Development Team. All rights reserved.
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

$pgv_lang["add_marriage"]               = "Ajouter un nouveau mariage";
$pgv_lang["edit_concurrency_change"]    = "Enregistrement modifié en dernier par <i>#CHANGEUSER#</i> le #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]      = "L'enregistrement #PID# a été modifié par un autre utilisateur depuis votre dernière visite.";
$pgv_lang["edit_concurrency_msg1"]      = "Erreur au chargement : cet enregistrement a peut-être été modifié par un autre utilisateur depuis votre dernière visite.";
$pgv_lang["edit_concurrency_reload"]    = "Recharger la page avec le bouton «Page précédente» de votre navigateur pour être certain d'afficher la dernière version de l'enregistrement.";
$pgv_lang["no_update_CHAN"]             = "Conserver la date de mise à jour (CHAN)";
$pgv_lang["select_events"]              = "Choisir un événement";
$pgv_lang["source_events"]              = "Associer des événements  à cette source";
$pgv_lang["advanced_name_fields"]       = "Variantes du nom";
$pgv_lang["accept_changes"]             = "Accepter/Rejeter les modifications";
$pgv_lang["replace"]                    = "Modifier un enregistrement";
$pgv_lang["append"]                     = "Ajouter un enregistrement";
$pgv_lang["review_changes"]             = "Revoir les modifications GEDCOM";
$pgv_lang["remove_object"]              = "Supprimer l'objet";
$pgv_lang["remove_links"]               = "Supprimer les liens";
$pgv_lang["show_thumbnail"]             = "Montrer les vignettes";
$pgv_lang["link_media"]                 = "Relier un objet MultiMédia";
$pgv_lang["to_person"]                  = "à une personne";
$pgv_lang["to_family"]                  = "à une famille";
$pgv_lang["to_source"]                  = "à une source";
$pgv_lang["to_note"]					= "à une note partagée";
$pgv_lang["to_repository"]				= "à une archive";
$pgv_lang["edit_fam"]                   = "Modifier la famille";
$pgv_lang["edit_repo"]                  = "Modifier le dépôt d'archives";
$pgv_lang["copy"]                       = "Copier";
$pgv_lang["cut"]                        = "Couper";
$pgv_lang["sort_by_birth"]              = "Trier par date de naissance";
$pgv_lang["reorder_children"]           = "Modifier l'ordre des enfants";
$pgv_lang["reorder_media"]              = "Réordonner les objets MultiMédia";
$pgv_lang["reorder_media_title"]        = "Cliquez et glissez-déposez les vignettes pour réordonner les objets MultiMédia";
$pgv_lang["reorder_media_window"]       = "Réordonnez les objets MultiMédia";
$pgv_lang["reorder_media_window_title"] = "Cliquez sur une rangée, puis glissez-déposez les vignettes pour réordonner les objets MultiMédia";
$pgv_lang["reorder_media_save"]         = "Enregistrer les modifications";
$pgv_lang["reorder_media_reset"]        = "Revenir à l'ordonnancement initial";
$pgv_lang["reorder_media_cancel"]       = "Annuler les modifications";
$pgv_lang["add_from_clipboard"]         = "Ajouter depuis le presse-papiers";
$pgv_lang["record_copied"]              = "Enregistrement copié dans le presse-papiers";
$pgv_lang["add_unlinked_person"]        = "Ajouter une personne non liée";
$pgv_lang["add_unlinked_source"]        = "Ajouter une source non liée";
$pgv_lang["add_unlinked_note"]			= "Ajouter une note non liée";
$pgv_lang["add_unlinked"]				= "Enregistrements non liés";
$pgv_lang["server_file"]                = "Nom du fichier sur le serveur";
$pgv_lang["server_file_advice"]         = "Ne pas modifier pour conserver le nom d'origine.";
$pgv_lang["server_file_advice2"]        = "Entrer une URL commencant par «http://».";
$pgv_lang["server_folder_advice"]       = "Vous pouvez entrer jusqu'à #GLOBALS[MEDIA_DIRECTORY_LEVELS]# répertoires à l'intérieur du répertoire par défaut «#GLOBALS[MEDIA_DIRECTORY]#». N'entrez pas le «#GLOBALS[MEDIA_DIRECTORY]#» qui fait partie du nom du répertoire de destination.";
$pgv_lang["server_folder_advice2"]      = "Cette entrée est ignorée si vous avez entré une adresse URL dans le champ correspondant au nom de fichier.";
$pgv_lang["add_linkid_advice"]          = "Entrez ou recherchez l'ID de la personne, de la famille, ou de la source auqiel ce media doit être lié.";
$pgv_lang["use_browse_advice"]          = "Utilisez le bouton «Parcourir» pour rechercher sur votre ordinateur le fichier voulu.";
$pgv_lang["add_media_other_folder"]     = "Autre répertoire... renseignez ici le nom de ce nouveau répertoire";
$pgv_lang["add_media_file"]             = "Fichiers media existant sur le serveur";
$pgv_lang["main_media_ok1"]             = "Fichier MultiMédia <b>#GLOBALS[oldMediaName]#</b> renommé <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]             = "Fichier MultiMédia <b>#GLOBALS[oldMediaName]#</b> déplacé de <b>#GLOBALS[oldMediaFolder]#</b> vers <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]             = "Fichier MultiMédia renommé et déplacé de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> vers <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]           = "Fichier MultiMédia <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> non trouvé.";
$pgv_lang["main_media_fail1"]           = "Fichier MultiMédia <b>#GLOBALS[oldMediaName]#</b> impossible à renommer en <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]           = "Fichier MultiMédia <b>#GLOBALS[oldMediaName]#</b> impossible à déplacer de <b>#GLOBALS[oldMediaFolder]#</b> vers <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]           = "Fichier MultiMédia impossible à renommer et déplacer de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> vers <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]              = "Note : Vous pouvez utiliser la balise «#pgv_lang[PRIVACY_BY_RESN]#» pour que ce paramètre soit effectif.";
$pgv_lang["thumb_media_ok1"]            = "Vignette <b>#GLOBALS[oldMediaName]#</b> renommée <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]            = "Vignette <b>#GLOBALS[oldMediaName]#</b> déplacée de <b>#GLOBALS[oldThumbFolder]#</b> vers <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]            = "Vignette renommée et déplacée de <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> vers <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]          = "Vignette <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> non trouvée.";
$pgv_lang["thumb_media_fail1"]          = "Vignette <b>#GLOBALS[oldMediaName]#</b> impossible à renommer en <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]          = "Vignette <b>#GLOBALS[oldMediaName]#</b> impossible à déplacer de <b>#GLOBALS[oldThumbFolder]#</b> vers <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]          = "Vignette impossible à renommer et déplacer de <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> vers <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_create_ok0a"]			= "Vignette <b>#GLOBALS[imageThumbnail]#</b> créée automatiquement.";
$pgv_lang["thumb_create_ok0b"]			= "Vignette #GLOBALS[imageThumbnail]# créée automatiquement.";
$pgv_lang["thumb_create_fail0a"]		= "Vignette <span style=\"font-size:larger\">#GLOBALS[imageThumbnail]#</span> n'a pas pu être créée automatiquement : ";
$pgv_lang["thumb_create_fail0b"]		= "Vignette #GLOBALS[imageThumbnail]# n'a pas pu être créée automatiquement. Code d'erreur : ";
$pgv_lang["thumb_create_fail1"]			= "Cette fonctionnalité est désactivée dans la configuration GEDCOM.";
$pgv_lang["thumb_create_fail2"]			= "Le répertoire de destination n'est pas accessible en écriture.";
$pgv_lang["thumb_create_fail3"]			= "Cette fonction ne prend pas en charge le type d'image <span style=\"font-size:larger\">#GLOBALS[imageType]#</span>.";
$pgv_lang["thumb_create_fail4"]			= "Le répertoire de destination ne peut pas être créé.";
$pgv_lang["thumb_create_fail5"]			= "L'image d'entrée <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span>  n'existe pas ou ne peut pas être lue.";
$pgv_lang["thumb_create_fail6"]			= "La taille de l'image d'entrée <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> ne peut pas être déterminée.";
$pgv_lang["thumb_create_fail7"]			= "Il n'y a pas assez de mémoire libre.<br />Réduisez la taille de l'image d'entrée ou ajustez l'allocation de mémoire dans la Configuration du site, Étape 4, Paramètres avancés.";
$pgv_lang["thumb_create_fail8"]			= "L'image d'entrée <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> est défectueuse.";
$pgv_lang["add_asso"]                   = "Associer une nouvelle personne";
$pgv_lang["edit_sex"]                   = "Editer le genre";
$pgv_lang["add_obje"]                   = "Ajouter un nouvel objet MultiMédia";
$pgv_lang["add_name"]                   = "Ajouter un nom";
$pgv_lang["edit_raw"]                   = "Modifier les balises GEDCOM";
$pgv_lang["label_add_remote_link"]      = "Ajouter un lien";
$pgv_lang["label_gedcom_id"]            = "ID base de données";
$pgv_lang["label_local_id"]             = "ID individu";
$pgv_lang["accept"]                     = "Accepter";
$pgv_lang["accept_all"]                 = "Accepter toutes les modifications";
$pgv_lang["accept_gedcom"]              = "Décidez pour chaque modification de l'accepter ou de la rejeter.<br /><br />Pour accepter toutes les modifications en même temps, cliquez <b>#pgv_lang[accept_all]#</b> dans la case ci-dessous. Pour obtenir plus d'informations sur une modification, cliquez <b>#pgv_lang[view_change_diff]#</b> pour voir les différences, ou cliquez <b>#pgv_lang[view_gedcom]#</b> pour voir les nouvelles données au format GEDCOM.";
$pgv_lang["accept_successful"]          = "Les modifications ont été acceptées";
$pgv_lang["add_child"]                  = "Ajouter un enfant";
$pgv_lang["add_child_to_family"]        = "Ajouter un enfant à cette famille";
$pgv_lang["add_fact"]                   = "Ajouter un nouvel enregistrement";
$pgv_lang["add_father"]                 = "Ajouter un nouveau père";
$pgv_lang["add_husb"]                   = "Ajouter un époux";
$pgv_lang["add_opf_child"]              = "Ajouter un enfant pour obtenir une famille monoparentale";
$pgv_lang["add_husb_to_family"]         = "Ajouter un époux à cette famille";
$pgv_lang["add_media"]                  = "Ajouter un nouvel objet MultiMédia";
$pgv_lang["add_media_lbl"]              = "Ajouter un objet MultiMédia";
$pgv_lang["add_mother"]                 = "Ajouter une nouvelle mère";
$pgv_lang["add_new_chil"]               = "Ajouter un nouvel enfant";
$pgv_lang["add_new_husb"]               = "Ajouter un nouvel époux";
$pgv_lang["add_new_wife"]               = "Ajouter une nouvelle épouse";
$pgv_lang["add_note"]                   = "Ajouter une nouvelle note";
$pgv_lang["add_note_lbl"]               = "Ajouter une note";
$pgv_lang["add_shared_note"]            = "Ajouter une nouvelle note partagée";
$pgv_lang["add_shared_note_lbl"]        = "Ajouter une note partagée";
$pgv_lang["add_sibling"]                = "Ajouter un frère ou une sœur";
$pgv_lang["add_son_daughter"]           = "Ajouter un fils ou une fille";
$pgv_lang["add_source"]                 = "Ajouter une nouvelle source";
$pgv_lang["add_source_lbl"]             = "Ajouter une source";
$pgv_lang["add_wife"]                   = "Ajouter une épouse";
$pgv_lang["add_wife_to_family"]         = "Ajouter une épouse à cette famille";
$pgv_lang["advanced_search_discription"]= "Recherche avancée";
$pgv_lang["auto_thumbnail"]             = "Vignette Automatique";
$pgv_lang["basic_search"]               = "recherche";
$pgv_lang["basic_search_discription"]   = "Recherche basique";
$pgv_lang["birthdate_search"]           = "Date de naissance : ";
$pgv_lang["birthplace_search"]          = "Lieu de naissance : ";
$pgv_lang["change"]                     = "Changer";
$pgv_lang["change_family_instr"]        = "Utilisez cette page pour modifier ou supprimer un membre de la famille.<br /><br />Pour chaque membre de la famille, vous pouvez utiliser le lien <b>Modifier</b> pour choisir un individu différent pour remplir ce rôle (père, mère ...) dans la famille. Vous pouvez également utiliser le lien <b>supprimer</b> pour supprimer cet individu de cette famille.<br /><br />Quand vous avez terminé les modifications des membres de la famille, cliquez sur le bouton <b>enregistrer</b> pour sauvegarder vos modifications.";
$pgv_lang["change_family_members"]      = "Modifier les membres de la famille";
$pgv_lang["changes_occurred"]           = "Les modifications suivantes ont été faites pour cet individu";
$pgv_lang["confirm_remove"]             = "Confirmez-vous la suppression de cette personne de la famille ?";
$pgv_lang["confirm_remove_object"]      = "Confirmez-vous la suppression de cet objet ?";
$pgv_lang["create_repository"]          = "Créer une archive";
$pgv_lang["repo_not_exist"]				= "L�archive %s n�existe pas";
$pgv_lang["shared_note_assisted"]		= "Note partagée à l'aide de l'Assistant";
$pgv_lang["create_shared_note"]         = "Créer une nouvelle note partagée";
$pgv_lang["note_not_exist"]				= "La note partagée %s n�existe pas";
$pgv_lang["create_shared_note_assisted"]	= "Créer une nouvelle note partagée à l'aide de l'Assistant";
$pgv_lang["add_new_event_assisted"]		= "Créer un nouvel événement à l'aide de l'Assistant";
$pgv_lang["create_source"]              = "Créer une nouvelle source";
$pgv_lang["sour_not_exist"]         	= "La source %s n�existe pas";
$pgv_lang["media_not_exist"]			= "L'élément multimédia %s n'existe pas";
$pgv_lang["current_person"]             = "Identique";
$pgv_lang["date"]                       = "Date";
$pgv_lang["deathdate_search"]           = "Date de décès : ";
$pgv_lang["deathplace_search"]          = "Lieu de décès : ";
$pgv_lang["delete_dir_success"]         = "Répertoires «media» et «thumbs» <b>#GLOBALS[whichDir]#</b> supprimés.";
$pgv_lang["delete_file"]                = "Supprimer le fichier";
$pgv_lang["delete_repo"]                = "Supprimer ce dépôt d'archives";
$pgv_lang["directory_not_empty"]		= "Répertoire <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> non vide.";
$pgv_lang["directory_not_mt"]			= "Répertoire #GLOBALS[whichDir]# non vide.";
$pgv_lang["directory_not_exist"]        = "Répertoire absent.";
$pgv_lang["error_remote"]               = "Vous avez sélectionné un site distant.";
$pgv_lang["error_same"]                 = "Vous avez sélectionné le même site.";
$pgv_lang["external_file"]              = "Objet MultiMédia non trouvé sur le serveur. Impossible de le supprimer, déplacer ou renommer.";
$pgv_lang["file_missing"]               = "Fichier non reçu. Veuillez recommencer.";
$pgv_lang["file_partial"]               = "Fichier reçu partiellement. Veuillez recommencer.";
$pgv_lang["file_success"]               = "Fichier chargé";
$pgv_lang["file_too_big"]               = "Le fichier chargé dépasse la taille autorisée";
$pgv_lang["file_no_temp_dir"]           = "Répertoire temporaire PHP manquant";
$pgv_lang["file_cant_write"]            = "PHP n'a pas pu écrire sur le disque";
$pgv_lang["file_bad_extension"]         = "PHP a bloqué le fichier à cause de son extension";
$pgv_lang["file_unkown_err"]            = "Erreur de téléchargement de fichier inconnu (code #pgv_lang[global_num1]#). Rapportez cette information comme un bug.";
$pgv_lang["folder"]                     = "Répertoire sur le serveur";
$pgv_lang["gedrec_deleted"]             = "Enregistrement GEDCOM supprimé.";
$pgv_lang["gen_thumb"]                  = "Créer les vignettes";
$pgv_lang["gen_missing_thumbs"]         = "Créer les vignettes manquantes";
$pgv_lang["gen_missing_thumbs_lbl"]     = "Vignettes manquantes";
$pgv_lang["gender_search"]              = "Sexe : ";
$pgv_lang["generate_thumbnail"]         = "Création automatique d'une vignette depuis ";
$pgv_lang["hebrew_givn"]                = "Prénoms Hébreu";
$pgv_lang["hebrew_surn"]                = "Nom de Famille Hébreu";
$pgv_lang["hide_changes"]               = "Masquer les modifications.";
$pgv_lang["highlighted"]                = "Surbrillance";
$pgv_lang["illegal_chars"]              = "Présence de caractères interdits";
$pgv_lang["invalid_search_multisite_input"]= "SVP saisissez l'une des informations suivantes : Nom, Date de naissance, Lieu de naissance, Date de décès, Lieu de décès, et sexe.";
$pgv_lang["invalid_search_multisite_input_gender"]= "SVP renouvelez votre recherche en utilisant plus d'informations que le sexe seulement.";
$pgv_lang["label_diff_server"]          = "Un autre site";
$pgv_lang["label_location"]             = "Adresse";
$pgv_lang["label_password_id2"]         = "Mot de passe : ";
$pgv_lang["label_rel_to_current"]       = "Lien de parenté";
$pgv_lang["label_same_server"]          = "Le même site";
$pgv_lang["label_site"]                 = "Site";
$pgv_lang["label_site_url"]             = "URL:";
$pgv_lang["label_username_id2"]         = "Utilisateur : ";
$pgv_lang["lbl_server_list"]            = "Site existant";
$pgv_lang["lbl_type_server"]            = "Nouveau site";
$pgv_lang["link_as_child"]              = "Relier cette personne à une famille existante comme enfant";
$pgv_lang["link_as_husband"]            = "Relier cette personne à une famille existante comme époux";
$pgv_lang["link_success"]               = "Lien ajouté";
$pgv_lang["link_to_existing_media"]     = "Relier à un objet MultiMédia existant";
$pgv_lang["max_media_depth"]            = "Limite de profondeur dans le dossier : #MEDIA_DIRECTORY_LEVELS# ";
$pgv_lang["max_upload_size"]            = "Taille maxi pour le téléchargement ";
$pgv_lang["media_deleted"]				= "Répertoire <b>#GLOBALS[whichDir]#</b> supprimé.";
$pgv_lang["media_not_deleted"]			= "Répertoire <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> non supprimé.";
$pgv_lang["media_cant_delete"]			= "Répertoire #GLOBALS[whichDir]# non supprimé.";
$pgv_lang["media_exists"]               = "Le fichier MultiMédia <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> existe déjà.";
$pgv_lang["media_file"]                 = "Fichier multimédia à télécharger";
$pgv_lang["media_file_deleted"]         = "Le fichier MultiMédia <b>#GLOBALS[whichFile]#</b> a été supprimé.";
$pgv_lang["media_file_not_deleted"]		= "Le fichier MultiMédia <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> n'a pas pu être supprimé.";
$pgv_lang["media_file_cant_delete"]		= "Le fichier MultiMédia #GLOBALS[whichFile]# n'a pas pu être supprimé.";
$pgv_lang["media_file_moved"]           = "Le fichier MultiMédia a été déplacé.";
$pgv_lang["media_file_not_moved"]       = "Impossible de déplacer le fichier MultiMédia.";
$pgv_lang["media_file_not_renamed"]     = "Impossible de déplacer ou renommer le fichier MultiMédia.";
$pgv_lang["media_thumb_exists"]         = "La vignette <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> existe déjà.";
$pgv_lang["media_thumb_deleted"]		= "La vignette <b>#GLOBALS[whichFile]#</b> a été supprimée.";
$pgv_lang["media_thumb_not_deleted"]	= "La vignette <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> n'a pas pu être supprimée.";
$pgv_lang["media_thumb_cant_delete"]	= "La vignette #GLOBALS[whichFile]# n'a pas pu être supprimée.";
$pgv_lang["multiple_gedcoms"]           = "Impossible de supprimer, renommer ou déplacer ce fichier : il reste des liens avec un autre GEDCOM sur ce serveur.";
$pgv_lang["must_provide"]               = "Vous devez fournir un";
$pgv_lang["name_search"]                = "Nom : ";
$pgv_lang["new_repo_created"]           = "Nouveau dépôt d'archives créé";
$pgv_lang["new_shared_note_created"]    = "Nouvelle note partagée créée.";
$pgv_lang["shared_note_updated"]        = "Note partagée mise à jour.";
$pgv_lang["new_source_created"]         = "Nouvelle source créée.";
$pgv_lang["no_changes"]                 = "Aucune modification en attente de validation.";
$pgv_lang["no_known_servers"]           = "Aucun serveur connu. Pas de résultat.";
$pgv_lang["no_temple"]                  = "Temple absent (SDJ)";
$pgv_lang["no_upload"]                  = "Opération non autorisée ou répertoire non accessible en écriture.";
$pgv_lang["paste_id_into_field"]        = "Cliquez ici pour sélectionner cette source ";
$pgv_lang["paste_rid_into_field"]       = "Cliquez ici pour sélectionner ce dépôt d'archives ";
$pgv_lang["record_marked_deleted"]      = "Une demande de suppression de cet enregistrement a été faite, en attente de validation par l'administrateur.";
$pgv_lang["replace_with"]               = "Remplacer par";
$pgv_lang["show_changes"]               = "<span class='warning'>Fiche modifiée</span>&nbsp;&nbsp;Afficher les modifications.";
$pgv_lang["thumbnail"]                  = "Vignette à télécharger";
$pgv_lang["title_remote_link"]          = "Ajouter un lien distant";
$pgv_lang["undo"]                       = "Annuler";
$pgv_lang["undo_all"]                   = "<span class='warning'>Annuler toutes les modifications</span>";
$pgv_lang["undo_all_confirm"]           = "Confirmez-vous l'annulation de toutes les modifications sur ce fichier GEDCOM ?";
$pgv_lang["undo_successful"]            = "Annulation réussie";
$pgv_lang["update_successful"]			= "La mise à jour a réussi";
$pgv_lang["update_failed"]				= "La mise à jour a échoué";
$pgv_lang["upload"]                     = "Téléchargement";
$pgv_lang["upload_error"]               = "Erreur lors du chargement de votre fichier GEDCOM sur le serveur.";
$pgv_lang["copy_error"]                 = "Le fichier #GLOBALS[whichFile2]# ne peut pas être copié à partir de #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]               = "Charger des objets MultiMédia";
$pgv_lang["upload_successful"]          = "Téléchargement réussi";
$pgv_lang["view_change_diff"]           = "Voir les différences";

?>

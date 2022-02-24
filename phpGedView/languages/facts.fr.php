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

// -- Define a fact array to map GEDCOM tags with their French values
$factarray["ABBR"]  					 = "Abréviation";
$factarray["ADDR"]  					 = "Adresse";
$factarray["ADR1"]  					 = "Adresse 1";
$factarray["ADR2"]  					 = "Adresse 2";
$factarray["ADOP"]  					 = "Adoption";
$factarray["AFN"]   					 = "N° AFN";
$factarray["AGE"]   					 = "Age";
$factarray["AGNC"]  					 = "Institution";
$factarray["ALIA"]  					 = "Alias";
$factarray["ANCE"]  					 = "Ancêtres";
$factarray["ANCI"]  					 = "Interêt aux ancêtres";
$factarray["ANUL"]  					 = "Déclaration de nullité du mariage";
$factarray["ASSO"]  					 = "Personne associée";
$factarray["AUTH"]  					 = "Auteur";
$factarray["BAPL"]  					 = "Baptême SDJ";
$factarray["BAPM"]  					 = "Baptême";
$factarray["BARM"]  					 = "Bar mitzvah";
$factarray["BASM"]  					 = "Bas mitzvah";
$factarray["BIRT"]  					 = "Naissance";
$factarray["BLES"]  					 = "Bénédiction religieuse";
$factarray["BLOB"]  					 = "Objet binaire";
$factarray["BURI"]  					 = "Sépulture";
$factarray["CALN"]  					 = "Numéro de catalogue";
$factarray["CAST"]  					 = "Caste";
$factarray["CAUS"]  					 = "Cause de la mort";
$factarray["CEME"]  					 = "Cimetière";
$factarray["CENS"]  					 = "Recensement";
$factarray["CHAN"]  					 = "Modification";
$factarray["CHAR"]  					 = "Jeu de caractères";
$factarray["CHIL"]  					 = "Enfant";
$factarray["CHR"]   					 = "Baptême enfant";
$factarray["CHRA"]  					 = "Baptême adulte";
$factarray["CITY"]  					 = "Localité";
$factarray["CONF"]  					 = "Confirmation";
$factarray["CONL"]  					 = "Confirmation SDJ";
$factarray["COPR"]  					 = "Copyright";
$factarray["CORP"]  					 = "Entreprise";
$factarray["CREM"]  					 = "Incinération";
$factarray["CTRY"]  					 = "Pays";
$factarray["DATA"]  					 = "Données";
$factarray["DATE"]  					 = "Date";
$factarray["DEAT"]  					 = "Décès";
$factarray["DESC"]  					 = "Descendants";
$factarray["DESI"]  					 = "Intérêt aux descendants";
$factarray["DEST"]  					 = "Destination";
$factarray["DIV"]   					 = "Divorce";
$factarray["DIVF"]  					 = "Divorce prononcé";
$factarray["DSCR"]  					 = "Description";
$factarray["EDUC"]  					 = "Études";
$factarray["EMIG"]  					 = "Émigration";
$factarray["ENDL"]  					 = "Dotation SDJ";
$factarray["ENGA"]  					 = "Fiançailles";
$factarray["EVEN"]  					 = "Événement";
$factarray["FAM"]   					 = "Famille";
$factarray["FAMC"]  					 = "Famille des parents";
$factarray["FAMF"]  					 = "Fichier de la famille";
$factarray["FAMS"]  					 = "Famille avec le conjoint";
$factarray["FCOM"]  					 = "Première communion";
$factarray["FILE"]  					 = "Fichier externe";
$factarray["FORM"]  					 = "Format";
$factarray["GIVN"]  					 = "Prénoms";
$factarray["GRAD"]  					 = "Diplôme";
$factarray["HUSB"]  					 = "Mari";
$factarray["IDNO"]  					 = "N° identification";
$factarray["IMMI"]  					 = "Immigration";
$factarray["LEGA"]  					 = "Légataire";
$factarray["MARB"]  					 = "Bans de mariage";
$factarray["MARC"]  					 = "Contrat de mariage";
$factarray["MARL"]  					 = "Autorisation légale de mariage";
$factarray["MARR"]  					 = "Mariage";
$factarray["MARS"]  					 = "Régime matrimonial";
$factarray["MEDI"]  					 = "Type de Média";
$factarray["NAME"]  					 = "Nom";
$factarray["NATI"]  					 = "Nationalité";
$factarray["NATU"]  					 = "Naturalisation";
$factarray["NCHI"]  					 = "Nombre d'enfants";
$factarray["NICK"]  					 = "Surnom";
$factarray["NMR"]   					 = "Nombre de mariages";
$factarray["NOTE"]  					 = "Note";
$factarray["NPFX"]  					 = "Préfixe du nom";
$factarray["NSFX"]  					 = "Suffixe du nom";
$factarray["OBJE"]  					 = "Objet MultiMédia";
$factarray["OCCU"]  					 = "Profession";
$factarray["ORDI"]  					 = "Ordonnance";
$factarray["ORDN"]  					 = "Ordination";
$factarray["PAGE"]  					 = "Détails de la citation";
$factarray["PEDI"]  					 = "Ascendance";
$factarray["PLAC"]  					 = "Lieu";
$factarray["PHON"]  					 = "Téléphone";
$factarray["POST"]  					 = "Code Postal";
$factarray["PROB"]  					 = "Testament validé";
$factarray["PROP"]  					 = "Biens et possessions";
$factarray["PUBL"]  					 = "Publication";
$factarray["QUAY"]  					 = "Fiabilité des données";
$factarray["REPO"]  					 = "Dépositaire";
$factarray["REFN"]  					 = "Numéro de Référence";
$factarray["RELA"]  					 = "Relation";
$factarray["RELI"]  					 = "Religion";
$factarray["RESI"]  					 = "Domicile";
$factarray["RESN"]  					 = "Restriction d'accès";
$factarray["RETI"]  					 = "Retraite";
$factarray["RFN"]   					 = "N° enregistrement fichier";
$factarray["RIN"]   					 = "N° enregistrement ID";
$factarray["ROLE"]  					 = "Rôle";
$factarray["SEX"]   					 = "Sexe";
$factarray["SLGC"]  					 = "Scellement SDJ enfant";
$factarray["SLGS"]  					 = "Scellement SDJ conjoint";
$factarray["SOUR"]  					 = "Source";
$factarray["SPFX"]  					 = "Préfixe du nom de famille";
$factarray["SSN"]   					 = "Numéro de sécurité sociale";
$factarray["STAE"]  					 = "État ou région ou département";
$factarray["STAT"]  					 = "Statut";
$factarray["SUBM"]  					 = "Fournisseur";
$factarray["SUBN"]  					 = "Données fournies";
$factarray["SURN"]  					 = "Nom de famille";
$factarray["TEMP"]  					 = "Temple";
$factarray["TEXT"]  					 = "Texte";
$factarray["TIME"]  					 = "Heure";
$factarray["TITL"]  					 = "Titre";
$factarray["TYPE"]  					 = "Type";
$factarray["WIFE"]  					 = "Femme";
$factarray["WILL"]  					 = "Testament";
$factarray["_EMAIL"]					 = "Adresse e-mail";
$factarray["EMAIL"] 					 = "Adresse e-mail";
$factarray["_TODO"] 					 = "Note";
$factarray["_UID"]  					 = "Identificateur universel (UID)";
$factarray["_PRIM"] 					 = "Image principale";
$factarray["_DBID"] 					 = "Bases liées";
		
// These facts are used in specific contexts
$factarray["STAT:DATE"] 				 = "Date de modification du statut";
$factarray["DATA:DATE"] 				 = "Date d'entrée dans le document original";
		
$factarray["NAME:_HEB"]	= "Nom en hébreu";
$factarray["PLAC:_HEB"]	= "Lieu en hébreu";
$factarray["TITL:_HEB"]	= "Titre en hébreu";
$factarray["NAME:ROMN"]	= "Nom romanisé";
$factarray["PLAC:ROMN"]	= "Lieu romanisé";
$factarray["TITL:ROMN"]	= "Titre romanisé";
$factarray["NAME:FONE"]	= "Nom phonétique";
$factarray["PLAC:FONE"]	= "Lieu phonétique";
$factarray["TITL:FONE"]	= "Titre phonétique";

$factarray["SHARED_NOTE"]	= "Note partagée";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"]			 = "Nom de famille du père";
$factarray["FAMC:WIFE:SURN"]			 = "Nom de famille de la mère";
$factarray["FAMC:HUSB:BIRT:PLAC"]   	 = "Lieu de naissance du père";
$factarray["FAMC:WIFE:BIRT:PLAC"]   	 = "Lieu de naissance de la mère";
$factarray["FAMC:MARR:PLAC"]			 = "Lieu de mariage des parents";
$factarray["FAMC:HUSB:OCCU"]			 = "Métier du père";
$factarray[":BIRT:PLAC"]				 = "Lieu de naissance";
$factarray["FAMS:MARR:PLAC"]			 = "Lieu de mariage";
$factarray["FAMS:MARR:DATE"]			 = "Date de mariage";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] 	 = "Lieu de décès du conjoint";
$factarray["FAMC:HUSB:GIVN"]			 = "Prénom du père";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] 	 = "Lieu de naissance du conjoint";
$factarray["FAMC:WIFE:GIVN"]			 = "Prénom de la mère";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"]  = "Prénom du grand-père paternel";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"]  = "Prénom de la grand-mère maternelle";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"]  = "Prénom du grand-père maternel";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"]  = "Prénom de la grand-mère paternelle";
$factarray["FAMS:CHIL:BIRT:PLAC"]   	 = "Lieu de naissance de l'enfant";
$factarray["FAMS:NOTE"] = "Note du conjoint";
$factarray["FAMS:CENS:DATE"] = "Date du recensement du conjoint";
$factarray["FAMS:CENS:PLAC"] = "Lieu du recensement du conjoint";
$factarray["FAMS:DIV:DATE"] = "Date de divorce du conjoint";
$factarray["FAMS:DIV:PLAC"] = "Lieu de divorce du conjoint";
$factarray["FAMS:SLGS:DATE"] = "Date de scellement SDJ du conjoint";
$factarray["FAMS:SLGS:PLAC"] = "Lieu de scellement SDJ du conjoint";
$factarray["FAMS:SLGS:TEMP"] = "Temple de scellement SDJ du conjoint";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] 				 = "Lieu de naissance";
$factarray["BIRT:DATE"] 				 = "Date de naissance";
$factarray["BIRT:SOUR"] = "Source de naissance";
$factarray["DEAT:PLAC"] 				 = "Lieu de décès";
$factarray["DEAT:DATE"] 				 = "Date de décès";
$factarray["DEAT:SOUR"] = "Source de décès";
$factarray["CHR:PLAC"]  				 = "Lieu de baptême";
$factarray["CHR:DATE"]  				 = "Date de baptême";
$factarray["CHR:SOUR"] = "Source de baptême";
$factarray["CONF:PLAC"] = "Lieu de Confirmation";
$factarray["CONF:DATE"] = "Date de Confirmation";
$factarray["CONF:SOUR"] = "Source de Confirmation";
$factarray["BAPM:PLAC"] 				 = "Lieu de baptême";
$factarray["BAPM:DATE"] 				 = "Date de baptême";
$factarray["BAPM:SOUR"] = "Source de baptême";
$factarray["_BRTM:PLAC"] = "Lieu de Brit Mila";
$factarray["_BRTM:DATE"] = "Date de Brit Mila";
$factarray["_BRTM:SOUR"] = "Source de Brit Mila";
$factarray["BARM:PLAC"] = "Lieu de Bar Mitzvah";
$factarray["BARM:DATE"] = "Date de Bar Mitzvah";
$factarray["BARM:SOUR"] = "Source de Bar Mitzvah";
$factarray["BASM:PLAC"] = "Lieu de Bas Mitzvah";
$factarray["BASM:DATE"] = "Date de Bas Mitzvah";
$factarray["BASM:SOUR"] = "Source de Bas Mitzvah";
$factarray["BURI:PLAC"] 				 = "Lieu de sépulture";
$factarray["BURI:DATE"] 				 = "Date de sépulture";
$factarray["BURI:SOUR"] = "Source de sépulture";
$factarray["FCOM:PLAC"] = "Lieu de première communion";
$factarray["FCOM:DATE"] = "Date de première communion";
$factarray["FCOM:SOUR"] = "Source de première communion";
$factarray["MARB:PLAC"] = "Lieu des Bans de mariage";
$factarray["MARB:DATE"] = "Date des Bans de mariage";
$factarray["MARB:SOUR"] = "Source des Bans de mariage";
$factarray["MARR:PLAC"] 				 = "Lieu de mariage";
$factarray["MARR:DATE"] 				 = "Date de mariage";
$factarray["MARR:SOUR"] = "Source de mariage";
$factarray["ENGA:PLAC"] = "Lieu des Fiançailles";
$factarray["ENGA:DATE"] = "Date des Fiançailles";
$factarray["ENGA:SOUR"] = "Source des Fiançailles";

$factarray["REPO:NAME"] = "Nom de l'archive";
$factarray["REPO:ADDR"] = "Adresse de l'archive";
$factarray["REPO:PHON"] = "Numéro de téléphone de l'archive";
$factarray["REPO:FAX"]  = "Numéro de fax de l'archive";
$factarray["REPO:EMAIL"] = "Adresse e-mail de l'archive";
$factarray["REPO:WWW"]  = "Page d'accueil de l'archive";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] 					 = "Médical";
$factarray["_DEG"]  					 = "Diplôme";
$factarray["_MILT"] 					 = "Service Militaire";
$factarray["_SEPR"] 					 = "Séparé";
$factarray["_DETS"] 					 = "Décès du conjoint";
$factarray["CITN"]  					 = "Citoyenneté";
$factarray["_FA1"]  					 = "Fait 1";
$factarray["_FA2"]  					 = "Fait 2";
$factarray["_FA3"]  					 = "Fait 3";
$factarray["_FA4"]  					 = "Fait 4";
$factarray["_FA5"]  					 = "Fait 5";
$factarray["_FA6"]  					 = "Fait 6";
$factarray["_FA7"]  					 = "Fait 7";
$factarray["_FA8"]  					 = "Fait 8";
$factarray["_FA9"]  					 = "Fait 9";
$factarray["_FA10"] 					 = "Fait 10";
$factarray["_FA11"] 					 = "Fait 11";
$factarray["_FA12"] 					 = "Fait 12";
$factarray["_FA13"] 					 = "Fait 13";
$factarray["_MREL"] 					 = "Lien avec la mère";
$factarray["_FREL"] 					 = "Lien avec le père";
$factarray["_MSTAT"]					 = "Statut de début de mariage";
$factarray["_MEND"] 					 = "Statut de fin de mariage";
$factarray["_NAMS"]	= "Homonyme";

// GEDCOM 5.5.1 related facts
$factarray["FAX"]   					 = "Fax";
$factarray["FACT"]  					 = "Fait";
$factarray["WWW"]   					 = "Page Web";
$factarray["MAP"]   					 = "Carte";
$factarray["LATI"]  					 = "Latitude";
$factarray["LONG"]  					 = "Longitude";
$factarray["FONE"]  					 = "Phonétique";
$factarray["ROMN"]  					 = "Romain";
		
// PAF related facts
$factarray["_NAME"] 					 = "Nom postal";
$factarray["URL"]   					 = "URL Web";
$factarray["_URL"]  					 = "URL Web";
$factarray["_HEB"]  					 = "Hébreu";
$factarray["_SCBK"] 					 = "Album";
$factarray["_TYPE"] 					 = "Type MultiMédia";
$factarray["_SSHOW"]					 = "Diaporama";
		
// Rootsmagic
$factarray["_SUBQ"] 					 = "Version courte";
$factarray["_BIBL"] 					 = "Bibliographie";
		
// Reunion
$factarray["EMAL"]  					 = "Adresse e-mail";
		
// Other common customized facts
$factarray["_ADPF"] 					 = "Adoption par le père";
$factarray["_ADPM"] 					 = "Adoption par la mère";
$factarray["_AKAN"] 					 = "Nom d'usage";
$factarray["_AKA"]  					 = "Nom d'usage";
$factarray["_BRTM"] 					 = "Brit mila";
$factarray["_COML"] 					 = "Mariage légal";
$factarray["_EYEC"] 					 = "Couleur des yeux";
$factarray["_FNRL"] 					 = "Funérailles";
$factarray["_HAIR"] 					 = "Couleur des cheveux";
$factarray["_HEIG"] 					 = "Taille";
$factarray["_HOL"]  					 = "Holocauste";
$factarray["_INTE"] 					 = "Inhumation";
$factarray["_MARI"] 					 = "Promesse de mariage";
$factarray["_MBON"] 					 = "Lien par mariage";
$factarray["_MEDC"] 					 = "Condition médicale";
$factarray["_MILI"] 					 = "Militaire";
$factarray["_NMR"]  					 = "Non marié";
$factarray["_NLIV"] 					 = "Non vivant";
$factarray["_NMAR"] 					 = "Jamais marié";
$factarray["_PRMN"] 					 = "Numéro permanent";
$factarray["_WEIG"] 					 = "Poids";
$factarray["_YART"] 					 = "Yahrzeit";
$factarray["_MARNM"]					 = "Nom après mariage";
$factarray["_MARNM_SURN"]   			 = "Nom de famille après mariage";
$factarray["_STAT"] 					 = "Statut Mariage";
$factarray["COMM"]  					 = "Commentaire";
		
// Aldfaer related facts
$factarray["MARR_CIVIL"]				 = "Mariage civil";
$factarray["MARR_RELIGIOUS"]			 = "Mariage religieux";
$factarray["MARR_PARTNERS"] 			 = "Partenaires";
$factarray["MARR_UNKNOWN"]  			 = "Type de mariage inconnu";
		
$factarray["_HNM"]  					 = "Nom hébreu";
		
// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"]				 = "Décès du conjoint";
$factarray["_BURI_SPOU"]				 = "Enterrement du conjoint";
$factarray["_CREM_SPOU"]				 = "Crémation du conjoint";
		
$factarray["_BIRT_CHIL"]				 = "Naissance d'enfant";
$factarray["_CHR_CHIL"] 				 = "Baptême d'enfant";
$factarray["_BAPM_CHIL"]				 = "Baptême d'enfant";
$factarray["__BRTM_CHIL"]   			 = "Brit Mila d'enfant";
$factarray["_ADOP_CHIL"]				 = "Adoption d'enfant";
$factarray["_MARR_CHIL"]				 = "Mariage d'enfant";
$factarray["_MARB_CHIL"]				 = "Publication de mariage d'enfant";
$factarray["_DEAT_CHIL"]				 = "Décès d'enfant";
$factarray["_BURI_CHIL"]				 = "Enterrement d'enfant";
$factarray["_CREM_CHIL"]				 = "Crémation d'enfant";
		
$factarray["_BIRT_GCHI"]				 = "Naissance de petit-enfant";
$factarray["_CHR_GCHI"] 				 = "Baptême de petit-enfant";
$factarray["_BAPM_GCHI"]				 = "Baptême de petit-enfant";
$factarray["__BRTM_GCHI"]   			 = "Brit Mila de petit-enfant";
$factarray["_ADOP_GCHI"]				 = "Adoption de petit-enfant";
$factarray["_MARR_GCHI"]				 = "Mariage de petit-enfant";
$factarray["_MARB_GCHI"]				 = "Publication de mariage de petit-enfant";
$factarray["_DEAT_GCHI"]				 = "Décès de petit-enfant";
$factarray["_BURI_GCHI"]				 = "Enterrement de petit-enfant";
$factarray["_CREM_GCHI"]				 = "Crémation de petit-enfant";
		
$factarray["_BIRT_GGCH"]				 = "Naissance d'arrière-petit-enfant";
$factarray["_CHR_GGCH"] 				 = "Baptême d'arrière-petit-enfant";
$factarray["_BAPM_GGCH"]				 = "Baptême d'arrière-petit-enfant";
$factarray["__BRTM_GGCH"]   			 = "Brit Mila d'arrière-petit-enfant";
$factarray["_ADOP_GGCH"]				 = "Adoption d'arrière-petit-enfant";
$factarray["_MARR_GGCH"]				 = "Mariage d'arrière-petit-enfant";
$factarray["_MARB_GGCH"]				 = "Publication de mariage d'arrière-petit-enfant";
$factarray["_DEAT_GGCH"]				 = "Décès d'arrière-petit-enfant";
$factarray["_BURI_GGCH"]				 = "Enterrement d'arrière-petit-enfant";
$factarray["_CREM_GGCH"]				 = "Crémation d'arrière-petit-enfant";
		
$factarray["_MARR_FATH"]				 = "Mariage du père";
$factarray["_MARB_FATH"]				 = "Publication de mariage du père";
$factarray["_DEAT_FATH"]				 = "Décès du père";
$factarray["_BURI_FATH"]				 = "Enterrement du père";
$factarray["_CREM_FATH"]				 = "Crémation du père";
		
$factarray["_MARR_FAMC"]				 = "Mariage des parents";
$factarray["_MARB_FAMC"]				 = "Publication de mariage des parents";
		
$factarray["_MARR_MOTH"]				 = "Mariage de la mère";
$factarray["_MARB_MOTH"]				 = "Publication de mariage de la mère";
$factarray["_DEAT_MOTH"]				 = "Décès de la mère";
$factarray["_BURI_MOTH"]				 = "Enterrement de la mère";
$factarray["_CREM_MOTH"]				 = "Crémation de la mère";
		
$factarray["_BIRT_SIBL"]				 = "Naissance frère/sœur";
$factarray["_CHR_SIBL"] 				 = "Baptême frère/sœur";
$factarray["_BAPM_SIBL"]				 = "Baptême frère/sœur";
$factarray["__BRTM_SIBL"]   			 = "Brit Mila frère/sœur";
$factarray["_ADOP_SIBL"]				 = "Adoption frère/sœur";
$factarray["_MARR_SIBL"]				 = "Mariage frère/sœur";
$factarray["_MARB_SIBL"]				 = "Publication de mariage frère/sœur";
$factarray["_DEAT_SIBL"]				 = "Décès frère/sœur";
$factarray["_BURI_SIBL"]				 = "Enterrement frère/sœur";
$factarray["_CREM_SIBL"]				 = "Crémation frère/sœur";
		
$factarray["_BIRT_HSIB"]				 = "Naissance demi-frère/sœur";
$factarray["_CHR_HSIB"] 				 = "Baptême demi-frère/sœur";
$factarray["_BAPM_HSIB"]				 = "Baptême demi-frère/sœur";
$factarray["__BRTM_HSIB"]   			 = "Brit Mila demi-frère/sœur";
$factarray["_ADOP_HSIB"]				 = "Adoption demi-frère/sœur";
$factarray["_MARR_HSIB"]				 = "Mariage demi-frère/sœur";
$factarray["_MARB_HSIB"]				 = "Publication de mariage demi-frère/sœur";
$factarray["_DEAT_HSIB"]				 = "Décès demi-frère/sœur";
$factarray["_BURI_HSIB"]				 = "Enterrement demi-frère/sœur";
$factarray["_CREM_HSIB"]				 = "Crémation demi-frère/sœur";
		
$factarray["_BIRT_NEPH"]				 = "Naissance neveu/nièce";
$factarray["_CHR_NEPH"] 				 = "Baptême neveu/nièce";
$factarray["_BAPM_NEPH"]				 = "Baptême neveu/nièce";
$factarray["__BRTM_NEPH"]   			 = "Brit Mila neveu";
$factarray["_ADOP_NEPH"]				 = "Adoption neveu/nièce";
$factarray["_MARR_NEPH"]				 = "Mariage neveu/nièce";
$factarray["_MARB_NEPH"]				 = "Publication de mariage neveu/nièce";
$factarray["_DEAT_NEPH"]				 = "Décès neveu/nièce";
$factarray["_BURI_NEPH"]				 = "Enterrement neveu/nièce";
$factarray["_CREM_NEPH"]				 = "Crémation neveu/nièce";
		
$factarray["_DEAT_GPAR"]				 = "Décès d'un grand-parent";
$factarray["_BURI_GPAR"]				 = "Enterrement d'un grand-parent";
$factarray["_CREM_GPAR"]				 = "Crémation d'un grand-parent";
		
$factarray["_DEAT_GGPA"]				 = "Décès d'arrière-grand-parent";
$factarray["_BURI_GGPA"]				 = "Enterrement d'arrière grand-parent";
$factarray["_CREM_GGPA"]				 = "Crémation d'arrière grand-parent";
		
$factarray["_BIRT_FSIB"]				 = "Naissance frère/sœur du père";
$factarray["_CHR_FSIB"] 				 = "Baptême frère/sœur du père";
$factarray["_BAPM_FSIB"]				 = "Baptême frère/sœur du père";
$factarray["__BRTM_FSIB"]   			 = "Brit Mila frère/sœur du père";
$factarray["_ADOP_FSIB"]				 = "Adoption frère/sœur du père";
$factarray["_MARR_FSIB"]				 = "Mariage frère/sœur du père";
$factarray["_MARB_FSIB"]				 = "Publication de mariage frère/sœur du père";
$factarray["_DEAT_FSIB"]				 = "Décès frère/sœur du père";
$factarray["_BURI_FSIB"]				 = "Enterrement frère/sœur du père";
$factarray["_CREM_FSIB"]				 = "Crémation frère/sœur du père";
		
$factarray["_BIRT_MSIB"]				 = "Naissance frère/sœur de la mère";
$factarray["_CHR_MSIB"] 				 = "Baptême frère/sœur de la mère";
$factarray["_BAPM_MSIB"]				 = "Baptême frère/sœur de la mère";
$factarray["__BRTM_MSIB"]   			 = "Brit Mila frère/sœur de la mère";
$factarray["_ADOP_MSIB"]				 = "Adoption frère/sœur de la mère";
$factarray["_MARR_MSIB"]				 = "Mariage frère/sœur de la mère";
$factarray["_MARB_MSIB"]				 = "Publication de mariage frère/sœur de la mère";
$factarray["_DEAT_MSIB"]				 = "Décès frère/sœur de la mère";
$factarray["_BURI_MSIB"]				 = "Enterrement frère/sœur de la mère";
$factarray["_CREM_MSIB"]				 = "Crémation frère/sœur de la mère";
		
$factarray["_BIRT_COUS"]				 = "Naissance cousin(e) germain(e)";
$factarray["_CHR_COUS"] 				 = "Baptême cousin(e) germain(e)";
$factarray["_BAPM_COUS"]				 = "Baptême cousin(e) germain(e)";
$factarray["__BRTM_COUS"]   			 = "Brit Mila cousin(e) germain(e)";
$factarray["_ADOP_COUS"]				 = "Adoption cousin(e) germain(e)";
$factarray["_MARR_COUS"]				 = "Mariage cousin(e) germain(e)";
$factarray["_MARB_COUS"]				 = "Publication de mariage cousin(e) germain(e)";
$factarray["_DEAT_COUS"]				 = "Décès cousin(e) germain(e)";
$factarray["_BURI_COUS"]				 = "Enterrement cousin(e) germain(e)";
$factarray["_CREM_COUS"]				 = "Crémation cousin(e) germain(e)";
		
$factarray["_FAMC_EMIG"]				 = "Émigration des parents";
$factarray["_FAMC_RESI"]				 = "Domicile des parents";
		
//-- PGV Only facts
$factarray["_THUM"] 					 = "Utiliser toujours l'image principale ?";
$factarray["_PGVU"] 					 = "par";
$factarray["SERV"]  					 = "Serveur distant";
$factarray["_GEDF"] 					 = "Fichier GEDCOM";
		
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

unset($factAbbrev);		// Don't let other languages specify Fact abbreviations for this language

/*-- The following lines have been commented out.  They should serve as examples.

$factAbbrev["BIRT"]		= "B";
$factAbbrev["MARR"]		= "M";
$factAbbrev["DEAT"]		= "D";

 */

?>

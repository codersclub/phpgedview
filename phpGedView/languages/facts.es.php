<?php
/**
 * Spanish language file for PhpGedView
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
 * @author PGV Developers
 * @translator: Julio Sánchez Fernández
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Spanish values
$factarray["ABBR"]	= "Abreviatura";
$factarray["ADDR"]	= "Dirección";
$factarray["ADR1"]	= "Dirección 1";
$factarray["ADR2"]	= "Dirección 2";
$factarray["ADOP"]	= "Adopción";
$factarray["AFN"]	= "Número de expediente ancestral (AFN)";
$factarray["AGE"]	= "Edad";
$factarray["AGNC"]	= "Agencia";
$factarray["ALIA"]	= "Alias";
$factarray["ANCE"]	= "Antepasados";
$factarray["ANCI"]	= "Interés en los antepasados";
$factarray["ANUL"]	= "Anulación";
$factarray["ASSO"]	= "Asociados";
$factarray["AUTH"]	= "Autor";
$factarray["BAPL"]	= "Bautismo SUD";
$factarray["BAPM"]	= "Bautismo";
$factarray["BARM"]	= "Bar Mitzvah";
$factarray["BASM"]	= "Bas Mitzvah";
$factarray["BIRT"]	= "Nacimiento";
$factarray["BLES"]	= "Bendición";
$factarray["BLOB"]	= "Objeto de Datos Binarios";
$factarray["BURI"]	= "Entierro";
$factarray["CALN"]	= "Numero de catalogo";
$factarray["CAST"]	= "Casta / Estatus Social";
$factarray["CAUS"]	= "Causa";
$factarray["CEME"]  = "Cementerio";
$factarray["CENS"]	= "Censo";
$factarray["CHAN"]	= "Último cambio";
$factarray["CHAR"]	= "Juego de caracteres";
$factarray["CHIL"]	= "Hijo";
$factarray["CHR"]	= "Bautismo";
$factarray["CHRA"]	= "Bautismo en edad adulta";
$factarray["CITY"]	= "Ciudad";
$factarray["CONF"]	= "Confirmación";
$factarray["CONL"]	= "Confirmación SUD";
$factarray["COPR"]	= "Copyright";
$factarray["CORP"]	= "Corporación / Compañía";
$factarray["CREM"]	= "Incineración";
$factarray["CTRY"]	= "País";
$factarray["DATA"]	= "Datos";
$factarray["DATE"]	= "Fecha";
$factarray["DEAT"]	= "Defunción";
$factarray["DESC"]	= "Descendientes";
$factarray["DESI"]	= "Interés en los descendientes";
$factarray["DEST"]	= "Destino";
$factarray["DIV"]	= "Divorcio";
$factarray["DIVF"]	= "Demanda de divorcio";
$factarray["DSCR"]	= "Descripción";
$factarray["EDUC"]	= "Educación";
$factarray["EMIG"]	= "Emigración";
$factarray["ENDL"]	= "Investidura SUD";
$factarray["ENGA"]	= "Compromiso matrimonial";
$factarray["EVEN"]	= "Evento";
$factarray["FAM"]	= "Familia";
$factarray["FAMC"]	= "Familia como hijo";
$factarray["FAMF"]	= "Fichero Familia";
$factarray["FAMS"]	= "Familia como cónyuge";
$factarray["FCOM"]	= "Primera comunión";
$factarray["FILE"]	= "Fichero externo";
$factarray["FORM"]	= "Formato";
$factarray["GIVN"]	= "Nombre de pila";
$factarray["GRAD"]	= "Graduación";
$factarray["HUSB"]  = "Esposo";
$factarray["IDNO"]	= "Número de identificación";
$factarray["IMMI"]	= "Inmigración";
$factarray["LEGA"]	= "Herencia";
$factarray["MARB"]	= "Amonestaciones";
$factarray["MARC"]	= "Contrato matrimonial";
$factarray["MARL"]	= "Licencia matrimonial";
$factarray["MARR"]	= "Matrimonio";
$factarray["MARS"]	= "Dote";
$factarray["MEDI"]	= "Tipo de objeto";
$factarray["NAME"]	= "Nombre";
$factarray["NATI"]	= "Nacionalidad";
$factarray["NATU"]	= "Naturalización";
$factarray["NCHI"]	= "Número de hijos";
$factarray["NICK"]	= "Apodo";
$factarray["NMR"]	= "Número de matrimonios";
$factarray["NOTE"]	= "Nota";
$factarray["NPFX"]	= "Prefijo del Apellido";
$factarray["NSFX"]	= "Sufijo del Apellido";
$factarray["OBJE"]	= "Objeto audiovisual";
$factarray["OCCU"]	= "Ocupación";
$factarray["ORDI"]	= "Ordenanza";
$factarray["ORDN"]	= "Ordenación";
$factarray["PAGE"]	= "Detalles de la cita";
$factarray["PEDI"]	= "Tipo de relación de paternidad";
$factarray["PLAC"]	= "Lugar";
$factarray["PHON"]	= "Teléfono";
$factarray["POST"]	= "Código postal";
$factarray["PROB"]	= "Testamentaría";
$factarray["PROP"]	= "Propiedad";
$factarray["PUBL"]	= "Publicación";
$factarray["QUAY"]	= "Calidad de los datos";
$factarray["REPO"]	= "Repositorio";
$factarray["REFN"]	= "Número Referencia";
$factarray["RELA"]	= "Relación";
$factarray["RELI"]	= "Religión";
$factarray["RESI"]	= "Residencia";
$factarray["RESN"]	= "Restricción";
$factarray["RETI"]	= "Jubilación";
$factarray["RFN"]	= "Número de archivo del registro";
$factarray["RIN"]	= "Número ID del registro";
$factarray["ROLE"]	= "Rol";
$factarray["SEX"]	= "Sexo";
$factarray["SLGC"]	= "Sellamiento SUD hijo";
$factarray["SLGS"]	= "Sellamiento SUD cónyuge";
$factarray["SOUR"]	= "Fuente";
$factarray["SPFX"]	= "Prefijo del apellido";
$factarray["SSN"]	= "Número Seguridad Social";
$factarray["STAE"]	= "Estado / Provincia";
$factarray["STAT"]	= "Estatus";
$factarray["SUBM"]	= "Remitente";
$factarray["SUBN"]	= "Envío";
$factarray["SURN"]	= "Apellidos";
$factarray["TEMP"]	= "Templo";
$factarray["TEXT"]	= "Texto";
$factarray["TIME"]	= "Hora";
$factarray["TITL"]	= "Título";
$factarray["TYPE"]	= "Tipo";
$factarray["WIFE"]  	= "Esposa";
$factarray["WILL"]	= "Testamento";
$factarray["_EMAIL"]	= "Correo electrónico";
$factarray["EMAIL"]	= "Correo electrónico";
$factarray["_TODO"]	= "Pendiente de hacer";
$factarray["_UID"]	= "Identificador universal";
$factarray["_PRIM"]	= "Imagen resaltada";
$factarray["_DBID"] 	= "ID en la base de datos enlazada";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Fecha del cambio de estado";
$factarray["DATA:DATE"] = "Fecha de la entrada en la fuente original";

$factarray["NAME:_HEB"]	= "Nombre en hebreo";
$factarray["PLAC:_HEB"]	= "Lugar en hebreo";
$factarray["TITL:_HEB"]	= "Título en hebreo";
$factarray["NAME:ROMN"]	= "Nombre romanizado";
$factarray["PLAC:ROMN"]	= "Lugar romanizado";
$factarray["TITL:ROMN"]	= "Título romanizado";
$factarray["NAME:FONE"]	= "Nombre fonético";
$factarray["PLAC:FONE"]	= "Lugar fonético";
$factarray["TITL:FONE"]	= "Título fonético";

$factarray["SHARED_NOTE"]	= "Nota compartida";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] = "Apellido del padre";
$factarray["FAMC:WIFE:SURN"] = "Apellido de la madre";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Lugar de nacimiento del padre";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Lugar de nacimiento de la madre";
$factarray["FAMC:MARR:PLAC"] = "Lugar de matrimonio de los padres";
$factarray["FAMC:HUSB:OCCU"] = "Ocupación del padre";
$factarray[":BIRT:PLAC"] = "Lugar de nacimiento";
$factarray["FAMS:MARR:PLAC"] = "Lugar de matrimonio";
$factarray["FAMS:MARR:DATE"] = "Fecha de matrimonio";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Lugar de defunción del cónyuge";
$factarray["FAMC:HUSB:GIVN"] = "Nombre de pila del padre";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Lugar de nacimiento del cónyuge";
$factarray["FAMC:WIFE:GIVN"] = "Nombre de pila de la madre";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Nombre de pila del abuelo paterno";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Nombre de pila de la abuela materna";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Nombre de pila del abuelo materno";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Nombre de pila de la abuela paterna";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Lugar de nacimiento del hijo";
$factarray["FAMS:NOTE"] = "Nota de la familia";
$factarray["FAMS:CENS:DATE"] = "Fecha del censo de la familia";
$factarray["FAMS:CENS:PLAC"] = "Lugar del censo de la familia";
$factarray["FAMS:DIV:DATE"] = "Fecha de divorcio";
$factarray["FAMS:DIV:PLAC"] = "Lugar del divorcio";
$factarray["FAMS:SLGS:DATE"] = "Fecha del sellamiento SUD con el cónyuge";
$factarray["FAMS:SLGS:PLAC"] = "Lugar del sellamiento SUD con el cónyuge";
$factarray["FAMS:SLGS:TEMP"] = "Templo del sellamiento SUD con el cónyuge";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Lugar de nacimiento";
$factarray["BIRT:DATE"] = "Fecha de nacimiento";
$factarray["BIRT:SOUR"] = "Fuente para el nacimiento";
$factarray["DEAT:PLAC"] = "Lugar de defunción";
$factarray["DEAT:DATE"] = "Fecha de defunción";
$factarray["DEAT:SOUR"] = "Fuente para la defunción";
$factarray["CHR:PLAC"] = "Lugar del bautismo";
$factarray["CHR:DATE"] = "Fecha de bautismo";
$factarray["CHR:SOUR"] = "Fuente para el bautismo";
$factarray["CONF:PLAC"] = "Lugar de la confirmación";
$factarray["CONF:DATE"] = "Fecha de la confirmación";
$factarray["CONF:SOUR"] = "Fuente para la confirmación";
$factarray["BAPM:PLAC"] = "Lugar del bautismo adulto";
$factarray["BAPM:DATE"] = "Fecha del bautismo adulto";
$factarray["BAPM:SOUR"] = "Fuente para el bautismo";
$factarray["_BRTM:PLAC"] = "Lugar del Brit Mila";
$factarray["_BRTM:DATE"] = "Fecha del Brit Mila";
$factarray["_BRTM:SOUR"] = "Fuente para el Brit Mila";
$factarray["BARM:PLAC"] = "Lugar del Bar Mitzvah";
$factarray["BARM:DATE"] = "Fecha del Bar Mitzvah";
$factarray["BARM:SOUR"] = "Fuente para el Bar Mitzvah";
$factarray["BASM:PLAC"] = "Lugar del Bas Mitzvah";
$factarray["BASM:DATE"] = "Fecha del Bas Mitzvah";
$factarray["BASM:SOUR"] = "Fuente para el Bas Mitzvah";
$factarray["BURI:PLAC"] = "Lugar del entierro";
$factarray["BURI:DATE"] = "Fecha del entierro";
$factarray["BURI:SOUR"] = "Fuente para el entierro";
$factarray["FCOM:PLAC"] = "Lugar de la primera comunión";
$factarray["FCOM:DATE"] = "Fecha de la primera comunión";
$factarray["FCOM:SOUR"] = "Fuente para la primera comunión";
$factarray["MARB:PLAC"] = "Lugar de las amonestaciones";
$factarray["MARB:DATE"] = "Fecha de las amonestaciones";
$factarray["MARB:SOUR"] = "Fuente para las amonestaciones";
$factarray["MARR:PLAC"] = "Lugar del matrimonio";
$factarray["MARR:DATE"] = "Fecha del matrimonio";
$factarray["MARR:SOUR"] = "Fuente para el matrimonio";
$factarray["ENGA:PLAC"] = "Lugar del compromiso";
$factarray["ENGA:DATE"] = "Fecha del compromiso";
$factarray["ENGA:SOUR"] = "Fuente para el compromiso";

$factarray["REPO:NAME"] = "Nombre del archivo";
$factarray["REPO:ADDR"] = "Dirección del archivo";
$factarray["REPO:PHON"] = "Número de teléfono del archivo";
$factarray["REPO:FAX"]  = "Número de FAX del archivo";
$factarray["REPO:EMAIL"] = "Dirección de correo electrónico del archivo";
$factarray["REPO:WWW"]  = "Página de inicio del archivo";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]	= "Médico";
$factarray["_DEG"]	= "Grado";
$factarray["_MILT"]	= "Servicio Militar";
$factarray["_SEPR"]	= "Separado";
$factarray["_DETS"]	= "Defunción de cónyuge";
$factarray["CITN"]	= "Ciudadanía";
$factarray["_FA1"]	= "Hecho 1";
$factarray["_FA2"]	= "Hecho 2";
$factarray["_FA3"]	= "Hecho 3";
$factarray["_FA4"]	= "Hecho 4";
$factarray["_FA5"]	= "Hecho 5";
$factarray["_FA6"]	= "Hecho 6";
$factarray["_FA7"]	= "Hecho 7";
$factarray["_FA8"]	= "Hecho 8";
$factarray["_FA9"]	= "Hecho 9";
$factarray["_FA10"]	= "Hecho 10";
$factarray["_FA11"]	= "Hecho 11";
$factarray["_FA12"]	= "Hecho 12";
$factarray["_FA13"]	= "Hecho 13";
$factarray["_MREL"]	= "Relación con la madre";
$factarray["_FREL"]	= "Relación con el padre";
$factarray["_MSTAT"]	= "Comienzo del matrimonio";
$factarray["_MEND"]	= "Final del matrimonio";
$factarray["_NAMS"]	= "Tocayo";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "FAX";
$factarray["FACT"] = "Hecho";
$factarray["WWW"] = "Página Web";
$factarray["MAP"] = "Mapa";
$factarray["LATI"] = "Latitud";
$factarray["LONG"] = "Longitud";
$factarray["FONE"] = "Fonético";
$factarray["ROMN"] = "Romanizado";

// PAF related facts
$factarray["_NAME"] = "Nombre de correo";
$factarray["URL"] = "Dirección Internet";
$factarray["_URL"] = "Dirección Internet";
$factarray["_HEB"] = "Hebreo";
$factarray["_SCBK"] = "Libreta de notas";
$factarray["_TYPE"] = "Tipo de objeto";
$factarray["_SSHOW"] = "Presentación";

// Rootsmagic
$factarray["_SUBQ"]= "Versión corta";
$factarray["_BIBL"] = "Bibliografía";

// Reunion
$factarray["EMAL"]	= "Dirección de correo electrónico";

// Other common customized facts
$factarray["_ADPF"]	= "Adoptado por el padre";
$factarray["_ADPM"]	= "Adoptado por la madre";
$factarray["_AKAN"]	= "También conocido como";
$factarray["_AKA"] 	= "También conocido como";
$factarray["_BRTM"]	= "Brit mila";
$factarray["_COML"]	= "Matrimonio de hecho";
$factarray["_EYEC"]	= "Color de ojos";
$factarray["_FNRL"]	= "Funeral";
$factarray["_HAIR"]	= "Color de pelo";
$factarray["_HEIG"]	= "Altura";
$factarray["_HOL"]  = "Holocausto";
$factarray["_INTE"]	= "Entierro";
$factarray["_MARI"]	= "Proposición de matrimonio";
$factarray["_MBON"]	= "Lazo matrimonial";
$factarray["_MEDC"]	= "Estado médico";
$factarray["_MILI"]	= "Militar";
$factarray["_NMR"]	= "Relación sin matrimonio";
$factarray["_NLIV"]	= "Fallecido";
$factarray["_NMAR"]	= "Nunca contrajo matrimonio";
$factarray["_PRMN"]	= "Número fijo";
$factarray["_WEIG"]	= "Peso";
$factarray["_YART"]	= "Aniversario de defunción";
$factarray["_MARNM"] = "Nombre de casada";
$factarray["_MARNM_SURN"] = "Apellido de casada";
$factarray["_STAT"]	= "Estado civil";
$factarray["COMM"]	= "Comentario";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Matrimonio civil";
$factarray["MARR_RELIGIOUS"] = "Matrimonio religioso";
$factarray["MARR_PARTNERS"] = "Pareja registrada";
$factarray["MARR_UNKNOWN"] = "Tipo desconocido de pareja";

$factarray["_HNM"] = "Nombre hebreo";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Defunción de cónyuge";
$factarray["_BURI_SPOU"] = "Entierro de cónyuge";
$factarray["_CREM_SPOU"] = "Incineración de cónyuge";

$factarray["_BIRT_CHIL"] = "Nacimiento de hijo";
$factarray["_CHR_CHIL"] = "Bautismo de hijo";
$factarray["_BAPM_CHIL"] = "Bautismo de hijo";
$factarray["__BRTM_CHIL"] = "Brit mila de hijo";
$factarray["_ADOP_CHIL"] = "Adopción de hijo";
$factarray["_MARR_CHIL"] = "Matrimonio de hijo";
$factarray["_MARB_CHIL"] = "Amonestaciones de hijo";
$factarray["_DEAT_CHIL"] = "Defunción de hijo";
$factarray["_BURI_CHIL"] = "Entierro de hijo";
$factarray["_CREM_CHIL"] = "Incineración de hijo";

$factarray["_BIRT_GCHI"] = "Nacimiento de nieto";
$factarray["_CHR_GCHI"] = "Bautismo de nieto";
$factarray["_BAPM_GCHI"] = "Bautismo de nieto";
$factarray["__BRTM_GCHI"] = "Brit mila de nieto";
$factarray["_ADOP_GCHI"] = "Adopción de nieto";
$factarray["_MARR_GCHI"] = "Matrimonio de nieto";
$factarray["_MARB_GCHI"] = "Amonestaciones de nieto";
$factarray["_DEAT_GCHI"] = "Defunción de nieto";
$factarray["_BURI_GCHI"] = "Entierro de nieto";
$factarray["_CREM_GCHI"] = "Incineración de nieto";

$factarray["_BIRT_GGCH"] = "Nacimiento de bisnieto";
$factarray["_CHR_GGCH"] = "Bautismo de bisnieto";
$factarray["_BAPM_GGCH"] = "Bautismo de bisnieto";
$factarray["__BRTM_GGCH"] = "Brit mila de bisnieto";
$factarray["_ADOP_GGCH"] = "Adopción de bisnieto";
$factarray["_MARR_GGCH"] = "Matrimonio de bisnieto";
$factarray["_MARB_GGCH"] = "Amonestaciones de bisnieto";
$factarray["_DEAT_GGCH"] = "Defunción de bisnieto";
$factarray["_BURI_GGCH"] = "Entierro de bisnieto";
$factarray["_CREM_GGCH"] = "Incineración de bisnieto";

$factarray["_MARR_FATH"] = "Matrimonio del padre";
$factarray["_MARB_FATH"] = "Amonestaciones del padre";
$factarray["_DEAT_FATH"] = "Defunción del padre";
$factarray["_BURI_FATH"] = "Entierro del padre";
$factarray["_CREM_FATH"] = "Incineración del padre";

$factarray["_MARR_FAMC"] = "Matrimonio de los padres";
$factarray["_MARB_FAMC"] = "Amonestaciones de los padres";

$factarray["_MARR_MOTH"] = "Matrimonio de la madre";
$factarray["_MARB_MOTH"] = "Amonestaciones de la madre";
$factarray["_DEAT_MOTH"] = "Defunción de la madre";
$factarray["_BURI_MOTH"] = "Entierro de la madre";
$factarray["_CREM_MOTH"] = "Incineración de la madre";

$factarray["_BIRT_SIBL"] = "Nacimiento de hermano";
$factarray["_CHR_SIBL"] = "Bautismo de hermano";
$factarray["_BAPM_SIBL"] = "Bautismo de hermano";
$factarray["__BRTM_SIBL"] = "Brit mila de hermano";
$factarray["_ADOP_SIBL"] = "Adopción de hermano";
$factarray["_MARR_SIBL"] = "Matrimonio de hermano";
$factarray["_MARB_SIBL"] = "Amonestaciones de hermano";
$factarray["_DEAT_SIBL"] = "Defunción de hermano";
$factarray["_BURI_SIBL"] = "Entierro de hermano";
$factarray["_CREM_SIBL"] = "Incineración de hermano";

$factarray["_BIRT_HSIB"] = "Nacimiento de medio hermano";
$factarray["_CHR_HSIB"] = "Bautismo de medio hermano";
$factarray["_BAPM_HSIB"] = "Bautismo de medio hermano";
$factarray["__BRTM_HSIB"] = "Brit mila de medio hermano";
$factarray["_ADOP_HSIB"] = "Adopción de medio hermano";
$factarray["_MARR_HSIB"] = "Matrimonio de medio hermano";
$factarray["_MARB_HSIB"] = "Amonestaciones de medio hermano";
$factarray["_DEAT_HSIB"] = "Defunción de medio hermano";
$factarray["_BURI_HSIB"] = "Entierro de medio hermano";
$factarray["_CREM_HSIB"] = "Incineración de medio hermano";

$factarray["_BIRT_NEPH"] = "Nacimiento de sobrino o sobrina";
$factarray["_CHR_NEPH"] = "Bautismo de sobrino";
$factarray["_BAPM_NEPH"] = "Bautismo de sobrino o sobrina";
$factarray["__BRTM_NEPH"] = "Brit mila de sobrino o sobrina";
$factarray["_ADOP_NEPH"] = "Adopción de sobrino o sobrina";
$factarray["_MARR_NEPH"] = "Matrimonio de sobrino o sobrina";
$factarray["_MARB_NEPH"] = "Amonestaciones de sobrino o sobrina";
$factarray["_DEAT_NEPH"] = "Defunción de sobrino o sobrina";
$factarray["_BURI_NEPH"] = "Entierro de sobrino o sobrina";
$factarray["_CREM_NEPH"] = "Incineración de sobrino o sobrina";

$factarray["_DEAT_GPAR"] = "Defunción de abuelo";
$factarray["_BURI_GPAR"] = "Entierro de abuelo";
$factarray["_CREM_GPAR"] = "Incineración de abuelo";

$factarray["_DEAT_GGPA"] = "Defunción de bisabuelo";
$factarray["_BURI_GGPA"] = "Entierro de bisabuelo";
$factarray["_CREM_GGPA"] = "Incineración de bisabuelo";

$factarray["_BIRT_FSIB"] = "Nacimiento de tío paterno";
$factarray["_CHR_FSIB"] = "Bautismo de tío paterno";
$factarray["_BAPM_FSIB"] = "Bautismo de tío paterno";
$factarray["__BRTM_FSIB"] = "Brit mila de tío paterno";
$factarray["_ADOP_FSIB"] = "Adopción de tío paterno";
$factarray["_MARR_FSIB"] = "Matrimonio de tío paterno";
$factarray["_MARB_FSIB"] = "Amonestaciones de tío paterno";
$factarray["_DEAT_FSIB"] = "Defunción de tío paterno";
$factarray["_BURI_FSIB"] = "Entierro de tío paterno";
$factarray["_CREM_FSIB"] = "Incineración de tío paterno";

$factarray["_BIRT_MSIB"] = "Nacimiento de tío materno";
$factarray["_CHR_MSIB"] = "Bautismo de tío materno";
$factarray["_BAPM_MSIB"] = "Bautismo de tío materno";
$factarray["__BRTM_MSIB"] = "Brit mila de tío materno";
$factarray["_ADOP_MSIB"] = "Adopción de tío materno";
$factarray["_MARR_MSIB"] = "Matrimonio de tío materno";
$factarray["_MARB_MSIB"] = "Amonestaciones de tío materno";
$factarray["_DEAT_MSIB"] = "Defunción de tío materno";
$factarray["_BURI_MSIB"] = "Entierro de tío materno";
$factarray["_CREM_MSIB"] = "Incineración de tío materno";

$factarray["_BIRT_COUS"] = "Nacimiento de primo hermano";
$factarray["_CHR_COUS"]  = "Bautismo de primo hermano";
$factarray["_BAPM_COUS"] = "Bautismo de primo hermano";
$factarray["__BRTM_COUS"] = "Brit mila de primo hermano";
$factarray["_ADOP_COUS"] = "Adopción de primo hermano";
$factarray["_MARR_COUS"] = "Matrimonio de primo hermano";
$factarray["_MARB_COUS"] = "Amonestaciones de primo hermano";
$factarray["_DEAT_COUS"] = "Defunción de primo hermano";
$factarray["_BURI_COUS"] = "Entierro de primo hermano";
$factarray["_CREM_COUS"] = "Incineración de primo hermano";

$factarray["_FAMC_EMIG"] = "Emigración de los padres";
$factarray["_FAMC_RESI"] = "Residencia de los padres";

//-- PGV Only facts
$factarray["_THUM"]	= "¿Usar siempre la imagen principal?";
$factarray["_PGVU"]	= "Última modificación realizada por"; // last changed by
$factarray["SERV"] = "Servidor remoto";
$factarray["_GEDF"] = "Archivo GEDCOM";

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

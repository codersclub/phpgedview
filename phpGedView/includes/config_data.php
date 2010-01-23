<?php
/**
 * Application configuration data.  Data here has no GUI to edit it,
 * although most of it can be altered to customise local installations.
 *
 * NOTE: The one-item-per-line and extra-comma-after-last-item approach
 * is used to allow SVN to reliably merge changes for users that have
 * customised their local copy of this file.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2010 PGV Development Team.
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
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_CONFIG_DATA_PHP', '');

// TEMP tags - LDS temple codes
$TEMPLE_CODES = array(
	'ABA'  =>'Aba, Nigeria',
	'ACCRA'=>'Accra, Ghana',
	'ADELA'=>'Adelaide, Australia',
	'ALBER'=>'Cardston, Alberta, Canada',
	'ALBUQ'=>'Albuquerque, New Mexico',
	'ANCHO'=>'Anchorage, Alaska',
	'ARIZO'=>'Mesa, Arizona',
	'ASUNC'=>'Asuncion, Paraguay',
	'ATLAN'=>'Atlanta, Georgia',
	'BAIRE'=>'Buenos Aires, Argentina',
	'BILLI'=>'Billings, Montana',
	'BIRMI'=>'Birmingham, Alabama',
	'BISMA'=>'Bismarck, North Dakota',
	'BOGOT'=>'Bogota, Colombia',
	'BOGOT'=>'Bogota, Columbia',
	'BOISE'=>'Boise, Idaho',
	'BOSTO'=>'Boston, Massachusetts',
	'BOUNT'=>'Bountiful, Utah',
	'BRISB'=>'Brisbane, Australia',
	'BROUG'=>'Baton Rouge, Louisiana',
	'CAMPI'=>'Campinas, Brazil',
	'CARAC'=>'Caracas, Venezuela',
	'CHICA'=>'Chicago, Illinois',
	'CIUJU'=>'Ciudad Juarez, Mexico',
	'COCHA'=>'Cochabamba, Bolivia',
	'COLJU'=>'Colonia Juarez, Mexico',
	'COLSC'=>'Columbia, South Carolina',
	'COLUM'=>'Columbus, Ohio',
	'COPEN'=>'Copenhagen, Denmark',
	'CRIVE'=>'Columbia River, Washington',
	'DALLA'=>'Dallas, Texas',
	'DENVE'=>'Denver, Colorado',
	'DETRO'=>'Detroit, Michigan',
	'EDMON'=>'Edmonton, Alberta, Canada',
	'EHOUS'=>'ENDOWMENT HOUSE',
	'FRANK'=>'Frankfurt am Main, Germany',
	'FREIB'=>'Freiburg, Germany',
	'FRESN'=>'Fresno, California',
	'FUKUO'=>'Fukuoka, Japan',
	'GUADA'=>'Guadalajara, Mexico',
	'GUATE'=>'Guatemala City, Guatemala',
	'GUAYA'=>'Guayaquil, Ecuador',
	'HAGUE'=>'The Hague, Netherlands',
	'HALIF'=>'Halifax, Nova Scotia, Canada',
	'HARTF'=>'Hartford, Connecticut',
	'HAWAI'=>'Laie, Hawaii',
	'HELSI'=>'Helsinki, Finland',
	'HERMO'=>'Hermosillo, Mexico',
	'HKONG'=>'Hong Kong',
	'HOUST'=>'Houston, Texas',
	'IFALL'=>'Idaho Falls, Idaho',
	'JOHAN'=>'Johannesburg, South Africa',
	'JRIVE'=>'Jordan River, Utah',
	'KIEV' =>'Kiev, Ukraine',
	'KONA' =>'Kona, Hawaii',
	'LANGE'=>'Los Angeles, California',
	'LIMA' =>'Lima, Peru',
	'LOGAN'=>'Logan, Utah',
	'LONDO'=>'London, England',
	'LOUIS'=>'Louisville, Kentucky',
	'LUBBO'=>'Lubbock, Texas',
	'LVEGA'=>'Las Vegas, Nevada',
	'MADRI'=>'Madrid, Spain',
	'MANIL'=>'Manila, Philippines',
	'MANTI'=>'Manti, Utah',
	'MEDFO'=>'Medford, Oregon',
	'MELBO'=>'Melbourne, Australia',
	'MEMPH'=>'Memphis, Tennessee',
	'MERID'=>'Merida, Mexico',
	'MEXIC'=>'Mexico City, Mexico',
	'MNTVD'=>'Montevideo, Uruguay',
	'MONTE'=>'Monterrey, Mexico',
	'MONTI'=>'Monticello, Utah',
	'MONTR'=>'Montreal, Quebec, Canada',
	'MTIMP'=>'Mt. Timpanogos, Utah',
	'NASHV'=>'Nashville, Tennessee',
	'NAUV2'=>'Nauvoo, Illinois (new)',
	'NAUVO'=>'Nauvoo, Illinois (original)',
	'NBEAC'=>'Newport Beach, California',
	'NUKUA'=>'Nuku\'Alofa, Tonga',
	'NYORK'=>'New York, New York',
	'NZEAL'=>'Hamilton, New Zealand',
	'OAKLA'=>'Oakland, California',
	'OAXAC'=>'Oaxaca, Mexico',
	'OGDEN'=>'Ogden, Utah',
	'OKLAH'=>'Oklahoma City, Oklahoma',
	'ORLAN'=>'Orlando, Florida',
	'PALEG'=>'Porto Alegre, Mexico',
	'PALMY'=>'Palmyra, New York',
	'PAPEE'=>'Papeete, Tahiti',
	'PERTH'=>'Perth, Australia',
	'POFFI'=>'President\'s Office',
	'PORTL'=>'Portland, Oregon',
	'PREST'=>'Preston, England',
	'PROVO'=>'Provo, Utah',
	'RALEI'=>'Raleigh, North Carolina',
	'RECIF'=>'Recife, Brazil',
	'REDLA'=>'Redlands, California',
	'REGIN'=>'Regina, Saskatchewan, Canada',
	'RENO' =>'Reno, Nevada',
	'SACRA'=>'Sacramento, California',
	'SAMOA'=>'Apia, Samoa',
	'SANTI'=>'Santiago, Chile',
	'SANTO'=>'San Antonio, Texas',
	'SDIEG'=>'San Diego, California',
	'SDOMI'=>'Santo Domingo, Dom. Rep.',
	'SEATT'=>'Seattle, Washington',
	'SEOUL'=>'Seoul, Korea',
	'SGEOR'=>'St. George, Utah',
	'SJOSE'=>'San Jose, Costa Rica',
	'SLAKE'=>'Salt Lake City, Utah',
	'SLOUI'=>'St. Louis, Missouri',
	'SNOWF'=>'Snowflake, Arizona',
	'SPAUL'=>'Sao Paulo, Brazil',
	'SPMIN'=>'St. Paul, Minnesota',
	'SPOKA'=>'Spokane, Washington',
	'STOCK'=>'Stockholm, Sweden',
	'SUVA' =>'Suva, Fiji',
	'SWISS'=>'Bern, Switzerland',
	'SYDNE'=>'Sydney, Australia',
	'TAIPE'=>'Taipei, Taiwan',
	'TAMPI'=>'Tampico, Mexico',
	'TGUTI'=>'Tuxtla Gutierrez, Mexico',
	'TOKYO'=>'Tokyo, Japan',
	'TORNO'=>'Toronto, Ontario, Canada',
	'VERAC'=>'Veracruz, Mexico',
	'VERNA'=>'Vernal, Utah',
	'VILLA'=>'Villa Hermosa, Mexico',
	'WASHI'=>'Washington, DC',
	'WINTE'=>'Winter Quarters, Nebraska',
);

// STAT tags - LDS status codes
$STATUS_CODES = array(
	'BIC'      =>'Born in the covenant',
	'CANCELLED'=>'Sealing cancelled (divorce)',
	'CHILD'    =>'Died as a child: exempt',
	'CLEARED'  =>'Cleared but not yet completed',
	'COMPLETED'=>'Completed; date unknown',
	'DNS'      =>'Do Not Seal: unauthorized',
	'DNS/CAN'  =>'Do Not Seal, previous sealing cancelled',
	'INFANT'   =>'Died as an infant: exempt',
	'PRE-1970' =>'Completed before 1970; date not available',
	'STILLBORN'=>'Stillborn: exempt',
	'SUBMITTED'=>'Submitted but not yet cleared',
	'UNCLEARED'=>'Uncleared: insufficient data',
);

// NPFX tags - name prefixes
$NPFX_accept=array(
	'Adm',
	'Amb',
	'Brig',
	'Can',
	'Capt',
	'Chan',
	'Chapln',
	'Cmdr',
	'Col',
	'Cpl',
	'Cpt',
	'Dr',
	'Gen',
	'Gov',
	'Hon',
	'Lady',
	'Lt',
	'Mr',
	'Mrs',
	'Ms',
	'Msgr',
	'Pfc',
	'Pres',
	'Prof',
	'Pvt',
	'Rabbi',
	'Rep',
	'Rev',
	'Sen',
	'Sgt',
	'Sir',
	'Sr',
	'Sra',
	'Srta',
	'Ven',
);

// SPFX tags - surname prefixes
$SPFX_accept=array(
	'al',
	'da',
	'de',
	'dem',
	'den',
	'der',
	'di',
	'du',
	'el',
	'la',
	'van',
	'von',
);

// NSFX tags - name suffixes
$NSFX_accept=array(
	'I',
	'II',
	'III',
	'IV',
	'Jr',
	'Junior',
	'MD',
	'PhD',
	'Senior',
	'Sr',
	'V',
	'VI',
);

// FILE:FORM tags - file formats
$FILE_FORM_accept=array(
	'avi',
	'bmp',
	'gif',
	'jpeg',
	'mp3',
	'ole',
	'pcx',
	'png',
	'tiff',
	'wav',
);

// Fact tags (as opposed to event tags), that don't normally have a value
$emptyfacts=array(
	'ADOP',
	'ANUL',
	'BAPL',
	'BAPM',
	'BARM',
	'BASM',
	'BIRT',
	'BLES',
	'BURI',
	'CENS',
	'CHAN',
	'CHR',
	'CHRA',
	'CONF',
	'CONL',
	'CREM',
	'DATA',
	'DEAT',
	'DIV',
	'DIVF',
	'EMIG',
	'ENDL',
	'ENGA',
	'FCOM',
	'GRAD',
	'HUSB',
	'IMMI',
	'MAP',
	'MARB',
	'MARC',
	'MARL',
	'MARR',
	'MARS',
	'NATU',
	'ORDN',
	'PROB',
	'RESI',
	'RETI',
	'SLGC',
	'SLGS',
	'WIFE',
	'WILL',
	'_HOL',
	'_NMR',
	'_SEPR',
);

// Tags that require a TEMP subtag
$templefacts=array(
	'BAPL',
	'CONL',
	'ENDL',
	'SLGC',
	'SLGS',
);

// Tags that don't require a PLAC subtag
$nonplacfacts=array(
	'ENDL',
	'NCHI',
	'SLGC',
	'SLGS',
);

// Tags that don't require a DATE subtag
$nondatefacts=array(
	'ABBR',
	'ADDR',
	'AFN',
	'AUTH',
	'CHIL',
	'EMAIL',
	'FAX',
	'HUSB',
	'NAME',
	'NCHI',
	'NOTE',
	'OBJE',
	'PHON',
	'PUBL',
	'REFN',
	'REPO',
	'SEX',
	'SOUR',
	'SSN',
	'TEXT',
	'TITL',
	'WIFE',
	'WWW',
	'_EMAIL',
);

// Tags that require a TYPE subtag
$typefacts=array(
);

// Tags that require a DATE:TIME as well as a DATE
$date_and_time=array(
	'BIRT',
	'DEAT',
);

// Level 2 tags that apply to specific Level 1 tags
// Tags are applied in the order they appear here.
$level2_tags=array(
	'_HEB'=>array(
		'NAME',
		'TITL',
	),
	'ROMN'=>array(
		'NAME',
		'TITL',
	),
	'TYPE'=>array(
		'EVEN',
		'FACT',
		'GRAD',
		'IDNO',
		'MARR',
		'ORDN',
		'SSN',
	),
	'AGNC'=>array(
		'EDUC',
		'GRAD',
		'OCCU',
		'ORDN',
		'RETI',
	),
	'CAUS'=>array(
		'DEAT',
	),
	'CALN'=>array(
		'REPO',
	),
	'CEME'=>array( // CEME is NOT a valid 5.5.1 tag
		'BURI',
	),
	'RELA'=>array(
		'ASSO',
	),
	'DATE'=>array(
		'ADOP',
		'ANUL',
		'BAPL',
		'BAPM',
		'BARM',
		'BASM',
		'BIRT',
		'BLES',
		'BURI',
		'CENS',
		'CENS',
		'CHR',
		'CHRA',
		'CONF',
		'CONL',
		'CREM',
		'DEAT',
		'DIV',
		'DIVF',
		'EDUC',
		'EMIG',
		'ENDL',
		'ENGA',
		'EVEN',
		'EVEN',
		'FCOM',
		'GRAD',
		'IMMI',
		'MARB',
		'MARC',
		'MARL',
		'MARR',
		'MARS',
		'NATU',
		'OCCU',
		'ORDN',
		'PROB',
		'PROP',
		'RELI',
		'RESI',
		'RESI',
		'RETI',
		'SLGC',
		'SLGS',
		'WILL',
		'_TODO',
	),
	'TEMP'=>array(
		'BAPL',
		'CONL',
		'ENDL',
		'SLGC',
		'SLGS',
	),
	'PLAC'=>array(
		'ADOP',
		'ANUL',
		'BAPL',
		'BAPM',
		'BARM',
		'BASM',
		'BIRT',
		'BLES',
		'BURI',
		'CENS',
		'CENS',
		'CHR',
		'CHRA',
		'CONF',
		'CONL',
		'CREM',
		'DEAT',
		'DIV',
		'DIVF',
		'EDUC',
		'EMIG',
		'ENDL',
		'ENGA',
		'EVEN',
		'EVEN',
		'FCOM',
		'GRAD',
		'IMMI',
		'MARB',
		'MARC',
		'MARL',
		'MARR',
		'MARS',
		'NATU',
		'OCCU',
		'ORDN',
		'PROB',
		'PROP',
		'RELI',
		'RESI',
		'RESI',
		'RETI',
		'SLGC',
		'SLGS',
		'SSN',
		'WILL',
	),
	'STAT'=>array(
		'BAPL',
		'CONL',
		'ENDL',
		'SLGC',
		'SLGS',
	),
	'ADDR'=>array(
		'BIRT',
		'BURI',
		'CENS',
		'CHR',
		'CHRA',
		'CREM',
		'DEAT',
		'EDUC',
		'EVEN',
		'GRAD',
		'MARR',
		'OCCU',
		'ORDN',
		'PROP',
		'RESI',
	),
	'PHON'=>array(
		'OCCU',
		'RESI',
	),
	'FAX'=>array(
		'OCCU',
		'RESI',
	),
	'URL'=>array(
		'OCCU',
		'RESI',
	),
	'EMAIL'=>array(
		'OCCU',
		'RESI',
	),
	'AGE'=>array(
		'CENS',
		'DEAT',
	),
	'HUSB'=>array(
		'MARR',
	),
	'WIFE'=>array(
		'MARR',
	),
	'FAMC'=>array(
		'ADOP',
		'SLGC',
	),
	'FILE'=>array(
		'OBJE',
	),
	'_PRIM'=>array(
		'OBJE',
	),
	'EVEN'=>array(
		'DATA',
	),
	'_PGVU'=>array(
		'_TODO',
	),
);

// The order of name parts, when generating names
$STANDARD_NAME_FACTS=array('NAME', 'NPFX', 'GIVN', 'SPFX', 'SURN', 'NSFX');
$REVERSED_NAME_FACTS=array('NAME', 'NPFX', 'SPFX', 'SURN', 'GIVN', 'NSFX');



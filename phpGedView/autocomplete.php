<?php
/**
* Returns data for autocompletion
*
* phpGedView: Genealogy Viewer
* Copyright (C) 2002 to 2020  PGV Development Team.  All rights reserved.
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
* @subpackage Edit
* @version $Id$
*/

define('PGV_SCRIPT_NAME', 'autocomplete.php');
require './config.php';
header("Content-Type: text/plain; charset=$CHARACTER_SET");

// We have finished writing to $_SESSION, so release the lock
session_write_close();

//-- args
$FILTER=safe_GET('q', PGV_REGEX_UNSAFE); // we can search on '"><& etc.
$FILTER=UTF8_strtoupper($FILTER);
$OPTION=safe_GET('option');
$FORMAT=safe_GET('fmt');
$FIELD =safe_GET('field');

switch ($FIELD) {
case 'INDI':
	$data=autocomplete_INDI($FILTER, $OPTION);
	break;
case 'FAM':
	$data=autocomplete_FAM($FILTER, $OPTION);
	break;
case 'NOTE':
	$data=autocomplete_NOTE($FILTER);
	break;
case 'SOUR':
	$data=autocomplete_SOUR($FILTER);
	break;
case 'SOUR_TITL':
	$data=autocomplete_SOUR($FILTER);
	break;
case 'INDI_BURI_CEME':
	$data=autocomplete_INDI_BURI_CEME($FILTER);
	break;
case 'INDI_SOUR_PAGE':
	$data=autocomplete_INDI_SOUR_PAGE($FILTER, $OPTION);
	break;
case 'FAM_SOUR_PAGE':
	$data=autocomplete_FAM_SOUR_PAGE($FILTER, $OPTION);
	break;
case 'SOUR_PAGE':
	$data=autocomplete_SOUR_PAGE($FILTER, $OPTION);
	break;
case 'REPO':
	$data=autocomplete_REPO($FILTER);
	break;
case 'REPO_NAME':
	$data=autocomplete_REPO_NAME($FILTER);
	break;
case 'OBJE':
	$data=autocomplete_OBJE($FILTER);
	break;
case 'IFSRO':
	$data=autocomplete_IFSRO($FILTER);
	break;
case 'SURN':
	$data=autocomplete_SURN($FILTER);
	break;
case 'GIVN':
	$data=autocomplete_GIVN($FILTER);
	break;
case 'NAME':
	$data=autocomplete_NAME($FILTER);
	break;
case 'PLAC':
	$data=autocomplete_PLAC($FILTER, $OPTION);
	break;
default:
	die("Bad arg: field={$FIELD}");
}

//-- sort
$data = array_unique($data);
uasort($data, "stringsort");

//-- output
if ($FORMAT=="json") {
	//echo json_encode(array($FILTER, $data));//does not seem to work for some reason
	$results=array();
	foreach ($data as $k=>$v) {
		$results[]=$v;
	}
	printf('["%s", %s]',$FILTER, json_encode($results));
} else {
	foreach ($data as $k=>$v) {
		echo "$v|$k\n";
	}
}


/**
* returns INDIviduals matching filter
* @return Array of string
*/
function autocomplete_INDI($FILTER, $OPTION) {
	global $pgv_lang, $MAX_ALIVE_AGE;

	// when adding ASSOciate $OPTION may contain :
	// current INDI/FAM [, current event date]
	if ($OPTION) {
		list($pid, $event_date) = explode("|", $OPTION."|");
		$record=GedcomRecord::getInstance($pid); // INDI or FAM
		$tmp=new GedcomDate($event_date);
		$event_jd=$tmp->JD();
		// INDI
		$indi_birth_jd = 0;
		if ($record && $record->getType()=="INDI") {
			$indi_birth_jd=$record->getEstimatedBirthDate()->minJD();
		}
		// HUSB & WIFE
		$husb_birth_jd = 0;
		$wife_birth_jd = 0;
		if ($record && $record->getType()=="FAM") {
			$husb=$record->getHusband();
			if ($husb) {
				$husb_birth_jd = $husb->getEstimatedBirthDate()->minJD();
			}
			$wife=$record->getWife();
			if ($wife) {
				$wife_birth_jd = $wife->getEstimatedBirthDate()->minJD();
			}
		}
	}
	$rows=get_autocomplete_INDI($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$person=Person::getInstance($row);
		if ($person->canDisplayName()) {
			// filter ASSOciate
			if ($OPTION && $event_jd) {
				// no self-ASSOciate
				if ($pid && $person->getXref()==$pid) {
					continue;
				}
				// filter by birth date
				$person_birth_jd=$person->getEstimatedBirthDate()->minJD();
				if ($person_birth_jd) {
					// born after event or not a contemporary
					if ($event_jd && $person_birth_jd>$event_jd) {
						continue;
					} elseif ($indi_birth_jd && abs($indi_birth_jd-$person_birth_jd)>$MAX_ALIVE_AGE*365) {
						continue;
					} elseif ($husb_birth_jd && $wife_birth_jd && abs($husb_birth_jd-$person_birth_jd)>$MAX_ALIVE_AGE*365 && abs($wife_birth_jd-$person_birth_jd)>$MAX_ALIVE_AGE*365) {
						continue;
					} elseif ($husb_birth_jd && abs($husb_birth_jd-$person_birth_jd)>$MAX_ALIVE_AGE*365) {
						continue;
					} elseif ($wife_birth_jd && abs($wife_birth_jd-$person_birth_jd)>$MAX_ALIVE_AGE*365) {
						continue;
					}
				}
				// filter by death date
				$person_death_jd=$person->getEstimatedDeathDate()->MaxJD();
				if ($person_death_jd) {
					// dead before event or not a contemporary
					if ($event_jd && $person_death_jd<$event_jd) {
						continue;
					} elseif ($indi_birth_jd && $person_death_jd<$indi_birth_jd) {
						continue;
					} elseif ($husb_birth_jd && $wife_birth_jd && $person_death_jd<$husb_birth_jd && $person_death_jd<$wife_birth_jd) {
						continue;
					}	elseif ($husb_birth_jd && $person_death_jd<$husb_birth_jd) {
						continue;
					} elseif ($wife_birth_jd && $person_death_jd<$wife_birth_jd) {
						continue;
					}
				}
			}
			// display
			$data[$person->getXref()]=$person->getFullName();
			if ($OPTION && $event_date && $person->getBirthDate()->isOK()) {
				$data[$person->getXref()].=" <span class=\"age\">(".$pgv_lang["age"]." ".$person->getBirthDate()->MinDate()->getAge(false, $event_jd).")</span>";
			} else {
				$data[$person->getXref()].=" <u>".ltrim($person->getBirthYear(), "0")."-".ltrim($person->getDeathYear(), "0")."</u>";
			}
		}
	}
	return $data;
}

/**
* returns FAMilies matching filter
* @return Array of string
*/
function autocomplete_FAM($FILTER, $OPTION) {

	//-- search for INDI names
	$ids=array_keys(autocomplete_INDI($FILTER, $OPTION));

	$rows=get_autocomplete_FAM($FILTER, $ids);
	$data=array();
	foreach ($rows as $row) {
		$family = Family::getInstance($row);
		if ($family->canDisplayName()) {
			$data[$row["xref"]] =
				$family->getFullName().
				" <u>".
				ltrim($family->getMarriageYear(), "0").
				"</u>";
		}
	}
	return $data;
}

/**
* returns NOTEs (Shared) matching filter
* @return Array of string
*/
function autocomplete_NOTE($FILTER) {

	$rows=get_autocomplete_NOTE($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$note = Note::getInstance($row);
		if ($note->canDisplayName()) {
			$data[$row["xref"]] = $note->getFullName();
		}
	}
	return $data;
}

/**
* returns SOURces matching filter
* @return Array of string
*/
function autocomplete_SOUR($FILTER) {

	$rows=get_autocomplete_SOUR($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$source = Source::getInstance($row);
		if ($source->canDisplayName()) {
			$data[$row["xref"]] = $source->getFullName();
		}
	}
	return $data;
}

/**
* returns SOUR:TITL matching filter
* @return Array of string
*/
function autocomplete_SOUR_TITL($FILTER) {

	$rows=get_autocomplete_SOUR_TITL($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$source = Source::getInstance($row);
		if ($source->canDisplayName()) {
			$data[] = $source->getFullName();
		}
	}
	return $data;
}

/**
* returns INDI_BURI_CEME matching filter
* @return Array of string
*/
function autocomplete_INDI_BURI_CEME($FILTER) {

	$rows=get_autocomplete_INDI_BURI_CEME($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$person = Person::getInstance($row);
		if ($person->canDisplayDetails()) {
			$i = 1;
			do {
				$srec = get_sub_record("BURI", 1, $person->gedrec, $i++);
				$ceme = get_gedcom_value("CEME", 2, $srec);
				if (stripos($ceme, $FILTER)!==false || empty($FILTER)) {
					$data[] = $ceme;
				}
			} while ($srec);
		}
	}
	return $data;
}

/**
* returns INDI:SOUR:PAGE matching filter
* @return Array of string
*/
function autocomplete_INDI_SOUR_PAGE($FILTER, $OPTION) {

	$rows=get_autocomplete_INDI_SOUR_PAGE($FILTER, $OPTION);
	$data=array();
	foreach ($rows as $row) {
		$person = Person::getInstance($row);
		if ($person->canDisplayDetails()) {
			// a single INDI may have multiple level 1 and level 2 sources
			for ($level=1; $level<=2; $level++) {
				$i = 1;
				do {
					$srec = get_sub_record("SOUR @{$OPTION}@", $level, $person->gedrec, $i++);
					$page = get_gedcom_value("PAGE", $level+1, $srec);
					if (stripos($page, $FILTER)!==false || empty($FILTER)) {
						$data[] = $page;
					}
				} while ($srec);
			}
		}
	}
	return $data;
}

/**
* returns FAM:SOUR:PAGE matching filter
* @return Array of string
*/
function autocomplete_FAM_SOUR_PAGE($FILTER, $OPTION) {

	$rows=get_autocomplete_FAM_SOUR_PAGE($FILTER, $OPTION);
	$data=array();
	foreach ($rows as $row) {
		$family = Family::getInstance($row);
		if ($family->canDisplayDetails()) {
			// a single FAM may have multiple level 1 and level 2 sources
			for ($level=1; $level<=2; $level++) {
				$i = 1;
				do {
					$srec = get_sub_record("SOUR @{$OPTION}@", $level, $family->gedrec, $i++);
					$page = get_gedcom_value("PAGE", $level+1, $srec);
					if (stripos($page, $FILTER)!==false || empty($FILTER)) {
						$data[] = $page;
					}
				} while ($srec);
			}
		}
	}
	return $data;
}

/**
* returns SOUR:PAGE matching filter
* @return Array of string
*/
function autocomplete_SOUR_PAGE($FILTER, $OPTION) {
	return array_merge(
		autocomplete_INDI_SOUR_PAGE($FILTER, $OPTION),
		autocomplete_FAM_SOUR_PAGE($FILTER, $OPTION));
}

/**
* returns REPOsitories matching filter
* @return Array of string
*/
function autocomplete_REPO($FILTER) {

	$rows=get_autocomplete_REPO($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$repository = Repository::getInstance($row);
		if ($repository->canDisplayName()) {
			$data[$row["xref"]] = $repository->getFullName();
		}
	}
	return $data;
}

/**
* returns REPO:NAME matching filter
* @return Array of string
*/
function autocomplete_REPO_NAME($FILTER) {

	$rows=get_autocomplete_REPO_NAME($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$repository = Repository::getInstance($row);
		if ($repository->canDisplayName()) {
			$data[] = $repository->getFullName();
		}
	}
	return $data;
}

/**
* returns OBJEcts matching filter
* @return Array of string
*/
function autocomplete_OBJE($FILTER) {

	$rows=get_autocomplete_OBJE($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$media = Media::getInstance($row["m_media"]);
		if ($media && $media->canDisplayDetails()) {
			$data[$row["m_media"]] =
				"<img alt=\"".
				$media->getXref().
				"\" src=\"".
				$media->getThumbnail().
				"\" width=\"40\" /> ".
				$media->getFullName();
		}
	}
	return $data;
}

/**
* returns INDI FAM SOUR NOTE REPO OBJE matching filter
* @return Array of string
*/
function autocomplete_IFSRO() {
	global $GEDCOM_ID_PREFIX, $FAM_ID_PREFIX, $SOURCE_ID_PREFIX, $NOTE_ID_PREFIX, $REPO_ID_PREFIX, $MEDIA_ID_PREFIX, $FILTER;

	// is input text a gedcom xref ?
	$prefix = strtoupper(substr($FILTER, 0, 1));
	if (ctype_digit(substr($FILTER, 1))) {
		if ($prefix == $GEDCOM_ID_PREFIX) {
			return autocomplete_INDI($FILTER, '');
		} elseif ($prefix == $FAM_ID_PREFIX) {
			return autocomplete_FAM($FILTER, '');
		} elseif ($prefix == $SOURCE_ID_PREFIX) {
			return autocomplete_SOUR($FILTER);
		} elseif ($prefix == $NOTE_ID_PREFIX) {
			return autocomplete_NOTE($FILTER);
		} elseif ($prefix == $REPO_ID_PREFIX) {
			return autocomplete_REPO($FILTER);
		} elseif ($prefix == $MEDIA_ID_PREFIX) {
			return autocomplete_OBJE($FILTER);
		}
	}
	return array_merge(
		autocomplete_INDI($FILTER, ''),
		autocomplete_FAM($FILTER, ''),
		autocomplete_SOUR($FILTER),
		autocomplete_NOTE($FILTER),
		autocomplete_REPO($FILTER),
		autocomplete_OBJE($FILTER)
		);
}

/**
* returns SURNames matching filter
* @return Array of string
*/
function autocomplete_SURN($FILTER) {
	return get_autocomplete_SURN($FILTER);
}

/**
* returns GIVenNames matching filter
* @return Array of string
*/
function autocomplete_GIVN($FILTER) {

	$rows=get_autocomplete_GIVN($FILTER);
	$data=array();
	foreach ($rows as $row) {
		$givn=$row->n_givn;
		list($givn) = explode("/", $givn);
		list($givn) = explode(",", $givn);
		list($givn) = explode("*", $givn);
		list($givn) = explode(" ", $givn);
		if ($givn) {
			$data[]=$row->n_givn;
		}
	}
	return $data;
}

/**
* returns NAMEs matching filter
* @return Array of string
*/
function autocomplete_NAME($FILTER) {
	return array_merge(autocomplete_GIVN($FILTER), autocomplete_SURN($FILTER));
}

/**
* returns PLACes matching filter
* @return Array of string City, County, State/Province, Country
*/
function autocomplete_PLAC($FILTER, $OPTION) {
	global $GEONAMES_KEY, $GEONAMES_BIAS, $GEOCODE_KEY, $lang_short_cut, $LANGUAGE;

	$data=get_autocomplete_PLAC($FILTER);

	//-- no match => perform a geoNames query if enabled
	if (empty($data) && !empty($GEONAMES_KEY)) {
		$bias = '';
		if (!empty($GEONAMES_BIAS)) $bias = '&countryBias='.$GEONAMES_BIAS ;
		$url = "http://ws.geonames.org/searchJSON".
					'?username='.$GEONAMES_KEY.
					'&name_startsWith='.urlencode($FILTER).
					$bias.				// Country Bias (if applicable)
					"&lang=".$lang_short_cut[$LANGUAGE].
					'&fcode=PPL'. 		// Feature: populated place
					'&fcode=PPLH'. 		// Feature: historical populated place
					'&fcode=PPLQ'. 		// Feature: abandoned populated place
					'&fcode=PPLW'. 		// Feature: destroyed populated place
					'&fcode=LCTY'. 		// Feature: locality
					'&fcode=PPLL'. 		// Feature: populated locality
					'&fcode=PPLF'. 		// Feature: farm village
					'&fcode=FRM'. 		// Feature: farm
					'&fcode=FRMQ'. 		// Feature: abandoned farm
					'&fcode=FRMS'. 		// Feature: farms
					'&fcode=FRMT'. 		// Feature: farmstead
					'&fcode=HMSD'. 		// Feature: homestead (specific to Australia & New Zealand)
					'&fcode=STLMT'. 	// Feature: Israeli settlement
					'&fcode=CMTY'.		// Feature: cemetery
					"&style=full";
		// try to use curl when file_get_contents not allowed
		if (function_exists('curl_init')) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$json = curl_exec($ch);
			curl_close($ch);
		} elseif (ini_get('allow_url_fopen')) {
			$json = file_get_contents($url);
		} else {
			return $data;
		}
		$places = json_decode($json, true);
		if ($places["geonames"]) {
			foreach ($places["geonames"] as $k => $place) {
				$data[] = $place["name"].", ".
									$place["adminName2"].", ".
									$place["adminName1"].", ".
									$place["countryName"];
			}
		}
	}
	if (empty($data) && !empty($GEOCODE_KEY)) {
		$iso3166=array(
                        'ABW'=>'AW', 'AFG'=>'AF', 'AGO'=>'AO', 'AIA'=>'AI', 'ALA'=>'AX', 'ALB'=>'AL', 'AND'=>'AD', 'ANT'=>'AN',
                        'ARE'=>'AE', 'ARG'=>'AR', 'ARM'=>'AM', 'ASM'=>'AS', 'ATA'=>'AQ', 'ATF'=>'TF', 'ATG'=>'AG', 'AUS'=>'AU',
                        'AUT'=>'AT', 'AZE'=>'AZ', 'BDI'=>'BI', 'BEL'=>'BE', 'BEN'=>'BJ', 'BFA'=>'BF', 'BGD'=>'BD', 'BGR'=>'BG',
                        'BHR'=>'BH', 'BHS'=>'BS', 'BIH'=>'BA', 'BLR'=>'BY', 'BLZ'=>'BZ', 'BMU'=>'BM', 'BOL'=>'BO', 'BRA'=>'BR',
                        'BRB'=>'BB', 'BRN'=>'BN', 'BTN'=>'BT', 'BVT'=>'BV', 'BWA'=>'BW', 'CAF'=>'CF', 'CAN'=>'CA', 'CCK'=>'CC',
                        'CHE'=>'CH', 'CHL'=>'CL', 'CHN'=>'CN', 'CHI'=>'JE', 'CIV'=>'CI', 'CMR'=>'CM', 'COD'=>'CD', 'COG'=>'CG',
                        'COK'=>'CK', 'COL'=>'CO', 'COM'=>'KM', 'CPV'=>'CV', 'CRI'=>'CR', 'CUB'=>'CU', 'CXR'=>'CX', 'CYM'=>'KY',
                        'CYP'=>'CY', 'CZE'=>'CZ', 'DEU'=>'DE', 'DJI'=>'DJ', 'DMA'=>'DM', 'DNK'=>'DK', 'DOM'=>'DO', 'DZA'=>'DZ',
                        'ECU'=>'EC', 'EGY'=>'EG', 'ENG'=>'GB', 'ERI'=>'ER', 'ESH'=>'EH', 'ESP'=>'ES', 'EST'=>'EE', 'ETH'=>'ET',
                        'FIN'=>'FI', 'FJI'=>'FJ', 'FLK'=>'FK', 'FRA'=>'FR', 'FRO'=>'FO', 'FSM'=>'FM', 'GAB'=>'GA', 'GBR'=>'GB',
                        'GEO'=>'GE', 'GHA'=>'GH', 'GIB'=>'GI', 'GIN'=>'GN', 'GLP'=>'GP', 'GMB'=>'GM', 'GNB'=>'GW', 'GNQ'=>'GQ',
                        'GRC'=>'GR', 'GRD'=>'GD', 'GRL'=>'GL', 'GTM'=>'GT', 'GUF'=>'GF', 'GUM'=>'GU', 'GUY'=>'GY', 'HKG'=>'HK',
                        'HMD'=>'HM', 'HND'=>'HN', 'HRV'=>'HR', 'HTI'=>'HT', 'HUN'=>'HU', 'IDN'=>'ID', 'IND'=>'IN', 'IOT'=>'IO',
                        'IRL'=>'IE', 'IRN'=>'IR', 'IRQ'=>'IQ', 'ISL'=>'IS', 'ISR'=>'IL', 'ITA'=>'IT', 'JAM'=>'JM', 'JOR'=>'JO',
                        'JPN'=>'JA', 'KAZ'=>'KZ', 'KEN'=>'KE', 'KGZ'=>'KG', 'KHM'=>'KH', 'KIR'=>'KI', 'KNA'=>'KN', 'KOR'=>'KO',
                        'KWT'=>'KW', 'LAO'=>'LA', 'LBN'=>'LB', 'LBR'=>'LR', 'LBY'=>'LY', 'LCA'=>'LC', 'LIE'=>'LI', 'LKA'=>'LK',
                        'LSO'=>'LS', 'LTU'=>'LT', 'LUX'=>'LU', 'LVA'=>'LV', 'MAC'=>'MO', 'MAR'=>'MA', 'MCO'=>'MC', 'MDA'=>'MD',
                        'MDG'=>'MG', 'MDV'=>'MV', 'MEX'=>'ME', 'MHL'=>'MH', 'MKD'=>'MK', 'MLI'=>'ML', 'MLT'=>'MT', 'MMR'=>'MM',
                        'MNG'=>'MN', 'MNP'=>'MP', 'MNT'=>'ME', 'MOZ'=>'MZ', 'MRT'=>'MR', 'MSR'=>'MS', 'MTQ'=>'MQ', 'MUS'=>'MU',
                        'MWI'=>'MW', 'MYS'=>'MY', 'MYT'=>'YT', 'NAM'=>'NA', 'NCL'=>'NC', 'NER'=>'NE', 'NFK'=>'NF', 'NGA'=>'NG',
                        'NIC'=>'NI', 'NIR'=>'GB', 'NIU'=>'NU', 'NLD'=>'NL', 'NOR'=>'NO', 'NPL'=>'NP', 'NRU'=>'NR', 'NZL'=>'NZ',
                        'OMN'=>'OM', 'PAK'=>'PK', 'PAN'=>'PA', 'PCN'=>'PN', 'PER'=>'PE', 'PHL'=>'PH', 'PLW'=>'PW', 'PNG'=>'PG',
                        'POL'=>'PL', 'PRI'=>'PR', 'PRK'=>'KP', 'PRT'=>'PO', 'PRY'=>'PY', 'PSE'=>'PS', 'PYF'=>'PF', 'QAT'=>'QA',
                        'REU'=>'RE', 'ROU'=>'RO', 'RUS'=>'RU', 'RWA'=>'RW', 'SAU'=>'SA', 'SCT'=>'GB', 'SDN'=>'SD', 'SEN'=>'SN',
                        'SER'=>'RS', 'SGP'=>'SG', 'SGS'=>'GS', 'SHN'=>'SH', 'SIC'=>'IT', 'SJM'=>'SJ', 'SLB'=>'SB', 'SLE'=>'SL',
                        'SLV'=>'SV', 'SMR'=>'SM', 'SOM'=>'SO', 'SPM'=>'PM', 'STP'=>'ST', 'SUN'=>'RU', 'SUR'=>'SR', 'SVK'=>'SK',
                        'SVN'=>'SI', 'SWE'=>'SE', 'SWZ'=>'SZ', 'SYC'=>'SC', 'SYR'=>'SY', 'TCA'=>'TC', 'TCD'=>'TD', 'TGO'=>'TG',
                        'THA'=>'TH', 'TJK'=>'TJ', 'TKL'=>'TK', 'TKM'=>'TM', 'TLS'=>'TL', 'TON'=>'TO', 'TTO'=>'TT', 'TUN'=>'TN',
                        'TUR'=>'TR', 'TUV'=>'TV', 'TWN'=>'TW', 'TZA'=>'TZ', 'UGA'=>'UG', 'UKR'=>'UA', 'UMI'=>'UM', 'URY'=>'UY',
                        'USA'=>'US', 'UZB'=>'UZ', 'VAT'=>'VA', 'VCT'=>'VC', 'VEN'=>'VE', 'VGB'=>'VG', 'VIR'=>'VI', 'VNM'=>'VN',
                        'VUT'=>'VU', 'WLF'=>'WF', 'WLS'=>'GB', 'WSM'=>'WS', 'YEM'=>'YE', 'ZAF'=>'ZA', 'ZMB'=>'ZM', 'ZWE'=>'ZW'
                );
		$url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($FILTER).
			'&key='.$GEOCODE_KEY.'&language='.$lang_short_cut[$LANGUAGE];
		if (function_exists('curl_init')) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$json = curl_exec($ch);
			curl_close($ch);
		} elseif (ini_get('allow_url_fopen')) {
			$json = file_get_contents($url);
		} else {
			return $data;
		}
		$places = json_decode($json, true);
		if ($places["status"] == 'OK') {
			foreach ($places["results"] as $place) {
				$plac = '';
				$comma = '';
				foreach ($place["address_components"] as $comp){
					if (!in_array('administrative_area_level_2', $comp['types'])
					    && !in_array('administrative_area_level_3', $comp['types'])
					    && !in_array('country', $comp['types'])
					    && !in_array('postal_code', $comp['types'])
					    && $comp["long_name"] != $plac){
						$plac .= $comma.$comp["long_name"];
						$comma = ', ';
					} elseif (in_array('country', $comp['types'])){
						$cntry = array_search($comp["short_name"],$iso3166);
						$plac .= $comma.(empty($cntry)?$comp["short_name"]:$cntry);
						$comma = ', ';
					}
				}
				if (isset($place['geometry']["location"])){
					$plac .= '|'.$place['geometry']["location"]['lat'].'|'.$place['geometry']["location"]['lng'];
					if (isset($place['geometry']['viewport']))
						$plac .= '|'.round(log(360 /($place['geometry']['viewport']['northeast']['lat']-$place['geometry']['viewport']['southwest']['lat']))/1.4);
				}
				$data[] = $plac;
			}
		}
	}

	// split ?
	if ($OPTION=="split") {
		foreach ($data as $k=>$v) {
			list($data[$k]) = explode(",", $v);
		}
	}

	return $data;
}

?>

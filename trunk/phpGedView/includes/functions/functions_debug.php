<?php
/**
* Functions used for debugging
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
* @package PhpGedView
* @subpackage Display
* @version $Id$
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_FUNCTIONS_DEBUG_PHP', '');

/**
 * This function produces a hexadecimal dump of the input string for debugging purposes.
 *
 * The input string is expected to be in UTF-8.  UTF-8 characters are from 1 to 4 bytes long.
 *
 * The dump consists of a ruler line, followed by the UTF-8 input string.  Each UTF-8 character is separated
 * into up to 4 bytes, which are then printed in hexadecimal, vertically, under the original UTF-8 character.
 *
 * Thus, the dump will consist of at least 4 lines:
 * 		ruler, UTF-8 character, left nibble of 1st byte, right nibble of 1st byte
 *
 * The dump will contain up to 3 additional pairs of lines, each corresponding to the left and right nibbles
 * of the following 2nd, 3rd, and 4th bytes of the original UTF-8 character.
*/

function string_dump($input) {
	if (!is_string($input) || $input == '') return false;
	
	$fillChar = '.';		// This character replaces unprintable text (don't use the UTF-8 Replacement Character)

	$UTF8 = array();
	$hex1L = '';
	$hex1R = '';
	$hex2L = '';
	$hex2R = '';
	$hex3L = '';
	$hex3R = '';
	$hex4L = '';
	$hex4R = '';

	$pos = 0;
	while (true) {
		// Separate the input string into UTF-8 characters
		$byte0 = ord(substr($input, $pos, 1));
		$charLen = 1;
		if (($byte0 & 0xE0) == 0xC0) $charLen = 2;  // 2-byte sequence
		if (($byte0 & 0xF0) == 0xE0) $charLen = 3;  // 3-byte sequence
		if (($byte0 & 0xF8) == 0xF0) $charLen = 4;  // 4-byte sequence
		$thisChar = substr($input, $pos, $charLen);
		$UTF8[] = $thisChar;

		// Separate the current UTF-8 character into hexadecimal digits
		$byte = bin2hex(substr($thisChar, 0, 1));
		$hex1L .= substr($byte, 0, 1);
		$hex1R .= substr($byte, 1, 1);

		if ($charLen > 1) {
			$byte = bin2hex(substr($thisChar, 1, 1));
			$hex2L .= substr($byte, 0, 1);
			$hex2R .= substr($byte, 1, 1);
		} else {
			$hex2L .= ' ';
			$hex2R .= ' ';
		}

		if ($charLen > 2) {
			$byte = bin2hex(substr($thisChar, 2, 1));
			$hex3L .= substr($byte, 0, 1);
			$hex3R .= substr($byte, 1, 1);
		} else {
			$hex3L .= ' ';
			$hex3R .= ' ';
		}

		if ($charLen > 3) {
			$byte = bin2hex(substr($thisChar, 3, 1));
			$hex4L .= substr($byte, 0, 1);
			$hex4R .= substr($byte, 1, 1);
		} else {
			$hex4L .= ' ';
			$hex4R .= ' ';
		}

		$pos += $charLen;
		if ($pos>=strlen($input)) break;
	}

	$pos = 0;
	$lastPos = count($UTF8);
	$haveByte4 = (trim($hex4L)!='');
	$haveByte3 = (trim($hex3L)!='');
	$haveByte2 = (trim($hex2L)!='');

	// We're ready: now output everything
	echo '<br /><code><span dir="ltr">';
	while (true) {
		$lineLength = $lastPos - $pos;
		if ($lineLength>100) $lineLength = 100;

		// Line 1: ruler
		$thisLine = substr('      '.$pos, -6).' ';
		$thisLine .= substr('........10........20........30........40........50........60........70........80........90.......100', 0, $lineLength);
		echo str_replace(' ', '&nbsp;', $thisLine), '<br />';

		// Line 2: UTF-8 character string.  Here we need to ensure that unprintable codes are transformed properly
		//									and that HTML tags or entities aren't acted upon by the browser
		$thisLine = '';
		for ($i=$pos; $i<($pos+$lineLength); $i++) {
			while (true) {
				$thisChar = $UTF8[$i];

				// ASCII control codes
				if ($thisChar < "\x20") {
					$thisChar = $fillChar;		// ASCII control codes are not printable
					break;
				}
				if ($thisChar == "\x7F") {
					$thisChar = $fillChar;		// ASCII DEL code is not printable
					break;
				}
				
				switch ($thisChar) {
					// Special treatment of HTML entities and HTML tags
					case '&':
						$thisChar = '&amp;';		// Ampersand is an HTML entity lead-in and should receive special treatment
						break 2;
					case '<':
						$thisChar = '&lt;';			// Less-than is an HTML tag lead-in and should also receive special treatment
						break 2;
					case ' ':
						$thisChar = '&nbsp;';		// Make sure the browser doesn't try to split the text at a space code
						break 2;
					// UTF-8 control codes, mostly according to Wikipedia
					case "\xD8\x9C":		//					U+061C	ALM (Right-to-left zero-width Arabic character)
					case PGV_UTF8_LRM:		// \xE2\x80\x8E		U+200E  LRM (Left-to-right zero-width character)
					case PGV_UTF8_RLM:		// \xE2\x80\x8F		U+200F  RLM (Right-to-left zero-width non-Arabic character)
					case "\xE2\x80\xA8":	//					U+2028	LS (Line separator)
					case "\xE2\x80\xA9":	//					U+2029	PS (Paragraph separator)
					case PGV_UTF8_LRO:		// \xE2\x80\xAD		U+202D  (Left to Right override: force everything following to LTR mode)
					case PGV_UTF8_RLO:		// \xE2\x80\xAE		U+202E  (Right to Left override: force everything following to RTL mode)
					case PGV_UTF8_LRE:		// \xE2\x80\xAA		U+202A  (Left to Right embedding: treat everything following as LTR text)
					case PGV_UTF8_RLE:		// \xE2\x80\xAB		U+202B  (Right to Left embedding: treat everything following as RTL text)
					case PGV_UTF8_PDF:		// \xE2\x80\xAC		U+202C  (Pop directional formatting: restore state prior to last LRO, RLO, LRE, RLE)
					case "\xE2\x81\xA6":	//					U+2066	LRI (Treat the following text as isolated and left-to-right)			
					case "\xE2\x81\xA7":	//					U+2067	RLI (Treat the following text as isolated and right-to-left)			
					case "\xE2\x81\xA8":	//					U+2068	FSI (Treat the following text as isolated and in the direction of its first strong directional character that is not inside a nested isolate)			
					case "\xE2\x81\xA9":	//					U+2069	PDI (End the scope of the last LRI, RLI, or FSI)			
						$thisChar = $fillChar;		// UTF-8 control codes are not printable
						break 2;
					}
	
				// Check for Control Pictures block U+2400 to U+243F
				if (($thisChar >= "\xE2\x90\x80") && ($thisChar <= "\xE2\x90\xBF")) {
					$thisChar = $fillChar;		// These codes mess up spacing of the text line
					break;
				}
	
				// Check for the Specials code block U+FFF0 to U+FFFF
				if (($thisChar >= "\xEF\xBF\xB0") && ($thisChar <= "\xEF\xBF\xBF")) {
					$thisChar = $fillChar;		// These codes mess up spacing of the text line
					break;
				}
				
				// Check for code points beyond the Basic set
				if (($thisChar > "\xEF\xBF\xBF")) {
					$thisChar = '&nbsp;';		// Don't try to print anything for these
					break;
				}
				
				break;		// None of the above
			}

			$thisLine .= $thisChar;
		}
		echo '&nbsp;&nbsp;UTF8&nbsp;', $thisLine, '<br />';

		// Line 3:  First hexadecimal byte
		$thisLine = 'Byte 1 ';
		$thisLine .= substr($hex1L, $pos, $lineLength);
		$thisLine .= '<br />';
		$thisLine .= '       ';
		$thisLine .= substr($hex1R, $pos, $lineLength);
		$thisLine .= '<br />';
		echo str_replace(array(' ', '<br&nbsp;/>'), array('&nbsp;', '<br />'), $thisLine);

		// Line 4:  Second hexadecimal byte
		if ($haveByte2) {
			$thisLine = 'Byte 2 ';
			$thisLine .= substr($hex2L, $pos, $lineLength);
			$thisLine .= '<br />';
			$thisLine .= '       ';
			$thisLine .= substr($hex2R, $pos, $lineLength);
			$thisLine .= '<br />';
			echo str_replace(array(' ', '<br&nbsp;/>'), array('&nbsp;', '<br />'), $thisLine);
		}

		// Line 5:  Third hexadecimal byte
		if ($haveByte3) {
			$thisLine = 'Byte 3 ';
			$thisLine .= substr($hex3L, $pos, $lineLength);
			$thisLine .= '<br />';
			$thisLine .= '       ';
			$thisLine .= substr($hex3R, $pos, $lineLength);
			$thisLine .= '<br />';
			echo str_replace(array(' ', '<br&nbsp;/>'), array('&nbsp;', '<br />'), $thisLine);
		}

		// Line 6:  Fourth hexadecimal byte
		if ($haveByte4) {
			$thisLine = 'Byte 4 ';
			$thisLine .= substr($hex4L, $pos, $lineLength);
			$thisLine .= '<br />';
			$thisLine .= '       ';
			$thisLine .= substr($hex4R, $pos, $lineLength);
			$thisLine .= '<br />';
			echo str_replace(array(' ', '<br&nbsp;/>'), array('&nbsp;', '<br />'), $thisLine);
		}
		echo '<br />';
		$pos += $lineLength;
		if ($pos >= $lastPos) break;
	}

	echo '</span></code>';
	return;
}
?>

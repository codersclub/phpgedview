<?php

/**
* A roll-your-own implementation of limited support for BMP image types
*
* PHP prior to 7.2 does not include support for BMP in the GD library, 
* so we have to build our own.
*
* phpGedView: Genealogy Viewer
* Copyright (C) 2020 PGV Development Team.  All rights reserved.
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
* @subpackage MediaDB
* @version $Id$
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_FUNCTIONS_MEDIABMP_PHP', '');

function imagecreatefrombmp($filename) {
	# Author:     DHKold
	# Date:     The 15th of June 2005
	# Version:    2.0B
	# Purpose:    To create an image from a BMP file.
	# Param in:   BMP file to open.
	# Param out:  Return a resource like the other ImageCreateFrom functions
	# Reference:  http://us3.php.net/manual/en/function.imagecreate.php#53879
	# Notes:
	#
	# Major re-write by G. Kroll (canajun2eh)
	#

	//Ouverture du fichier en mode binaire
	$f1 = fopen($filename,"rb");
	if (!$f1) return FALSE;
	$fileContents = stream_get_contents($f1);	// Read the entire file into memory
	fclose($f1);		// We're done with this input file

	//1 : Chargement des entêtes FICHIER
	$FILE = unpack("A2file_type/Vfile_size/Vreserved/Vbitmap_offset", substr($fileContents,0,14));
	if ($FILE['file_type'] != 'BM') return FALSE;

	//2 : Chargement des entêtes BMP
	$BMP = unpack('Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel'.
				'/Vcompression/Vsize_bitmap/Vhoriz_resolution'.
				'/Vvert_resolution/Vcolors_used/Vcolors_important', substr($fileContents,14,40));

	$bitsPerPixel = $BMP['bits_per_pixel'];
	$colors = 1 << $bitsPerPixel;
	$width = $BMP['width'];
	$height = $BMP['height'];

	if ($height < 0) {
		// If the height is negative, the image is recorded from top to bottom instead of the normal
		// bottom to top -- we have to invert it at the end.
		$height = 0 - $height;
		$invertedImage = true;
	} else $invertedImage = false;

	//3 : Chargement des couleurs de la palette
	if ($bitsPerPixel <= 8) {
		// The Palette is present and used only for 1, 4, and 8 bits per pixel
		$PALETTE = unpack('V'.$colors, substr($fileContents,54,$colors*4));
	}
	if ($bitsPerPixel == 16) {
		// For 16 bits per pixel, the Palette region is a set of 3 colour masks
		$PALETTE = unpack('V3', substr($fileContents,40,12));
		// There are two types of colour mask, the 565 type where green gets 6 bits while red and blue
		// each get 5 bits, and the RGB555 type where red, green, and blue each get 5 bits.  In both
		// of these, the missing low-order bits of each colour should be zero.
		//
		//          --------------- RGB565 ----------------      --------------- RGB555 ----------------
		// red		1111 1000 0000 0000 0000 0000 0000 0000  or  1111 1000 0000 0000 0000 0000 0000 0000
		// green	0000 0111 1110 0000 0000 0000 0000 0000  or  0000 0111 1100 0000 0000 0000 0000 0000
		// blue		0000 0000 0001 1111 0000 0000 0000 0000  or  0000 0000 0011 1110 0000 0000 0000 0000
		//
		$RGB565 = ($PALETTE[2] == 0x07E00000);		// We're dealing with the RGB565 set of colour masks
	}

	//4 : Création de l'image
	$IMG = substr($fileContents,$FILE['bitmap_offset']);
	unset($FILE, $BMP, $fileContents);		// Free up some memory; we're done with the raw file contents
	$VIDE = chr(0);

	$res = imagecreatetruecolor($width,$height);

	$inputPosition = 0;			// Position in input BMP
	$lineNumber = $height-1;	// Scan line number

	// The switch($bitsPerPixel) statement was moved outside the inner while($pixelNumber < $width) loop
	// for speed reasons; this way, it's executed only once per image instead of once per pixel.
	// This makes the code more verbose but also LOT faster.

	switch ($bitsPerPixel) {
	case 24:
		while ($lineNumber >= 0) {
			$pixelNumber=0;
			while ($pixelNumber < $width) {
				$COLOR = unpack("V",substr($IMG,$inputPosition,3).$VIDE);
				imagesetpixel($res,$pixelNumber,$lineNumber,$COLOR[1]);
				$pixelNumber ++;
				$inputPosition += 3;	// 3 bytes per pixel
			}
			$lineNumber --;
			$inputPosition = ($inputPosition + 3) & 0xFFFFFFFC;	// The next scan line must start on a double-word boundary
		}
		break;

	case 16:
		if ($RGB565) {
			// In the RGB565 encoding, red gets 5 bits, green gets 6, and blue gets 5 (in that order)
			$redShift = 8; $redMask = 0xF8;			// left 5 bits correspond to red
			$greenShift = 3; $greenMask = 0xFC;		// next 6 bits correspond to green
			$blueShift = 3; $blueMask = 0xF8;		// last 5 bits correspond to blue
		} else {
			// In the RGB555 encoding, red, green, and blue each get 5 bits (in that order), with 1 bit left over
			$redShift = 8; $redMask = 0xF8;			// left 5 bits correspond to red
			$greenShift = 3; $greenMask = 0xF8;		// next 5 bits correspond to green
			$blueShift = 2; $blueMask = 0xF8;		// next 5 bits correspond to blue
		}
		while ($lineNumber >= 0) {
			$pixelNumber=0;
			while ($pixelNumber < $width) {
				$COLOR = unpack("v",substr($IMG,$inputPosition,2));		// 16 bits, in little endian format
				// Separate the three colours, according to RGB565 or RGB555 encoding
				$red =   ($COLOR[1] >> $redShift) & $redMask;			// left 5 bits correspond to red
				$green = ($COLOR[1] >> $greenShift) & $greenMask;		// next 6 or 5 bits correspond to green
				$blue =  ($COLOR[1] << $blueShift) & $blueMask;			// last or next 5 bits correspond to blue
				imagesetpixel($res,$pixelNumber,$lineNumber,strval($red) . strval($green) . strval($blue));
				$pixelNumber ++;
				$inputPosition += 2;	// 2 bytes per pixel
			}
			$lineNumber --;
			$inputPosition = ($inputPosition + 3) & 0xFFFFFFFC;	// The next scan line must start on a double-word boundary
		}
		break;

	case 8:
		while ($lineNumber >= 0) {
			$pixelNumber=0;
			while ($pixelNumber < $width) {
				$COLOR = unpack("n",$VIDE.substr($IMG,$inputPosition,1));
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
				imagesetpixel($res,$pixelNumber,$lineNumber,$COLOR[1]);
				$pixelNumber ++;
				$inputPosition ++;	// 1 byte per pixel
			}
			$lineNumber --;
			$inputPosition = ($inputPosition + 3) & 0xFFFFFFFC;	// The next scan line must start on a double-word boundary
		}
		break;

	case 4:
		while ($lineNumber >= 0) {
			$pixelNumber=0;
			while ($pixelNumber < $width) {
				$COLOR = unpack("n",$VIDE.substr($IMG,floor($inputPosition),1));
				$nibbleNumber = ($inputPosition*2)%2;
				if ($nibbleNumber == 0) {
					$COLOR[1] = $COLOR[1] >> 4;
				} else {
					$COLOR[1] = $COLOR[1] & 0x0F;
				}
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
				imagesetpixel($res,$pixelNumber,$lineNumber,$COLOR[1]);
				$pixelNumber ++;
				$inputPosition += 0.5;	// 2 pixels per byte
			}
			$lineNumber --;
			$inputPosition = ($inputPosition + 3) & 0xFFFFFFFC;	// The next scan line must start on a double-word boundary
		}
		break;

	case 1:
		while ($lineNumber >= 0) {
			$pixelNumber=0;
			while ($pixelNumber < $width) {
				$COLOR = unpack("n",$VIDE.substr($IMG,floor($inputPosition),1));
				$bitNumber = ($inputPosition*8)%8;
				$COLOR[1] = ($COLOR[1] >> (7-$bitNumber)) & 0x1;
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
				imagesetpixel($res,$pixelNumber,$lineNumber,$COLOR[1]);
				$pixelNumber ++;
				$inputPosition += 0.125;	// 8 pixels per byte
			}
			$lineNumber --;
			$inputPosition = ($inputPosition + 3) & 0xFFFFFFFC;	// The next scan line must start on a double-word boundary
		}
		break;

	default:
		return false;
	}

	if ($invertedImage) return imagerotate($res, 180, 0);
	return $res;
}

/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  BMP SUPPORT (WRITING)
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

function imagebmp(&$gd_img, $savePath) {
	# Author:     James Heinrich
	# Purpose:    Save file as type bmp
	# Param in:   The image canvas (passed as ref)
	# Param out:
	# Reference:
	# Notes:    This code was stripped out of two external files
	#       	(phpthumb.bmp.php,phpthumb.functions.php), modified slightly,
	#       	and added below to avoid dependencies.
	#
	#			This code handles ONLY 24 bit colours.
	#

	$imageX = ImageSX($gd_img);
	$imageY = ImageSY($gd_img);

	$BMP = '';
	for ($y = ($imageY - 1); $y >= 0; $y--) {
		$thisline = '';
		for ($x = 0; $x < $imageX; $x++) {
			$argb = @ImageColorsForIndex($gd_img, @ImageColorAt($gd_img, $x, $y));
			$thisline .= chr($argb['blue']).chr($argb['green']).chr($argb['red']);
		}
		while (strlen($thisline) % 4) {
			$thisline .= "\x00";
		}
		$BMP .= $thisline;
	}

	$bmpSize = strlen($BMP) + 14 + 40;
	// BITMAPFILEHEADER [14 bytes] - http://msdn.microsoft.com/library/en-us/gdi/bitmaps_62uq.asp
	$BITMAPFILEHEADER = pack('A2VvvV', 'BM', $bmpSize, 0, 0, 54);

	// BITMAPINFOHEADER - [40 bytes] http://msdn.microsoft.com/library/en-us/gdi/bitmaps_1rw2.asp
	$BITMAPINFOHEADER = pack('VVVvvVVVVVV', 40, $imageX, $imageY, 1, 24, 0, 0, 2835, 2835, 0, 0);

	file_put_contents($savePath, $BITMAPFILEHEADER.$BITMAPINFOHEADER.$BMP);

	return;
}
?>

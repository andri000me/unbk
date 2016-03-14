<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('drawboldtext'))
{
    function drawboldtext(&$image, $size, $angle, $x_cord, $y_cord, &$color, &$fontfile, $text) {
        $_x = array(1, 0, 1, 0, -1, -1, 1, 0, -1);
        $_y = array(0, -1, -1, 0, 0, -1, 1, 1, 1);
        for($n=0;$n<=8;$n++) {
           ImageTTFText($image, $size, $angle, $x_cord+$_x[$n], $y_cord+$_y[$n], $color, $fontfile, $text);
        }
    }
}

if ( ! function_exists('imageTextWrapped'))
{
    function imageTextWrapped(&$img, $textSize, $x, &$y, $width, $color, $font, $text, $align="l") {
        //$y += $fontSize; //Correct place for the fonts.
        $text = str_replace ("\\r", '', $text); //Remove windows line-breaks
        $srcLines = explode ("\\n", $text); //Split text into "lines"
        $dstLines = Array(); // The destination lines array.
        foreach ($srcLines as $currentL) {
            $line = '';
            $words = explode (" ", $currentL); //Split line into words.
            foreach ($words as $word) {
                $dimensions = imagettfbbox($textSize, 0, $font, $line.' '.$word);
                $lineWidth = $dimensions[4] - $dimensions[0]; // get the length of this line, if the word is to be included
                if ($lineWidth > $width && !empty($line) ) { // check if it is too big if the word was added, if so, then move on.
                    $dstLines[] = trim($line); //Add the line like it was without spaces.
                    $line = '';
                }
                $line .= $word.' ';
            }
            $dstLines[] =  trim($line); //Add the line when the line ends.
        }
        //Calculate lineheight by common characters.
        $dimensions = imagettfbbox($textSize, 0, $font, "MXQJPmxqjp123"); //use a custom string to get a fixed height.
        $lineHeight = $dimensions[1] - $dimensions[5]; // get the heightof this line

        $align = strtolower(substr($align,0,1)); //Takes the first letter and converts to lower string. Support for Left, left and l etc.
        foreach ($dstLines as $nr => $line) {
            if ($align != "l") {
                $dimensions = imagettfbbox($textSize, 0, $font, $line);
                $lineWidth = $dimensions[4] - $dimensions[0]; // get the length of this line
                if ($align == "r") { //If the align is Right
                    $locX = $x + $width - $lineWidth;
                } else { //If the align is Center
                    $locX = $x + ($width/2) - ($lineWidth/2);
                }
            } else { //if the align is Left
                $locX = $x;
            }
            $locY = $y + ($nr * $lineHeight);
            //Print the line.
            imagettftext($img, $textSize, 0, $locX, $locY, $color, $font, $line);
        }
        $y = $locY;
    }
}
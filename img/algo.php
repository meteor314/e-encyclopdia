<?php

header('Content-Type: image/png');
session_start();



// Create the image
$im = imagecreatetruecolor(85, 20);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 75, 27, $white);

// image line
$line_color = imagecolorallocate($im, 64,64,64); 
for($i=0;$i<7;$i++) {
    imageline($im,0,rand()%50,200,rand()%50,$line_color);
}

//generate rabdom dots 

$pixel_color = imagecolorallocate($im, 0,0,255);
for($i=0;$i<1000;$i++) {
    imagesetpixel($im,rand()%200,rand()%50,$pixel_color);
}  

// The text to draw

$_SESSION['captcha'] = rand(1000, 9000);//$code = rand(1000, 9000);

// Replace path by  own font path
$font = 'fontPolice.ttf';

// Add some shadow to the text
imagettftext($im, 20, 0, 11, 21, $grey, $font, $_SESSION['captcha'] );

// Add the text
imagettftext($im, 20, 0, 10, 20, $black, $font,$_SESSION['captcha']);

// Using imagepng() results in clearer text compared with imagejpeg()


imagepng($im);
imagedestroy($im);
?>
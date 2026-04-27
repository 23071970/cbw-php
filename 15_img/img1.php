<?php
header('Content-Type: image/jpeg');

$image = imagecreatefromjpeg(__DIR__ . '/1.jpg');



if (!$image) {
    die('Bild konnte nicht geladen werden!');
}

$white = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 5, 10, 10, 'Hallo Stefan', $white);

imagejpeg($image);

//imagedestroy($image);

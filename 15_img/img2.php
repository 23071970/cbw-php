<?php
header('Content-Type: image/jpeg');

$image = imagecreatefromjpeg(__DIR__ . '/1.jpg');



if (!$image) {
    die('Bild konnte nicht geladen werden!');
}

$white = imagecolorallocate($image, 255, 255, 255);

imagettftext(
    $image,
    40,
    90,
    500,
    500,
    $white,
    __DIR__ . '/SHOWG.TTF',
    'Stefan tissot'
);

imagejpeg($image);

imagejpeg($image, __DIR__ . '/1.jpg');



//imagedestroy($image);

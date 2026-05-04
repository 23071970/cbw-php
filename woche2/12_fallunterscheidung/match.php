<?php
// $farbe = 'lila';


// $output = match ($farbe) {
//     "blau" => "Du hast Blau gewählt!",
//     "rot" => "Du hast Rot gewählt!",
//     "gelb" => "Du hast Gelb gewählt!",
//     "gruen" => "Du hast Grün gewählt!",
//     default => "Die farbe gibt es nicht"
// };

// echo $output;



// $tag = 8;
// $output = match ($tag) {
//     1, 2, 3, 4, 5 => "Ich muss Arbeiten",
//     6, 7 => "Hände Hoch Wochende",
//     default => "Den tag gibt es nicht!"
// };
// echo $output;


$tag = 8;

try {
    $output = match ($tag) {
        1, 2, 3, 4, 5 => "Ich muss Arbeiten",
        6, 7 => "Hände Hoch Wochende",
    };
} catch (UnhandledMatchError $e) {
    //echo '<pre>';
    //print_r($e);
    echo 'Den Tag gibt es nicht!';
}

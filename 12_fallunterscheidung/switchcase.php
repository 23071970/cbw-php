<?php

// $farbe = 'lila';

// switch ($farbe) {
//     case 'blau':
//         echo 'du hast die farbe blau gewählt!';
//         break;
//     case 'rot':
//         echo 'du hast die farbe Rot gewählt!';
//         break;
//     case 'lila':
//         echo 'du hast die farbe lila gewählt!';
//         break;
//     case 'gelb':
//         echo 'du hast die farbe gelb gewählt!';
//         break;
//     default:
//         echo 'die farbe gibt es nicht!';
// }


$farbe = 'rot';

switch ($farbe) {
    case 'blau':
        echo 'du hast die farbe blau gewählt!<br>';
        break;
    case 'rot':
        echo 'du hast die farbe Rot gewählt!<br>';
        //break;
    case 'lila':
        echo 'du hast die farbe lila gewählt!<br>';
        //break;
    case 'gelb':

        echo 'du hast die farbe gelb gewählt!';

        break;
    default:
        echo 'die farbe gibt es nicht!';
}

echo '<br>';

$monat = 4;

switch ($monat) {
    case 12:
    case 1:
    case 2:
        $jahreszeit = "Winter";
        break;
    case 3:
    case 4:
    case 5:
        $jahreszeit = "Frühling";
        break;
    case 6:
    case 7:
    case 8:
        $jahreszeit = "Sommer";
        break;
    case 9:
    case 10:
    case 11:
        $jahreszeit = "Herbst";
        break;
    default:
        $jahreszeit = "ungültiger monat";
}

echo "monat: $monat  jahreszeit: $jahreszeit";

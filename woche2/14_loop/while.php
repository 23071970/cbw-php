<?php

$i = 0;

// while ($i <= 6) {
//     echo $i;
//     //$i = $i + 1;
//     $i++;
// }

//wie stoppen bei einen bestimmten wert?
// while ($i <= 6) {

//     echo $i;
//     // if ($i == 4) {
//     //     break;
//     // }

//     if ($i == 4) break;
//     $i++;
// }

//überspringen wir die Iteration und fahren fort wenn $i gleich 3 ist:
// while ($i < 6) {
//     $i++;
//     if ($i == 3) continue;
//     echo $i;
// }
?>

<?php
$x = 1;
while ($x < 6):
?>
    <span> <?= $x ?> </span>
<?php
    $x++;
endwhile;
?>
<br>
<?php
while ($i < 100) {

    $i += 10;

    echo $i . '<br>';
}


?>
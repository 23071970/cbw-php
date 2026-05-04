<?php

if (5 > 3) {
    echo '5 ist größer';
}

echo '<br>';

$x = 16;
if ($x < 20) {
    echo "16 ist kleiner";
}
echo '<br>';

//ist gleich
if (5 == 5) {
    echo 'ist gleich';
}

echo '<br>';

//ist gleich
if (5 == '5') {
    echo 'ist gleich';
}

echo '<br>';

//ist nicht gleich
if (5 === '5') {
    echo 'ist gleich';
} else {
    echo 'ist nicht gleich';
}
echo '<br>';

if (5 != 6) {
    echo 'ist ungleich';
}
echo '<br>';
$x = 5;

if ($x == 2 || $x == 3 || $x == 5) {
    echo 'ist gleich';
}

echo '<br>';

$d = date("H");

if ($d < '12') {
    echo 'vormittag';
} else {
    echo 'nachmittag';
}

echo '<br>';

$d = date("H");

if ($d < '10') {
    echo 'guten morgen';
} elseif ($d < '20') {
    echo 'mittagszeit';
} else {
    echo 'guten abend!';
}

echo '<br>';
$x = 5;
$y = '';
if ($x < 10) $y = "hallo du da!";

echo $y;

echo '<br>';

$x = 9;
//das ist ein Ternärer operrator
$erg = $x < 10 ? "ist kleiner" : "ist größer";

echo $erg;

echo '<br>';

$x = 15;
if ($x > 10) {
    echo "ist größer 10<br>";
    if ($x > 20) {
        echo 'ist auch größer 20<br>';
    } else {
        echo 'aber nicht über 20<br>';
    }
}

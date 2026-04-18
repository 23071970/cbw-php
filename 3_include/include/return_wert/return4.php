<?php
$ergebniss = '';
if ($operator == '+') {
    $ergebniss = "das ergebniss ist: " . $zahl1 + $zahl2;
}
if ($operator == '-') {
    $ergebniss = "das ergebniss ist: " . $zahl1 - $zahl2;
}
if ($operator == '*') {
    $ergebniss = "das ergebniss ist: " . $zahl1 * $zahl2;
}
if ($operator == ':') {
    $ergebniss = "das ergebniss ist: " . $zahl1 / $zahl2;
}



return $ergebniss;

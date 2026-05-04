<?php

$vorUndnachame = 'Stefan tissot';

echo 'der String ist:' . strlen($vorUndnachame) . ' Zeichen lang<br>';

echo 'der String hat :' . str_word_count($vorUndnachame) . ' Wörter <br>';

$vorhanden = str_contains($vorUndnachame, 'tissot');
var_dump($vorhanden);

echo '<br>';

//findet position eines strings
echo strpos($vorUndnachame, 'tissot') . '<br>';

var_dump(str_starts_with($vorUndnachame, 'St'));

echo '<br>';

var_dump(str_ends_with($vorUndnachame, 'ot'));

echo '<br>';
echo strtoupper($vorUndnachame);
echo '<br>';
echo 'a' . 'b' . "c" . '<br>';

echo "Ich heiße: $vorUndnachame";

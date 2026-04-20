<?php

$array = ['Apfel', 'Birne', 'Kirsche'];

foreach ($array as $value) {
    echo $value . "<br>";
}

echo '<hr>';

$array = [
    'a' => 'Apfel',
    'b' => 'Birne',
    'c' => 'Kirsche'
];


foreach ($array as $key => $value) {
    echo 'Key:' . $key . ' = ' . $value . "<br>";
}

echo '<hr>';

$namen = [
    ['name' => 'Max'],
    ['name' => 'Ray'],
    ['name' => 'Stefan']
];

//print_r($namen);

foreach ($namen as $name) {
    echo $name['name'] . '<br>';
}


echo '<hr>';

$array = [
    ['name' => 'Max', 'alter' => 12],
    ['name' => 'Ray', 'alter' => 25],
    ['name' => 'Micha', 'alter' => 23]
];

echo '<pre>';
print_r($array);

foreach ($array as $item) {
    foreach ($item as $key => $value) {
        echo "$key: $value <br>";
    }
}
echo '<hr>';
$tn = '';
foreach ($array as $item) {
    foreach ($item as $key => $value) {
        $tn .=  "$key: $value <br>";
    }
}

echo $tn;
echo '<hr>';
echo $tn;
echo '<hr>';
echo $tn;
echo '<hr>';
echo $tn;

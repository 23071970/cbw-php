<?php

$farben = [
    'color1' => 'red',
    'color2' => 'green',
    'color3' => 'blue',
    'color4' => 'orange'
];

echo $farben['color2'];

shuffle($farben);


echo '<pre>';
print_r($farben);

echo '<br>';
echo $farben[1];

<?php


$farben = array('red', 'green', 'blue', 'orange');
echo $farben[1];

echo '<br>';

$farben2 = ['red', 'green', 'blue', 'orange'];
echo $farben2[2];

$farben4 = ['Rot' => 'red', 'Grün' => 'green'];

echo '<br>';

echo $farben4['Grün'];

$farben3 = [
    'Rot1' => 'red',
    'Grün2' => 'green',
    'Blau3' => [
        'Rot4' => 'red',
        'Grün5' => 'green',
        'Blau6' => 'blue',
        'Orange7' => [
            'Rot8' => 'red',
            'Grün9' => 'green',
            'Blau10' => 'blue',
            'Orange11' => 'orange'
        ]
    ],
    'Orange12' => 'orange',
    'Anders' => array('ray', 'Michi', 'Alanowich')
];


echo '<pre>';
//var_dump($farben3);
print_r($farben3);

///echo $farben3['Blau3']['Orange7'];

print_r($farben3['Blau3']['Orange7']);

echo '<br>';
echo $farben3['Orange12'];

echo '<br>';
echo $farben3['Anders'][2];

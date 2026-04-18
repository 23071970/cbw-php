<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $message =  include 'include/return_wert/return1.php';
    echo $message;


    $name = 'Alan';
    $message2 = include 'include/return_wert/return2.php';
    echo $message2;

    $name = 'Stefan';
    $nachname = 'Tissot';
    $alter = '55';
    $message3 = include 'include/return_wert/return3.php';
    echo $message3;

    $name = 'Alan';
    $nachname = 'Maier';
    $alter = '35';
    $message4 = include 'include/return_wert/return3.php';
    echo $message4;


    $zahl1 = 24;
    $zahl2 = 25;
    $operator = '*'; //- / *
    $ergebniss = include 'include/return_wert/return4.php';

    echo $ergebniss;


    $bild1 = '8.jpg';
    $bild2 = '5.jpg';
    $bild3 = '3.jpg';
    $bild4 = '7.jpg';

    $gallery = include 'include/return_wert/return5.php';

    echo $gallery;


    $bilder = [
        '5.jpg',
        '6.jpg',
        '7.jpg',
        '8.jpg'
    ];

    shuffle($bilder);
    $gallery2 = include 'include/return_wert/return6.php';

    echo $gallery2;










    ?>
</body>

</html>
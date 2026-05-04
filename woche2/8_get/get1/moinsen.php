<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?= htmlspecialchars($_GET["color"] ?? '') ?>">

    <?php

    // echo '<pre>';
    // print_r($_GET);
    // return;

    echo "Mein Name ist:" . htmlspecialchars($_GET['name'] ?? '');

    echo '<br>';
    //return;


    echo "Meine Email ist: " . htmlspecialchars($_GET['email'] ?? '');

    echo '<br>';
    echo 'Die Summe der Zahlen ist: ' . (htmlspecialchars((int)$_GET["zahl1"] ?? '') + htmlspecialchars((int)$_GET["zahl2"] ?? ''));

    echo '<br>';

    echo 'der Range ist: ' . htmlspecialchars($_GET['range'] ?? '');


    echo '<br>';

    echo 'Das ergebniss von ' . htmlspecialchars((int)$_GET["zahl1"] ?? '') . ' + ' . htmlspecialchars((int)$_GET["zahl2"] ?? '') . '* ' . htmlspecialchars($_GET['range']) . ' : ' . ((htmlspecialchars((int)$_GET["zahl1"] ?? '') + htmlspecialchars((int)$_GET["zahl2"] ?? ''))) * htmlspecialchars($_GET['range'] ?? '');

    echo '<br>';
    echo 'Meine Select auswahl ist: ' . htmlspecialchars(
        $_GET['select']
    );

    echo '<br>';
    //mit foreach schleife
    echo 'Du hast folgende Optionen ausgewählt: ';
    if (isset($_GET["select2"])) {
        foreach ($_GET["select2"] as $option) {
            echo htmlspecialchars($option) . ',';
        }
    } else {
        echo 'Keine Option ausgewählt.';
    }
    echo '<br>';


    //mit foreach schleife
    echo 'Du hast folgende Optionen ausgewählt: ';
    if (isset($_GET["select2"])) {
        $lastIndex = count($_GET["select2"]) - 1;
        foreach ($_GET["select2"] as $index => $option) {
            echo htmlspecialchars($option);
            if ($index !== $lastIndex) {
                echo ',';
            }
        }
    } else {
        echo 'Keine Option ausgewählt.';
    }


    echo '<br>';

    //mit foreach schleife
    echo 'Du hast folgende Optionen ausgewählt: ';
    $outPut = '';
    if (isset($_GET["select2"])) {
        foreach ($_GET["select2"] as $option) {
            $outPut .=  htmlspecialchars($option) . ',';
        }
    } else {
        echo 'Keine Option ausgewählt.';
    }

    echo substr($outPut, 0, -1);

    echo '<br>';


    echo 'Du hast folgende Optionen ausgewählt: ';
    if (isset($_GET["select2"])) {
        echo implode(',', $_GET["select2"]);
    }
    echo '<br>';

    $date = date_create($_GET['date'] ?? '');

    echo 'Du hast das datum' . date_format($date, 'd.m.Y') . ' gewählt!';

    echo '<br>';

    echo 'Du hast die Uhrzeit ' . $_GET['time'] . ' gewählt!';




    ?>





</body>

</html>
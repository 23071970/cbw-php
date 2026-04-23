<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?= htmlspecialchars($_POST["color"] ?? '') ?>">

    <?php

    // echo '<pre>';
    // print_r($_POST);
    // return;

    echo "Mein Name ist:" . htmlspecialchars($_POST['name'] ?? '');

    echo '<br>';
    //return;


    echo "Meine Email ist: " . htmlspecialchars($_POST['email'] ?? '');

    echo '<br>';
    echo 'Die Summe der Zahlen ist: ' . (htmlspecialchars((int)$_POST["zahl1"] ?? '') + htmlspecialchars((int)$_POST["zahl2"] ?? ''));

    echo '<br>';

    echo 'der Range ist: ' . htmlspecialchars($_POST['range'] ?? '');


    echo '<br>';

    echo 'Das ergebniss von ' . htmlspecialchars((int)$_POST["zahl1"] ?? '') . ' + ' . htmlspecialchars((int)$_POST["zahl2"] ?? '') . '* ' . htmlspecialchars($_POST['range']) . ' : ' . ((htmlspecialchars((int)$_POST["zahl1"] ?? '') + htmlspecialchars((int)$_POST["zahl2"] ?? ''))) * htmlspecialchars($_POST['range'] ?? '');

    echo '<br>';
    echo 'Meine Select auswahl ist: ' . htmlspecialchars(
        $_POST['select']
    );

    echo '<br>';
    //mit foreach schleife
    echo 'Du hast folgende Optionen ausgewählt: ';
    if (isset($_POST["select2"])) {
        foreach ($_POST["select2"] as $option) {
            echo htmlspecialchars($option) . ',';
        }
    } else {
        echo 'Keine Option ausgewählt.';
    }
    echo '<br>';


    //mit foreach schleife
    echo 'Du hast folgende Optionen ausgewählt: ';
    if (isset($_POST["select2"])) {
        $lastIndex = count($_POST["select2"]) - 1;
        foreach ($_POST["select2"] as $index => $option) {
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
    if (isset($_POST["select2"])) {
        foreach ($_POST["select2"] as $option) {
            $outPut .=  htmlspecialchars($option) . ',';
        }
    } else {
        echo 'Keine Option ausgewählt.';
    }

    echo substr($outPut, 0, -1);

    echo '<br>';


    echo 'Du hast folgende Optionen ausgewählt: ';
    if (isset($_POST["select2"])) {
        echo implode(',', $_POST["select2"]);
    }
    echo '<br>';

    $date = date_create($_POST['date'] ?? '');

    echo 'Du hast das datum' . date_format($date, 'd.m.Y') . ' gewählt!';

    echo '<br>';

    echo 'Du hast die Uhrzeit ' . $_POST['time'] . ' gewählt!';


    ?>





</body>

</html>
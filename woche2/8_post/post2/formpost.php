<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?= htmlspecialchars($_POST["color"] ?? '') ?>">

    <form action="formpost.php?data=123456" method="post">

        <?php
        echo $_GET['data'] ?? '';
        ?>

        name: <input name="name" type="text"><br>
        email: <input name="email" type="text"><br>
        Zahl1: <input type="text" name="zahl1"><br>
        Zahl2: <input type="text" name="zahl2"><br>


        Range: <span id="ro">0</span> <br>
        <input id="range" name="range" type="range" min="0" max="10"><br>

        <select name="select">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
        </select>


        <br>
        <br>
        <select multiple name="select2[]">
            <option value="1">option 1</option>
            <option value="2">option 2</option>
            <option value="3">option 3</option>
            <option value="4">option 4</option>
            <option value="5">option 5</option>
            <option value="6">option 6</option>
            <option value="7">option 7</option>
        </select><br>


        Farbe:<br>
        <input type="color" name="color"><br>

        Date:<br>
        <input type="date" name="date" id=""><br>

        time:<br>
        <input type="time" name="time"><br>


        <br>
        <input type="submit" value="senden">

    </form>


    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {


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
    }
    ?>


    <script>
        const range = document.getElementById('range');
        const ro = document.getElementById('ro');
        range.addEventListener('input', () => {
            //console.log(range.value);
            ro.innerText = range.value;
        })
    </script>



</body>

</html>
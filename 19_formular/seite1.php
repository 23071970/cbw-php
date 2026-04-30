<?php
$vorname  = $_GET['vorname'] ?? '';
$nachname = $_GET['nachname'] ?? '';


$gehalt = $_GET['gehalt'] ?? '';
$beruf = $_GET['beruf'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="seite2.php" method="GET">

        Vorname: <input type="text" name="vorname" value="<?= $vorname ?>">
        Nachname: <input type="text" name="nachname" value="<?= $nachname ?>">

        <input type="hidden" name="beruf" value="<?= $beruf ?>">
        <input type="hidden" name="gehalt" value="<?= $gehalt ?>">


        <button type="submit">Weiter zu seite 2</button>


    </form>


</body>

</html>
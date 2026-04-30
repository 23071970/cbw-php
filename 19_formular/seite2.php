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

    <form action="seite3.php" method="get">

        beruf: <input type="text" name="beruf" value="<?= $beruf ?>">
        gehalt: <input type="text" name="gehalt" value="<?= $gehalt ?>">


        <input type="hidden" name="vorname" value="<?= $vorname ?>">
        <input type="hidden" name="nachname" value="<?= $nachname ?>">


        <button type="submit">Weiter zu seite 3</button>

        <a href="seite1.php?vorname=<?= $vorname ?>&nachname=<?= $nachname ?>&gehalt=<?= $gehalt ?>&beruf=<?= $beruf ?>">
            <button type="button">Zurück</button>
        </a>
    </form>





</body>

</html>
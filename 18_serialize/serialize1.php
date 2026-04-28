<?php
//echo '<pre>';
//print_r($_POST);

$datei = 'dummy.txt';




if (file_exists($datei)) {
    $content = file_get_contents($datei);
    $daten = unserialize($content);
    if (!is_array($daten)) {
        $daten = [];
    }
} else {
    $daten = [];
}




//echo '<pre>';
//print_r($daten);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = empty($daten) ? 1 : max(array_keys($daten)) + 1;
    $daten[$id] = [
        'vorname' => $_POST['vorname'],
        'nachname' => $_POST['nachname'],
        'telefon' => $_POST['telefon']
    ];

    // echo '<pre>';
    // print_r($daten);

    file_put_contents($datei, serialize($daten));
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (!empty($daten)) {
        foreach ($daten as $key => $data) {
            echo 'Id: ' . htmlspecialchars($key) . '<br>';
            echo 'Vorname: ' . htmlspecialchars($data['vorname']) . '<br>';
            echo 'Nachname: ' . htmlspecialchars($data['nachname']) . '<br>';
            echo 'Telefon: ' . htmlspecialchars($data['telefon']) . '<br>';
        }
    }

    ?>


    <form method="post">

        <input name="vorname" placeholder="vorname" type="text"><br>
        <input name="nachname" placeholder="nachname" type="text"><br>
        <input name="telefon" placeholder="telefon" type="text"><br>
        <input type="submit" value="submit">
    </form>

</body>

</html>
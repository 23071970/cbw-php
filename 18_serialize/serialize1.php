<?php
//echo '<pre>';
//print_r($_POST);

$datei = 'dummy.txt';

//holt die daten beim laden der seite
if (file_exists($datei)) {
    $content = file_get_contents($datei);
    $daten = unserialize($content);
    if (!is_array($daten)) {
        $daten = [];
    }
} else {
    $daten = [];
}

//löschen

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Löschen' && isset($_POST['id'])) {

    $id = $_POST['id'];
    if (isset($daten[$id])) {
        unset($daten[$id]);
        file_put_contents($datei, serialize($daten));
    }
}


//echo '<pre>';
//print_r($daten);

//insert
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Insert') {
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


    <form method="post">
        <input name="vorname" placeholder="vorname" type="text"><br>
        <input name="nachname" placeholder="nachname" type="text"><br>
        <input name="telefon" placeholder="telefon" type="text"><br>
        <input type="submit" value="submit">

        <input type="hidden" name="action" value="Insert">

    </form>

    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Telefon</th>
            <th>Action</th>
        </tr>

        <?php foreach ($daten as $key => $data) { ?>
            <tr>
                <td><?php echo htmlspecialchars($key); ?></td>
                <td><?php echo htmlspecialchars($data['vorname']); ?></td>
                <td><?php echo htmlspecialchars($data['nachname']); ?></td>
                <td><?php echo htmlspecialchars($data['telefon']); ?></td>
                <td>
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($key)  ?>">
                        <input type="submit" name="action" value="Bearbeiten">
                    </form>

                    <form method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($key)  ?>">
                        <input type="submit" name="action" value="Löschen">
                    </form>

                </td>
            </tr>
        <?php } ?>
    </table>



</body>

</html>
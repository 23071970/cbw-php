<?php
session_start();
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

    $_SESSION['favcolor'] = 'grün';
    $_SESSION['favanimal'] = 'hund';
    $_SESSION['data'] = [
        'name' => 'Stefan',
        'nachname' => 'Tissot',
        'alter' => 55
    ];
    echo 'Session gesetzt';

    ?>
    <br>

    <a href="session2.php">session2</a>



</body>

</html>
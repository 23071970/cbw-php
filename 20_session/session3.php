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

    echo '<pre>';

    print_r($_SESSION);

    $_SESSION['data']['name'] = 'Alan';

    echo $_SESSION['data']['name'];
    // echo '<br>';
    echo $_SESSION['data']['nachname'];
    // echo '<br>';
    echo $_SESSION['data']['alter'];

    $_SESSION['data']['name'] = 'Stanley';


    ?>
    <br>
    <a href="session4.php">session4</a>


</body>

</html>
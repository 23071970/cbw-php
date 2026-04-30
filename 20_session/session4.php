<?php
session_start();

echo '<pre>';
print_r($_SERVER);

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
    echo 'Der name der Session heißt :' . session_name();

    //echo '<pre>';

    // print_r($_SESSION);

    echo '<br>';
    echo $_SESSION['data']['name'];
    echo '<br>';
    echo $_SESSION['data']['nachname'];
    echo '<br>';
    echo $_SESSION['data']['alter'];

    ?>
    <br>
    <a href="session5.php">session5</a>


</body>

</html>
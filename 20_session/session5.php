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



    //löscht alle sitzungsdaten
    session_unset();

    //zerstört die Sitzung
    session_destroy();

    //echo $_SESSION['data']['name'];

    //auch das cookie löschen

    setcookie(session_name(), '', time() - 3600, '/');

    ?>
    <br>
    <a href="session1.php">session1</a>


</body>

</html>
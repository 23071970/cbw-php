<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/db/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <?php include __DIR__ . '/include/partials/navi.php' ?>



    <form action="" method="post">

        <input type="email" name="email" value="stefan.tissot@gmail.com"><br>
        <input type="password" name="pass"><br>

        <button type="submit">Register</button>

    </form>

</body>

</html>
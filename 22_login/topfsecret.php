<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/include/functions/auth.php';
requireLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Topfsecret</h1>
    <?php include __DIR__ . '/include/partials/navi.php' ?>

    <p>alles geheim!!</p>

</body>

</html>
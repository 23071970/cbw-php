<?php
//echo '<pre>';
//print_r($_COOKIE);

$data = unserialize($_COOKIE['data']);


//print_r($data);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?= $data['name'] . ' - ' . $data['alter'] ?>

    <a href="1_cookie.php">zurück</a>
    <a href="3_cookie.php">vor</a>
    <br>



</body>

</html>
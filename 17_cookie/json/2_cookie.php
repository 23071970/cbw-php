<?php
//echo '<pre>';

$data = json_decode($_COOKIE['data']);

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

    <?= $data->{'name'} . ' - ' . $data->{'alter'} ?>

    <a href="1_cookie.php">zurück</a>
    <br>



</body>

</html>
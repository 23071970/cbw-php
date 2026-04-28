<?php

$c_name = 'data';
$c_value = serialize(['name' => 'Peter', 'alter' => 45]);

setcookie($c_name, $c_value, time() + 86400, '/');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="2_cookie.php">vor</a>
</body>

</html>
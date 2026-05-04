<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html,
        body {
            width: 50vh;
            height: 50vh;
        }

        div {
            float: left;
            width: 50%;
            height: 20%;
        }
    </style>

</head>

<body>

    <?php
    $color1 = 'red';
    $color2 = 'green';
    $color3 = 'yellow';
    $color4 = 'purple';

    include 'include/color2/div1.php';
    include 'include/color2/div2.php';
    include 'include/color2/div3.php';
    include 'include/color2/div4.php';
    ?>

</body>

</html>
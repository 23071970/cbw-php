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

    $farbeAsso = [
        "red",
        "green",
        "blue",
        "orange"
    ];

    shuffle($farbeAsso);
    include 'include/color3/div1.php';
    include 'include/color3/div2.php';
    include 'include/color3/div3.php';
    include 'include/color3/div4.php';

    //header('refresh:1; url=6_randomColor.php')

    ?>

</body>

</html>
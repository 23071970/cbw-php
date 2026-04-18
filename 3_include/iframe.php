<?php

$farbeAsso = [
    'color1' => "red",
    'color2' => "green",
    'color3' => "blue",
    'color4' => "orange"
];
shuffle($farbeAsso);
include 'include/color3/div1.php';
include 'include/color3/div2.php';
include 'include/color3/div3.php';
include 'include/color3/div4.php';

header('refresh:1; url=6_randomColor.php');

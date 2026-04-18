<?php

echo '<pre>';


$x = 5; //int
var_dump($x);

$x = 'hallo stefan'; //string
var_dump($x);

$x = 12.45; //float
var_dump($x);

$x = true; //boolean
var_dump($x);

$x = array('Apfel', 'Zitrone', 'Birne');

echo $x[1];
echo '<br>';
var_dump($x);

class Auto
{
    public $color;
    public $model;
    public function  __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}

$x = new Auto("Gelb", "VW");
var_dump($x);

$y = new Auto("Gelb", "VW");
var_dump($y);

$x = '';
var_dump($x);

$x = null;
var_dump($x);

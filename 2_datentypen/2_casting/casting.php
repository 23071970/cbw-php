<?php

$a = 5; //int
$b = 5.2; //float
$c = "Hallo welt"; //string
$d = false; //boolean
$e = NULL; //NULL
$z = '';

$x = (string) $d;
$x = (int) $b;
$x = (float) $a;
$x = (float)$d;

$x = (array) $a;
$x = (array) $e;
$x = (array) $d;

class Auto
{
    public $farbe;
    public $marke;
    public function __construct($farbe, $marke)
    {
        $this->farbe = $farbe;
        $this->marke = $marke;
    }

    public function fahren()
    {
        return "Auto fährt!";
    }
}

$auto = new Auto("rot", "BMW");
$auto1 = (array) $auto;

//echo '<pre>';
//var_dump($auto1);

$x = (object) $a;

$z = ['Apfel', 'Zitrone', 'Birne'];

$x = (object) $z;
echo '<pre>';

var_dump($x);

echo $x->{0};

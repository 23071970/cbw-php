<?php
// Basisverzeichnis (wichtig fürs Verschieben!)
define('BASE_PATH', dirname(__DIR__));


//feste URL-Basis definieren, damit sie unabhängig von der Serverkonfiguration ist
define(
    'BASE_URL',
    rtrim(dirname($_SERVER['SCRIPT_NAME']), '/')
);

//include - Pfade
define('INCLUDES_PATH', BASE_PATH . '/includes');

//include db
define('DB_PATH', BASE_PATH . '/db');

//include pages
define('PAGES_PATH', BASE_PATH . '/pages');

//Asset - Pfade
define('ASSETS_PATH', BASE_PATH . '/assets');

define('CSS_URL', BASE_URL . '/assets/css');
define('JS_URL', BASE_URL . '/assets/js');
define('IMG_URL', BASE_URL . '/assets/img');

<?php
define('BASE_PATH', dirname(__DIR__));


define(
    'BASE_URL',
    rtrim(dirname($_SERVER['SCRIPT_NAME']), '/')
);

//include - Pfade
define('INCLUDES_PATH', BASE_PATH . '/includes');

//Asset - Pfade
define('ASSETS_PATH', BASE_PATH . '/assets');

define('CSS_URL', BASE_URL . '/assets/css');
define('JS_URL', BASE_URL . '/assets/js');
define('IMG_URL', BASE_URL . '/assets/img');

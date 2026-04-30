<?php
$pdo = new PDO("mysql:host=localhost;dbname=php_cbw", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<?php
// show error
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

// Sistema de autocarga de clases instalado de composer
require __DIR__ . '/vendor/autoload.php';


$text = 'HOLA MUNDO';

// carpeta>clase>método

upper('hola');

echo "<br>";

lower($text);

<?php
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
phpinfo();
$tab = $_SERVER;

echo '<pre>';
var_dump($tab);
echo '</pre>';
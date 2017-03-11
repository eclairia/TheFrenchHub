<?php

$url = "http://". $_SERVER['SERVER_NAME'] ."". substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/', 20)+1) ."?module=users&action=return";
echo 'Server Name= ' . $_SERVER['SERVER_NAME'] . '<br />';
echo '$uri= ' . $_SERVER['REQUEST_URI'] . '<br />';
echo '$url= ' . $url . '<br />';
echo 'strripos return = ' . strripos($_SERVER['REQUEST_URI'], '/', -5) . '<br />';
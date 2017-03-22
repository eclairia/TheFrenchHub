<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
    $testimonials = select_table(array("table1" => "tfh_testimonials"));
	define("PAGE_TITLE", 'Bienvenue sur The French Hub');
	include_once('app/view/static/home.php');

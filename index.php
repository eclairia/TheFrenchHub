<?php
    ini_set('display_errors', '1');
    ini_set('error_reporting', E_ALL);
	//On récupère l'adresse IP du client en prévoyant le cas du proxy
	$ip = !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	//On fabrique une chaine avec l'IP et le type de navigateur
	$securite = $ip . '_' . $_SERVER['HTTP_USER_AGENT'];
	//S'il n'y a pas de session en cours 
	session_start();
	if(empty($_SESSION))
	{
		//On ouvvre la session et on enregistre la chaine de sécurité
		$_SESSION['securite']= $securite;
	}

	else if($_SESSION['securite'] != $securite)
	{
		//On régénère la session et on efface tout le contenu
		session_regenerate_id();
		$_SESSION = array();
	}

	include_once('app/model/pdo.inc.php');
	include_once('app/config/config.inc.php');
	include_once('core/coremodel.php');
	include_once('core/corecontroller.php');
	include_once('core/coreview.php');


	//Appel du controleur du module demandée
	if(!isset($_GET['module']))
	{
		$module = DEFAULT_MODULE;
	}

	else
	{
		$module = $_GET['module'];
	}

	//Appel du controleur de l'action demandée
	if(!isset($_GET['action']))
	{
		$action = DEFAULT_ACTION;
	}

	else
	{
		$action = $_GET['action'];
	}

	include_once('core/corecontroller.php');

	$url = "app/controller/" . $module . "/" . $action . ".php";

	if(file_exists($url))
	{
		include_once($url);
	}

	else
	{
		include_once("app/view/error.php");
	}


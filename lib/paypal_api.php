<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 11/03/2017
 * Time: 00:45
 */
if (!defined("_BASE_URL")) die("Ressource interdite !");
function construit_url_paypal()
{
    $api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?'; // Site de l'API PayPal. On ajoute déjà le ? afin de concaténer directement les paramètres.
    $version = 21.0; // Version de l'API

    $user = 'guillaume.hulin-facilitator-1_api1.eemi.com'; // Utilisateur API
    $pass = 'Z7MEAQ32AM5JLF7X'; // Mot de passe API
    $signature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31Aj82iL1dQHC4P-QaQjdVHrtY9V8Q'; // Signature de l'API

    $api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature; // Ajoute tous les paramètres

    return 	$api_paypal; // Renvoie la chaîne contenant tous nos paramètres.
}

function recup_param_paypal($resultat_paypal)
{
    $liste_parametres = explode("&",$resultat_paypal); // Crée un tableau de paramètres
    foreach($liste_parametres as $param_paypal) // Pour chaque paramètre
    {
        list($nom, $valeur) = explode("=", $param_paypal); // Sépare le nom et la valeur
        $liste_param_paypal[$nom]=urldecode($valeur); // Crée l'array final
    }
    return $liste_param_paypal; // Retourne l'array
}
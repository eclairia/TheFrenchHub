<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 11/03/2017
 * Time: 00:59
 */
include("lib/paypal_api.php"); // On importe la page créée précédemment
$requete = construit_url_paypal(); // Construit les options de base

// La fonction urlencode permet d'encoder au format URL les espaces, slash, deux points, etc.)
$requete = $requete."&METHOD=SetExpressCheckout".
    "&CANCELURL=".urlencode("http://127.0.0.1/EEMI_2016/final_project/TheFrenchHub/cancel.php").
    "&RETURNURL=".urlencode("http://127.0.0.1/EEMI_2016/final_project/TheFrenchHub/return.php").
    "&AMT=10.0".
    "&CURRENCYCODE=EUR".
    "&DESC=".urlencode("Magnifique oeuvre d'art (que mon fils de 3 ans a peint.)").
    "&LOCALECODE=FR".
    "&HDRIMG=".urlencode("http://ghulin.eemi.tech/2a/tfh/logo.png");

// Affiche la chaîne pour vérifier que la chaîne est bien formatée :
//echo $requete;


$ch = curl_init($requete);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Retourne directement le transfert sous forme de chaîne de la valeur retournée par curl_exec() au lieu de l'afficher directement.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// On lance l'exécution de la requête URL et on récupère le résultat dans une variable
$resultat_paypal = curl_exec($ch);

// S'il y a une erreur, on affiche "Erreur", suivi du détail de l'erreur.
if (!$resultat_paypal)
{
    echo "<p>Erreur</p><p>".curl_error($ch)."</p>";
}
else
{
    $liste_param_paypal = recup_param_paypal($resultat_paypal); // Lance notre fonction qui dispatche le résultat obtenu en un array

    // Si la requête a été traitée avec succès
    if ($liste_param_paypal['ACK'] == 'Success')
    {
        // Redirige le visiteur sur le site de PayPal
        header("Location: https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=".$liste_param_paypal['TOKEN']);
        exit();
    }
    else // En cas d'échec, affiche la première erreur trouvée.
    {
        echo "<p>Erreur de communication avec le serveur PayPal.<br />".$liste_param_paypal['L_SHORTMESSAGE0']."<br />".$liste_param_paypal['L_LONGMESSAGE0']."</p>";
    }
}
curl_close($ch);

define("PAGE_TITLE", "Page de connexion");
include_once("app/view/users/reserve.php");
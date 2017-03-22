<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 11/03/2017
 * Time: 02:46
 */
if (!defined("_BASE_URL")) die("Ressource interdite !");
//session_start();
include("lib/paypal_api.php"); // On importe la page créée précédemment
$requete = construit_url_paypal(); // Construit les options de base

// On ajoute le reste des options
// La fonction urlencode permet d'encoder au format URL les espaces, slash, deux points, etc.)
$requete = $requete."&METHOD=DoExpressCheckoutPayment".
    "&TOKEN=".htmlentities($_GET['token'], ENT_QUOTES). // Ajoute le jeton qui nous a été renvoyé
    "&AMT=". $_GET['price'] .
    "&CURRENCYCODE=EUR".
    "&PayerID=".htmlentities($_GET['PayerID'], ENT_QUOTES). // Ajoute l'identifiant du paiement qui nous a également été renvoyé
    "&PAYMENTACTION=sale";

// Initialise notre session cURL. On lui donne la requête à exécuter.
$ch = curl_init($requete);

// Modifie l'option CURLOPT_SSL_VERIFYPEER afin d'ignorer la vérification du certificat SSL. Si cette option est à 1, une erreur affichera que la vérification du certificat SSL a échoué, et rien ne sera retourné.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Retourne directement le transfert sous forme de chaîne de la valeur retournée par curl_exec() au lieu de l'afficher directement.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// On lance l'exécution de la requête URL et on récupère le résultat dans une variable
$resultat_paypal = curl_exec($ch);

if (!$resultat_paypal) // S'il y a une erreur, on affiche "Erreur", suivi du détail de l'erreur.
{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
// S'il s'est exécuté correctement, on effectue les traitements...
else
{
    $liste_param_paypal = recup_param_paypal($resultat_paypal); // Lance notre fonction qui dispatche le résultat obtenu en un array

    // On affiche tous les paramètres afin d'avoir un aperçu global des valeurs exploitables (pour vos traitements). Une fois que votre page sera comme vous le voulez, supprimez ces 3 lignes. Les visiteurs n'auront aucune raison de voir ces valeurs s'afficher.
    /*echo "<pre>";
    print_r($liste_param_paypal);
    echo "</pre>";*/

    // Si la requête a été traitée avec succès
    if ($liste_param_paypal['ACK'] == 'Success')
    {
        // Mise à jour de la base de données & traitements divers...
        include_once('app/model/orders/valide_order.php');
        $retour = valide_order();
        if($retour)
        {
            location("users", "dashboard", "notif=orderok");
        }
    }
    else // En cas d'échec, affiche la première erreur trouvée.
    {echo "<p>Erreur de communication avec le serveur PayPal.<br />".$liste_param_paypal['L_SHORTMESSAGE0']."<br />".$liste_param_paypal['L_LONGMESSAGE0']."</p>";}
}
// On ferme notre session cURL.
curl_close($ch);

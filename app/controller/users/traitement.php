<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 11/03/2017
 * Time: 02:47
 */

include("lib/paypal_api.php");
$requete = construit_url_paypal();
$requete = $requete."&METHOD=GetExpressCheckoutDetails".
    "&TOKEN=".htmlentities($_GET['token'], ENT_QUOTES); // Ajoute le jeton

$ch = curl_init($requete);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$resultat_paypal = curl_exec($ch);

if (!$resultat_paypal) // S'il y a une erreur
{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
// S'il s'est exécuté correctement
else
{
    $liste_param_paypal = recup_param_paypal($resultat_paypal);

    // On affiche tous les paramètres afin d'avoir un aperçu global des valeurs exploitables (pour vos traitements). Une fois que votre page sera comme vous le voulez, supprimez ces 3 lignes. Les visiteurs n'auront aucune raison de voir ces valeurs s'afficher.
    echo "<pre>";
    print_r($liste_param_paypal);
    echo "</pre>";

    // Si la requête a été traitée avec succès

    // Mise à jour de la base de données & traitements divers... Exemple :
    //mysql_query("INSERT INTO client(nom, prenom) VALUE('".$liste_param_paypal['FIRSTNAME']."', '".$liste_param_paypal['LASTNAME']."')");
}
curl_close($ch);
?>
<!--TODO:  Modèle pour l'insert ?-->
<!--TODO:  Redirection sur son tableau de bord ?-->
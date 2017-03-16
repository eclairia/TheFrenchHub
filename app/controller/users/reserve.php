<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 11/03/2017
 * Time: 00:59
 */
$_POST = array(
            "order_price" => "3000",
            "time_slot_ID" => "1",
            "user_project" => "2"
);
include("lib/paypal_api.php"); // On importe la page créée précédemment
$requete = construit_url_paypal(); // Construit les options de base

// La fonction urlencode permet d'encoder au format URL les espaces, slash, deux points, etc.)
$requete = $requete."&METHOD=SetExpressCheckout".
    "&CANCELURL=".urlencode("http://". $_SERVER['SERVER_NAME'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/', 20)+1) ."?module=users&action=cancel").
    "&RETURNURL=".urlencode("http://". $_SERVER['SERVER_NAME'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/', 20)+1) ."?module=users&action=return&price=" . $_POST['order_price']).
    "&AMT=". $_POST['order_price'] .
    "&CURRENCYCODE=EUR".
    "&DESC=".urlencode("Votre réservation pour la Nouvelles-Zélande").
    "&LOCALECODE=FR".
    "&HDRIMG=".urlencode(LOGO_FOR_PAYPAL_URL);

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
        // on fait un Insert de la commande pour la tracer
    ?>
        <!--TODO:  Transformer countable comme le select pour calculer le nombre de membres à mettre dans le prochain modèle-->

        <!--TODO:  Modèle pour update time slot-->
        <!--TODO:  Modèle pour l'update du user time slot-->
        <!--TODO:  Modèle pour l'insert de la commande avant l'update-->
    <?php
        $nb_reservations = count_table(
                            array("table1" => "tfh_additionnal_members",
                                  "table2" => "tfh_projects",
                                  "table3" => "tfh_users"),
                            array("where_column" => "additionnal_members_project",
                                  "where_value" => "project_ID"),
                            array("and_column1" => "project_ID",
                                  "and_value1" => "user_project",
                                  "and_column2" => "user_project",
                                  "and_value2" => $_POST['user_project'])
        );

        $nb_reservations = $nb_reservations + 1;

        include_once('app/model/time_slots/reserve_time_slot.php');
        $retour = reserve_time_slot($_POST, $nb_reservations);

        include_once('app/model/users/affect_reservation.php');
        $retour = affect_reservation($_POST);

        $_SESSION['user']['user_time_slot'] = $_POST['time_slot_ID'];
        include_once('app/model/orders/insert_order.php');
        $retour = insert_order($_POST);
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

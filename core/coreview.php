<?php

	function paginate($nb_enregistrements, $nb_par_page, $module, $action, $options = "")
	{
		$nb_pages = ceil($nb_enregistrements/$nb_par_page);

		echo "<ul class='ul_paginate'>"; 

			for($i = 1; $i < $nb_pages + 1; $i++)
			{
				echo '<li><a href="?module=' . $module .'&action='. $action . '&page=' . $i . $options .'">' . $i .'</a></li>';
			}

		echo "</ul>";
	}

	function scrolllist($selectname, $classname, $idname, $data, $idcolumn, $valuecolumn, $options = array())
	{
		echo "<select name='" . $selectname . "' class='" . $classname. "' id='" . $idname . "'>";


		if(isset($options["default"]))
		{
			echo "<option value='0'>Tous les users</option>";		}
        foreach($data as $rec)
        {
         
         echo "<option value='" . $rec[$idcolumn] . "'";
         if(isset($options['selected']) && ($rec[$idcolumn] == $options['selected'])) 
     	{
         echo " selected";
 		}
         echo ">";
         echo $rec[$valuecolumn];

         echo "</option>";
        }

        echo "</select>";		
	}

    function notif()
    {
        switch ($_GET['notif'])
        {
            case 'ok':
                echo "<p class='bg-success'> L'action s'est déroulée comme prévu. <p>";
                break;

            case 'nok':
                echo "<p class='bg-danger'> L'action demandée a echoué ! <p>";
                break;

            case 'protection':
                echo "<p class='bg-danger'> Vous devez être connecté pour accéder à cette partie du site ! <p>";
                break;

            case 'admin':
                echo "<p class='bg-danger'>  Vous devez être connecté en tant qu'administrateur pour acceder à cette partie du site ! <p>";
                break;

            case 'noid':
                echo "<p class='bg-info'>  Il manque un id pour le fonctionnement de la page à laquelle vous tentez d'acceder ! <p>";
                break;

            case 'nmail':
                echo "<p class='bg-info'>  Le mail n'a pas pu être envoyé ! <p>";
                break;

            case 'noPreventUpdate':
                echo "<p class='bg-info'>  Le client a été prévenu mais la base de données n'a pas été mise à jours ! <p>";
                break;

            case 'nokey':
                echo "<p class='bg-danger'>  Le clé ne correspond à aucun compte ! <p>";
                break;

            case 'orderok':
                echo "<p class='bg-success'>  Votre réservation à bien été prise en compte ! <p>";
                break;
        }
    }
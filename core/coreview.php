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
<?php

	function counttable($table, $options=array())
	{
		global $pdo;

		try
		{
			$sql = "SELECT COUNT(*) AS nombre FROM " . $table;

			if((isset($options['wherecolumn'])) && (isset($options['wherevalue'])))
			{
				$sql .=  " WHERE "  . $options["wherecolumn"] . '="' . $options["wherevalue"] . '"';
			}

			$query = $pdo->query($sql);

			$query->execute();
			
			$result = $query->fetch();

			//On retourne tous les articles sélectionnés
			return $result['nombre'];

			$query->closeCursor();			
		}

		catch(Exception $e)
		{
			die('Erreur SQL: ' . $e->getMessage());
		}
	}

	function selecttable($table, $options=array())
	{
		global $pdo;

		try
		{
			$sql = " SELECT * FROM " . $table;

			if((isset($options['wherecolumn'])) && (isset($options['wherevalue'])))
			{
				$sql .=  " WHERE "  . $options["wherecolumn"] . '="' . $options["wherevalue"] . '"';
			}

			if(isset($options['orderby']))
			{
				$sql .=  " ORDER BY " . $options["orderby"];
			}

			if(isset($options['order']))
			{
				$sql .= '  ' . $options["order"];				
			}

			if(isset($options['limit']))
			{
				$sql .= ' LIMIT ';
				 if(isset($options["offset"]))
				 {
				 	$sql .= $options['offset'] . ' , ';
				 }

				 $sql .= $options["limit"];

				 //echo $sql;
			}

			//var_dump($options); 

			$query = $pdo->query($sql);

			$query->execute();
			
			$result = $query->fetchAll();

			//On supprime le curseur
			$query->closeCursor();

			//On retourne tous les enregistrements selectionnées
			return $result;		
		}

		catch(Exception $e)
		{
			die("Problème avec la base de données: " . $e->getMessage());
		}
	}	

	function deletetable($table, $options=array())
	{
		global $pdo;

		try
		{
			$sql = " DELETE FROM " . $table;
			if((isset($options["idcolumn"])) && (isset($options["idvalue"])))
			{
				$sql .= ' WHERE ' . $options["idcolumn"] . " = " . $options["idvalue"];
			}

			$query = $pdo->exec($sql);

			return true;			
		}

		catch(Exception $e)
		{
			return false;
		}	
	}	

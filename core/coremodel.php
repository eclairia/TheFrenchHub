<?php
    if (!defined("_BASE_URL")) die("Ressource interdite !");
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

    function count_table($table, $options=array(), $and=array())
    {
        global $pdo;

        try
        {
            $sql = "SELECT COUNT(*) AS nombre FROM ";

            $i = 1;
            while ($i <= count($table) )
            {
                $sql .= " " . $table["table".$i];
                if ( (count($table) > 1) && ($i != count($table)) )
                {
                    $sql .= ",";
                }
                $i++;
            }

            if ((isset($options["where_column"])) && (isset($options["where_value"])))
            {
                $sql .= " WHERE " . $options["where_column"] . " = " . $options["where_value"];
            }

            if ((isset($and)) && (isset($and)))
            {
                $i = 1;
                while ($i <= count($and)/2 )
                {
                    $sql .= " AND " . $and["and_column".$i] . " = " . $and["and_value".$i];
                    $i++;
                }
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

    function select_table($table, $options=array(), $and=array())
    {
        global $pdo;

        /*$nb_table = count($table);
        echo $nb_table;
        exit;*/

        try
        {
            $sql = "SELECT * FROM ";

            $i = 1;
            while ($i <= count($table))
            {
                $sql .= " " . $table["table".$i];
                if ((count($table) > 1) && ($i != count($table)))
                {
                    $sql .= ",";
                }
                $i++;
            }

            if ((isset($options["where_column"])) && (isset($options["where_value"])))
            {
                $sql .= " WHERE " . $options["where_column"] . " = " . $options["where_value"];
            }

            if ((isset($and)) && (isset($and)))
            {
                $i = 1;
                while ($i <= count($and)/2 )
                {
                    $sql .= " AND " . $and["and_column".$i] . " = " . $and["and_value".$i];
                    $i++;
                }
            }

            if (isset($options["orderby"]))
            {
                $sql .= " ORDER BY " . $options["orderby"];
            }

            if (isset($options["order"]))
            {
                $sql .= " " . $options["order"];
            }

            if (isset($options["limit"]))
            {
                $sql .= " LIMIT ";
                if (isset($options["offset"]))
                {
                    $sql .= $options["offset"] . ", ";
                }
                $sql .= $options["limit"];
            }

            //echo $sql; exit;

            $query = $pdo->query($sql);
            $data = $query->fetchAll();
            $query->closeCursor();
            // var_dump($query);
            // die();
            return $data;
        }
        catch (Exception $e)
        {
            die('Erreur SQL :' .$e->getMessage());
        }
    }

    function select_table_value($table, $options=array(), $and=array())
    {
        global $pdo;

        /*$nb_table = count($table);
        echo $nb_table;
        exit;*/

        try
        {
            $sql = "SELECT * FROM ";

            $i = 1;
            while ($i <= count($table))
            {
                $sql .= " " . $table["table".$i];
                if ((count($table) > 1) && ($i != count($table)))
                {
                    $sql .= ",";
                }
                $i++;
            }

            if ((isset($options["where_column"])) && (isset($options["where_value"])))
            {
                $sql .= " WHERE " . $options["where_column"] . " = '" . $options["where_value"] . "'";
            }

            if ((isset($and)) && (isset($and)))
            {
                $i = 1;
                while ($i <= count($and)/2 )
                {
                    $sql .= " AND " . $and["and_column".$i] . " = '" . $and["and_value".$i] . "'";
                    $i++;
                }
            }

            if (isset($options["orderby"]))
            {
                $sql .= " ORDER BY " . $options["orderby"];
            }

            if (isset($options["order"]))
            {
                $sql .= " " . $options["order"];
            }

            if (isset($options["limit"]))
            {
                $sql .= " LIMIT ";
                if (isset($options["offset"]))
                {
                    $sql .= $options["offset"] . ", ";
                }
                $sql .= $options["limit"];
            }

            //echo $sql; exit;

            $query = $pdo->query($sql);
            $data = $query->fetchAll();
            $query->closeCursor();
            // var_dump($query);
            // die();
            return $data;
        }
        catch (Exception $e)
        {
            die('Erreur SQL :' .$e->getMessage());
        }
    }

	function deletetable($table, $options=array(), $and=array())
	{
		global $pdo;

		try
		{
			$sql = " DELETE FROM ";

            $i = 1;
            while ($i <= count($table) )
            {
                $sql .= " " . $table["table".$i];
                if ( (count($table) > 1) && ($i != count($table)) )
                {
                    $sql .= ",";
                }
                $i++;
            }

            if ((isset($options["where_column"])) && (isset($options["where_value"])))
            {
                $sql .= " WHERE " . $options["where_column"] . " = '" . $options["where_value"] . "'";
            }

            if (isset($and))
            {
                $i = 1;
                while ($i <= count($and)/2 )
                {
                    $sql .= " AND " . $and["and_column".$i] . " = '" . $and["and_value".$i] . "'";
                    $i++;
                }
            }

            //echo $sql;
            //exit;

			$query = $pdo->exec($sql);

			return true;			
		}
		catch(Exception $e)
		{
		    echo $sql;
            die('Erreur SQL: ' . $e->getMessage());
            //return false;
		}	
	}	

<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function verif_validate($key, $user_confirmed)
	{
	    global $pdo;

	    // var_dump($key);
	    // die();

	    try
	    {
	        $req = "UPDATE tfh_users 
	        		SET user_confirmed = :user_confirmed
	        		WHERE user_key = :user_key";

	        // var_dump($key);
	        // die();

	        $query = $pdo->prepare($req);

	        $query->bindParam(':user_confirmed', $user_confirmed, PDO::PARAM_INT);
	        $query->bindParam(':user_key', $key, PDO::PARAM_STR);

	        $query->execute();

	        // var_dump($query);
	        // die();

	        return $key;
	    }

	    catch(Exception $e)
	    {
	        return false;
	    }
	}
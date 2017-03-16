<?php

	function insert_order($order)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_orders(order_user_login, order_user_password, order_price)
					VALUES (:user_login, :user_password, :order_price)";

			$query = $pdo->prepare($req);

			$query->bindValue(':user_login', $_SESSION['user']["user_login"], PDO::PARAM_STR);
			$query->bindValue(':user_password', $_SESSION['user']["user_password"], PDO::PARAM_STR);
            $query->bindValue(':order_price', $order["order_price"], PDO::PARAM_STR);

			$query->execute();

            return true;
		}

		catch(Exception $e)
		{
            die('Erreur technique :' .$e->getMessage());
		}
	}
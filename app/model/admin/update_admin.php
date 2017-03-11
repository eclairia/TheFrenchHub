<?php

	function update_admin($admin_name, $admin_mail, $admin_login, $admin_password, $admin_id)
	{
		global $pdo;

		// var_dump($admin_name);
		// var_dump($admin_mail);
		// var_dump($admin_login);
		// var_dump($admin_password);
		// var_dump($admin_id);
		// die();
		try
		{
			$req = "UPDATE tfh_admin SET admin_name = :admin_name, admin_mail = :admin_mail, admin_login = :admin_login, admin_password = :admin_password WHERE admin_ID = :admin_id";

			$query = $pdo->prepare($req);

			$query->bindParam(':admin_name', $admin_name, PDO::PARAM_STR);
			$query->bindParam(':admin_mail', $admin_mail, PDO::PARAM_STR);
			$query->bindParam(':admin_login', $admin_login, PDO::PARAM_STR);
			$query->bindParam(':admin_password', $admin_password, PDO::PARAM_STR);	
			$query->bindParam(':admin_id', $admin_id , PDO::PARAM_INT);		
			$query->execute();
		}

		catch(Exception $e)
		{
			return false;
		}
	}
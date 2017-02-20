<?php

	function modifier_users($user_login, $user_pass, $user_email, $display_name, $user_id)
	{
		global $pdo;

		try
		{
			$req = "UPDATE blog_users SET user_login = :user_login, user_pass = :user_pass, user_email = :user_email, display_name = :display_name WHERE ID = :user_id";

			$query = $pdo->prepare($req);

			$query->bindParam(':user_login', $user_login, PDO::PARAM_STR);
			$query->bindParam(':user_pass', $user_pass, PDO::PARAM_STR);
			$query->bindParam(':user_email', $user_email, PDO::PARAM_STR);
			$query->bindParam(':display_name', $display_name, PDO::PARAM_STR);	
			$query->bindParam(':user_id', $user_id , PDO::PARAM_INT);		
			$query->execute();
		}

		catch(Exception $e)
		{
			return false;
		}
	}
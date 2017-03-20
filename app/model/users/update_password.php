<?php

	function update_password($user_mail, $user_password)
	{
		global $pdo;

		try
		{
			$req = "UPDATE tfh_users SET user_password = :user_password WHERE user_mail = :user_mail";

			$query = $pdo->prepare($req);

			$query->bindParam(':user_mail', $user_mail, PDO::PARAM_STR);
			$query->bindParam(':user_password', $user_password, PDO::PARAM_STR);

			$query->execute();

			return true;
		}

		catch(Exception $e)
		{
			return false;
		}
	}
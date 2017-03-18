<?php

	function insert_service($service)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_services(service_description, service_price, service_duration)
					VALUES (:service_description, :service_price, :service_duration)";

			$query = $pdo->prepare($req);

			$query->bindParam(':service_description', $service["service_description"], PDO::PARAM_STR);
			$query->bindParam(':service_price', $service["service_price"], PDO::PARAM_STR);
            $query->bindParam(':service_duration', $service["service_duration"], PDO::PARAM_INT);

            $query->execute();

            return true;
		}

		catch(Exception $e)
		{
			//return false;
            var_dump($service);
            die('Erreur SQL: ' . $e->getMessage());
		}
	}
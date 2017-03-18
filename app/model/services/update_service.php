<?php

	function update_service($service, $id)
	{
		global $pdo;
		
		try
		{
			$req = "UPDATE tfh_services 
                    SET service_description = :service_description, service_price = :service_price, service_duration = :service_duration 
                    WHERE service_ID = :id";

			$query = $pdo->prepare($req);

			$query->bindParam(':service_description', $service['service_description'], PDO::PARAM_STR);
			$query->bindParam(':service_price', $service['service_price'], PDO::PARAM_STR);
            $query->bindParam(':service_duration', $service["service_duration"], PDO::PARAM_INT);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->execute();

			return true;
		}

		catch(Exception $e)
		{
			return false;
		}
	}
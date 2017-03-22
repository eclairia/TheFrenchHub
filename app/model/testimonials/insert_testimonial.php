<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_testimonial($testimonial, $file, $testimonial_picture_url)
	{
		global $pdo;

		// var_dump($testimonial);
		// var_dump($file);
		// var_dump($testimonial_picture_url);
		// die();

		try
		{
			$req = "INSERT INTO tfh_testimonials(testimonial_last_name, testimonial_first_name, testimonial_photo_url, testimonial_job, testimonial_content)
					VALUES (:testimonial_last_name, :testimonial_first_name, :testimonial_file, :testimonial_job, :testimonial_content)";

			$query = $pdo->prepare($req);

			$query->bindValue(':testimonial_last_name', $testimonial["testimonial_last_name"], PDO::PARAM_STR);
			$query->bindValue(':testimonial_first_name', $testimonial["testimonial_first_name"], PDO::PARAM_STR);
			$query->bindValue(':testimonial_file', $testimonial_picture_url, PDO::PARAM_STR);
			$query->bindValue(':testimonial_job', $testimonial["testimonial_job"], PDO::PARAM_STR);
			$query->bindValue(':testimonial_content', $testimonial["testimonial_content"], PDO::PARAM_STR);										

			$query->execute();

			//Récupération de l'ID
			//return $pdo->lastInsertId();
            return true;
		}

		catch(Exception $e)
		{
            die('Erreur SQL: ' . $e->getMessage());
            //return false;
		}
	}
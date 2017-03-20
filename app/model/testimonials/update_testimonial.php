<?php

	function update_testimonial($testimonial, $url)
	{
		// var_dump($testimonial);
		// var_dump($url);
		// die();
		global $pdo;

		try
		{
			$req = "UPDATE tfh_testimonials SET testimonial_last_name = :testimonial_last_name, testimonial_first_name = :testimonial_first_name, testimonial_photo_url = :testimonial_picture_url, testimonial_job = :testimonial_job, testimonial_content = :testimonial_content WHERE testimonial_ID = :testimonial_id";

			$query = $pdo->prepare($req);

			$query->bindParam(':testimonial_id', $testimonial["testimonial_id"], PDO::PARAM_INT);
			$query->bindParam(':testimonial_last_name', $testimonial["testimonial_last_name"], PDO::PARAM_STR);
			$query->bindParam(':testimonial_first_name', $testimonial["testimonial_first_name"], PDO::PARAM_STR);
			$query->bindParam(':testimonial_picture_url', $url, PDO::PARAM_STR);
			$query->bindParam(':testimonial_job', $testimonial["testimonial_job"], PDO::PARAM_STR);
			$query->bindParam(':testimonial_content', $testimonial["testimonial_content"], PDO::PARAM_STR);
						
			$query->execute();

			return true;
		}

		catch(Exception $e)
		{
			return false;
		}
	}
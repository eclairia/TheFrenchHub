<?php

//Contrôler l'extension

function upload_pictures($file)
{

	// var_dump($data);
	// var_dump($file);
	// die();

	$extension = array('jpeg', 'jpg', 'gif', 'png');
	$extension_upload =strtolower( substr( strrchr($file['testimonial_file']["name"], '.') ,1) );

	if(in_array($extension_upload, $extension))
	{
		echo "Cette extension est autorisée <br />";
	}
	else
	{
		echo "Seuls les fichiers avec les extensions .jpg, .jpeg, .png et . gif sont autorisés <br />";
	}

	//Connaître les dimensions d'une image
	$sizes = getimagesize($file['testimonial_file']['tmp_name']);
	echo "Largeur: " . ($sizes[0]) . "pixels <br />";
	echo "Longueur: " . ($sizes[1]) . "pixels <br />";

	//Déplacer le fichier reçu

	$url = md5(uniqid(rand(), true));
	$exp = explode(".", $file['testimonial_file']['name']);
	echo "Nouveau nom:  {$url} <br />";

	if(move_uploaded_file($file['testimonial_file']['tmp_name'], IMG_TESTIMONIAL_URL.$url.".".$exp[count($exp)-1]))
	{
		echo "Le fichier a bien été enregistré <br />";
	}

	//Redimmensionner l'image
	//$image = imagecreatefromjpeg("pictures/".$url."."."$exp[count($exp)-1]");
	$image = imagecreatefromjpeg(IMG_TESTIMONIAL_URL.$url."."."jpg");
	$width = imagesx($image);
	$height = imagesy($image);

	if($width > $height)
	{
        imagedestroy($image);
        return false;
	}
	else
	{
		//Format vertical
		$new_height = 340;
		$new_width = ($new_height * $width) / $height;
	}

	$thumb = imagecreatetruecolor($new_width, $new_height);
	imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	imagejpeg($thumb,IMG_TESTIMONIAL_URL.$url.".".$exp[count($exp)-1] ,90);

	imagedestroy($image);

	//Récupération du nom de l'image et de son extension jpg seulement pour le moment
	$url = $url . "." . $extension_upload;

	//On retourne l'url pour la récupérer dans la vue

	return $url;
}
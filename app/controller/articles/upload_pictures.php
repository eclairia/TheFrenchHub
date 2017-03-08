<?php

//Récupérer les infos du fichier reçu
// echo "Votre nom est: " . $_POST['ch_nom'] . "<br />";
// echo "Votre prénom est: " . $_POST['ch_prenom'] . "<br />";

// echo "Les infos de votre fichiers: " . "<br />";
// echo "-- Le nom: " . $_FILES['ch_file']['name'] . "<br />";
// echo "-- Le type: " . $_FILES['ch_file']['type'] . "<br />";
// echo "-- Le nom temp: " . $_FILES['ch_file']['tmp_name'] . "<br />";
// echo "-- Le code: " . $_FILES['ch_file']['error'] . "<br />";

//Contrôler l'extension

function upload_pictures($data, $file)
{
	// var_dump($_POST);
	// var_dump($data["article_file"]);
	// var_dump($_FILES);
	// die();

	$extension = array('jpeg', 'jpg', 'gif', 'png');
	$extension_upload =strtolower( substr( strrchr($file['article_file']["name"], '.') ,1) );

	if(in_array($extension_upload, $extension))
	{
		echo "Cette extension est autorisée <br />";
	}	

	else
	{
		echo "Seuls les fichiers avec les extensions .jpg, .jpeg, .png et . gif sont autorisés <br />";
	}

	//Connaître les dimensions d'une image
	$sizes = getimagesize($file['article_file']['tmp_name']);
	echo "Largeur: " . ($sizes[0]) . "pixels <br />";
	echo "Longueur: " . ($sizes[1]) . "pixels <br />";

	//Déplacer le fichier reçu

	$url = md5(uniqid(rand(), true));
	$exp = explode(".", $file['article_file']['name']);
	echo "Nouveau nom:  {$url} <br />";

	if(move_uploaded_file($file['article_file']['tmp_name'], "webroot/images/".$url.".".$exp[count($exp)-1]))
	{
		echo "Le fichier a bien été enregistré <br />";
	}

	//Redimmensionner l'image
	//$image = imagecreatefromjpeg("pictures/".$url."."."$exp[count($exp)-1]");
	$image = imagecreatefromjpeg("webroot/images/".$url."."."jpg");
	$width = imagesx($image);
	$height = imagesy($image);

	if($width > $height)
	{
		//Format horizontal
		$new_width = 500;
		$new_height = ($new_width * $height) / $width;
	}

	else
	{
		//Format vertical
		$new_height = 375;
		$new_width = ($new_height * $width) / $height;
	}

	$thumb = imagecreatetruecolor($new_width, $new_height);
	imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	imagejpeg($thumb,"webroot/images/".$url.".".$exp[count($exp)-1] ,90);

	imagedestroy($image);
	return $url;
}
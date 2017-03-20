<?php

//Contrôler l'extension

function upload_presentation($file)
{
    var_dump($file);
    //die();

	$extension = array('pdf');
	$extension_upload =strtolower( substr( strrchr($file['project_file']["name"], '.') ,1) );

	if(in_array($extension_upload, $extension))
	{
		echo "Cette extension est autorisée <br />";
	}
	else
	{
		echo "Seuls les fichiers avec les extensions .pdf sont autorisés <br />";
	}

    //die();

	//Déplacer le fichier reçu

	$url = md5(uniqid(rand(), true));
	$exp = explode(".", $file['project_file']["name"]);
	echo "Nouveau nom:  {$url} <br />";

    //die();

	if(move_uploaded_file($file['project_file']['tmp_name'], FILE_PROJECT_URL.$url.".".$exp[count($exp)-1]))
	{
		echo "Le fichier a bien été enregistré <br />";
	}

	//die();
	//Récupération du nom de l'image et de son extension
	$url = $url . "." . $extension_upload;

	//On retourne l'url pour l'insérer dans la base de données

	return $url;
}
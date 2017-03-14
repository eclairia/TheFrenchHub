<?php

	$la_date = date("Y/m/d H:i:s");

	if(!setcookie("date", $la_date, time() + 3600*24*31))
	{
		die("Le cookie n'a pas pu être enregisté");
	}

	if(isset($_GET["action"]))
	{
		if($_GET['action'] == "suppr")
		{
			if(setcookie("date", "", time()-1000))
			{
				unset($_COOKIE['date']);
				echo "Le cookie a été supprimé";
			}
		}
	}
	var_dump($_COOKIE);

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Cookies</title>

</head>
<body>

	<h1>Test des cookies</h1>

	<p>
		<?php

			if(isset($_COOKIE['date']))
			{
				echo "Votre dernière visite était le" . " " . $_COOKIE['date'];
			}

			else
			{
				echo "Première visite";
			}


		?>

	</p>

</body>
</html>
<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
<head>
	<meta charset="<?= PAGE_CHARSET ?>">
	<title><?= PAGE_TITLE ?></title>
	<link rel='stylesheet' type="text/css" href='webroot/CSS/bootstrap.min.css' />
	<link rel='stylesheet' type="text/css" href='webroot/CSS/style.css' />
</head>
<body lang="<?= APP_LANG ?>">

	<div class="container-fluid header">
			
		<h2>Ceci est le header</h2>

	</div>

	<div class="container-fluid nav">
			
		<div class="container menu">
			
			<ul>

				<li><a href="index.php">Accueil</a></li>
				<li><a href="?module=users&action=all_users">Liste des utilisateurs</a></li>
				<li><a href="?module=article&action=new">Insérer un article</a></li>
				<?php 

					if(!isset($_SESSION["user"]))
					{ ?>	
						<li><a href="?module=users&action=login">Se connecter</a></li>

					<?php }

					else
					{ ?>	
						<?php

							if($_SESSION["level"] == 0)
							{?>
								<li><a href="?module=users&action=update_users&id=<?= $_SESSION['user']['ID'] ?>">Modifier vos données</a></li>
								<li id="liadmin">Bonjour <?php echo $_SESSION["user"]["display_name"]; ?></li>
							<?php }

							else
							{ ?>

								<li><a href="?module=users&action=insert_users">Insérer un utilisateur</a></li>
								<li><a href="?module=commentaire&action=admin">Modérer les commentaires</a></li>
								<li id="liadmin">Bonjour admin</li>		

							<?php } ?>
							<li><a href="?module=users&action=logout">Se déconnecter</a></li>
						<?php } ?>

			</ul>	
				
		</div>

	</div>



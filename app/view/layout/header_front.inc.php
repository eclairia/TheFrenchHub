<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
<head>
	<meta charset="<?= PAGE_CHARSET ?>">
	<title><?= PAGE_TITLE ?></title>
	<link rel='stylesheet' type="text/css" href='webroot/CSS/style.css' />
</head>

<body>
	<!-- Navigation -->
	<nav>
	  <div id="navleft">
			<a id="lienlogohome" href="home.php">
				<div id="logotype"><img src="webroot/IMG/logo.png" alt=""/></div>
				<div id="txtlogo">the french hub</div>
      </a>
		</div>

		<div id="navright">
			<div class="linknavdiv"><a class="linknav" href="?module=static&action=home">Accueil</a></div>
			<div class="linknavdiv"><a class="linknav" href="?module=static&action=concept">Le concept</a></div>
			<div class="linknavdiv"><a class="linknav" href="?module=time_slots&action=reserve">Nos offres</a></div>
			<div class="linknavdiv"><a class="linknav" href="?module=articles&action=feed">Actualités</a></div>
			<div class="linknavdiv"><a class="linknav" href="?module=static&action=team">L'équipe</a></div>
			<?php
                if (!isset($_SESSION['user']))
                {
            ?>
                <div class="linknavdiv"><a class="linknav" href="?module=users&action=login">Connexion</a></div>
                <div class="linknavdiv"><a class="linknav" href="?module=users&action=signup">Inscription</a></div>
            <?php
                }
                else
                {
            ?>
                <div class="linknavdiv"><a class="linknav" href="?module=users&action=logout">Déconnexion</a></div>
            <?php
                }
			?>

		</div>
	</nav>
	<!-- Fin Navigation -->

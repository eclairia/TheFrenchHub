<?php if (!defined("_BASE_URL")) die("Ressource interdite !"); ?>
<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
<head>
	<meta charset="<?= PAGE_CHARSET ?>">
	<title><?= PAGE_TITLE ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' type="text/css" href='webroot/CSS/style.css' />
	<link rel="icon" type="image/png" href="webroot/IMG/logo2.png" />
    <script src="webroot/JS/jquery-3.1.1.min.js"></script>
</head>

<body>
	<!-- Navigation -->

	<div id="navmobile">

		<div id="pastille">

			<div id="hamburger">

					<span class="barburger"></span>

					<span class="barburger"></span>

					<span class="barburger"></span>

			</div>


		</div>

		<div id="linkmobile">

			<a class="linknav2" href="?module=static&action=home">Accueil</a>
			<a class="linknav2" href="?module=static&action=concept">Le concept</a>
			<a class="linknav2" href="?module=services&action=choice">Nos offres</a>
			<a class="linknav2" href="?module=articles&action=feed">Actualités</a>
			<a class="linknav2" href="?module=static&action=team">L'équipe</a>
			<?php
                if (!isset($_SESSION['user']))
                {
            ?>
              <a class="linknav2" href="?module=users&action=login">Connexion</a>
              <a class="linknav2" href="?module=users&action=signup">Inscription</a>
            <?php
                }
                else
                {
            ?>
              <a class="linknav2" href="?module=users&action=dashboard">Dashboard</a>
          		<a class="linknav2" href="?module=users&action=logout">Déconnexion</a>
            <?php
                }
			?>

		</div>

		<div id="linkmobile2">

			<a class="linknav3" href="?module=contacts&action=new">Contact</a>
			<a class="linknav3" href="?module=static&action=cgv">CGV</a>
			<a class="linknav3" href="?module=static&action=mentions">Mentions légales</a>
			<a class="linknav3" href="?module=static&action=plan">Plan du site</a>

		</div>

	</div>

	<nav>
	  <div id="navleft">
			<a id="lienlogohome" href="?module=static&action=home">
				<div id="logotype"><img src="webroot/IMG/logo.png" alt=""/></div>
				<div id="txtlogo">the french hub</div>
      </a>
		</div>

		<div id="navright">
			<div class="linknavdiv"><a class="linknav" href="?module=static&action=home">Accueil</a></div>
			<div class="linknavdiv"><a class="linknav" href="?module=static&action=concept">Le concept</a></div>
			<div class="linknavdiv"><a class="linknav" href="?module=services&action=choice">Nos offres</a></div>
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
                <div class="linknavdiv"><a class="linknav" href="?module=users&action=dashboard">Dashboard</a></div>
                <div class="linknavdiv"><a class="linknav" href="?module=users&action=logout">Déconnexion</a></div>
            <?php
                }
			?>

		</div>

	</nav>

	<!-- Fin Navigation -->

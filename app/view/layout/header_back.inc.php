<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
<head>
	<meta charset="<?= PAGE_CHARSET ?>">
	<title><?= PAGE_TITLE ?></title>
	<link rel='stylesheet' type="text/css" href='webroot/CSS/bootstrap.min.css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="webroot/JS/jquery-3.1.1.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<header class="row">
			<div class="col-lg-7 col-lg-push-3 text-center">
				<h1><?= PAGE_TITLE ?></h1>
			</div>
			<div class="col-lg-3 col-lg-pull-7 text-left">
				<h2 class="text-center">The French Hub</h2>
			</div>
			<div class="col-lg-2 text-center">
				<p><a class="btn btn-danger btn-lg" href="?module=admin&action=logout" role="button"><span class="glyphicon glyphicon-off"></span> Se déconnecter</a></p>
			</div>
		</header>
		<div class="row">
			<nav class="col-lg-2 col-sm-2">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" <?php if($_GET['module'] == 'projects'){echo 'class="active"';} ?> ><a href="?module=projects&action=list">Liste des projets</a></li>
					<li role="presentation" <?php if($_GET['module'] == 'users'){echo 'class="active"';} ?> ><a href="?module=users&action=list">Liste des utilisateurs</a></li>
					<li role="presentation" <?php if($_GET['module'] == 'services'){echo 'class="active"';} ?> ><a href="?module=services&action=list">Liste des offres</a></li>
					<li role="presentation" <?php if($_GET['module'] == 'articles'){echo 'class="active"';} ?> ><a href="?module=articles&action=list">Liste des articles</a></li>
				</ul>
			</nav>





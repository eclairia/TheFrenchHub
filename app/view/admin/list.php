<?php include_once("app/view/layout/header_back.inc.php"); ?>


	<div class="container-fluid all-articles">
		
		<h1>Liste des administrateurs deThe French Hub</h1>


		<p class="container-fluid">Il y a <?= $nb_admins ?> administrateur dans la base de données</p>

		<?php
			//Pour chaque utilisateur du tableau
			foreach($admins as $admin)
			{?>
				<div class="container liste_users">

					<p>
						Admin name: <?= $admin['admin_name']; ?>
					</p>
					 <p>
					 	Adresse mail: <?= $admin['admin_mail']; ?>
					 </p>
					 <p> 
					 	Pseudo: <?= $admin['admin_login']; ?>
					</p>
					<p>
						<a href='?module=admin&action=update&id=<?= $admin['admin_ID'] ?>'>Modifier les données de l'administrateur</a>
					</p>
				</div>

			<?php } ?>
	</div>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>


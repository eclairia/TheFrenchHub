<form method="POST" action="?module=projects&action=add_member" id="form_add_project_users">
	<label>Prénom du membre à ajouter: </label><input type="text" name="user_first_name" required><br><br>
	<label>Nom du membre à ajouter: </label><input type="text" name="user_last_name" required>	<br><br>
	<label>Adresse mail du membre à ajouter: </label><input type="email" name="user_mail" required><br><br>
	<input type="hidden" name="project_id" value="<?= $_GET['id']; ?>">
	<input type="hidden" name="user_password" value="<?= uniqid(rand()); ?>">	
	<input type="submit">
</form>
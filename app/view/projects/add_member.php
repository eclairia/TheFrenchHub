<form method="POST" action="?module=projects&action=add_member" id="form_add_project_users">
	<label>Adresse mail du membre à ajouter: </label><input type="email" name="user_mail" required>
	<input type="hidden" name="project_id" value="<?= $_GET['id']; ?>">
	<input type="submit">
</form>
<?php if (!defined("_BASE_URL")) die("Ressource interdite !"); ?>
<form method="POST" action="?module=projects&action=update_member">
	<input type="radio" name="user_civility"><label>M</label>
	<input type="radio" name="user_civility"><label>Mme</label><br><br>
	<label>User login: </label><input type="text" name="user_login"><br><br>
	<label>User password: </label><input type="password" name="user_password"><br><br>
	<input type="hidden" name="user_level" value="0">
	<input type="hidden" name="user_project" value="<?= $_GET['id']; ?>">
	<input type="submit">
</form>
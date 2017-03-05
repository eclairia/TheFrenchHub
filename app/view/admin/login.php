<?php include_once("app/view/layout/header.inc.php"); ?>

	<form method="POST" action="?module=admin&action=login" id="form_login">
		<label>Login: </label> <input type="text" name="admin_login"><br /><br />
		<label>Mot de passe: </label> <input type="password" name="admin_password"><br /><br />
		<input type="submit">
	</form>

<?php include_once("app/view/layout/footer.inc.php"); ?>
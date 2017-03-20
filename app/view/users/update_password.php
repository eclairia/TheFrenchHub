<p>Votre adresse mail est <?= $_GET['mail']; ?></p>
<form method="POST" action="?module=users&action=update_password&mail=<?= $_GET['mail']; ?>" id="form_update_password">
	<label>Mot de passe: </label><input type="password" name="user_password">
	<input type="submit">
</form>
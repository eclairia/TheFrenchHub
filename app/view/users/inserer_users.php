<?php if (!defined("_BASE_URL")) die("Ressource interdite !"); ?>
<form method="POST" action="?module=utilisateur&action=insert_users">	
	<input type="text" name="user_first_name">
	<input type="text" name="user_last_name">
	<input type="checkbox" name="user_civility"><label>M</label>
	<input type=date name="user_birth">
	<input type="email" name="user_mail">
	<input type="text" name="user_login">
	<input type="password" name="user_password">
	<input type="upload" name="user_avatar">
	<input type="submit">
</form>
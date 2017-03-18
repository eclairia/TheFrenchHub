<form action="?module=contact&action=new" method="POST" id="form_contact">
	<label>Contact login: </label><input type="text" name="contact_login" value="<?= $_SESSION['user']['user_login']; ?>" required><br><br>
	<label>Contact mail: </label><input type="email" name="contact_mail" required><br><br>
	<label>Contact object: </label><input type="text" name="contact_object" required><br><br>
	<label>Contact message: </label><textarea name="contact_message" required></textarea><br><br>
	<input type="submit">
</form>
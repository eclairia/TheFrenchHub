<form method="POST" action="?module=admin&action=new">


	<select id="status_admin" name="status_admin">
		<option value="1" id="super_admin">Super admin</option>
		<option value="2" id="admin">Admin</option>
	</select><br><br>

	<label>Admin Name</label><br><br><input type="text" name="admin_name"><br><br>

	<label>Admin mail</label><br><br><input type="email" name="admin_mail"><br><br>

	<label>Admin login</label><br><br><input type="text" name="admin_login"><br><br>

	<label>Admin password</label><br><br><input type="password" name="admin_password"><br><br>

	<label>File</label><input type="file" name="admin_file">

	<input type="hidden" name="admin_level" value="1">

	<input type="submit">
</form>
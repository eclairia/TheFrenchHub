<?php include("app/view/layout/header.inc.php"); ?>

	<div class="container-fluid form_insert_user">

		<h1>Modifier un utilisateur dans la base de données</h1>

		<form method="POST" action="?module=admin&action=update" id="form_users">
		    <table>
		        <tr>
		          <td><label for="admin_name" class="label-update-users">Admin name: </label></td>
		          <td><input name="admin_name" type="text" id="admin_name" class="input-update-users" required /></td>
		        </tr>

		        <tr>
		          <td><label for="admin_email" class="label-update-users">Admin email: </label></td>
		          <td><input name="admin_mail" type="text" id="admin_email" class="input-update-users" required /></td>
		        </tr>		        

		        <tr>
		          <td><label for="admin_password" class="label-update-users">Admin password: </label></td>
		          <td><input type="password" name="admin_password" id="admin_password" class="input-update-users" required ></td>
		        </tr>		        	        

		        <tr>
		          <td></td>
		          <td><input value="Modifier" type="submit" />
		          <input type="reset" value="effacer" /></td>
		        </tr>
		    </table>
	  </form>

	</div>

<?php include("app/view/layout/footer.inc.php"); ?>

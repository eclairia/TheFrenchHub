<?php include("app/view/layout/header_back.inc.php"); ?>

	<div class="container-fluid form_insert_user">

		<h1>Modifier un utilisateur dans la base de données</h1>

		<form method="POST" action="?module=articles&action=update" enctype="multipart/form-data" id="form_articles">
		    <table>
		        <tr>
		          <td><label for="article_title" class="label-update-users">Article title: </label></td>
		          <td><input name="article_title" type="text" id="article_title" class="input-update-users" required /></td>
		        </tr>

		        <tr>
		          <td><label for="article_content" class="label-update-users">Article content: </label></td>
		          <td><input name="article_content" type="text" id="article_content" class="input-update-users" required /></td>
		        </tr>		        

		        <tr>
		          <td><label for="article_picture_url" class="label-update-users">Article picture url: </label></td>
		          <td><input name="article_picture_url" type="file" id="article_picture_url" class="input-update-users" required /></td>
		        </tr>

		        <tr>
		          <td><input name="article_id" type="hidden" id="article_id" class="input-update-users" value="<?= $_GET['id']; ?>" required /></td>
		        </tr>

		        <tr>
		          <td></td>
		          <td><input value="Modifier l'article" type="submit" />
		          <input type="reset" value="effacer" /></td>
		        </tr>
		    </table>
	  </form>

	</div>

<?php include("app/view/layout/footer_back.inc.php"); ?>

<?php include("app/view/layout/header_back.inc.php"); ?>

	<div class="col-lg-10 col-sm-10">
		<p id="erreur_update_article" class='col-lg-10 bg-danger'><p>
		<form method="POST" action="?module=articles&action=update" enctype="multipart/form-data" id="form_update_article">
			<div class="form-group col-lg-6 col-sm-6">
				<p id="erreur_update_article_title"></p>
				<label for="article_title">Titre: </label>
				<input name="article_title" type="text" class="form-control" id="update_article_title" value="<?= $article[0]['article_title']; ?> " maxLenght="200" required />
			</div>

			<div class="form-group col-lg-12 col-sm-12">
				<p id="erreur_update_article_content"></p>
				<label for="article_content">Contenu: </label>
				<textarea name="article_content" class="form-control" id="update_article_content" rows="10" cols="100" required><?= $article[0]['article_content']; ?></textarea>
			</div>

			<div class="form-group col-lg-6 col-sm-6">
				<label for="article_author">Auteur: </label>
				<input name="article_author" class="form-control" id="update_article_author" type="text" value="<?= $article[0]['admin_name']; ?>" maxLenght="200" required readonly />
			</div>

			<div class="form-group col-lg-6 col-sm-6">
				<p id="erreur_update_article_file"></p>
				<label for="article_file">Photo: </label>
				<input name="article_file" class="form-control" id="update_article_file" type="file" required />
				<input type="hidden" name="MAX_FILE_SIZE" value="12345">
				<input type="hidden" name="article_ID" value="<?= $_GET['id']; ?>">
			</div>

			<div class="form-group col-lg-6 col-sm-6 text-center col-lg-offset-3 col-md-offset-3">
				<input value="Enregistrer" class="btn btn-lg btn-success" type="submit" />
				<input type="reset" class="btn btn-lg btn-warning" value="effacer" />
			</div>
		</form>
	</div>
</div>

<script>
	CKEDITOR.replace('article_content');
</script>
<script type="text/javascript" src="webroot/JS/form_update_article.js"></script>
<?php include("app/view/layout/footer_back.inc.php"); ?>

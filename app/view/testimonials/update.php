<?php include_once 'app/view/layout/header_back.inc.php'; ?>
	<form method="POST" enctype="multipart/form-data" action="?module=testimonials&action=update" id="form_testimonial">
		<label>Nom: </label><br><input type="text" name="testimonial_last_name"><br><br>
		<label>Prénom: </label><br><input type="text" name="testimonial_first_name"><br><br>
		<label>Photo: </label><input type="file" name="testimonial_file"><br><br>
		<label>Travail: </label><br><input type="text" name="testimonial_job"><br><br>
		<label>Témoignage: </label><br><textarea name="testimonial_content"></textarea><br><br>
		<input type="hidden" name="testimonial_id" value="<?= $_GET['id']; ?>">
		<input type="submit">
	</form>

<script>
	CKEDITOR.replace('testimonial_content');
</script>

<?php include_once 'app/view/layout/footer_back.inc.php'; ?>

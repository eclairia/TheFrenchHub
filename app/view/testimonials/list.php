<?php include_once 'app/view/layout/header_back.inc.php'; ?>

	<?php foreach($testimonials as $testimonial)
	{ ?>
		<p><?= $testimonial['testimonial_first_name']; ?></p>
		<p><?= $testimonial['testimonial_last_name']; ?></p>
		<p><?= $testimonial['testimonial_job']; ?></p>
		<p><?= $testimonial['testimonial_content']; ?></p>
		<a href="?module=testimonials&action=update&id=<?= $testimonial['testimonial_ID']; ?>">Modifier le témoignage</a><br><br>		
		<a href="?module=testimonials&action=delete&id=<?= $testimonial['testimonial_ID']; ?>">Supprimer le témoignage</a><br><br>
	<?php } ?>
 
<?php include_once 'app/view/layout/footer_back.inc.php'; ?>

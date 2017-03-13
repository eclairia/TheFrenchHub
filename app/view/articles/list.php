<?php
	foreach($articles as $article)
	{ ?>
		<img src="<?= 'webroot/IMG/' . $article["article_picture_url"]; ?>">
		<p><?= $article["article_title"]; ?></p>
		<p><?= $article["article_id"]; ?></p>
		<p><?= $article["article_content"]; ?></p>
		<p><?= $article["article_date"]; ?></p>
		<a href="?module=articles&action=update&id=<?= $article['article_id']; ?>">Modifier le contenu de l'article</a><br>
		<a href="?module=articles&action=delete&id=<?= $article['article_id']; ?>">Supprimer l'article</a><br><br>
	<?php } ?>
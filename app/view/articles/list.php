<?php
	// var_dump($articles);
	foreach($articles as $article)
	{ ?>
		<p><?= $article["article_title"]; ?></p>
		<p><?= $article["article_id"]; ?></p>
		<p><?= $article["article_content"]; ?></p>
		<p><?= $article["article_date"]; ?></p>
		<a href="?module=articles&action=update&id=<?= $article['article_id']; ?>">Modifier le contenu de l'article</a><br>
		<a href="?module=articles&action=delete&id=<?= $article['article_id']; ?>">Supprimer l'article</a>
	<?php } ?>
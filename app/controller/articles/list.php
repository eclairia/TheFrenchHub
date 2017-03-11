<?php

	$articles = selecttable("tfh_articles", "orderby => article_id", "order => DESC");

	if($articles)
	{
		include_once("app/view/articles/list.php");
	}
<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	define("PAGE_LANG", "fr");
	define("PAGE_CHARSET", "utf-8");

	define("DEFAULT_MODULE", "static");
	define("DEFAULT_ACTION", "home");

	define("PAGINATION_ARTICLES", 3);

    define("USER_SUPER_ADMIN", 2);
	define("USER_ADMIN", 1);
	define("USER_LAMBDA", 0);

	define("USER_CONFIRMED", 1);

	define("SALT", "gt5zfgty7qg!yegh8");

    define("MAIL_EXPEDITEUR", "frenchhubofficiel@gmail.com");
    define("NOM_EXPEDITEUR", "The French Hub");

    define("ENV", "DEV");

    define("LOGO_FOR_PAYPAL_URL", "http://ghulin.eemi.tech/2a/tfh/logo.png");

    define("FILE_PROJECT_URL", "webroot/files/projects/");
    define("IMG_ARTICLE_URL", "webroot/IMG/articles/");
    define("IMG_TESTIMONIAL_URL", "webroot/IMG/testimonials/");
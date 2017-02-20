<?php

	session_destroy();
	session_unset();
	unset($_SESSION["user"]);

	header("Location:?module=users&action=login");
	exit;
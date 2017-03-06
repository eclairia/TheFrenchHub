<?php

	session_destroy();
	session_unset();
	unset($_SESSION["admin"]);

	header("Location:?module=admin&action=login");
	exit;
<?php
	foreach($users as $user)
	{ ?>
		<p><?= $user["user_first_name"]; ?></p>
		<p><?= $user["user_last_name"]; ?></p>
		<p><?= $user["user_civility"]; ?></p>
		<p><?= $user["user_birth"]; ?></p>
		<p><?= $user["user_mail"]; ?></p>
		<p><?= $user["user_login"]; ?></p>
		<p><?= $user["user_avatar"]; ?></p>
		<a href="?module=users&action=update">Modifier les informations d'un user</a>
	<?php } ?>
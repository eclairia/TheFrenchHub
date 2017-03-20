<?php
	foreach($contacts as $contact)
	{ ?>
		<label>Prénom: </label>
		<p><?= $contact['contact_first_name']; ?></p>
		<label>Nom: </label>
		<p><?= $contact['contact_last_name']; ?></p>
		<label>Email: </label>
		<p><a href="mailto:<?= $contact['contact_mail']; ?>"><?= $contact['contact_mail']; ?></a></p>
		<label>Objet: </label>
		<p><?= $contact['contact_object']; ?></p>
		<label>Message: </label>
		<p><?= $contact['contact_message']; ?></p>
	<?php } ?>
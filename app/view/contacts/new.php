<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="contentcontact">

	<div id="formcontact">

		<div><h1 id="titlecontact">Contact</h1></div>

		<form id="formcontact2" method="post" action="?module=contacts&action=new">

			<div>
				<input class="formwidthdash2 borderformdash " name="contact_last_name" type="text" placeholder="Nom" value="" required>
			</div>

			<div>
				<input class="formwidthdash2 borderformdash" name="contact_first_name" type="text" placeholder="Prénom" value="" required>
			</div>

			<div>
				<input class="formwidthdash2 borderformdash" type="email" name="contact_mail" placeholder="Adresse mail">
			</div>

			<select class="formwidthdash2 borderformdash" name="contact_object">

				<option value="valeur1">Sujet de votre demande</option>
				<option value="valeur2">---------------------------------</option>
				<option value="Démarches administratives">Démarches administratives</option>
				<option value="Conseils">Conseils</option>
				<option value="Question sur The French Hub">Question sur The French Hub</option>
				<option value="Autre">Autre</option>

			</select>

			<textarea class="formwidthdash borderformdash" placeholder="Tapez votre message ici" name="contact_message"></textarea>

			<div>
				<input class="formwidth boutonform"  type="submit" placeholder="Envoyer" >
			</div>

		</form>

	</div>

	<div id="contactright">

		<div id="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.426106648147!2d2.3392181155032246!3d48.86915300790321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c8ab00dff%3A0xc8bb3a66d8ae2daa!2s28+Place+de+la+Bourse%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1490015471617"
							   width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		<div><p id="grdtxtcontact">The French Hub</p></div>
		<div><p class="txtcontact">28 place de la bourse 75002 Paris</p></div>
		<div><p class="txtcontact">01 34 69 34 34</p></div>
		<div><p class="txtcontact">frenchhubofficiel@gmail.com</p></div>

	</div>
</div>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>

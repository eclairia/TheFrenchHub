	<?php include_once 'app/view/layout/header_front.inc.php'; ?>

	<!-- Header -->
	<header>
			<div id="contentheaderhome">
				<div><h1 id="h1header">the french hub</h1></div>
				<div><p id="textheader">Success is about sharing</p></div>
				<div><a id="linkheader" href="?module=static&action=concept">En savoir plus</a></div>
			</div>
	</header>
	<!-- Fin Header -->

	<!-- Nos Services -->
	<div id="presentationhome">

			<div class="titlerubriquehome">
				<div><h2 class="rubriquehome">Nos services</h2></div>
				<div class="soulignement"></div>
			</div>

			<div id="presentationhaut">
					<div class="detailpresentation">
				  	<div><img src="webroot/IMG/icons/1.png" alt=""/></div>
						<div class="detailservicetitle">Un logement</div>
						<div class="detailservicetexte">The French Hub & Century 21 collaborent pour vous fournir des logements de qualité à des prix défiants toute concurrence</div>
					</div>

					<div class="detailpresentation">
				  	<div><img src="webroot/IMG/icons/3.png" alt=""/></div>
						<div class="detailservicetitle">Des espaces de travail</div>
						<div class="detailservicetexte">Les locaux du hub sont ouverts 24/7, qu’il neige ou bien qu’il pleuve, vous serez accueilli et entouré. Bienvenue chez vous !</div>
					</div>

					<div class="detailpresentation">
				  	<div><img src="webroot/IMG/icons/2.png" alt=""/></div>
						<div class="detailservicetitle">Un advisory board</div>
						<div class="detailservicetexte">The French Hub met à votre disposition un advisory board, composé de spécialistes parlant aussi bien Français qu'Anglais.</div>
					</div>
			</div>

			<center><div class="detailpresentation down">
				  <div><img src="webroot/IMG/icons/4.png" alt=""/></div>
					<div class="detailservicetitle">Une incubation</div>
					<div class="detailservicetexte">Chez The French Hub, nous voulons faire rimer incubation et collaboration. Les réponses de demain naîtront de l’échange entre les nouveaux acteurs de l’économie.</div>
			</div></center>
	</div>

	<!-- Fin Nos Services -->

	<!-- Experience -->
		<div id="slidercommenthome">
			<div class="titlerubriquehome">
				<div><h2 class="rubriquehome">Ils ont vécu l'expérience</h2></div>
				<div class="soulignement"></div>
			</div>

			<div id="slider">
				<ul id="contentSlider">
					<?php
                        foreach ($testimonials as $testimonial)
                        {
                    ?>
                            <li class="moveSlider">
                                <div class="photoslider">
                                    <img src="<?= IMG_TESTIMONIAL_URL . $testimonial['testimonial_photo_url']; ?>" alt=""/>
                                </div>

                                <div class="commentaireslider">
                                    <img src="webroot/IMG/fleche.svg" alt="" />

                                    <div class="inslider">
                                        <div class="nomcommslider">
                                            <p><?= $testimonial['testimonial_first_name'] . " " . $testimonial['testimonial_last_name']; ?></p>
                                        </div>

                                        <div class="postcommslider">
                                            <p><?= $testimonial['testimonial_job']; ?></p>
                                        </div>

                                        <div class="hr">

                                        </div>

                                        <div class="textecommslider">
                                            <p><?= substr(strip_tags($testimonial['testimonial_content']), 0, 100) . "..."; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="arrows">
                                    <div class="upSlide">
                                        <img src="webroot/IMG/icons/up.png" alt=""/>
                                    </div>

                                    <div class="downSlide">
                                        <img src="webroot/IMG/icons/down.png" alt=""/>
                                    </div>
                                </div>
                            </li>
                    <?php
                        }
                    ?>
				</ul>
			</div>
		</div>
	<!-- Fin Experience -->

	<!-- Nos Partenaires -->
	<div id="partenaireshome">

		<div class="titlerubriquehome">
			<div><h2 class="rubriquehome">Nos partenaires</h2></div>
			<div class="soulignement margbot"></div>
		</div>

	<div id="partenairesflex">
		<div id="imgpartenaires">

		</div>

		<div id="logospartenaireshome">

			<div id="logospartenaires">

				<div id="partenairesleft">

					<div class="twologos">

						<div><img class="logopartenaires" src="webroot/IMG/frenchtech.png" alt=""/></div>
						<div><img class="logopartenaires" src="webroot/IMG/500.png" alt=""/></div>

					</div>

					<div class="twologos">

						<div><img class="logopartenaires" src="webroot/IMG/c21.png" alt=""/></div>
						<div><img class="logopartenaires" src="webroot/IMG/10000-startups.png" alt=""/></div>

					</div>

					<div class="twologos">

						<div><img class="logopartenaires" src="webroot/IMG/ef.png" alt=""/></div>
						<div><img class="logopartenaires" src="webroot/IMG/techcrunch.png" alt=""/></div>

					</div>

				</div>

				<div id="partenairesright">

					<div class="twologos">

						<div><img class="logopartenaires" src="webroot/IMG/eemi.png" alt=""/></div>
						<div><img class="logopartenaires" src="webroot/IMG/atlanta.jpg" alt=""/></div>

					</div>

					<div class="twologos">

						<div><img class="logopartenaires" src="webroot/IMG/a16z.png" alt=""/></div>
						<div><img class="logopartenaires" src="webroot/IMG/techstars.png" alt=""/></div>

					</div>

					<div class="twologos">

						<div><img class="logopartenaires" src="webroot/IMG/launchpad.png" alt=""/></div>
						<div><img class="logopartenaires" src="webroot/IMG/crunchfund.png" alt=""/></div>

					</div>

				</div>

			</div>

		</div>
	</div>

	</div>
	<!-- Fin Nos Partenaires -->

	<!-- Nous rejoindre -->
	<div id="rejoigneznoushome">

		<div id="contentparallax">

  		<div id="parallax">

				<div id="absolutehome">
					<div>
						<p id="titlerejoignez">Prêt à rejoindre l'aventure The French Hub ?</p>
					</div>

					<div>
						<p id="textrejoignez">Rejoignez-nous et vivez l'expérience en vous inscrivant</p>
					</div>

					<div>
						<a id="boutonrejoignez" href="?module=users&action=signup">Inscrivez-vous maintenant</a>
					</div>
		 		</div>
          <div style="height:55vh;">&nbsp;</div>
      </div>
  	</div>


  </div>
	<!-- Fin Nous rejoindre -->

	<!-- Footer -->
	<script type="text/javascript" src="webroot/JS/sliderTestimonials.js"></script>
	<?php include_once 'app/view/layout/footer_front.inc.php'; ?>

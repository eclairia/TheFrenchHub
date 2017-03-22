<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="pageoffre">

  <div id="contentoffretop">

    <div class="titletxt">

      <div><h1 class="titlechoice">Choisir une Offre</h1></div>
      <div class="undertitlechoice"></div>
      <div>
        <p id="explainchoice">The French Hub vous propose trois offres exclusives pour <span>aider votre entreprise à se développer</span> et / ou <span>s’exporter.</span>
          Ces offres vous permettent de travailler votre projet auprès d’équipes qui vont vous <span>aider à entreprendre</span> dans les meilleures conditions.</p>
      </div>

    </div>

    <div id="allchoices">
        <?php
            $i = 1;
            foreach($services as $service)
            {
        ?>
                <div class="selectchoice">
                    <div class="choice">
                        <div><p class="titrechoiceoffer">Offre <?= $service['service_duration']; ?> mois</p></div>
                        <div><p class="pricechoiceoffer"><?= $service['service_price']; ?> €</p></div>
                        <div><p class="cachoiceoffer"><?= strip_tags($service['service_description']); ?></p></div>
                        <div><a id="animclick<?= $i ?>">Choisir cette offre</a></div>
                    </div>

                    <div class="underselectchoice" id="animtranslate<?= $i ?>">
                        <form class="formvalid" method="post" action="?module=users&action=reserve">
                            <?php echo (isset($_SESSION['user']) ? ($user_project[0]['project_confirmation'] == 1 ? "" : "<p>Votre projet doit être validé !</p>") : "<p>Votre projet doit être validé !</p>"  );?>

                            <input type="hidden" name="order_price" value="<?= $service['service_price']; ?>">
                            <input type="hidden" name="user_project" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user']['user_project'] : ""); ?>">

                            <select class="borderformvalid" name="time_slot_begin_disponibility" <?php echo (isset($_SESSION['user']) ? ($user_project[0]['project_confirmation'] == 1 ? "" : "disabled") : "disabled"  );?>>
                                <option value="">Choisissez une date</option>
                            <?php
                                foreach ($time_slots as $time_slot)
                                {
                            ?>
                                    <option value="<?= $time_slot['time_slot_ID']; ?>"><?= $time_slot['time_slot_begin_disponibility']; ?></option>
                            <?php
                                }
                            ?>
                            </select>

                            <input type="hidden" name="time_slot_end_disponibility" value="<?= $service['service_duration'] ?> month">
                            <input type="submit" value="Valider" class="validatechoice" <?php echo (isset($_SESSION['user']) ? ($user_project[0]['project_confirmation'] == 1 ? "" : "disabled") : "disabled"  );?>>
                        </form>
                    </div>
                </div>
        <?php
                $i++;
            }
        ?>


    </div>

  </div>

  <div id="contentoffrebot">

  <div class="titletxt">

    <div><h2 class="titlechoice">Disponible avec toutes les offres</h2></div>
    <div class="undertitlechoice"></div>

  </div>

  <div id="specoffres">

    <div class="flexspec">

      <div><img src="webroot/IMG/icons/checked.png" alt=""/></div>
      <div><p>Soutient de l’advisory board « The French Hub »</p></div>

    </div>

    <div class="flexspec">

      <div><img src="webroot/IMG/icons/checked.png" alt=""/></div>
      <div><p>Accès aux locaux de « The French Hub »</p></div>

    </div>

    <div class="flexspec">

      <div><img src="webroot/IMG/icons/checked.png" alt=""/></div>
      <div><p>Possibilités de départ à l’étranger*</p></div>

    </div>

    <div class="flexspec">

      <div><img src="webroot/IMG/icons/checked.png" alt=""/></div>
      <div><p>Offres exclusives avec nos partenaires, pour vous aider à développer votre structure</p></div>

    </div>

    <div class="flexspec">

      <div><img src="webroot/IMG/icons/checked.png" alt=""/></div>
      <div><p>Visibilité du Label « The French Hub » auprès des investisseurs et des fonds d’investissement</p></div>

    </div>

  </div>

  <div id="payflex">

      <div class="pay">

          <div><img src="webroot/IMG/icons/master-card.png" alt=""/></div>

          <div class="txtspecpay">

              <div><p class="txtpayup">Règlement par compte paypal</p></div>
              <div><p class="txtpaydown">Les offres sont reglées par compte Paypal, vous recevrez un mail avec votre facture ainsi que tout les détails
                 concernant votre paiement et votre offre.</p></div>

          </div>

      </div>

      <div class="pay">

          <div><img src="webroot/IMG/icons/help.png" alt=""/></div>

          <div class="txtspecpay2">

              <div><p class="txtpayup">Contactez nous au 01 04 88 99 34</p></div>
              <div><a href="mailto:frenchhubofficiel@gmail.com">thefrenchhub@gmail.com</a></div>

          </div>

      </div>


  </div>



  </div>

</div>

<!-- Footer -->
<script type="text/javascript" src="webroot/JS/choice_services.js"></script>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>

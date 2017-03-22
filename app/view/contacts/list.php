<?php if (!defined("_BASE_URL")) die("Ressource interdite !");
include_once("app/view/layout/header_back.inc.php"); ?>

    <div class="table-responsive" xmlns="http://www.w3.org/1999/html">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <p class="text-center">
                        Nom
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Prénom
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Mail
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Objet
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Message
                    </p>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($contacts as $contact)
            {
                ?>
                <tr>
                    <td>
                        <p class="text-center">
                            <?= $contact['contact_first_name']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $contact['contact_last_name']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <a href="mailto:<?= $contact['contact_mail']; ?>"><?= $contact['contact_mail']; ?></a>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $contact['contact_object']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $contact['contact_message']; ?>
                        </p>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>
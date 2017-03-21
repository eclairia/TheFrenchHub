<?php include_once 'app/view/layout/header_front.inc.php'; ?>

    <div id="allcontentarticles">

      <div class="titletxt">

        <div><h1 class="titlechoice">L'actualité The French Hub</h1></div>
        <div class="undertitlechoice"></div>
        <div>
        <?php
        $i = 1;

        foreach ($articles as $article)
            {
                if ($i%2 != 0)
                {
        ?>
                    <div class="articlel">
                        <div class="articlepartleft">
                            <div class="blocbleuarticle">
                                <div><img src="<?= IMG_ARTICLE_URL.$article['article_picture_url'] ?>" alt=""/></div>
                            </div>

                            <div class="underbloc1">
                                <p><?= $article['article_date'] ?></p>
                                <div></div>
                            </div>
                        </div>

                        <div class="articlepartright">
                            <div class="righttop">
                                <div class="articlehr"></div>

                                <div class="titreright">
                                    <h2> <?= $article['article_title'] ?> </h2>
                                </div>
                            </div>

                            <div class="txtarticle">
                                <?= "<p class=\"internaltxt\">" . substr(strip_tags($article['article_content']), 0, 420) . '...</p>'; ?>
                            </div>

                            <div class="buttonarticle">
                                <a href="#" target="_blank">Voir</a>
                            </div>
                        </div>
                    </div>
        <?php
                    $i++;
                }
                else
                {
        ?>
                    <div class="article2">
                        <div class="articlepartright">
                            <div class="righttop2">
                                <div class="articlehr2"></div>

                                <div class="titreright2">
                                    <h2> <?= $article['article_title'] ?> </h2>
                                </div>
                            </div>

                            <div class="txtarticle2">
                                <?= "<p class=\"internaltxt2\">" . substr(strip_tags($article['article_content']), 0, 420) . '...</p>'; ?>
                            </div>

                            <div class="buttonarticle2">
                                <a href="#" target="_blank">Voir</a>
                            </div>
                        </div>

                        <div class="articlepartleft2">
                            <div class="blocbleuarticle2">
                                <div><img src="<?= IMG_ARTICLE_URL.$article['article_picture_url'] ?>" alt=""/></div>
                            </div>

                            <div class="underbloc2">
                                <p><?= $article['article_date'] ?></p>
                                <div></div>
                            </div>
                        </div>
                    </div>
        <?php
                    $i++;
                }
            }
        ?>
    </div>

<?php include_once 'app/view/layout/footer_front.inc.php'; ?>

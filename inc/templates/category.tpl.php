<?php

//var_dump($articlesList) ;
foreach ($articlesList as $articleToDisplay ){ ?>

    <article class="card">
        <div class="card-body">
            <h2 class="card-title"><?= $articleToDisplay->title ?></h2>
            <p class="infos">
            Posté par <a href="#" class="card-link"><?= $articleToDisplay->author ?></a> le <time datetime="<?= $articleToDisplay->date ?>"><?= $articleToDisplay->getDateFr() ?></time> dans <a href="#"
                class="card-link">#<?= $articleToDisplay->category ?></a>
            </p>
            <p class="card-text">
                <?= $articleToDisplay->content ?>
            </p>
        </div>
    </article>
<?php } ?>

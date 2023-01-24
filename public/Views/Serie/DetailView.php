<?php
$serie = $page->getSeries()[$_GET["id"]];
$realisator =  $page->getRealisators()[$serie["realisator_ID"]];
$actors = $page->getActors();

// dump($actors);
// die;

// "coucou i: " . $i . " j: " . $j . "<br />"

//dump($movie);

?>

<h1><?= $serie["title"]; ?></h1>
<p>
  <?= $serie["synopsis"]; ?>
</p>
<div style="padding-bottom: 50px; display:flex; justify-content: space-around">
  <span>
    Année : <strong><?= $serie["year"]; ?></strong>
  </span>
  <?php if (count($serie["genre"])) : ?>
    <span>
      Genre : [
      <?php for ($i = 0; $i < count($serie["genre"]); $i++) : ?>
        <strong><?= $serie["genre"][$i]; ?></strong>,
      <?php endfor; ?>
      ]
    </span>
  <?php endif; ?>
</div>
<section>

  <article>
    <div>
      <img src=<?= $serie["cover"]; ?> alt=<?= "Affiche du film: " . $serie["title"]; ?>>
    </div>
  </article>

  <aside>

    <div>
      <h2>Réalisateur</h2>
      <div>
        <a href=<?= "/?page=realisator&action=detail&id=" . $serie["realisator_ID"]; ?>>
          <figure>
            <img src=<?= $realisator["photo"]; ?> alt=<?= "Portrait de " . $realisator["fullname"]; ?>>
            <figcaption>
              <?= $realisator["fullname"]; ?>
            </figcaption>
          </figure>
        </a>
      </div>
    </div>

    <div>
      <h2>Acteurs</h2>
      <div>
        <?php if (count($serie["actors_ID"]) > 0) : ?>

          <?php for ($i = 0; $i < count($serie["actors_ID"]); $i++) : ?>
            <?php for ($j = 0; $j < count($actors); $j++) : ?>
              <?php if ($serie["actors_ID"][$i] == $actors[$j]["id"]) : ?>
                <a href=<?= "/?page=actor&action=detail&id=" . $actors[$j]["id"]; ?>>
                  <figure>
                    <img src=<?= $actors[$j]["photo"] ?> alt=<?= "Portrait de " . $actors[$j]["fullname"] ?>>
                    <figcaption>
                      <?= $actors[$j]["fullname"] ?>
                    </figcaption>
                  </figure>
                </a>
              <?php endif; ?>
            <?php endfor; ?>
          <?php endfor; ?>

        <?php else : ?>
          <p>Désolé aucun acteur n'a été renseigné pour cette série</p>
        <?php endif; ?>

      </div>
    </div>
  </aside>
</section>
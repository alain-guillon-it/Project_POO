<?php
$actor = $page->getActors()[$_GET["id"]];
$movies = $page->getFilms();
$series = $page->getSeries();

// dump($actors);
// die;

// "coucou i: " . $i . " j: " . $j . "<br />"

//dump($movie);

?>

<h1><?= $actor["fullname"]; ?></h1>
<p>
  <?= $actor["biography"]; ?>
</p>
<div style="padding-bottom: 50px; display:flex; justify-content: space-around">
  <span>
    Age : <strong><?= $actor["age"]; ?></strong>
  </span>
  <span>
    Nationalité: <?= $actor["nationality"]; ?>
  </span>
</div>
<section>

  <article>
    <div>
      <img src=<?= $actor["photo"]; ?> alt=<?= "Portrait du realisateur: " . $actor["fullname"]; ?>>
    </div>
  </article>

  <aside>

    <div>

      <h2>Ces films</h2>
      <?php if (count($actor["films_ID"]) > 0) : ?>

        <div>
          <?php for ($i = 0; $i < count($actor["films_ID"]); $i++) : ?>
            <?php for ($j = 0; $j < count($movies); $j++) : ?>
              <?php if ($actor["films_ID"][$i] == $movies[$j]["id"]) : ?>
                <a href=<?= "/?page=film&action=detail&id=" . $movies[$j]["id"]; ?>>
                  <figure>
                    <img src=<?= $movies[$j]["cover"] ?> alt=<?= "Affiche du film " . $movies[$j]["title"] ?>>
                    <figcaption>
                      <?= $movies[$j]["title"] ?>
                    </figcaption>
                  </figure>
                </a>
              <?php endif; ?>
            <?php endfor; ?>
          <?php endfor; ?>

        <?php else : ?>

          <p>
            Désolé, aucun film n'a été renseigné pour le moment.
          </p>

        <?php endif; ?>
        </div>

        <h2>Ces séries</h2>
        <div>
          <?php if (count($actor["series_ID"]) > 0) : ?>

            <?php for ($i = 0; $i < count($actor["series_ID"]); $i++) : ?>
              <?php for ($j = 0; $j < count($series); $j++) : ?>
                <?php if ($actor["series_ID"][$i] == $series[$j]["id"]) : ?>
                  <a href=<?= "/?page=serie&action=detail&id=" . $series[$j]["id"]; ?>>
                    <figure>
                      <img src=<?= $series[$j]["cover"] ?> alt=<?= "Affiche du film " . $series[$j]["title"] ?>>
                      <figcaption>
                        <?= $series[$j]["title"] ?>
                      </figcaption>
                    </figure>
                  </a>
                <?php endif; ?>
              <?php endfor; ?>
            <?php endfor; ?>

          <?php else : ?>

            <p>
              Désolé, aucune série n'a été renseignée pour le moment.
            </p>

          <?php endif; ?>
        </div>


    </div>
  </aside>
</section>
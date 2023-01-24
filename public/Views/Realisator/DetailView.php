<?php

$realisator = $page->getRealisators()[$_GET["id"]];
$movies = $page->getFilms();

?>

<h1><?= $realisator["fullname"]; ?></h1>
<p>
  <?= $realisator["biography"]; ?>
</p>
<div style="padding-bottom: 50px; display:flex; justify-content: space-around">
  <span>
    Age : <strong><?= $realisator["age"]; ?></strong>
  </span>
  <span>
    Nationalité: <?= $realisator["nationality"]; ?>
  </span>
</div>
<section>

  <article>
    <div>
      <img src=<?= $realisator["photo"]; ?> alt=<?= "Portrait du realisateur: " . $realisator["fullname"]; ?>>
    </div>
  </article>

  <aside>

    <div>
      <h2>Ces films</h2>
      <div>
        <?php for ($i = 0; $i < count($realisator["films_ID"]); $i++) : ?>
          <?php for ($j = 0; $j < count($movies); $j++) : ?>
            <?php if ($realisator["films_ID"][$i] == $movies[$j]["id"]) : ?>
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
      </div>
    </div>
  </aside>
</section>
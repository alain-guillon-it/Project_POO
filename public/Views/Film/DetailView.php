<?php
$movie = $page->getFilms()[$_GET["id"]];
$realisator =  $page->getRealisators()[$movie["realisator_ID"]];
$actors = $page->getActors();

// dump($actors);
// die;

// "coucou i: " . $i . " j: " . $j . "<br />"

//dump($movie);

?>

<h1><?= $movie["title"]; ?></h1>
<p>
  <?= $movie["synopsis"]; ?>
</p>
<div style="padding-bottom: 50px; display:flex; justify-content: space-around">
  <span>
    Année : <strong><?= $movie["year"]; ?></strong>
  </span>
  <?php if (count($movie["genre"])) : ?>
    <span>
      Genre : [
      <?php for ($i = 0; $i < count($movie["genre"]); $i++) : ?>
        <strong><?= $movie["genre"][$i]; ?></strong>,
      <?php endfor; ?>
      ]
    </span>
  <?php endif; ?>
</div>
<section>

  <article>
    <div>
      <img src=<?= $movie["cover"]; ?> alt=<?= "Affiche du film: " . $movie["title"]; ?>>
    </div>
  </article>

  <aside>

    <div>
      <h2>Réalisateur</h2>
      <div>
        <a href=<?= "/?page=realisator&action=detail&id=" . $movie["realisator_ID"]; ?>>
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
        <?php for ($i = 0; $i < count($movie["actors_ID"]); $i++) : ?>
          <?php for ($j = 0; $j < count($actors); $j++) : ?>
            <?php if ($movie["actors_ID"][$i] == $actors[$j]["id"]) : ?>
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
      </div>
    </div>
  </aside>
</section>
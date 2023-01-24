<h1>List des séries</h1>
<p>
  Voici la liste des séries
</p>
<section>
  <article>
    <header>
      <h2>Gallerie</h2>
    </header>
    <div>
      <?php
      $allSeries = $page->getSeries();
      for ($i = 0; $i < count($allSeries); $i++) :
      ?>
        <a href=<?= "/?page=serie&action=detail&id=" . $allSeries[$i]["id"]; ?>>
          <figure>
            <img src=<?= $allSeries[$i]["cover"] ?> alt=<?= $allSeries[$i]["title"] ?>>
            <figcaption>
              <?= $allSeries[$i]["title"] ?>
              <div>
                <span>
                  <small><?= $allSeries[$i]["numberOfEpisode"] ?> Episode(s)</small>
                </span>
                <span>
                  <small><?= $allSeries[$i]["numberOfSaison"] ?> Saison(s)</small>
                </span>
              </div>
            </figcaption>
          </figure>
        </a>
      <?php endfor; ?>
    </div>
  </article>
  <article>
    <header>
      <h2>Remerciements</h2>
    </header>
    <p>Je remercie Fabien pour la partie HTML/CSS,<br />
      Nacim pour son apport sur l'utilisation de la documentation officiel et des petits détails comme l'héritage multiple, les traits et bien d'autres encore.<br />Merci Messaoud pour ce projet très technique mais qui m'aidera à aller de l'avant.</p>
  </article>
</section>
<h1>Liste des Films</h1>
<p>Voici la liste des films</p>
<section>
  <article>
    <header>
      <h2>Gallerie</h2>
    </header>
    <div>
      <?php
      $allFilms = $page->getFilms();
      for ($i = 0; $i < count($allFilms); $i++) : ?>
        <a href=<?= "/?page=film&action=detail&id=" . $allFilms[$i]["id"]; ?>>
          <figure>
            <img src=<?= $allFilms[$i]["cover"]; ?> alt=<?= $allFilms[$i]["title"] ?>>
            <figcaption>
              <?= $allFilms[$i]["title"] ?>
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
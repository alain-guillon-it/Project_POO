<h1>Liste des acteurs</h1>
<p>Voici la liste des acteurs</p>
<section>
  <article>
    <header>
      <h2>Gallerie</h2>
    </header>
    <div>
      <?php
      $getActors = $page->getActors();
      for ($i = 0; $i < count($getActors); $i++) :
      ?>
        <a href=<?= "/?page=actor&action=detail&id=" . $getActors[$i]["id"]; ?>>
          <figure>
            <img src=<?= $getActors[$i]["photo"]; ?> alt=<?= $getActors[$i]["fullname"] ?>>
            <figcaption>
              <?= $getActors[$i]["fullname"] ?>
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
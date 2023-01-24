<h1>Bienvenue</h1>
<p><?= $page->welcome(); ?></p>
<section>
  <!-- 3 DERNIERS FILMS -->
  <article>
    <header>
      <h2>Les 3 derniers films</h2>
    </header>
    <div>
      <?php
      $lastMovies = $page->lastThreeFilms();

      // dump($lastMovies);
      // die;

      // CHECK VALUES [ OK ]
      // ========================================================
      // echo "<pre>";
      //   var_dump($page->lastThreeFilms());
      // echo "</pre>";

      for ($i = 0; $i < count($lastMovies); $i++) :
      ?>
        <a href=<?= "/?page=film&action=detail&id=" . $lastMovies[$i]["id"] ?>>
          <figure>
            <img src=<?= $lastMovies[$i]["cover"]; ?> alt=<?= "representation du film: " . $lastMovies[$i]["title"]; ?> />
            <figcaption><?= $lastMovies[$i]["title"]; ?></figcaption>
          </figure>
        </a>
      <?php endfor; ?>
    </div>
    <footer>
      <a href="/?page=film&action=list">Voir la liste complète des films</a>
    </footer>
  </article>

  <!-- 3 DERNIERES SERIES -->
  <article>
    <header>
      <h2>Les 3 dernières séries</h2>
    </header>
    <div>
      <?php
      $lastSeries = $page->lastThreeSeries();

      // CHECK VALUES [ OK ]
      // ========================================================
      // echo "<pre>";
      //   var_dump($page->lastThreeSeries());
      // echo "</pre>";

      for ($i = 0; $i < count($lastSeries); $i++) :
      ?>
        <a href=<?= "/?page=serie&action=detail&id=" . $lastSeries[$i]["id"] ?>>
          <figure>
            <img src=<?= $lastSeries[$i]["cover"]; ?> alt=<?= "representation de la série: " . $lastSeries[$i]["title"]; ?> />
            <figcaption><?= $lastSeries[$i]["title"]; ?></figcaption>
          </figure>
        </a>
      <?php endfor; ?>
    </div>
    <footer>
      <a href="/?page=serie&action=list">Voir la liste complète des séries</a>
    </footer>
  </article>

  <!-- 3 DERNIERS ACTEURS -->
  <article>
    <header>
      <h2>Les 3 derniers acteurs</h2>
    </header>
    <div>
      <?php
      $lastActors = $page->lastThreeActors();

      // CHECK VALUES [ OK ]
      // ========================================================
      // echo "<pre>";
      //   var_dump($page->lastThreeActors());
      // echo "</pre>";

      for ($i = 0; $i < count($lastActors); $i++) :
      ?>
        <a href=<?= "/?page=actor&action=detail&id=" . $lastActors[$i]["id"] ?>>
          <figure>
            <img src=<?= $lastActors[$i]["photo"]; ?> alt=<?= "representation de la série: " . $lastActors[$i]["fullname"]; ?> />
            <figcaption><?= $lastActors[$i]["fullname"]; ?></figcaption>
          </figure>
        </a>
      <?php endfor; ?>
    </div>
    <footer>
      <a href="/?page=actor&action=list">Voir la liste complète des acteurs</a>
    </footer>
  </article>

  <!-- 3 DERNIERS REALISATEURS -->
  <article>
    <header>
      <h2>Les 3 derniers réalisateurs</h2>
    </header>
    <div>
      <?php
      $lastRealisator = $page->lastThreeRealisators();

      // CHECK VALUES [ OK ]
      // ========================================================
      // echo "<pre>";
      //   var_dump($page->lastThreeRealisators());
      // echo "</pre>";

      for ($i = 0; $i < count($lastRealisator); $i++) :
      ?>
        <a href=<?= "/?page=realisator&action=detail&id=" . $lastRealisator[$i]["id"] ?>>
          <figure>
            <img src=<?= $lastRealisator[$i]["photo"]; ?> alt=<?= "representation de la série: " . $lastRealisator[$i]["fullname"]; ?> />
            <figcaption><?= $lastRealisator[$i]["fullname"]; ?></figcaption>
          </figure>
        </a>
      <?php endfor; ?>
    </div>
    <footer>
      <a href="/?page=realisator&action=list">Voir la liste complète des réalisateurs</a>
    </footer>
  </article>
</section>
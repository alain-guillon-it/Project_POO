<nav>
  <a href="/?page=film" <?php if (
                          $_SERVER["REQUEST_URI"] == "/?page=film" ||
                          $_SERVER["REQUEST_URI"] == "/?page=film&action=list" ||
                          $_SERVER["REQUEST_URI"] == "/?page=film&action=detail&id=" . "/^[0-9]+$/"
                        ) : ?> class="active" <?php endif; ?>>Films</a>
  <a href="/?page=serie" <?php if (
                            $_SERVER["REQUEST_URI"] == "/?page=serie" ||
                            $_SERVER["REQUEST_URI"] == "/?page=serie&action=list" ||
                            $_SERVER["REQUEST_URI"] == "/?page=serie&action=detail&id=" . "/^[0-9]+$/"
                          ) : ?> class="active" <?php endif; ?>>Series</a>
  <a href="/?page=actor" <?php if (
                            $_SERVER["REQUEST_URI"] == "/?page=actor" ||
                            $_SERVER["REQUEST_URI"] == "/?page=actor&action=list" ||
                            $_SERVER["REQUEST_URI"] == "/?page=actor&action=detail&id=" . "/^[0-9]+$/"
                          ) : ?> class="active" <?php endif; ?>>Acteurs</a>
  <a href="/?page=realisator" <?php if (
                                $_SERVER["REQUEST_URI"] == "/?page=realisator" ||
                                $_SERVER["REQUEST_URI"] == "/?page=realisator&action=list" ||
                                $_SERVER["REQUEST_URI"] == "/?page=realisator&action=detail&id=" . "/^[0-9]+$/"
                              ) : ?> class="active" <?php endif; ?>>Realisateurs</a>
</nav>
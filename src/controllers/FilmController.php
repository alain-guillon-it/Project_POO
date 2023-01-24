<?php

namespace App;

use Traits\MediaTrait;

class FilmController extends MediaController
{
  use MediaTrait;

  protected string $_defaultModel = "App\\controllers\\FilmController";

  /**
   * ...
   *
   * @return string
   */
  function welcome(): string
  {
    return "Je vous propose ici une liste de <strong>" . count($this->getFilms()) . "</strong> films.";
  }
}

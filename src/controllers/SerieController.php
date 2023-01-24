<?php

namespace App;

use Traits\MediaTrait;

class SerieController
{
  use MediaTrait;

  function welcome()
  {
    return "Je vous propose ici une liste de <strong>" . count($this->getSeries()) . "</strong> séries.";
  }
}

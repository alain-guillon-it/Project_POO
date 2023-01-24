<?php

namespace App;

use Traits\MediaTrait;

class RealisatorController
{
  use MediaTrait;

  function welcome()
  {
    return "Je vous propose ici une liste de <strong>" . count($this->getRealisators()) . "</strong> réalisateurs.";
  }
}

<?php

namespace App;

use Traits\MediaTrait;

class ActorController
{
  use MediaTrait;

  function welcome()
  {
    return "Je vous propose ici une liste de <strong>" . count($this->getActors()) . "</strong> acteurs.";
  }
}

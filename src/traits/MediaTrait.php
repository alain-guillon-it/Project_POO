<?php

namespace Traits;

use Model\ActorModel;
use Model\FilmModel;
use Model\RealisatorModel;
use Model\SerieModel;

trait MediaTrait
{
  /**
   * Return all actors
   *
   * @return array
   */
  function getActors(): array
  {
    $model = new ActorModel;
    return $model->getDatas();
  }

  /**
   * Return all movies
   *
   * @return array
   */
  function getFilms(): array
  {
    $model = new FilmModel();
    return $model->getDatas();
  }

  /**
   * Return all realisators
   *
   * @return array
   */
  function getRealisators(): array
  {
    $model = new RealisatorModel;
    return $model->getDatas();
  }

  /**
   * Return all series
   *
   * @return array
   */
  function getSeries(): array
  {
    $model = new SerieModel;
    return $model->getDatas();
  }

  
}

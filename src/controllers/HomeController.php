<?php

namespace App;

use Traits\MediaTrait;

class HomeController
{

  private array $_lastThreeMovies = [];
  private array $_lastThreeSeries = [];
  private array $_lastThreeActors = [];
  private array $_lastThreeRealisators = [];

  use MediaTrait;

  function welcome()
  {
    return "Il s'agit d'un projet traitant sur une vidéothèque.<br /><br />
    <strong>Il est question de mettre en application<br />la POO et le MVC côté PHP.</strong><br />
    <br /><strong>POO</strong>: <em>Programmation Orienté Objet</em><br />
    <strong>MVC</strong>: <em>Modèle Vue Controlleur</em><br /><br />";
  }

  function lastThreeActors(): array
  {
    $this->_lastThreeActors = array_reverse($this->getActors());
    // var_dump($this->_lastThreeActors);
    return array_slice($this->_lastThreeActors, 0, 3);
  }
  function lastThreeFilms(): array
  {
    $this->_lastThreeMovies = array_reverse($this->getFilms());
    // var_dump($this->_lastThreeMovies);
    return array_slice($this->_lastThreeMovies, 0, 3);
  }
  function lastThreeRealisators(): array
  {
    $this->_lastThreeRealisators = array_reverse($this->getRealisators());
    // var_dump($this->_lastThreeRealisators);
    return array_slice($this->_lastThreeRealisators, 0, 3);
  }
  function lastThreeSeries(): array
  {
    $this->_lastThreeSeries = array_reverse($this->getSeries(), 3);
    // var_dump($this->_lastThreeSeries);
    return array_slice($this->_lastThreeSeries, 0, 3);
  }
}

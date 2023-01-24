<?php

namespace Model;

abstract class MediaModel
{
  /**
   * Return all data from "FilmModel", "RealisatorModel" or "ActorModel"
   *
   * @return array
   */
  function getDatas(): array
  {
    return $this->_datas;
  }

  /**
   * Return all data from one "FilmModel", one "RealisatorModel" or one "ActorModel"
   *
   * @param integer $indexArray
   * @return array
   */
  function getDataByID(int $indexArray): array
  {
    return $this->_datas[$indexArray];
  }
}

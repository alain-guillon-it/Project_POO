<?php

namespace App;

use Interfaces\MediaInterface;

abstract class MediaController implements MediaInterface
{
  protected array $_datas;
  protected string $_defaultModel;

  /**
   * Return all list from the model "Film", "Actor" or "Realisator"
   *
   * @return array
   */
  function list(): array
  {
    $model = new $this->_defaultModel();
    return $model->getDatas();
  }

  /**
   * Return one data from the model "Film", "Actor" or "Realisator"
   *
   * @param string $id
   * @return array
   */
  function detail(string $id): array
  {
    $model = new $this->_defaultModel();
    $data = $model->getDataById($id);
    return $data;
  }
}

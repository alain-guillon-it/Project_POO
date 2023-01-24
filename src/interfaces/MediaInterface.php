<?php

namespace Interfaces;

interface MediaInterface
{
  public function list();
  public function detail(string $indexArray);
}

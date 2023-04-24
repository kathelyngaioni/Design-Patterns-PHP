<?php

class Orcamento 
{
  public float $valor;
  public function __construct(float $valor)
  {
    $this->valor = $valor;
  }
}
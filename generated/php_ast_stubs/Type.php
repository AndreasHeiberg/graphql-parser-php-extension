<?php

namespace AndHeiberg\GraphQL\Parser\AST;

class Type extends Node
{
  public function __construct(
      Location $location
  )
  {
      $this->location = $location;
  }
}


<?php

namespace AndHeiberg\GraphQL\Parser\AST;

class Name extends Node
{
  /**
   * @var string
   */
  private $value;

  public function __construct(
      Location $location,
      string $value
  )
  {
      $this->location = $location;
      $this->value = $value;
  }

  public function getValue(): string
  {
    return $this->value;
  }
}



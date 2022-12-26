<?php

abstract class Creator
{
  protected abstract function factoryMethod();

  public function navigation()
  {
    $nav = $this->factoryMethod();
    return $nav;
  }
}

?>

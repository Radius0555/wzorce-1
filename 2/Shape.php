<?php

abstract class Shape
{
  public $svg_width;
  public $svg_height;
  public $color;

  abstract function getShape();

  abstract function __clone();
}

?>

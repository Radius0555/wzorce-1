<?php

include_once('Shape.php');

class Rectangle extends Shape
{
  public $width;
  public $height;
  private $svg;

  public function __construct()
  {
    $this->svg_width = 100;
    $this->svg_height = 100;
    $this->color = 'blue';
    $this->width = 100;
    $this->height = 100;
  }

  public function getShape()
  {
    $this->svg.='<svg width="'.$this->svg_width.'"height="'.$this->svg_height.'">';
    $this->svg.='<rect width="'.$this->width.'"height="'.$this->height.'"fill="'.$this->color.'"/>';
    $this->svg.='</svg>';

    echo $this->svg;
  }

  function __clone() {}
}

?>

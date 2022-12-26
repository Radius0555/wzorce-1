<?php

include_once('Menu.php');

class TopMenu implements Menu
{
  private $menu;

  public function getLinks()
  {
    $this->menu.='<ul>';
    $this->menu.='<li><a href="#home">Home</a></li>';
    $this->menu.='<li><a href="#about">About Us</a></li>';
    $this->menu.='<li><a href="#blog">Blog</a></li>';
    $this->menu.='<li><a href="#contact">Contact</a></li>';
    $this->menu.='<ul>';

    return $this->menu;
  }
}

?>

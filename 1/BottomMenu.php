<?php

include_once('Menu.php');

class BottomMenu implements Menu
{
  private $menu;

  public function getLinks()
  {
    $this->menu.='<a href="#cookies">Cookies</a>';
    $this->menu.='<a href="#rodo">RODO</a>';
    $this->menu.='<a href="#contract">Contract</a>';

    return $this->menu;
  }
}

?>

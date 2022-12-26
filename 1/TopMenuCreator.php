<?php

include_once('Creator.php');
include_once('TopMenu.php');

class TopMenuCreator extends Creator
{
  protected function factoryMethod()
  {
    $nav = new TopMenu();
    return $nav->getLinks();
  }
}

?>

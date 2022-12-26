<?php

include_once('Creator.php');
include_once('BottomMenu.php');


class BottomMenuCreator extends Creator
{
  protected function factoryMethod()
  {
    $nav = new BottomMenu();
    return $nav->getLinks();
  }
}
?>

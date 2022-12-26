<?php

/*
Wzorzec singiel pozwala na utworzenie tylko jednej instancji obiektu klasy.
Podobnie jak zmienne globalne, instancja Singla jest widoczna w całym
programie i każdyt komponent ma do niej dostęp.
Używa się go głównie do przechowywania konfiguracji programu oraz utrzymania
połączenia z bazą danych.
*/

class Singleton
{
  private static $instance;

  public static function getInstance()
  {
    if(!isset(static::$instance))
    {
      static::$instance = new static();
    }

    return static::$instance;
  }

  private function __construct() {}
  private function __clone() {}
  private function __wakeup() {}
}

$singleton = Singleton::getInstance();



?>

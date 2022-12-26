<?php

class Config
{
  private static $data = array();

  public static function set($name, $value)
  {
    self::$data[$name] = $value;
  }

  public static function get($name)
  {
    return self::$data[$name];
  }
}

<?php

class DB
{
    private static $instance;
    private $config;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance()
    {
      if(!isset(static::$instance)){
        static::$instance = new static();
      }
      return static::$instance;
    }

    public function connection($config)
    {
      $this->config = $config;

      try
      {
        $pdo = new PDO(
          'mysql:host='.$this->config['host'].';dbname='.$this->config['name'],
          $this->config['username'],
          $this->config['password']
        );

        echo 'Connection successful';
        return $pdo;

      }catch(PDOException $error)
        {
          echo $error->getMessage();
        }
    }
}

?>

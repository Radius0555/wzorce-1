<?php

spl_autoload_register(function($class){
  include $class.'.php';
});

$config = array(
  'host' => 'localhost',
  'username' => 'root',
  'password' => '*************',
  'name' => 'test',
);

$db = DB::getInstance();
$pdo = $db->connection($config);
//$pdo2 = clone $pdo;
?>

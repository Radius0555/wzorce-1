<?php

spl_autoload_register(function($class){
  include $class.'.php';
});

Config::set('LANG','en');
Config::set('WEBSITE_URL','example.com');

echo '<p>'.Config::get('LANG').'</p>';
echo '<p>'.Config::get('WEBSITE_URL').'</p>';

?>

<?php

//Wzorzec prototyp polega na klonowaniu instancji obiektów przy użyciu
//wbudowanej funkcji PHP - clone.
//Z tego wzorca korzystamy wtedy, kiedy potrzebujemy wielu identycznych
//obiektów o zbieżnych cechach lub właściwościach.
/* Np.
$object = new ClassName();
$new_obj = clone $object;
*/

include_once('Circle.php');
include_once('Rectangle.php');

$circle = new Circle();
$circle->getShape();

$rectangle = new Rectangle();
$rectangle->getShape();

$circle = new Circle();
$new_circle = clone $circle;
$new_circle->color = 'red';
$new_circle->r = 15;
$new_circle->getShape();

$rectangle = new Rectangle();
$new_rectangle = clone $rectangle;
$new_rectangle->color = 'yellow';
$new_rectangle->svg_width = 200;
$new_rectangle->svg_height = 100;
$new_rectangle->width = 200;
$new_rectangle->height = 100;
$new_rectangle->getShape();

?>

<?php

/*Fabryka = musi coś tworzyć.
Stosujemy gdy nie mamy pewności jakie obiekty będą nam potrzebne lub
potrzebujemy elstycznego skalowania interfejsu do tworzenia obiektów.
Zwraca obiekty różnych klas ale powiązanych typów.
*/

include_once('TopMenuCreator.php');
include_once('BottomMenuCreator.php');

$top = new TopMenuCreator();
$bottom = new BottomMenuCreator();

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Factory Method</title>
  </head>
  <body>
    <header>
      <?php echo $top->navigation(); ?>
    </header>
    <section>
      Under construction .....
    </section>
    <footer>
      <?php echo $bottom->navigation(); ?>
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex3</title>
  </head>
  <body>
    <?php
    $min = 0;
  $max = 300;
    echo "Les chiffres pairs compris entre 0 et 300 sont:";

   for($i = $min; $i <= $max; $i++) {
      if ( $i % 2 == 1 ) {
    echo "\n"."$i";
      }
  }
  ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aprendophp</title>
</head>
<body>
  <?php
    
    $dec = 12.35;
    $cant = 254;
    $saludo = 'Hola';
     $a = "<h3>Hello World!!</h3>";
     $b = '<h3>Hello World!</h3>';
    echo $a;
    echo $b;
    echo gettype($a);
    echo var_dump($a);
    echo var_dump($saludo);
    echo "el numero es: $cant </br>";
    echo gettype($dec), "</br>";
    echo var_dump($dec),"</br>";
    print $a;
   echo $saludo."-".$cant." ".$dec;

  
  ?>
  
  <h2> Forzando a convertir a otro valor</h2>
  <?php 
  $a = 12.35;
  $b = (int) $a;
  echo "el valor es :", $a , "</br>";
  echo var_dump($b);
  ?>
</body>
</html>
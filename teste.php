<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Hello world"."<br>";
    $a = $b= 2;
 function resultat()
 {
    global $a, $b; // utiise les variables hors de la fonction
    $c = $a + $b;
    echo "$c"."<br>";
 }
 resultat();
    ?>    
  
  <?php
                
 function test()
 {               
    static $a=0;
    $a ++;
    echo $a."<br>";
 }
    test(); // appel la fonction test et la conserve
    test();
    test();

    $a = 3.1415;
    settype($a, "integer"); // on force $a à devenir un entier
    echo $a."<br>";

    define("c", 299792458); // variable constante
    echo c."<br";


    ?>

</body>
</html>
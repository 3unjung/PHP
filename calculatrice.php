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


  function calculatrice($a, $b)
  {
    $multiplication = $a * $b;
    $additions = $a + $b;
    $soustractions = $a - $b;
    $division = $a / $b;
    $retour = array($multiplication, $additions, $soustractions, $division);

    return $retour;
  }
  $retour = calculatrice(110, 10);

  echo "multiplication : " . $retour[0] . "<br>";
  echo "additions : " . $retour[1] . "<br>";
  echo "soustractions : " . $retour[2] . "<br>";
  echo "division : " . $retour[3];


  ?>

</body>

</html>
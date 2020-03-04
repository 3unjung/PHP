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
// Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant :

echo"<table><thead><tr><th></th>";

for ($i = 0; $i <=12;$i++){
  echo"<th>".$i."</th>"; // entête 
}
echo"</thead></tr><tbody>";
for ($i = 0; $i <=12;$i++){
  echo"<tr><td>".$i."</td>"; // colonne 0 du tableau. tr définit une ligne de cellules dans un tableau
  for ($j = 0; $j<=12;$j++){
    echo"<td>".($i*$j)."</td>"; // td select une cellule
  }
  echo "</tr>";
 }
  echo "</tbody></table>";

?>

</body>
</html>
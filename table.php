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

$tab = array(array(1, "janvier", "2016"),
        array(2, "février", "2017"),
        array(3, "mars", "2018"),
        array(4, "avril", "2019")
);

var_dump($tab);
?>

<?php

$table[] = array(1, "janvier", "2016");
$table[] = array(2, "février", "2017");
$table[] = array(3, "mars", "2018");
$table[] = array(4, "avril", "2019");

var_dump($table);

?>

<?php

 $a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
 "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
 "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
);

var_dump($a);
?>


<?php

echo "C'est la semaine :" . array_search("Validation", $a[19002]). "<br>"; // cherche validdation dans le tableau $a dans la colonne 19002

?>

<?php

echo "<br>Numéro ".array_search("Stage", array_reverse($a["19001"],true)); 

?>

<?php

echo "<br>".array_search("Stage",$a["19003"], count($a["19003"]));

?>


</body>
</html>
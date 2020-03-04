<!-- afficher la date du jour -->
<?php setlocale(LC_TIME,"Fr"); ?> <!-- définie un fureau horraire -->


<h1>Voici la date du jour en php : </h1>
<?php $heure = date("H");
$minute = date("i");
echo "<p>On est le " .strftime("%A %d %B %Y") .  " est il est " .$heure ."h". $minute . "</P>";
?> <!-- permet d'afficher les valeurs en string et non en entier -->


<!-- ajoutez un mois à la date d'aujourd'hui -->
<?php 
$date_actual = date_create("2020-01-20"); // désigne la date réele actuelle 
date_add($date_actual, date_interval_create_from_date_string("30 days")); // ajoute un interval de 30 jours à la date réele
echo "<p>Dans un mois nous serrons le " .date_format($date_actual, "Y/m/d"); 
?><br>

<!-- trouvez le numéro de semaine de la date suivante : -->
<?php 
$date_try = "2019/07/14";
$date_format = strtotime($date_try); // calcule le nombre de secondes écoulées depuis la date de sortie d'unix et le transforme selon le date renseigner -->
echo "<p>Le numéro de semaine correspondante à ".$date_try." est de : ".date("W",$date_format); "</p>"
?><br>


<!-- combien reste-t-il de jour avant la fin de la formation -->
<?php 
$echeance = "2020/03/30";
echo "<p>Il reste ".floor((strtotime($echeance) - time())/86400). " jours avant la fin de la formation "."</p>";
?><br>


<!-- quelle sera la prochaine année bissextile -->
<div>
    <h3>Les années bissextile :</h3>

    <form name="annee_bissextile" method="POST" action="control_annees_bissextiles.php">

    <p>Entrer l'année actuelle : <input name ="x" id="x" type="text" ></p>
    <p>Jusqu'à quelle année le programme doit-il afficher les années bissextiles ? <input name="y" id="y" type="text"></p>

    <input type="submit" value="calculer">
    <input type="reset" value="annuler"><br>
    </form>
</div><br>

<!-- montrez que  la date 17/17/2019 est éronnée -->
<?php 

$date_false = date_parse("12/17/2019"); // transforme une chaîne de caractère en tableau répresantant la date
if (checkdate($date_false["month"], $date_false["day"], $date_false["year"])) { // truc magique génial qui agit tous seul et verifie si la date est valide xd
    echo "<p>La date " . "12/17/2019 ". "est valide"  . "</p>";
} else {
    echo "<p>La date " . "12/17/2019 ". "est invalide" . "<p>";
}

?>

<?php 
function calculatrice(){
$x = $_POST["x"];
$y = $_POST["y"];
$choix = $_POST["choix"];

    if ($choix == "addition")
    {
    echo ("addition");

        $resultat = $x + $y;
     
        echo($resultat);
        
    }
    else if ($choix == "soustration")
    {

        echo ("soustraction");
        $resultat = $x - $y;
  
        echo($resultat);
    }
    else if ($choix == "multiplication") 
    {
        echo ("multiplication");
        $resultat = $x * $y;
        echo($resultat);
    }
    else if ($choix == "division")
    {
        
        if($y == 0)
        {
            echo "Division par 0 impossible...";

        }
        else {
            echo ("division") . "<br>",
            $resultat = $x / $y;
            echo($resultat);
        }
    }
    
}

calculatrice();
?>
<?php
function calcul()
{
    $x = $_POST["x"];
    $y = $_POST["y"];
    if (empty($_POST["x"]))
    {
        echo "Veillez renseigner une année s'il vous plaît.";
    } else {
        for($i = $x; $i<=$y; $i++)
        {
            $date=mktime(0,0,0,1,1,$i);
            if(date("L",$date)==1)
            {
           
                echo "<p>L'année " .$i. " est bissextile " . "</p>";
               

            }
        }
    }
}

calcul();

?><br><br>
<a  name="retourn" href="date.php" role="button">Retourner aux exercices?</a>


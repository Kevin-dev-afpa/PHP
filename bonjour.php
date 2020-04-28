<html>
<head>
       <title>Affichage du résultat en PHP</title>
</head>
 
<?php

function calculator($value1,$operator,$value2)
{
    if($operator === "+")
    {
        $resultat = $value1 + $value2;
       echo $value1." + ". $value2 . "=" .  $resultat;
    }
    
    if($operator === "-")
    {
        $resultat = $value1 - $value2;
        echo $value1." - ". $value2 . "=" .  $resultat;
    }

    if($operator === "/")
    {
        $resultat = $value1 / $value2;
        echo $value1." / ". $value2 . "=" .  $resultat;
    }

    if($operator === "*")
    {
        $resultat = $value1 * $value2;
        echo $value1." * ". $value2 . "=" .  $resultat;
    }
}

calculator(2,"*",4); 

?>
</body>
</html>
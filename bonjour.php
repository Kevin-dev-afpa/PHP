<html>
 <?php 

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
           "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
           "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
     );
//Exercice 0
var_dump($a);     
//Exercice 1
echo 'La validation du groupe 19002 se déroulera la '.array_search('Validation', $a[19002])." eme semaines"."</br>";
//Exercice 2
echo 'Le stage se déroulera la : '.array_search('Stage', $a[19001]).' eme semaines'."</br>";

$position = count($a[19001]);
$stock=0;
for($int = 0; $int < $position; $int++) {
      $pos = strrpos($a[19001][$int], "Stage");
            if ($pos === false) 
            {
            }
            else {
                  $stock = $int+1;
            }
}
echo "La dernière semaine de stage sera la ".$stock." eme semaine";

?> 


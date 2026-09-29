<?php
$notes=array("rami"=>7.50,"mouhamed"=>19.00,"amira"=>15.50,"asma"=>10.00,"ahmed"=>09.50,"yassine"=>15.50,"islem"=>12.00);
echo "<h1>liste des etudiants ayants la moyenne:</h1><ul>";
foreach($notes as $key => $value)
    {
        if($value>=10)
            {
                echo "<li>".$key."</li><br>";
            }
    }
    echo"</ul>";
$n=count($notes);
echo "<h3>il y a ".$n." etudiants</h3>";
$maxnote=0;
$etud="";
foreach($notes as $key => $value)
    {
        if ($value > $maxnote)
            {
               $maxnote=$value;
               $etud=$key;
            }
    }
    echo $etud."a eu la meilleur note (".$maxnote.")";

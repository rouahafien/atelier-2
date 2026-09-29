<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">

    
</head>
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
?>
<table class="table table-bordered">
    <tr ><th>NOM</th><th>NOTE EN PHP</th></tr>
    <?php 
        foreach ($notes as  $key => $value) {
            ?>
            <tr >
                <td>
                    <?= $key ?>
            </td>
                  <td><?= $value?></td>  
            </tr>

       <?php 
       }

       ?>
    
</table>
<?php
    asort($notes);
    echo"tableau triée en ordre croissant des notes";
?>
<table class="table table-bordered">
    <tr ><th>NOM</th><th>NOTE EN PHP</th></tr>
    <?php 
        foreach ($notes as  $key => $value) {
            ?>
            <tr >
                <td>
                    <?= $key ?>
            </td>
                  <td><?= $value?></td>  
            </tr>

       <?php 
       }

       ?>
    
</table>
<?php
    ksort($notes);
    echo"tableau triée en ordre croissant des noms";
?>
<table class="table table-bordered">
    <tr ><th>NOM</th><th>NOTE EN PHP</th></tr>
    <?php 
        foreach ($notes as  $key => $value) {
            ?>
            <tr >
                <td>
                    <?= $key ?>
            </td>
                  <td><?= $value?></td>  
            </tr>

       <?php 
       }

       ?>
    
</table>
<?php
$s=array_sum($notes);
$c=count($notes);
$moy=$s/$c;
echo"la moyenne des notes =".$moy;
?>

</body>
</html>
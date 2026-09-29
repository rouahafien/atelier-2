<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    

<?php
$tabpays1=array("tunisie","france","japon","algerie");
echo"<pre>";
    print_r($tabpays1);
echo"</pre>";
sort($tabpays1);
echo"<h1>triée en ordre croissant:</h1>
<pre>";
    print_r($tabpays1);
echo"</pre>";
rsort($tabpays1);
echo"<h1>triée en ordre decroissant:</h1>
<pre>";
    print_r($tabpays1);
echo"</pre>";
$tabpays2=array("tunis"=>"tunisie","paris"=>"france","tokyo"=>"japon","alger"=>"algerie");
echo"<h1>tableau associative:</h1> <br>";
echo"<pre>";
    print_r($tabpays2);
echo"<h1>triée en ordre croissant:</h1></pre>";
ksort($tabpays2);
echo "<pre>";
    print_r($tabpays2);
echo"</pre>";
krsort($tabpays2);
echo"<h1>triée en ordre decroissant:</h1>
<pre>";
    print_r($tabpays2);
echo"</pre>";
?>
<table class="table">
    <tr class="table-success"><th>Pays</th><th>Capitale</th></tr>
    <?php 
        foreach ($tabpays2 as  $key => $value) {
            ?>
            <tr class="table-primary">
                <td>
                    <?= $value?>
            </td>
                  <td><?= $key ?></td>  
            </tr>

       <?php }?>
    ?>
</table>
</body>
</html>
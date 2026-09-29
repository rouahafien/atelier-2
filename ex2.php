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
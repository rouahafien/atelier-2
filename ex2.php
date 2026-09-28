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
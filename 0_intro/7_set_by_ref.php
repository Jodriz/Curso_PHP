<?php 
$text="E1 Salvador" ;
echo"original: $text";
$var_1 = $text;
$var_2= &$text;
$text="Eloy Alfaro" ;
// $var_2= &$text;
echo "<br>";
echo"original: $text";
echo "<br>";
echo "\$var_1 (set simple): $var_1" ;
echo "<br>";
echo "\$var_2 (set by ref): $var_2" ;
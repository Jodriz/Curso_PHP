<?php
function show($data){
    foreach ($data as $k => $v) {
        echo $k.":";
        echo "<br>";
        echo $v;
        echo "<br>";
        echo "Empty:";
        echo "<br>";
        echo empty($v);
        echo "<br>";
        echo "<br>";
    }
} 
$dfperson = ["name"=>"Unknow", "aboutme"=>"", "married"=>false, "friends"=>NULL];
$person = ["name"=>"Pepito", "aboutme"=>"Lirem ipsum dolor...", "married"=>true, "friends"=>0];
echo "-------------- EMPTY <br>";
show($dfperson);
echo "-------------- WITH DATA (except 'friends') <br>";
show($person);
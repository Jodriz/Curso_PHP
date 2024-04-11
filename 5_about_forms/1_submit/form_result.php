<?php
$data = $_POST;
foreach ($data as $key => $item):
    echo "$key: ".$item."<br>";
endforeach;
$val = isset($_POST["name"])?$_POST["name"]:"Unknow";
echo "Hello ".$val."!";
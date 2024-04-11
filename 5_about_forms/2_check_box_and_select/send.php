<?php
$data = $_POST;
foreach ($data as $key => $item):
    echo "$key: ";
    echo "<br>";
    var_dump($item);
    echo "<br>";
endforeach;
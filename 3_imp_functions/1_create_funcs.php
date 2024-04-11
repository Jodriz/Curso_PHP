<?php
function hello($name, $age = 0)
{
    echo "Hello, " . $name . "!";
    echo "<br>";
    echo "you are " . $age . " years old.";
    echo "<br>";
}

function mean($values)
{
    $cant = 0;
    $len = 0;
    foreach ($values as $val) {
        $cant += $val;
        $len++;
    }
    return $cant / $len;
}
$ages = [];
$persons = [
    ["name"=>"Jos", "age"=>25],
    ["name"=>"Nicolle", "age"=> 20],
    ["name"=>"Newton", "age"=> $age=1000],
];
foreach ($persons as $person) {
    $name = $person["name"];
    $age = $person["age"];
    $ages[] = $age;
    hello($name, $age);
}
$result = mean($ages);
echo "<br>";
print("Age mean: $result.");

<?php 
$students = array("Carlos", "José", "Vanessa", "Katy", "Issac");
echo"<br>count: ".count($students);
echo"<br>Students:[". implode(", ", $students) ."]";
echo "<br>students[3]: ".$students[3];
$students[3] = "Claude";
echo"<br>Students:[". implode(", ", $students) ."]";
echo "<br>students[3]: ".$students[3];
echo "<br><br>A partir de PHP 5.4";
$person = [
    "name"=>"Carl",
    "lastname"=>"Rignson",
    "age"=>25,
    "courses"=>["PHP", "Python", "JS"],
];
echo"<br><br>count: ".count($person);
$person["courses"] = "[".implode(", ", $person["courses"])."]";
echo"<br>person[". implode(", ", $person) ."]";
echo"<br>\$person['age']: ".$person['age'];
$person['age'] = 24;
echo"<br>person[". implode(", ", $person) ."]";
echo"<br>\$person['age']: ".$person['age'];
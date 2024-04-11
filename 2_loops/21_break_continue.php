<?php
$persons = [
    [
        "name" => "Jos",
        "lastname" => "Kyember",
        "age" => 25,
        "gender" => "M",
    ],
    [
        "name" => "Max",
        "lastname" => "Huyingui",
        "age" => 5,
        "gender" => "M",
    ],
    [
        "name" => "Nicole",
        "lastname" => "Sanchez",
        "age" => 20,
        "gender" => "F",
    ],
    [
        "name" => "Tyrone",
        "lastname" => "Cedeño",
        "age" => 40,
        "gender" => "M",
    ],
];

print("<h2>Persons with age >= 20</h2>");
foreach ($persons as $person) {
    if ($person["age"] < 20) {
        continue;
    }
    print("{$person['name']} {$person['lastname']}, {$person['age']} years old.");
    echo "<br>";
}
print("<h2>First finded person with male gender.</h2>");
$person_selected = null;
foreach ($persons as $person) {
    if ($person["gender"] === "M") {
        $person_selected = $person;
        break;
    }
}
if ($person_selected === null) {
    print("Not found.");
    return;
}
$person = $person_selected;
print("name: {$person['name']}, age: {$person['age']}");

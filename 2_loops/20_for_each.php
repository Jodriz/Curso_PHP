<?php
print("<h1>For Each Modes</h1>");
print("<h2>Letters</h2>");
$letters = ["A", "B", "C", "D"];
foreach ($letters as $letter) {
    echo "<h3>" . $letter . "</h3>";
}
print("<h2>Person Data</h2>");
$person = [
    "name"=>"Jos",
    "lastname"=>"Kyember",
    "age"=> 25,
    "gender"=>"M",
];
// foreach ($person as $key => $val) {
foreach ($person as $key => $val):
    print("<h3>".$key.": ".$val."</h3>");
endforeach;
// }
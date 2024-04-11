<?php
$key = "HelloWorld123";
echo "password: $key";
echo "<br>";
echo "<br>";
$df = PASSWORD_DEFAULT;
echo "password_hash token ($df):";
echo "<br>";
$token = password_hash($key, PASSWORD_DEFAULT, ["cost"=>11]);
echo $token;
echo "<br>";
echo "<br>";
$approved = password_verify($key, $token);
if ($approved){
    echo "Login session approved.";
} else {
    echo "Login session rechazed.";
}
echo "<br>";
echo "<br>";
echo "hash md5 token: ";
echo hash("md5", $key);
echo "<br>";
echo md5($key);
echo "<br>";
echo "<br>";
foreach (hash_algos() as $item) {
    echo"algorimth: $item";
    echo "<br>";
    echo "hash token: ";
    echo hash($item, $key);
    echo "<br>";
    echo "<br>";
}
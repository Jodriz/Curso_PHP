<?php
$has_water = true;
$has_hungry = true;
$has_thisty = true;
$is_sleeping = false;
echo"<br>";
if($has_water and $has_thisty) {
    echo "You can drink water.";
}
echo"<br>";
if($has_water or $has_hungry) {
    echo "You need water or food.";
}
echo"<br>";
if($has_water && $has_hungry) {
    echo "You need both, water and food.";
}
echo"<br>";
if($is_sleeping || $has_hungry) {
    echo "You need a medic check... or a sandwich?";
}
echo"<br>";
if(!$has_water and $has_thisty) {
    echo "You need water, but the bottle is empty.";
}
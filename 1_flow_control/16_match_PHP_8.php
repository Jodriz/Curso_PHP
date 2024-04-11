<?php
print("<h1>Day of week</h1>");
$num_day_of_week = 5;
// Math allow dynamics options
$thursday = 5;
$result = match ($num_day_of_week) {
     1 => "Sunday",
     2 => "Monday",
     3 => "Tuesday",
     4 => "Wednesday",
     $thursday => "Thursday",
     6 => "Friday",
     7 => "Saturday",
     default => "This day of week not exists.",
};
echo "<h2>" . $result . "</h2>";

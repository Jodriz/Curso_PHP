<?php
print("<h1>Counters (Do-While)</h1>");
print("<h2>From 5 to 0</h2>");
$a = 5;
do {
    print("<h3>Counter: " . $a-- . "</h3>");
} while ($a >= 0);
print($a);
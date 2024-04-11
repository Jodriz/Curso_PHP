
<?php
print("<h1>Counters</h1>");
print("<h2>From 5 to 0</h2>");
$a = 5;
while ($a >= 0) {
    print("<h3>Counter: ".$a--."</h3>");
}
print("<h2>Counters</h2>");
print("<h2>From 0 to 5</h2>");
while ($a < 5):
    print("<h3>Counter: ".++$a."</h3>");
endwhile;

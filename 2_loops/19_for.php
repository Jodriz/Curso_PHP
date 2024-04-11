<?php
print("<h1>Counters (for) </h1>");
print("<h2>From 5 to 0</h2>");
for ($a=5; $a >= 0 ; $a--) { 
    print("<h3>Counter: ".$a."</h3>");
}
print("<h2>Counters</h2>");
print("<h2>From 0 to 5</h2>");
for ($a=0; $a <= 5 ; $a++): 
    print("<h3>Counter: ".$a."</h3>");
endfor;

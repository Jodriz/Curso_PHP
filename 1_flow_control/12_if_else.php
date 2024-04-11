<?php
$counter = 0;
echo "<br>";
if ( $counter++== 1) {
    print("Counter == 1.");
} else {
    print("Counter($counter) != 1.");
}
echo "<br>";
if ( $counter++== 2):
    print("Counter == 2.");
else:
    print("Counter($counter) != 2.");
endif;
// if ($counter-=3 === -1 ){ (X) incorrect form
    if ( ($counter-=3) === -1 ){ // Ok
    echo "<br>";
    print("CounterA: ".(($counter-=100)!==-98));
    echo "<br>";
    print("CounterI: ".$counter-=100);
    return;
}
print("Program working yet.");
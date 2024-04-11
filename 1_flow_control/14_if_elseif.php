<?php
$counter = 0;
echo "<br>";
if ( $counter++== 1) {
    print("Counter == 1.");
} elseif ($counter==1) {
    print("Counter($counter)== 1 (elseif)");
} elseif( $counter== 3) {
    print("Counter($counter) == 3.");
}
echo "<br>";
if ( $counter++== 2):
    print("Counter == 2.");
elseif ($counter++==2):
    print("Counter($counter) == 2 (elseif).");
endif;
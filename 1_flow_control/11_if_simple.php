<?php
$counter = 0;
if ( ++$counter== 1) {
    print("Counter == 1.");
}
if ( ++$counter== 2):
    print("Counter == 2.");
endif;
if ( $counter-=3 == -1 ) exit;
print("Program working yet.");
<?php

$forRepeat ='#';
for( $i = 0; $i <=100; $i++) {
    for($j = 0; $j <= $i; $j++ ) {
        echo $forRepeat;
    }
    sleep(1);
}

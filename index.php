<?php

$repeater ='#';
$length = 1000;

for( $i = 0; $i <= $length; $i++) {
    for($j = 0; $j <= $i; $j++ ) {
        echo $repeater;
    }
    echo "\n";
    sleep(1);
}

<?php


$num_aleatorio1=random_int( 1,  19);
$num_aleatorio2=random_int( 1,  19);
$num_aleatorio3=random_int( 1,  19);
echo ($num_aleatorio1."  ".$num_aleatorio3."  ".$num_aleatorio2);


function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

print_r(randomGen(1,19,3));





?>

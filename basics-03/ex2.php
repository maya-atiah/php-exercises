<?php
//rite a program to calculate factorial of a number using while loop in php.
function fact_number($num){
    $x=$num;
    $product=1;
    while($x>0){
        $product=$product*$x;
        $x--;
    }
    return $product;
}

echo fact_number(3);
?>
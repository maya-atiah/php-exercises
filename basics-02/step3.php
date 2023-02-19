<?php

function swap($A,$B){
   echo "Before swapping: A=$A and B=$B\n";
    $x=$A;
    $A=$B;
    $B=$x;
    echo  "After swapping: A=$A and B=$B\n";
}

swap(3,4)


?>
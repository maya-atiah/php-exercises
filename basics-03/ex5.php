<?php

//Create a script to construct the following pattern, using a nested for loop.


for($row=1;$row<=5;$row++){
    for($star=1;$star<=$row;$star++){
        echo "*";
    }
    echo PHP_EOL;
}

for($row=1;$row<=5;$row++){
    for($star=5;$star>=$row;$star--){
        echo "*";
    }
    echo PHP_EOL;
}
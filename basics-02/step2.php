<?php

function greaterFn($num){

    if($num>10 && $num<20){
        echo "Greater than 10";
    }elseif ($num>20 && $num<30){
        echo "Greater than 20";
    }elseif ($num>30){
        echo "Greater than 30";
    }
}

echo greaterFn(25);

?>
<?php

//Using a for loop write a PHP programme to reverse a sentence. Without using built in functions


function reverse_string($str){

    $length=strlen($str);

    for($i=$length;$i>=0;$i--){
        $reverse=$str[$i];
        echo $reverse."";
    }
   return $reverse;
}

echo reverse_string("Hello world");

?>
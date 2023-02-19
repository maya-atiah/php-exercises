<?php

function palindrom_check($word){

    if($word==strrev($word)){
        return 1;
    } else {
        return 0;
    }
}

echo palindrom_check("madam")."\n";
echo palindrom_check("maya")."\n";
?>
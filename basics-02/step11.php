<?php

function Is_Prime($num){

if ($num==1){
    return "Prime number";
}
for($i=2; $i<=$num/2;$i++){
    if ($num % $i == 0){
   return "Not Prime number";
}
   return"Prime number";

}
}
echo Is_Prime(1);


?>
<?php

//Write a PHP program to compute the sum of the digits of a number.
function sum_of_digits($num){

    $sum=0; 
    $rem=0;  
    for ($i =0; $i<=strlen($num);$i++)  
     {  
       $rem=$num%10;  
       $sum = $sum + $rem;  
       $num=$num/10;  
      }  
      return "the sum of digits is equal to $sum";
} 
    
echo sum_of_digits(45)."\n";
?>
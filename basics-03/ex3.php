<?php

/*Using while loop write a programme that count number of times a word present in a sentence.
The programme should take as argument the text and the word to be searched for
Hint use `explode(" ", $text); // explode function looks for " " and creates an array, where each word is an element of the array
Hint use count function to get the number of <iterations>
<repetitions></repetitions>*/

function search_for_word($word,$str){
 
    $maya=explode(" ",$str);
    $count=0;
    $i=0;
    while($i<count($maya)){
        if( $maya[$i]==$word){
            $count=$count+1;
        }   
        $i++;
    }
    return "The number of repeated $word in the sentence is $count times";

}

echo  search_for_word("live"," live live live")."\n";


?>
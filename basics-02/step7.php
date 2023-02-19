<?php
// $sentence="php is better than python";
// function replace_words($word1,$word2){
//     global $sentence;
//     $sentence=str_replace($word1,$word2,$sentence);
//     return $sentence;
// }


// $sentence=replace_words("php","python",$sentence);

// echo $sentence;
$sentence="php is better than python";
echo str_replace(array("php","python"),array("python","php"),$sentence); 
?>

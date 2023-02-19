<?php


//You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. abs( debit - credit )) and output the transaction amount

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

foreach($transactions as $key=>$value){
      
    $ID=$transactions[$id];
   $amount=abs($transaction[$debit]-$transactions[$credit]);
  
}
echo "ID:$ID => amount: $amount";

?>
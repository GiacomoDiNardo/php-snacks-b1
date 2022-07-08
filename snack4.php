<!-- 
    ## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    
 -->

<?php  

$randomNumbers = [];

for ($i=0; count($randomNumbers) < 15; $i++) { 
  $number = rand(0, 30);
  if(!in_array($number, $randomNumbers)) {
    $randomNumbers[] = $number;
  }
}


var_dump($randomNumbers)
?>

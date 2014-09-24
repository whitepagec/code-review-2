<?php
class whyme {

  public $answer = "answer here";
  
  function chooseme($input1, $input2){
    $total = $input1 + $input2;
    $subtotal = 0;
    return $total;
  }
  
  function chooseher(){
    echo "choose here ??";
  }

}

  $result = chooseme(10,10);
  
  echo "Answer is " . $result;
  

?>

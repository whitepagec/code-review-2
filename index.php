<?php
class whyme {

  public $answer = "answer here";
  
  public function chooseme($input1, $input2){
    $total = $input1 + $input2;
    $subtotal = 0;
    return $total;
  }
  
  function chooseher(){
    echo "choose here ??";
  }
  
  private function getitem(){
    
    if(!$this->answer)
        $subtotal1 = 10;
        echo "not null";
        
  }

}

  $result = chooseme(10,10);
  
  echo "Answer is " . $result;
  

?>

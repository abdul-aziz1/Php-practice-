<?php


class Calculation{
    public function sum($a,$b)
    {
      return $a + $b;
    }
    public function min($a,$b)
    {
      return $a - $b;
    }
    public function into($a,$b)
    {
      return $a * $b;
    }
    public function div($a,$b)
    {
      return $a / $b;
    }
}

    $result = new Calculation();

    
 if (isset($_POST['submit'])){
    $first_v = $_POST['value1'];
    $second_v = $_POST['value2'];
    $operator = $_POST['operator'];

    if($operator == '+'){
        echo $result->sum($first_v,$second_v);
    }elseif($operator == '-'){
        echo $result->min($first_v,$second_v);
    }elseif($operator == '*'){
        echo $result->into($first_v,$second_v);
    }elseif($operator == '/'){
        echo $result->div($first_v,$second_v);
    }elseif($operator == '%'){
        echo $result->sum($first_v,$second_v);
    }else{
        echo 'Select a operator';
    }
 }
?>
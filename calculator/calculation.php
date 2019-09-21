<?php
 if (isset($_POST['submit'])){
    $first_v = $_POST['value1'];
    $second_v = $_POST['value2'];
    $operator = $_POST['operator'];

    if($operator == '+'){
        echo  $first_v + $second_v;
    }elseif($operator == '-'){
        echo $first_v - $second_v;
    }elseif($operator == '*'){
        echo $first_v * $second_v;
    }elseif($operator == '/'){
        echo $first_v / $second_v;
    }elseif($operator == '%'){
        echo $first_v % $second_v;
    }else{
        echo 'Select a operator';
    }
 }
?>
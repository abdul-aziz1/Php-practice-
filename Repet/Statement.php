<?php

class Statement{
   // $a = 10;
    //$b = 20;

    protected function sum($a,$b)
    {
        return $a + $b;
    }
    public function  access($a,$b)
    {
        return $this->sum($a,$b);
    }
}
class Statement_2 extends Statement{
    public function min($a,$b)
    {
        return $a - $b;
    }
}


$mint_o = new Statement_2();

$min_res = $mint_o->min(60,20);
$sum_res = $mint_o->access(60,20);

echo $min_res . ' ' . $sum_res;


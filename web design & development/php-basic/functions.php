<?php
echo "<h2>Function examples</h2>";

function vat($total, $vat)
{
    echo "total = $total + (vat $vat)";
}

function calculator($number1,$action,$number2){

    if($action=='+'){
        $result = $number1 + $number2;
    } else if($action == '-'){
        $result = $number1 - $number2;
    } else if($action == '*'){
        $result = $number1 * $number2;
    } else if($action=='/'){
        $result = $number1 / $number2;
    }

    return $result;
}

$sum = calculator(10,'+',5);
vat($sum,'15%');

?>

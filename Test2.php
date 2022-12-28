<?php

function checkCalculate($arr) {

    $totalCount =  count($arr);
    $pos = 0;
    $neg = 0;
    $zero = 0;

    for($i = 0; $i < $totalCount; $i++){
        if($arr[$i] > 0){
            $pos++;
        }elseif($arr[$i] < 0){
            $neg++;
        }else{
            $zero++;
        }
    }

    $floatPos = floatval($pos/$totalCount);
    $floatNeg = floatval($neg/$totalCount);
    $floatZero =  floatval($zero/$totalCount);
                                
    $pos = number_format($floatPos, 6, '.', '');
    $neg = number_format($floatNeg, 6, '.', '');
    $zero = number_format($floatZero, 6, '.', '');

    return $pos . "<br>" . $neg . "<br>" . $zero;

}

$array = [1,1,0,-1,-1];
echo checkCalculate($array);
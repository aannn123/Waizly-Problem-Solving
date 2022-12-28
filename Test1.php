<?php

    $arr = [1,2,3,4,5];
    sort($arr);

    $min = 0;
    $max = 0;

    for($i=0;$i<4;$i++){
        $min = $min+$arr[$i];
    }

    for($j=4;$j>0;$j--){
        $max = $max+$arr[$j];
    }
    
    echo $min .' '. $max;
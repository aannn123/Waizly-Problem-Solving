<?php

$time = "07:05:45PM";
$hour = $h = substr($time,0,2);
$hourInt = (int)$hour;
$type = substr($time, -2);

if ($type == "PM") {
    if ($hourInt < 12) {
       $h = $hourInt+12;
       $finalHour = str_replace($hour,$h,$time);
       $result = str_replace("PM","",$finalHour);

       echo $result;
    }

    if($hourInt == 12){
        $h = 12;
        $finalHour = str_replace($hour,$h,$time);
        $result = str_replace("PM","",$finalHour);    
        echo $result;
       }
}


if($type == "AM"){
    $h = $hour;
    if($h == 12){
        $h = 00;
        $finalHour = str_replace($hour,"00",$time);
        $result = str_replace("AM","",$finalHour);    
        echo $result;
    }
    $finalHour = str_replace($hour,$h,$time);
    $result = str_replace("AM","",$finalHour);    
    echo $result;
}

<?php
    $time = date("H");
    $temp = 18;
    $luchtvochtigheid = 80;

    if($time > 17 || $temp < 20 && $luchtvochtigheid < 85){
        echo "Airco Status: uit";
    }
    else{
        echo "Airco Status: aan";
    }
?>
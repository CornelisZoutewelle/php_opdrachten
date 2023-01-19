<?php
// Deze 'function' kijkt of het opgegeven nummer een even of oneven getal is. //
function check($number){
    if($number % 2 == 0){
        echo "Even getal.";
    }
    else{
        echo "Oneven getal.";
    }
}

// Het opgegeven nummer en het nakijken ervan. //
$nummer = 10;
check($nummer)
?>
<?php
$leeftijd = 16;
$stempas = true;

if($leeftijd > 16){
    echo "U mag een rijbewijs halen. <br>";
}
else{
    echo "U bent niet oud genoeg voor een rijbewijs. <br>";
}

if($leeftijd > 18 && $stempas){
    echo "U mag stemmen.";
}
else{
    echo "U mag niet stemmen.";
}
?>
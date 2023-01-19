<?php
date_default_timezone_set("Europe/Amsterdam");

$today = date ("j F Y");
echo "Vandaag is het: $today";

echo "<br>";

$jaardag = date ("z");
echo "Vandaag is het de $jaardag e dag van het jaar.";

echo "<br>";

$weekdag = date ("w");
echo "Het is de $weekdag e van de week.";

echo "<br>";

$maanddagen = date ("t");
echo "De maan Juni heeft in totaal $maanddagen dagen.";

echo "<br>";

$leap = date ("L");
echo "Het jaar 2022 is";
if($leap == 1) {
    echo "een schrikkeljaar.";
}
else {
    echo "geen schrikkeljaar.";
}
?>
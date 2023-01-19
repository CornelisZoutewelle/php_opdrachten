<?php
date_default_timezone_set("Europe/Amsterdam");

$tijddeel = date ('H');
if($tijddeel > 6 && $tijddeel < 12) {
    echo "Het is ochtend";
} else
if($tijddeel > 12 && $tijddeel < 18) {
    echo "Het is middag.";
} else
if($tijddeel > 18 && $tijddeel < 24) {
    echo "Het is avond.";
} else
if($tijddeel > 24 && $tijddeel < 6) {
    echo "Het is nacht.";
}
?>
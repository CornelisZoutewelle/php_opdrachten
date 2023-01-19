<?php
   if(isset($_COOKIE['counter'])){
    echo "Welkom! Dit is de eerste keer dat u de website bezoekt.";
      $cookie = 1;
      setcookie("count", $cookie);
    }
    else{
      $cookie = $_COOKIE['count']+1;
      setcookie("count", $cookie);

      echo "U heeft deze pagina ".$_COOKIE['count'];
      echo " keer bekeken.";
    }
?>
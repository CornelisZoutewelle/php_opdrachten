<?php
# STARTEN VAN DE SESSION #
session_start();

# TELT NA DE EERSTE KEER BEZOEKEN EEN 1 BIJ DE TELLER #
if(isset($_SESSION['count']))
    $_SESSION['count'] = $_SESSION['count']+1;
else
    $_SESSION['count'] = 1;

# LAAT ZIEN HOEVEEL KEER DE PAGINA BEZOCHT IS #
echo "U heeft deze pagina ".$_SESSION['count'];
echo " keer bekeken.";
?>
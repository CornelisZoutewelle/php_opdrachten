<?php
$spaargeld = 600;
$product = 1000;
$missendgeld = $product - $spaargeld;
$geldover = $spaargeld - $product;

if($spaargeld == $product){
    echo "Gefeliciteerd met uw aankoop!";
}
else if($spaargeld > $product){
    echo "Gefeliciteerd met uw aankoop! U heeft $geldover over om eventueel een hoesje te kopen.";
}
else if($spaargeld <= 750){
    echo "U heeft onvoldoende credit voor deze aankoop. U komt $missendgeld te kort voor deze aankoop.";
}
else if($spaargeld > 750 && $spaargeld < 999){
    echo "U heeft onvoldoende credit voor deze aankoop. U komt $missendgeld te kort voor deze aankoop. U bent er bijna!";
}
?>
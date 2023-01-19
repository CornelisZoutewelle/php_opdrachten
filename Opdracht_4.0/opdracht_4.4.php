<?php
$product = 60;

if($product > 150) {
    echo $product * 1.19;
}
else if($product < 55) {
    echo $product * 1.11;
}
else if($product > 55) {
    echo $product;
}
?>
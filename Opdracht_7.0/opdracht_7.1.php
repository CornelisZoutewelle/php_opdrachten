<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">Bedrag exclusief BTW: <input type="text" name="bedrag"><br>
<input type="radio" name="btw" value="0.09">laag tarief - 9%<br>
<input type="radio" name="btw" value="0.21" checked>hoog tarief - 21%<br>
<input type="submit" value="Bereken BTW"></form>

<hr>

<?php
$exbtw = $_POST['bedrag'];
$tarief = $_POST['btw'];
$btw = round(($tarief * $exbtw),2);
$inclusiefbtw = $exbtw + $btw;

if(empty($_POST['bedrag'])){
    echo "Voer een bedrag in.";
}

else{
    echo "Bedrag inclusief BTW: <b> $inclusiefbtw euro</b><br>";
    echo "De BTW bedraagt: <b> $btw euro</b>";
}
?>
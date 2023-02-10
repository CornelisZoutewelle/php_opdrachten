<h1>INGELOGD</h1>

<?php
session_start();

echo "Welkom op uw dashboard " . $_SESSION['username'] . "!";

echo "<br>";

if(isset($_SESSION['username' . 'password' . 'login'])){
    echo "Sessie variabele bestaat!";
} else {
    echo "Sessie variabele bestaat niet!";
};
?>
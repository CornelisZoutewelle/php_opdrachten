<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastenboek</title>
</head>
<body>
    <form method="post">
        <label for="naam">naam:</label>
        <br>
        <input type="text" id="naam" name="naam" required>
        <br>
        <label for="bericht">bericht:</label>
        <br>
        <textarea type="text" id="bericht" name="bericht" cols="25" rows="10" maxlength="255" style="resize: none" required></textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Display date //
echo "<br>";
echo "Vandaag is het: " . date("Y/m/d") . "</br>";

echo "<br>";

// Verbinden met de database //

$naam = $_POST['naam'];
$bericht = $_POST['bericht'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fietsenmaker";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO gastenboek (naam, bericht) VALUES ('$naam', '$bericht')";
    $conn->exec($sql);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

// Functions aanmaken en weergeven //
ConnectDB();
overzichtberichten();

function ConnectDB(){
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fietsenmaker";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM gastenboek");
        $stmt->execute();

        global $result;
        $result = $stmt->fetchAll();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function overzichtberichten()
{
    global $result;
    foreach ($result as $row) {
    echo $row['naam'] . "-" . $row['datumtijd'] .  "<br>";
    echo $row['bericht'] . "<br><br>";
    }
}
?>
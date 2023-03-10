<!DOCTYPE html>
<html>
<head>
    <title>Poll</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>
<form action="#" method="post">
        <label for="1">1: <input type="radio" name="radio" value="1" id="1" checked required></label><br>
        <label for="2">2: <input type="radio" name="radio" value="2" id="2" required></label><br>
        <label for="3">3: <input type="radio" name="radio" value="3" id="3" required></label><br>
        <label for="4">4: <input type="radio" name="radio" value="4" id="4" required></label><br>
        <input type="submit" name="submit" value="submit" id="submit">
        </form><br>
    <?php
        include 'functions.php';
        $conn = ConnectDb();
        $radio = $_POST['radio'];
        stemmen();
        echo"<br><br>";
        echo "<table border=1px>";
            OvzPoll();
            OvzOptie();
        echo "</table>";

    ?>
</body>
</html>
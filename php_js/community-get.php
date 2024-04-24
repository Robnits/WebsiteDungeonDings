<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dungeondings";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}


$sql = "SELECT benutzername, beitraginhalt FROM community";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>
        <p><strong>Benutzername:</strong> ". $row["benutzername"] 
        . "<br><strong>Beitragsinhalt:</strong><br>" 
        . $row["beitraginhalt"] . "</p></div><hr>";
    }
} else {
    echo "Keine Community-Beiträge gefunden.";
}

$conn->close();
?>

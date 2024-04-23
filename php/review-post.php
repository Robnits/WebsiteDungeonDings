<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dungeondings";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}


$sql = "SELECT benutzername, bewertung, review FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<div class='review'><p><strong>Benutzername:</strong></p> " . $row["benutzername"] 
        . "<p><br><strong>Bewertung:</strong></p> " . $row["bewertung"] 
        . "<p><br><strong>Review:</strong><br> " . $row["review"] . "</p></div>";
    }
} else {
    echo "Keine Reviews gefunden.";
}

$conn->close();
?>

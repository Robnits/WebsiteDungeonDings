<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dungeondings";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $benutzername = mysqli_real_escape_string($conn, $_POST['benutzername']);
    $beitraginhalt = mysqli_real_escape_string($conn, $_POST['communitypost']);


    $checkUserQuery = "SELECT * FROM account WHERE benutzername = '$benutzername'";
    $userResult = $conn->query($checkUserQuery);

    if ($userResult->num_rows > 0) {

        $insertQuery = "INSERT INTO community (benutzername, beitraginhalt) VALUES ('$benutzername', '$beitraginhalt')";
        echo "<script>window.location.reload();</script>";
            header("Location: /community.php");
        
        if ($conn->query($insertQuery) === FALSE) {
            echo "Fehler beim Speichern des Community-Beitrags: " . $conn->error;
        }
    } else {
        echo "Der Benutzername ist nicht vorhanden. 
        Beitrag kann nicht gespeichert werden.";
    }
}

$conn->close();
?>

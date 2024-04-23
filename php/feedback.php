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
    $feedback = mysqli_real_escape_string($conn, $_POST['comment']);


    $checkUserQuery = "SELECT * FROM account WHERE benutzername = '$benutzername'";
    $userResult = $conn->query($checkUserQuery);

    if ($userResult->num_rows > 0) {

        $insertQuery = "INSERT INTO feedbacks (benutzername, feedback) VALUES ('$benutzername', '$feedback')";

        if ($conn->query($insertQuery) === FALSE) {
            echo "Fehler beim Speichern des Feedbacks: " . $conn->error;
        }
    } else {
        echo "Der Benutzername ist nicht vorhanden. Feedback kann nicht gespeichert werden.";
    }
}

$conn->close();
?>

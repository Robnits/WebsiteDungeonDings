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
    $bewertung = mysqli_real_escape_string($conn, $_POST['bewertung']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);


    $checkUserQuery = "SELECT * FROM account WHERE benutzername = '$benutzername'";
    $userResult = $conn->query($checkUserQuery);

    if ($userResult->num_rows > 0) {

        $insertQuery = "INSERT INTO reviews (benutzername, bewertung, review) VALUES ('$benutzername', '$bewertung', '$review')";
        echo "<script>window.location.reload();</script>";
        header("Location: ../review.php");
        if ($conn->query($insertQuery) === FALSE) {
            echo "Fehler beim Speichern des Reviews: " . $conn->error;
        }
    } else {
        echo "Der Benutzername ist nicht vorhanden. Review kann nicht gespeichert werden.";
    }
}

$conn->close();
?>

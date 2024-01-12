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
    $benutzername = mysqli_real_escape_string($conn, $_POST['Benutzername']);
    $passwort = mysqli_real_escape_string($conn, $_POST['Passwort']);

    $sql = "SELECT * FROM account WHERE benutzername = '$benutzername' AND passwort = '$passwort'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "Login erfolgreich!";
    } else {

        echo "Ungültige Benutzerdaten. Bitte versuchen Sie es erneut.";
    }
}

$conn->close();
?>

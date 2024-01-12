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
    $vorname = mysqli_real_escape_string($conn, $_POST['vorname']);
    $nachname = mysqli_real_escape_string($conn, $_POST['nachname']);
    $benutzername = mysqli_real_escape_string($conn, $_POST['benutzername']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobil = mysqli_real_escape_string($conn, $_POST['mobil']);
    $passwort = mysqli_real_escape_string($conn, $_POST['passwort']);
    $profilbild = mysqli_real_escape_string($conn, $_POST['profilbild']);

    $sql = "INSERT INTO account (vorname, nachname, benutzername, email, mobile, passwort, profilebild_url) 
            VALUES ('$vorname', '$nachname', '$benutzername', '$email', '$mobil', '$passwort', '$profilbild')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrierung erfolgreich!";
    } else {
        echo "Fehler bei der Registrierung: " . $conn->error;
    }
}

$conn->close();
?>

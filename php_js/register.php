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
    // Überprüfe, ob alle erforderlichen Felder ausgefüllt sind
    if (empty($_POST['vorname']) || empty($_POST['nachname']) || empty($_POST['benutzername']) || 
        empty($_POST['email']) || empty($_POST['mobil']) || empty($_POST['passwort']) || empty($_POST['profilbild'])) {
        echo json_encode(array('status' => 'error', 'Nachrichtinhalt' => 'Bitte füllen Sie alle erforderlichen Felder aus.'));
        exit;
    }

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
        echo json_encode(array('status' => 'success', 'Nachrichtinhalt' => 'Registrierung erfolgreich!'));
    } else {
        echo json_encode(array('status' => 'error', 'Nachrichtinhalt' => 'Fehler bei der Registrierung.'));
    }
}

$conn->close();
?>

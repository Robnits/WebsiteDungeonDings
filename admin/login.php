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
   // Beispiel: Anmeldung erfolgreich
   echo json_encode(array('status' => 'success', 'Nachrichtinhalt' => 'Anmeldung erfolgreich!.'));
    } 
    else {
    // Falls jemand direkt auf diese Seite zugreift, ohne das Formular zu senden
    echo json_encode(array('status' => 'error', 'Nachrichtinhalt' => 'Benutzername oder Passwort ist falsch!.'));

    }
}
$conn->close();
?>

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
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    $sql = "INSERT INTO support (name, email, nachricht) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        
        $supportFile = fopen("support_messages.txt", "a") or die("Kann die Datei nicht öffnen.");
        $messageText = "Name: $name\nE-Mail: $email\nNachricht: $message\n\n";
        fwrite($supportFile, $messageText);
        fclose($supportFile);
        echo "<script>window.location.reload();</script>";
        header("Location: ../Support.php");
    } else {
        echo "Fehler beim Speichern der Support-Nachricht: " . $conn->error;
    }
}

$conn->close();
?>
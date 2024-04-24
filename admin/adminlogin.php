<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dungeondings";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Benutzername'];
    $password = $_POST['Passwort'];


    $sql = "SELECT * FROM cms WHERE Benutzername = '$username' AND Passwort = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;


        header("Location: cms.php");
        exit();
    } else {
        echo "Falscher Benutzername oder Passwort. Bitte versuche es erneut.";
    }
}

$conn->close();
?>

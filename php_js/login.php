<?php
session_start(); 
$benutzername = $_POST['Benutzername'];
$passwort = $_POST['Passwort'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dungeondings";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM account WHERE benutzername = '$benutzername' AND passwort = '$passwort'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['benutzername'] = $benutzername; 
    header("Location: ../account.php");
    exit();
} else {

    echo 'Falscher Benutzername oder Passwort. Bitte versuche es erneut.<br><a href="../login.html">zurück zum Login</a>';
}

$conn->close();
?>


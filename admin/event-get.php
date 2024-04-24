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
  $autor = mysqli_real_escape_string($conn, $_POST['Autor']);
  $eventinhalt = mysqli_real_escape_string($conn, $_POST['eventinhalt']);


  $sql = "INSERT INTO events (autor, eventinhalt) VALUES ('$autor', '$eventinhalt')";

  if ($conn->query($sql) === TRUE) {
    echo "Event erfolgreich veröffentlicht!";
    echo "<script>window.location.reload();</script>";
    header("Location: cms.php");
  } else {
    echo "Fehler beim Veröffentlichen des Events: " . $conn->error;
  }
}

$conn->close();
?>

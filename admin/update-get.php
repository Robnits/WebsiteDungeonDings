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
  $updateinhalt = mysqli_real_escape_string($conn, $_POST['updateinhalt']);


  $sql = "INSERT INTO updates (autor, updateinhalt) VALUES ('$autor', '$updateinhalt')";

  if ($conn->query($sql) === TRUE) {
    echo "Das Update ist erfolgreich veröffentlicht!";
    echo "<script>window.location.reload();</script>";
    header("Location: cms.php");
  } else {
    echo "Fehler beim Veröffentlichen des Updates: " . $conn->error;
  }
}

$conn->close();
?>

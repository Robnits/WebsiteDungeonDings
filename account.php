
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DungeonDings Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">

        <header class="header">
            <h1>DungeonDings</h1>


        </header>
        <nav class="nav">
            <p class="menu-drop"><a href="">menu</a></p>
            <ul class="nav-menu">
                <li><a href="index.html"><img class="account-icon" src="icons/1.png" alt="Home-icon"><p>Home</p></a></li>
                <li><a href="download.html"><img class="account-icon" src="icons/2.png" alt="Download-icon"><p>Download</p></a></li>
                <li><a href="review.php"><img class="account-icon" src="icons/3.png" alt="Review-icon"><p>Review</p></a></li>
                <li><a href="blogs.php"><img class="account-icon" src="icons/4.png" alt="Dev-Blog-icon"><p>Dev-Blog</p></a></li>
                <li><a href="Support.php"><img class="account-icon" src="icons/5.png" alt="Contact Us-icon"><p>Contact Us</p></a></li>
                <li><a href="community.php"><img class="account-icon" src="icons/6.png" alt="Community-icon"><p>Community</p></a></li>
                <li><a href="logout.php"><img class="account-icon" src="icons/7.png" alt="account-icon"><p>Abmelden</p></a></li>
            </ul>
        </nav>
        <main class="content">
        <?php
            session_start();

            if (!isset($_SESSION['benutzername'])) {
                header("Location: login.html"); 
                exit();
            }

            $benutzername = $_SESSION['benutzername'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dungeondings";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM account WHERE benutzername = '$benutzername'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();


            echo "<h2>Account-Details für " . $row["benutzername"] . "</h2>";
            echo "<ul>";
            if (!empty($row["profilebild_url"])) {
                echo "<li><img src=\"" . $row["profilebild_url"] . "\" width=\"50px\" height=\"50px\"></li>";
              } else {
                // Optional: Display a placeholder image or message if profilbild is empty
                echo "<li>Kein Profilbild vorhanden.</li>";
              }            
            echo "<br><li>Vorname: " . $row["vorname"] . "</li>";
            echo "<li>Nachname: " . $row["nachname"] . "</li>";
            echo "<li>E-Mail: " . $row["email"] . "</li>";
            echo "<li>Mobil: " . $row["mobile"] . "</li>";
            echo "</ul>";
            }
            $conn->close();
            ?>
        
        </main>
        <footer class="footer">
            <div class="footer-links"><a href="impressum.html">Impressum</a></div>
            <div class="footer-links"><a href="agb.html">AGB</a></div>
             <div class="footer-links">&copy; Copyrights DungeonDings&ThinSpace;
            <span id="copy">
                <script>
                    const currentYearElement = document.getElementById("copy");
                    const today = new Date();
                    const currentYear = today.getFullYear();
                    currentYearElement.textContent = ` ${currentYear}`;</script>
            </span>
        </div>
        </footer>
        <script> src="php/sw-login.js"</script>
</body>
</html>
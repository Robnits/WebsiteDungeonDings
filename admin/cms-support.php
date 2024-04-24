<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DungeonDings Home</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="container">

        <header class="header">
            <h1>DungeonDings</h1>
            <a href="login.html"><img class="account-icon" src="../icons/7.png" alt="account-icon"></a>

        </header>
        <nav class="nav">
            <p class="menu-drop"><a href="">menu</a></p>
            <ul class="nav-menu">
                <li><a href="cms-support.php"><img class="account-icon" src="../icons/5.png" alt="Contact Us-icon"><p>Contact Us</p></a></li>
                <li><a href="cms.php"><img class="account-icon" src="../icons/4.png" alt="Dev-Blog-icon"><p>cms-Blogs</p></a></li>
                <li><a href="logout.php"><img class="account-icon" src="../icons/1.png" alt="Home-icon"><p>Abmelden</p></a></li>
            </ul>
        </nav>
        <main class="content">
            <div>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dungeondings"; 

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                 die("Verbindung fehlgeschlagen: " . $conn->connect_error);
                }


                $sql = "SELECT * FROM support";


                $result = $conn->query($sql);


                if ($result->num_rows > 0) {

                echo "<h2>Aktuelle Support-Informationen</h2>";
                while ($row = $result->fetch_assoc()) {
                echo "<div class=\"support-info\">";
                echo "<h3>" . $row["name"] . "</h3>";  
                echo "<p>E-Mail: " . $row["email"] . "</p>";  
                echo "<p>Nachricht: " . $row["nachricht"] . "</p>";  
                echo "</div>";
                }
                }else {
                echo "Keine Support-Tickets gefunden.";
                }

                $conn->close();
                ?>
            </div>
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

</body>
</html>
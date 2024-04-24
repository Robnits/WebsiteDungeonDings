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
            <a href="login.html"><img class="account-icon" src="icons/7.png" alt="account-icon"></a>

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
            </ul>
        </nav>
        <main class="content">
            <div class="center">
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

                    $sql = "SELECT * FROM events ORDER BY id DESC"; 
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                      echo "<h2>Aktuelle Events</h2>";
                    while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"event\">";
                    echo "<h3>Autor: " . $row["autor"] . "</h3>";
                    echo "<p>" . $row["eventinhalt"] . "</p>";
                    echo "</div><hr>";
                    }
                    } else {
                    echo "NOch keine Events veröffentlicht.";
                    }
                    $conn->close();
                    ?>

                </div>
            </div>
            <div class="beside">
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

                    $sql = "SELECT * FROM updates ORDER BY id DESC"; 
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                      echo "<h2>Updates</h2>";
                    while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"updates\">";
                    echo "<h3>Autor: " . $row["autor"] . "</h3>";
                    echo "<p>" . $row["updateinhalt"] . "</p>";
                    echo "</div><hr>";
                    }
                    } else {
                    echo "Bis jetzt noch keine Updates.";
                    }
                    $conn->close();
                    ?>

                </div>
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
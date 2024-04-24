<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    header("Location: adminlogin.html");
    exit();
}

?>
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
            <div class="center">
                <div class="forms" >
                    <h3>Events Änderungen</h3>
                    <form action="event-get.php" method="post">
                        <label for="Autor">Autor:</label><br>
                        <input type="text"name="Autor" required><br><br>
                        <label for="content">Event-Inhalt:</label><br>
                        <textarea id="eventinhalt" name="eventinhalt" rows="500" required></textarea><br><br>
                        <input type="submit" value="Veröffentlichen">
                    </form>
                </div>
            </div>
            <div class="beside">
                <div class="forms" >
                    <h3>Updates Hinzufügen</h3>
                    <form action="update-get.php" method="post">
                        <label for="Autor">Autor:</label><br>
                        <input type="text"name="Autor" required><br><br>
                        <label for="content">Update-Inhalt:</label><br>
                        <textarea id="Updateinhalt" name="updateinhalt" rows="500" required></textarea><br><br>
                        <input type="submit" value="Veröffentlichen">
                    </form>
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
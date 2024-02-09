<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dungeondings</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Dungeondings</h1>
        </div>
        <div class="account">
            <img class="account-icon" src="Icons/account icon.svg" alt="account-icon">
            <div class="account-popup">
                <a href="login.html">login</a>
                <a href="register.html">Register</a>
            </div>
        </div>
    </header>
    
    
    
    <main>
        <nav class="left-column">
        <h2 class="menu"><a href="">menu</a></h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="download.html">Download</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="#">Dev-Blog</a></li>
                <li><a href="Support.html">Contact Us</a></li>
                <li><a href="community.php">Community</a></li>
            </ul>
        </nav>
       
        
        <div class="center-column" >
            <br> 
            <div class="comunity-scroll">
           <div class="community-posts" >

           <?php
        	include 'community-get.php';
            ?>

           </div>
           </div>
         </div>
         <div class="right-column" >
         <div class="forms" >
            <h3>Neuen Beitrag erstellen</h3>
                <form action="community-post.php" method="post">
                    <label for="benutzername">Benutzername:</label><br>
                    <input type="text"name="benutzername" required><br><br>
                    <label for="post-content">Beitragsinhalt:</label><br>
                    <textarea id="communitypost" name="communitypost" rows="4" required></textarea><br><br>
                    <input type="submit" value="Veröffentlichen">
                </form>
         </div>
        </div>
    </main>
    
    <footer>
        <div class="footer-links"><a href="#">Impressum</a></div>
        <div class="footer-links"><a href="#">AGB</a></div>
        <div class="footer-links"><a href="#">Copyrights</a></div>
        </div>
    </footer>
</body>
</html>
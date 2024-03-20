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
                <li><a href="blogs.php">Dev-Blog</a></li>
                <li><a href="Support.html">Contact Us</a></li>
                <li><a href="community.php">Community</a></li>
            </ul>
        </nav>
       
        
        <div class="center-column" >
            <br>
           <div class="review-posts" >



           </div>
         </div>
        <div  class="right-column"> 
         <div class="forms" >
            <h3>Reviews</h3>
            <form action="review-get.php" method="post">
            <label>Benutzername:</label><br>
            <input type="text" id="benutzername" name="benutzername" required><br><br>
            <label for="bewertung">Bewertung:</label><br>
            <select id="bewertung" name="bewertung" required>
                <option value="1">1 - Schlecht</option>
                <option value="2">2 - Akzeptabel</option>
                <option value="3">3 - Durchschnittlich</option>
                <option value="4">4 - Gut</option>
                <option value="5">5 - Hervorragend</option>
            </select><br><br>
            <label for="review">Dein Review:</label><br>
            <textarea id="review" name="review" rows="4" required>

            </textarea><br><br>
            <input type="submit" value="Review absenden">
            </form>

            <hr>
            
            <h3>Feedbacks</h3>
            <p>Es wird nicht angezeigt!</p>
            <form action="feedback.php" method="post">
            <label>Benutzername:</label><br>
            <input type="text" id="benutzername" name="benutzername" required><br><br>

            <label for="comment">Dein Feedback:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>

            <input type="submit" value="Feedback absenden">
</form>
         </div></div>
    </main>
    
    <footer>
        <div class="footer-links"><a href="#">Impressum</a></div>
        <div class="footer-links"><a href="#">AGB</a></div>
        <div class="footer-links"><a href="#">Copyrights</a></div>

    </footer>
</body>
</html>
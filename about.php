<?php
    // Allow the config file
    define("__CONFIG__", true);
    // Require the config file
    require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Trail Hiking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="navigation-bar">
            <nav>
                <div class="menu-icon">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </div>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Trails</a></li>
                    <li><a href="#">Stories</a></li>
                </ul>
                <div class="user-options">
                    <!-- <button class="signin-btn">Sign In</button> -->
                    <a href="signin.html">  
                        <button class="signin-btn">Sign In</button>  
                    </a>
                    <!-- <button class="register-btn">Register</button> -->
                    <a href="register.html">  
                        <button class="register-btn">Register</button>  
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="about">
            <h1>About Trail Hiking</h1>
            <p>Trail Hiking is a website dedicated to helping hikers find the perfect trail for their next adventure. Whether you're a seasoned hiker or a beginner, we're here to help you discover new trails and explore the great outdoors.</p>
            <p>As a hiking enthusiast myself, I understand the joy and sense of freedom that comes with being out in nature. I also believe that wild camping is a fantastic way to connect with nature and experience the beauty of the wilderness.</p>
            <p>That's why I created Trail Hiking - to provide hikers with a platform to find and share information about hiking trails, campsites, and other outdoor activities. Our goal is to make it easy for hikers to find a trail that's right for them, even if they don't know the area.</p>
        </section>
    </main>
    <footer>
        <p>Trail Hiking &copy; 2023</p>
    </footer>
    <?php require_once "inc/footer.php"; ?>
</body>
</html>

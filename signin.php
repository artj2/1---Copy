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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trail Hiking</title>
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
        <div class="container">
            <form id="register-form">
                <h2>Sign In</h2>
                <div>
                    <label for="email">Email</label>
                    <div>
                        <input id="email" type="email" required="required">
                    </div>
                </div>
                <div>
                    <label for="password">Password</label>
                    <div>
                        <input id="password" type="password" required="required">
                    </div>
                </div>
                <div>
			        <button class="default-btn" type="submit">Sign In</button>
			    </div>
            </form>
        </div>
    </main>
    <?php require_once "inc/footer.php"; ?>
</body>

</html>
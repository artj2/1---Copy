<?php
    // Allow the config file
    define("__CONFIG__", true);
    // Require the config file
    require_once "../inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trail Hiking</title>
    <link rel="stylesheet" href="../css/style.css">
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
                <div>
                    <ul class="menu">
                        <li><a href="index_signed_in.html">Home</a></li>
                        <li><a href="adventure_log.html">Adventure Log</a></li>
                        <li><a href="#">Trails</a></li>
                        <li><a href="#">Stories</a></li>
                    </ul>
                </div>
                <div class="user-options">
                    <p>User Name</p>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Add Notes about your adventures here</h2>
            <div>
                <textarea id="addTxt" rows="5">
                </textarea>
            </div>
            <button class="default-btn" id="addBtn">
                Add Note
            </button>
            <h2 style="padding-top: 4vh;">Your notes:</h2>
            <div class="notes">
                
            </div>
        </div>
    </main>
    <?php require_once "../inc/footer.php"; ?>
</body>

</html>
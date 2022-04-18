<?php
session_start();
$filename = "../social.txt";


if(!isset($_SESSION["admin"])){
    header("Location:/Deniso_40194944/admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script> 

        <title>Socials</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="adminIndex.php">Home</a>
            <a href="adminResume.php">Resume</a>
            <a href="adminProjects.php">Projects</a>
            <a href="adminContact.php">Contact</a>
            <a class="active" href="adminSocial.php">Social</a>
            <a href="logout.php">Logout</a>
        </div>
        
        <h1>Admin - Social</h1>
        <h3 style="font-style: italic;">(content displayed on social.html)</h3>
        <div class="form-container">
            <form action="#" method="POST">
                <label for="link1">Social Link 1</label>
                <input type="text" id="link1" name="link1" placeholder="Social link 1...">

                <label for="link1">Social Link 2</label>
                <input type="text" id="link2" name="link2" placeholder="Social link 2...">

                <label for="link1">Social Link 3</label>
                <input type="text" id="link3" name="link3" placeholder="Social link 3...">
                
                <input class="form-btn" type="button" value="Submit"/>
            </form>
        </div>
    </body>
</html>
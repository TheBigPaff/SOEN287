<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("Location:/Deniso_40194944/admin.php");
}

if(isset($_POST["logoutBtn"])){
    unset($_SESSION["admin"]);
    header("Location:/Deniso_40194944/home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script> 

        <title>Logout</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="adminIndex.php">Home</a>
            <a href="adminResume.php">Resume</a>
            <a href="adminProjects.php">Projects</a>
            <a href="adminContact.php">Contact</a>
            <a href="adminSocial.php">Social</a>
            <a class="active" href="logout.php">Logout</a>
        </div>
        
        <h1>Admin - Log out</h1>
        <h3 style="font-style: italic;">(log out of the admin website)</h3>
        <div class="form-container">
            <form action="#" method="POST">
                <label>Log out</label>
                <input class="form-btn" name="logoutBtn" type="submit" value="Logout" onclick="processLogout()"/>
            </form>
        </div>
    </body>
</html>
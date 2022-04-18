<?php
session_start();
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
        
        <title>Contact</title>
    </head>

    <body>
        <div class="topnav">        
            <a href="adminIndex.php">Home</a>
            <a href="adminResume.php">Resume</a>
            <a href="adminProjects.php">Projects</a>
            <a class="active" href="adminContact.php">Contact</a>
            <a href="adminSocial.php">Social</a>
            <a href="logout.php">Logout</a>
        </div>

        <h1>Admin - Contact</h1>
        <h3 style="font-style: italic;">(read messages sent from users in contact.html)</h3>
        <div class="form-container">
            <form action="#" method="POST">
                <!-- This will be filled up in the js -->
                <table id="messagesTable"><tbody></tbody></table>
                <br>
                <label for="uploadFile">Upload File</label>
                <input id="uploadFile" type="file">
                <input class="form-btn" type="button" onclick="readMessages()" value="Read Messages">
            </form>
        </div>
    </body>
</html>
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

        <title>Home</title>
    </head>

    <body>
        <div class="topnav">
            <a class="active" href="adminIndex.php">Home</a>
            <a href="adminResume.php">Resume</a>
            <a href="adminProjects.php">Projects</a>
            <a href="adminContact.php">Contact</a>
            <a href="adminSocial.php">Social</a>
            <a href="logout.php">Logout</a>
          </div>
        
        <h1>Admin - Home</h1>
        <h3 style="font-style: italic;">(content displayed on index.html)</h3>
        <div class="form-container">
            <form action="#">
                <label for="professional_statement">Professional Statement</label>
                <textarea id="professional_statement" name="professional_statement" placeholder="Professional Statement..."></textarea>

                <label for="brief_biography">Brief Biography</label>
                <textarea id="brief_biography" name="brief_biography" placeholder="Brief Biography..."></textarea>

                <input class="form-btn" type="button" value="Submit" onclick="submitIndex()"/>
            </form>
        </div>
    </body>
</html>
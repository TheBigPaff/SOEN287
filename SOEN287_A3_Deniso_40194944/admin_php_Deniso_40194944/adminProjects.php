<?php
include_once "../utils.php";
session_start();
$filename = "../projects.txt";
$contents = getProjects();

if(!isset($_SESSION["admin"])){
    header("Location:/Deniso_40194944/admin.php");
}
if(isset($_POST["projects"])){
    $sep="\\|";
    file_put_contents($filename, $_POST["projects"]);
    $contents = getProjects();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script> 

        <title>Projects</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="adminIndex.php">Home</a>
            <a href="adminResume.php">Resume</a>
            <a class="active" href="adminProjects.php">Projects</a>
            <a href="adminContact.php">Contact</a>
            <a href="adminSocial.php">Social</a>
            <a href="logout.php">Logout</a>
        </div>

        <h1>Admin - Projects</h1>
        <h3 style="font-style: italic;">(content displayed on projects.html)</h3>
        <div class="form-container">
            <form action="#" method="POST">
                <label for="projects">My Projects</label>
                <textarea id="projects" name="projects" placeholder="My Projects..."><?php echo $contents[0] ?></textarea>

                <input class="form-btn" type="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>
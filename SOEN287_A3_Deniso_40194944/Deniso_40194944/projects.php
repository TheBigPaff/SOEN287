<?php
    include_once "../utils.php";
    $contents = getProjects();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">

        <title>Projects</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="home.php">Home</a>
            <a href="resume.php">Resume</a>
            <a class="active" href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="social.php">Social</a>
            <a href="admin.php">Admin</a>
        </div>
        <div id="main">
            <!-- List of all projects you have accomplished in the past ten years. 
            must be JUSTIFY-ALIGNED. this list must be in descending order (using roman numerals).
            thus, should start with the most recent to the oldest -->
            <h2>Personal projects I worked on during the last 10 years</h2>
            <ol class="projects-list" reversed="reversed" type="I">
                <?php
                    echo $contents[0];
                ?>
            </ol>
        </div>
    </body>
</html>
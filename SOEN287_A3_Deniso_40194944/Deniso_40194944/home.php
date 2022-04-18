<?php
    $filename = "../index.txt";
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    $content = fread($myfile,filesize($filename));
    $contents = explode("\\|", $content);
    print_r($contents);
    fclose($myfile);
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
            <a class="active" href="home.php">Home</a>
            <a href="resume.php">Resume</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="social.php">Social</a>
            <a href="admin.php">Admin</a>
          </div>
        
        <!-- image of myself aligned to the center of the webpage -->
        <img class="home-picture" src="assets/propic2.jpeg" alt="Image of myself"/>
        
        <h1>Patrick Deniso</h1>
        <!-- professional statement about myself, with respect to my objectives and goals, using div. 
        Alignment of the info must be centered with respect to the layout of the webpage -->
        <br>
        <h2>Professional Statement</h2>
        <div class="professional-statement">
            <?php
                echo $contents[0];
            ?>
        </div>
        
        <!-- brief bio about myself and my potentials, using div.
        The text info must be justify-aligned with respect to the webpage layout -->
        <br>
        <h2>Brief Bio</h2>
        <div class="brief-bio">
            <?php
                echo $contents[1];
            ?>
        </div>
    </body>
</html>
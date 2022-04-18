<?php
    include_once "../utils.php";
    $contents = getSocial();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">

        <title>Socials</title>
    </head>

    <body>
        <div class="topnav"> 
            <a href="home.php">Home</a>
            <a href="resume.php">Resume</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a class="active" href="social.php">Social</a>
            <a href="admin.php">Admin</a>
        </div>
        
        <h2>These are some of the socials you can find me on!</h2>
        <h3>Click on any icon to be directed to my page.</h3>
        <img src="assets/social_media_icons.jpg" usemap="#map1" alt="Image of social media icons"/>
        <map name="map1" >
            <area shape="rect" coords="0,0,110,110" alt="Facebook area" href="<?php echo htmlspecialchars($contents[0])?>"/>
            <area shape="rect" coords="175,0,285,110" alt="Twitter area" href="<?php echo htmlspecialchars($contents[1])?>"/>
            <area shape="rect" coords="345,0,457,110" alt="Google+ area" href="<?php echo htmlspecialchars($contents[2])?>"/>
            <area shape="rect" coords="0,170,110,280" alt="Instagram area" href="https://www.instagram.com/patrick_deniso/"/>
            <area shape="rect" coords="175,170,285,280" alt="Dribbble area" href="https://en.wikipedia.org/wiki/Dribbble"/>
            <area shape="rect" coords="345,170,457,280" alt="Linkedin area" href="https://www.linkedin.com/in/patrick-deniso/"/>
            <area shape="rect" coords="0,335,110,449" alt="WhatsApp area" href="https://en.wikipedia.org/wiki/WhatsApp"/>
            <area shape="rect" coords="175,335,285,449" alt="YouTube area" href="https://en.wikipedia.org/wiki/YouTube"/>
            <area shape="rect" coords="345,335,457,449" alt="Snapchat area" href="https://en.wikipedia.org/wiki/Snapchat"/>
        </map>
    </body>
</html>
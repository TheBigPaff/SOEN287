<?php
session_start();
$admin_page = "/admin_php_Deniso_40194944/adminIndex.php";
if(isset($_SESSION["admin"])){
    header("Location:" . $admin_page);
}

if(isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["password"])){
    $conn = new mysqli("localhost", "root", "", "soen287_a3");
    if(mysqli_connect_errno()){
        die("1: Connection Failed"); // error code #1 = connection failed
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // check if name exists
    $query = "SELECT id, username, password FROM user WHERE username = ?";
    $stmt = $conn->prepare($query);

    if($stmt === false){
        die("2: " . $mysqli->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if(mysqli_num_rows($result) == 0){
        die("3: No user with that name");
    }
    else if(mysqli_num_rows($result) > 1){
        die("3: More than one user with that name... Weird");
    }

    // get login info from query 
    $user_info = mysqli_fetch_assoc($result);

    // verify user -> https://stackoverflow.com/questions/47602044/how-do-i-use-the-argon2-algorithm-with-password-hash
    if(password_verify($password, $user_info["password"])) {
        // success user logged in
        $_SESSION["admin"] = $user_info["id"];
        header("Location:" . $admin_page);
    }
    else{
        die("6: Incorrect password");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">

        <title>Admin</title>
    </head>

    <body>
        <div class="topnav">
            <a href="home.php">Home</a>
            <a href="resume.php">Resume</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="social.php">Social</a>
            <a class="active" href="admin.php">Admin</a>
        </div>
        
        <h2>Log in as admin</h2>
        <div class="form-container admin-form-container">
            <form action="#" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <input class="form-btn" type="submit" value="Log in">
            </form>
        </div>
    </body>
</html>
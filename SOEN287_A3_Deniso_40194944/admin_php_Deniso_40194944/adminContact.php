<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("Location:/Deniso_40194944/admin.php");
}

$contents = ["", "", "", ""];
$message_id = -1;
if(isset($_POST["message_id"])){
    $message_id = $_POST["message_id"];
}

$conn = new mysqli("localhost", "root", "", "soen287_a3");
if(mysqli_connect_errno()){
    die("1: Connection Failed"); // error code #1 = connection failed
}


$query = "SELECT * FROM message";
$result = $conn->query($query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

if($message_id != -1){
    $contents = $rows[$message_id - 1]; // index is always id - 1 since it's auto_increment, not really safe but whatevs
}
$conn->close();

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
                <textarea readonly="readonly" placeholder="Full Name..."><?php if($message_id != -1) echo $contents["full_name"] ?></textarea>
                <textarea readonly="readonly" placeholder="Email..."><?php if($message_id != -1) echo $contents["email"] ?></textarea>
                <textarea readonly="readonly" placeholder="Phone number..."><?php if($message_id != -1) echo $contents["tel_number"] ?></textarea>
                <textarea readonly="readonly" placeholder="Message..."><?php if($message_id != -1) echo $contents["message"] ?></textarea>

                <br>
                <label>Select message to view</label>
                <select name="message_id" onchange="this.form.submit()">
                <option hidden disabled selected value></option>
                    <?php
                        foreach ($rows as $rowData) {
                            if ($message_id == $rowData["id"])
                                echo "<option selected value='".$rowData["id"]."'>". $rowData["id"] . " - " . $rowData["full_name"] ."</option>";
                            else
                                echo "<option value='".$rowData["id"]."'>". $rowData["id"] . " - " . $rowData["full_name"] ."</option>";
                        }
                    ?>
                </select>
            </form>
        </div>
    </body>
</html>
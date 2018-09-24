<?php
    session_start();
    require_once('./viewdatabase/db_setup.php');
    $sql = "USE xguo24_1;";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error using  database: " . $conn->error;
    }

    $username = $_SESSION["username"];

    $sql = "SELECT * FROM Regular WHERE username = '$username'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if($count != 1) {
        echo "<h1> Permission Denied. You are not a moderator.<h1>";
        quit();
    }
?>
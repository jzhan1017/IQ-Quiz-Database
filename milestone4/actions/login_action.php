<?php
    session_start();
    require_once('../viewdatabase/db_setup.php');
    $sql = "USE xguo24_1;";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error using  database: " . $conn->error;
    }

    $username = $_POST['name'];
    $password = $_POST['password'];
    /* hash password so that it doesn't insert the actual password of user for privacy */
    $password = hash('sha256', $password);
    
    $sql = "SELECT * FROM Regular WHERE username = '$username' and password='$password'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION["username"] = $username;
        header("location: ../highscores.php");
    }
    else{
        $sql = "SELECT * FROM Moderator WHERE modName = '$username' and password='$password'";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
        $conn->close();

        if($count == 1){
            $_SESSION["username"] = $username;
            header("location: ../moderator.php");
        }else{
            $_SESSION["incorrect"] = TRUE;
            $_SESSION["input"] = $username;
            header("location: ../login.php");
        }
    }
?>


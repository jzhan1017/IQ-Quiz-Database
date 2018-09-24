<?php
    session_start();
    require_once('../viewdatabase/db_setup.php');
    $sql = "USE xguo24_1;";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error using  database: " . $conn->error;
    }

    $name = $_SESSION['username'];
    $nemail = $_POST['nemail'];
    $npassword = $_POST['npassword'];
    $cnpassword = $_POST['cnpassword'];

    // $sql = "UPDATE Regular 
    //         SET email = '$nemail'
    //         WHERE username = '$name';";
    // $result = $conn->query($sql);

    /* update query to change password */
    if($npassword == $cnpassword and $npassword != ""){
        $npassword = hash('sha256', $npassword);

        $sql = "UPDATE Regular
                SET password = '$npassword'
                WHERE username = '$name';";
        
        $result = $conn->query($sql);
        $_SESSION["input"] = $name;
        $conn->close();
        header("location: ../login.php");
    }else{
        $conn->close();
        header("location: ../acc_settings.php");
    }
?>
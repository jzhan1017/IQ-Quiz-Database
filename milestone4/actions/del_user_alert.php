<?php
    session_start();
    
    if ($_SESSION["found"] == "found"){
        echo '<script> alert("User has been successfully deleted."); </script>';
    }elseif ($_SESSION["found"] == "not_found"){
        echo '<script> alert("User not found."); </script>';
    }
    $_SESSION["found"] = NULL;
?>
<?php
    session_start();
    
    if ($_SESSION["yn"] == "y"){
        echo '<script> alert("Question was successfully deprecated."); </script>';
    }elseif ($_SESSION["yn"] == "n"){
        echo '<script> alert("Question was successfully undeprecated."); </script>';
    }elseif ($_SESSION["yn"] == "failure"){
        echo '<script> alert("Failure."); </script>';
    }
    $_SESSION["yn"] = NULL;
?>
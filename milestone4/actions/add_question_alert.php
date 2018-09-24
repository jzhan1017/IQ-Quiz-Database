<?php
    session_start();
    
    if ($_SESSION["added"] == "added"){
        echo '<script> alert("Question has been successfully added."); </script>';
    }elseif ($_SESSION["added"] == "not_added"){
        echo '<script> alert("Question failure."); </script>';
    }
    $_SESSION["added"] = NULL;
?>
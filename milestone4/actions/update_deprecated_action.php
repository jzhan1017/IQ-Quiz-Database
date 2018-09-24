<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();
require_once('../viewdatabase/db_setup.php');
$sql = "USE xguo24_1;";
if ($conn->query($sql) === TRUE){
} else {
   echo "Error using  database: " . $conn->error;
}

$questionid = $_POST['questionid'];

if($_POST['yn'] == "true"){
    $sql = "UPDATE Question SET deprecated = 1 WHERE questionid = '$questionid';";
}else{
    $sql = "UPDATE Question SET deprecated = 0 WHERE questionid = '$questionid';";
}

$result = $conn->query($sql);

if ($result === TRUE) {
    if($_POST['yn'] == "true"){
        $_SESSION["yn"] = "y";
    }else{
        $_SESSION["yn"] = "n";
    }
} else {
    $_SESSION["yn"] = "failure";
} 

$sql = "SELECT * FROM Question WHERE questionid = '$questionid';";
$result =  mysqli_num_rows($conn->query($sql));
if($result == 0){
    $_SESSION["yn"] = "failure";
}

header("location: ../update_deprecated.php");
?>

<?php
$conn->close();
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();
require_once('../viewdatabase/db_setup.php');
$sql = "USE xguo24_1;";
if ($conn->query($sql) === TRUE) {
} else {
   echo "Error using  database: " . $conn->error;
}

$username = $_POST['username'];
$sql = "DELETE FROM Regular WHERE username = '$username';";
$result = $conn->query($sql);

if ($result === TRUE) {
    $_SESSION["found"] = "found";
} else {
    $_SESSION["found"] = "not_found";
} 
?>

<?php
header("location: ../del_user.php");
$conn->close();
?>  

</body>
</html>

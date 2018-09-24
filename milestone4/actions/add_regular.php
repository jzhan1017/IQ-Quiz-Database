<html>
<body>

<?php
session_start();
require_once('../viewdatabase/db_setup.php');
$sql = "USE xguo24_1;";

if($conn->query($sql) === TRUE){

}else {
echo "Connection Error: " . $conn->error;
}

$username = $_POST['name'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$date_of_birth = $_POST['bday'];
$gender = $_POST['gender'];
$education = $_POST['education'];

$passcode = hash('sha256', $password);

$check_reg = "SELECT * FROM Regular WHERE username = '$username';";
$check_mod = "SELECT * FROM Moderator WHERE modName = '$username';";
$email_reg = "SELECT * FROM Regular WHERE email = '$email';";
$email_mod = "SELECT * FROM Moderator WHERE email = '$email';";

$result_reg = mysqli_num_rows($conn->query($check_reg));
$result_mod = mysqli_num_rows($conn->query($check_mod));
$result_email_reg = mysqli_num_rows($conn->query($email_reg));
$result_email_mod = mysqli_num_rows($conn->query($email_mod));

$name_not_taken = FALSE;
$pass_same = ($password == $cpassword);
$email_not_taken = FALSE;

if($result_reg == 0 and $result_mod == 0){
    $name_not_taken = TRUE;
}

if($result_email_reg == 0 and $result_email_mod == 0){
    $email_not_taken = TRUE;
}

if($name_not_taken and $pass_same and $email_not_taken){
    $sql = "INSERT INTO Regular VALUES('$username', '$passcode', '$email', 
    '$gender', '$date_of_birth','$education');";
    $result = $conn->query($sql);
    $_SESSION["input"] = $username;
    header("Location: ../login.php");
}else{
    header("Location: ../signup.php");
}

$conn->close();
?>

</body>
</html>


</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>

<?php
require_once('db_setup.php');
$sql = "USE xguo24_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$education = $_POST['education'];

$sql = "SELECT * FROM Regular";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>username</th>
         <th>password</th>
         <th>email</th>
   	 <th>gender</th>
	 <th>date_of_birth</th>
	 <th>education</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['username']?></td>
          <td><?php echo $row['password']?></td>
          <td><?php echo $row['email']?></td>
	  <td><?php echo $row['gender']?></td>
	  <td><?php echo $row['date_of_birth']?></td>
	  <td><?php echo $row['education']?></td>

      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>

    </table>


<?php
$conn->close();
?>

</body>
</html>

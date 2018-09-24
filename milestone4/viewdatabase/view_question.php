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
$questionid = $_POST['questionid'];
$prompt = $_POST['prompt'];
$correct_answer = $_POST['correct_answer'];
$difficulty = $_POST['difficulty'];
$deprecated = $_POST['deprecated'];

$sql = "SELECT * FROM Question";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>questionid</th>
         <th>prompt</th>
         <th>correct_answer</th>
         <th>difficulty</th>
         <th>deprecated</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['questionid']?></td>
          <td><?php echo $row['prompt']?></td>
          <td><?php echo $row['correct_answer']?></td>
          <td><?php echo $row['difficulty']?></td>
          <td><?php echo $row['deprecated']?></td>

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
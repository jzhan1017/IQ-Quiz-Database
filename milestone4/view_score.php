</head>
<body>

<?php
require_once('./viewdatabase/db_setup.php');
$sql = "USE xguo24_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$quizid = $_POST['quizid'];
$username = $_POST['username'];
$date_created = $_POST['date_created'];
$user_input = $_POST['user_input'];
$sql = "SELECT * FROM Quiz";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>quizid</th>
         <th>username</th>
         <th>score</th>	     
 </tr>
<?php
while($row = $result->fetch_assoc()){
	$score = 0;
	$difficulty = $_POST['difficulty'];
	$correct_answer = $_POST['correct_answer'];
	$questionid = array();
	$user_answer = array();
	$answer_time = array(); 
	$delimiter = explode(",", $row['user_input']);
	for($i = 0; $i < sizeof($delimiter); $i++) {
		if ($i%3 == 0) {
			array_push($questionid, $delimiter[$i]);
		} elseif ($i%3 == 1) {
			array_push($user_answer, $delimiter[$i]);
		} else {
			array_push($answer_time, $delimiter[$i]);
		}	
	}
	/*
	$sql1 = "SELECT correct_answer FROM Question WHERE questionid = '$questionid[0]';";
        $result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	echo $row1['correct_answer'];
	*/
	
	for ($i = 0; $i < sizeof($questionid); $i++) {	
		$sql1 = "SELECT correct_answer, difficulty FROM Question WHERE questionid = '$questionid[$i]';";
		$result1 = $conn->query($sql1);		
		$row1 = $result1->fetch_assoc();
		if ($row1['correct_answer'] == $user_answer[$i]) {
			$score += 5*$row1['difficulty'];
		}
	}	
?>	
	 <tr>
          <td><?php echo $row['quizid']?></td>
          <td><?php echo $row['username']?></td>
          <td><?php echo $score?></td>
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

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
// Query:
$prompt  = $_POST['prompt'];
$correct_answer = $_POST['correct_answer'];
$difficulty = $_POST['difficulty'];
$answerchoice = $_POST['WrongAnswer'];
$maxQuestionid = $_POST['MAX(questionid)'];
$sql0 = "SELECT MAX(questionid) FROM Question";
$result0 = $conn->query($sql0);
$row0 = $result0->fetch_assoc();
$questionid = $row0['MAX(questionid)']+1;
$sql1 = "INSERT INTO Question VALUES($questionid, '$prompt', '$correct_answer', $difficulty, 0);";
$sql2 = "INSERT INTO Answer VALUES($questionid, '$correct_answer');";
/* delimits a text by new line */
$answers = preg_split('/\r\n|\r|\n/', $answerchoice);
$answerArray = array();

/* inserts into answer table */
for ($i = 0; $i < sizeof($answers); $i++) {
	$sqlAnswer = "INSERT INTO Answer VALUES($questionid, '$answers[$i]');";
	array_push($answerArray, $sqlAnswer);
}


$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
for ($i = 0; $i < sizeof($answerArray); $i++) {
	$resultAnswer = $conn->query($answerArray[$i]);
	array_push($resultArray, $resultAnswer);
}

$_SESSION["added"] = "added";
header("location: ../add_question.php");

?>

<?php
$conn->close();
?>  

</body>
</html>

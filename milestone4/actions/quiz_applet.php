<?php
session_start();
?>
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Begin Quiz</title>
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/navigation.css">
		<link rel="stylesheet" href="../css/form.css">
	</head>

	<body>
		<?php
			require_once('../viewdatabase/db_setup.php');
			$sql = "USE xguo24_1;";
			if ($conn->query($sql) === TRUE) {
			} else {
				echo "Error using  database: " . $conn->error;
			}
			/* selects 10 random questions that aren't deprecated */
			if($_SESSION["question_num"] == 1){
				$_SESSION["userinput"] = "";
				$sql = "SELECT * FROM Question WHERE Deprecated = 0 ORDER BY RAND() LIMIT 10";
				$result = $conn->query($sql);
				$_SESSION["quiz"] = array();
				
				while($row=$result->fetch_assoc()){
					array_push($_SESSION["quiz"], $row);
				}
			}else{
				$question = $_SESSION["quiz"];
				$question = $question[$_SESSION["question_num"]-2];
				$prompt = $question["prompt"];
				$id = $question["questionid"];

				/* measures time for each question */
				$time_dif = round(microtime(true) - $_SESSION["time_pre"], 3);

				$_SESSION["userinput"] = $_SESSION["userinput"] . "," . $id . "," . $_POST["choices"] . "," . $time_dif;
				
				if($_SESSION["question_num"] == 11){
					header("location: congratulations.php");
				}
			}

			$question = $_SESSION["quiz"];
			$question = $question[$_SESSION["question_num"]-1];
			$prompt = $question["prompt"];
			$id = $question["questionid"];

			$sql = "SELECT * FROM Answer WHERE questionid = $id ORDER BY RAND();";
			$result = $conn->query($sql);
		
			$conn->close();
		?>
		<!-- design for IQ quiz -->
		<div class = "container">
		
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>
		
			<nav class="menu">
				<ul>
					<li><a href="../quiz.php"> Quit </a></li>
				</ul>
			</nav>

			<article class="loggedin">
				<h2> Quiz </h2>
		
				<h3 class = "form"> Question <?php echo $_SESSION["question_num"] . ". " . $prompt?></h3>
	
					<form class = "quiz" method="post" action="quiz_applet.php">
						<?php 
							$_SESSION["time_pre"] = microtime(true);
							while($row=$result->fetch_assoc()){
						?>

							<label class = "fixed" for="choices"> <?php echo $row["choice"] ?> </label>
							<input type="radio" name="choices" id = "<?php echo $row["choice"] ?>" value="<?php echo $row["choice"] ?>" checked><br>
					
						<?php 
							}
						?>
						
						<input class = "submit_login" type="submit" value="Continue"> 
					</form>
				<br>

			<?php $_SESSION["question_num"] = $_SESSION["question_num"] + 1;?>

			</article>
			<aside>

			</aside>
		</div>
	</body>
</html>
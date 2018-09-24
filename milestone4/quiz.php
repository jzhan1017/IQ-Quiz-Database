<?php
session_start();
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Quiz</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>

	<body>
		<?php include './actions/check_reg.php';?>
		<?php 
			$_SESSION["question_num"] = 1;
		?>
		
		<div class = "container">
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>
		
			<nav class="menu">
				<ul>
					<li><a href="highscores.php">Highscores</a></li>
					<li><a class = "is-current" href="quiz.php">Take Quiz</a></li>
					<li><a href="acc_settings.php">Account Settings</a></li>
					<li><a href="home.php">Logout</a></li>
				</ul>
			</nav>

			<article class="signup">
				<h2> Quiz </h2>

				<form method="post" action="./actions/quiz_applet.php">
					<input class = "submit_login" type="submit" value="Begin Quiz"> 
				</form>

			</article>
			<aside>

			</aside>
		</div>
	</body>
</html>
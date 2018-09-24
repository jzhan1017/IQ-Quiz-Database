<?php
session_start();
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Hiscores</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>

	<body>
		<?php include './actions/check_reg.php';?>
		<div class = "container">
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>
			

			<nav class="menu">
				<ul>
					<li><a class = "is-current" href="highscores.php">Highscores</a></li>
					<li><a href="quiz.php">Take Quiz</a></li>
					<li><a href="acc_settings.php">Account Settings</a></li>
					<li><a href="home.php">Logout</a></li>
				</ul>
			</nav>

			<article class="loggedin">
				<h2> High Scores </h2>
				<p>
					<?php echo $_SESSION['username']?>
				</p>

				<p>
					Below it will display a collection of global high scores from other users
				</p>
			</article>
		</div>
	</body>
</html>
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Hiscores</title>
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/navigation.css">
		<link rel="stylesheet" href="../css/form.css">
	</head>

	<body>
	
		<div class = "container">
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>
			

			<nav class="menu">
				<ul>
					<li><a class = "is-current" href="../highscores.php">Highscores</a></li>
					<li><a href="../quiz.html">Take Quiz</a></li>
					<li><a href="../acc_settings.html">Account Settings</a></li>
					<li><a href="../home.html">Logout</a></li>
				</ul>
			</nav>

			<article class="loggedin">
				<h2> Nothing in it</h2>
				<p>
					<?php echo $row['password']?>
					<?php echo $password?>
				</p>

			</article>
		</div>

		<?php $conn->close();?>
	</body>
</html>
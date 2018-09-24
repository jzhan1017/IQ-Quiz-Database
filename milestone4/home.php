<?php
session_start();
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>

	<body>
		<?php
		session_unset(); 
		session_destroy(); 
		?>
		
		<div class = "container">
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>
			

			<nav class="menu">
				<ul class="homemenu">
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Create Account</a></li>
				</ul>
			</nav>


			<article>		
			</article>
			
			<aside>
			</aside>
			
			<footer>
			</footer>

		</div>
	</body>
</html>
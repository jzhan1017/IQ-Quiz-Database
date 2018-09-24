<?php
session_start();
?>
<!-- Design for login page -->
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Log in</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>

	<body>
		
		<div class = "container">
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>

			<nav class="menu">
				<ul class="homemenu">
					<li><a href="home.php">Home</a></li>
				</ul>
			</nav>

			<article class="signup">
			
				<h2> Log in </h2>

				<form method="post" action="./actions/login_action.php">

					<div class="logincontainer">
						<label class = "fixed" for="username"> Username </label> <br>
						<input class = "textfield" type="text" name="name" id="name" value="<?php echo $_SESSION["input"]?>"> <br><br>

						<label class = "fixed" for="password"> Password </label> <br>
						<input class = "textfield" type="password" name="password" id="password" 
						<?php if($_SESSION["incorrect"]){echo "style='border-color:rgb(255, 0, 0);'";}
						?>
						><br><br>
					</div>

						<input class = "submit_login" type="submit" value="Log in"> 
				</form>
	
			</article>
		</div>
		
		<?php 
		session_unset(); 
		session_destroy(); 
		$conn->close();
		?>
	</body>
</html>
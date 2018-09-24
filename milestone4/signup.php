<?php
session_start();
?>
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Sign-up</title>
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
			
				<h2>Account Creation</h2>

				<form method="post" action="./actions/add_regular.php">

					<div class="logincontainer">
						<label class = "fixed" for="username"> Username </label><br> 
						<input type="text" name="name" id="name"> <br><br>

						<label class = "fixed" for="password"> Password </label> <br>
						<input type="password" name="password" id="password"><br><br>

						<label class = "fixed" for="cpassword"> Confirm Password </label> <br>
						<input type="password" name="cpassword" id="cpassword"><br><br>

						<label class = "fixed" for="email"> Email </label> <br>
						<input type="email" name="email" id="email"><br><br>
					</div>

					<div class = "rest">
						<h3 class = "form"> What is your gender?</h3>
	
						<input type="radio" name="gender" id = "male" value="male" checked>
						<label class = "fixed" for="male"> Male </label><br>
						
						<input type="radio" name="gender" id = "female" value="female"> 
						<label class = "fixed" for="female"> Female </label><br>

						<input type="radio" name="gender" id = "other" value="other">
						<label class = "fixed" for="other"> Other </label> <br>

						<h3 class = "form"> Date of Birth? </h3>
						<input type="date" name="bday">

						<h3 class = "form"> Highest Education?</h3>
						<select name="education">
							<option value="None">None</option>
							<option value="Highschool">Highschool Diploma</option>
							<option value="Associates">Associate's Degree</option>
							<option value="Bachelors">Bachelor's Degree</option>
							<option value="Masters">Master's Degree</option>
							<option value="Doctorate">Doctorate or Higher</option>
						</select> <br>

						<br>
						<input class = "submit" type="submit" value="Create Account"> 
					</div>
				
				</form>
	
			</article>
		</div>

	</body>
</html>
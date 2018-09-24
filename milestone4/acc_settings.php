<?php
session_start();
?>
<!-- Page design for changing password -->
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Create Account</title>
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
					<li><a href="highscores.php">Highscores</a></li>
					<li><a href="quiz.php">Take Quiz</a></li>
					<li><a class = "is-current" href="acc_settings.php">Account Settings</a></li>
					<li><a href="home.php">Logout</a></li>
				</ul>
			</nav>


			<article class="signup">
				<h2> Account Settings </h2>

				<div class="logincontainer">
						<!-- links this page to change_setting.php -->
						<form method="post" action="./actions/change_settings.php">

						<!-- prefills the inputs for username and email -->
						<label class = "fixed" for="username"> Username </label>
						<input type="text" name="name" id="name" value="<?php echo $_SESSION['username']?>" readonly
						style="background-color:rgb(209, 209, 209);"><br>

						<label class = "fixed" for="nemail"> Email </label> 
						<input type="email" name="nemail" id="nemail" 
						value="<?php 
							require_once('./viewdatabase/db_setup.php');
							$sql = "USE xguo24_1;";
							if ($conn->query($sql) === TRUE) {
							} else {
								echo "Error using  database: " . $conn->error;
							}
		
							$sql = "SELECT email FROM Regular WHERE username = '$username'";
							$result = $conn->query($sql);
							while($row=$result->fetch_assoc()){
								$email = $row['email'];
							}
							$conn->close();
							echo $email;
							?>"
							
						readonly style="background-color:rgb(209, 209, 209);"><br>

						<label class = "fixed" for="npassword"> New Password </label> 
						<input type="password" name="npassword" id="npassword"><br>

						<label class = "fixed" for="cnpassword"> Confirm New Password </label>
						<input type="password" name="cnpassword" id="cnpassword"><br>

						<br>
						<input class = "submit", type="submit" value="Change Settings"> 
						</form>
				</div>

			</article>
			
			<aside>
				
			</aside>
		</div>
	</body>
</html>
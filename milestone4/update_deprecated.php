<!doctype html>

<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title>Update Deprecated</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>
	<body>
		<?php include './actions/check_mod.php';?>
		<div class="container">
			<header>
				<h1>IQ QuizBase</h1>

				<h2> Change to Deprecated </h2>
			</header>

			<nav class="menu">
				<ul>
					<li><a href="moderator.php">View Database</a></li>
					<li><a href="del_user.php">Delete User</a></li>
					<li><a href="add_question.php">New Question</a></li>
					<li><a class = "is-current" href="update_deprecated.php">Deprecate Question</a></li>
					<li><a href="home.php">Log out</a></li>
				</ul>
			</nav>
			
			<article class = "signup">
				<form action="./actions/update_deprecated_action.php" method="post">
						<div class = "logincontainer">  
							<input type="radio" name="yn" id = "true" value="true" checked>
							<label class = "fixed" for="true"> Deprecate </label><br>
							
							<input type="radio" name="yn" id = "false" value="false"> 
							<label class = "fixed" for="false"> Undeprecate </label><br>

							<br>

							QuestionID:  <input type="text" name="questionid"><br>
							<input class = "submit" type="submit" value="Submit"> 
						</div>
				</form>
			</article>
		</div>
		
		<?php include './actions/update_deprecated_alert.php';?>
	</body>	
</html>

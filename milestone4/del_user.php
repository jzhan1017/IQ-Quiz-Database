<!doctype html>

<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title>Ban User</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>
	<body>
	<?php include './actions/check_mod.php';?>
	<div class="container">
	
		<header>
                <h1>IQ QuizBase</h1>

                <h2> Ban User </h2>
		</header>            

		<nav class="menu">
			<ul>
				<li><a href="moderator.php">View Database</a></li>
				<li><a class = "is-current" href="del_user.php">Delete User</a></li>
				<li><a href="add_question.php">New Question</a></li>
				<li><a href="update_deprecated.php">Deprecate Question</a></li>
				<li><a href="home.php">Log out</a></li>
			</ul>
		</nav>

		<article class="signup">
			<form action="./actions/del_user_action.php" method="post">
				<div class="logincontainer">  
					Username:  <input type="text" name="username"><br>
					<input class="submit" type="submit">
				</div>
			</form>
		</article>

	<?php include './actions/del_user_alert.php';?>
	</div>
	</body>	
</html>

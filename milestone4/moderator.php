<?php
session_start();
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Moderator</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">
	</head>

	<body>
		<?php include './actions/check_mod.php';?>
		<div class = "container">
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle"> Administrative account. You have the power to view and edit the database. </div>
			</header>
			

			<nav class="menu">
				<ul>
					<li><a class = "is-current" href="moderator.php">View Database</a></li>
					<li><a href="del_user.php">Delete User</a></li>
					<li><a href="add_question.php">New Question</a></li>
					<li><a href="update_deprecated.php">Deprecate Question</a></li>
					<li><a href="home.php">Log out</a></li>
				</ul>
			</nav>

			<article class="loggedin">
				<h2> Welcome <?php echo $_SESSION['username']?> </h2>
				<p>
					<nav class="menu">
						<ul class="homemenu">
							<li><a href="./viewdatabase/view_regular.php">View Regular</a></li>
							<li><a href="./viewdatabase/view_moderator.php">View Mods</a></li>
							<li><a href="./viewdatabase/view_quiz.php">View Quiz</a></li>
							<li><a href="./viewdatabase/view_question.php">View Question</a></li>
							<li><a href="./viewdatabase/view_appearsin.php">View Appearsin</a></li>
							<li><a href="./viewdatabase/view_answer.php">View Answer</a></li>
						</ul>
					</nav>
				</p>


			</article>
			
			<aside>
				
			</aside>
		</div>
	</body>
</html>
<!doctype html>
<!-- Page to add question -->
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title>Add question</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/form.css">

	</head>
	<body>
		<!-- Only mods can add questions -->
		<?php include './actions/check_mod.php';?>
		<div class="container">
			<header>
				<h1>IQ QuizBase</h1>
				<h2> Insert Question  </h2>
			</header>
			
			<nav class="menu">
				<ul>
					<li><a href="moderator.php">View Database</a></li>
					<li><a href="del_user.php">Delete User</a></li>
					<li><a class = "is-current" href="add_question.php">New Question</a></li>
					<li><a href="update_deprecated.php">Deprecate Question</a></li>
					<li><a href="home.php">Log out</a></li>
				</ul>
			</nav>

			<article class="submission">
					<form action="./actions/add_question_action.php" method="post">
				
						Prompt:  <input type="text" name="prompt"><br>
						Difficulty: <input type="text" name="difficulty"><br>
						Correct Answer:  <input type="text" name="correct_answer"><br>
						Wrong Answers: <textarea name="WrongAnswer" rows="10" cols="30"></textarea>
						<input type="submit" value = "Submit Question">
		
					</form>	
			</article>
		</div>
		<?php include './actions/add_question_alert.php';?>
	</body>
</html>

<?php
session_start();
?>
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Begin Quiz</title>
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/navigation.css">
		<link rel="stylesheet" href="../css/form.css">
	</head>

	<body>
		<?php
			require_once('../viewdatabase/db_setup.php');
			$question = $_SESSION["quiz"];
			$conn->close();
		?>

		<div class = "container">
		
			<header>
				<h1>IQ QuizBase</h1>
				<div class = "subtitle">A quick assessment of your IQ!</div>
			</header>
		
			<article class="loggedin">
				<h2> Congratulations! </h2>
                <p>
                    <?php
                        echo $_SESSION["userinput"];
                        $_SESSION["userinput"] = NULL;
                    ?>

                    <nav class="menu">
                        <ul>
                            <li><a href="../quiz.php"> Back </a></li>
                        </ul>
                    </nav>
                </p>
            </article>
            
			<aside>
			</aside>
		</div>
	</body>
</html>
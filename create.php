<html>
<head>
	<title>Create a Game | Classroom Jeopardy</title>
	<link rel="stylesheet" href="res/styles/create.css">
	<link rel="stylesheet" href="res/styles/general.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="content-wrapper">
		<div id="header-wrapper">
			<header>
				<p>Create a new game</p>
			</header>
		</div>

		<div id="game-meta" class="centered-text">
			<label>Title:</label><input type="text"><br>
			<label>Your Name:</label><input type="text"><br>
		</div>

		<div id="game-data" class="centered">
			<?php
			$columns = 5;
			ob_start();
			for ($i = 0; $i < $columns; $i++) {
				echo '<div class="category-container">';
				echo '<img class="expand-contract-icon" src="res/img/minus.png"><p class="category-name" contenteditable="true">Category ' . ($i + 1) . '</p>';
				for ($j = 0; $j < 5; $j++) {
					echo '<img class="expand-contract-icon expand-contract-icon-2" src="res/img/minus.png"><p class="question-answer-label">Answer for $' . (($j + 1) * 100) . ':</p>';
					echo '<div class="question-answer-label-container">';
					echo '<label>Answer:</label><input type="text"><br>';
					echo '<label>Question:</label><input type="text"><br>';
					echo '</div>';
				}
			// End category-container
				echo '</div>';
			}
			ob_end_flush();
			?>
		</div>
	</div>
</body>
</html>
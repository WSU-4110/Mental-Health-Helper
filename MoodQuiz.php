<?php 
   session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mood Quiz</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
	
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<link rel="stylesheet" href="bootstrap.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="MoodQuizStyle.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body>
    <div id="background-wrap">
        <div class="x1">
            <div class="cloud"></div>
        </div>
    
        <div class="x2">
            <div class="cloud"></div>
        </div>
    
        <div class="x3">
            <div class="cloud"></div>
        </div>
    
        <div class="x4">
            <div class="cloud"></div>
        </div>
    
        <div class="x5">
            <div class="cloud"></div>
        </div>
    </div>
    <header>
    <div id ="logo">
        <img src = "logo.png" width="150" height="120">
        <h1 class = "rise">Helping Hand</h1>
    </div> 
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="MoodQuiz.php">Mental Help Quiz</a></li>
                <li><a href="helpful links.php">Resources</a></li>
                <li><a href="timerbox.php">Journal</a></li>
                <li><a href="discussion.php">Discuss</a></li>
                <li><a href="about.php">About Us</a></li>
                <?php if (!isset($_SESSION["userid"])) { ?>
			        <?php echo '<li><a href="register.php">Login</a></li>' ?>
    		    <?php } ?>
    		    <?php if (isset($_SESSION["userid"])) { ?>
    			    <?php echo '<li><a href="logout.php">Logout</a></li>' ?>
    		    <?php } ?>
		    </ul>
        </nav>
    </header>

	<div class="container text-center">
		<h1>Mood Quiz</h1>
	</div>
	<div class="container text-center">
		<ul id="quiz" class="list-group">

		</ul>
	</div>


	<div class="container text-center results hide">
		<p id="results"></p>
	</div>

	<div class="container text-center bottom">
		<button id="submit-btn" class="btn btn-primary btn-lg">Submit</button>

		<button id="retake-btn" class="hide btn btn-primary btn-lg">Retake Quiz</button>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
	<script src="MoodQuiz2.0_Javascript.js"></script>
	
	
    <footer>

        <p><small>All content copyright &copy; 2023, HelpingHand</small></p>

    </footer>
</body>
</html>

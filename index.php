<?php 
    session_start();
    
	$message = "";

	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");

	if (isset($_POST['submit'])) {
		if (empty($_POST['goal'])) {
			$message = "";
		}else{
		    if (!isset($_SESSION["userid"])) {
		        $message = "Please log in or register first";
		    }
		    else {
		    $userid = $_SESSION["userid"];
			$goal = $_POST['goal'];
			$sql = "INSERT INTO goals (userid, goal) VALUES ('$userid', '$goal')";
			mysqli_query($db, $sql);
			header('location: index.php');
		    }
		}
	}

		// delete task
	if (isset($_GET['deleteTask'])) {
		$id = $_GET['deleteTask'];
		mysqli_query($db, "DELETE FROM goals WHERE id=".$id);
		header('location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Helping Hand</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="styles.css">

        <style>
            @import url(styles.css);
        </style>

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
            <img src="logo.png" width="150" height="120">
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

        <div id= "main">
            <h2><span class = "auto-type"> </span></h2> 
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
        
            <?php if (!isset($_SESSION["userid"])) { ?>
                <?php $string= 'Welcome to Your Helping Hand'; ?>
            <?php } ?>
            <?php if (isset($_SESSION["userid"])) { ?>
                <?php $string= 'Welcome to Your Helping Hand <br />\n '.$_SESSION["username"]; ?>
            <?php } ?>
            
            var string="<?php echo $string; ?>"
                var typed = new Typed(".auto-type", {
                    strings: ["Need", string],
                    typeSpeed: 150, 
                })
        </script>
        
        <main id="table">
            <div id= "QuoteOfTheDay"> 
                <div id="quote"> 
                    <div id="output">Get your quote of the day!</div>
                    <button onclick="quotes()" id = "button"> click me!<br></button>
                </div>
            </div>


            <div class = "goalTracker">
                <div class = "tracker">
                    <h2>Goal Tracker</h2>
                    <p>The Goal Tracker helps you keep track of your mental health goals by letting you add or delete a goal. 
                        We suggest you to limit your goals to about 5 goals, so you don't feel overwhelmed with everything.
                        Remember, you don't need to do everything all at once! 
                    </p>

                    <form method="POST" action="index.php">
                        <?php if (isset($message)) { ?>
                            <p><?php echo $message; ?></p>
                        <?php } ?>
                            <input type="text" name="goal" placeholder="Enter a Goal ... ">
                            <button type="submit" name="submit" class="addBtn">&#43</button>
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 50%;">Goal</th>
                                <th style="width: 5%;">Done?</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                            <?php if (!isset($_SESSION["userid"])) { ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo "Please login to add and view goals"; ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                            
                            <?php if (isset($_SESSION["userid"])) {
                                $userid = $_SESSION["userid"];
                                $goals = mysqli_query($db, "SELECT * FROM goals WHERE userid=$userid");
                                $i = 1; while ($row = mysqli_fetch_array($goals)) { ?>
                                <tr>
                                    <td> <?php echo $i; ?></td>
                                    <td class="goal"><?php echo $row['goal']; ?></td>
                                    <td class="delete"> 
                                        <a href= "index.php?deleteTask=<?php echo $row['id']; ?>">&#10003</a> 
                                    </td>
                                </tr>	
                                <?php $i++; } ?>	
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="main.js"></script>

</main>        
        <footer>

            <p><small>All content copyright &copy; 2023, HelpingHand</small></p>

        </footer>


    </body>
</html>
<?php 
   session_start();

	$message = "";
  
	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");

    
    if (isset($_POST['discuss'])) {
      if (empty($_POST['comment'])) {
        $message = "Please write something";
    }
    else{
        		    if (!isset($_SESSION["userid"])) {
		        $message = "Please log in or register first";
		    }
		    else if (!isset($_SESSION["username"])) {
		        $message = "Please log in or register first";
		    }
		    else {
        $comment = $_POST['comment'];
        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];
		$sql = "INSERT INTO discussion (userid, username, comment) VALUES ('$userid', '$username', '$comment')";
        mysqli_query($db, $sql);
        header('Location: discussion.php');
		    }
      }
    }	
?>

<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <title>Journal</title>
    </head>
    <style>
        @import url(timerboxstyles.css);
        @import url(timerboxscript.js);
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

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
<header>
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


<body>
    <h1 style="text-align: center;">Discussion Forum</h1>

<form action="discussion.php" method="POST">
<?php if (isset($message)) { ?>
            <p><?php echo $message; ?></p>
            <?php } ?>


<textarea name="comment" id="comment" rows="10" cols="150" maxlength="1000" style="border:8px outset rgb(226, 146, 159);" placeholder="Talk about tips, concerns, or anything else you would like to share"></textarea>
  <br><br>
  <button type="submit" class="button" name="discuss">Submit</button>
</form>

  <h1 class="centered">What Others Are Sharing</h1>
    
<table>
		<thead>
			<tr>
				<th style="width: 10em;">User</th>
				<th style="width: 80em;">Comment</th>
			</tr>
		</thead>

		<tbody>
			<?php 
			$comments = mysqli_query($db, "SELECT * FROM discussion");

			$i = 1; while ($row = mysqli_fetch_array($comments)) { ?>
				<tr>
					<td> <?php echo $row['username']; ?> </td>
					<td class="comment"> <?php echo $row['comment']; ?> </td>
				</tr>
			<?php $i++; } ?>	

		</tbody>
	</table>
    
    <br><br>
    
    <script src="timerboxscript.js"></script>


<footer>

    <p><small>All content copyright &copy; 2023, HelpingHand</small></p>

</footer>

</body>
</html>
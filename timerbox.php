<?php 
   session_start();

	$message = "";
  
	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");

    
    if (isset($_POST['journal'])) {
      if (empty($_POST['diary'])) {
        $message = "You must write something";
    }
    else if (!isset($_SESSION["userid"])) {
        $message = "Please log in to Submit a Journal Entry";
    } 
    else{
        $note = $_POST['diary'];
        $userid = $_SESSION["userid"];
		$sql = "INSERT INTO journal (userid, note) VALUES ('$userid', '$note')";
        mysqli_query($db, $sql);
        header('Location: timerbox.php');
      }
    }	
    
    // Delete
	if (isset($_GET['del_note'])) {
		$id = $_GET['del_note'];

		mysqli_query($db, "DELETE FROM journal WHERE id=".$id);
		header('location: timerbox.php');
	}
?>

<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Journal</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
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

<form action="timerbox.php" method="POST">


<h1 class="centered">Reflections are the best form of Personal Development</h1>
<center>
<p>Let's take at least 5 minutes of your day to reflect and let go. <br> Click "Start" whenever you're ready! </p>
</center>
<center>
<div class="timer">
<span class="hour" id="hours">00</span>:<span class="minute" id="minutes">00</span>:<span class="second" id="seconds">00</span>
</div><br/>
<div class="control">
<input type="button" class = "button" id="startTimer" value="Start Timer" onclick="timer.start(1000)" /><br/><br/>
<input type="button" class = "button" id="stopTimer" value="Stop Timer" onclick="timer.stop()" /><br/><br/>
<input type="button" class = "button" id="resetTimer" value="Reset Timer" onclick="timer.reset(0)" /><br />
</div>
</center>


<?php if (isset($message)) { ?>
            <p><?php echo $message; ?></p>
            <?php } ?>
<label for="diary"></label><br>
<textarea name="diary" id="diary" rows="30" cols="130" maxlength="1500" style="border:6px outset rgb(226, 146, 159);" placeholder="  Let's Reflect..."></textarea>
  <br><br>
  <button type="submit" class="button" name="journal">Submit Journal Entry</button>
</form>

  <br><br><h1 class="centered">Journal Entries</h1><br><br><br><br><br>

    <?php if (!isset($_SESSION["userid"])) { ?>
        <?php echo "Please login to view your journal entries"; ?>
    <?php } ?>
    
    <?php if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
        $notes = mysqli_query($db, "SELECT * FROM journal WHERE userid=$userid");
        $count = mysqli_num_rows($notes);
        
        if($count == 0) {
            echo "No Previous Journals to Display. <br> Start Writing!";}
        else { ?>
        <div class = "container">
        <table>
        <thead>
            <tr>
                <th style="width: 80em;">Entry</th>
                <th>Delete?</th>
            </tr>
        </thead>

        <tbody>  
        
        <?php $i = 1; while ($row = mysqli_fetch_array($notes)) { ?>
        <tr>
            <td class="note"><?php echo $row['note']; ?></td>
            <td class="delete"><a href= "timerbox.php?del_note=<?php echo $row['id']; ?>">&#128465</a></td>
        </tr>	
        <?php $i++; } ?>	
        <?php } ?>
        <?php } ?>
    </tbody>
    </table>
    </div>
    
    <br><br>


    <script src="timerboxscript.js"></script>


<footer>

    <p><small>All content copyright &copy; 2023, HelpingHand</small></p>

</footer>

</body>
</html>
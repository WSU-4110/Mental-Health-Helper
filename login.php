<?php 
    session_start();

	$message = "";
  
	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");


    if (isset($_POST['register'])) {
        if (empty($_POST['user'])) {
            $message = "You must fill in the username";
        }
        else if (empty($_POST['pass'])) {
            $message = "You must fill in the password";
        }
        else{
            $user = $_POST['user']; 
            $pass = $_POST['pass'];
            $sql = "SELECT id FROM login WHERE username = '$user' and password = '$pass'";
            $result = mysqli_query($db, $sql);
            
            $count = mysqli_num_rows($result);
            $row=mysqli_fetch_array($result);

            if($count == 1) {
                $_SESSION["userid"] = trim($row["id"]);
                $_SESSION["username"] = $user;
                header('Location: index.php');
            }else {
                $message = "Invalid Username or Password!";
            }
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <header>
        <img src="logo.png" width="150" height="120">
    </header>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>
	<form method="POST" action="login.php">
		<?php if (isset($message)) { ?>
			<p><?php echo $message; ?></p>
		<?php } ?>
	    <input type="text" name="user" id="user" placeholder="Username">
        <input type="password" name="pass" id="pass" placeholder="Password">
        <button type="submit" name="register">Sign In</button>
    </form>
 
    <div class="not-member">
      Not a member? <a href="register.php">Register Now</a>
    </div>
  </div>
  
    <div class="return" style="justify-content: center;">
        <a href="index.php">Return Home</a>
    </div>
</body>
</html>

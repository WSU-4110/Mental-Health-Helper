<?php 
    session_start();

	$message = "";

	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");


    if (isset($_POST['register'])) {
      if (empty($_POST['email'])) {
        $message = "You must fill in the email";
    }
    else if (empty($_POST['user'])) {
        $message = "You must fill in the user";
    }
    else if (empty($_POST['pass'])) {
        $message = "You must fill in the pass";
    }
    else{
        $email = $_POST['email'];
        $user = $_POST['user']; 
        $pass = $_POST['pass'];
        
        $check = "SELECT * FROM login WHERE username = '$user'";
        $checked = mysqli_query($db, $check);
        $count = mysqli_num_rows($checked);
        
        $lowerPass = preg_match('@[a-z]@', $pass);
        $upperPass = preg_match('@[A-Z]@', $pass);
        $numberPass = preg_match('@[0-9]@', $pass);

        if($count != 0) {
            $message = "Username already exists";
        }
        else if (strlen($pass) < 10) {
            $message = "The password must be at least 10 characters in length";
        }
        else if (!$upperPass || !$lowerPass) {
            $message = "Please choose a password with upper and lowercase letters";
        }
        else if (!$numberPass) {
            $message = "Include a number in the password";
        }
        else {
        
            $sql = "INSERT INTO login (email, username, password) VALUES ('$email', '$user', '$pass')";
            mysqli_query($db, $sql);
            
            $query="SELECT * FROM login WHERE email = '$email'";
            $data=mysqli_query($db, $query);
            $row=mysqli_fetch_array($data);
            $_SESSION["userid"] = trim($row["id"]);
            $_SESSION["username"] = $user;
            header('Location: index.php');
        }

      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <header>
        <img src="logo.png" width="150" height="120">
    </header>
  <div class="wrapper">
    <h1>Sign up!</h1>
    <p>Welcome to your Helping Hand <br> You been missing out!</p>
	<form method="post" action="register.php">
		<?php if (isset($message)) { ?>
			<p><?php echo $message; ?></p>
		<?php } ?>
		<input type="email" name="email" id="email" placeholder="Email">
		<input type="text" name="user" id="user" placeholder="Username">
		<input type="password" name="pass" id="pass" placeholder="Password">
		<button type="submit" name="register" id="add_btn" class="add_btn">Register!</button>
	</form>
	
	
	<div class="not-member">
      Already a member? <a href="login.php">Login in</a>
    </div>
  </div>
    <div class="return">
        <a href="index.php">Return Home</a>
    </div>
</body>
</html>

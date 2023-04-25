<?php 
	$errors = "";
  
	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");

    if (isset($_POST['register'])) {
      if (empty($_POST['email'])) {
        $errors = "You must fill in the email";
    }
    else if (empty($_POST['user'])) {
        $errors = "You must fill in the user";
    }
    else if (empty($_POST['pass'])) {
        $errors = "You must fill in the pass";
    }
    else{
        $email = $_POST['email'];
        $user = $_POST['user']; 
        $pass = $_POST['pass'];   
        $sql = "INSERT INTO login (email, username, password) VALUES ('$email', '$user', '$pass')";
        mysqli_query($db, $sql);
        header('Location: index.html');
      }
    }	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Sign up!</h1>
    <p>Welcome to your Helping Hand <br> You been missing out!</p>
	<form method="post" action="register.php">
		<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
		<input type="email" name="email" id="email" placeholder="Email">
		<input type="text" name="user" id="user" placeholder="Username">
		<input type="password" name="pass" id="pass" placeholder="Password">
		<button type="submit" name="register" id="add_btn" class="add_btn">Add Email</button>
	</form>
	
	
	<div class="not-member">
      Already a member? <a href="login.html">Login in</a>
    </div>
  </div>

</body>
</html>
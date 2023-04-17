<?php 
    session_start();

	$errors = "";
  
	$db = mysqli_connect("localhost", "id20553921_mentalhealth", "AFJTTwayne-23", "id20553921_helpinghands");

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $user = mysqli_real_escape_string($db,$_POST['user']);
      $pass = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE username = '$user' and password = '$pass'";
      $result = mysqli_query($db, $sql);
      // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $user and $pass, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['username'] = $user;
        header('Location: index.html');
      }else {
         $errors = "Invalid Username or Password";
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
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>
	<form method="post" action="login.php">
		<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
	    <input type="text" name="user" id="user" placeholder="Username">
        <input type="password" name="pass" id="pass" placeholder="Password">
        <button type="submit" name="register">Sign In</button>
    </form>
 
    <div class="not-member">
      Not a member? <a href="register.html">Register Now</a>
    </div>
  </div>
</body>
</html>
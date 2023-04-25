<?php 
   session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>About Us</title>
</head>
<style>
    @import url(styleabout.css);
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
        <img src="logo.png" width="150" height="120"><h1 class="rise">Helping Hand</h1>
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
    
    <div class = "aboutus">
    <div class = "mission">
    <h2>Our Mission</h2>
        <p>Mental Health challenges is a problem a majority of the world's population faces. However, society stills struggles to put more emphasis on taking care of
            one's mental health, when it is just as important as physical health. Due to the lack of resources that may be available for people to monitor their mental 
            health, it can be hard to find solutions when facing such problems.
            <br><br>
            That's why we wanted to create a safe space for those in need of proper help and attention. Our website aims to provide various resources and awareness to
            assist people in understanding and coping with mental challenges. We aim to help everyone, no matter their identity, because mental health isn't limited to 
            any certain person.
        </p>
        <br>
    </div>



<br><br>

<div class="who">
<h2>Who We Are</h2>
<p>We are a group of Computer Science students at Wayne State University. Read more about us!</p>

<h3>Tasnhuba Islam</h3>
<p>Heyy! I’m a junior here at Wayne State University. I enjoy creating things and seeing the results. Outside of tech, I love hanging out with family and friends. 
    I am recently getting back into reading. </p>
<h3>Amrita Dhar</h3>
<p>Hello! I am a junior at Wayne State. I don't have a lot of experience with coding besides the courses I have taken at my university. I enjoy web development, 
    but I am also interested in software development. Besides coding, I usually like binging tv shows or movies. I also like going out to eat and trying different foods, 
    but my wallet usually isn't a big fan of that.
</p>
<h3>Farzana Israt</h3>
<p>Hello! I am Farzana Israt and I am a junior studying Computer Science at Wayne State University! I currently am looking to become a software engineer or go down a 
    similar route in terms of my career. My hobbies include reading, writing, and creating cool projects. I wish to travel more and visit the spots I’m interested in 
    when I am older and more financially stable.</p>
<h3>Joseph Rossi</h3>
<p>Hi! I am a junior studying Computer Science at Wayne State University. My hobbies currently include playing video games, attending sport games and playing cards.
    I also enjoy to travel and visit new places! My goal in the future is to get a job as a validation test engineer after I graduate.</p>
<h3>Taraque Ahmed</h3>
<p>Hi! My name is Taraque Ahmed, and I am majoring in computer science at Wayne State University. 
    This is my senior year and I have one more semester left at Wayne State University. The things I like about being a software engineer must always learn new things. 
    Every other day, a new advancement in this subject occurs due to the ongoing evolution of technology. As a result, one of the benefits of becoming a software engineer 
    is having the opportunity to pick up new skills at any moment. My hobbies are spending time with family, friends, travel, football, basketball, soccer, and hockey.</p>

</div>
</div>

<br><br>

<h2>Contact Us</h2>
<p class="contactgreeting">We are open to answering questions anyone may have regarding our mission, features, or our overall website.</p>

<div class="container">
    <form name="contactform" action="contactform.php" method="POST"> 
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="age">Age range</label>
        </div>
        <div class="col-75">
          <select id="age" name="ages">
            <option value="17_below">17 & Under</option>
            <option value="18-25">18-25</option>
            <option value="26-30">26-30</option>
            <option value="31-50">31-50</option>
            <option value="above_50">Above 50</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
            <label for="email">Email</label>
        </div>
      <div class="col-75">
        <input type="text" name="useremail" id="form-email" placeholder="Enter your email">
      </div>
      </div>

      <div class="row">
        <div class="col-25">
            <label for="number">Phone Number</label>
        </div>
      <div class="col-75">
        <input type="text" name="usernumber" id="form-num" placeholder="Enter your phone number">
      </div>
      </div>
      
      <div class="row">
        <div class="col-25">
          <label for="subject">Feedback or Question</label>
        </div>
        <div class="col-75">
          <textarea id="form-comment" name="feedback" placeholder="Type your feedback or question here" style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" class ="button" value="Submit">
      </div>
    </form>
  </div>
<br>

<script src="about.js"></script>

<footer>

    <p><small>All content copyright &copy; 2023, HelpingHand</small></p>

</footer>

</body>
</html>
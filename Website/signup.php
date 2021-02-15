<?php
  include_once 'header.php';
?>
    <section class="signupForm">
      <h2>Sign Up</h2>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>
      </form>
      <?php 
      //Error messages
      if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
          echo "<p>Please fill in all fields!</p>";
        }
      else if($_GET["error"] == "invaliduid"){
          echo "<p>Username can only contain a-z,A-Z,0-9!</p>";
      }
      else if($_GET["error"] == "passwordsdontmatch"){
        echo "<p>Passwords don`t match!</p>";
      }
      else if($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong please try again later!</p>";
      }
      else if($_GET["error"] == "usernametaken"){
        echo "<p>Username already taken!</p>";
      }
      else if($_GET["error"] == "none"){
        echo "<p>You have successfully signed up!</p>";
      }
      }
      ?>
      </section>

<?php
  include_once 'footer.php';
?>

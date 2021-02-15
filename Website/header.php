<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header id="mainHeader">
      <div class="container">
        <h1>FK Portfolio</h1>
      </div>
    </header>

    <nav id="navbar">
      <div class="container">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">About</a></li>
          <li><a href="index.php">Projects</a></li>
          <li><a href="index.php">Contact</a></li>
          <?php
            //Nav Items depend on user login
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile</a></li>";
              echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
            }
            else {
              echo "<li><a href='login.php'>Log In</a></li>";
              echo "<li><a href='signup.php'>Sign Up</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

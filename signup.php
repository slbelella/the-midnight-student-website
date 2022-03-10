<?php
$title = "Sign Up Page";
require 'templates/header.html';
?>

<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ony3qws.css">
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="The Midnight Sign Up Page">
<title><?php echo $title?></title>
</head>
<body>

<section class="signup-form">
  <h2>Sign Up</h2>
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
      <input type="text" size="30" name="name" placeholder="Full name..."><br><br>
      <input type="text" size="30" name="email" placeholder="Email..."><br><br>
      <input type="text" size="30" name="uid" placeholder="Username..."><br><br>
      <input type="password" size="30" name="pwd" placeholder="Password..."><br><br>
      <input type="password" size="30" name="pwdrepeat" placeholder="Repeat password..."><br><br><br>
      <button type="submit" class="submit" name="submit">Sign up</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>
</section>

<?php
include('templates/footer.html');
?>
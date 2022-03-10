<?php
$title = "Login Page";
require 'templates/header.html';
?>

<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ony3qws.css">
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="The Midnight Login Page">
<title><?php echo $title?></title>
</head>
<body>

<section class="signup-form">
  <h2>Login</h2>
  <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
      <input type="text" size="30" name="uid" placeholder="Username/Email..."><br><br>
      <input type="password" size="30" name="pwd" placeholder="Password..."><br><br><br>
      <button type="submit" class="submit" name="submit">Login</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>
</section>

<?php
include('templates/footer.html');
?>
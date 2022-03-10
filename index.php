<?php
$title = "The Midnight Homepage";
require 'templates/header.html';
?>

<link href="style.css" rel="stylesheet">
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Homepage for The Midnight">
<title><?php echo $title?></title>
</head>
<body>

<h2>Out Now:</h2>
<div class="center">
<iframe width="1060" height="615" src="https://www.youtube.com/embed/tNO1X9RZ86U" 
    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<?php
include('templates/footer.html');
?>

<?php
$title = "The Midnight Photo Gallery";
require 'templates/header.html';
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Photos of The Midnight">
<title><?php echo $title?></title>
</head>
<body>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/stage.jpg" alt="stage performance">
        <div class="carousel-caption d-none d-md-block">
          <h3>Baltimore's Sound Stage</h3>
          <p>The Midnight, joined by Lito Hernandez on the saxophone</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/tim.jpg" alt="Tim McEwan">
        <div class="carousel-caption d-none d-md-block">
          <h3>Baltimore's Sound Stage</h3>
          <p>Tim McEwan of The Midnight</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/tyler.jpg" alt="Tyler Lyle"> 
        <div class="carousel-caption d-none d-md-block">
          <h3>Baltimore's Sound Stage</h3>
          <p>Tyler Lyle of The Midnight</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/tour.jpg" alt="St. Louis">
        <div class="carousel-caption d-none d-md-block">
          <h3>DNA Lounge</h3>
          <p>San Francisco, California.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php
include('templates/footer.html');
?>
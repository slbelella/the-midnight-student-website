<?php
$title = "The Midnight-Upcoming Events";
require 'templates/header.html';
?>

<?php
include 'Calendar.php';
$calendar = new Calendar('2021-11-01');
$calendar->add_event('Ace of Spades<br> (Sacramento, CA)', '2021-11-06');
$calendar->add_event('Sessions Music Hall<br> (Eugene, OR)', '2021-11-07');
$calendar->add_event('The Spanish Ballroom<br> (Tacoma, WA)', '2021-11-08');
$calendar->add_event('Roseland Theater<br> (Portland, OR)', '2021-11-10');
$calendar->add_event('The Moore Theatre<br> (Seattle, WA)', '2021-11-11');
$calendar->add_event('Commodore Ballroom<br> (Vancouver, BC)', '2021-11-12');
$calendar->add_event('The Complex<br> (Salt Lake City, UT)', '2021-11-15');
$calendar->add_event('Gothic Theatre<br> (Denver, CO)', '2021-11-16');
$calendar->add_event('Gothic Theatre<br> (Denver, CO)', '2021-11-17');
$calendar->add_event('Emos Austin<br> (Vancouver, BC)', '2021-11-19');
$calendar->add_event('White Oak Music Hall<br> (Houston, TX)', '2021-11-20');
$calendar->add_event('Grenada Theater<br> (Dallas, TX)', '2021-11-21');
$calendar->add_event('El Rey Theater<br> (Albuquerque, NM)', '2021-11-23');
$calendar->add_event('The Van Buren<br> (Phoenix, AZ)', '2021-11-24');
$calendar->add_event('The Wiltern<br> (Los Angeles, CA)', '2021-11-27');
?>

<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ony3qws.css">
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="The Midnight Tour Dates">
<title><?php echo $title?></title>
</head>
<body>
    <h2>Upcoming Tour Calendar</h2>
    <p>The Midnight Tour begins November 2021 in the US. Buy tickets and come to a show</p>
    <div class="content home">
			<?=$calendar?>
		</div><br><br>

<a href="https://www.ticketsonsale.com/concerts/the-midnight?gclid=CjwKCAjwm7mEBhBsEiwA_of-TIuhJhNv01u9HH0IGqE48M6UiqqF3YPK06a0V7UdKb7siSZba9EQthoCac8QAvD_BwE">
<h6>Buy tickets to see The Midnight here</h6></a>


<h2>Sources</h2>
    <p style="float:left;">1. (Vehlinggo), A. (2020, November 10). Who are the midnight?: An interview with the masters of modern nostalgia.
    Retrieved May 02, 2021, from https://vehlinggo.com/2017/11/12/the-midnight-interview-nocturnal/<br>
    2. The midnight. (2021, April 18). Retrieved May 02, 2021, from https://en.wikipedia.org/wiki/The_Midnight<br>
    3. Tim McEwan biography. (n.d.). Retrieved May 02, 2021, from https://www.last.fm/music/Tim+McEwan/+wiki<br>
    4. Tyler Lyle age, hometown, biography. (n.d.). Retrieved May 02, 2021, from https://www.last.fm/music/Tyler+Lyle/+wiki<br><br></p>

<?php
include('templates/footer.html');
?>
<?php
$title = "The Midnight News";
require 'templates/header.html';
?>

<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ony3qws.css">
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="News About The Midnight">
<title><?php echo $title?></title>
</head>
<body>

<?php

// Print some introductory text:
print '<h2>The Midnight News</h2>
<p>Register to follow the latest from The Midnight</p>';

// Check if the form has been submitted:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $problem = false; // No problems so far.

        //Check for each value...
        if (empty($_POST['first_name'])) {
            $problem = true;
            print '<p class="text--
            error">Please enter your first name</p>';
        }

        if (empty($_POST['last_name'])) {
            $problem = true;
            print '<p class="text--
            error">Please enter your last name</p>';
        }

        if (empty($_POST['email']) || 
        (substr_count($_POST['email'], '@') != 1) ) {
            $problem = true;
            print '<p class="text--
            error">Please enter your email address</p>';
        }

        if (!$problem) { // If there weren't any problems...
        
            // Print a message:
            print '<p class="text--success">Thank you for following The Midnight!</p>';

            // Send the email:
            $body = "Thank you, {$_POST['first_name']}, for registering to receive the latest from The Midnight'.";
            mail($_POST['email'],
            'Registration Confirmation',
            $body, 'From: admin@example.com');

            // Clear the posted values:
            $_POST = [];
        } else{ // Forgot a field.

            print '<p class="text--error">Please try again!</p>';

        }
    } // End of handle form IF.

    // Create the form:
        ?>
        <form action="news.php" method="post" class="form--inline">

        <p><label for="first_name">First Name:</label><input type="text"
        name="first_name" size="30"
        value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>"></p>

        <p><label for="last_name">Last Name:</label><input type="text"
        name="last_name" size="30"
        value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>"></p>

        <p><label for="email">Email Address:</label><input type="email"
        name="email" size="30"
        value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"></p>

        <p><input type="submit" name="submit" value="Register" class="submit"></p>

    </form>

    <h4>The Midnight 'Monsters' album review: L.A. duo deliver most stylish and creative music yet</h4>
    <p>THE MIDNIGHT transcend their career's infancy into an album themed on adolescence and childlike wonder with a hefty 15-track record. 
        Although it is quite a large step away from their previous works, Monsters allows the band to stretch their legs in a more creative direction, 
        with a powerful display of talent.<br><br>
        The Midnight have gone from strength-to-strength over the past few years. Growing more popular each week, 
        the LA-based two-man band consisting of Tim McEwan and Tyler Lyle are gearing up to have an enormous career - 
        if they manage to steady their trajectory.<br><br>
        The Midnight's first studio album, Endless Summer, was an instant classic, with a number of timeless hits featured on it, as well as some unforgettable hooks.
        <img src="images/bar.jpg" class="bar" width="50%">
        2018's follow-up, Kids, was similarly spectacular, but lacked the same punch that Endless Summer drilled into listeners' ears as it focused more on complex
        songwriting and synth foundations than the saxophone choruses they were perhaps best known for. 2020's inclusion in their discography is Monsters - 
        a gorgeous concept album that sets out to tell a story as much as it wants to empathise with listeners.<br><br>
        The introduction song, 1991, gives fans an instant glimpse into the hour-long album that is coming their way. 
        Yes, the '90s are back, and McEwan and Lyle are going to be your guides on this beautiful, melodic, transcendent journey. 
        After a few seconds of an AOL dial-up tone, fans are eased back into The Midnight's true repertoire with the first single from Monsters: America Online. <br><br>
        America Online feels like a scene from William Gibson's Neuromancer, 
        jacking into some form of cyberspace with an ethereal soundscape whilst being blanketed by hushed pastel tones.
        Dance With Somebody is the album's first hint that it does not come from the same band fans have enjoyed so far. 
        The bonafide dance song is exceptional and has some extensive backbeats as well as a fantastic saxophone solo that fans will be dying to hear live. 
        Seventeen and Dream Away both seem to slow the album down a tad for some much-needed breathing room. 
        The former continues the '90s narrative a relentless trap beat and a screaming guitar solo which sounds 
        like it has been ripped from an emotional '80s movie montage.<br><br>
        Dream Away calms things down further by tickling the same drums that may be found in a Genesis song, 
        before The Search for Ecco offers the first interlude of the album, which no doubt allows McEwan to flex his production muscle
        s in a stunning display of ambiance and style. Prom Night is another of the album's singles, 
        and offers yet another ballad to fans with a heavy synth inclusion, and Lyle's gorgeous vocals once again. 
        The peak of the album kicks off from Fire in the Sky, which pits the two members of the band against one another.
        Lyle's vocals merge seamlessly with McEwan's synth prowess, metamorphosing into a heavy song with a unique and modern look into the pair's creativity.<br><br>
        Swiftly following Fire in the Sky is Monsters - the album's namesake - and perhaps the strongest floor-filler track. 
        Monsters feels like the earlier days of The Midnight, with a powerful chorus, heartfelt lyrics, and an emphasis on a deep bass that doesn't quit. 
        Helvetica, another interlude, grants another breath before being gut-punched by Brooklyn - Lyle's strongest vocal performance on the album. 
        Endearingly personal and dripping in palpable emotion, Brooklyn is one of the pillars of this album, 
        and will go down as one of The Midnight's strongest songs - despite its lack of signature sax.<br><br>
        Night Skies and Last Train round off the album alongside another interlude - City Dreams - giving a powerful end to the album. 
        Night Skies gives McEwan yet another opportunity to show off his production prowess with a gorgeous solo and an ear-ringing amount of bass.
        It cements itself as the ultimate Outrun song of the album. Many bars will be playing this through a pale neon light.
        Last Train in particular places Lyle's silky vocals on a pedestal once again as he tells listeners 'goodbye' and 'we are a beating heart.</p><br><br>


    <h4>The Midnight Share “Dance With Somebody,” Discuss New Record</h4>
    <p><img src="images/blue.jpg" class="blue">
        “The idea of social isolation is not new,” The Midnight’s Tyler Lyle said last May, long before our current era of social distancing. 
        “It’s an old idea, it’s just that now, it’s so pronounced.” Obviously the singer-songwriter wasn’t talking 
        about COVID—he was talking about the internet and social media: “We are interested in the idea of longing and connection and 
        what it does when your sense of empathy is not being created face to face.”<br><br>
        “As we become more isolated, we crave connection more,” Lyle continued. This tension was one of the animating themes of the synthwave band’s 2018 album,
        KIDS, and it also animates “Dance With Somebody,” which premieres below and will appear on their forthcoming record Monsters. 
        “The record’s about isolation, loneliness, and the adolescent need for connection—how we don’t really realize 
        that we’ve opened ourselves up too much until we get hurt and then we close off,” Lyle tells American Songwriter.
        “It’s always that dynamic of being too guarded or being too open and finding the right balance of how we individuate as people. 
        So ‘Dance With Somebody’ is essentially telling the shy kid in the back of the class not to put up too many barriers and to take off your armor.
        Sometimes it’s Friday night and you just can’t help it, you have to go dancing.”<br><br>
        In “Dance With Somebody”—which follows The Midnight’s latest single, “Deep Blue”—Lyle and producer 
        Tim McEwan deliver a sweeping, synth-driven dance track with a timely message: “Life’s too short to dance by yourself.”
        “Tim is evolving the sound a little bit more,” says Lyle of the record as a whole. 
        “There are a few more ‘90s jams, bass lines. We’re opening the palette a little bit more—in some ways becoming
        a little bit more acoustic and in other ways becoming more dance-focused in different areas.”<br><br>
        

<?php
include('templates/footer.html');
?>
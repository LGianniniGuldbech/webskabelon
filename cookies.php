<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "<p>John Doe</p>";
setcookie($cookie_name, $cookie_value, time() + 60, "/"); // 60 = 1 minute
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min hjemmeside</title>
    <link rel="stylesheet" href="css/cookies.css" /></head>
<body>
<!--BØLGERNE I BUNDEN AF HJEMMESIDEN ER LAVET FRA EN YOUTUBEVIDEO. DEN KAN TILGÅES HER: https://youtu.be/2dPISFndyKg?si=Aat-g-igFD8JYh3L-->

<!--INDHOLD FØR BØLGEN-->
<div class="header">
<center>
        <div class="topnav">
            <a href="index.php">Hjem</a>
            <a href="pages/maps.php">Kort</a>
            <a href="pages/video.php">Video</a>
            <a href="pages/wishes.php">Ønsker</a>
            <a href="pages/about.php">Om mig</a>
            <a class="active" href="">Cookies</a>
        </div>
    
    </img>
    
<h1>Cookies</h1>
<br>
    
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "<p>Cookie named '" . $cookie_name . "' is not set!</p>";
}
else {
   echo "<p>Cookie '" . $cookie_name . "' is set!<br></p>";
   echo "<p>Value is: </p>" . $_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>


        <!--waves container-->
        <div>
            <svg
            class="waves"
            viewBox="0 24 150 28"
            preserveAspectRatio="none"
            shape-rendering="auto"
            >
        <defs>
            <path
            id="gentle-wave"
            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
            />
        </defs>
        <g class="parallax">
            <use
            xlink:href="#gentle-wave"
            x="48"
            y="0"
            fill="rgba(255,255,255,0.7)"
            />
            <use
            xlink:href="#gentle-wave"
            x="48"
            y="3"
            fill="rgba(255,255,255,0.5)"
            />
            <use
            xlink:href="#gentle-wave"
            x="48"
            y="5"
            fill="rgba(255,255,255,0.3)"
            />
            <use
            xlink:href="#gentle-wave"
            x="48"
            y="7"
            fill="#ffffff"
            />
        </g>
    </svg>
    </div>
    </div>

    <!--indhold på bølgen-->
    <div class="content flex">
        <p>Lucas Giannini Guldbech©</p>
    </div>


</body>
</html>
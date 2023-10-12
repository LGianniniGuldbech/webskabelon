<!DOCTYPE html>
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

<br>
<br>
<br>
<h1>Cookies</h1>
<br>
    <div class="farve.php">
    <form action="cookies.php" method="post">
        Skriv dit navn: <input type="text" name="username">
        <input type="submit" value="Sæt Cookie">
    </form>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];

    // cookie udløber dagen after
    setcookie("username", $username, time() + 86400, "/"); 

    header("Location: cookies.php");
    exit;
}
?>

<?php
if(!isset($_COOKIE["username"])) {
  echo "Ugyldig cookie, cookie kunne ikke indstilles!";
} else {
  echo "Cookie '" . "username" . "' er sat!<br>";
  echo "Værdien er: " . $_COOKIE["username"]; 
}
?>

<p><strong><br>Bemærk:</strong> Du skal muligvis genindlæse siden for at se værdien af cookien.</p>

</div>


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
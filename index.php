<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min hjemmeside</title>
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
        <!--BØLGERNE I BUNDEN AF HJEMMESIDEN ER LAVET FRA EN YOUTUBEVIDEO. DEN KAN TILGÅES HER: https://youtu.be/2dPISFndyKg?si=Aat-g-igFD8JYh3L-->
        <!--TEKST GENNERERET AF CHATGPT-->
        <!--COUNTDOWN FUNDET PÅ W3SCHOOLS-->
    <div class="header">
      
        <!--indhold før bølgen-->
        <center>
        <div class="topnav">
            <a class="active" href="">Hjem</a>
            <a href="pages/maps.php">Kort</a>
            <a href="pages/video.php">Video</a>
            <a href="pages/wishes.php">Ønsker</a>
            <a href="pages/about.php">Om mig</a>
            <a href="cookies.php">Cookies</a>
        </div>
    
    </img>
    
<h1>Lucas' hjemmeside </h1>
    
  <!--COUNTDOWN TIL EFTERÅRSFERIE-->
  <h2>Countdown til efterårsferie 2023</h2>
    <p id="demo2"></p>
            
  <script>
      var countDownDate2 = new Date("Oct 13, 2023 15:30:00").getTime();
    
      var y = setInterval(function() {
                
      var now = new Date().getTime();
                
      var distance = countDownDate2 - now;
      
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
    document.getElementById("demo2").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
      
    if (distance < 0) {
      clearInterval(y);
      document.getElementById("demo2").innerHTML = "UDLØBET";
    }
   }, 1000);
  </script>

<!--COUNTDOWN TIL VINTERFERIE-->
<h2>Countdown til vinterferie 2023</h2>
<p id="demo3"></p>

<script>
  var countDownDate3 = new Date("Dec 21, 2023 15:30:00").getTime();
  
  var z = setInterval(function() {
    
    var now = new Date().getTime();
    
    var distance = countDownDate3 - now;
    
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  document.getElementById("demo3").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
  
  if (distance < 0) {
    clearInterval(y);
    document.getElementById("demo3").innerHTML = "UDLØBET";
  }
}, 1000);
</script>

<!--COUNTDOWN TIL STUDIETUR-->
<h2>Countdown til studietur</h2>
<p id="demo"></p>

<script>
  var countDownDate = new Date("Feb 26, 2024 8:15:00").getTime();
  
var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "UDLØBET";
  }
}, 1000);
</script>

<!--COUNTDOWN TIL DIMMISIONSDAG-->
<h2>Countdown til dimmisionsdag</h2>
<p id="demo4"></p>

<script>
  var countDownDate4 = new Date("June 25, 2025").getTime();
  
  var w = setInterval(function() {
  
    var now = new Date().getTime();
  
    var distance = countDownDate4 - now;
  
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
    document.getElementById("demo4").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
  
    if (distance < 0) {
      clearInterval(w);
      document.getElementById("demo4").innerHTML = "TILLYKKE, DU ER DIMMITERET FRA GYMNASIET";
    }
  }, 1000);
  </script>
  
  <br>
  <br>
  <script>
    function Updatedata(){
      var datoer = [new Date("")]
    }

    </script>












    <br>
    <br>
    
    <div class="billeder">
        <img class="polaroid" src="images/summer1.jpg" alt="summer 1">
        <img class="polaroid2" src="images/summer2.jpg" alt="summer 2">
        <img class="polaroid3" src="images/summer3.jpg" alt="summer 3">
        <img class="polaroid4" src="images/summer4.jpg" alt="summer 4">
    </div>
    
    </center>

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
    <!--content-->
    
    
    <div class="content flex">
      <p>Lucas Giannini Guldbech©</p>
    </div>
</body>
</html>
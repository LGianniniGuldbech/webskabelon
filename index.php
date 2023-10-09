<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min hjemmeside</title>
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
        <!--BØLGERNE I BUNDEN AF HJEMMESIDEN ER LAVET FRA EN YOUTUBEVIDEO. DEN KAN TILGÅES HER: https://youtu.be/2dPISFndyKg?si=Aat-g-igFD8JYh3L-->
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
    <p id="demo"></p>
            
  <script>
      var countDownDate0 = new Date("Oct 13, 2023 15:30:00").getTime();
    
      var y = setInterval(updateTimer0, 1000);

      function updateTimer0() {
                
        var now = new Date().getTime();
                  
        var distance = countDownDate0 - now;
        
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
      document.getElementById("demo").innerHTML = days + "d " + hours + "t " + minutes + "m " + seconds + "s ";
        
      if (distance < 0) {
        clearInterval(y);
        document.getElementById("demo").innerHTML = "UDLØBET";
      }
    }

    updateTimer0();
  
  </script>

<!--COUNTDOWN TIL VINTERFERIE-->
<h2>Countdown til Juleaftensdag 2023</h2>
<p id="demo1"></p>

<script>
      var countDownDate1 = new Date("Dec 24, 2023").getTime();
    
      var a = setInterval(updateTimer1, 1000);

      function updateTimer1() {
                
        var now = new Date().getTime();
                  
        var distance = countDownDate1 - now;
        
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
      document.getElementById("demo1").innerHTML = days + "d " + hours + "t " + minutes + "m " + seconds + "s ";
        
      if (distance < 0) {
        clearInterval(a);
        document.getElementById("demo1").innerHTML = "UDLØBET";
      }
    }

    updateTimer1();
  
  </script>

<!--COUNTDOWN TIL STUDIETUR-->
<h2>Countdown til studietur 2024</h2>
<p id="demo2"></p>

<script>
      var countDownDate2 = new Date("Feb 16, 2024").getTime();
    
      var b = setInterval(updateTimer2, 1000);

      function updateTimer2() {
                
        var now = new Date().getTime();
                  
        var distance = countDownDate2 - now;
        
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
      document.getElementById("demo2").innerHTML = days + "d " + hours + "t " + minutes + "m " + seconds + "s ";
        
      if (distance < 0) {
        clearInterval(b);
        document.getElementById("demo2").innerHTML = "UDLØBET";
      }
    }

    updateTimer2();
  
  </script>

<!--COUNTDOWN TIL DIMMISIONSDAG-->
<h2>Countdown til dimmisionsdag 2025</h2>
<p id="demo3"></p>

<script>
      var countDownDate3 = new Date("Jun 25, 2025").getTime();
    
      var c = setInterval(updateTimer3, 1000);

      function updateTimer3() {
                
        var now = new Date().getTime();
                  
        var distance = countDownDate3 - now;
        
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
      document.getElementById("demo3").innerHTML = days + "d " + hours + "t " + minutes + "m " + seconds + "s ";
        
      if (distance < 0) {
        clearInterval(c);
        document.getElementById("demo3").innerHTML = "TILLYKKE, DU ER DIMMITERET FRA GYMNASIET!";
      }
    }

    updateTimer3();
  
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

    <!--INDHOLD PÅ BØLGEN-->
    <div class="content flex">
      <p>Lucas Giannini Guldbech©</p>
    </div>
</body>
</html>
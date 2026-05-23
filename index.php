<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Website Under Maintenance</title>

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    :root{
      --primary:#5d5fef;
      --secondary:#7f7fff;
      --dark:#202047;
      --light:#f7fbff;
      --text:#6b7280;
      --white:#ffffff;
    }

    body{
      font-family:'Poppins', sans-serif;
      overflow:hidden;
      background:linear-gradient(135deg,#e8f5ff 0%,#d7ecff 50%,#eaf8ff 100%);
      height:100vh;
      width:100%;
      position:relative;
    }

    /* BACKGROUND GLOW */
    .bg-circle{
      position:absolute;
      border-radius:50%;
      filter:blur(100px);
      opacity:0.4;
      animation:float 8s infinite ease-in-out;
    }

    .bg-circle.one{
      width:350px;
      height:350px;
      background:#8fd3ff;
      top:-100px;
      left:-80px;
    }

    .bg-circle.two{
      width:300px;
      height:300px;
      background:#7b7cff;
      bottom:-120px;
      right:-80px;
      animation-delay:2s;
    }

    @keyframes float{
      0%,100%{
        transform:translateY(0px);
      }
      50%{
        transform:translateY(20px);
      }
    }

    /* MAIN CONTAINER */
    .container{
      width:100%;
      height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:40px;
      position:relative;
      z-index:10;
    }

    .maintenance-wrapper{
      width:100%;
      max-width:1400px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:60px;
    }

    /* LEFT CONTENT */
    .content{
      flex:1;
      max-width:550px;
      animation:slideLeft 1s ease;
    }

    @keyframes slideLeft{
      from{
        opacity:0;
        transform:translateX(-80px);
      }
      to{
        opacity:1;
        transform:translateX(0);
      }
    }

    .badge{
      display:inline-flex;
      align-items:center;
      gap:10px;
      padding:10px 18px;
      background:rgba(255,255,255,0.8);
      backdrop-filter:blur(10px);
      border:1px solid rgba(255,255,255,0.5);
      border-radius:50px;
      color:var(--primary);
      font-size:14px;
      font-weight:600;
      margin-bottom:25px;
      box-shadow:0 10px 25px rgba(0,0,0,0.05);
    }

    .badge span{
      width:10px;
      height:10px;
      background:#00d26a;
      border-radius:50%;
      animation:pulse 1.5s infinite;
    }

    @keyframes pulse{
      0%{
        transform:scale(1);
        opacity:1;
      }
      100%{
        transform:scale(2);
        opacity:0;
      }
    }

    h1{
      font-size:68px;
      line-height:1.1;
      color:var(--dark);
      margin-bottom:25px;
      font-weight:800;
    }

    h1 span{
      color:var(--primary);
    }

    p{
      font-size:17px;
      line-height:1.8;
      color:var(--text);
      margin-bottom:35px;
    }

    /* BUTTONS */
    .button-group{
      display:flex;
      gap:20px;
      flex-wrap:wrap;
      margin-bottom:45px;
    }

    .btn{
      text-decoration:none;
      padding:16px 28px;
      border-radius:14px;
      font-weight:600;
      transition:0.4s;
      display:inline-flex;
      align-items:center;
      gap:12px;
      font-size:15px;
    }

    .btn-primary{
      background:linear-gradient(135deg,var(--primary),var(--secondary));
      color:white;
      box-shadow:0 15px 30px rgba(93,95,239,0.35);
    }

    .btn-primary:hover{
      transform:translateY(-5px);
      box-shadow:0 20px 40px rgba(93,95,239,0.45);
    }

    .btn-secondary{
      background:white;
      color:var(--dark);
      border:1px solid rgba(0,0,0,0.08);
      box-shadow:0 10px 25px rgba(0,0,0,0.06);
    }

    .btn-secondary:hover{
      transform:translateY(-5px);
    }

    /* COUNTDOWN */
    .countdown{
      display:flex;
      gap:18px;
      flex-wrap:wrap;
    }

    .time-box{
      min-width:110px;
      background:rgba(255,255,255,0.75);
      backdrop-filter:blur(15px);
      border-radius:24px;
      padding:25px 15px;
      text-align:center;
      box-shadow:0 15px 35px rgba(0,0,0,0.06);
      border:1px solid rgba(255,255,255,0.7);
      transition:0.3s;
    }

    .time-box:hover{
      transform:translateY(-8px);
    }

    .time-box h2{
      font-size:42px;
      color:var(--primary);
      margin-bottom:5px;
      font-weight:700;
    }

    .time-box small{
      color:var(--text);
      font-weight:500;
      letter-spacing:1px;
    }

    /* RIGHT ILLUSTRATION */
    .illustration{
      flex:1;
      position:relative;
      animation:slideRight 1s ease;
    }

    @keyframes slideRight{
      from{
        opacity:0;
        transform:translateX(80px);
      }
      to{
        opacity:1;
        transform:translateX(0);
      }
    }

    .illustration img{
      width:100%;
      max-width:700px;
      animation:floatImage 4s ease-in-out infinite;
      filter:drop-shadow(0 30px 40px rgba(0,0,0,0.15));
    }

    @keyframes floatImage{
      0%,100%{
        transform:translateY(0px);
      }
      50%{
        transform:translateY(-15px);
      }
    }

    /* FLOATING SHAPES */
    .shape{
      position:absolute;
      background:rgba(255,255,255,0.4);
      backdrop-filter:blur(10px);
      border-radius:20px;
      animation:rotate 12s linear infinite;
    }

    .shape.one{
      width:80px;
      height:80px;
      top:10%;
      right:10%;
    }

    .shape.two{
      width:50px;
      height:50px;
      bottom:15%;
      left:5%;
      animation-duration:8s;
    }

    .shape.three{
      width:35px;
      height:35px;
      top:40%;
      left:10%;
      animation-duration:10s;
    }

    @keyframes rotate{
      from{
        transform:rotate(0deg);
      }
      to{
        transform:rotate(360deg);
      }
    }

    /* SOCIAL ICONS */
    .socials{
      position:absolute;
      bottom:30px;
      left:50%;
      transform:translateX(-50%);
      display:flex;
      gap:15px;
      z-index:100;
    }

    .socials a{
      width:45px;
      height:45px;
      border-radius:50%;
      background:white;
      display:flex;
      align-items:center;
      justify-content:center;
      text-decoration:none;
      color:var(--primary);
      font-weight:700;
      box-shadow:0 10px 25px rgba(0,0,0,0.08);
      transition:0.3s;
    }

    .socials a:hover{
      transform:translateY(-6px);
      background:var(--primary);
      color:white;
    }

    /* RESPONSIVE */
    @media(max-width:1100px){
      .maintenance-wrapper{
        flex-direction:column;
        text-align:center;
      }

      .content{
        max-width:100%;
      }

      .button-group,
      .countdown{
        justify-content:center;
      }

      h1{
        font-size:52px;
      }

      .illustration img{
        max-width:550px;
      }
    }

    @media(max-width:768px){
      body{
        overflow:auto;
      }

      .container{
        padding:40px 20px 120px;
        height:auto;
        min-height:100vh;
      }

      h1{
        font-size:42px;
      }

      p{
        font-size:15px;
      }

      .time-box{
        min-width:90px;
      }

      .time-box h2{
        font-size:32px;
      }

      .illustration img{
        max-width:100%;
      }
    }

    @media(max-width:500px){
      h1{
        font-size:34px;
      }

      .btn{
        width:100%;
        justify-content:center;
      }

      .button-group{
        flex-direction:column;
      }

      .countdown{
        gap:12px;
      }

      .time-box{
        width:calc(50% - 10px);
      }
    }
  </style>
</head>

<body>

  <!-- BACKGROUND EFFECT -->
  <div class="bg-circle one"></div>
  <div class="bg-circle two"></div>

  <!-- FLOATING SHAPES -->
  <div class="shape one"></div>
  <div class="shape two"></div>
  <div class="shape three"></div>

  <div class="container">

    <div class="maintenance-wrapper">

      <!-- LEFT CONTENT -->
      <div class="content">

        <div class="badge">
          <span></span>
          WEBSITE SEDANG DIPERBAIKI
        </div>

        <h1>
          Website Lagi
          <span>Dioprek Dulu Pak</span>
        </h1>

        <p>
          Tenang pak, bukan error kok. 😎 <br>  
          Tim kami lagi upgrade sistem biar website makin ngebut,
          makin aman, dan nggak kayak tanaman kehabisan Fulka.
          Tunggu bentar ya. Kopi dulu juga boleh.
        </p>

        <!-- COUNTDOWN -->
        <div class="countdown">

          <div class="time-box">
            <h2 id="days">00</h2>
            <small>Hari</small>
          </div>

          <div class="time-box">
            <h2 id="hours">00</h2>
            <small>Jam</small>
          </div>

          <div class="time-box">
            <h2 id="minutes">00</h2>
            <small>Menit</small>
          </div>

          <div class="time-box">
            <h2 id="seconds">00</h2>
            <small>Detik</small>
          </div>

        </div>

      </div>

      <!-- RIGHT ILLUSTRATION -->
      <div class="illustration">
        <img src="https://cdna.iconscout.com/img/sales-banner-home-page-ab.328c8b7.webp" alt="Maintenance Illustration">
      </div>

    </div>

  </div>

  <!-- SOCIAL -->
  <div class="socials">
    <a href="#">A</a>
    <a href="#">T</a>
    <a href="#">A</a>
    <a href="#">S</a>
    <a href="#">I</a>
  </div>

  <!-- JAVASCRIPT -->
  <script>

    // COUNTDOWN TIMER
    const targetDate = new Date();
    const targetDate = new Date("2026-06-23T00:00:00+07:00");

    function updateCountdown(){

      const now = new Date().getTime();
      const distance = targetDate - now;

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

      if(distance < 0){
        clearInterval(interval);

        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("seconds").innerHTML = "00";
      }

    }

    const interval = setInterval(updateCountdown,1000);

    updateCountdown();

  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
  <title>Website Under Maintenance</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary: #5d5fef;
      --primary-light: #7f7fff;
      --primary-glow: rgba(93,95,239,0.18);
      --dark: #1a1a3e;
      --text: #64748b;
      --text-light: #94a3b8;
      --white: #ffffff;
      --surface: rgba(255,255,255,0.72);
      --border: rgba(255,255,255,0.6);
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: linear-gradient(145deg, #edf4ff 0%, #e2ecff 40%, #ede8ff 100%);
      min-height: 100vh;
      width: 100%;
      position: relative;
      overflow-x: hidden;
    }

    /* ─── BG BLOBS ─── */
    .blob {
      position: fixed;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.35;
      pointer-events: none;
      z-index: 0;
      animation: blobFloat 10s ease-in-out infinite;
    }
    .blob-1 { width: clamp(200px,40vw,460px); height: clamp(200px,40vw,460px); background: #93c5fd; top: -8%; left: -8%; }
    .blob-2 { width: clamp(180px,35vw,380px); height: clamp(180px,35vw,380px); background: #a5b4fc; bottom: -8%; right: -6%; animation-delay: 3s; }
    .blob-3 { width: clamp(120px,18vw,220px); height: clamp(120px,18vw,220px); background: #c4b5fd; top: 45%; left: 55%; animation-delay: 6s; }

    @keyframes blobFloat {
      0%,100% { transform: translateY(0px) scale(1); }
      50% { transform: translateY(22px) scale(1.04); }
    }

    /* ─── FLOATING SHAPES ─── */
    .shape {
      position: fixed;
      background: rgba(255,255,255,0.35);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.5);
      border-radius: 18px;
      animation: spinShape 14s linear infinite;
      pointer-events: none;
      z-index: 0;
    }
    .shape-a { width: 72px; height: 72px; top: 12%; right: 8%; }
    .shape-b { width: 44px; height: 44px; bottom: 18%; left: 6%; animation-duration: 9s; }
    .shape-c { width: 30px; height: 30px; top: 58%; left: 12%; animation-duration: 11s; }

    @keyframes spinShape {
      from { transform: rotate(0deg); }
      to   { transform: rotate(360deg); }
    }

    /* ─── LAYOUT ─── */
    .page {
      position: relative;
      z-index: 1;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: clamp(32px, 6vw, 80px) clamp(20px, 5vw, 60px) clamp(80px, 10vw, 100px);
    }

    .wrapper {
      width: 100%;
      max-width: 1300px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: clamp(32px, 5vw, 80px);
    }

    /* ─── LEFT CONTENT ─── */
    .content {
      animation: slideInLeft 0.9s cubic-bezier(0.22,1,0.36,1) both;
    }

    @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-60px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 9px 18px;
      background: var(--surface);
      backdrop-filter: blur(12px);
      border: 1px solid var(--border);
      border-radius: 100px;
      color: var(--primary);
      font-size: clamp(11px, 1.2vw, 13px);
      font-weight: 700;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-bottom: clamp(18px, 3vw, 28px);
      box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    }

    .badge-dot {
      width: 9px;
      height: 9px;
      background: #22c55e;
      border-radius: 50%;
      animation: pulseDot 1.6s ease-out infinite;
      flex-shrink: 0;
    }

    @keyframes pulseDot {
      0%   { transform: scale(1); opacity: 1; }
      100% { transform: scale(2.4); opacity: 0; }
    }

    h1 {
      font-size: clamp(32px, 5.5vw, 72px);
      line-height: 1.08;
      color: var(--dark);
      font-weight: 800;
      letter-spacing: -1px;
      margin-bottom: clamp(16px, 2.5vw, 28px);
    }

    h1 em {
      font-style: normal;
      color: var(--primary);
    }

    .desc {
      font-size: clamp(14px, 1.5vw, 17px);
      line-height: 1.85;
      color: var(--text);
      margin-bottom: clamp(28px, 4vw, 44px);
      max-width: 480px;
    }

    /* ─── COUNTDOWN ─── */
    .countdown {
      display: flex;
      gap: clamp(10px, 1.5vw, 18px);
      flex-wrap: wrap;
      margin-bottom: clamp(32px, 5vw, 0px);
    }

    .time-box {
      background: var(--surface);
      backdrop-filter: blur(16px);
      border: 1px solid var(--border);
      border-radius: clamp(16px, 2vw, 24px);
      padding: clamp(16px, 2.5vw, 28px) clamp(12px, 1.8vw, 18px);
      text-align: center;
      min-width: clamp(72px, 10vw, 115px);
      flex: 1;
      max-width: 130px;
      box-shadow: 0 12px 32px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }

    .time-box:hover { transform: translateY(-6px); }

    .time-num {
      font-size: clamp(28px, 4vw, 48px);
      font-weight: 800;
      color: var(--primary);
      line-height: 1;
      margin-bottom: 6px;
      font-variant-numeric: tabular-nums;
      letter-spacing: -1px;
    }

    .time-label {
      font-size: clamp(10px, 1vw, 12px);
      color: var(--text-light);
      font-weight: 600;
      letter-spacing: 1.2px;
      text-transform: uppercase;
    }

    /* ─── ILLUSTRATION ─── */
    .illustration {
      display: flex;
      align-items: center;
      justify-content: center;
      animation: slideInRight 0.9s cubic-bezier(0.22,1,0.36,1) 0.15s both;
    }

    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(60px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    .illustration img {
      width: 100%;
      max-width: clamp(280px, 45vw, 640px);
      height: auto;
      filter: drop-shadow(0 24px 48px rgba(93,95,239,0.14));
      animation: floatImg 4.5s ease-in-out infinite;
    }

    @keyframes floatImg {
      0%,100% { transform: translateY(0px); }
      50%      { transform: translateY(-16px); }
    }

    /* ─── SOCIALS ─── */
    .socials {
      position: fixed;
      bottom: clamp(16px, 3vw, 30px);
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 12px;
      z-index: 100;
    }

    .socials a {
      width: clamp(38px, 5vw, 46px);
      height: clamp(38px, 5vw, 46px);
      border-radius: 50%;
      background: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: var(--primary);
      font-weight: 800;
      font-size: 13px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.09);
      transition: all 0.3s ease;
    }

    .socials a:hover {
      transform: translateY(-6px);
      background: var(--primary);
      color: white;
    }

    /* ─── TABLET (≤1024px) ─── */
    @media (max-width: 1024px) {
      .wrapper {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 40px;
      }
      .content { order: 1; }
      .illustration { order: 2; }
      .desc { max-width: 100%; }
      .countdown { justify-content: center; }
      .badge { font-size: 11px; }
      h1 { letter-spacing: -0.5px; }
    }

    /* ─── MOBILE (≤640px) ─── */
    @media (max-width: 640px) {
      .page {
        padding: 48px 20px 96px;
        justify-content: flex-start;
        min-height: 100dvh;
      }
      .wrapper { gap: 28px; }
      .countdown {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
      }
      .time-box { max-width: 100%; min-width: unset; }
      .shape-a, .shape-b, .shape-c { display: none; }
      .illustration img { max-width: 90vw; }
    }

    /* ─── TINY (≤380px) ─── */
    @media (max-width: 380px) {
      h1 { font-size: 28px; }
      .badge { padding: 8px 14px; }
      .time-num { font-size: 26px; }
    }

    /* ─── LANDSCAPE MOBILE ─── */
    @media (max-height: 500px) and (orientation: landscape) {
      .page { padding: 24px 40px 72px; flex-direction: row; }
      .wrapper {
        grid-template-columns: 1fr 1fr;
        text-align: left;
      }
      .countdown { justify-content: flex-start; }
      .illustration img { max-width: 280px; }
    }
  </style>
</head>

<body>

  <!-- BG BLOBS -->
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>

  <!-- FLOATING SHAPES -->
  <div class="shape shape-a"></div>
  <div class="shape shape-b"></div>
  <div class="shape shape-c"></div>

  <div class="page">
    <div class="wrapper">

      <!-- LEFT: CONTENT -->
      <div class="content">
        <div class="badge">
          <span class="badge-dot"></span>
          Website Sedang Diperbaiki
        </div>

        <h1>Website Lagi<br><em>Dioprek Dulu Pak</em></h1>

        <p class="desc">
          Tenang pak, bukan error kok. 😎<br>
          Tim kami lagi upgrade sistem biar website makin ngebut,
          makin aman, dan nggak kayak tanaman kehabisan Fulka.
          Tunggu bentar ya. Kopi dulu juga boleh.
        </p>

        <div class="countdown">
          <div class="time-box">
            <div class="time-num" id="days">00</div>
            <div class="time-label">Hari</div>
          </div>
          <div class="time-box">
            <div class="time-num" id="hours">00</div>
            <div class="time-label">Jam</div>
          </div>
          <div class="time-box">
            <div class="time-num" id="minutes">00</div>
            <div class="time-label">Menit</div>
          </div>
          <div class="time-box">
            <div class="time-num" id="seconds">00</div>
            <div class="time-label">Detik</div>
          </div>
        </div>
      </div>

      <!-- RIGHT: ILLUSTRATION -->
      <div class="illustration">
        <img
          src="https://cdna.iconscout.com/img/sales-banner-home-page-ab.328c8b7.webp"
          alt="Ilustrasi maintenance website"
          loading="eager"
        />
      </div>

    </div>
  </div>

  <!-- SOCIALS -->
  <div class="socials">
    <a href="#" aria-label="A">A</a>
    <a href="#" aria-label="T">T</a>
    <a href="#" aria-label="A">A</a>
    <a href="#" aria-label="S">S</a>
    <a href="#" aria-label="I">I</a>
  </div>

  <script>
    const target = new Date();
    target.setDate(target.getDate() + 30);

    function pad(n){ return String(n).padStart(2,'0'); }

    function tick(){
      const diff = target - Date.now();
      if(diff <= 0){
        ['days','hours','minutes','seconds'].forEach(id => document.getElementById(id).textContent = '00');
        return;
      }
      document.getElementById('days').textContent    = pad(Math.floor(diff / 86400000));
      document.getElementById('hours').textContent   = pad(Math.floor(diff % 86400000 / 3600000));
      document.getElementById('minutes').textContent = pad(Math.floor(diff % 3600000 / 60000));
      document.getElementById('seconds').textContent = pad(Math.floor(diff % 60000 / 1000));
    }

    tick();
    setInterval(tick, 1000);
  </script>

</body>
</html>
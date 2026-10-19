<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GOLD RUSSIA — ЗАЛЕТАЙ В ДВИЖ</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body {
    font-family: 'Arial Black', Impact, sans-serif;
    background: #fffbe6;
    color: #0a0a0a;
    overflow-x: hidden;
    line-height: 1.3;
  }

  /* ===== ШУМ + СКАНЛАЙНЫ ===== */
  .noise {
    position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none; z-index: 9999; opacity: 0.05;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  }
  .scanlines {
    position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none; z-index: 9998; opacity: 0.06;
    background: repeating-linear-gradient(0deg, transparent 0px, transparent 3px, #000 3px, #000 4px);
  }

  /* ===== БЕГУЩАЯ СТРОКА ===== */
  .ticker {
    position: fixed; top: 0; left: 0; width: 100%; z-index: 10000;
    background: #0a0a0a; color: #ffd700;
    font-family: Arial, sans-serif; font-weight: 900;
    font-size: 0.85rem; letter-spacing: 3px; text-transform: uppercase;
    padding: 10px 0; overflow: hidden; white-space: nowrap;
    border-bottom: 3px solid #ff3c00;
  }
  .ticker-inner {
    display: inline-block; animation: ticker 20s linear infinite;
    padding-left: 100%;
  }
  .ticker span { color: #ff3c00; margin: 0 20px; }
  @keyframes ticker {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  /* ===== HERO ===== */
  .hero {
    min-height: 100vh;
    background:
      radial-gradient(circle at 20% 20%, #ff6b00 0%, transparent 40%),
      radial-gradient(circle at 80% 80%, #ff3c00 0%, transparent 40%),
      radial-gradient(circle at 50% 50%, #ffe44d 0%, transparent 60%),
      #fffbe6;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    text-align: center; padding: 100px 20px 40px;
    position: relative; overflow: hidden;
  }
  .hero::before {
    content: ''; position: absolute; inset: 0;
    background:
      repeating-linear-gradient(45deg, transparent, transparent 40px, rgba(255,60,0,0.05) 40px, rgba(255,60,0,0.05) 80px);
    pointer-events: none;
  }
  .hero::after {
    content: '';
    position: absolute; bottom: 0; left: 0; width: 100%; height: 200px;
    background: linear-gradient(to top, #fffbe6, transparent);
    pointer-events: none; z-index: 1;
  }
  .hero-content { position: relative; z-index: 2; }

  /* ===== ПЛАВАЮЩИЕ ОБЪЕКТЫ ===== */
  .hero-objects {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none; z-index: 1;
  }
  .float-card {
    position: absolute;
    background: #fff;
    border: 4px solid #0a0a0a;
    border-radius: 0;
    padding: 18px 22px;
    font-family: Arial, sans-serif;
    text-align: left;
    box-shadow: 10px 10px 0 #ff3c00, 14px 14px 0 #0a0a0a;
    animation: float 3s ease-in-out infinite;
    pointer-events: auto;
    min-width: 210px;
    transition: 0.15s;
    transform: rotate(-2deg);
  }
  .float-card:nth-child(2) { transform: rotate(3deg); }
  .float-card:nth-child(3) { transform: rotate(-1deg); }
  .float-card:hover {
    transform: rotate(0deg) scale(1.08);
    box-shadow: 14px 14px 0 #ffd700, 18px 18px 0 #0a0a0a;
    z-index: 10;
  }
  .float-card .card-tag {
    font-size: 0.55rem; text-transform: uppercase; letter-spacing: 2px;
    color: #fff; background: #ff3c00; padding: 4px 10px;
    display: inline-block; margin-bottom: 8px; font-weight: 900;
    transform: skewX(-10deg);
  }
  .float-card .card-title {
    font-size: 1.05rem; color: #0a0a0a; font-weight: 900;
    line-height: 1.1; margin-bottom: 5px;
  }
  .float-card .card-sub {
    font-size: 0.7rem; color: #ff3c00; line-height: 1.4; font-weight: bold;
  }
  .float-card .card-icon { font-size: 2rem; margin-bottom: 6px; display: block; }
  .float-card.car { top: 18%; right: 3%; animation-delay: 0s; }
  .float-card.jetpack { bottom: 24%; left: 3%; animation-delay: -1.5s; box-shadow: 10px 10px 0 #ffd700, 14px 14px 0 #0a0a0a; }
  .float-card.capital { top: 58%; right: 5%; animation-delay: -0.8s; border-color: #ff3c00; box-shadow: 10px 10px 0 #ffd700, 14px 14px 0 #0a0a0a; }
  .float-card.capital .card-title { color: #ff3c00; font-size: 1.2rem; }
  .float-card.capital .card-tag { background: #0a0a0a; }

  @keyframes float {
    0%, 100% { transform: translateY(0) rotate(-2deg); }
    50% { transform: translateY(-14px) rotate(2deg); }
  }

  @media (max-width: 900px) { .hero-objects { display: none; } }

  .hero-tag {
    display: inline-block;
    background: #0a0a0a; color: #ffd700;
    font-family: Arial, sans-serif; font-weight: 900;
    font-size: 0.8rem; letter-spacing: 5px; text-transform: uppercase;
    padding: 12px 28px; margin-bottom: 30px;
    transform: rotate(-3deg) skewX(-8deg);
    box-shadow: 6px 6px 0 #ff3c00;
    animation: shake 0.5s ease-in-out infinite alternate;
  }
  @keyframes shake {
    0% { transform: rotate(-3deg) skewX(-8deg) translateX(0); }
    100% { transform: rotate(-2deg) skewX(-8deg) translateX(2px); }
  }

  .hero h1 {
    font-size: clamp(3.5rem, 14vw, 9rem);
    text-transform: uppercase; letter-spacing: -3px; line-height: 0.85;
    color: #0a0a0a;
    text-shadow: 5px 5px 0 #ffd700, 10px 10px 0 #ff3c00;
    margin-bottom: 15px;
  }
  .hero h1 span {
    color: #ff3c00; display: block;
    text-shadow: 5px 5px 0 #0a0a0a, 10px 10px 0 #ffd700;
    transform: skewX(-8deg);
    animation: glitch 3s infinite;
  }
  @keyframes glitch {
    0%, 90%, 100% { transform: skewX(-8deg) translateX(0); }
    92% { transform: skewX(-8deg) translateX(-4px); }
    94% { transform: skewX(-8deg) translateX(4px); }
    96% { transform: skewX(-8deg) translateX(-2px); }
  }

  .hero-sub {
    max-width: 620px; margin: 30px auto 18px;
    font-family: Arial, sans-serif; font-size: 1.2rem;
    line-height: 1.6; color: #0a0a0a; font-weight: bold;
  }
  .hero-sub strong {
    color: #fff; background: #ff3c00; padding: 2px 8px;
    display: inline-block; transform: skewX(-5deg);
  }

  .hero-bonus {
    display: inline-block;
    background: #ffd700; border: 4px solid #0a0a0a;
    padding: 14px 30px; font-family: Arial, sans-serif;
    font-size: 1rem; color: #0a0a0a; margin-bottom: 30px;
    letter-spacing: 1px; font-weight: 900;
    box-shadow: 6px 6px 0 #ff3c00;
    animation: pulse 1.5s ease-in-out infinite;
    transform: rotate(1deg);
  }
  @keyframes pulse {
    0%, 100% { transform: rotate(1deg) scale(1); }
    50% { transform: rotate(1deg) scale(1.06); box-shadow: 8px 8px 0 #0a0a0a; }
  }
  .hero-bonus strong { color: #ff3c00; font-size: 1.15rem; }

  /* ===== СТАТИСТИКА ===== */
  .hero-stats {
    display: flex; gap: 50px; justify-content: center; flex-wrap: wrap;
    margin: 35px 0; font-family: Arial, sans-serif;
  }
  .hero-stats div { text-align: center; }
  .hero-stats .num {
    display: block; font-size: 2.8rem; font-weight: 900;
    color: #0a0a0a; line-height: 1;
    text-shadow: 3px 3px 0 #ffd700;
  }
  .hero-stats .lbl {
    font-size: 0.7rem; text-transform: uppercase;
    letter-spacing: 3px; margin-top: 8px; color: #ff3c00; font-weight: 900;
  }

  /* ===== КНОПКИ ===== */
  .btn {
    display: inline-block; padding: 24px 64px; margin: 10px;
    background: #ff3c00; color: #fff;
    font-weight: 900; font-size: 1.15rem; text-decoration: none;
    text-transform: uppercase; letter-spacing: 3px;
    border: 4px solid #0a0a0a;
    box-shadow: 8px 8px 0 #0a0a0a;
    transition: 0.1s; cursor: pointer;
    transform: skewX(-8deg);
    position: relative;
    animation: btnPulse 2s ease-in-out infinite;
  }
  @keyframes btnPulse {
    0%, 100% { box-shadow: 8px 8px 0 #0a0a0a; }
    50% { box-shadow: 8px 8px 0 #ffd700, 8px 8px 20px rgba(255,60,0,0.5); }
  }
  .btn:hover {
    transform: skewX(-8deg) translate(-4px, -4px);
    box-shadow: 12px 12px 0 #0a0a0a;
    background: #ffd700; color: #0a0a0a;
    animation: none;
  }
  .btn-outline {
    background: #fff; color: #0a0a0a;
    box-shadow: 8px 8px 0 #ffd700;
    animation: none;
  }
  .btn-outline:hover {
    background: #0a0a0a; color: #ffd700;
    box-shadow: 12px 12px 0 #ff3c00;
  }

  /* ===== СЕКЦИИ ===== */
  .section { padding: 100px 20px; max-width: 1150px; margin: 0 auto; }
  .section-badge {
    display: inline-block; font-family: Arial, sans-serif;
    font-size: 0.75rem; text-transform: uppercase; letter-spacing: 5px;
    color: #ffd700; background: #0a0a0a; padding: 8px 18px;
    margin-bottom: 20px; font-weight: 900;
    transform: skewX(-10deg);
    box-shadow: 4px 4px 0 #ff3c00;
  }
  .section h2 {
    font-size: clamp(2.2rem, 7vw, 4.5rem);
    text-transform: uppercase; letter-spacing: -2px; line-height: 0.95;
    margin-bottom: 25px; color: #0a0a0a;
    text-shadow: 4px 4px 0 #ffd700, 8px 8px 0 #ff3c00;
  }
  .section h2 span { color: #ff3c00; text-shadow: 4px 4px 0 #0a0a0a, 8px 8px 0 #ffd700; }
  .section .desc {
    font-family: Arial, sans-serif; font-size: 1.1rem;
    line-height: 1.8; max-width: 680px; margin-bottom: 50px;
    color: #0a0a0a; font-weight: bold;
  }

  /* ===== ФИШКИ ===== */
  .features-list {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
    gap: 24px;
  }
  .feature-item {
    background: #fff; padding: 38px 32px;
    border: 4px solid #0a0a0a;
    transition: 0.15s; position: relative;
    box-shadow: 8px 8px 0 #ffd700;
    transform: rotate(-0.5deg);
  }
  .feature-item:nth-child(2n) { transform: rotate(0.5deg); box-shadow: 8px 8px 0 #ff6b00; }
  .feature-item:nth-child(3n) { box-shadow: 8px 8px 0 #ff3c00; }
  .feature-item:hover {
    transform: rotate(0deg) translate(-4px, -4px);
    box-shadow: 14px 14px 0 #ff3c00;
    z-index: 2;
  }
  .feature-item::before {
    content: attr(data-num);
    position: absolute; top: 12px; right: 18px;
    font-family: Arial, sans-serif; font-size: 3.5rem;
    font-weight: 900; color: #ffd700;
    line-height: 1; text-shadow: 3px 3px 0 #0a0a0a;
    opacity: 0.9;
  }
  .feature-item h3 {
    font-size: 1.3rem; margin-bottom: 14px; color: #0a0a0a;
    text-transform: uppercase; letter-spacing: 1px;
    border-bottom: 4px solid #ff3c00;
    padding-bottom: 8px; display: inline-block;
    transform: skewX(-5deg);
  }
  .feature-item p {
    font-family: Arial, sans-serif; font-size: 0.95rem;
    line-height: 1.7; color: #222;
  }
  .feature-item p strong {
    color: #fff; background: #ff3c00; padding: 1px 6px; font-weight: 900;
  }

  /* ===== BUGATTI ===== */
  .supercar {
    background:
      repeating-linear-gradient(45deg, #ffd700, #ffd700 20px, #ffe44d 20px, #ffe44d 40px);
    border: 5px solid #0a0a0a;
    padding: 60px 40px; margin-top: 60px;
    position: relative; overflow: hidden; text-align: center;
    box-shadow: 12px 12px 0 #ff3c00;
    transform: rotate(-1deg);
  }
  .supercar::before {
    content: '5';
    position: absolute; top: -60px; right: 20px;
    font-size: 20rem; font-weight: 900;
    color: rgba(255, 60, 0, 0.2);
    line-height: 1; pointer-events: none;
  }
  .supercar h3 {
    font-size: 2.4rem; color: #0a0a0a;
    text-transform: uppercase; letter-spacing: 4px;
    margin-bottom: 10px; position: relative; z-index: 1;
  }
  .supercar .car-name {
    font-size: 2rem; color: #fff; margin-bottom: 20px;
    position: relative; z-index: 1;
    text-shadow: 3px 3px 0 #0a0a0a, 6px 6px 0 #ff3c00;
    transform: skewX(-5deg);
  }
  .supercar p {
    font-family: Arial, sans-serif; color: #0a0a0a;
    font-weight: bold; max-width: 520px; margin: 0 auto;
    line-height: 1.7; position: relative; z-index: 1; font-size: 1.1rem;
  }

  /* ===== БЛОК ЦИФР ===== */
  .community {
    background: #0a0a0a;
    border-top: 8px solid #ffd700;
    border-bottom: 8px solid #ff3c00;
    padding: 100px 20px; text-align: center;
    position: relative; overflow: hidden;
  }
  .community::before {
    content: ''; position: absolute; inset: 0;
    background: repeating-linear-gradient(90deg, transparent, transparent 100px, rgba(255,215,0,0.03) 100px, rgba(255,215,0,0.03) 102px);
    pointer-events: none;
  }
  .community-inner { max-width: 1050px; margin: 0 auto; position: relative; z-index: 1; }
  .community .section-badge {
    background: #ffd700; color: #0a0a0a;
    box-shadow: 4px 4px 0 #ff3c00;
  }
  .community h2 {
    font-size: clamp(2rem, 6vw, 3.5rem);
    text-transform: uppercase; margin-bottom: 15px;
    color: #fff;
    text-shadow: 4px 4px 0 #ff3c00, 8px 8px 0 #ffd700;
  }
  .community h2 span { color: #ffd700; text-shadow: 4px 4px 0 #0a0a0a; }
  .community .sub {
    font-family: Arial, sans-serif; color: #ffd700;
    margin-bottom: 60px; font-size: 1.15rem; font-weight: 900;
    letter-spacing: 2px;
  }
  .stats-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
    gap: 28px; margin-bottom: 60px;
  }
  .stat-box {
    background: #ffd700; border: 4px solid #0a0a0a;
    padding: 38px 20px; transition: 0.15s;
    box-shadow: 8px 8px 0 #ff3c00;
    transform: rotate(-1deg);
  }
  .stat-box:nth-child(2n) { transform: rotate(1deg); box-shadow: 8px 8px 0 #fff; }
  .stat-box:hover {
    transform: rotate(0deg) translate(-4px, -4px) scale(1.03);
    box-shadow: 14px 14px 0 #fff;
  }
  .stat-box .val {
    display: block; font-size: 2.8rem; font-weight: 900;
    color: #0a0a0a; line-height: 1; margin-bottom: 10px;
  }
  .stat-box .desc {
    font-family: Arial, sans-serif; font-size: 0.8rem;
    color: #0a0a0a; text-transform: uppercase;
    letter-spacing: 1px; font-weight: 900;
  }

  .community p.cta-text {
    font-family: Arial, sans-serif; color: #fff;
    font-size: 1rem; line-height: 1.7;
    max-width: 620px; margin: 0 auto;
  }
  .community p.cta-text strong {
    color: #0a0a0a; background: #ffd700;
    padding: 2px 8px; display: inline-block;
    transform: skewX(-5deg);
  }

  /* ===== CTA ===== */
  .cta {
    text-align: center; padding: 140px 20px;
    background:
      radial-gradient(circle at 50% 50%, #ffe44d 0%, transparent 50%),
      radial-gradient(circle at 20% 80%, #ff6b00 0%, transparent 45%),
      radial-gradient(circle at 80% 20%, #ff3c00 0%, transparent 40%),
      #fffbe6;
    position: relative; overflow: hidden;
  }
  .cta::before {
    content: ''; position: absolute; inset: 0;
    background: repeating-linear-gradient(-45deg, transparent, transparent 50px, rgba(255,60,0,0.06) 50px, rgba(255,60,0,0.06) 100px);
    pointer-events: none;
  }
  .cta h2 {
    font-size: clamp(2.5rem, 8vw, 5rem);
    text-transform: uppercase; letter-spacing: -2px;
    margin-bottom: 25px; line-height: 0.95;
    color: #0a0a0a;
    text-shadow: 5px 5px 0 #ffd700, 10px 10px 0 #ff3c00;
    position: relative; z-index: 1;
  }
  .cta h2 span { color: #ff3c00; text-shadow: 5px 5px 0 #0a0a0a, 10px 10px 0 #ffd700; }
  .cta p {
    font-family: Arial, sans-serif; color: #0a0a0a;
    margin-bottom: 50px; max-width: 520px;
    margin-left: auto; margin-right: auto;
    line-height: 1.8; font-size: 1.1rem; font-weight: bold;
    position: relative; z-index: 1;
  }
  .cta .meta {
    font-family: Arial; font-size: 0.8rem; color: #0a0a0a;
    opacity: 0.6; margin-top: 40px; letter-spacing: 3px;
    text-transform: uppercase; font-weight: 900;
    position: relative; z-index: 1;
  }
  .cta .btn { position: relative; z-index: 1; }

  /* ===== ФУТЕР ===== */
  footer {
    text-align: center; padding: 60px 20px;
    font-family: Arial, sans-serif; font-size: 0.9rem;
    color: #0a0a0a; background: #ffd700;
    border-top: 6px solid #0a0a0a;
  }
  footer .brand {
    font-family: 'Arial Black', sans-serif;
    font-size: 2rem; color: #0a0a0a;
    letter-spacing: 8px; margin-bottom: 24px;
    text-shadow: 4px 4px 0 #ff3c00;
  }
  footer a {
    color: #0a0a0a; margin: 0 14px; text-decoration: none;
    font-weight: 900; transition: 0.15s;
    border-bottom: 3px solid transparent;
  }
  footer a:hover {
    color: #fff; background: #ff3c00;
    padding: 3px 8px; border-bottom-color: #0a0a0a;
  }

  @media (max-width: 480px) {
    .ticker { font-size: 0.7rem; padding: 8px 0; }
    .btn { padding: 18px 40px; font-size: 1rem; }
    .section { padding: 70px 16px; }
    .hero-stats { gap: 24px; }
    .hero-stats .num { font-size: 1.9rem; }
    .feature-item { padding: 30px 24px; }
    .supercar { padding: 45px 24px; }
    .supercar h3 { font-size: 1.6rem; }
    .supercar::before { font-size: 12rem; }
    .stat-box .val { font-size: 2rem; }
  }
</style>
</head>
<body>

<div class="noise"></div>
<div class="scanlines"></div>

<!-- БЕГУЩАЯ СТРОКА -->
<div class="ticker">
  <div class="ticker-inner">
    🔥 GOLD RUSSIA — ЗАЛЕТАЙ В ДВИЖ <span>★</span> 155K+ УСТАНОВОК <span>★</span> 100 000 000 СТАРТОВЫЙ КАПИТАЛ <span>★</span> BUGATTI — 5 ШТУК НА СЕРВЕР <span>★</span> БОНУС-КОД СКИН13 <span>★</span> GOLD RUSSIA — ЗАЛЕТАЙ В ДВИЖ <span>★</span> 155K+ УСТАНОВОК <span>★</span> 100 000 000 СТАРТОВЫЙ КАПИТАЛ <span>★</span> BUGATTI — 5 ШТУК НА СЕРВЕР <span>★</span> БОНУС-КОД СКИН13 <span>★</span>
  </div>
</div>

<!-- ================= HERO ================= -->
<section class="hero">
  <div class="hero-objects">
    <div class="float-card car">
      <span class="card-icon">🏎️</span>
      <div class="card-tag">Эксклюзив</div>
      <div class="card-title">Bugatti Chiron<br>Widebody</div>
      <div class="card-sub">Всего 5 штук на сервере</div>
    </div>
    <div class="float-card jetpack">
      <span class="card-icon">🚀</span>
      <div class="card-tag">Актив</div>
      <div class="card-title">Джетпак</div>
      <div class="card-sub">/jp — и ты в воздухе</div>
    </div>
    <div class="float-card capital">
      <span class="card-icon">💰</span>
      <div class="card-tag">Старт</div>
      <div class="card-title">100 000 000 ₽</div>
      <div class="card-sub">Сразу после входа</div>
    </div>
  </div>

  <div class="hero-content">
    <div class="hero-tag">CRMP · Android · Онлайн</div>

    <h1>
      Залетай<br>
      <span>в движ</span>
    </h1>

    <p class="hero-sub">
      Полная карта. Русские и зарубежные тачки. Тюнинг до неузнаваемости.
      <strong>СТАРТОВЫЙ КАПИТАЛ 100 000 000</strong> сразу после входа.
    </p>

    <div class="hero-bonus">
      🎁 БОНУС-КОД: <strong>СКИН13</strong> → СКИН + VIP PLUS + 25 ДОНАТА
    </div>

    <div class="hero-stats">
      <div><span class="num">155K+</span><span class="lbl">Установок</span></div>
      <div><span class="num">4.74★</span><span class="lbl">Рейтинг</span></div>
      <div><span class="num">19K</span><span class="lbl">Онлайн в месяц</span></div>
    </div>

    <div>
      <a href="https://play.google.com/store/apps/details?id=com.varfa.game" class="btn" target="_blank" rel="noopener">Скачать</a>
      <a href="#features" class="btn btn-outline">Что внутри</a>
    </div>
  </div>
</section>

<!-- ================= ФИШКИ ================= -->
<section class="section" id="features">
  <div class="section-badge">Почему GOLD RUSSIA</div>
  <h2>Здесь есть <span>всё</span></h2>
  <p class="desc">
    Не просто «ещё один мобильный CRMP». Это проект, где ты стартуешь с соткой миллионов,
    гоняешь на Bugatti и лутаешь халяву по бонус-кодам.
  </p>

  <div class="features-list">
    <div class="feature-item" data-num="01">
      <h3>Стартовый капитал</h3>
      <p>Сразу после входа — <strong>100 000 000</strong> игровой валюты. Хватит на первую тачку, квартиру и тюнинг. Дальше — как пойдёт.</p>
    </div>
    <div class="feature-item" data-num="02">
      <h3>Тачки и тюнинг</h3>
      <p>Русские и зарубежные авто. Тонировка, неон, винилы, диски, занижение. <strong>Bugatti Chiron Widebody</strong> — всего 5 штук на сервер. Успей.</p>
    </div>
    <div class="feature-item" data-num="03">
      <h3>Джетпак</h3>
      <p>Команда <strong>/jp</strong> — и ты в воздухе. Вся карта в твоём распоряжении. Никаких ограничений.</p>
    </div>
    <div class="feature-item" data-num="04">
      <h3>Экономика без лимитов</h3>
      <p><strong>Лимиты валюты сняты</strong>. Глобальное обновление графики. Новый авторынок. Всё, чтобы ты не упёрся в потолок.</p>
    </div>
    <div class="feature-item" data-num="05">
      <h3>Скины и роли</h3>
      <p>Бандит, врач, ДПС, доставщик. Скин Алекса Мерсера с ускоренным бегом — по бонус-коду <strong>СКИН13</strong>.</p>
    </div>
    <div class="feature-item" data-num="06">
      <h3>Живое сообщество</h3>
      <p><strong>~16 000</strong> подписчиков в Telegram. Конкурсы, выплаты блогерам, движ каждый день. Ты не будешь играть в одиночку.</p>
    </div>
  </div>

  <div class="supercar">
    <h3>Эксклюзив</h3>
    <div class="car-name">Bugatti Chiron Widebody</div>
    <p>Всего 5 штук на сервере. Если увидишь на дороге — это уже событие. Если сядешь за руль — легенда.</p>
  </div>
</section>

<!-- ================= БЛОК ЦИФР ================= -->
<section class="community">
  <div class="community-inner">
    <div class="section-badge">Проект в цифрах</div>
    <h2>Это не <span>пустышка</span></h2>
    <p class="sub">Реальные люди. Реальные выплаты. Реальный движ.</p>

    <div class="stats-grid">
      <div class="stat-box">
        <span class="val">430 000+ ₽</span>
        <span class="desc">Выплачено блогерам</span>
      </div>
      <div class="stat-box">
        <span class="val">15 900+</span>
        <span class="desc">Подписчиков в Telegram</span>
      </div>
      <div class="stat-box">
        <span class="val">50 000 ₽</span>
        <span class="desc">Призовой фонд конкурса</span>
      </div>
      <div class="stat-box">
        <span class="val">100 000 000</span>
        <span class="desc">Стартовый капитал</span>
      </div>
    </div>

    <p class="cta-text">
      Хочешь так же? Снимай ролики по GOLD RUSSIA для TikTok или YouTube Shorts — получай донат-монеты и реальные выплаты на карту. Заявки через бота <strong>@goldgamemediabot</strong> в Telegram.
    </p>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="cta" id="download">
  <h2>Хватит смотреть.<br><span>Пора играть.</span></h2>
  <p>
    Скачай APK или установи из Google Play. Введи ник. Забери 100 миллионов.
    Дальше — сам.
  </p>

  <a href="https://play.google.com/store/apps/details?id=com.varfa.game" class="btn" target="_blank" rel="noopener">Google Play</a>
  <a href="https://apkpure.com/gold-russia/com.varfa.game" class="btn btn-outline" target="_blank" rel="noopener">Скачать APK</a>

  <p class="meta">Android 8.0+ · Бесплатно · 4.74★</p>
</section>

<!-- ================= FOOTER ================= -->
<footer>
  <div class="brand">GOLD RUSSIA</div>
  <p>CRMP на твоём телефоне</p>
  <p style="margin-top:24px;">
    <a href="https://t.me/goldrussiam" target="_blank" rel="noopener">Telegram</a>
    <a href="https://forum.goldmobile.net" target="_blank" rel="noopener">Форум</a>
    <a href="https://goldmobile.net" target="_blank" rel="noopener">Сайт</a>
  </p>
</footer>

</body>
</html>
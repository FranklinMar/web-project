<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="http://fonts.googleapis.com">
  <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
  <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <title>Про нас</title>
  <link rel="stylesheet" type="" href="/css/aboutus.css">
  <link rel="stylesheet" type="" href="/css/darkbackground.css">
  <link rel="stylesheet" type="" href="/css/all.css">
</head>

<body>
  <nav>
    <span class="left">
      <a href="/welcome" class="logo">
        <img src="/img/logotype.png" class="logo-img" alt="Logo">
        <div class="text">Galactic games</div>
      </a>
      <a href="/aboutus" class="link">
        <div class="text">Про нас</div>
        <img src="/img/aboutus.svg" alt="About Us">
      </a>
      <a href="#" class="link" style="display: none;">
        <div class="text">Підтримка</div>
        <img src="/img/onlinesup.svg" alt="Support">
      </a>
      <a href="#" class="link" style="display: none;">
        <div class="text">Спільнота</div>
        <img src="/img/comm.svg" alt="Community">
      </a>
    </span>
    <span class="right">
      <a href="/shop" class="link">
        <div class="text">Крамниця</div>
        <img src="/img/shop.svg" alt="Shop">
      </a>
      <!-- <a href="/login" class="link">
            <div class="text">Вхід</div>
            <img src="/img/acc.svg" alt="Log in">
          </a> -->
      @if (session()->has('login') && session()->has('password'))
      <a href="/basket" class="link">
        <div class="text">Корзина</div>
        <img src="/img/basket.svg" alt="Cart">
      </a>
      <a href="/logout" class="link">
        <div class="text">Вихід</div>
        <img src="/img/acc.svg" alt="Log out">
      </a>
      @else
      <a href="/login" class="link">
        <div class="text">Вхід</div>
        <img src="/img/acc.svg" alt="Log in">
      </a>
      @endif
      <button class="menu">
        <div>
          <svg></svg>
          <svg></svg>
          <svg></svg>
        </div>
      </button>
    </span>
  </nav>
  <main>
    <div class="main">
      <h1>Про Galactic Games</h1>
      <ul>
        <li>Galactic Games - це провідна компанія, заснована в Україні, з інтерактивних розваг і платформа
          постачання та продажу відеоігор різних платформ.</li>
        <li>Завдяки партнерству з провідними компаніями поширювачами та розробниками відеоігор, а також їх
          платформ з інтерактивними розвагами, наша платформа дає можливість клієнтам та споживачам придбати
          контент з різних платформ.</li>
        <li>Раціональні ціни. Наша компанія дає можливість купувати ігри за доступними та справедливими цінами в
          залежності від регіону проживання клієнта.</li>
        <li>Стрімкий розвиток. Завдяки сучасним технологіям, наша компанія створює та покращує даний проект для
          більш якісного обслуговування споживачів.</li>
      </ul>
      <img src="/img/logotype.png" alt="Galactic Games Logo">
    </div>
    <footer>
      <div class="left">
        <div class="logo">
          <img src="/img/logotype.png" class="logo-img" alt="Galactic games">
          <div class="text">Galactic games</div>
        </div>
        <div class="content">
          © 2022 Galactic games Company. Усі права захищено. Усі торговельні марки є власністю відповідних власників у
          США та інших країнах. Усі ціни вказані з урахуванням ПДВ (за потреби).
        </div>
      </div>
      <div class="right">
        <div class="content">
          Слідкуйте за нами
        </div>
        <div class="media">
          <a href="https://twitter.com/"><img src="/img/twitter.svg" alt="Twitter link"></a>
          <a href="https://www.facebook.com/"><img src="/img/facebook.svg" alt="Facebook link"></a>
          <a href="https://web.telegram.org/"><img src="/img/telegram.svg" alt="Telegram link"></a>
        </div>
      </div>
    </footer>
  </main>
</body>

</html>
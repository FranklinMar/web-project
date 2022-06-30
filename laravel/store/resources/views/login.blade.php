<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="http://fonts.googleapis.com">
  <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
  <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <title>Log in</title>
  <link rel="stylesheet" type="" href="/css/login.css">
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
      <a href="/login" class="link">
        <div class="text">Вхід</div>
        <img src="/img/acc.svg" alt="Log in">
      </a>
      <button class="menu"><div>
        <svg></svg>
        <svg></svg>
        <svg></svg>
      </div></button>
    </span>
  </nav>
  <div class="background">
    <div class="mask">
    </div>
    <img src="/img/loginbackground.png" alt="Game list">
  </div>
  <main>
    <div class="main">
        <div id="login" style="display: contents">
        <h1>Увійти</h1>
        <form action="login" method="POST" style="display: contents">
        <div class="fields">
          <label>
            @csrf
            <input name="email" type="text" placeholder="Логін">
          </label><!--class="field" -->
          <label>
            @csrf
            <input name="password" type="password" placeholder="Пароль">
          </label><!--class="field" -->
        </div>
        <div class="action">
          <button class="button" type="submit">
            Увійти
          </button>
          <div class="options">
            <a href="#"><small>Забули свій пароль?</small></a>
            <a href="/signup"><small>Зареєструватись</small></a>
          </div>
        </div>
      </form>
      </div>
      <div id="signup" style="display: none">
        <h1>Реєстрація</h1>
        <form action="signup" method="POST" style="display: contents">
        <div class="fields">
          <label>
            <input name="login" type="text" placeholder="Логін">
          </label><!--class="field" -->
          <label>
            <input name="email" type="email" placeholder="Email">
          </label>
          <label>
            <input name="createpwd" type="password" placeholder="Пароль">
          </label><!--class="field" -->
          <label>
            <input name="confirmpwd" type="text" placeholder="Повторіть пароль">
          </label>
        </div>
        <div class="action">
          <button class="button" type="submit" form="sign">
            Зареєструватись
          </button>
          <div class="options">
            <a href="/login"><small>Зареєстровані? Увійти</small></a>
          </div>
        </div>
      </form>
      </div>
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
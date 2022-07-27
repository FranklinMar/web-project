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

      @if (session()->has('login') && session()->has('password'))
      <a href="/basket" class="link">
        <div class="text">Корзина</div>
        <img src="/img/basket.svg" alt="Cart">
      </a>
      <!-- <form action="/logout" style="display:contents;" method="POST"> -->
      <!-- <button type="submit"style="cursor: pointer; display: contents;"> -->
      <a href="/logout" class="link">
        <div class="text">Вихід</div>
        <img src="/img/acc.svg" alt="Log out">
      </a>
      <!-- </button> -->
      <!-- </form> -->
      @else
      <a href="/login" class="link">
        <div class="text">Вхід</div>
        <img src="/img/acc.svg" alt="Log in">
      </a>
      @endif
      <!-- @if (Cookie::has('login') && Cookie::has('password'))
      <a href="/basket" class="link">
        <div class="text">Корзина</div>
        <img src="/img/basket.svg" alt="Cart">
      </a>
      <a href="/logout" class="link">
        <div class="text">Вихід</div>
        <img src="/img/acc.svg" alt="Log in">
      </a>
      @else
      <a href="/login" class="link">
        <div class="text">Вхід</div>
        <img src="/img/acc.svg" alt="Log in">
      </a>
      @endif -->
      <!-- @if (Cookie::has('login') && Cookie::has('password'))
      <a href="/basket" class="link">
        <div class="text">Корзина</div>
        <img src="/img/basket.svg" alt="Cart">
      </a>
      @endif
      <a href="{{ (Cookie::has('login') && Cookie::has('password')) ? '/logout' : '/login' }}" class="link">
        <div class="text">{{ (Cookie::has('login') && Cookie::has('password')) ? 'Вихід' : 'Вхід' }}</div>
        <img src="/img/acc.svg" alt="Account">
      </a> -->
      <div class="menu">
        <div class="button" tabindex="0"> <!-- TODO Увага сюди на tabindex="0"-->
          <svg></svg>
          <svg></svg>
          <svg></svg>
        </label>
        <div class="bg"></div>
        <div class="slide-in" tabindex="0"> <!-- TODO Увага сюди на tabindex="0"-->
          <div class="nav-content">
            <a href="/welcome" class="logo">
              <img src="/img/logotype.png" class="logo-img" alt="Logo">
              <div class="text">Galactic games</div>
            </a>
            <div class="flex-row">
              @if (session()->has('login') && session()->has('password'))
                <a href="/logout" class="link">
                  <img src="/img/acc.svg" alt="Log out">
                  <div class="text">Вихід</div>
                </a>
                <p class="cash">$100</p>
              @else
                <a href="/login" class="link">
                  <img src="/img/acc.svg" alt="Log in">
                  <div class="text">Вхід</div>
                </a>
              @endif
            </div>
            <div class="nav-column">
              <a href="/shop" class="link">
                <img src="/img/shop.svg" alt="Shop">
                <div class="text">Крамниця</div>
              </a>
              @if (session()->has('login') && session()->has('password'))
              <a href="/basket" class="link">
                <img src="/img/basket.svg" alt="Cart">
                <div class="text">Корзина</div>
              </a>
              @endif
              <a href="/aboutus" class="link">
                <img src="/img/aboutus.svg" alt="About Us">
                <div class="text">Про нас</div>
              </a>
            </div>
          </div>
          <div class="footer">
            <p class="header">Слідкуйте за нами</p>
            <div class="media">
              <a href="https://twitter.com/"><img src="/img/twitter.svg" alt="Twitter link"></a>
              <a href="https://www.facebook.com/"><img src="/img/facebook.svg" alt="Facebook link"></a>
              <a href="https://web.telegram.org/"><img src="/img/telegram.svg" alt="Telegram link"></a>
            </div>
            <p class="text">© 2022 Galactic games Company. Усі права захищено. Усі торговельні марки є власністю відповідних власників у США та інших країнах.<br>
            Усі ціни вказані з урахуванням ПДВ (за потреби).</p>
          </div>
        </div>
      </button>
    </span>
  </nav>
  <div class="background">
    <div class="mask">
    </div>
    <img src="/img/loginbackground.png" alt="Game list">
  </div>
  <main>
    <div class="main">
      <h1 style="font-size:50px;">Відновлення паролю</h1>
      <p style="max-width: 630px;">{{ (session()->has('login')) ? 'На електронну пошту вашої email адреси було відправлено лист з кодом підтвердження входу в акаунт. Будь ласка, введіть даний код у поле внизу.' : 
        'Будь ласка, введіть логін вашого акаунту у поле внизу.' }}</p>
      <form action="/login/verify{{ (session()->has('login')) ? '/code' : '' }}" method="POST" style="display: contents">
        <div class="fields">
          @if (session()->has('login'))
          <label>
            @csrf
            <input required="required" name="code" type="text" placeholder="Код підтвердження">
          </label>
          @else
          <!-- </form> -->
          <!-- <form action="/login/verify" method="POST" style="display: contents"> -->
          <label>
            @csrf
            <input required="required" name="login" type="text" placeholder="Введіть Ваш логін">
          </label>
          @endif
          <!-- @if (session()->has('login'))
          <form action="/login/verify/code" method="POST" style="display: contents">
            <label>
              @csrf
              <input required="required" name="code" type="text" placeholder="Код підтвердження">
            </label>
          </form>
          @else
          <form action="/login/verify" method="POST" style="display: contents">
            <label>
              @csrf
              <input required="required" name="login" type="text" placeholder="Введіть Ваш логін">
            </label>
          </form>
          @endif -->
          @isset ($error)
          <strong class="warning">{{ $error }}</strong>
          @endisset
        </div>
        <div class="action">
          <button class="button" type="submit" onclick="this.form.submit();this.disabled = true;">
            Підтвердити
          </button>
          <div class="options">
            <a href="/login"><small>Увійти</small></a>
            <a href="/signup"><small>Зареєструватись</small></a>
          </div>
        </div>
      </form>
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
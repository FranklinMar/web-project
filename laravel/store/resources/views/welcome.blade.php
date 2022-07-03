<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="http://fonts.googleapis.com">
  <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
  <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="" href="/css/all.css">

  <title>Galactic games store</title>
  <link rel="stylesheet" type="" href="/css/landing.css">
  <link rel="stylesheet" type="" href="/css/darkbackground.css">
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
      <button class="menu">
        <div>
          <svg></svg>
          <svg></svg>
          <svg></svg>
        </div>
      </button>
    </span>
  </nav>
  <div class="slice1">

    <div class="content">
      <div class="flex-column">
        <h1>Starfall of Videogames</h1>
        <p>Пориньте у світ безмежних можливостей у далекій-далекій галактиці магазину відеоігор
          Galactic Games Store.</p>
        <a href="/shop" class="button">
          <p>Крамниця</p>
          <img src="/img/shuttleLink.svg" alt="Перейти до крамниці">
        </a>
      </div>
      <img src="/img/maskgalaxy.png" alt="Каталог ігор магазину">
    </div>

  </div>
  <main>
    <div class="slice2">
      <div class="content">
        <h2>Лідери рейтину та популярності</h2>
        <div class="main">
          <button>
            <img src="/img/RocketLeft.svg" alt="Swipe left">
          </button>
          <div class="products">
            <a href="/game/{{ $minecraft->id }}" class="product">
              <img src="/img/minecraft.png" alt="{{ $minecraft->name }}">
              <p>{{ $minecraft->name }}</p>
              <p>{{ number_format((double)$minecraft->price, 2, '.', '') }}</p>
            </a>
            <a href="/game/{{ $portal->id }}" class="product">
              <img src="/img/portal2.png" alt="{{ $portal->name }}">
              <p>{{ $portal->name }}</p>
              <p>{{ number_format((double)$portal->price, 2, '.', '') }}</p>
            </a>
            <a href="/game/{{ $terraria->id }}" class="product">
              <img src="/img/terraria.png" alt="{{ $terraria->name }}">
              <p>{{ $terraria->name }}</p>
              <p>{{ number_format((double)$terraria->price, 2, '.', '') }}</p>
            </a>
          </div>
          <!-- <div class="products">
            <a href="#" class="product">
              <img src="/img/minecraft.png" alt="Minecraft">
              <p>Minecraft</p>
              <p>$25.01</p>
            </a>
            <a href="#" class="product">
              <img src="/img/portal2.png" alt="Portal 2">
              <p>Portal 2</p>
              <p>$20.14</p>
            </a>
            <a href="#" class="product">
              <img src="/img/terraria.png" alt="Terraria">
              <p>Terraria</p>
              <p>$20.14</p>
            </a>
          </div> -->
          <button type="button">
            <img src="/img/RocketRight.svg" alt="Swipe right">
          </button>
        </div>
        <div class="circles">
          <div class="active"></div>
          <div class="active"></div>
          <div class="active"></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="slice2sep">
        <img src="/img/sep1.svg" alt="">
        <svg class="trail"></svg>
      </div>
    </div>
    <div class="slice3">
      <div class="content">
        <h2>Доєднайтесь до SPACE спільноти у Galactic games store</h2>
        <div class="main">
          <img src="/img/community.svg" class="community" alt="Community chat">
          <div class="info">
            Galactic games запрошує вас (отримати найнеймовірніші враження) доєднатися до космічної онлайн спільноти
            з гравцями зі всіх куточків всесвіту.<br><br>Зустрічайте нових людей (та інопланетян), приєднуйтеся до
            груп, спілкуйтеся з людьми! Зі спільнотою розваги не скінчаться ніколи.
          </div>
        </div>
      </div>
      <div class="slice3sep">
        <svg class="trail"></svg>
        <img src="/img/sep2.svg" alt="">
      </div>
    </div>
    <div class="slice4">
      <div class="content">
        <h2>Особливості</h2>
        <div class="main">
          <div class="element">
            <div class="icon">
              <img src="/img/time.svg" alt="Замовлення наперед">
            </div>
            <h3>Preordering games</h3>
            <p>Text</p>
          </div>
          <div class="element">
            <div class="icon">
              <img src="/img/payment.svg" alt="Легко оплачувати">
            </div>
            <h3>Easy payment</h3>
            <p>Text</p>
          </div>
          <div class="element">
            <div class="icon">
              <img src="/img/comcenter.svg" alt="Ігрові центри спільноти">
            </div>
            <h3>Game centers of community</h3>
            <p>Text</p>
          </div>
          <div class="element">
            <div class="icon">
              <img src="/img/game.svg" alt="Розповсюдження ігор онлайн">
            </div>
            <h3>Online game distribution</h3>
            <p>Text</p>
          </div>
        </div>
      </div>
      <div class="slice4sep">
        <img src="/img/sep3.svg" alt="">
        <svg class="trail"></svg>
      </div>
    </div>
    <div class="slice5">
      <div class="content">
        <div class="info">
          <h2>І ще більше подібного...</h2>
          <p>Купуйте та випускайте ігри, читайте відгуки, спілкуйтеся з іншими гравцями та ще багато іншого у
            магазині Galactic games store.</p>
        </div>
        <div class="buttons">
          <a href="/shop" class="button">
            <p>Крамниця</p>
            <img src="/img/playstore.svg" alt="Крамниця">
          </a>
          <a href="/login" class="button">
            <p>Увійти</p>
            <img src="/img/login.svg" alt="Увійти">
          </a>
        </div>
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
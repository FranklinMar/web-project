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

  <title>Game</title>
  <link rel="stylesheet" type="" href="/css/bluebackground.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="/css/game.css" />

  <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
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

  <div class="game-page game-page-group layout">
    <main class="game-page-main layout">
    <div class="menu" style="margin-top: 50px;">
      <div class="menu-panel">
        <div class="flex-row">
          <a href="#">
            <div class="button">
              <img src="/img/categ.svg" alt="Категорії">
              <p>Категорії</p>
            </div>
          </a>
          <a href="#">
            <div class="button">
              <img src="/img/new.svg" alt="Новинки">
              <p>Новинки</p>
            </div>
          </a>
          <a href="#">
            <div class="button">
              <img src="/img/top.svg" alt="Хіти рейтингу">
              <p>Хіти рейтингу</p>
            </div>
          </a>
          <a href="shoppart">
            <div class="button">
              <img src="/img/discount.svg" alt="Особливі пропозиції">
              <p>Особливі пропозиції</p>
            </div>
          </a>
        </div>
        <label class="search">
          <form action="/search" style="display: contents;" method="GET">
            @csrf
            <input class="input" name="search" type="text" placeholder="Пошук">
            <button class="button">
              <img src="/img/search.png" alt="Пошук">
            </button>
          </form>
        </label>
      </div>
    </div>
      <!-- ======= section2 ======= -->
      @isset($game)
      <section class="game-page-section2__section2 layout" style="margin-top: 50px; margin-bottom: 200px;">
        <div class="game-page-section2__flex layout">
          <h1 class="game-page-section2__hero-title layout">{{ $game->name }}</h1>
          <div class="game-page-section2__block14 layout">
            <div class="game-page-section2__block14-item">
              <div class="game-page-section2__block18 layout">
                <!--                        <div style="&#45;&#45;src:url(/assets/2250af3834f531e526d680bd1dcf332a.png)"-->
                <!--                                class="game-page-section2__image3 layout"></div>-->
                <img src="/games/{{ $game->url }}" alt="Poster" style="max-width: 815.86px/*available*/;
                    max-height: 460.51px/*available*/;width:100%;height:100%; object-fit: contain;
                    filter: drop-shadow(-5px -5px 4px rgba(0, 0, 0, 0.25)) drop-shadow(5px 5px 4px rgba(0, 0, 0, 0.25));" class="game-page-section2__image3 layout">
              </div>
            </div>
            <div class="game-page-section2__block14-spacer"></div>
            <div class="game-page-section2__block14-item1">
              <div class="game-page-section2__block15 layout">
                <h2 class="game-page-section2__medium-title4 layout">{{ $game->shortDes }}</h2>
                <div class="game-page-section2__block16 layout">
                  <div class="game-page-section2__block17 layout">
                    <h4 class="game-page-section2__highlights3 layout">RELEASE DATA:</h4>
                    <div class="game-page-section2__block17-spacer"></div>
                    <h4 class="game-page-section2__highlights4 layout">{{ $game->release }}</h4>
                  </div>
                  <div class="game-page-section2__block17 layout">
                    <h4 class="game-page-section2__highlights31 layout">DEVELOPER:</h4>
                    <div class="game-page-section2__block17-spacer1"></div>
                    <h4 class="game-page-section2__highlights4 layout1">{{ $game->dev }}</h4>
                  </div>
                  <div class="game-page-section2__block17 layout">
                    <h4 class="game-page-section2__highlights32 layout">PUBLISHER:</h4>
                    <div class="game-page-section2__block17-spacer2"></div>
                    <h4 class="game-page-section2__highlights4 layout2">{{ $game->pub }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="game-page-section2__block6 layout">
            <div style="--src:url(/img/gradient.png)" class="game-page-section2__block7 layout">
              <div class="game-page-section2__group layout" style="flex-direction: row;">
                <div class="game-page-section2__flex1 layout">
                  <div class="game-page-section2__flex1-item" style="flex: none;">
                    <h1 class="game-page-section2__big-title layout">Buy {{ $game->name }}</h1>
                  </div>
                  <!-- <div class="game-page-section2__flex1-spacer"></div> -->
                  <!-- <div class="game-page-section2__flex1-spacer1"></div> -->
                </div>
                <div class="game-page-section2__flex2 layout" style="align-items: flex-end;">
                  <!--                            <div-->
                  <!--                                    style="&#45;&#45;src:url(/img/steam.svg)"-->
                  <!--                                    class="game-page-section2__icon1 layout"-->
                  <!--                            ></div>-->
                  <div style="display: flex; flex-direction: row; align-content: flex-end; justify-content: right; width:fit-content;">
                    @foreach ($game->platforms as $platform)
                    <img src="/img/{{ $platform->url }}" alt="{{ $platform->name }}" class=" layout" style="max-width: 30px; object-fit: contain;">
                    @endforeach
                  </div>
                  <div class="game-page-section2__block8 layout">
                    <div class="game-page-section2__block8-item">
                      <div class="game-page-section2__block9 layout">
                        <h4 class="game-page-section2__highlights1 layout">${{ number_format((double)$game->price, 2, '.', '') }}</h4>
                      </div>
                    </div>
                    <div class="game-page-section2__block8-spacer" style="flex:none"></div>
                    <div class="game-page-section2__block8-item1" style="width:fit-content; align-items:center; align-content:center; justify-content: center;">
                      <!-- <form id="form" style="display: contents;" action="/game/add/{{ $game->id }}" method="POST"> -->
                      <form style="display: contents;" action="/game/add" method="POST">
                        <!-- <button style="display: conтtents;" type="submit"> -->
                        <!-- <div -->
                        <!-- style="--src:url(/img/addtocart.png)" -->
                        <!-- class="game-page-section2__block10 layout"> -->
                        @csrf
                        <input type="hidden" name="idGame" value="{{ $game->id }}">
                        <button style="--src:url(/img/addtocart.png)" class="game-page-section2__block10 layout" type="submit">
                          <h2 class="game-page-section2__medium-title2 layout" style="width: 100%; height:100%;">Add to Cart</h2>
                          <!-- </div> -->
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="game-page-section2__block11 layout">
              <div class="game-page-section2__block12 layout">
                <div style="--src:url(/img/line.png); right:0; width:100%; height:available" class="game-page-section2__decorator layout"></div>
                <h2 class="game-page-section2__medium-title3 layout">ABOUT THIS GAME</h2>
              </div>
              <div class="game-page-section2__block13 layout">
                <h4 class="game-page-section2__highlights2-box layout">
                  <pre class="game-page-section2__highlights2">

                  {{ $game->description }}

                  </pre>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      @else
      <div class="error">
        <h1> Error 404.</h1><br>
        <p>Sorry but there is no game here you are looking for.</p>
        <a href="/shop"> Return to shop </a>
      </div>
      @endisset
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
  </div>
  <script type="text/javascript">
    AOS.init();
  </script>
</body>

</html>
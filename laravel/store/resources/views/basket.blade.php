<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="http://fonts.googleapis.com">
  <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
  <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="css/basket.css" />

  <script type="text/javascript" src="http://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="http://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
  <title>Basket</title>
  <link rel="stylesheet" type="" href="css/bluebackground.css">
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
  <main style="padding-top: 50px; align-items:center;">
    <div class="menu">
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
          <a href="/shop">
            <div class="button">
              <img src="/img/discount.svg" alt="Особливі пропозиції">
              <p>Особливі пропозиції</p>
            </div>
          </a>
        </div>
        <!--                <div class="search">-->
        <form action="/search" style="display: contents;" method="GET">
          <label class="search">
            <!--style="display: contents"-->
            @csrf
            <input class="input" name="search" type="text" placeholder="Пошук">
            <button>
              <div class="button">
                <img src="/img/search.png" alt="Пошук">
              </div>
            </button>

          </label>
        </form>
        <!--                </div>-->
      </div>
    </div>
    <div class="main">
      <div class="header">
        <h1>Ваш кошик</h1>
        <div class="divider"></div>
        <h2>Ваш гаманець: ${{ number_format((double)$customer->money, 2, '.', '') }}</h2>
        @isset($error)
        <div class="error" style="display:contents;"><a>{{ $error }}</a></div><!--Помилка: -->
        @endisset
      </div>
      <div class="content">
        <div class="games">
          @foreach ($games as $game)
          <div class="game">
            <img src="/games/{{ $game->url }}" alt="">
            <div class="column">
              <div class="row space">
                <div class="info">
                  <h3>{{ $game->name }}</h3>
                  <div class="platforms">
                    @foreach ($game->platforms as $platform)
                    <img src="/platforms/{{ $platform->url }}" alt="{{ $platform->name }}">
                    @endforeach
                  </div>
                </div>
                <h4>${{ number_format((double)($game->price - ($game->price * $game->discount/100)), 2, '.', '') }}</h4>
              </div>
              <form class="row end">
                @csrf
                <input type="hidden" name="idGame" value="{{ $game->id }}">
                <button class="button green" formaction="/basket/buy" formmethod="POST">
                  Придбати зараз
                </button>
                <button class="button purple" formaction="/basket/delete" formmethod="POST">
                  Вилучити
                </button>
              </form>
            </div>
          </div>
          <div class="small-game">
            <div class="info">
              <img src="/games/{{ $game->url }}" alt="">
              <div class="column">
                <h3>{{ $game->name }}</h3>
                <div class="row">
                  <h4>$25.00</h4>
                  <div class="platforms">
                    @foreach ($game->platforms as $platform)
                    <img src="/platforms/{{ $platform->url }}" alt="{{ $platform->name }}">
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <form class="buttons">
              @csrf
              <input type="hidden" name="idGame" value="{{ $game->id }}" style="display: none;">
              <button class="button green" formaction="/basket/buy" formmethod="POST">
                Придбати зараз
              </button>
              <button class="button purple" formaction="/basket/delete" formmethod="POST">
                Вилучити
              </button>
            </form>
          </div>
          @endforeach
        </div>
        <div class="total">
          <!-- <div class="row"> -->
            <h3>Підсумок:</h3>
            <h4>{{ ($total != 0) ? '$'.number_format((double)$total, 2, '.', '') : 'Пусто' }}</h4>
          <!-- </div> -->

        </div>
        <div class="options">
          <a href="/shop" class="button blue">
            Продовжити придбання
          </a>
          <form class="row">
            @csrf
            <input type="hidden" name="idCustomer" value="{{ $customer->id }}">
            @if (count($games) != 0)
            <button class="button green" formaction="/basket/buyall" formmethod="POST">Придбати</button>
            <button class="button purple" formaction="/basket/deleteall" form`method="POST">Вилучити все</button>
            @endif
          </form>
        </div>
        <div class="delivery">
          <h3>ДОСТАВКА</h3>
          <div class="body">
            <div class="image">
              <img src="/img/deliver.svg" alt="">
            </div>
            <div class="column">
              <p>Усі цифрові товари доставляються через цифрові ключі на зазначених платформах.</p>
              <small>Ваші ігри будуть доступні для використання після активації цифрового ключа на платформах партнерів магазину (Steam/EpicGames/GOG/...) в кінці процесу придбання.</small>
            </div>
          </div>
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
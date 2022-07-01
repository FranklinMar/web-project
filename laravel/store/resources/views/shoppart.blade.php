<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="http://fonts.googleapis.com">
  <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
  <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <title>Особливі пропозиції</title>
  <link rel="stylesheet" type="" href="/css/shoppart.css">
  <link rel="stylesheet" type="" href="/css/bluebackground.css">
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
      <!-- <a href="/login" class="link">
            <div class="text">Вхід</div>
            <img src="/img/acc.svg" alt="Log in">
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
  <main>
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
          <a href="shoppart">
            <div class="button">
              <img src="/img/discount.svg" alt="Особливі пропозиції">
              <p>Особливі пропозиції</p>
            </div>
          </a>
        </div>
        <label class="search">
          <form action="search" style="display: contents;">
            @csrf
            <input class="input" name="search" type="text" placeholder="Пошук">
            <button class="button">
              <img src="/img/search.png" alt="Пошук">
            </button>
          </form>
        </label>
      </div>
    </div>
    <h1>Особливі пропозиції</h1>
    <div class="part1">
      <div class="display">
        <div class="options">
          <a href="#">
            <div class="button">
              <p>Детальніше</p>
              <img src="/img/details.svg" alt="Деталі">
            </div>
          </a>
          <a href="#">
            <div class="button">
              <p>Додати до корзини</p>
              <img src="/img/tobasket.svg" alt="Улюблене">
            </div>
          </a>
        </div>
        <div class="data">
          <div class="platforms">
            <img src="/img/steam.svg" alt="Steam">
          </div>
          <p class="text">$15.00</p>
        </div>
      </div>
      <div class="game-column">
        <a href="#" class="game mobile-group">
          <img src="/img/rust.png" alt="Rust">
          <div class="content">
            <p>Rust</p>
            <div class="data">
              <p>$15.00</p>
              <div class="platforms">
                <img src="/img/steam.svg" alt="Steam">
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="game mobile-group">
          <img src="/img/terrariaposter.png" alt="Terraria">
          <div class="content">
            <p>Terraria</p>
            <div class="data">
              <p>$20.14</p>
              <div class="platforms">
                <img src="/img/steam.svg" alt="Steam">
                <img src="/img/gog.svg" alt="Gog">
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="game mobile-group">
          <img src="/img/rdr2.png" alt="Red Dead Redemption 2">
          <div class="content">
            <p>Red Dead Redemption 2</p>
            <div class="data">
              <p>$24.00</p>
              <div class="platforms">
                <img src="/img/steam.svg" alt="Steam">
                <img src="/img/epic.svg" alt="Epic Games Store">
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="game mobile-group">
          <img src="/img/sot.png" alt="Sea of Thieves">
          <div class="content">
            <p>Sea of thieves</p>
            <div class="data">
              <p>$15.00</p>
              <div class="platforms">
                <img src="/img/steam.svg" alt="Steam">
              </div>
            </div>
          </div>
        </a>


        <div class="radio-group">
          <input id="game1" type="radio" name="games" checked="checked">
          <label for="game1">
            <div class="game">
              <!-- class="game active"-->
              <img src="/img/rust.png" alt="Rust">
              <div class="content">
                <p>Rust</p>
                <div class="data">
                  <p>$15.00</p>
                  <div class="platforms">
                    <img src="/img/steam.svg" alt="Steam">
                  </div>
                </div>
              </div>
            </div>
          </label>
          <input id="game2" type="radio" name="games">
          <label for="game2">
            <div class="game">
              <img src="/img/terrariaposter.png" alt="Terraria">
              <div class="content">
                <p>Terraria</p>
                <div class="data">
                  <p>$20.14</p>
                  <div class="platforms">
                    <img src="/img/steam.svg" alt="Steam">
                    <img src="/img/gog.svg" alt="Gog">
                  </div>
                </div>
              </div>
            </div>
          </label>
          <input id="game3" type="radio" name="games">
          <label for="game3">
            <div class="game">
              <img src="/img/rdr2.png" alt="Red Dead Redemption 2">
              <div class="content">
                <p>Red Dead Redemption 2</p>
                <div class="data">
                  <p>$24.00</p>
                  <div class="platforms">
                    <img src="/img/steam.svg" alt="Steam">
                    <img src="/img/epic.svg" alt="Epic Games Store">
                  </div>
                </div>
              </div>
            </div>
          </label>
          <input id="game4" type="radio" name="games">
          <label for="game4">
            <div class="game">
              <img src="/img/sot.png" alt="Sea of Thieves">
              <div class="content">
                <p>Sea of thieves</p>
                <div class="data">
                  <p>$15.00</p>
                  <div class="platforms">
                    <img src="/img/steam.svg" alt="Steam">
                  </div>
                </div>
              </div>
            </div>
          </label>
        </div>
      </div>
    </div>


    <div class="part2">
      <div class="row">
        <div class="buttons">
          <input id="switch1" type="radio" name="switch" checked="checked">
          <label for="switch1" class="button">
            <img src="/img/top.svg" alt="Хіти рейтингу">
            <p>Хіти Рейтингу</p>
          </label>

          <input id="switch2" type="radio" name="switch">
          <label for="switch2" class="button">
            <img src="/img/new.svg" alt="Новинки">
            <p>Новинки</p>
          </label>
        </div>
      </div>
      <div class="flex-column">
        <div class="bar">
          <a>
            <div class="button">
              Переглянути все
            </div>
          </a>
        </div>
        <div class="game-column">
          @isset ($games)
          @foreach ($games as $game)
          <a href="/game/{{ $game->id }}">
            <div class="game">
              <img src="/games/{{ $game->url }}" alt="{{ $game -> name }}">
              <div class="info">
                <h6>{{ $game -> name }}</h6>
                <div class="data">
                  <div class="platforms">
                    @foreach ($game->platforms as $platform)
                    <img src="/platforms/{{ $platform->url }}" alt="{{ $platform->name }}">
                    @endforeach
                  </div>
                  <p>${{ number_format((double)$game->price, 2, '.', '') }}</p>
                </div>
                <p>{{ $game->shortDes }}</p>
              </div>
            </div>
          </a>
          @endforeach
          @endisset
          <!-- <a href="#"><div class="game">
            <img src="/img/gta5.png" alt="Grand Theft Auto V">
            <div class="info">
                <h6>Grand theft auto V: Premium Edition</h6>
                <div class="data">
                    <div class="platforms">
                        <img src="/img/steam.svg" alt="Steam">
                        <img src="/img/epic.svg" alt="Epic Games Store">
                    </div>
                    <p>$25.00</p>
                </div>
                <p>Description...</p>
            </div>
        </div></a>
        <a href="#"><div class="game">
            <img src="/img/gta5.png" alt="Grand Theft Auto V">
            <div class="info">
                <h6>Grand theft auto V: Premium Edition</h6>
                <div class="data">
                    <div class="platforms">
                        <img src="/img/steam.svg" alt="Steam">
                        <img src="/img/epic.svg" alt="Epic Games Store">
                    </div>
                    <p>$25.00</p>
                </div>
                <p>Description...</p>
            </div>
        </div></a> -->
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
    </div>
  </main>
</body>

</html>
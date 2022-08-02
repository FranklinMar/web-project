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
  <main style="display: flex; flex-direction: column; padding-top: 50px">
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
    @isset ($games)
    <div class="basket basket-group layout">
      <div class="basket-flex layout">
        <div class="basket-flex15 layout">
          <div class="basket-txt12 layout">ВАШ КОШИК.</div>
          <div class="basket-txt12 layout">Гаманець: ${{ number_format((double)$customer->money, 2, '.', '') }}</div>
          @isset($error)
          <div class="error" style="display:contents;"><a>Помилка: {{ $error }}</a></div>
          @endisset
          <!--            <div style="&#45;&#45;src:url(//img/line.png)" class="basket-img layout8"></div>-->
          <img src="/img/line.png" class="basket-img layout8" alt="">
        </div>



        <!-- <div class="basket-group6 layout" style="flex-direction: row; justify-content: space-between;"> -->
        <!-- <div class="basket-flex16 layout" style="width:100%;"> -->
        <!-- <div class="basket-flex16-item" style="width:100%;"> max-width: 180px; -->
        <!--                    <div style="&#45;&#45;src:url(//img/gtaposter.png)" class="basket-img3 layout"></div>-->
        <!-- <div class="basket-group6 layout" style="flex-direction: row; justify-content: space-between;">
            <div class="basket-flex16 layout" style="width:100%;">
                <div class="basket-flex16-item" style="width:100%;">
                    <img src="/img/gtaposter.png" class="basket-img3 layout" alt="Постер">
                </div>
                <div class="basket-flex16-spacer"></div>
                <div class="basket-flex16-item1" style="display: contents; width:100%; flex: none;">
                    <div class="basket-flex17 layout" style="width: 100%;">
                        <div class="basket-flex18 layout" style="justify-content: space-between;">
                            <div class="basket-flex18-item" style="flex: none;">
                                <div class="basket-flex19 layout">
                                    <div class="basket-txt13 layout">Grand theft auto V: Premium Edition</div>
                                    <div class="basket-img layout9" style="max-height: 32px;max-width: 120px;
height:100%;width:100%">
                                        <img src="/img/epic.svg" alt="Epic Games Store" style="height: 32px;width: 30px;">
                                        <img src="/img/steam.svg" alt="Steam" style="height: 32px;width: 30px;">
                                    </div>
                                </div>
                            </div>
                            <div class="basket-flex18-spacer"></div>
                            <div class="basket-txt14 layout">$25.00</div>
                        </div>
                        <div class="basket-flex20 layout" style="margin: 7px 0 0 0;justify-content: right; width: auto;">
                            <form style="display:contents;" action="" method="POST">
                            <button style="display:contents;" type="submit">
                            <div class="basket-flex20-item button">
                                <div class="basket-group7 layout"><div class="basket-txt15 layout">Придбати зараз</div></div>
                            </div>
                            </button>
                            </form>
                            <div class="basket-flex20-spacer"></div>
                            <form style="display:contents;" action="" method="POST">
                            <button style="display: contents;" type="submit">
                            <div class="basket-flex20-item1 button">
                                <div class="basket-group8 layout"><div class="basket-txt16 layout">Вилучити</div></div>
                            </div>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        @foreach ($games as $game)
        <div class="basket-group6 layout" style="flex-direction: row; justify-content: space-between;">
          <div class="basket-flex16 layout" style="width:100%;">
            <div class="basket-flex16-item" style="width:100%;">
              <img src="/games/{{ $game->url }}" class="basket-img3 layout" alt="Постер">
            </div>
            <div class="basket-flex16-spacer"></div>
            <div class="basket-flex16-item1" style="display: contents; width:100%; flex: none;">
              <div class="basket-flex17 layout" style="width: 100%;">
                <div class="basket-flex18 layout" style="justify-content: space-between;">
                  <div class="basket-flex18-item" style="flex: none;">
                    <div class="basket-flex19 layout">
                      <div class="basket-txt13 layout">{{ $game->name }}</div>
                      <div class="basket-img layout9" style="max-height: 32px; max-width: 120px; height:100%; width:100%">
                        @foreach ($game->platforms as $platform)
                        <img src="/platforms/{{ $platform->url }}" alt="{{ $platform->name }}" style="height: 32px;width: 30px;">
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="basket-flex18-spacer"></div>
                  <div class="basket-txt14 layout">${{ number_format((double)($game->price - ($game->price * $game->discount/100)), 2, '.', '') }}</div>
                </div>
                <div class="basket-flex20 layout" style="margin: 7px 0 0 0;justify-content: right; width: auto;">
                  <form style="display:contents;" action="/basket/buy" method="POST">
                    @csrf
                    <input type="hidden" name="idGame" value="{{ $game->id }}">
                    <button style="display:contents;" type="submit">
                      <div class="basket-flex20-item button">
                        <div class="basket-group7 layout">
                          <div class="basket-txt15 layout">Придбати зараз</div>
                        </div>
                      </div>
                    </button>
                  </form>
                  <div class="basket-flex20-spacer"></div>
                  <form style="display:contents;" action="/basket/delete" method="POST">
                    @csrf
                    <input type="hidden" name="idGame" value="{{ $game->id }}">
                    <button style="display: contents;" type="submit">
                      <div class="basket-flex20-item1 button">
                        <div class="basket-group8 layout">
                          <div class="basket-txt16 layout">Вилучити</div>
                        </div>
                      </div>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach


        <div class="basket-group9 layout">
          <div class="basket-flex21 layout" style="align-content: flex-end;">
            <div class="basket-flex22 layout" style="flex-direction: row">
              <div class="basket-flex22-item">
                <div class="basket-txt layout1">Підсумок:</div>
              </div>
              <div class="basket-flex22-spacer"></div>
              <div class="basket-flex22-item">
                <div class="basket-txt17 layout">
                  {{ ($total != 0) ? '$'.number_format((double)$total, 2, '.', '') : 'Пусто' }}
                </div>
              </div>
            </div>
            @if (count($games) != 0)
            <form action="/basket/buyall" style="display: contents" method="POST">
              <div class="basket-group10 layout button" style="margin: 0; align-self: flex-end;">
                @csrf
                <input type="hidden" name="idCustomer" value="{{ $customer->id }}">
                <button type="submit" style="display: contents">
                  <div class="basket-txt18 layout">Придбати</div>
                </button>
              </div>
            </form>
            @endif
          </div>
        </div>
        <div class="basket-flex23 layout">
          <a href="/shop" class="basket-flex23-item button">
            <div class="basket-group11 layout">
              <div class="basket-txt19 layout">Продовжити придбання</div>
            </div>
          </a>
          <div class="basket-flex23-spacer"></div>
          @if (count($games) != 0)
          <form style="display:contents;" action="/basket/deleteall" method="POST">
            @csrf
            <input type="hidden" name="idCustomer" value="{{ $customer->id }}">
            <div class="basket-flex23-item1 button">
              <button type="submit" style="display:contents;">
                <div class="basket-group12 layout">
                  <div class="basket-txt20 layout">Вилучити все</div>
                </div>
              </button>
            </div>
          </form>
          @endif
        </div>
        <div class="basket-txt layout2">ДОСТАВКА</div>
        <div class="basket-group13 layout">
          <div class="basket-flex24 layout">
            <div class="basket-flex24-item">
              <div class="basket-group14 layout">
                <!--                        <div style="&#45;&#45;src:url(//img/4.png)" &lt;!&ndash;class="basket-img layout10"&ndash;&gt;></div>-->
                <div class="basket-img layout10">
                  <img src="/img/deliver.svg" style="object-fit: contain; margin: auto" alt="Доставка">
                </div>
              </div>
            </div>
            <div class="basket-flex24-spacer"></div>
            <div class="basket-flex24-item1">
              <div class="basket-flex25 layout">
                <div class="basket-txt21 layout">
                  Усі цифрові товари доставляються через цифрові ключі на зазначених платформах.
                </div>
                <div class="basket-txt22 layout">
                  Ваші ігри будуть доступні для використання після активації цифрового ключа на платформах партнерів
                  магазину (Steam/EpicGames/GOG/...) в кінці процесу придбання.
                </div>
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
    </div>
    @else
    <div class="error">
      <h1> Error 404.</h1><br>
      <p>Sorry but there is no game here you are looking for.</p>
      <a href="/shop"> Return to shop </a>
    </div>
    @endisset
  </main>
  <script type="text/javascript">
    AOS.init();
  </script>
</body>

</html>
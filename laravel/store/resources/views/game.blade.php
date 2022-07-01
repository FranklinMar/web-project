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
    <link
            rel="stylesheet"
            type="text/css"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous"
    />
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

<div class="game-page game-page-group layout">
<main class="game-page-main layout">
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
                        <img src="/games/{{ $game->url }}.png" alt="Poster" style="max-width: 815.86px/*available*/;
                    max-height: 460.51px/*available*/;width:100%;height:100%; object-fit: contain"
                             class="game-page-section2__image3 layout">
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
                <div
                        style="--src:url(/img/gradient.png)"
                        class="game-page-section2__block7 layout"
                >
                    <div class="game-page-section2__group layout">
                        <div class="game-page-section2__flex2 layout">
<!--                            <div-->
<!--                                    style="&#45;&#45;src:url(/img/steam.svg)"-->
<!--                                    class="game-page-section2__icon1 layout"-->
<!--                            ></div>-->
                            <img src="/img/steam.svg" alt="Steam" class="game-page-section2__icon1 layout">
                            <div class="game-page-section2__block8 layout">
                                <div class="game-page-section2__block8-item">
                                    <div class="game-page-section2__block9 layout">
                                        <h4 class="game-page-section2__highlights1 layout">{{ $game->price }}</h4>
                                    </div>
                                </div>
                                <div class="game-page-section2__block8-spacer"></div>
                                <div class="game-page-section2__block8-item1">
                                  <form style="display: contents;" action="/game/add/{{ $game->id }}" method="POST">
                                  <button style="display: contents;" type="submit>
                                    <div
                                            style="--src:url(/img/addtocart.png)"
                                            class="game-page-section2__block10 layout">
                                        <h2 class="game-page-section2__medium-title2 layout">Add to Cart</h2>
                                    </div>
                                  </button>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="game-page-section2__flex1 layout">
                            <div class="game-page-section2__flex1-item">
                                <h1 class="game-page-section2__big-title layout">Buy {{ $game->name }}</h1>
                            </div>
                            <div class="game-page-section2__flex1-spacer"></div>
                            <div class="game-page-section2__flex1-spacer1"></div>
                        </div>
                    </div>
                </div>
                <div class="game-page-section2__block11 layout">
                    <div class="game-page-section2__block12 layout">
                        <div
                                style="--src:url(/img/line.png)"
                                class="game-page-section2__decorator layout"
                        ></div>
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
    <h1> Error 404.<h1><br><p>Sorry but there is no game here you are looking for.</p>
    <a href="/shop"> Return to shop </a>
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
<main>
    <div class="menu">
        <div class="menu-panel">
            <div class="flex-row">
                <a href="#"><div class="button">
                    <img src="photo/categ.svg" alt="Категорії">
                    <p>Категорії</p>
                </div></a>
                <a href="#"><div class="button">
                    <img src="photo/new.svg" alt="Новинки">
                    <p>Новинки</p>
                </div></a>
                <a href="#"><div class="button">
                    <img src="photo/top.svg" alt="Хіти рейтингу">
                    <p>Хіти рейтингу</p>
                </div></a>
                <a href="#"><div class="button">
                    <img src="photo/discount.svg" alt="Особливі пропозиції">
                    <p>Особливі пропозиції</p>
                </div></a>
            </div>
<!--                <div class="search">-->
                <label class="search"><!--style="display: contents"-->
                <form action="project/pages/post.php" method="POST" id="form" style="display: contents">
                    <input class="input" name="search" type="text" placeholder="Пошук">
                    <button type="submit" form="form">
                        <div class="button">
                            <img src="photo/search.png" alt="Пошук">
                        </div>
                    </button>
                </form>
                </label>
<!--                </div>-->
        </div>
    </div>
    <h1>Особливі пропозиції</h1>
    <div class="part1">
        <div class="display">
            <!--<div class="content">-->
                <div class="options">
                    <a href="#"><div class="button">
                        <p>Детальніше</p>
                        <img src="photo/details.svg" alt="Деталі">
                    </div></a>
                    <a href="#"><div class="button">
                        <p>Додати до корзини</p>
                        <img src="photo/tobasket.svg" alt="Улюблене">
                    </div></a>
                </div>
                <div class="data">
                    <div class="platforms">
                        <img src="photo/steam.svg" alt="Steam">
                    </div>
                    <p class="text">$15.00</p>
                </div>
            <!--</div>-->
        </div>
        <div class="game-column">
<!--                <div class="mobile-group">-->
                <a href="#" class="game mobile-group"><!--<div class="game">--><!-- class="game active"-->
                    <img src="photo/rust.png" alt="Rust">
                    <!--<div class="content">
                        <p>Rust</p>
                        <div class="data">
                            <p>$15.00</p>
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                            </div>
                        </div>
                    </div>-->
                    <div class="content">
                        <p>Rust</p>
                        <div class="data">
                            <p>$15.00</p>
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                            </div>
                        </div>
                    </div>
                <!--</div>--></a>
                <a href="#" class="game mobile-group">
                    <img src="photo/terrariaposter.png" alt="Terraria">
                    <div class="content">
                        <p>Terraria</p>
                        <div class="data">
                            <p>$20.14</p>
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                                <img src="photo/gog.svg" alt="Gog">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="game mobile-group">
                    <img src="photo/rdr2.png" alt="Red Dead Redemption 2">
                    <div class="content">
                        <p>Red Dead Redemption 2</p>
                        <div class="data">
                            <p>$24.00</p>
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                                <img src="photo/epic.svg" alt="Epic Games Store">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="game mobile-group">
                    <img src="photo/sot.png" alt="Sea of Thieves">
                    <div class="content">
                        <p>Sea of thieves</p>
                        <div class="data">
                            <p>$15.00</p>
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                            </div>
                        </div>
                    </div>
                </a>
<!--                </div>-->


            <div class="radio-group">
                <input id="game1" type="radio" name="games" checked="checked">
                <label for="game1">
                    <div class="game"><!-- class="game active"-->
                        <img src="photo/rust.png" alt="Rust">
                        <!--<div class="content">
                            <p>Rust</p>
                            <div class="data">
                                <p>$15.00</p>
                                <div class="platforms">
                                    <img src="photo/steam.svg" alt="Steam">
                                </div>
                            </div>
                        </div>-->
                        <div class="content">
                            <p>Rust</p>
                            <div class="data">
                                <p>$15.00</p>
                                <div class="platforms">
                                    <img src="photo/steam.svg" alt="Steam">
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <input id="game2" type="radio" name="games">
                <label for="game2">
                    <div class="game">
                        <img src="photo/terrariaposter.png" alt="Terraria">
                        <div class="content">
                            <p>Terraria</p>
                            <div class="data">
                                <p>$20.14</p>
                                <div class="platforms">
                                    <img src="photo/steam.svg" alt="Steam">
                                    <img src="photo/gog.svg" alt="Gog">
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <input id="game3" type="radio" name="games">
                <label for="game3">
                    <div class="game">
                        <img src="photo/rdr2.png" alt="Red Dead Redemption 2">
                        <div class="content">
                            <p>Red Dead Redemption 2</p>
                            <div class="data">
                                <p>$24.00</p>
                                <div class="platforms">
                                    <img src="photo/steam.svg" alt="Steam">
                                    <img src="photo/epic.svg" alt="Epic Games Store">
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <input id="game4" type="radio" name="games">
                <label for="game4">
                    <div class="game">
                        <img src="photo/sot.png" alt="Sea of Thieves">
                        <div class="content">
                            <p>Sea of thieves</p>
                            <div class="data">
                                <p>$15.00</p>
                                <div class="platforms">
                                    <img src="photo/steam.svg" alt="Steam">
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
                <label for="switch1" class="button"><!--<div class="button active">-->
                    <img src="photo/top.svg" alt="Хіти рейтингу">
                    <p>Хіти Рейтингу</p>
                <!--</div>--></label>

                <input id="switch2" type="radio" name="switch">
                <label for="switch2" class="button"><!--<div>-->
                    <img src="photo/new.svg" alt="Новинки">
                    <p>Новинки</p>
                <!--</div>--></label>
            </div>
        </div>
        <div class="flex-column">
            <div class="bar">
                <a><div class="button">
                    Переглянути все
                </div></a>
            </div>
            <div class="game-column">
                <a href="#"><div class="game">
                    <img src="photo/gta5.png" alt="Grand Theft Auto V">
<!--                        <div class="poster"></div>-->
                    <div class="info">
                        <h6>Grand theft auto V: Premium Edition</h6>
                        <div class="data">
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                                <img src="photo/epic.svg" alt="Epic Games Store">
                            </div>
                            <p>$25.00</p>
                        </div>
                        <p>Description...</p>
                    </div>
                </div></a>
                <a href="#"><div class="game">
                    <img src="photo/gta5.png" alt="Grand Theft Auto V">
                    <div class="info">
                        <h6>Grand theft auto V: Premium Edition</h6>
                        <div class="data">
                            <div class="platforms">
                                <img src="photo/steam.svg" alt="Steam">
                                <img src="photo/epic.svg" alt="Epic Games Store">
                            </div>
                            <p>$25.00</p>
                        </div>
                        <p>Description...</p>
                    </div>
                </div></a>
            </div>
        </div>
        <footer>
            <div class="left">
                <div class="logo">
                    <img src="photo/logotype.png" class="logo-img" alt="Galactic games">
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
                    <a href="https://twitter.com/"><img src="photo/twitter.svg" alt="Twitter link"></a>
                    <a href="https://www.facebook.com/"><img src="photo/facebook.svg" alt="Facebook link"></a>
                    <a href="https://web.telegram.org/"><img src="photo/telegram.svg" alt="Telegram link"></a>
                </div>
            </div>
        </footer>
    </div>
</main>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="http://fonts.googleapis.com">
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="" href="all.css">
    <?php 
    $heads = scandir("project/headers");
    $pages = scandir("project/pages");
    // echo $_GET["p"];
    // print_r($pages);
    $page_name = trim(strip_tags($_GET["p"])); // str_replace(".php", "", $_GET["p"])
    $error = false;

    if (!$page_name) {
        $page_name = "landing";
    } elseif (!in_array($page_name.".php", $pages)) {
        $error = true;
        // echo "<h1 class=></h1><p>Сторінку не знайдено</p>";
    }

    if ($error){
        echo '<title>Galactic games store</title>
        <link rel="stylesheet" type="" href="darkbackground.css">';    
    } else {
        require "./project/headers/$page_name.php";
    }

    // require "../project/headers/landing.php"; 
    echo '</head><body>';
    
    if ($error) {
        echo '<div class="error">
            <h1 class="error-header">Error 404.</h1>
            <p class="error-text">Sorry. Page not found.<p>
            <a href="index.php" class="error-link">Return to home</a><br>
        </div>';
    } else {
        echo '<nav>
            <span class="left">
                <a href="index.php" class="logo">
                    <img src="photo/logotype.png" class="logo-img" alt="Logo">
                    <div class="text">Galactic games</div>
                </a>
                <a href="index.php?p=aboutus" class="link">
                    <div class="text">Про нас</div>
                    <img src="photo/aboutus.svg" alt="About Us">
                </a>
                <a href="#" class="link" style="display: none;">
                    <div class="text">Підтримка</div>
                    <img src="photo/onlinesup.svg" alt="Support">
                </a>
                <a href="#" class="link" style="display: none;">
                    <div class="text">Спільнота</div>
                    <img src="photo/comm.svg" alt="Community">
                </a>
            </span>
            <span class="right">
                <a href="index.php?p=shoppart" class="link">
                    <div class="text">Крамниця</div>
                    <img src="photo/shop.svg" alt="Shop">
                </a>
                <a href="index.php?p=login" class="link">
                    <div class="text">Вхід</div>
                    <img src="photo/acc.svg" alt="Log in">
                </a>
                <button class="menu"><div>
                    <svg></svg>
                    <svg></svg>
                    <svg></svg>
                </div></button>
            </span>
        </nav>';

        require "./project/pages/$page_name.php";
    }
    
    ?>
</body>
</html>
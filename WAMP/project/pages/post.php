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
    <title>Galactic games store</title>
    <link rel="stylesheet" type="" href="darkbackground.css">
</head>
<body>
<?php
$login = "EMPTY";
$password = "EMPTY";
$search = "EMPTY";

if (isset($_POST["login"])){
    $login = $_POST["login"];
}

if(isset($_POST["password"])){
    $password = $_POST["password"];
}

if (isset($_POST["search"])){
    $search = $_POST["search"];
}

echo '<div class="error">
    <h1>Sorry, but this page isn`t done yet,<br> but Thank You
    for visiting it :)</h1>
    <p>Data you queried by method "POST":<br>
    Login: '.$login.'<br>
    Password: '.$password.'<br>
    Search: '.$search.'<br><br>
    Don`t worry, I won`t tell anyone</p><br>
</div>';
?>
</body>
</html>
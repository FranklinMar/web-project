@component('mail::message')
# Hello, {{ $login }}!

This is account verification message.<br>
If you have forgotten your password, please use the 4-digit code below.<br>
If you have not tried to login into your account recently, please ignore this message.

# Verification code:

@component('mail::button', ['url' => '#'])
{{ $code }}
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent

<!-- <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="http://fonts.googleapis.com">
  <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
  <link href="http://fonts.googleapis.com/css2?family=Share+Tech&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="" href="/css/aboutus.css">
  <link rel="stylesheet" type="" href="/css/bluebackground.css">
  <link rel="stylesheet" type="" href="/css/all.css">
  <title>Account password rese</title>
</head>

<body>
  <main>
    <div class="main">
      <div class="error">
        <h1>Hello, {{ $login }}!</h1>
          <p>This is account verification message.<br>
          If you have forgotten your password, please use the 4-digit code below.<br>
          If you have not tried to login into your account recently, please ignore this message.</p>
        <h1> Verification code:</h1>
          <a>1234</a>
        <h1>Thanks,<br>Galactic Games.</h1>
        <img src="/img/logotype.png" alt="Galactic Games Logo">
      </div>
    </div>
  </main>
</body>

</html> -->
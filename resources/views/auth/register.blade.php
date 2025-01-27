<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Regist</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="login-content">
        <div class="login-content-kiri">
            <h1> Your <span>Shopping</span>
                <br>
                adventure begins here
            </h1>
            <p>Login to access</p>
            <img src="{{ asset('assets/img/loginvektor.png') }}" alt="">
        </div>
        <div class="login-content-kanan">
            <div class="login-form">
                <h3>Sign Up</h3>
                <form action="">
                    <input type="text" name="" id="username" placeholder="Username">
                    <input type="text" name="" id="email" placeholder="Email">
                    <input type="text" name="" id="no handphone" placeholder="No Handphone">
                    <input type="password" name="" id="password" placeholder="Password">
                    <a href="/">Have an Acoount ?</a>
                    <input type="submit" value="Sign Up" class="button">
                </form>
            </div>
        </div>
    </div>

</body>

</html>

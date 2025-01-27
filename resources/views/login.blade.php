<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="login-content">
        <div class="login-content-kiri">
            <h1> Your <span>Shopping</span>
                <br>
                adventure begins here
            </h1>
            <p>Login to access</p>
            <img src="assets/img/loginvektor.png" alt="">
        </div>
        <div class="login-content-kanan">
            <div class="login-form">
                <h3>Login</h3>
                <form action="">
                    <input type="text" name="" id="username" placeholder="Username">
                    <input type="password" name="" id="password" placeholder="Password">
                    <a href="">Forgot Password ?</a>
                    <input type="submit" value="Login" class="button">
                </form>
            </div>
        </div>
    </div>

</body>

</html>

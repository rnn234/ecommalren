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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="login-content">
        <!-- Bagian Kiri -->
        <div class="login-content-kiri">
            <h1>Your <span>Shopping</span><br>adventure begins here</h1>
            <p>Login to access</p>
            <img src="{{ asset('assets/img/loginvektor.png') }}" alt="">
        </div>

        <!-- Bagian Kanan -->
        <div class="login-content-kanan">
            <div class="login-form">
                <h3>Login</h3>
                <x-validation-errors class="mb-4" /> <!-- Validasi Error -->

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" id="email" name="email" class="input-field" placeholder="Email"
                        value="{{ old('email') }}" required autofocus autocomplete="username">

                    <input type="password" id="password" name="password" class="input-field" placeholder="Password"
                        required autocomplete="current-password">
                    <!-- Forgot Password -->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="button-forgot-password">Forgot your
                            password?</a>
                    @endif

                    {{-- <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="remember-me-checkbox" name="remember">
                        <span class="ms-2 text-sm text-gray-600">Remember me</span>
                    </label> --}}

                    <input type="submit" value="Login" class="button">

                </form>

                <!-- Sign Up -->
                <a href="/register" class="button-signup">Register</a>
            </div>
        </div>
    </div>
</body>

</html>

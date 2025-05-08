<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="register-content">
        <div class="register-content-kiri">
            <h1> Your <span>Shopping</span>
                <br>
                adventure begins here
            </h1>
            <p>Register to start</p>
            <img src="{{ asset('assets/img/loginvektor.png') }}" alt="">
        </div>
        <div class="register-content-kanan">
            <div class="register-form">
                <h3>Register</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Username" required value="{{ old('name') }}">
                    <input type="email" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>

                    <a href="{{ route('login') }}" class="have-an-account">Have an Account?</a>
                    <input type="submit" value="Sign Up" class="button">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

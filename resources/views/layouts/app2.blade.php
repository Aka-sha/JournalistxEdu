<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JournalistxEdu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</body>
</html>

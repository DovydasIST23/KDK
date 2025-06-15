{{-- filepath: resources/views/welcome.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #FDFDFC;
            color: #1b1b18;
            min-height: 100vh;
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
        }
        .main-container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px #0001;
            padding: 40px 30px;
            text-align: center;
        }
        .main-container h2 {
            color: cyan;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .links a {
            margin: 0 10px;
            padding: 8px 18px;
            border: 1px solid #19140035;
            border-radius: 6px;
            color: #1b1b18;
            background: #f9f9f9;
            text-decoration: none;
            font-size: 1rem;
            transition: background 0.2s, color 0.2s;
            display: inline-block;
        }
        .links a:hover {
            background: #e3e3e0;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h2>Kompiuterinių detaliu katalogas</h2>
        <div class="links">
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/Katalogas') }}">Katalogas</a>
            @else
                <a href="{{ route('login') }}">Prisijungti</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registruotis</a>
                @endif
            @endauth
        </div>
    </div>
</body>
</html>

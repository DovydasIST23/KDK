<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contacts App</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<nav style="background-color:rgb(124, 163, 235); padding: 10px;">
<a href="{{ route('Katalogas.index') }}">Home</a>
@auth
<a href="{{ route('Katalogas.create') }}" style="margin-left: 10px;">Prideti detale</a>
<a href="{{ route('Katalogas.ataskaita') }}" style="margin-left: 10px;">Ataskaita</a>
<form method="POST" action="{{ route('logout') }}" style="display:
inline; margin-left: 10px;">
@csrf
<button type="submit">Atsijungti</button>
</form>
@else
<a href="{{ route('login') }}" style="margin-left: 10px;">Prisijungti</a>
<a href="{{ route('register') }}" style="margin-left:
10px;">Registruotis</a>
@endauth
</nav>
<div class="container" style="padding: 20px;">
@yield('content')
</div>
</body>
</html>
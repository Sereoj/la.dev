<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой сайт</title>
</head>
<body>
<header>
    Это шапка
    <a href="{{ route('home') }}">Главная</a>
    @guest
    <a href="{{ route('login') }}">Войти</a>
    @endguest
    @auth
        <a href="{{ route('profile') }}">Профиль</a>
        @can('admin')
            <a href="{{ route('admin') }}">admin</a>
        @endcan

        <a href="{{ route('logout') }}">Выйти</a>
    @endauth
</header>
<div>
    @yield('content')
</div>
<header>
    Это подвал
    <hr>
</header>
</body>
</html>

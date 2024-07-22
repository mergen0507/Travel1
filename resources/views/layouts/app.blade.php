<!DOCTYPE html>
<html>
<head>
    <title>Turizm Web Sitesi</title>
</head>
<body>
<header>
    <nav>
        <a href="{{ url('/') }}">Ana Sayfa</a>
        @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else
            <a href="{{ url('/login') }}">Giriş Yap</a>
        @endauth
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <p>&copy; 2024 Turizm Web Sitesi</p>
</footer>
</body>
</html>

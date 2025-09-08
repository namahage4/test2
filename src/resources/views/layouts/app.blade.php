<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                FashionablyLate
            </a>
            <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <a href="/login" class="header-nav__link">
                            login
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
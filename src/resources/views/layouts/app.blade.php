<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="header__logo">
                    フリーマーケット
                </a>
                <nav>
                    <ul class="header-nav">
                        @if (Auth::check())
                        <li class="header-nav__item">
                            <a href="/mypage" class="header-nav__link">マイページ</a>
                        </li>
                        <li class="header-nav__item">
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                        </li>
                        @endif
                        <li class="header-nav__item">
                            <a href="/sell" class="header-nav__link--create">出品</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('src/css/main.css')}}">
    <script src="{{asset('src/js/jQuery.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img class="desktop_logo" src="{{asset('src/img/logotypes/big_logo_black.svg')}}"
                                                  alt="logo">
                <img class="mobile_logo" src="{{asset('src/img/logotypes/min_logo_black.svg')}}"
                     alt="logo">
            </a>
            <div class="right_menu">
                <a href="/"><img src="{{asset('src/img/logotypes/location.svg')}}" alt="Местонахождение"></a>
                <a href="tel:+79058436464"><img src="{{asset('src/img/logotypes/phone.svg')}}" alt="Телефон"></a>
                @if(session()->has('cart') and sizeof(session('cart'))>0)
                    <a class="cart_href" href="{{route('cart')}}"><img src="{{asset('src/img/logotypes/cart.svg')}}" alt="Корзина"><span class="badge text-bg-secondary">
                        {{ sizeof(session('cart')) }}
                    </span></a>
                @else
                    <a href="{{route('cart')}}"><img src="{{asset('src/img/logotypes/cart.svg')}}" alt="Корзина"></a>
                @endif
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark black_background" tabindex="-1" id="offcanvasDarkNavbar"
                 aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img
                            src="{{asset('src/img/logotypes/logo_black.svg')}}" alt=""></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">О нас</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('stone')}}" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Драгоценные камни
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                @foreach($typesWithColors as $typeWithColors)
                                    <li>
                                        <a class="dropdown-item" href="{{route('stones.filter', ['type' => $typeWithColors['uriName']])}}">{{ $typeWithColors['type'] }}</a>
                                @endforeach
                                        <hr>
                                        <a class="dropdown-item" href="{{route('stone')}}">Смотреть все</a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('StonesAndDecorations')}}">Полудрагоценные камни</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('JewelryCatalog')}}">Ювелирные изделия</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('B2B')}}">Партнёрство B2B</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('delivery')}}">Оплата и доставка</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('certification')}}">Сертификация камней</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

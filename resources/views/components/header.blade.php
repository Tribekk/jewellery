<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('src/css/main.css')}}">
    <script src="{{asset('src/js/jQuery.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
<header class="container mx-auto">
    <div class="logo_main">
        <div class="logo_picture">
            <a href="{{route('index')}}"><img src="{{asset('src/img/logotypes/big_logo.svg')}}" alt="Логотип"></a>
        </div>
        <div class="logo_phone">
            <img src="{{asset('src/img/phone.svg')}}" alt="Номер телефона">
            <a class="telephone_number" href="tel:89999999999">8 999 999-99-99</a>
        </div>
    </div>
    <div class="menu_top">
    <ul>
        <li><a href="{{route('about')}}">О нас</a></li>
        <li class="modal_menu_hover">
            <a href="{{route('stone')}}">Драгоценные камни</a>
            <div class="modal_menu">
                <ul>
                    @foreach($typesWithColors as $typeWithColors)
                        <li><a href="{{route('stones.filter', ['type' => $typeWithColors['uriName']])}}" >{{ $typeWithColors['type'] }}</a>
                            <ul>
                                @foreach($typeWithColors['colors'] as $color)
                                    <li><a href="{{route('stones.filter', ['type' => $typeWithColors['uriName'], 'color' => $color->uriName])}}">{{ $color->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
        <li><a href="{{route('StonesAndDecorations')}}">Полудрагоценные камни</a></li>
        <li><a href="{{route('JewelryCatalog')}}">Ювелирные изделия</a></li>
        <li><a href="{{route('blog')}}">Партнёрство B2B</a></li>
        <li><a href="{{route('encyclopedia')}}">Контакты</a></li>
        <li><a href="{{route('encyclopedia')}}">Оплата и доставка</a></li>
        <li><a href="{{route('encyclopedia')}}">Сертификация камней</a></li>
        @if(session()->has('cart') and sizeof(session('cart'))>0)
            <li><a href="{{ route('cart') }}">Корзина <span class="badge text-bg-secondary">
        {{ sizeof(session('cart')) }}
    </span></a></li>
        @else
            <li><a href="{{route('cart')}}">Корзина</a></li>
        @endif
    </ul>
    </div>
</header>

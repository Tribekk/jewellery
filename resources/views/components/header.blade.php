<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('src/css/main.css')}}">
    <script src="{{asset('src/js/jQuery.js')}}"></script>
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
<header class="container mx-auto">
    <div class="logo_main">
        <div class="logo_picture">
            <a href="{{route('index')}}"><img src="{{asset('src/img/logo.svg')}}" alt="Логотип"></a>
        </div>
        <div class="logo_phone">
            <img src="{{asset('src/img/phone.svg')}}" alt="Номер телефона">
            <a class="telephone_number" href="tel:89999999999">8 999 999-99-99</a>
        </div>
    </div>
    <div class="menu_top">
    <ul>
        <li><a href="{{route('stone')}}">Каталог камней</a></li>
        <li><a href="{{route('StonesAndDecorations')}}">Камни и украшения</a></li>
        <li><a href="{{route('JewelryCatalog')}}">Каталог ювелирных изделий</a></li>
        <li><a href="{{route('about')}}">О нас</a></li>
        <li><a href="{{route('blog')}}">Блог</a></li>
        <li><a href="{{route('encyclopedia')}}">Энциклопедия</a></li>
        <li><a href="{{route('cart')}}">Корзина</a></li>
    </ul>
    </div>
</header>

<x-header message="Необработанные камни – природные минералы для коллекций и огранки | CarduusCarin"
          des="Продажа натуральных необработанных камней – кварц, топаз, аметист, аквамарин, турмалин, берилл и другие. Лучшие цены, доставка по России."
          keys="необработанные камни, природные минералы, купить необработанный камень, кварц необработанный, природный топаз, турмалин сырьё, аквамарин природный"/>
<link rel="stylesheet" href="{{asset('src/css/stone.css')}}">
<section class="content container-lg mx-auto">
    <h1>Полудрагоценные камни</h1>
    <section class="bread_crumb">
        <a class="parent" href="{{route('index')}}">Главная</a>
        <p class="parent">/</p>
        <a class="child" href="{{route('StonesAndDecorations')}}">Полудрагоценные камни</a>
        <hr>
    </section>
    <div class="catalog d-flex wrap">
        @foreach($stones as $stone)
            <div class="row-4 catalog_item">
                @if(str_ends_with(strtolower($stone->media[0]), '.mp4'))
                    <video autoplay muted>
                        <source src="{{ asset('storage/' . $stone->media[0]) }}" type="video/mp4">
                        Ваш браузер не поддерживает видео.
                    </video>
                @else
                    <img src="{{asset('storage/' . $stone->media[0])}}" alt="{{ $stone->name }}">
                @endif
                <p class="name">{{$stone->name}}</p>
                <p class="price">{{number_format($stone->price_per_kg, 0, '', ' ')}} Р/кг</p>
                <div class="invisible_card">
                    <div class="catalog_item">
                        <a href="{{route('StonesAndDecorations.item', ['article' => $stone['article']])}}">
                            @if(str_ends_with(strtolower($stone->media[1]), '.mp4'))
                                <video autoplay muted>
                                    <source src="{{ asset('storage/' . $stone->media[1]) }}" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            @else
                                <img src="{{asset('storage/' . $stone->media[1])}}" alt="{{ $stone->name }}">
                            @endif
                        </a>
                        <p class="name">{{$stone->name}}</p>
                        <p class="price">{{number_format($stone->price_per_kg, 0, '', ' ')}} Р/кг</p>
                        <p class="price">Происхождение: {{$stone->origin}}</p>
                        <p>
                            <a href="{{route('StonesAndDecorations.item', ['article' => $stone['article']])}}" class="button">Подробнее</a>
                        </p>
                        <p>
                            <a href="{{ route('cart.add', ['article' => $stone->article]) }}" class="button">В
                                корзину</a>
                        </p>
                    </div>
                </div>
            </div>
            @if($loop->iteration == 3)
                <div class="banner">
                    <a href="https://t.me/carduuscarin" target="_blank"><img src="{{ asset('src/img/main_banners/banner.webp') }}" alt="Акция!"></a>
                </div>
            @endif
        @endforeach
    </div>
</section>
<x-footer/>

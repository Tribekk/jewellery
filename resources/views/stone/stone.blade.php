<x-header message="Купить гранёные камни – сапфиры, рубины, изумруды, топазы | CarduusCarin"
          des="Большой выбор гранёных камней – сапфиры, рубины, изумруды, топазы, аметисты и другие. Доставка по России. Гарантия качества!"
          keys="гранёные камни, купить гранёные камни, сапфир купить, рубин цена, изумруд натуральный, аметист камень, топаз гранёный, турмалин"/>
<link rel="stylesheet" href="{{asset('src/css/stone.css')}}">
<section class="content container-lg mx-auto">
    <h1>Сырьё драгоценных камней</h1>
    <section class="bread_crumb">
        <a class="parent" href="{{route('index')}}">Главная</a>
        <p class="parent">/</p>
        <a class="child" href="{{route('stone')}}">Драгоценные камни</a>
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
                <p class="cut">{{$stone->cutBelongsTo->name}}</p>
                <p class="price">{{number_format($stone->price, 0, '', ' ')}} Р</p>
                <div class="invisible_card">
                    <div class="catalog_item">
                        <a href="{{route('stones.item', ['article' => $stone['article']])}}">
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
                        <p class="cut">{{$stone->cutBelongsTo->name}}</p>
                        <p class="price">{{number_format($stone->price, 0, '', ' ')}} Р</p>
                        <p class="price">Чистота: {{$stone->purity}}</p>
                        <p class="price">Облагораживание: {{$stone->ennoblement}}</p>
                        <p class="price">Огранка: {{$stone->cutBelongsTo->name}}</p>
                        <p class="price">Размеры: {{$stone->length}}x{{$stone->width}}x{{$stone->height}}</p>
                        <p class="price">Происхождение: {{$stone->birth}}</p>
                        <p>
                            <a href="{{route('stones.item', ['article' => $stone['article']])}}" class="button">Подробнее</a>
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

<x-header message="Купить гранёные камни – сапфиры, рубины, изумруды, топазы | CarduusCarin"
          des="Большой выбор гранёных камней – сапфиры, рубины, изумруды, топазы, аметисты и другие. Доставка по России. Гарантия качества!"
keys="гранёные камни, купить гранёные камни, сапфир купить, рубин цена, изумруд натуральный, аметист камень, топаз гранёный, турмалин"/>
<link rel="stylesheet" href="{{asset('src/css/stone.css')}}">
<section class="content container-lg mx-auto">
    <div class="catalog d-flex wrap">
        @foreach($stones as $stone)
            <div class="row-4 catalog_item">
                @if(str_ends_with(strtolower($stone->media[0]), '.mp4'))
                    <video controls autoplay muted>
                        <source src="{{ asset('storage/' . $stone->media[0]) }}" type="video/mp4">
                        Ваш браузер не поддерживает видео.
                    </video>
                @else
                    <img src="{{asset('storage/' . $stone->media[0])}}" alt="{{ $stone->name }}">
                @endif
                <p class="text-center margin-top-10px">{{$stone->name}}</p>
                <p class="text-center margin-top-10px">{{number_format($stone->price, 0, '', ' ')}} руб.</p>
                <div class="invisible_card black">
                    <div class="catalog_item">
                        <a href="{{route('stones.item', ['article' => $stone['article']])}}">
                            @if(str_ends_with(strtolower($stone->media[1]), '.mp4'))
                                <video controls autoplay muted>
                                    <source src="{{ asset('storage/' . $stone->media[1]) }}" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            @else
                                <img src="{{asset('storage/' . $stone->media[1])}}" alt="{{ $stone->name }}">
                            @endif
                        </a>
                        <p class="text-center margin-top-10px">{{$stone->name}}</p>
                        <p class="text-center margin-top-10px">{{number_format($stone->price, 0, '', ' ')}} руб.</p>
                        <p class="margin-top-10px">Чистота: {{$stone->purity}}</p>
                        <p>Облагораживание: {{$stone->ennoblement}}</p>
                        <p>Огранка: {{$stone->cutBelongsTo->name}}</p>
                        <p>Размеры: {{$stone->length}}x{{$stone->width}}x{{$stone->height}}</p>
                        <p>Происхождение: {{$stone->birth}}</p>
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
        @endforeach
    </div>
</section>
<x-footer/>

<x-header message="Каталог камней"/>
<link rel="stylesheet" href="{{asset('src/css/stone_item.css')}}">
<section class="stone_item container-lg">
    <div class="stone_item_flex">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                @foreach($item->media as $index=>$mediaElement)
                    @if(str_ends_with(strtolower($mediaElement), '.mp4'))
                        <video data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$index}}" class="@if($index == 0) active @endif"
                               aria-current="true" aria-label="Slide {{$index}}">
                            <source src="{{ asset('storage/' . $mediaElement) }}" type="video/mp4">
                            Ваш браузер не поддерживает видео.
                        </video>
                    @else
                        <img src="{{ asset('storage/' . $mediaElement) }}" alt="{{ $item->name }}"
                             data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$index}}" class="@if($index == 0) active @endif"
                             aria-current="true" aria-label="Slide {{$index}}">
                    @endif
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($item->media as $index=>$mediaElement)
                    <div class="carousel-item @if($index == 0) active @endif">
                    @if(str_ends_with(strtolower($mediaElement), '.mp4'))
                        <video controls>
                            <source src="{{ asset('storage/' . $mediaElement) }}" type="video/mp4" class="d-block w-100">
                            Ваш браузер не поддерживает видео.
                        </video>
                    @else
                        <img src="{{ asset('storage/' . $mediaElement) }}" alt="{{ $item->name }}" class="d-block w-100">
                    @endif
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
        <div class="characteristics_stone">
            <h2 class="text-center">
                {{$item->name}}
            </h2>
            <p class="text-center price">
                Цена: {{number_format($item->price, 0, '', ' ')}} Руб.
            </p>
            <a class="button" href="{{ route('cart.add', ['article' => $item->article]) }}">Добавить в корзину</a>
            <hr>
            <h3 class="text-center">Характеристики</h3>
            <p>Масса: {{$item->mass}} грамм</p>
            <p>Цвет: {{$item->color}}</p>
            <p>Чистота: {{$item->purity}}</p>
            <p>Облагораживание: {{$item->ennoblement}}</p>
            <p>Огранка: {{$item->cutBelongsTo->name}}</p>
            <p>Размеры: {{$item->height}}x{{$item->width}}x{{$item->length}}</p>
            <p>Происхождение: {{$item->birth}}</p>
            <p>Артикул: {{$item->article}}</p>
        </div>
    </div>
    <div class="stone_item_flex">
        <div class="description_item text-center container">
            <h2>Описание</h2>
            <p>{{$item->description}}</p>
        </div>
        <div class="right_description_item">
            <p>
                На все камни возможно оформление экспертного заключения в выбранной вами геммологической лаборатории
                мира.
            </p>
            <ul>
                <li>Бесплатная доставка по России</li>
                <li>Вышлем дополнительные фото и видео</li>
                <li>2 недели на возврат</li>
                <li>Оплата наличными, картами, или безналичной оплатой</li>
            </ul>
        </div>
    </div>
</section>
<x-footer/>

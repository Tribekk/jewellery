<x-header message="Каталог камней"/>
<link rel="stylesheet" href="{{asset('src/css/stone_item.css')}}">
<div class="d-flex container">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <img alt="{{$item->name}}" src="/storage/{{asset($item->preview_photo)}}" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></img>
            <img src="/storage/{{asset($item->next_photo)}}" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" alt="{{$item->name}}">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/{{asset($item->preview_photo)}}" class="d-block w-100" alt="{{$item->name}}">
            </div>
            <div class="carousel-item">
                <img src="/storage/{{asset($item->next_photo)}}" class="d-block w-100" alt="{{$item->name}}">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
        <a class="button" href="">Добавить в корзину</a>
        <hr>
        <h3 class="text-center">характеристики</h3>
        <p>Масса: {{$item->mass}} карат</p>
        <p>Цвет: {{$item->color}}</p>
        <p>Чистота: {{$item->purity}}</p>
        <p>Облагораживание: {{$item->ennoblement}}</p>
        <p>Огранка: {{$item->cutBelongsTo->name}}</p>
        <p>Размеры: {{$item->height}}x{{$item->width}}x{{$item->length}}</p>
        <p>Происхождение: {{$item->birth}}</p>
        <p>Артикул: {{$item->article}}</p>
    </div>
</div>
<div class="d-flex">
    <div class="description_item text-center container">
        <h2>Описание</h2>
        <p>{{$item->description}}</p>
    </div>
    <div class="right_description_item">
        <p>
            На все камни возможно оформление экспертного заключения в выбранной вами геммологической лаборатории мира.
        </p>
        <ul>
            <li>Бесплатная доставка по России</li>
            <li>Вышлем дополнительные фото и видео</li>
            <li>2 недели на возврат</li>
            <li>Оплата наличными, картами, или безналичной оплатой</li>
        </ul>
    </div>
</div>
<x-footer/>

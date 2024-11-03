<x-header message="Каталог камней"/>
<link rel="stylesheet" href="{{asset('src/css/stone.css')}}">
<main class="content container mx-auto">
    <div class="catalog d-flex wrap">
        @foreach($stones as $stone)
            <div class="row-4 w-100 catalog_item">
                <img src="{{asset('storage/' . $stone->preview_photo)}}" alt="{{$stone->name}}">
                <p class="text-center margin-top-10px">{{$stone->name}}</p>
                <p class="text-center margin-top-10px">{{number_format($stone->price, 0, '', ' ')}} руб.</p>
                <div class="invisible_card">
                    <div class="catalog_item">
                        <a href="">
                            <img src="{{asset('storage/' . $stone->next_photo)}}" alt="{{$stone->name}}">
                        </a>
                        <p class="text-center margin-top-10px">{{$stone->name}}</p>
                        <p class="text-center margin-top-10px">{{number_format($stone->price, 0, '', ' ')}} руб.</p>
                        <p class="margin-top-10px">Чистота: {{$stone->purity}}</p>
                        <p>Облагораживание: {{$stone->ennoblement}}</p>
                        <p>Огранка: {{$stone->cutBelongsTo->name}}</p>
                        <p>Размеры: {{$stone->length}}x{{$stone->width}}x{{$stone->height}}</p>
                        <p>Происхождение: {{$stone->birth}}</p>
                        <p>
                            <a href="" class="button">Подробнее</a>
                        </p>
                        <p>
                            <a href="" class="button">В корзину</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
<x-footer/>

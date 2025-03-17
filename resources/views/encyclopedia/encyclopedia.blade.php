<x-header message="Энциклопедия драгоценных камней – описание, свойства, история и применение"
des="Узнайте всё о драгоценных камнях: происхождение, характеристики, магические свойства и сферы применения. Полное руководство по алмазам, сапфирам, рубинам, изумрудам и другим редким минералам."
keys="драгоценные камни, энциклопедия камней, алмаз, сапфир, рубин, изумруд, характеристики камней, купить драгоценные камни, свойства камней, происхождение камней, ювелирные камни, магические камни, редкие минералы, натуральные камни, обработка камней, каратность, ювелирное искусство"/>
<section class="container encyclopedia">
    <div class="row catalog">
        @foreach($encyclopedias as $encyclopedia)
            <div class="col-lg-2 text-center">
                <a href="{{route('view-page-encyclopedia', ['page' => $encyclopedia->type_stone])}}">
                    <img class="w-50 mx-auto" src="storage/{{$encyclopedia->picture}}" alt="{{$encyclopedia->name}}">
                    <h5>{{mb_strtoupper($encyclopedia->name)}}</h5>
                </a>
                @foreach($encyclopedia->pages as $page)
                    <a href="{{route('view-page-encyclopedia', ['page' => $encyclopedia->type_stone, 'dopPage' => $page->uriName])}}">
                        <h4>{{$page->name}}</h4>
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
<x-footer/>

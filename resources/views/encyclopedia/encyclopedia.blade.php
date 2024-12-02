<x-header message="Энциклопедия"/>
<section class="container encyclopedia">
    <div class="row catalog">
        @foreach($encyclopedias as $encyclopedia)
            <div class="col-lg-2 text-center">
                <a href="{{route('view-page-encyclopedia', ['page' => $encyclopedia->type_stone])}}">
                    <img src="storage/{{$encyclopedia->picture}}" alt="{{$encyclopedia->name}}">
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

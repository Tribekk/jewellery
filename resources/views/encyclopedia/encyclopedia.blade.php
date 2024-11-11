<x-header message="Энциклопедия"/>
<div class="container">
    <div class="row catalog">
        @foreach($encyclopedias as $encyclopedia)
            <div class="col-lg-2 text-center">
                <a href="{{route('view-page-encyclopedia', ['page' => $encyclopedia->type_stone])}}">
                    <img src="storage/{{$encyclopedia->picture}}" alt="{{$encyclopedia->name}}">
                    <p>{{$encyclopedia->name}}</p>
                </a>
                @foreach($encyclopedia->pages as $page)
                    <a href="{{route('view-page-encyclopedia', ['page' => $encyclopedia->type_stone, 'dopPage' => $page->uriName])}}">
                        <p>{{$page->name}}</p>
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
<x-footer/>

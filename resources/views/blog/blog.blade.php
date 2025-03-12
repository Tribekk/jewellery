<x-header message="Блог | Новости и статьи о ювелирном искусстве и культуре Кардус Карин"
          des="Читайте свежие статьи о ювелирном искусстве, дизайне, художниках и культуре. Новости, истории, вдохновение и тренды в мире ювелирных украшений и искусства."
          keys="ювелирный блог, искусство и ювелирное дело, новости ювелирного бизнеса, культура и украшения, ювелирные тренды, художники и ювелирное искусство, эксклюзивные изделия"/>

<section class="container encyclopedia">
    <div class="row catalog">
        @foreach($blogs as $blog)
            <div class="col-lg-2 text-center">
                <a href="{{route('blogPage', ['page' => $blog->uriName])}}">
                    <img src="storage/{{$blog->picture}}" alt="{{$blog->name}}">
                    <h5>{{mb_strtoupper($blog->name)}}</h5>
                </a>
            </div>
        @endforeach
    </div>
</section>

<x-footer/>

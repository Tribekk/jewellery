<x-header message="Факты про {{$encyclopediaPage->name}}" />
<link rel="stylesheet" href="{{asset('src/css/encyclopediaPage.css')}}">
<section class="encyclopedia">
    <div class="container-lg ">
        <div class="contentDesktop">
            {!! $encyclopediaPage->dataDesktop !!}
        </div>
        <div class="contentMobile">
            {!! $encyclopediaPage->dataMobile !!}
        </div>
    </div>
</section>
<x-footer />

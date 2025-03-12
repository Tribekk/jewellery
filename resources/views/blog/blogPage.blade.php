<x-header message="Факты про {{$blogPage->titleSEO}}"
des="{{$blogPage->descriptionSEO}}"
keys="{{$blogPage->keyWordsSEO}}"/>
<link rel="stylesheet" href="{{asset('src/css/encyclopediaPage.css')}}">
<section class="encyclopedia">
    <div class="container-lg ">
        <div class="contentDesktop">
{!! $blogPage->dataDesktop !!}
</div>
<div class="contentMobile">
    {!! $blogPage->dataMobile !!}
</div>
</div>
</section>
<x-footer />

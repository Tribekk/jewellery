<x-header message="Факты про {{$encyclopediaPage->name}}" />
    <div class="container">
        <div class="content">
            {!! $encyclopediaPage->data !!}
        </div>
    </div>
<x-footer />

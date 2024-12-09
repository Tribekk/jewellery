@php
    $media = $getState();
    if (is_string($media)) {
        $media = json_decode($media, true); // Преобразуем JSON в массив
    }
@endphp
<ul>
    @foreach($media ?? [] as $item)
        @if(preg_match('/\.(jpg|jpeg|png|gif)$/i', $item))
            <li><img src="{{ asset('storage/' . $item) }}" alt="Фото" style="max-width: 100px;"></li>
        @elseif(preg_match('/\.(mp4|mov|avi)$/i', $item))
            <li>
                <video controls style="max-width: 150px;">
                    <source src="{{ asset('storage/' . $item) }}" type="video/mp4">
                    Ваш браузер не поддерживает видео.
                </video>
            </li>
        @endif
    @endforeach
</ul>

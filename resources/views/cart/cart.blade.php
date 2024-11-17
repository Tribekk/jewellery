<x-header message="Корзина"/>
@if(sizeof($cart)>0)
    <h1 class="text-center h1 mb-3">Корзина</h1>
    <div class="cart container-lg">
        @foreach($cart as $item)
            <div class="cart_item d-flex">
                <img src="storage{{asset($item->preview_photo)}}" alt="" class="w-1/5">
                <p class="name_item w-2/5 text-center my-auto">{{$item->name}}</p>
                <p class="price_item w-1/5 text-center my-auto">{{number_format($item->price, 0, '', ' ')}} рублей</p>
                <a href="{{ route('cart.remove', ['article' => $item->article]) }}" class="w-1/5 text-center my-auto">X</a>
            </div>
            <hr class="my-3">
        @endforeach
    </div>
    <div class="total_price container-lg text-right">
        <p>Итого:</p>
        <p>{{number_format($totalPrice, 0, '', ' ')}} рублей</p>
        <a class="button w-1/5 ms-auto m-0" href="{{route('create.order')}}">Оформить заказ</a>
    </div>
@else
    <h1 class="text-center h1 mb-5">Корзина пуста</h1>
@endif
<x-footer/>

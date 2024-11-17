<x-header message="Создание заказа"/>
<link rel="stylesheet" href="{{asset('src/css/create.css')}}">
<section class="create_order container-lg">
    <form action="" method="post">
        @csrf
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" placeholder="Имя" name="name" required>
            <label for="floatingName">Имя</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPhone" name="phone" placeholder="Номер телефона">
            <label for="floatingPhone">Номер телефона</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Email">
            <label for="floatingEmail">Email</label>
        </div>
        <div class="text-center">
            <h3>
                Варианты доставки:
            </h3>
            <div class="check_block">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="delivery" id="flexRadioDefault1" value="show_room" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Забрать в шоу-руме
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="delivery" value="moscow" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Доставка по Москве (бесплатно)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="delivery" value="russia" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Доставка по России (бесплатно)
                    </label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h3>
                Способы оплаты:
            </h3>
            <div class="check_block">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="email" id="flexRadioDefault4" checked>
                    <label class="form-check-label" for="flexRadioDefault4">
                        Банковским переводом (пришлём реквизиты на почту)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="cache" id="flexRadioDefault5">
                    <label class="form-check-label" for="flexRadioDefault5">
                        В шоу-руме наличными или банковской картой
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="payKeeper" id="flexRadioDefault6">
                    <label class="form-check-label" for="flexRadioDefault6">
                        Оплата на сайте (Pay Keeper)
                    </label>
                </div>
            </div>
            <h3>
                Итого: {{number_format($totalPrice, 0, '', ' ')}} рублей
            </h3>
            <button class="button w-1/5 mx-auto">Сделать заказ!</button>
        </div>
    </form>
</section>
<x-footer/>

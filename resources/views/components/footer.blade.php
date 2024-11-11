<footer class="bg-color-footer">
    <div class="footer_main container mx-auto">
        <div class="row-4">
            <h3>ВЫБРАТЬ</h3>
            <p><a href="{{route('stone')}}">Каталог камней</a></p>
            <p><a href="{{route('JewelryCatalog')}}">Каталог изделий</a></p>
            <p><a href="{{route('StonesAndDecorations')}}">Уникальные камни</a></p>
            <p><a href="{{route('JewelryCatalog')}}">Украшения на заказ</a></p>
        </div>
        <div class="row-4">
            <h3>БУДЬТЕ В КУРСЕ</h3>
            <p><a href="{{route('encyclopedia')}}">Энциклопедия</a></p>
            <p><a href="{{route('blog')}}">Блог</a></p>
            <p><a href="{{route('StonesAndDecorations')}}">Новости</a></p>
        </div>
        <div class="row-4">
            <h3>КОМПАНИЯ</h3>
            <p><a href="{{route('stone')}}">Наши Преимущества</a></p>
            <p><a href="{{route('JewelryCatalog')}}">Оплата, доставка и возврат</a></p>
            <p><a href="{{route('StonesAndDecorations')}}">Наши гарантии</a></p>
            <p><a href="{{route('about')}}">О компании</a></p>
            <p><a href="{{route('JewelryCatalog')}}">Контакты</a></p>
        </div>
    </div>
    <div class="footer-2">
        <div class="container mx-auto d-flex justly-spase-between text-center">
            <div class="row-4">
                <p><b>ИП</b> Ахметзянов Ильдар Рушанович</p>
                <div class="d-flex margin-top-10px">
                    <p><b>ОГРНИП</b> 317774600371172</p>
                    <p class="margin-left-20px"><b>ИНН</b> 773365228980</p>
                </div>
            </div>
            <div class="row-4">
                <a class="telephone_number" href="tel:89999999999">8 999 999-99-99</a>
                <p class="margin-top-10px">Ежедневно с 10:00 до 22:00 (МСК)</p>
            </div>
            <div class="row-4">
                <p>Адрес: г. Оренбург, ул. Просторная, д. 3</p>
                <p class="margin-top-10px">Открыты в будние дни с 10:00 до 20:00 (МСК)</p>
            </div>
        </div>
    </div>
    <div class="footer-3">
        <div class="container mx-auto d-flex justly-spase-between text-center">
        <div class="d-flex">
            <a href="">Персональные данные</a>
            <a href="" class="margin-left-20px">Карта сайта</a>
        </div>
            <p class="logo_footer"><img src="{{asset('src/img/logotypes/min_logo.svg')}}" alt="">Carduus Carat © 2012 - 2024</p>
        </div>
    </div>
</footer>
<script async>
    $(document).ready(function () {
        const basePath = window.location.origin; // Получаем базовый URL, например, http://127.0.0.1:8000
        const currentPath = document.location.pathname; // Относительный путь, например, /stone/sapfir/zelenyy

        $('.menu_top ul li a, .footer_main a').each(function () {
            const href = $(this).attr('href').replace(basePath, ''); // Убираем базовый URL из href

            // Проверяем, чтобы href был началом текущего пути
            if (currentPath.startsWith(href) && currentPath !== '/') {
                $(this).addClass('active');
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

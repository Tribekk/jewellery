<footer class="site-footer black_background">
    <div class="footer-logo">
        <img src="{{asset('src/img/logotypes/big_logo_black.svg')}}" alt="Carduus Carat Logo">
    </div>
    <div class="footer-container">
        <div class="footer-links">
            <h5>БУДЬТЕ В КУРСЕ</h5>
            <ul>
                <li><p><a href="{{route('encyclopedia')}}">Энциклопедия</a></p></li>
                <li><p><a href="{{route('blog')}}">Блог</a></p></li>
                <li><p><a href="{{route('StonesAndDecorations')}}">Новости</a></p></li>
                <li><p><a href="{{route('offer')}}">Публичная оферта</a></p></li>
                <li><p><a href="{{route('about')}}">О компании</a></p></li>
                <li><p><a href="{{route('contact')}}">Контакты</a></p></li>
            </ul>
        </div>
        <div class="footer-social">
            <h5>МЫ В СОЦСЕТЯХ</h5>
            <ul>
                <li><a href="https://vk.com/club228334857" target="_blank" class="social-icon instagram">ВКонтакте</a></li>
                <li><a href="https://t.me/carduuscarin" target="_blank"  class="social-icon facebook">Telegram</a></li>
                <li><a href="https://www.instagram.com/carduus_carin?igsh=MXFqYWRvNnMwcXNvaA==" target="_blank"  class="social-icon twitter">Instagram</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h5>СВЯЗЬ</h5>
            <p>Телефон: <a href="tel:+79058436464">+7 (905) 843-64-64</a></p>
            <p>Email: <a href="mailto:info@carduuscarat.ru">info@carduuscarat.ru</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Carduus Carin. Все права защищены.</p>
    </div>
</footer>
<script async>
    $(document).ready(function () {
        const basePath = window.location.origin; // Получаем базовый URL, например, http://127.0.0.1:8000
        const currentPath = document.location.pathname; // Относительный путь, например, /stone/sapfir/zelenyy

        $('.offcanvas-body a.nav-link').each(function () {
            const href = $(this).attr('href').replace(basePath, ''); // Убираем базовый URL из href

            // Проверяем, чтобы href был началом текущего пути
            if (currentPath.startsWith(href) && currentPath !== '/') {
                $(this).addClass('active');
            }
        });

        $('.desktop_menu a').each(function () {
            const href = $(this).attr('href').replace(basePath, ''); // Убираем базовый URL из href

            // Проверяем, чтобы href был началом текущего пути
            if (currentPath.startsWith(href) && currentPath !== '/') {
                $(this).addClass('active');
            }
        });

        // Меняем значение через заданное время
        setTimeout(function () {
            $('body').css('background-size', '1000px');
        }, 1000); // Задержка перед началом анимации
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<x-header message="Главная"/>
<link rel="stylesheet" href="{{asset('src/css/welcome.css')}}">
<section class="main_banners">
    <div class="about banner">
        <img src="{{asset('src/img/main_banners/about.png')}}" alt="">
        <div class="text_banner">
            <h3>Carduus Carat — традиции, искусство, совершенство!</h3>
            <h4>Узнайте нашу историю и философию создания ювелирных шедевров.</h4>
            <a href="{{route('about')}}">Читать больше ></a>
        </div>
    </div>
    <div class="stone banner">
        <img src="{{asset('src/img/main_banners/stone.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Драгоценности, которые рассказывают вашу историю!</h3>
            <h4>Выберите идеальный камень из нашего ассортимента шпинели, сапфиров, изумрудов и рубинов.</h4>
            <a href="{{route('stone')}}">Посмотреть коллекцию ></a>
        </div>
    </div>
    <div class="decorations banner">
        <img src="{{asset('src/img/main_banners/decorations.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Натуральная красота, доступная каждому!</h3>
            <h4>Нефрит, лазурит, топазы и многое другое в уникальном исполнении.</h4>
            <a href="{{route('StonesAndDecorations')}}">Исследовать ассортимент ></a>
        </div>
    </div>
    <div class="JewelryCatalog banner">
        <img src="{{asset('src/img/main_banners/JewelryCatalog.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Украшения, созданные для вас!</h3>
            <h4>Кольца, браслеты, серьги и кулоны, которые подчеркнут вашу индивидуальность.</h4>
            <a href="{{route('JewelryCatalog')}}">Выбрать украшение ></a>
        </div>
    </div>
    <div class="B2B banner">
        <img src="{{asset('src/img/main_banners/B2B.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Ваш успех — наша миссия!</h3>
            <h4>Индивидуальные условия, гарантии качества и гибкие скидки для бизнеса.</h4>
            <a href="{{route('B2B')}}">Узнать о сотрудничестве ></a>
        </div>
    </div>
    <div class="contact banner">
        <img src="{{asset('src/img/main_banners/contacts.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Мы всегда на связи!</h3>
            <h4>Свяжитесь с нами для консультации, вопросов и оформления заказов.</h4>
            <a href="{{route('contact')}}">Связаться с нами ></a>
        </div>
    </div>
    <div class="delivery banner">
        <img src="{{asset('src/img/main_banners/delivery.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Удобные способы оплаты и доставка в любую точку России!</h3>
            <h4>Мы позаботимся о том, чтобы ваш заказ дошел быстро и безопасно.</h4>
            <a href="{{route('delivery')}}">Подробнее ></a>
        </div>
    </div>
    <div class="certification banner">
        <img src="{{asset('src/img/main_banners/certification.png')}}" alt="" loading="lazy">
        <div class="text_banner">
            <h3>Качество, подтверждённое экспертами!</h3>
            <h4>Все наши камни проходят строгую сертификацию в соответствии с мировыми стандартами.</h4>
            <a href="{{route('certification')}}">Узнать о сертификации ></a>
        </div>
    </div>
    <div class="scroll_arrow">
        <span>&#8595;</span>
    </div>
</section>
<script>
    const banners = document.querySelectorAll('.banner');
    const mainBanners = document.querySelector('.main_banners');
    document.addEventListener('DOMContentLoaded', () => {
        let currentIndex = 0;
        let isScrolling = false;
        let touchStartY = 0;
        let isScroll = false;

        // Функция для показа баннера
        const showBanner = (index) => {
            banners.forEach((banner, i) => {
                banner.classList.remove('active');
                if (i === index) {
                    banner.classList.add('active');
                    if (isScroll)
                        document.querySelector('.scroll_arrow').style.display = 'none';
                    const activeBanner = document.querySelector('.banner.active');
                    mainBanners.style.backgroundImage = `url("${activeBanner.children[0].getAttribute('src')}")`;
                    isScroll = true;
                }
            });
        };

        // Функция для обработки прокрутки колеса (десктоп)
        const handleWheel = (event) => {
            if (isScrolling) return; // Предотвращаем слишком частую смену
            isScrolling = true;

            if (event.deltaY > 0) {
                // Прокрутка вниз
                currentIndex = (currentIndex + 1) % banners.length;
            } else {
                // Прокрутка вверх
                currentIndex = (currentIndex - 1 + banners.length) % banners.length;
            }

            showBanner(currentIndex);

            setTimeout(() => {
                isScrolling = false;
            }, 1000); // Пауза перед следующей сменой
        };

        // Функция для обработки сенсорной прокрутки (мобильные устройства)
        const handleTouchStart = (event) => {
            touchStartY = event.touches[0].clientY; // Запоминаем начальную позицию
        };

        const handleTouchEnd = (event) => {
            const touchEndY = event.changedTouches[0].clientY; // Позиция при завершении
            const direction = touchStartY - touchEndY;

            if (Math.abs(direction) > 50) { // Фильтруем случайные касания
                if (direction > 0) {
                    // Прокрутка вниз
                    currentIndex = (currentIndex + 1) % banners.length;
                } else {
                    // Прокрутка вверх
                    currentIndex = (currentIndex - 1 + banners.length) % banners.length;
                }
                showBanner(currentIndex);
            }
        };

        // Инициализация
        showBanner(currentIndex);

        // События для десктопов и мобильных устройств
        window.addEventListener('wheel', handleWheel); // Для десктопов
        window.addEventListener('touchstart', handleTouchStart); // Для начала касания
        window.addEventListener('touchend', handleTouchEnd); // Для завершения касания
    });

    document.addEventListener('DOMContentLoaded', () => {
        const updateAspectRatio = () => {
            const aspectRatio = window.innerWidth / window.innerHeight;
            const activeBanner = document.querySelector('.banner.active');
            mainBanners.style.backgroundImage = `url("${activeBanner.children[0].getAttribute('src')}")`;
            if (aspectRatio < 0.8) {
                document.querySelector('.about > img').setAttribute('src', '{{asset('src/img/main_banners/about_mobile.png')}}');
                document.querySelector('.stone > img').setAttribute('src', '{{asset('src/img/main_banners/stone_mobile.png')}}');
                document.querySelector('.decorations > img').setAttribute('src', '{{asset('src/img/main_banners/decorations_mobile.png')}}');
                document.querySelector('.JewelryCatalog > img').setAttribute('src', '{{asset('src/img/main_banners/JewelryCatalog_mobile.png')}}');
                document.querySelector('.B2B > img').setAttribute('src', '{{asset('src/img/main_banners/B2B_mobile.png')}}');
                document.querySelector('.contact > img').setAttribute('src', '{{asset('src/img/main_banners/contacts_mobile.png')}}');
                document.querySelector('.delivery > img').setAttribute('src', '{{asset('src/img/main_banners/delivery_mobile.png')}}');
                document.querySelector('.certification > img').setAttribute('src', '{{asset('src/img/main_banners/certification_mobile.png')}}');
            } else {
                document.querySelector('.about > img').setAttribute('src', '{{asset('src/img/main_banners/about.png')}}');
                document.querySelector('.stone > img').setAttribute('src', '{{asset('src/img/main_banners/stone.png')}}');
                document.querySelector('.decorations > img').setAttribute('src', '{{asset('src/img/main_banners/decorations.png')}}');
                document.querySelector('.JewelryCatalog > img').setAttribute('src', '{{asset('src/img/main_banners/JewelryCatalog.png')}}');
                document.querySelector('.B2B > img').setAttribute('src', '{{asset('src/img/main_banners/B2B.png')}}');
                document.querySelector('.contact > img').setAttribute('src', '{{asset('src/img/main_banners/contacts.png')}}');
                document.querySelector('.delivery > img').setAttribute('src', '{{asset('src/img/main_banners/delivery.png')}}');
                document.querySelector('.certification > img').setAttribute('src', '{{asset('src/img/main_banners/certification.png')}}');
            }
        };

        updateAspectRatio(); // Вызываем при загрузке страницы
        window.addEventListener('resize', updateAspectRatio); // Слушаем изменения размеров
    });
</script>

<x-footer/>

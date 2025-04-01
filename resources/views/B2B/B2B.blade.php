<x-header message="Партнёрство с Carduus Carin"/>
<link rel="stylesheet" href="{{asset('src/css/B2B.css')}}">
<section class="partners_CarduusCarat">
    <div class="container-lg">
        <h1>Приглашение к сотрудничеству</h1>
        <section class="bread_crumb">
            <a class="parent" href="{{route('index')}}">Главная</a>
            <p class="parent">/</p>
            <a class="child" href="{{route('B2B')}}">Партнёрство B2B</a>
            <hr>
        </section>
        <p>Ювелирная компания Carduus Carin приглашает ювелиров и ювелирные заводы к сотрудничеству!</p>

        <h2>Что мы предлагаем:</h2>
        <div class="row">
            <div class="col-3">
                <img src="{{asset('/src/img/main_banners/about.webp')}}" alt="">
                <h3>Гарантии качества и прозрачное ценообразование</h3>
                <p>Каждый камень проходит строгую проверку и сертификацию, а наша ценовая политика разработана так, чтобы быть максимально прозрачной и выгодной для вас. Это позволит вам уверенно предлагать своим клиентам изделия с гарантией высокого стандарта.</p>
            </div>
            <div class="col-3">
                <img src="{{asset('/src/img/main_banners/JewelryCatalog.webp')}}" alt="">
                <h3>Брендирование фото и видео</h3>
                <p>Фото и видео выбранного камня могут быть представлены с вашим брендом — это поможет укрепить вашу индивидуальность на рынке.</p>
            </div>
            <div class="col-3">
                <img src="{{asset('/src/img/main_banners/contacts.webp')}}" alt="">
                <h3>Гибкую систему скидок</h3>
                <p>Для ювелиров есть специальное предложение на камни из наличия. Свяжитесь с нами +7 (905) 843-6464, чтобы узнать условия.</p>
            </div>
            <div class="col-3">
                <img src="{{asset('/src/img/main_banners/certification.webp')}}" alt="">
                <h3>Сертификация драгоценных камней</h3>
                <p>Мы предлагаем сертификацию всех драгоценных камней, чтобы обеспечить соответствие мировым стандартам и укрепить доверие ваших клиентов.</p>
            </div>
        </div>
    </div>
</section>
<x-footer/>

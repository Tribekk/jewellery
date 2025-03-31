<x-header message="О нас"/>
<link rel="stylesheet" href="{{asset('src/css/about.css')}}">
<section class="about black_background">
    <div class="container-lg">
        <h1>История ювелирной компании Carduus Carin</h1>
        <section class="bread_crumb">
            <a class="parent" href="{{route('index')}}">Главная</a>
            <p class="parent">/</p>
            <a class="child" href="{{route('about')}}">О нас</a>
            <hr>
        </section>
        <div class="row">
            <div class="col-6 text_block">
                <p>Ювелирная компания Carduus Carin была основана группой профессионалов,
                    увлеченных ювелирным искусством. Наша история началась с мечты создать уникальные украшения, которые будут
                    не просто аксессуарами, а настоящими произведениями искусства, способными передать эмоции и запечатлеть
                    важные моменты жизни. Наши изделия отличаются утонченным стилем, простыми формами, отточенными до
                    совершенства. Приверженность к природе и минимализм в использовании сырья, являющиеся результатом уважения к
                    тому, что извлекается из земли.</p>

                <div class="divider"></div>

                <h2>Наша команда</h2>

                <p>Наша команда состоит из талантливых ювелиров и дизайнеров, которые вдохновляются природой, искусством и
                    культурой разных народов. Каждое украшение, созданное нашей командой, проходит через множество этапов — от
                    концепции до финальной отделки. Мы гордимся тем, что каждое изделие является уникальным и несет в себе
                    частичку души мастера.</p>

                <div class="divider"></div>

                <h2>Индивидуальный подход</h2>

                <p>Мы верим, что ювелирные изделия должны быть не только красивыми, но и значимыми. Поэтому мы предлагаем нашим
                    клиентам возможность индивидуального дизайна, чтобы каждый мог создать украшение, которое будет отражать его
                    личность и историю. Будь то обручальное кольцо, кулон на память или подарок для близкого человека — каждое
                    изделие Carduus Carin наполнено смыслом и теплом.</p>

                <div class="divider"></div>

                <h2>Этика и устойчивое развитие</h2>

                <p>С момента нашего основания мы стремимся к устойчивому развитию и ответственности. Мы используем только
                    ethically sourced (этично добытые) камни и материалы, заботясь о планете и ее ресурсах. Наша цель —
                    создавать красоту, которая не только радует глаз, но и приносит пользу обществу.</p>

                <div class="divider"></div>

                <h2>Присоединяйтесь к нам</h2>

                <p>Carduus Carin — это не просто ювелирная компания. Это сообщество людей,
                    которые ценят искусство, качество и индивидуальность. Мы приглашаем вас стать частью нашей истории и найти
                    свое идеальное украшение, которое будет с вами на протяжении всей жизни.</p>
            </div>
            <div class="col-6 img_col">
                <div class="row">
                    <div class="col-12 img_container">
                        <img src="{{asset('src/img/about/1.webp')}}" alt="" style="object-position: right;">
                    </div>
                    <div class="col-6 img_container"><img src="{{asset('src/img/about/syhrob.webp')}}" alt=""></div>
                    <div class="col-6 img_container"><img src="{{asset('src/img/about/2.webp')}}" alt=""></div>
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="{{asset('src/img/about/banner.webp')}}" alt="">
            <div class="icons">
                <a target="_blank" href="https://www.instagram.com/carduus_carin?igsh=MXFqYWRvNnMwcXNvaA=="><img src="{{asset('src/img/about/instagram.svg')}}" alt=""></a>
                <a target="_blank" href="https://t.me/carduuscarin"><img src="{{asset('src/img/about/telegram.svg')}}" alt=""></a>
                <a target="_blank" href="https://vk.com/club228334857"><img src="{{asset('src/img/about/vk.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<x-footer/>

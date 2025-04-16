<x-header message="Контакты" des="fjdo"/>
<link rel="stylesheet" href="{{asset('src/css/contact.css')}}">
<section class="contacts black_background">
    <div class="container-lg">
        <h1>Контакты</h1>
        <section class="bread_crumb">
            <a class="parent" href="{{route('index')}}">Главная</a>
            <p class="parent">/</p>
            <a class="child" href="{{route('contact')}}">Контакты</a>
            <hr>
        </section>
        <div class="row">
            <div class="col-lg-6">
                <p>Добро пожаловать на страницу контактов компании ООО ЮВЕЛИРНАЯ КОМПАНИЯ "КАРДУС КАРИН".</p><p> Мы гордимся своим
                    профессионализмом, качеством и вниманием к деталям. Если вы хотите задать вопросы, получить консультацию
                    или сотрудничать с нами, мы всегда открыты для общения. Наша миссия — предоставить клиентам и партнерам
                    максимальное удобство в сотрудничестве и уверенность в качестве продукции.</p>
                <h2>Как нас найти</h2>
                <p><strong>Юридический адрес:</strong> 460048, Оренбургская область, г. Оренбург, пр-кт Победы д. 178, кв.
                    42</p>
                <p><strong>Фактический адрес:</strong> г. Оренбург, пер. Дмитриевский д.2</p>
                <p>Наш офис удобно расположен в центре города, где мы всегда готовы встретить вас и предоставить полную
                    информацию о наших продуктах и услугах.</p>
                <h2>Свяжитесь с нами</h2>
                <div class="contact-info">
                    <div class="info-block">
                        <h3>Телефон:</h3>
                        <a href="tel:89058436464">+7 (905) 843-64-64</a>
                        <p>Звоните нам в рабочее время, и наши менеджеры ответят на все ваши вопросы.</p>
                    </div>
                    <div class="info-block">
                        <h3>Почта:</h3>
                        <a href="mailto:info@carduuscarin.ru">info@carduuscarin.ru</a>
                        <p>Отправьте нам письмо, и мы постараемся ответить вам в течение одного рабочего дня.</p>
                    </div>
                    <div class="info-block">
                        <h3>Режим работы:</h3>
                        <p>Понедельник — Пятница: 10:00 — 18:00<br>Суббота, Воскресенье: Выходной</p>
                        <p>Посетите нас в офисе в удобное для вас время!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.72757835596!2d55.10542227651849!3d51.75630487187093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x417bf094036adcdf%3A0xe4c2c764e0439ae0!2z0L_QtdGALiDQlNC80LjRgtGA0LjQtdCy0YHQutC40LksIDIsINCe0YDQtdC90LHRg9GA0LMsINCe0YDQtdC90LHRg9GA0LPRgdC60LDRjyDQvtCx0LsuLCA0NjAwMTQ!5e0!3m2!1sru!2sru!4v1738772100358!5m2!1sru!2sru"
                    style="border:0; width: 100%; height: 420px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h2>Банковские реквизиты</h2>
                <p>Если вам нужно оплатить наш товар или услуги, воспользуйтесь следующими реквизитами:</p>
                <div class="bank-details">
                    <div>
                        <p>ИНН 5609206952   КПП 560901001</p>
                        <p>ОГРН  1245600011656  БИК 045354601</p>
                    </div>
                    <div>
                        <p>Р/c  40702 810 8 4600 0024913</p>
                        <p>К/c  30101 810 6 0000 0000601</p>
                    </div>
                    <div>
                        <p>Банк:</p>
                        <p>ОРЕНБУРГСКОЕ ОТДЕЛЕНИЕ N8623 ПАО СБЕРБАНК</p>
                    </div>
                    <div>
                        <p>Адрес банка:</p>
                        <p>г. Оренбург, ул. Володарского, д.16</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer/>

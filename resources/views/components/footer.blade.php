<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column">

                <a href="{{ url('/') }}" class="footer__logo-link">
                    <img src="{{ URL::asset('images/logofoot.png') }}" alt="логотип" class="footer__logo">
                </a>

                <p class="footer__text-left">
                    Комиссионный магазин в Томске.
                </p>

                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-phone"></i>
                    <a href="tel:89528052426" class="footer__contacts-link">8 (3822) 505 - 205</a>
                </div>
                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-phone"></i>
                    <a href="tel:89528052426" class="footer__contacts-link">8 (3822) 599 - 083</a>
                </div>
                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-clock-o"></i>
                    <p class="footer__contacts-text">Пн-Вс: 09:00 - 18:00</p>
                </div>
                {{--                <div class="footer__contacts-wrapper">--}}
                {{--                    <i class="icon fa fa-location-arrow"></i>--}}
                {{--                    <a href="#" class="footer__contacts-link">4730 Crystal Springs Dr, Los Angeles, CA 90027</a>--}}
                {{--                </div>--}}

            </div>
            <div class="footer__column">
                <p class="footer__title">Оставить заявку</p>
                <p class="footer__subtitle">Оставьте Ваш номер телефона и мы Вам перезвоним</p>
                <form action="{{ url('/sendemail/send') }}" method="post">
                    {{ csrf_field() }}
                    <input type="tel" class="footer__input" name="tel" placeholder="+7 999 999 99-99" required>
                    <button class="footer__btn">Отправить</button>
                </form>

                <div class="footer__follow">
                    <p class="footer__follow-text">Мы в соцсетях:</p>

                    <a href="#" class="footer__follow-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer__follow-link"><i class="fab fa-vk"></i></a>
                    <a href="#" class="footer__follow-link"><i class="fab fa-facebook-f"></i></a>




                </div>


            </div>
            <div class="footer__column footer__column-menu">
                <p class="footer__title">Меню</p>
                <div class="footer__link-wrapper">

                    <div>
                        <a href="{{ url('/') }}" class="footer__menu-link">Главная</a>
                    </div>
                    <div>
                        <a href="{{ url('/promyshlennaya-teploizolyaciya') }}" class="footer__menu-link">Скупка телефонов</a>
                    </div>


                    <div>
                        <a href="{{ url('/about') }}" class="footer__menu-link">Скупка инструмента</a>
                    </div>
                    <div>
                        <a href="{{ url('/contacts') }}" class="footer__menu-link">Контакты</a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</footer>

{{--<div class="razrab">--}}
{{--    <div class="container">--}}
{{--        <div class="razrab__inner">--}}
{{--            <p class="razrab__text"><a href="https://gagarin-digital.ru/" class="razrab__link" target="_blank">Разработка сайта: </a><b> Gagarin-digital.ru</b></p>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

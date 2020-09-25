<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>


<?php $home = '/' ?>
<header class="header">

    <div class="header__top">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo-wrapper">
                    @if($home == $_SERVER['REQUEST_URI'])
                        <img src="{{ URL::asset('images/logo.png') }}" alt="Изотермакс" class="header__logo">
                    @else
                        <a href="{{ url('/') }}" class="header__logo-link">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="Изотермакс" class="header__logo">
                        </a>
                    @endif
                </div>

                <div class="header__contacts">

                        <p class="header__contacts-text">Высокая оценка</p>
                        <p class="header__contacts-text">Оформление и расчет за 5 минут</p>
                        <p class="header__contacts-text">Онлайн оценка</p>

                </div>

                <div class="header__popup">
                    <div class="header__popup-wrapper">
                        <p class="header__popup-text">ул. Шевченко, 21а:</p>
                        <a href="tel:83822941199" class="header__phone">8 (3822) 505 - 205</a>
                    </div>
                    <div class="header__popup-wrapper">
                        <p class="header__popup-text">ул. Учебная, 18:</p>
                        <a href="tel:83822941199" class="header__phone">8 (3822) 599 - 083</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="header__bottom">
        <div class="container">
            <div class="header__bottom-inner">
                <nav class="header__nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                    <ul class="header__list" itemprop="about" itemscope="" itemtype="http://schema.org/ItemList">

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/') }}" itemprop="url">Главная</a>
                            <meta itemprop="name" content="Главная" />
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/skupka-telefonov') }}" itemprop="url">Скупка телефонов</a>
                            <meta itemprop="name" content="Скупка телефонове" />
                        </li>


                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/skupka-instrumentov') }}" itemprop="url">Скупка инструментов</a>
                            <meta itemprop="name" content="Скупка инструментов" />
                        </li>


                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/contacts') }}" itemprop="url">Контакты</a>
                            <meta itemprop="name" content="Контакты" />
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



</header>


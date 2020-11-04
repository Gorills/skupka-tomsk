@extends('layouts.custom')

@section('title', 'Контакты | Авангардъ')
@section('description', 'Контакты | Авангардъ')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Контакты | Авангардъ')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', 'Контакты | Авангардъ')
@section('twitter:description', 'Контакты | Авангардъ')


@section('content')

    <?php $pages = 'Контакты' ?>

    @component('components.breadcrumb')
   

        @slot('parent') Главная @endslot

     
        @slot('active') Контакты @endslot
        @slot('activelink') {{ url('/contacts') }} @endslot



    @endcomponent


    <div class="contacts-pawnshop">
        <div class="container">
            <div class="contacts-pawnshop__contacts">
                <p>КОНТАКТЫ</p>
            </div>

            <div class="contacts-pawnshop__top">
                <p>ул. Шевченко, 21а</p>
                <p>тел.: 505-205</p>
                <p>тел.: 8-913-820-52-05</p>
            </div>
            <div class="contacts-pawnshop__bottom">
                <p>ул. Учебная, 18</p>
                <p>тел.: 599-083</p>
                <p>тел.: 8-913-829-90-83</p>
            </div>

            <div style="margin-top: 20px;text-align: center">
                Если у вас возникли вопросы или пожелания по нашей работе, вы можете обратиться непосредственно к
                руководству по телефону <br><b>8-952-800-50-25</b>
            </div>

        </div>
    </div>

    <div class="search">
        <div class="container">
            <div class="search__text">
                <p>КАК НАС НАЙТИ</p>
            </div>
            <div class="search__map-top">
                <p>ул. Учебная, 18</p>
                <a class="dg-widget-link" href="http://2gis.ru/tomsk/firm/70000001037420636/center/
            84.94961500167848,56.46020240104717/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
                    Посмотреть на карте Томска</a><div class="dg-widget-link"><a href="http://2gis.ru/tomsk/center/84.949615,56.459093/
                zoom/16/routeTab/rsType/bus/to/84.949615,56.459093╎Авангардъ, сеть комиссионных магазинов?utm_medium=
                widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Авангардъ, сеть комиссионных магазинов
                    </a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">
                    new DGWidgetLoader({"width":1200,"height":400,"borderColor":"#a3a3a3","pos":{"lat":56.46020240104717,
                            "lon":84.94961500167848,"zoom":16},"opt":{"city":"tomsk"},"org":[{"id":"70000001037420636"}]});
                </script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript.
                    Включите его в настройках вашего браузера.</noscript>

            </div>
            <div class="search__map-bottom">
                <p>ул. Шевченко, 21а</p>
                <a class="dg-widget-link" href="http://2gis.ru/tomsk/firm/70000001037420736/
            center/84.99146819114686,56.47698637464134/zoom/17?utm_medium=widget-source&utm_campaign=
            firmsonmap&utm_source=bigMap">Посмотреть на карте Томска</a><div class="dg-widget-link">
                    <a href="http://2gis.ru/tomsk/center/84.991947,56.47643/zoom/17/routeTab/rsType/bus/to/
            84.991947,56.47643╎Авангардъ, сеть комиссионных магазинов?utm_medium=
            widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Авангардъ,
                        сеть комиссионных магазинов</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js">
                </script><script charset="utf-8">new DGWidgetLoader({"width":1200,"height":400,"borderColor":"#a3a3a3","pos":{"lat":56.47698637464134,
                            "lon":84.99146819114686,"zoom":17},"opt":{"city":"tomsk"},"org":[{"id":"70000001037420736"}]});
                </script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует
                    JavaScript. Включите его в настройках вашего браузера.</noscript>

            </div>
        </div>
    </div>




@endsection




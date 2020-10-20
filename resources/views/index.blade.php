@extends('layouts.custom')

@section('title', 'Комиссионный магазин в Томске | Покупка и продажа техники в Томске')
@section('description', 'Покупаем технику бу в Томске по самым выгодным ценам. Скупка техники: быстро, дорого.')
@section('keywords', 'комиссионный магазин, скупка техники, сдать технику, продать технику')
@section('canonical', 'https://skupka-tomsk.ru/')
@section('og:title', 'Комиссионный магазин в Томске | Покупка и продажа техники в Томске')
@section('og:description', 'Покупаем технику бу в Томске по самым выгодным ценам. Скупка техники: быстро, дорого.')
@section('og:url', 'https://skupka-tomsk.ru/')
@section('twitter:title', 'Комиссионный магазин в Томске | Покупка и продажа техники в Томске')
@section('twitter:description', 'Покупаем технику бу в Томске по самым выгодным ценам. Скупка техники: быстро, дорого.')


@section('content')


    @php ($pages = 'Главная')

    <section class="start">
        <div class="container">
            <div class="start__inner">
                <h1 class="start__title">Комиссионный магазин в Томске</h1>

                <p class="start__text">Быстрая оценка и выгодные цены. Скупаем б/у технику.</p>

                <p class="start__subtitle">Мы покупаем:</p>

                <div class="start__wrapper">


                    <a href="{{ url('/skupka-telefonov') }}" class="start__item">
                        <img src="{{ URL::asset('images/item/1.png') }}" alt="Скупка телефонов" class="start__img">
                        <p class="start__item-text">Телефоны</p>
                    </a>

                    <a href="{{ url('/skupka-instrumentov') }}" class="start__item">
                        <img src="{{ URL::asset('images/item/2.png') }}" alt="Скупка инструмента" class="start__img">
                        <p class="start__item-text">Строительный инструмент</p>
                    </a>
                    <a href="{{ url('/skupka-instrumentov') }}" class="start__item">
                        <img src="{{ URL::asset('images/item/telev.png') }}" alt="Скупка телевизоров" class="start__img">
                        <p class="start__item-text">Телевизоры</p>
                    </a>
                    <a href="{{ url('/skupka-instrumentov') }}" class="start__item">
                        <img src="{{ URL::asset('images/item/plan.png') }}" alt="Скупка планшетов" class="start__img">
                        <p class="start__item-text">Планшеты</p>
                    </a>
                    <a href="{{ url('/skupka-instrumentov') }}" class="start__item">
                        <img src="{{ URL::asset('images/item/magn.png') }}" alt="Скупка магнитол" class="start__img">
                        <p class="start__item-text">Магнитолы</p>
                    </a>
                    <a href="{{ url('/skupka-instrumentov') }}" class="start__item">
                        <img src="{{ URL::asset('images/item/comp.png') }}" alt="Скупка компьютеров" class="start__img">
                        <p class="start__item-text">Компьютеры</p>
                    </a>

                </div>

                @component('components.form')
                    @slot('select')
                        <label for="select">Что сдаем?</label>
                        <select class="form__input" name="select" id="select">
                            <option value="Телефон">Телефон</option>
                            <option value="Инструмент">Инструмент</option>
                            <option value="Инструмент">Телевизор</option>
                            <option value="Инструмент">Магнитолу</option>
                            <option value="Инструмент">Планшет</option>
                            <option value="Инструмент">Компьютер</option>
                        </select>
                    @endslot
                @endcomponent

            </div>
        </div>
    </section>


    <section class="about">
        <div class="container">
            <div class="about__inner">
                <h2 class="about__title">Комиссионный магазин "Авангардъ"</h2>
                <p class="about__text">
                    Мы предоставляем услуги скупки техники в Томске и делаем это уже давно. В нашем комиссионном магазине действуют самые выгодные цены
                    в Томске и моментальная оценка. Вы легко можете продать любую технику, просто обратившись в наши магазины по адресам: ул. Шевченко, 21а,
                    ул. Учебная, 18.
                </p>
                <p class="about__text">В наших магазинах вы можете найти большой ассортимент техники в отличном состоянии. Для того, чтобы
                просмотреть каталог нашего комиссионного магазина перейдите по ссылке ниже.
                </p>
                <div class="about__wrapper">
                    <a href="https://lombardvtomske.ru/catalog" class="about__link">В магазин</a>

                </div>

            </div>
        </div>
    </section>



@endsection

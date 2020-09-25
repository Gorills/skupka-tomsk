@extends('layouts.custom')

@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', '')
@section('twitter:description', '')


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
                        <img src="{{ URL::asset('images/item/2.png') }}" alt="Скупка телефонов" class="start__img">
                        <p class="start__item-text">Строительный инструмент</p>
                    </a>

                </div>

                @component('components.form')
                    @slot('select')
                        <label for="select">Что сдаем?</label>
                        <select class="form__input" name="select" id="select">
                            <option value="Телефон">Телефон</option>
                            <option value="Инструмент">Инструмент</option>
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
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore ea earum eligendi esse ex harum iure laborum magnam molestiae nobis officia omnis, porro quia reprehenderit vero voluptatem! Blanditiis, consectetur.</p>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore ea earum eligendi esse ex harum iure laborum magnam molestiae nobis officia omnis, porro quia reprehenderit vero voluptatem! Blanditiis, consectetur.</p>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore ea earum eligendi esse ex harum iure laborum magnam molestiae nobis officia omnis, porro quia reprehenderit vero voluptatem! Blanditiis, consectetur.</p>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore ea earum eligendi esse ex harum iure laborum magnam molestiae nobis officia omnis, porro quia reprehenderit vero voluptatem! Blanditiis, consectetur.</p>


            </div>
        </div>
    </section>



@endsection

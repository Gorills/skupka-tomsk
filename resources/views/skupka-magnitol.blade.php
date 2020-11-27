@extends('layouts.custom')

@section('title', 'Скупка аудиотехники в Томске по самым выгодным ценам | Продать аудиотехнику ')
@section('description', 'Сдать аудиотехнику в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('keywords', 'продать аудиотехнику, сдать аудиотехнику, скупка аудиотехники')
@section('canonical', 'https://skupka-tomsk.ru/skupka-magnitol')
@section('og:title', 'Скупка аудиотехники в Томске по самым выгодным ценам | Продать аудиотехнику ')
@section('og:description', 'Сдать аудиотехнику в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены.')
@section('og:url', 'https://skupka-tomsk.ru/skupka-magnitol')
@section('twitter:title', 'Скупка аудиотехники в Томске по самым выгодным ценам | Продать аудиотехнику')
@section('twitter:description', 'Сдать аудиотехнику в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')


@section('content')

    <?php $pages = 'Скупка аудиотехники' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot

        {{--        @slot('prev') Промышленная теплоизоляция @endslot--}}
        {{--        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot--}}

        @slot('active') Скупка аудиотехники @endslot
        @slot('activelink') {{ url('/skupka-magnitol') }} @endslot



    @endcomponent


    <section class="pages">
        <div class="container">
            <div class="pages__inner">
                <h1 class="pages__title">Скупка аудиотехники в Томске</h1>
                <p class="pages__text">Покупка аудиотехники б/у в Томске по самым выгодным ценам. Для того, чтобы оценить Вашу аудиотехнику,
                    оставьте заявку в форме ниже или свяжитесь с нами по телефону. Для быстрой оценки можно отправить фотографии и модель телефона нам
                    на Whatsapp.</p>


                @component('components.form')

                    @slot('select')
                        <textarea class="form__input" name="msg" id="" cols="30" rows="10" placeholder="Характеристики или описание товара"></textarea>

                        <select hidden="hidden" class="form__input" name="select" id="select">

                            <option selected value="Аудиотехника">аудиотехника</option>
                        </select>
                    @endslot


                @endcomponent


            </div>
        </div>
    </section>


    <section class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h2 class="optimize__title">Продать аудиотехнику </h2>
                <p class="optimize__text">Наш комиссионный магазин принимает все модели аудиотехники
                    по самым выгодным для Вас ценам. Продать аудиотехнику можно обратившись в любой филиал нешего комиссионного
                    магазина или же обратившись к нам по телефону, а так же в мессенджере Whatsapp.</p>
                <p class="optimize__text">
                    Есть несколько условий, которые действуют при скупке аудиотехники:
                </p>
                <ul>
                    <li>Аудиотехника должна быть в рабочем состоянии</li>
                    <li>Иметь тофарный вид</li>
                    <li>Наличие коробки и аксессуаров увеличивают стоимость смартфона.</li>
                </ul>


            </div>
        </div>
    </section>




@endsection

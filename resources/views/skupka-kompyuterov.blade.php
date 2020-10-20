@extends('layouts.custom')

@section('title', 'Скупка компьютеров в Томске по самым выгодным ценам | Продать компьютер ')
@section('description', 'Сдать компьютер в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('keywords', 'продать компьютер, сдать компьютер, скупка компьютеров')
@section('canonical', 'https://skupka-tomsk.ru/skupka-kompyuterov')
@section('og:title', 'Скупка компьютеров в Томске по самым выгодным ценам | Продать компьютер')
@section('og:description', 'Сдать компьютер в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('og:url', 'https://skupka-tomsk.ru/skupka-kompyuterov')
@section('twitter:title', 'Скупка компьютеров в Томске по самым выгодным ценам | Продать компьютер ')
@section('twitter:description', 'Сдать компьютер в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены.')


@section('content')

    <?php $pages = 'Скупка компьютеров' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot

        {{--        @slot('prev') Промышленная теплоизоляция @endslot--}}
        {{--        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot--}}

        @slot('active') Скупка компьютеров @endslot
        @slot('activelink') {{ url('/skupka-kompyuterov') }} @endslot



    @endcomponent


    <section class="pages">
        <div class="container">
            <div class="pages__inner">
                <h1 class="pages__title">Скупка компьютеров в Томске</h1>
                <p class="pages__text">Покупка компьютеров б/у в Томске по самым выгодным ценам. Для того, чтобы оценить Ваш компьютер,
                    оставьте заявку в форме ниже или свяжитесь с нами по телефону. Для быстрой оценки можно отправить фотографии и модель телефона нам
                    на Whatsapp.</p>


                @component('components.form')

                    @slot('select')
                        <textarea class="form__input" name="msg" id="" cols="30" rows="10" placeholder="Характеристики или описание товара"></textarea>

                        <select hidden="hidden" class="form__input" name="select" id="select">

                            <option selected value="Инструмент">компьютер</option>
                        </select>
                    @endslot


                @endcomponent


            </div>
        </div>
    </section>


    <section class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h2 class="optimize__title">Продать компьютер</h2>
                <p class="optimize__text">Наш комиссионный магазин принимает все модели компьютеров и ноутбуков
                    по самым выгодным для Вас ценам. Продать компьютер можно обратившись в любой филиал нешего комиссионного
                    магазина или же обратившись к нам по телефону, а так же в мессенджере Whatsapp.</p>
                <p class="optimize__text">
                    Есть несколько условий, которые действуют при скупке компьютеров:
                </p>
                <ul>
                    <li>Компьютер должен быть в рабочем состоянии</li>
                    <li>Иметь тофарный вид</li>
                    <li>Наличие коробки и аксессуаров увеличивают стоимость смартфона.</li>
                </ul>


            </div>
        </div>
    </section>




@endsection

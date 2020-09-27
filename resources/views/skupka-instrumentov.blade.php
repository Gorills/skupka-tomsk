
@extends('layouts.custom')

@section('title', 'Скупка инструмента в Томске по самым выгодным ценам | Продать строительный инструмент')
@section('description', 'Сдать инструмент в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('keywords', 'скупка инструмента, продать строительный инструмент, сдать инструмент')
@section('canonical', 'https://skupka-tomsk.ru/skupka-instrumentov')
@section('og:title', 'Скупка инструмента в Томске по самым выгодным ценам | Продать строительный инструмент')
@section('og:description', 'Сдать инструмент в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('og:url', 'https://skupka-tomsk.ru/skupka-instrumentov')
@section('twitter:title', 'Скупка инструмента в Томске по самым выгодным ценам | Продать строительный инструмент')
@section('twitter:description', 'Сдать инструмент в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')


@section('content')

    <?php $pages = 'Скупка телефонов' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot

        {{--        @slot('prev') Промышленная теплоизоляция @endslot--}}
        {{--        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot--}}

        @slot('active') Скупка инструментов @endslot
        @slot('activelink') {{ url('/skupka-telefonov') }} @endslot



    @endcomponent


    <section class="pages">
        <div class="container">
            <div class="pages__inner">
                <h1 class="pages__title">Скупка инструментов в Томске</h1>
                <p class="pages__text">Покупка строительных инструментов б/у в Томске по самым выгодным ценам. Для того, чтобы оценить Ваш инструмент,
                    оставьте заявку в форме ниже или свяжитесь с нами по телефону. Для быстрой оценки можно отправить фотографии и модель инструмента нам
                    на Whatsapp.</p>


                @component('components.form')

                    @slot('select')
                        <textarea class="form__input" name="msg" id="" cols="30" rows="10" placeholder="Описание"></textarea>
                    @endslot


                @endcomponent


            </div>
        </div>
    </section>


    <section class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h2 class="optimize__title">Продать инструмент / строительный инструмент </h2>
                <p class="optimize__text">Наш комиссионный магазин принимает все модели электроинструментов
                    по самым выгодным для Вас ценам. Продать инструмент можно обратившись в любой филиал нешего комиссионного
                    магазина или же обратившись к нам по телефону, а так же в мессенджере Whatsapp.</p>
                <p class="optimize__text">
                    Есть несколько условий, которые действуют при скупке инструмента:
                </p>
                <ul>
                    <li>Он должен быть в рабочем состоянии</li>
                    <li>Иметь тофарный вид</li>
                    <li>Наличие коробки и аксессуаров увеличивают стоимость.</li>
                </ul>


            </div>
        </div>
    </section>




@endsection

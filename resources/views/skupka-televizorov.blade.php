@extends('layouts.custom')

@section('title', 'Скупка телевизоров в Томске по самым выгодным ценам | Продать телевизор ')
@section('description', 'Сдать телевизор в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('keywords', 'продать телевизор, сдать телевизор, скупка телевизоров')
@section('canonical', 'https://skupka-tomsk.ru/skupka-televizorov')
@section('og:title', 'Скупка телевизоров в Томске по самым выгодным ценам | Продать телевизор ')
@section('og:description', 'Сдать телевизор в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')
@section('og:url', 'https://skupka-tomsk.ru/skupka-televizorov')
@section('twitter:title', 'Скупка телевизоров в Томске по самым выгодным ценам | Продать телевизор ')
@section('twitter:description', 'Сдать телевизор в комиссионный магазин в Томске дорого. Быстрая оценка, моментальные выплаты, выгодные цены. ')


@section('content')

    <?php $pages = 'Скупка телевизоров' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot

        {{--        @slot('prev') Промышленная теплоизоляция @endslot--}}
        {{--        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot--}}

        @slot('active') Скупка телефонов @endslot
        @slot('activelink') {{ url('/skupka-televizorov') }} @endslot



    @endcomponent


    <section class="pages">
        <div class="container">
            <div class="pages__inner">
                <h1 class="pages__title">Скупка телевизоров в Томске</h1>
                <p class="pages__text">Покупка телевизоров б/у в Томске по самым выгодным ценам. Для того, чтобы оценить Ваш телевизор,
                    оставьте заявку в форме ниже или свяжитесь с нами по телефону. Для быстрой оценки можно отправить фотографии и модель телефона нам
                    на Whatsapp.</p>


                @component('components.form')

                    @slot('select')
                        <textarea class="form__input" name="msg" id="" cols="30" rows="10" placeholder="Характеристики или описание товара"></textarea>

                        <select hidden="hidden" class="form__input" name="select" id="select">

                            <option selected value="Инструмент">телевизор</option>
                        </select>
                    @endslot


                @endcomponent


            </div>
        </div>
    </section>


    <section class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h2 class="optimize__title">Продать телевизор </h2>
                <p class="optimize__text">Наш комиссионный магазин принимает все модели телевизоров и smartTV
                    по самым выгодным для Вас ценам. Продать телевизор можно обратившись в любой филиал нешего комиссионного
                    магазина или же обратившись к нам по телефону, а так же в мессенджере Whatsapp.</p>
                <p class="optimize__text">
                    Есть несколько условий, которые действуют при скупке телевизоров:
                </p>
                <ul>
                    <li>Телевизор должен быть в рабочем состоянии</li>
                    <li>Иметь тофарный вид</li>
                    <li>Наличие коробки и аксессуаров увеличивают стоимость смартфона.</li>
                </ul>


            </div>
        </div>
    </section>




@endsection

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ URL::asset('css/site.css?').('v.1.0.1') }}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />
    <meta name="theme-color" content="#9d231f">
    <meta property="og:site_name" content="" />
    <meta property="vk:image" content="{{ URL::asset('images/og.jpg') }}" />
    <meta property="og:image" content="{{ URL::asset('images/og.jpg') }}" />
    <meta property="og:image" content="{{ URL::asset('images/og-mess.jpg') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('twitter:title')" />
    <meta name="twitter:description" content="@yield('twitter:description')" />

    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{URL::asset('favicon-32x32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{URL::asset('/fav/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('/fav/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('/fav/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/fav/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('/fav/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('/fav/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('/fav/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('/fav/apple-touch-icon-152x152.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('/fav/apple-touch-icon-180x180.png')}}" />
    <meta name="yandex-verification" content="34a2d5fe101a988e" />
    <meta name="google-site-verification" content="5OVqQTkB1AhcZO1pSNpu-2tnYA5IffDrWKT0fVc-EVk" />
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(68476057, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68476057" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>



@component('components.header')

@endcomponent





@yield('content')



<div class="phone-btn">
    <a href="#" class="phone-btn__link show_popup">
        <i class="phone-btn__icon fas fa-phone"></i>
    </a>
</div>

<div class="whatsapp-btn">
    <a href="#" class="whatsapp-btn__link show_popup2">
        <i class="whatsapp-btn__icon fab fa-whatsapp"></i>
    </a>
</div>

<div class="overlay_popup"></div>
<div class="popup">
    <div class="container">
        <p class="popup__title">Позвонить</p>
        <a href="tel:505205" class="popup__link">На Шевченко, 21а </a>
        <a href="tel:599083" class="popup__link">На Учебную, 18</a>
    </div>

</div>


<div class="overlay_popup2"></div>
<div class="popup2">
    <div class="container">
        <p class="popup2__title">Написать</p>
        <a href="https://wa.me/79138205205" class="popup__link">На Шевченко, 21а </a>
        <a href="https://wa.me/79138299083" class="popup__link">На Учебную, 18</a>
    </div>

</div>






@component('components.footer')

@endcomponent




@component('components.schema')

@endcomponent






<style src="{{ URL::asset('js/app.js') }}"></style>
<script src="{{ URL::asset('js/site.js') }} "></script>


</body>
</html>

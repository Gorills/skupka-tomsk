
global.jquery = global.jQuery = global.$ = require('jquery');


// require('./owl.carousel.min');
require('./slick.min');


$('.slick').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,

    prevArrow: "<i class=\"fas fa-angle-left prev\"></i>",
    nextArrow: "<i class=\"fas fa-angle-right next\"></i>",
});


$(window).scroll(function() {
    var height = $(window).scrollTop();
    var width = $(window).width();
    /*Если сделали скролл на 100px задаём новый класс для header*/
    if((height > 500) & (width > 992)){
        $('header').addClass('header--fixed');
        $('body').css('padding-top', '180px');


    } else{
        /*Если меньше 100px удаляем класс для header*/
        $('header').removeClass('header--fixed');
        $('.breadcrumb').removeClass('breadcrumb--active');
        $('body').css('padding-top', '0');
    }
});



$(".menu-btn").click(function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $(".header").toggleClass('header--active');

})

// $(".header__link").click(function(e) {
//     $(".menu-btn").removeClass('menu-btn_active');
//     $(".header").removeClass('header--active');
//
// })


$('.show_popup').click(function(e) { // Вызываем функцию по нажатию на кнопку
    e.preventDefault();
    $('.popup').show(); // Открываем блок заднего фона
    $('.overlay_popup').show(); // Открываем блок заднего фона
})
$('.overlay_popup').click(function() { // Обрабатываем клик по заднему фону
    $('.overlay_popup, .popup').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})

$('.show_popup2').click(function(e) { // Вызываем функцию по нажатию на кнопку
    e.preventDefault();
    $('.popup2').show(); // Открываем блок заднего фона
    $('.overlay_popup2').show(); // Открываем блок заднего фона
})
$('.overlay_popup2').click(function() { // Обрабатываем клик по заднему фону
    $('.overlay_popup2, .popup2').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})

$(".header__item--dropdown").click(function(e) {
    e.preventDefault();
    $(".header__dropdown").toggleClass('header__dropdown--active');

    $(".header__item").toggleClass('header__item--active');
})

$(document).ready(function() {
    var margin = 100; // переменная для контроля докрутки
    $("a").click(function() { // тут пишите условия, для всех ссылок или для конкретных
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top+margin+ "px" // .top+margin - ставьте минус, если хотите увеличить отступ
        }, {
            duration: 1600, // тут можно контролировать скорость
            easing: "swing"
        });
        return false;
    });
});

jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__link"),function(){
        if(this.href==url){
            $(this).addClass('header__link--active');
        }
    });
});

jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__dropdown-link"),function(){
        if(this.href==url){
            $(this).addClass('header__dropdown-link--active');
        }
    });
});







<form action="{{ url('/sendemail/send') }}" method= "post" class="form">
    {{ csrf_field() }}
    <h3 class="form__title">Оставить заявку</h3>
    <input type="text" class="form__input" name="name" placeholder="Имя">
    <input type="tel" class="form__input" name="tel" placeholder="Телефон">
    <input type="text" hidden="hidden" name="page" value="{{ $pages ?? '' }}">


    {{ $select }}


    <button type="submit" class="btn btn__accent form__btn">Отправить</button>
</form>

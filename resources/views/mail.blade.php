
<h3>Заявка с сайта:</h3>

@if($data['name'])
<p>Имя: {{ $data['name'] }}</p>
@else

@endif

<p>Телефон: {{ $data['tel'] }}</p>

@if($data['select'])
    <p>Что сдают: {{ $data['select'] }}</p>
@else

@endif

@if($data['msg'])
    <p>Описание / сообщение: {{ $data['msg'] }}</p>
@else

@endif




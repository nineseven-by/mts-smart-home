<div>
    Заявлка на консультацию от клиента: <b>{{ $consultation->name }}</b><br>
    Номер телефона клиента: <b>{{ $consultation->phone }}</b><br>
    Комментарий клиента:
    @if ($consultation->comment !== null)
        <b>{{ $consultation->comment }}</b>
    @else
        <b> нет </b>
    @endif
</div>
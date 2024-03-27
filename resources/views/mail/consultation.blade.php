<div>
    Заявлка на консультацию от клиента {{ $consultation->name }}<br>
    Номер телефона клиента: {{ $consultation->phone }}<br>
    @if ($consultation->comment !== null)
        Комментарий клиента: {{ $consultation->comment }}
    @endif
</div>
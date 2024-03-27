<div>
    Заявлка на оформление товара {{ $order->good_id }} от клиента {{ $order->name }}<br>
    Номер телефона клиента: {{ $order->phone }}<br>
    @if ($order->comment !== null)
        Комментарий клиента: {{ $order->comment }}
    @endif
</div>
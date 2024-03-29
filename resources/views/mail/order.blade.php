<div>
    <div>
    Заявлка на оформление товара <b>{{ $order->good }}</b> от клиента: <b>{{ $order->name }}</b><br>
    Номер телефона клиента: <b>{{ $order->phone }}</b><br>
    Комментарий клиента:
    @if ($order->comment !== null)
        <b>{{ $order->comment }}</b>
    @else
        <b> нет </b>
    @endif
</div>
</div>
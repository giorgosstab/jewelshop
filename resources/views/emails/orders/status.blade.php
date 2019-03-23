@component('mail::message')
# Hey, Dear customer {{ $order->billing_fname  }} {{ $order->billing_lname }}

Order status __{{ $status }}__ changed!

<br>


## {{ config('app.name') }}.io Order Number: #{{ $order->id }}

@component('mail::panel')
# Pick up in store ![logo]
[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 2"
@component('mail::table')
    | Product Name               |               Product Quantity           |               Product Price             |
    | :-----------------------   | --------------------------------------:  | --------------------------------------: |
    @foreach($order->products as $product)
    |  {{$product->name}}        |        {{$product->pivot->quantity}}     |        {{$product->presentPrice()}}     |
    @endforeach
    |                            |                  __Sub Total:__          |  __€{{$order->presentSubTotal()}}__     |
    |                            |                     __Tax:__             |      __€{{$order->presentTax()}}__      |
    |                            |               __Total Price:__           |     __€{{$order->presentTotal()}}__     |
@endcomponent
@endcomponent

Delivery usually take 2-10 days after it leaves our warehouse. Its also may take up
to 24 hours for your Confirmation Number to return any information.

@component('mail::subcopy')
    If you’re having trouble to see images or something else of your order, copy and paste the URL below
    into your web browser: {!! route('shop.order.show',[$order->unique_id]) !!}
@endcomponent

Regards,
<br>
{{ config('app.name') }}
@endcomponent

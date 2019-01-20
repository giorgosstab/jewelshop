@component('mail::message')
# Hey, {{ $order->billing_fname  }} {{ $order->billing_lname }}

Thank you for ordering for {{ config('app.name') }}.io Here's a summary of your order.

<br>



## {{ config('app.name') }}.io Order Number: #{{ $order->id }}

@component('mail::panel')
# Pick up in store ![logo]
[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 2"
@component('mail::table')
    | Product Name               |               Product Quantity           |               Product Price             |
    | :-----------------------   | --------------------------------------:  | --------------------------------------: |
    @foreach($order->products as $product)
    |  {{$product->name}}        |        {{$product->pivot->quantity}}     |        {{$product->price / 100}}        |
    @endforeach
    |                            |                  <b>Sub Total:</b>       |<b>€{{$order->billing_subtotal / 100}}</b>|
    |                            |                     <b> Tax:</b>         |   <b>€{{$order->billing_tax / 100}}  </b>|
    |                            |               <b> Total Price: </b>      |  <b>€{{$order->billing_total / 100}} </b>|
@endcomponent
@endcomponent
<br>
@component('mail::panel')
    # Billing Information
@endcomponent



    Regards,<br>
    {{ config('app.name') }}
@endcomponent

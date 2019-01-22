@component('mail::message')
# Hey, {{ $order->billing_fname  }} {{ $order->billing_lname }}

Thank you for ordering of __{{ str_replace(array('http://','https://'), '', url('/')) }}__ Here's a summary of your order.

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

@component('mail::panel')
# Billing Information
@component('mail::table')
| Billing Address:             |   Payment-Delivery Method |
| :--------------------------  | :----------------------:  |
| <ul style="list-style: none;"><li>__Full Name:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_fname }} {{ $order->billing_lname }}</span></li><li>__E-mail Address:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_email }}</span></li><li>__Address:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_address }}, {{ $order->billing_housenumber }}</span></li><li>__City:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_city }}, {{ $order->billing_postalcode }}</span></li><li>__Country:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_locality }},  {{ $order->billing_country }}</span></li><li>__Phone Number:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_phone }}</span></li></ul>| <ul style="list-style: none;"><li>__Delivery Method:__ <span style="border-bottom: 1px dotted #000">{{ $order->delivery_gateway }}</span></li><li>__Payment Method:__ <span style="border-bottom: 1px dotted #000">{{ $order->payment_gateway }}</span></li>@if(!empty($order->name_on_card) ) <li>__Card Holder:__ <span style="border-bottom: 1px dotted #000">{{ $order->name_on_card }}</span></li> @endif</ul>|
@endcomponent
@if($order->different_shipping_address == 0)
@component('mail::table')
    | Shipping Address:             |   Coupon Details |
    | :--------------------------  | :----------------------:  |
    | <ul style="list-style: none;"><li>__Address:__ {{ $order->billing_address }}, {{ $order->billing_housenumber }}</li><li>__City:__ {{ $order->billing_city }}, {{ $order->billing_postalcode }}</li><li>__Country:__ {{ $order->billing_locality }},  {{ $order->billing_country }}</li><li>__Phone Number:__ {{ $order->billing_phone }}</li></ul>| @if(!empty($order->billing_discount_code))<table class="promotion" align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border: 2px dashed #9BA2AB; margin: 0; margin-bottom: 25px; margin-top: 25px; padding: 24px; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;"><tr><td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;"><ul style="list-style: none;"><li>__Coupon Name:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_discount_code }}</span></li><li>__Coupon Discount:__ - <span style="border-bottom: 1px dotted #000">€{{ $order->presentDiscount() }}</span></li></ul></td></tr></table>@endif|
@endcomponent
@else
@component('mail::table')
    | Shipping Address:             |   Coupon Details |
    | :--------------------------  | :----------------------:  |
    | <ul style="list-style: none;"><li>__Full Name:__ <span style="border-bottom: 1px dotted #000">{{ $order->second_billing_fname }} {{ $order->second_billing_lname }}</span></li><li>__E-mail Address:__ <span style="border-bottom: 1px dotted #000">{{ $order->second_billing_email }}</span></li><li>__Address:__ <span style="border-bottom: 1px dotted #000">{{ $order->second_billing_address }}, {{ $order->second_billing_housenumber }}</span></li><li>__City:__ <span style="border-bottom: 1px dotted #000">{{ $order->second_billing_city }}, {{ $order->second_billing_postalcode }}</span></li><li>__Country:__ <span style="border-bottom: 1px dotted #000">{{ $order->second_billing_locality }},  {{ $order->second_billing_country }}</span></li><li>__Phone Number:__ <span style="border-bottom: 1px dotted #000">{{ $order->second_billing_phone }}</span></li></ul>| @if(!empty($order->billing_discount_code))<table class="promotion" align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border: 2px dashed #9BA2AB; margin: 0; margin-bottom: 25px; margin-top: 25px; padding: 24px; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;"><tr><td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;"><ul style="list-style: none;"><li>__Coupon Name:__ <span style="border-bottom: 1px dotted #000">{{ $order->billing_discount_code }}</span></li><li>__Coupon Discount:__ - <span style="border-bottom: 1px dotted #000">€{{ $order->presentDiscount() }}</span></li></ul></td></tr></table>@endif|
@endcomponent
@endif
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

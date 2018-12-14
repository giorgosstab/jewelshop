@component('mail::message')
# Activation Account

Thank you for signing up for {{ config('app.name') }}. We're happy you're here!<br>
Please click the button below to activate your account and start buying form us!

@component('mail::button', ['url' => ''])
    Activate
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent

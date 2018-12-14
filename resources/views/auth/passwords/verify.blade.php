@component('mail::message')
# Activation Account

Thank you for signing up for {{ config('app.name') }}. We're happy you're here!<br>
Please click the button below to activate your account and start buying form us!

@component('mail::button', ['url' => route('auth.activate',[
                                'token' => $user->activation_token,
                                'email' => $user->email
                            ])
            ])
    Activate
@endcomponent

@component('mail::subcopy')
    If you’re having trouble clicking the "Activate" button, copy and paste the URL below
    into your web browser: {!! route('auth.activate',[
                                                        'token' => $user->activation_token,
                                                        'email' => $user->email
                                                    ])
                            !!}
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent

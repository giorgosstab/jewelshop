@component('mail::message')
# Message from: {{ $contact->fname  }} {{ $contact->lname }}
<br>


@component('mail::panel')
# Customer Details
@component('mail::table')
    | Full Name                                    |               Phone Number               |               Country             |
    | :-----------------------------------------   | :-------------------------------------:  | --------------------------------: |
    | {{ $contact->fname  }} {{ $contact->lname }} |          {{ $contact->phone }}           |        {{ $contact->country }}     |
@endcomponent
@endcomponent

@component('mail::panel')
# Customer Message
@component('mail::promotion')
    {{ $contact->message  }}
@endcomponent
@endcomponent
Regards,
<br>
{{ config('app.name') }}
@endcomponent

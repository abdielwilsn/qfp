@component('mail::message')
# KYC Update Request

This is to inform you of our new update regarding KYC verification, we have made it mandatory for all users to update their KYC information including a valid ID number.
Please login to your dashboard to update your KYC information.

@component('mail::button', ['url' => "{{ config('app.url') }}"])
Login Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

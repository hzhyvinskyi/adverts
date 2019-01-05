@component('mail::message')
# Email Confirmation

Please refer the following link:

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
Hi, {{ $user->name }}. Forgot Your Password?

<p>It happens. Click the link below to reset your password.</p>
<p>
    @component('mail::button', ['url' => url('reset/'.$user->remember_token)])
    Reset Your Password
    @endcomponent
</p>

In case you have any issue recovering your passcode, please contact us using the form from the contact-us page.
Thanks, <br>

{{ config('app.name') }}

@endcomponent

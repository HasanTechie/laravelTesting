@component('mail::message')
# Introduction

Thanks for Registering at {{config('app.name')}}

@component('mail::button', ['url' => 'https://dawn.com'])
    Start browsing some stuff
@endcomponent

@component('mail::panel', ['url' => 'http://example.com'/*not working*/])
    Some Inspirational Quotes here :D
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

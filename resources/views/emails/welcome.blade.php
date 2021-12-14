@component('mail::message')
# Welcome to my Auth & Mailing Course

I would like to thank you for watching this video!

@component('mail::button', ['url' => 'https:://www.codewithdary.com'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

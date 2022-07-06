@component('mail::message')
# E-mail Registration
{{$message}}

@component('mail::button', ['url' => $url])
  login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# {{ $name }} Contacted Us<br><br>

__Name:__ {{ $name }}<br>
__Email:__ {{ $email }}<br>
__Message:__<br>
{{ $message }}<br><br>

Thanks,<br>
__{{ $name }}__
@endcomponent

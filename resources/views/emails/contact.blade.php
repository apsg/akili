@component('mail::message')
# Email kontaktowy ze strony {{ config('app.name') }}

IMIĘ: {{ $name }}

EMAIL: {{ $email }}

TYP: {{ $type }}

---

TREŚĆ WIADOMOŚCI:

{{ $message }}

@endcomponent

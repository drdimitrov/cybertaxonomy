@component('mail::message')
Subject: {{ $subject }}

Message: <br> {{ $content }}

Sender: {{ $senderName }}

@endcomponent

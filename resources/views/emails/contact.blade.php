{{-- Hi,

A user has sent you a message from auctionalternative.ca:

Name: {{ $contact['name'] }}

E-mail: {{ $contact['email'] }}

Message: {{ $contact['message'] }} --}}


@component('mail::message')
 <p>A user has sent you a message from auctionalternative.ca: </p>
 <br>
 <p> <strong>Name: </strong> {{ $contact['name'] }} </p>
 <p> <strong>E-mail: </strong> {{ $contact['email'] }} </p>
 <p> <strong>Message: </strong></p>
 <p>{{ $contact['message'] }}</p>
@endcomponent
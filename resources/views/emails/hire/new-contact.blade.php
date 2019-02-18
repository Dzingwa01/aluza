@component('mail::message')
Good day,
<p> You have received a new message from a potential client. The details are as below:<br/>
<b>Name: </b>{{$contact->first_name." ".$contact->last_name}}<br/>
<b>Contact Number: </b>{{$contact->contact_number}}<br/>
<b>Message: </b>{{$contact->message}}
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

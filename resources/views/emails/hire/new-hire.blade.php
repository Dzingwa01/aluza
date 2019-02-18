@component('mail::message')
Good day,<br/>

<p>A Transport Hire Request has been submitted from Aluza Flex Website. The details are as follows:<br/>
<b>Customer Name:</b>{{$hire->name}}<br/>
<b>Customer Contact Number:</b>{{$hire->phone_number}}<br/>
<b>Customer Email:</b>{{$hire->email}}<br/>
<b>Customer Address:</b>{{$hire->address}}<br/>
<b>Request Description:</b>{{$hire->description}}<br/>
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

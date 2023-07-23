<h1>Hello, {{ $mailData['name'] }}</h1>
<p>Click <a href="{{$mailData['invitationLink']}}">here</a> attend your questionnaire test or copy the link below.</p>
{{$mailData['invitationLink']}}

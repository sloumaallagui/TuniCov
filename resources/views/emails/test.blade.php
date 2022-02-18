
@component('mail::message')
Bonjour <strong> {{$user->name }} {{$user->lastname }} <strong>  , {{$message}}
@component('mail::button',['url'=>$url])
Vister notre plateforme
@endcomponent
Merci d'avoire utiliser notre site web , <br>
{{config('app.name')}}

@endcomponent


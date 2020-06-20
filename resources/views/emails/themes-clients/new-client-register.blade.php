@component('mail::message')
<h1 style="text-align: center;">Cordial saludo {{ $name }} , gracias por enviar un mensaje a {{config('app.name')}}</h1>
<img class="img-responsive" src="{{ url('/img/logo_bmotion_dark.jpg') }}" style="padding:15%">
<p style="text-align: center;">Te notificaremos cuando estemos listos.</p>
@endcomponent

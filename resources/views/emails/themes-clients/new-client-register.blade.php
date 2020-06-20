@component('mail::message')
<h1 style="text-align: center;">Hola {{ $name }} , gracias por suscribirte a {{config('app.name')}}</h1>
<img class="img-responsive" src="{{ url('/img/logo_negro_cubatao.png') }}" style="padding:15%">
<p style="text-align: center;">Te notificaremos para que compres ahorrando.</p>
@endcomponent

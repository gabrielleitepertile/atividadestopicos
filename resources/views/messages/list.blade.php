<h1>Todas as Mensagens</h1>
<hr>
@foreach($messages as $m)
	<h3>{{$m->titulo}}</h3>
	<p>{{$m->texto}}</p>
	<p>{{$m->autor}}</p>
	<br>
@endforeach
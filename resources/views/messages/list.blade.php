<h1>Lista de Mensagens</h1>
<hr>

<!--Mensagem -->
@if ($errors->any())
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

<!--Mensagem -->
@if (\Session::has('success'))
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

@foreach($messages as $m)
	<hr>
	<h3>{{\Carbon\Carbon::parse($m->created_at)->format('d/m/Y h:m')}}</h3>
	<p><a href="/messages/{{$m->id}}">{{$m->titulo}}</a></p>
	<p>{{$m->texto}}</p>
	<p>{{$m->autor}}</p>
	<br>
	<hr>
@endforeach

<p>2019 - Luiz Cassol | Tópicos Especiais | IFRS - Campus Ibirubá</p>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->
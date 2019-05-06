<h1>Lista de Atividades</h1>
<hr>
@foreach($atividades as $a)
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p>{{$a->title}}</p>
	<p>{{$a->description}}</p>
	<br>
@endforeach

<!--Mensagem -->
@if ($errors->any())
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
@endif


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->
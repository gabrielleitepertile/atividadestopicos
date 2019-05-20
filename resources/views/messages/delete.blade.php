<h1>Formulário de Exclusão de Mensagem nº{{$messages->id}})</h1>
<hr>

<!-- MENSAGEM DE ERRO -->
@if ($errors->any())
    <div class="row">
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
    </div>
@endif

@if (Session::has('sucess'))
    <div class="container">
        <div class="alert alert-sucess">
            {{\Session::get('sucess')}}
        </div>
    </div>
@endif

<form action="/messages/{{$messages->id}}" method="post"> 
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p>Você deseja realmente excluir a mensagem nº{{$messages->id}}?</p>
    <hr>
    <input type="submit" value="Deletar">
</form>
<hr>
<p>2019 - Luiz Cassol | Tópicos Especiais | IFRS - Campus Ibirubá</p>
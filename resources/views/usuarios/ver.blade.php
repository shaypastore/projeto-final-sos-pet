@extends('templates/layout')

@section('titulo', 'Perfil do Uuário')

@section('corpo')
<h1>Perfil od Usuário</h1>
<p> Nome: {{ session('usuario.nome') }}</p>
<p> E-mail: {{ session('usuario.email') }}</p>
<p> Tipo de usuário: {{ session('usuario.papel') }}</p>

<p>Ocorrências cadastradas: </p>
@foreach($ocorrencias as $ocor)
<div>

    <p>{{$ocor->titulo}}</p>

</div>
<!-- Divider-->
<hr class="my-4">
@endforeach

@endsection
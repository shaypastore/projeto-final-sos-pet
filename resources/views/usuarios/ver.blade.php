@extends('templates/layout')

@section('titulo', 'Perfil do Uuário')

@section('corpo')
<h1>Perfil do Usuário</h1>
<p> Nome: {{ session('usuario.nome') }}</p>
<p> E-mail: {{ session('usuario.email') }}</p>
<p> Tipo de usuário: {{ session('usuario.papel') }}</p>

<p>Ocorrências cadastradas: </p>

@foreach($ocorrencias as $ocor)
<div class="post-preview">
    <a href="{{route('ocorrencia/ver', $ocor->id)}}">
        <p class="post-title">{{$ocor->titulo}}</p>
    </a>
 </div>
@endforeach

@endsection
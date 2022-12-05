@extends('templates/layout')

@section('titulo', 'Ver Ocorrência')

@section('corpo')
<h1>{{$ocorrencia->titulo}}</h1>
<p> Cidade: {{$ocorrencia->cidade}}</p>
<p> Bairro: {{$ocorrencia->bairro}}</p>
<p> Endereço: {{$ocorrencia->endereco}}</p>
<p>Descrição: </p>
<p>{{$ocorrencia->descricao}}</p>
<p><img src="{{asset('/img/'.$ocorrencia->img)}}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy" alt="..."></p> 

@if (session('usuario.papel') == "Admin")
<div>
<button type="button" href="{{ route('ocorrencia/finalizar', $ocorrencia->id) }}" class="btn btn-success">Finalizar Ocorrência</button>
</div>
@endif

@endsection
@extends('templates/layout')

@section('titulo', 'Página de Artigos - Ver')

@section('corpo')
<h1>Ver Ocorrência</h1>
<p><strong>{{$ocorrencia->titulo}}</strong></p>
<p>Descrição: {{$ocorrencia->descricao}}</p>
<p><img src="{{asset('/img/'.$ocorrencia->img)}}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy" alt="..."></p> -->


@endsection
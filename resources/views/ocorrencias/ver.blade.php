@extends('templates/layout')

@section('titulo', 'Página de Artigos - Ver')

@section('corpo')
<h1>Ver Ocorrência</h1>
<p><strong>{{$ocorrencia->titulo}}</strong></p>
<p>Descrição: {{$ocorrencia->descricao}}</p>
<!-- <p><img src="{{asset('/img/'.$artigo->img)}}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy" alt="..."></p> -->

<!-- <form action="{{ route('comentar') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if (session('usuario'))
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Comentar:</label>
        <textarea name="comentario" class="form-control" placeholder="Adicionar comentário" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <p><input type="submit" class="btn btn-dark" value="Gravar"></p>
    <input type="hidden" name="id" value="{{$artigo->id}}">
    @else
    <p><i>*Para comentar, é necessário estar autenticado</i></p>
    <hr class="my-4">
    @endif
</form> -->

@endsection
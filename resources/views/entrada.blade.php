@extends('templates/layout')
@section('titulo', 'Página inicial')
@section('corpo')

<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">SOS Pet</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"> [texto descritivo]</p>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
        <div class="container px-5">
            <img src="https://melhoramigo.dog/wp-content/uploads/2016/02/ongs-que-ajudam-animais-de-rua.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>

<div class="container px-4 px-lg-5">
<nav class="navbar navbar-light bg-light">
            <H2>Ocorrências</H2>
            <div style='text-align:right'>
				<label for="title">Categoria</label>
				<select class="form-select form-select-sm" name="categoria" aria-label=".form-select-sm example">
					<option selected>Selecione uma categoria</option>
					<option value="1">Animal nas Ruas</option>
					<option value="2">Denúncia</option>
					<option value="3">Animal Desaparecido</option>
					<option value="4">Resgate</option>
				</select>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			</div>
        </nav>

    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <br>
            @foreach($ocors as $ocor)
            <div class="post-preview">
                <a href="{{route('ocorrencia/ver', $ocor->id)}}">
                    <h2 class="post-title">{{$ocor->titulo}}</h2>
                </a>
            </div>
            <!-- Divider-->
            <hr class="my-4">
            @endforeach
        </div>
    </div>
</div>

@endsection
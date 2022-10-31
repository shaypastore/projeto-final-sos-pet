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
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

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
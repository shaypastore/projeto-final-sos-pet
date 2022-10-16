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
@endsection
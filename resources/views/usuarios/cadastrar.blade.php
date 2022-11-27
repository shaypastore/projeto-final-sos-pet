@extends('templates.layout')

@section('title', 'Login')

@section('content')

@if (session('error'))
 {{ session('error') }}
@endif

<main class="text-center form-signin w-100 m-auto">
  <form method="post" action="{{route('usuario/inserir')}}" enctype="multipart/form-data">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Cadastre-se Agora</h1>
    <div class="form-floating">
      <input type="name" name="nome" class="form-control" id="floatingInput" placeholder="Name">
      <label for="floatingInput">Nome Completo</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>
    <div class="form-floating">
    <!-- <select class="form-select" aria-label="Default select example">
      <option selected>Selectione o tipo de usuário</option>
      <option value="1">Visitante</option>
      <option value="2">Admin</option>
    </select> -->
    </div>
    <div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" value="Acessar">Cadastrar</button>
    </div>
  </form>
</main>

@endsection
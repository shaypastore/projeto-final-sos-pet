@extends('templates.layout')

@section('title', 'Login')

@section('content')

@if (session('error'))
 {{ session('error') }}
@endif

<main class="text-center form-signin w-100 m-auto">
  <form method="post" action="{{ route('usuario.login') }}">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar login
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" value="Acessar">Acessar</button>
  </form>
</main>

@endsection
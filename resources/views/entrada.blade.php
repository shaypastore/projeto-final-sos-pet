@extends('templates/layout')
@section('titulo', 'Página inicial')
@section('corpo')


<header class="masthead px-4 pt-5 my-5 text-center border-bottom" style=" background: url('https://melhoramigo.dog/wp-content/uploads/2016/02/ongs-que-ajudam-animais-de-rua.jpg') center no-repeat; background-size: cover">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>SOS Pet</h1>
                            <span class="subheading">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<div class="container px-4 px-lg-5">
    <nav class="navbar navbar-light bg-light">
        <H2>Ocorrências</H2>
        <div style='text-align:right'>
            <form action="{{ route('ocorrencia/filtrar') }}" method="post">
                @csrf
                <label for="title">Categoria</label>
                <select class="form-select form-select-sm" name="categoria" aria-label=".form-select-sm example">
                    <option value="0" @if($selecionado==0) selected @endif>Todas categorias</option>
                    @foreach ($cat as $c)
                    <option value="{{$c->id}}" @if($c->id == $selecionado) selected @endif >{{$c->nome}}</option>
                    @endforeach
                </select>
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
            </form>
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
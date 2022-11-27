<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/boot
strap.min.css" rel="stylesheet" integrity="sha384-
KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We
" crossorigin="anonymous">
</head>

<body>

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('inicio') }}" class="nav-link px-2 text-secondary">Página Inicial</a></li>
                    <li><a href="{{ route('ocorrencia/criar') }}" class="btn btn-outline-light me-2">Registrar Ocorrência</a></li>
                </ul>
                <div class="text-end">
                    @if (session('usuario'))
                    <a href="{{ route('usuario/visualizar') }}" class="btn btn-outline-light me-2">Usuário autenticado: {{ session('usuario.nome') }}</a>
                    <a class="btn btn-outline-light me-2" href="{{ route('usuario.logout') }}">Sair</a>
                    @else
                    <a class="btn btn-outline-light me-2" href="{{ route('usuario.index') }}">Autenticar</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

</body>
<main class="container pt-2">




    @yield('content')
    @yield('corpo')

</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter"></use>
                </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram"></use>
                </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook"></use>
                </svg></a></li>
    </ul>
</footer>

</html>
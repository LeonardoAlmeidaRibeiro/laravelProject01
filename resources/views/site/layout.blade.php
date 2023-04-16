<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriasMenu as $categoriasMenu)
            <li><a href="{{ route('site.categoria', $categoriasMenu->id) }}">{{ $categoriasMenu->nome }}</a></li>
        @endforeach


    </ul>
    <ul id='dropdown2' class='dropdown-content'>
        @auth
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('login.logout') }}">Sair</a></li>
        @else
            <li><a href='{{ route('login.form') }}'> Login</a></li>
        @endauth
    </ul>

    <nav class="red">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">Projero Laravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>Categorias<span
                            class="material-icons right">
                            expand_more
                        </span>
                    </a></li>
                <li><a href="">Carrinho</a></li>
            </ul>
            <ul id="nav-mobile" class="right">
                @auth
                    <li><a class='dropdown-trigger' href='#' data-target='dropdown2'><span
                                class="material-icons right">
                                expand_more
                            </span>
                            Olá {{ auth()->user()->firstName }}</a></li>
                @else
                    <li><a  href='{{ route('login.form') }}'><span
                                class="material-icons right">
                                lock
                            </span>
                            Login</a></li>
                @endauth

            </ul>
        </div>
    </nav>



    @yield('conteudo')

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var elemDrop = document.querySelectorAll('.dropdown-trigger');
        var instanceDrop = M.Dropdown.init(elemDrop, {
            coverTrigger: false,
            constrainWidth: false
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{url('assets/styles.css')}}">


    </head>
    <body>
        <nav>
            <ul>
                <li><a href="{{url('pc/create')}}">Cadastrar</a></li>
                <li><a href="{{url('pc')}}">Visualizar</a></li>
            </ul>
        </nav>
        @yield('content')
        <script src="{{url('assets/script.js')}}"> </script>
    </body>
</html>

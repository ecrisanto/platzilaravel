<html>
    <head>
        <title>Platzi PHP y Laravel</title>     
        <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            Hola {{ $currentUser->name }}

            @if($currentUser)
                <a href="{{ route('auth_destroy_path') }}">Salir</a>
            @else   
                <a href="{{ route('auth_show_path') }}">Login</a>
            @endIf
            
            @yield('content');   
        </div>             
    </body>
    
</html>

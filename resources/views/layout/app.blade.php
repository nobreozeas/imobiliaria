<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('{{asset('assets/fonts/Poppins/Poppins-Regular.ttf')}}');
        }

        body {
            font-family: 'Poppins' !important;
            padding: 0;
            margin: 0;
        }
    </style>
    @stack('css')
</head>

<body>


    @yield('content')


    <footer>
        <nav>
          <ul>
            <li><a href="#">Página inicial</a></li>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </nav>

        <p>Todos os direitos reservados &copy; 2023</p>
      </footer>


    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>

</html>

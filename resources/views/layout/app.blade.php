
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="jamal">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Produtos Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            padding: 20px;
        }
    </style>
  </head>
  <body>

    <div class="container">
        @component('component_navbar', ["current" => $current])
            
        @endcomponent
        <main role="main">
            @hasSection('body')
            @yield('body') 
            @endif
        </main><!-- /.container -->
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>

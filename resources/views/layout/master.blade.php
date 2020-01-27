<html>
    <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
    </head>
    <title>@yield('title','Laravel Crud Application')</title>
    <body>
        
        <div class="container">
            @include('layout.nav')
            @if( Session::has('message') )
            <div class="alert {{Session::get('alert-class')}}" >
                <strong>{{Session::get('message')}}</strong>
            </div>
            @endif
            @yield('content')
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
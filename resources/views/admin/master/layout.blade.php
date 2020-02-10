<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
          $('.modal').modal();
        });
    </script>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper deep-orange">
                <a href="#!" class="brand-logo">Alpha Elétrica</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <li><a href="#">Obras</a></li>
                <li><a href="#">Usuários</a></li>
                </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile">
            <li><a href="#">Obras</a></li>
            <li><a href="#">Usuários</a></li>
        </ul>
    </header>
    @yield('content')

    <script>
        $(document).ready(function(){
            Materialize.updateTextField();
            $('.sidenav').sidenav();
            $('.modal').modal();
        });
    </script>
</body>
</html>


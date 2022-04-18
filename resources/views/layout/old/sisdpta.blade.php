<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env("APP_NAME") }}</title>

        <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/all.css') }}" />
        <link type="text/css" href="{{ asset('jquery-ui-1.12.1/jquery-ui.css') }}" />
        <link type="text/css" href="{{ asset('jquery-ui-1.12.1/jquery-ui.theme.css') }}" />
        <link type="text/css" href="{{ asset('css/style.css') }}" />

        <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('jquery-ui-1.12.1/jquery-ui.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.maskMoney.min.js') }}"></script>

    </head>

    <body>

        <!-- Cabeçalho -->
        <div class="conteiner-fluid bg-danger px-3">
            <div class="col-sm-2 text-left">
                <i class="fas fa-book"></i> SISDPTA
            </div>

        </div>

        <!-- Menu Lateral-->
        
        <div class="conteiner p-2">
            <div class="row">
                <nav class="sidebar">
                <div class="col-sm-2 text-left">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-user"></i> DASHBOARD</li>
                        <li class="list-group-item"><i class="fas fa-user"></i><a href="#"> Pessoas </a>
                            <ul>
                                <li class=""><a href="">Submenu</a></li>
                                <li class=""><a href="">Submenu</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item"><i class="fas fa-user"></i><a href="#"> Pessoas </a>
                            <ul>
                                <li class=""><a href="">Submenu</a></li>
                                <li class=""><a href="">Submenu</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item"><i class="fas fa-user"></i><a href="#"> Pessoas </a>
                            <ul>
                                <li class=""><a href="">Submenu</a></li>
                                <li class=""><a href="">Submenu</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </<nav>

                <!<!-- Conteudo -->
                <div class="col">
                    @yield("conteudo")
                </div>
                <!<!-- Fim do conteudo -->
            </div>

            <!-- Rodape -->
            <footer class="">
                <div class="text-center">

                </div>
            </footer>
            <!<!-- Fim do rodape -->
        </div>

    </body>

</html>
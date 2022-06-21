<!DOCTYPE html>
<html lang="en">

    <head>
        <title>{{config('app.name')}}</title>
        <meta charset="utf-8">

        <link rel="icon" href="{{ asset('public/imj/ta1.png')}}" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CodedThemes">
        <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="CodedThemes">

        <link type="text/css" rel="stylesheet" href="{{ asset('public/css/all.css') }}" />
        <link type="text/css" href="{{ asset('public/jquery-ui-1.12.1/jquery-ui.css') }}" />
        <link type="text/css" href="{{ asset('public/jquery-ui-1.12.1/jquery-ui.theme.css') }}" />
        <!-- Required Fremwork -->
        <script type="text/javascript" src="{{ asset('public/jquery-ui-1.12.1/jquery-ui.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/jquery.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery.mCustomScrollbar.css') }}">
        <script type="text/javascript" src="{{ asset('public/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap/css/bootstrap.min.css') }}">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/icon/themify-icons/themify-icons.css') }}">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/icon/icofont/css/icofont.css') }}">
        <script type="text/javascript" src="{{ asset('public/js/jquery.maskMoney.min.js') }}"></script>
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">

        <script type="text/javascript" src="{{ asset('public/js/sweetalert2.all.min.js') }}"></script>

        <script type="text/javascript" async="" src="{{ asset('public/analytics.js.transferir') }}"></script>
        <script async="" src="{{ asset('public/js/js') }}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    </head>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">

                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header bg-danger">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a href="">
                                <img class="img-fluid " src="{{ asset('public/imj/logo.PNG')}}" width="200" alt="Tribunal Administrativo" />

                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid ">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>


                            </ul>
                            <ul class="nav-right">
                                <!-- BARRA DE MENUS AUXILIARES -->
                                <li>
                                    <a href="#!">
                                        <i class="ti-email"></i> Fale conosco
                                        <span class="badge bg-c-blue"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="ti-bell"></i> Notificações
                                        <span class="badge bg-c-blue"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="ti-comment"></i> Chat
                                        <span class="badge bg-c-blue"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="ti-import"></i> Documentos úteis
                                        <span class="badge bg-c-blue"></span>
                                    </a>
                                </li>
                                <!-- FIM BARRA DE MENUS AUXILIARES -->

                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <span>User</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Definições
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i> Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.html">
                                                <i class="ti-power-off"></i> Sair
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="active">
                                        <a href="index.html">
                                            <span class="pcoded-micon"><i class="ti-dashboard"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">MENU DO SISTEMA</div>
                                <ul class="pcoded-item pcoded-left-item">                                                              
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-settings"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Administração</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{ route('pessoa.pessoa_list') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Listar pessoa</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('pessoa.pessoa_create') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Cadastrar Pessoa</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{ route('funcionario.funcionario_list') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Listar Funcionario</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{ route('funcionario.funcionario_create') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Cadastrar Funcionario</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{ route('especie.especie_list') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Especie de Processos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">  
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Secretaria</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('processo.processo_create')}}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Cadastrar Processo</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{ route('processo.processo_list')}}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Listar Processos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="#">
                                                <a href="{{ route('processo.processo_list')}}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Menu</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="pcoded-item pcoded-left-item">                                                              
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Distribuição</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('processo.processo_validar')}}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Gerir Processos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="#">
                                                <a href="">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Gerir Processos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Estado de Processos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">                                                              
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-package"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Cartório</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('processo.processo_create')}}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Cadastrar Processo(LP)</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="auth-sign-up.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Listar Processo(LP)</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Gerir Processo</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">                                                              
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-files"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Relatórios</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Processos Distribuidos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Processos não Distribuidos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample Page</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-stats-down"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Estatísticas</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Por Seccao</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="javascript:void(0)">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    <li>
                                        <a href="#">
                                            <span class="pcoded-micon"><i class="ti-book"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Documentação</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">

                                            @yield("conteudo")

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector">
                    </div>
                </div>
                <div class="text-right">
                    @include("layout.footer")
                </div>

            </div>

        </div>


        <script type="text/javascript" src="{{ asset('public/js/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/popper.js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ asset ('js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

        <!-- modernizr js -->
        <script type="text/javascript" src="{{ asset ('public/js/modernizr/modernizr.js') }}"></script>

        <!-- Custom js -->
        <script type="text/javascript" src="{{ asset('public/js/dashboard/custom-dashboard.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>
        <script type="text/javascript " src="{{ asset('public/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('public/js/pcoded.min.js')}}"></script>
        <script src="{{ asset('public/js/demo-12.js')}}"></script>
        <script src="{{ asset('public/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

        <script>
                                        var $window = $(window);
                                        var nav = $('.fixed-button');
                                        $window.scroll(function() {
                                        if ($window.scrollTop() >= 200) {
                                        nav.addClass('active');
                                        } else {
                                        nav.removeClass('active');
                                        }
                                        });
        </script>

        <script type="text/javascript">
            @if (session('message')) //MESSAGEM DE CONFIRMACAO PARA SUCESSO
                    Swal.fire({
                    icon: '{{session('messageicon')}}',
                            title: '{{session('message')}}',
                            text: '{{session('txtmessage')}}',
                            showConfirmButton: true,
                            timer: 15000,
                            //footer: '<a href="">Why do I have this issue?</a>'
                    })
                    //MESSAGEM DE CONFIRMACAO PARA APAGAR
                    @elseif(session('message2'))
                    Swal.fire({
                    icon: '{{session('messageicon2')}}',
                            title: '{{session('message2')}}',
                            text: '{{session('txtmessage2')}}',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Sim, Apagar!'
                    }).then((result) => {
            if (result.isConfirmed) {
            Swal.fire(
                    'Dado Apagado!',
                    'Dado apagado com sucesso',
                    'success'
                    )
            }
            })
                    //MESSAGEM DE CONFIRMACAO PARA ALTERAR
                    @elseif(session('message3'))
                    Swal.fire({
                    title: '{{session('message3')}}?',
                            showDenyButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Sim',
                            denyButtonText: `Não`,
                    }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
            Swal.fire('Gravado!', '', 'success')
            } else if (result.isDenied) {
            Swal.fire('Dados não gravados', '', 'info')
            }
            })
                    @endif

        </script>

        @stack('scripts')
        @stack('processo')
        @stack('especies')
        @stack('select_todos')
        @stack('select_parecer')
        @stack('editar_tabela')

    </body>

</html>
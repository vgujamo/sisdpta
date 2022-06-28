<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login</title>
        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CodedThemes">
        <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="CodedThemes">

        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('public/imj/ta1.png')}}" type="image/x-icon">

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap/css/bootstrap.min.css') }}">

        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/icon/themify-icons/themify-icons.css') }}">

        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/icon/icofont/css/icofont.css') }}">

        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
    </head>

    <body class="fix-menu">
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form action="{{ route('auth.check') }}" class="md-float-material" method="post">
                            @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail')}}
                            </div>
                            @endif
                            @csrf
                            <div class="text-center">
                                <img src="#" width="150" alt="">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">{{ config('app.name') }} Login</h3>
                                    </div>
                                </div>
                                <hr/>

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" placeholder="Usuario" value="{{ old('nome')}}">

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <i>{{$message}}</i>
                                    </span>
                                    @enderror  
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" placeholder="Senha">

                                    @error('senha')
                                    <span class="invalid-feedback" role="alert">
                                        <i>{{$message}}</i>
                                    </span>
                                    @enderror  
                                </div>

                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Recordar!</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Esqueci a minha senha!</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Autenticar</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        @include('layout.footer')
                                        <p class="text-inverse text-left m-b-0"></p>
                                        <p class="text-inverse text-left"><b></b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('public/js/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('public/js/jquery-ui/common-pages.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/popper.js/common-pages.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/bootstrap/js/common-pages.js') }}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ asset('public/js/jquery-slimscroll/common-pages.js') }}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{ asset('public/js/modernizr/common-pages.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/modernizr/common-pages.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/common-pages.js') }}"></script>
    </body>
</html>

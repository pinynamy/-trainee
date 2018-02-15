<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title> @yield('title') </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0-alpha/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0-alpha/css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome-min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-navbar_.css')}}">
        <script src="https://code.jquery.com/jquery-1.11.1.js"></script>    
    </head>
    <body>
       <nav style="margin-bottom: -20px;" class="navbar navbar-inverse navbar-static-top marginBottom-0 navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="indexs" target="_blank">Trainee</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="indexs">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown hoves"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Link 1</a></li>
                            <li><a href="#">Dropdown Link 2</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                                    <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <script src="{{ asset('js/bootstrap-navbar_.js') }}"></script>   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    @section('content') 
    @show
    </body>
</html>

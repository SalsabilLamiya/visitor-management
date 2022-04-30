<!DOCTYPE html>
<html lang="en">



<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- end: Meta -->

    <!-- start: CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        

<style>
   a{
    color: white;
    text-decoration: none;
    background-color: transparent;
}
</style>





</head>

<body>

    {{-- NAVBAR --}}
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               Visitor Management System
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>


                            </li>
                        @endif
                    @else


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    </div>
    {{-- NAVBAR END --}}
    <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-dark sidebar" id="sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                @if (Auth::user()->status == "1")
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gatemans.gateman') }}">
  
                     GATEMAN
                    </a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gateman">
  
                     ADD GATEMAN
                    </a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('visitor.topVisitor') }}">
  
                     Top Visitor List
                    </a>
                  </li>
                  @endif
                {{-- @if (Auth::user()->role == 1) --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('visitors.index') }}">

                    VISITOR
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('visitor.showHistory') }}">

                    VISITOR HISTORY
                  </a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="addVisitor">

                    ADD VISITOR
                  </a>
                </li>
                

                {{-- <li class="nav-item">
                  <a class="nav-link" href="#">
                 
                    Integrations
                  </a>
                </li>
              </ul> --}}
  
              
            </div>
          
        </nav>
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            
            @yield('content')
          </main>
        </div>

    </div>

<script>$('#sidebar').height($(window).height() - 50)</script>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>

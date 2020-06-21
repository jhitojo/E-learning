<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/img/logo_amikom.PNG') }}">
    <title>@yield('title')</title> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/js/Lightweight-Chart/cssCharts.css') }}"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark"><i class="large material-icons">library_books</i><strong>E-Learning</strong></a>
                
        <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="nav-item dropdown">
                </li>
                  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>{{ Auth::user()->name }} </b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> {{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
            </form>
            </li>
        </ul>

       <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="{{ Request::path() === 'mahasiswa' ? 'active-menu waves-effect waves-dark' : ''}}" href="/mahasiswa"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="{{ Request::path() === 'mahasiswa/materi' ? 'active-menu waves-effect waves-dark' : ''}}"href="/mahasiswa/materi" class="waves-effect waves-dark"><i class="fa fa-edit"></i> Materi </a>
                    </li>
                    <li>
                        <a class="{{ Request::path() === 'mahasiswa/tugas' ? 'active-menu waves-effect waves-dark' : ''}}"href="/mahasiswa/tugas" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Tugas/Quiz </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
        @yield('konten')
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
    
    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>
    
    <!-- Metis Menu Js -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/morris/morris.js') }}"></script>
    
    
    <script src="{{ asset('assets/js/easypiechart.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart-data.js') }}"></script>
    
     <script src="{{ asset('assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>
    
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script> 
 

</body>

</html>
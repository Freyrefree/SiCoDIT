<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SiCoDIT - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/sistema/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ url('public/sistema/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('public/sistema/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ url('public/sistema/css/colors/blue.css')}}" id="theme" rel="stylesheet">

    <link href="{{ url('public/bower_components/font-awesome-4.7.0/css/font-awesome.min.css')}}"  rel="stylesheet">
    
    @yield('head')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ url('public/sistema/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ url('public/sistema/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="{{ url('public/sistema/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="{{ url('public/sistema/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notificaciones</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Mantenimiento De Laptop</h5> <span class="mail-desc">Solo un recordatorio de que tienes un evento</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Mantenimiento De Laptop</h5> <span class="mail-desc">Solo un recordatorio de que tienes un evento</span> <span class="time">11:10 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Mantenimiento De Laptop</h5> <span class="mail-desc">Solo un recordatorio de que tienes un evento</span> <span class="time">11:50 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Ver Todas Las Notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Buscar..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ url('public/sistema/images/users/1.jpg')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ url('public/sistema/images/users/1.jpg')}}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Administrador</h4>
                                                <p class="text-muted">administrador@mcplasticos.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Configuración De Cuenta</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Salir</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-mx"></i></a>
                            <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> 
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> 
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> 
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> 
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> Inglés</a> 
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ url('public/sistema/images/users/1.jpg')}}" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Administrador <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> Mi Perfil</a>
                            <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Salir</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">DATOS GENERALES</li>
                        
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-laptop"></i><span class="hide-menu">Activos Fijos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('activosFijos') }}">Activos Fijos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-file-pdf"></i><span class="hide-menu">Responsivas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a target="_blank" href="{{ url('public/Archivos/resposiva.pdf')}}">Asignación De Equipo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-laptop"></i><span class="hide-menu">Información Del Equipo</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('info') }}">Ver</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-currency-usd"></i><span class="hide-menu">Arrendamiento y Garantia</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('garantia') }}">Ver</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Mantenimiento</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('calendario') }}">Ver</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-search-web"></i><span class="hide-menu">Ubicación</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a target="_blank" href="{{ url('public/Archivos/general.png')}}">Ubicación Gral</a></li>
                                 <li><a target="_blank" href="{{ url('public/Archivos/especifico.png')}}">Ubicación Especifica</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-clipboard-outline"></i><span class="hide-menu">Administrar</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('equipoQR') }}">Equipo QR</a></li>
                                <li><a href="{{ route('capturaQR') }}">Captura QR</a></li>
                                <li><a href="{{ route('categoriaEquipo') }}">Categoría de Equipos</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Configuración"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Salir" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © <?=date('Y')?> Desarrollado Por El Departamento De TI De Grupo MC
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('public/sistema/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url ('public/sistema/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{url ('public/sistema/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url ('public/sistema/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url ('public/sistema/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url ('public/sistema/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url ('public/sistema/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url ('public/sistema/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{url ('public/sistema/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{url ('public/sistema/js/toastr.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
    $.toast({
        heading: 'SiCoDIT',
        text: 'Sistema De Control De Infraestructura Tecnologica!',
        position: 'top-right',
        loaderBg: '#ff6849',
        icon: 'info',
        hideAfter: 8000,
        stack: 6
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{url ('public/sistema/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    @yield('script')
</body>
</html>
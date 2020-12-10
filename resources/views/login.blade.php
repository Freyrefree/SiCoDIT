<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grupo MC">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/sistema/images/favicon.png')}}">
    <title>Bienvenido a SiCoDIT </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('public/sistema/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('public/sistema/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{url('public/sistema/css/colors/blue.css')}}" id="theme" rel="stylesheet">
</head>

<body>
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(public/sistema/images/background/login.jpg);">        
            <div class="login-box card">
            <div class="card-body">
                <center><img src="{{ url('public/sistema/images/sicodit.png') }}"></center>
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                     @csrf
                    <?php
                        if (isset($_GET['a'])) 
                        {
                            $serie = $_GET['a'];
                        }
                        else{
                            $serie = 0;
                        }
                     ?>
                    <h3 class="box-title mb-3"><center>¡Ingresar!</center></h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" id="email"required=""  placeholder="Correo Electronico"> 
                             <input type="hidden" name="serie" value="{{ $serie }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" id="password" required="" placeholder="Contraseña"> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('public/sistema/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('public/sistema/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{url('public/sistema/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('public/sistema/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('public/sistema/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('public/sistema/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('public/sistema/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('public/sistema/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{url('public/sistema/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>
</html>
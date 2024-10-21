<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('back/images/favicon.png')}}"/>
    <title>
        @yield('title', 'Facemark')
    </title>
    <!-- Custom CSS -->
    <link href="{{ asset('back/css/style.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite([])
</head>
<body class="skin-default-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">
            Elite admin
        </p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Light Logo icon -->
                        <img src="{{ asset('back/images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                        <!-- Light Logo text -->
                        <img src="{{ asset('back/images/logo-light-text.png')}}" class="light-logo" alt="homepage"/>
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav me-auto">
                    <!-- This is  -->
                    <li class="nav-item">
                        <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                           href="javascript:void(0)">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                           href="javascript:void(0)">
                            <i class="icon-menu"></i>
                        </a>
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
    @include('admin.layouts.sidebar')
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
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © {{ date('Y') }} Eliteadmin by themedesigner.in
        <a href="https://www.wrappixel.com/">
            WrapPixel
        </a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('back/node_modules/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('back/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('back/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('back/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('back/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{ asset('back/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{ asset('back/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('back/js/custom.min.js')}}"></script>
@yield('js')
</body>
</html>

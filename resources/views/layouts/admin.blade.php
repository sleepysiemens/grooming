<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <script src="https://kit.fontawesome.com/9a0abb07df.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    @vite(['resources/css/adminlte.css', 'resources/js/adminlte.js'])
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">


    <!-- Navbar -->
    <nav class=" navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-flex border-right">
                <p class="nav-link m-auto">{{__('Панель администратора')}}</p>
            </li>
            <li class="nav-item d-flex border-right">
                <div class="user-panel d-flex m-auto">
                    <div class="image">
                        <i class="fas fa-user-circle fa-2x"></i>
                    </div>
                    <div class="info">
                        <p class="d-block m-auto">{{auth()->user()->name}}</p>
                    </div>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <form method="post" action="{{route('logout')}}">
                    @csrf
                    <button class="nav-link btn">{{__('Выйти')}}</button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <div class="container">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('plugins/summernote/summernote-bs4.min.css')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
@yield('scripts')

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!! Html::style('css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('css/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('css/skins/_all-skins.min.css') !!}

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{!! route('inicio') !!}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T.D.</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Tr. Documentario</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    @include('componentes.barra-izquierda')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('contenido')
            </h1>

        </section>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>San Vicente Cañete - <a>Emapa Cañete; 2015-16</a>.</strong>
    </footer>
<!-- jQuery 2.1.4 -->
{!! Html::script('js/jQuery-2.1.4.min.js') !!}
<!-- Bootstrap 3.3.5 -->
{!! Html::script('js/bootstrap.min.js') !!}
<!-- SlimScroll -->
{!! Html::script('js/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('js/fastclick.min.js') !!}
<!-- AdminLTE App -->
{!! Html::script('js/app.min.js') !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script('js/demo.js') !!}
</body>
</html>

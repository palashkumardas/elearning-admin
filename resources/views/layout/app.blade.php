<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('plugings/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('plugings/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('plugings/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">

  </head>
  <body class="nav-md">
      @include('layout.menu')
    @yield('content')


    <footer>
        <div class="pull-right">
          Welcome To  <a href="{{url('/')}}">Admin</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{asset('plugings/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
 <script src="{{asset('plugings/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('plugings/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('plugings/nprogress/nprogress.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{asset('build/js/custom.min.js')}}"></script>

@yield('script')
</body>

</html>

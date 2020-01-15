<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="">

  <title>blog</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="baseUrl" content="{{ url('/') }}">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
    <link rel="stylesheet" href="{{asset('assets/css/libraries.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />
</head>

<body>
  <div class="wrapper">


    <!-- ========================
       page title
    =========================== -->
    @include('layouts.header')


    @yield('content')
    <!-- ========================
      Footer
    ========================== -->
    @include('layouts.footer')
  </div>
  <!-- /.wrapper -->

  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{mix('js/app.js')}}"></script>
  @stack('scripts')


</body>

</html>
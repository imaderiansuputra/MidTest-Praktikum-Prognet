<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/template-home/') }}../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('template/template-home/') }}../assets/img/favicon.png">
  <title>
    @yield('title')    
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('template/template-home/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/template-home/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('template/template-home/assets/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/template-home/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('template/template-home/assets/css/argon-design-system.css?v=1.2.2') }}" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  @include('layouts.home.navbar')
  <!-- End Navbar -->
  <div class="wrapper">
    @yield('content')
    
    
    <!--   Footer   -->
    @include('layouts.home.footer')
    <!--   End Footer   -->
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('template/template-home/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/template-home/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/template-home/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/template-home/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('template/template-home/assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('template/template-home/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/template-home/assets/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('template/template-home/assets/js/plugins/datetimepicker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/template-home/assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{ asset('template/template-home/assets/js/argon-design-system.min.js?v=1.2.2') }}" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>
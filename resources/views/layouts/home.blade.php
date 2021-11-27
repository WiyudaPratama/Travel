<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">

  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('./frontend/styles/main.css') }}">
</head>
<body>

  <!-- Navbar -->
  @include('includes.navbar')

  @yield('content')

  {{-- Footer --}}
  @include('includes.footer')

  <script src="{{ url('./frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('./frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
  <script src="{{ url('./frontend/libraries/retina/retina.min.js') }}"></script>
  <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
  <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });

    $('.datepicker').datepicker({
      uiLibrary: 'bootstrap4',
      icons: {
        rightIcon: '<img src="frontend/images/ic_doe.png" />'
      }
    })
  });
  </script
</body>
</html>
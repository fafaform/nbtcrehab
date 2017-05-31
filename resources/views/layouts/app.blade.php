<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Monitoring System for Patient's Rehabilitation in remote area</title>
  <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/bulma/css/bulma.css') }}?>">
  <style type="text/css">
    .nav { position: fixed !important; top: 0; left: 0; right: 0;   opacity: 0.7; }
  </style>
</head>
<body>
  @section('navbar')
  @show

  @yield('content')
  
  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          &copy; Copyright Faculty of Engineering, Prince of Songkla University
        </p>
      </div>
    </div>
  </footer>
  
  @stack('scripts')
</body>
</html>

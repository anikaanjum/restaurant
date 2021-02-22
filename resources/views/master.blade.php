<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title') || Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/admin-asset')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('public/admin-asset')}}/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('shared.user.header')

  <!-- Page Content -->
  <div class="container">

    @yield('content')
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('shared.user.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('public/admin-asset')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('public/admin-asset')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

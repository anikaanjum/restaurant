<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('public/assets')}}/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('header')

  <!-- Page Content -->
  <div class="container">

    @yield('content')
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('public/assets')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('public/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

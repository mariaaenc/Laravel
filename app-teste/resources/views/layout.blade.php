<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laravel</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/full-width-pics.css" rel="stylesheet">
</head>

<body>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="{{ Request::path() === '/' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="{{ Request::path() === 'about' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="{{ Request::path() === 'services' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="{{ Request::path() === 'contact' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="#">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    @yield("header")
    @yield("content")
    <!-- Footer -->
    <footer class="py-5 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
            </div>
            <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script rel="stylesheet" src="/css/app.css"></script>
</body>

</html>
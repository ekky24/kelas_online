<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Kari aeeeeeeeeeeeee</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        @include('includes.navbar')
    </header>
    <!-- Header Area End -->

    @yield('content')

    @include('includes.footer')

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="/js/jquery-akame.min.js"></script>
    <!-- Popper -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap-akame.min.js"></script>
    <!-- All Plugins -->
    <script src="/js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="/js/default-assets/active.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="/custom.js"></script>

</body>

</html>
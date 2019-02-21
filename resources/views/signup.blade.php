<<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="css/custom-css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

	<section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body">
                    <form>
                    	<div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama Lengkap">  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email">  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign Up" class="btn float-right akame-btn active">
                        </div>
                    </form>
                </div>
            </div>
        </div>	
	</section>

	<!-- Footer Area Start -->
	@include('includes.footer')
	<!-- Footer Area End -->

	<!-- All JS Files -->
	<!-- jQuery -->
	<script src="js/jquery-akame.min.js"></script>
	<!-- Popper -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap-akame.min.js"></script>
	<!-- All Plugins -->
	<script src="js/akame.bundle.js"></script>
	<!-- Active -->
	<script src="js/default-assets/active.js"></script>
</body>
</html>
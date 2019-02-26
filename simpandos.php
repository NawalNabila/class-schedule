<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nabil &mdash; Create</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
	
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 	https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="inner-page">
    <!-- START #fh5co-header -->
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">

				

				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"><img src="images/logo.png" alt="Valet Free HTML5 Template"></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						
						
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							
							<li  class="active">
								<a href="#" class="fh5co-sub-ddown">Create</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="createmk.html">Data MK</a></li>
								 	<li><a href="createdos.html">Data Dosen</a></li>
								</ul>
							</li>
							</ul>
					</nav>
				<!-- </div> -->

			</div>
		</header>
    
        <div id="fh5co-hero">
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
                    <div class="to-animate hero-animate-1">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
                            <h1 class="to-animate hero-animate-1">Data Dosen Berhasil Disimpan ke Database</h1>
    <?php
    $connect = @mysql_connect("localhost", "root", "") or die ("Gagal");
    $id = $_POST["nip"];
    $nama = $_POST["nama"];
    $email = $_POST["mail"];
    $kantor = $_POST["kantor"];
    $mk = $_POST["mk"];
    
    mysql_select_db("final", $connect) or die ("can't open database");
    mysql_query("insert into dosen values('$id','$nama','$email','$kantor','$mk')", $connect)
    ?>
    
    </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <footer>
		<div class="container">
            <div class="col-md-6 widget">
						<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<p class="to-animate hero-animate-1">
								Work on the work you love. From Home. "StackOF"
							</p>
						</div>
					</div>
				</div>
					<div class="col-md-6 widget">
                        <div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
						<p class="to-animate hero-animate-1">
								&copy; 2016. Designed by <a href="http://cs.unsyiah.ac.id/~nabila" rel="designer">Nawal Nabila</a> 
							</p>
						</div>
					</div>
            </div>
             <!-- /row of widgets -->
    </div>
</footer>
    
    
    
    <!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>
    
    </body>

</html>
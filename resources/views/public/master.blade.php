<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <title>@yield ('title')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('webpublic/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/vendors/flaticon/flaticon.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('webpublic/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('webpublic/css/responsive.css')}}">

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('earport_64px.ico')}}">
    </head>
    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index"><img src="{{asset('webpublic/img/logo.png')}}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item active"><a class="nav-link" href="index">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="laporan">Laporan</a></li> 
								<li class="nav-item"><a class="nav-link" href="tentang_kami">Tentang Kami</a> </li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        @yield ('konten')
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Download Aplikasi</h3>
        					</div>
        					<img class="img-fluid" src="{{asset('webpublic/img/getit.png')}}" alt="">
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Us</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('webpublic/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('webpublic/js/popper.js')}}"></script>
        <script src="{{asset('webpublic/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('webpublic/js/stellar.js')}}"></script>
        <script src="{{asset('webpublic/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('webpublic/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('webpublic/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('webpublic/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('webpublic/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('webpublic/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('webpublic/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('webpublic/vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('webpublic/js/mail-script.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('webpublic/js/gmaps.min.js')}}"></script>
        <script src="{{asset('webpublic/js/theme.js')}}"></script>
    </body>
</html>
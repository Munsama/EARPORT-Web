@extends ('public.master')

@section ('title')
Earport
@endsection

@section ('konten')
<!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="banner_content">
								<h2>Apa itu Earport?</h2>
								<p>Earport merupakan sebuah aplikasi yang dapat digunakan untuk melaporkan berbagai kejadian yang teradi di sekitar anda</p>
								<a class="banner_btn2" href="#">Download Andorid</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="home_left_img">
								<img class="img-fluid" src="{{asset('webpublic/img/banner/2.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================Screen Area =================-->
        <section class="screen_area text-center p_120">
        	<div class="container">
        		<!-- <div class="main_title">
        			<h2>Unique Screens that work perfectly</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div> -->
        		<div class="container">
					<div id="mapBox" class="mapBox" 
						data-lat="40.701083" 
						data-lon="-74.1522848" 
						data-zoom="13" 
						data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
						data-mlat="40.701083"
						data-mlon="-74.1522848">
					</div>
        	</div>
        </section>
        <!--================End Screen Area =================-->
@endsection
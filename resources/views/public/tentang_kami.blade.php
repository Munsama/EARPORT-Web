@extends ('public.master')

@section('title')
Tentang Kami
@endsection

@section ('konten')
<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Tentang Earport</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Work Area =================-->
        <section class="work_area p_120">
        	<div class="container">
        		<div class="whole-wrap">
					<div class="container">
						<div class="section-top-border">
							
							<div class="row">
								<div class="col-md-3">
									<img src="{{asset('webpublic/img/elements/1.png')}}" alt="" class="img-fluid">
								</div>
								<div class="col-md-9 mt-sm-20 left-align-p">
										<h3 class="mb-30 title_color">Sosial Media</h3>
									<p>Earport merupakan sebuah sarana aspirasi dan pengaduan berbasis aplikasi (mobile) yang mudah diakses serta terhubung dengan dinas-dinas yang bertanggung jawab dalam menangani sebuah kejadian yang ada di wilayah surabaya </p>
								</div>
							</div>
						</div>
						<div class="section-top-border text-right">
							
							<div class="row">
								<div class="col-md-9">
										<h3 class="mb-30 title_color">Semua Dapat Melaporkan</h3>
									<p class="text-right">Earport merupakan sebuah sarana aspirasi dan pengaduan berbasis aplikasi (mobile) yang mudah diakses serta terhubung dengan dinas-dinas yang bertanggung jawab dalam menangani sebuah kejadian yang ada di wilayah surabaya </p>
								</div>
								<div class="col-md-3">
									<img src="{{asset('webpublic/img/elements/2.png')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="section-top-border">
							
							<div class="row">
								<div class="col-md-3">
									<img src="{{asset('webpublic/img/elements/3.png')}}" alt="" class="img-fluid">
								</div>
								<div class="col-md-9 mt-sm-20 left-align-p">
										<h3 class="mb-30 title_color">Semua Dapat Melihat</h3>
									<p>Earport merupakan sebuah sarana aspirasi dan pengaduan berbasis aplikasi (mobile) yang mudah diakses serta terhubung dengan dinas-dinas yang bertanggung jawab dalam menangani sebuah kejadian yang ada di wilayah surabaya </p>
								</div>
							</div>
						</div>
        	</div>
        </section>
@endsection
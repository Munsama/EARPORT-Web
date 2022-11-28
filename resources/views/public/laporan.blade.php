@extends ('public.master')

@section('title')
Laporan
@endsection

@section ('konten')
<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Laporan</h2>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Made Life Area =================-->
        <section class="made_life_area p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
						<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Semua</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Proses</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Selesai</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row made_life_text">
									<div class="col-lg-8">
										<div class="left_side_text">
												<div class="item">
														<div class="testi_item">
															<div class="media">
																<div class="d-flex">
																	<img src="{{asset('webpublic/img/testimonials/testi-1.png')}}" alt="">
																</div>
																<div class="media-body">
																		<h4>Semua</h4>
																	<p>11 Januari 2019 <br> Ketintang <br><b>Jalan Rusak</b></p>
																</div>
															</div>
														</div>
													</div>
										</div>
									</div>
									<div class="col-lg-4">
											<div class="left_side_text">
											<div class="blog_right_sidebar">
												<aside class="single_sidebar_widget search_widget">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Cari">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
														</span>
													</div><!-- /input-group -->
													<div class="br"></div>
												</aside>
												<aside class="single_sidebar_widget post_category_widget">
													<h4 class="widget_title">Instansi</h4>
													<ul class="list cat-list">
														<li>
															<a href="#" class="d-flex justify-content-between">
																<p>Dinas Perhubungan Surabaya</p>
															</a>
														</li>
														<li>
															<a href="#" class="d-flex justify-content-between">
																<p>Dinas Pemadam Surabaya</p>
															</a>
														</li>
														<li>
															<a href="#" class="d-flex justify-content-between">
																<p>DKRTH Surabaya</p>
															</a>
														</li>									
													</ul>
													<div class="br"></div>
												</aside>
											</div>
										</div>
										</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row made_life_text">
										<div class="col-lg-8">
												<div class="left_side_text">
														<div class="item">
																<div class="testi_item">
																	<div class="media">
																		<div class="d-flex">
																			<img src="{{asset('webpublic/img/testimonials/testi-1.png')}}" alt="">
																		</div>
																		<div class="media-body">
																				<h4>Proses</h4>
																				<p>11 Januari 2019 <br> Ketintang <br><b>Jalan Rusak</b></p>
																		</div>
																	</div>
																</div>
															</div>
												</div>
											</div>
											<div class="col-lg-4">
													<div class="left_side_text">
													<div class="blog_right_sidebar">
														<aside class="single_sidebar_widget search_widget">
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Cari">
																<span class="input-group-btn">
																	<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
																</span>
															</div><!-- /input-group -->
															<div class="br"></div>
														</aside>
														<aside class="single_sidebar_widget post_category_widget">
															<h4 class="widget_title">Instansi</h4>
															<ul class="list cat-list">
																<li>
																	<a href="#" class="d-flex justify-content-between">
																		<p>Dinas Perhubungan Surabaya</p>
																	</a>
																</li>
																<li>
																	<a href="#" class="d-flex justify-content-between">
																		<p>Dinas Pemadam Surabaya</p>
																	</a>
																</li>
																<li>
																	<a href="#" class="d-flex justify-content-between">
																		<p>DKRTH Surabaya</p>
																	</a>
																</li>									
															</ul>
															<div class="br"></div>
														</aside>
													</div>
												</div>
												</div>
										</div>
									</div>
							<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div class="row made_life_text">
										<div class="col-lg-8">
												<div class="left_side_text">
														<div class="item">
																<div class="testi_item">
																	<div class="media">
																		<div class="d-flex">
																			<img src="{{asset('webpublic/img/testimonials/testi-1.png')}}" alt="">
																		</div>
																		<div class="media-body">
																				<h4>Selesai</h4>
																				<p>11 Januari 2019 <br> Ketintang <br><b>Jalan Rusak</b></p>
																		</div>
																	</div>
																</div>
															</div>
												</div>
											</div>
											<div class="col-lg-4">
													<div class="left_side_text">
													<div class="blog_right_sidebar">
														<aside class="single_sidebar_widget search_widget">
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Cari">
																<span class="input-group-btn">
																	<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
																</span>
															</div><!-- /input-group -->
															<div class="br"></div>
														</aside>
														<aside class="single_sidebar_widget post_category_widget">
															<h4 class="widget_title">Instansi</h4>
															<ul class="list cat-list">
																<li>
																	<a href="#" class="d-flex justify-content-between">
																		<p>Dinas Perhubungan Surabaya</p>
																	</a>
																</li>
																<li>
																	<a href="#" class="d-flex justify-content-between">
																		<p>Dinas Pemadam Surabaya</p>
																	</a>
																</li>
																<li>
																	<a href="#" class="d-flex justify-content-between">
																		<p>DKRTH Surabaya</p>
																	</a>
																</li>									
															</ul>
															<div class="br"></div>
														</aside>
													</div>
												</div>
												</div>
										</div>
									</div>
							<div class="tab-pane fade" id="edge" role="tabpanel" aria-labelledby="edge-tab">
								<div class="row made_life_text">
									<div class="col-lg-6">
										<div class="left_side_text">
											<h3>We’ve made a life <br />that will change you</h3>
											<h6>We are here to listen from you deliver exellence</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
											<a class="main_btn" href="#">Get Started Now</a>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="chart_img">
											<img class="img-fluid" src="{{asset('webpublic/img/chart.jpg')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->
@endsection
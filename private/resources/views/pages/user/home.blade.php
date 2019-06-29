@extends('pages.user.viewuser')
@section('main')
	
	<!-- Home -->
	<div class="home warna">
	<br>
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(user/images/komik/fb/fb.jpg)"></div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(user/images/komik/kot/rrr.jpg)"></div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(user/images/komik/kny/kv.jpg)"></div>
				</div>
				
			</div>

			
		</div>
		

	</div>


	<!-- Popular Courses 1 -->
<hr>
	<div class="team ">
		<div class="counter_background parallax-window" data-parallax="scroll" data-image-src="user/images/courses_backgrounda.jpg" data-speed="0.8"></div>
		<center><h3 class="course_title"><a href="{{url('comics')}}">komik</a></h3></center>
			<div class="container ">
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item">
						<div class="team_image"><img src="user/images/komik/Tsuiraku JK to Haijin Kyoushi/5.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="{{url('readmore')}}">Tsuiraku JK to Haijin Kyoushi</a></div>
							<div class="team_subtitle">
								<p>Mikoto Ochiai siap untuk melompat dari atap gedung sekolah menengahnya setelah ditolak oleh bocah yang dicintai. <a href="{{url('readmore')}}">Read More</a> </p>
							</div>
							<div class="social_list">
								<ul>
									<div class="course_info">
										<i class="fa fa-eye" aria-hidden="true"><a href="">Views</a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-comments" aria-hidden="true"><a href="">Comments </a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-share" aria-hidden="true"><a href="">Share</a></i>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item">
						<div class="team_image"><img src="user/images/komik/kot/1.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="{{url('readmore')}}">Kono Oto Tomre!</a></div>
							<div class="team_subtitle"><p>Semenjak kelulusan anggota senior klub, Takezou akhirnya menjadi satu-satunya anggota klub koto.
								<a href="{{url('readmore')}}">Read More</a> </p></div>
							<div class="social_list">
								<ul>
									<div class="course_info">
										<i class="fa fa-eye" aria-hidden="true"><a href="">Views</a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-comments" aria-hidden="true"><a href="">Comments</a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-share" aria-hidden="true"><a href="">Share</a></i>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item">
						<div class="team_image"><img src="user/images/komik/kny/large.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="{{url('readmore')}}">Kimetsu No Yaiba</a></div>
							<div class="team_subtitle">
								<p>Pertarungan antara pemburu iblis dengan iblis yang sering menyerang manusia.
								<a href="{{url('readmore')}}">Read More</a> </p></div>
							<div class="social_list">
								<ul>
									<div class="course_info">
										<i class="fa fa-eye" aria-hidden="true"><a href="">Views</a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-comments" aria-hidden="true"><a href="">Comments </a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-share" aria-hidden="true"><a href="">Share</a></i>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>

				

			</div>
			
		</div>

	</div>
	
	




@stop

@section('footer')
<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="col">
				<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
					<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					<div class="ml-lg-auto cr_links">
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
            <br><br>
		</div>
	</footer>
</div>
@stop
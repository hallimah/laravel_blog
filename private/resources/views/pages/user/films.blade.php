@extends('pages.user.viewuser')
@section('main')
	<!-- Popular Courses 1 -->

	<div class="courses">
		
		<div class="container warna">
		<h3 class="course_title"><a href="{{url('comics')}}">komik</a></h3>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="">
						<div class="team_image"><img src="user/images/komik/Tsuiraku JK to Haijin Kyoushi/5.jpg" alt=""></div>
						<div class="team_body">
							<h3 class="course_title"><a href="course.html">Tsuiraku JK to Haijin Kyoushi</a></h3>
							<div class="course_teacher">Sora (Story & Art)</div>
							<div class="course_text">
								<p>Mikoto Ochiai siap untuk melompat dari atap gedung sekolah menengahnya setelah ditolak oleh bocah yang dicintai. <a href="{{url('readmore')}}">Read More</a> </p>
								<br><br><br>
							</div>
							
							<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span>Views</span>
								</div>
								<div class="course_info">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<span>Comments </span>
								</div>
                                <div class="course_info">
									<i class="fa fa-share" aria-hidden="true"></i>
									<span>Share</span>
								</div>
							</div>
						</div>
						</div>
						
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="">
						<div class="team_image"><img src="user/images/komik/Tsuiraku JK to Haijin Kyoushi/1.jpg" alt=""></div>
						<div class="team_body">
							<h3 class="course_title"><a href="course.html">Tsuiraku JK to Haijin Kyoushi</a></h3>
							<div class="course_teacher">Sora (Story & Art)</div>
							<div class="course_text">
								<p>Mikoto Ochiai siap untuk melompat dari atap gedung sekolah menengahnya setelah ditolak oleh bocah yang dicintai. 
								<a href="{{url('readmore')}}">Read More</a> </p><br><br><br>
							</div>
							
							<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span>Views</span>
								</div>
								<div class="course_info">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<span>Comments </span>
								</div>
                                <div class="course_info">
									<i class="fa fa-share" aria-hidden="true"></i>
									<span>Share</span>
								</div>
							</div>
						</div>
						</div>
						
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="">
						<div class="team_image"><img src="user/images/komik/Tsuiraku JK to Haijin Kyoushi/1.jpg" alt=""></div>
						<div class="team_body">
							<h3 class="course_title"><a href="course.html">Tsuiraku JK to Haijin Kyoushi</a></h3>
							<div class="course_teacher">Sora (Story & Art)</div>
							<div class="course_text">
								<p>Mikoto Ochiai siap untuk melompat dari atap gedung sekolah menengahnya setelah ditolak oleh bocah yang dicintai. 
								<a href="{{url('readmore')}}">Read More</a> </p><br><br><br>
							</div>
							
							<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span>Views</span>
								</div>
								<div class="course_info">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<span>Comments </span>
								</div>
                                <div class="course_info">
									<i class="fa fa-share" aria-hidden="true"></i>
									<span>Share</span>
								</div>
							</div>
						</div>
						</div>
						
					</div>
				</div>

			</div>
			
		</div>

	</div>
@stop
@section('footer')

	<!-- Footer -->

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
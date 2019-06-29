@extends('pages.user.viewuser')

@section('main')
	<!-- Home -->


	<link rel="stylesheet" type="text/css" href="{{asset('user/styles/bootstrap4/bootstrap.min.css')}}">
	<link href="{{asset('user/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user/plugins/video-js/video-js.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('user/styles/blog.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/styles/blog_responsive.css')}}">

	
	<script src="{{asset('user/plugins/masonry/masonry.js')}}"></script>
	<script src="{{asset('user/plugins/video-js/video.min.js')}}"></script>
	<script src="{{asset('user/js/blog.js')}}"></script>


	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_post_container">

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="user/images/blog_1.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">Here’s What You Need to Know About Online Testing</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">With Changing Students and Times</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_video_container">
								<video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_2.jpg"}'>
									<source src="images/mov_bbb.mp4" type="video/mp4">
									<source src="images/mov_bbb.ogg" type="video/ogg">
									Your browser does not support HTML5 video.
								</video>
							</div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">Building Skills Outside the Classroom With New Ways</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="user/images/blog_3.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">Law Schools Debate a Contentious Testing Alternative</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_video_container">
								<video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_4.jpg"}'>
									<source src="images/mov_bbb.mp4" type="video/mp4">
									<source src="images/mov_bbb.ogg" type="video/ogg">
									Your browser does not support HTML5 video.
								</video>
							</div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">Building Skills Outside the Classroom With New Ways</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="user/images/blog_5.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">Here’s What You Need to Know About Online Testing</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.html">With Changing Students and Times</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<div class="load_more trans_200"><a href="#">load more</a></div>
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
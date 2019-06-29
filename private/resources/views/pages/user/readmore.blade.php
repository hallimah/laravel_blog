@extends('pages.user.viewuser')
@section('main')
	<!-- Features -->
	<link href="{{asset('user/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/blog_single.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/blog_single_responsive.css')}}">

<script src="{{asset('user/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('user/js/blog_single.js')}}"></script>


	<div class="blog">
		<div class="container">
			<div class="row">
			<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title">Tsuiraku JK to Haijin Kyoushi</div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#">May 5, 2018</a></li>
								<li>By <a href="#">admin</a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="user/images/komik/Tsuiraku JK to Haijin Kyoushi/1.jpg" alt=""></div>
						<p>Times Insider delivers behind-the-scenes insights into how news, features and opinion come together at The New York Times.Before I could spend the night in my younger sister’s dorm room at Antioch College in Yellow Springs, Ohio — before I could read the spines of her textbooks or drink a disgusting but lovingly prepared vodka/sparkling wine/Red Bull — I had to report to security:</p>
						<div class="blog_quote d-flex flex-row align-items-center justify-content-start">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
							<div>“All sexual interactions at Antioch College must be consensual. Consent means verbally asking and verbally giving or denying consent.”</div>
						</div>
						<p>It was 2004, a decade before the phrase “affirmative consent” made it onto news shows or big university campuses. I was 21, a junior at another college. I think it was the first time I had heard people talk about consent as something you could ask for verbally. It was definitely the first time I’d ever seen it written out like that.</p>
						<p>The first-of-its-kind affirmative consent policy was written by students in 1990 as a response to campus rape. But the first thing anyone who was at Antioch in the ’90s wanted to talk to me about was the media mayhem. When The Associated Press ran an article on the policy with the headline “No huggy, no kissy without a ‘yes’ at Antioch College,” it ignited a cultural firestorm.</p>
						<div class="blog_subtitle">All the current students</div>
						<p>I followed up with for the video told me that being sexual with an Antioch student is different from being sexual with someone else. They spoke of a common language everyone is taught beginning at orientation, so that when one student starts asking questions of another student in the midst of sexual activity, it doesn’t seem so out there.</p>
						<div class="blog_images">
							<div class="row">
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_1.jpg" alt=""></div></div>
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_2.jpg" alt=""></div></div>
							</div>
						</div>
						<p>But what is it like to be an 18-year-old and have the expectation set that you will talk during sex? I, for one, have never been part of a community with that expectation. Spending time at Antioch’s orientation, I thought about how that might change your sexual interactions for the rest of your life.</p>
					</div>
					<div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="blog_tags">
							<span>Tags: </span>
							<ul>
								<li><a href="#">Education</a>, </li>
								<li><a href="#">Math</a>, </li>
								<li><a href="#">Food</a>, </li>
								<li><a href="#">Schools</a>, </li>
								<li><a href="#">Religion</a>, </li>
							</ul>
						</div>
						<div class="blog_social ml-lg-auto">
							<span>Share: </span>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- Comments -->
					<div class="comments_container">
						<div class="comments_title"><span>30</span> Comments</div>
						<ul class="comments_list">
							<li>
								<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
									<div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
									<div class="comment_content">
										<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="#">Jennifer Aniston</a></div>
											<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
											<div class="comment_time ml-auto">October 19,2018</div>
										</div>
										<div class="comment_text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
										</div>
										<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
											<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
											<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
										</div>
									</div>
								</div>
								<ul>
									<li>
										<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
											<div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
											<div class="comment_content">
												<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
													<div class="comment_author"><a href="#">John Smith</a></div>
													<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
													<div class="comment_time ml-auto">October 19,2018</div>
												</div>
												<div class="comment_text">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
												</div>
												<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
													<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
													<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
									<div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>
									<div class="comment_content">
										<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="#">Jane Austen</a></div>
											<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
											<div class="comment_time ml-auto">October 19,2018</div>
										</div>
										<div class="comment_text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
										</div>
										<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
											<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
											<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="add_comment_container">
							<div class="add_comment_title">Write a comment</div>
							<div class="add_comment_text">Your email address will not be published. Required fields are marked *</div>
							<form action="#" class="comment_form">
								<div>
									<div class="form_title">Review*</div>
									<textarea class="comment_input comment_textarea" required="required"></textarea>
								</div>
								<div class="row">
									<div class="col-md-6 input_col">
										<div class="form_title">Name*</div>
										<input type="text" class="comment_input" required="required">
									</div>
									<div class="col-md-6 input_col">
										<div class="form_title">Email*</div>
										<input type="text" class="comment_input" required="required">
									</div>
								</div>
								<div class="comment_notify">
									<input type="checkbox" id="checkbox_notify" name="regular_checkbox" class="regular_checkbox checkbox_account" checked>
									<label for="checkbox_notify"><i class="fa fa-check" aria-hidden="true"></i></label>
									<span>Notify me of new posts by email</span>
								</div>
								<div>
									<button type="submit" class="comment_button trans_200">submit</button>
								</div>
							</form>
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
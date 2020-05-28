<!doctype html>
<html class="no-js" lang="zxx">

@include('user.layouts.head')
<body class="single-courses_v">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	@include('user.layouts.topnav')
    <!-- Ends: .header-top -->

	<div class="header-body">
		@include('user.layouts.nav')
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Project Details</h1>
						<p>
						<span><a href="{{ route('index') }}">Home <i class='fa fa-angle-right'></i></a></span> <span><a href="{{ route('projects') }}"> Projects <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Project Details</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<div class="single-courses-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>{{ $project->name }}</h2>
					<div class="review-option">
						<div class="row">
							<div class="col-sm-3 col-xm-12 teacher-info border-left review-item-singel">
								{{-- <img src="user/images/index/teachar-s-01.jpg" alt="" class="img-circle"> --}}
								<span>Start Date</span>
								<div class="teacher-name">
									<span>{{ $project->startdate }}</span>
								</div>
							</div>

							<div class="col-sm-3 col-xm-12  categories border-left  review-item-singel">
								<span>Closing Date</span>
								<div class="teacher-name">
									<span>{{ $project->closingdate }}</span>
								</div>
							</div>

							<div class="col-sm-3 col-xm-12  categories border-left  review-item-singel">
								<span>Location</span>
								<span>{{ $project->location }}</span>
							</div>

							<div class="col-sm-3 col-xm-12 students_105 border-left  review-item-singel">
								<span>Students</span>
								<span>105</span>
							</div>
						</div>
					</div>
					<div class="details-img-bxo">
						<img src="{{ asset('images/'.$project->image) }}" alt="" class="img-responsive">
					</div>
					<div class="description-content">
						<h2>Description: </h2>
						<p>{{ $project->description }}</p>
						<div class="requirements">
							<h3>Requirements</h3>
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>{{ $project->prequisite }}</li>
										{{-- <li>Research the conditions of urbanism.</li>
										<li>Employ advanced design techniques.</li>
										<li>Innovative methodologies.</li> --}}
									</ul>
								</div>
								{{-- <div class="col-sm-6">
									<ul class="list-unstyled">
										<li>Lens of landscape theory and design practice.</li>
										<li>Research the conditions of urbanism.</li>
										<li>Employ advanced design techniques.</li>
										<li>Innovative methodologies.</li>
									</ul>
								</div> --}}
							</div>
						</div>
						<div class="count-list">
							<h3>List Project Documents</h3>
							<ol class="list-unstyled">
								@foreach ($materials as $material)
									<li>{{ $material->name }}</li>
								@endforeach
								
							</ol>
						</div>
					</div>

					<div class="curriculum-text-box">
						<h2>Curriculum: </h2>
						<div class="curriculum-section">
							<div class="panel-group" id="accordion">
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title click">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
											All Project Materials<span>{{ $count }}</span></a>
										</h4>

									</div>
									
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											@foreach ($materials as $material)
											<div class="row curriculum-single">
												
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-8">
															<div class="lecture">
																<span><i class="fa fa-file-text-o"></i>{{ $material->name }}</span>
																<span><i class="fa fa-clock-o"></i>Duration: {{ $material->duration }}mins</span>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="lecture-btn pull-right">
																<a href="{{ asset('documents/'.$material->file) }}">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
									
								</div>
								
							</div> <!-- .curriculum-section-text END -->
						</div>
					</div>

					<div class="comments">
						<div class="row">
							<div class="col-sm-12">
							<h3>Comments</h3>
								<div class="row">
									<div class="col-sm-12 comment-single-item">
										<div class="col-sm-2 img-box">
											<img src="{{ asset('user/images/index/stu-parent-01.jpg') }}" alt="" class="img-circle">
										</div>
										<div class="col-sm-10 comment-left-bar">
											<div class="comment-text">
												<ul class="list-unstyled">
													<li class="name">James Smith
														<div class="comment-author">
															<ul class="list-unstyled">
																<li>Rated:</li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</li>
													<li class="comment-date">20 July 2019 AT 10.45 AM</li>
												</ul>
												<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-12 comment-single-item">
										<div class="col-sm-2 img-box">
											<img src="{{ asset('user/images/index/stu-parent-02.jpg') }}" alt="" class="img-circle">
										</div>
										<div class="col-sm-10 comment-left-bar">
											<div class="comment-text">
												<ul class="list-unstyled">
													<li class="name">James Smith
														<div class="comment-author">
															<ul class="list-unstyled">
																<li>Rated:</li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</li>
													<li class="comment-date">20 July 2019 AT 10.45 AM</li>
												</ul>
												<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-12 comment-single-item">
										<div class="col-sm-2 img-box">
											<img src="{{ asset('user/images/index/stu-parent-03.jpg') }}" alt="" class="img-circle">
										</div>
										<div class="col-sm-10 comment-left-bar">
											<div class="comment-text">
												<ul class="list-unstyled">
													<li class="name">James Smith
														<div class="comment-author">
															<ul class="list-unstyled">
																<li>Rated:</li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</li>
													<li class="comment-date">20 July 2019 AT 10.45 AM</li>
												</ul>
												<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="leave_a_comment">
						<div class="row">
							<div class="col-sm-12">
							<h3>Leave A Comment</h3>
								<div class="row">
									<div class="col-sm-12">
							            <form>
							                <div class="form-group">
							                    <div class="row">
							                        <div class="col-sm-4">
							          					<label class="input-label">name</label>
							                            <input type="text" placeholder="Enter your name" id="name" name="name" required>
							                        </div>
							                        <div class="col-sm-4">
							                        	<label class="input-label">E-mail</label>
							                            <input type="email" placeholder="Enter your E-mail" name="email" required>
							                        </div>
							                        <div class="col-sm-4">
							                       	 <label class="input-label">Website</label>
							                            <input type="text" placeholder="https://" name="web" required>
							                        </div>
							                        <div class="col-sm-12">
							                        	<label class="input-label">Message</label>
							                            <textarea placeholder="Type your comment"  name="message" required></textarea>
							                        </div>
							                        <div class="col-sm-12">
							                            <button type="submit">Send Message</button>
							                        </div>
							                    </div>
							                </div>
							            </form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-sm-4 sidebar-right">
				<div class="sidebar-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="courses-price">
								<div class="price-hading">
									<h3>Courses Price</h3>
								</div>
								<div class="price-text">
									<span class="dolar-sign"></span><span>{{ $project->price }}</span>
									{{-- <p>One Time Payment</p> --}}
									<hr>
									<div class="price-btn-box">
										<a href="{{ route('projectregister', $project->id) }}" class="price-btn">Register For Project</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="courses-features">
								<div class="features-hading">
									<h3>Course Features</h3>
								</div>
								<div class="features-text">
									<ul class="list-unstyled">
										<li><span><i class="fa fa-clipboard"></i>Lessons</span><span>{{ $project->lesson }}</span></li>
										<li><span><i class="fa fa-eye"></i>Viewers</span><span>{{ $project->viewers }}</span></li>
										<li><span><i class="fa fa-clock-o"></i>Duration</span><span>{{ $project->duration }} hours</span></li>
										<li><span><i class="fa fa-lock"></i>Prequisite</span><span>{{ $project->prequisite }}</span></li>
										<li><span><i class="fa fa-newspaper-o"></i>Certificate</span><span>{{ $project->certificate }}</span></li>
										<li><span><i class="fa fa-language"></i>Language</span><span>{{ $project->language }}</span></li>
										<li><span><i class="fa fa-thumbs-up"></i>Skill</span><span>{{ $project->skill }}</span></li>
										<li><span><i class="fa fa-check-square"></i>Assessment</span><span>{{ $project->assessment }}</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="share-socila-link">
								<div class="social-hading">
									<h3>Share this course</h3>
								</div>
								<div class="social-icon">
									<div class="row">
										<div class="col-sm-12">
											<ul class="list-unstyled">
												<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
												<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="latest-courses">
								<div class="latest-hading">
									<h3>Latest courses</h3>
								</div>
								<div class="latest-courses-text">
									<div class="latest-single">
										<div class="row">
										    <div class="col-sm-5 course-image">
										        <img src="{{  asset('user/images/Single_cources/l-courses-01.jpg') }}" alt="">
										    </div>
										    <div class=" col-sm-7 course-prefix">
										        <h3><a href="#">web Design Courses</a></h3>
										        <div class="latest-btn"><a href="#">$100</a></div>
										    </div>
										</div>
									</div>

									<div class="latest-single">
										<div class="row">
										    <div class="col-sm-5 course-image">
										        <img src="{{ asset('user/images/Single_cources/l-courses-02.jpg') }}" alt="">
										    </div>
										    <div class=" col-sm-7 course-prefix">
										        <h3><a href="#">Wordpress Courses</a></h3>
										        <div class="latest-btn"><a href="#">$100</a></div>
										    </div>
										</div>
									</div>

									<div class="latest-single">
										<div class="row">
										    <div class="col-sm-5 course-image">
										        <img src="{{ asset('user/images/Single_cources/l-courses-03.jpg') }}" alt="">
										    </div>
										    <div class=" col-sm-7 course-prefix">
										        <h3><a href="#">Javascript Courses</a></h3>
										        <div class="latest-btn"><a href="#">$100</a></div>
										    </div>
										</div>
									</div>

									<div class="latest-single">
										<div class="row">
										    <div class="col-sm-5 course-image">
										        <img src="{{ asset('user/images/Single_cources/l-courses-04.jpg') }}" alt="">
										    </div>
										    <div class=" col-sm-7 course-prefix">
										        <h3><a href="#">Microsoft Word Excel</a></h3>
										        <div class="latest-btn"><a href="#">$100</a></div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<!-- ./ End Courses Area section -->

<!-- Footer Area section -->
@include('user.layouts.footer')
<!-- ./ End Footer Area -->
    <!-- ============================
    JavaScript Files
    ============================= -->
    @include('user.layouts.script')
</body>

</html>

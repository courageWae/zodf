@extends('user.layouts.app')

@section('title', 'Project Details')

@section('page', 'single-courses_v')


@section('main')
	<!--  End header section-->


<div class="single-courses-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<h2>{{ $project->name }}</h2>
					<div class="review-option">
						<div class="row">
							<div class="col-sm-2 col-xm-12 teacher-info border-left review-item-singel">
								{{-- <img src="user/images/index/teachar-s-01.jpg" alt="" class="img-circle"> --}}
								<span>Start Date</span>
								<div class="teacher-name">
									<span>{{ $project->startdate }}</span>
								</div>
							</div>

							<div class="col-sm-2 col-xm-12  categories border-left  review-item-singel">
								<span>Closing Date</span>
								<div class="teacher-name">
									<span>{{ $project->closingdate }}</span>
								</div>
							</div>

							<div class="col-sm-2 col-xm-12  categories border-left  review-item-singel">
								<span>Location</span>
								<span>{{ $project->location }}</span>
							</div>

							<div class="col-sm-3 col-xm-12 students_105 border-left  review-item-singel">
								<span>Registered Students</span>
								<span>{{ $countstudents }}</span>
							</div>
							<div class="price-text col-sm-3 col-xm-12 students_105 border-left  review-item-singel">
								<span>Register For Course</span>
								<span class="price-text">
									<div class="price-btn-box">
										<a href="{{ route('projectregister', $project->id) }}" class="btn btn-primary price-btn">Register For Project</a>
									</div>
								</span>
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
						{{-- <div class="count-list">
							<h3>List Project Documents</h3>
							<ol class="list-unstyled">
								@foreach ($materials as $material)
									<li>{{ $material->name }}</li>
								@endforeach
								
							</ol>
						</div> --}}
					</div>

					<div class="price-btn-box">
						<a href="{{ route('projectregister', $project->id) }}" class="btn btn-primary price-btn">Register For Project</a>
					</div>

					{{-- <div class="curriculum-text-box">
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
					</div> --}}

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
									@if ($project->price == 'Free')
										<span class="dolar-sign"></span><span>{{ $project->price }}</span>
										<hr>
									@else
										<span class="dolar-sign"></span><span>GH₵ {{ $project->price }}.00</span>
										<p>One Time Payment</p>
										<hr>
									@endif
									
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
									<h3>Share this Project</h3>
								</div>
								<div class="social-icon">
									<div class="row">
										<div class="col-sm-12">
											<ul class="list-unstyled">
												<li><a href="http://www.facebook.com/sharer.php?u={{ url('projectdetail', $project->id) }}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://plus.google.com/share?url={{ url('projectdetail', $project->id) }}" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>
												{{-- <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li> --}}
												<li><a href="https://twitter.com/share?url={{ url('projectdetail', $project->id) }}&amp;text={{ $project->name }}&amp;hashtags={{ $project->name }}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="mailto:?subject={{ $project->name }}&body={{ url('projectdetail', $project->id) }}" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" class="skype"><i class="fa fa-envelope"></i></a></li>
												{{-- <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li> --}}
												<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ url('projectdetail', $project->id) }}" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="whatsapp://send?text={{ url('projectdetail', $project->id) }}" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" style="background-color: green" class="pinterest"><i class="fa fa-whatsapp"></i></a></li>
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
									<h3>Latest Projects</h3>
								</div>
								<div class="latest-courses-text">
									@foreach ($latestcourses as $latestcourse)
									<div class="latest-single">
										<div class="row">
										    <div class="col-sm-5 course-image">
										        <img src="{{ asset('images/'.$latestcourse->image) }}" alt="">
										    </div>
										    <div class=" col-sm-7 course-prefix">
										        <h3><a href="{{ route('projectdetail', $latestcourse->id) }}">{{ $latestcourse->name }}</a></h3>
										        <div class="latest-btn"><a href="{{ route('projectdetail', $latestcourse->id) }}">{{ $latestcourse->price }}</a></div>
										    </div>
										</div>
									</div>
									@endforeach
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
@endsection

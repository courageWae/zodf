@extends('user.layouts.app')

@section('title', 'News Post')

@section('page', 'post-1')

@section('main')



<div class="post_1_area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 post_left-side">
				<div class="row">
					<div class="col-sm-12">
						<div class="post-img-box">
							<img src="{{ asset('/images/'.$new->image) }}" alt="{{ $new->title }}" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<div class="time">
									<span>{{ $new->created_at->format('d') }}</span>
									<span>{{ $new->created_at->format('M') }}</span>
								</div>
								<h3>{{ $new->title }}</h3>
							</div>
							<div class="description-text">
								<div class="row">
									<div class="col-sm-1">
										<div class="description-side-left">
											<div class="author-img">
												{{-- <img src="{{ asset('user/images/post/post-author0-1.jpg') }}" alt="" class="img-circle"> --}}
												Posted by:
												<div class="author-details">
													<a href="{{ route('admin', $new->admin->id) }}">{{ $new->admin->name }}</a>
												</div>
											</div>
											<ul class="list-unstyled">
												<li><i class="fa fa-eye"></i>{{ $new->viewer }}</li>
											</ul>

										</div>
									</div>
									<div class="col-sm-11">
										<div class="description-text-right">
											{!! htmlspecialchars_decode($new->body) !!}
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="tag-links-box">
											<p>Tags:</p>
											<ul class="list-unstyled">
												@foreach ($new->tags as $tag)
												<li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
												@endforeach
												<li><a href=""></a></li>	
											</ul>	
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-md-12 post-col-paddign">
						<div class="prev_next">
							@if($previous)
							<div class="col-sm-6">
								<div class="text-box prev">
									<p>{{ $previous->title }}</p>
									<a href="{{ route('singlenews',$previous->id) }}">Previous Post</a>
								</div>									
							</div>
							@endif
							@if($next)
							<div class="col-sm-6">
								<div class="text-box next">
									<p>{{ $next->title }}</p>
									<a href="{{ route('singlenews',$next->id) }}">Next Post</a>
								</div>		
							</div>
							@endif
						</div>
					</div>

					{{-- <div class="col-md-12 post_slider">
						<div class="row">
							<h3>Related Posts</h3>
							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="{{ asset('user/images/blog/post-01.jpg') }}" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#">Pellentesque Vitae Tort Sem Pulvinar</a></h4>
											<p><span>By John Ryan</span> | <span>22Aug, 2019</span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->


							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="{{ asset('user/images/blog/post-02.jpg') }}" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#">Pellentesque Vitae Tort Sem Pulvinar</a></h4>
											<p><span>By John Ryan</span> | <span>22Aug, 2019</span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->

							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="{{ asset('user/images/blog/post-03.jpg') }}" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#">Pellentesque Vitae Tort Sem Pulvinar</a></h4>
											<p><span>By John Ryan</span> | <span>22Aug, 2019</span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->
						</div>
					</div><!--End .row--> --}}

					{{-- <div class="col-md-12 comments">							
						<div class="row">
							<h3>Comments</h3>
							<div class="col-sm-12 comment-single-item">
								<div class="col-sm-1 img-box">
									<img src="{{ asset('user/images/Single_cources/comment-01.jpg') }}" alt="" class="img-circle">
								</div>
								<div class="col-sm-11 comment-left-bar">
									<div class="comment-text">
										<ul class="list-unstyled comment-author-box">
											<li> <span class="name">James Smith</span> <span>
											November 11, 2019 
											</span></li>
											<li class="reply"><a href="#">Reply</a></li>
										</ul>
										<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 comment-single-item reply_text">
								<div class="row">
									<div class="col-sm-1 img-box">
										<img src="{{ asset('user/images/Single_cources/comment-01.jpg') }}" alt="" class="img-circle">
									</div>
									<div class="col-sm-11 comment-left-bar">
										<div class="comment-text">
											<ul class="list-unstyled comment-author-box">
												<li> <span class="name">James Smith</span> <span>
												November 11, 2019 
												</span></li>
											</ul>
											<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate.</p>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-sm-12 comment-single-item">
								<div class="col-sm-1 img-box">
									<img src="{{ asset('user/images/Single_cources/comment-01.jpg') }}" alt="" class="img-circle">
								</div>
								<div class="col-sm-11 comment-left-bar">
									<div class="comment-text">
										<ul class="list-unstyled comment-author-box">
											<li> <span class="name">James Smith</span> <span>
											November 11, 2019 
											</span></li>
											<li class="reply"><a href="#">Reply</a></li>
										</ul>
										<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate.</p>
									</div>
								</div>
							</div>
						</div>
					</div> --}}

					{{-- <div class="col-sm-12">
						<div class="leave-comment-box">
	                        <div class="comment-respond">
	                            <div class="comment-reply-title">
	                                <h3>Leave a Reply</h3>
	                            </div>
	                            <div class="comment-form">
	                                <form>
		                                <div class="row">
		                               		<div class="col-sm-12">
			                                	<div class="form-group">
			                                        <textarea class="form-control" rows="8" placeholder="Type Your Comments"></textarea>
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-4">
			                                    <div class="form-group">
			                                        <input type="text" class="form-control" placeholder="Your Name">
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-4">
			                                    <div class="form-group">
			                                        <input type="email" class="form-control" placeholder="Your E-mail">
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-4">
			                                    <div class="form-group">
			                                        <input type="text" class="form-control" placeholder="Website URL">
			                                    </div>
		                                    </div>		
		                                    <div class="col-sm-12">                                    
			                                    <div class="full-width">
			                                        <input value="Submit"  type="submit">
			                                    </div>
		                                    </div>	
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
						</div>
					</div> --}}

				</div>	
			</div>


			<div class="col-sm-4">
				<div class="sidebar-text-post">							
					<div class="row">
						<div class="col-sm-12 recent-post">
							<h3>Recent Post</h3>
							<div class="row">

								@foreach ($sides as $side)
									<div class="col-sm-12 recent-single">
										<div class="recent-content-item">
											<div class="img-box"><a href="{{ route('singlenews',$side->id) }}"><img src="{{ asset('/images/'.$side->image) }}" alt=""></a></div>
											<div class="recent-text pull-right">
												@php
													$title= Str::words($side->title, $words = 35, $end = '...');
												@endphp
												<a href="{{ route('singlenews',$side->id) }}">{!! htmlspecialchars_decode($title) !!}</a>
												<p>{{ $side->created_at->diffForhumans() }} <span class="content"><i class="fa fa-eye"></i>{{ $side->viewer }}</span></p>
											</div>
										</div>
									</div><!-- /.recent-single-item -->
								@endforeach

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h3>Categories</h3>
							<div class="categories-item-post">
								<ul class="list-unstyled">
									@foreach ($category as $item)
										<li><a href="{{ route('category',$item->slug) }}"><i class="fa fa-angle-right"></i>{{ $item->name }} </a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3>Populer Tags</h3>
							<div class="populer-tags">		
								<div class="tagcloud">
									@foreach ($tags as $tag)
										<a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
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




@endsection

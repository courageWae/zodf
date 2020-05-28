<!doctype html>
<html class="no-js" lang="zxx">

@include('user.layouts.head')
<body class="event-01">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	@include('user.layouts.topnav')

	<div class="header-body">
		@include('user.layouts.nav')
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>List Of Projects</h1>
						<p><span><a href="{{ route('index') }}">Home <i class='fa fa-angle-right'></i></a></span> <span class="b-active">List Of Projects</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<!-- Teachers Area section -->
<section class="events-list-03">
	<div class="container">
		<div class="row event-body-content">
			@foreach ($projects as $project)
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="{{ asset('images/'.$project->image) }}" alt="" class="img-responsive">
						</div>
						
						<div class="col-sm-7 event-info">
							<h3>{{ $project->name }}</h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									Start Date: {{ $project->startdate }}
								</span>
								<span>
									<i class="fa fa-calendar event-icon"></i>
									Closing Date: {{ $project->closingdate }}
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									{{ $project->location }}										
								</span>
							</p>

							<p>{{ \Illuminate\Support\Str::limit($project->description, 200) }}</p>

							<a class="event-btn" href="{{ route('projectdetail', $project->id) }}">Read More<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
						</div>
					</div>
				</div>	
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="event-bottom-btn">
					<a href="#" class="view-more-item">view all events</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->



<!-- Footer Area section -->
@include('user.layouts.footer')
<!-- ./ End Footer Area-->
    @include('user.layouts.script')
</body>

<!-- Mirrored from ecologytheme.com/theme/eduread/event-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2020 05:32:38 GMT -->
</html>

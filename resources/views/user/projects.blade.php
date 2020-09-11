@extends('user.layouts.app')

@section('title', 'Projects')

@section('page', 'event-01')

@section('main')
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

							<a class="btn btn-primary text-center" href="{{ route('projectdetail', $project->id) }}">Read More <i class="fa fa-long-arrow-right events-btn-icon"></i></a>  <a href="{{ route('projectregister', $project->id) }}" class="btn btn-primary price-btn">Register For Project <i class="fa fa-long-arrow-right events-btn-icon"></i></a>						</div>
					</div>
				</div>	
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="event-bottom-btn">
					{{ $projects->links() }}
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->



<!-- Footer Area section -->
@endsection

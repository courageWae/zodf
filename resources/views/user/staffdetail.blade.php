@extends('user.layouts.app')

@section('title', 'Profile')

@section('page', 't-profile-01')

@section('main')
<!--  End header section-->

<!-- Teachers Area section -->
<section class="teacher-prolile-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 t-profile-left">
				<div class="teacher-contact">
					<img src="{{ asset('steering/thumbnail/'.$steering->image) }}" alt="" class="img-responsive">
					{{-- <h3>Contact Info</h3>
					<p><span>Email:</span> martin@EduRead.com</p>
					<p><span>Phone:</span> 61 3 8376 6284</p>
					<ul class="list-unstyled">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter "></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul> --}}
				</div>
			</div>
			<div class="col-sm-9 t-profile-right">
				<div class="row all-corsess-wapper">
					<div class="col-sm-12">
						<div class="all-courses">
							<h3>{{ $steering->name }}</h3>
							<div class="profile__courses__inner">
                                <ul class="profile__courses__list list-unstyled">
                                    {{-- <li><i class="fa fa-graduation-cap"></i>Degree:</li>
                                    <li><i class="fa fa-star"></i>Experience:</li>
                                    <li><i class="fa fa-heart"></i>Hobbies:</li>
                                    <li><i class="fa fa-bookmark"></i>My Courses:</li> --}}
                                    <li><i class="fa fa-bookmark"></i>Position:</li>
                                </ul>
                                <ul class="profile__courses__right list-unstyled">
                                    {{-- <li>PHD in Mathmatics</li>
                                    <li>20 Years in university Math</li>
                                    <li>Music, Dancing and Family</li>
                                    <li>Higher Math, Math Puzzle</li> --}}
                                    <li>{{ $steering->position }}</li>
                                </ul>
							</div>
							<p>{{ $steering->description }}</p>
						</div>
					</div>
				</div>
			</div>															
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->


<!-- Footer Area section -->
@endsection

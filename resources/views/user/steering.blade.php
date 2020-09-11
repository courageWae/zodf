@extends('user.layouts.app')

@php
	
@endphp
@section('title', $name)

@section('page', 'teachers-01')

@section('main')
<!--  End header section-->

<!-- Teachers Area section -->
<section class="teachers-area">
	<div class="container">
		<div class="row teachers-wapper-01">
			@foreach ($steerings as $steering)
			<a href="{{ route('staffdetail',$steering->id) }}">
				<div class="col-sm-6 col-md-3 teacher-single">
					<div class="teacher-body">
						<img src="{{ asset('steering/thumbnail/'.$steering->image) }}" alt="" class="img-responsive">
						<div class="teachars-info">
							<h3>{{ $steering->name }}</h3>
							<span>{{ $steering->position }}</span>
						</div>
					</div>
				</div>
			</a>
			@endforeach												
		</div>							
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->

<!-- Footer Area section -->
@endsection
@extends('user.layouts.app')

@section('title', 'Image Gallery')

@section('page', 'courses')

@section('main')



<div class="section-paddings gallery-images event-01">
	<div class="container">

		<div class="row gallery_img_wrapper">

			@foreach ($galleries as $gallery)
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="{{ asset('/public/image/'.$gallery->image) }}" alt="">
						<figcaption>
							<a href="{{ asset('/public/image/'.$gallery->image) }}" title=""><i class="fa fa-eye"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>
			@endforeach
			 <!-- end single-gallery -->

		</div>
	</div>
</div> <!-- incredible place end here -->



 <!-- Footer Area section -->
 @endsection


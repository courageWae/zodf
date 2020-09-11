@extends('user.layouts.app')

@section('title', 'News')

@section('page', 'blog_1')

@section('main')


<div class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 bolg_side-left">
				@foreach ($news as $new)
					<div class="col-sm-12 single-item-box">
						<div class="single-item">
							<div class="img-box">
								<a href="{{ route('singlenews',$new->id) }}"><img src="{{ asset('/images/'.$new->image) }}" alt="{{ $new->title }}" class="img-responsive"></a>
								<span><a href="{{ route('singlenews',$new->id) }}" class="overlay"></a></span>
								<div class="img-caption">
									<p class="date"><span>{{ $new->created_at->format('d') }}</span><span>{{ $new->created_at->format('M') }}</span></p>
								</div>
							</div>
							<div class="single-text-box">
								<h3><a href="{{ route('singlenews',$new->id) }}">{{ $new->title }}</a></h3>
								<ul class="list-unstyled">
									<li><i class="fa fa-user"></i><a href="{{ route('admin', $new->admin->id) }}"> By {{ $new->admin->name }}</a></li>
									<li><i class="fa fa-calendar"></i> {{ $new->created_at->diffForHumans() }}</li>
									<li><i class="fa fa-eye"></i> {{ $new->viewer }}</li>
									{{-- <li><a href="#">122 likes</a></li> --}}
								</ul>
								@php
									$body= Str::words($new->body, $words = 100, $end = '...');
								@endphp
								<p>{!! htmlspecialchars_decode($body) !!}</p>
								<div class="blog-btn-box">
									<a href="{{ route('singlenews',$new->id) }}">Read More</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach

				<div class="row">
					<div class="col-sm-12 text-center">
						<nav aria-label="Page navigation">
							{{ $news->links() }}
						</nav>
					</div>
				</div>	
			</div>
		</div>
	</div>	
</div>	

@endsection
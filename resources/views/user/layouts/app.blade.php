<!doctype html>
<html class="no-js" lang="zxx">

@include('user.layouts.head')

<body class="@yield('page')">
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
						<h1>@yield('title')</h1>
						<p><span><a href="{{ route('index') }}">Home <i class='fa fa-angle-right'></i></a></span> <span class="b-active">@yield('title')</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->

@section('main')
    
@show


<!-- Footer Area section -->
@include('user.layouts.footer')
<!-- ./ End Footer Area -->

    @include('user.layouts.script')
</body>

</html>

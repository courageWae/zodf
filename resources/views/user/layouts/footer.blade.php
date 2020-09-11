<!-- Footer Area section -->
<footer>
	<div class="container">
		<div class="row">
			<div class=" col-sm-12 footer-content-box">
				<div class="col-sm-6">
					<h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> ZODF Project</h3>
					<p>Zongo Development Fund Act, 2017 (No 964) was approved and passed by the Parliament on 
						02 January 2018 to provide financial resources to develop and transform the social and 
						economic conditions of Zongo communities; and provide for the management of the Fund and 
						for related matters.</p>
					<ul class="list-unstyled">
						<li><span><i class="fa fa-phone footer-icon"></i></span>0123-456-789</li>
						<li><span><i class="fa fa-envelope footer-icon"></i></span>info@zodf.com</li>
						<li><span><i class="fa fa-map-marker footer-icon"></i></span>01 Accra, GHANA</li>
					</ul>
				</div>

				<div class="col-sm-3">
					<h3>Links</h3>
					<ul class="list-unstyled">
						<li><a href="{{ route('index') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Home</a></li>
						<li><a href="{{ route('about') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About ZODF</a></li>
						<li><a href="{{ route('aboutproject') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About Project</a></li>
						<li><a href="{{ route('projects') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>All Projects</a></li>
						<li><a href="{{ route('news') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>News</a></li>
						<li><a href="{{ route('contact') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a></li>
						<li><a href="{{ route('gallery') }}"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<h3>Get in touch</h3>
					<p>Enter your email and we'll send you more information.</p>

					<form action="{{ route('subscribe') }}" method="POST">
						@csrf
						<div class="form-group">
							<input placeholder="Your Email" type="email" required name="email">
							<div class="submit-btn">
								<button type="submit" class="text-center">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-inner">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<p>&copy; Copyright 2019 ZODF Project | All rights reserved</p>
					</div>
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<ul class="list-unstyled footer-menu text-right">
							<li>Follow us:</li>
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus google"></i></a></li>
							<li><a href="#"><i class="fa fa-skype skype"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- ./ End footer-bottom -->		
</footer>
<!-- ./ End Footer Area-->
<!-- Start Counter Area section -->
<section class="counter-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-0 counters">
				<div class="row">
					@php
						$numbers = App\Model\Admin\Number::all();
					@endphp
					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-01.png" alt="">
							<div class="project-count counter">{{ $numbers[0]->youth }}</div>
							<span>YOUTH EMPOWERED</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-02.png" alt="">
							<div class="project-count counter">
								{{ $numbers[0]->zongos }}
								</div>
							<span>ZONGO COMMUNITIES</span>
						</div>	
					</div>	

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-03.png" alt="">
							<div class="project-count counter">{{ $numbers[0]->projects }}
								</div>
							<span>PROJECTS</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-04.png" alt="">
							<div class="project-count counter">{{ $numbers[0]->success }}</div>
							<span>SUCCESS TARGETED (%)</span>
						</div>	
					</div>	

				</div>
			</div>

			<div class="col-sm-5 col-sm-offset-0 counter-text-bottom">
				<div class="counter-text-box">
					<div class="counter-text">
						<div class="row">
							<div class="col-sm-12 section-header-box">
								<div class="section-header">
									<h2>Get Started Today</h2>
								</div><!-- ends: .section-header -->
							</div>
						</div>
						<p>To create a prosperous, inclusive and sustainable developed inner cities and Zongo communities across Ghana</p>
					</div>

					<div class="counter-btn">
						<a href="{{ route('aboutproject') }}"  style="background-color: #225dfe; color: white">Read More About Projects</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- ./ End Counter Area section -->
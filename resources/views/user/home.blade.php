<!doctype html>
<html class="no-js" lang="en"> 

@include('user.layouts.head')

<body>
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>

<header id="header">
    @include('user.layouts.topnav')
    
    <div class="header-body">
        @include('user.layouts.nav')
    </div>	

 	<!--==================
		Slider
	===================-->
    <div class="rev_slider_wrapper">
       <div id="rev_slider_1" class="rev_slider" style="display:none">

            <!-- BEGIN SLIDES LIST -->
            <ul>
				<li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text" data-thumb="user/images/index/slider-01.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="user/images/index/slider-01.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-80" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A batter world
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-10" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>						
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption lfb tp-resizeme header-btn" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="90" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Get Started Now</a> <a href="#." class="el-btn-regular">View Projects</a>
					</div>
				</li>
                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="user/images/index/slider-02.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="user/images/index/slider-02.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR.1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-80" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A batter world
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-10" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption lfb tp-resizeme header-btn" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="90" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Get Started Now</a> <a href="#." class="el-btn-regular">View Projects</a>
					</div>
				</li>
            </ul><!-- END SLIDES LIST -->

        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header>
	<!--  End header section-->

<section class="slider-content-bottom">
	<div class="container">
		<div class="row sider-btm-row-inner">
			<div class="col-sm-4 content_body slide_cont_box_01">
				<div class="slider-btm-box btm-item_01">
					<img src="user/images/index/slide-bottom-01.png" alt="" class="btm-item-icon">
					<h3>Sign Up for Training</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
				</div>
			</div>

			<div class="col-sm-4 content_body slide_cont_box_02">
				<div class="slider-btm-box btm-item_02">
					<img src="user/images/index/slide-bottom-02.png" alt="" class="btm-item-icon">
					<h3>Get Trained Anywhere</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
				</div>
			</div>

			<div class="col-sm-4 content_body slide_cont_box_03">
				<div class="slider-btm-box btm-item_03">
					<img src="user/images/index/slide-bottom-03.png" alt="" class="btm-item-icon">
					<h3>Graduation Certificate</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
				</div>
			</div>

		</div>
	</div>
</section>		


<!-- Start Welcome Area section -->
<section class="Welcome-area">
	<div class="container">	
		<div class="row">
			<div class="col-sm-6 Welcome-area-text">
				<div class="row">
					<div class="col-sm-12 section-header-box">
						<div class="section-header section-header-l">
							<h2>Welcome To ZODF Project</h2>
						</div><!-- ends: .section-header -->
					</div>
				</div>
				<p>Aorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod does tempor incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat quis nostrud exercitation ullamco.</p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>	

				<a href="#" class="read_more-btn fa fa-long-arrow-right">read more</a>		
			</div><!-- Ends: . -->
			
			<div class="col-sm-6 welcome-img">
				<img src="user/images/index/welcome.png" alt="" class="img-responsive">
			</div><!-- Ends: . -->					
		</div>
	</div>
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->

<!-- Start Events Area Section -->
<section class="events-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Upcoming Projects</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
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
									1st January
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									8:00am - 5:00pm
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									New York										
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
	</div>
</section>
<!-- ./ End Events Area section -->

<!-- Start Counter Area section -->
<section class="counter-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-0 counters">
				<div class="row">
					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-01.png" alt="">
							<div class="project-count counter">7096</div>
							<span>active students</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-02.png" alt="">
							<div class="project-count counter">508</div>
							<span>online courses</span>
						</div>	
					</div>	

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-03.png" alt="">
							<div class="project-count counter">167</div>
							<span>Year of history</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="user/images/index/counter-icon-04.png" alt="">
							<div class="project-count counter">70</div>
							<span>active students</span>
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
						<p>Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et.</p>
					</div>

					<div class="counter-btn">
						<a href="#">Read More About Projects</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- ./ End Counter Area section -->

<!-- ./ End Students Say Area section -->
<section class="students-say-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>What Zongo Trainees Say</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
			<div class="img-full-box">
				<div class="col-sm-3 col-sm-offset-4">								
					<div class="carousel-images slider-nav">
						<div>
							<img src="user/images/index/stu-parent-01.jpg" alt="1" class="img-responsive img-circle">
						</div>
						<div>
							<img src="user/images/index/stu-parent-02.jpg" alt="2" class="img-responsive img-circle">
						</div>
						<div>
							<img src="user/images/index/stu-parent-03.jpg" alt="3" class="img-responsive img-circle">
						</div>
						<div>
							<img src="user/images/index/stu-parent-04.jpg" alt="3" class="img-responsive img-circle">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="carousel-text slider-for">
					<div class="single-box">
						<p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibh euismod tincidunt ut laoreet dolor you magna aliquam eratm volutpat. Ut wisiyp oenim adefra miniumyp veniam, quis nostrud exerci tation ullavolutpat ipsum.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jhonthan Smith</h3>
						<span>Alexis, Parents</span>
					</div>

					<div class="single-box">
						<p>Maecenas ut dui vitae magna vestibulum fermentum ut non est. Fusce finibus viverra enim, et laoreet metus fringilla sit amet. Ut dui nunc, aliquet ut malesuada sit amet, sagittis aliquam laoreet lorem. In hac habitasse platea dictumst.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jhon Doe</h3>
						<span>Martin, Parent</span>
					</div>

					<div class="single-box">
						<p>Aenean at leo hendrerit, congue erat ut, volutpat felis. Suspendisse et sapien purus. Aenean tincidunt diam ac magna scelerisque dapibus. Quisque non elit et justo tristique semper. Sed a urna eros. Etiam tempus tempus leo vel aliquam.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jhonthan Smith</h3>
						<span>Alexis, Parents</span>
					</div>

					<div class="single-box">
						<p>Cras ut ipsum et erat accumsan aliquam. Cras feugiat eu dolor a imperdiet. Vestibulum ornare, nunc a pulvinar pellentesque, mi ipsum elementum velit, lobortis convallis lacus ipsum eget nisl. Mauris eget est lorem praesent et metus laoreet.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jessica Alaba</h3>
						<span>Martin, Parent</span>
					</div>
				</div>
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
	</div>
</section>
<!-- ./ End Students Say Area section -->


<!-- Instraction Area section -->
<section class="instraction-area">
	<div class="container">
		<div class="row inspiration-full-box">
			<div class="col-md-9 section-header-l">
				<h2>Like to become an instructor?</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
			</div>

			<div class="col-md-3">
				<div class="instraction-btn">
					<a href="#" class="">get strated now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ End Instraction Area section -->	

    @include('user.layouts.footer')

    @include('user.layouts.script')

</body>

</html>

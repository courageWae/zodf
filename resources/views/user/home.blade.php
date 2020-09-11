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
                    <li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text"
                        data-thumb="user/images/index/slider-01.jpg">
                        <div class="slider-overlay"></div>
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="user/images/home/slider.jpg" alt="Sky" class="rev-slidebg">
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-140"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Zongo Development
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-80"
                            data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Fund
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left"
                            data-hoffset="0" data-y="center" data-voffset="-10"
                            data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">
                            To create a prosperous, inclusive and sustainable developed inner cities and <br> Zongo
                            communities across Ghana…
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 8;"><a href="{{ route('projects') }}"
                                class="el-btn-regular slider-btn-left" style="color: white">Apply For Training</a> <a
                                href="{{ route('contact') }}" style="color: white" class="el-btn-regular">Contact</a>
                        </div>
                    </li>
                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text"
                        data-thumb="user/images/index/slider-02.jpg">
                        <div class="slider-overlay"></div>
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="user/images/home/slider.jpg" alt="Sky" class="rev-slidebg">
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR.1 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-140"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Better education for
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-80"
                            data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            A better world
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" data-x="left"
                            data-hoffset="0" data-y="center" data-voffset="-10"
                            data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">
                            To create a prosperous, inclusive and sustainable developed inner cities and <br> Zongo
                            communities across Ghana…
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 8;"><a href="{{ route('projects') }}"
                                class="el-btn-regular slider-btn-left" style="color: white">Register For Training Now</a> <a
                                href="{{ route('contact') }}" class="el-btn-regular" style="color: white">Contact Us</a>
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
                        <h3>Trainings</h3>
                        <hr>
                        <a href="{{ route('aboutproject') }}">read more<i
                                class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
                    </div>
                </div>

                <div class="col-sm-4 content_body slide_cont_box_02">
                    <div class="slider-btm-box btm-item_02">
                        <img src="user/images/index/slide-bottom-02.png" alt="" class="btm-item-icon">
                        <h3>Projects</h3>
                        <hr>
                        <a href="{{ route('aboutproject') }}">view more<i
                                class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
                    </div>
                </div>

                <div class="col-sm-4 content_body slide_cont_box_03">
                    <div class="slider-btm-box btm-item_03">
                        <img src="user/images/index/slide-bottom-03.png" alt="" class="btm-item-icon">
                        <h3>Register for training</h3>
                        <hr>
                        <a href="{{ route('aboutproject') }}">register now<i
                                class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
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
                                <h2>Welcome To Zongo Development Fund</h2>
                            </div><!-- ends: .section-header -->
                        </div>
                    </div>
                    <p>Zongo Development Fund Act, 2017 (No 964) was approved and passed by the Parliament on 02 January
                        2018 to provide financial resources to develop and transform the social and economic conditions
                        of Zongo communities; and provide for the management of the Fund and for related matters.</p>
                    <p>The Fund is a body corporate with perpetual succcession and has in all respects the powers of a
                        body corporate. </p>
                    <a href="{{ route('about') }}" class="read_more-btn fa fa-long-arrow-right">read more</a>
                </div><!-- Ends: . -->

                <div class="col-sm-6 welcome-img">
                    <img src="user/images/home/slider.jpg" alt="" class="img-responsive">
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
                        <h2>Upcoming Events</h2>
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
                                        {{ $project->created_at->diffForHumans() }}
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar event-icon"></i>
                                        Start Date: {{ $project->startdate }}
                                    </span>
                                    <span>
                                        <i class="fa fa-map-marker event-icon"></i>
                                        {{ $project->location }}
                                    </span>
                                </p>

                                <p>{{ \Illuminate\Support\Str::limit($project->description, 200) }}</p> 

                                <a class="btn btn-primary" href="{{ route('projectdetail', $project->id) }}"  style="background-color: #225dfe; color: white">Read More
                                    <i class="fa fa-long-arrow-right events-btn-icon"></i></a> <a
                                    href="{{ route('projectregister', $project->id) }}" class="btn btn-primary" style="background-color: #225dfe; color: white">Apply
                                    For Project <i class="fa fa-long-arrow-right events-btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ./ End Events Area section -->

    @include('user.layouts.counter')

    <br>
    <br><br>

    <!-- Teachers Area section -->
    <section class="teachers-area">
        <div class="container">

            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->

    <!-- Start News Area section -->
<section class="news-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Latest News</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">

            @foreach ($news as $new)
            <div class="col-sm-4 news-single">
				<div class="news-single-box">
					<div class="news-img-box">
						<img src="{{ asset('/images/'.$new->image) }}" alt="{{ $new->title }}" class="img-responsive">
					</div>
					<div class="news-content">
						<h3><a href="{{ route('singlenews',$new->id) }}">{{ $new->title }}</a></h3>
						<p class="news-time">
							<span>
								<i class="fa fa-calendar event-icon"></i>
								{{ $new->created_at->diffForHumans() }}
							</span>
							<span>
                                <i class="fa fa-user"></i>
                                @php
                                    $id = $new->admin_id;
                                    $admin = \App\User::where('id',$id)->get();
                                @endphp
                                
								{{ $admin[0]->name }}
							</span>
							<span>
								<i class="fa fa-eye"></i>
								{{ $new->viewer }}										
							</span>
						</p>
					</div>
				</div>
            </div>
            @endforeach				
		</div>
	</div>
</section>
<!-- ./ End News Area section -->

    <!-- ./ End Students Say Area section -->
    <section class="students-say-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header">
                        <h2>What Prominent Citizen Say</h2>
                        <p>“In the first budget of the Akufo-Addo Presidency, there will be a line item
                            in our budget that has never been there in any budget since independence in
                            1957 since today – the Zongo Development Fund.” Today thats a reality…</p>
                    </div><!-- ends: .section-header -->
                </div>
            </div>

            <div class="row">
                <div class="img-full-box">
                    <div class="col-sm-3 col-sm-offset-4">
                        <div class="carousel-images slider-nav">
                            <div>
                                <img src="user/images/home/AlhajiMumuni.jpg" alt="1" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/home/ci.jpg" alt="3" class="img-responsive img-circle">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-sm-offset-2">
                    <div class="carousel-text slider-for">
                        <div class="single-box">
                            <p> ... the various policies and programmes being implemented by the Akufo-Addo government
                                specifically tailored for Muslims and the Zongo communities bear testimony to the fact
                                that they like Muslims more than they were made to believe in the past.</p>
                            {{-- <ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul> --}}
                            <h3>Alhaji Mumuni</h3>
                            <span>Chief Imam for Suaman District in NW Region</span>
                        </div>

                        <div class="single-box">
                            <p>... to abide by the national laws so that the country's enviable religious tolerance
                                and peaceful co-existence would be sustained for national development.</p>
                            {{-- <ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul> --}}
                            <h3>Dr Sheikh Osman Nuhu Sharubutu</h3>
                            <span>The Chief Imam of Ghana (Centenarian)</span>
                        </div>

                        

                    </div>
                </div><!-- /.block-text -->
            </div>
            <!--./End row-->
        </div>
    </section>
    <!-- ./ End Students Say Area section -->


    <!-- Instraction Area section -->
    {{-- <section class="instraction-area">
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
</section> --}}
    <!-- ./ End Instraction Area section -->

    @include('user.layouts.footer')

    @include('user.layouts.script')

</body>

</html>

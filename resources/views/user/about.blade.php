@extends('user.layouts.app')

@section('title', 'About')

@section('page', 'contact')

@section('main')
    <!--  End header section-->
    
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
				<p>Zongo Development Fund Act, 2017 (No 964) was approved and passed by the Parliament on 02 January 2018 to provide financial resources to develop and transform the social and economic conditions of Zongo communities; and provide for the management of the Fund and for related matters.</p>
				<p>The Fund is a body corporate with perpetual succcession and has in all respects the powers of a body corporate. </p>
				<a href="{{ asset('user/images/home/ZongoDevelopmentAct2017.pdf') }}"  style="background-color: #225dfe; color: white" target="_blank" class="btn btn-primary">Download the Zongo Development Fund Act, 2017</a>		
			</div><!-- Ends: . -->
			
			<div class="col-sm-6 welcome-img">
				<img src="user/images/home/slider.jpg" alt="" class="img-responsive">
			</div><!-- Ends: . -->					
		</div>
	</div>
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->

<!-- Contact Area section -->
<section class="contact-area-02">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Vision</h2>		
					<p class="content-sub_p">The vision of the ZoDF, which is in line with the vision 
                        of the Ministry of Inner-City and Zongo Development, is to create prosperous, 
                        inclusive and sustainably developed inner cities and Zongo communities across Ghana.</p>
				</div>                       	                        
			</div>	

			<div class="col-sm-5  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>Mission</h2>		
						<p class="content-sub_p">The mission of the ZoDF, which is in line with the vision 
                            of the Ministry of Inner-City and Zongo Development, is to coordinate, collaborate 
                            and facilitate critical interventions through Affirmative actions that progressively 
                            addresses social, economic and infrastructure deficits to promote the socio-economic 
                            development and transformation of inner cities and Zongo communities.</p>
					</div>
				</div>
            </div>	
            															
        </div>
        <hr>
        <div class="row">
			<div class="col-sm-6 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Empowerment</h2>		
					<p class="content-sub_p">The object of the Fund is to provide financial resources to develop 
                        and transform the social and economic conditions of Zongo. communities. Moneys shall be 
                        applied activities that the Board may to include:</p>
                        <ul style="list-style: none;">
                            <li>1. Invest in basic services and strategic infrastructure.</li>
                            <li>2. Finance education and youth training programs.</li>
                            <li>3. Support of local businesses.</li>
                            <li>4. Promotion tourism, culture and arts. </li>
                            <li>5. Social protection for the poor and vulnerable. </li>
                            <li>6. Any other activity determined by the Board.a.</li>
                        </ul>
				</div>                       	                        
			</div>	

			<div class="col-sm-5  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>Projects</h2>		
						<p class="content-sub_p">The fund had identified projects in many Zongo communities 
                            which had been approved by the Board and it touches on the various aspects of development 
                            in the communities.</p>
                        <p class="content-sub_p">The the last survey showed there were 1,080 Zongo communities and still counting.</p>
					</div>
				</div>
            </div>	
            															
        </div>
        <hr>
	</div>
</section>
<!-- ./ End Contact Area section -->

<!-- Start Counter Area section -->
@include('user.layouts.counter')

<br>
<br><br>
<!-- ./ End Counter Area section -->

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
							<img src="user/images/home/JigneshViradia.jpg" alt="2" class="img-responsive img-circle">
						</div>
						<div>
							<img src="user/images/home/ci.jpg" alt="3" class="img-responsive img-circle">
						</div>
						<div>
							<img src="user/images/home/JigneshViradia.jpg" alt="2" class="img-responsive img-circle">
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
						<p>A great way to reach out across 1080 Zongo Communities across 10 regions of Ghana. 
							The Zongo Development Fund is truly a remarkable step by the Government to commence 
							grass root implementation of this wonderful project that will alleviate the quality 
							of life of the Zangos. Heartiest congratulations from all of us living in Ghana...</p>
						{{-- <ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul> --}}
						<h3>Jignesh Viradia</h3>
						<span>CMD Blimpex Ghana</span>
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

					<div class="single-box">
						<p>A great way to reach out across 1080 Zongo Communities across 10 regions of Ghana. 
							The Zongo Development Fund is truly a remarkable step by the Government to commence 
							grass root implementation of this wonderful project that will alleviate the quality 
							of life of the Zangos. Heartiest congratulations from all of us living in Ghana...</p>
						{{-- <ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul> --}}
						<h3>Jignesh Viradia</h3>
						<span>CMD Blimpex Ghana</span>
					</div>

				</div>
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
	</div>
</section>
<!-- ./ End Students Say Area section -->

@endsection

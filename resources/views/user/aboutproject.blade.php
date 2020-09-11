@extends('user.layouts.app')

@section('title', 'About Project')

@section('page', 'contact')

@section('main')
    <!--  End header section-->

<!-- Contact Area section -->
<section class="contact-area-02">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>1.	Infrastructure Enhancement </h2>		
					<p class="content-sub_p">The Fund has developed a programme that seeks to improve 
						community infrastructure in Zongo communities across the country.</p>
					<p class="content-sub_p">The infrastructure programme includes the following:</p>
					<ul style="list-style: none;">
						<li>a.	Access roads & streetlighting (alley pavement and community access 
							roads improvement and streetlighting)</li>
						<li>b.	Drains and bridges which includes the construction and improvement 
							of tertiary drains, bailey bridges, drainage alignment and coverings.</li>
						<li>c.	Recreational infrastructure which includes the transformation of open 
							spaces into sports facilities (astro turfs and green pitches) and recreational parks </li>
						<li>d.	Development WASH facilities which includes the construction of solid waste 
							management/sorting facilities, liquid waste management and improved institutional toilets).</li>
						<li>e.	Upgrading of Health infrastructure which includes the construction and
							 rehabilitation of Community Health Post (CHPs) facilities</li>
					</ul>
				</div>                       	                        
			</div>	

			<div class="col-sm-5  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>2.	Social Development</h2>		
						<p class="content-sub_p">This programme is the transformative process that helps 
							Zongo communities to move from limited power, voice, and choice in the Ghanaian 
							economy to having the skills, resources, and opportunities needed to compete equitably
							 in both local and international markets. The Fund seeks to achieve this target through
							  specific interventions such as:</p>

							  <ul style="list-style: none;">
								<li>•	Skills Development (Vocational development, Business startup facilitation, and 
									promoting access to entrepreneurial resources </li>
								<li>•	Educational Support (Adult education, early Childhood Education, Basic 
									Education, Library facilities and Scholarship schemes)</li>
								<li>•	Health and sanitation (Regenerative health support, maternal and child health and WASH).</li>
								<li>•	Peace and security (campaign against drug abuse/ substance use, promotion of social cohesion through sports).</li>
								<li>•	Social protection- Provisions of relief for the minority and vulnerable groups in Zongo communities.</li>
							</ul>
					</div>
				</div>
            </div>	
            															
        </div>
        <hr>
        <div class="row">
			<div class="col-sm-6 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>3.	Cultural Promotion </h2>		
					<p class="content-sub_p">Due to the multi-ethnic and cosmopolitan nature of Zongo communities, the Fund seeks to highlight the beauty 
						of diversity of these areas and the accompanying opportunities and challenges of diversity through:</p>
                        <ul style="list-style: none;">
                            <li>•	Heritage Preservation (documentation of history/heritage, cuisine promotion and festivals).</li>
                            <li>•	Ethno-religious dialogue (Inter-faith dialogue, Alternative Dispute Resolution platforms)</li>
                            <li>•	Promotion of tourism and culture through the development and promotion existing tourist sites and 
								continuous discovery and listing of heritage assets and unexplored sites</li>
                        </ul>
				</div>                       	                        
			</div>	

			<div class="col-sm-5  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>4.	Economic Empowerment </h2>		
						<p class="content-sub_p">The emphasis here is to provide avenue for equipping the Zongo dwellers, especially women and the youth 
							with the needed skills to make them employable in order to earn a decent living. </p>
                        <p class="content-sub_p">It involves provision of entrepreneurship training and support, including startup facilitation for youth indigenous 
							enterprises, agriculture and agribusinesses within the context of financial and technical supports.</p>
					</div>
				</div>
            </div>	
            															
        </div>
        <hr>
	</div>
</section>
<!-- ./ End Contact Area section -->

@include('user.layouts.counter')

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

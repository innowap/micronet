@extends('layouts.master')
@section('title', 'Micronet Digital')

@section('menu')
     @include('layouts.menu.index')
@endsection

@section('content')
	<!-- Section: intro -->
    <section id="intro" class="intro ">
		<div class="intro-content">
			<div class="container">
				<div class="row">
                    <div class="col-md-12">
                       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="img/banner.jpg" class="img-responsive" alt="">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                    </div>

				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

	<!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-40" >

		<div class="container" >
            <div class="row bg-gray">
                <div class="col-12  ">
                    <h2 class="h-bold text-center paddingtop-20">
                        Our Services
                    </h2>
                </div>
            </div>

			<div class="row " style="margin-top:20px">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center ">

							<i class="fa fa-book fa-3x circled bg-skin "></i>
							<h4 class="h-bold">Projects Materials</h4>
							<p>
							We assist and guide Finanl year students with well researched and queality PROJECT WORKS, RESEARCH GUIDES and Project materials, at a very reduced and affordable price.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-code fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Free Source Code</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Hire a writer</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Software Development</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Section: boxes -->


	<section id="callaction" class="home-section paddingtop-40 ">
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray" style="margin-bottom:40px">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>Hire a Writer Or a Software Developer</h3>
									<p>Relax and Get the stress off your shoulders, writting could be tasking, Winnerwriter solves this problem for you and puts you through. </p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="#" class="btn btn-skin btn-lg">Hire Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60 paddingtop-20">
		<div class="container ">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Meet Our Team Members</h2>
					<p>Professional Researchers, Writers and Software Developers </p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".cardiologist" class="cbp-filter-item">Developers (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".psychiatrist" class="cbp-filter-item">Writers (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".neurologist" class="cbp-filter-item">System Analyst (<div class="cbp-filter-counter"></div>)</div>
            </div>

            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item psychiatrist">
                        <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                        <div class="cbp-l-grid-team-position">Psychiatrist</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                        <div class="cbp-l-grid-team-position">Cardiologist</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/3.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                        <div class="cbp-l-grid-team-position">Cardiologist</div>
                    </li>
                    <li class="cbp-item neurologist">
                        <a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/4.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                        <div class="cbp-l-grid-team-position">Neurologist</div>
                    </li>

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->



	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our Gallery</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->


	<!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Emergency Contraception</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Anna</a>
								<span>Chicago, Illinois</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Orthopedic Surgery</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel text-light">
				                <img src="img/testimonials/2.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Matthew G</a>
								<span>San Antonio, Texas</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Medical consultation</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/3.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Scarlet Smith</a>
								<span>Dallas, Texas</span>
							</div>
						</div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Birth control pills</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Lucas Thompson</a>
								<span>Austin, Texas</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Radiology</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
						        <a title="" href="#">Ella Mentree</a>
								<span>Fort Worth, Texas</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Cervical Lesions</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Suzanne Adam</a>
								<span>Detroit, Michigan</span>
							</div>
						</div>
                    </div>


                </div>

                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
	</section>
	<!-- /Section: testimonial -->


	<!-- Section: pricing -->
	<section id="pricing" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Health packages</h2>
					<p>Take charge of your health today with our specially designed health packages</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

		   <div class="container">

			<div class="row">

				<div class="col-sm-4 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.1s">
					<div class="pricing-content general">
						<h2>Basic Fit 1 Package</h2>
						<h3>$33<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-4 pricing-box featured-price">
					<div class="wow bounceInUp" data-wow-delay="0.3s">
					<div class="pricing-content featured">
						<h2>Golden Glow Package</h2>
						<h3>$65<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
							<li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-4 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div class="pricing-content general last">
						<h2>Basic Fit 2 Package</h2>
						<h3>$47<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
							<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

			</div>

            </div>
	</section>
	<!-- /Section: pricing -->

	<section id="partner" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our partner</h2>
					<p>Take charge of your health today with our specially designed health packages</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

           <div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
						</div>
					</div>
				</div>
            </div>
	</section>



@endsection

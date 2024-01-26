
			<section class="page_title cover-background padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
				<div class="container">
					<div class="row">


						<div class="col-md-12">
							<h1 class="bold"><?= $title ?></h1>
						</div>


					</div>
				</div>
			</section>


			<!--eof topline-->


			<section class="s-pt-50 s-pt-md-70 s-pt-xl-80 s-pb-60 s-pb-md-80 s-pb-xl-90">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="col-12 col-md-6">
							<img src="<?=base_url()?>assets/images/about-img.png" alt="">
						</div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-12 col-md-6">
							<h6 class="special-heading">
								<span class="above">Suraj Cable Network benefits</span>
							</h6>
							<h4 class="special-heading">
								<span>Want to go faster? You got it.</span>
							</h4>
							<div class="divider-30"></div>
							<p>The speed of data, as it travels from the Internet to your computer, is measured in megabits per second (Mbps). Different activities require different speeds.</p>
							<div class="divider-25"></div>
							<ul class="list-styled-circle">
								<li>50% off on professional installation</li>
								<li>10 hours of cloud DVR service</li>
								<li>HD included</li>
								<li>Speed good for 6-8 devices at the same time</li>
							</ul>
							<div class="divider-40"></div>
							<a class="btn btn-maincolor" href="<?= base_url("/packages") ?>">View All Plans</a>
						</div>

					</div>

				</div>
			</section>

			<section id="icon-bg-gradient" class="ds">
				<div class="container-fluid">
					<div class="row">
						<div class="divider-60 divider-md-80 divider-xl-150"></div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled icon-bordered">
									<i class="ico icon-manual fs-40"></i>
								</div>
								<h5><a href="<?= base_url("/contact") ?>">24/7 Support</a></h5>
								<p>
									We provide a Quick service TV Channel, Cable, Remote, Setup Box, Internet.
								</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled icon-bordered">
									<i class="ico icon-customer-support fs-40"></i>
								</div>
								<h5><a href="<?= base_url("/contact") ?>">Installation</a></h5>
								<p>
									Only One time Installation charge and get free services every time.
								</p>
							</div>
						</div>
						<div class="divider-40 d-lg-none"></div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled icon-bordered">
									<i class="ico icon-download fs-40"></i>
								</div>
								<h5><a href="<?= base_url("/packages") ?>">Fast Download</a></h5>
								<p>
									We Provide High Speed internet plans for hassle-free unlimited downloads.
								</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled  icon-bordered">
									<i class="fa fa-television fs-40"></i>
								</div>
								<h5><a href="<?= base_url("/packages") ?>">450+ Channels</a></h5>
								<p>
									We Provide Sports, Movie, News, Cartoons, Food, Wild. It's More then 450+ Channels.
								</p>
							</div>
						</div>
						<div class="divider-60 divider-md-80 divider-xl-150"></div>
					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls ms">
				<div class="container">
					<div class="row c-gutter-30">
						<div class="col-md-12 text-center">
							<h6 class="special-heading">
								<span class="above">NEW TV CHANNEL PACKAGES ARE HERE!</span>
							</h6>
							<h4 class="special-heading">
								<span>Better-than-ever Offers </span>
							</h4>
							<div class="divider-30 divider-sm-50"></div>
						</div>
						<?php foreach($package as $pckg) : ?>
						<div class="col-lg-4 col-md-4">
							<div class="pricing-plan box-shadow color_style1">
							    
								<div class="plan-name">
									<h3>									       <?= $pckg['package_name'] ?>
									</h3>
								</div>
								<div class="plan-header">
									<ul>
										<li>
											<p class="plan-header-title"><?=  $pckg['package_type'] ?></p>
											<p class="plan-header-aftertitle">80 Mbps</p>
											<p class="plan-header-text">Download Speeds</p>
										</li>
										<li>
											<p class="plan-header-title">TV</p>
											<p class="plan-header-aftertitle"><? //$pckg['package_channel'] ?>165+</p>
											<p class="plan-header-text">Chanels</p>
										</li>
									</ul>
									<img alt="" src="<?=base_url()?>assets/images/price-img1.png">
								</div>

								<div class="plan-features">
									<ul class="list-styled-circle">
										<?= $pckg['package_description'] ?>
									</ul>
								</div>
								<div class="price-wrap ">
									<span class="plan-sign">INR</span>
									<span class="plan-price"><?= $pckg['package_price'] ?></span>
									<span class="plan-decimals">/mo</span>
								</div>

								<div class="plan-button">
									<a href="<?= base_url("/packages") ?>" class="btn btn-maincolor">Recharge Now</a>
								</div>
							</div>
						</div>
						<div class="divider-30 d-md-none"></div>
						<?php endforeach; ?>
						
						<div class="col-md-12 text-center">
							<div class="divider-30 divider-sm-50"></div>
							<a class="btn btn-outline-secondary" href="about.html#">View All Offers</a>
						</div>
						
					</div>
				</div>
			</section>

			<!-- <section id="section_testimonials" class="ls s-py-60 s-py-md-80 s-py-xl-150">
				<div class="container">
					<div class="row c-gutter-50 mobile-padding-normal">

						<div class="col-md-12">
							<div class="testimonials-slider style2 owl-carousel" data-autoplay="true" data-loop="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-nav="true" data-dots="false" data-margin="30" data-nav-Prev='<i class="fa fa-angle-left" aria-hidden="true"></i>Prev Review' data-nav-Next='Next Review<i class="fa fa-angle-right" aria-hidden="true"></i>'>

								<div class="quote-item">
									<div class="quote-image">
										<img src="<?=base_url()?>assets/images/team/testimonials_01.jpg" alt="">

									</div>
									<p>
										Improve your outreach by connecting with thousands of authority bloggers and social media influencers in your domain area. Email us the type of bloggers you want to reach out for your marketing campaign.
									</p>
									<footer>
										<cite>Martin Miller</cite>
										<p class="author_job">Suraj Cable Network Customer</p>
									</footer>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="<?=base_url()?>assets/images/team/testimonials_02.jpg" alt="">

									</div>
									<p>
										Improve your outreach by connecting with thousands of authority bloggers and social media influencers in your domain area. Email us the type of bloggers you want to reach out for your marketing campaign.
									</p>
									<footer>
										<cite>Sidney W. Yarber</cite>
										<p class="author_job">Suraj Cable Network Customer</p>
									</footer>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="<?=base_url()?>assets/images/team/testimonials_03.jpg" alt="">

									</div>
									<p>
										Improve your outreach by connecting with thousands of authority bloggers and social media influencers in your domain area. Email us the type of bloggers you want to reach out for your marketing campaign.
									</p>
									<footer>
										<cite>Sidney W. Yarber</cite>
										<p class="author_job">Suraj Cable Network Customer</p>
									</footer>
								</div>

							</div>

						</div>

					</div>
				</div>
			</section> -->
			<section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="col-md-12 text-center">
							<h6 class="special-heading">
								<span class="above">SurajCable broadband internet</span>
							</h6>
							<h4 class="special-heading">
								<span>Network Solutions from SurajCable</span>
							</h4>
							<div class="divider-30 divider-sm-50"></div>
						</div>
						<?php foreach($services as $s) : ?>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="icon-box text-center home-style">
								<div class="icon-styled color-main">
									<i class="<?=$s['service_icon'] ?>"></i>
								</div>
								<h5><a href="<?= base_url("/contact") ?>"><?= $s['service_name'] ?></a></h5>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<?php endforeach; ?>
						
						<div class="col-md-12 text-center">
							<div class="divider-30 divider-sm-60"></div>
							<a class="btn btn-outline-secondary" href="<?= base_url("/packages") ?>">Recharge Now...</a>
						</div>
						<div class="col-md-12 text-center">
							<div class="divider-30 divider-sm-50"></div>
							<p class="text-dark">For more information call us at <a href="tel:<?= $contact_detail['office1'] ?>"><?= $contact_detail['office1'] ?> </a> or Email Us on <a href="mailto: <?= $contact_detail['email1'] ?>"><?= $contact_detail['email1'] ?> </a></p>
						</div>
					</div>
				</div>
			</section>

			<section id="internet-service" class="s-pt-100 s-pt-md-70 s-pt-xl-230 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="divider-30 divider-sm-50 divider-md-190"></div>
						<div class="col-xl-8 offset-xl-2 text-center">
							<h6 class="special-heading">
								<span class="above" style="color:#fff;">SurajCable internet services</span>
							</h6>
							<h4 class="special-heading">
								<span style="color:#fff;">Why SurajCable ISP is Right for You?</span>
							</h4>
							<div class="divider-30"></div>
							<p style="color:#fff;">The speed of data, as it travels from the Internet to your computer, is measured in megabits per second (Mbps). Different activities require different speeds.</p>
							<div class="divider-40"></div>
							<a class="btn btn-maincolor" href="<?= base_url("/packages") ?>">Recharge Now...</a>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls ms">
				<div class="container">
					<div class="row c-gutter-30">
						<div class="col-md-12 text-center">
							<h6 class="special-heading">
								<span class="above">NEW INTERNET PACKAGES ARE HERE!</span>
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
							<a class="btn btn-outline-secondary" href="<?= base_url("/packages") ?>">View All Plans</a>
						</div>
					</div>
				</div>
			</section>

			<section class="home-gallery ls">
				<div class="">
					<div class="row">
						<div class="col-lg-12">
							<div class="row isotope-wrapper masonry-layout c-gutter-0">
								<div class="col-md-4 col-sm-12">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="<?= base_url() ?>assets/images/gallery/home/home-gallery1.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>
												<a href="gallery-single.html">Fast Internet Speeds</a>
											</h4>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-12">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="<?= base_url() ?>assets/images/gallery/home/home-gallery2.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>
												<a href="gallery-single.html">Channel Lineups</a>
											</h4>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-12">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="<?= base_url() ?>assets/images/gallery/home/home-gallery3.jpg" alt="">
										</div>
										<div class="item-content">
											<h4>
												<a href="gallery-single.html">Our Ultimate TV Experience</a>
											</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pt-md-70 s-pt-xl-80 s-pb-60 s-pb-md-80 s-pb-xl-90">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="col-12 col-md-6">
							<img src="<?= base_url() ?>assets/images/about-img.png" alt="">
						</div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-12 col-md-6">
							<h6 class="special-heading">
								<span class="above">SurajCable benefits</span>
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

			<!-- <section id="coverage-map" class="s-pb-60 s-pb-md-80 s-pb-xl-150 s-pt-30 s-pt-md-50 s-pt-xl-115 ds">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="col-xl-8 offset-xl-2 text-center">
							<div class="icon-box text-center">
								<div class="icon-styled color-light fs-60">
									<i class="ico icon-wifi1"></i>
								</div>
							</div>
							<h6 class="special-heading">
								<span class="above">SurajCable network coverage</span>
							</h6>
							<h4 class="special-heading">
								<span>Coverage Map & Locations</span>
							</h4>
							<div class="divider-30"></div>
							<p>The speed of data, as it travels from the Internet to your computer, is measured in megabits per second (Mbps). Different activities require different speeds.</p>
							<div class="divider-40"></div>
							<a class="btn btn-maincolor" href="index.html#">Check Coverage</a>
						</div>
					</div>
				</div>
			</section> -->

			<section id="icon-bg-gradient" class="ds">
				<div class="container">
					<div class="row">
						<div class="divider-50 divider-md-70 divider-xl-140"></div>
						<div class="col-sm-12">
							<h6 class="special-heading text-center">
								<span class="above">have you any questions</span>
							</h6>
							<h4 class="special-heading text-center">
								<span>Will you want know more?</span>
							</h4>
						</div>
						<div class="divider-40"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-darkgrey icon-bordered">
									<i class="ico icon-headphones fs-36"></i>
								</div>
								<h5><a href="<?= base_url("/contact") ?>">Talk to an Agent</a></h5>
								<p>
									Call for Service
								</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-darkgrey icon-bordered">
									<i class="ico icon-chat fs-36"></i>
								</div>
								<h5><a href="<?= base_url("/contact") ?>">Chat with an Agent</a></h5>
								<p>
									WhatsApp Now
								</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-main3 icon-bordered">
									<i class="ico icon-map fs-36" aria-hidden="true"></i>
								</div>
								<h5><a href="<?= base_url("/contact") ?>">Visit SurajCable Store</a></h5>
								<p>
									Find our Office
								</p>
							</div>
						</div>
						<div class="divider-60 divider-md-80 divider-xl-150"></div>
					</div>
				</div>
			</section>


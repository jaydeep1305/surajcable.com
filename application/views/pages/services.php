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


			<section class="ls s-pt-60 s-pt-md-80 s-pt-xl-150 s-pb-30 s-pb-md-50 s-pb-xl-120 c-mb-30 service-isotope" style="background: #F7F6FB;">
				<div class="container">
					<div class="row">

                        <?php foreach($services as $s) : ?>
						<div class="col-md-6 col-sm-12">
							<div class="icon-box text-center">
								<div class="icon-styled fs-40">
									<i class="color-main <?= $s['service_icon'] ?>"></i>
								</div>

								<h6 class="service-title">
									<a href="<?= base_url("/contact") ?>"><?= $s['service_name'] ?></a>
								</h6>

								<p>
									<?= $s['service_description'] ?>
								</p>
								<a href="<?= base_url("/contact") ?>" class="simple_link">Contact to Service Man</a>

							</div>

						</div><!-- .col-* -->
                        <?php endforeach; ?>


					</div>

				</div>
			</section>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8 text-justify">
				<div class="box box-primary">
					<div class="box-body">
						<?php foreach ($testimonial_array as $testimonial):?>
							<div class="col-md-10 col-xs-10">
								<blockquote><?=str_ireplace("[[your company]]","<b>$company_name</b>",$testimonial)?></blockquote>
							</div>
							<div class="col-md-2 col-xs-1">
								<button class="btn btn-info btn-block copy" data-copied="<?=str_ireplace("[[your company]]","<b>$company_name</b>",$testimonial)?>"> Copy </button>
							</div>
						<?php endforeach; ?>
						<div class="form-group"><input type="text" class="form-control" readonly="" id="copy-input"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
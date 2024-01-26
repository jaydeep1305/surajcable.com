
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Testimonial : ".$testimonial['username']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-3">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjtestimonial/edit/'.$testimonial['testimonial_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-3">
							<?php echo form_open('/gjtestimonial/delete/'.$testimonial['testimonial_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $testimonial['username']; ?> </h3>
						<h5> <?= $testimonial['designation']; ?> </h5>
						<div class="col-md-6">
							<img style="border: 5px solid gray;" height= "100%" width= "100%" src="<?php echo base_url(); echo '/assets/images/testimonial/'.$testimonial['testimonial_image']; ?> ">
						</div>
						<div class="clearfix"></div>
						<hr/>
						<p> <?= $testimonial['testimonial']; ?></p>						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
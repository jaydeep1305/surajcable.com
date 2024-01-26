<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo form_open_multipart('gjtestimonial/order'); ?>
							<table class="table table-striped">
								<thead>
									<th>Client Name
									<th>Feedback
									<th>Manage
								</thead>
								<tbody>
								<?php foreach($testimonials as $testimonial) : ?>
									<tr>
										<td><?= $testimonial['username']; ?></td>
										<td><?php echo word_limiter($testimonial['testimonial'], 5); ?></td>
										<td><input type="text" name="testimonial[<?= $testimonial['testimonial_id'] ?>]" value="<?= $testimonial['testimonial_order'] ?>" size=2></td>
										<td> 
											<a class="btn btn-xs" href="<?= base_url('gjtestimonial/view/'.$testimonial['testimonial_id']); ?>"><i class="fa fa-eye"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjtestimonial/edit/'.$testimonial['testimonial_id']); ?>"><i class="fa fa-edit"></i> </a>
											<a class="btn btn-xs remove" href="<?= base_url('gjtestimonial/delete/'.$testimonial['testimonial_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
										</td>
									</tr>
								<?php endforeach; ?>	
								</tbody>
							</table>
							<div class="form-group text-right">
								<button type="submit" name="save_order" class="btn btn-info">Save Order</button>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
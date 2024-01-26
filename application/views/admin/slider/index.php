<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo form_open_multipart('gjslider/order'); ?>
							<table class="table table-striped">
								<thead>
									<th>Slider
									<th>Manage
								</thead>
								<tbody>
								<?php foreach($sliders as $slider) : ?>
									<tr>
										<td><?= $slider['title'] ?></td>
										<td><input type="text" name="slider[<?= $slider['slider_id'] ?>]" value="<?= $slider['slider_order'] ?>" size=2></td>
										<td> 
											<a class="btn btn-xs" href="<?= base_url('gjslider/view/'.$slider['slider_id']); ?>"><i class="fa fa-eye"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjslider/edit/'.$slider['slider_id']); ?>"><i class="fa fa-edit"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjslider/delete/'.$slider['slider_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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
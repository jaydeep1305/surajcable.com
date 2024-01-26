<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo form_open_multipart('gjpackage/order'); ?>
							<table class="table table-striped">
								<thead>
								
									<th>Package Name</th>
									<th>Price</th>
									<th>Slug</th>
									<th>Description</th>
									<th>Order</th>
									<th>Visible</th>
									<th>Manage</th>
								</thead>
								<tbody>
								<?php foreach($package as $prod) : ?>
									<tr>
										<td><?= $prod['package_name'] ?></td>
										<td><?= $prod['package_price'] ?></td>
										<td><?= $prod['package_slug'] ?></td>
										<td><?= $prod['package_description'] ?></td>
										
										<td><input type="text" name="package[<?= $prod['package_id'] ?>]" value="<?= $prod['package_order'] ?>" size=2></td>
										
										<td><input class="toggle-event" type="checkbox" data-toggle="toggle" data-on="Show" data-package-id="<?= $prod['package_id']?>" data-off="Hide" <?= ($prod['status']==1)?'checked':'' ?>></td>
										
										<td> 
											<a class="btn btn-xs" href="<?= base_url('gjpackage/view/'.$prod['package_id']); ?>"><i class="fa fa-eye"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjpackage/edit/'.$prod['package_id']); ?>"><i class="fa fa-edit"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjpackage/delete/'.$prod['package_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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
<script type="text/javascript">
	function bootstrap_toggle_gj()
	{
		$('.toggle-event').change(function() {

			var package_id = $(this).attr("data-package-id");
			var package_status = "";

			if($(this).is(":checked"))
			{	package_status = 1;	}
			else
			{	package_status = 0; }

			$.ajax({
				method: "POST",
				url: "<?=base_url()?>gjpackage/change_status",
				data: { package_id: package_id, package_status: package_status}
			})
			.done(function( msg ) {
				alert( "Your data has been saved." );
			});

		});
	}
</script>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo form_open_multipart('gjservice/order'); ?>
							<table class="table table-striped">
								<thead>
								
									<th>service Name</th>
									<th>Price</th>
									<th>Slug</th>
									<th>Description</th>
									<th>Order</th>
									<th>Visible</th>
									
									<th>Manage</th>
								</thead>
								<tbody>
								<?php foreach($service as $prod) : ?>
									<tr>
										<td><?= $prod['service_name'] ?></td>
										<td><?= $prod['service_price'] ?></td>
										<td><?= $prod['service_slug'] ?></td>
										<td><?= $prod['service_description'] ?></td>
										
										<td><input type="text" name="service[<?= $prod['service_id'] ?>]" value="<?= $prod['service_order'] ?>" size=2></td>
										
										<td><input class="toggle-event" type="checkbox" data-toggle="toggle" data-on="Show" data-service-id="<?= $prod['service_id']?>" data-off="Hide" <?= ($prod['status']==1)?'checked':'' ?>></td>
										
										<td> 
											<a class="btn btn-xs" href="<?= base_url('gjservice/view/'.$prod['service_id']); ?>"><i class="fa fa-eye"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjservice/edit/'.$prod['service_id']); ?>"><i class="fa fa-edit"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjservice/delete/'.$prod['service_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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

			var service_id = $(this).attr("data-service-id");
			var service_status = "";

			if($(this).is(":checked"))
			{	service_status = 1;	}
			else
			{	service_status = 0; }

			$.ajax({
				method: "POST",
				url: "<?=base_url()?>gjservice/change_status",
				data: { service_id: service_id, service_status: service_status}
			})
			.done(function( msg ) {
				alert( "Your data has been saved." );
			});

		});
	}
</script>
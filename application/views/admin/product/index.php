<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo form_open_multipart('gjproduct/order'); ?>
							<table class="table table-striped">
								<thead>
								
									<th>Product</th>
									<th>Category</th>
									<th>Order</th>
									<th>Visible</th>
									<th>Manage</th>
								</thead>
								<tbody>
								<?php foreach($product as $prod) : ?>
									<tr>
										<td><?= $prod['product_name'] ?></td>
										<td><?= $prod['cat_name'] ?></td>
										<td><input type="text" name="product[<?= $prod['product_id'] ?>]" value="<?= $prod['product_order'] ?>" size=2></td>
										
										<td><input class="toggle-event" type="checkbox" data-toggle="toggle" data-on="Show" data-product-id="<?= $prod['product_id']?>" data-off="Hide" <?= ($prod['status']==1)?'checked':'' ?>></td>
										
										<td> 
											<a class="btn btn-xs" href="<?= base_url('gjproduct/view/'.$prod['product_id']); ?>"><i class="fa fa-eye"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjproduct/edit/'.$prod['product_id']); ?>"><i class="fa fa-edit"></i> </a>
											<a class="btn btn-xs" href="<?= base_url('gjproduct/delete/'.$prod['product_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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

			var product_id = $(this).attr("data-product-id");
			var product_status = "";

			if($(this).is(":checked"))
			{	product_status = 1;	}
			else
			{	product_status = 0; }

			$.ajax({
				method: "POST",
				url: "<?=base_url()?>gjproduct/change_status",
				data: { product_id: product_id, product_status: product_status}
			})
			.done(function( msg ) {
				alert( "Your data has been saved." );
			});

		});
	}
</script>
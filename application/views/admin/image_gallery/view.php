<style type="text/css">table td {vertical-align: middle !important;}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Product : ".$product['product_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-4">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjproduct/edit/'.$product['product_id']); ?>"> Edit / Upload Images </a>
						</div>
						<div class="col-md-4">
							<?php echo form_open('/gjproduct/delete/'.$product['product_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $product['product_name']; ?> </h3>
						<div class="col-md-6">

						</div>
						<div class="clearfix"></div>
						<hr/>
						<p> <?= $product['product_description']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-success">
					<table class="table table-striped">
					  				<thead>
					  					<th>Product Image</th>
					  					<th>Order</th>
				  					</thead>
				  					<tbody>
				  						<?php foreach($product_image as $pi):?>
				  							<tr>
				  								<td>
				  									<img src="<?=base_url()?>/assets/images/product/thumbnail/<?=$pi['product_image_name']; ?>" class="img-responsive">
				  								</td>
				  								<td><?=$pi['product_image_order']?></td>
				  							</tr>
				  						<?php endforeach;?>
				  						<tr><td><td></tr>
				  					</tbody>
					  			</table>
				</div>
			</div>
		</div>
	</section>
</div>
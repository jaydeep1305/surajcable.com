<style type="text/css">table td {vertical-align: middle !important;}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "service : ".$service['service_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-4">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjservice/edit/'.$service['service_id']); ?>"> Edit / Upload Images </a>
						</div>
						<div class="col-md-4">
							<?php echo form_open('/gjservice/delete/'.$service['service_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $service['service_name']; ?> </h3>
						<h5> <?= $service['service_slug']; ?> </h5>
						<div class="col-md-6">

						</div>
						<div class="clearfix"></div>
						<hr/>
						<p> <?= $service['service_description']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-success">
					<table class="table table-striped">
		  				<thead>
		  					<th>service Image</th>
		  					<th>Order</th>
	  					</thead>
	  					<tbody>
	  						<?php foreach($service_image as $pi):?>
	  							<tr>
	  								<td>
	  									<img src="<?=base_url()?>/assets/images/service/<?=$pi['service_image_name']; ?>" class="img-responsive" width="150">
	  								</td>
	  								<td><?=$pi['service_image_order']?></td>
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
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Product : ".$partner['partner_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-3">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjpartner/edit/'.$partner['partner_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-3">
							<?php echo form_open('/gjpartner/delete/'.$partner['partner_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $partner_name; ?> </h3> 
						
						<div class="col-md-6"> 
							<img style="border: 5px solid gray;" height= "100%" width= "100%" src="<?php echo base_url(); echo 'assets/images/partner/'.$partner['partner_logo']; ?> ">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Client : ".$client['client_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-3">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjclient/edit/'.$client['client_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-3">
							<?php echo form_open('/gjclient/delete/'.$client['client_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3>Name :  <?= $client_name; ?> </h3> 
						<h3>Email : <?= $client_email; ?> </h3> 
						<h3>Provider : <?= $client_provider; ?> </h3> 
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


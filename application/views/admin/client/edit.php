<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit client : ".$client['client_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjclient/update'); ?>

						  <div class="col-md-7"> 

							  <div class="form-group">
								<input type="hidden" name="client_id" value="<?= $client['client_id']; ?>">
								
								<label>Client Name * : </label>
								<input type="text" class="form-control" value="<?= $client['client_name']; ?>" name="client_name" id="" placeholder="client Name">
								<label>Client Email * : </label>
								<input type="text" class="form-control" value="<?= $client['client_email']; ?>" name="client_email" id="" placeholder="client Email">
								<label>Client Provider * : </label>
								<input type="text" class="form-control" value="<?= $client['client_provider']; ?>" name="client_provider" id="" placeholder="Gmail Or Yahoo etc..">
							  </div>
							  
							  <br>
							  
							<div class="">
								<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
							</div>
						  </div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
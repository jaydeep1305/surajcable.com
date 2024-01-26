<div class="clearfix"> </div>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-9">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjclient/create'); ?>
						  <div class="form-group">
							<label>Client Name * : </label>
							<input type="text" class="form-control" name="client_name" id="" placeholder="Client Name">
						  </div>
						  <div class="form-group">
							<label>Client Email * : </label>
							<input type="text" class="form-control" name="client_email" id="" placeholder="Client Email">
						  </div>
						  <div class="form-group">
							<label>Client Provider * : </label>
							<input type="text" class="form-control" name="client_provider" id="" placeholder="Gmail OR Yahoo etc.">
						  </div>
						  
						  <button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
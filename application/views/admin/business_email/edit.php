<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Business Email : ".$business_email['email']; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjbusinessemail/update'); ?>

						  <div class="col-md-12"> 
							  <div class="form-group">
							 	 	<input type="hidden" name="business_email_id" value="<?= $business_email['business_email_id']; ?>">
									<label>Email * : </label>
									<input type="text" class="form-control" value="<?= $business_email['email']; ?>" name="email" placeholder="Email">
							  </div>
							  <div class="form-group">
									<label>Name * : </label>
									<input type="text" class="form-control" value="<?= $business_email['name']; ?>" name="name" placeholder="Name">
							  </div>
							  <div class="form-group">
									<label>Password * : </label>
									<input type="password" class="form-control" value="<?= $business_email['password']; ?>" name="password" placeholder="Password">
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